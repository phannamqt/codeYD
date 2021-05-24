<?php
print_r(count($_POST));

$data= new SQLServer;//tao lop ket noi SQL
//print_r($_POST['id'][0]);
if(isset($_POST['id'])){ 
$check1="";
		foreach ($_POST['id'] as $key => $value) {
			if(($value['luu']==0) && ($value['events']==1)){
				unset($params);
				$store_name="{call GD2_DM_NhomTemplate_LoaiKhamInsert (?,?,?,?)}";//tao bien khai bao store
				$params = array($value['IDNhomTemPlate'],$value['ID_LoaiKham'],$_SESSION['user']['id_user'],array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
				$data->query( $store_name, $params);
				//print_r ($params);
				
			}
			if(($value['luu']==2) && ($value['events']==0)){
				$store_name2="{call GD2_DM_NhomTemplate_LoaiKhamDelete (?,?)}";//tao bien khai bao store
				$params2 = array($value['ID_LoaiKham_NhomTemplate'],$_SESSION['user']['id_user'] );
				$data->query( $store_name2, $params2);
				//print_r ($params2);
			}
		}
}
?>

