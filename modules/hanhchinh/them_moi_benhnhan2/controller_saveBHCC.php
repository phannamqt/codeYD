<?php
//print_r($_POST);
$max=0;
$check1='';
$data= new SQLServer;//tao lop ket noi SQL
if(isset($_POST['id'])){ 
	$stt=0;
	foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
			$store_name1="{call [GD2_UpBHCC_Edit] (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
			$params1 = array($value['id_chidinh'],
							$value['ExtField1'],
							$value['Dongia'],
							$value['Giabhcc'],							
							$value['BHYTCC'],
							$value['IsBHCC'],		
							$value['sogio'],	
							$value['songay'],	
							$value['GiaBlog_thuong'],	
							$value['GiaBlog_heso'],	
							$value['DonGia_thuong'],	
							$value['DonGia_heso'],			
							$value['ID_LuotKham'],	$value['nguoilapphieu'],											
							$_SESSION['user']['id_user'] 
						);
			$get1=$data->query( $store_name1, $params1);
			//print_r($params1);
		}
	
	
   }   

?>