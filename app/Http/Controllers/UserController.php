<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\View\View;

class Users extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('users')->with('flash_message', 'users Addedd!');
    }

    public function show(string $id)
    {
        $users = User::find($id);
        return view('users.show')->with('users', $users);
    }

    public function edit(string $id)
    {
        $users = User::find($id);
        return view('users.edit')->with('users', $users);
    }

    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('user')->with('flash_message', 'User Updated!');
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
