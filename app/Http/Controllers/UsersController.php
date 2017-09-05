<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Role;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where(function($query) use ($request) {
            //filter by keyword entered
            if( ( $term = $request->get('term') ) ) {
                $query->where('id', 'like', '%' . $term . '%');
                $query->orWhere('first_name', 'like', '%' . $term . '%');
                $query->orWhere('last_name', 'like', '%' . $term . '%');
                $query->orWhere('email', 'like', '%' . $term . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('users.index', compact('users'));
    }
    public function autocomplete(Request $request)
    {
        //Prevent this method called by non ajax
        if($request->ajax())
        {
            $users = User::where(function($query) use ($request) {
                //filter by keyword entered
                if( ( $term = $request->get('term') ) ) {
                    $query->where('id', 'like', '%' . $term . '%');
                    $query->orWhere('first_name', 'like', '%' . $term . '%');
                    $query->orWhere('last_name', 'like', '%' . $term . '%');
                    $query->orWhere('email', 'like', '%' . $term . '%');
                }
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        //Convert to json
        foreach ($users as $user) {
          $results[] = ['id' => $user->id, 'value' => $user->first_name ." ". $user->last_name];
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
        $roles = Role::pluck('name', 'id');
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $validator = Validator::make($request->all(), $this->validator());
        if($validator->fails()){
            return Redirect::route('admin.users.create')
            ->withErrors($validator)
            ->withInput();
        }
        $user = new User();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        $user->roles()->sync($request->input('role_list'));
        return Redirect::route('admin.users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::pluck('name', 'id');
        return view('users.edit',compact('users','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $users = User::find($id);
        $validator = Validator::make($request->all(), $this->updateValidator());
        if($validator->fails()){
        return Redirect::route('admin.users.edit', array($users->id))
        ->withErrors($validator)
        ->withInput();
        }
        $users->update([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name')
        ]);
        
        $users->roles()->sync($request->input('role_list'));
        return Redirect::route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return Redirect::route('admin.users');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'role_list' => 'required'
        ];
    }

    protected function updateValidator()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'role_list' => 'required'
        ];
    }
}
