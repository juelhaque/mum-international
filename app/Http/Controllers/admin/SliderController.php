<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index(){

        $slider = Slider::latest()->get();
        return view('admin.slider.index', compact('slider'));
    }


    public function create(){

        return view('admin.slider.create');
    }


    public function store(Request $request){
        try {
            $slider = new Slider;
            $slider->name = $request->name;
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/slider', $imageName);
                $slider->image = 'uploads/slider/' . $imageName;
            }
            $slider->save();
            return redirect()->route('sliders.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }
        
    }


    public function edit($id){

        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }


    public function update($id, Request $request){

        try {
            $slider = Slider::find($id);

            $slider->name = $request->name;
            if ($request->hasfile('image')) {

                if(file_exists($slider->image) && $slider->image != null) {
                    unlink($slider->image);                    
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/slider', $imageName);
                $slider->image = 'uploads/slider/' . $imageName;
               
            }

            $slider->update();
            return redirect()->route('sliders.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
        
    }


    public function delete($id){

        try {
            $slider = Slider::find($id);            
            if (file_exists($slider->image) && $slider->image != null) {
                unlink($slider->image);
            }
            $slider->delete();           
            return redirect()->route('sliders.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }
        

    }
}