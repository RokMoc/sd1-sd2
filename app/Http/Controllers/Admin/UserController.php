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
        return redirect()->route('admin.users.index');
    }
}