<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = convert_date($_GET["fromdate"]);
$toDate = convert_date($_GET["todate"]) . ' 23:59:59';


$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_lichsugiathuoc_nhapkho (?,?,?)}"; //tao bien khai bao store

//$params = array($_GET["ID_Thuoc"],$tungay,$dengay);
$params = array($_GET["ID_Thuoc"],$fromDate,$toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc



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
    <div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ</div>
    <?php

        echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

    ?>


    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1000px;margin-top:5px">
        <tr height="30">
             <th>STT</th>
              <th>Tên thuốc</th>
            <th>Ngày lập</th>          
        
            <th>Đơn vị tính</th>
            <th>Loại nhập xuất</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            <th>Nhập từ</th>
            

           
      </tr>
         <?php
        $stt=1; 
        $sum=0;
        $DonGia=0;
        $ThanhTien=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            if($row["NgayLapPhieu"]!=''){
            $row["NgayLapPhieu"]= $row["NgayLapPhieu"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
     }else{
         $row["NgayLapPhieu"]='';
     }

        ?>
         <tr>
    
           <td ><?=$stt?></td>
           <td ><?=$row['TenGoc']?></td>
           <td ><?=$row['NgayLapPhieu']?></td>           
           <td ><?= $row['TenDonViTinh']?></td>
           <td ><?= $row['Ten_LoaiNhapXuat']?></td>

           <td ><?= $row['SoLuong']?></td>
           <td ><?= (($row["DonGia"]*$row["PhanTramThue"])/100)+$row["DonGia"]?></td>
           <td ><?= ((($row["DonGia"]*$row["PhanTramThue"])/100)+$row["DonGia"])* $row["SoLuong"]?></td>
           <td ><?= $row['TenKho']?></td>


 
      </tr>
        <?php
            $stt++;
             $sum= $sum+$row['SoLuong'];
            
               $ThanhTien= $ThanhTien+((($row["DonGia"]*$row["PhanTramThue"])/100)+$row["DonGia"])* $row["SoLuong"];
        }
        ?>
           <tr>
             <td ></td> <td ></td>
             <td ></td> <td ></td>
             <td ></td>
             <td ></td>
             <td ><?=$sum?>
             </td>
             <td ><?=$ThanhTien/$sum?></td>
             <td ><?=$ThanhTien?></td>
           </tr>
    </table>
    


</div>
</body>
</html>
<?php
    if($types=="excel"){
        file_put_contents('excel/temp.html', ob_get_contents());
        $exp=new ExportToExcel();
        $exp->exportWithPage("excel/temp.html","lichsugiaban.xls");
    }
    ?>