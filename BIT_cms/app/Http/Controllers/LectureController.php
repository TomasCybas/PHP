<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function create(){
        $groups = Group::all();
        return view('admin.lectures.create', [
            'groups' => $groups,
        ]);
    }
}
