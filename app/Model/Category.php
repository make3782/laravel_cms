<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function articles() {
        return $this->hasMany(Article::class);
    }


    public function getLinkAttribute() {
        return route('category', ['categorySlug' => $this->slug]);
    }
}
