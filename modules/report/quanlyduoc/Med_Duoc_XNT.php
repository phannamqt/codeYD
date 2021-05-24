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
$data= new SQLServer;//tao lop ket noi SQL id_kho
$store_name2="{call [Med_TonKhoDuocChuan](?,?,?,?,?)}";
//$params2 = array(2,convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',0,null);
$params2 = array($_GET['id_kho'],convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',0,null);
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
                      BÁO CÁO XUẤT NHẬP TỒN(MẪU 3)<br />
                        Từ ngày <?=$_GET['tungay']?> đến ngày <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
          <th width="40px">STT</th>
            <th width="400px">TÊN THUỐC</th>
            <th width="70px">ĐVT</th>
            <th width="70px">TỒN ĐẦU KỲ</th>
            <th width="90px">NHẬP TRONG KỲ</th>
			     <th width="90px">XUẤT TRONG KỲ</th>
             <th width="90px">TỒN CUỐI KỲ</th>
            <th width="90px"></th> 


           <!--  Id_Thuoc  Tengoc  DonGia  SL_X  TT_X  PhanTramThue  TenDonViTinh
           5366  Vitamin C 1g  1209.00 5 6045.00 5 Viên -->
           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
		$i=0;
		$sum=0; 
		foreach($thuoc as $row){
			$i++;
			//$sum=$sum+$row['TT_X']; 
/*
ID_Kho  MaThuoc id_thuoc  TenDonViTinh  tengoc  TenNhomThuoc  LaThuoc TT_NDK  TT_XDK  SL_NDK  SL_XDK  TonDauKy  TT_NDK  TT_XDK  TT_NTK  TT_XTK  TonCuoiKy SL_N  SL_X  TonHienTai

*/

                echo ('<tr>
				<td style="text-align:left">'.$i.'</td>
      <td style="text-align:left">'.$row['tengoc'].'</td>
      <td>'.$row['TenDonViTinh'].'</td>
      <td>'.$row['TonDauKy'].'</td>
      <td>'.$row['SL_N'].'</td>
      <td>'.$row['SL_X'].'</td>
       <td>'.$row['TonCuoiKy'].'</td>
				
					</tr>');
 
			} 
			  ?>
              <tr>
            <td>&nbsp;</td>
            
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
			
            <td style="text-align:center;font-size:18px !important">Tổng cộng</td>
            
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
    	$exp->exportWithPage("excel/temp.html","Duoc_XNT_Mau3.xls");
  }
  ?>

