<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsPersonne;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(IsAdmin::class);
        $middleware->alias([
            "is_admin" => App\Http\Middleware\IsAdmin::class
        ]);

        $middleware->appendToGroup('group_admin' , [
            IsAdmin::class , 
            IsPersonne::class
        ]);
        $middleware->prependToGroup('group_admin' , [
            IsAdmin::class , 
            IsPersonne::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
