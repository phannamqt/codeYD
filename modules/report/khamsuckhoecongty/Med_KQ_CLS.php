<?php ob_start(); ?>
<?php 
function tt($input){
	$input = str_replace('1', 'Thành công', $input);
	$input = str_replace('0', 'Thất bại', $input);
	$input = str_replace('', 'chưa gửi', $input);
	return $input;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body{
	width: 100%;
	margin-top: 5px;
	overflow:scroll;
}
#wrapper{
	width:800px;
	margin:0 auto;
}
</style>
</head>
<body>

<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold"><?=$_GET["tencongty"]?>
    </div>
   
    <br />
    <?php
	$data= new SQLServer;
/*	$ngaybatdau=convert_date($_GET["from_day"]).' 00:00:00';
	$ngayketthuc=convert_date($_GET["to_day"]).' 23:59:59';*/


//iddotkham=802&id_congty=23&id_goikham=802&tencongty=CTY CPXL THÀNH AN 96 ( XÍ NGHIỆP XÂY LẮP 54)
//c	TenBenhNhan	Tuoi	GioiTinh	Tên dịch vụ	KetLuan	MoTa


	$store_name="{call [Med_KSK_KQ_CLS](?,?)}";
	$params = array($_GET["id_congty"],$_GET["iddotkham"]);
	//print_r($params);
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	
	?>
    <table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px">
 	<tr style=" font-weight:bold; font-size:14px;">
    	<td>***</td>
    	<td>Mã BN</td>
   		<td>Họ lót</td>
   		<td>Tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
        <td>Tên dịch vụ</td>
        <td>Kết luận</td>
    </tr>
    <?php
    $k=0;
	foreach($tam as $row){
		$k++;
		/*if($row["NgayHenTaiKham"]!=''){
			$row["NgayHenTaiKham"]=$row["NgayHenTaiKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayHetThuoc"]!=''){
			$row["NgayHetThuoc"]=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayGioGoi"]!=''){
			$row["NgayGioGoi"]=$row["NgayGioGoi"]->format($_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayHenTaiKham"]!=''){
			$hentk="Có";
		}else{
			$hentk="Không";
		}
		if($row["NgayGioGoi"]!=''){
			$row["KetQuaCuocGoi"]=$row["KetQuaCuocGoi"];
		}else{
			$row["KetQuaCuocGoi"]="Chưa gọi lần nào";
		}*/
	?>
    <tr>




    	 <td><?=$k?></td>
    	 <td><?=$row["MaBenhNhan"]?></td>
         <td><?=$row["HoLotBenhNhan"]?></td>
         <td><?=$row["TenBenhNhan"]?></td> 
         <td><?=$row["Tuoi"]?></td>
         <td><?=$row["GioiTinh"]?></td> 
         <td><?=$row["TenLoaiKham"]?></td> 
         <td><?=$row["KetLuan"]?></td>
   
    <?php
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
					$exp->exportWithPage("excel/temp.html","KetQua_CậnLâmSàng.xls");
				}
			?>