<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;

class ConferenceController extends Controller
{
    private function getConferences(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Tech Future 2026',
                'description' => 'Technology trends conference.',
                'speakers' => 'John Doe, Jane Smith',
                'date' => '2026-05-10',
                'time' => '10:00',
                'address' => 'Vilnius',
                'is_past' => false,
            ],
            [
                'id' => 2,
                'title' => 'Business Summit',
                'description' => 'Business conference.',
                'speakers' => 'Alice Brown',
                'date' => '2026-06-15',
                'time' => '09:30',
                'address' => 'Kaunas',
                'is_past' => true,
            ],
        ];
    }

    public function index()
    {
        $conferences = $this->getConferences();

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function show($id)
    {
        $conference = collect($this->getConferences())->firstWhere('id', (int) $id);

        abort_if(!$conference, 404);

        return view('admin.conferences.show', compact('conference'));
    }

    public function edit($id)
    {
        $conference = collect($this->getConferences())->firstWhere('id', (int) $id);

        abort_if(!$conference, 404);

        return view('admin.conferences.edit', compact('conference'));
    }

    public function store(StoreConferenceRequest $request)
    {
        return redirect()->route('admin.conferences.index');
    }

    public function update(UpdateConferenceRequest $request, $id)
    {
        return redirect()->route('admin.conferences.index');
    }

    public function destroy($id)
{
    $conference = collect($this->getConferences())->firstWhere('id', (int) $id);

    abort_if(!$conference, 404);

    if ($conference['is_past']) {
        return redirect()
            ->route('admin.conferences.index')
            ->with('error', 'Past conferences cannot be deleted.');
    }

    return redirect()
        ->route('admin.conferences.index')
        ->with('success', 'Conference deleted successfully.');
}
}