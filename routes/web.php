<?php

//enrutamiento dinámico basico de laravel

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController; //importo el controlador

Route::get('/', [PaginaController::class, 'inicio']); //defino la ruta raiz y apunto al metodo del controlador

Route::get('/misservicios', [PaginaController::class, 'misServicios']);

Route::get('/misservicioscategoria/{categoria}/{tipo}', [PaginaController::class, 'misServiciosCategoria']);

Route::get('/acercade', [PaginaController::class, 'acercaDe']); //defino la ruta acerca de y apunto al metodo del controlador

Route::get('/contactos', [PaginaController::class, 'contactos']); //defino la ruta contactos y apunto al metodo del controlador