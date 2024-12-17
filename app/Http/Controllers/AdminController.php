<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function ClassRoomPage()
    {
        return view('admin.classroom.class_room');
    }
}
