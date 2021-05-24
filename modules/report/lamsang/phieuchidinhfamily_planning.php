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
        $store_name1="{call GD2_SelectChiDinhfamily_planningByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtincd=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtincd);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinchidinh= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_SelectThongTinLuotKhamfamily_planningByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinlk=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinlk);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinchidinh);
    ?>
  <?=HeaderReportInNhiet()?>     
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">CHỈ ĐỊNH FAMILY-PLANNING</h2>
    
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr >
            <td style=" width:50%;  padding-top: 1px;  padding-bottom: 1px; font-weight:bold;"><?=$thongtinluotkham[0]["TenPhanLoaiKham"]; ?></td>
        	<td style=" width:50%; text-align:right;  padding-top: 1px;  padding-bottom: 1px;"><?php if($thongtinbenhnhan[0]["TD"]!=''){ echo $thongtinbenhnhan[0]["TD"].'/'.$thongtinbenhnhan[0]["KT"].'/'.$thongtinbenhnhan[0]["HL"];} ?> </td>
        </tr>
        <tr>
            <td style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?> </td>
        	<td style=" width:50%; text-align:right;font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["MaBenhNhan"];?> </td>
        </tr>
        <tr>
            <td style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinbenhnhan[0]["Tuoi"];?> tuổi, <?=$thongtinbenhnhan[0]["Gioi"];?> </td>
        	<td style=" width:50%; text-align:right;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinluotkham[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]); ?> </td>
        </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:solid 1px #000000 !important; font-weight:bold;">
        	<td style="border-bottom:solid 1px #000000 !important; padding-left:10px; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;" colspan="2">Loại khám</td>
           
            <td style=" width:15%; text-align:center;padding-left:2px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            P.Thức
            </td >
            <td style=" width:15%; text-align:center;padding-left:2px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Phòng
            </td >
           	<td style=" width:20%; text-align:right; padding-right:10px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            BS CĐ
            </td>
        </tr>
        
        <?php
		$i=0;
		$flag=0;
        foreach ($thongtinchidinh as $ttcd) {
			$i++;
			if($ttcd["PhuongThucThucHien"]==0)
				$ttcd["PhuongThucThucHien"]='Hospital';
				else if($ttcd["PhuongThucThucHien"]==1)
					$ttcd["PhuongThucThucHien"]='Home';
					else 
						$ttcd["PhuongThucThucHien"]='Self';
		?>
				<tr>
               	 <td style=" width:5px; text-align:left; padding-left:0px;padding-top:2px; vertical-align:top;"><?=$i;?></td>
					<td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#CCCCCC" <?php }?>   style=" width:45%; text-align:left; padding-left:2px; padding-top:2px; padding-bottom:2px;padding-right:2px; vertical-align:top;">
				   <?=$ttcd["TenLoaiKham"]; ?>
					</td>
                    <td  style=" width:17%; text-align:left; padding-left:2px;  padding-top:2px; padding-bottom:2px; vertical-align:top;">
				   <?=$ttcd["PhuongThucThucHien"]; ?>
					</td>
                    <td  style=" width:17%; text-align:center; padding-left:2px;  padding-top:2px; padding-bottom:2px; vertical-align:top;">
                   <?=$ttcd["TenPhong"]; ?>
                    </td>
                    <td  style=" width:25%; text-align:right; padding-right:10px;  padding-top:2px; padding-bottom:2px; vertical-align:top;">
				   <?=$ttcd["NickName"]; ?>
					</td>
				</tr>
        <?php
		}
		?>
		
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="5">
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
		if($thongtinluotkham[0]["ThanhTienBaoHiem"]>0){
		?>
        <tr>
          <td  style=" width:60%; text-align:right;">Bảo hiểm thanh toán:</td>
          <td  style=" width:40%; text-align:right; font-weight:bold;"><?=number_format($thongtinluotkham[0]["ThanhTienBaoHiem"],"0",",",".");	?></td>
        </tr>
        <tr>
            <td  style=" width:60%; text-align:right;">
            Bệnh nhân thanh toán:
            </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;">
            <?=number_format($thongtinluotkham[0]["BenhNhanTra"],"0",",",".");	?>
            </td>
        </tr>
        <?php
		}
		?>
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
 
    </table>
    <div class="footer"></div>
<!--    <script type="application/javascript">
   $(document).ready(function() {
	   var _xemtruocin=<?=$_GET['xemtruocin'];?>;
	   if(_xemtruocin==0){
		 setTimeout(function(){
		    parent.postMessage('close_report', "*");
		},300);
	   }
   });
  
   </script>-->
    
</body>
</html>
 