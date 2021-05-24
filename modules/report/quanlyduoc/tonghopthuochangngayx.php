<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left:4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
</style>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$tungay=convert_date($_GET['tungay']);
	$denngay=convert_date($_GET['denngay']).' 23:59:59';
	$params = array($tungay,$denngay);//tao param cho store 
	$store_name="{call TongHopThuocHangNgay(?,?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$result= $excute->get_as_array();//Tra ve mang toan bo data lay đc
?>
<body>
            <div style="width:100%;text-align:center">
                    <span  style="font-weight:bold">  TỔNG HỢP THUỐC NỘI TRÚ HẰNG NGÀY</span><br />
                   	<?php 
						if($_GET['tungay']==$_GET["denngay"]){echo 'Ngày '.$_GET['tungay'];}
						else{echo "Từ ngày ".$_GET['tungay'].' đến ngày '.$_GET['denngay'];}
					?>
			</div>
        <table id="bang_1" width="1200px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="5%">STT</th>
            <th width="20%">Tên thuốc - VTYT</th>
            <th width="10%">Khoa gây mê - hồi sức</th>
            <th width="10%">Khoa Hồi sức cấp cứu</th>
            <th width="10%">Khoa ngoại</th>
            <th width="10%">Khoa nội</th>
            <th width="10%">Khoa Sản-Nhi</th>
            <th width="10%">Tổng</th>
          </tr>
          <tbody id="tbody_1">
              <?php 
			  	$temp=$result[0]['NgayXuat']->format($_SESSION['config_system']['ngaythang']);
				$count=1;
			  	for( $i=0;$i<count($result);$i++){
					if($result[$i]['KhoaGayMeHoiSuc']==NULL){$result[$i]['KhoaGayMeHoiSuc']=0;}
					if($result[$i]['KhoaHoiSucCapCuu']==NULL){$result[$i]['KhoaHoiSucCapCuu']=0;}
					if($result[$i]['KhoaNgoai']==NULL){$result[$i]['KhoaNgoai']=0;}
					if($result[$i]['KhoaNoi']==NULL){$result[$i]['KhoaNoi']=0;}
					if($result[$i]['KhoaSanNhi']==NULL){$result[$i]['KhoaSanNhi']=0;}
					$result[$i]['NgayXuat']=$result[$i]['NgayXuat']->format($_SESSION['config_system']['ngaythang']);
					if($i==0||$result[$i]['NgayXuat']!=$temp)
					{
						$count=1;
						echo '<tr>';
                		echo '<td colspan="8" style="font-weight:bold">Ngày '.$result[$i]['NgayXuat'].'</td>';
                		echo '</tr>';
						echo '<tr>';
                		echo '<td align="center">'.$count.'</td>';
						echo '<td>'.trim($result[$i]['TenGoc']).'</td>';
						echo '<td align="right">'.$result[$i]['KhoaGayMeHoiSuc'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaHoiSucCapCuu'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaNgoai'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaNoi'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaSanNhi'].'</td>';
						$sum=(int)$result[$i]['KhoaGayMeHoiSuc']+(int)$result[$i]['KhoaHoiSucCapCuu']+(int)$result[$i]['KhoaNgoai']+(int)$result[$i]['KhoaNoi']+(int)$result[$i]['KhoaSanNhi'];
						echo '<td align="right">'.$sum.'</td>';
                		echo '</tr>';	
						$temp=$result[$i]['NgayXuat']; $count++;
					}
					else{
						echo '<tr>';
                		echo '<td align="center">'.$count.'</td>';
						echo '<td>'.trim($result[$i]['TenGoc']).'</td>';
						echo '<td align="right">'.$result[$i]['KhoaGayMeHoiSuc'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaHoiSucCapCuu'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaNgoai'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaNoi'].'</td>';
						echo '<td align="right">'.$result[$i]['KhoaSanNhi'].'</td>';
						$sum=(int)$result[$i]['KhoaGayMeHoiSuc']+(int)$result[$i]['KhoaHoiSucCapCuu']+(int)$result[$i]['KhoaNgoai']+(int)$result[$i]['KhoaNoi']+(int)$result[$i]['KhoaSanNhi'];
						echo '<td align="right">'.$sum.'</td>';
                		echo '</tr>';
						$temp=$result[$i]['NgayXuat'];$count++;
					}
				}
			  ?>
          </tbody>
        </table>
   

</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
	});
</script>
</html>
<?php
		if($types=="excel"){
			file_put_contents('excel/temp.html', ob_get_contents());
			$exp=new ExportToExcel();
			$exp->exportWithPage("excel/temp.html","TongHopThuocHangNgay_".$_GET['tungay']."_".$_GET['denngay'].".xls");
		}
	?>