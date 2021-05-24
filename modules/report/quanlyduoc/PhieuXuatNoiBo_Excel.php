<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
    $data= new SQLServer;
	  $params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
    $store_name="{call [GD2_TongHopPhieuXuatNoiBoAll](?,?)}";
		$get_thongtinnv=$data->query( $store_name,$params);
		$excute1= new SQLServerResult($get_thongtinnv);
		$thuoc= $excute1->get_as_array();
		
?>
<body>

  <h2>BÁO CÁO XUẤT NỘI BỘ <?=' TỪ NGÀY '.$_GET["tungay"].' ĐẾN NGÀY '.$_GET["denngay"]?> </h2> 


  <table id="bang_1" width="1000px" cellpadding="0" cellspacing="0" border="1">
          <tr>
          <th width="100px">STT</th>
           <th width="100px">ID_Thuoc</th>
          <th width="450px">Tên thuốc</th>
          <th width="100px">ĐVT</th>
          <th width="100px">Số lượng</th>
          <th width="100px">Thành tiền vốn</th>      
          </tr>
          <tbody id="tbody_1">
         <?php
			  $i=0;
       		
			  	foreach($thuoc as $row){
					$i++;
			   		

					?>

					 <tr>
						<td width="100px"><?=$i?></td>
            <td width="100px"><?=$row['ID_Thuoc']?></td>
						<td style="text-align:left"><?=$row['TenGoc']?></td>
						<td style="text-align:left"><?=$row['TenDonViTinh']?></td>
            
            <td style="text-align:left"><?=$row['SoLuong']?></td>
             <td style="text-align:left"><?=$row['ThanhTien']?></td>
		              </tr>


					<?php

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
		$exp->exportWithPage("excel/temp.html","xuatnoibo_".$_GET['tungay']."_to_".$_GET['denngay'].".xls");
	
	}
?>