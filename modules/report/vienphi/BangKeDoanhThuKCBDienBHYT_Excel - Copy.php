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
	padding: 4px; 
} 
</style>
</head>
<?php   
$data= new SQLServer;//tao lop ket noi SQL
$ngaytam=explode("/",$_GET['ngay']);
$ngay=$ngaytam[2]."-".$ngaytam[1]."-".$ngaytam[0];
$store_name1="{call MED_BaoCaoDoanhThuKCBBHYT (?)}";
$params1 = array($ngay);
$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
$doanhthu= $excute1->get_as_array();//Tra ve mang toan bo 


$store_name_dmkt="{call MED_BaoCaoDoanhThuKCBBHYT_DVKT (?)}";
$params_dmkt = array($ngay);
$get_dmkt=$data->query( $store_name_dmkt,$params_dmkt);//Goi 
$excute_dmkt= new SQLServerResult($get_dmkt);//Ket noi lop 
$doanhthu_dmkt= $excute_dmkt->get_as_array();//Tra ve mang toan bo 

$dsnhom_dvkt=explode("|||",$doanhthu_dmkt[0]["DSNhomBHYT"]);
$tieudecolspan=16+count($dsnhom_dvkt)-1;
?>
<body>
<div id="tongthe">
	<table  cellpadding="0" cellspacing="0" border="0"> 
		<tr>
			<td colspan="<?=$tieudecolspan?>" style="font-weight:bold; ">
			<?=$_SESSION["com"]["TenBenhVien"]?>
			</td> 
		</tr>
		<tr>
			<td colspan="<?=$tieudecolspan?>" align="left"> <?php echo $_SESSION["com"]["DiaChi"]?> </td>
		</tr>
		<tr>
			<td colspan="<?=$tieudecolspan?>" align="left"> <?php echo $_SESSION["com"]["SoDT"]?> </td>
		</tr>
	</table>
	<table  cellpadding="0" cellspacing="0" border="0"> 
		<tr>
			<th colspan="<?=$tieudecolspan?>" style="text-align:center; font-weight:bold; font-size:20px">
			BẢNG KÊ DOANH THU KCB DIỆN BHYT<br /> 
			</th> 
		</tr>
		<tr> 
			<th colspan="<?=$tieudecolspan?>" style="text-align:center; font-weight:bold; font-size:20px">
			Ngày <?=$_GET['ngay']?> <br /> 
			</th>
		</tr>
	</table>
	<div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px"> 
		<table id="bang_1" cellpadding="0" cellspacing="0" border="1">
			<thead>
				
				<tr>
					<th width="30px" rowspan=2>STT</th>
					<th width="300px" rowspan=2>Họ và tên</th>
					<th width="70px" rowspan=2>Năm sinh</th>
					<th width="70px" rowspan=2>Giới tính</th>
					<th width="250px" rowspan=2>Số thẻ BHYT</th>
					<th width="90px" rowspan=2>Mã ĐKBĐ</th>
					<th width="90px" rowspan=2>Tổng cộng</th>
					<th width="200px" colspan=2>Trong đó</th>
					<th width="90px" rowspan=2>Tổng tiền DVKT</th>
					<th width="200px" colspan=2>Trong đó</th>
					<th width="90px" rowspan=2>Tổng tiền thuốc</th>
					<th width="200px" colspan=2>Trong đó</th>
					<th width="90px" rowspan=2>Phụ thu</th>
					<th width="200px" colspan=<?=count($dsnhom_dvkt)-1?>>THÔNG TIN CHI TIẾT DVKT</th> 
				</tr>
				<tr> 
					<th width="100px">BHYT trả</th>
					<th width="100px">BN trả</th>
					<th width="100px">BHYT trả</th>
					<th width="100px">BN trả</th>
					<th width="100px">BHYT trả</th>
					<th width="100px">BN trả</th>
					<?php 
					for($i=1;$i<count($dsnhom_dvkt);$i++){ 
					?>
					<th width="100px"><?=$dsnhom_dvkt[$i]?></th>  
					<?php 	
					}
					?>					
				</tr>
			<thead> 
			<tbody>
			<?php
			$stt=0;
			foreach($doanhthu as $row){
			$stt++;															 
			?>
				<tr>
					<td style="padding:4px"><?=$stt?></td>
					<td style="padding:4px;width:300px"><?=$row["HoTenBenhNhan"]?></td>
					<td style="padding:4px"><?=$row["NamSinh"]?></td>
					<td style="padding:4px"><?=$row["GioiTinh"]?></td>
					<td style="padding:4px"><?=$row["SoThe"]?></td>
					
					<td style="padding:4px;text-align:right"><?=$row["Ma_KCB_BanDau"]?></td>					
					<td style="padding:4px;text-align:right"><?=(float)($row["TongCong"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["BaoHiemTra"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["BenhNhanTra"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["TongCongDVKT"])?></td>
					
					<td style="padding:4px;text-align:right"><?=(float)($row["ThanhTienBaoHiemDVKT"])?></td>					
					<td style="padding:4px;text-align:right"><?=(float)($row["BenhNhanTraDVKT"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["TongCongThuoc"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["ThanhTienBaoHiemThuoc"])?></td>
					<td style="padding:4px;text-align:right"><?=(float)($row["BenhNhanTraThuoc"])?></td>
					
					<td style="padding:4px;text-align:right"><?=(float)($row["ThanhTienPhuThuBenhVien"])?></td>	
					<?php 
					for($i=1;$i<count($dsnhom_dvkt);$i++){
						$sotien=0;
						foreach($doanhthu_dmkt as $rowkt){
							if($dsnhom_dvkt[$i]==$rowkt['Ten_Nhom_BHYT'] && $rowkt['ID_LuotKham']==$row['ID_LuotKham']){
								$sotien=$rowkt['TongCong']; 
							}
						}
					?>  
						<td style="padding:4px;text-align:right"><?=(float)($sotien)?></td>
					<?php 	
					}
					?> 
				</tr>
			<?php
			}
			?>
			</tbody>
        </table> 
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>
<script type="text/javascript">
	//$(document).ready(function(e) { 

	 //$('#total').html('<STRONG>Bằng chữ: '+toWords((000).toString())+"đồng.</sTRONG>");

	// print_preview();
	//});
</script>
</html>
<?php
  if($types=="excel"){
     file_put_contents('excel/temp.html', ob_get_contents());
    $exp=new ExportToExcel();
    $exp->exportWithPage("excel/temp.html","BangKeDTKCB_BHYT_".$ngay.".xls"); 
  }
  ?>

