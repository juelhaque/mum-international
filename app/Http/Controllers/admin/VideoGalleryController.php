<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function index(){
        
        $videoGalleries = VideoGallery::latest()->get();
        return view('admin.videoGallery.index', compact('videoGalleries'));
    }
    

    public function create(){
        
        return view('admin.videoGallery.create');
    }
    
    
    public function store(Request $request){
        
        try {
            $videoGalleries = new VideoGallery();
            $videoGalleries->video = $request->video;
           
            $videoGalleries->save();
            return redirect()->route('video-gallery.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }
    }

    
    public function edit($id){

        $videoGallery = VideoGallery::find($id);
        return view('admin.videoGallery.edit', compact('videoGallery'));
    }
    

    public function update($id, Request $request){

        try {
            $videoGalleries = VideoGallery::find($id);

            $videoGalleries->video = $request->video;
          
            $videoGalleries->update();
            return redirect()->route('video-gallery.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
        
    }


    public function destroy($id){

        try {
            $videoGalleries = VideoGallery::find($id);

            $videoGalleries->delete();

            return redirect()->route('video-gallery.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
