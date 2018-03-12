<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function articles() {
        return $this->hasManyThrough(Article::class, Category::class)->with('category');
    }
}
