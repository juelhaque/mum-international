<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::latest()->get();
        return view('admin.client.index', compact('clients'));
    }


    public function create(){

        return view('admin.client.create');
    }


    public function store(Request $request){

        try {
            $clients = new Client;
            $clients->name = $request->name;

            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/client', $imageName);
                $clients->image = 'uploads/client/' . $imageName;
            }
            $clients->save();
            return redirect()->route('clients.index')->with('success', 'Insert Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Insert failed');
        }

    }


    public function edit($id){

        $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
    }


    public function update($id, Request $request){

        try {
            $clients = Client::find($id);

            $clients->name = $request->name;
            if ($request->hasfile('image')) {

                if(file_exists($clients->image) && $clients->image != null) {
                    unlink($clients->image);
                }

                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/client', $imageName);
                $clients->image = 'uploads/client/' . $imageName;

            }

            $clients->update();
            return redirect()->route('clients.index')->with('success', 'Update Successful');

        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }

    }


    public function destroy($id){

        try {
            $clients = Client::find($id);
            if (file_exists($clients->image) && $clients->image != null) {
                unlink($clients->image);
            }
            $clients->delete();
            return redirect()->route('clients.index')->with('success', 'Deleted Successful');

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }

    }
}
