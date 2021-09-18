<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\RegisterAPIRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Utils\AppUtils;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class RegisterController extends AppBaseController

{
    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(RegisterAPIRequest $request) 
    { 
        try{
            $user = DB::table('mst_user')
                    ->where('email','=',$request['email'])
                    ->first();
            if($user){
                return $this->sendError('Email exist !', \Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR);
            }
                DB::transaction(function () use ($request){
                //insert table mst_user
                $userId = DB::table('mst_user')->insertGetId([
                    'password' => Hash::make($request['password']),
                    'phone' => '',
                    'email' => strtolower($request['email']),
                    'auth_flg' =>  AppUtils::AUTH_FLAG_USER,
                    'state_flg' =>  AppUtils::STATE_FLAG_REGISTRATION,
                    'created_at' => Carbon::now()
                ]);
            });
            return $this->sendResponse('', 'Register Success');
        }
        catch (\Exception $ex) {
            Log::error('RegisterController@register:' . $ex->getMessage().$ex->getTraceAsString());
            return $this->sendError('Error Register', \Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
