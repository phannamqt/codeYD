<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tungay = implode("-", array_reverse(explode("/", $_GET['tungay'])));
	$toingay = implode("-", array_reverse(explode("/", $_GET['toingay'])));
	$data= new SQLServer;
	$store_name="{call [GD2_Lich_Online_Excel_LyDoHuyLich] (?,?)}";
	$params = array($tungay,$toingay);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
	}
	#wrapper{
		width: 100%;
		margin:0 auto;
	}
</style>
</head>
<body>
<div id="wrapper">
  <div style="text-align:center;font-size:18px; font-weight:bold">Danh sách bệnh nhân hủy lịch từ ngày <?=$_GET['tungay']?> đến ngày <?= $_GET['toingay'] ?></div>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
    	<tr height="30">
            <th width="80">STT</th>
            <th width="80">Mã bệnh nhân</th>
            <th width="80">Bệnh nhân</th>
            <th width="80">Ngày hẹn</th>
            <th width="100">Khung giờ hẹn</th>
            <th width="80">Địa chỉ</th>
            <th width="80">Điện thoại liên hệ</th>
            <th width="80">Code</th>
            <th width="100">Hẹn bác sỹ</th>
            <th width="80">Chuyên Khoa</th>
            <th width="180">Ghi chú hủy lịch</th>
            <th width="80">Người hủy</th>
            <th width="120">Thời gian hủy</th>
            <th width="100">Tên phòng ban</th>

      </tr>
         <?php
        	 $stt=1;
       		 foreach ($tam as $row) {//duyet toan bo mang tra ve
       		 	if(!isset($row['ThoiGianHuyLich'])){
       		 		$thoigianhuy = '';
       		 	}else{
       		 		$thoigianhuy = $row['ThoiGianHuyLich']->format('H:i d/m/Y');
       		 	}
       		 	// đoạn xử lý hình ảnh chuỗi
       		 	$pos = strpos(trim($row['GhiChuHuyLich']), '||');
       		 	if(!isset($row['GhiChuHuyLich'])){
       		 		$ghichu = '';
       		 	}else{
       		 		$ghichu = $row['GhiChuHuyLich'];
       		 		$ghichu = explode('||',$ghichu);
       		 		// echo $ghichu;
	if (isset($ghichu[0])) {
		$sdtnb =$ghichu[0];
	}else{
		$sdtnb = '';
	}
	if (isset($ghichu[1])) {
		$sdtbn =$ghichu[1];
	}else{
		$sdtbn = '';
	}
	if (isset($ghichu[2])) {
		$ngaygiogoi = $ghichu[2];
	}else{
		$ngaygiogoi = '';
	}
	if (isset($ghichu[3])) {
		$lydohuylich =$ghichu[3];
	}else{
		$lydohuylich = '';
	}
	if (isset($ghichu[4])) {
		$trangthai = $ghichu[4];
	}else{
		$trangthai = '';
	}
	if (isset($ghichu[5])) {
		$khaosatbenhnhan = $ghichu[5];
	}else{
		$khaosatbenhnhan = '';
	}
       		 		$ghichu = 'Số điện thoại nội bộ gọi cho bệnh nhân: '.$sdtnb.'<br/> số điện thoại bệnh nhân: '.$sdtbn.'<br/>Ngày giờ gọi cho bệnh nhân: '.$ngaygiogoi.'<br/> Lý do hủy lịch: '.$lydohuylich.'<br/> Người hủy: '.$row['HoTenNguoiHuy'].'<br/> Thời gian hủy: '.$thoigianhuy.'<br/> Trang thái: '.$trangthai.'<br/> Mức độ hài lòng BN: '.$khaosatbenhnhan;
       		 	}
		?>
	 <tr>
         	<td align="center"><?=$stt?></td>
			<td align="left"><?=$row['MaBenhNhan']?></td>
			<td align="left"><?=$row['HoLotBenhNhan'].' '.$row['TenBenhNhan']?></td>
			<td align="left"><?=$row['NgayDatHen']->format('d/m/Y')?></td>
			<td align="left"><?=$row['BatDau']->format('H:i').'-'.$row['KetThuc']->format('H:i') ?></td>
			<td align="left"><?=$row['DiaChi']?></td>
			<td align="left"><?=$row['DienThoaiLienHe']?></td>
			<td align="left"><?=$row['Code']?></td>
			<td align="left"><?=$row['TenBacSy']?></td>
			<td align="left"><?=$row['TenChuyenKhoa']?></td>
			<td align="left"><?=$ghichu?></td>
			<td align="left"><?=$row['HoTenNguoiHuy']?></td>
			<td align="left"><?=$thoigianhuy?></td>
			<td align="left"><?=$row['TenPhongBan']?></td>
      </tr>
      <?php
			$stt++;
		}
		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$t = date('d-m-Y');
		$exp->exportWithPage("excel/temp.html","excel_huylich_$t.xls");
	}
?>