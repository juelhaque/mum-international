<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $details = CompanyProfile::first();
        return view('admin.companyProfile.index', compact('details'));
    }


    public function update(Request $request)
    {
        try {
            $details = CompanyProfile::first();

            $details->about_title = $request->about_title;
            $details->phone = $request->phone;
            $details->email = $request->email;
            $details->about_description = $request->about_description;
            $details->short_description = $request->short_description;
            $details->facebook = $request->facebook;
            $details->youtube = $request->youtube;
            $details->instagram = $request->instagram;
            $details->twitter = $request->twitter;
            $details->linkedin = $request->linkedin;
            $details->whatsapp = $request->whatsapp;
            $details->address = $request->address;
            // $details->mapp = $request->mapp;

            if ($request->hasfile('company_image')) {
                if (file_exists($details->company_image) && $details->company_image != null) {
                    unlink($details->company_image);
                }
                $image = $request->file('company_image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->company_image = 'uploads/profile/' . $imageName;
            }
            if ($request->hasfile('company_logo')) {
                if (file_exists($details->company_logo) && $details->company_logo != null) {
                    unlink($details->company_logo);
                }
                $image = $request->file('company_logo');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/profile', $imageName);
                $details->company_logo = 'uploads/profile/' . $imageName;
            }

            $details->update();

            return redirect()->route('dashboard')->with('success', 'Update Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update failed');
        }
    }
}
