<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function driverIndex()
   {       
        return view('users.driver.index');
   }
    public function driverAdd()
   {       
        return view('users.driver.add');
   }
}
