<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasks extends Model
{
    //
     use SoftDeletes;
     protected $table ='tasks';
    protected $primaryKey ='id';
     protected $fillable = ['user_id', 'category_id', 'title','time','date','descriptions','new_time','tone_id','repitition_id','repitition_times_number','file','is_active','delay_duration_id','priority_level','is_vibrator'];
     protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
