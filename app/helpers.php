<?php  
use App\Models;
function get_question_categories(){
 return Models\QuestionCategories::get();
}

function calculate_result($data){
	$correct_ans = 0;
	foreach ($data as $key => $q) {
		
		$question_id = intval(preg_replace('/[^0-9]+/', '', $key), 10);
		
		$t = Models\Answers::where('question_id',$question_id)->where('id',$q)->first();
		
		if($t->correct_answer)
			$correct_ans++;
		
	}
	
	echo "<pre>";
	print_r($correct_ans);
	exit;
	
}