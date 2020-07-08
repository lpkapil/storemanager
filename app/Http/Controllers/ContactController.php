<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(4);
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'about'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:contacts',
            'phone'=>'string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('contacts/create')->withErrors($validator)->withInput();
        }

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'about' => $request->get('about'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $contact = Contact::find($id);
        
        if ($contact) {
            return view('contacts.edit', compact('contact'));   
        } else {
            return redirect('/contacts')->with('errors', 'Invalid contact to edit!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $validator = Validator::make($request->all(), [
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'about'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:contacts,email,'.$contact->id,
            'phone'=>'string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('contacts/create')->withErrors($validator)->withInput();
        }
        
        $contact->first_name =  $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->about = $request->get('about');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect('/contacts')->with('success', 'Contact deleted!');  
        } else {
            return redirect('/contacts')->with('errors', 'Invalid contact to delete!');
        }
    }
}
