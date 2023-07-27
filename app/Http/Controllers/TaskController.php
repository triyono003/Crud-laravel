<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
      return view('tasks.add',[
          "book" => DB::table('book')->orderBy('id','desc')->get(),
      ]);
    }
    
    public function postAdd(Request $request)
    {
      DB::table('book')->insert([
          "title" => $request->title,
          "author" => $request->author,
          "year" => $request->year,
       ]);
       return back();
    }
    
    public function edit($id)
    {
      $books = DB::table('book')->where('id',$id)->first();
      return view('tasks.edit', ['books' => $books]);
    }
    
    public function update(Request $request, $id)
    {
      DB::table('book')->where('id',$id)->update([
          "title" => $request->title,
          "author" => $request->author,
          "year" => $request->year,
        ]);
      return redirect('tasks');
    }
    
    public function destroy($id)
    {
      DB::table('book')->where('id',$id)->delete();
      return redirect('tasks');
    }
   
}
