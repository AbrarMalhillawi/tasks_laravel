<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task extends Controller
{
    
  private $laptops=[
    ['id' => 1, 'name' => 'LG', 'origin' => 'korea'],
    ['id' => 2, 'name' => 'HP', 'origin' => 'USA'],
    ['id' => 3, 'name' => 'Siemens', 'origin' => 'Germany'],
    ['id' => 4, 'name' => 'rino', 'origin' => 'france'],
];

//    public function welcom ()
//    {
//     $welcom=$this->laptops;
   
//     return view('users',compact('welcom'));
    
//    }


   public function show()
   {
   $pp=$this->laptops;
    return view('users',compact('pp'));

   } 
}