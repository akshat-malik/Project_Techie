<?php
define('MyConst', TRUE);
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
	
	.surr{
	background-image:url('pastimg/freebg5.jpg');
	min-height:768px;
height:auto;
}
.menu{
	height:100%;
	width:285px;
	background-color:black;
	color:white;
	position:fixed;
	left top;
	left:-285px;
}
.menu ul {
  border-top: 1px solid #636366;
  list-style: none;
  margin: 0;
  padding: 0;
}

.menu li {
  border-bottom: 1px solid #636366;
  font-family: 'Open Sans', sans-serif;
  line-height: 45px;
  padding-bottom: 3px;
  padding-left: 20px;
  padding-top: 3px;
}

.menu a {
  color: #fff;
  font-size: 15px;
  text-decoration: none;
  text-transform: uppercase;
}	
body {
  left: 0;
  margin: 0;
  overflow: hidden;
  position: relative;
}
.smimg{
	height:50px;
	width:50px;
}	

	</style>
	<script>
	$(document).ready(function() {
		var clk=0;
		
		$('#icon-opcl').click(function(){
			if(clk==0)
			{
				$('.menu').animate({left:'0px'},"slow");
				$('body').animate({left:'285px'},"slow");
				clk++;
			}
			else{
				clk--;
				$('.menu').animate({left:'-285px'},"slow");
				$('body').animate({left:'0px'},"slow");
			}
			
		});
	});
	</script>
	</head>
<body>
<div class="surr">
<div class="menu">
<ul>
<br><br><br>
<li><a href="index.php?id=1">Home</a></li>
<li><a href="index.php?id=2">Past Works</a></li>
<li><a href="index.php?id=3">ContactUs</a></li>
<li><a href="index.php?id=4">WorkWithUs</a></li>
<li><a href="index.php?id=5">Blog</a></li>
<li><a href="http://www.facebook.com"><img class="smimg" src="soc/images.png"/></a>&nbsp;&nbsp;<a href="http://www.twitter.com"><img src="soc/images2.png" class="smimg"/></a></li>
</ul>
</div>
<span class=" btn btn-primary btn-lg glyphicon glyphicon-th" id="icon-opcl"></span>
<div class="fill">
<?php 
if(isset($_GET['id']))
{$op=$_GET['id'];
 switch($op)
 {
	 case "1": include("teamint.php");break;
	 case "2": include("past.php");break;
	 case "3": include("contact.php");break;
	 case "4":include("hire.php");break;
	 case "5":include("blog.php");break;
	 case "6":include("search.php");break;
	 default:  header("location:index.php");break;
 }
}
else
	include("teamint.php");
?>
</div>
</div>
</body>
</html>