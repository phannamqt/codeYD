<?php
	$_SESSION["ThongTinBenhNhan"]["ID"]="89045";
	$_SESSION["ThongTinBenhNhan"]["ten"]="ATERIA ANA";
	$_SESSION["ThongTinBenhNhan"]["gioitinh"]="Nam";
	$_SESSION["ThongTinBenhNhan"]["tuoi"]="72";
	$_SESSION["ThongTinBenhNhan"]["dienthoai"]="0909999999";
	$_SESSION["ThongTinBenhNhan"]["chieucao"]="159 cm";
	$_SESSION["ThongTinBenhNhan"]["cannang"]="62.0";
	$_SESSION["ThongTinBenhNhan"]["diachi"]="Tổ 4 Khánh Sơn Hòa Khánh Nam Liên Chiểu";	
	$_SESSION["ThongTinBenhNhan"]["danhgia1"]="1.2";
	$_SESSION["ThongTinBenhNhan"]["danhgia2"]="1.5";
	$_SESSION["ThongTinBenhNhan"]["danhgia3"]="1.8";
	$_SESSION["ThongTinBenhNhan"]["ps"]="120";
	$_SESSION["ThongTinBenhNhan"]["pd"]="85";
	$_SESSION["ThongTinBenhNhan"]["hr"]="68";
	$_SESSION["ThongTinBenhNhan"]["temp"]="37";
	$phancach1=" - ";$phancach2=" / ";
?>
<style type="text/css">
body{background:none!important;}
</style>
 
<body>
<div id="patient_info" title="<?=$_SESSION["ThongTinBenhNhan"]["diachi"]?>">
	<div class="form_row">
    	<input id="name" disabled style="width:auto" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>"> 
        <input id="sex" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["gioitinh"]?>"> 
        <input id="age" disabled style="width:40px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["tuoi"]?>"> 
        <input id="id_patient" disabled style="width:60px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>">
        <input id="rate" disabled style="width:90px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["danhgia1"].$phancach2?><?=$_SESSION["ThongTinBenhNhan"]["danhgia2"].$phancach2?><?=$_SESSION["ThongTinBenhNhan"]["danhgia3"]?>">
         
    </div>
    <br>
    <div class="form_row">
    	<input id="height" disabled style="width:60px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["chieucao"]?>"> 
        <input id="weight" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["cannang"]?>"> 
        <input id="ps" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["ps"]?>"> 
        <input id="pd" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["pd"]?>"> 
        <input id="hr" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["hr"]?>"> 
        <input id="temp" disabled style="width:50px" type="text" value="<?=$_SESSION["ThongTinBenhNhan"]["temp"]?>&deg;">         
    </div>
</div>	 
    
</body> 