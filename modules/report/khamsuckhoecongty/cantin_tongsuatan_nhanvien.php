<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	font-family:Arial, Helvetica, sans-serif!important;
}.frame_u78787878975f{
	width:300px!important;
}
table{
    width:50%;
}
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;
        $params = array(convert_date($_GET["from_day"]),convert_date($_GET["to_day"]).' 23:59:59');
        $store_name="{call GD2_tonghopsuatan_nhanvien(?,?)}";
        $get_thongtinbenhnhan=$data->query( $store_name,$params);
        $excute= new SQLServerResult($get_thongtinbenhnhan);
        $tam= $excute->get_as_array();	
		
    ?>
 
   
	<div style="font-size:30px;text-align: center">Tổng hợp suất ăn từ <?= $_GET["from_day"]?> ngày đến <?= $_GET["from_day"]?></div>
	<br>
	<br>	
    
    <table align="center" cellpadding="0" cellspacing="0"  border="1" style="width:90%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">  
			
		<tr>			
            <td style=" font-weight:bold;font-size:16px  ">STT</td>
			<td style=" font-weight:bold;font-size:16px  ">Khoa</td>
			<td style=" font-weight:bold;font-size:16px  ">Ngày đặt</td>
			<td style=" font-weight:bold;font-size:16px  ">Sáng</td>
			<td style=" font-weight:bold;font-size:16px  ">Trưa</td>
			<td style=" font-weight:bold;font-size:16px  ">Chiều</td>
			<td style=" font-weight:bold;font-size:16px  ">Tối</td>
        </tr>
       
			<?php
				$i=0;
				$sang=0;
				$trua=0;
				$chieu=0;
				$toi=0;
				foreach ($tam as $row) {
					$sang=$sang+$row["1"];
					$trua=$trua+$row["2"];
					$chieu=$chieu+$row["3"];
					$toi=$toi+$row["4"];
					echo '<tr >';
					$i++;
					echo '<td style="font-weight:bold;">'.$i.'</td>';
					echo '<td style="font-size:14px">'.$row["Tenphongban"].'</td>';
					echo '<td >'.$row["TaoLuc"]->format($_SESSION["config_system"]["ngaythang"]).'</td>';
					echo '<td  align="right">'.$row["1"].'</td>';
					echo '<td  align="right">'.$row["2"].'</td>';
					echo '<td  align="right">'.$row["3"].'</td>';
					echo '<td  align="right">'.$row["4"].'</td>';
					echo '</tr>';
				}
				echo '<tr >';
					
					echo '<td colspan=3 style="font-weight:bold;font-size:16px">Tổng</td>';					
					echo '<td style="font-weight:bold;font-size:16px" align="right">'.$sang.'</td>';
					echo '<td style="font-weight:bold;font-size:16px" align="right">'.$trua.'</td>';
					echo '<td style="font-weight:bold;font-size:16px" align="right">'.$chieu.'</td>';
					echo '<td style="font-weight:bold;font-size:16px" align="right">'.$toi.'</td>';
					echo '</tr>';
			?>
                
    </table><br><br>
	<table align="center" cellpadding="0" cellspacing="0" border="0" style="width:90%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	<tr>
		<td style="font-weight:bold;font-size:16px">Ngày giờ in phiếu : <?= date('d/m/Y H:i',strtotime(date('d/m/Y H:i')))?></td>
		<td style="font-weight:bold;font-size:16px" align="right">Người in : <?= $_SESSION["user"]["nickname"]?></td>
	</tr>
   </table>
<script type="application/javascript">
   $(document).ready(function() {     	 
		print_preview();	  
   });  
</script>
</body>
</html>
 