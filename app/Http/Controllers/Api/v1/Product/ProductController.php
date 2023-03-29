<?php

namespace App\Http\Controllers\Api\v1\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {
        echo 'Invoke'; exit;
    }

    public function create()
    {
        echo 'Create'; exit;
    }
}
