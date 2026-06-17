<?php

use App\Livewire\ConejoDeFuego\Categorias;
use Illuminate\Support\Facades\Route;

Route::prefix('conejo-de-fuego')->group(function () {



    Route::get('registro-categorias', Categorias::class)
        ->middleware(['can:page.view.conejo-de-fuego.registro-categorias'])
        ->name('conejo-de-fuego.registro-categorias');

});
