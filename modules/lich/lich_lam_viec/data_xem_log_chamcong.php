<?php //



$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$fromDate = $_GET['from'].' 0:00:00'; // get the directio
$toDate = $_GET['to'].' 23:59:59'; // get the directio
$id_phongban=$_GET['idphong'];
//echo $fr . '  '.$to .' id phong '.$id_phongban;

$data= new SQLServer;//tao lop ket noi SQL

if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;
}
	$end=$limit;


$store_name="{call GD2_GetLogChamCongByIdPBanAndDate (?,?,?)}";//tao bien khai bao store
$params = array($id_phongban,$fromDate,$toDate);//tao param cho store

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
$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
        $responce->rows[$i]['id']=  $row["cIndex"];
        $responce->rows[$i]['cell']=array(
        $row["cID"],
        $row["TuanThu"],
        $row["Ngay"],
        $row["NickName"],
        $row["Gio"],
        $row["TenNgon"],
        $row["dayweek"],
        $row["cDevice"],
        $row["timecreate"]->format('d/m/y H:i'),
        $row["cIndex"],
         $row["cDateTime"],
         );
    $i++;
}
echo json_encode($responce);

?>