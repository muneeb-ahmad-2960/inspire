<?php

use Muneeb\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Muneeb\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
