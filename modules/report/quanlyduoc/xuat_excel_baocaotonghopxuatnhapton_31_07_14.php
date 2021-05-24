<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$data= new SQLServer;//tao lop ket noi SQL
if($_GET['theonhacungcap']=='false'){
	$ngaybd=$_GET["from_day"];
	$ngaykt=$_GET["to_day"]; //04/30/2014  //1/4/14
	$ngaybatdau= convert_date($ngaybd);
	$ngayketthuc= convert_date($ngaykt);
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
	$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],'',$_GET["n_order"]);
}else{
	$ngaybd=$_GET["from_day"];
	$ngaykt=$_GET["to_day"]; //04/30/2014  //1/4/14
	$ngaybatdau= convert_date($ngaybd);
	$ngayketthuc= convert_date($ngaykt);
	$id_ncc="And ID_NCC=".$_GET["idncc"];
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
	$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],$id_ncc,$_GET["n_order"]);
}
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
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
	<div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO TỔNG HỢP XUẤT NHẬP TỒN</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
    	<tr height="30">
            <th>STT</th>
            <th>Mã thuốc</th>
            <th>Tên thuốc</th>
            <th>ĐVT</th>
            <th>Số lô HT</th>
            <th>Số lô NSX</th>
            <th>Giá vốn</th>
            <th>Giá bán</th>
            <th>SL tồn đầu</th>
            <th>TT tồn đầu</th>
            <th>SL nhập trong kỳ</th>
            <th>TT nhập trong kỳ</th>
            <th>SL xuất trong kỳ</th>
            <th>TT xuất trong kỳ</th>
            <th>SL tồn</th>
            <th>TT tồn</th>
            <th>Hạn sử dụng</th>
            <th width="400">Nhà cung cấp</th>
            <th>Ưu tiên xuất</th>
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if($row["NgayHetHan"]!=''){
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
		}
		?>
         <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['ID_Thuoc']?></td>
            <td><?=$row['TenBietDuoc']?></td>
            <td><?=$row['TenDonViTinh']?></td>
            <td align="left"><?=$row['SoLo']?></td>
            <td align="left"><?=$row['SoLoNhaSanXuat']?></td>
            <td align="right"><?=$row['DonGia']?></td>
            <td><?=$row['GiaBan']?></td>
            <td><?=$row['SL_TD']?></td>
            <td><?=$row['TT_TD']?></td>
            <td><?=$row['SL_N']?></td>
            <td><?=$row['TT_N']?></td>
            <td><?=$row['SL_X']?></td>
            <td><?=$row['TT_X']?></td>
            <td><?=$row['SL_TON']?></td>
            <td><?=$row['TT_TON']?></td>
            <td align="center"><?=$row['NgayHetHan']?></td>
            <td  width="700"><?=$row['TenNCC']?></td>
            <td align="center"><?=$row['STT_UUTIEN']?></td>

          </tr>
        <?php
			$stt++;
		}
		?>
        <?php
		/*$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Ma_NhapXuat"]."</td>";
			echo "<td>".$row["Ten_LoaiNhapXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "</tr>";
			$stt++;
        }  */
		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","baocaotonghop_xuat_nhap_ton.xls");
	}
	?>