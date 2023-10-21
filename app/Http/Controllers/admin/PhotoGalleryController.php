<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index(){
        
        $photoGalleries = PhotoGallery::latest()->get();
        return view('admin.photoGallery.index', compact('photoGalleries'));
    }
    

    public function create(){
        
        return view('admin.photoGallery.create');
    }
    
    
    public function store(Request $request){
        
        try {
            $photoGalleries = new PhotoGallery;
            $photoGalleries->name = $request->name;
            
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/photoGallery', $imageName);
                $photoGalleries->image = 'uploads/photoGallery/' . $imageName;
            }
            $photoGalleries->save();
            return redirect()->route('photo-gallery.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }
    }

    
    public function edit($id){

        $photoGallery = PhotoGallery::find($id);
        return view('admin.photoGallery.edit', compact('photoGallery'));
    }
    

    public function update($id, Request $request){

        try {
            $photoGalleries = PhotoGallery::find($id);

            $photoGalleries->name = $request->name;
            if ($request->hasfile('image')) {

                if(file_exists($photoGalleries->image) && $photoGalleries->image != null) {
                    unlink($photoGalleries->image);                    
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/photoGallery', $imageName);
                $photoGalleries->image = 'uploads/photoGallery/' . $imageName;
               
            }

            $photoGalleries->update();
            return redirect()->route('photo-gallery.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
        
    }


    public function destroy($id){

        try {
            $photoGalleries = PhotoGallery::find($id);            
            if (file_exists($photoGalleries->image) && $photoGalleries->image != null) {
                unlink($photoGalleries->image);
            }
            $photoGalleries->delete();
            return redirect()->route('photo-gallery.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}