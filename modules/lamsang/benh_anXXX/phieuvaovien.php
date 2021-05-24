<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow: auto;
   
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
input[type="text"]:hover, input[type="text"]:focus, select:hover, select:focus, textarea:hover, textarea:focus {
    border: 0 0 1px 0 solid!important;
    box-shadow: 0 1px 0 0 blue!important;
}
input[type="text"], textarea, select {
   
    font-size: 13px !important;
}
.text_1{
    border-top-width: 0px!important;
    border-left-width: 0px!important;
    border-right-width: 0px!important;
    
    box-shadow: 0px 0px 0px 0px!important ;
   
    /*border-style:dotted!important;*/
}

</style>
</head>
 
<body id="wrapper">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan_phieuvaovien(?)}";//tao bien khai bao store
        
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		 $params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_PhieuVaoVien_SelectAll(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinbenhnhan2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan2= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		$params3 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_DauHieuSinhTon_SelectByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbenhnhan3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($_GET["id_luotkham"]);
        $params4 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name4="{call GD2_getmathe_sothe(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan4=$data->query( $store_name4,$params4);//Goi store
        $excute4= new SQLServerResult($get_thongtinbenhnhan4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinbenhnhan4[0]["SoThe"]);

        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan='".$_GET["id_benhnhan"]."';";
		echo "window.id_kham='".$_GET["id_kham"]."';";
		echo "window.id_luotkham='".$_GET["id_luotkham"]."';";
        echo "window.sothe='".$thongtinbenhnhan4[0]["SoThe"]."';";
        echo "</script>";
		
         if($thongtinbenhnhan[0]["NgayThangNamSinh"]!=''){
            $thongtinbenhnhan[0]["NgayThangNamSinh"]=$thongtinbenhnhan[0]["NgayThangNamSinh"]->format("d-m-Y");
            $data=$thongtinbenhnhan[0]["NgayThangNamSinh"];
            list($day, $month, $year) = explode("-", $data);
        }
        else{
            $day="";
            $month="";
            $year= $thongtinbenhnhan[0]["NamSinh"];

        }
		
		if(empty( $thongtinbenhnhan2 ) ){
		$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]="";
		$thongtinbenhnhan2[0]["HanSD_TuNgay"]="";
		$thongtinbenhnhan2[0]["HanSD_DenNgay"]="";
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]="";
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]="";

		echo "<script type='text/javascript'>";
		echo "window.bhyt='';";
		 echo "</script>";
		}
		else{
			$thongtinbenhnhan2[0]["LoaiDoiTuongKham"]=$thongtinbenhnhan2[0]["LoaiDoiTuongKham"];
		$thongtinbenhnhan2[0]["Ten_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ten_KCB_BanDau"];
		$thongtinbenhnhan2[0]["Ma_KCB_BanDau"]=$thongtinbenhnhan2[0]["Ma_KCB_BanDau"];
		echo "<script type='text/javascript'>";
		echo "window.bhyt='".$thongtinbenhnhan2[0]["SoThe"]."';";
		 echo "</script>";
		 if($thongtinbenhnhan2[0]["HanSD_TuNgay"]==""){
			$thongtinbenhnhan2[0]["HanSD_TuNgay"]="";
			}
			else{
				$thongtinbenhnhan2[0]["HanSD_TuNgay"]=$thongtinbenhnhan2[0]["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"]);
				}
		if($thongtinbenhnhan2[0]["HanSD_DenNgay"]==""){
			$thongtinbenhnhan2[0]["HanSD_DenNgay"]="";
			}
			else{
				$thongtinbenhnhan2[0]["HanSD_DenNgay"]=$thongtinbenhnhan2[0]["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);
				}
		}
		if(empty( $thongtinbenhnhan3 ) ){
			//echo("1");
		$mach="";
		$nhietdo="";
		$huyetap="";
		$huyetap2="";
		$nhiptho="";
		$cannang="";
		}
		else{
			$mach=$thongtinbenhnhan3[0]["Mach"];
			$nhietdo=$thongtinbenhnhan3[0]["ThanNhiet"];
			$huyetap=$thongtinbenhnhan3[0]["Ps"];
			$huyetap2=$thongtinbenhnhan3[0]["Pd"];
			$nhiptho=$thongtinbenhnhan3[0]["NhipTho"];
			$cannang=$thongtinbenhnhan3[0]["CanNang"];
		}



        if(!isset($thongtinbenhnhan2[0]["NgayVaoVien"]) ){    
      
        list($ho,$mi)=explode(':',$thongtinbenhnhan4[0]["GioBatDauKham"]->format('H:i'));
        $ngaykham=$thongtinbenhnhan4[0]["GioBatDauKham"]->format('d/m/y');

        }else{    
         $ngaykham=$thongtinbenhnhan2[0]["NgayVaoVien"]->format('d/m/y');
        list($ho,$mi)=explode(':',$thongtinbenhnhan2[0]["NgayVaoVien"]->format('H:i'));
         }


       

        if(!isset($thongtinbenhnhan2[0]["DiaChiBaoTin"]) || $thongtinbenhnhan2[0]["DiaChiBaoTin"]==''){    
            $thongtinbenhnhan2[0]["DiaChiBaoTin"]=$thongtinbenhnhan[0]["DiaChiBaoTin"];
        }else{    
            $thongtinbenhnhan2[0]["DiaChiBaoTin"]=$thongtinbenhnhan2[0]["DiaChiBaoTin"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"])){    
            $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"]="";
        }else{    
           $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"]=$thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"];
         }
         if(!isset($thongtinbenhnhan2[0]["LyDoVaoVien"])){    
            $thongtinbenhnhan2[0]["LyDoVaoVien"]="";
        }else{    
           $thongtinbenhnhan2[0]["LyDoVaoVien"]=$thongtinbenhnhan2[0]["LyDoVaoVien"];
         }
         if(!isset($thongtinbenhnhan2[0]["QuaTrinhBenhLy"])){    
            $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]= $thongtinbenhnhan4[0]["QuaTrinhBenhLy"];
        }else{    
           $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]=$thongtinbenhnhan2[0]["QuaTrinhBenhLy"];
         }
         if(!isset($thongtinbenhnhan2[0]["TienSuBenhBanThan"])){    
            $thongtinbenhnhan2[0]["TienSuBenhBanThan"]=$thongtinbenhnhan[0]["TienSu"];
        }else{    
           $thongtinbenhnhan2[0]["TienSuBenhBanThan"]=$thongtinbenhnhan2[0]["TienSuBenhBanThan"];
         }
         if(!isset($thongtinbenhnhan2[0]["TienSuBenhGiaDinh"])){    
            $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]= $thongtinbenhnhan[0]["TienSuNguoiThan"];
        }else{    
           $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]=$thongtinbenhnhan2[0]["TienSuBenhGiaDinh"];
         }
         if(!isset($thongtinbenhnhan2[0]["KhamXetToanThan"])){    
            $thongtinbenhnhan2[0]["KhamXetToanThan"]="";
        }else{    
           $thongtinbenhnhan2[0]["KhamXetToanThan"]=$thongtinbenhnhan2[0]["KhamXetToanThan"];
         }
         if(!isset($thongtinbenhnhan2[0]["KhamXetCacBoPhan"])){    
            $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]="";
        }else{    
           $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]=$thongtinbenhnhan2[0]["KhamXetCacBoPhan"];
         }
         if(!isset($thongtinbenhnhan2[0]["TomTatKQCLS"])){    
            $thongtinbenhnhan2[0]["TomTatKQCLS"]=$thongtinbenhnhan4[0]["CLS"];
        }else{    
           $thongtinbenhnhan2[0]["TomTatKQCLS"]=$thongtinbenhnhan2[0]["TomTatKQCLS"];
         }
         if(!isset($thongtinbenhnhan2[0]["DaXuLy"])){    
            $thongtinbenhnhan2[0]["DaXuLy"]=$thongtinbenhnhan4[0]["XuLyThuoc"];
        }else{    
           $thongtinbenhnhan2[0]["DaXuLy"]= $thongtinbenhnhan2[0]["DaXuLy"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChuY"])){    
            $thongtinbenhnhan2[0]["ChuY"]="";
        }else{    
           $thongtinbenhnhan2[0]["ChuY"]=$thongtinbenhnhan2[0]["ChuY"];
         }
         if(!isset($thongtinbenhnhan2[0]["ChanDoanVaoVien"])){    
            $thongtinbenhnhan2[0]["ChanDoanVaoVien"]=$thongtinbenhnhan4[0]["ChanDoanVaoVien"];
        }else{    
           $thongtinbenhnhan2[0]["ChanDoanVaoVien"]=$thongtinbenhnhan2[0]["ChanDoanVaoVien"];
         }
         if(!isset($thongtinbenhnhan2[0]["ID_PhongBan"])){    
            $thongtinbenhnhan2[0]["ID_PhongBan"]="0";
        }else{    
           $thongtinbenhnhan2[0]["ID_PhongBan"]=$thongtinbenhnhan2[0]["ID_PhongBan"];
         }
		
		if(!isset($thongtinbenhnhan2[0]["TenPhongKham"])){    
            $thongtinbenhnhan2[0]["TenPhongKham"]=$thongtinbenhnhan4[0]["phongkham"];
        }else{    
           $thongtinbenhnhan2[0]["TenPhongKham"]=$thongtinbenhnhan2[0]["TenPhongKham"];
         }
         if(!isset($thongtinbenhnhan2[0]["ID_BacSiDieuTri"])){    
            $thongtinbenhnhan2[0]["ID_BacSiDieuTri"]="0";
        }else{    
           $thongtinbenhnhan2[0]["ID_BacSiDieuTri"]=$thongtinbenhnhan2[0]["ID_BacSiDieuTri"];
         }

         if(!isset($thongtinbenhnhan2[0]["Id_PhieuVaoVien"])){    
            $Id_PhieuVaoVien="";
        }else{    
           $Id_PhieuVaoVien="*";
         }
  
    ?>


   <table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:100%; text-align:left">
				<img src="<?php echo $_SESSION["com"]["LogoBenhVien"]?>" style="<?php echo $_SESSION["com"]["LogoBenhVienCSS"]?>"><br>
                <span style="<?php echo $_SESSION["com"]["TenBenhVienCSS"]?>"><?php echo $_SESSION["com"]["TenBenhVien"]?><br /></span>
				<span style="<?php echo $_SESSION["com"]["DiaChiCSS"]?>"><?php echo $_SESSION["com"]["DiaChi"]?><br /></span>
                <span style="<?php echo $_SESSION["com"]["SoDTCSS"]?>"><?php echo $_SESSION["com"]["SoDT"]?><br /></span>
             </td>
         </tr>
               
     </table>   

     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">PHIẾU KHÁM BỆNH VÀO VIỆN</span>
                <br /><?=$Id_PhieuVaoVien?>
                <span style="font-weight:bold;font-size:20px;"><input id="phongkham" name="phongkham"  tabindex="21" type="text_checkbox" style="width:170px;"></span>
                <span style="font-weight:bold;font-size:20px; margin-left:35px"><input id="phongkham2" name="phongkham2"  tabindex="100" type="text_checkbox" style="width:170px;"></span>
                <button id="add_temp" class="add_temp" style="height:23px;width:23px;margin-left: 30px;">Thêm</button>
                 <button id="chendulieu" style="margin-left:5px;">Chèn dữ liệu mẫu</button>
        		 <button id="luumau" style="margin-left:5px;">Lưu làm dữ liệu mẫu</button>
                
             </td>
         
         </tr>    
     </table>
    <table class="container"cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">        
         <tr>
            <td colspan="2"><b>I.<?php lang('hchinh')?>:</b></td>
            <td style="padding-left: 11px;"><?php lang('tuoi')?></td>
         </tr>
         <tr>
            <td>1.<?php lang('hteninhoa')?>:<b style="margin-left: 10px;"><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>2.<?php lang('sinhngay')?>:
                            <input style="width:18px;text-align:center;" type="text" id="ngay1" name="ngay1" value="<?php echo substr($day, 0,1)?>"   maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="ngay2" name="ngay2" value="<?php echo substr($day, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang1" name="thang1" value="<?php echo substr($month, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="thang2" name="thang2" value="<?php echo substr($month, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center" type="text" id="nam1" name="nam1" value="<?php echo substr($year, 0,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam2" name="nam2" value="<?php echo substr($year, 1,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam3" name="nam3" value="<?php echo substr($year, 2,1)?>" maxlength="1" > 
                            <input style="width:18px;text-align:center;" type="text" id="nam4" name="nam4" value="<?php echo substr($year, 3,1)?>" maxlength="1" > 
            </td>
           
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tuoi1" name="tuoi1" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 0,1)?>"  maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tuoi2" name="tuoi2" value="<?php echo substr($thongtinbenhnhan[0]["Tuoi"], 1,1)?>"  maxlength="1" > 

            </td>
         </tr>
         <tr>
            <td>3.<?php lang('gioitinh')?>: &nbsp;&nbsp;&nbsp;&nbsp;   <?php
                                    if($thongtinbenhnhan[0]["GioiTinh"]=="0"){
                                       /* $("#nam").prop('checked', true);*/
                                      $male_status = 'checked';
                                      $female_status = 'unchecked';
                                    }
                                    else{
                                        $male_status = 'unchecked';
                                        $female_status = 'checked';
                                    }

                                ?>
                                a. <?php lang('nam')?> <input id="nam" style="vertical-align: middle;width:10px" lang="nam" type="radio" name="sex" <?PHP print $male_status; ?> value="male" > 
                                b. <?php lang('nu')?>  <input id="nu"  style="vertical-align: middle;width:10px" lang="nu" type="radio" name="sex" <?PHP print $female_status; ?> value="female">
                                
            </td>
            <td>4.Nghề nghiệpxxxx: <b><?= $thongtinbenhnhan[0]["TenNgheNghiep"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="nghe1" name="nghe1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="nghe2" name="nghe2" maxlength="1" > 
            </td>
         </tr>
         <tr>
            <td>5.<?php lang('dantoc')?>:    <b><?= $thongtinbenhnhan[0]["TenDanToc"]?></b>
                              <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text"  id="dantoc1" name="dantoc1" maxlength="1" > 
                              <input style="width:18px;text-align:center;float:right" type="text"  id="dantoc2" name="dantoc2" maxlength="1" > 
            </td>
            <td>6.<?php lang('qtich')?>: <b><?= $thongtinbenhnhan[0]["TenQuocTich"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="quoctich1" name="quoctich1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="quoctich2" name="quoctich2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>7.<?php lang('dchi')?>: <b><?php echo $thongtinbenhnhan[0]["DiaChi"]?></b></td>
            <td><?php lang('xavaphuong')?>: <b><?= $thongtinbenhnhan[0]["TenXaPhuong"]?></b></td>
             <td>
                <input style="width:18px;text-align:center;" type="text" id="xa1" name="xa1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="xa2" name="xa2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>
                <?php lang('quanhuyen')?>:  <b><?= $thongtinbenhnhan[0]["TenQuanHuyen"]?></b>
                             <input style="width:18px;text-align:center;float:right;margin-right:10px" type="text" id="quan1" name="quan1" maxlength="1" > 
                             <input style="width:18px;text-align:center;float:right" type="text" id="quan2" name="quan2" maxlength="1" >
            </td>
            <td><?php lang('tinhvathanh')?><b><?= $thongtinbenhnhan[0]["TenTinhThanhPho"]?></b></td>
            <td>
                <input style="width:18px;text-align:center;" type="text" id="tinh1" name="tinh1" maxlength="1" > 
                <input style="width:18px;text-align:center;" type="text" id="tinh2" name="tinh2" maxlength="1" >
            </td>
         </tr>
         <tr>
            <td>8.<?php lang('noilamviec')?>:<b><?= $thongtinbenhnhan[0]["TenCty"]?></b></td>
            <td>9.Đối tượng:<b><?= $thongtinbenhnhan4[0]["LoaiDoiTuongKham"]?></b></td>
            <td></td>
         </tr>
         <tr>
            <td>10.<?php lang('sothebhyt')?>: <input style="width:40px;text-align:center;" type="text" id="bhyt1" name="bhyt1"  > 
                                <input style="width:40px;text-align:center" type="text" id="bhyt2" name="bhyt2"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt3" name="bhyt3"  > 
                                <input style="width:40px;text-align:center;" type="text" id="bhyt4" name="bhyt4"  > 
                                <input style="width:70px;text-align:center;" type="text" id="bhyt5" name="bhyt5" > 
            </td>
         </tr>
         </table>
          <table  class="container" cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#036;;font-size:13px">
            <tr>
                <td><?php lang('bhytgtritu')?>:</td>
                <td><input name="bhyttu"id="bhyttu"type="text" value="<?= $thongtinbenhnhan2[0]["HanSD_TuNgay"]?>" class="text_1"style="width:90%;text-align:center"></td>
                <td colspan="2"><?php lang('den')?>:</td>
                <td><input name="bhytden" id="bhytden"type="text" value="<?= $thongtinbenhnhan2[0]["HanSD_DenNgay"]?>" class="text_1" style="width:53%;text-align:center"></td>
            </tr>
             <tr>
                <td style="width:200px">Nơi khám chữa bệnh ban đầu:</td>
                <td><input type="text" name="noikhambandau" value="<?= $thongtinbenhnhan2[0]["Ten_KCB_BanDau"]?>"id="noikhambandau"class="text_1" style="width:90%;text-align:center"></td>
                <td colspan="2"><?php lang('makcbbd')?>:</td>
                <td><input type="text" name="makcbbd" value="<?= $thongtinbenhnhan2[0]["Ma_KCB_BanDau"]?>" class="text_1"style="width:53%;text-align:center"></td>
             </tr>
       
         <tr>
            <td colspan="3"><b><i>11.<?php lang('htdchinguoinha')?>:</i></b></td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="nguoicanbaotin"  tabindex="1"id="nguoicanbaotin" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["DiaChiBaoTin"]?></textarea></td>
         </tr>
         <tr>
            <td>12.<?php lang('denkhamluc')?>: </td>
            <!-- <td><input maxlength="2" type="text" name="gio"  tabindex="2"id="gio" value="<?php echo date("H") ?>" class="text_1"style="width:23%;text-align:center"> -->
            <td><input maxlength="2" type="text" name="gio"  tabindex="2"id="gio" value="<?=$ho?>" class="text_1"style="width:23%;text-align:center">
            <?php lang('gio')?>
            <!-- <input type="text"maxlength="2" name="phut" id="phut" tabindex="3" value="<?php echo date("i") ?>" class="text_1"style="width:23%;text-align:center"> -->
            <input type="text"maxlength="2" name="phut" id="phut" tabindex="3" value="<?=$mi ?>" class="text_1"style="width:23%;text-align:center">
            <?php lang('phut')?></td>
            <td ><?php lang('ngay')?> </td>
            <td><input type="text" id="ngay" name="ngay"  tabindex="4"value="<?php echo $ngaykham ?>" class="text_1"style="width:59%;text-align:center"></td>
         </tr>
         <tr>
            <td colspan="2">13.<?php lang('cdoannoigthieu')?>:</td>
         </tr>
         <tr>
            <td colspan="5"><textarea name="noigioithieu" id="noigioithieu" tabindex="5" style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChanDoanNoiGioiThieu"] ?></textarea></td>
        </tr>
         <tr>
            <td colspan="3"><b>II. <?php lang('lydovvien')?>
:</b></td>
            
         </tr>
         <tr>
            <td colspan="5"><textarea  id="lydovaovien"  name="lydovaovien"  tabindex="6"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["LyDoVaoVien"]?></textarea></td>
        </tr>
        </tr>
        
        <tr>
            <td><b>III.<?php lang('hoibenh')?>:</b></td>
        </tr>
        <tr>
            <td colspan="3">1.<?php lang('qtrinhbly')?>:</td>
           
         </tr>
         <tr>
             <td colspan="5"><textarea name="quatrinhbenhly"  id="quatrinhbenhly" tabindex="7"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["QuaTrinhBenhLy"]?></textarea></td>
         </tr>
        </tr>
        
        <tr>
            <td>2.<?php lang('tsubenh')?>:</td>
        </tr>
        <tr>    
            <td colspan="4">- <?php lang('banthan')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea  name="banthan" id="banthan" tabindex="8" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["TienSuBenhBanThan"]?></textarea></td>
        </tr>
        <tr>    
            <td colspan="4">- <?php lang('gdinh')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="giadinh" id="giadinh" tabindex="9" style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["TienSuBenhGiaDinh"]?></textarea></td>
        </tr>
        <tr>
            <td><b>IV.<?php lang('khamxet')?>:</b></td>
        </tr>
        <tr>
            <td colspan="4">1.<?php lang('toanthan')?>:</td>
            <TH ROWSPAN="4" style="padding-right: 16px;">
                <fieldset style="width:185px;height:120px;">
                    <div>
                        <div ><label>Mạch:</label><input maxlength="3"  tabindex="12"value="<?=$mach?>"type="text" name="mach" id="mach"class="text_1"style="width:44%;text-align:center">lần/phút</div>
                        <div ><label>Nhiệt độ:</label><input maxlength="2"  tabindex="13" value="<?=$nhietdo?>" type="text" name="nhietdo" id="nhietdo"class="text_1"style="width:56%;text-align:center">°C</div> 
                         <div ><label>Huyết áp:</label><input type="text"  tabindex="14"value="<?=$huyetap?>" name="huyetap"id="huyetap" class="text_1"style="width:17%;text-align:center">/<input type="text" name="huyetap2"id="huyetap2"value="<?=$huyetap2?>" tabindex="15"class="text_1"style="width:16%;text-align:center">mmHg</div> 
                          <div ><label>Nhịp thở:</label><input maxlength="3"  tabindex="16"value="<?=$nhiptho?>" type="text" name="nhiptho"id="nhiptho" class="text_1"style="width:34%;text-align:center">lần/phút</div> 
                           <div ><label>Cân nặng:</label><input maxlength="4"  tabindex="17"value="<?=$cannang?>" type="text" name="cannang"id="cannang" class="text_1"style="width:52%;text-align:center">Kg</div> 
                    </div>
                   
               </fieldset>
           </TH>
        </tr>
        <tr>
            <td colspan="4"><textarea id="toanthan" name="toanthan"  tabindex="10"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["KhamXetToanThan"]?></textarea></td>
            
        </tr>
        <tr>
            <td colspan="4">2.<?php lang('cacbphan')?>:</td>
        </tr>
        <tr>
            <td colspan="4"><textarea id="cacbophan" name="cacbophan"  tabindex="11"style="width:97%;height:40px"><?= $thongtinbenhnhan2[0]["KhamXetCacBoPhan"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">3.<?php lang('tomtatkqclsang')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="tomtat" id="tomtat" tabindex="18"style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["TomTatKQCLS"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">4.<?php lang('cdvv')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuandoanvaovien" id="chuandoanvaovien" tabindex="19" style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChanDoanVaoVien"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="3">5.<?php lang('daxlythuoc')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="daxuly" id="daxuly" tabindex="20" style="width:97%;height:70px"><?= $thongtinbenhnhan2[0]["DaXuLy"]?></textarea></td>
        </tr>
        <tr>
            <td colspan="1">6.<?php lang('chodtritaikhoa')?>:</td>
        
            <td colspan="1"><span class="custom-combobox">
                   				 <input id="phongban" name="phongban"  tabindex="21" type="text_checkbox" style="width:170px;">
                            </span> 
                            
            </td>
        </tr>
        <tr>
            <td colspan="1">7.<?php lang('bsdieutri')?>(Chọn tên BS điều trị trước khi chọn khoa nếu Bác sĩ không thuộc khoa đang chọn):</td>
        
            <td colspan="1"><span class="custom-combobox">
                                 <input id="bsdieutri" name="bsdieutri"  tabindex="22" type="text_checkbox" style="width:170px;">
                            </span> 
                            
            </td>
        </tr>
         <tr>
            <td colspan="1">8.Loại bệnh án:</td>
            <td colspan="1"><input id="loaibenhannoitru" name="loaibenhannoitru"  tabindex="23" type="text_checkbox" style="width:170px;"></tr>
        <tr>
            <td colspan="3">9.<?php lang('chuy')?>:</td>
        </tr>
        <tr>
            <td colspan="5"><textarea name="chuy" tabindex="24"id="chuy"lang="end"style="width:97%;height:20px"><?= $thongtinbenhnhan2[0]["ChuY"]?></textarea></td>
        </tr>
     </table>
      <table cellpadding="0" cellspacing="0" border="0" style="color:#036;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">           
         <tr>
              <td valign="middle"><button type="button" id="luuphieu"><?php lang('luuphkham')?></button>
                <button type="button" id="taobenhannoitru">Tạo BA nội trú</button>
                <button type="button" id="inphieu"><?php lang('inphieu')?></button>
                <button type="button" id="laylaidulieu"><?php lang('laylaidllink')?></button>
                <button type="button" id="taobenhannhanh">Tạo BA nội trú nhanh</button>
                <span id="In_CoChuKy"><input type="checkbox" checked="checked" /> <?php lang('inchuky')?></span>
                     
              </td>
             <td style="width:35%;text-align:right;padding-right:20px" valign="top">
                 <i>
                    
                   Đà Nẵng, Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 
                    <h3 style="margin-top:0px;padding-right:30px">BÁC SĨ KHÁM BỆNH</h3>
                
                 
            </td>             
         </tr>            
     </table>
     <br><br><br>
</body>
 <script type="application/javascript">
        $(document).ready(function() {
			$("#chendulieu,#luumau").button();
            $("#inphieu,#taobenhannhanh,#laylaidulieu").button();
            $("#luuphieu").button();
			window.chophepluu=0;
			window.dangluu=0;
			<?php
				if(isset($thongtinbenhnhan2[0]["DaNhapVien"])){
					echo "window.danhapvien=".$thongtinbenhnhan2[0]["DaNhapVien"].";";
					
					if($thongtinbenhnhan2[0]["ID_LoaiBenhAnNoiTru"]!=''){
						echo "window.ID_LoaiBenhAnNoiTru=".$thongtinbenhnhan2[0]["ID_LoaiBenhAnNoiTru"].";";
					}else{
						echo "window.ID_LoaiBenhAnNoiTru=0;";
					}
				}else{
					echo "window.danhapvien=0;";	
					echo "window.ID_LoaiBenhAnNoiTru=0;";	
				}
			?>
				if(window.danhapvien==1){
					 $('#taobenhannhanh').button({disabled:true});
				}
            $("#taobenhannoitru").button({disabled:true});
			$("#ngay").datepicker({dateFormat: $.cookie("ngayJqueryUi")});
			number_textbox("#gio");	
			number_textbox("#phut");	
			number_textbox("#mach");	
			number_textbox("#nhietdo");	
			number_textbox("#huyetap");	
			number_textbox("#huyetap2");
			number_textbox("#nhiptho");	
			number_textbox("#cannang");	
            $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['id_luotkham']?>').done(function(data){
				if(data=='false'){
				
				}else{
					$("#taobenhannoitru,#luuphieu,#taobenhannhanh").button({disabled:true});
				}
			});
			$(document).keyup(function(e) {
				if(jwerty.is("ctrl+shift+f",e)){
					$("#luuphieu").button({disabled:false});
					window.chophepluu=1;
				}
			});
			if(sothe!=''){
							
							var rs=sothe.split("");
							$("#bhyt1").val(rs[0]+rs[1]+rs[2]);
							$("#bhyt2").val(rs[3]+rs[4]);
							$("#bhyt3").val(rs[5]+rs[6]);
							$("#bhyt4").val(rs[7]+rs[8]+rs[9]);
							$("#bhyt5").val(rs[10]+rs[11]+rs[12]+rs[13]+rs[14]);
						}else{
							$("#bhyt1").val('');
							$("#bhyt2").val('');
							$("#bhyt3").val('');
							$("#bhyt4").val('');
							$("#bhyt5").val('');
							}                    
			//create_combobox('#phongban', '#phongban1', ".phong_ban", "#phong_ban", create_phongban, 200, 400, 'Phòng ban', 'data_phongban');
			
			create_combobox_new('#phongkham',create_phongkham,'bw','','data_phongkham',<?=$thongtinbenhnhan2[0]["TenPhongKham"]?>);
			//alert(<?=$thongtinbenhnhan2[0]["ID_PhongBan"]?>);
			create_combobox_new('#phongban',create_phongban,'bw','','data_phongban',<?=$thongtinbenhnhan2[0]["ID_PhongBan"]?>);
			create_combobox_new('#bsdieutri',create_bacsi,'bw','','data_bacsi&id_khoa=0',<?=$thongtinbenhnhan2[0]["ID_BacSiDieuTri"]?>);
			create_combobox_new('#loaibenhannoitru',create_loaibenhan,'bw','','data_loaibenhannoitru',window.ID_LoaiBenhAnNoiTru);
			create_combobox_new('#phongkham2',create_teampvv,'bw','','data_template_phieuvv',1);
			
			
		
			$("#taobenhannhanh").click(function(e) {
                if($("#phongban").val()==''){
					alert('Vui lòng nhập phòng ban');
				}else if($("#bsdieutri").val()==''){
					alert('Vui lòng nhập Bác sĩ điều trị');
				}else if($("#loaibenhannoitru").val()==''){
					alert('Vui lòng nhập loại bệnh án nội trú');
				}else{
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['id_luotkham']?>').done(function(data){	
						if((data=='false' || window.chophepluu==1) && window.dangluu==0){
							window.dangluu=1;
							$('#taobenhannhanh').button({disabled:true});
							$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+<?=$_GET['id_benhnhan']?>).done(function(data){
								data = $.trim(data);
								data = data.split(';');
								if(data[1]=='KetThucKham'){
									phancach="";
								dataToSend ='{';
								key1='';
								i=0;
								ngay= convert_to_datejs($("#ngay").val())
								ngay=$.datepicker.formatDate('yy-mm-dd', new Date(ngay)); 
								$('.container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
									if(i>0){
										phancach=","; 
									} 
								 dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
								 i++;
								 })
								 dataToSend += phancach + '"id_luotkham":"' + id_luotkham + '"';
								 dataToSend += phancach + '"id_kham":"' + id_kham + '"';
								 dataToSend += phancach + '"id_benhnhan":"' + id_benhnhan + '"';
								 dataToSend += phancach + '"noilamviec":"' + '<?= $thongtinbenhnhan[0]["TenCty"]?>' + '"';
								 dataToSend += phancach + '"ngayvaovien":"' + ngay+" "+$("#gio").val()+":"+$("#phut").val() + '"';
								 dataToSend += phancach + '"vaokhoa":"' + $("#phongban_hidden").val() + '"';
								 dataToSend += phancach + '"bsdieutri":"' + $("#bsdieutri_hidden").val() + '"';
								 dataToSend += phancach + '"vaophongkham":"' + $("#phongkham_hidden").val() + '"';
								 dataToSend += phancach + '"id_loaibenhannoitru":"' + $("#loaibenhannoitru_hidden").val() + '"';
								 dataToSend +='}';
														 
								 dataToSend = jQuery.parseJSON(dataToSend);
								$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_taobenhannhanh&hienmaloi=3',dataToSend)
								.done(function( gridData ) {	
									tooltip_message("Đã lưu");
									parent.postMessage('mobenhannoi;','*');
								})
								.fail(function() {
									window.dangluu=0;
									tooltip_message( "Có lỗi trong quá trình cập nhật" );
									$('#taobenhannhanh').button({disabled:false});
								});
							}else{
								window.dangluu=0;
								alert('Bệnh nhân này đang có lượt khám nội trú chưa thanh toán vui lòng thanh toán trước khi cho nhập viện lại.');
								$('#taobenhannhanh').button({disabled:false});
							}
						}) 
							
						}else{
							window.dangluu=0;
							alert('Lượt khám này đã thanh toán');	
							$('#taobenhannhanh').button({disabled:false});
						}
					});	
				}
            });
          
            //thêm template
			$( "#add_temp" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
			//alert();
		 	links='pages.php?module=danhmuc&view=danh_muc_nhom_template_phieuvaovien&id_form=<?=$_GET['id_form']?>&id_loai=90';
			elem=1 + Math.floor(Math.random() * 1000000000); 
			width=90;
			height=80;   
			//dialog_add_dm("",width,height,elem,links); 
			dialog_add_dm("",width,height,elem,links,load_template);  
		});
         
            setTimeout(function(){
               $("#nguoicanbaotin").focus();
			   },200);
               jwerty.key('tab', false);
       jwerty.key('shift+tab', false);            
       jwerty.key('shift+enter', false);
         $('input[type=text],input[type=text_checkbox],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input, input[type=button]').bind("keyup", function(e) {  
            if ($("input[type=text],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input , input[type=button]").is(":focus")){   
                    
                  if(jwerty.is("shift+tab",e)){
					
                     var tabindex = $(e.target).attr('tabindex');
                   
                     isdisable('pre',tabindex,e)
                     return false;
                 }else if(jwerty.is("shift+enter",e)){					
			  		 e.stopPropagation();		
		 		 }
             }
        })
         
			 $('input[type=text],input[type=text_checkbox],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input, input[type=button]').bind("keypress", function(e) {  
            if ($("input[type=text],#wrapper textarea,#wrapper input[type=checkbox],#wrapper span input , input[type=button]").is(":focus")){   
                    
                   if (jwerty.is("enter",e)||jwerty.is("tab",e)) { 
                        var tabindex = $(e.target).attr('tabindex');
                      
                        isdisable('next',tabindex,e)
                        //alert(tabindex);
                    
                 }
             }
        })
         
           
        });
            $("#laylaidulieu").click(function(){
               $("#nguoicanbaotin").val($('<div>').html("<?=htmlspecialchars (preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan[0]["DiaChiBaoTin"])))?>").text());
			   $("#quatrinhbenhly").val($('<div>').html( "<?=htmlspecialchars (preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan4[0]["QuaTrinhBenhLy"]) )) ?>").text());
               $("#giadinh").val($('<div>').html("<?=htmlspecialchars (preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan[0]["TienSuNguoiThan"])))?>").text());
               $("#chuandoanvaovien").val($('<div>').html("<?= htmlspecialchars (preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan4[0]["ChanDoanVaoVien"])))?>").text());
               $("#tomtat").val($('<div>').html("<?=htmlspecialchars ( preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan4[0]["CLS"])))?>").text());
               $("#daxuly").val($('<div>').html("<?=htmlspecialchars (preg_replace( "/\r|\n/", "", nl2br($thongtinbenhnhan4[0]["XuLyThuoc"])))?>").text());
          })
		
		$("#taobenhannoitru").click(function(){
			$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['id_luotkham']?>').done(function(data){
			if(data=='false'){
            	 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham_check&id_benhnhan='+id_benhnhan).done(function(data){
                 	data = $.trim(data);
                    data = data.split(';');
					var tenbn=JSON.stringify(<?='"'.$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"].'"'?>);
						if(data[1]=='KetThucKham'){
							parent.postMessage('taobenhannoitru;tao_benh_an_noi_tru;'+id_luotkham+';'+id_benhnhan+';;'+id_khoa+'__'+tenkhoa+';'+tenbn+';'+<?= "'".$thongtinbenhnhan4[0]["LoaiDoiTuongKham"]."'"?>+';'+id_bacsi+';add','*');
						}
						else{
							alert("Bệnh nhân đang có lượt khám nội trú,Đề nghị kết thúc khám mới được tạo bệnh án mới");
						}
				 })
			}else{
				alert('Lượt khám đã thanh toán');	 
					 
			}
           })
			
            // parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+id_luotkham+';'+id_benhnhan+';;'+id_khoa+'__'+tenkhoa+';'+<?="'".$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"]."'"?>+'&doituong='+<?= "'".$thongtinbenhnhan4[0]["LoaiDoiTuongKham"]."'"?>+'&bacsydieutri='+id_bacsi+'&oper=add','*');
