<?php
include("../model/tkadminDTO.php");
include("../model/tkadminDAL.PHP");
include("../model/cnDTO.php");
include("../model/cnDAL.PHP");

include("../view/tkadmin/tkadminView.php");
include("../view/chuyennganh/cnView.php");
include("../view/adminindexView.php");
?>
<script src="../../external/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="../../assets/css/jquery-ui.min.css"/>
<link rel="stylesheet" href="../../assets/css/jquery-ui.structure.min.css"/>
<link rel="stylesheet" href="../../assets/css/jquery-ui.theme.min.css"/>
<!--    <link rel="stylesheet" href="../../assets/css/bootstrap.css"/>-->
<!--    <link rel="stylesheet" href="../../assets/css/custom.css"/>-->
<!--    <link rel="stylesheet" href="../../assets/css/font-awesome.css"/>-->
<?php
if($_SERVER['REQUEST_METHOD']=='GET')
{
	//Quan ly Admin
	if(isset($_GET["actionTkAdmin"]))
	{
		switch($_GET["actionTkAdmin"])
		{
			case "them":
			
			$tkadminView=new tkadminView();
			$tkadminView->themtkadmin();
			break;
				
			case "Sua":
			if(isset($_GET["matk"]))
			{
				
				$matk=$_GET["matk"];
				$tkadminDAL=new tkadminDAL();
				$obj=$tkadminDAL->getById($matk);
				
				$tkadminView=new tkadminView();
				$tkadminView->suatkadmin($obj);
			}
			break;

			case "xoa":
			if(isset($_GET["matk"]))
			{
				
				$matk=$_GET["matk"];
				$tkadminDAL=new tkadminDAL();
				$tkadminDAL->Delete($matk);
			
				
				$arr=$tkadminDAL->getAll();
				$tkadminView=new tkadminView();
				$tkadminView->listtkadmin($arr);
			}
			break;

			default:
            $tkadminDAL=new tkadminDAL();
            $arr=$tkadminDAL->getAll();
            $tkadminView=new tkadminView();
            $tkadminView->listtkadmin($arr);
            break;
		}
	} 
	//Quan ly Chuyen nganh
	else if(isset($_GET["actionCN"]))
	{
		switch($_GET["actionCN"])
		{
			case "them":
			$cnView = new cnView();
			$cnView->them();
			break;
				
			case "Sua":
			if(isset($_GET["macn"]))
			{
				$macn = $_GET["macn"];
				$DAL = new cnDAL();
				$obj=$DAL->getById($macn);

				$cnView = new cnView();
				$cnView->sua($obj);
			}
			break;
			case "xoa":
                if(isset($_GET["macn"]))
                {
                    $macn = $_GET["macn"];
                    $DAL = new cnDAL();
                    $obj=$DAL->Delete($macn);

                    $arr=$DAL->getAll();
                    $cnView = new cnView();
                    $cnView->danhsach($arr);
                }
			// if(isset($_GET["macn"]))
			// {
				
			// 	$macn=$_GET["macn"];
			// 	$tkadminDAL=new tkadminDAL();
			// 	$tkadminDAL->Delete($matk);
			
				
			// 	$arr=$tkadminDAL->getAll();
			// 	$tkadminView=new tkadminView();
			// 	$tkadminView->listtkadmin($arr);
			// }
			break;
			default:
            $cnDAL=new cnDAL();
            $arr=$cnDAL->getAll();
            $cnView=new cnView();
            $cnView->danhsach($arr);
            break;
		}
	} 
	else
	{
        $AdminIndexView = new AdminIndexView();
        $AdminIndexView->adminIndex();
	}
}else if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST["btnThemAdmin"]))
    {
        $matk=$_POST["txtmatk"];
        $username=$_POST["txtusername"];
        $pass=$_POST["txtpass"];
        $phanquyen=$_POST["txtphanquyen"];
        
        $obj=new tkadminDTO($matk,$username,$pass,$phanquyen);
        
        $tkadminDAL=new tkadminDAL();
        $tkadminDAL->Insert($obj);
        
        $arr=$tkadminDAL->getAll();
        $tkadminView=new tkadminView();
        $tkadminView->listtkadmin($arr);	
    }

    else if(isset($_POST["btnSuaAdmin"]))
    {
        $matk=$_POST["txtmatk"];
        $username=$_POST["txtusername"];
        $pass=$_POST["txtpass"];
        $phanquyen=$_POST["txtphanquyen"];
        
        $obj=new tkadminDTO($matk,$username,$pass,$phanquyen);

        $tkadminDAL=new tkadminDAL();
        $tkadminDAL->Update($obj);
        
        $arr=$tkadminDAL->getAll();
        $tkadminView=new tkadminView();
        $tkadminView->listtkadmin($arr);	
    }

    else if(isset($_POST["btnThemCN"]))
    {
        $macn=$_POST["txtmacn"];
        $tencn=$_POST["txttencn"];

        $obj=new cnDTO($macn,$tencn);

        $DAL=new cnDAL();
        $DAL->Insert($obj);

        $arr=$DAL->getAll();
        $cnView=new cnView();
        $cnView->danhsach($arr);
    }
}
	
?>