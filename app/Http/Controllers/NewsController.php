<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class NewsController extends Controller
{

//    public function all(){
//        $html = "<h1>Новости</h1>";
//    }

    public function one(Request $request, $id){
        return view('news');
    }


//    private function getById($id){
//        if (empty($this->news[$id])){
//            throw new \InvalidArgumentException('Неправильный ID', 404);
//        }
//        return $this->news[$id];
//    }
}
