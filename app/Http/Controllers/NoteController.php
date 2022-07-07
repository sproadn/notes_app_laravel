<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view('notes', [
            'notes' => $notes
        ]);
        // Redirection vers une page
        //return redirect()->route('index');
    }
}
