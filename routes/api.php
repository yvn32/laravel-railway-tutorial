<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

// esto venía originalmente, lo comento por seguir tutorial
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/students', [studentController::class, 'index']);

Route::get('/students/{id}', [studentController::class, 'show']);

Route::post('/students', [studentController::class, 'store']);

Route::delete('/students/{id}', [studentController::class, 'destroy']);

Route::put('/students/{id}', [studentController::class, 'update']);

Route::patch('/students/{id}', [studentController::class, 'updatePartial']);


// old get
// Route::get('/students', function () {
//     return 'Obteniendo lista de estudiantes';
// });

// old get por id
// Route::get('/students/{id}', function () {
//     return 'Obteniendo un estudiante';
// });

// old post
// Route::post('/students', function () {
//     return 'Creando estudiantes';
// });

// old delete
// Route::delete('/students/{id}', function () {
//     return 'Eliminando estudiante';
// });

// old put
// Route::put('/students/{id}', function () {
//     return 'Actualizando estudiante';
// });