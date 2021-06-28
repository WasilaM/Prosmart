<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkDone;
use Illuminate\Http\Request;
use Image;

class WorkDoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $works = WorkDone::get();
      return view('admin.work.all', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $work = WorkDone::get();
      return view('admin.work.create', compact('work'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $work = new WorkDone();

      $imageName = null;
      if($request->hasFile('image')) {
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/work/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
      }
      $work->photo = $imageName;

      $work->save();

      $work->title = $request->title;

      $work->save();

      return redirect()->route('workDone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function show(WorkDone $workDone)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $work = WorkDone::find($id);
      return view('admin.work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $work = WorkDone::find($request->id);

      if($request->hasFile('image')) {
        if($work->image) {
          @unlink('images/work/'.$work->image);
        }
        $imageName = null;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $destinationPath = public_path('images/work/');
        $fullPath = $destinationPath . $imageName;
        Image::make($request->image)->resize(900, 600)->save($fullPath);
        $work->image = $imageName;
      }

      $work->title = $request->title;

      $work->save();
      return redirect()->route('workDone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkDone  $workDone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $work = HomeBanner::find($id);
      if($work->status == 1) {
        $work->status = 0;
      } else {
        $work->status = 1;
      }
      $work->save();
      return redirect()->back();
    }

    public function status($id) {
      $work = WorkDone::find($id);
      if($work->status == 1) {
        $work->status = 0;
      } else {
        $work->status = 1;
      }
      $work->save();
      return redirect()->back();
    }
}
