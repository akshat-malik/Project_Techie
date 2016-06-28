<?php
if(isset($_REQUEST['q']))
 { $q=$_REQUEST['q'];
		$final=true;
    mysql_connect("localhost","root","");
			mysql_select_db("proj_techie")or die("error");
			$query="select `email` from `hire`";
			$res=mysql_query($query);
	while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		if($row['email']==$q)
		{
			$final=false;
			
		}
		
	
	}



 echo $final;
 }
 else
	 header("location:index.php");
 
 ?>	