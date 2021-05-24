<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

	$data= new SQLServer;//tao lop ket noi SQL
  $tu_ngay=convert_date($_GET["tungay"]).' 00:00:00';
$den_ngay=convert_date($_GET["denngay"]).' 23:59:59';
$data= new SQLServer;//tao lop ket noi SQL
$params = array($tu_ngay,$den_ngay);//tao param cho store 
	$store_name="{call GD2_GetDanhSachTinNhanNhatKyChaoDoi (?,?)}";

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

  <div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH TIN NHẮN CHÚC MỪNG SINH - IN NHẬT KÝ</div>
    <?php
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tungay"].' Đến ngày '.$_GET["denngay"].'</div>';
	?>
  	<table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px">
    	<tr height="30">    
            <th width="50">STT</th>
            <th width="100">Mã bệnh nhân</th>
            <th width="100">Họ bệnh nhân</th>
            <th width="200">Tên bệnh nhân</th>
            <th width="200">Tuổi</th>

            <th width="200">Giới</th>
            <th width="200">Tên bố/NGT</th>
            <th width="200">SĐT Bố/NĐD</th>
            <th width="200">Quan hệ với BN</th>
            <th width="200">Thời gian sinh</th>

            <th width="150">Cân nặng</th>
            <th width="150">Tin nhắn</th>
            <th width="150">In nhật kí</th>
            <th width="150">Oae</th>
            <th width="150">Sa Tim</th>

            <th width="150">SLSS</th>
            <th width="150">Ghi chú</th>

      </tr>
         <?php
         $i=0;
        foreach ($tam as $row) {
        	$i++;
          
          $bien  = explode('|||', $row["TheoDoiBuongDe"]);
          $giosinh =  isset($bien[3])?$bien[3]:'';
          $ngaysinh = isset($bien[4])?$bien[4]:'';
          if($row['TinhTrangGui']==1){
            $row['TinhTrangGui']='Đã gởi';
          }else{
             $row['TinhTrangGui']='Chưa gởi';
          }
          if($row['TinhTrangtn']==1){
            $row['TinhTrangtn']='Đã gởi';
          }else{
             $row['TinhTrangtn']='Chưa gởi';
          }
		?>
		<tr height="30">    	
         	<td width="29" align="center"><?=$i?></td>                  
            <td width="100" align="left"><?=$row['MaBenhNhanCon']?></td>
            <td width="150" align="left"><?=$row['HoLotBenhNhanCon']?></td>
            <td width="150" align="left"><?=$row['TenBenhNhanCon']?></td>
            <td width="150" align="left"><?=$row['ngaytuoi2']?></td>

            <td width="150" align="left"><?=$row['gioi']?></td>
            <td width="50" align="left"><?=$row['HoTenCha']?></td>
            <td width="150" align="left"><?=$row['SDT_NguoiLienHe']?></td>
            <td width="150" align="left"><?=$row['Quanhe']?></td>
            <td width="150" align="left"><?=$giosinh.' '.$ngaysinh?></td>

            <td width="150" align="left"><?=$row['CanNang'].'gram'?></td>
            <td width="150" align="left"><?=$row['TinhTrangGui']?></td>
            <td width="150" align="left"><?=$row['TinhTrangtn']?></td>
            <td width="150" align="left"><?=$row['oae1']?></td>
            <td width="150" align="left"><?=$row['satim1']?></td>

            <td width="150" align="left"><?=$row['slss1']?></td>
            <td width="150" align="left"><?=$row['GhiChu']?></td>

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
	$exp->exportWithPage("excel/temp.html","ds_goitinnhaninnhatky_".$_GET["tungay"].".xls");
}
?>