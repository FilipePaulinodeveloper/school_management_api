<?php

namespace App\Services;

use App\Exceptions\LoginInvalidException;
use App\Exceptions\UserHasBennTaken;
use App\Exceptions\UserHasBennTakenException;
use App\Models\User;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Str;

class AuthService
{
    public function login(String $email , string $password)
    {
        $login  = [ 
            'email' => $email,
            'password' => $password,
        ];
        if(!$token = auth()->attempt($login)){
            throw new LoginInvalidException('Email ou senha incorreta');
        }
        return [
            'access_token' => $token , 
            'token_type' => 'Bearer',

        ];
    }

    public function register(String $name, String $email, String $password)
    {
        $user = User::where('email', $email)->exists();      
        
        if(!empty($user)){
            throw new UserHasBennTakenException();
        }

        $userPassword = bcrypt($password ?? Str::random(10));

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $userPassword,
            'confirmation_token' => Str::random(60),
        ]);

        return $user;

    }
}
