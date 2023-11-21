<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard.users.index')->only('index');
        $this->middleware('can:dashboard.users.create')->only('create');
        $this->middleware('can:dashboard.users.store')->only('store');
        $this->middleware('can:dashboard.users.show')->only('show');
        $this->middleware('can:dashboard.users.edit')->only('edit');
        $this->middleware('can:dashboard.users.update')->only('update');
        $this->middleware('can:dashboard.users.delete')->only('delete');
    }
    public function index()
    {
        $users = User::all();
        $usersCount = User::all()->count();

        return view(
            'user_index',
            [
                'users' => $users,
                'usersCount' => $usersCount
            ]
        );
    }


    public function create()
    {
        return view(
            'users.create',
        );
    }



    public function store(Request $request)
    {
        $pass = $request->get('password');

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($pass)
        ]);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }



    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view(
            'users.edit',
            [
                'user' => $user,
                'roles' => $roles
            ]
        );
    }



    public function update(Request $request, User $user)
    {
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->roles()->sync($request->get('role_id'));
        $user->save();
        return redirect('/users');
    }



    public function destroy($id)

    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return back();
    }
}
