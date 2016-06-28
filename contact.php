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
			$query="insert into `feedback` values (NULL,'$email','$text','$date')";
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
			em=1;
		}
		else
			em=0;
		check();
	});
$('#tx').keyup(function(){
	var value2=$(this).val();
	 if(value2.length>0)
		 tx=1;
	 else
		 tx=0;
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
</style>
</head>
<body>
<h3 id="err">Please Enter Valid Email And nonempty feedback</h3>
<h3 id="suc"><?php 
if(isset($resu))
	echo "<span class='glyphicon glyphicon-ok'></span>";
echo @$resu;
?></h3>
<form method="post">
<div class="input-group input-group-sm">
<span class="input-group-addon">Email</span>
<input type="text" class="form-control" placeholder="EnterEmail" name="email" id="em"/>
</div>
<textarea name="tx" class="form-control" placeholder="Your Query here" id='tx'></textarea>
<input type="submit" class="btn btn-primary btn-lg" name="button" value="Submit!" id="button"/>
</form>
</body>
</html>