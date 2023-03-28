<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
class LanguageController extends Controller
{
    public function googleTranslateChange(Request $request)
    {
        App::setLocale($request->lang);

        Session::put('locale',$request->lang);

        return redirect()->back();
    }
}
