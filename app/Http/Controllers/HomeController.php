<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\WhyWe;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Project;
use App\Models\Service;
use App\Models\BoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services= count(Service::all());
        $queries= count(Contact::all());


        
        $news= count(News::all());
        $sliders= count(Slider::all());
        $missions= count(Mission::all());
        $projects= count(Project::all());
        $clients= count(Client::all());
        $whyWes= count(WhyWe::all());
        $boardMembers= count(BoardMember::all());
        // return $news;

        return view('backend.dashboard',compact('services','queries','news','sliders','missions','projects','clients','whyWes','boardMembers'));
    }
}
