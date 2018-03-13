<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Model\Article;

class ArticleController extends ApplicationController
{
    //
    public function index(Article $article) {
        return view('application.article.index', compact('article'));
    }
}
