<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Config;

use Validator;

use Illuminate\Support\Facades\Redirect;
class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $configs = Config::where(function($query) use ($request) {
            //filter by keyword entered
            if( ( $term = $request->get('term') ) ) {
                $query->where('id', 'like', '%' . $term . '%');
                $query->orWhere('key', 'like', '%' . $term . '%');
                $query->orWhere('value', 'like', '%' . $term . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('config.index', compact('configs'));
    }
    public function autocomplete(Request $request)
    {
        //Prevent this method called by non ajax
        if($request->ajax())
        {
            $configs = Config::where(function($query) use ($request) {
                //filter by keyword entered
                if( ( $term = $request->get('term') ) ) {
                    $query->where('id', 'like', '%' . $term . '%');
                    $query->orWhere('key', 'like', '%' . $term . '%');
                    $query->orWhere('value', 'like', '%' . $term . '%');
                }
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        //Convert to json
        foreach ($configs as $config) {
          $results[] = ['id' => $config->id, 'value' => $config->name];
        }
        return response()->json($results);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Config $configs, Request $request)
    {
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
            return Redirect::route('admin.configs.create')
            ->withErrors($validator)
            ->withInput();
        }
        $configs->create([
            'key' => $request->get('key'),
            'value' => $request->get('value')
        ]);
        return Redirect::route('admin.configs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configs = Config::find($id);
        return view('config.show',compact('configs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configs = Config::find($id);
        return view('config.edit',compact('configs'));
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
        $configs = Config::find($id);
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
        return Redirect::route('admin.configs.edit', array($configs->id))
        ->withErrors($validator)
        ->withInput();
        }
        $configs->update([
            'key' => $request->get('key'),
            'value' => $request->get('value')
        ]);
        return Redirect::route('admin.configs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $configs = Config::find($id);
        $configs->delete();
        return Redirect::route('admin.configs');
    }
    /**
     * Get Rules
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function validator()
    {
        return [
            'key' => 'required|min:3',
            'value' => 'required',
        ];
    }
}
