<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Config;
use App;
use App\Model\Language;

class Locale
{
    /**
     * Handle an incoming request.
     * 设置本地化
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = session('language', Config::get('app.locale')); // en/zh-cn
        $this->setLocale($language);

        // 设置session
        session(['current_lang' => Language::whereCode($language)->firstOrFail()]);
        return $next($request);
    }

    private function setLocale($language_name) {
        App::setLocale($language_name);
    }
}
