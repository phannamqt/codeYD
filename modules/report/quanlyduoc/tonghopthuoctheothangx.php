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
	$params = array($_GET['thang'],$_GET['nam']);//tao param cho store 
	$store_name="{call GD2_BaoCaoTongHopTHuoc_theo_Thang (?,?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay 
	//echo ($thongtin[0][1]);
	$cols = max(array_map('count', $thongtin))/2;
	//echo 'so dong:'.$cols;
?>
<body>
            <div style="width:100%;text-align:center">
                    <span  style="font-weight:bold;font-size:16px">  TỔNG HỢP THUỐC NỘI TRÚ HẰNG THÁNG</span><br />
                   	<label style="font-weight:bold;font-size:14px">Tháng <?=$_GET['thang']?> năm <?=$_GET['nam']?></label>
			</div>
        <table id="bang_1" width="100%" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="3%">STT</th>
            <th width="20%">Tên thuốc - VTYT</th>
            <?php
				for($i=1;$i<=$cols-1;$i++)
				{
					echo '<th>'.$i.'</th>';
				}
			 ?>
             <th>Tổng</th>
          </tr>
          <tbody id="tbody_1">
          	  <?php 
			  $sum_row=0;$count=1;
	
			  for( $i=0;$i<count($thongtin);$i++){
				echo '<tr>';
				echo'<td align="center">'. $count.'</td>';
				$count++;
				for($j=0;$j<=$cols-1;$j++)
				{
					if($j==0)
					{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					}
					else
					{
						echo'<td align="right">'. $thongtin[$i][$j].'</td>';	
					}
					if($thongtin[$i][$j]!=NULL){
						$sum_row+=$thongtin[$i][$j];
					}	
				}
				echo'<td align="right">'. $sum_row.'</td>';
				$sum_row=0;
				echo '</tr>';	  
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
			$exp->exportWithPage("excel/temp.html","TongHopThuocTheoThang_".$_GET['thang']."_".$_GET['nam'].".xls");
		}
	?>