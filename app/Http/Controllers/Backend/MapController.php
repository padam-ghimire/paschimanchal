<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\MapRequest;
use App\Repository\MapRepository;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class MapController extends BaseController
{



    //
    private $mapRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(MapRepository $mapRepository)
    {
        parent::__construct();
        $this->mapRepository = $mapRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $map=$this->mapRepository->all();

        // return $about;
        return view('backend.map.index',compact('map'));
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
            $edits = $this->mapRepository->findById($id);
            if ($edits->count() > 0)
            {
                $map=$this->mapRepository->all();

                return view('backend.map.index', compact('edits','map'));
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
    public function update(MapRequest $request, $id)
    {
        $id = (int)$id;
        try{
            $map = $this->mapRepository->findById($id);

            if($map){
                $map->fill($request->all())->save();
                session()->flash('success','Map updated successfully!');

                return redirect(route('map.index'));
            }else{

                session()->flash('error','No record with given id!');
                return back();
            }
        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION:'.$exception);
            return back();
        }
    }

    
}
