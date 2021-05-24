<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php




$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GdD2_GetDS_BNDienThoai ()}"; //tao bien khai bao store
$params = array( );

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc
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
	<div style="text-align:center;font-size:18px; font-weight:bold">Danh sách số điện thoại bệnh nhân</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		/*echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';*/
		//echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px"">





    	<tr height="30">
            <th>Mã BN</th>
            <th>Họ lót</th>
             <th>Tên</th>
              <th>Giới</th>
     
            <th bgcolor="orange">Năm sinh</th>
             <th>Địa chỉ</th>
             <th bgcolor="orange">Điện thoại</th>
           
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve

		?>
         <tr>
         	<td align="center"><?=$row['MaBenhNhan']?></td>
            <td align="left"><?=$row['HoLotBenhNhan']?></td>
             <td align="left"><?=$row['TenBenhNhan']?></td>
              <td align="left"><?=$row['Gioi']?></td>
               <td align="left"><?=$row['NamSinh']?></td>
                <td align="left"><?=$row['DiaChi']?></td>
                <td align="left"><?=$row['DienThoai1']?></td>
            

          </tr>
        <?php
			$stt++;
		}
		?>
        <?php

		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","dsBenhNhandienthoai.xls");
	}
	?>