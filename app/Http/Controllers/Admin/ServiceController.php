<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.service.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('admin.service.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();

        if ($request->hasFile('image')) {
            $imageName = null;
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $destinationPath = public_path('images/service/photo/');
            $fullPath = $destinationPath . $imageName;
            Image::make($request->image)->resize(900, 600)->save($fullPath);
            $service->photo = $imageName;
        }

        if ($request->hasFile('banner')) {
            $bannerName = null;
            $bannerName = time() . '.' . $request->banner->getClientOriginalExtension();
            $destinationPath = public_path('images/service/banner/');
            $fullPath = $destinationPath . $bannerName;
            Image::make($request->banner)->resize(2048, 1366)->save($fullPath);
            $service->banner = $bannerName;
        }

        $service->save();

        foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
            if ($request->title[$locale]) {
                $service->translateOrNew($locale)->title = $request->title[$locale];
                $service->translateOrNew($locale)->description = $request->description[$locale];
                $service->translateOrNew($locale)->importance = $request->importance[$locale];
                $service->translateOrNew($locale)->metaData = $request->metaData[$locale];
                $service->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
                $service->translateOrNew($locale)->keywords = $request->keywords[$locale];
            }
        }
        $service->video = $request->video;
        $service->save();

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //dd($request->all());
        $service = Service::find($request->id);

        if ($request->hasFile('image')) {
            $imageName = null;
            if ($service->photo) {
                @unlink('images/service/photo/' . $service->photo);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $destinationPath = public_path('images/service/photo/');
            $fullPath = $destinationPath . $imageName;
            Image::make($request->image)->resize(900, 600)->save($fullPath);
            $service->photo = $imageName;
        }

        if ($request->hasFile('banner')) {
            $bannerName = null;
            if ($service->banner) {
                @unlink('images/service/banner/' . $service->banner);
            }
            $bannerName = time() . '.' . $request->banner->getClientOriginalExtension();
            $destinationPath = public_path('images/service/banner/');
            $fullPath = $destinationPath . $bannerName;
            Image::make($request->banner)->resize(2048, 1366)->save($fullPath);
            $service->banner = $bannerName;
        }

        foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
            if ($request->title[$locale]) {
                $service->translateOrNew($locale)->title = $request->title[$locale];
                $service->translateOrNew($locale)->description = $request->description[$locale];
                $service->translateOrNew($locale)->importance = $request->importance[$locale];
                $service->translateOrNew($locale)->metaData = $request->metaData[$locale];
                $service->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
                $service->translateOrNew($locale)->keywords = $request->keywords[$locale];
            }
        }
        $service->video = $request->video;
        //dd($service);
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service = Service::find($id);
        if ($service->photo) {
            unlink('images/service/photo/' . $service->photo);
        }
        if ($service->banner) {
            unlink('images/service/banner/' . $service->banner);
        }
        service::where('id', $id)->delete();
        return redirect()->route('service.index');
    }

    public function status($id)
    {
        $service = Service::find($id);
        if ($service->status == 1) {
            $service->status = 0;
        } else {
            $service->status = 1;
        }
        $service->save();
        return redirect()->back();
    }
}
