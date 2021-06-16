<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * 
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * 
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * 
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
