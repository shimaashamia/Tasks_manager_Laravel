<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


   public function success($data,$status=200)
   {
return response()->json([
'status'=>'success',
'data'=>$data,
'errors'=>0],
$status)->header('Content_type','application/json');
   } 

   public function error($data,$status=200)
   {
   	if($data instanceof MassageBag)
   		$data=$data->first();
   	$response=response()->json([
   		'status'=>'error',
   	     'data'=>$data,
   	     'error'=>1],
   	     $status)->header('Content_type','application/json');
   	return $response;

   }
}
