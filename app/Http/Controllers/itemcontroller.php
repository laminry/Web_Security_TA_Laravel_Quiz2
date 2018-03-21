<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemmodel;
use Exception;

class itemcontroller extends Controller
{
    public function __construct(ItemModel $items){
		$this->items = $items;
    }
    
  public function register(Request $request){
		try {
            $items = [
            "userid" => $request->userid,
            "name" => $request->name,
			"price" => $request->price,
			"stock" => $request->stock
		];
		$this->items->create($items);
		return "Created";
        } catch(Exception $ex) {
            return response($ex, 401);
        }
	}

    public function all(){
            $allitems = $this->items->all();
            return $allitems;
        }
    
    public function delete($id){
        $item = $this->items->where('itemid',$id)->delete();
        return "Deleted";
 }

     public function update(Request $request, $id){
		   $items = [
    		"name" => $request->name,
    		"price" => $request->price,
    		"stock" => $request->stock
    		  ];
		   $this->items->where('itemid', $id)->update($items);
       return "Updated";
	}

}