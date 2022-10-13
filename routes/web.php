<?php

use Illuminate\Support\Facades\Route;
Require_once('includes/auth.php');
Require_once('includes/product.php');

Route::group
([
    'middleware'=>'auth',

], function() {
    require_once('includes/product.php');
});
