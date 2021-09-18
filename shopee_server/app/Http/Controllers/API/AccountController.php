<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\LoginAPIRequest;
use App\Http\Utils\AppUtils;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class AccountController extends AppBaseController
{

    public function login (LoginAPIRequest $request)
    {
        $data = $request->all();
        try {
            $user = User::where([
                'email' => $data['email'],
                'state_flg' => AppUtils::STATE_FLAG_VALID
            ])->first();
            if (isset($user)) {
                $userInfo = User::where('id', $user->id)->first();
                if (Hash::check($data['password'], $user->password)) {
                    $tokenResult = $user->createToken($user->login_id);
                    $result['token'] = $tokenResult;
                    $result['user'] = $userInfo;
                    return $this->sendResponse($result ,"Login Success");
                } else {
                    return $this->sendFail('Password incorrect');
                }
            } else {
                return $this->sendFail('Email incorrect');
            }
        } catch (\Exception $ex) {
            Log::error('AccountController@login:' . $ex->getMessage().$ex->getTraceAsString());
            return $this->sendError('Error Login !', \Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function logout (Request $request)
    {
        try {
            $user = $request->user();
            if ($user) {
                $user->remember_token = null;
                $user->save();
                $request->user()->token()->revoke();
            }
            return $this->sendSuccess('Logout success !');
        } catch (\Exception $ex) {
            Log::error('LoginController@logout:' . $ex->getMessage().$ex->getTraceAsString());
            return $this->sendError('Logout failed !', \Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}