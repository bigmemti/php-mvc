<?php

namespace App\Controller;
use App\Core\View;

class Home{

    public function index()
    {
        // $fruits = ['apple', 'banana', 'pineapple'];

        $word = 'hello';
        return View::make('hello', ['word' => $word]);
    }
}