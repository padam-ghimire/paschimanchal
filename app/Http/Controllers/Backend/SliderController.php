<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;

use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Repository\SliderRepository;
use Intervention\Image\Facades\Image;
// use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class SliderController extends BaseController
{
    //

    private $sliderRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SliderRepository $sliderRepository)
    {
        parent::__construct();
        $this->sliderRepository = $sliderRepository;
    }

    public function index()
    {
        $sliders=$this->sliderRepository->all();
        return view('backend.slider.index',compact('sliders'));
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
    public function store(SliderRequest $request)
    {

        // return $request->file('image');
        try {
           
           $value= $request->all();

            if (!empty($request->file('image'))) {
                $sliderImage = $request->file('image');
                $sliderExtension = $sliderImage->getClientOriginalExtension();
                $imageName = 'slider' . time() . '.' . strtolower($sliderExtension);
              
                $value['image'] = $imageName;
                $sliderImageSuccess = true;
            }

            $slider = Slider::create($value);
            if ($slider) {
                if (isset($sliderImageSuccess)) {
                    Storage::putFileAs('public/uploads/images/slider', $sliderImage, $imageName);
                    Image::make(storage_path() . '/app/public/uploads/images/slider/' . $imageName)->resize(700, 540)->save();
                    session()->flash('success', 'Slider Successfully Created!');
                    return back();
                }
              
               

            } else {
                session()->flash('success', 'Slider could not be Create!');
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
            $edits = $this->sliderRepository->findById($id);
            if ($edits->count() > 0)
            {
                $sliders = Slider::get();
                return view('backend.slider.index', compact('edits','sliders'));
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

            $slider = $this->sliderRepository->findById($id);
            $oldValue = $this->sliderRepository->findById($id);

            if ($slider) {
                if (!empty($request->file('image'))) {
                    $sliderImage = $request->file('image');
                    $imageExtension = $sliderImage->getClientOriginalExtension();
                    $sliderImageName = 'profile' . time() . '.' . strtolower($imageExtension);
                    $value['image'] = $sliderImageName;
                    $sliderImageSuccess = true;
                }
                // $slider = new Slider();
                $update = $slider->fill($value)->save();
                if ($update) {
                    if (isset($sliderImageSuccess)) {
                        if ($oldValue->image != null)
                            @unlink(storage_path() . 'public/uploads/images/slider' . $oldValue->image);
                            Storage::putFileAs('public/uploads/images/slider', $sliderImage, $sliderImageName);
                            Image::make(storage_path() . '/app/public/uploads/images/slider/' . $sliderImageName)->resize(700, 540)->save();
                    }

                    session()->flash('success', 'Slider Successfully updated!');
                    return redirect(route('slider.index'));
                } else {
                    session()->flash('error', 'Slider could not be update!');
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

    public function status($id)
    {
        try {
            $id = (int)$id;
            $slider = $this->sliderRepository->findById($id);

            if ($slider->status == 'inactive') {
                $slider->status = 'active';
                $slider->save();
                session()->flash('success', 'Slider has been Activated!');
                return back();
            } else {
                $slider->status = 'inactive';
                $slider->save();
                session()->flash('success', 'Slider has been Deactivated!');
                return back();
            }

        } catch (\Exception $e) {
            $exception = $e->getMessage();
            session()->flash('error', 'EXCEPTION :' . $exception);
        }
    }

}
