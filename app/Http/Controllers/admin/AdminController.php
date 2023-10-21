<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use App\Models\PhotoGallery;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $data['categories'] = count(Category::all());
        $data['products'] = count(Product::all());
        $data['photo_galleries'] = count(PhotoGallery::all());
        $data['messages'] = count(Message::all());
        return view('admin.dashboard', $data);
    }

}
