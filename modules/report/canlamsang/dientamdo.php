<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> </title>
 
<style>
	body{
		<?php
			$file=explode(":::",$_GET['links']);
			echo "background: url(".$file[0].");";
		?>
		
		background-repeat: no-repeat;
		background-size: 100%;
 
	}
	.class-top-left {
		height: 87px;
 
		width: 190px;
		position: absolute;
		display: inline-block;
		left: 35px;
		top: 36px;
		background:#fff;
		font-size:11px;
		padding-left:5px;
	}
	.class-top-right {
		height: 87px;
		width: 600px;
		position: absolute;
		display: inline-block;
		right: 58px;
		top: 36px;
		background:#fff;
		font-size:11px;
	}
	.class-top-child {
		height: 100%;
		width: 64%;
		display: inline-block;
		background:#fff;
		 float: left;
	}
	.class-top-right-child{
		text-align:center;
		width: 35%;
		 float: right;
	}
</style>
</head>
<?php
		
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		 
    ?>
	<div class="class-parent">
 
		<div class="class-top-left">
		<img src="images/logo2.png" style="width: 90%; padding-bottom:5px;"><br>
		<b>Họ tên: <?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"]?></b><br>
		<b>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]?>, Giới tính: <?=$thongtinbenhnhan[0]["Gioi"]?></b>
		</div>
		<div class="class-top-right">
			<div class="class-top-left-child class-top-child">
			Chẩn đoán: <pre><?=$thongtinluotkham[0]["KetLuan"] ?></pre>
			</div>
			<div class="class-top-right-child class-top-child">
			 <img id="bs_chandoan" height="65px"/><br>
			<b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
			</div>
		</div>
	</div>
	
	 <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
				print_preview();
		});
	</script>
</body>
</html>