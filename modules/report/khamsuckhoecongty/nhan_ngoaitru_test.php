<!DOCTYPE html>
<html>
  <head> 
  
  <style>
  body{
	  margin:0px;
	  padding:0px;
	  overflow:auto;
	  font:Arial, Helvetica, sans-serif!important;
  }

/* HTML5 display-role reset for older browsers */

#ten2,#ht {text-transform:uppercase;}
 thead {display: table-header-group!important;}

@page {
    size:  100mm 30mm;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
		size:  100mm 30mm;
        page-break-after: always;
    }
	#ht{
		font-weight:bold;
		}
}
@media print
 {
   thead {display: table-header-group!important;}
 }
  </style> 
  <meta charset="utf-8">
</head>
<body> 
<?php
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["idluotkham"]);//tao param cho store 
        $store_name1="{call GD2_Select_BenhAnNoiTru_Nhan(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		//echo $thongtinluotkham[0]["tenbenhnhan"];
		if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["Tuoi"];
			$thangtuoi=$thangtuoi.' tuổi';
		}   
		$thao = explode(" ", $thongtinluotkham[0]["ho"]);
		//echo $thao[0];
		$chuoi='';
		for($i=0;$i<count($thao);$i++)
		{
			
			$chuoi1= substr($thao[$i],0,1);
			$chuoi=$chuoi.' '.$chuoi1;
			
		}
		//echo $chuoi;
    ?>
<table  border="0" width="98%" style="page-break-after:always; margin-left:4px; margin-right:12px; margin-top:4px">
  <tr >
    <td  align="center" style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:18px" >
      <?= $thongtinluotkham[0]["tenbenhnhan"]?>  </td>
  </tr>
   <tr style=" padding-top:-10px">
    <td style="padding-top:-10px" align="center" width="15%" > <label style="font-weight:bold;font-size:18px ;position: relative; top: -10px;" >  <?= $thangtuoi?>,
   <?= $thongtinluotkham[0]["GioiTinh"]?>&nbsp;&nbsp;</label>
   
       <label style="font-weight:bold;font-size:65px; position: relative; top: -10px;"> 0955&nbsp;</label>
        <img  src='<?=get_system_one_config("GD2_Default_Url")?>/barcodegen/html/image2.php?filetype=PNG&amp;dpi=72&amp;scale=1&amp;rotation=0&amp;font_family=Arial.ttf&amp;font_size=8&amp;text=<?=$thongtinluotkham[0]["MaBenhNhan"]?>&amp;thickness=30&amp;start=NULL&amp;code=BCGcode39' >
       
        </td>
        </tr>
 
</table>


  <script type="application/javascript">
		$(document).ready(function() {
		 	print_preview();
		   
		});
	</script>
    
</body>
</html>  
 