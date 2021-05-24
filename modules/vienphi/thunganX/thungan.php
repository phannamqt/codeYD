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

.kytudau-viethoa::first-letter {
	text-transform: uppercase;
}


</style>
</head>

<body>
	<?php

        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idthutrano"]);//tao param cho store
        $store_name="{call GD2_vienphi_byID_ThuTraNo_print(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
		$store_name1="{call Gd2_thu_trano_select_byidthutrano (?)}";
			 $params1 = array($_GET['idthutrano']);
			 $get1=$data->query( $store_name1, $params1);
			 $excute1 = new SQLServerResult($get1);
			 $tam2 = $excute1->get_as_array();
			// print_r($tam2);
	   $giohentrakq='';
	   $sotien_khamdt=0;
	   $chuoi_khamdt='';
	   $chuoi_khamls='';
	   $chuoi_khamdtchinh='';
	   $tong_khamlschinh_thuoc=0;
	   $sotien_dieuuong=0;
	   $chuoi_dieuuong='';
	   $sotien_vltl=0;
	   $chuoi_vltl='';
	   $sotien_xetnghiem=0;
	   
	   $sotien_KhauHaoThuocVTYT=0;
	   $sotien_KhauHaoDichVu=0;
	   $chuoi_KhauHaoThuocVTYT='';
	   $chuoi_KhauHaoDichVu='';
	   
	   
	   $chuoi_xetnghiem='';
	   $sotien_khhgd=0;
	   $chuoi_khhgd='';
	   $sotien=0;
	   $chuoi='';
	   $kham='';
	   $tenbn='';
	   $diachi='';
	   $sotien_tienthuoc=0;
	   $sotien_giuong=0;
	   $sotien_giuongloai23=0;
	   $bhyt='';
	   $hotro='';
	   $ListVoucher='';
	   $Quota='';
	   $Coupon='';

	 if($thongtinbenhnhan[0]["NguoiGiaoDich"]==''){

		 $tenbn=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'];
	 }else{
		 if($tam2[0]['ID_PhanLoaiKham']==25){
			 $tenbn=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'];
		 }else{
			 $tenbn=$thongtinbenhnhan[0]["NguoiGiaoDich"];
		 }
	 }

	 if($thongtinbenhnhan[0]["ExtField1"]==''){
		 $diachi=$thongtinbenhnhan[0]['DiaChi'];
	 }else{
		 if($tam2[0]['ID_PhanLoaiKham']==25){
			 $diachi=$thongtinbenhnhan[0]['ExtField1'];
		 }else{
			 $diachi=$thongtinbenhnhan[0]["DiaChi"];
		 }

	 }

	   if($tam2[0]['NgayGioHenTraKQ']!=''){
		//if(strtotime($tam2[0]['NgayGioHenTraKQ']->format("H:i ".$_SESSION["config_system"]["ngaythang"]))<($tam2[0]['NgayGio']->format("H:i ".$_SESSION["config_system"]["ngaythang"]))){
			$giohentrakq='<tr><td colspan="2" style="border-top:solid 1px #000000 !important;padding-top:10px"><strong>Giờ hẹn trả KQ:  '.$tam2[0]['NgayGioHenTraKQ']->format("H:i ".$_SESSION["config_system"]["ngaythang"]).'</strong></td></tr>';
		//}
	 }
       for($i=0;$i<=count($thongtinbenhnhan)-1;$i++){
		     
		    $sotien_KhauHaoThuocVTYT= $sotien_KhauHaoThuocVTYT+$thongtinbenhnhan[$i]['KhauHaoThuocVTYT'];
			$sotien_KhauHaoDichVu= $sotien_KhauHaoDichVu+$thongtinbenhnhan[$i]['KhauHaoDichVu'];
		   
		   
		   if($thongtinbenhnhan[$i]['ID_NhomCLS']==20||$thongtinbenhnhan[$i]['ID_DonThuoc']!=''){
			 	if($thongtinbenhnhan[$i]['ID_DonThuoc']==''){
					$chuoi_khamls=$chuoi_khamls.'<tr>
						<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
						<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td></tr>';
				}
				else if($thongtinbenhnhan[$i]['ID_DonThuoc']!=''){
					$sotien_tienthuoc=$sotien_tienthuoc+$thongtinbenhnhan[$i]['SoTien'];
				}
			 
			 
			 
			 
			 
			    $sotien_khamdt= $sotien_khamdt+$thongtinbenhnhan[$i]['SoTien'];
				if(($thongtinbenhnhan[$i]['ID_NhomCLS']==20&&$thongtinbenhnhan[$i]['IsBacSyChinh']==1)||$thongtinbenhnhan[$i]['ID_DonThuoc']!=''){
					if(($thongtinbenhnhan[$i]['ID_NhomCLS']==20&&$thongtinbenhnhan[$i]['IsBacSyChinh']==1)){
						$chuoi_khamdtchinh='<tr>
						<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
						<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">';
						$tong_khamlschinh_thuoc=$tong_khamlschinh_thuoc+$thongtinbenhnhan[$i]["SoTien"];
					}else{

						$tong_khamlschinh_thuoc=$tong_khamlschinh_thuoc+$thongtinbenhnhan[$i]["SoTien"];
					}
				}else if($thongtinbenhnhan[$i]['ID_NhomCLS']==20&&$thongtinbenhnhan[$i]['ID_DonThuoc']==''&&$thongtinbenhnhan[$i]['IsBacSyChinh']==0){
					$chuoi_khamdt=$chuoi_khamdt.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td></tr>';
				}
		   }
		   else if($thongtinbenhnhan[$i]['ID_NhomCLS']==26){
			    $sotien_dieuuong= $sotien_dieuuong+$thongtinbenhnhan[$i]['SoTien'];
				$chuoi_dieuuong=$chuoi_dieuuong.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td>

				</tr>';
		   }
		    else if($thongtinbenhnhan[$i]['ID_NhomCLS']==52){
			    $sotien_khhgd= $sotien_khhgd+$thongtinbenhnhan[$i]['SoTien'];
				$chuoi_khhgd=$chuoi_khhgd.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td>

				</tr>';
		   }

		   else if($thongtinbenhnhan[$i]['ID_NhomCLS']==25){
			    $sotien_vltl= $sotien_vltl+$thongtinbenhnhan[$i]['SoTien'];
				$chuoi_vltl=$chuoi_vltl.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td>

				</tr>';
		   }

		   else if($thongtinbenhnhan[$i]['XetNghiem']==1){
			    $sotien_xetnghiem= $sotien_xetnghiem+$thongtinbenhnhan[$i]['SoTien'];
				$chuoi_xetnghiem=$chuoi_xetnghiem.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td>

				</tr>';
		   }else if($thongtinbenhnhan[$i]['Id_BenhAn_GiuongBenh']!=''){
			   
			  // if($thongtinbenhnhan[$i]['LoaiBA']==1){
				   	$sotien_giuong= $sotien_giuong+$thongtinbenhnhan[$i]['SoTien'];				
			  // }else{
				//   if($thongtinbenhnhan[$i]['IsGiuongAo']==1){
				//  	 $sotien_giuong= $sotien_giuong+$thongtinbenhnhan[$i]['SoTien'];
				//   }else{
				//	 $sotien_giuongloai23=$sotien_giuongloai23+$thongtinbenhnhan[$i]['SoTien'];
				//   }
			  // }
			    $sotien=$sotien+$thongtinbenhnhan[$i]["SoTien"];
		   }
		   
		   else{
			   $sotien=$sotien+$thongtinbenhnhan[$i]["SoTien"];
			    $chuoi=$chuoi.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px;text-transform: uppercase ">'.  $thongtinbenhnhan[$i]["MaVietTat_BN"] .'</td>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($thongtinbenhnhan[$i]["SoTien"],"0",",",".") .'</td>

				</tr>';
		   }



	   }
	 if($_GET['kieuin']==1){
	  
		$kham=$kham.''.$chuoi_khamls;
	    if($sotien_tienthuoc>0){
		   $kham=$kham.'<tr>
				<td  style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">Thuốc điều trị
</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_tienthuoc,"0",",",".") .'</td>
				</tr>';
	     }
		  if($sotien_giuong>0){
		   $kham=$kham.'<tr>
				<td  style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">TIỀN GIƯỜNG</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_giuong,"0",",",".") .'</td>
				</tr>';
	     }
	     if($sotien_giuongloai23>0){
		   $kham=$kham.'<tr>
				<td  style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">PHỤ THU TIỀN GIƯỜNG</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_giuongloai23,"0",",",".") .'</td>
				</tr>';
	     }
	   
	   
	  // if($sotien_dieuuong>0){
		//   $kham=$kham.'<tr>
	//			<td  style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">ĐIỀU DƯỠNG</td>
	//			<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_dieuuong,"0",",",".") .'</td>
	//			</tr>';
	 //  }
	  if($sotien_dieuuong>0){
		   $kham=$kham.''.$chuoi_dieuuong;
	   }
	   if($sotien_vltl>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">VẬT LÝ TRỊ LIỆU</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_vltl,"0",",",".")  .'</td>
				</tr>';
	   }
	   if($sotien_xetnghiem>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">XÉT NGHIỆM</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_xetnghiem,"0",",",".") .'</td>
				</tr>';
	   }
	     if($sotien_khhgd>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">KẾ HOẠCH HÓA GIA ĐÌNH</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_khhgd,"0",",",".")  .'</td>
				</tr>';
	   }

	 }else if($_GET['kieuin']==2){
	 if($sotien_khamdt>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">KHÁM VÀ ĐIỀU TRỊ</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.  number_format($sotien_khamdt,"0",",",".") .'</td>
				</tr>';
	   }
	   if($sotien_dieuuong>0){
		   $kham=$kham.'<tr>
				<td  style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">ĐIỀU DƯỠNG</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_dieuuong,"0",",",".") .'</td>
				</tr>';
	   }
	   if($sotien_vltl>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">VẬT LÝ TRỊ LIỆU</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_vltl,"0",",",".")  .'</td>
				</tr>';
	   }
	   if($sotien_xetnghiem>0){
		   $kham=$kham.''.$chuoi_xetnghiem;
	   }
	   if($sotien_khhgd>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">KẾ HOẠCH HÓA GIA ĐÌNH</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_khhgd,"0",",",".")  .'</td>
				</tr>';
	   }



	 }else if($_GET['kieuin']==3){

		   $kham=$kham.''.$chuoi_khamdtchinh.''. number_format($tong_khamlschinh_thuoc,"0",",",".") .'</td>

						</tr>'.''.$chuoi_khamdt;




	   if($sotien_dieuuong>0){
		   $kham=$kham.''.$chuoi_dieuuong;
	   }
	   if($sotien_vltl>0){
		   $kham=$kham.''.$chuoi_vltl;
	   }
	   if($sotien_xetnghiem>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">XÉT NGHIỆM</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'. number_format($sotien_xetnghiem,"0",",",".") .'</td>
				</tr>';
	   }

		   if($sotien_khhgd>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">KẾ HOẠCH HÓA GIA ĐÌNH</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_khhgd,"0",",",".")  .'</td>
				</tr>';
	   }

	 }else if($_GET['kieuin']==4){
		 $kham=$kham.''.$chuoi_khamdtchinh.''. number_format($tong_khamlschinh_thuoc,"0",",",".") .'</td>

						</tr>'.''.$chuoi_khamdt;
	   if($sotien_dieuuong>0){
		   $kham=$kham.''.$chuoi_dieuuong;
	   }
	   if($sotien_vltl>0){
		   $kham=$kham.''.$chuoi_vltl;
	   }
	   if($sotien_xetnghiem>0){
		    $kham=$kham.''.$chuoi_xetnghiem;
	   }
		   if($sotien_khhgd>0){
		   $kham=$kham.'<tr>
				<td style=" width:70%; text-align:right; padding-top:5px; padding-bottom:10px; ">KẾ HOẠCH HÓA GIA ĐÌNH</td>
				<td style=" width:30%; text-align:right; padding-top:5px; padding-bottom:10px; ">'.number_format($sotien_khhgd,"0",",",".")  .'</td>
				</tr>';
	   }


	 }

	   $nocu='';
	   $tamung='';
	   $hoanung='';
	   $giamgia='';
	   $nomoi='';
	   $sum=$sotien_vltl+$sotien_khamdt+$sotien_dieuuong+$sotien_xetnghiem+$sotien+$sotien_khhgd;
	   if( $tam2[0]['nocu']+$tam2[0]['tamung']!=0){

		   $nocu='  <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            Nợ cũ:
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">


			 '. number_format($tam2[0]['nocu']+$tam2[0]['tamung'],"0",",",".").'đ

            </td>
        </tr>';
	   }
		
		
		
		
		if( $sotien_KhauHaoThuocVTYT!=0){

		   $chuoi_KhauHaoThuocVTYT='  <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            Khấu hao thuốc VTYT:
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">


			 '. number_format($sotien_KhauHaoThuocVTYT,"0",",",".").'đ

            </td>
       	    </tr>';
	   }
	   
	   if( $sotien_KhauHaoDichVu!=0){

		   $chuoi_KhauHaoDichVu='  <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            Khấu hao dịch vụ:
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">


			 '. number_format($sotien_KhauHaoDichVu,"0",",",".").'đ

            </td>
       	    </tr>';
	   }
		
	    if( $tam2[0]['tamung']!=0){

		   $tamung='  <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            Tạm ứng:
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">


			 '. number_format($tam2[0]['tamung'],"0",",",".").'đ

            </td>
        </tr>';
	   }

	   if( $tam2[0]['hoanung']!=0){

		   $hoanung='  <tr style="font-size:13px;">
            <td  style=" width:70%; text-align:right;padding-bottom:10px;">
            Hoàn ứng:
            </td>
            <td  style=" width:30%; text-align:right;padding-bottom:10px; ">


			 '. number_format(abs($tam2[0]['hoanung']),"0",",",".").'đ

            </td>
        </tr>';
	   }

	   if( $tam2[0]['ListVoucher']!=''){

		   $ListVoucher=htmlspecialchars_decode($tam2[0]['ListVoucher']);
	   }

	   if( $tam2[0]['SoTienCoupon']>0){

		   $Coupon='  <tr  class="kytudau-viethoa" style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">Miễn giảm do ('.$tam2[0]['TenLoaiCoupon'].'):
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">
			 '. number_format($tam2[0]['SoTienCoupon'],"0",",",".").'đ

            </td>
        </tr>';
	   }

	   if( $tam2[0]['SoTienQuoTa']>0){

		   $Quota='  <tr  style="font-size:13px;">
            <td class="kytudau-viethoa" style=" width:70%; text-align:right; padding-bottom:10px;">Miễn giảm do ('.$tam2[0]['NguoiDungQuota'].'):
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">
			 '. number_format($tam2[0]['SoTienQuoTa'],"0",",",".").'đ
            </td>
        </tr>';
	   }

	     if( ($tam2[0]['GiamGiaNew']-$sotien_KhauHaoThuocVTYT-$sotien_KhauHaoDichVu)>0){
		   $giamgia='  <tr style="font-size:13px;">
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            Miễn giảm khác:
            </td>
            <td  style=" width:30%; text-align:right; padding-bottom:10px; ">
			 '. number_format($tam2[0]['GiamGiaNew']-$sotien_KhauHaoThuocVTYT-$sotien_KhauHaoDichVu,"0",",",".").'đ

            </td>
        </tr>';
	   }



	   if(($tam2[0]['nocuoiky']+$tam2[0]['hoanung'])>0){
	  $nomoi= ' <tr style="font-size:13px;" >
            <td  style=" width:70%; text-align:right;  padding-bottom:10px;">Nợ mới:
            </td>
            <td  style=" width:30%; text-align:right;  padding-bottom:10px; "><strong>
   			'. number_format(($tam2[0]['nocuoiky']+$tam2[0]['hoanung']),"0",",",".").'đ</strong>
            </td>
        </tr>';
	   }
		
		 if($tam2[0]['TongTienBHYTChiTra']>0){
	  $bhyt= ' <tr style="font-size:13px;" >
            <td  style=" width:70%; text-align:right;  padding-bottom:10px;">BHYT chi trả:
            </td>
            <td  style=" width:30%; text-align:right;  padding-bottom:10px; "><i>
   			'. number_format($tam2[0]['TongTienBHYTChiTra'],"0",",",".").'đ</i>
            </td>
        </tr>';
	   }
	   
	    if($tam2[0]['HoTroTuBenhVien']>0){
	  $hotro= ' <tr style="font-size:13px;" >
            <td  style=" width:70%; text-align:right;  padding-bottom:10px;">Hỗ trợ:
            </td>
            <td  style=" width:30%; text-align:right;  padding-bottom:10px; "><i>
   			'. number_format($tam2[0]['HoTroTuBenhVien'],"0",",",".").'đ</i>
            </td>
        </tr>';
	   }
	   
	   

	   $lien1=' <table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
	 <tr style="font-size:10px;">
		 <td style=" width:100%; text-align:left">
			<img src="'.$_SESSION["com"]["LogoBenhVien"].'" style="'.$_SESSION["com"]["LogoBenhVienCSS"].'"><br>
			<span style="'.$_SESSION["com"]["TenBenhVienCSS"].'">'.$_SESSION["com"]["TenBenhVien"].'<br /></span>
			<span style="'.$_SESSION["com"]["DiaChiCSS"].'">'.$_SESSION["com"]["DiaChi"].'<br /></span>
			<span style="'.$_SESSION["com"]["SoDTCSS"].'">'.$_SESSION["com"]["SoDT"].'<br /></span>
		 </td>
	 </tr>
 </table>
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU THANH TOÁN</h2>
	' ?>
	<?php
        if( $tam2[0]['SoPhieuKhamGoiLoa']==NULL ||  $tam2[0]['SoPhieuKhamGoiLoa']==''){
			
        }else{
            $lien1=$lien1.'<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;font-size: 80px; margin-top: 0; margin-bottom: 5px;">'. $tam2[0]['SoPhieuKhamGoiLoa'].'</h2>';
            $lien1=$lien1.'<div style="text-align:center; margin-top: 0; margin-bottom: 5px; font-size:12px;font-style: italic;">(Quý khách vui lòng lưu ý số này để được gọi)</div>';
        } ?>

    <?php
	
	$lien1=$lien1.'
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr >
            <td style="font-weight:bold; width:80%;font-size:14px; padding-bottom: 5px;">'.$tenbn.'</td>
        	<td style="font-weight:bold; width:20%; text-align:right;font-size:18px; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaBenhNhan"] .' </td>
        </tr>
	</table>
	 <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td style="  font-weight:bold;font-size:12px;  padding-bottom: 5px;" colspan="2">'.$diachi .' </td>

        </tr>
        <tr>
            <td height="20" style="font-weight:bold;font-size:14px; width:50%; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaPhieu"].' </td>
        	<td style="font-weight:bold;font-size:14px; width:50%; text-align:right; padding-bottom: 5px;">'.$thongtinbenhnhan[0]["NgayGio"]->format($_SESSION["config_system"]["ngaythang"]." H:i").' </td>
        </tr>'.$giohentrakq.'
    </table>
    <br /><br />



    <table cellpadding="0" cellspacing="0" style="border-top:solid 1px #000000 !important;width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	   '.$kham.' '.$chuoi.'
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="2">
            </td>
        </tr>
    </table>
    <br />
    <div style="page-break-after:always;">
    <table  cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="font-size:13px;">
            <td  style=" width:70%; text-align:right;padding-bottom:10px;">
            Tổng chi phí điều trị:
            </td>
            <td  style=" width:30%; text-align:right; font-weight:bold;padding-bottom:10px;">
            '.number_format($sum,"0",",",".").'đ
            </td>
        </tr>'.$nocu.''.$tamung.''.$bhyt.' '.$hotro.$Coupon.$Quota.$ListVoucher.''.$giamgia.''.$chuoi_KhauHaoThuocVTYT.''.$chuoi_KhauHaoDichVu.'
           <tr style="font-size:13px;" >
            <td  style=" width:70%; text-align:right; padding-bottom:10px;">
            <strong>Phải trả:</strong>
            </td>
            <td  style=" width:30%; text-align:right;  padding-bottom:10px; ">
   			'. number_format($sum+$tam2[0]['nocu']-$tam2[0]['GiamGia']-$tam2[0]['TongTienBHYTChiTra']-$tam2[0]['HoTroTuBenhVien'],"0",",",".").'đ
            </td>
        </tr>
           <tr style="font-size:13px;" >
            <td  style=" width:70%; text-align:right;  padding-bottom:10px;">Thanh toán đợt này:
            </td>
            <td  style=" width:30%; text-align:right;  padding-bottom:10px; ">
   			'. number_format($thongtinbenhnhan[0]["tong"],"0",",",".").'đ
            </td>
        </tr>'.$hoanung.'
           <tr  style="font-size:13px;">

            <td  style=" text-align:right;  padding-bottom:10px; " colspan="2" class="thanhtien">

            </td>
        </tr>  '.$nomoi.'
        </table>
        <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
         <tr  style="font-size:13px;">
            <td  style=" width:50%; text-align:center;  padding-bottom:10px;"><strong>BỆNH NHÂN</strong></td>
            <td  style=" width:50%; text-align:center;  padding-bottom:10px;"><strong>THU NGÂN</strong></td>
        </tr>
		 <tr style="font-size:13px;" >
            <td  style=" width:50%; text-align:center; padding-bottom:10px;height:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center;  padding-bottom:10px;max-height:38px; "><img id="bs_chandoan" style="max-height:38px"/>
        </tr>
		 <tr  style="font-size:13px;">
		 	 <td  style=" width:50%; padding-bottom:10px;height:10px;"></td>
            <td style=" width:50%; text-align:center;  padding-bottom:10px; "><strong>'.$thongtinbenhnhan[0]['VietTat'].''.$thongtinbenhnhan[0]['HoLotNhanVien'].' '.$thongtinbenhnhan[0]['TenNhanVien'].''.'</strong></td>
        </tr>
		<tr>

		
    </table ></div>';




		$lien2='<table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
	 <tr style="font-size:10px;">
		 <td style=" width:100%; text-align:left">
			<img src="'.$_SESSION["com"]["LogoBenhVien"].'" style="'.$_SESSION["com"]["LogoBenhVienCSS"].'"><br>
			<span style="'.$_SESSION["com"]["TenBenhVienCSS"].'">'.$_SESSION["com"]["TenBenhVien"].'<br /></span>
			<span style="'.$_SESSION["com"]["DiaChiCSS"].'">'.$_SESSION["com"]["DiaChi"].'<br /></span>
			<span style="'.$_SESSION["com"]["SoDTCSS"].'">'.$_SESSION["com"]["SoDT"].'<br /></span>
		 </td>
	 </tr>
 </table>
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif;">PHIẾU LƯU</h2>
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr >

            <td style="font-weight:bold; width:80%;font-size:14px;    padding-bottom: 5px;">'.$tenbn.'</td>
        	<td style="font-weight:bold; width:20%;font-size:18px; text-align:right;   padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaBenhNhan"] .' </td>
        </tr>
		</table>
		<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr>
            <td style="font-weight:bold;font-size:12px;  padding-bottom: 5px;" colspan="2">'.$diachi .' </td>

        </tr>
        <tr>
            <td height="20" style=" width:50%;font-size:14px; font-weight:bold;  padding-bottom: 5px;">'.$thongtinbenhnhan[0]["MaPhieu"].' </td>
        	<td style="font-size:14px; text-align:right;font-weight:bold;     padding-bottom: 5px;">'.$thongtinbenhnhan[0]["NgayGio"]->format($_SESSION["config_system"]["ngaythang"]." H:i").' </td>
        </tr>'.$giohentrakq.'
    </table>
    <br /><br />


    <table cellpadding="0" cellspacing="0" style="border-top:solid 1px #000000 !important;width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	   '.$kham.' '.$chuoi.'
         <tr>
        	<td  style=" width:100%; border-bottom:solid 1px #000000 !important;" colspan="2">
            </td>
        </tr>
    </table>
    <br />
    <div style="page-break-after:always;">
    <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="font-size:13px;">
            <td  style=" width:70%; text-align:right;padding-bottom:10px;">
            Tổng chi phí điều trị:
            </td>
            <td  style=" width:30%; text-align:right; font-weight:bold;padding-bottom:10px;">
            '.number_format($sum,"0",",",".").'đ
            </td>
        </tr>'.$nocu.''.$tamung.''.$bhyt.' '.$hotro.''.$Coupon.$Quota.$ListVoucher.$giamgia.''.$chuoi_KhauHaoThuocVTYT.''.$chuoi_KhauHaoDichVu.'

           <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right;padding-bottom:10px;">
            <strong>Phải trả:</strong>
            </td>
            <td  style=" width:30%; text-align:right;padding-bottom:10px; ">
   			'. number_format($sum+$tam2[0]['nocu']-$tam2[0]['GiamGia']-$tam2[0]['TongTienBHYTChiTra']-$tam2[0]['HoTroTuBenhVien'],"0",",",".").'đ
            </td>
        </tr>
           <tr  style="font-size:13px;">
            <td  style=" width:70%; text-align:right;padding-bottom:10px;">Thanh toán đợt này:
            </td>
            <td  style=" width:30%; text-align:right;padding-bottom:10px; ">
   			'. number_format($thongtinbenhnhan[0]["tong"],"0",",",".").'đ
            </td>
        </tr>'.$hoanung.'
           <tr  style="font-size:13px;">

            <td  style=" text-align:right;padding-bottom:10px; " colspan="2" class="thanhtien">

            </td>
        </tr>'.$nomoi.'
        </table>
        <table cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
         <tr>
            <td  style=" width:50%; text-align:center;padding-bottom:10px;"><strong>BỆNH NHÂN</strong></td>
            <td  style=" width:50%; text-align:center;padding-bottom:10px; "><strong>THU NGÂN</strong></td>
        </tr>
		 <tr  >
            <td  style=" width:50%; text-align:center;padding-bottom:10px;height:10px;"><strong></strong></td>
            <td  style=" width:50%; text-align:center;padding-bottom:10px;max-height:38px; "><img id="bs_chandoan1" style="max-height:38px"/>
        </tr>
		 <tr  >
		 	<td  style=" width:50%; padding-bottom:10px;height:10px;"></td>
            <td style=" width:50%; text-align:center;  padding-bottom:10px; "><strong>'.$thongtinbenhnhan[0]['VietTat'].''.$thongtinbenhnhan[0]['HoLotNhanVien'].' '.$thongtinbenhnhan[0]['TenNhanVien'].''.'</strong></td>
        </tr>

        <tr >
        <td colspan="2" width="100%" style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; padding-top:2px; padding-bottom:2px;">

        </tr>
    </table>
    </div>';
		if($_GET['lien']==2){

			echo($lien1);
		}else if($_GET['lien']==3){

			echo($lien2);

		}else if($_GET['lien']==1){

			echo($lien1);
			echo($lien2);
		}

		//echo($kham);
    ?>


    <div class="footer"></div>
</body>



</html>
 <script type="text/javascript">


    $(document).ready(function() {
		$('.thanhtien').html(toWords((<?=$thongtinbenhnhan[0]["tong"]?>).toString())+" đồng");

		if($.cookie("in_status")=="print_preview"){
					print_preview();
		 }else if($.cookie("in_status")=="print_direct"){

						print_direct(10,10);
			 }

	})
		</script>