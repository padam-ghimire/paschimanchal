<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Intervention\Image\Facades\Image;
use App\Repository\ProjectsRepository;
use Illuminate\Support\Facades\Storage;
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
    public function store(ProjectRequest $request)
    {
        try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $projectImage = $request->file('image');
                 $imageExtension = $projectImage->getClientOriginalExtension();
                 $imageName = 'project' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $projectImageSuccess = true;
             }
 
             $project = Project::create($value);
             if ($project) {
                 if (isset($projectImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/projects', $projectImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/projects/' . $imageName)->resize(700, 540)->save();
                     session()->flash('success', 'Project Successfully Created!');
                     return back();
                 }
               
                
 
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
    public function update(ProjectRequest $request, $id)
    {
        // return $request;
        $id = (int)$id;
        try {
            $value= $request->all();

            $project = $this->projectsRepository->findById($id);
            $oldValue = $this->projectsRepository->findById($id);

            if ($project) {
                if (!empty($request->file('image'))) {
                    $projectImage = $request->file('image');
                    $imageExtension = $projectImage->getClientOriginalExtension();
                    $imageName = 'news' . time() . '.' . strtolower($imageExtension);
                    $value['image'] = $imageName;
                    $newsImageSuccess = true;
                }
                $update = $news->fill($value)->save();
                if ($update) {
                    if (isset($newsImageSuccess)) {
                        if ($oldValue->image != null)
                            @unlink(storage_path() . 'public/uploads/images/projects' . $oldValue->image);
                            Storage::putFileAs('public/uploads/images/projects', $projectImage, $imageName);
                            Image::make(storage_path() . '/app/public/uploads/images/projects/' . $imageName)->save();
                    }

                    session()->flash('success', 'Project Successfully updated!');
                    return redirect(route('clients.index'));
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
            $value = $this->projectsRepository->findById($id);
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
