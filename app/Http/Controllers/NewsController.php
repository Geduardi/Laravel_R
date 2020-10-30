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

    public function one(string $id)
    {
        if (empty($this->news[$id])) {
            return redirect('category');
        }

        $news = $this->news[$id];

        return view('news', compact('news'));
    }


    public function allByCategory(string $categoryId)
    {
        if (empty($this->categories[$categoryId])) {
            return  redirect('category');
        }

        $category = $this->categories[$categoryId];

        $news = array_filter($this->news, function ($item) use ($categoryId) {
            return $item['categoryId'] == $categoryId;
        });

        return view('category_news', compact('news', 'category'));
    }

//    private function getById($id){
//        if (empty($this->news[$id])){
//            throw new \InvalidArgumentException('Неправильный ID', 404);
//        }
//        return $this->news[$id];
//    }
}
