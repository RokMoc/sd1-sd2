<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function edit($id)
    {
        return view('admin.users.edit');
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'first_name' => ['required', 'string'],
        'last_name' => ['required', 'string'],
        'email' => ['required', 'email'],
    ]);

    return redirect()
        ->route('admin.users.index')
        ->with('success', 'User updated successfully.');
}
}