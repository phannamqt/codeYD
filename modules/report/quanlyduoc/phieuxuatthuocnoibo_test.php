<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left:4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
</style>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET['idphieu']);//tao param cho store 
	$store_name="{call GD2_GetAllPhieuXuatNoiBoByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay 
	
	$params2 = array($_GET['idphieu']);//tao param cho store 
	$store_name2="{call GD2_GetPhieuXuatNoiBoByID_PhieuXuatNoiBo_New(?)}";//tao bien khai bao store
	$get_thongtin2=$data->query( $store_name2,$params2);//Goi store
	$excute2= new SQLServerResult($get_thongtin2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay 
	
	$params3 = array($_GET['idphieu']);//tao param cho store 
	$store_name3="{call GD2_GetTenKhoaByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
	$get_thongtin3=$data->query( $store_name3,$params3);//Goi store
	$excute3= new SQLServerResult($get_thongtin3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tenkhoa= $excute3->get_as_array();//Tra ve mang toan bo data lay 
?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
         <div class="n_top">
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="595px">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#000">FAMILY</span> <img src="images/logo_print.png" /> 
                            <br />
                            <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
                </td>
                <td style="vertical-align:top; width:100px">Số phiếu:<?=$thongtin[0]['SoPhieu']?><br />
                    Kho xuất:
                </td>
              </tr>
            </table><br />
            
            <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        PHIẾU XUẤT NỘI BỘ<br />
                  </td>
                </tr>
            </table>
            <br />
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>- Tên tôi là: <strong><?=$thongtin[0]['HoTenNguoiTao']?></strong></td>
              </tr>
              <tr>
                <td>- Đơn vị công tác: <strong><?=$thongtin[0]['TenPhongBan']?></strong></td>
              </tr>
            </table><br />
        </div>
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>
            <th width="50px">Mã</th>
            <th width="430px">Tên thuốc - VTYT</th>
            <th width="70px">ĐVT</th>
            <th width="100px">Số lượng</th>
          </tr>
          <tbody id="tbody_1">
              <?php
			  $i=0;
			  	foreach($thuoc as $row){
					$i++;
					if($row['MaThuoc']==''){
						$i=0;
					?>
                      <tr>
                        <td colspan="5"><strong><?=$row['TenGoc']?></strong></td>
                      </tr>
                    <?php
					}else{
					?>
					 <tr>
						<td><?=$i?></td>
						<td><?=$row['MaThuoc']?></td>
						<td><?=$row['TenGoc']?></td>
						<td><?=$row['TenDonViTinh']?></td>
						<td><?=$row['SoLuong']?></td>
					  </tr>
					<?php
					}
					
				}
			  
			  ?>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			    <td colspan="4" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>
			  </tr>
			  <tr>
			    <td style="text-align:center"><strong>TRƯỞNG KHOA DƯỢC</strong></td>
			    <td style="text-align:center"><strong>NGƯỜI PHÁT</strong></td>
			    <td style="text-align:center"><strong>NGƯỜI LĨNH</strong></td>
			    <td style="text-align:center"><strong>TRƯỞNG <?=$tenkhoa[0]['TenPhongBan']?></strong></td>
			  </tr>
			  <tr>
			    <td><br><br><br><br></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
			    <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td style="text-align:center"> <strong><?=$thongtin[0]['HoTenNguoiTao']?></strong></td>
				<td>&nbsp;</td>
			  </tr>
		</table>
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->
   

</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
	 print_preview();
	});
</script>
</html>
