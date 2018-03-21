<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemmodel extends Model
{
  public $timestamps = false;
  protected $table = 'items';
  protected $fillable = ['userid','name','price','stock'];
  protected $guarded = [];
}
