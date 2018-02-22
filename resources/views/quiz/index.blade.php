 @include('includes.head');
 
 <div class="row">
 	<div class="col-xs-12">
 		<h3 class="text-center">Quiz</h3>
 	</div>
 </div>
<form id="form1" method="post" action="{{url('/')}}/show_quiz_post">
 <?php foreach ($questions as $qkey => $q):   ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="question-title"><?=++$qkey?>. <?=$q->question?></div>
			<div class="question-options">
				<ol type="1" class="no-list-sign">
					<?php foreach ($q->answers as $key => $ans):?>
						<li><input type="radio" name="question_<?=$qkey?>" value="<?=$ans->id?>">&nbsp;&nbsp;&nbsp;<?=$ans->answer_text?></li>	
				  <?php endforeach ?>
				</ol>
			</div>
		</div>
	</div> <!-- row -->
	<hr width="30%" align="left">
<?php endforeach ?>
<input type="submit" value="Submit" />
</form>
@include('includes.footer');
