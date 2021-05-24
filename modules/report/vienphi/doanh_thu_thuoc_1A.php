<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left: 4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
#tongthe #page_1 .n_top table {
	font-weight: bold;
}
.tieude {
	font-size: 16px;
}
 thead
     {
                border-bottom:2px solid #000;
                display: table-header-group!important;
               border-left:2px solid #000;
    }
  table { page-break-inside:auto  ;page-break-after:auto}
  tr    { page-break-inside:avoid; page-break-after:auto }
</style>
</head>
<?php
$data= new SQLServer;//tao lop ket noi SQL
//$store_name2="{call [Med_Thuoc_Xuat_Group_B](?,?,?)}";
//$store_name2="{call [Med_Thuoc_Xuat_Group_B](?,?,?)}";
//$params2 = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',2);
$store_name2="{call [Med_TonKhoDuocChuan](?,?,?,?,?)}";
//Med_TonKhoDuocChuan 2,'2019-5-4','2019-6-30 23:59:59',4,null
$params2 = array(2,convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',5,null);
$get_thongtin2=$data->query( $store_name2,$params2);
$excute2= new SQLServerResult($get_thongtin2);
$thuoc= $excute2->get_as_array();
?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
       <div class="n_top">
         <table width="300px" border="0"  cellpadding="0" cellspacing="0">
              <tr>
              <td align="center"><strong> <?=$_SESSION["com"]["TenBenhVien"]?></strong>
              </td>
              </tr>
               <tr>
              <td align="center"> <?php echo $_SESSION["com"]["DiaChi"]?>
              </td>
              </tr>
               <tr>
              <td align="center"> <?php echo $_SESSION["com"]["SoDT"]?>
              </td>
              </tr>
              <tr>
              <td align="center">-----***-----
              </td>
              </tr>
            </table><br />

       
            <br />
         <br />
       </div>

        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
        <thead>
        <tr>
                    <td colspan="8" style="text-align:center; color:red;font-weight:bold; font-size:20px">
                      TỔNG HỢP XUẤT THUỐC KHO DỊCH VỤ(Mẫu 1 A group)<br />
                        Từ ngày <?=$_GET['tungay']?> đến ngày <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>




                <th width="20px">STT(1)</th>
                <th width="400px">ID_THUOC(2)</th>
                <th width="400px">MÃ THUỐC(3)</th>
                <th width="400px">TÊN THUỐC(4)</th>
                <th width="400px">SỐ LÔ(5)</th>
                <th width="400px">HẠN DÙNG(6)</th>
                <th width="400px">THUỐC/VTYT(7)</th>
                <th width="70px">ĐVT(8)</th>
                <th width="70px">SỐ LƯỢNG(9)</th>
                <th width="70px">ĐƠN GIÁ BÁN(10)</th>
                    <th width="70px">ĐƠN GIÁ VỐN(11)</th>
                <th width="90px">TIỀN THUỐC CHƯA THUẾ(12)</th>
                <th width="90px">% VAT(13)</th>
                <th width="90px">THUẾ(14)</th>
                <th width="90px">THÀNH TIỀN XUẤT(ĐÃ CÓ VAT) (15)</th> 
             

<!-- id_kho  PhanTramThue  MaThuoc ID_Thuoc  TenDonViTinh  TenGoc  TenNhomThuoc  LaThuoc CoSoTuTruc  QuyCach ID_Thuoc  SoLoNhaSanXuat  NgayHetHan  DonGiaX DonGiaVon SL_XTK  TT_XTK -->

           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
		$i=0;
		$sum=0; 
		foreach($thuoc as $row){
			$i++;
			$sum=$sum+$row['TT_XTK']; 

        if($row["NgayHetHan"]!=''){
          $row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
        } 
                echo ('<tr>
                   <td style="text-align:left">'.$i.'</td>
				  <td>'.$row['Id_Thuoc'].'</td>  <td>'.$row['MaThuoc'].'</td>
					<td style="text-align:left">'.$row['TenGoc'].'</td> 
        <td>'.$row['SoLoNhaSanXuat'].'</td>
        <td>'.$row['NgayHetHan'].'</td>
          <td>'.$row['LaThuoc'].'</td>
					<td>'.$row['TenDonViTinh'].'</td>
					<td>'.$row['SL_XTK'].'</td><td>'.$row['DonGiaX'].'</td><td>'.$row['DonGiaVon'].'</td>
					<td> </td>
					<td>'.$row['PhanTramThue'].'</td>
					
				  <td> </td>
					<td style="text-align:right">'.$row['TT_XTK'].'</td>
       
					</tr>');
 
			} 
			  ?>
              <tr>
            <td>&nbsp;</td>
            
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td> <td>&nbsp;</td>
            <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
			
            <td style="text-align:center;font-size:18px !important">Tổng cộng</td>
             <td style="text-align:right;font-size:18px !important"><?=$sum ?></td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			    <td colspan=3 style=" text-align: right;"> Đà nẵng, Ngày xuất dữ liệu <?=date('d')?> tháng <?=date('m')?> năm <?=date('Y')?></td>
			  </tr>
			  <tr>
				<td>Người lập</td>
                <td>Người kiểm tra</td> 
				<td>Kế toán trưởng</td>
			  </tr>
 
		</table>
		
		<br><br><br><br>
		
		  
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>
 
</html>
<?php
  if($types=="excel"){
    	file_put_contents('excel/temp.html', ob_get_contents());
    	$exp=new ExportToExcel();
    	$exp->exportWithPage("excel/temp.html","Duoc_Xuat_Mau1A.xls");
  }
  ?>

