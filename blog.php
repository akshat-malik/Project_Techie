<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	.well{
		background-color:#0033cc;
		color:white;
	}
	.well:hover{
		background-color:#ff3300;
	}
	.header{
		color:white;
	}

</style>
<script>
$(document).ready(function(){
	$(".well").fadeIn("slow");
	$('#sub').hide();
	$('#quer').keyup(function(){
		if($(this).val().length>0)
			$('#sub').show();
	});
});
</script>

</head>
<body>
<div class="container">
<div class="header">
<h1>Our Blog!</h1>
</div>
<?php
 mysql_connect("localhost","root","");
			mysql_select_db("proj_techie")or die("error");
			$query="select * from `blog` where 1 order By `date` desc ,`id` desc" ;
		
			$res=mysql_query($query);
			while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names[]=$row['title'];
		$texts[]=$row['btext'];
		$dates[]=$row['date'];
		echo "<div class='well' style='display:none'>";
		 echo "<h3>TITLE:".$row['title']."</h3><br>".$row['btext'];
		 echo "<span class='pull-right'>";
		 echo "Date:".$row['date'];
		 echo "</span>";
		 echo "</div>";
		 
		 
	}
?>
<div>
<form method="post" action="index.php?id=6">
<div class="input-group">
<span class="input-group-addon">Search:</span>
<input type="text" placeholder="SearchBy: BlogText Title Or even Date!(Case Sensitive)"class="form-control" name="quer" id="quer"/>
</div>
<center><input type="submit" name="sub" id="sub" class="btn btn-success btn-md" value="Go!"/><center>
</form>
</div>
</div>
</body>
</html>