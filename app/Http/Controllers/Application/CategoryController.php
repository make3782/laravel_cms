<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Base\Controllers\ApplicationController;
use App\Model\Category;

class CategoryController extends ApplicationController
{
    //
    public function index(Category $category) {
        $articles = $category->articles()->published()->orderBy('published_at', 'desc')->paginate(5);
        return view('application.category.index', compact('articles', 'category'));
    }
}
