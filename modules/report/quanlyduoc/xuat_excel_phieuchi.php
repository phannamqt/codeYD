<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
$tu_ngay='';
$den_ngay='';
$daduyet=0;
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

$data= new SQLServer;
$store_name="{call GD2_ThuTraNo_PhieuChiDuoc_V2(?,?,?)}";
$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc');
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$result= $excute->get_as_array();
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;

		}
</style>
</head>
<body>

  <div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH PHIẾU CHI</div>
   
  <table border="1" cellpadding="0" cellspacing="0" width="100%">
    	<tr>
            <th>Mã phiếu</th>
            <th>Ngày lập</th>
            <th>Phiếu nhập kho</th>
            <th>Số tiền</th>
            <th>Người chi</th>
            <th>Người nhận tiền</th>
            <th>Lý do chi</th>
            <th>Người duyệt</th>
      </tr>
	<tbody id="tbody_1">
              <?php 
			  	$temp=trim($result[0]['TenNCC']);
				//$count=1;
			  	for( $i=0;$i<count($result);$i++){
					if($result[$i]['NgayGio']!=NULL){
						$result[$i]['NgayGio']=$result[$i]['NgayGio']->format('h:i '.$_SESSION['config_system']['ngaythang']);
						}
					
					if($i==0||$result[$i]['TenNCC']!=$temp)
					{
						$count=1;
						echo '<tr>';
                		echo '<td colspan="8" style="font-weight:bold">'.trim($result[$i]['TenNCC']).'</td>';
                		echo '</tr>';
						echo '<tr>';
                		echo '<td align="center">'.$result[$i]['MaPhieu'].'</td>';
						echo '<td align="center">'.$result[$i]['NgayGio'].'</td>';
						echo '<td align="center">'.$result[$i]['phieunhapkho'].'</td>';
						echo '<td align="right">'.$result[$i]['SoTien'].'</td>';
						echo '<td align="center">'.$result[$i]['NguoiChi'].'</td>';
						echo '<td align="center">'.$result[$i]['NguoiGiaoDich'].'</td>';
						echo '<td>'.$result[$i]['GhiChu'].'</td>';
						echo '<td align="center">'.$result[$i]['nguoiduyet'].'</td>';
                		echo '</tr>';	
						$temp=trim($result[$i]['TenNCC']);
					}
					else{
						echo '<tr>';
                		echo '<td align="center">'.$result[$i]['MaPhieu'].'</td>';
						echo '<td align="center">'.$result[$i]['NgayGio'].'</td>';
						echo '<td align="center">'.$result[$i]['phieunhapkho'].'</td>';
						echo '<td align="right">'.$result[$i]['SoTien'].'</td>';
						echo '<td align="center">'.$result[$i]['NguoiChi'].'</td>';
						echo '<td align="center">'.$result[$i]['NguoiGiaoDich'].'</td>';
						echo '<td>'.$result[$i]['GhiChu'].'</td>';
						echo '<td align="center">'.$result[$i]['nguoiduyet'].'</td>';
                		echo '</tr>';	
						$temp=trim($result[$i]['TenNCC']);
					}
				}
			  ?>
          </tbody>
    </table>

</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","danhsachphieuchi.xls");
	}
	?>