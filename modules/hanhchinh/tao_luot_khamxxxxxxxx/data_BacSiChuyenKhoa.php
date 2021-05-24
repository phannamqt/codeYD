<?php
$data= new SQLServer;
$params = array($_GET['ID_ChuyenKhoa']);
$get_lich=$data->query( '{call GD2_BacSiChuyenKhoa_Select(?)}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;


$tam1;
$y=0;
$tam1[$y]["ID_NhanVien"]='';
$tam1[$y]["NickName"]='';
$tam1[$y]["HoLotNhanVien"]='';
$tam1[$y]["TenNhanVien"]='';
$tam1[$y]["TTPK"]='';
$tam1[$y]["TTNTC"]='';
$tam1[$y]["TDPK"]='';
$tam1[$y]["TDNT"]='';
$tam1[$y]["DDDB"]='';
$tam1[$y]["TTNTCP"]='';
$tam1[$y]["comat"]='';
$y=1;
for ($i=0;$i<count($tam);$i++) {
	if($i==0){
		$tam1[$y]["ID_NhanVien"]=$tam[$i]["ID_NhanVien"];
		$tam1[$y]["NickName"]=$tam[$i]["NickName"];
		$tam1[$y]["HoLotNhanVien"]=$tam[$i]["HoLotNhanVien"];
		$tam1[$y]["TenNhanVien"]=$tam[$i]["TenNhanVien"];
		$tam1[$y]["TTPK"]=$tam[$i]["TTPK"];
		$tam1[$y]["TTNTC"]=$tam[$i]["TTNTC"];
		$tam1[$y]["TDPK"]=$tam[$i]["TDPK"];
		$tam1[$y]["TDNT"]=$tam[$i]["TDNT"];
		$tam1[$y]["DDDB"]=$tam[$i]["DDDB"];
		$tam1[$y]["TTNTCP"]=$tam[$i]["TTNTCP"];  
		$tam1[$y]["comat"]=$tam[$i]["comat"] ; 
	}else{
		if($tam1[$y]["ID_NhanVien"]==$tam[$i]["ID_NhanVien"]){
			$tam1[$y]["TTPK"].='<br>'.$tam[$i]["TTPK"];
			$tam1[$y]["TTNTC"].='<br>'.$tam[$i]["TTNTC"];
			$tam1[$y]["TDPK"].='<br>'.$tam[$i]["TDPK"];
			$tam1[$y]["TDNT"].='<br>'.$tam[$i]["TDNT"];
			$tam1[$y]["DDDB"].='<br>'.$tam[$i]["DDDB"];
			$tam1[$y]["TTNTCP"].='<br>'.$tam[$i]["TTNTCP"];  			
		}else{
			$y++;
			$tam1[$y]["ID_NhanVien"]=$tam[$i]["ID_NhanVien"];
			$tam1[$y]["NickName"]=$tam[$i]["NickName"];
			$tam1[$y]["HoLotNhanVien"]=$tam[$i]["HoLotNhanVien"];
			$tam1[$y]["TenNhanVien"]=$tam[$i]["TenNhanVien"];
			$tam1[$y]["TTPK"]=$tam[$i]["TTPK"];
			$tam1[$y]["TTNTC"]=$tam[$i]["TTNTC"];
			$tam1[$y]["TDPK"]=$tam[$i]["TDPK"];
			$tam1[$y]["TDNT"]=$tam[$i]["TDNT"];
			$tam1[$y]["DDDB"]=$tam[$i]["DDDB"];
			$tam1[$y]["TTNTCP"]=$tam[$i]["TTNTCP"];  
			$tam1[$y]["comat"]=$tam[$i]["comat"] ;   
		
		}
	}
}  
$i=0;
if(count($tam)>0){
foreach ($tam1 as $row) {
	$responce->rows[$i]['id']=$row["ID_NhanVien"];
	$responce->rows[$i]['cell']=array($row["NickName"]
		,$row["HoLotNhanVien"].' '.$row["TenNhanVien"]
		,$row["TTPK"]
		,$row["TDPK"]
		,$row["TTNTC"].'<br>'.$row["TTNTCP"]  
		,$row["TDNT"]
		,$row["DDDB"]
		,$row["comat"]  

		);
	$i++; 
}  

echo json_encode($responce);
}else{
	echo '{}';
}
?>

