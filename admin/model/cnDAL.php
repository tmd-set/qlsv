<?php
class cnDAL
{
    function getAll()
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="select * from tblchuyennganh";
        mysqli_set_charset($con,'utf8');
		$result=mysqli_query($con,$sql);        
		mysqli_close($con);	
		$arr=array();
		while($row=mysqli_fetch_array($result))
		{
			$macn =$row["Macn"];
			$tencn = $row["Tencn"];
            $cnDTO=new cnDTO($macn,$tencn);
            $arr[]=$cnDTO;
		}
		return $arr;
	}
}           
?>