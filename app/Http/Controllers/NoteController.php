<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes', ['notes' => $notes]);
    }

    function show($id)
    {
        return 'Aquí veremos el detalle de la nota: '.$id;
    }

    public function create()
    {
        return view('add-note');
    }

    // store...

    public function edit($id)
    {
        $note = Note::find($id);

        return ['note' => $note];
    }
}