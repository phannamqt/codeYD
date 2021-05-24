<?php
switch ($_POST["oper"]) {
	case "editNgayQuyetToan":
		editNgayQuyetToan();	
	case "editDonThuocChiTiet":
		editDonThuocChiTiet();	
	break;
}	

function editNgayQuyetToan(){
	$NgayRaVien=explode(" ",$_POST['NgayRaVien']);
	$Ngay=implode("/", array_reverse(explode("/",$NgayRaVien[1])));	
    dbUpdate('GD2_BHYT_Xml', 
    	'ID_LuotKham',
  	  	$_POST['ID_LuotKham'],
		array( 	
			'NgayQuyetToan' =>convert_date( $_POST['NgayQuyetToan']),
			'NgayUpXml' =>convert_date( $_POST['NgayQuyetToan']),
			'NgayRaVien' =>$Ngay.' '.$NgayRaVien[0]
		)
    );
    dbSelect(array($_POST['ID_LuotKham']),'GD2_ThuocBHYT_Insert');   
}

function editDonThuocChiTiet(){
    dbUpdate('GD2_DonThuocChiTietMoRong', 
    	'ID_DonThuocChiTiet',
  	  	$_POST['ID_DonThuocChiTiet'],
		array( 	
			'T_BNCCT' =>$_POST['T_BNCCT']	
		)
    );    
}

// function editNgayRa(){
// 	$NgayRaVien=explode(" ",$_POST['NgayRaVien']);
//     // dbUpdate('GD2_BHYT_Xml', 
// 	// 	'ID_LuotKham',
// 	// 	$_POST['ID_LuotKham'],
// 	// 	array( 	
// 	// 		'NgayRaVien' =>explode(" ",$_POST['NgayRaVien'])
// 	// 	)
// 	// );
// }
?>

