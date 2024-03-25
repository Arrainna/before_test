<?php

use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;


Route::resource("/customers",crudController::class); //customers
