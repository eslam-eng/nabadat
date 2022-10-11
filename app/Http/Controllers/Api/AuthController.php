<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService)
    {
    }

    public function login(LoginRequest $request)
    {

        try {
            $user = $this->authService->loginWithEmailOrPhone($request->identifier, $request->password);
            $data = [
                'token'=>$user->getToken(),
                'token_type'=>'Bearer',
                'user'=>$user
            ];
            return apiResponse($data,__('lang.login success'));
        }catch (UserNotFoundException $e) {
            return apiResponse($e->getMessage(), 'Unauthorized',$e->getCode());
        }

    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return apiResponse(message: __('lang.login success'));
    }
}
