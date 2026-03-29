<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    private function getConferences(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Tech Future 2026',
                'description' => 'IT conference.',
                'speakers' => 'Muhamed Ali, Jane Ali',
                'date' => '2027-05-10',
                'time' => '14:00',
                'address' => 'Vilnius, Lithuania',
                'clients' => [
                    ['name' => 'Tomas Tonaitis', 'email' => 'tomas@asm.com'],
                    ['name' => 'Ieva Ieva', 'email' => 'ieva@bussines.com'],
                ],
            ],
            [
                'id' => 2,
                'title' => 'Business Growth Summit',
                'description' => 'Business and leadership conference.',
                'speakers' => 'Alice Red',
                'date' => '2028-06-15',
                'time' => '19:30',
                'address' => 'Kaunas, Lithuania',
                'clients' => [
                    ['name' => 'Mantas Mantas', 'email' => 'mantas@mantas.com'],
                ],
            ],
        ];
    }

    public function index()
    {
        $conferences = $this->getConferences();

        return view('employee.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = collect($this->getConferences())->firstWhere('id', (int) $id);

        abort_if(!$conference, 404);

        return view('employee.show', compact('conference'));
    }
}