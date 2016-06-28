<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
	.jumbotron{
		background-color:#000099;
		color:white;
	}
	h1:hover{
		color:blue;
	}
	.modal-title{
		color:white;
	}
	.modal-dialog {width:500px;
	
	}
	.mob{
		width=100%;
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
	
.thumbnail {margin-bottom:6px;

}
.surr{
	background-image:url('pastimg/freebg5.jpg');
	min-height:768px;
height:auto;
}


	
	</style>
	<script>
	$(document).ready(function() {
		
	var id=0;
	
	$('.thumbnail').click(function(){
      $('.modal-body').empty();
	  id=$(this).attr('id');
	  
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
	
});
$('#lft').click(function(){
	$('.modal-body').empty();
	if(id!="one")
	{
	id='#'+id;
	var par=$(id).parents('div');
	var prev=par.prev();
	
	
	var nowtitle=prev.children('a').attr('title');
	
	$('.modal-title').html(nowtitle);
	$(prev.html()).appendTo('.modal-body');
	id=prev.find('img').attr('id');
	}
	else
	{
		$('.modal-body').html('<h3>Forward>></h3>');
	}
});
$('#rt').click(function(){
	$('.modal-body').empty();
	if(id!="four")
	{
	id='#'+id;
	var par=$(id).parents('div');
	var next=par.next();
	
	
	var nowtitle=next.children('a').attr('title');
	
	$('.modal-title').html(nowtitle);
	$(next.html()).appendTo('.modal-body');
	id=next.find('img').attr('id');
	}
	else
	{
		$('.modal-body').html('<h3>---Backwards--</h3>');
	}
});

});
	</script>
</head>
<body>
<div class="surr">

<div class="container">

<div class="jumbotron">
<center><h1>My Galleria!</h1></center>
</div>
  <div class="row">
    
   
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" class="btn"><img class="thumbnail img-responsive" src="pastimg/one.jpg" id="one"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" class="btn"><img class="thumbnail img-responsive" src="pastimg/two.jpg" id="two"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" class="btn"><img class="thumbnail img-responsive" src="pastimg/three.jpg" id="three"></a></div>
	   
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" class="btn"><img class="thumbnail img-responsive" src="pastimg/four.jpg" id="four"></a></div>
	  <div class="clearfix"></div>
      
   
    <hr>
    
    <hr>
  </div>
<div class="row">
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
		<span class="glyphicon glyphicon-chevron-left pull-left btn btn-primary btn-md" id="lft"></span>
		<span class="glyphicon glyphicon-chevron-right pull-left btn btn-primary btn-md" id="rt"></span>
	</div>
   </div>
  </div>
  
</div>
</div>
</div>
</div>
</div>
</body>