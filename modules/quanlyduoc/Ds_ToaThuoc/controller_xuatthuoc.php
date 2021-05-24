<?php 
	$sum=0;
	$sumvat=0;
	//print_r($_POST);
	$data= new SQLServer;	
 
	$check='';
	$params_check = array(		
	$_POST["id_donthuoc"],//   @IDDonThuoc int,	
	array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//   @ID_XUATKHO int out

	);
		
	$store_check="{call GD2_check_xuaththuoc (?,?)}";
	$get_danh_muc_phong_ban=$data->query( $store_check, $params_check);
	
	if($check==1){
		return;	
	}
	
	$begin_tran=$data->begin_tran();
	$id_xuatkho='';
	 
	$erro='';
	$flag=0;
	$xml='<phieuxuat>
    <dauphieu>
        <kho_id>'.$_GET["kho"].'</kho_id>
        <khobhyt_id>'.$_GET["khobhyt"].'</khobhyt_id>
        <donthuoc_id>'.$_POST["id_donthuoc"].'</donthuoc_id>
        <loainhapxuat_id>89</loainhapxuat_id>
        <nhacungcap_id>-1</nhacungcap_id>
        <nhapkho_id>-1</nhapkho_id>
        <tennguoigiaodich>'.$_POST["nguoigd"].'</tennguoigiaodich>
        <ghichu></ghichu>
    </dauphieu>
    <dsthuoc>';
	$store_name_dst="{call MED_GetDonThuocChiTiet (?)}"; 
	$params_dst = array($_POST['id_donthuoc']); 
	$get_dst=$data->query( $store_name_dst, $params_dst);
	$excute_dst= new SQLServerResult($get_dst);
	$tam_dst= $excute_dst->get_as_array();

	foreach ($tam_dst as $row) {  
			$xml.='<thuoc>
            <thuoc_id>'.$row['ID_Thuoc'].'</thuoc_id>
            <soluong>'.((int)$row['SoThuocThucXuat']).'</soluong>
            <dongia>'.(int)$row['Gia'].'</dongia>
            <chietkhau>0</chietkhau>
            <inlabel>1</inlabel>
            <phantramvat>'.$row['PhanTramThue'].'</phantramvat>
            <thanhtien>'.((int)$row['ThanhTien']).'</thanhtien>
            <tienvat>'.(round (((int)$row['ThanhTien']*$row['PhanTramThue'])/100)).'</tienvat>
            <isbhyt>'.$row['IsBhyt'].'</isbhyt>
        </thuoc>'; 
	}

	$xml.='</dsthuoc>
	</phieuxuat>';

	$params9 = array(
		$xml
		,$_SESSION["user"]["id_user"]
		,$_SERVER['REMOTE_ADDR']
	
	); 
	$store_name9="{call MED_XuatThuocXMLInsert (?,?,?)}";
	$get=$data->query( $store_name9, $params9);	
	if( !$get ){
		$data->rollback();
		return;
	} 
		$store_name9="{call GD2_donthuoc_upd_trangthai (?,?)}";
		
		if($flag==1){
			$params9 = array(			
					$_POST['id_donthuoc'],//   @ID_LuotKham int,
					'NotFull',
				);
		}else{
			$params9 = array(			
					$_POST['id_donthuoc'],//   @ID_LuotKham int,
					'FullNormal',
				);			
		}
		$get=$data->query( $store_name9, $params9);	
		if( !$get ){
					$data->rollback();
					return;
		}  	
		
		
		$store_name9="{call GD2_donthuoc_upd_islock (?,?)}";
		$params9 = array(			
				$_POST['id_donthuoc'],//   @ID_PhieuXuat int,
				1
			);
		$get=$data->query( $store_name9, $params9);	
		if( !$get ){
					$data->rollback();
					return;
		}  	
	
 
	echo $_POST['id_donthuoc'];
	$data->commit(); 
?>

