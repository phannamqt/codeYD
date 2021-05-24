<?php	
        /*
         * khatm add on 19/11/13
         * lấy thời gian cấu hình refresh
         * para truyền vào chính la tên biến cần lấy
         */
	function get_system_config_($value){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array('VarName','0','1000000','VarName','ASC','SysVars'," VarName='$value'",'*');//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			$system_config=$row["DefaultValue"];
		}  
		return $system_config;
	}
?>