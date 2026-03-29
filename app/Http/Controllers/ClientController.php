<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    private function getConferences(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Crypto Conference 2026',
                'description' => 'Crypto conference.',
                'speakers' => 'Tadues Tadish, Mohamed Ali',
                'date' => '2026-07-02',
                'time' => '07:00',
                'address' => 'Kaunas, Lithuania',
            ],
            [
                'id' => 2,
                'title' => 'Business Growth',
                'description' => 'Business and leadership conference.',
                'speakers' => 'Ema Red',
                'date' => '2026-05-15',
                'time' => '14:40',
                'address' => 'Vilnius, Lithuania',
            ],
        ];
    }

    public function index()
    {
        $conferences = $this->getConferences();

        return view('client.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = collect($this->getConferences())->firstWhere('id', (int) $id);

        abort_if(!$conference, 404);

        return view('client.show', compact('conference'));
    }

    public function register(Request $request, $id)
    {
        return redirect()
            ->back()
            ->with('success', 'Registration successful.');
    }
}