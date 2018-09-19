<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\sittings; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class settingController extends Controller
{
    //public $successStatus = 200;
    public function update(Request $request, $id){
        try {
          $user=sittings::findOrFail($id);	
        } catch (ModelNotFoundException $modelNotFoundException) {
        	return parent::error('user not found');
        }
           $validation=validator::make($request->all(),$this->rules($id));
           if ($validation->fails()) {
           	return parent::error($validation->errors(),404);
       }
           $user=fill($request->all());
           $user->update();
           return parent::success($user);
   }

   private function rules($id=null){
   	$rules=[
     'is_notifable'=>'required',
     'is_datewithday'=>'required',
     'is_24hourssystem'=>'required',
     'is_night'=>'required',
  	'is_vibrator'=>'required',
  	'is_defaultsnooze'=>'required',
  	'eye_confort_level'=>'required',
  	'sound_level'=>'required',
  	'is_arabic'=>'required',
  	'sound_level'=>'required',

   	];
   	return $rules;
   }




    //  public function update(Request $request)
    // {
    //     $data = $request->all();     
    //      $sittings = sittings::find($data['id'])->update(['is_notifable'=>$data['is_notifable'],'is_datewithday'=>$data['is_datewithday'],'is_24hourssystem'=>$data['is_24hourssystem'],'is_night'=>$data['is_night'],'is_vibrator'=>$data['is_vibrator'],'is_defaultsnooze'=>$data['is_defaultsnooze'],'eye_confort_level'=>$data['eye_confort_level'],'sound_level'=>$data['sound_level'],'is_arabic'=>$data['is_arabic'],'sound_level'=>$data['sound_level']]);
    //    // $User->update($request->all());
    //     return response()->json(['sittings'=>$sittings], $this-> successStatus); 
    // }
}
