<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Inicio
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');


/*
|--------------------------------------------------------------------------
| Sobre mí
|--------------------------------------------------------------------------
*/

Route::view('/sobre-mi', 'sobre-mi')->name('sobre-mi');


/*
|--------------------------------------------------------------------------
| Habilidades
|--------------------------------------------------------------------------
*/

Route::view('/habilidades', 'habilidades')->name('habilidades');


/*
|--------------------------------------------------------------------------
| Proyectos
|--------------------------------------------------------------------------
*/

Route::view('/proyectos', 'proyectos.index')->name('proyectos');


/*
|--------------------------------------------------------------------------
| Proyecto individual
|--------------------------------------------------------------------------
|
| Cada proyecto utiliza un slug diferente:
|
| /proyectos/latido-ancestral
| /proyectos/plus-size
| /proyectos/rastro-cafe
| /proyectos/encanto-belleza
|
*/

Route::get('/proyectos/{slug}', function ($slug) {
    return view('proyectos.show', compact('slug'));
})->name('proyectos.show');


/*
|--------------------------------------------------------------------------
| Contacto
|--------------------------------------------------------------------------
*/

Route::view('/contacto', 'contacto')->name('contacto');