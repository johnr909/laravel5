<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about() 
    {
    	$first = 'John';
    	$last = 'Rose';

    	return view('about')->with(compact('first', 'last'));

    }
}
