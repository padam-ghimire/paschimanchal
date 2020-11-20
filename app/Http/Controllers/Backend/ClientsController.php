<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\ClientRepository;
use App\Http\Requests\ClientsRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class ClientsController extends BaseController
{


     //

     private $clientRepository;

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct(ClientRepository $clientRepository)
     {
         parent::__construct();
         $this->clientRepository = $clientRepository;
      
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $clients=$this->clientRepository->all();
    
        return view('backend.clients.index',compact('clients'));
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
    public function store(ClientsRequest $request)
    {
        
         // return $request->file('image');
         try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $clientImage = $request->file('image');
                 $imageExtension = $clientImage->getClientOriginalExtension();
                 $imageName = 'client' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $clientImageSuccess = true;
             }
 
             $client = Client::create($value);
             if ($client) {
                 if (isset($clientImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/clients', $clientImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/clients/' . $imageName)->save();
                     session()->flash('success', 'Client Successfully Created!');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('success', 'Client could not be Create!');
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
             $edits = $this->clientRepository->findById($id);
             if ($edits->count() > 0)
             {
                 $clients = Client::get();
                 return view('backend.clients.index', compact('edits','clients'));
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
    public function update(ClientsRequest $request, $id)
    {
         // return $request;
         $id = (int)$id;
         try {
             $value= $request->all();
 
             $client = $this->clientRepository->findById($id);
             $oldValue = $this->clientRepository->findById($id);
 
             if ($client) {
                 if (!empty($request->file('image'))) {
                     $clientImage = $request->file('image');
                     $imageExtension = $clientImage->getClientOriginalExtension();
                     $imageName = 'client' . time() . '.' . strtolower($imageExtension);
                     $value['image'] = $imageName;
                     $clientImageSuccess = true;
                 }
                 $update = $client->fill($value)->save();
                 if ($update) {
                     if (isset($clientImageSuccess)) {
                         if ($oldValue->image != null)
                             @unlink(storage_path() . 'public/uploads/images/clients' . $oldValue->image);
                             Storage::putFileAs('public/uploads/images/clients', $clientImage, $imageName);
                             Image::make(storage_path() . '/app/public/uploads/images/clients/' . $imageName)->save();
                     }
 
                     session()->flash('success', 'Client Successfully updated!');
                     return redirect(route('clients.index'));
                 } else {
                     session()->flash('error', 'Client could not be update!');
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
            $value = $this->clientRepository->findById($id);
            $value->delete();
            session()->flash('success','Client successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
