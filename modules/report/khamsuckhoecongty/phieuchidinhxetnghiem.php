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
		
		$params3 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_GetTenCongTyByID_LuotKham(?)}";//tao bien khai bao store
        $get_tencty=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtincty= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc  
		//print_r($thongtinchidinh);
    ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU XÉT NGHIỆM</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr >
            <td style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;"><?=$thongtinluotkham[0]["TenPhanLoaiKham"]; ?></td>
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
        <tr>
         <td colspan="2" style="padding-top: 1px;">
         <?php if(count($thongtincty)){ echo $thongtincty[0]['TenCty'];} ?>
         </td>
         </tr>
    </table>
    <br />

    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="border-bottom:solid 1px #000000 !important; font-weight:bold;">
        	<td style=" width:50%; text-align:right; padding-right:40px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important;  padding-top:2px; padding-bottom:2px;">
            Loại khám
            </td >
           	<td style=" width:50%; text-align:right; padding-right:10px; border-bottom:solid 1px #000000 !important;; border-top:solid 1px #000000 !important; padding-top:2px; padding-bottom:2px;">
            Người CĐ
            </td>
        </tr>
        
        <?php
		$i=0;
		$flag=0;
        foreach ($thongtinchidinh as $ttcd) {
					$i++;
						?>
					<tr>
						<td <?php if($ttcd["ID_TrangThai"]=='Xong') {?>bgcolor="#F5F5F5" <?php }?>   style=" width:70%; text-align:left; padding-left:10px; padding-top:2px; padding-bottom:2px;">
					   <?=$i.' '.$ttcd["TenLoaiKham"]; ?>
						</td>
						<td  style=" width:30%; text-align:right; padding-right:10px;  padding-top:2px; padding-bottom:2px;">
					   <?=$ttcd["NickName"]; ?>
						</td>
					   
					</tr>
				<?php
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
            <td  style=" width:60%; text-align:right;">
            Tổng tiền phải trả:
            </td>
            <td  style=" width:40%; text-align:right; font-weight:bold;">
            <?=number_format($thongtinluotkham[0]["PhiThucHien"],"0",",",".");	?>
            </td>
        </tr>
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
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">
        Thân thiết như người nhà
        </td>
        </tr>
    </table>
    
<div class="footer"></div>
</body>
</html>
 