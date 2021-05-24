<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$data = new SQLServer; //tao lop ket noi SQL

    $params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');//tao param cho store
    $store_name="{call GD2_ThongKe_ThamMy_Select(?,?)}";//tao bien khai bao store dieukienloc
    $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
    $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
    $tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
   
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;

		}

	#wrapper{
		width:1000px;
		margin:0 auto;
		}
        .type1{
            
            color:blue; font-weight:bold;
        }
            .colored3{
    background-color:#D5EAFF;
    color:#2A120A;
    }
    .colored4{
    background-color:#FFAAAA;
    color:#2A120A;
    }

body,td,th {
	color: #009;
}
</style>

</head>
<body>
<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold">THỐNG KÊ  THẨM MỸ MỚI(Đơn vị tiền /1000)</div>
    <?php
echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';


	?>


<!--     ID_LuotKham DienThoai1  MaBenhNhan  HoLotBenhNhan   TenBenhNhan Tuoi    DiaChi  GioiTinh    ThoiGianVaoKham BS  TongTienPhaiTra GiamGia NoCuoi  SoTienThanhToan Switched    Switched_B  Switched_C  IPL IPL_B   IPL_C   Omnislim    Omnislim_B  Omnislim_C  Dermatrix   Dermatrix_B Dermatrix_C FractionalCO2   FractionalCO2_B FractionalCO2_C LaserCO2    LaserCO2_B  LaserCO2_C  MassageBody MassageBody_B   MassageBody_C   CSDTT   CSDTT_B CSDTT_C CSDM    CSDM_B  CSDM_C  TT_PT   Cryot   Cryot_B Cryot_C
368769      156800  Huỳnh Thị Kim   Hạnh    24  73 Nguyễn Hữu Thọ   Nữ  2015-02-06 16:45:04.420 NULL    330 330 0   0   NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    NULL    1   NULL    NULL    NULL    NULL    NULL    NULL -->
<table width="1215" height="198" border="1">
  <tr>
    <th width="29" rowspan="2" scope="col">STT</th>
    <th width="50" rowspan="2" scope="col">Ngày</th>
    <th width="47" rowspan="2" scope="col">Mã BN</th>
    <th width="100" rowspan="2" scope="col">Họ lót BN</th>
    <th width="50" rowspan="2" scope="col">Tên BN</th>
    <th width="60" rowspan="2" scope="col">BS</th>
    <th width="60" rowspan="2" scope="col">LK Mới</th>
    <th colspan="4" scope="col">YAG</th>
    <th colspan="4" scope="col">IPL</th>
    <th colspan="4" scope="col">Omnislim</th>
    <th colspan="4" scope="col">Dermatrix</th>
    <th colspan="4" scope="col">Fra-CO2</th>
    <th colspan="4" scope="col">LaserCO2</th>
    <th colspan="4" scope="col">MassageBody</th>
    <th colspan="4" scope="col">CSDTT</th>
    <th colspan="4" scope="col">CSD Mặt</th>
    <th colspan="4" scope="col">Cryot</th>
    <th colspan="4" scope="col">PRP</th>
     <th colspan="4" scope="col">Tiêm sẹo lồi</th>
      <th colspan="4" scope="col">Lăn kim</th>
            <th colspan="4" scope="col">Botox</th>
                  <th colspan="4" scope="col">Juvederm</th>
                        <th colspan="4" scope="col">Restylane</th>
                              <th colspan="4" scope="col">TiemMeSo</th>
                                    <th colspan="4" scope="col">Autosang</th>
                                    <th colspan="4" scope="col">Gội đầu</th>
                                    <th colspan="4" scope="col">BamHuyetTriLieuBanChan</th>
                                    <th colspan="4" scope="col">BamHuyetTriLieuToanThan</th>
    <th width="53" rowspan="2" scope="col">PT_TM</th>
    <th width="60" rowspan="2" scope="col">Tổng tiền</th>
    <th width="40" rowspan="2" scope="col">Giảm giá</th>
    <th width="83" rowspan="2" scope="col">BN trả</th>
    <th width="80" rowspan="2" scope="col">Nợ lại</th>
  </tr>
  <tr>

    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
      <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
      <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
      <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
      <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
      <td width="17">Mới</td>
    <td width="22">1L</td>
    <td width="38">Gói</td>
    <td width="25">TK</td>
      <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
    
    <td width="17">1L</td>
    <td width="22">Gói</td>
    <td width="21">TK</td>
    <td width="17">Mới</td>
      
      
      
      
      
  </tr>

        <?php
        $stt=1;
        $sumtien=0;
        $sumtienGiam=0;
        $sumtienTra=0;
        $IPL=0;
        $IPL_B=0;
        $IPL_C=0;
        $IPL_D=0;
        $Switched=0;
        $Switched_B=0;
        $Switched_C=0;
         $Switched_D=0;
        $Omnislim=0;
        $Omnislim_B=0;
        $Omnislim_C=0;
        $Omnislim_D=0;
        $Dermatrix=0;
        $Dermatrix_B=0;
        $Dermatrix_C=0;
         $Dermatrix_D=0;
        $Dermatrix=0;
        $Dermatrix_B=0;
        $Dermatrix_C=0;
        $Dermatrix_D=0;
        $FractionalCO2=0;
        $FractionalCO2_B=0;
        $FractionalCO2_C=0;
        $FractionalCO2_D=0;
        $LaserCO2=0;
        $LaserCO2_B=0;
        $LaserCO2_C=0;
        $LaserCO2_D=0;
        $MassageBody=0;
        $MassageBody_B=0;
        $MassageBody_C=0;
		$MassageBody_D=0;
		$CSDTT=0;
		$CSDTT_B=0;
		$CSDTT_C=0;
		$CSDTT_D=0;
		$CSDM=0;
		$CSDM_B=0;
		$CSDM_C=0;
		$CSDM_D=0;
		$Cryot=0;   
		$Cryot_B=0;
		$Cryot_C=0;
		$Cryot_D=0;
		 
		 
        $PRP=0;   
        $PRP_B=0;
        $PRP_C=0;
        $PRP_D=0;


        $TiemSeoLoi=0;   
        $TiemSeoLoi_B=0;
        $TiemSeoLoi_C=0;
        $TiemSeoLoi_D=0;
		
		$LanKim=0;   
        $LanKim_B=0;
        $LanKim_C=0;
        $LanKim_D=0;
		
		$Botox=0;   
        $Botox_B=0;
        $Botox_C=0;
        $Botox_D=0;
		
		$Juvederm=0; 
        $Juvederm_B=0;
        $Juvederm_C=0;
        $Juvederm_D=0;
		
		$Restylane=0; 
        $Restylane_B=0;
        $Restylane_C=0;
        $Restylane_D=0;
		
		$TiemMeSo=0; 
        $TiemMeSo_B=0;
        $TiemMeSo_C=0;
        $TiemMeSo_D=0;
		
		$Autosang=0; 
        $Autosang_B=0;
        $Autosang_C=0;
        $Autosang_D=0;
		
		$GoiDau=0; 
        $GoiDau_B=0;
        $GoiDau_C=0;
        $GoiDau_D=0;
		
		$GoiDau=0; 
        $GoiDau_B=0;
        $GoiDau_C=0;
        $GoiDau_D=0;
		
		$BamHuyetTriLieuBanChan=0; 
        $BamHuyetTriLieuBanChan_B=0;
        $BamHuyetTriLieuBanChan_C=0;
        $BamHuyetTriLieuBanChan_D=0;
		
		$BamHuyetTriLieuToanThan=0;
        $BamHuyetTriLieuToanThan_B=0;
        $BamHuyetTriLieuToanThan_C=0;
        $BamHuyetTriLieuToanThan_D=0;
		
		
		
		 
        $TT_PT=0;
         $New=0;


        foreach ($tam as $row) {//duyet toan bo mang tra ve
         $Ngay='';
    if ($row["ThoiGianVaoKham"] instanceof DateTime) {
        $Ngay=$row["ThoiGianVaoKham"]->format('d/m');
        }else{ $Ngay=$row["ThoiGianVaoKham"];}
		
		
		
		    ($row['Switched']==0) ? $row['Switched']='':$row['Switched']=$row['Switched'];
            ($row['Switched_B']==0) ? $row['Switched_B']='':$row['Switched_B']=$row['Switched_B'];
            ($row['Switched_C']==0) ? $row['Switched_C']='':$row['Switched_C']=$row['Switched_C'];         
            ($row['Switched_D']==0) ? $row['Switched_D']='':$row['Switched_D']=$row['Switched_D'];  
            ($row['IPL']==0) ? $row['IPL']='':$row['IPL']=$row['IPL'];
            ($row['IPL_B']==0) ? $row['IPL_B']='':$row['IPL_B']=$row['IPL_B'];
            ($row['IPL_C']==0) ? $row['IPL_C']='':$row['IPL_C']=$row['IPL_C'];
            ($row['IPL_D']==0) ? $row['IPL_D']='':$row['IPL_D']=$row['IPL_D'];
            ($row['Omnislim']==0) ? $row['Omnislim']='':$row['Omnislim']=$row['Omnislim'];
            ($row['Omnislim_B']==0) ? $row['Omnislim_B']='':$row['Omnislim_B']=$row['Omnislim_B'];
            ($row['Omnislim_C']==0) ? $row['Omnislim_C']='':$row['Omnislim_C']=$row['Omnislim_C'];
            ($row['Omnislim_D']==0) ? $row['Omnislim_D']='':$row['Omnislim_D']=$row['Omnislim_D'];
            ($row['Dermatrix']==0) ? $row['Dermatrix']='':$row['Dermatrix']=$row['Dermatrix'];
            ($row['Dermatrix_B']==0) ? $row['Dermatrix_B']='':$row['Dermatrix_B']=$row['Dermatrix_B'];
            ($row['Dermatrix_C']==0) ? $row['Dermatrix_C']='':$row['Dermatrix_C']=$row['Dermatrix_C'];
            ($row['Dermatrix_D']==0) ? $row['Dermatrix_D']='':$row['Dermatrix_D']=$row['Dermatrix_D'];
            ($row['FractionalCO2']==0) ? $row['FractionalCO2']='':$row['FractionalCO2']=$row['FractionalCO2'];
            ($row['FractionalCO2_B']==0) ? $row['FractionalCO2_B']='':$row['FractionalCO2_B']=$row['FractionalCO2_B'];
            ($row['FractionalCO2_C']==0) ? $row['FractionalCO2_C']='':$row['FractionalCO2_C']=$row['FractionalCO2_C'];
            ($row['FractionalCO2_D']==0) ? $row['FractionalCO2_D']='':$row['FractionalCO2_D']=$row['FractionalCO2_D'];
            ($row['LaserCO2']==0) ? $row['LaserCO2']='':$row['LaserCO2']=$row['LaserCO2'];
            ($row['LaserCO2_B']==0) ? $row['LaserCO2_B']='':$row['LaserCO2_B']=$row['LaserCO2_B'];
            ($row['LaserCO2_C']==0) ? $row['LaserCO2_C']='':$row['LaserCO2_C']=$row['LaserCO2_C'];
            ($row['LaserCO2_D']==0) ? $row['LaserCO2_D']='':$row['LaserCO2_D']=$row['LaserCO2_D'];
            ($row['MassageBody']==0) ? $row['MassageBody']='':$row['MassageBody']=$row['MassageBody'];
            ($row['MassageBody_B']==0) ? $row['MassageBody_B']='':$row['MassageBody_B']=$row['MassageBody_B'];
            ($row['MassageBody_C']==0) ? $row['MassageBody_C']='':$row['MassageBody_C']=$row['MassageBody_C'];
            ($row['MassageBody_D']==0) ? $row['MassageBody_D']='':$row['MassageBody_D']=$row['MassageBody_D'];
            ($row['CSDTT']==0) ? $row['CSDTT']='':$row['CSDTT']=$row['CSDTT'];
            ($row['CSDTT_B']==0) ? $row['CSDTT_B']='':$row['CSDTT_B']=$row['CSDTT_B'];
            ($row['CSDTT_C']==0) ? $row['CSDTT_C']='':$row['CSDTT_C']=$row['CSDTT_C'];
            ($row['CSDTT_D']==0) ? $row['CSDTT_D']='':$row['CSDTT_D']=$row['CSDTT_D'];
            ($row['CSDM']==0) ? $row['CSDM']='':$row['CSDM']=$row['CSDM'];
            ($row['CSDM_B']==0) ? $row['CSDM_B']='':$row['CSDM_B']=$row['CSDM_B'];
            ($row['CSDM_C']==0) ? $row['CSDM_C']='':$row['CSDM_C']=$row['CSDM_C'];
            ($row['CSDM_D']==0) ? $row['CSDM_D']='':$row['CSDM_D']=$row['CSDM_D'];
            ($row['Cryot']==0) ? $row['Cryot']='':$row['Cryot']=$row['Cryot'];
            ($row['Cryot_B']==0) ? $row['Cryot_B']='':$row['Cryot_B']=$row['Cryot_B'];
            ($row['Cryot_C']==0) ? $row['Cryot_C']='':$row['Cryot_C']=$row['Cryot_C'];
            ($row['Cryot_D']==0) ? $row['Cryot_D']='':$row['Cryot_D']=$row['Cryot_D'];
			
			 ($row['PRP']==0) ? $row['PRP']='':$row['PRP']=$row['PRP'];
            ($row['PRP_B']==0) ? $row['PRP_B']='':$row['PRP_B']=$row['PRP_B'];
            ($row['PRP_C']==0) ? $row['PRP_C']='':$row['PRP_C']=$row['PRP_C'];
            ($row['PRP_D']==0) ? $row['PRP_D']='':$row['PRP_D']=$row['PRP_D'];

            ($row['TiemSeoLoi']==0) ? $row['TiemSeoLoi']='':$row['TiemSeoLoi']=$row['TiemSeoLoi'];
            ($row['TiemSeoLoi_B']==0) ? $row['TiemSeoLoi_B']='':$row['TiemSeoLoi_B']=$row['TiemSeoLoi_B'];
            ($row['TiemSeoLoi_C']==0) ? $row['TiemSeoLoi_C']='':$row['TiemSeoLoi_C']=$row['TiemSeoLoi_C'];
            ($row['TiemSeoLoi_D']==0) ? $row['TiemSeoLoi_D']='':$row['TiemSeoLoi_D']=$row['TiemSeoLoi_D'];
			
			 ($row['LanKim']==0) ? $row['LanKim']='':$row['LanKim']=$row['LanKim'];
            ($row['LanKim_B']==0) ? $row['LanKim_B']='':$row['LanKim_B']=$row['LanKim_B'];
            ($row['LanKim_C']==0) ? $row['LanKim_C']='':$row['LanKim_C']=$row['LanKim_C'];
            ($row['LanKim_D']==0) ? $row['LanKim_D']='':$row['LanKim_D']=$row['LanKim_D'];
			
			 ($row['Botox']==0) ? $row['Botox']='':$row['Botox']=$row['Botox'];
            ($row['Botox_B']==0) ? $row['Botox_B']='':$row['Botox_B']=$row['Botox_B'];
            ($row['Botox_C']==0) ? $row['Botox_C']='':$row['Botox_C']=$row['Botox_C'];
            ($row['Botox_D']==0) ? $row['Botox_D']='':$row['Botox_D']=$row['Botox_D'];
			
			 ($row['Juvederm']==0) ? $row['Juvederm']='':$row['Juvederm']=$row['Juvederm'];
            ($row['Juvederm_B']==0) ? $row['Juvederm_B']='':$row['Juvederm_B']=$row['Juvederm_B'];
            ($row['Juvederm_C']==0) ? $row['Juvederm_C']='':$row['Juvederm_C']=$row['Juvederm_C'];
            ($row['Juvederm_D']==0) ? $row['Juvederm_D']='':$row['Juvederm_D']=$row['Juvederm_D'];
			
			 ($row['Restylane']==0) ? $row['Restylane']='':$row['Restylane']=$row['Restylane'];
            ($row['Restylane_B']==0) ? $row['Restylane_B']='':$row['Restylane_B']=$row['Restylane_B'];
            ($row['Restylane_C']==0) ? $row['Restylane_C']='':$row['Restylane_C']=$row['Restylane_C'];
            ($row['Restylane_D']==0) ? $row['Restylane_D']='':$row['Restylane_D']=$row['Restylane_D'];
			
			 ($row['TiemMeSo']==0) ? $row['TiemMeSo']='':$row['TiemMeSo']=$row['TiemMeSo'];
            ($row['TiemMeSo_B']==0) ? $row['TiemMeSo_B']='':$row['TiemMeSo_B']=$row['TiemMeSo_B'];
            ($row['TiemMeSo_C']==0) ? $row['TiemMeSo_C']='':$row['TiemMeSo_C']=$row['TiemMeSo_C'];
            ($row['TiemMeSo_D']==0) ? $row['TiemMeSo_D']='':$row['TiemMeSo_D']=$row['TiemMeSo_D'];
			
				 ($row['Autosang']==0) ? $row['Autosang']='':$row['Autosang']=$row['Autosang'];
            ($row['Autosang_B']==0) ? $row['Autosang_B']='':$row['Autosang_B']=$row['Autosang_B'];
            ($row['Autosang_C']==0) ? $row['Autosang_C']='':$row['Autosang_C']=$row['Autosang_C'];
            ($row['Autosang_D']==0) ? $row['Autosang_D']='':$row['Autosang_D']=$row['Autosang_D'];
			
				 ($row['GoiDau']==0) ? $row['GoiDau']='':$row['GoiDau']=$row['GoiDau'];
            ($row['GoiDau_B']==0) ? $row['GoiDau_B']='':$row['GoiDau_B']=$row['GoiDau_B'];
            ($row['GoiDau_C']==0) ? $row['GoiDau_C']='':$row['GoiDau_C']=$row['GoiDau_C'];
            ($row['GoiDau_D']==0) ? $row['GoiDau_D']='':$row['GoiDau_D']=$row['GoiDau_D'];
			
				 ($row['BamHuyetTriLieuBanChan']==0) ? $row['BamHuyetTriLieuBanChan']='':$row['BamHuyetTriLieuBanChan']=$row['BamHuyetTriLieuBanChan'];
            ($row['BamHuyetTriLieuBanChan_B']==0) ? $row['BamHuyetTriLieuBanChan_B']='':$row['BamHuyetTriLieuBanChan_B']=$row['BamHuyetTriLieuBanChan_B'];
            ($row['BamHuyetTriLieuBanChan_C']==0) ? $row['BamHuyetTriLieuBanChan_C']='':$row['BamHuyetTriLieuBanChan_C']=$row['BamHuyetTriLieuBanChan_C'];
            ($row['BamHuyetTriLieuBanChan_D']==0) ? $row['BamHuyetTriLieuBanChan_D']='':$row['BamHuyetTriLieuBanChan_D']=$row['BamHuyetTriLieuBanChan_D'];
			
				 ($row['BamHuyetTriLieuToanThan']==0) ? $row['BamHuyetTriLieuToanThan']='':$row['BamHuyetTriLieuToanThan']=$row['BamHuyetTriLieuToanThan'];
            ($row['BamHuyetTriLieuToanThan_B']==0) ? $row['BamHuyetTriLieuToanThan_B']='':$row['BamHuyetTriLieuToanThan_B']=$row['BamHuyetTriLieuToanThan_B'];
            ($row['BamHuyetTriLieuToanThan_C']==0) ? $row['BamHuyetTriLieuToanThan_C']='':$row['BamHuyetTriLieuToanThan_C']=$row['BamHuyetTriLieuToanThan_C'];
            ($row['BamHuyetTriLieuToanThan_D']==0) ? $row['BamHuyetTriLieuToanThan_D']='':$row['BamHuyetTriLieuToanThan_D']=$row['BamHuyetTriLieuToanThan_D'];
		
		
		
		
        ?>
         <tr>
            <td align="center"><?=$stt?></td>
            <td align="left"><?= $Ngay?></td>
            <td align="left"><?= $row['MaBenhNhan']?></td>
            <td bgcolor="#dce775"><?=$row['HoLotBenhNhan']?></td>
            <td bgcolor="#dce775"><?=$row['TenBenhNhan']?></td>
            <td style="color:green"><?=$row['BS']?></td>
            <td style="color:green"><?=$row['New']?></td>
            <td align="left"><?= $row['Switched']?></td>
            <td align="left"><?= $row['Switched_B']?></td>
            <td align="left" class="colored3"><?= $row['Switched_C']?></td>         
            <td align="left" class="colored4"><?= $row['Switched_D']?></td>   
            <td align="left"><?= $row['IPL']?></td>
            <td align="left"><?= $row['IPL_B']?></td>
            <td align="left" class="colored3"><?= $row['IPL_C']?></td>
            <td align="left" class="colored4"><?= $row['IPL_D']?></td>  
            <td align="left"><?= $row['Omnislim']?></td>
            <td align="left"><?= $row['Omnislim_B']?></td>
            <td align="left"class="colored3"><?= $row['Omnislim_C']?></td>
            <td align="left" class="colored4"><?= $row['Omnislim_D']?></td>  
            <td align="left"><?= $row['Dermatrix']?></td>
            <td align="left"><?= $row['Dermatrix_B']?></td>
            <td align="left"class="colored3"><?= $row['Dermatrix_C']?></td>
            <td align="left" class="colored4"><?= $row['Dermatrix_D']?></td>  
            <td align="left"><?= $row['FractionalCO2']?></td>
            <td align="left"><?= $row['FractionalCO2_B']?></td>
            <td align="left" class="colored3"><?= $row['FractionalCO2_C']?></td>
            <td align="left" class="colored4"><?= $row['FractionalCO2_D']?></td>  
            <td align="left"><?= $row['LaserCO2']?></td>
            <td align="left"><?= $row['LaserCO2_B']?></td>
            <td align="left" class="colored3"><?= $row['LaserCO2_C']?></td>
            <td align="left" class="colored4"><?= $row['LaserCO2_D']?></td>  
            <td align="left"><?= $row['MassageBody']?></td>
            <td align="left"><?= $row['MassageBody_B']?></td>
            <td align="left" class="colored3"><?= $row['MassageBody_C']?></td>
            <td align="left" class="colored4"><?= $row['MassageBody_D']?></td>  
            <td align="left"><?= $row['CSDTT']?></td>
            <td align="left"><?= $row['CSDTT_B']?></td>
            <td align="left" class="colored3"><?= $row['CSDTT_C']?></td>
            <td align="left" class="colored4"><?= $row['CSDTT_D']?></td>  
            <td align="left" ><?= $row['CSDM']?></td>
            <td align="left"><?= $row['CSDM_B']?></td>
            <td align="left"class="colored3"><?= $row['CSDM_C']?></td>
            <td align="left" class="colored4"><?= $row['CSDM_D']?></td>  
            <td align="left"><?= $row['Cryot']?></td>
            <td align="left"><?= $row['Cryot_B']?></td>
            <td align="left"class="colored3"><?= $row['Cryot_C']?></td>
            <td align="left" class="colored4"><?= $row['Cryot_D']?></td>
            
            
            <td align="left"><?= $row['PRP']?></td>
            <td align="left"><?= $row['PRP_B']?></td>
            <td align="left"class="colored3"><?= $row['PRP_C']?></td>
            <td align="left" class="colored4"><?= $row['PRP_D']?></td>
            
            
            <td align="left"><?= $row['TiemSeoLoi']?></td>
            <td align="left"><?= $row['TiemSeoLoi_B']?></td>
            <td align="left"class="colored3"><?= $row['TiemSeoLoi_C']?></td>
            <td align="left" class="colored4"><?= $row['TiemSeoLoi_D']?></td>
            
            
            
                      <td align="left"><?= $row['LanKim']?></td>
            <td align="left"><?= $row['LanKim_B']?></td>
            <td align="left"class="colored3"><?= $row['LanKim_C']?></td>
            <td align="left" class="colored4"><?= $row['LanKim_D']?></td>
            
                                  <td align="left"><?= $row['Botox']?></td>
            <td align="left"><?= $row['Botox_B']?></td>
            <td align="left"class="colored3"><?= $row['Botox_C']?></td>
            <td align="left" class="colored4"><?= $row['Botox_D']?></td>
            
            
                                  <td align="left"><?= $row['Juvederm']?></td>
            <td align="left"><?= $row['Juvederm_B']?></td>
            <td align="left"class="colored3"><?= $row['Juvederm_C']?></td>
            <td align="left" class="colored4"><?= $row['Juvederm_D']?></td>
            
            
                                  <td align="left"><?= $row['Restylane']?></td>
            <td align="left"><?= $row['Restylane_B']?></td>
            <td align="left"class="colored3"><?= $row['Restylane_C']?></td>
            <td align="left" class="colored4"><?= $row['Restylane_D']?></td>
            
            
                                  <td align="left"><?= $row['TiemMeSo']?></td>
            <td align="left"><?= $row['TiemMeSo_B']?></td>
            <td align="left"class="colored3"><?= $row['TiemMeSo_C']?></td>
            <td align="left" class="colored4"><?= $row['TiemMeSo_D']?></td>
            
            
                                  <td align="left"><?= $row['Autosang']?></td>
            <td align="left"><?= $row['Autosang_B']?></td>
            <td align="left"class="colored3"><?= $row['Autosang_C']?></td>
            <td align="left" class="colored4"><?= $row['Autosang_D']?></td>
            
            
                                  <td align="left"><?= $row['GoiDau']?></td>
            <td align="left"><?= $row['GoiDau_B']?></td>
            <td align="left"class="colored3"><?= $row['GoiDau_C']?></td>
            <td align="left" class="colored4"><?= $row['GoiDau_D']?></td>
            
                                              <td align="left"><?= $row['BamHuyetTriLieuBanChan']?></td>
            <td align="left"><?= $row['BamHuyetTriLieuBanChan_B']?></td>
            <td align="left"class="colored3"><?= $row['BamHuyetTriLieuBanChan_C']?></td>
            <td align="left" class="colored4"><?= $row['BamHuyetTriLieuBanChan_D']?></td>
            
                                              <td align="left"><?= $row['BamHuyetTriLieuToanThan']?></td>
            <td align="left"><?= $row['BamHuyetTriLieuToanThan_B']?></td>
            <td align="left"class="colored3"><?= $row['BamHuyetTriLieuToanThan_C']?></td>
            <td align="left" class="colored4"><?= $row['BamHuyetTriLieuToanThan_D']?></td>
            
            
            
              
            <td style="color:blue"><?=$row['TT_PT']?></td>
            <td style="color:red"><?=$row['TongTienPhaiTra']?></td>
            <td style="color:red"><?=$row['GiamGia']?></td>
            <td style="color:red"><?=$row['SoTienThanhToan']?></td>
            <td style="color:red"><?=$row['NoCuoi']?></td>
         </tr>


        <?php    
        $stt++;
        $sumtien=$sumtien+$row['TongTienPhaiTra'];
        $sumtienGiam=$sumtienGiam+$row['GiamGia'];
        $sumtienTra=$sumtienTra+$row['SoTienThanhToan'];

        $Switched= $Switched+$row['Switched'];
        $Switched_B= $Switched_B+$row['Switched_B'];
        $Switched_C= $Switched_C+$row['Switched_C'];
        $Switched_D= $Switched_D+$row['Switched_D'];

        $IPL= $IPL+$row['IPL'];
        $IPL_B= $IPL_B+$row['IPL_B'];
        $IPL_C= $IPL_C+$row['IPL_C'];
        $IPL_D= $IPL_D+$row['IPL_D'];

        $Omnislim= $Omnislim+$row['Omnislim'];
        $Omnislim_B= $Omnislim_B+$row['Omnislim_B'];
        $Omnislim_C= $Omnislim_C+$row['Omnislim_C'];
        $Omnislim_D= $Omnislim_D+$row['Omnislim_D'];



        $Dermatrix= $Dermatrix+$row['Dermatrix'];
        $Dermatrix_B= $Dermatrix_B+$row['Dermatrix_B'];
        $Dermatrix_C= $Dermatrix_C+$row['Dermatrix_C'];
        $Dermatrix_D= $Dermatrix_D+$row['Dermatrix_D'];

        $FractionalCO2= $FractionalCO2+$row['FractionalCO2'];
        $FractionalCO2_B= $FractionalCO2_B+$row['FractionalCO2_B'];
        $FractionalCO2_C= $FractionalCO2_C+$row['FractionalCO2_C'];
        $FractionalCO2_D= $FractionalCO2_D+$row['FractionalCO2_D'];

        $LaserCO2= $LaserCO2+$row['LaserCO2'];
        $LaserCO2_B= $LaserCO2_B+$row['LaserCO2_B'];
        $LaserCO2_C= $LaserCO2_C+$row['LaserCO2_C'];
        $LaserCO2_D= $LaserCO2_D+$row['LaserCO2_D'];



        $MassageBody= $MassageBody+$row['MassageBody'];
        $MassageBody_B= $MassageBody_B+$row['MassageBody_B'];
        $MassageBody_C= $MassageBody_C+$row['MassageBody_C'];
        $MassageBody_D= $MassageBody_D+$row['MassageBody_D'];

        $CSDTT= $CSDTT+$row['CSDTT'];
        $CSDTT_B= $CSDTT_B+$row['CSDTT_B'];
        $CSDTT_C= $CSDTT_C+$row['CSDTT_C'];
        $CSDTT_D= $CSDTT_D+$row['CSDTT_D'];

        $CSDM= $CSDM+$row['CSDM'];
        $CSDM_B= $CSDM_B+$row['CSDM_B'];
        $CSDM_C= $CSDM_C+$row['CSDM_C'];
        $CSDM_D= $CSDM_D+$row['CSDM_D'];

        $Cryot= $Cryot+$row['Cryot'];
        $Cryot_B= $Cryot_B+$row['Cryot_B'];
        $Cryot_C= $Cryot_C+$row['Cryot_C'];
        $Cryot_D= $Cryot_D+$row['Cryot_D'];
		
		$PRP= $PRP +$row['PRP'];
        $PRP_B= $PRP_B+$row['PRP_B'];
        $PRP_C= $PRP_C+$row['PRP_C'];
        $PRP_D= $PRP_D+$row['PRP_D'];
		
		$TiemSeoLoi= $TiemSeoLoi +$row['TiemSeoLoi'];
        $TiemSeoLoi_B= $TiemSeoLoi_B+$row['TiemSeoLoi_B'];
        $TiemSeoLoi_C= $TiemSeoLoi_C+$row['TiemSeoLoi_C'];
        $TiemSeoLoi_D= $TiemSeoLoi_D+$row['TiemSeoLoi_D'];


		$LanKim= $LanKim +$row['LanKim'];
        $LanKim_B= $LanKim_B+$row['LanKim_B'];
        $LanKim_C= $LanKim_C+$row['LanKim_C'];
        $LanKim_D= $LanKim_D+$row['LanKim_D'];
		
		$Botox= $Botox +$row['Botox'];
        $Botox_B= $Botox_B+$row['Botox_B'];
        $Botox_C= $Botox_C+$row['Botox_C'];
        $Botox_D= $Botox_D+$row['Botox_D'];
		
		$Juvederm= $Juvederm +$row['Juvederm'];
        $Juvederm_B= $Juvederm_B+$row['Juvederm_B'];
        $Juvederm_C= $Juvederm_C+$row['Juvederm_C'];
        $Juvederm_D= $Juvederm_D+$row['Juvederm_D'];
		
		$Restylane= $Restylane +$row['Restylane'];
        $Restylane_B= $Restylane_B+$row['Restylane_B'];
        $Restylane_C= $Restylane_C+$row['Restylane_C'];
        $Restylane_D= $Restylane_D+$row['Restylane_D'];
		
			$TiemMeSo= $TiemMeSo +$row['TiemMeSo'];
        $TiemMeSo= $TiemMeSo_B+$row['TiemMeSo_B'];
        $TiemMeSo_C= $TiemMeSo_C+$row['TiemMeSo_C'];
        $TiemMeSo_D= $TiemMeSo_D+$row['TiemMeSo_D'];
		
			$Autosang= $Autosang +$row['Autosang'];
        $Autosang_B= $Autosang_B+$row['Autosang_B'];
        $Autosang_C= $Autosang_C+$row['Autosang_C'];
        $Autosang_D= $Autosang_D+$row['Autosang_D'];
		
			$GoiDau= $GoiDau +$row['GoiDau'];
        $GoiDau_B= $GoiDau_B+$row['GoiDau_B'];
        $GoiDau_C= $GoiDau_C+$row['GoiDau_C'];
        $GoiDau_D= $GoiDau_D+$row['GoiDau_D'];
		
			$BamHuyetTriLieuBanChan= $BamHuyetTriLieuBanChan +$row['BamHuyetTriLieuBanChan'];
        $BamHuyetTriLieuBanChan_B= $BamHuyetTriLieuBanChan_B+$row['BamHuyetTriLieuBanChan_B'];
        $BamHuyetTriLieuBanChan_C= $BamHuyetTriLieuBanChan_C+$row['BamHuyetTriLieuBanChan_C'];
        $BamHuyetTriLieuBanChan_D= $BamHuyetTriLieuBanChan_D+$row['BamHuyetTriLieuBanChan_D'];
		
					$BamHuyetTriLieuToanThan= $BamHuyetTriLieuToanThan +$row['BamHuyetTriLieuToanThan'];
        $BamHuyetTriLieuToanThan_B= $BamHuyetTriLieuToanThan_B+$row['BamHuyetTriLieuToanThan_B'];
        $BamHuyetTriLieuToanThan_C= $BamHuyetTriLieuToanThan_C+$row['BamHuyetTriLieuToanThan_C'];
        $BamHuyetTriLieuToanThan_D= $BamHuyetTriLieuToanThan_D+$row['BamHuyetTriLieuToanThan_D'];

        $TT_PT= $TT_PT+$row['TT_PT'];
        $New=$New+$row['New'];

              
        }
        ?>
        <tr bgcolor="yellow">
           <td align="center"></td>
           <td align="left"></td>
           <td align="left"></td>
           <td bgcolor="#dce775"></td>
           <td bgcolor="#dce775"></td>
           <td style="color:green"></td>
           <td align="left"><?=$New?></td>
           <td align="left"><?=$Switched?></td>
           <td align="left"><?=$Switched_B?></td>
           <td align="left"><?=$Switched_C?></td>         
           <td align="left"><?=$Switched_D?></td> 
           <td align="left"><?=$IPL?></td>
           <td align="left"><?=$IPL_B?></td>
           <td align="left"><?=$IPL_C?></td>
           <td align="left"><?=$IPL_D?></td>
           <td align="left"><?=$Omnislim?></td>
           <td align="left"><?=$Omnislim_B?></td>
           <td align="left"><?=$Omnislim_C?></td>
           <td align="left"><?=$Omnislim_D?></td>
           <td align="left"><?=$Dermatrix?></td>
           <td align="left"><?=$Dermatrix_B?></td>
           <td align="left"><?=$Dermatrix_C?></td>
           <td align="left"><?=$Dermatrix_D?></td>
           <td align="left"><?=$FractionalCO2?></td>
           <td align="left"><?=$FractionalCO2_B?></td>
           <td align="left"><?=$FractionalCO2_C?></td>
           <td align="left"><?=$FractionalCO2_D?></td>
           <td align="left"><?=$LaserCO2?></td>
           <td align="left"><?=$LaserCO2_B?></td>
           <td align="left"><?=$LaserCO2_C?></td>
           <td align="left"><?=$LaserCO2_D?></td>
           <td align="left"><?=$MassageBody?></td>
           <td align="left"><?=$MassageBody_B?></td>
           <td align="left"><?=$MassageBody_C?></td>
           <td align="left"><?=$MassageBody_D?></td>
           <td align="left"><?=$CSDTT?></td>
           <td align="left"><?=$CSDTT_B?></td>
           <td align="left"><?=$CSDTT_C?></td>
           <td align="left"><?=$CSDTT_D?></td>
           <td align="left"><?=$CSDM?></td>
           <td align="left"><?=$CSDM_B?></td>
           <td align="left"><?=$CSDM_C?></td>
           <td align="left"><?=$CSDM_D?></td>
           <td align="left"><?=$Cryot?></td>
           <td align="left"><?=$Cryot_B?></td>
           <td align="left"><?=$Cryot_C?></td>
           <td align="left"><?=$Cryot_D?></td>   
           <td align="left"><?=$PRP?></td>
           <td align="left"><?=$PRP_B?></td>
           <td align="left"><?=$PRP_C?></td>
           <td align="left"><?=$PRP_D?></td> 
            <td align="left"><?=$TiemSeoLoi?></td>
            <td align="left"><?=$TiemSeoLoi_B?></td>
            <td align="left"><?=$TiemSeoLoi_C?></td>
            <td align="left"><?=$TiemSeoLoi_D?></td> 
            
            <td align="left"><?=$LanKim?></td>
            <td align="left"><?=$LanKim_B?></td>
            <td align="left"><?=$LanKim_C?></td>
            <td align="left"><?=$LanKim_D?></td>
            
            <td align="left"><?=$Botox?></td>
            <td align="left"><?=$Botox_B?></td>
            <td align="left"><?=$Botox_C?></td>
            <td align="left"><?=$Botox_D?></td>
            
            <td align="left"><?=$Juvederm?></td>
            <td align="left"><?=$Juvederm_B?></td>
            <td align="left"><?=$Juvederm_C?></td>
            <td align="left"><?=$Juvederm_D?></td>
            
            <td align="left"><?=$Restylane?></td>
            <td align="left"><?=$Restylane_B?></td>
            <td align="left"><?=$Restylane_C?></td>
            <td align="left"><?=$Restylane_D?></td>
            
            <td align="left"><?=$TiemMeSo?></td>
            <td align="left"><?=$TiemMeSo_B?></td>
            <td align="left"><?=$TiemMeSo_C?></td>
            <td align="left"><?=$TiemMeSo_D?></td>
            
            <td align="left"><?=$Autosang?></td>
            <td align="left"><?=$Autosang_B?></td>
            <td align="left"><?=$Autosang_C?></td>
            <td align="left"><?=$Autosang_D?></td>
            
            <td align="left"><?=$GoiDau?></td>
            <td align="left"><?=$GoiDau_B?></td>
            <td align="left"><?=$GoiDau_C?></td>
            <td align="left"><?=$GoiDau_D?></td>
            
            <td align="left"><?=$BamHuyetTriLieuBanChan?></td>
            <td align="left"><?=$BamHuyetTriLieuBanChan_B?></td>
            <td align="left"><?=$BamHuyetTriLieuBanChan_C?></td>
            <td align="left"><?=$BamHuyetTriLieuBanChan_D?></td>
            
            <td align="left"><?=$BamHuyetTriLieuToanThan?></td>
            <td align="left"><?=$BamHuyetTriLieuToanThan_B?></td>
            <td align="left"><?=$BamHuyetTriLieuToanThan_C?></td>
            <td align="left"><?=$BamHuyetTriLieuToanThan_D?></td>
            
            
          <td align="left"><?=$TT_PT?></td>
           <td style="color:red"><?=$sumtien?></td>
           <td style="color:red"><?=$sumtienGiam?></td>
           <td style="color:red"><?=$sumtienTra?></td>
            <td align="center" valign="middle" style="color:red"><strong>^_^</strong></td>
        </tr>
</table>
</div>
</body>
</html>
<?php


	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.xls","THONGKE_THAMMY_DICHVU.xls");
	}


	?>