<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
   public function index(Request $r){


    $task = Task::all()->take(3);



    return view('home',['task' => $task]);

   }
}
