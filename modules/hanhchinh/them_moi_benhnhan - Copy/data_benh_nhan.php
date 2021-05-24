<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$start = $limit*$page - $limit;
$end= $start + $limit;
$search="";		
	if(isset($_GET["holot"])){
		$_GET["holot"]=trim($_GET["holot"], " ");
		$search .="HoLotBenhNhan like '%$_GET[holot]%'";
	}
	if(isset($_GET["ten"])){
		$_GET["ten"]=trim($_GET["ten"], " ");
		if($_GET["ten"]!=""){		
		$search .=" AND TenBenhNhan like '%$_GET[ten]'";
		}
	}
	if(isset($_GET["mabn"])){
		$_GET["mabn"]=trim($_GET["mabn"], " ");
		if($_GET["mabn"]!=""){		
		$search .=" AND MaBenhNhan like '%$_GET[mabn]%'";
		}
	}
	if(isset($_GET["dienthoai"])){
		$_GET["dienthoai"]=trim($_GET["dienthoai"], " ");
		if($_GET["dienthoai"]!=""){		
		$search .=" AND (DienThoai1 like '%$_GET[dienthoai]% OR DienThoai2 like '%$_GET[dienthoai]%')";
		}
	}
	if(isset($_GET["diachi"])){
			$_GET["diachi"]=trim($_GET["diachi"], " ");
		if($_GET["diachi"]!=""){		
		$search .=" AND DiaChi like '%$_GET[diachi]%'";
		}
	}    
	if(isset($_GET["namsinh"])){	
	$_GET["namsinh"]=trim($_GET["namsinh"], " ");	
	$dem=strlen ($_GET["namsinh"]);
	if($_GET["namsinh"]!=""){	
		if($dem==4){				
		$search .=" AND NamSinh = $_GET[namsinh]";		
		}else{
			$_GET["namsinh"]=date("Y")-$_GET["namsinh"];
			$search .=" AND NamSinh = $_GET[namsinh]";	
		}
	  }
	} 
	if(isset($_GET["quanhe"])){	
	$_GET["quanhe"]=trim($_GET["quanhe"], " ");
		if($_GET["quanhe"]!=""){			
		$search .=" AND QuanHeVoiBenhVien like '%$_GET[quanhe]%'";		
		}
	} 
	if(isset($_GET["nghenghiep"])){	
	$_GET["nghenghiep"]=trim($_GET["nghenghiep"], " ");
		if($_GET["nghenghiep"]!=""){		
		$search .=" AND ID_NgheNghiep = $_GET[nghenghiep]";		
		}
	} 
	if(isset($_GET["congty1"])){	
	$_GET["congty1"]=trim($_GET["congty1"], " ");
	$_GET["congty"]=trim($_GET["congty"], " ");
			if($_GET["congty1"]!=""){	
				$search .=" AND ID_CongTy = $_GET[congty1]";		
			}
	} 
	if(isset($_GET["nam"]) xor isset($_GET["nu"])){
		if(isset($_GET["nam"])){
		$search .=" AND GioiTinh = $_GET[nam]";
		}
		if(isset($_GET["nu"])){
		$search .=" AND GioiTinh = $_GET[nu]";
		}		
	} 
	
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$params = array('ID_Benhnhan',$start,$end,$sidx,$sord,'DM_BenhNhan',$search,'*');
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

if($tam== null)
{
	$count=0;
}
else{
$count = $tam[0][1];
}
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}

$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 if($row["NgayThangNamSinh"]==""){
			$row["NgayThangNamSinh"]=$row["NgayThangNamSinh"]; 
		 }else{
			$row["NgayThangNamSinh"]=$row["NgayThangNamSinh"]->format('d-m-Y');
		 }	
    $responce->rows[$i]['id']=$row['ID_BenhNhan'];
    $responce->rows[$i]['cell']=array($row['ID_BenhNhan'],$row['MaBenhNhan'],$row['HoLotBenhNhan'],$row['TenBenhNhan'],$row['NgayThangNamSinh'],$row['NamSinh'],$row['GioiTinh'],$row['DienThoai1'],$row['DienThoai2'],$row['DiaChi'],$row['ID_NgheNghiep'],$row['TenNguoiLienHe'],$row['QuanHeVoiBN'],$row['DienThoaiNguoiLienHe'],$row['GhiChu'],$row['QuanHeVoiBenhVien']);
    $i++; 
}   
echo json_encode($responce);
?>