<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	padding-left:40px;
	line-height:20px;
	font-size:14px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font-family:Arial, Helvetica, sans-serif;
 font-size:14px;
}.ntrai{
	width:250px;
	float:left;
	
}.nphai{
	float:left;
	width:395px;
	
}.nfull2{
	width:780px;
}
.nfull{
	width:780px;
}
.ntrai2{
	width:250px;
	float:left;
	
}.nphai2{
	float:left;
	width:395px;

	
}.ntest{
	text-align:center;
}
pre{
/*	margin-top:-45px;*/
margin-top: 0px;
margin-bottom: 0px;
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
        $store_name2="{call GD2_SelectKhamThaiByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		if(count($khamthai)==0){
			exit();	
		}
		//print_r($khamthai);
/*		if($thongtinluotkham[0]["NgayGioKetThuc"]){
			$thongtinluotkham[0]["NgayGioKetThuc"]=$thongtinluotkham[0]["NgayGioKetThuc"]->format($_SESSION["config_system"]["ngaythang"]);
		}else{
			$thongtinluotkham[0]["NgayGioKetThuc"]='';
		}*/
   
    ?>

	<?=HeaderReportA4()?>
    <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:14px; width:100%;font-family:Arial, Geneva, sans-serif;padding:5px 0px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px">
            	
                <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td colspan="2" style=" font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#000; font-weight:bold; margin:0px; height:27px">THÔNG TIN BỆNH</td>
                  </tr>
                 <?php
				  if($khamthai[0]["BdmTimMach"]==1 || $khamthai[0]["BdmTieuDuong"]==1 ||$khamthai[0]["BdmBasedow"] || $khamthai[0]["BdmThan"] || $khamthai[0]["BdmRoiLoanDongMau"]==1 || $khamthai[0]["BdmViemGanB"]==1 || $khamthai[0]["BdmViemGanC"]==1 || $khamthai[0]["BdmRubella"]==1 || $khamthai[0]["BdmTamThan"]==1){
				  ?>
                  <tr>
                    <td width="28%" style="vertical-align: top;">Các bệnh đã mắc:</td>
                    <td width="72%" class="data_cacbenhdamac"><?php
                                if($khamthai[0]["BdmTimMach"]==1)
                                    echo "Tim mạch, ";
                                if($khamthai[0]["BdmTieuDuong"]==1)
                                    echo "Đái đường, ";
                                if($khamthai[0]["BdmBasedow"]==1)
                                    echo "Basedow, ";
                                if($khamthai[0]["BdmThan"]==1)
                                    echo "Thận, ";
                                if($khamthai[0]["BdmRoiLoanDongMau"]==1)
                                    echo "Rối loạn đông máu, ";
                                if($khamthai[0]["BdmViemGanB"]==1)
                                    echo "Viêm gan B, ";
                                if($khamthai[0]["BdmViemGanC"]==1)
                                    echo "Viêm gan C, ";
                                if($khamthai[0]["BdmRubella"]==1)
                                    echo "Rubella, ";
                                if($khamthai[0]["BdmTamThan"]==1)
                                    echo "Tâm thần, ";
								if($khamthai[0]["BdmBenhKhac"]!='')
                                	echo "Bệnh khác: ".$khamthai[0]["BdmBenhKhac"];
                                ?></td>
                  </tr>
                  <?php
				  }else{
					  ?>
                   <tr>
                    <td width="28%" style="vertical-align: top;">Các bệnh đã mắc:</td>
                    <td width="72%" class="data_cacbenhdamac"><?=$khamthai[0]["BdmBenhKhac"]?></td>
                  </tr>
                      <?php
					  }
				  ?>
                   <tr>
                    <td style="vertical-align: top;">Các bệnh đã tiêm phòng:</td>
                    <td class="data_cacbenhdatiemphong"><?php
					if($khamthai[0]["BtpRubella"]==1 || $khamthai[0]["BtpThuyDau"]==1 || $khamthai[0]["BtpQuaiBi"]==1 || $khamthai[0]["BtpViemGanB"]==1 || $khamthai[0]["BtpCum"]==1 || $khamthai[0]["BtpUonVanSoSinh"]==1 || $khamthai[0]["BtpUonVanSoSinh_MuiSo"]==1){
                                if($khamthai[0]["BtpRubella"]==1)
                                    echo "Rubella, ";
                                if($khamthai[0]["BtpThuyDau"]==1)
                                    echo "Thủy đậu, ";
                                if($khamthai[0]["BtpQuaiBi"]==1)
                                    echo "Quai bị, ";
                                if($khamthai[0]["BtpViemGanB"]==1)
                                    echo "Viêm gan B, ";
                                if($khamthai[0]["BtpCum"]==1)
                                    echo "Cúm, ";
								if($khamthai[0]["BtpUonVanSoSinh"]==1)
                                    echo "Uốn ván ";
                                if($khamthai[0]["BtpUonVanSoSinh_MuiSo"]>0)
                                    echo "mũi số (".$khamthai[0]["BtpUonVanSoSinh_MuiSo"]."). ";
					}else{
						echo "Không";
						}
                                
                    ?></td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Tình hình thai nghén hiện tại:</td>
                    <td class="data_tinhhinhthainghen"><?php
								if($khamthai[0]["NgaySinhDuKien"]==''){
									echo "Tuổi thai: ".$khamthai[0]["SoTuanThai"]." tuần ".$khamthai[0]["SoNgayThai"]." ngày - Ngày sinh dự kiến: ";
								}else{
                               		echo "Tuổi thai: ".$khamthai[0]["SoTuanThai"]." tuần ".$khamthai[0]["SoNgayThai"]." ngày - Ngày sinh dự kiến: ".$khamthai[0]["NgaySinhDuKien"]->format($_SESSION["config_system"]["ngaythang"]);
								}
                                ?></td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">- Các triệu chứng nghén:</td>
                    <td class="data_cactrieuchungnghen"><?php
					if($khamthai[0]["TcnNon"]==1 || $khamthai[0]["TcnBuonNon"]==1 ||$khamthai[0]["TcnMetMoi"]==1 ){
                                if($khamthai[0]["TcnNon"]==1)
                                    echo "Nôn, ";
                                if($khamthai[0]["TcnBuonNon"]==1)
                                    echo "Buồn nôn, ";
                                if($khamthai[0]["TcnMetMoi"]==1)
                                    echo "Mệt mõi";
					}else{
						echo "Không";
						}
                                ?></td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">- Các dấu hiệu bất thường:</td>
                    <td class="data_cacdauhieubatthuong"><?php
                                if($khamthai[0]["TcbtDauBungDuoi"]==1)
                                    echo "Đau bụng dưới, ";
                                if($khamthai[0]["TcbtRaMauAmDao"]==1)
                                    echo "Ra máu âm đạo, ";
                                if($khamthai[0]["TcbtDauDau"]==1)
                                    echo "Đau đầu, ";
                                if($khamthai[0]["TcbtHoaMat"]==1)
                                    echo "Hoa mắt, ";
                                if($khamthai[0]["TcbtDauThuongVi"]==1)
                                    echo "Đau thượng vị, "; 
                                echo trim($khamthai[0]["TCBT_Khac"]);
                                ?></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="vertical-align: top;">Tiền sử bệnh và sức khỏe của chồng: &nbsp;&nbsp;
                    <?=$khamthai[0]["TienSuBenhVaSucKhoeChong"] ?></td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Tiền sử sản phụ khoa:</td>
                    <td class="data_tiensusankhoa"><?php
                                if($khamthai[0]["TsPara"]!='')
                                    echo "PARA: ".$khamthai[0]["TsPara"].", ";
                                if($khamthai[0]["TsThaiChetLuu"]==1)
                                    echo "Thai chết lưu, ";
                                if($khamthai[0]["TsSanGiat"]==1)
                                    echo "Sản giật, ";
                                if($khamthai[0]["TsChayMauTruocSinh"]==1)
                                    echo "Chảy máu trước sinh, ";
                                if($khamthai[0]["TsSinhKho"]==1)
                                    echo "Sinh khó, ";
                                if($khamthai[0]["TsBinhThuong"]==1)
                                    echo "Sinh thường, ";
                                if($khamthai[0]["TsBangHuyet"]==1)
                                    echo "Băng huyết, ";
                                if($khamthai[0]["TsMoLayThai"]==1)
                                    echo "Mổ lấy thai, ";
                                if($khamthai[0]["TsSinhConDuoi25Kg"]==1)
                                    echo "Sinh con dưới 2,5kg, ";
                                if($khamthai[0]["TsConChetTuanDauSauSinh"]==1)
                                    echo "Con chết tuần đầu sau khi sinh, ";
								if($khamthai[0]["TienSuPhuKhoa"]){
									echo $khamthai[0]["TienSuPhuKhoa"];
										}
                                ?>                       </td>
                  </tr>
                  
                </table>

                <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td colspan="2" style=" font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#000; font-weight:bold; margin:0px; height:27px">KẾT QUẢ KHÁM </td>
                </tr>
                    <tr>
                        <td width="18%" style="vertical-align: top;">Khám sản khoa:</td>
                        <td width="82%"><pre><?=$khamthai[0]["MoTaKhamSanKhoa"]?></pre></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Khám toàn thân:</td>
                        <td class="data_khamtoanthan"><?php
                    if($khamthai[0]["KttBinhThuong"]==1)
						echo "Bình thường, ";
					if($khamthai[0]["KttDaXanhNiemMacNhot"]==1)
						echo "Da xanh niêm mạc nhợt, ";
					if($khamthai[0]["KttPhuToanThan"]==1)
						echo "Phù toàn thân, ";
					if($khamthai[0]["KttPhu2ChiDuoi"]==1)
						echo "Phù hai chi dưới";
				?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Khám tim phổi:</td>
                        <td><pre><?=$khamthai[0]["MoTaKhamTimPhoi"]?></pre></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Khám vú:</td>
                        <td><?=$khamthai[0]["MoTaKhamVu"]?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Khám phụ khoa:</td>
                        <td><?=$khamthai[0]["MoTaKhamPhuKhoa"]?></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Khám khác:</td>
                        <td><?=$khamthai[0]["MoTaKhamKhac"]?></td>
                    </tr>
                </table>
                </pre>
                <b style="font-size:15px;color:#000">KẾT LUẬN</b><pre style="margin-top: 5px; margin-bottom: -10px;"><b><?=$khamthai[0]["KetLuan"] ?></b></pre><br />
                <b style="font-size:15px;color:#000">ĐỀ NGHỊ</b><br />
                <pre  style="margin-top: 5px; margin-bottom: 0px;"><?=$khamthai[0]["LoiKhuyen"] ?></pre>
			</td>            
         </tr> 
         <tr>
         <td class="ntest">
                 
         </td>
         </tr>           
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:14px; width:100%;font-family:Arial, Geneva, sans-serif;padding:5px 0px">
         <tr>
             <td>&nbsp;
             </td>
             <td align="center">
              <i>
                 	 Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
             </td>
         </tr>
         <tr>
     	<td width="50%" align="center">
        
        </td>
        <td width="50%" align="center">
        <b>
          BÁC SỸ SẢN PHỤ KHOA
         </b>
        </td>
     </tr>
     <tr  >
     	
        <td width="50%" align="center" style="height:80px;">
        </td>
        <td width="50%" align="center">
        <?php
		if($thongtinluotkham[0]["ID_BSChanDoan"]){ 
		?>
         <img id="bs_chandoan" width="100"/><br />
         <?php
		}else{
		 ?><br /><br /><br /><br />
         <?php
		}
		 ?>
                 
        </td>
     </tr>
     <tr>
     	<td width="50%" align="center">
        	
        </td>
        <td width="50%" align="center"><b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b></td>
     </tr>
     </table>
    