//laylaidulieu
        })

        $("#inphieu").click(function(){
             if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			var chuky=1;
		}else{var chuky=0;}	
			$.cookie("in_status", "print_preview"); 
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=phieuvaovien&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&id_kham="+id_kham+"&type=report&id_form=10&chuky="+chuky,'PhieuVaoVien');
			$(".frame_u78787878975f").css("width","793px");

        })
		
		//chen du lieu mau
			$("#chendulieu").click(function(e) {
			if($('#template').val()==''){
				alert("Vui lòng chọn dữ liệu mẫu");
				return;
			}
            if(window._tempdata!=''){
				var r = confirm("Việc chèn dữ liệu mẫu này sẽ làm thay đổi các dữ liệu hiện có. \nBạn có chắc chắn muốn chèn dữ liệu mẫu này?");
				if (r == true) {
					$("#lydovaovien").val(lydovv);
					$("#quatrinhbenhly").val(qtrinhbly);
					$("#toanthan").val(toanthan);
					$("#cacbophan").val(bophan);
					//alert($("#lydovaovien").val());
				}
				
				/*window.lydovv=rowData['lydovv'];
				window.qtrinhbly=rowData['qtrinhbly'];
				window.toanthan=rowData['toanthan'];
				window.bophan=rowData['bophan'];*/
			}
			 
        });
			
		//luu du lieu mau
			$("#luumau").click(function(e) {
			if($('#template').val()==''){
				alert("Vui lòng chọn dữ liệu mẫu");
				return;
			}
            if(window._tempdata!=''){
				var r = confirm("Việc lưu dữ liệu mẫu này sẽ làm thay đổi các dữ liệu mẫu hiện có. \nBạn có chắc chắn muốn lưu dữ liệu mẫu này?");
				if (r == true) {
					//=====
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['id_luotkham']?>').done(function(data){
				if(data=='false' || window.chophepluu==1){
				if(window.chophepluu==0){
				  $("#taobenhannoitru,#taobenhannhanh").button({disabled:false});
				}
				phancach="";
				dataToSend ='{';
				key1='';
				i=0;
				ngay= convert_to_datejs($("#ngay").val())
				ngay=$.datepicker.formatDate('yy-mm-dd', new Date(ngay)); 
				$('.container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
					if(i>0){
						phancach=","; 
					} 
				 dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
				 i++;
				 })
				 dataToSend += phancach + '"id_auto_pvv":"' + id_auto_pvv + '"';
				 dataToSend +='}'; 
				  //alert(dataToSend);
				 
				 dataToSend = jQuery.parseJSON(dataToSend);
				  alertObject(dataToSend);
				  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_templatepvv&hienmaloi=3',dataToSend)
					.done(function( gridData ) {	
						tooltip_message("Đã lưu");	
					})
					.fail(function() {
						tooltip_message( "Có lỗi trong quá trình cập nhật" );
					});
				}else{
					alert('Lượt khám này đã thanh toán');	
				}
			 });
					//=========
				}
			}
        });
		
		
        $("#luuphieu").click(function(){
			$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham=<?=$_GET['id_luotkham']?>').done(function(data){
				if(data=='false' || window.chophepluu==1){
				if(window.chophepluu==0){
				  $("#taobenhannoitru,#taobenhannhanh").button({disabled:false});
				}
				phancach="";
				dataToSend ='{';
				key1='';
				i=0;
				ngay= convert_to_datejs($("#ngay").val())
				ngay=$.datepicker.formatDate('yy-mm-dd', new Date(ngay)); 
				$('.container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
					if(i>0){
						phancach=","; 
					} 
				 dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
				 i++;
				 })
				 dataToSend += phancach + '"id_luotkham":"' + id_luotkham + '"';
				 dataToSend += phancach + '"id_kham":"' + id_kham + '"';
				 dataToSend += phancach + '"id_benhnhan":"' + id_benhnhan + '"';
				 dataToSend += phancach + '"noilamviec":"' + '<?= $thongtinbenhnhan[0]["TenCty"]?>' + '"';
				 dataToSend += phancach + '"ngayvaovien":"' + ngay+" "+$("#gio").val()+":"+$("#phut").val() + '"';
				 dataToSend += phancach + '"vaokhoa":"' + $("#phongban_hidden").val() + '"';
				 dataToSend += phancach + '"bsdieutri":"' + $("#bsdieutri_hidden").val() + '"';
				 dataToSend += phancach + '"vaophongkham":"' + $("#phongkham_hidden").val() + '"';
				 dataToSend += phancach + '"id_loaibenhannoitru":"' + $("#loaibenhannoitru_hidden").val() + '"';
				 dataToSend +='}'; 
				  //alert(dataToSend);
				 
				 dataToSend = jQuery.parseJSON(dataToSend);
				  alertObject(dataToSend);
				  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_phieuvaovien&hienmaloi=3',dataToSend)
					.done(function( gridData ) {	
						tooltip_message("Đã lưu");	
					})
					.fail(function() {
						tooltip_message( "Có lỗi trong quá trình cập nhật" );
					});
				}else{
					alert('Lượt khám này đã thanh toán');	
				}
			 });
        })
	
