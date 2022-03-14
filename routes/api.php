<?php

Route::get('/', [IndexController::class, 'index']);

Route::post('/auth/login_user', [UserController::class, 'login_user']);

Route::get('/get_products', [ProductController::class, 'get_products']);

Route::get('/get_price_scale?', [ProductController::class, 'get_price_scale']);

Route::post('/order_product', [ProductController::class, 'order_product']);
