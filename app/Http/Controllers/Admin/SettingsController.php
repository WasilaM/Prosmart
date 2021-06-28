<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Image;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $settings = Setting::get();
      return view('admin.setting.all', compact('settings'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
      $setting = Setting::where('name', $name)->first();
      //dump($setting);
      return view('admin.setting.'.$name, compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      //dd($request->all());
      $setting = Setting::find($request->id);
      //
      // $setting->data = $request->data;
      // $setting->save();
      // $x = 1;
      // $x->data = 1;
      $setting->data = $request->except(['image', '_method', '_token', 'id']);
      //dd($setting->data);
      $setting->save();

      if($request->hasFile('image')) {
          if($setting->photo) {
              @unlink('images/settings/'.$setting->photo);
          }
          $imageName = null;
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/settings/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
          $setting->photo = $imageName;
      }

      $setting->save();

      return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
