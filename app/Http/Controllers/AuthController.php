<?php

namespace App\Http\Controllers;

use App\Exceptions\UserNotFoundException;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService)
    {
    }

    public function index()
    {
        return view('authentication.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $this->authService->loginWithEmailOrPhone(identifier: $request->identifier, password: $request->password);
            $toast = [
                'type'=>'success',
                'message'=>__('lang.sign_in'),
                'title'=>'ok'
            ];
            return redirect()->route('/')->with('toast',$toast);
        }catch (UserNotFoundException $e) {
           return redirect()->route('login')->withSuccess($e->getMessage());
        }

    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
