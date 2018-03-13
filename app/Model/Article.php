<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    public function scopePublished($query) {
        return $query->where('published_at', '<=', date('Y-m-d H:i:s'));
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getLinkAttribute() {
        return route('article', ['articleSlug' => $this->slug]);
    }
}
