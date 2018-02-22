<?php

namespace App\Http\Controllers;
use App\Models;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
      
    	return view('home.index');
    	// Cart::add('293ad', 'Product 1', 1, 9.99);
    	
    }
}
