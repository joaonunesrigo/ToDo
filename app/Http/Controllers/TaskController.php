<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index(){

   }

   public function create(Request $request){
        return view('taskcreate');
   }

   public function edit(Request $request){
    return view('task-edit');
}

    public function delete(){
        return redirect(route('home'));

}
}
