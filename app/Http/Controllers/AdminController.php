<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
class AdminController extends Controller
{
    public function showLogin(){

        return response()->view('admin.admins.log');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([ 
            'email' => 'required|email',
            'password' => 'required|string|min:1|max:20',
        ]);

        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
    if (Auth::guard('admin')->attempt($credentials)) {
        return  redirect()->route('dashboard-home');
    } else {
        return  redirect()->back();
    }
}
    
    public function index()
    {
        $admins = Admin::all();
        return response()->view('admin.admins.index', compact('admins'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $validator = Validator($request->all(), [
            'name' => 'string|required|min:3|max:50',
            'email' => 'string|required|unique',
            'password' => 'string|required|min:6|max:25',
        ], [
            'name.required' => 'Please , Enter Your Name',
            'email.required' => 'Please , Enter Your Email',
            'password.required' => 'Please , Enter Your Password',
        ]);
        if (!$validator->fails()) {
            $admin = new Admin();
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = Hash::make('password');
            $isSaved = $admin->save();
            return response()->json(['message' => $isSaved ? 'Created Successfully' : 'Failed To Create'], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $admin= Admin::find($id);
        
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password'=>'required',
        ]);
        
        $admin->update($request->all());
        
        
        return redirect()
            ->route('admins.index')
            ->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function logout(Request $request)
    {
       auth('admin')->logout();
        Auth::guard('admin')->logout();
       $request->session()->invalidate();
       return redirect()->route('admin-login');

        
    }
    public function destroy(Admin $admin)
    {
        //
        $isDeleted = $admin->delete();
        return response()->json(['message' => $isDeleted ? 'Deleted Successfully' : 'Failed To Delete'], $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}

