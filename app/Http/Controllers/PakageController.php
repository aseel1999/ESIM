<?php

namespace App\Http\Controllers;

use App\Models\Pakage;
use Illuminate\Http\Request;

class PakageController extends Controller
{
    public function index(Request $request)
    {
       $pakages = Pakage::OrderBy('created_at','desc')->paginate(5);
       return view('admin.packages.index', compact('pakages'));
    }
    public function create()
    {
        return view('admin.packages.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'imagepackage' => 'required',
            'data'=> 'required',
            'validity'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
        ]);
        $pakages = Pakage::create(['imagepackage'=>$request->imagepackage,'data'=>$request->data,'validity'=>$request->validity,'price'=>$request->price,'quantity'=>$request->quantity],);
        session()->flash('success', 'New package Added Successfully.');
        
        return redirect(route('pakages.index'));
    }
    public function edit($id)
    {
        $pakage =Pakage::find($id);
        return view('admin.packages.edit', compact('pakage'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'imagepackage' => 'required',
            'data'=> 'required',
            'validity'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
        ]);
        $pakage = Pakage::find($id);
        $pakage->imagepackage= $request->imagepackage;
        $pakage->data=$request->data;
        $pakage->validity=$request->validity;
        $pakage->price=$request->price;
        $pakage->quantity=$request->quantity;
        $pakage->save();
        session()->flash('success', ' Package updated Successfully.');
        // redirect user
        return redirect(route('packages.index'));
    }
    public function destroy(Pakage $pakage)
    {
        
        $pakage->delete();
        session()->flash('success', ' Package Deleted Successfully.');
        // redirect user
        return redirect(route('packages.index'));
        
    }

}
