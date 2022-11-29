<?php

namespace App\Http\Controllers;

use App\Models\Company_Device;
use Illuminate\Http\Request;
use App\Models\Landing_Page;
use App\Models\Slice;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Device;


class LandingController extends Controller
{
    public function land(Request $request)
    {
        $landing_pages=Landing_Page::first();
        $slices=Slice::first();
        $contacts=Contact::all();
        $customers=Customer::all();
        $companys=Company_Device::with(['devices'])->get();
        $devices=Device::get();
        return view('index', compact('landing_pages','slices','contacts','customers','devices','companys'));
    }
    public function index(){
        $landing_pages = Landing_Page::all();
       return view('admin.landings.index', compact('landing_pages'));
    }
    public function create()
    {
        $landing_pages=Landing_Page::all();
        return view('admin.landings.create',compact('landing_pages'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required',
            'hide_text'=> 'required',
            'hide_description'=>'required',
            'about_text'=>'required',
            'about_title'=>'required',
            'about_first'=>'required',
            'about_last'=>'required',
            'file_image'=>'required',
            'yearsofexperience'=>'required',
            'experience'	=>'required',
            'available_text'=>'required',
            'available_lorem'=>'required',
            'activate'=>'required',
            'image'=>'required',
            'customer_say'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'file_path'=>'required',
            'contact'=>'required',

        ]);
        $landing_pages =Landing_Page::create(['logo'=>$request->logo,
        'hide_text'=>$request->hide_text,
        'hide_description'=>$request->hide_description,
        'about_title'=>$request->about_title,
        'about_first'=>$request->about_first,
        'about_text'=>$request->about_text,
        'about_last'=>$request->about_last,
        'file_image'=>$request->file_image,
        'yearsofexperience'=>$request->yearsofexperience,
        'experience'=>$request->experience,
        'available_text'=>$request->available_text,
        'available_lorem'=>$request->available_lorem,
        'activate'=>$request->activate,
        'image'=>$request->image,
        'customer_say'=>$request->customer_say,
        'phone'=>$request->phone,'email'=>$request->email,'location'=>$request->location,'file_path'=>$request->file_path,'contact'=>$request->contact,
    ],);
        session()->flash('success', 'New landing Added Successfully.');
        
        return redirect(route('landing_pages.index'));
    }
    public function edit($id)
    {
        $landing_page =Landing_Page::find($id);
        return view('admin.landings.edit', compact('landing_page'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'logo' => 'required',
            'hide_text'=> 'required',
            'hide_description'=>'required',
            'about_text'=>'required',
            'about_title'=>'required',
            'about_first'=>'required',
            'about_last'=>'required',
            'file_image'=>'required',
            'yearsofexperience'=>'required',
            'experience'	=>'required',
            'available_text'=>'required',
            'available_lorem'=>'required',
            'activate'=>'required',
            'image'=>'required',
            'customer_say'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'file_path'=>'required',
            'contact'=>'required',
        ]);
        $Landing_page = Landing_Page::find($id);
        $Landing_page->logo= $request->logo;
        $Landing_page->hide_text=$request->hide_text;
        $Landing_page->hide_description=$request->hide_description;
        $Landing_page->about_title= $request->about_title;
        $Landing_page->about_first=$request->about_first;
        $Landing_page->about_last=$request->about_last;
        $Landing_page->file_image=$request->file_image;
        $Landing_page->yearsofexperience= $request->yearsofexperience;
        $Landing_page->experience=$request->experience;
        $Landing_page->available_text=$request->available_text;
        $Landing_page->available_lorem=$request->available_lorem;
        $Landing_page->activate=$request->activate;
        $Landing_page->image=$request->image;
        $Landing_page->customer_say=$request->customer_say;
        $Landing_page->phone=$request->phone;
        $Landing_page->email=$request->email;
        $Landing_page->location=$request->location;
        $Landing_page->file_path=$request->file_path;
        $Landing_page->contact=$request->contact;
        $Landing_page->save();
        session()->flash('success', ' Landing updated Successfully.');
        // redirect user
        return redirect(route('landing_pages.index'));
    }
    public function destroy($id)
    {
        $Landing_page= Landing_Page::find($id);
        $Landing_page->delete();
        session()->flash('success', ' Landing Page Deleted Successfully.');
        // redirect user
        return redirect(route('landing_pages.index'));
}




}
