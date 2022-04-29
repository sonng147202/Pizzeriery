<?php
// Controllers
Controller('Index');
Controller('Auth');
Controller('Product');

// Routes

Route::get('', function () {
    View();
});

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/get_products', [ProductController::class, 'get_products']);
Route::get('/get_price_scale', [ProductController::class, 'get_price_scale']);
Route::post('/order_product', [ProductController::class, 'order_product']);

Route::post('/testing', function($post) {
    echo 'testing...';
    print_r($post);
});