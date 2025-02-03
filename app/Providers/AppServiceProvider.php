<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire; // <-- Agrega esta línea
use App\Http\Livewire\CartCounter; // <-- Asegúrate de que esta línea también esté presente

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::component('cart-counter', CartCounter::class); // <-- Esto debería funcionar ahora
    }
}