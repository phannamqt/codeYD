

<?php
$data= new SQLServer;//tao lop ket noi SQL

if($_GET["ID_NhanVien"]==785 || $_GET["ID_NhanVien"]==67 || $_GET["ID_NhanVien"]==857 || $_GET["ID_NhanVien"]==786){
	if(isset($_COOKIE["username_window"])){
		$_COOKIE["username_window"]=$_COOKIE["username_window"];
	}else{
		$_COOKIE["username_window"]='';
	}
	$store_name_logs="{call GD2_XemCC_Insert(?,?,?,?,? ,?)}";
	$params_logs =array($_GET["ID_NhanVien"],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR'],$_COOKIE["username_window"].'|'.$_SERVER['HTTP_USER_AGENT'],$_GET["fromdate"],$_GET["todate"]);
	$data->query( $store_name_logs, $params_logs);
}


 $fd=$_GET["fromdate"];
 $td=$_GET["todate"];
 $ID_NhanVien=$_GET["ID_NhanVien"];

$params2 = array($fd,$td,$ID_NhanVien);



$store_name="{call GD2_LayTongHopChamCongByNhanVien(?,?,?)}";
$params = array();
$get_lich=$data->query( $store_name, $params2);
//print_r($params2);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Nhanvien"];
    $responce->rows[$i]['cell']=array($row["ID_Nhanvien"],$row["TongGio"]);

    $i++;
}
  echo json_encode($responce);
?>
