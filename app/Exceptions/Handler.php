<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\Debug\Exception\FlattenException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }



    // stap 1 van de tutorial: voeg deze public function toe aan de handler

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {

        $exception = FlattenException::create($e);
        $statusCode = $exception->getStatusCode($exception);

        if ($statusCode === 404 or $statusCode === 500 and app()->environment() == 'production') {
            return response()->view('errors.' . $statusCode, [], $statusCode);
        }
    }






}
