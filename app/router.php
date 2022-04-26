<?php
// Require Controllers
Controller('Index');
Controller('Auth');
Controller('Product');

// Routes

Route::get('/testing', function($get) {
    echo 'testing...';
    print_r($get);
});

Route::get('/', [IndexController::class, 'index']);

Route::get('/token', [IndexController::class, 'get_token']);

Route::post('/auth/login_user', [AuthController::class, 'login_user']);

Route::get('/get_products', [ProductController::class, 'get_products']);

Route::get('/get_price_scale', [ProductController::class, 'get_price_scale']);

Route::post('/order_product', [ProductController::class, 'order_product']);
