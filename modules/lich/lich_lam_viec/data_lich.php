<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}

$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$idphong = $_GET['idphong'];
$loailich = $_GET['loailich'];
$from = $_GET['from'];
$to = $_GET['to'];
$mang_ngay=$_GET['mang_ngay'];
$data= new SQLServer;//tao lop ket noi SQL

/*if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}*/
$store_name="{call GD2_LichLamViec_SelectByIDMaBPAndDate (?,?,?,?)}";//tao bien khai bao store
$params = array($idphong,$loailich,$from,$to);//tao param cho store 
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$search= "id_phongban=".$idphong." and HideLich=1";
$store_name1="{call GD2_TABLEWITHPAGE_GETBY (?,?,?,?,?,?,?,?)}";
$params1=array('ID_NhanVien',0,1000,'nickname',$sord,'DM_nhanvien',$search,'');
$get_lich1=$data->query( $store_name1, $params1);
$excute1= new SQLServerResult($get_lich1);
$tam1= $excute1->get_as_array();


$responce = new stdClass;
$responce->page = 1;
$responce->total = 1; 
$cache_id=0;
$mangnhanvien[0]="";
$kiemtra=true;
$mang_ngay=explode(";",$mang_ngay);
foreach ($tam1 as $row) {
	for($i=0;$i<=count($mangnhanvien)-1;$i++){
		if($mangnhanvien[$i]==$row["ID_NhanVien"]){
			$kiemtra=false;
		}		
	}
	if($kiemtra==true){
		$mangnhanvien[]=$row["ID_NhanVien"];	
	}
	$kiemtra=true;
				 	
}//tao mang nhan vien chuan.
//print_r ($mangnhanvien);
//print_r ($mang_ngay);
//print_r ($tam1);
$dulieugoc=array();
$dulieu_saxep=array();
$dem1=0;
 $date = date('Y-m-d');	
		
		
		for($i=1;$i<=count($mangnhanvien)-1;$i++){	
			$flag1=0;
		foreach ($tam as $row){								
			if($mangnhanvien[$i]==$row["ID_NhanVien"])
			{				
				/*if($date==$row["Ngay"]->format('Y-m-d')){
					$dulieugoc[$row["ID_NhanVien"]][]=$row["Ngay"]->format('Y-m-d').";".$row["ID_NhanVien"].";#FCF0BA;".$row["TenLoaiLich"].";".$row["GioBatDau"].";".$row["GioKetThuc"].";".$row["Colour"].";".$row["IsChamCong"] ;
				}else{
					$dulieugoc[$row["ID_NhanVien"]][]=$row["Ngay"]->format('Y-m-d').";".$row["ID_NhanVien"].";"
					.$row["TenLoaiLich"].";".$row["GioBatDau"].";".$row["GioKetThuc"].";".$row["Colour"].";"
					.$row["IsChamCong"] ;
				}*/
				$dulieugoc[$row["ID_NhanVien"]][]=$row["Ngay"]->format('Y-m-d').";".$row["ID_NhanVien"].";"
					.$row["TenLoaiLich"].";".$row["GioBatDau"].";".$row["GioKetThuc"].";".$row["Colour"].";"
					.$row["IsChamCong"].";".$row["GhiChu"].";".$row["ID_LichLamViec"] ;
				
				
					$flag1=1;			
			}	
			}	
				
			if($flag1==0){
				//echo "Flag ".$flag."\n";
			   // echo "Dem ".$dem1."\n";
				$dulieugoc[$mangnhanvien[$i]][]=';;;;;;;';
				
			}
			
		
		}		
	
	$tam;
	//print_r ($mangnhanvien);
	$kiemtra=1;
	$icount=0;
	$tam;
	//print_r ($dulieugoc);	 
	foreach ($dulieugoc as $row){
		 
		$dem1++;
		$dem2=0;	
		for($i=0;$i<=count($mang_ngay)-2;$i++){	
			$flag=0;									 
			for($ii=0;$ii<=count($row)-1;$ii++){
							 				 
				$tam=explode(";",$row[$ii]);	
				
							
				if($mang_ngay[$i]==$tam[0]){
				 	 $dulieu_saxep[$mangnhanvien[$dem1]][$dem2]=$row[$ii];	
					 $dem2++;
					 $flag=1;		 				 
				}
						 			
			}
			
			if  ($flag==0){
				//echo "Flag ".$flag."\n";
			   // echo "Dem ".$dem1."\n";
				$dulieu_saxep[$mangnhanvien[$dem1]][$dem2]=$mang_ngay[$i].";$mangnhanvien[$dem1]";	
		 		$dem2++;
				
			}
			
		}	
	
	}
	//print_r ($mang_ngay);
	//print_r ($dulieu_saxep);
	//print_r ($dulieu_saxep);
	/*$mangnhanvien[$+1]
	$mangnhanvien
	print_r ($mang_ngay);
	print_r ($dulieugoc);*/
	//print_r ($mangnhanvien);
	//echo count($dulieugoc[$mangnhanvien[1]]);
	$responce = new stdClass;
	$responce->page = 1;
	$responce->total = 1;
	$responce->records = count($mangnhanvien)-1;
	$cache_date="";
	$dem=0;$temp2[0]="";$cache_date=1;
	for($i=0;$i<=count($dulieu_saxep)-1;$i++){
		$temp=explode(";",$dulieu_saxep[$mangnhanvien[$i+1]][0]);			 
		$responce->rows[$i]['id']=$temp[1];		 
		for($ii=0;$ii<=count($dulieu_saxep[$mangnhanvien[$i+1]])-1;$ii++){//chay mang nhan vien			
			$temp2=explode(";",$dulieu_saxep[$mangnhanvien[$i+1]][$ii]);	
			if($ii==0){	
				$temp3[$dem]=$temp2[1];	
				$dem++;
				if($ii < count($dulieu_saxep[$mangnhanvien[$i+1]])-1){					 
					$cache_date=explode(";",$dulieu_saxep[$mangnhanvien[$i+1]][$ii+1]);;	
				}
			} 				
			//if($ii < count($dulieu_saxep[$mangnhanvien[$i+1]])-1){
				if($temp2[0]==$cache_date){						 			 
					$temp3[$dem]="::".$dulieu_saxep[$mangnhanvien[$i+1]][$ii];
				}else{				 			
					$temp3[$dem]=$dulieu_saxep[$mangnhanvien[$i+1]][$ii];
				}
			//}else{
			//	$temp3[$dem]=":".$dulieu_saxep[$mangnhanvien[$i+1]][$ii];
			//}
			$cache_date=$temp2[0];				
			$dem++;
		}
	 	
		$responce->rows[$i]['cell']=$temp3;
		unset($temp3);
		$dem=0;
	}
	
	 
	 
	 
	 $dem3=0;$temp3;$dem4=0;
	/* foreach ($dulieu_saxep as $row){
		 $dem3++;
		// $responce->rows[$i]['id']=$mangnhanvien[$dem3];
		 for($i=0;$i<=count($row)-1;$i++){
		 	$ngay=explode(";",$row[$i]);
			if($i==0){
				$cache_ngay=explode(";",$row[$i]);
			}
			if($ngay=$cache_ngay){
				$temp3[$dem4]=$row[0].";".$row[1];
			}
			$cache_ngay=$ngay;
			$dem4++;
			
		 }
		 $responce->rows[$i]['cell']=$temp3;
		 unset($temp3);
		 $dem4=0;
		 
	 }*/
	// echo $dulieu_saxep[$mangnhanvien[10] ; 
	//print_r ($responce); 
	 $tam='';
	 if($responce->rows[0]['id']==$_SESSION["user"]["id_user"]){
			
	 }else{
			$tam=$responce->rows[0];
			
			for($i=0;$i<=count($responce->rows)-1;$i++){
				if($responce->rows[$i]['id']==$_SESSION["user"]["id_user"]){
					$responce->rows[0]=$responce->rows[$i];
					$responce->rows[$i]=$tam;
				}
			 }
	}
	 
	//$xuly=str_ireplace('"[','[',json_encode($responce));
	//$xuly=str_ireplace(']"',']',$xuly);
	//echo json_encode($responce);
	$xuly=str_ireplace('",":',':',json_encode($responce));
	echo $xuly;
	/*for($i=0;$i<=count($mang_ngay)-1;$i++){
		
		//if(isset($dulieugoc[$mangnhanvien[$i+1]][$i])){
		   echo $dulieugoc[$mangnhanvien[$i+1]][$i]."\n" ;
		//}
	}*/
	 
	
	//echo count($dulieugoc);
	
	
	
	
	
	
	
	
	
	
	
	
