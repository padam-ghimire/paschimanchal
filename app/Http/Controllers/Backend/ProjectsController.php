<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\ProjectsRepository;
use App\Http\Controllers\BaseController;

class ProjectsController extends BaseController
{


      //

      private $projectsRepository;
 
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function __construct(ProjectsRepository $projectsRepository)
      {
          parent::__construct();
          $this->projectsRepository = $projectsRepository;
         
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=$this->projectsRepository->all();
        $clients=Client::all();

    
        return view('backend.projects.index',compact('projects','clients'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image');
        try {
            
            $value= $request->all();
             $project = Project::create($value);
             if ($project) {
            
                     session()->flash('success', 'Project Successfully Created!');
                     return back();
               
               
             } else {
                 session()->flash('success', 'Project could not be Create!');
                 return back();
             }
 
 
         } catch (\Exception $e) {
             $e = $e->getMessage();
             session()->flash('error', 'Exception : ' . $e);
             return back();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
           $clients=Client::all();
            $id = (int)$id;
            $edits = $this->projectsRepository->findById($id);
            if ($edits->count() > 0)
            {
                $projects = Project::get();
                return view('backend.projects.index', compact('edits','projects','clients'));
            }
            else{
                session()->flash('error','Id could not be obtained!');
                return back();
            }

        }catch (\Exception $e) {
            $exception = $e->getMessage();
            session()->flash('error', 'EXCEPTION :' . $exception);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = (int)$id;
         try {
             $value= $request->all();
 
             $project = $this->projectsRepository->findById($id);
          
 
             if ($project) {
              
                 $update = $project->fill($value)->save();
                 if ($update) {
                   
 
                     session()->flash('success', 'Project Successfully updated!');
                     return redirect(route('projects.index'));
                 } else {
                     session()->flash('error', 'Project could not be update!');
                     return back();
                 }
             }
 
         } catch (\Exception $e) {
             $exception = $e->getMessage();
             session()->flash('error', 'EXCEPTION:' . $exception);
             return back();
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        $id=(int)$id;
        try{
            $value = $this->projectRepository->findById($id);
            $value->delete();
            session()->flash('success','Project successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
