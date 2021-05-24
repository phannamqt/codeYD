<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 30px;
    padding-left: 99px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:11px Tahoma, Geneva, sans-serif;
}
</style>
</head>

<body>
	<?php
//echo($_GET["ID_HoaDonThueDiary"]);
$IDHoaDonThueDiary=0;
if(isset($_GET["ID_HoaDonThueDiary"]) &&  $_GET["ID_HoaDonThueDiary"]!='null' )
{
   $IDHoaDonThueDiary= $_GET["ID_HoaDonThueDiary"];
}
else
{
   $IDHoaDonThueDiary=0;
 //  echo ('ssss');ID_ThuTraNoMulti

}
//echo($_GET["ID_HoaDonThueDiary"]);
$ID_ThuTraNoMulti="";
if(isset($_GET["ID_ThuTraNoMulti"]) &&  $_GET["ID_ThuTraNoMulti"]!='null' )
{
   $ID_ThuTraNoMulti= $_GET["ID_ThuTraNoMulti"];
}
else
{
   $ID_ThuTraNoMulti="";
 //  echo ('ssss');ID_ThuTraNoMulti

}

        $data= new SQLServer;//tao lop ket noi SQL



$params1 = array($_SESSION['user']['id_user']);//tao param cho store
        $store_name1="{call GD2_GetNhanVien_idnv(?)}";//tao bien khai bao store
        $get_thongtinnv=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinnv= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc



        $params2 = array($_GET["id_ttno"],$_GET["phanloaiHD"],$IDHoaDonThueDiary);//tao param cho store


       // echo ($_GET["ID_HoaDonThueDiary"]);
        $store_name2="{call GD2_LayThongTinHoaDon(?,?,?)}";//tao bien khai bao store
        $get_thongtinnv2=$data->query( $store_name2,$params2);//Goi store
		
        $excute2= new SQLServerResult($get_thongtinnv2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinnv2= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc

$store_name3='';
if($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7')//hóa đơn khám chữa bệnh
{
    $store_name3="{call GD2_HoaDonKham(?)}";
}
elseif($_GET["phanloaiHD"]=='5')//hóa đơn thuốc ngoại trú
{
  $store_name3="{call GD2_donthuoc_HoaDon(?)}";
}
elseif($_GET["phanloaiHD"]=='6')//hóa đơn thuốc nội trú
{
  $store_name3="{call Gd2_HoaDonThuocNoiTru(?)}";
}
elseif(($_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8')&& $_GET["ID_ThuTraNoMulti"]!="" )//hóa đơn bang kee KCBngoaij tgrus
{
  $store_name3="{call GD2_BangKe_KhamChuaBenhNgoaiTru(?)}";
  $params2 = array($ID_ThuTraNoMulti);//tao param cho store
}
elseif($_GET["phanloaiHD"]=='11')//hóa đơn bảng kê thuốc ngoại trú
{
  $store_name3="{call Gd2_HoaDonBangKeThuoc(?)}";
  $params2 = array($ID_ThuTraNoMulti);//tao param cho store
}
elseif($_GET["phanloaiHD"]=='10')//hóa đơn bảng kê thuốc nội trú
{
  $store_name3="{call Gd2_HoaDonBangKeThuoc_NoiTru(?)}";
  $params2 = array($ID_ThuTraNoMulti);//tao param cho store
}

        $get_thongtinnv3=$data->query( $store_name3,$params2);//Goi store
        $excute3= new SQLServerResult($get_thongtinnv3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinnv3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc


?>
  <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif; font-size:14px; text-align:right">
        <tr>
            <td colspan="2" style="height:67px!important"  >&nbsp;</td>
        </tr>
    <?php

foreach ($thongtinnv2 as $row) {
list($d,$m,$y)=explode('-',$row["GioLap"]->format('d-m-Y'));

     echo ('
                <tr >
                <td  colspan="2" width="100%"  style="margin-left:11px; text-align:center">'.'&nbsp;&nbsp;&nbsp;'.$d.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$m.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$y.'</td>
                </tr>

                ');
}

    ?>

  <tr>

            <td colspan="2"  style="height:87px!important" >&nbsp;</td>
        </tr>

      <tr >
                   <td height="13" width="24%">&nbsp;</td>

            <td height="13px!important" width="100%" style="height:16px!important ;margin-left:50px; text-align:left"><?=$thongtinnv2[0]["HoTen"] ?></td>
      </tr>
         <tr >

            <td colspan="2" height="13px!important" width="100%" style="margin-left:10px;height:20px!important ; text-align:left"><?='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$thongtinnv2[0]["TenDonVi"] ?></td>
      </tr>
       <tr >

            <td colspan="2" height="13px!important" width="100%" style="margin-left:10px; height:20px!important ;text-align:left"><?='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$thongtinnv2[0]["MaSoThue"] ?></td>
      </tr>
      <tr >

            <td colspan="2" height="13px!important" width="100%" style="margin-left:10px;height:20px!important ; text-align:left"><?='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$thongtinnv2[0]["DiaChi"] ?></td>
      </tr>
       <tr>

            <td colspan="2"  height="13px!important"  width="100%" style="margin-left:10px; height:20px!important ;text-align:left"><?='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$thongtinnv2[0]["HThucTT"] .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$thongtinnv2[0]["SoTK"]?></td>
      </tr>
     </table>

      </table>
<table cellpadding="0" cellspacing="0" border="0" style="width:90%;font-family:Tahoma, Geneva, sans-serif; font-size:13px; text-align:right">
        <tr>
            <td  > </td>
            <td style="height:70px!important">&nbsp;</td>
        </tr>
     <?php
         $totalTruocVAT =0;



if($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7'||$_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8'||$_GET["phanloaiHD"]=='10')//in chi tiết khám bệnh
   {
      for($i=0;$i<=count($thongtinnv3)-2;$i++){
     //echo( $thongtinnv3[$i]["Ten_Nhom_BHYT"].'          '. $thongtinnv3[$i]["ThanhTien"].'<br>');
         echo (' <tr   style=" border-top:2px solid #000;padding-left: 20px!important; ">
           <td width="240px" colspan="1" style="margin-left:15px; text-align:left">'. $thongtinnv3[$i]["Ten_Nhom_BHYT"].'</td>
            <td width="240px" colspan="1" style="margin-left:15px; text-align:right">'. number_format($thongtinnv3[$i]["ThanhTien"],"0",",",".").'</td>
           </tr>'
           );
          $totalTruocVAT +=$thongtinnv3[$i]["ThanhTienTruocVAT"];
       }

 }
 elseif($_GET["phanloaiHD"]=='5'||$_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='11')//TenDonViTinh SoThuocThucXuat GiaTruocVAT ThanhTienTruocVAT


   {

      for($i=0;$i<=count($thongtinnv3)-2;$i++){
        if($_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='11')
        {

         echo (' <tr  >
           <td  width="430"  style="margin-left:15px; text-align:left">'. $thongtinnv3[$i]["Ten_Nhom_BHYT"].'</td>
           <td   width="82" style="text-align:left">'. $thongtinnv3[$i]["TenDonViTinh"].'</td>
           <td  width="66" colspan="1" style="text-align:left">'. $thongtinnv3[$i]["SoThuocThucXuat"].'</td>
            <td   width="115" style=" text-align:right">'. $thongtinnv3[$i]["GiaTruocVAT"].'</td>
            <td   width="135" style=" text-align:right">'. number_format($thongtinnv3[$i]["ThanhTienTruocVAT"],"0",",",".").'</td>
           </tr>'
           );
       }else
       {
         echo (' <tr  >
           <td  width="430"  style="margin-left:15px; text-align:left">'. $thongtinnv3[$i]["Ten_Nhom_BHYT"].'</td>
           <td   width="82" style="text-align:left">'. $thongtinnv3[$i]["TenDonViTinh"].'</td>
           <td  width="66" colspan="1" style="text-align:left">'. $thongtinnv3[$i]["SoThuocThucXuat"].'</td>
            <td   width="115" style=" text-align:right">'. number_format($thongtinnv3[$i]["GiaTruocVAT"],"0",",",".").'</td>
            <td   width="135" style=" text-align:right">'. number_format($thongtinnv3[$i]["ThanhTienTruocVAT"],"0",",",".").'</td>
           </tr>'
           );
       }
               $totalTruocVAT +=$thongtinnv3[$i]["ThanhTienTruocVAT"];

       }

 }


 //tạo khoảng trắng cách động bằng  cách trừ đi số dòng
   for($i=0;$i<=27-count($thongtinnv3);$i++){
     echo ('  <tr  >
            <td  > </td>
            <td  >&nbsp;</td>
        </tr>'
           );
   }
   // in ra dòng total//.number_format($thongtinnv3[count($thongtinnv3)-1]["ThanhTien"],"0",",",".").

 ?>

<tr>
            <td colspan="2"style="height:5px!important" ><b>&nbsp;</b></td>
        </tr>


     <tr>
     <?php
     //********** phần tông  kết*********
     if($_GET["phanloaiHD"]=='5'||$_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='11')//thuốc ngoại trú)
              {
                 echo ('
            <td id="total_truocVat" colspan="5"style="height:21px!important" ><b>'. number_format($totalTruocVAT,"0",",",".").'</b></td>'
                      );

              }
              elseif ($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7'||$_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8'||$_GET["phanloaiHD"]=='10')
               {//khám chữa bệnh
                echo ('
            <td  colspan="5"style="height:21px!important" ><b>'. number_format($thongtinnv3[count($thongtinnv3)-1]["ThanhTien"],"0",",",".").'</b></td>'
                      );

              }
     ?>
            <!-- <td colspan="5"style="height:21px!important" ><b><?=number_format($totalTruocVAT*$thongtinnv3[count($thongtinnv3)-1]["PhanTramThue"]/100,"0",",","." ) ?></b></td> -->
      </tr>

        <tr >
<?php


 if($_GET["phanloaiHD"]=='5'||$_GET["phanloaiHD"]=='11')//thuốc ngoại trú)
              {
                 echo ('
            <td  align="center" colspan="1"style="height:21px!important; margin-right:20px" ><b>'. number_format($thongtinnv3[count($thongtinnv3)-1]["PhanTramThue"],"0",",",".") .'</b></td>'
                      );

              }
              elseif ($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7'||$_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8'||$_GET["phanloaiHD"]=='10')
               {//khám chữa bệnh
                echo ('
            <td align="center" colspan="1"style="height:21px!important; margin-right:20px"  ><b>&nbsp;</b></td>'
                      );

              }

?>


           <td colspan="4" id='sumVat' style="text-align:right"><b><?=number_format($totalTruocVAT*$thongtinnv3[count($thongtinnv3)-1]["PhanTramThue"]/100,"0",",","." ) ?></b></td>
        </tr>

      <tr>

<?php
     //********** phần tông  kết*********
     if($_GET["phanloaiHD"]=='5'||$_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='11')//thuốc ngoại trú)
              {
                 echo ('
            <td id="sumEnd" colspan="5"style="height:21px!important" ><b>'. number_format(($totalTruocVAT+($totalTruocVAT*$thongtinnv3[count($thongtinnv3)-1]["PhanTramThue"]/100)),"0",",",".").'</b></td>'
                      );

              }
              elseif ($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7'||$_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8'||$_GET["phanloaiHD"]=='10')
               {//khám chữa bệnh
                echo ('
            <td  colspan="5"style="height:21px!important" ><b>'. number_format($thongtinnv3[count($thongtinnv3)-1]["ThanhTien"],"0",",",".").'</b></td>'
                      );

              }

// Phiên ra chữ
$TotalCuoiCung=0;
 if($_GET["phanloaiHD"]=='5'||$_GET["phanloaiHD"]=='6'||$_GET["phanloaiHD"]=='11')//thuốc ngoại trú)
              {
        $TotalCuoiCung=round(($totalTruocVAT+($totalTruocVAT*$thongtinnv3[count($thongtinnv3)-1]["PhanTramThue"]/100)),0,PHP_ROUND_HALF_UP);

              }
              elseif ($_GET["phanloaiHD"]=='1'||$_GET["phanloaiHD"]=='7'||$_GET["phanloaiHD"]=='9'||$_GET["phanloaiHD"]=='8'||$_GET["phanloaiHD"]=='10')
               {//khám chữa bệnh
                $TotalCuoiCung=$thongtinnv3[count($thongtinnv3)-1]["ThanhTien"];
              }


// Phiên ra chữ

     ?>

        </tr>

         <tr>
            <td colspan="5"  id="tongtien" style="height:21px!important;text-align:left" ><b></b></td>
        </tr>
    </table>

    <script type="application/javascript">
		$(document).ready(function() {
			
            $('#tongtien').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('+toWords((<?=$TotalCuoiCung?>).toString())+"đồng"+')');
			load_sign('<?=$thongtinnv[0]["chuky_nhanvien"]?>',"nv_chandoan");
			print_preview();
			
		});
	</script>
</body>
</html>
