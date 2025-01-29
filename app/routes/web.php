<?php

use App\Http\Controllers\CursoController;
use App\Mail\contactanosMailable;  // Asegúrate de que esté bien importada
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Mail;

Route::get('/', homeController::class);


Route::controller(CursoController::class)
->group(function(){
    Route::get('cursos', "index");

    Route::get("cursos/create", "create");
    
    Route::get('cursos/{curso}', "show");
});



Route::get('contactanos', function () {
    Mail::to('aitor.ruiz@fake.es')  // Usa la dirección de prueba de Mailtrap
        ->send(new ContactanosMailable());
    return 'Correo de prueba enviado a Mailtrap';
});