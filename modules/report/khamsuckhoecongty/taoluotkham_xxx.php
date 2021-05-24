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
 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img width="28" src="images/logo_den.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
               
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU KHÁM BỆNH</h2>
    
     <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
    <tr >
            <td style=" width:10%;  padding-top: 1px;  padding-bottom: 1px;font-size:22px"><strong><?=$thongtinbenhnhan[0]["MaBenhNhan"]; ?></strong></td>
        	<td style=" width:90%; text-align:right;  padding-top: 1px;  padding-bottom: 1px;font-size:12px"><strong><?=$thongtinbenhnhan[0]["TenPhanLoaiKham"]?></strong> </td>
        </tr>
        </table>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        
        <tr style="height:27px">
        <td style=" width:70%;   padding-top: 1px;  padding-bottom: 1px;" colspan="2">Đối tượng:<?php echo  $thongtinbenhnhan[0]['LoaiDoiTuongKham']; 
				 
				  if($thongtinbenhnhan[0]['ID_TheBHCC']=='' or $thongtinbenhnhan[0]['ID_TheBHCC']==0){}
				  else{echo '/BHCC';}
				  
				  ?> </td>
                  </tr>
        <tr style="height:27px">
           
            <td style=" width:70%;   padding-top: 1px;  padding-bottom: 1px;">Ngày đến:<?=$thongtinbenhnhan[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);?> </td>
        	<td style=" width:30%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?php
            if($thongtinbenhnhan[0]["HL"]==''&&$thongtinbenhnhan[0]["TD"]==''&&$thongtinbenhnhan[0]["KT"]==''){
				
			}else{
			
			
			echo (str_replace ('.',',',$thongtinbenhnhan[0]["TD"]).'/'.str_replace ('.',',',$thongtinbenhnhan[0]["KT"]).'/'.str_replace ('.',',',$thongtinbenhnhan[0]["HL"]));
			
			}?></td>
        </tr>
        <tr  style="height:27px">
            <td colspan="2" style=" width:50%;   padding-top: 1px;  padding-bottom: 1px;">Ngày hẹn: <?php if($thongtinbenhnhan[0]["GioHenKham"]!=''){echo $thongtinbenhnhan[0]["GioHenKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);} ?></td>
        	
        </tr>
         <tr style="height:27px">
         <td colspan="2" style="padding-top: 1px;">BS yêu cầu:<span style="font-weight:bold;font-size:14px"><?php if($thongtinbenhnhan[0]["bsyeuvau"]!='') echo ' BS.'.$thongtinbenhnhan[0]["bsyeuvau"]  ?></span>
         </td>
         </tr>
   
      <tr style="border-bottom:solid 1px #000000 !important;height:27px ">
        	<td colspan="2" style=" width:50%;  margin-top:10px; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Họ tên :<strong style="font-size:15px"><?=$thongtinbenhnhan[0]["tenbn"] ?></strong>
            </td >
         
        </tr>
        
    
         <tr style="height:27px">
        	<td  style=" width:50%" >Giới:<?php 
			if($thongtinbenhnhan[0]["GioiTinh"]==0){
			echo 'Nam';
			}else{
				echo 'Nữ';
			}
			
			?>
            </td>
            <td  style=" width:50%" >Tuổi:<?=$thongtinbenhnhan[0]["tuoi"] ?>
            </td>
        </tr>
         <tr>
        	<td  style=" width:50%; padding-bottom:15px" colspan="2" >
            <?=$thongtinbenhnhan[0]["DiaChi"] ?>
            </td>
           
        </tr>
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">
        Thân thiết như người nhà
        </td>
        </tr>
         <tr>
         <td  colspan="2" width="100%" align="center" style="text-align:center;"><img id="barcode" src = '<?=get_system_one_config("GD2_BarCode_PatientID_Src")?><?=$thongtinbenhnhan[0]["MaBenhNhan"]?>'>
        
        </td>
        
        </tr>
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
 