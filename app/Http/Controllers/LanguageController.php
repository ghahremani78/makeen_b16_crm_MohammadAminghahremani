<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $locale = $request->input('lang');

        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
            return response()->json(['message' => 'Language updated successfully', 'locale' => $locale]);
        }

        return response()->json(['error' => 'Invalid locale'], 400);
    }
}
