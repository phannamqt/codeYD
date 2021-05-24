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

$store_name2 = "{call GD2_GetBNXN_ThueNgoai (?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params2 = array($fromDate,$toDate);

$get_lich2 = $data->query($store_name2, $params2); //Goi store
$excute2 = new SQLServerResult($get_lich2); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam2 = $excute2->get_as_array(); //Tra ve mang toan bo data lay duoc


$store_name3 = "{call GD2_DemXNTheoNhom (?,?)}"; //tao bien khai bao store
$get_lich3 = $data->query($store_name3, $params2); //Goi store
$excute3 = new SQLServerResult($get_lich3); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam3 = $excute3->get_as_array(); //Tra ve mang toan bo data lay duoc


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
    
  <div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ CÁC XÉT NGHIỆM GỞI MẪU RA NGOÀI</div>
   <?php

        echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

    ?>
     <table width="100%" border="1">
       <tr>
         <th>STT</th>
		 <th>TÊN NHÓM</th>
            <th>HỌ</th>
            <th>TÊN</th>
            <th>NS</th>
             <th>MÃ BN</th>
			  <th>Giới</th>
              <th>Sample ID</th>
               <th>TÊN XN</th>
                <th>CHỈ ĐỊNH LÚC</th>
                 <th>NƠI GỞI</th>
                  <th>HẸN TRẢ KQ LÚC</th>
				  <th>Trạng thái</th>
                    <th>Giá</th>
                      <th>Giá thuê ngoài</th>
       </tr>
       
  		<?php
        $stt2=1; 

        foreach ($tam2 as $row2) {//duyet toan bo mang tra ve
        if($row2["NgayGioHenTraKQ"]!='')
		{
			$NgayGioHenTraKQ = $row2["NgayGioHenTraKQ"]->format($_SESSION["config_system"]["ngaythang"]." H:i ");
		}
		else
		{
			$NgayGioHenTraKQ='';
		}
        
        ?>
         <tr>
    
           <td ><?=$stt2?></td>
		   <td ><?=$row2['TenNhom']?></td>
           <td ><?=$row2['HoLotBenhNhan']?></td>
            <td ><?=$row2['TenBenhNhan']?></td>
            <td ><?= $row2['NamSinh']?></td>
            <td ><?= $row2['MaBenhNhan']?></td>
			 <td ><?= $row2['GioiTinh']?></td>
            <td ><?= $row2['SampleID']?></td>
            <td ><?= $row2['tenloaikham']?></td>
            <td ><?= $row2['NgayGioTao']->format($_SESSION["config_system"]["ngaythang"]." H:i ")?></td>
            <td ><?= $row2['TenNoiThucHien']?></td>
            <td  bgcolor="pink"><?= $NgayGioHenTraKQ?></td>
			 <td ><?= $row2['Trangthai']?></td>
             <td ><?= $row2['PhiThucHien']?></td>
             <td ><?= $row2['GiaThueNgoaiThucHien']?></td>
      </tr>
        <?php
            $stt2++;
            
        }
        ?>
    
     </table>




       <div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ  BÁO CÁO GIAO BAN KHOA XÉT NGHIỆM THEO MẪU QUY ĐỊNH</div>
   <?php

        echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

    ?>



    <table width="100%" border="1">
       <tr>
         <th>_O_</th>
            <th>Tổng cộng</th>
            <th>Huyết học</th>
            <th>Sinh hóa</th>
             <th>Miễn dịch</th>
              <th>Vi sinh</th>
              <th>Sinh học phân tử</th>
              <th>Khác</th>
              <th>GPB</th>
        
       
      <?php
        $stt2=1; 

        foreach ($tam3 as $row3) {//duyet toan bo mang tra ve
        
        ?>
         <tr>
    
        
           <td ><?=$row3['ThongTin']?></td>
            <td ><?=$row3['TongCong']?></td>
            <td ><?= $row3['HH']?></td>
            <td ><?= $row3['SH']?></td>
            <td ><?= $row3['MD']?></td>
            <td ><?= $row3['VS']?></td>        
            <td ><?= $row3['SHPT']?></td>     
            <td ><?= $row3['K']?></td>
            <td ><?= $row3['GPB']?></td>
            
      </tr>
        <?php
            $stt2++;
            
        }
        ?>
    
     </table>
     
</div>
</body>
</html>
<?php
    if($types=="excel"){
        file_put_contents('excel/temp.html', ob_get_contents());
        $exp=new ExportToExcel();
        $exp->exportWithPage("excel/temp.html","thongkexetnghiemA.xls");
    }
    ?>