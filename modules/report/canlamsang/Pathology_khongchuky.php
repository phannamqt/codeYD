<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}

</style>
</head>
 
<body style=" margin-left:55px;">
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

        $params2 = array(get_system_one_config("GD2_ChuKyBS_GPB"));
        $store_name2="{call GD2_NhanVien_SelectAll_ByID_NhanVien(?)}";//tao bien khai bao store
        $get_thongtinluotkham2=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham2= $excute2->get_as_array();//Tra ve 
		if($thongtinluotkham[0]["MaVietTat"]=="PAP" ){
            $tieude="PHIẾN ĐỒ ÂM ĐẠO";
            $chucnang="PAP SMEAR";
        }
        else if($thongtinluotkham[0]["MaVietTat"]=="FANC" ){
            $tieude="KẾT QUẢ CHẨN ĐOÁN TẾ BÀO HỌC";
            $chucnang="FIND NEEDLE ASPIRATION CYTOLOGY";
        }
        else if($thongtinluotkham[0]["MaVietTat"]=="BYO" ){
            $tieude="KẾT QUẢ CHẨN ĐOÁN MÔ BỆNH HỌC";
            $chucnang="HISTOPATHOLOGY";
        }else{
            $tieude=$thongtinluotkham[0]["ReportName"];
            $chucnang='';
        }
        //echo($thongtinluotkham[0]["chuky_bacsy"]);
    ?>
<?=HeaderReportA4()?>
    <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
    
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:14px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px;padding-left:10px;color:#036">
                Ngày lấy bệnh phẩm: <?php
                    if($thongtinluotkham[0]["NgayGioChanDoan"]!=""){
                        echo $thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
                    }
                    ?>  <br><br>
                Vị trí lấy mẫu bệnh phẩm: <?=$thongtinluotkham[0]["GhiChu"]?><br><br>
                Chẩn đoán lâm sàng: <?=$thongtinluotkham[0]["ChanDoan"]?><br><br>
            	<b style="font-size:15px;color:#00b38b">ĐÁNH GIÁ MẪU BỆNH PHẨM</b>
                <br />
                <pre><i style="color:black;font-size:14px"><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
                <br /><br />
                <b style="font-size:15px;color:#00b38b">KẾT LUẬN</b><br />
                <pre><b style="color:black;font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
			</td> 
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
             	 <br />
                
            </td>             
         </tr>       
         <tr>
                
                <td align="center" >
                  
                </td>
                <td align="center">
                     <i>
                    In từ dữ liệu gốc<br />
                    Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i><br>
                   <b>
                    BÁC SĨ GIẢI PHẪU BỆNH
                 </b>
                 <br />
                 <div style="height:80px"></div>
                 <br />                 
                 <b style="color:red"><b style="color:red">BS. <?=$thongtinluotkham2[0]["HoLotNhanVien"].' '.$thongtinluotkham2[0]["TenNhanVien"] ?></b></b>
                
                </td>
            </tr>   

     </table>
   
    
    <script type="application/javascript">
		$(document).ready(function() {
			//load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"nv_chandoan");			
			 //load_sign('<?=$thongtinluotkham2[0]["HinhChuKy"]?>',"bs_chandoan");
			
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  /><div style="height:7px"></div> ');
			}
			
	 		
			 	
				print_preview();
			
				
		});
	</script>
</body>
</html>
 