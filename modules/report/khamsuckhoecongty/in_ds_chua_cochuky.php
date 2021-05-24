<html>
<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetListNhanVien_CheckChuKy(?)}";//tao bien khai bao store
$params = array($_GET['doctor']);//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce;
$dsco;
$dschua;
$i=0;
$j=0;

/*foreach ($tam as $row) {//duyet toan bo mang tra ve
	$filename='F:\pic_data\Signs\\'.$row['HinhChuKy'];
	if (file_exists($filename) && $row['HinhChuKy']!='') {
	   // echo $filename."<br>";
	    $dsco[$i]='<tr><td>'.$row['ID_NhanVien'].'</td>
			<td>'.$row['HoLotNhanVien'].' '.$row['TenNhanVien'].'</td>
			<td>'.$row['NickName'].'</td>
			<td>'.$row['TenPhongBan'].'</td>
			<td>'.$row['BS'].'</td>
			<td>'.$row['HinhChuKy'].'</td></tr>';
	    $i++;
	} else {
	    $dschua[$i]='<tr><td>'.$row['ID_NhanVien'].'</td>
			<td>'.$row['HoLotNhanVien'].' '.$row['TenNhanVien'].'</td>
			<td>'.$row['NickName'].'</td>
			<td>'.$row['TenPhongBan'].'</td>
			<td>'.$row['BS'].'</td>
			<td>'.$row['HinhChuKy'].'</td></tr>';
	    $j++;
	}

}*/
?>

<table border="1" cellpadding="0" cellspacing="0" style="width: 100%">
	<tbody>
	<?php
	$dem=0;
	$name='';
	$i=0;
		foreach ($tam as $row) {
			$i++;
			$filename='F:\pic_data\Signs\\'.$row['HinhChuKy'];
			if (!file_exists($filename) && $row['HinhChuKy']!='') {
				$dem++;
				if($dem==1){
					echo '<tr><td style="height:362px; width:50%;"> </td>';
					$name='<tr><td style="height:20px;">&nbsp; '.$row['ID_NhanVien'].' '.$row['BS'].' '.$row['HoLotNhanVien'].' '.$row['TenNhanVien'].' ('.$row['NickName'].') - '.$row['TenPhongBan'].'</td>';

					if($i==count($tam)){
						echo '<td style="height:362px; width:50%;"> </td></tr>';
						$name.='<td>&nbsp;</td></tr>';
						echo $name;
					}
				}else{
					echo '<td style="height:362px; width:50%;"> </td></tr>';
					$name.='<td>&nbsp; '.$row['ID_NhanVien'].' '.$row['BS'].' '.$row['HoLotNhanVien'].' '.$row['TenNhanVien'].' ('.$row['NickName'].') - '.$row['TenPhongBan'].'</td></tr>';
					echo $name;
					$name='';
					$dem=0;
				}
			}
		}
	?>
	</tbody>
</table>
 <script type="application/javascript">
        $(document).ready(function() {
          print_preview();

            
});
</script>
</html>