<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_Device;
class Company_DeviceController extends Controller
{
public function index(Request $request)
{
   $company_devices = Company_Device::all();
   return view('admin.company_devices.index', compact('company_devices'));
}
public function create()
{
    return view('admin.company_devices.create');
}
public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        
    ]);
    $company_devices = Company_Device::create(['name'=>$request->name],);
    session()->flash('success', 'New Company Added Successfully.');
    
    return redirect(route('company_devices.index'));
}
public function edit($id)
{
    $company_device= Company_Device::find($id);
    return view('admin.company_devices.edit', compact('company_device'));
}
public function update(Request $request, $id)
{
    $validate=$request->validate([
        'name' => 'required',
        
        
    ]);
    $company_device =Company_Device::find($id);
    $company_device->name= $request->name;
    $company_device->save();
    session()->flash('success', ' Company updated Successfully.');
    // redirect user
    return redirect(route('company_devices.index'));
}
public function destroy(Company_device $company_device)
{
    $company_device->delete();
    session()->flash('success', ' Company Deleted Successfully.');
    // redirect user
    return redirect(route('company_devices.index'));
}

    
}
