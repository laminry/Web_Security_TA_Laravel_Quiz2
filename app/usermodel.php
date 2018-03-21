<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermodel extends Model
{
  public $timestamps = false;
  protected $table = 'users';
  protected $fillable = ['name','email','password'];
  protected $guarded = [];

}
