<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index() {
        return view('/note');
    }

    public function getAllNotes() {
        $userId = Auth::id();
        $notes = Note::where('userID', $userId)->get();

        return view('/note', compact('notes'));
    }

    public function newNoteIndex() {
        return view('/newnote');
    }

    public function newNote(Request $request) {
        $note = new Note();
        $userId = Auth::id();

        if($request->title == "" && $request->content == "") {
            $note->title = "Untitled";
            $note->content = "";
        }
        else if($request->title == "") {
            $note->title = "Untitled";
            $note->content = $request->content;
        }
        else if($request->content == "") {
            $note->title = $request->title;
            $note->content = "";
        }
        else {
            $note->title = $request->title;
            $note->content = $request->content;
        }
        $note->userId = $userId;
        $note->fontsize = $request->fontsize;

        $note->save();

        return redirect('/note');
    }

    public function editNoteIndex($id) {
        $note = Note::find($id);

        return view('/editnote', compact('note'));
    }

    public function editNote(Request $request) {
        $note = Note::find($request->id);

        if($request->title == "" && $request->content == "") {
            $note->title = "Untitled";
            $note->content = "";
        }
        else if($request->title == "") {
            $note->title = "Untitled";
            $note->content = $request->content;
        }
        else if($request->content == "") {
            $note->title = $request->title;
            $note->content = "";
        }
        else {
            $note->title = $request->title;
            $note->content = $request->content;
        }
        $note->fontsize = $request->fontsize;

        $note->save();

        return redirect('/note');
    }

    public function deleteNote($id) {
        $note = Note::find($id);

        if(isset($note)) {
            $note->delete();
        }
        return redirect('/note');
    }
}
