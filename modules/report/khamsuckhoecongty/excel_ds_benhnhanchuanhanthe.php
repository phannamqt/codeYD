<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

	$data= new SQLServer;//tao lop ket noi SQL

	$store_name="{call GD2_BenhNhanNoiTru_ChuaNhanThe (?,?,?)}";
	$tu_ngay=convert_date($_GET["tungay"]).' 00:00:00';
  $den_ngay=convert_date($_GET["denngay"]).' 23:59:59';
  $params = array($tu_ngay,$den_ngay,$_GET["loaiba"]);

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
  // print_r($tam);
	// function createpass($code){
	// 	$x1=md5("f@mily!emr".md5($code));
	// 	//echo $x1."<br>";
	// 	return $x1[0].$x1[10].$x1[20].$x1[15].$x1[25].$x1[1];
	// }
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

  <div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH BỆNH NHÂN <?php if($_GET["loaiba"]==1){echo "NỘI TRÚ";}else{echo "NGOẠI TRÚ";}?> CHƯA NHẬN THẺ TỪ <?php echo convert_date($_GET["tungay"])?> ĐẾN <?php echo convert_date($_GET["denngay"])?></div>
  	<table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px">
    	<tr height="30">    
            <th width="50">STT</th>
            <th width="100">Mã bệnh nhân</th>
            <th width="200">Họ tên bệnh nhân</th>
            <th width="100">Khoa</th>
            <th width="100">SĐT</th>
            <th width="100">SĐT 2</th>
            <th width="250">Địa chỉ</th>
            <th width="150">Số thẻ thành viên</th>
            <th width="150">Ngày tạo</th>
            <th width="50">Nhóm máu</th>
            <th width="50">Rh</th>
      </tr>
         <?php
         $i=0;
        foreach ($tam as $row) {
          if($row["NgayTao"]!=NULL) $row["NgayTao"]=$row["NgayTao"]->format("d/m/y");
        	
		?>
		<tr height="30">    	
         	  <td width="29" align="center"><?=$i+1?></td>
            <td width="100" align="left"><?=$row['MaBenhNhan']?></td>
            <td width="150" align="left"><?=$row['HoTenBenhNhan']?></td>
            <td width="100" align="left"><?=$row['TenPhongBan']?></td>
            <td width="100" align="left"><?=$row['DienThoai1']?></td>
            <td width="100" align="left"><?=$row['DienThoai2']?></td>
            <td width="250" align="left"><?=$row['DiaChi']?></td>
            <td width="150" align="left"><?=$row['SoTheThanhVien']?></td>
            <td width="150" align="left"><?=convert_date($row['NgayTao'])?></td>
            <td width="50" align="left"><?=$row['NhomMau']?></td>
            <td width="50" align="left"><?=$row['Rh']?></td>
      </tr>
      <?php
      $i++;
		}		
		?>
    </table>

</body>
</html>
<?php
if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","ds_the_daguinhaindap.xls");
}
?>