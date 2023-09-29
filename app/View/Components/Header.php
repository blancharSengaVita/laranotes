<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public function __construct(public string $heading)
    {

    }

    public function render()
	{
		return view('components.header');
	}
}
