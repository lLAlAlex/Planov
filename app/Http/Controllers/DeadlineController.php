<?php

namespace App\Http\Controllers;

use App\Models\Deadline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DeadlineController extends Controller
{
    public function index() {
        return view('/deadline');
    }

    public function getAllDeadlines() {
        $userId = Auth::id();
        $deadlines = Deadline::where('userID', $userId)->get();

        return view('/deadline', compact('deadlines'));
    }

    public function newDeadlineIndex() {
        return view('/newdeadline');
    }

    public function newDeadline(Request $request) {
        $deadlines = new Deadline();
        $userId = Auth::id();

        $rules = [
            'deadlinedate' => 'required',
            'title' => 'required',
            'description' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        $deadlines->userId = $userId;
        $deadlines->deadlinedate = $request->deadlinedate;
        $deadlines->title = $request->title;
        $deadlines->description = $request->description;

        $deadlines->save();

        return redirect('/deadline');
    }

    public function editDeadlineIndex($id) {
        $deadline = Deadline::find($id);

        return view('/editdeadline', compact('deadline'));
    }

    public function editDeadline(Request $request) {
        $deadline = Deadline::find($request->id);

        $rules = [
            'deadlinedate' => 'required',
            'title' => 'required',
            'description' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        $deadline->deadlinedate = $request->deadlinedate;
        $deadline->title = $request->title;
        $deadline->description = $request->description;

        $deadline->save();

        return redirect('/deadline');
    }
}
