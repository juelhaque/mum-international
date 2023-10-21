<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){

        $mapp = Map::first();
        return view('admin.map.index', compact('mapp'));
    }


    public function update($id, Request $request){

        try {
            $mapp = Map::find($id);

            $mapp->map = $request->map;
            $mapp->update();
            return redirect()->route('map.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }
}
