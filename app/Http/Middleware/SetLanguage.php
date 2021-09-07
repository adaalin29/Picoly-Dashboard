<?php

namespace App\Http\Middleware;
use Backpack\LangFileManager\app\Models\Language;

use Closure;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
            $fallbackLang = Language::where('default', true)->first();
            if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
            $lang = Language::findByAbbr(session('locale') ?: config('app.fallback_locale'));
            if ($lang) {
                session(['locale' => $lang->abbr]);
                app()->setLocale($lang->abbr);
            }
        return $next($request);
    }
}
