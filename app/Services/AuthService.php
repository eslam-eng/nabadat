<?php

namespace App\Services;


use App\Exceptions\UserNotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AuthService extends BaseService
{

    public function loginWithEmailOrPhone(string $identifier, string $password) :User|Model
    {

        $identifierField = filter_var($identifier,FILTER_VALIDATE_EMAIL) ? 'email':'phone';
        if (!auth()->attempt([$identifierField=>$identifier,'password'=>$password]))
            return throw new UserNotFoundException(__('lang.login failed'));
        return User::where($identifierField, $identifier)->first();


    }
}
