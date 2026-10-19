<?php

use App\Http\Controllers\Api\ParticipacionController;
use App\Http\Controllers\Api\ActaController;
use Illuminate\Support\Facades\Route;

Route::controller(ParticipacionController::class)->group(function(){
    Route::get('/participacion/nacional', 'nacional');
    Route::get('/participacion/extranjero', 'extranjero');
    Route::get('/participacion/departamento/{nombre}', 'departamento');
    Route::get('/participacion/provincia/{nombre}', 'provincia');
});

Route::controller(ActaController::class)->group(function(){
    Route::get('/actas/numero/{id}', 'numero');
    Route::get('/actas/ubigeo/peru', 'ubi_peru');
    Route::get('/actas/ubigeo/extranjero', 'ubi_extranjero');
    //Nombres?
    Route::get('/actas/ubigeo/provinciaN/{nombre}', 'ubi_provinciaN');
    Route::get('/actas/ubigeo/distritoN/{nombre}', 'ubi_distritoN');
    Route::get('/actas/ubigeo/localesVotacionN/{nombre1}/{nombre2}', 'ubi_loc_votN');
    Route::get('/actas/ubigeo/gruposVotacionN/{nombre1}/{nombre2}/{nombre3}', 'ubi_grupos_votN');
    Route::get('/actas/ubigeo/grupoVotacionN/{nombre}', 'ubi_grupo_votN');
    //Id?
    Route::get('/actas/ubigeo/provincia/{id}', 'ubi_provincia');
    Route::get('/actas/ubigeo/distrito/{id}', 'ubi_distrito');
    Route::get('/actas/ubigeo/localesVotacion/{id}', 'ubi_loc_vot');
    Route::get('/actas/ubigeo/gruposVotacion/{id}', 'ubi_grupos_vot');
    Route::get('/actas/ubigeo/grupoVotacion/{id}', 'ubi_grupo_vot');
});