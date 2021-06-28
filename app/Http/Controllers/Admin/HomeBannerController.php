<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Image;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $banners = HomeBanner::get();
      return view('admin.homeBanner.all', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $banner = HomeBanner::get();
      return view('admin.homeBanner.create', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $banner = new HomeBanner();

      if($request->hasFile('banner')) {
          $bannerName = null;
          $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
          $destinationPath = public_path('images/homeBanner/');
          $fullPath = $destinationPath . $bannerName;
          Image::make($request->banner)->resize(1950, 1000)->save($fullPath);
          $banner->banner = $bannerName;
      }

      $banner->save();

      $banner->title = $request->title;

      $banner->save();

      return redirect()->route('homeBanner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $banner = HomeBanner::find($id);
      return view('admin.homeBanner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $banner = HomeBanner::find($request->id);

      if($request->hasFile('banner')) {
        if($banner->banner) {
          @unlink('images/homeBanner/'.$banner->banner);
        }
        $bannerName = null;
        $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
        $destinationPath = public_path('images/homeBanner/');
        $fullPath = $destinationPath . $bannerName;
        Image::make($request->banner)->resize(1950, 1000)->save($fullPath);
        $banner->banner = $bannerName;
      }

      $banner->title = $request->title;

      $banner->save();
      return redirect()->route('homeBanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = HomeBanner::find($id);
      if($banner->banner) {
        @unlink('images/homeBanner/'.$banner->banner);
      }
      HomeBanner::where('id',$id)->delete();
      return redirect()->route('homeBanner.index');
    }

    public function status($id) {
      $banner = HomeBanner::find($id);
      if($banner->status == 1) {
        $banner->status = 0;
      } else {
        $banner->status = 1;
      }
      $banner->save();
      return redirect()->back();
    }
}
