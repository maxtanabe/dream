<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  public function index() {
    $test = "test";
    return view('welcome',compact('test'));
  }
}
