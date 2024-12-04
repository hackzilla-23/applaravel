<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsPersonne;
use Illuminate\Foundation\Application;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;
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
            "Is_Admin" => App\Http\Middleware\IsAdmin::class,
        ]);

        $middleware->alias([
            "Is_Personne" => App\Http\Middleware\IsPersonne::class,
        ]);

        // $middleware->appendToGroup('Is_Admin', [
        //     IsAdmin::class,
        //     IsPersonne::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
