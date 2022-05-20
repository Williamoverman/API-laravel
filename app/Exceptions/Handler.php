<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ParseError;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register() {

        $this->renderable(function (NotFoundHttpException $e, $request) {
            return response()->json([
                'error' => 'NotFoundHttpException',
                'message' => 'Route not found',
                'response_code' => 404
            ], 404);
        });
        
        $this->renderable(function (ParseError $e, $request) {
            return response()->json([
                'error' => 'ParseError',
                'message' => 'Trying to delete a product that doesnt exist',
                'response_code' => 500
            ], 500);
        });
        
        $this->renderable(function (ModuleNotFoundException $e, $request) {
            return response()->json([
                'error' => 'ModuleNotFoundException',
                'message' => 'Module not found',
                'response_code' => 404
            ], 404);
        });
    }

}

