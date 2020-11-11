<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Repository\AboutRepository;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class AboutController extends BaseController
{
    //
    private $aboutRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(AboutRepository $aboutRepository)
    {
        parent::__construct();
        $this->aboutRepository = $aboutRepository;
    }

    public function index()
    {

        $about=$this->aboutRepository->all();

        // return $about;
        return view('backend.about.index',compact('about'));
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

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(CountryRequest $request)
    // {
    //     try{
    //         $create = Country::create($request->all());
    //         if($create){
    //             session()->flash('success','About successfully created!');
    //             return back();
    //         }else{
    //             session()->flash('error','About could not be created!');
    //             return back();
    //         }
    //     }catch (\Exception $e){
    //         $e->getMessage();
    //         session()->flash('error','Exception : '.$e);
    //         return back();
    //     }
    // }

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
            $edits = $this->aboutRepository->findById($id);
            if ($edits->count() > 0)
            {
                $about=$this->aboutRepository->all();

                return view('backend.about.index', compact('edits','about'));
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
        try{
            $about = $this->aboutRepository->findById($id);

            if($about){
                $about->fill($request->all())->save();
                session()->flash('success','About updated successfully!');

                return redirect(route('about.index'));
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
