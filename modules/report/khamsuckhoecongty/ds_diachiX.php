<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
</head>
<body style="margin-top:10px;"> 
<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
       // $params2 = array($_GET["id_luotkham"]);//tao param cho store 
       // $store_name2="{call GD2_GetTenCongTyByID_LuotKham(?)}";//tao bien khai bao store
       // $get_tencty=$data->query( $store_name2,$params2);//Goi store
        //$excute2= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        //$thongtincty= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
		//print_r($thongtinbenhnhan);
   
    ?>
  <table cellpadding="0" cellspacing="0" border="1" width="100%" style="height:100px;page-break-after:always; padding-right:10px; margin-left:7px;">
    <tbody>
		<tr style=" font-size:16px; width:100%;font-family:Arial, Geneva, sans-serif;" height="25px">
		<td style="" valign="bottom" width="15" ><img style=" max-width: 35px;width: 35px; margin-top:3px;" src="./modules/report/hanhchinh/img/logo_den.png" /></td>
		<td  width="260" style="text-align:center; font-weight:bold"><?php if($thongtinbenhnhan[0]['GioiTinh']==1){ ?>Bà: <?php }else { ?>Ông: <?php }?><?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?></td>
		<td  width="10" style="text-align:center; padding-right:10px; text-align:left; font-size:12px"><?=$thongtinbenhnhan[0]['MaBenhNhan']?></td>
      </tr>
	 <tr  style="font-size:14px; width:100%;font-family:Arial, Helvetica, sans-serif;" height="3px">
       <td style="padding-bottom:3px;"></td>  
			<td colspan="2" style="text-align:center ;padding-right:15px" ><?=$_GET['tencongty']; ?></td>
	  </tr>
      <tr  style="font-size:15px; width:100%;font-family:Arial, Helvetica, sans-serif;" height="3px">
       <td style=" height:10px;"></td>  
			<td ></td>
			<td ></td>      
      </tr>
   </tbody>
</table>

</body>
</html>  
 