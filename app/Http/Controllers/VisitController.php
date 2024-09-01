<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        return view('visits.index');
    }

    public function store()
    {
        return view('visits.store');
    }
}
