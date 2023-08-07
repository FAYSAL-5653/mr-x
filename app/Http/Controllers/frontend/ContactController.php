<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page(Request $request)
    {$seo = DB::table('seoproperties')->where('pageName', '=', 'contact')->first();

        return view('frontend.pages.contact', ['seo' => $seo]);
    }

    public function contactRequest(Request $request)
    {
        return DB::table('contact')->insert($request->input());
    }
}
