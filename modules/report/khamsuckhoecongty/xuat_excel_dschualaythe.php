<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_MemberCard_XuatDSBenhNhanChuaGiaoThe ()}";
	$params = array();
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
		width:2000px;
		margin:0 auto;
		}
</style>
</head>
<body>
  <div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH THẺ THÀNH VIÊN CHƯA GIAO</div>
  	<table border="1" cellpadding="0" cellspacing="0" align="center"  style="width:2000px;margin-top:5px">
    	<tr height="30">    
        <th width="50">STT</th>
        <th width="100">Mã BN</th>
        <th width="200">Họ lót BN</th>
        <th width="200">Tên BN</th>
        <th width="200">Số thẻ</th>
        <th width="200">SĐT 1</th>
        <th width="200">SĐT 2</th>
        <th width="200">Địa chỉ</th>
        <th width="200">Tên người LH</th>
        <th width="200">Địa chỉ người LH</th>
        <th width="200">Quan hệ với BN</th>
        <th width="200">SĐT người liên hệ</th>
        <th width="200">Tên khoa đang nhập viện</th>
        <th width="200">Ngày giờ vào viện</th>
        <th width="200">Ngày giờ ra viện</th>
        <th width="150">Khoa nội trú/Ngoại trú</th>
		<th width="150">Số phiếu giao nhận</th>
      </tr>
         <?php
         $i=0;
        foreach ($tam as $row) {
        	$i++;
          if($row["NgayGioVaoVien"]!=''){
            $row["NgayGioVaoVien"]=$row["NgayGioVaoVien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
          }
          else $row["NgayGioVaoVien"]='';

          if($row["NgayGioRaVien"]!=''){
            $row["NgayGioRaVien"]=$row["NgayGioRaVien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
          }
          else $row["NgayGioRaVien"]='';
		?>
		<tr height="30">
         	<td width="29" align="center"><?=$i?></td>
            <td width="100" align="left"><?=$row['MaBenhNhan']?></td>
            <td width="150" align="left"><?=$row['HoLotBenhNhan']?></td>
            <td width="150" align="left"><?=$row['TenBenhNhan']?></td>
            <td width="150" align="left"><?=$row['SoTheThanhVien']?></td>
            <td width="50" align="left"><?="'".$row['DienThoai1']?></td>
            <td width="150" align="left"><?="'".$row['DienThoai2']?></td>
            <td width="150" align="left"><?=$row['DiaChi']?></td>
            <td width="150" align="left"><?=$row['TenNguoiLienHe']?></td>
            <td width="150" align="left"><?=$row['DiaChiNguoiLienHe']?></td>
            <td width="150" align="left"><?=$row['QuanHeVoiBN']?></td>
            <td width="150" align="left"><?="'".$row['DienThoaiNguoiLienHe']?></td>
            <td width="150" align="left"><?=$row['TenPhongBan']?></td>
            <td width="150" align="left"><?=$row['NgayGioVaoVien']?></td>
            <td width="150" align="left"><?=$row['NgayGioRaVien']?></td>
            <td width="150" align="left"><?=$row['Loai']?></td>
			<td width="150" align="left"><?=$row['ID_AuTo_QLGiaoNhan']?></td>
      </tr>
      <?php
		}		
		?>
    </table>

</body>
</html>
<?php
if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","DS_TheThanhVien_ChuaNhan.xls");
}
?>