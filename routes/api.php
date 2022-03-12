<?php

Route::get('/', [IndexController::class, 'index']);

Route::post('/auth/login_user', [UserController::class, 'login_user']);

Route::get('/get_products', [ProductController::class, 'get_products']);
