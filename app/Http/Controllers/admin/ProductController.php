<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }


    public function create()
    {

        $categories = Category::latest()->get();
        return view('admin.product.create', compact('categories'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        try {
            $products = new Product;
            $products->name = $request->name;
            $products->category_id = $request->category_id;
            $products->product_code = $request->product_code;
            $products->price = $request->price;
            $products->description = $request->description;
            $products->short_description = $request->short_description;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/product', $imageName);
                $products->image = 'uploads/product/' . $imageName;
            }
            $products->save();
            return redirect()->route('products.index')->with('success', 'Insert Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }
    }


    public function edit($id)
    {

        $categories = Category::latest()->get();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }


    public function update($id, Request $request)
    {

        try {
            $products = Product::find($id);

            $products->name = $request->name;
            $products->category_id = $request->category_id;
            $products->product_code = $request->product_code;
            $products->price = $request->price;
            $products->description = $request->description;
            $products->short_description = $request->short_description;
            if ($request->hasfile('image')) {

                if (file_exists($products->image) && $products->image != null) {
                    unlink($products->image);
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/product', $imageName);
                $products->image = 'uploads/product/' . $imageName;
            }

            $products->update();
            return redirect()->route('products.index')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }


    public function destroy($id)
    {

        try {
            $products = Product::find($id);
            if (file_exists($products->image) && $products->image != null) {
                unlink($products->image);
            }
            $products->delete();
            return redirect()->route('products.index')->with('success', 'Deleted Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }
    }
}



