<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ResumeController extends Controller
{
   function page(Request $request){
       $seo = DB::table('seoproperties')->where('pageName','=','Home')->first();
       return view('pages.resume',['seo'=>$seo]);
   }
    function resumeLink(Request $request){
        return DB::table('resumes')->first();
    }
    function experienceData(Request $request){
        return DB::table('experiences')->get();
    }
    function educationData(Request $request){
        return DB::table('educations')->get();
    }
    function skillData(Request $request){
        return DB::table('skills')->get();
    }
    function languageData(Request $request){
        return DB::table('language')->get();
    }
}
