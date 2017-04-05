<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  public function hologin(){
      return view('Admin.hologin');
  }

  public function medicine(){
      return view('Admin.center.medicine');
  }

  public function doctor(){
      return view('Admin.center.doctor');
  }

  public function patient(){
      return view('Admin.center.patient');
  }
}
