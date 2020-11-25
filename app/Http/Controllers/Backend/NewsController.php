<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Repository\NewsRepository;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BaseController;

class NewsController extends BaseController
{

      //

      private $newsRepository;

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function __construct(NewsRepository $newsRepository)
      {
          parent::__construct();
          $this->newsRepository = $newsRepository;
       
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses=$this->newsRepository->all();
    
        return view('backend.news.index',compact('newses'));
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
    public function store(NewsRequest $request)
    {
         // return $request->file('image');
         try {
            
            $value= $request->all();
 
             if (!empty($request->file('image'))) {
                 $newsImage = $request->file('image');
                 $imageExtension = $newsImage->getClientOriginalExtension();
                 $imageName = 'news' . time() . '.' . strtolower($imageExtension);
               
                 $value['image'] = $imageName;
                 $newsImageSuccess = true;
             }
 
             $news = News::create($value);
             if ($news) {
                 if (isset($newsImageSuccess)) {
                     Storage::putFileAs('public/uploads/images/news', $newsImage, $imageName);
                     Image::make(storage_path() . '/app/public/uploads/images/news/' . $imageName)->resize(700, 540)->save();
                     session()->flash('success', 'News Successfully Created!');
                     return back();
                 }
               
                
 
             } else {
                 session()->flash('success', 'News could not be Create!');
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
            $edits = $this->newsRepository->findById($id);
            if ($edits->count() > 0)
            {
                $newses = News::get();
                return view('backend.news.index', compact('edits','newses'));
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
    public function update(NewsRequest $request, $id)
    {
          // return $request;
          $id = (int)$id;
          try {
              $value= $request->all();
  
              $news = $this->newsRepository->findById($id);
              $oldValue = $this->newsRepository->findById($id);
  
              if ($news) {
                  if (!empty($request->file('image'))) {
                      $newsImage = $request->file('image');
                      $imageExtension = $newsImage->getClientOriginalExtension();
                      $imageName = 'news' . time() . '.' . strtolower($imageExtension);
                      $value['image'] = $imageName;
                      $newsImageSuccess = true;
                  }
                  $update = $news->fill($value)->save();
                  if ($update) {
                      if (isset($newsImageSuccess)) {
                          if ($oldValue->image != null)
                              @unlink(storage_path() . 'public/uploads/images/news' . $oldValue->image);
                              Storage::putFileAs('public/uploads/images/news', $newsImage, $imageName);
                              Image::make(storage_path() . '/app/public/uploads/images/news/' . $imageName)->save();
                      }
  
                      session()->flash('success', 'News Successfully updated!');
                      return redirect(route('clients.index'));
                  } else {
                      session()->flash('error', 'News could not be update!');
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
            $value = $this->newsRepository->findById($id);
            $value->delete();
            session()->flash('success','News successfully deleted!');
            return back();

        }catch (\Exception $e){
            $exception=$e->getMessage();
            session()->flash('error','EXCEPTION'.$exception);
            return back();

        }
    }
}
