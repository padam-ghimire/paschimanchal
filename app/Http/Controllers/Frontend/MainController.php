<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Slider;
use App\Models\BoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    


    public function index(){

        $sliders= Slider::all();

        // return $sliders;
        $about=About::all();

        return view('frontend.index',compact('sliders','about'));
    }

    public function about(){
        $about=About::all();
        $boardMembers=BoardMember::all();
        return view('frontend.about',compact('about','boardMembers'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function case_study(){
        return view('frontend.case_study.index');
    }
    public function services(){
        return view('frontend.services.index');
    }

    public function news(){
        return view('frontend.news.index');
    }

    public function portfolio(){
        return view('frontend.portfolio');
    }




    







}
