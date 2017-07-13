<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

      $messages=[
        [
          'id'=>1,
          'contenido'=>'Este es mi primer mensaje',
          'image'=>'http://lorempixel.com/600/338?1',
        ],
        [
          'id'=>2,
          'contenido'=>'Este es mi segundo mensaje',
          'image'=>'http://lorempixel.com/600/338?2'
        ],
        [
          'id'=>3,
          'contenido'=>'Este es mi tercer mensaje',
          'image'=>'http://lorempixel.com/600/338?3'
        ],
        [
          'id'=>4,
          'contenido'=>'Este es mi cuarto mensaje',
          'image'=>'http://lorempixel.com/600/338?4'
        ],
      ];

      return view('welcome', ['messages'=>$messages]);
    }
}
