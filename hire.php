<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}

if(isset($_POST['button']))
{
	 mysql_connect("localhost","root","");
			mysql_select_db("proj_techie")or die("error");
			$email=$_POST['email'];
			$text=$_POST['tx'];
			$date=date('Y-m-d');
			$query="insert into `hire` values (NULL,'$email','$text','$date')";
			mysql_query($query);
			if(mysql_affected_rows()>0)
		{$resu="Successfuly inserted";
			
			}
			else
			{
				$resu="Problem in recording feedback try after some time";
			}
}
?>
<html>
<head>
<script>
var em=0;
var tx=0;
$(document).ready(function(){
	
	var check = function(){
		if(em==0 || tx==0)
	{$('#button').hide();
	$('#err').show();
	}
else
{$('#button').show();
 $('#err').hide();
}
}
check();
$('#em').keyup(function(){
		var value=$(this).val();
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(re.test(value))
		{
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if(xmlhttp.responseText==1)
                {document.getElementById("helper").className="glyphicon glyphicon-ok btn btn-success";
					document.getElementById("helper").innerHTML ="Valid!";
					em=1;
				}
				else
				{
					document.getElementById("helper").className="glyphicon glyphicon-remove btn btn-danger";
					document.getElementById("helper").innerHTML ="already registered";
					em=0;
				}
            }
        };
        xmlhttp.open("GET", "chk.php?q=" + value, true);
        xmlhttp.send();
		}
		else
		{em=0;
	    document.getElementById("helper").className="glyphicon glyphicon-remove btn btn-danger";
					document.getElementById("helper").innerHTML ="InvalidId";
		}
		check();
	
});
$('#tx').keyup(function(){
	var value=$(this).val();
	if(value.length>10 && value.length < 500)
	{
		tx=1;
		document.getElementById("helper1").className="glyphicon glyphicon-ok btn btn-success ";
		document.getElementById("helper1").innerHTML ="Works!";
	}
	else
	{tx=0;
document.getElementById("helper1").className="glyphicon glyphicon-remove btn btn-danger";
document.getElementById("helper1").innerHTML =" Minimum of 10 characters and max of 500 chars";
	}
	check();
});
});



</script>
<style>
#err{
	color:red;
}
#suc{
	color:white;
}
.jumbotron{
	background-color:#000099;
	color:white;
}
h1:hover{
	color:red;
}
.suc{
	color:white;
}
</style>
</head>
<body>	
<center>
<div class="container img-responsive">
<div class="jumbotron">
<h1>Work With us!</h1>
</div>
<h1 class="suc"><?php echo @$resu;?></h1>
<form method="post">
<div class="input-group">
<span class="input-group-addon">Email</span>
<input type="text" class="form-control" placeholder="EnterEmail" name="email" id="em"/><br>
<span class="input-group-addon"><span id="helper"></span></span>
</div>
<div class="input-group">
<textarea name="tx" class="form-control" placeholder="Your Application (Greater than 10 characters , Less than 500)" id='tx' rows=12 cols=100></textarea><span class="input-group-addon"><span id="helper1"></span></span>
</div>
<input type="submit" class="btn btn-primary btn-lg" name="button" value="Submit!" id="button"/>
</form>
</div>
</center>
</body>