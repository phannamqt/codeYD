
<?php 
include("class/class.sqlserver.php");
function get_system_config(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array('Id_Library','0','1000000','Id_Library','ASC','GD2_Library',"",'*');//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
	foreach ($tam as $row) {//duyet toan bo mang tra ve
    	$_SESSION["system_config"][$row["Id_Library"]]=$row["NameLibrary"];
	}  
	//return $system_config;
}
//if(isset($_SESSION["system_config"])){
	$system_config=get_system_config();
//}
include($_SESSION["system_config"][$_GET["ids"]]);

?>