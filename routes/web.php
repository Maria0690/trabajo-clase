<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Route::get('/', homeController::class);*/
Route::get('/', homeController::class);

route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create',[CursoController::class, 'create']);

route::get('cursos/{curso}', [CursoController::class, 'show']);
/*
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {

    if ($categoria)
        {return("bienvenido al curso $curso, de la categoria $categoria");
     } else {
         return "bienvenido al curso: $curso";
     }

    });*/
