<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\TokenMismatchException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Handle error 419 (Page Expired / CSRF Token Mismatch)
        $exceptions->renderable(function (TokenMismatchException $e, $request) {
            // Jika request dari Livewire, return JSON response dengan status 419
            if ($request->header('X-Livewire')) {
                return response()->json([
                    'message' => 'Page expired. Please refresh the page.',
                ], 419);
            }

            // Untuk request biasa, tampilkan halaman 419
            return response()->view('errors.419', [], 419);
        });
    })->create();