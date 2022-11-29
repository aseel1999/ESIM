<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slice;

class SliceController extends Controller
{
    public function index(Request $request)
    {
       $slices = Slice::OrderBy('created_at','desc')->paginate(5);
       return view('admin.slices.index', compact('slices'));
    }
    public function create()
    {
        return view('admin.slices.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'=>'required',
            'image'=> 'required',
           
            
        ]);
        $slices = Slice::create(['name'=>$request->name,'description'=>$request->description,'image'=>$request->image],);
        session()->flash('success', 'New Slice Added Successfully.');
        
        return redirect(route('slices.index'));
    }
    public function edit($id)
    {
        $slice = Slice::find($id);
        return view('admin.slices.edit', compact('slice'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'name' => 'required',
            'description'=> 'required',
            'image'=> 'required',
            
        ]);
        $slice = Slice::find($id);
        $slice->name= $request->name;
        $slice->description=$request->description;
        $slice->image=$request->image;
        $slice->save();
        session()->flash('success', ' Slice updated Successfully.');
        // redirect user
        return redirect(route('slices.index'));
    }
    public function destroy($id)
    {
        $slice= Slice::find($id);
        $slice->delete();
        session()->flash('success', ' Slice Deleted Successfully.');
        // redirect user
        return redirect(route('slices.index'));
}
}
