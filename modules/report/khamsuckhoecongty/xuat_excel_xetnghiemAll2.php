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
td.last {
    width: 1px;
    white-space: nowrap;
}
</style>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET['id_goikham']);//tao param cho store
	$store_name="{call GD2_KSK_XNALLBYIdGoiKham_New (?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL

	$thongtin= $excute->get_as_array();
	$cols = max(array_map('count', $thongtin));
	echo 'cols '.$cols;
?>
<body>
        
	 <span  style="font-weight:bold;font-size:16px;">  KẾT QUẢ XÉT NGHIỆM </span><br />
	 <span  style="font-weight:bold;font-size:16px;"> <?=$_GET['tencongty']?> </span><br />
        <table id="bang_1" width="auto" cellpadding="0" cellspacing="0" border="1">

          <tr>
                <th >STT</th>
                <th >ID Bệnh nhân</th>              
                <th width="20%" >Họ tên</th>  
                <th >Tuổi</th>
                <th >Giới</th>
                <th>Chiều cao</th>
                <th >Cân Nặng</th>
                <th >Phone</th>
                <th >Địa chỉ</th>
                <th >Ngày khám</th>

             
             

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
				 			
				 			if($t2>18 && ($t2%2==0))//
				 			// lấy từ cột thứ 2 và lấy trên chỉ số chẵn của key là ra column
				 			// nếu thêm 1  cột vd: <th >NiccName</th> thông tin thì t2 tăng 2: t2>20
						
							{   
								$t3++;
								

							 	$strTam.=substr($key2,1).',';//loại bỏ kí tự k
							
							 	$params2 = array(substr($key2,1));
							 	$store_name2="{call GD2_GetTenXetNghiem (?)}";
								$get_thongtin2=$data->query( $store_name2,$params2);
								$excute2= new SQLServerResult($get_thongtin2);
									$thongtin2= $excute2->get_as_array();
									$cell='';
									if(isset($thongtin2[0]['TenXetNghiem']))
									{
											$cell=$thongtin2[0]['TenXetNghiem'];
									}
									else
									{
										$cell='NA';
									}
								
								
									echo '<th>'.$cell.'</th>';
									//echo '<th>'.substr($key2,1).'</th>';
									
							} 
						}

						
					}		
			 ?>
             
             
             
          </tr>
          <tbody id="tbody_2">
          	<?php 
          	$count=1; $sum_row=0;
          	$sum_conlai=0;
          	$sum_datra=0;
			 for( $i=0;$i<count($thongtin);$i++){
				echo '<tr>';
				echo'<td align="center">'. $count.'</td>';
				$count++;
				for($j=0;$j<$cols/2;$j++)
				{
				
						
						//	echo'<td align="center" >'. $thongtin[$i][$j].'<br><hr><span style="color:blue">'.'i'.$i.' '.'j'.$j.'</span></td>';		
						echo'<td align="center" >'. $thongtin[$i][$j].'</td>';		
					
					
					
					

				}
			
				$sum_datra=0;
				$sum_row=0;
				 $sum_conlai=0;
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
			$exp->exportWithPage("excel/temp.html","XETNGHIEM_KSK_Chitiet.xls");
		}
	?>