<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::/*where('is_completed', false)
                          ->orderBy('created_at', 'desc')
                          ->withCount(['tasks' => function ($query) {
                            $query->where('is_completed', false);
                          }])
                          ->*/get();

      return $projects->toJson();
    }
}
