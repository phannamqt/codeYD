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
.footer{
		margin-top:55px;
       height:4px;
	   background: #f9f9f9;
}
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name="{call GD2_taoluotham_report(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
	
    ?>
 <?=HeaderReportInNhiet()?>  
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;margin-bottom:3px;">PHIẾU KHÁM BỆNH</h2>
	<div style="text-align:center;padding-bottom:10px;font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">(<?=$thongtinbenhnhan[0]["TenPhanLoaiKham"]; ?>)</div>
    <?php
        if($thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==NULL || $thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==''){

        }else{
            echo '<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size: 80px; margin-top: 0; margin-bottom: 5px;">'.$thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"].'</h2>';
            echo '<div style="text-align:center; margin-top: 0; margin-bottom: 5px; font-size:12px;font-style: italic;">(Quý khách vui lòng lưu ý số này để được gọi)</div>';
        }

    ?>
    
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		<tr style="height:27px ">
        	<td colspan="2" style=" width:50%;">
            ID: <strong style="font-size:15px"><?=$thongtinbenhnhan[0]["MaBenhNhan"]; ?></strong>
            </td >
         
        </tr>
		<tr style="height:27px ">
        	<td colspan="2" style=" width:50%;">
            Họ tên: <strong style="font-size:15px"><?=$thongtinbenhnhan[0]["tenbn"] ?></strong>
            </td >
         
        </tr>
        
    
         <tr style="height:27px">
        	<td  style=" width:50%" >Giới: <?php 
			if($thongtinbenhnhan[0]["GioiTinh"]==0){
			echo 'Nam';
			}else{
				echo 'Nữ';
			}
			
			?>
            </td>
            <td  style=" width:50%" >Tuổi: <?=$thongtinbenhnhan[0]["tuoi"] ?>
            </td>
        </tr>
         <tr style="">
        	<td  style=" width:50%; border-bottom:solid 1px #000000 !important;height:20px;margin-top:10px;  padding-top:2px; padding-bottom:2px;" colspan="2" >
            ĐC: <?=$thongtinbenhnhan[0]["DiaChi"] ?>
            </td>
           
        </tr>	
        <tr style="height:27px; display:none;">
			<td style=" width:70%;   padding-top: 1px;  padding-bottom: 1px;">Đối tượng: <?php echo  $thongtinbenhnhan[0]['LoaiDoiTuongKham']; 
				 
				  if($thongtinbenhnhan[0]['ID_TheBHCC']=='' or $thongtinbenhnhan[0]['ID_TheBHCC']==0){}
				  else{echo '/BHCC';}
				  
				  ?> </td>
        <td align="right" style=" width:70%; font-size:18px;  padding-top: 1px;  padding-bottom: 1px;"></td>
                  </tr>
        <tr style="height:27px">
           
            <td style=" width:70%;   padding-top: 1px;  padding-bottom: 1px;">Ngày đến: <?=$thongtinbenhnhan[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);?> </td>
        	<td style=" width:30%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?php
            if($thongtinbenhnhan[0]["HL"]==''&&$thongtinbenhnhan[0]["TD"]==''&&$thongtinbenhnhan[0]["KT"]==''){
				
			}else{
			
			
			echo (str_replace ('.',',',$thongtinbenhnhan[0]["TD"]).'/'.str_replace ('.',',',$thongtinbenhnhan[0]["KT"]).'/'.str_replace ('.',',',$thongtinbenhnhan[0]["HL"]));
			
			}?></td>
        </tr>
        <tr  style="height:27px; display:none;">
            <td colspan="2" style=" width:50%;   padding-top: 1px;  padding-bottom: 1px;">Ngày hẹn:  <?php if($thongtinbenhnhan[0]["GioHenKham"]!=''){echo $thongtinbenhnhan[0]["GioHenKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);} ?></td>
        	
        </tr>
         <tr style="height:27px">
         <td colspan="2" style="padding-top: 1px;">BS yêu cầu: <span style="font-weight:bold;font-size:14px"><?php if($thongtinbenhnhan[0]["bsyeuvau"]!='') echo ' BS.'.$thongtinbenhnhan[0]["bsyeuvau"]  ?></span>
         </td>
         </tr>
  
		<?php 
			if($_SESSION["com"]["HienThiBarcodeBenhNhan"]==1){
		?>
         <tr>
         <td  colspan="2" width="100%" align="center" style="text-align:center;"><img id="barcode" src = '<?=get_system_one_config("GD2_BarCode_PatientID_Src")?><?=$thongtinbenhnhan[0]["MaBenhNhan"]?>'>
        
        </td>
        </tr>
		<?php 
			}
		?>
    </table>
     <div class="footer"></div>
     <script type="application/javascript">
   $(document).ready(function() {
        

	   var _xemtruocin=<?=$_GET['xemtruocin'];?>;
	   if(_xemtruocin==0){
		  print_direct(10,10);	
	   }else{
		   print_preview();
	   }
   });
  
   </script>
  
    
    
</body>
</html>
 