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
	   background: #F9F9F9;
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

        $params_2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name_2="{call GD2_GetThongTinBenhNhan_KSK(?)}";//tao bien khai bao store
        $get_2=$data->query( $store_name_2,$params_2);//Goi store
        $excute_2= new SQLServerResult($get_2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinpara= $excute_2->get_as_array();//Tra ve mang toan bo data lay duoc  

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
		//print_r($thongtinbenhnhan);
    ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?><br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU KHÁM BỆNH</h2>
    
<div style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px;">
    Ps/Pd/H/W: <?php if($thongtinpara[0]["Ps"]!=''){ echo ' '.$thongtinpara[0]["Ps"].' ';}else {echo '..........';} ?>/<?php if($thongtinpara[0]["Pd"]!=''){ echo ' '.$thongtinpara[0]["Pd"].' ';}else{ echo '..........';} ?>/<?php if($thongtinpara[0]["ChieuCao"]!=''){echo ' '.$thongtinpara[0]["ChieuCao"].' ';}else{ echo '..........';} ?>/<?php if($thongtinpara[0]["CanNang"]!=''){echo ' '.$thongtinpara[0]["CanNang"].' ';}else{echo '..........';} ?><br />
    C/N/VN: ........../........../..........<br />
    RHM/TMH: ........../..........<br />
    <hr />
<h2 style="margin:0px !important;"><?=$thongtinbenhnhan[0]["MaBenhNhan"]; ?></h2>
    Ngày đến: <span style=" width:50%; text-align:right;  padding-top: 1px;  padding-bottom: 1px;">
    <?=$thongtinluotkham[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]); ?>
    </span><br />
    Địa chỉ:  
    <?=$thongtinbenhnhan[0]["DiaChi"]; ?>
    <br />
    <hr />
    Họ tên: <span style=" width:50%; font-weight:bold;  padding-top: 1px;  padding-bottom: 1px;">
    <?=$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"]; ?>
    </span><br />
    Giới: <span style=" width:50%;  padding-top: 1px;  padding-bottom: 1px; margin-right: 17px;">
    <?=$thongtinbenhnhan[0]["Gioi"];?>
    </span> Tuổi: <span style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;">
    <?=$thongtinbenhnhan[0]["Tuoi"];?>
    </span><br />
    Phân loại khám: <span style=" width:50%;  padding-top: 1px;  padding-bottom: 1px;">
    <?=$thongtinluotkham[0]["TenPhanLoaiKham"]; ?>
    </span><br />
    <span style="padding-top: 1px;">
    <?php if(count($thongtincty)){ echo $thongtincty[0]['TenCty'];} ?>
    </span><br />
</div><br />
<table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5;">
        Thân thiết như người nhà
        </td>
        </tr>
    </table>
    <div class="footer"></div>
    
</body>
<script type="application/javascript">
		$(document).ready(function() {
			print_preview();
		})
	</script>
</html>
 