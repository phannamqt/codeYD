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
	$params = array($_GET['id_goikham']);//tao param cho store
	$store_name="{call [GD2_KSK_SumPhiThucHien] (?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL

	$thongtin= $excute->get_as_array();
	$cols = max(array_map('count', $thongtin));
?>
<body>
        
	 <span  style="font-weight:bold;font-size:16px;">  BÁO CÁO PHÍ KHÁM CHI TIẾT DỊCH VỤ  </span><br />
	 <span  style="font-weight:bold;font-size:16px;"> <?=$_GET['tencongty']?> </span><br />
        <table id="bang_1" width="100%" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th >STT</th>
            <th >ID</th>
            <th >Năm sinh</th>
            <th >Họ</th>
            <th >Tên</th>
             

          <?php 
					$t=0;
				    $t2=0;
				    $t3=0;
				    $strTam='';
					foreach ($thongtin as $key => $value) {
						    $t++;
						    if($t==2)
							{
								 break;   
							}
						foreach($value as $key2 => $value2){
							
				 			$t2++;
				 			
				 			if($t2>8 && ($t2%2==0))// lấy từ cột thứ 2 và lấy trên chỉ số chẵn của key là ra column
						
							{   
								$t3++;
								$strTam.=substr($key2,1).',';//loại bỏ kí tự k
							
							 	$params2 = array(substr($key2,1));
							 	$store_name2="{call GD2_GetTenLoaiKham (?)}";
								$get_thongtin2=$data->query( $store_name2,$params2);
								$excute2= new SQLServerResult($get_thongtin2);
									$thongtin2= $excute2->get_as_array();
									$cell='';
									if(isset($thongtin2[0]['tenloaikham']))
									{
											$cell=$thongtin2[0]['tenloaikham'];
									}
									else
									{
										$cell='NA';
									}
								
								echo '<th>'.$cell.'('.$t3.')</th>';
									
							} 
						}

						
					}		
			 ?>
             <th >Tổng tiền</th>
          </tr>
          <tbody id="tbody_2">
          	<?php 
          	$count=1; $sum_row=0;
			 for( $i=0;$i<count($thongtin);$i++){
				echo '<tr>';
				echo'<td align="center">'. $count.'</td>';
				$count++;
				for($j=0;$j<$cols/2;$j++)
				{
				
						echo'<td >'. $thongtin[$i][$j].'</td>';	
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
			$exp->exportWithPage("excel/temp.html","Tke_KSK_Chitiet.xls");
		}
	?>