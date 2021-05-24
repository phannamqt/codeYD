<?php 
$data= new SQLServer;
$store_name="{call GD2_GetPhanQuyenById_NhanVien(?)}";
$params = array($_SESSION["user"]["id_user"]);
$get_main_menu=$data->select_store( $store_name, $params);
$excute= new SQLServerResult($get_main_menu);
$tam= $excute->get_as_array();     
            foreach ($tam as $v) {
                if($v["ID_Form"]==2)
				{              
				echo "menus[$v[ID_Control]] = [];\n";
				}
            }  
?>