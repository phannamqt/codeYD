<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	if(isset($_GET["tu_ngay"]))
	{
	   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
	}
	else
	{
		$tu_ngay=date("Y-m-d").' 0:00:00';
	}
	if(isset($_GET["den_ngay"]))
	{
	$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
	}
	else
	{
		 $den_ngay=date("Y-m-d").' 23:59:59';
	}
	//$_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59'
	$store_name="{call GD2_baocaonoitru_bhyt (?,?)}";
	$params = array($tu_ngay,$den_ngay);

	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
	//echo $tam;
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

</style>
</head>
<body>
<div id="wrapper">
  <div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH NGƯỜI BỆNH BẢO HIỂM Y TẾ KHÁM CHỮA BỆNH NỘI TRÚ ĐỀ NGHỊ THANH TOÁN</div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tu_ngay"].' đến ngày '.$_GET["den_ngay"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
  <thead >
    	<tr style="border:solid 1px #000000 !important;border-top-color:solid 1px #000000">
	          <td style="border:solid 1px #000000 !important;width:40%;" rowspan="2"  align="center" >STT</td>
	          <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" >HỌ VÀ TÊN</td>
	          <td style="border:solid 1px #000000 !important;width:5%;"  rowspan="2"  align="center" >Năm sinh</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" >Giới tính</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Số thẻ BHYT</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Mã cơ sở KCB BĐ</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Mã bệnh</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Ngày khám</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" >Ngày ra</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Tổng cộng</td>
	          <td style="border:solid 1px #000000 !important;width:30%;" colspan="11"  align="center" ><b></b>CHI PHÍ KHÁM CHỮA BỆNH PHÁT SINH TẠI CƠ SỞ KCB</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Tổng<br />
	            cộng</td>
	          <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Người <br />
	            bệnh<br />
	            cùng<br />
	            chi trả</td>
	          <td style="border:solid 1px #000000 !important;width:30%;" colspan="2"  align="center" ><b></b>Chi phí đề nghị cơ quan BHYT thanh toán</td>
              <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Lý do vào viện</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Bệnh khác</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Nơi KCB</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Năm quyết toán</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Tháng quyết toán</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" >Thẻ BHYT có giá trị từ</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" >Thẻ BHYT có giá trị đến</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" >Địa chỉ</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Khoa điều trị</td>
                <td style="border:solid 1px #000000 !important;width:10%;" rowspan="2"  align="center" ><b></b>Tai nạn giao thông</td>
            </tr>
	        <tr >
	          <td style="border:solid 1px #000000 !important;" align="center">XN</td>
	          <td style="border:solid 1px #000000 !important;" align="center">CDHA-<br />
	            TDCN</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Thuốc,<br />
	            DT</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Máu</td>
	          <td style="border:solid 1px #000000 !important;" align="center">TT,PT</td>
	          <td style="border:solid 1px #000000 !important;" align="center"><p>VTYT TIÊU HAO</p></td>
	          <td style="border:solid 1px #000000 !important;" align="center">VTYT THAY THẾ</td>
	          <td style="border:solid 1px #000000 !important;" align="center">DVKT <br />
	            cao</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Thuốc<br />
	            K,thải<br />
	            ghép ngoài danh mục</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Tiền<br />
	            Giường</td>
              <td style="border:solid 1px #000000 !important;" align="center">Khám<br />
	            Bệnh</td>
	          <td style="border:solid 1px #000000 !important;" align="center">CP<br />
	            VC</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Số tiền</td>
	          <td style="border:solid 1px #000000 !important;" align="center">Trong đó chi phí ngoài quỹ định suất</td>
            </tr>
	        <tr style="font-size:12px">
	          <td style="border:solid 1px #000000 !important;" align="center">1</td>
	          <td style="border:solid 1px #000000 !important;" align="center">2</td>
	          <td style="border:solid 1px #000000 !important;" align="center">3</td>
	          <td style="border:solid 1px #000000 !important;" align="center">4</td>
	          <td style="border:solid 1px #000000 !important;" align="center">5</td>
	          <td style="border:solid 1px #000000 !important;" align="center">6</td>
	          <td style="border:solid 1px #000000 !important;" align="center">7</td>
	          <td style="border:solid 1px #000000 !important;" align="center">8</td>
	          <td style="border:solid 1px #000000 !important;" align="center">9</td>
              <td style="border:solid 1px #000000 !important;" align="center">10</td>
	          <td style="border:solid 1px #000000 !important;" align="center">11</td>
	          <td style="border:solid 1px #000000 !important;" align="center">12</td>
	          <td style="border:solid 1px #000000 !important;" align="center">13</td>
              <td style="border:solid 1px #000000 !important;" align="center">14</td>
	          <td style="border:solid 1px #000000 !important;" align="center">15</td>
	          <td style="border:solid 1px #000000 !important;" align="center">16</td>
	          <td style="border:solid 1px #000000 !important;" align="center">17</td>
	          <td style="border:solid 1px #000000 !important;" align="center">18</td>
	          <td style="border:solid 1px #000000 !important;" align="center">19</td>
              <td style="border:solid 1px #000000 !important;" align="center">20</td>
	          <td style="border:solid 1px #000000 !important;" align="center">21</td>
	          <td style="border:solid 1px #000000 !important;" align="center">22</td>
              <td style="border:solid 1px #000000 !important;" align="center">23</td>
	          <td style="border:solid 1px #000000 !important;" align="center">24</td>
	          <td style="border:solid 1px #000000 !important;" align="center">25</td>
	          <td style="border:solid 1px #000000 !important;" align="center">26</td>
	          <td style="border:solid 1px #000000 !important;" align="center">27</td>
              <td style="border:solid 1px #000000 !important;" align="center">28</td>
	          <td style="border:solid 1px #000000 !important;" align="center">29</td>
	          <td style="border:solid 1px #000000 !important;" align="center">30</td>
	          <td style="border:solid 1px #000000 !important;" align="center">31</td>
	          <td style="border:solid 1px #000000 !important;" align="center">32</td>
	          <td style="border:solid 1px #000000 !important;" align="center">33</td>
	          <td style="border:solid 1px #000000 !important;" align="center">34</td>
              <td style="border:solid 1px #000000 !important;" align="center">35</td>
              <td style="border:solid 1px #000000 !important;" align="center">36</td>
              <td style="border:solid 1px #000000 !important;" align="center"></td>
              <td style="border:solid 1px #000000 !important;" align="center"></td>
            </tr>
           </thead >
           <?php
		   $XN=0;$CDHA=0;$Thuoc=0;$mau=0;$TTPT=0;$VTYT=0;$VTTT=0;$DVKTC=0;
		   $ThuocUT=0;$VC=0;$Tong=0;$ThuocUT=0;$ThanhTienCungChiTra=0;$ThanhTienBaoHiem=0;$KB=0;$Giuong=0;
		//$stt=1;
		
        foreach ($tam as $row) {//duyet toan bo mang tra ve
			/*if($row["thoigianvaokham"]!=''){
				$row["thoigianvaokham"]=$row["thoigianvaokham"]->format("d/m/y");
			}else{
				$row["thoigianvaokham"]='';
			}*/
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$row['STT']."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["tenbn"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["NamSinh"]."</td>";
			echo "<td align=" . '"'. "left".'"'.">".$row["GioiTinh"]."</td>";
			echo '<td align="right">'.$row["SoThe"]."</td>";
			echo '<td align="right">'.$row["Ma_KCB_BanDau"]."</td>";
			echo '<td align="right">'.$row["ICD_RaVienBenhChinh"]."</td>";
			echo '<td align="right">'.$row["thoigianvaokham"]."</td>";
			echo '<td align="right">'.$row["NgayGioRaVien"]."</td>";
			echo '<td align="right">'.$row["ngaydtr"]."</td>";
			echo '<td align="right">'.$row["XN"]."</td>";
			echo '<td align="right">'.$row["CDHA"]."</td>";
			echo '<td align="right">'.$row["Thuoc"]."</td>";
			echo '<td align="right">'.$row["mau"]."</td>";
			echo '<td align="right">'.$row["TTPT"]."</td>";
			echo '<td align="right">'.$row["VTYT"]."</td>";
			echo '<td align="right">'.$row["VTTT"]."</td>";
			echo '<td align="right">'.$row["DVKTC"]."</td>";
			echo '<td align="right">'.$row["ThuocUT"]."</td>";
			echo '<td align="right">'.$row["Giuong"]."</td>";
			echo '<td align="right">'.$row["KB"]."</td>";
			/*echo '<td align="left">'.$row["KB"]."</td>";*/
			
			echo '<td align="right">'.$row["VC"]."</td>";
			echo '<td align="right">'.$row["Tong"]."</td>";
			echo '<td align="right">'.$row["ThanhTienCungChiTra"]."</td>";
			echo '<td align="right">'.$row["ThanhTienBaoHiem"]."</td>";
			echo '<td align="left">'.' '."</td>";
			echo '<td align="left">'.$row["lydo_vv"]."</td>";
			echo '<td align="center">'.' '."</td>";
			echo '<td align="center">'.'48195'."</td>";
			echo '<td align="center">'.'2015'."</td>";
			echo '<td align="center">'.date("m")."</td>";
			echo '<td align="center">'.$row["HanSD_TuNgay"]."</td>";
			echo '<td align="center">'.$row["HanSD_DenNgay"]."</td>";
			echo '<td align="left">'.$row["DiaChiTheBHYT"]."</td>";
			echo '<td align="left">'.$row["TenPhongBan"]."</td>";
			echo '<td align="left">'.' '."</td>";
			echo '<td align="left">'.$row["ID_LuotKham"]."</td>";
			echo '<td align="left">'.$row["ID_BenhNhan"]."</td>";
			//echo '<td align="left">'.$row["SignNumber"]."</td>";
			echo "</tr>";
			$XN=$XN+$row["XN"];
			$CDHA=$CDHA+$row["CDHA"];
			$Thuoc=$Thuoc+$row["Thuoc"];
			$mau=$mau+$row["mau"];
			$TTPT=$TTPT+$row["TTPT"];
			$VTYT=$VTYT+$row["VTYT"];
			$VTTT=$VTTT+$row["VTTT"];
			$DVKTC=$DVKTC+$row["DVKTC"];
			$ThuocUT=$ThuocUT+$row["ThuocUT"];
			$VC=$VC+$row["VC"];
			$Tong=$Tong+$row["Tong"];
			$ThanhTienCungChiTra=$ThanhTienCungChiTra+$row["ThanhTienCungChiTra"];
			$ThanhTienBaoHiem=$ThanhTienBaoHiem+$row["ThanhTienBaoHiem"];
			$KB=$KB+$row["KB"];
			$Giuong=$Giuong+$row["Giuong"];
			
        }  
		//echo (2000.22,2));
		?> 
    
       <tr bgcolor="#999999">
       	  <td colspan="10" align="right"><strong>Tổng:</strong></td>
          <td align="right"><strong><?=$XN?></strong></td>
          <td align="right"><strong><?=$CDHA?></strong></td>
          <td align="right"><strong><?=$Thuoc?></strong></td>
          <td align="right"><strong><?=$mau?></strong></td>
          <td align="right"><strong><?=$TTPT?></strong></td>
          <td align="right"><strong><?=$VTYT?></strong></td>
          <td align="right"><strong><?=$VTTT?></strong></td>
          <td align="right"><strong><?=$DVKTC?></strong></td>
          <td align="right"><strong><?=$ThuocUT?></strong></td>
          <td align="right"><strong><?=$Giuong?></strong></td>
          <td align="right"><strong><?=$KB?></strong></td>
          <td align="right">0 </td>
          
          <td align="right"><strong><?=$Tong?></strong></td>
          <td align="right"><strong><?=$ThanhTienCungChiTra?></strong></td>
          <td align="right"><strong><?=$ThanhTienBaoHiem?></strong></td>
          <td align="right"></td>
          <td align="right"></td>
    </tr>
      <?php
		/*$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
		if ($row["Active"]?$row["Active"]="Có":$row["Active"]="Không");
            echo "<tr>";
            echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Ma_NhapXuat"]."</td>";
			echo "<td>".$row["Ten_LoaiNhapXuat"]."</td>";
			echo "<td align=" . '"'. "center".'"'.">".$row["Active"]."</td>";
			echo "</tr>";
			$stt++;
        }  */
		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","excel_bhyt_tonghopnoitru.xls");
	}
	?>