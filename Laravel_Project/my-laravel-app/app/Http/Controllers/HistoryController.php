<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('history.index');
    }

    public function calls()
    {
        return view('history.calls');
    }

    public function email()
    {
        return view('history.email');
    }
}