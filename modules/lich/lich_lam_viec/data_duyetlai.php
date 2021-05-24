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


    xemAllnhanvien($_fromDate,$_toDate);

  
function xemAllnhanvien($pfromDate,$ptoDate){
$data = new SQLServer; //tao lop ket noi SQL
$store_name = "{call GD2_GetChamCong(?,?)}";
$params = array($pfromDate,$ptoDate);
//print_r($params);

$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
 
 
  
  $responce->rows[$i]['id']=$row["ID_ChamCong"];
  $responce->rows[$i]['cell'] = array($row["ID_ChamCong"],

    $row["Ngay"],
    $row["ID_PhongBan"],
    $row["ID_NhanVien"],
    $row["ChiTietCong"],
       $row["LogkhongHopLe"],
        $row["TreSomChiTiet"],
    $row["DiTre"],
    $row["RaSom"],
   $row["tc"]
  

    );

  $i++;
}

echo json_encode($responce);
}

?>
