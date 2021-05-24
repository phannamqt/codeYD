<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	if(isset($_GET["tu_ngay"]))
	{
	   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
	}
	else
	{
		$tu_ngay=date("Y-m-d").' 0:00:00';
	}
	if(isset($_GET["den_ngay"]))
	{
	$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
	}
	else
	{
		 $den_ngay=date("Y-m-d").' 23:59:59';
	}
	//$_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59'
	$store_name="{call GD2_baocao_thuoc_bhyt_thoigian (?,?)}";
	$params = array($tu_ngay,$den_ngay);

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	//echo $tam;
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

  <table border="1" cellpadding="0" cellspacing="0" align="center" style=";margin-top:5px">
  <thead>
       <tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
       											

	      <td  style="border:solid 1px #000000 !important;"  ><strong>STT</strong></td>			
          <td  style="border:solid 1px #000000 !important;"  ><strong>STT theo DMT của BYT</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Tên hoạt chất</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Tên thuốc thành phẩm</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Đường dùng dạng bào chế</strong></td>	
          <td  style="border:solid 1px #000000 !important;"  ><strong>Hàm lượng/nồng độ</strong></td>  
          <td  style="border:solid 1px #000000 !important;"  ><strong>Số ĐK/GPNK</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Đơn vị tính</strong></td>
          <td  align='center' style="border:solid 1px #000000 !important;"  ><strong>Số lượng</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Đơn giá</strong></td>
          <td  style="border:solid 1px #000000 !important;"  ><strong>Thành Tiền</strong></td> 
      </tr>
     
  </thead>
           <?php
		   $stt=0;
		  // $tong=0;
		   $result = [];
			$p=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
			$stt=$stt+1;
			$id = (isset($row["ID_NhomThuoc"])?$row['ID_NhomThuoc']:'Chưa cấu hình');
	  if (!isset($result[$id])) {
	  	 echo "<tr>";
	  	 echo "<td colspan='11' align='left' bgcolor='#ddd'><strong>Phần ".$p.": ".(isset($row["TenNhomThuoc"])?$row["TenNhomThuoc"]:'Chưa cấu hình')."</strong></td>";
	  	 echo "</tr>";
	  	 echo "<tr>";
            echo "<td align='center'>".$row["MaBHYT"]."</td>";
			echo "<td align='left'>".$row["MaSoTheoDMBHYT"]."</td>";
			echo "<td align='left'>".$row["HoatChatChinh"]."</td>";			
			echo "<td align='right'>".$row["tengoc"]."</td>";		
			echo '<td align="right">'.(isset($row["DuongDung_BHYT"])?$row["DuongDung_BHYT"]:'Chưa cấu hình').'</td>';
			echo '<td align="right">'.$row["HamLuong"].'</td>';
			echo '<td align="right">'.$row["SignNumber"]."</td>";
			echo '<td align="right">'.$row["TenDonViTinh"]."</td>"; 
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>"; 
			echo "</tr>";
	    $result[$id] = array(
	    	'checkarray'=>true
	    	);
	    $p++;
	     }else{
            echo "<tr>";
            echo "<td align='center'>".$row["MaBHYT"]."</td>";
			echo "<td align='left'>".$row["MaSoTheoDMBHYT"]."</td>";
			echo "<td align='left'>".$row["HoatChatChinh"]."</td>";			
			echo "<td align='right'>".$row["tengoc"]."</td>";		
			echo '<td align="right">'.(isset($row["DuongDung_BHYT"])?$row["DuongDung_BHYT"]:'Chưa cấu hình').'</td>';
			echo '<td align="right">'.$row["HamLuong"].'</td>';
			echo '<td align="right">'.$row["SignNumber"]."</td>";
			echo '<td align="right">'.$row["TenDonViTinh"]."</td>"; 
			echo '<td align="right">'.$row["ngoaitru"]."</td>";
			echo '<td align="right">'.$row["Gia"]."</td>";
			echo '<td align="right">'.$row["tt"]."</td>"; 
			echo "</tr>";			
        }  
		}
		?> 

    </table>

</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","bhyt_20_new.xls");
	}
	?>