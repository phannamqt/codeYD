<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = $_GET['fromdate'] ;
$toDate = $_GET['todate'] ;


$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_ThongKeKhamByNhom (?,?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params = array(17,$fromDate,$toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

/*$store_name2 = "{call GD2_GetBNXN_ThueNgoai (?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params2 = array($fromDate,$toDate);

$get_lich2 = $data->query($store_name2, $params2); //Goi store
$excute2 = new SQLServerResult($get_lich2); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam2 = $excute2->get_as_array(); //Tra ve mang toan bo data lay duoc


$store_name3 = "{call GD2_DemXNTheoNhom (?,?)}"; //tao bien khai bao store
$get_lich3 = $data->query($store_name3, $params2); //Goi store
$excute3 = new SQLServerResult($get_lich3); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam3 = $excute3->get_as_array(); //Tra ve mang toan bo data lay duoc
*/

$store_name4 = "{call Med_ThongKeKhamByNhom_Ngay  (?,?,?)}"; //tao bien khai bao store
$params4 = array(17,$fromDate,$toDate);
$get_lich4 = $data->query($store_name4, $params4); //Goi store
$excute4 = new SQLServerResult($get_lich4); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam4 = $excute4->get_as_array(); //Tra ve mang toan bo data lay duoc


?>
<style type="text/css">
    body{
        width: 100%;
        margin-top: 5px;
        overflow:scroll;

        }

    #wrapper{
        width:1000px;
        margin:0 auto;
        }

</style>

</head>
<body>
<div id="wrapper">
    <div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ XÉT NGHIỆM</div>
    <?php

        echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

    ?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1000px;margin-top:5px">
        <tr height="30">
             <th>STT</th>
            <th>Tên xét nghiệm</th>
            <th>Số lượng</th>
            <th>STT order</th>
           
      </tr>
         <?php
        $stt=1; 
        $sum=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve

        ?>
         <tr>
    
           <td ><?=$stt?></td>
           <td ><?=$row['TenLoaiKham']?></td>
            <td ><?=$row['SoLuong']?></td>
            <td ><?= $row['STT']?></td>
      </tr>
        <?php
            $stt++;
             $sum= $sum+$row['SoLuong'];
        }
        ?>
           <tr>
             <td ></td><td ></td><td ><?=$sum?></td><td ></td>
           </tr>
    </table>





 <?php

        echo '<div style="text-align:center;font-size:15px; font-weight:bold">Xét nghiệm theo ngày Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

    ?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1000px;margin-top:5px">
        <tr height="30">
             <th>STT</th>
            <th>Tên xét nghiệm</th>
            <th>Số lượng</th>
            <th>Ngày</th>
           
      </tr>
         <?php


          
        $stt4=1; 
        $sum4=0;
        foreach ($tam4 as $row) {//duyet toan bo mang tra ve
          if($row["Ngay"]!=''){
          $row["Ngay"]=$row["Ngay"]->format($_SESSION["config_system"]["ngaythang"]);
        } 
        ?>
         <tr>
    
           <td ><?=$stt4?></td>
           <td ><?=$row['TenLoaiKham']?></td>
            <td ><?=$row['SoLuong']?></td>
            <td ><?= $row['Ngay']?></td>
      </tr>
        <?php
            $stt4++;
             $sum4= $sum4+$row['SoLuong'];
        }
        ?>
           <tr>
             <td ></td><td ></td><td ><?=$sum4?></td><td ></td>
           </tr>
    </table>








     
</div>
</body>
</html>
<?php
    if($types=="excel"){
        file_put_contents('excel/temp.html', ob_get_contents());
        $exp=new ExportToExcel();
        $exp->exportWithPage("excel/temp.html","Mau_XN1.xls");
    }
    ?>