<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
     return view('welcome');
    }
    public function add()
    {
      return view('tasks.add');
    }

}
