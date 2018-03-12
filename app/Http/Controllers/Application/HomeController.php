<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Base\Controllers\ApplicationController;

class HomeController extends ApplicationController
{
    //
    // 首页
    public function index() {
        $articles = session('current_lang')->articles()->published()->orderBy('published_at', 'desc')->paginate(5);
        return view('application.home.index', compact('articles'));
    }
}
