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
        $store_name="{call GD2_phieugoiloa_report(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
	
    ?>
 <?=HeaderReportInNhiet()?> 
    <?php
        if($thongtinbenhnhan[0]["ID_Tang"]==NULL || $thongtinbenhnhan[0]["ID_Tang"]==''){

        }else{
            echo '<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size: 11px; margin-top: 0; margin-bottom: 5px;"> Tầng '.$thongtinbenhnhan[0]["ID_Tang"].'</h2>';
           
        }

    ?>   
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;"></h2>

    <?php
        if($thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==NULL || $thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"]==''){

        }else{
            echo '<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size: 80px; margin-top: 0; margin-bottom: 5px;">'.$thongtinbenhnhan[0]["SoPhieuKhamGoiLoa"].'</h2>';
           
        }

    ?>
    <table style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
    <tr>
    	<td><strong><em>Quý khách vui lòng lưu ý:<br />
    +Theo dõi số thứ tự ở ti vi & loa gọi để được phục vụ <br />
+Nhớ số thứ tự này trong khi khám bệnh <br />
+Chuẩn bị sẵn thẻ BHYT và CMND (nếu có)</em></strong><br /></td>
    </tr>
    <tr style="border-bottom:solid 1px #000000 !important;height:27px ">
    	<td align="center"> Family - Thân Thiết Như Người Nhà!<br />
        Ngày: <?php echo date("d/m/Y").' Giờ:'.date("H:i")?>
        
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
 