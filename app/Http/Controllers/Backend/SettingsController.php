<?php

namespace App\Http\Controllers\Backend;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use Intervention\Image\Facades\Image;
use App\Repository\SettingsRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class SettingsController extends BaseController
{

     //

     private $settingsRepository;
   

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct(SettingsRepository $settingsRepository)
     {
         parent::__construct();
         $this->settingsRepository = $settingsRepository;

     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=$this->settingsRepository->all();
        

        //  return $designations;
         return view('backend.settings.index',compact('settings'));
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
    public function store(SettingRequest $request)
    {
        //
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
             $edits = $this->settingsRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $settings = Settings::get();
                 return view('backend.settings.index', compact('edits','settings'));
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
    public function update(SettingRequest $request, $id)
    {
         // return $request;
         $id = (int)$id;
         try {
             $value= $request->all();
 
             $setting = $this->settingsRepository->findById($id);
             $oldValue = $this->settingsRepository->findById($id);
 
             if ($setting) {
                 if (!empty($request->file('logo'))) {
                     $logoImage = $request->file('logo');
                     $imageExtension = $logoImage->getClientOriginalExtension();
                     $logoImageName = 'logo' . time() . '.' . strtolower($imageExtension);
                     $value['logo'] = $logoImageName;
                     $logoImageSuccess = true;
                 }
                 $update = $setting->fill($value)->save();
                 if ($update) {
                     if (isset($logoImageSuccess)) {
                         if ($oldValue->logo != null)
                             @unlink(storage_path() . 'public/frontend/img/' . $oldValue->logo);
                             Storage::putFileAs('public/frontend/img/', $logoImage, $logoImageName);
                             Image::make(storage_path() . '/app/public/frontend/img/' . $logoImageName)->save();
                     }
 
                     session()->flash('success', 'Setting Successfully updated!');
                     return redirect(route('settings.index'));
                 } else {
                     session()->flash('error', 'Settings could not be update!');
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
        //
    }
}
