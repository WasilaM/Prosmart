<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Image;

class ClientsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $clients = Client::get();
    return view('admin.client.all', compact('clients'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $client = Client::get();
    return view('admin.client.create', compact('client'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $client = new Client();

    if($request->hasFile('image')) {
      $imageName = null;
      $imageName = time().'.'.$request->image->getClientOriginalExtension();
      $destinationPath = public_path('images/client/photo/');
      $fullPath = $destinationPath . $imageName;
      Image::make($request->image)->resize(130, 50)->save($fullPath);
      $client->photo = $imageName;
    }

    if($request->hasFile('banner')) {
      $bannerName = null;
      $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
      $destinationPath = public_path('images/client/banner/');
      $fullPath = $destinationPath . $bannerName;
      Image::make($request->banner)->resize(900, 600)->save($fullPath);
      $client->banner = $bannerName;
    }

    // $client->save();

    $client->title = $request->title;
    $client->metaData = $request->metaData;
    $client->metaDescription = $request->metaDescription;
    $client->keywords = $request->keywords;
    $client->film = $request->film;

    $client->save();

    return redirect()->route('client.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Client  $client
  * @return \Illuminate\Http\Response
  */
  public function show(Client $client)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Client  $client
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $client = Client::find($id);
    return view('admin.client.edit', compact('client'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Client  $client
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    // dd($request->all());
    $client = Client::find($request->id);

    if($request->hasFile('image')) {
      $imageName = null;
      if($client->photo) {
        @unlink('images/client/photo/'.$client->photo);
      }
      $imageName = time().'.'.$request->image->getClientOriginalExtension();
      $destinationPath = public_path('images/client/photo/');
      $fullPath = $destinationPath . $imageName;
      Image::make($request->image)->resize(130, 50)->save($fullPath);
      $client->photo = $imageName;
    }

    if($request->hasFile('banner')) {
      $bannerName = null;
      if($client->banner) {
        @unlink('images/client/banner/'.$client->banner);
      }
      $bannerName = time().'.'.$request->banner->getClientOriginalExtension();
      $destinationPath = public_path('images/client/banner/');
      $fullPath = $destinationPath . $bannerName;
      Image::make($request->banner)->resize(900, 600)->save($fullPath);
      $client->banner = $bannerName;
    }
    Client::whereId($request->id)->update($request->except('_method', 'id', '_token'));
    // $client->title = $request->title;
    // $client->metaData = $request->metaData;
    // $client->metaDescription = $request->metaDescription;
    // $client->keywords = $request->keywords;
    // $client->film = $request->film;
    // dd($client);
    // $client->save();
    return redirect()->route('client.index');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Client  $client
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $client = Client::find($id);
    if($client->photo) {
      @unlink('images/client/photo/'.$client->photo);
    }
    if($client->banner) {
      @unlink('images/client/banner/'.$client->banner);
    }
    Client::where('id',$id)->delete();
    return redirect()->route('client.index');
  }

  public function status($id) {
    $client = Client::find($id);
    if($client->status == 1) {
      $client->status = 0;
    } else {
      $client->status = 1;
    }
    $client->save();
    return redirect()->back();
  }
}
