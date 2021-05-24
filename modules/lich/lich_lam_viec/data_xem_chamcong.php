<?php 


$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$fromDate = $_GET['from'].' 0:00:00'; // get the directio
$toDate = $_GET['to'].' 23:59:59'; // get the directio

$id_nhanvien=$_GET['ID_NhanVien'];


$data= new SQLServer;//tao lop ket noi SQL 

if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;

$store_name="{call GD2_GetChamCongByIdNhanVien (?,?,?)}";//tao bien khai bao store
$params = array($id_nhanvien,$fromDate,$toDate);

$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$count=  count($tam);
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}


$responce = new stdClass;
$responce->page = 1;
$responce->total = 1; 
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["CcIndex"];
    $responce->rows[$i]['cell']=array(
        $row["CcIndex"],
        $row["ID_NhanVien"],
        $row["Thang"],
        $row["Tuan"],
        $row["NickName"],
        $row["Ngay"]->format('d/m/Y'),
        round(($row["Phut"]/60),1, PHP_ROUND_HALF_EVEN),
        $row["Congsang"],
        $row["Congchieu"],
        $row["CongthemA"],
        $row["CongthemB"],
        $row["CongNTru"],    
        $row["SolanNgtru"],
        $row["dayweek"],
        $row["Kehoach"],
        $row["LoaiNgay"],
        $row["LogSang"],
        $row["LogChieu"],
        $row["LogThemA"],
        $row["LogThemB"],
        $row["LogKoHle"],
        $row["TreSom"],
        $row["TGCB"],
        $row["Nam"],
        $row["Id_Donchamcong"],
//        $row["CongHCDX"],

         );
    $i++; 
}   
echo json_encode($responce);

?>