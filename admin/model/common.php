<?php
class common
{
	function execQuery($strQuery)
	{
		$con=new mysqli("localhost","root","","qlsv");
		
		mysqli_query($con,$strQuery);
		mysqli_close($con);	
	}	
	function getQuery($strGet)
	{
		$con=new mysqli("localhost","root","","qlsv");
		mysqli_set_charset($con,'utf8');
		$result=mysqli_query($con,$strGet);
		mysqli_close($con);
		return $result;
	}
}
?>