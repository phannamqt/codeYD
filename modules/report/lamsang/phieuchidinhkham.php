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
        $store_name1="{call GD2_SelectChiDinhByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtincd=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtincd);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinchidinh= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_SelectThongTinLuotKhamByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinlk=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinlk);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinchidinh);
		
		
		$_params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $_store_name1="{call GD2_SelectChiDinhXetNghiemByID_LuotKham(?)}";//tao bien khai bao store
        $_get_thongtincd=$data->query( $_store_name1,$_params1);//Goi store
        $_excute1= new SQLServerResult($_get_thongtincd);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $_thongtinchidinh= $_excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		
    ?>
 <?=HeaderReportInNhiet()?>      
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;margin-bottom:3px;">PHIẾU CHỈ ĐỊNH</h2>
	<div style="text-align:center;padding-bottom:10px;font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">(<?=$thongtinluotkham[0]["TenPhanLoaiKham"]; ?>)</div>
 
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
        
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:s 1px #000000 !important; font-weight:bold;">
          <td style=" width:3px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">&nbsp;</td >
        	<td style=" width:50%; text-align:left; padding-left:10px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Loại khám
            </td >
            <td style=" width:30%; text-align:right; padding-right:4px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            Người CĐ
            </td>
			<td style=" width:20%; text-align:right; padding-right:4px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            T.Tiền
            </td>
        </tr>
        
        <?php
		$i=0;
		$flag=0;
		$hotro=0;
        foreach ($thongtinchidinh as $ttcd) {
			$hotro+=$ttcd["HoTro"];
		if($ttcd["XetNghiem"]==1 && $flag==0 || $ttcd["XetNghiem"]!=1){
			if($ttcd["XetNghiem"]==1){
				$flag=1;
				$ttcd["TenLoaiKham"]='Xét nghiệm';
				$i++;
				?>
                <tr>
                    <td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#CCCCCC" <?php }?>  style="text-align:left; padding-top:2px; padding-bottom:2px; vertical-align:top;"><?=$i?></td>
                    <td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#CCCCCC" <?php }?>  style=" text-align:left; padding-left:10px; padding-top:2px; padding-bottom:2px;">
                        <?=$ttcd["TenLoaiKham"]; ?>
                    </td>
                    <td  style="text-align:right; padding-right:10px;  padding-top:2px; padding-bottom:2px;vertical-align:top;">
                        <?=$ttcd["NickName"]; ?>
                    </td>
					 <td  style="text-align:right;">
                        <?=$ttcd["PhiThucHienXN"]; ?>
                    </td>

                </tr>
                <?php
				}else{
					$i++;
					?>
                <tr>
                    <td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#CCCCCC" <?php }?>   style=" width:3px; text-align:left; padding-top:2px; padding-bottom:2px;vertical-align:top;"><?=$i?></td>
                    <td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#CCCCCC" <?php }?>   style=" text-align:left; padding-left:10px; padding-top:2px; padding-bottom:2px;">
                        <?=$ttcd["TenLoaiKham"]; ?>
                    </td>
                    <td  style="text-align:right; padding-right:10px;  padding-top:2px; padding-bottom:2px;vertical-align:top;">
                        <?=$ttcd["NickName"]; ?>
                    </td>
					 <td  style="text-align:right;">
                        <?=number_format($ttcd["PhiThucHien"],"0",",","."); ?>
                    </td>
                </tr>
            <?php
				}
			}
		}
		?>
		
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="4">
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
      <!--  <?php
		if($thongtinluotkham[0]["ThanhTienBaoHiem"]>0){
		?>
        <tr>
          <td  style=" width:60%; text-align:right;">Bảo hiểm thanh toán:</td>
          <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($thongtinluotkham[0]["ThanhTienBaoHiem"],"0",",",".");	?></td>
        </tr>
        <tr>
            <td  style=" width:60%; text-align:right;">Bệnh nhân thanh toán: </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($thongtinluotkham[0]["BenhNhanTra"],"0",",",".");	?></td>
        </tr>
        <?php
		}
		?>-->
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
        <tr>
        <td colspan="2" width="100%" style="s">
        </td>
        </tr>
		<?php 
			if($_SESSION["com"]["HienThiBarcodeBenhNhan"]==1){
		?>
        <tr>
         <td  colspan="2" width="100%" align="center" style="text-align:center;"><img id="barcode" src = '<?=get_system_one_config("GD2_Default_Url")?>/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=8&thickness=30&checksum=&code=BCGcode39&text=<?=$thongtinbenhnhan[0]["MaBenhNhan"]?>'>
        </td>
		<?php
			}
		?>
        </tr>
    </table>
    <div class="footer"></div>
</body>
</html>
 