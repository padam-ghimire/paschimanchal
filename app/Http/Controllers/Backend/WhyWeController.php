<?php

namespace App\Http\Controllers\Backend;

use App\Models\WhyWe;
use Illuminate\Http\Request;
use App\Http\Requests\WhyWeRequest;
use App\Repository\WhyWeRepository;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class WhyWeController extends BaseController
{

      //

      private $whyWeRepository;
 
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function __construct(WhyWeRepository $whyWeRepository)
      {
          parent::__construct();
          $this->whyWeRepository = $whyWeRepository;
         
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whyWes=$this->whyWeRepository->all();


       //  return $designations;
        return view('backend.why_we.index',compact('whyWes'));
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
    public function store(WhyWeRequest $request)
    {
         // return $request->file('image');
         try {
            
            $value= $request->all();
             $why_we = WhyWe::create($value);
             if ($why_we) {
            
                     session()->flash('success', 'Why we section Successfully Created!');
                     return back();
               
               
             } else {
                 session()->flash('success', 'Why we section could not be Create!');
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
             $edits = $this->whyWeRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $whyWes = WhyWe::get();
                 return view('backend.why_we.index', compact('edits','whyWes'));
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
 
             $whyWe = $this->whyWeRepository->findById($id);
          
 
             if ($whyWe) {
              
                 $update = $whyWe->fill($value)->save();
                 if ($update) {
                   
 
                     session()->flash('success', 'Why We Successfully updated!');
                     return redirect(route('whyWe.index'));
                 } else {
                     session()->flash('error', 'Why We could not be update!');
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
            $value = $this->whyWeRepository->findById($id);
            $value->delete();
            session()->flash('success','Why we section successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
