<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	font-family:arial, Geneva, sans-serif !important;
	padding-left:20px  !important;
	padding-right:5px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px arial, Geneva, sans-serif;
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
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		$params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTuoiThaiByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
    ?>

     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;color:#000">
     	<tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">LỊCH HẸN KHÁM THAI</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*****</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#000;font-size:15px; width:100%;font-family:arial, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
            <td colspan="2" width="25%">Tuổi: <strong>
            <?=$thongtinbenhnhan[0]["Tuoi"];?>
            </strong></td>
            <td width="25%">ID: <strong>
            <?=$thongtinbenhnhan[0]["MaBenhNhan"];?>
            </strong></td>
         </tr>
         <tr>
            <td colspan="3" >Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td> 
			 <td >Ngày khám:
            <?php
			if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
            	echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			?></td>  
         </tr>  
         <tr>
         	<td  colspan="3">Tuổi thai: &nbsp; 
       	    <?php
			if($khamthai[0]["SoTuanThai"]!=""){
            	echo $khamthai[0]["SoTuanThai"];
			}
			?> &nbsp;&nbsp;tuần &nbsp;&nbsp;<?php
			if($khamthai[0]["SoNgayThai"]!=""){
            	echo $khamthai[0]["SoNgayThai"];
			}
			?> &nbsp;&nbsp;ngày</td>
            <td colspan="1">N.sinh dự kiến: <?php
			if($khamthai[0]["NgaySinhDuKien"]!=""){
            	echo $khamthai[0]["NgaySinhDuKien"]->format($_SESSION["config_system"]["ngaythang"]);
			}
			?></td>
         </tr>   
     </table>
     <br />
     <p align="center" style="font-weight:bold; font-size:16px;">Để theo dõi sức khỏe của thai và sản phụ, hãy tái khám và siêu âm theo lịch sau:</p>
     <br />
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:arial, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px; font-size:16px; text-transform:uppercase; line-height:30px;">
            <?php
			if($khamthai[0]["SoTuanThai"]<1)
			{
				$khamthai[0]["SoTuanThai"]=0;
				
			}else{
				$khamthai[0]["SoTuanThai"]=$khamthai[0]["SoTuanThai"];
				}
				
			if($khamthai[0]["SoNgayThai"]<1)
			{
				$khamthai[0]["SoNgayThai"]=0;
				
			}else{
				$khamthai[0]["SoNgayThai"]=$khamthai[0]["SoNgayThai"];
				}
			$ngaythai=($khamthai[0]["SoTuanThai"]*7)+$khamthai[0]["SoNgayThai"];
			if($thongtinluotkham[0]['NgayGioThucHien']!=''){
				$date=$thongtinluotkham[0]['NgayGioThucHien']->format('Y-m-d');
			}else{
				$date='';
			}
			
             if($khamthai[0]["SoTuanThai"]< 11) {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime ( '+'.(12 * 7-$ngaythai).' days' , strtotime($date)) )." - khi thai 12 tuần (siêu âm)<br>";
				 
			 }
            
             if($khamthai[0]["SoTuanThai"]< 17)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(18 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 18 tuần (siêu âm)<br>";
			 }
             if($khamthai[0]["SoTuanThai"]< 21)  {
				echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(22 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 22 tuần (siêu âm)<br>";
			 }
             if($khamthai[0]["SoTuanThai"]< 25)  {
				echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(26 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 26 tuần (siêu âm)<br>";
			 }
			  if($khamthai[0]["SoTuanThai"]< 29)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(30 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 30 tuần<br>";
			 }
             if($khamthai[0]["SoTuanThai"]< 31)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(32 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 32 tuần (siêu âm)<br>";
			 }
			  if($khamthai[0]["SoTuanThai"]< 33)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(34 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 34 tuần<br>";
			 }
             if($khamthai[0]["SoTuanThai"]< 35)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(36 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 36 tuần<br>";
			 }
			 if($khamthai[0]["SoTuanThai"]< 37)  {
				echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(38 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 38 tuần<br>";
			 }
             if($khamthai[0]["SoTuanThai"]< 39)  {
				 echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime( '+'.(40 * 7-$ngaythai).' days' , strtotime($date)))." - khi thai 40 tuần (siêu âm)<br>";
				 
			 }
			
			?>
            </td> 
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container">
                 <img width="230" height="196" src="./modules/report/lamsang/img/khamthai/pregnancy-countdown.jpg" /><br /><br /><br />
                 <img width="230" height="196" src="./modules/report/lamsang/img/khamthai/pregnancy_ultrasound.jpg" />
               </div>
             	 <br /><br />
                 <i>
                 	Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 <br />
                 <b>
                 	BÁC SỸ
               </b>
                 <br /> <img id="bs_chandoan" width="100"/><br />
                 <b style="color:red"><?=$thongtinluotkham[0]['BsChanDoan'];?></b>
            </td>             
         </tr>            
     </table>
     <p style="font-size:13px;">
     <?php
	 if($khamthai[0]["SoTuanThai"]< 11) {
		 ?>
		*Thời điểm siêu âm lúc thai 12 tuần tuổi là rất quan trọng vì nếu đi trễ, Bác sỹ không đo được độ mờ da gáy, không tiên lượng được bệnh Down và các rối loạn nhiễm sắc thể khác.<br />
        <?php
	 }
	 if($khamthai[0]["SoTuanThai"]< 21) {
	 ?>
     *Thời điểm siêu âm lúc thai 22 tuần tuổi là rất cần thiết để khảo sát các dị tật, bất thường của thai nhi.
    <?php 
	 }
	 ?>
	 </p>
</body>
</html>
 <script type="text/javascript">
	$(document).ready(function() {
		load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
		print_preview();
	});
</script>