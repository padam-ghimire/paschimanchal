<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\About;
use App\Models\WhyWe;
use App\Models\Career;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Mission;
use App\Models\Project;
use App\Models\Service;
use App\Models\CaseStudy;
use App\Models\BoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\ServicesRepository;
use App\Models\Configurations\District;

class MainController extends Controller
{
    


    public function index(){

        $sliders= Slider::all();
        $services= Service::all();
        $about=About::all();
        $whyWes=WhyWe::all();
        $clients=Client::all();
        $projects=Project::all();

        return view('frontend.index',compact('sliders','about','services','whyWes','clients','projects'));
    }

    public function about(){
        $about=About::all();
        $missions=Mission::all();
        $boardMembers=BoardMember::all();
        return view('frontend.about',compact('about','boardMembers','missions'));
    }

    public function contact(){
        $districts= District::all();
        return view('frontend.contact',compact('districts'));
    }

    public function case_study(){
        $cases= CaseStudy::all();
        return view('frontend.case_study.index',compact('cases'));
    }
    public function services(){
        $services= Service::all();
        return view('frontend.services.index',compact('services'));
    }

    public function showService($id){

        $service=Service::find($id);
        return view('frontend.services.details',compact('service'));
    }

    public function news(){
        $newses= News::all();
        return view('frontend.news.index',compact('newses'));
    }

    

    public function portfolio(){
        $whyWes=WhyWe::all();
        $projects=Project::all();



        return view('frontend.portfolio',compact('whyWes','projects',));
    }

    public function jobs(){
        $jobs=Career::all();
     
        return view('frontend.careers.index',compact('jobs',));
    }

    public function showJob($id){

        $job=Career::find($id);
        return view('frontend.careers.details',compact('job'));

    }

    public function showNews($id){

        $news=News::find($id);
        return view('frontend.news.details',compact('news'));

    }

    public function showCase($id){

        $case=CaseStudy::find($id);
        return view('frontend.case_study.details',compact('case'));

    }

    public function showPortfolio($id){

        $portfolio=Project::find($id);
        return view('frontend.portfolio_details',compact('portfolio'));

    }
    public function apply($id){

        try {
            
            $value= $request->all();

             if (!empty($request->file('cv'))) {
                 $cvFile = $request->file('cv');
                 $fileExtension = $cvFile->getClientOriginalExtension();
                 $cvName = 'cv' . time() . '.' . strtolower($fileExtension);
                 $value['job_id']=$id;
                 $value['cv'] = $cvName;
                 $cvSuccess = true;
             }
          
            //  return $value;

            $applicant = Applicant::create($value);
            //  return $applicant;
             if ($applicant) {
                 if (isset($cvSuccess)) {
                     Storage::putFileAs('public/uploads/cv/', $cvFile, $cvName);
                     session()->flash('success', 'Thank you for applying');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('error', 'Application Could not be apply!');
                 return back();
             }
 
 
         } catch (\Exception $e) {
             $e = $e->getMessage();
             session()->flash('error', 'Exception : ' . $e);
             return back();
         }
    }


  



    







}
