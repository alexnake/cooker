<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Show all recepies
     *
     * @return
     */
    public function index()
    {
        return view('about');
    }
}
