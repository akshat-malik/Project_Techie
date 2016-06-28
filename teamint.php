<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.well{
	background-color:#000099;
	color:white;
	font-family:cursive;
	font-size:24px;
	display:none;
}
.well:hover{
	background-color:#ff00ff;
	color:white;
}
.surr{
	background-image:url('pastimg/freebg5.jpg');
	min-height:768px;
height:auto;
}
h1{
	color:white;
}
.modal-title{
		color:white;
	}
	.modal-dialog {width:500px;
	
	}
	
	.modal-header{ 
   background-color: black; 
}
.modal-body{
	background-color: black; 
	
}
	.modal-footer{
	background-color: black; 
}

</style>
<script>
$(document).ready(function(){
	
	$(".well").fadeIn("slow");
	$('#tog').click(function(){
		$(".well").fadeToggle();
	});
	var i=0;
	var myvar;
	var srcs=['test/one.jpg','test/two.jpg','test/three.jpg'];
	var titles=['Our Customers are happy','We Deliver','We Design'];
	var run=function()
	{  
		
		 //alert("here"+i);
			var html="<img src='"+srcs[i]+"' class='img-responsive' style='display:none'/>";
			$('.modal-body').children().fadeOut();
			$('.modal-body').empty();
			$(html).appendTo('.modal-body');
			$('.modal-title').text(titles[i]);
			$('.modal-body').children().fadeIn();
			i++;
			if(i>2)
				i=0;
			myvar=setTimeout(run,3000);
			
		
	}
	$('#viewMod').click(function(){
		 //alert('buttonclicked');
      //	alert(srcs[0]);
	  clearTimeout(myvar);
	  i=0;
	 
	  var html="<img src='"+srcs[0]+"' class='img-responsive'/>";
	  $(html).appendTo('.modal-body');
	  $('.modal-title').text(titles[0]);
	  $('#myModal').modal({show:true});
	  run();
	  
	});
});
</script>

</head>
<body>
<div class="surr">

<div class="container">
<div class="row">
<div class="col-sm-12">
<center><h1>Meet Our team <button class="btn btn-primary" id="tog"><span class="glyphicon glyphicon-th-large"></span></button></h1></center>
<div class="well">
<img src="team/one.jpg" class="smimg"/><br>
Dev- Our chief graphics designer, mainly deals with webapp designs
</div>
<div class="well">
<img src="team/two.jpg" class="smimg"/><br>
Ram- A budding professional in the field of UI/UX designs
</div>
<div class="well" class="smimg">
<img src="team/three.jpg" class="smimg"/><br>
Shyam-Never has a designer been so innovative
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<h1><a class="btn btn-success btn-lg" id="viewMod">Our testimonials</a></h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">

  <div class="modal-dialog img-responsive" id="myModal">
  <div class="modal-content">
    <div class="modal-header">
		<button class="btn btn-danger pull-right" type="button" data-dismiss="modal">X</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal">Close</button>
		
	</div>
   </div>
  </div>







</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>