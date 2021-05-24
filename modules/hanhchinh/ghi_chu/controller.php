<?php
//print_r($_POST);
$data= new SQLServer;//tao lop ket noi SQL

if($_POST['oper']=='add'){
	
	$params=array($_GET['idbenhnhan'],$_SESSION['user']['id_user'],$_POST['noidung']);
	$del=$data->query( "{call Gd2_GhiChuBenhNhan_Insert(?,?,?)}", $params);//Goi store
	
}else if($_POST['oper']=='edit'){
	$params=array($_POST['id'],$_GET['idbenhnhan'],$_SESSION['user']['id_user'],$_POST['noidung']);
	$del=$data->query( "{call Gd2_GhiChuBenhNhan_Update(?,?,?,?)}", $params);//Goi store
	
}
else if($_POST['oper']=='del'){
	$params=array($_POST['id'],$_SESSION['user']['id_user']);
	$del=$data->query( "{call Gd2_GhiChuBenhNhan_Delete(?,?)}", $params);//Goi store
	
}


//$del=$data->query( "{call GD2_quyennhanvien_del(?)}", $params);//Goi store

 
?>

