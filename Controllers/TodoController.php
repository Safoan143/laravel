<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function homepage(){
    return view('homepage');
   }

   // public function Addtodo(){
   //    return view('Addtodo');
   //   }


      function Alltodo(){
      return view('Alltodo');
     }

      function completeTodo(){
      return view('completeTodo');
     }
     function storeTodo(Request $request)  {
       $request->validate(
        [ 
        'titel' => 'required|max:50',
        'detail' => 'required|min:10|max:255',
        // 'auth' => 'required'
        
        ],
        [
            'titel.required'=> 'Please enter Your title',
            'detail.required'=> 'Please enter Your detail',
            // 'auth.required'=> 'Your Auth is missing'

            
        ]
    );

    // database store //

    $myTodo = new Todo();
    $myTodo ->titel = $request->titel;
    $myTodo ->detail = $request->detail;
    $myTodo ->auth = $request->auth;
    $myTodo->save();

    return back();

  }
}
