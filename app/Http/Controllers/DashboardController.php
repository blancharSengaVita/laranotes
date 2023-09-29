<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
	public function __invoke()
	{

        $heading = 'Dashboard';

        $books = collect ([
            [
                'title' => 'L’étranger',
                'author' => 'Albert Camus',
                'release_date' => 1942,
            ],
            [
                'title' => 'La peste',
                'author' => 'Albert Camus',
                'release_date' => 1947,
            ],
            [
                'title' => 'La conjuration des imbéciles',
                'author' => 'John Kennedy Toole',
                'release_date' => 1980,
            ],
        ]);


        return view('pages.dashboard', compact('heading', 'books'));

	}
}
