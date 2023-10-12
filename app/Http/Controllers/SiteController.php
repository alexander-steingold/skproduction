<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function green()
    {
        return view('landing.green');
    }

    public function white()
    {
        return view('landing.white');
    }

    public function studio()
    {
        return view('landing.studio');
    }

    public function music()
    {
        return view('landing.music');
    }

    public function course()
    {
        return view('landing.course');
    }

    public function equipment()
    {
        return view('landing.equipment');
    }
}
