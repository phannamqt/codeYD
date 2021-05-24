<?php ob_start(); ?>
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
    <div style="text-transform: uppercase; font-weight:bold"><?=$_GET['tencongty']; ?>
    </div><br />
	<div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH KHÁM SỨC KHỎE ĐỊNH KỲ <?=date('Y'); ?></div><br />
    <table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px">
  <tr>
    <th colspan="2">STT</th>
    <th>ID</th>
    <th>Họ Và Tên</th>
    <th>Ngày Sinh</th>
    <th colspan="2">Giới Tính</th>
    <th>Nợ hiện tại</th>
     <th>Ghi chú</th>
    
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>Nam</th>
    <th>Nữ</th>
    <th>&nbsp;</th>
  </tr>
  <?php
   // $idbn=explode(";;",$_GET['id_benhnhan']);
  $stt=0;
  $sott_bophan=0;
  $tenbophan='';

	$data= new SQLServer;//tao lop ket noi SQL
	if($_GET['ac']=='xn'){
		if($_GET['xetnghiem']==''){
			$params = array($_GET['id_congty'],$_GET['id_goikham']);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan_SelectByID_CongTyAndID_GoiKhamChoCongTy(?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		}else{
			$params = array($_GET['id_congty'],$_GET['id_goikham'],$_GET['xetnghiem']);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan_SelectByID_CongTyAndID_GoiKhamChoCongTyAndXetNghiem(?,?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		}
	}else{
		if($_GET['xephang']==''){
			$params = array($_GET['id_congty'],$_GET['id_goikham']);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan_SelectByID_CongTyAndID_GoiKhamChoCongTy(?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		}else{
			$params = array($_GET['id_congty'],$_GET['id_goikham'],$_GET['xephang']);//tao param cho store 
			$store_name="{call GD2_GetThongTinBenhNhan_SelectByID_CongTyAndID_GoiKhamChoCongTyAndXepHang(?,?,?)}";//tao bien khai bao store
			$get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
			$excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		}
		
		}
	//print_r($thongtinbenhnhan);
	foreach($thongtinbenhnhan as $ttbn){
	$stt++;
	$sott_bophan++;
	if($ttbn["NgayThangNamSinh"]!='')
		$ttbn["NgayThangNamSinh"]=$ttbn["NgayThangNamSinh"]->format($_SESSION["config_system"]["ngaythang"]);
	else $ttbn["NgayThangNamSinh"]='';
		if($tenbophan==$ttbn['Nohientai']){
			$tenbophan=$ttbn['Nohientai'];	
		}else{
			$tenbophan=$ttbn['Nohientai'];
			$sott_bophan=1;	
		}

	
  ?>
  <tr>
    <td align="center"><?=$stt?></td>
    <td align="center"><?=$sott_bophan?></td>
     <td><?=$ttbn['MaBenhNhan']?></td>
    <td><?=$ttbn['TenBenhNhan']?></td>
    <td  align="center"><?=$ttbn['NgayThangNamSinh']?></td>
    <td align="center"><?php if($ttbn['GioiTinh']=='Nam'){ echo 'x';}?></td>
    <td align="center"><?php if($ttbn['GioiTinh']=='Nữ'){ echo 'x';}?></td>
    <td><?=$ttbn['Nohientai']?></td>
     <td><?=$ttbn['SoLuot']?></td>
  </tr>
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
		$exp->exportWithPage("excel/temp.html","danhsach_bn_ksk_cty.xls");
	}
	?>