<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $banners = Banner::orderBy('id', 'desc')->paginate(3);
    return view('banner.index', ['banners' => $banners]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('banner.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'content' => 'required',
      'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->file->extension();
    // $request->image->move(public_path('images'), $imageName);
    $request->file->storeAs('public/images', $imageName);

    $postData = ['title' => $request->title, 'content' => $request->content, 'image' => $imageName];

    Post::create($postData);
    return redirect('/banner')->with(['message' => 'Banner added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function show(Post $post) {
    return view('banner.show', ['banner' => $banner]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function edit(banner $banner) {
    return view('banner.edit', ['banner' => $banner]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Banner $banner) {
    $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($banner->image) {
        Storage::delete('public/images/' . $banner->image);
      }
    } else {
      $imageName = $banner->image;
    }

    $postData = ['title' => $request->title, 'content' => $request->content, 'image' => $imageName];

    $post->update($postData);
    return redirect('/banner')->with(['message' => 'banner updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPost  $post
   * @return IlluminateHttpResponse
   */
  public function destroy(Banner $banner) {
    Storage::delete('public/images/' . $banner->image);
    $post->delete();
    return redirect('/banner')->with(['message' => 'banner deleted successfully!', 'status' => 'info']);
  }
}