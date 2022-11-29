<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::OrderBy('created_at','desc')->paginate(5);
        return view('admin.contacts.index',compact('contacts'));
    }


    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required',
            'message'=> 'required',
            
        ]);
        $contacts = Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            
            ]);
            
            session()->flash('success', 'New Contact Added Successfully.');
        }
    }

