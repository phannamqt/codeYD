<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = $_GET['fromdate'] . ' 0:00:00';
$toDate = $_GET['todate'] . ' 23:59:59';
$kieuxem = $_GET['kieuxem'];

$data = new SQLServer; //tao lop ket noi SQL

//$store_name = "{call GD2_MIX_DOANHTHU_KETOAN (?,?,?)}"; //tao bien khai bao store
$store_name = "{call GD2_MIX_DOANHTHU_KETOAN_TDT (?,?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',$_GET['kieuxem']);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc
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
 .color:blue; font-weight:bold;
        }
            .colored3{
    background-color:#D5EAFF;
    color:#2A120A;
    }
</style>

</head>
<body>
<div id="wrapper">
  <div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO TỔNG HỢP </div>
    <?php

		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:100%;margin-top:5px">





	  <tr>
	    <th  rowspan="3" scope="col">STT</th>
	    <th rowspan="3" scope="col">Thời gian</th>
	    <th width="20%" colspan="9" scope="col">Số lượt khám(A)</th>
	    <th width="10%" colspan="4" scope="col">Chi phí(B)</th>
	    <th width="10%" colspan="4" scope="col">Giảm doanh thu(C)</th>
	    <th width="10%" colspan="5" scope="col">Doanh thu(D)</th>
	    <th width="10%" colspan="5" scope="col">Cấu thành doanh thu(E)</th>
	    <th colspan="13" scope="col">Quản trị(F)</th>
      </tr>
	  <tr>
	    <td align="center" valign="middle" ><strong>Ngoại VP</strong></td>
	    <td align="center" valign="middle" ><strong>Ngoại BHYT</strong></td>
	    <td align="center" valign="middle" ><strong>Ngoại BHYT đúng tuyến</strong></td>
	    <td align="center" valign="middle" ><strong>Ngoại BHYT trái tuyến</strong></td>
	    <td align="center" valign="middle" ><strong>Nội VP</strong></td>
	    <td align="center" valign="middle"><strong>Nội BHYT</strong></td>
	    <td align="center" valign="middle"><strong>Nội BHYT đúng tuyến</strong></td>
	    <td align="center" valign="middle"><strong>Nội BHYT trái tuyến</strong></td>
	    <td align="center" valign="middle"><strong>Tổng số lượt khám</strong></td>
	    <td align="center" valign="middle" ><strong>Thuê ngoài</strong></td>
	    <td align="center" valign="middle" ><strong>VTTH</strong></td>
	    <td align="center" valign="middle" ><strong>Tiền vốn thuốc</strong></td>
	    <td align="center" valign="middle" ><strong>Tổng <br />
        chi phí</strong></td>
	    <td align="center" valign="middle" ><strong>Miễn giảm</strong></td>
	    <td align="center" valign="middle" ><strong>Bù BHYT</strong></td>
	    <td align="center" valign="middle"><strong>Hoàn trả CĐ</strong></td>
	    <td align="center" valign="middle"><strong>Tổng giảm Doanh Thu</strong></td>
	    <td align="center" valign="middle" ><strong>Ngoại trú VP</strong></td>
	    <td align="center" valign="middle" ><strong>Ngoại trú BHYT</strong></td>
	    <td align="center" valign="middle" ><strong>Nội trú VP</strong></td>
	    <td align="center" valign="middle" ><strong>Nội trú BHYT</strong></td>
	    <td align="center" valign="middle" ><strong>Tổng Doanh Thu</strong></td>
	    <td align="center" valign="middle" ><strong>Dịch vụ</strong></td>
	    <td align="center" valign="middle" ><strong>Thuốc</strong></td>
        <td align="center" valign="middle" ><strong>Thuốc nội trú</strong></td>
        <td align="center" valign="middle" ><strong>Thuốc ngoại trú</strong></td>
	    <td align="center" valign="middle" ><strong>Giường</strong></td>
	    <td width="10%" align="center" valign="middle" ><strong>Nợ từ Bệnh nhân</strong></td>
	    <td align="center" valign="middle" ><strong>Nợ từ BHYT</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Ngoại trú</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Ngoại trú đúng tuyến</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Ngoại trú trái tuyến</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Nội trú</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Nội trú đúng tuyến</strong></td>
        <td align="center" valign="middle" ><strong>Nợ từ BHYT Nội trú trái tuyến</strong></td>
                                
	    <td align="center" valign="middle" ><strong>Nợ từ BHCC</strong></td>
	    <td align="center" valign="middle" ><strong>Tổng nợ</strong></td>
	    <td width="10%" align="center" valign="middle" ><strong>Tổng Thực thu tại thu ngân</strong></td>
	    <td width="10%" align="center" valign="middle" ><strong>Doanh thu thuần</strong></td>
	    <td width="10%" align="center" valign="middle" ><strong>Lợi nhuận gộp</strong></td>
      </tr>
	  <tr>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>1</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>2=3+4</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>3</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>4</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>5</strong></td>

	    <!-- 6 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>6=7+8</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>7</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>8</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>9=1+2+5+6</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>10</strong></td>
	    
	    <!-- 11 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>11</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>12</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>13=10+11+12</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>14</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>15</strong></td>
	    
	    <!-- 16-->
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>15A</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99"><strong>16=14+15+15A</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>17</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>18</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>19</strong></td>
	    
	    <!-- 21 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>20</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>21=17+18+19+20</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>22</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>23=24+25</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>24</strong></td>
	    
	    <!-- 26 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>25</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>26</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>27</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>28=29+32</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>29=30+31</strong></td>
	    
	    <!-- 31 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>30</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>31</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>32=33+34</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>33</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>34</strong></td>
	    
	    <!-- 36 -->
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>35</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>36=27+28+35</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>37</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>38=21-16</strong></td>
	    <td align="center" valign="middle" bgcolor="#FFFF99" ><strong>39=38-13</strong></td>
      </tr>

         <?php
		$stt=1;
        foreach ($tam as $row) {
	    $TongPTraNoiTru=($row["TongTienPhaiTra"]-$row["TongPTraNgoaiTru"]);
	    $NoAll=($row["nomoi"]+$row["TongTienBHYTChiTra"]+$row["TongTienBHCCTra"]);
	    $tonggiamdoanhthu=$row["MienGiam"]+	$row["HoTroTuBenhVien"]+$row["TienHuyChiDinh"]; 
	    $doanhthuthuan=$row["TongTienPhaiTra"] -$row["MienGiam"]-	$row["HoTroTuBenhVien"]-$row["TienHuyChiDinh"];
		$loinhuangop=$row["TongTienPhaiTra"] -$row["MienGiam"]-	$row["HoTroTuBenhVien"]-$row["TienHuyChiDinh"]-$row["TienVonThuoc"];
	    $SL_NgoaiTru_VP=$row["SLNgoaiTru"]-$row["SLNgoaiTru_BHYT"];
	    $SL_NoiTru_VP=$row["SLNoiTru"]-$row["SLNoiTru_BHYT"];
	    $SLK_ALL=$row["SLNoiTru"]+$row["SLNgoaiTru"];
	    $Ngay='';
    	if ($row["Ngay"] instanceof DateTime) {
        $Ngay=$row["Ngay"]->format('d/m/y');
        }else{ $Ngay=$row["Ngay"];}
		?>
         <tr>
       

         	<td align="left"><?=$stt?></td>
            <td align="left" ><?= $Ngay?></td>
            <td align="right"><?=$SL_NgoaiTru_VP?></td>
            <td align="right"><?=$row["SLNgoaiTru_BHYT"]?></td>
            <td align="right"><?=$row["SLNgoaiTru_BHYT_DungTuyen"]?></td>

           <!--  6 -->
            <td align="right"><?=$row["SLNgoaiTru_BHYT"]-$row["SLNgoaiTru_BHYT_DungTuyen"]?></td>
            <td align="right"><?=$SL_NoiTru_VP?></td>
            <td align="right"><?=$row["SLNoiTru_BHYT"]?></td>
            <td align="right"><?=$row["SLNoiTru_BHYT_DungTuyen"]?></td>
            <td align="right"><?=$row["SLNoiTru_BHYT"]-$row["SLNoiTru_BHYT_DungTuyen"]?></td>

			<!-- 11 -->
            <td align="right" class="colored3"><?=$SLK_ALL?></td>
            <td align="right"><?=0?></td>
            <td align="right"><?=0?></td>
            <td align="right"><?=$row['TienVonThuoc']?></td>
             <td class="colored3" align="right"><?=$row['TienVonThuoc']?></td>
           
             <!-- 16 -->
            <td align="right"><?=$row['MienGiam']?></td>
            <td align="right"><?=$row['HoTroTuBenhVien']?></td>
            <td align="right" class="colored3"><?=$row["TienHuyChiDinh"]?></td>
            <td align="right" class="colored3"><?=$tonggiamdoanhthu?></td>
            <td align="right"><?=$row["TongPTraNgoaiTru"]- $row["TongPTraNgoaiTruBHYT"]?></td>

			<!-- 21 -->
            <td align="right"><?=$row["TongPTraNgoaiTruBHYT"]?></td>
            <td align="right"><?=$TongPTraNoiTru-$row["TongPTraNoiTruBHYT"]?></td>
            <td align="right"><?=$row["TongPTraNoiTruBHYT"]?></td>
            <td align="right" class="colored3"><?=$row["TongTienPhaiTra"]?></td>
            <td align="right"><?=$row["KhamVaDieutri"]?></td>

            <!-- 26 -->
            <td align="right"><?=$row["TienThuoc"]?></td>
             <td align="right"><?=$row["TienThuocNoiTru"]?></td>
             <td align="right"><?=$row["TienThuoc"]-$row["TienThuocNoiTru"]?></td>
             <td align="right"><?=0?></td>
            <td align="right"><?=$row["nomoi"]?></td>

			<!-- 31 -->
            <td align="right"><?=$row["TongTienBHYTChiTra"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra_NgoaiTru"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra_NgoaiTru_DungTuyen"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra_NgoaiTru"]-$row["TongTienBHYTChiTra_NgoaiTru_DungTuyen"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra_NoiTru"]?></td>

            <!-- 36 -->
            <td align="right"><?=$row["TongTienBHYTChiTra_NoiTru_DungTuyen"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra_NoiTru"]-$row["TongTienBHYTChiTra_NoiTru_DungTuyen"]?></td>
            <td align="right"><?=$row["TongTienBHCCTra"]?></td>
            <td align="right" class="colored3"><?=$NoAll?></td>
            <td align="right" class="colored3"><?=$row["SoTienThanhToan"]?></td>
            
			<!-- 41 -->
            <td align="right" class="colored3"><?=$doanhthuthuan?></td>
            <td align="right" class="colored3"><?=$loinhuangop?></td>
		  </tr>
        <?php
			$stt++;
		}
		?>
        <?php

		?>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","BAOCAOQUANTRI.xls");
	}
	?>