//echo $row["Ngay"]->format('Y-m-d')."   ".$row["ID_NhanVien"]."\n";
//echo count($mangnhanvien);

/*foreach ($tam as $row) {	 
	//$tam=date('Y-m-d', strtotime($cache_id. ' + 1 days'));
	//if($cache_id!=$row["ID_NhanVien"]){				
				//if($cache_id!=0){
				//	$i++;
					echo $row["Ngay"]->format('Y-m-d')."   ".$row["ID_NhanVien"]."\n";
				//}else{
					//echo $row["Ngay"]->format('Y-m-d')."   ".$row["ID_NhanVien"]."\n";
					
				//}
					
	//}
	//echo $i;
	$cache_id = $row["ID_NhanVien"];	
	//echo  $cache_id ;
//$cache_id =  date('Y-m-d', strtotime($cache_id. ' + 1 days'));	
}*/

	 



/*
foreach ($tam as $row) {
	
}*/




/*//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_PhongBan"];
    $responce->rows[$i]['cell']=array($row["ID_PhongBan"],$row["TenPhongBan"],$row["ID_PhongBanCha"],$row["MoTa"],$row["DienThoai"],$row["IsPhongChuyenMon"],$row["ID_KhuVuc"],$row["ID_CongTy"],$row["Active"],$row["KhoangCachDenPhongKhamLS"]);
    $i++; 
}   
echo json_encode($responce);*/
?>