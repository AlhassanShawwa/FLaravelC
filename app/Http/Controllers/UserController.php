<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function Name($name) {
return 'The Name is ' .$name;
}

public function Age($age) {
return 'The Age is ' .$age;
}

public function Adress() {
return view('test');
}

public function Payment() {
return 'The Payment Page';
}




}