</body>
</html>
 <script type="text/javascript">
	$(document).ready(function() { //data_cacbenhdatiemphong
		var data_cacbenhdamac =$(".data_cacbenhdamac").html().trim();
		if(data_cacbenhdamac.substr(data_cacbenhdamac.length-1, data_cacbenhdamac.length)==','){
			var data_cacbenhdamac_new =data_cacbenhdamac.slice(0, -1);
			$(".data_cacbenhdamac").empty();
			$(".data_cacbenhdamac").append(data_cacbenhdamac_new);
			}
		//---------
		var data_cacbenhdatiemphong =$(".data_cacbenhdatiemphong").html().trim();
		if(data_cacbenhdatiemphong.substr(data_cacbenhdatiemphong.length-1, data_cacbenhdatiemphong.length)==','){
			var data_cacbenhdatiemphong_new =data_cacbenhdatiemphong.slice(0, -1);
			$(".data_cacbenhdatiemphong").empty();
			$(".data_cacbenhdatiemphong").append(data_cacbenhdatiemphong_new);
		}
		//---------- 
		var data_tinhhinhthainghen =$(".data_tinhhinhthainghen").html().trim();
		if(data_tinhhinhthainghen.substr(data_tinhhinhthainghen.length-1, data_tinhhinhthainghen.length)==','){
			var data_tinhhinhthainghen_new =data_tinhhinhthainghen.slice(0, -1);
			$(".data_tinhhinhthainghen").empty();
			$(".data_tinhhinhthainghen").append(data_tinhhinhthainghen_new);
		}
		//---------- 
		var data_cactrieuchungnghen =$(".data_cactrieuchungnghen").html().trim();
		if(data_cactrieuchungnghen.substr(data_cactrieuchungnghen.length-1, data_cactrieuchungnghen.length)==','){
			var data_cactrieuchungnghen_new =data_cactrieuchungnghen.slice(0, -1);
			$(".data_cactrieuchungnghen").empty();
			$(".data_cactrieuchungnghen").append(data_cactrieuchungnghen_new);
		}
		//---------- 
		var data_cacdauhieubatthuong =$(".data_cacdauhieubatthuong").html().trim();
		if(data_cacdauhieubatthuong.substr(data_cacdauhieubatthuong.length-1, data_cacdauhieubatthuong.length)==','){
			var data_cacdauhieubatthuong_new =data_cacdauhieubatthuong.slice(0, -1);
			$(".data_cacdauhieubatthuong").empty();
			$(".data_cacdauhieubatthuong").append(data_cacdauhieubatthuong_new);
		}
		//---------- 
		var data_tiensusankhoa =$(".data_tiensusankhoa").html().trim();
		if(data_tiensusankhoa.substr(data_tiensusankhoa.length-1, data_tiensusankhoa.length)==','){
			var data_tiensusankhoa_new =data_tiensusankhoa.slice(0, -1);
			$(".data_tiensusankhoa").empty();
			$(".data_tiensusankhoa").append(data_tiensusankhoa_new);
		}
		//---------- 
		var data_khamtoanthan =$(".data_khamtoanthan").html().trim();
		if(data_khamtoanthan.substr(data_khamtoanthan.length-1, data_khamtoanthan.length)==','){
			var data_khamtoanthan_new =data_khamtoanthan.slice(0, -1);
			$(".data_khamtoanthan").empty();
			$(".data_khamtoanthan").append(data_khamtoanthan_new);
		}
		if(1==<?php echo($_GET["chuky"])?>)
			{
				//load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			}
			
		
		print_preview();
	})
</script>
 