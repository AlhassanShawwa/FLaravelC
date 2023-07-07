<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
public function index()
{
    return view('test');
}

public function web()
{
    return "welcome";
}

public function user()
{
    return'welcome home';
}


public function contant()
{
    return'welcome home';
}

public function main()
{
    return'welcome home';
}


}

