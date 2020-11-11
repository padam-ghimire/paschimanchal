<?php

namespace App\Http\Controllers\Backend;

use App\Models\BoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;
use App\Http\Requests\BoardMemberRequest;
use App\Repository\BoardMemberRepository;
use App\Models\Configurations\Designation;

class BoardMemberController extends BaseController
{

     //

     private $boardMemberRepository;

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct(BoardMemberRepository $boardMemberRepository)
     {
         parent::__construct();
         $this->boardMemberRepository = $boardMemberRepository;
     }
 
     public function index()
     {
         $boardMembers=$this->boardMemberRepository->all();
         $designations= Designation::all();

        //  return $designations;
         return view('backend.board_members.index',compact('boardMembers','designations'));
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
     public function store(BoardMemberRequest $request)
     {
 
         // return $request->file('image');
         try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $memberImage = $request->file('image');
                 $imageExtension = $memberImage->getClientOriginalExtension();
                 $imageName = 'board_member' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $memberImageSuccess = true;
             }
 
             $boardMember = BoardMember::create($value);
             if ($boardMember) {
                 if (isset($memberImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/board_member', $memberImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/board_member/' . $imageName)->resize(700, 540)->save();
                     session()->flash('success', 'Board Member Successfully Created!');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('success', 'Board member could not be Create!');
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
             $edits = $this->boardMemberRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $boardMembers = BoardMember::get();
                 return view('backend.board_members.index', compact('edits','boardMembers'));
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
 
             $boardMember = $this->boardMemberRepository->findById($id);
             $oldValue = $this->boardMemberRepository->findById($id);
 
             if ($slider) {
                 if (!empty($request->file('image'))) {
                     $memberImage = $request->file('image');
                     $imageExtension = $memberImage->getClientOriginalExtension();
                     $memberImageName = 'board_member' . time() . '.' . strtolower($imageExtension);
                     $value['image'] = $memberImageName;
                     $memberImageSuccess = true;
                 }
                 // $slider = new Slider();
                 $update = $slider->fill($value)->save();
                 if ($update) {
                     if (isset($memberImageSuccess)) {
                         if ($oldValue->image != null)
                             @unlink(storage_path() . 'public/uploads/images/board_member' . $oldValue->image);
                             Storage::putFileAs('public/uploads/images/board_member', $memberImage, $memberImageName);
                             Image::make(storage_path() . '/app/public/uploads/images/board_member/' . $memberImageName)->resize(700, 540)->save();
                     }
 
                     session()->flash('success', 'Board member Successfully updated!');
                     return redirect(route('slider.index'));
                 } else {
                     session()->flash('error', 'Team Member could not be update!');
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
             $value = $this->sliderRepository->findById($id);
             $value->delete();
             session()->flash('success','Slider successfully deleted!');
             return back();
 
         }catch (\Exception $e){
             $exception=$e->getMessage();
             session()->flash('error','EXCEPTION'.$exception);
             return back();
 
         }
     }
 
    
}
