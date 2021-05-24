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
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_DeNghiThanhToan_new(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		if($thongtinbenhnhan[0]["khoa"]=='318'||$thongtinbenhnhan[0]["khoa"]=='312'){
			$tang='2';
		}else{
			$tang='4';
		}
	
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
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">ĐỀ NGHỊ THANH TOÁN</h2>
    <?php
        if($thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==NULL || $thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==''){

        }else{
            echo '<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size: 80px; margin-top: 0; margin-bottom: 5px;">'.$thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"].'</h2>';
            echo '<div style="text-align:center; margin-top: 0; margin-bottom: 5px; font-size:12px;font-style: italic;">(Quý khách vui lòng lưu ý số này để được gọi)</div>';
        }

    ?>
    
     <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
    <tr >
            <td colspan="2"  style=" width:10%;  padding-top: 1px;  padding-bottom: 1px;font-size:22px"><strong>ID <?=$thongtinbenhnhan[0]["MaBenhNhan"]; ?></strong></td>
        	
        </tr>
        </table>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        
       
       

         
   
      <tr style="border-bottom:solid 1px #000000 !important;height:27px ">
        	<td colspan="2" style=" width:50%;  margin-top:10px; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Họ tên :<strong style="font-size:15px"><?=$thongtinbenhnhan[0]["TenBenhNhan"] ?></strong>
            </td >
         
        </tr>

        <!--   <tr style="border-bottom:solid 1px #000000 !important;height:27px ">
        	<td colspan="2" style=" width:50%;  margin-top:10px; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
             <strong style="font-size:15px"><?=$thongtinbenhnhan[0]["khoaphong"] ?></strong>
            </td >
         
        </tr> -->
        
    

         <tr>
        	<td  style=" width:50%; padding-bottom:15px" colspan="2" >
            <?=$thongtinbenhnhan[0]["DiaChi"] ?>
            </td>
           
        </tr>





         <tr>
     
        <td colspan="2">Phiếu tạo lúc: <b><?php echo (date("H:m d/m/Y"))?></b> </br><br /> 
        
          </td>
      </tr>

        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">
                VUI LÒNG ĐEM GIẤY NÀY ĐẾN QUẦY LỄ TÂN TẦNG <?php echo $tang ?> ĐỂ THANH TOÁN.
        </td>
        </tr>
    </table>
     <div class="footer"></div>
     <script type="application/javascript">
   $(document).ready(function() {
	   var _xemtruocin=<?=$_GET['xemtruocin'];?>;
	  
		   print_preview();
	   
   });
  
   </script>
  
    
    
</body>
</html>
 