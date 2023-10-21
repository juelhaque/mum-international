<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }


    public function create(){

        return view('admin.category.create');
    }


    public function store(Request $request){

        try {
            $categories = new Category;
            $categories->name = $request->name;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/category', $imageName);
                $categories->image = 'uploads/category/' . $imageName;
            }
            $categories->save();
            return redirect()->route('categories.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update($id, Request $request){

        try {
            $categories = Category::find($id);
            $categories->name = $request->name;
            if ($request->hasfile('image')) {

                if(file_exists($categories->image) && $categories->image != null) {
                    unlink($categories->image);
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/category', $imageName);
                $categories->image = 'uploads/category/' . $imageName;

            }

            $categories->update();
            return redirect()->route('categories.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function destroy($id){

        try {
            $categories = Category::find($id);
            if (file_exists($categories->image) && $categories->image != null) {
                unlink($categories->image);
            }
            $categories->delete();
            return redirect()->route('categories.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
