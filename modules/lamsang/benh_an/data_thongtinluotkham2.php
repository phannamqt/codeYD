<?php




$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_benhan_kiemtra_batdau(?)}";
$params = array($_GET["id_benhnhan"]);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();

if(count($tam)==0){	
	echo 1;
}else{
	if (date('Y-m-d') != date('Y-m-d', strtotime($tam[0]['ThoiGianVaoKham']->format('Y-m-d')))) {
		echo 1;
	}else{
		if($tam[0]['ID_TrangThai']=='DangCho'){
			echo 2;	
		}
		else{
			if($tam[0]['CoKhamLamSang']==0 ){
				echo 1;
			}else{
				if($tam[0]['kham']!=0){
					echo 1;
				}else{					
					if($tam[0]['LayDauHieuSinhTon']==0){				
							echo 2;					
					}else{
						if($tam[0]['dhsinhton']==0){
							echo 1;
						}else{
							echo 2;
						}						
					}			
				}
			}
		}
	}
}












/*$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";//tao bien khai bao store
$params = array('ThongTinLuotKham','top 1 *','ID_BenhNhan='.$_GET["id_benhnhan"],' ID_LuotKham desc');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if(count($tam)==0){	
	echo 1;
}else{
	if($tam[0]['SanSangGoiVaoKham']==0){
	echo 1;
	}else{
		if($tam[0]['LayDauHieuSinhTon']==0){
			$params1=array('kham','*',"ID_LuotKham=".$tam[0]['ID_LuotKham']." and IsBacSyChinh=1 ",' ID_LuotKham desc');
			$get=$data->query( "{call Gd2_combobox_dialog(?,?,?,?)}", $params1);
			$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam1= $excute->get_as_array();
			if(count($tam1)==0){
				echo 2;
			}else{
				echo 1;
			}
		}else{
			$params1=array('DauHieuSinhTon','*','ID_LuotKham='.$tam[0]['ID_LuotKham'],' ID_LuotKham desc');
			$get=$data->query( "{call Gd2_combobox_dialog(?,?,?,?)}", $params1);
			$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam2= $excute->get_as_array();
			if(count($tam2)==0){
				echo 1;
			}else{
				$flag=0;
				for($i=0;$i<=count($tam2)-1;$i++){
					if($tam2[$i]['ID_TrangThai']=='Xong'){
						$flag=1;
						break;
					}
				}
				if($flag==0){
					echo 1;
				}else{
					$params1=array('kham','*','ID_LuotKham='.$tam[0]['ID_LuotKham'].' and IsBacSyChinh=1',' ID_LuotKham desc');
					$get=$data->query( "{call Gd2_combobox_dialog(?,?,?,?)}", $params1);
					$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
					$tam1= $excute->get_as_array();
					if(count($tam1)==0){
						echo 2;
					}else{
						echo 1;
					}
				}
				
			}
		}
	}
	
}*/


?>
