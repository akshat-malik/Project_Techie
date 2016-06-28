<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
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
	h3{
		color:white;
	}

</style>
<script>
$(document).ready(function(){
	$(".well").fadeIn("slow");
	//($('#hid').val());
	//alert($('#num').val());
	var i=0;
	var substr=$('#hid').val();
	var count=$('#num').val();
	
	while(i<count)
	{var element=$(".well").eq(i);
		var text=element.html();
	//alert(text);
	//alert(substr);
	if(text!="" && substr!="")
	{ 
		//alert("here");
		var index=text.indexOf(substr);
		//alert(index);
		var text1=text.slice(0,index);
		//alert(text1);
		text1=text1+"<b><em>"+substr+"</em></b>";
		
		var text2=text.slice(index+substr.length,text.length);
		//alert(text1);
		//alert(text2);
		text1=text1+text2;
		//alert(text1);
		element.html(text1);
	}
	
	i++;
	}
});
</script>

</head>
<body>
<div class="container">	
	<div class="header">
	<h1>Search Results--></h1>	
	</div>
	
	<?php
  if(isset($_POST['quer']))
  { $quer=$_POST['quer'];
	  mysql_connect("localhost","root","");
			mysql_select_db("proj_techie")or die("error");
			$query="select * from `blog` where `title` like BINARY '%".$quer."%' or `btext` like BINARY'%".$quer."%' or `date` like BINARY '%".$quer."%' order By `date` desc ,`id` desc" ;
			$res=mysql_query($query);
			$count=0;
			while($row=mysql_fetch_array($res))
				{
		print_r($row);
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
		$count=(count(@$names));
		 if(mysql_num_rows($res)==0)
		 {
			 echo "<h3>No Results Found</h3>";
			 header("refresh:5;index.php?id=5");
		 }
	  }
  else
	 header("location:index.php?id=5");
  ?>
  <input type="hidden" value="<?php echo $quer;?>" id="hid"/>
  <input type="hidden" value="<?php echo $count;?>" id="num"/>
  </div>