<?php

namespace App\Http\Controllers;

use File;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use Carbon\Carbon;

use Validator;

use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
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
        if (is_null($contact))
        {
            return redirect('contact');
        }
        $defaultImage = 'img/tmp/firstbanner.jpg';
        return view('contact.edit', compact('contact','defaultImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $input = $request->all();
        $validation = Validator::make($input, Contact::$rules);
        if ($validation->passes())
        {
            $contact = Contact::find($contact->id);
            $contact_array = array(
                'cell_number' => $request->get('cell_number'),
                'phone_number' => $request->get('phone_number'),
                'address' => $request->get('address'),
                'email_address' => $request->get('email_address'),
                'account_name' => $request->get('account_name'),
                'account_number' => $request->get('account_number')
            );
            
            if( $request->file('image_banner')) {
                $mytime = Carbon::now()->format('s-h-d-');
                File::delete($contact->image_banner);
                $file = $request->file('image_banner');
                $destinationPath = 'img/settings/';
                $extension = $file->getClientOriginalExtension();
                $filename= $mytime . $file->getClientOriginalName();
                $uploadSuccess = $request->file('image_banner')
                ->move($destinationPath, $filename);
                $contact_array['image_banner'] = $destinationPath . $filename;
                $contact->update($contact_array);
            }
            else {
                $contact->update($contact_array);
            }
            return Redirect::route('admin.contact');
        }
        else {
            return Redirect::route('admin.contact.edit', $contact->id)
            ->withErrors($validation)
            ->withInput();
        }
        
    }

}
