<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 30px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
} 
</style>
</head>
 
<body>
	<?php
			
        $data= new SQLServer;//tao lop ket noi SQL		
        $params = array($_GET['tungay'],$_GET['denngay']);//tao param cho store 
        $store_name="{call GD2_TongHopSuatAnDangKyTheoNgayVaBuoi_DuTru(?,?)}";//tao bien khai bao store
        $get_thongtin=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
        $params1 = array($_SESSION['user']['id_user']);//tao param cho store 
        $store_name1="{call GD2_GetNhanVien_idnv(?)}";//tao bien khai bao store
        $get_thongtinnv=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinnv= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		//echo $thongtinnv[0]["tennhanvien"] ; 
		//print_r($thongtinnv);
		$gio= date("H:i");
		$today = date("d/m/Y");
		//echo $thongtin[0]['tong'];
		//print_r($thongtin);
		if(count($thongtin)==0){
			$tong=0;
		}else{			
		//echo $thongtin[0]['tong'];
			$tong=$thongtin[0]['tong'];
		}
		
		//convert_date($today);
		//echo $_SESSION['user']['id_user'];
		
    ?>

	
    <table cellpadding="0" cellspacing="0" border="0" style=" padding-left:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:40%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:50%; text-align:right; ">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>               
     </table>     
     
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
     	<tr>
             <td style="text-align:center"><br />
                 <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">DỰ TRÙ SUẤT ĂN TỪ </span>
                <br />
                <span style="font-weight:bold;font-size:20px;">NGÀY 
				<?php if($_GET['tungay']==''){
					echo $today ; 
					}else{ 
						$cc=trim($_GET['tungay']);	
						$ngay=  substr($cc,8,2);
						$thang=  substr($cc,5,2);
						$nam=  substr($cc,0,4);
						echo $ngay.'/'.$thang.'/'.$nam;
				}
				?> ĐẾN NGÀY <?PHP 
							$dn=trim($_GET['denngay']);	
						$dn1=  substr($dn,8,2);
						$dn2=  substr($dn,5,2);
						$dn3=  substr($dn,0,4);
						echo $dn1.'/'.$dn2.'/'.$dn3;
							?></span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
                
             </td>
         
       </tr>    
     </table>
      <table cellpadding="0" cellspacing="0" border="1" style="width:95%;font-family:Tahoma, Geneva, sans-serif; font-size:13px; text-align:right">
    <?php 
	
		echo ('<tr style=" border-top:2px solid #000;text-align:center"> <td width="10%" colspan="1"><b style="">Ngày</b></td>
			<td width="15%" colspan="1"><b style="">Tên thực đơn</b></td>
			<td width="65%" colspan="1"><b style="">Chi tiết thực đơn</b></td>
			<td width="10%" colspan="1"><b style="">Số lượng</b></td></tr> ');
		for($i=0;$i<=count($thongtin)-1;$i++){
			//echo $i;
			if($i<0){
				echo ('
				<tr style=" border-top:2px solid #000;"> <td width="240px" colspan="1" style="margin-left:10px; text-align:center">'.$thongtin[$i]['Ngay']->format($_SESSION["config_system"]["ngaythang"]).'</td>
				<td width="240px" colspan="1" style="margin-left:10px; text-align:center">'.$thongtin[$i]['TenThucDon'].'</td>
				<td width="240px" colspan="1" style="margin-left:25px!important; text-align:left"> </td>
				<td width="240px" colspan="1" style="margin-left:10px; text-align:right"> </td>
				</tr>
				
				');
				
			
			}
			else{
				echo ('
				<tr style=" border-top:2px solid #000;"> <td width="240px" colspan="1" style="margin-left:10px; text-align:center">'.$thongtin[$i]['Ngay']->format($_SESSION["config_system"]["ngaythang"]).'</td>
				<td width="240px" colspan="1" style="margin-left:10px; text-align:center">'.$thongtin[$i]['TenThucDon'].'</td>
				<td width="240px" colspan="1" style="margin-left:25px!important; text-align:left">'.$thongtin[$i]['ChiTietMon'].'</td>
				<td width="240px" colspan="1" style="margin-left:10px; text-align:right">'.$thongtin[$i]['Soluong'].'</td>
				</tr>
				
				');
				
			}
			
			
		}
		echo ('
				<tr><td>Tổng cộng:</td>
					<td colspan="3">'.$tong.'</td>
					
				</tr>
				');
		
   	?>
     </table>
     <table width="100%" border="0" style="text-align:center">
     	<tr>
        	<td width="50%"></td>
            <td width="50%"><br /><b><?= date('H') ?> giờ <?= date('i') ?> phút, ngày <?php echo $today ?></b></td>            
        </tr>
        <tr>
        	<td><b>TM.NHÀ ĂN</b> </td>
            <td><b>TM.BV FAMILLY</b></td>            
        </tr>
        <tr>
        	<td> </td>
            <td style="height:100px!important">&nbsp;</td>  
        </tr>
        
        <tr>
        	<td></td>
            <td> <b> <?=$thongtinnv[0]["tennhanvien"] ?> </b></td>            
        </tr>
     </table> 
    <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinnv[0]["chuky_nhanvien"]?>',"nv_chandoan");
			print_preview();
		});
	</script>
</body>
</html>
 