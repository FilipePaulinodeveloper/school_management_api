<?php

namespace App\Exceptions;

use Exception;

class LoginInvalidException extends Exception
{   
    protected $message = 'Email e senha não coincidem';
    
    public function render()
    {           
        return response()->json([
            'error' => class_basename($this), 
            'message' =>$this->getMessage(),
        ], 401);
    }
}
