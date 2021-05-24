<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<?php  
$TuNgay=convert_date($_GET["from_day"]);
$DenNgay=convert_date($_GET["to_day"]);
$hotenkt=get_system_one_config("GD2_KETOANTRUONG");
$data= new SQLServer;//tao lop ket noi SQL
if($_GET['theonhacungcap']=='false'){
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
	$params = array($TuNgay,$DenNgay,$_GET["tenkho"],'',$_GET["n_order"]);	
}else{
	$id_ncc="And ID_NCC=".$_GET["idncc"];
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
	$params = array($DenNgay,$DenNgay,$_GET["tenkho"],$id_ncc,$_GET["n_order"]);	
}
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
?>
<style>
	body{
		width:100%;
		margin:auto;
		padding-left:3px;
		overflow-y:auto;	
		font-family:"Times New Roman", Times, serif;
		font-size:14px;				
	}
	label,input,table,div{
		font-family:"Times New Roman", Times, serif!important;	
		font-size:14px;
		letter-spacing:0px;		 		
	}
	div#info label{		 
		letter-spacing:0px;
		font-weight:normal;
		text-align:left!important;
		display:inline-block;
		width:100px;
	}	 
	.header{
		margin:0auto;
		padding-top:3px;
		width:100%;
		height:120px;		 
	}	 
	#center{
		font-weight:600;
		margin-top:0px;		
	}	
	table{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;
	}
	table td{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;		 
	}
	table th{
		border-left:1px solid #000;
		border-top:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		}
	.inhoa{
		font-weight:bold;
		font-size:14px;
		}
	input{
		border:none;
	}
	.footer{
		width:100%;
		vertical-align:top;	
	}
	.footer div{
		width:145px;
		display:inline-block;	
		vertical-align:top;
		text-align:left;		
	}
