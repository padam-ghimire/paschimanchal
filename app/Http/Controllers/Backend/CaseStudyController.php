<?php

namespace App\Http\Controllers\Backend;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use App\Http\Requests\CaseRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Repository\CaseStudyRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class CaseStudyController extends BaseController
{

     //

     private $caseRepository;

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct(CaseStudyRepository $caseRepository)
     {
         parent::__construct();
         $this->caseRepository = $caseRepository;
      
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases=$this->caseRepository->all();
    
        return view('backend.case_study.index',compact('cases'));
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
    public function store(CaseRequest $request)
    {
        try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $caseImage = $request->file('image');
                 $imageExtension = $caseImage->getClientOriginalExtension();
                 $imageName = 'news' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $caseImageSuccess = true;
             }
 
             $case = CaseStudy::create($value);
             if ($case) {
                 if (isset($caseImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/case_study', $caseImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/case_study' . $imageName)->save();
                     session()->flash('success', 'Case Study Successfully Created!');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('success', 'Study could not be Create!');
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
            $edits = $this->caseRepository->findById($id);
            if ($edits->count() > 0)
            {
                $cases = CaseStudy::get();
                return view('backend.case_study.index', compact('edits','cases'));
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
 
             $case = $this->caseRepository->findById($id);
             $oldValue = $this->caseRepository->findById($id);
 
             if ($case) {
                 if (!empty($request->file('image'))) {
                     $caseImage = $request->file('image');
                     $imageExtension = $caseImage->getClientOriginalExtension();
                     $imageName = 'news' . time() . '.' . strtolower($imageExtension);
                     $value['image'] = $imageName;
                     $caseImageSuccess = true;
                 }
                 $update = $case->fill($value)->save();
                 if ($update) {
                     if (isset($caseImageSuccess)) {
                         if ($oldValue->image != null)
                             @unlink(storage_path() . 'public/uploads/images/case_study/' . $oldValue->image);
                             Storage::putFileAs('public/uploads/images/case_study', $caseImage, $imageName);
                             Image::make(storage_path() . '/app/public/uploads/images/case_study/' . $imageName)->save();
                     }
 
                     session()->flash('success', 'Case Study Successfully updated!');
                     return redirect(route('case_study.index'));
                 } else {
                     session()->flash('error', 'Case Study could not be update!');
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
            $value = $this->caseRepository->findById($id);
            $value->delete();
            session()->flash('success','Case Study successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
