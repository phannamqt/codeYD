
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array(27212,'KQ'); 
$store_name="{call GD2_GetKQFromHisLis(?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
// ID_XN_Detail	Ten_XN	Ten_XB_Detail	TrangThai	KetQua
// 22166	Tổng phân tích  tế bào máu bằng máy đếm laser 	Hồng cầu	KQ	4.43
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_XN_Detail"];
    $responce->rows[$i]['cell']=array(	
    									
    									$row["ID_XN_Detail"],
    									$row["Ten_XN"],
    									''
    									
    									);
     
    $i++; 
   
}  
echo json_encode($responce);

?>	
</head>
<body>

<table border="1" cellpadding="0" cellspacing="0" align="center" style="width:90%;margin-top:5px">
    	    <tr height="30">
    		<th>STT</th>
    		<th>ID_XN_Detail</th> 		
    		<th>Ten_XN </th>
            <th>Ten_XB_Detail </th>
    		<th >TrangThai</th>
            <th >KetQua </th>
            
      
      </tr>
         <?php
		$stt=1;

        foreach ($tam as $row) {//duyet toan bo mang tra ve

    	

		?>
         <tr>
         	<td align="center"><?=$stt?></td>
         	<td align="left"><?= $row['ID_XN_Detail']?></td>
         	<td bgcolor="#dce775"><?=$row['Ten_XN']?></td>
            <td style="color:red"><?=$row['Ten_XB_Detail']?></td>
            <td style="color:green"><?=$row['TrangThai']?></td>
         	    <td align="left"><?= $row['KetQua']?></td>

         	<!-- <td align="left"><?= $row['HoLotBenhNhan']?></td>
            <td align="left"><?= $row['TenBenhNhan']?></td>          -->
        
         
 
        
          </tr>
          

        <?php
			$stt++;
           // $sum=$sum+$row['PhiThucHien'];
            
		}
		?>
          
    </table>
