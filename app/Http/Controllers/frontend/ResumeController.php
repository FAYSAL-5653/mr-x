<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(Request $request)
    {$seo = DB::table('seoproperties')->where('pageName', '=', 'resume')->first();

        return view('frontend.pages.resume', ['seo' => $seo]);
    }
    public function resumeLink(Request $request)
    {
        return DB::table('resumes')->first();
    }
    public function experiencesData(Request $request)
    {
        return DB::table('expriences')->get();
    }
    public function educationData(Request $request)
    {
        return DB::table('educations')->get();
    }
    public function skillsData(Request $request)
    {
        return DB::table('skiles')->get();
    }
    public function languageData(Request $request)
    {
        return DB::table('languages')->get();
    }
}
