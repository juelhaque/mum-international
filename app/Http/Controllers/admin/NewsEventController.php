<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{
    public function index(){

        $news_events = NewsEvent::latest()->get();
        return view('admin.news_event.index', compact('news_events'));
    }


    public function create(){

        return view('admin.news_event.create');
    }


    public function store(Request $request){

        try {
            $news_events = new NewsEvent;
            $news_events->name = $request->name;
            $news_events->description = $request->description;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/news_event', $imageName);
                $news_events->image = 'uploads/news_event/' . $imageName;
            }
            $news_events->save();
            return redirect()->route('news_events.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $news_event = NewsEvent::find($id);
        return view('admin.news_event.edit', compact('news_event'));
    }


    public function update($id, Request $request){

        try {
            $news_events = NewsEvent::find($id);
            $news_events->name = $request->name;
            $news_events->description = $request->description;
            if ($request->hasfile('image')) {

                if(file_exists($news_events->image) && $news_events->image != null) {
                    unlink($news_events->image);
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/news_event', $imageName);
                $news_events->image = 'uploads/news_event/' . $imageName;
            }

            $news_events->update();
            return redirect()->route('news_events.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function destroy($id){

        try {
            $news_events = NewsEvent::find($id);
            if (file_exists($news_events->image) && $news_events->image != null) {
                unlink($news_events->image);
            }
            $news_events->delete();
            return redirect()->route('news_events.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
