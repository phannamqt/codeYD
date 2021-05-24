<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bảng kê phiếu xuất</title>
<?php  
	//echo (convert_date('02/02/14'));
//include("../../../class/class.sqlserver.php");
//include("../../../class/ExportToExcel.class.php");
$search="";
	if(isset($_GET["tuso"]) && isset($_GET["denso"])){
		$search .=" AND (MaPhieu BETWEEN '$_GET[tuso]' AND '$_GET[denso]' )";
	}
	if(isset($_GET["maKH"])){
		$search .=" AND ID_NCC = $_GET[maKH]";
	}
	if(isset($_GET["ID_LoaiNhapXuat"])){
		$search .=" AND ID_LoaiNhapXuat = $_GET[ID_LoaiNhapXuat]";
	}
	if(isset($_GET["ghichu"])){
		$search .=" AND Gd2_PhieuNhap_".$_GET["namhethong"].".GhiChu like '%$_GET[ghichu]%'";
	}
	/*if(isset($_GET["idThuoc"])){
		$search .=" AND ID_Thuoc = $_GET[idThuoc]";
	}   
	*/
	if(isset($_GET["tenkhachhang"])){
		$search .=" AND TenKhachHang =N'$_GET[tenkhachhang]'";
	} 
	/*if(isset($_GET["ID_LoaiNhapXuat"])){
		$search .=" AND ID_LoaiNhapXuat = $_GET[ID_LoaiNhapXuat]";
	}*/ 
$TuNgay=convert_date($_GET["tungay"]);
$DenNgay=convert_date($_GET["denngay"]);
$search_string=$search;
$MaKHo = $_GET["maKHO"];
$data= new SQLServer;//tao lop ket noi SQL

$store_name="{call GD2_RPT_BANGKE_PHIEUXUAT(?,?,?,?)}";//tao bien khai bao store
$params = array($TuNgay,$DenNgay,$search_string,$MaKHo);//tao param cho store 	

$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store

$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//print_r( $tam);
?>
<style>
	body{
		width:100%;
		margin:auto;
		padding-left:3px;
		overflow-y:auto;	
		font-family:Arial, Helvetica, sans-serif;
		font-size:14px;				
	}
	label,input,table,div{
		font-family:Arial, Helvetica, sans-serif!important;	
		font-size:14px;
		letter-spacing:0px;		 		
	}
	div#info label{		 
		letter-spacing:0px;
		font-weight:normal;
		text-align:left!important;
		display:inline-block;
		width:100px;
	}	 
	.header{
		margin:0auto;
		padding-top:3px;
		width:100%;
		height:120px;		 
	}	 
	#center{
		 
		font-weight:600;
		margin-top:0px;		
	}	
	table{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;		
	}
	table td{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:0px 2px 1px 5px;		 
	}
	table th{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:0px 2px 1px 5px;
		}
	.inhoa{
		font-weight:bold;
		font-size:14px;
		}
	input{
		border:none;
	}
	.footer{
		width:100%;
		vertical-align:top;	
			
	}
	.footer div{
		width:145px;
		display:inline-block;	
		vertical-align:top;
		text-align:left;		
	}
	 
</style>
</head>