thead{
    display: table-header-group!important;
}
table{ page-break-inside:auto }
tr{ page-break-inside:avoid; page-break-after:auto }
</style>
<body>
<div align="center" >	 
    <div class="header">
    	  <div style="float:left">
              <div><label class="inhoa"><?php echo $_SESSION["com"]["TenBenhVien"]?></label></div>
              <div><label>Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?></label></div>
              <div><label>SĐT: <?php echo $_SESSION["com"]["SoDT"]?></label></div>
          </div><br style="line-height:60px;" /> 
          <div id="center">
          	<div style="font-size:20px">BÁO CÁO TỔNG HỢP XUẤT NHẬP TỒN</div>
            <div><label style="font-style:italic">Từ ngày </label><label style="font-style:italic"><?php echo($_GET["from_day"])?></label><label style="font-style:italic"> đến ngày </label><label style="font-style:italic"> <?php echo($_GET["to_day"])?> </label></div>
          </div>
          <div style="font-weight:bold"><?php echo($_GET["ten_kho"])?></div>
     </div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:1000px">
   	 <thead  style="page-break-inside: avoid;">
     	<tr style="border-top:1px solid #000">
            <th rowspan="2" style="width:28px">Mã</th>
            <th rowspan="2">Tên thuốc-VTYT</th>
            <th rowspan="2" style="width:60px">ĐVT</th>
            <th rowspan="2" style="width:75px">Số lô</th>
            <th colspan="2">TỒN ĐẦU KỲ</th>
            <th colspan="2">NHẬP TRONG KỲ</th>
            <th colspan="2">XUẤT TRONG KỲ</th>
            <th colspan="2">TỒN CUỐI KỲ</th>
        </tr>
        <tr>
        	<th style="width:50px">S.lượng</th>
            <th style="width:70px">T.tiền</th>
            <th style="width:50px">S.lượng</th>
            <th style="width:70px">T.tiền</th>
            <th style="width:50px">S.lượng</th>
            <th style="width:70px">T.tiền</th>
            <th style="width:50px">S.lượng</th>
            <th style="width:70px">T.tiền</th>
        </tr>
     </thead>
        <?php
		$dem_1dong=0;
		$soluongthuoc=0;
		$mang = array();
		$sl_td=0;$tt_td=0;$sl_n=0;$tt_n=0;$sl_x=0;$tt_x=0;$sl_ton=0;$tt_ton=0;	
			for($i=0;$i<=count($tam)-1;$i++){
				if($i==count($tam)-1){//dong cuoi cung
					if($tam[$i]['ID_Thuoc']!=$tam[($i-1)]['ID_Thuoc']){	//thuoc moi	
							$mang[$soluongthuoc]='<tr><td align="center">'.$tam[$i]['ID_Thuoc'].'</td><td>'.$tam[$i]['TenBietDuoc'].'</td><td align="center">'.$tam[$i]['TenDonViTinh'].'</td><td>'.$tam[$i]['SoLo'].'</td><td align="right">'.number_format($tam[$i]['SL_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_TON'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TON'],"0",",",".").'</td></tr>';
						}else{//van la thuoc cu
						$mang[$soluongthuoc]=$mang[$soluongthuoc].'<tr><td align="center" colspan="3"></td><td  align="center">'.$tam[$i]['SoLo'].'</td><td align="right">'.number_format($tam[$i]['SL_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_TON'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TON'],"0",",",".").'</td></tr>';
						$sl_td=$sl_td+$tam[$i]['SL_TD'];
						$tt_td=$tt_td+$tam[$i]['TT_TD'];
						$sl_n=$sl_n+$tam[$i]['SL_N'];
						$tt_n=$tt_n+$tam[$i]['TT_N'];
						$sl_x=$sl_x+$tam[$i]['SL_X'];
						$tt_x=$tt_x+$tam[$i]['TT_X'];
						$sl_ton=$sl_ton+$tam[$i]['SL_TON'];
						$tt_ton=$tt_ton+$tam[$i]['TT_TON'];
						$mang[$soluongthuoc]='<tr><td align="center">'.$tam[$i]['ID_Thuoc'].'</td><td>'.$tam[$i]['TenBietDuoc'].'</td><td align="center">'.$tam[$i]['TenDonViTinh'].'</td><td></td><td align="right">'.number_format($sl_td,"0",",",".").'</td><td align="right">'.number_format($tt_td,"0",",",".").'</td><td align="right">'.number_format($sl_n,"0",",",".").'</td><td align="right">'.number_format($tt_n,"0",",",".").'</td><td align="right">'.number_format($sl_x,"0",",",".").'</td><td align="right">'.number_format($tt_x,"0",",",".").'</td><td align="right">'.number_format($sl_ton,"0",",",".").'</td><td align="right">'.number_format($tt_ton,"0",",",".").'</td></tr>'.$mang[$soluongthuoc];
						}
				}else{
					if($tam[$i]['ID_Thuoc']!=$tam[($i+1)]['ID_Thuoc']){//thuoc moi
					
						if($dem_1dong==0){//thuoc co 1 dong
						$mang[$soluongthuoc]='<tr><td align="center">'.$tam[$i]['ID_Thuoc'].'</td><td>'.$tam[$i]['TenBietDuoc'].'</td><td  align="center">'.$tam[$i]['TenDonViTinh'].'</td><td  align="center">'.$tam[$i]['SoLo'].'</td><td align="right">'.number_format($tam[$i]['SL_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_TON'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TON'],"0",",",".").'</td></tr>';
						}else{//thuoc nhieu dong
							$mang[$soluongthuoc]=$mang[$soluongthuoc].'<tr><td align="center" colspan="3"></td><td  align="center">'.$tam[$i]['SoLo'].'</td><td align="right">'.number_format($tam[$i]['SL_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_TON'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TON'],"0",",",".").'</td></tr>';
						$sl_td=$sl_td+$tam[$i]['SL_TD'];
						$tt_td=$tt_td+$tam[$i]['TT_TD'];
						$sl_n=$sl_n+$tam[$i]['SL_N'];
						$tt_n=$tt_n+$tam[$i]['TT_N'];
						$sl_x=$sl_x+$tam[$i]['SL_X'];
						$tt_x=$tt_x+$tam[$i]['TT_X'];
						$sl_ton=$sl_ton+$tam[$i]['SL_TON'];
						$tt_ton=$tt_ton+$tam[$i]['TT_TON'];
						$mang[$soluongthuoc]='<tr><td align="center">'.$tam[$i]['ID_Thuoc'].'</td><td>'.$tam[$i]['TenBietDuoc'].'</td><td align="center">'.$tam[$i]['TenDonViTinh'].'</td><td></td><td align="right">'.number_format($sl_td,"0",",",".").'</td><td align="right">'.number_format($tt_td,"0",",",".").'</td><td align="right">'.number_format($sl_n,"0",",",".").'</td><td align="right">'.number_format($tt_n,"0",",",".").'</td><td align="right">'.number_format($sl_x,"0",",",".").'</td><td align="right">'.number_format($tt_x,"0",",",".").'</td><td align="right">'.number_format($sl_ton,"0",",",".").'</td><td align="right">'.number_format($tt_ton,"0",",",".").'</td></tr>'.$mang[$soluongthuoc];
						}
						$sl_td=0;$tt_td=0;$sl_n=0;$tt_n=0;$sl_x=0;$tt_x=0;$sl_ton=0;$tt_ton=0;	
						$dem_1dong=0;
						$soluongthuoc++;
					}else{//thuoc cu
						if($dem_1dong==0){
							$mang[$soluongthuoc]='';
						}
						$sl_td=$sl_td+$tam[$i]['SL_TD'];
						$tt_td=$tt_td+$tam[$i]['TT_TD'];
						$sl_n=$sl_n+$tam[$i]['SL_N'];
						$tt_n=$tt_n+$tam[$i]['TT_N'];
						$sl_x=$sl_x+$tam[$i]['SL_X'];
						$tt_x=$tt_x+$tam[$i]['TT_X'];
						$sl_ton=$sl_ton+$tam[$i]['SL_TON'];
						$tt_ton=$tt_ton+$tam[$i]['TT_TON'];	
						$mang[$soluongthuoc]=$mang[$soluongthuoc].'<tr><td align="center" colspan="3"></td><td  align="center">'.$tam[$i]['SoLo'].'</td><td align="right">'.number_format($tam[$i]['SL_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TD'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_N'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_X'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['SL_TON'],"0",",",".").'</td><td align="right">'.number_format($tam[$i]['TT_TON'],"0",",",".").'</td></tr>';
						
						
						$dem_1dong++;
					}
				}
				
			}
			
			
			for($y=0;$y<=count($mang)-1;$y++){
				
				echo $mang[$y];
			}
		?>
        
        
     </table>
     <div style="height:7px"></div>	
     <div><div style="margin-left:500px;font-style:italic"><label>Ngày </label><label><?php echo date("d");?></label><label> tháng </label><label><?php echo date("m");?></label><label> năm </label><label><?php echo date("Y");?></label></div></div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px; border:none">
		<tr>
        	<th style="width:250px;border:none">Kế toán trưởng</th>
            <th style="width:250px;border:none"> </th>
            <th style="width:250px;border:none">Người lập phiếu</th>
        </tr>
        <tr>
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label><?=$hotenkt?></label></div>
            </td>
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div id="nglapphieu"><label></label></div>
            </td>	
            <td style="width:250px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label><?=$_SESSION["user"]["fullname"]?></label></div>
            </td> 
         </tr>	       
     </table>
</div>
</body>
<script type="text/javascript">
	jQuery(document).ready(function() {
		print_preview();
	})
</script>
</html>

