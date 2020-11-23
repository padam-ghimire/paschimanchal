<?php

namespace App\Http\Controllers\Backend;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MissionRequest;
use App\Repository\MissionRepository;
use App\Http\Controllers\BaseController;

class MissionController extends BaseController
{


      //

      private $missionRepository;
 
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function __construct(MissionRepository $missionRepository)
      {
          parent::__construct();
          $this->missionRepository = $missionRepository;
         
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions=$this->missionRepository->all();
        return view('backend.mission.index',compact('missions'));
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
    public function store(MissionRequest $request)
    {
          // return $request->file('image');
          try {
            
            $value= $request->all();
             $mission = Mission::create($value);
             if ($mission) {
            
                     session()->flash('success', 'Mission Successfully Created!');
                     return back();
               
               
             } else {
                 session()->flash('error', 'Mission could not be Create!');
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
           
            $id = (int)$id;
            $edits = $this->missionRepository->findById($id);
            if ($edits->count() > 0)
            {
                $missions = Mission::get();
                return view('backend.mission.index', compact('edits','missions'));
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
        // return $request;
        $id = (int)$id;
        try {
            $value= $request->all();

            $mission = $this->missionRepository->findById($id);
         

            if ($mission) {
             
                $update = $mission->fill($value)->save();
                if ($update) {
                  

                    session()->flash('success', 'Mission Successfully updated!');
                    return redirect(route('mission.index'));
                } else {
                    session()->flash('error', 'Mission could not be update!');
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
            $value = $this->missionRepository->findById($id);
            $value->delete();
            session()->flash('success','Mission successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
