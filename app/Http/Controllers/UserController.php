<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

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

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
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

        return view(
            'users.edit',
            [
                'user' => $user
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
