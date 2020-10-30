<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        return view('category');
    }

    public function allByCategory(){
        return view('category_news');
    }
}
