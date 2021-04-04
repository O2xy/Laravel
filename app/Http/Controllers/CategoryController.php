<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category', ['CategoryList' => $this->categoryList]);
    }

    public function show(int $id)
    {
        return "<h2>Отобразить категорию с ID={$id}</h2>";
    }
}
