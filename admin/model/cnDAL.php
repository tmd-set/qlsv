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
			$macn =$row["macn"];
			$tencn = $row["tencn"];
            $cnDTO=new cnDTO($macn,$tencn);
            $arr[]=$cnDTO;
		}
		return $arr;
	}

	function getById($id)
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="select * from tblchuyennganh where macn='$id'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
        $macn =$row["macn"];
        $tencn = $row["tencn"];
        $obj=new cnDTO($macn,$tencn);
		mysqli_close($con);
		return $obj;
	}

    function Delete($id)
    {
        $con=new mysqli('localhost','root','','qlsv');
        $sql="delete from tblchuyennganh where macn='$id'";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }

    function Update($obj)
    {
        $con=new mysqli('localhost','root','','qlsv');
        $sql="Update tblchuyennganh set tencn='$obj->tencn' where macn='$obj->macn'";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }

    function Insert($obj)
    {
        $con=new mysqli('localhost','root','','qlsv');
        $sql="insert tblchuyennganh values('$obj->macn','$obj->tencn')";
        //echo($sql);
        mysqli_query($con,$sql);
        mysqli_close($con);
    }
}           
?>