<body>
<div align="center" >	 
    <div class="header">
    	  <div style="float:left;text-align:left!important">
          	  <div><span style="letter-spacing: 0.5px;font-weight:bold;font-size:12px!important;">FAMILY</span> <img src="images/logo.png"  /> </div>
              <div><label class="inhoa"><?php echo $_SESSION["com"]["TenBenhVien"]?></label></div>
              <div><label>Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?></label></div>
              <div><label>SĐT: <?php echo $_SESSION["com"]["SoDT"]?></label></div>
          </div><br style="line-height:104px;" /> 
          <div id="center">
          	<div style="font-size:20px">BẢNG KÊ PHIẾU XUẤT</div>
            <div><label style="font-style:italic">Từ ngày </label><label style="font-style:italic"><?php echo $_GET["tungay"]?></label><label style="font-style:italic"> đến ngày </label><label style="font-style:italic"> <?php echo $_GET["denngay"]?> </label></div>
          </div>
     </div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px;margin-top:30px">
         <tr>
         	<td colspan="2" align="center" style="width:115px">Chứng từ</td>
            <td rowspan="2" align="center" style="width:340px">Diễn giải</td>
            <td rowspan="2" align="center" style="width:75px">Số lô</td>
            <td rowspan="2" align="center" style="width:60px">Số lượng</td>
            <td rowspan="2" align="center" style="width:60px">Đơn giá</td>
            <td rowspan="2" align="center" style="width:80px">Thành tiền</td>
         </tr>
           <tr>
         	<td align="center" style="width:70px">Ngày</td>
            
            <td align="center" style="width:45px">Số</td>
         </tr>
         <?php 
		 	$cache=0;$tongsotien=0;
			foreach($tam as $row)
			{	
				if($cache!=$row["MaPhieu"])
				{
					 $thanhtien=0;$i=0;
					 echo "<tr>";
					 echo '<td align="center" rowspan="3" style="font-style:italic">'.$row["NgayXuat"]->format($_SESSION['config_system']['ngaythang']).'</td>';
					 echo '<td align="center" rowspan="3">'.$row["MaPhieu"].'</td>';
					 if($row["TenNCC"]==NULL or $row["TenNCC"]=="") 
					 	echo '<td colspan="3" style="font-weight:600"></td>';
					 else 
					 	echo '<td colspan="3" style="font-weight:600">'.$row["TenNCC"].'</td>';
					 if($row["TenKho"]==NULL or $row["TenKho"]=="") 
					 	echo '<td colspan="2" align="center" style="border-left:none;font-weight:600"></td>';
					 else 
					 	echo '<td colspan="2" align="center" style="border-left:none;font-weight:600">'.$row["TenKho"].'</td>';
					 echo "</tr>";
					 echo "<tr>";
					 echo '<td colspan="5">Khách hàng: '.$row["TenKhachhang"].'</td>';	
					 echo "</tr>";
					 echo "<tr>";
					 if($row["GhiChu"]==NULL or $row["GhiChu"]=="") 
					 	echo '<td colspan="5" style="height:16px"></td>';
					 else	
					 	echo '<td colspan="5">Ghi chú: '.$row["GhiChu"].'</td>';
					 echo "</tr>";
					 echo '<td colspan="3">'.$row["TenBietDuoc"].'</td>';
					 echo '<td >'.$row["Solo"].'</td>';
					 echo '<td align="right">'.number_format($row["SoLuong"]).'</td>';
					 $parts = explode('.',$row["DonGia"]);
					 echo '<td align="right">'.number_format($parts[0]).'</td>';
					 echo '<td align="right">'.number_format($row["ThanhTien"]).'</td>';
					 echo "<tr>"; 
					 $cache=$row["MaPhieu"];
					 $thanhtien=$thanhtien+	 $row["ThanhTien"];
					 $i++;
					 if($i==$row["SoDong"])
					 {
						echo '<tr style="background-color:#CCC; font-weight:600">'; 
						echo '<td colspan="6" align="right">Tổng cộng</td>';
						echo '<td align="right">' .number_format($thanhtien). '</td>';
						$tongsotien=$tongsotien+ $thanhtien;
						echo "</tr>";	 
					 }
				}
				else
				{
					 echo "</tr>";
					 echo '<td colspan="3">'.$row["TenBietDuoc"].'</td>';
					 echo '<td >'.$row["Solo"].'</td>';
					 echo '<td align="right">'.number_format($row["SoLuong"]).'</td>';
					 $parts = explode('.',$row["DonGia"]);
					 echo '<td align="right">'.number_format($parts[0]).'</td>';
					 echo '<td align="right">'.number_format($row["ThanhTien"]).'</td>';
					 echo "<tr>"; 
					 $thanhtien=$thanhtien+	 $row["ThanhTien"];
					 $i++;
					 if($i==$row["SoDong"])
					 {
						echo '<tr style="background-color:#CCC; font-weight:600">'; 
						echo '<td colspan="6" align="right">Tổng cộng</td>';
						echo '<td align="right">' .number_format($thanhtien). '</td>';
						$tongsotien=$tongsotien+ $thanhtien;
						echo "</tr>";	 
					 }	 	
				}
			}	 
	 ?>
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px;border:none">
     	<tr style="font-weight:600">
        	<td style="width:670px;border:none;" align="right">Tổng số tiền:</td>
            <td style="width:80px;border:none" align="right"><?php echo number_format($tongsotien)?></td>
        </tr>
     </table>
     <div style="height:7px"></div>	
     <div><div style="margin-left:500px;font-style:italic"><label>Ngày </label><label><?php echo date("d");?></label><label> tháng </label><label><?php echo date("m");?></label><label> năm </label><label><?php echo date("Y");?></label></div></div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px; border:none">
		<tr>
        	<th style="width:250px;border:none">Thủ trưởng đơn vị</th>
            <th style="width:250px;border:none">Kế toán</th>
            <th style="width:250px;border:none">Người lập phiếu</th>
        </tr>
        <tr>
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div></div>
            </td>
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div id="nglapphieu"></div>
            </td>	
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div></div>
            </td> 
         </tr>	       
     </table>
</div>
<script>
	jQuery(document).ready(function() {
		print_preview();
		})
</script>
</body>

</html>
