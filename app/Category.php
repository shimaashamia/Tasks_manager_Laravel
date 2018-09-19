<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
	 use SoftDeletes;
     protected $table ='categories';
    protected $primaryKey ='id';
     protected $fillable = ['user_id', 'title', 'icon_id','color_id'];
     protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
