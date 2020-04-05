<?php

namespace App\Http\Controllers;


use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->all());
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);


        $requestArray = $request->all();
        $requestArray['password'] = Hash::make($requestArray['password']);
        $user = User::create($requestArray);

        session()->flash('user_created');
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user){
            if($user->email === $request['email']){
                $validate = $request->validate([
                    'name' => 'required | string | max:191 | min:2 ',
                    'email' => 'required | email ',
                ]);
            }else{
                $validate = $request->validate([
                    'name' => 'required | string | max:191 | min:2 ',
                    'email' => 'required | email | unique:users',
                ]);
            }
        }
        $requestArray = $request->all();

        if(isset($requestArray['password']) && $requestArray['password'] != ''){
            $requestArray['password'] = Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }

        $user->update($requestArray);

        session()->flash('edit_user');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('user_created');
        return redirect()->route('users.index');
    }

}
