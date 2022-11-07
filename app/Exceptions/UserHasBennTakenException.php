<?php

namespace App\Exceptions;

use Exception;

class UserHasBennTakenException extends Exception
{
    protected $message = 'Este usuario já existe';
    
    public function render()
    {           
        return response()->json([
            'error' => class_basename($this), 
            'message' =>$this->getMessage(),
        ], 400);
    }
}
