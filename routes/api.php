<?php

Route::get('/', [IndexController::class, 'index']);

Route::get('/get_products', [IndexController::class, 'get_products']);

Route::post('/auth/login_user', [UserController::class, 'login_user']);