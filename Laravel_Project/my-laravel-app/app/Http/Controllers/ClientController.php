<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }

    public function list()
    {
        return view('clients.list');
    }

    public function create()
    {
        return view('clients.create');
    }

}