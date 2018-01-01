<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    public function get() {
    	$products=Category::all();
    	return response($products);
    }
}
