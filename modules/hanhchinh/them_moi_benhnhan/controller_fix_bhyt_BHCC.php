<?php
$data= new SQLServer;//tao lop ket noi SQL
/*echo ('id_kham'.$_GET['id_kham'].'<BR>');
echo ('ac2'.$_GET['ac2'].'<BR>');
echo ('ExtField'.$_GET['ExtField'].'<BR>');
echo ('loaiBH'.$_GET['loaiBH'].'<BR>');
echo ('ID_LoaiKhamP'.$_GET['ID_LoaiKhamP'].'<BR>');*/

if($_GET['ExtField']==''){$_GET['ExtField']=='';}
    $store_name="{call GD2_UpBHCC (?,?,?,?,?)}";//tao bien khai bao store
	$params = array($_GET['id_kham'],
				$_GET['ID_LoaiKhamP'],$_GET['ExtField'],$_GET['ac2'],
					$_SESSION['user']['id_user']
					);
	$get=$data->query( $store_name, $params);
	$store_name="{call GD2_GetTienBHCCKhamByID_Kham(?,?,?)}";//tao bien khai bao store
	$params = array($_GET['id_kham'],$_GET['ExtField'],$_GET['ID_LuotKhamP']);
	$get_danh_muc=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	echo ";;".$tam[0]['PhiThucHien'].";;".$tam[0]['BHCCTra'].";;".$tam[0]['Isbhcc'].";;".$tam[0]['TenLoaiKham'].";;";



?>