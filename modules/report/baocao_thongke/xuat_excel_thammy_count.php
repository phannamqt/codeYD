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
	$params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');//tao param cho store
	$store_name="{call [GD2_TTTM_COUNT] (?,?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay 
	$cols = max(array_map('count', $thongtin));//2;
	//$cols=count($thongtin);
//echo $cols;
    
	 
?>
<body>
            <div style="width:100%;text-align:center">
                    <span  style="font-weight:bold;font-size:16px">  BÁO CÁO LƯỢNG KHÁCH VÀ DỊCH VỤ </span><br />
                   	<label style="font-weight:bold;font-size:14px">TỪ <?=$_GET['fromdate']?> ĐẾN <?=$_GET['todate']?></label>
			</div>
        <table id="bang_1" width="100%" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="3%">STT</th>
            <th width="20%">Tên dịch vụ</th>
          <?php /*?>  <?php
				for($i=1;$i<=$cols-1;$i++)
				{
					echo '<th>'.$i.'</th>';
				}
			 ?><?php */




				$t=0;
				    $t2=0;
					foreach ($thongtin as $key => $value) {
						    $t++;
						    if($t==2)
							{
								 break;   
							}
						foreach($value as $key2 => $value2){
							//echo('ptu '.($key2).'<br>') ;
				 			$t2++;
				 			if($t2>3 && ($t2%2==0))
				 				//echo $key2.'<br>';//. implode(";",$value2).'<br>'
							echo '<th>'.$key2.'</th>';
						}

						
					}


			 ?>
             
          </tr>
          <tbody id="tbody_1">
          	<?php 
			  $sum_row=0;$count=1;
	
			  for( $i=0;$i<count($thongtin);$i++){
				echo '<tr>';
				echo'<td align="center">'. $count.'</td>';
				$count++;
				for($j=0;$j<=$cols/2-1;$j++)
				{
					//if($j==0 %% $j<=12)
				//	{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					//}
			/*		if($j==1)
					{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					}
					if($j==2)
					{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					}
					if($j==3)
					{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					}
					if($j==4)
					{
						echo'<td>'. $thongtin[$i][$j].'</td>';	
					}*/
					/*else
					{
						echo'<td align="right">'. $thongtin[$i][$j].'</td>';	
					}*/
					/*if($thongtin[$i][$j]!=NULL){
						$sum_row+=$thongtin[$i][$j];
					}	*/
				}
				//echo'<td align="right">'. $sum_row.'</td>';
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
			$exp->exportWithPage("excel/temp.html","Tke_TM_".$_GET['fromdate']."_".$_GET['todate'].".xls");
		}
	?>