<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function index()
    {
        $user = User::whereEmail('dominique.vilain@hepl.be')
            ->first();

        //C'est de l'eager Loading
        $user->load('notes');
        $heading = "les notes de " .$user->name;
//        $notes = User::whereEmail('dominique.vilain@hepl.be')
//            ->first()
//            ->notes;


        return view('notes.index', compact('heading', 'user'));
    }

    public function create()
    {
        $heading = "Note cration";

        return view('notes.create', compact('heading'));
    }

    public function store(Request $request)
    {
        $description = $request->input('description');

//        $note = new Note();
//        $note->description = $description;
//        $note->image_url = '';
//        $note->user_id = User:
//:whereEmail('dominique.vilain@hepl.be')->first()->id;
//        $note->save();

        $image_url = '';
        $user_id = 21;
        Note::create(compact('description', 'user_id', 'image_url'));

        return to_route('notes.index');
    }

    public function show(Note $note)
    {
        $heading = "One note";
        $note->load('owner');
        return view('notes.show', compact('heading', 'note'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
