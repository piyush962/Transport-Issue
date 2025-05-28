<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReprotController extends Controller
{
    public function index()
    {
        return view('report.index');
    }
}