<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use Intervention\Image\Facades\Image;
use App\Repository\ServicesRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class ServicesController extends BaseController
{

       /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function __construct(ServicesRepository $servicesRepository)
      {
          parent::__construct();
          $this->servicesRepository = $servicesRepository;
        
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=$this->servicesRepository->all();
        return view('backend.services.index',compact('services'));
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
    public function store(ServiceRequest $request)
    {
        
         // return $request->file('image');
         try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $serviceImage = $request->file('image');
                 $imageExtension = $serviceImage->getClientOriginalExtension();
                 $imageName = 'service' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $serviceImageSuccess = true;
             }
 
             $service = Service::create($value);
             if ($service) {
                 if (isset($serviceImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/services', $serviceImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/services/' . $imageName)->resize(700, 540)->save();
                     session()->flash('success', 'Service Successfully Created!');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('success', 'Service could not be Create!');
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
             $edits = $this->servicesRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $services = Service::get();
                 return view('backend.services.index', compact('edits','services'));
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
 
             $service = $this->servicesRepository->findById($id);
             $oldValue = $this->servicesRepository->findById($id);
 
             if ($service) {
                 if (!empty($request->file('image'))) {
                     $serviceImage = $request->file('image');
                     $imageExtension = $serviceImage->getClientOriginalExtension();
                     $serviceImageName = 'service' . time() . '.' . strtolower($imageExtension);
                     $value['image'] = $serviceImageName;
                     $serviceImageSuccess = true;
                 }
                 $update = $service->fill($value)->save();
                 if ($update) {
                     if (isset($serviceImageSuccess)) {
                         if ($oldValue->image != null)
                             @unlink(storage_path() . 'public/uploads/images/services' . $oldValue->image);
                             Storage::putFileAs('public/uploads/images/services', $serviceImage, $serviceImageName);
                             Image::make(storage_path() . '/app/public/uploads/images/services/' . $serviceImageName)->resize(700, 540)->save();
                     }
 
                     session()->flash('success', 'Service Successfully updated!');
                     return redirect(route('services.index'));
                 } else {
                     session()->flash('error', 'Service could not be update!');
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
             $value = $this->servicesRepository->findById($id);
             $value->delete();
             session()->flash('success','Service successfully deleted!');
             return back();
 
         }catch (\Exception $e){
             $exception=$e->getMessage();
             session()->flash('error','EXCEPTION'.$exception);
             return back();
 
         } 
    }
}
