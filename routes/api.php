<?php

use App\Http\Controllers\Address\AddressController;
use Illuminate\Support\Facades\Route;

Route::apiResource('addresses', AddressController::class);

Route::get('cep/{cep}', [AddressController::class, 'buscarCep']);
