<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
	public function index()
	{
        //on lui demande de retourner un tableau json avec tout les données
        //des users
        return User::all();
	}
}