function create_phongban(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên phòng ban'],
            colModel: [
                {name: 'TenPhongBan', index: 'TenPhongBan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_khoa=id;
              var rowData = $("#phongban_grid").getRowData(id);   
            window.tenkhoa=rowData["TenPhongBan"];
             
            create_combobox_new('#bsdieutri',create_bacsi,'bw','','data_bacsi&id_khoa='+id,0);
				            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
       /* $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});*/
        $(elem).jqGrid('bindKeys', {});
    }
	
	//================phong kham
	function create_phongkham(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['<?php lang('pkham')?>'],
            colModel: [
                {name: 'TenPhongKham', index: 'TenPhongKham', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_khoa=id;
              var rowData = $("#phongban_grid").getRowData(id);   
            window.tenpkham=rowData["TenPhongKham"];
            
				            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
       /* $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});*/
        $(elem).jqGrid('bindKeys', {});
    }
	//===ket thuc phong kham
	function create_loaibenhan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên loại bệnh án'],
            colModel: [
                {name: 'TenLoaiBenhAn', index: 'TenLoaiBenhAn', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                //window.id_khoa=id;
              //var rowData = $("#phongban_grid").getRowData(id);   
          //  window.tenpkham=rowData["TenPhongKham"];
            
				            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
       /* $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});*/
        $(elem).jqGrid('bindKeys', {});
    }
	
	
	
    function isdisable(tam,tabindex,e){
          if(tam=='next'){
              tabindex++;
             // alert(tabindex);
          }else{
              tabindex--;
          }
          if($('[tabindex=' +tabindex + ']').prop('disabled')){        
              isdisable(tam,tabindex,e)
          }else{     
                $('[tabindex=' +  tabindex + ']').focus();           
          		 return false;
          }
		   
  }
   function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: [ 'Họ và tên'],
            colModel: [
                
                {name: 'hovaten', index: 'hovaten', hidden: false,width:5},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 1000,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_bacsi=id;

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	//template phieu vao vien
	function create_teampvv(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên template','','','',''],
            colModel: [
              
                {name: 'Tentem', index: 'Tentem', hidden: false,width:5},
				{name: 'lydovv', index: 'lydovv', hidden: true,width:5},
				{name: 'qtrinhbly', index: 'qtrinhbly', hidden: true,width:5},
				{name: 'toanthan', index: 'toanthan', hidden: true,width:5},
				{name: 'bophan', index: 'bophan', hidden: true,width:5},
				
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 1000,
            rowList: [],
            height: 100,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                window.id_auto_pvv=id;
				// alert(id_auto_pvv);
				var rowData = $(this).getRowData(id);
				window.lydovv=rowData['lydovv'];
				window.qtrinhbly=rowData['qtrinhbly'];
				window.toanthan=rowData['toanthan'];
				window.bophan=rowData['bophan'];
				//alert(lydovv);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
				
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	function load_template(){
	create_combobox_new('#phongkham2',create_teampvv,'bw','','data_template_phieuvv',1);
}
    </script>
</html>
 