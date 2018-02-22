<?php

namespace App\Http\Controllers;
use App\Models;
use Cart;
use Illuminate\Http\Request;

class LoadQuizController extends Controller
{
    function index($id){
      if(!$id)
      	return;

      $questions = Models\Questions::where('question_category_id',$id)->with('answers')->get();
      
    	return view('quiz.index',['questions' => $questions]);
    	// Cart::add('293ad', 'Product 1', 1, 9.99);
    	
    }

    function quiz_post(){
      
      calculate_result($_POST);

    }
}
