<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::get();
      return view('admin.project.all', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $project = Project::get();
      return view('admin.project.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $project = new Project();

      if($request->hasFile('image')) {
          $imageName = null;
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/project/photo/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
          $project->photo = $imageName;
      }

      if($request->hasFile('banner')) {
          $bannerName = null;
          $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
          $destinationPath = public_path('images/project/banner/');
          $fullPath = $destinationPath . $bannerName;
          Image::make($request->banner)->resize(900, 600)->save($fullPath);
          $project->banner = $bannerName;
      }

      $project->save();

      foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
          if($request->title[$locale])
          {
              $project->translateOrNew($locale)->title = $request->title[$locale];
              $project->translateOrNew($locale)->description = $request->description[$locale];
              $project->translateOrNew($locale)->metaData = $request->metaData[$locale];
              $project->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
              $project->translateOrNew($locale)->keywords = $request->keywords[$locale];
          }
      }
      $project->save();

      return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $project = Project::find($id);
      return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $project = Project::find($request->id);

      if($request->hasFile('image')) {
          $imageName = null;
          if($project->photo) {
              @unlink('images/project/photo/'.$project->photo);
          }
          $imageName = time().'.'.$request->image->getClientOriginalExtension();
          $destinationPath = public_path('images/project/photo/');
          $fullPath = $destinationPath . $imageName;
          Image::make($request->image)->resize(900, 600)->save($fullPath);
          $project->photo = $imageName;
      }

      if($request->hasFile('banner')) {
          $bannerName = null;
          if($project->banner) {
              @unlink('images/project/banner/'.$project->banner);
          }
          $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
          $destinationPath = public_path('images/project/banner/');
          $fullPath = $destinationPath . $bannerName;
          Image::make($request->banner)->resize(900, 600)->save($fullPath);
          $project->banner = $bannerName;
      }

      foreach (\LaravelLocalization::getSupportedLocales() as $locale => $properties) {
          if($request->title[$locale])
          {
              $project->translateOrNew($locale)->title = $request->title[$locale];
              $project->translateOrNew($locale)->description = $request->description[$locale];
              $project->translateOrNew($locale)->metaData = $request->metaData[$locale];
              $project->translateOrNew($locale)->metaDescription = $request->metaDescription[$locale];
              $project->translateOrNew($locale)->keywords = $request->keywords[$locale];
          }
      }
      $project->save();
      return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::find($id);
      if($project->photo) {
          unlink('images/project/photo/'.$project->photo);
      }
      if($project->banner) {
          unlink('images/project/banner/'.$project->banner);
      }
      project::where('id',$id)->delete();
      return redirect()->route('project.index');
    }

    public function status($id) {
        $project = Project::find($id);
        if($project->status == 1) {
            $project->status = 0;
        } else {
            $project->status = 1;
        }
        $project->save();
        return redirect()->back();
    }

}
