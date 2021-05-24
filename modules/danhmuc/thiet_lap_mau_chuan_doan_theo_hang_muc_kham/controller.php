<?php
switch ($_GET["oper"]) { 
    case "add_hangmuckham_chitiet": 
		add_hangmuckham_chitiet();
		break;
	case "del_hangmuckham_chitiet": 
		del_hangmuckham_chitiet();
		break;
	case "count_grid2": 
		count_grid2();
		break;
	case "count_grid1": 
		count_grid1();
		break;
}
function add_hangmuckham_chitiet(){	
	// print_r($_POST);
	$params =  array( 
		join(",",$_POST['ID_LoaiKham']),
		$_POST['ID_NhomTemplate_Parent'],
		
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],
	);	
	$data= new SQLServer;
	$store_name="{call GD2_Store_NhomTemplate_LoaiKham_Insert_New (?,?,?,?)}";	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	echo json_encode(array('status' => 'success'));
}
function del_hangmuckham_chitiet(){
	$params =  array( 
		join(",",$_POST['ID_NhomTemplate_Parent_aj']),		
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],
		);	
	$data= new SQLServer;
	$store_name="{call GD2_Store_NhomTemplate_LoaiKham_Del_New (?,?,?)}";	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);	
	echo json_encode(array('status' => 'success'));
}
// function count_grid2(){ 
// 	$data= new SQLServer;//tao lop ket noi SQL 
// 	$store_name="{call GD2_NhomXepHangChiTiet_Count (?)}";
// 	$params = array($_POST['id_nhomxephang']); 
// 	$get=$data->query( $store_name, $params);
// 	$excute= new SQLServerResult($get);
// 	$tam= $excute->get_as_array();
// 	$responce = array('Count_result'=>$tam[0]["Count_result"]);
// 	echo json_encode($responce);
// }
function count_grid1(){ 
	$data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_NhomTemplate_LoaiKham_Count_Result_Grid1 (?)}";
	$params = array($_POST['id_nhomxephang']); 
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$responce = array('Count_result'=>$tam[0]["Count_result"]);
	echo json_encode($responce);
}
//count grid 2
function count_grid2(){ 
	$data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_NhomTemplate_LoaiKham_Count_Result (?)}";
	$params = array($_POST['id_nhomxephang']); 
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$responce = array('Count_result'=>$tam[0]["Count_result"]);
	echo json_encode($responce);
}
?>