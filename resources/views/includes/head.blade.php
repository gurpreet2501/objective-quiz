<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Objective Quiz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<?php $url = URL::to("/");?>
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=$url?>/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?=$url?>/css/gps-style.css?<?=time()?>" rel="stylesheet">      
		<!-- scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>				
	</head>
	<?php $categories = get_question_categories(); ?>
	<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
	<div class="nav-container navbar-fixed-top nav-sticky">
		<nav class="sub-navbar">
			<div class="list-select">
				<div class="inner-select">
					<div class="selected"><i class="lil-dollar"></i></div>
					<ul style="display: none; height: 101px; padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
						<li><a href="#!"><i class="lil-dollar"></i></a></li>
						<li><a href="#!"><i class="lil-gbp"></i></a></li>
						<li><a href="#!"><i class="lil-try"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</nav><!-- /.sub-navbar -->
	    <nav class="navbar navbar-default">
	      	<div class="container">
	        	<div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="/">
			          	Objective Questions
			        </a>
	        	</div>
	        	<div id="navbar" class="navbar-collapse collapse">
				    <ul class="nav navbar-nav navbar-left">
				        <li>
				            <a href="index.html" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">Quiz <span class="glyphicon glyphicon-chevron-down"></span></a>
				            <ul class="dropdown-menu">
				            	<?php foreach ($categories as $key => $category): ?>
				                <li value="<?=$category->id?>"><a href="/show_quiz/<?=$category->id?>"><?=$category->name?></a></li>
				            	<?php endforeach ?>
				            </ul>
				        </li>
				        
				  
				        <li><a href="#">About</a></li>
				        <li><a href="#">Contact</a></li>
				    </ul>
			    </div><!--/.nav-collapse -->
	      	</div><!--/.container -->
	    </nav>
	</div><!-- /.nav-container -->
	<div class="margin-top-50"></div>
	<div class="container">

