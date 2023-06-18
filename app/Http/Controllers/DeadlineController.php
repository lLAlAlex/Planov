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
        $deadline = new Deadline();
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
        $deadline->userId = $userId;
        $deadline->deadlinedate = $request->deadlinedate;
        $deadline->title = $request->title;
        $deadline->description = $request->description;
        $deadline->fontsize = $request->fontsize;

        $deadline->save();

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
        $deadline->fontsize = $request->fontsize;

        $deadline->save();

        return redirect('/deadline');
    }

    public function deleteDeadline($id) {
        $deadline = Deadline::find($id);

        if(isset($deadline)) {
            $deadline->delete();
        }
        return redirect('/deadline');
    }
}
