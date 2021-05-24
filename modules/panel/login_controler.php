<?php 
	$username=$_GET["username"];
	$password=$_GET["password"]; 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DMNHANVIEN_VALIDATE(?,?)}";//tao bien khai bao store
	$params =array($username,$password);//tao param cho store 	
	$get_login=$data->select_store( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_login);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	if(count($tam)==0){
		echo "Thông tin đăng nhập không đúng, vui lòng thử lại!";
	}else{	 			  
	 	foreach ($tam as $v) {//duyet toan bo mang tra ve
	  		$_SESSION["user"]["fullname"]= $v["HoLotNhanVien"]." ".$v["TenNhanVien"]; 
			$_SESSION["user"]["id_user"]= $v["ID_NhanVien"]; 
			$_SESSION["user"]["id_phongban"]= $v["ID_PhongBan"];
			$_SESSION["user"]["year_work"]= date("Y");//năm làm việc
			$_SESSION["user"]["nickname"]= $v["NickName"]; 
			$_SESSION["user"]["login"]=true; 
			echo "true";   
	 	}		
	}
	$store_name1="{call GD2_thongtinbenvien_get()}";
	$params1 =array();
	$get_com=$data->query( $store_name1, $params1);
	$excute1= new SQLServerResult($get_com);
	$tam1= $excute1->get_as_array();
	foreach ($tam1 as $v) {
		$_SESSION["com"]["TenBenhVien"]= $v["TenBenhVien"]; 
		$_SESSION["com"]["DiaChi"]= $v["DiaChi"]; 
		$_SESSION["com"]["SoDT"]= $v["SoDT"]; 
		$_SESSION["com"]["MST"]= $v["MST"]; 
		$_SESSION["com"]["MaBenhVien"]= $v["MaBenhVien"]; 
		$_SESSION["com"]["LoaiBenhVien"]= $v["LoaiBenhVien"]; 
		
	}
?>