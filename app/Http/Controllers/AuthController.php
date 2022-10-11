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
            $this->authService->loginWithEmailOrPhone($request->identifier, $request->password);
            return redirect()->intended('dashboard/index')->with('toast',__('lang.sign_in'));
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
