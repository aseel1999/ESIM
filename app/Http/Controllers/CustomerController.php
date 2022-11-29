<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer ;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
       $customers = Customer::OrderBy('created_at','desc')->paginate(5);
       return view('admin.customers.index', compact('customers'));
    }
    public function create()
    {
        return view('admin.customers.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image'=> 'required',
            'opinion'=> 'required',
            'company'=> 'required',
            
        ]);
        $customers = Customer::create(['name'=>$request->name,'image'=>$request->image,'opinion'=>$request->opinion,'company'=>$request->company],);
        session()->flash('success', 'New Customer Added Successfully.');
        
        return redirect(route('customers.index'));
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'name' => 'required',
            'image'=> 'required',
            'opinion'=> 'required',
            'company'=> 'required',
        ]);
        $customer = Customer::find($id);
        $customer->name= $request->name;
        $customer->image=$request->image;
        $customer->opinion=$request->opinion;
        $customer->company=$request->company;
        $customer->save();
        session()->flash('success', ' Customer updated Successfully.');
        // redirect user
        return redirect(route('customers.index'));
    }
    public function destroy($id)
    {
        $customer= Customer::find($id);
        $customer->delete();
        session()->flash('success', ' CustomerDeleted Successfully.');
        // redirect user
        return redirect(route('customers.index'));
}
}