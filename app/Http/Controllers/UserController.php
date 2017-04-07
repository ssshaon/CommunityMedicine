<?php

namespace App\Http\Controllers;

use App\center;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
  public function create(){
      return view('Admin.user.create');
  }
  public function store(Request $request){
$data=$request->all();
center::create($data);
Session::flash('message','Center Added Successfully');


return redirect()->back();



  }
}
