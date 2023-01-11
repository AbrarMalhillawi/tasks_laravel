<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function welcom ()
   {
    return "welcom in user page";
   }


   public function showUsers()
   {
   $laptops=[
        ['id' => 1, 'name' => 'LG', 'origin' => 'korea'],
        ['id' => 2, 'name' => 'HP', 'origin' => 'USA'],
        ['id' => 3, 'name' => 'Siemens', 'origin' => 'Germany'],
        ['id' => 4, 'name' => 'rino', 'origin' => 'france'],
    ];
    return view('users',compact('laptops'));
   } 
}