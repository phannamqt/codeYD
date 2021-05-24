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
  .tt_dauky{
    background-color: yellow;
  }
</style>
</head>
<?php
$data= new SQLServer;//tao lop ket noi SQL id_kho
$store_name2="{call [Med_TonKhoDuocChuan](?,?,?,?,?)}";
//$params2 = array(2,convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',0,null);
$params2 = array($_GET['id_kho'],convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',3,null);
$get_thongtin2=$data->query( $store_name2,$params2);
$excute2= new SQLServerResult($get_thongtin2);
$thuoc= $excute2->get_as_array();
$tenkho='';
if ($_GET['id_kho']==2) {$tenkho='KHO DỊCH VỤ'; }else{$tenkho='KHO BHYT';}
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
                      BÁO CÁO XUẤT NHẬP TỒN <?php echo $tenkho?> (MẪU 3 A TÍNH THEO ĐƠN GIÁ NHẬP)<br />
                        Từ ngày <?=$_GET['tungay']?> đến ngày <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
<th width="10px">STT(1)</th>
<th width="40px">SỐ LÔ(2)</th>
<th width="40px">HẠN DÙNG(3)</th>
<th width="400px">ID_THUOC(4)</th>
<th width="400px">TÊN THUỐC(5)</th>
<th width="400px">THUỐC/VTYT(6)</th>
<th width="70px">ĐVT(7)</th>
<th width="70px">ĐƠN GIÁ NHẬP ĐẦU KỲ CÓ VAT (8)</th>
<th width="90px">SL NHẬP ĐẦU KỲ(9)</th>
<th width="90px">SL XUẤT ĐẦU KỲ(10)</th>
<th width="70px">SL TỒN ĐẦU KỲ(11)</th>
<th width="70px">THÀNH TIỀN TỒN ĐẦU KỲ CÓ VAT(12)</th>
<th width="70px">SL NHẬP TRONG KỲ(13)</th>
<th width="70px">ĐƠN GIÁ NHẬP TRONG KỲ CÓ VAT(14)</th>
<th width="70px">THÀNH TIỀN NHẬP TRONG KỲ CÓ VAT(15)</th>
<th width="70px"> SL XUẤT TRONG KỲ(16)</th>
<th width="70px">ĐƠN GIÁ VỐN XUẤT  TRONG KỲ CÓ VAT(17)</th>
<th width="70px">THÀNH TIỀN XUẤT TRONG KỲ CÓ VAT(18)</th>
<th width="70px">TỒN CUỐI KỲ(19)</th>
<th width="70px">ĐON GIÁ NHẬP CÓ VAT(20) </th>
<th width="70px">THÀNH TIỀN TỒN CUỐI KỲ CÓ VAT(21)</th>
<th width="70px">%VAT CẤU HÌNH(22)</th>
<th width="90px"></th> 

           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
              $i=0;
              $sum=0; 
              $ThanhTien_TonDauKy=0;
              $TT_NTK=0;
              $TT_XTK=0;
              $TT_CuoiKy=0;
		foreach($thuoc as $row){
			$i++;
		
      $ThanhTien_TonDauKy=$ThanhTien_TonDauKy+$row['ThanhTien_TonDauKy'];
      $TT_NTK=$TT_NTK+$row['TT_NTK'];
      $TT_XTK=$TT_XTK+$row['TT_XTK_Vat'];
      $TT_CuoiKy=$TT_CuoiKy+$row['TT_CuoiKy'];

$NgayHetHan='';
 if($row["NgayHetHan"]!=''){
 $NgayHetHan=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
} 


                echo ('<tr>
                            <td style="text-align:left">'.$i.'</td>
                            <td style="text-align:left">'.$row['SoLoNhaSanXuat'].'</td>
                            <td>'.$NgayHetHan.'</td>
                            <td>'.$row['ID_Thuoc'].'</td>
                            <td style="text-align:left">'.$row['tengoc'].'</td>
                            <td>'.$row['LaThuoc'].'</td>
                            <td>'.$row['TenDonViTinh'].'</td>
                            <td>'.$row['DonGia_NDK'].'</td>
                            <td>'.$row['SL_NDK'].'</td>
                            <td>'.$row['SL_XDK'].'</td>
                            <td>'.$row['TonDauKy'].'</td>
                            <td bgcolor="#00FF00">'.$row['ThanhTien_TonDauKy'].'</td>
                            <td>'.$row['SL_NTK'].'</td>
                            <td>'.$row['DonGia_NTK'].'</td>
                            <td bgcolor="#00FF00">'.$row['TT_NTK'].'</td>
                            <td>'.$row['SL_XTK'].'</td>
                            <td>'.$row['DonGia_NTK'].'</td>
                            <td bgcolor="#00FF00">'.$row['TT_XTK_Vat'].'</td>
                            <td>'.$row['SL_TonCuoiKy'].'</td>
                            <td>'.$row['DonGia_CuoiKy'].'</td>
                            <td bgcolor="#00FF00">'.$row['TT_CuoiKy'].'</td>
                            <td>'.$row['PhanTramThue'].'</td>
					             </tr>');
 
			} 
			  ?>
              <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td> 
   

            <td style="text-align:center;font-size:18px !important">Tổng cộng</td>
            <td><?=$ThanhTien_TonDauKy?></td> <td>&nbsp;</td> <td>&nbsp;</td> 
            <td><?=   $TT_NTK?></td><td>&nbsp;</td><td>&nbsp;</td>
              <td><?=   $TT_XTK?></td> 
              <td>&nbsp;</td>  <td>&nbsp;</td> 
               <td><?=   $TT_CuoiKy?></td>

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
    	$exp->exportWithPage("excel/temp.html","Duoc_XNT_Mau3A.xls");
  }
  ?>

