<?php

use App\Livewire\ConejoDeFuego\Categorias;
use App\Livewire\ConejoDeFuego\Productos;
use App\Livewire\ConejoDeFuego\Mesas;
use Illuminate\Support\Facades\Route;

Route::prefix('conejo-de-fuego')->group(function () {

    Route::get('registro-categorias', Categorias::class)
        ->middleware(['can:page.view.conejo-de-fuego.registro-categorias'])
        ->name('conejo-de-fuego.registro-categorias');

    Route::get('registro-comidas', Productos::class)
        ->middleware(['can:page.view.conejo-de-fuego.registro-comidas'])
        ->name('conejo-de-fuego.registro-comidas');
    Route::get('admin-mesas', Mesas::class)
        ->middleware(['can:page.view.conejo-de-fuego.admin-mesas'])
        ->name('conejo-de-fuego.admin-mesas');

});
