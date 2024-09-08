<?php

use App\Rest\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Lomkit\Rest\Facades\Rest;

Rest::resource('products', ProductsController::class);