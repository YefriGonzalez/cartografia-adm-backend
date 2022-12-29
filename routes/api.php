<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AsignacionPermisoController;
use App\Http\Controllers\AsignacionRolController;
use App\Http\Controllers\AsignacionGrupoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[UsuarioController::class,'login']);
Route::post('/registro',[UsuarioController::class,'register']);
Route::post('/asignarPermiso',[AsignacionPermisoController::class,'asignarPermisoRol']);
Route::post('/asignarRol',[AsignacionRolController::class,'asignarRolGrupo']);
Route::post('/asignarGrupo',[AsignacionGrupoController::class,'asignarGrupoUsuario']);
Route::post('/rol',[RoleController::class,'createRole']);
Route::get('/roles',[RoleController::class,'obtenerRoles']);
Route::get('/rol/{id}',[RoleController::class,'desactivarRol']);
Route::post('/rol/edit',[RoleController::class,'modificarRol']);
Route::post('/permiso',[PermisoController::class,'createPermiso']);
Route::post('/grupo',[GrupoController::class,'createGroup']);


Route::group(['middleware' => ['auth:sanctum','ability:admin']], function() {
    
});

Route::post('/logout',[UsuarioController::class,'logout'])->middleware('auth:sanctum');


