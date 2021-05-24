<?php
switch ($_GET["oper"]) {
    case "add":
        add_bhcc_trano();
        break;
	case "edit":
        edit_bhcc_trano();
        break;

}

function add_bhcc_trano(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_BHCC_ThanhToan_Add] (?,?,?,?)}";//tao bien khai bao store
		$params = array( $_POST["iD_LuotKham_DVCC"],$_POST["bhcctra"],$_POST["bhccBntrathem"],$_POST["bhccGhichu"]);	
		//print_r($params);
		$get=$data->query( $store_name, $params);//Goi store
}
function edit_bhcc_trano()
{
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_BHCC_ThanhToan_Upd] (?,?,?,?,?)}";//tao bien khai bao store
		$params = array( $_POST["ID_BHCC_TraNo"],$_POST["iD_LuotKham_DVCC"],$_POST["bhcctra"],$_POST["bhccBntrathem"],$_POST["bhccGhichu"]);	
		//print_r($params);
		$get=$data->query( $store_name, $params);//Goi store
}
?>

