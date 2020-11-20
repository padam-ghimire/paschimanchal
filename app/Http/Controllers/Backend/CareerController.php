<?php

namespace App\Http\Controllers\Backend;

use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Repository\CareerRepository;
use App\Http\Controllers\BaseController;

class CareerController extends BaseController
{
      //

      private $careerRepository;

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function __construct(CareerRepository $careerRepository)
      {
          parent::__construct();
          $this->careerRepository = $careerRepository;
       
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=$this->careerRepository->all();
    
        return view('backend.careers.index',compact('jobs'));
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
    public function store(CareerRequest $request)
    {
        // return $request->file('image');
        try {
            
            $value= $request->all();
             $job = Career::create($value);
             if ($job) {
            
                     session()->flash('success', 'Job  Successfully Created!');
                     return back();
               
               
             } else {
                 session()->flash('success', 'Job could not be Create!');
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
             $edits = $this->careerRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $jobs = Career::get();
                 return view('backend.careers.index', compact('edits','jobs'));
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
    public function update(CareerRequest $request, $id)
    {
        $id = (int)$id;
        try {
            $value= $request->all();

            $job = $this->careerRepository->findById($id);
         

            if ($job) {
             
                $update = $job->fill($value)->save();
                if ($update) {
                  

                    session()->flash('success', 'Job Successfully updated!');
                    return redirect(route('careers.index'));
                } else {
                    session()->flash('error', 'Job could not be update!');
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
            $value = $this->careerRepository->findById($id);
            $value->delete();
            session()->flash('success','Job successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
