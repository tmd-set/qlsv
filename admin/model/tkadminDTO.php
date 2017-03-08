<?php
class tkadminDTO
{
	var $matk;
    var $username;
    var $pass;
    var $phanquyen;
	function __construct($matk, $username, $pass, $phanquyen)
	{
		$this->matk=$matk;
        $this->username=$username;
        $this->pass=$pass;
        $this->phanquyen=$phanquyen;
	}	
}
?>
