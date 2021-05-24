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

</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  

		$params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_SelectChiDinhXetNghiemByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtincd=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtincd);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinchidinh= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_SelectThongTinLuotKhamByXetNghiemAndID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinlk=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinlk);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		
		//print_r($thongtinchidinh);
    ?>
 <?=HeaderReportInNhiet()?>   
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU XÉT NGHIỆM</h2>
  
	 <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
		<tr>
			<td style="width:80px">ID:</td>
        	<td style="text-align:left; padding-top: 1px;  padding-bottom: 1px;"><strong style="font-size:15px"><?=$thongtinbenhnhan[0]["MaBenhNhan"];?></strong> </td>
        </tr>
		<tr>
			<td>Họ tên:</td>
            <td style=" padding-top: 1px;  padding-bottom: 1px;"> <strong style="font-size:15px"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?></strong> </td>
        </tr>
		<tr>
			<td>Giới:</td>
            <td style="padding-top: 1px; padding-bottom: 1px;"> <?=$thongtinbenhnhan[0]["Gioi"];?>, <?=$thongtinbenhnhan[0]["Tuoi"];?> tuổi</td>
        </tr>
		 <tr>
			<td>Vào khám lúc:</td>
            <td style="padding-top: 1px; padding-bottom: 1px;"> <?=$thongtinluotkham[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]); ?> </td>
        </tr>
       <tr>
            <td style=" padding-top: 1px;  padding-bottom: 1px;">Người CĐ: </td>
            <td style="padding-top: 1px; padding-bottom: 1px"><?=$thongtinchidinh[0]["HoTenBS"]?> </td>
        </tr>
		<?php
			if($thongtinluotkham[0]["SampleID"]!=''){
		?>
         <tr>
            <td style=" padding-top: 1px;  padding-bottom: 1px;">Sample ID: </td>
            <td style="padding-top: 1px; font-weight:bold;  padding-bottom: 1px;font-size:24px;"><?=$thongtinluotkham[0]["SampleID"]?> </td>
        </tr>
		<?php
			}
		?>
    </table>
 <br />
    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:solid 1px #000000 !important; font-weight:bold;">
        	<td style=" width:50%; text-align:left; padding-right:40px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Tên xét nghiệm
            </td >
           	<td style=" width:50%; text-align:right; padding-right:10px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            T.Tiền
            </td>
        </tr>
        
        <?php
		$i=0;
		$flag=0;
		$hotro=0;



            $zo="0";
            $dem=0;
      
            for($i=0;$i<=count($thongtinchidinh)-1;$i++){
				$hotro+=$thongtinchidinh[$i]["HoTro"];
    
                    if($zo=="0"){
                      
                     echo ('<tr > <td  colspan=2> <b style=" font-size:24px;"> '.$thongtinchidinh[$i]['SoNgayLuuHinhKQ'].'   '.$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]. '<br></td></tr>');
                            if($thongtinchidinh[$i]['ID_TrangThai']=='Xong'){
                            echo ('<tr><td bgcolor="#CCCCCC">'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
                            }else
                            {
                            echo ('<tr><td>'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
                            }
                        }else{
							if($thongtinchidinh[$i]['nhom']==$thongtinchidinh[$i-1]['nhom']){
								if($thongtinchidinh[$i]['ID_TrangThai']=='Xong'){
								echo ('<tr><td bgcolor="#CCCCCC">'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
								}else
								{
								echo ('<tr><td>'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
								}
							}
							else{
								echo ('<tr > <td  cclspan=2>-----------------------------------------------------------</td></tr>');
								echo ('<tr > <td  colspan=2> <b style=" font-size:24px;"> '.$thongtinchidinh[$i]['SoNgayLuuHinhKQ'].'   '.$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]. '<br></td></tr>');
								if($thongtinchidinh[$i]['ID_TrangThai']=='Xong'){
								echo ('<tr><td bgcolor="#CCCCCC">'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
								}else
								{
								echo ('<tr><td>'.$thongtinchidinh[$i]['TenLoaiKham'].'</td><td style="text-align:right;">'.number_format($thongtinchidinh[$i]['PhiThucHien'],"0",",",".").'</td><tr>');
								}
								}
						}
                    $zo="1";
            }

		?>
		
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="2">
            </td>
        </tr>
    </table>
    <br />
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        
        <tr>
          <td  style=" width:60%; text-align:right;">Tổng tiền thực hiện:</td>
          <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($thongtinluotkham[0]["PhiThucHien"],"0",",",".");	?></td>
        </tr>
         <?php
		if($hotro>0){
		?>
        <tr>
          <td  style=" width:60%; text-align:right;">Hỗ trợ BHYT:</td>
          <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($hotro,"0",",",".");	?></td>
        </tr>
        <tr>
            <td  style=" width:60%; text-align:right;">Bệnh nhân thanh toán: </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format(($thongtinluotkham[0]["PhiThucHien"]-$hotro),"0",",",".");	?></td>
        </tr>
        <?php
		}
		?>
		<!--
		 <?php
		if($thongtinluotkham[0]["ThanhTienBaoHiem"]>0){
		?>
        <tr>
          <td  style=" width:60%; text-align:right;">Bảo hiểm thanh toán:</td>
          <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($thongtinluotkham[0]["ThanhTienBaoHiem"],"0",",",".");	?></td>
        </tr>
        <tr>
            <td  style=" width:60%; text-align:right;">Bệnh nhân thanh toán</td>
            <td  style=" width:40%; text-align:right; font-weight:bold;">
            <?=number_format($thongtinluotkham[0]["BenhNhanTra"],"0",",",".");	?>
            </td>
        </tr>
        <?php
		}
		?>
       -->
        <tr style="font-style:italic; ">
            <td  style=" width:60%; text-align:right; padding-top:5px; padding-bottom:10px;">
            Giờ in:
            </td>
            <td  style=" width:40%; text-align:right; padding-top:5px; padding-bottom:10px; ">
   			<?php
            $date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
			echo $date;
			?>
            </td>
        </tr>
         
		<?php 
				if($_SESSION["com"]["HienThiBarcodeBenhNhan"]==1){
			?>
        <tr>
         <td colspan="2" align="center" style="text-align:center; width:100%">
        <img  src='<?=get_system_one_config("GD2_Default_Url")?>/barcodegen/html/image2.php?filetype=PNG&amp;dpi=72&amp;scale=1&amp;rotation=0&amp;font_family=Arial.ttf&amp;font_size=8&amp;text=<?=$thongtinluotkham[0]["SampleID"]?>&amp;thickness=30&amp;start=NULL&amp;code=BCGcode39' >
        </td>
        </tr>
		<?php
				}
			?>
    </table>
    <div class="footer"></div>
    
</body>
</html>
 