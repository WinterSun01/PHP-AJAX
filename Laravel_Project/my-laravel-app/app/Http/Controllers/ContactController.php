<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function list()
    {
        return view('contacts.list');
    }

    public function create()
    {
        return view('contacts.create');
    }
}