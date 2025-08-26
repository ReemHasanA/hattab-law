<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [\App\Http\Middleware\SetLocale::class,
        ]);
        $middleware->redirectUsersTo('/admin/dashboard'); // logined user will be redirected from login to admin dashboard 
    })

    ->withExceptions(function (Exceptions $exceptions) {
        // Customize how Laravel handles exceptions
        $exceptions->render(function (NotFoundHttpException $e) {
            return response()->json([
                'message' => 'Page not found.',
            ], 404);
        });

        // Prevent specific exceptions from being reported
        $exceptions->dontReport(NotFoundHttpException::class);
    })
    ->create();
