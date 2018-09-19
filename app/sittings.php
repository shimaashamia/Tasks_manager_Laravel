<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\sittings as Authenticatable;

class sittings extends Model
{
	

	 protected $table ='sittings';
    protected $primaryKey ='id';
     protected $fillable = [
        'is_notifable', 'is_datewithday', 'is_24hourssystem','is_night','user_id','is_vibrator','is_defaultsnooze','	eye_confort_level','sound_level','is_arabic'];
     protected $dates = ['created_at', 'updated_at'];
}
