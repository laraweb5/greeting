<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BootstrapController extends Controller
{
    //
    public function index()
    {
      return view('bootstrap');
    }
}
