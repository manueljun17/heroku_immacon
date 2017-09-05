<?php

namespace App\Http\Controllers;

use App\About;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        if (is_null($about))
        {
            return redirect('about');
        }
        return view('about.edit', compact('about'));
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
        $input = $request->all();
        $validation = Validator::make($input, About::$rules);
        if ($validation->passes())
        {
            $about = About::find($id);
            $about->update($input);
            return Redirect::route('admin.about');
        }
        return Redirect::route('admin.about.edit', $id)
        ->withInput();
    }
}
