<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      // dd('welcome');
      $products = Product::/*where('is_completed', false)
                          ->orderBy('created_at', 'desc')
                          ->withCount(['tasks' => function ($query) {
                            $query->where('is_completed', false);
                          }])
                          ->*/get();
      $Products='hello cloudana';

      return $projects->toJson();
    }
}
