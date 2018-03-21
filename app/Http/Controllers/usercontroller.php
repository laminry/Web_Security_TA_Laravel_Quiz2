<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usermodel;

class usercontroller extends Controller
{
    public function __construct(UserModel $users){
		$this->users = $users;
	}

public function all(){
		$allusers = $this->users->all();
		return $allusers;
    }
    
  public function register(Request $request){
		$users = [
			"name" => $request->name,
			"email" => $request->email,
			"password" => md5($request->password)
		];
		$this->users->create($users);
		return "Created";
	}

  	public function search($id){
  		$users = $this->users->find($id);
        echo $users;
}

    public function update(Request $request, $id){
		   $users = [
    		"name" => $request->name,
    		"email" => $request->email,
    		"password" => md5($request->password)
    		  ];
		   $this->users->where('userid', $id)->update($users);
       return "Updated";
	}

  public function delete($id){
        $users = $this->users->where('userid',$id)->delete();
        return "Deleted";
 }



}
