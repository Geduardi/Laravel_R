<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        return view('category', [
            'categories' => $this->categories,
        ]);
    }

}
