<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$data = new SQLServer; //tao lop ket noi SQL

    $params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',$_GET["id_nhanvien"]);//tao param cho store
    $store_name="{call GD2_MienGiamTheoNhanVien(?,?,?)}";//tao bien khai bao store dieukienloc
    $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
    $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
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
        .type1{
            
            color:blue; font-weight:bold;
        }

</style>

</head>
<body>
<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold">Thống kê dịch miễn giảm</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		/*echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';*/
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}


/*id_luotkham SoTienGiam  NgayGioMienGiam LyDoGiamGia NickName    MaBenhNhan  HoLotBenhNhan   TenBenhNhan
374217  50000   2015-03-01 09:28:00 Miễn giảm siêu âm sau 18 tuần   Thụy    165611  Vương Bảo   Ngân*/
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
    	    <tr height="30">
    		<th>STT</th>
    		<th>NgayGioMienGiam</th> 		
            <th>Tiền giảm </th>
    		<th >LyDoGiamGia</th>
                <th >BS </th>
                <th bgcolor="pink">Mã BN</th>
            
    		<th bgcolor="pink">Họ lót BN</th>
    		<th bgcolor="pink">Tên BN</th>
            
         
           
      </tr>
         <?php
		$stt=1;

        foreach ($tam as $row) {//duyet toan bo mang tra ve

    	

		?>
         <tr>
         	<td align="center"><?=$stt?></td>
         	<td align="left"><?= $row['NgayGioMienGiam']?></td>
         	<td bgcolor="#dce775"><?=$row['SoTienGiam']?></td>
            <td style="color:red"><?=$row['LyDoGiamGia']?></td>
            <td style="color:green"><?=$row['NickName']?></td>
         	<td align="left"><?= $row['MaBenhNhan']?></td>

         	<td align="left"><?= $row['HoLotBenhNhan']?></td>
            <td align="left"><?= $row['TenBenhNhan']?></td>         
        
         
 
        
          </tr>
          

        <?php
			$stt++;
           // $sum=$sum+$row['PhiThucHien'];
            
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
		$exp->exportWithPage("excel/temp.xls","THONGKE_CHITIET_DICHVU_KCB.xls");
	}
	?>