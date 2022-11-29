<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Company_Device;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
       $devices = Device::with('company')->get();
       return view('admin.devices.index', compact('devices'));
    }
    public function create()
    {
        $company_devices=Company_Device::all();
        return view('admin.devices.create',compact('company_devices'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company_device_id'=> 'required',
        ]);
        $devices = Device::create(['name'=>$request->name,'company_device_id'=>$request->company_device_id],);
        session()->flash('success', 'New Device Added Successfully.');
        
        return redirect(route('devices.index'));
    }
    public function edit($id)
    {
        $device = Device::find($id);
        return view('admin.devices.edit', compact('device'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'name' => 'required',
            'company_device_id'=> 'required',
            
        ]);
        $device = Device::find($id);
        $device->name= $request->name;
        $device->company_device_id=$request->company_device_id;
        $device->save();
        session()->flash('success', ' Device updated Successfully.');
        // redirect user
        return redirect(route('devices.index'));
    }
    public function destroy($id)
    {
        $device= Device::find($id);
        $device->delete();
        session()->flash('success', ' Device Deleted Successfully.');
        // redirect user
        return redirect(route('devices.index'));
}
}
