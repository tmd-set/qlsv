<?php
class tkadminDAL
{
	function getAll()
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="select * from tbltaikhoan where phanquyen=0";
		$result=mysqli_query($con,$sql);
		$arr=array();
		while($row=mysqli_fetch_array($result))
		{
			$matk =$row["matk"];
			$username = $row["username"];
			$pass = $row["pass"];
			$phanquyen = $row["phanquyen"];
            $tkadminDTO=new tkadminDTO($matk,$username,$pass,$phanquyen);
			$arr[]=$tkadminDTO;
		}
		mysqli_close($con);	
		return $arr;
	}
	
	function Delete($id)
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="delete from tbltaikhoan where matk='$id'";
		mysqli_query($con,$sql);
		mysqli_close($con);	
	}
	function getById($id)
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="select * from tbltaikhoan where phanquyen=0 and matk='$id'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
        $matk =$row["matk"];
        $username = $row["username"];
        $pass = $row["pass"];
        $phanquyen = $row["phanquyen"];
        $obj=new tkadminDTO($matk,$username,$pass,$phanquyen);
		mysqli_close($con);	
		return $obj;
	}
	function Update($obj)
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="Update tbltaikhoan set username='$obj->username',pass='$obj->pass', phanquyen='$obj->phanquyen' where phanquyen=0 and matk='$obj->matk'";
		mysqli_query($con,$sql);
		mysqli_close($con);	
	}

    function Insert($obj)
	{
		$con=new mysqli('localhost','root','','qlsv');
		$sql="insert tbltaikhoan values('$obj->matk','$obj->username','$obj->pass','$obj->phanquyen')";
		mysqli_query($con,$sql);
		mysqli_close($con);	
	}
}
?>