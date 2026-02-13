<?php

// ============================================================
// SERVICE PROVIDER (BINDING)
// Este archivo YA EXISTE en Laravel, solo reemplaza su contenido.
// Ubicación: app/Providers/AppServiceProvider.php
// ============================================================

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\EstudianteInterface;
use App\Repositories\Eloquent\EstudianteRepositorio;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EstudianteInterface::class, EstudianteRepositorio::class);
    }

    public function boot(): void
    {
        //
    }
}
