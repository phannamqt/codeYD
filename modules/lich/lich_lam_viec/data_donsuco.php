<?php
$_fromDate = 0;
$_toDate =0;
$_id_nhanvien=0;
if(isset($_GET["fromdate"]))
{
    $_fromDate = $_GET["fromdate"]; // get the directio
  }
  else
  {
    $_fromDate=0;
  }

  if(isset($_GET["todate"]))
  {
    $_toDate = $_GET["todate"]; // get the directio
  }
  else
  {
    $_fromDate=0;
  }


  if (isset($_GET["id_nhanvien"])) {
    $_id_nhanvien = $_GET["id_nhanvien"];

    xemtheonhanvien($_id_nhanvien);
  } else {
    $_id_nhanvien = 0;
    xemAllnhanvien($_fromDate,$_toDate);

  }
  function xemtheonhanvien($id_nhanvien){
$data = new SQLServer; //tao lop ket noi SQL
$store_name = "{call gd2_CC_Modify_SelByIdNhanvien(?)}";
$params = array($id_nhanvien);


$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;


foreach ($tam as $row) {//duyet toan bo mang tra ve
  $responce->rows[$i]['id'] = $row["IndexId"];
  $Ngayxayrasuco = $row["Ngayxayrasuco"]->format('Y/m/d');
  $Ngaygui = $row["Ngaygui"]->format('Y/m/d H:i');

 $responce->rows[$i]['id']=$row["IndexId"];
  $responce->rows[$i]['cell'] = array($row["IndexId"],
    $Ngayxayrasuco
    , $Ngaygui,
    $row["Mavuviec"],
    $row["Noidung"],
    $row["ChiTietCong"],
   $row["LogkhongHopLe"],
    $row["TreSomChiTiet"],
    $row["DenghiCongthem"],
    $row["Sent"],
    $row["TinhDitre"],
    $row["TinhRasom"],
    $row["TBPOK"],
    $row["GSCMOK"],
    $row["GSHCOK"],
    $row["Finished"],
    $row["Id_nhanvien"],
    $row["TongCong"], $row["MauDon"],$row["TongCongTruc"]

    );

  $i++;
}

echo json_encode($responce);
}
function xemAllnhanvien($pfromDate,$ptoDate){
$data = new SQLServer; //tao lop ket noi SQL
$store_name = "{call gd2_CC_Modify_SelectByTime_New(?,?)}";
$params = array($pfromDate,$ptoDate);
//print_r($params);

$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
  $responce->rows[$i]['id'] = $row["IndexId"];
  $Ngayxayrasuco = $row["Ngayxayrasuco"]->format('Y/m/d');
  $Ngaygui = $row["Ngaygui"]->format('Y/m/d H:i');
  $responce->rows[$i]['id']=$row["IndexId"];
  $responce->rows[$i]['cell'] = array($row["IndexId"],
    $Ngayxayrasuco
    , $Ngaygui,
    $row["ID_PhongBan"],  $row["TenPhongBan"],
    $row["Id_nhanvien"], $row["NickName"],
    $row["GhiChu"],
       $row["LogkhongHopLe"],
        $row["TreSomChiTiet"],
    $row["Mavuviec"],
    $row["Noidung"], $row["LogTaiMay"], $row["NgayGioTaoLich"],

    $row["DenghiCongthem"],
    $row["TinhDitre"],
    $row["TinhRasom"],$row["CongTruc"],

    $row["TongCong"],
    $row["ccDiTre"],
    $row["ccRasom"],
    $row["ccCongTruc"],

    $row["TBPOK"],
    $row["GSCMOK"],
    $row["GSHCOK"],
    $row["Finished"],
    $row["Sent"],
    $row["ID_ChamCong"],  
	$row["MauDon"],  
	$row["TongCong"],
	//'08:00-12:00|||14:00-18:00'
  $row["LichThem"],
    );

  $i++;
}

echo json_encode($responce);
}

?>
