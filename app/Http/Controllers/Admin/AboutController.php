<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $abouts = About::get();
      return view('admin.aboutus.all', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $about = About::get();
      return view('admin.aboutus.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $about = new About();

      if($request->hasFile('image')) {
          $imageName = null;
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/about/photo/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
          $about->photo = $imageName;
      }

      if($request->hasFile('banner')) {
          $bannerName = null;
          $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
          $destinationPath = public_path('images/about/banner/');
          $fullPath = $destinationPath . $bannerName;
          Image::make($request->banner)->resize(2048, 1366)->save($fullPath);
          $about->banner = $bannerName;
      }

      $about->save();

      foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
          if($request->title[$locale])
          {
              $about->translateOrNew($locale)->title = $request->title[$locale];
              $about->translateOrNew($locale)->description = $request->description[$locale];
              $about->translateOrNew($locale)->metaData = $request->metaData[$locale];
              $about->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
              $about->translateOrNew($locale)->keywords = $request->keywords[$locale];
          }
      }
      $about->save();

      return redirect()->route('aboutus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $about = About::find($id);
      return view('admin.aboutus.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $about = About::find($request->id);

      if($request->hasFile('image')) {
          $imageName = null;
          if($about->photo) {
              @unlink('images/about/photo/'.$about->photo);
          }
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/about/photo/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
          $about->photo = $imageName;
      }

      if($request->hasFile('banner')) {
          $bannerName = null;
          if($about->banner) {
              @unlink('images/about/banner/'.$about->banner);
          }
          $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
          $destinationPath = public_path('images/about/banner/');
          $fullPath = $destinationPath . $bannerName;
          Image::make($request->banner)->resize(2048, 1366)->save($fullPath);
          $about->banner = $bannerName;
      }

      foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
          if($request->title[$locale])
          {
              $about->translateOrNew($locale)->title = $request->title[$locale];
              $about->translateOrNew($locale)->description = $request->description[$locale];
              $about->translateOrNew($locale)->metaData = $request->metaData[$locale];
              $about->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
              $about->translateOrNew($locale)->keywords = $request->keywords[$locale];
          }
      }
      $about->save();
      return redirect()->route('aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $about = About::find($id);
      if($about->photo) {
          unlink('images/about/photo/'.$about->photo);
      }
      if($about->banner) {
          unlink('images/about/banner/'.$about->banner);
      }
      About::where('id',$id)->delete();
      return redirect()->route('aboutus.index');
    }

    public function status($id) {
        $about = About::find($id);
        if($about->status == 1) {
            $about->status = 0;
        } else {
            $about->status = 1;
        }
        $about->save();
        return redirect()->back();
    }
}
