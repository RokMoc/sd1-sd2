<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'first_name' => ['required', 'string'],
        'last_name' => ['required', 'string'],
        'email' => ['required', 'email'],
    ]);

    $user = User::findOrFail($id);
    $user->update($request->only(['first_name', 'last_name', 'email']));

    return redirect()
        ->route('admin.users.index')
        ->with('success', 'User updated successfully.');
}
}