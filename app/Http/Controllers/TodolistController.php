<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TodolistController extends Controller
{
    public function index() {
        return view('/dolist');
    }

    public function getAllList() {
        $userId = Auth::id();
        $todolists = Todolist::where('userID', $userId)->get();

        return view('/dolist', compact('todolists'));
    }

    public function finishList($id) {
        $list = Todolist::find($id);

        if(isset($list) && $list->status == "unfinished") {
            $list->status = "finished";
        }
        else if(isset($list) && $list->status == "finished") {
            $list->status = "unfinished";
        }
        $list->save();

        return redirect('/todolist');
    }

    public function newDoListIndex() {
        return view('/newdolist');
    }

    public function newDoList(Request $request) {
        $lists = new Todolist();
        $userId = Auth::id();

        $rules = [
            'dolist' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $lists->userId = $userId;
        $lists->dolist = $request->dolist;
        $lists->status = "unfinished";

        $lists->save();

        return redirect('/todolist');
    }
}
