<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;







Route::get('init', function () {

    $models = [
        
        'Brand',
        'Category',
        'User',

        'Product',
        'Article',
        'ContactUs',
        'Feedback',
        'UserDetail',
        'Cart',
        'Order',

        'Payment',
        'OrderDetail',
        'Shipment',
        'Review',
        'Inventory',
        'ProductDetail',
        'CartItem',
    ];

    foreach ($models as $model) {
        Artisan::call('make:model', [
            'name' => $model,
            '-a' => true 
        ]);

        
        sleep(1);
    }

});

