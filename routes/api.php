<?php

Route::get('/', [IndexController::class, 'index']);

Route::get('/get_products', [IndexController::class, 'get_products']);
