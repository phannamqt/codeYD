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

$store_name = "{call GD2_MIX_DOANHTHU_TM (?,?,?)}"; //tao bien khai bao store
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
  <div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO TỔNG HỢP(ĐƠN VỊ TÍNH 1000đ) </div>
    <?php

		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:100%;margin-top:5px">





	  <tr>
	    <th  rowspan="2" scope="col">STT</th>
	    <th rowspan="2" scope="col">Thời gian</th>
	    <th width="10%" colspan="3" scope="col">Chi phí(A)</th>
	    <th width="10%" colspan="3" scope="col">Giảm doanh thu(B)</th>
	    <th width="10%" colspan="3" scope="col">Doanh thu(C)</th>
	    <th width="10%" colspan="3" scope="col">Cấu thành doanh thu(D)</th>
	    <th width="10%" colspan="4" scope="col">Nợ(E)</th>
	    <th width="10%" colspan="2" scope="col">Quầy thu ngân(F)</th>
	    <th width="20%" colspan="5" scope="col">Số lượt khám(G)</th>
	    
	  </tr>
	  <tr>
	    <td >Thuê ngoài</td>
	    <td >VTTH</td>
	    <td >Khác</td>
	    <td >Miễn giảm</td>
	    <td >Bù BHYT</td>
	    <td>Tổng giảm Doanh Thu</td>
	    <td >Ngoại trú</td>
	    <td >Nội trú</td>
	    <td >Tổng Doanh Thu</td>
	    <td >Dịch vụ</td>
	    <td >Thuốc</td>
	    <td >Giường</td>
	    <td >Bệnh nhân</td>
	    <td >BHYT</td>
	    <td >BHCC</td>
	    <td >Tổng nợ</td>
	    <td >Hủy chỉ định(Hoàn trả)</td>
	    <td >Tổng Thực thu</td>
	    <td >Ngoại VP</td>
	    <td >Ngoại BHYT</td>
	    <td >Nội VP</td>
	    <td>Nội BHYT</td>
	    <td>Tổng số lượt khám</td>
	   
	  </tr>









         <?php
		$stt=1;
        foreach ($tam as $row) {
	    $TongPTraNoiTru=($row["TongTienPhaiTra"]-$row["TongPTraNgoaiTru"]);
	    $NoAll=($row["nomoi"]+$row["TongTienBHYTChiTra"]+$row["TongTienBHCCTra"]);
	    $tonggiamdoanhthu=$row["MienGiam"]+	$row["HoTroTuBenhVien"];
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
            <td align="left"><?= $Ngay?></td>
            
            <td align="right"><?=0?></td>
            <td align="right"><?=0?></td>
             <td align="right"><?=0?></td>
           

            <td align="right"><?=$row['MienGiam']?></td>
            <td align="right"><?=$row['HoTroTuBenhVien']?></td>
            <td align="right" class="colored3"><?=$tonggiamdoanhthu?></td>

            <td align="right"><?=$row["TongPTraNgoaiTru"]?></td>
            <td align="right"><?=$TongPTraNoiTru?></td>
            <td align="right" class="colored3"><?=$row["TongTienPhaiTra"]?></td>

            <td align="right"><?=$row["KhamVaDieutri"]?></td>
            <td align="right"><?=$row["TienThuoc"]?></td>
            <td align="right"><?=0?></td>

            <td align="right"><?=$row["nomoi"]?></td>
            <td align="right"><?=$row["TongTienBHYTChiTra"]?></td>
            <td align="right"><?=$row["TongTienBHCCTra"]?></td>
            <td align="right" class="colored3"><?=$NoAll?></td>

 			<td align="right"><?=$row["TienHuyChiDinh"]?></td>
            <td align="right" class="colored3"><?=$row["SoTienThanhToan"]?></td>
           
        
         	
            <td align="right"><?=$SL_NgoaiTru_VP?></td>
            <td align="right"><?=$row["SLNgoaiTru_BHYT"]?></td>
            <td align="right"><?=$SL_NoiTru_VP?></td>
            <td align="right"><?=$row["SLNoiTru_BHYT"]?></td>
            <td align="right" class="colored3"><?=$SLK_ALL?></td>


           


          
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
		$exp->exportWithPage("excel/temp.html","baocaodoanhthu_THAMMY.xls");
	}
	?>