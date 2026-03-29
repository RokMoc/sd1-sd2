<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        return view('admin.conferences.index');
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(StoreConferenceRequest $request)
    {
        return redirect()->route('admin.conferences.index');
    }

    public function show($id)
    {
        return view('admin.conferences.show');
    }

    public function edit($id)
    {
        return view('admin.conferences.edit');
    }

    public function update(UpdateConferenceRequest $request, $id)
    {
        return redirect()->route('admin.conferences.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.conferences.index');
    }
}