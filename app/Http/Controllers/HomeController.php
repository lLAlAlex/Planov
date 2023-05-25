<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        return view('/home');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function getAllData() {
        $userId = Auth::id();
        $deadlineCount = Deadline::where('userID', $userId)->count();
        $noteCount = Note::where('userID', $userId)->count();
        $deadlines = Deadline::where('userID', $userId)->orderBy('deadlinedate', 'asc')->get();
        $notes = Note::where('userID', $userId)->get();

        return view('home', compact('deadlineCount', 'noteCount', 'deadlines', 'notes'));
    }
}
