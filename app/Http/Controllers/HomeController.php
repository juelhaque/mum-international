<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\Map;
use App\Models\NewsEvent;
use App\Models\PhotoGallery;
use App\Models\Product;
use App\Models\Slider;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::get();
        $data['products'] = Product::get()->take(18);
        $data['categories'] = Category::get();
        $data['photo_galleries'] = PhotoGallery::latest()->get()->take(18);
        $data['company_profiles'] = CompanyProfile::get();
        $data['clients'] = Client::get();
        $data['video_galleries'] = VideoGallery::get()->take(5);
        return view("frontend.home", $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function product()
    {
        return view('frontend.product');
    }

    public function catProduct($id)
    {
        $data['categories'] = Category::where('id', $id)->first();
        $data['products'] = Product::where('category_id', $id)->get();
        return view('frontend.cat_product', $data);
    }

    public function productDetails($id)
    {
        $data['products'] = Product::find($id);
        return view('frontend.product_details', $data);
    }

    public function photoGallery()
    {
        return view('frontend.photo_gallery');
    }

    public function newsEvent()
    {
        $data['news_events'] = NewsEvent::get()->take(4);
        $data['more_news_events'] = NewsEvent::get();
        return view('frontend.news_event', $data);
    }

    public function newsEventDetails($id)
    {
        $data['news_events'] = NewsEvent::find($id);
        $data['more_news_events'] = NewsEvent::get();
        return view('frontend.news_event_details', $data);
    }

    public function contact(){

        $data['maps'] = Map::first();
        return view('frontend.contact', $data);
    }
}


