<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
}
