<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
// routes/web.php

Route::get('/', [ProductController::class, 'index']);
Route::get('/produk/tape-cikasungka', [CatalogController::class, 'show'])->name('product.show');