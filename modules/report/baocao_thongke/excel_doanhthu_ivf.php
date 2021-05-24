<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
<?php  
$data= new SQLServer;//tao lop ket noi SQL


$tu_ngay=convert_date($_GET["tungay"]).' 0:00:00';
$den_ngay=convert_date($_GET["denngay"]).' 23:59:59';
$params = array($tu_ngay,$den_ngay);
$store_name="{call gd2_ivf_getdoanhthubytungaydenngay (?,?)}";//tao bien khai bao store

$theodoisuco=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($theodoisuco);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

?>

<style type="text/css">
	body{
		overflow:auto;
		}
</style>
</head>
<body>
        <center><span style="font-weight: bold;font-size: 25px;">DOANH THU IVF TỪ
            <?=$_GET["tungay"]?> ĐẾN <?=$_GET["denngay"]?>
            <br>
        </span></center>
       <table width="100%" cellpadding="0" cellspacing="0" border="1">
        <tr>
            <th colspan="6"></th>
            <th colspan="4">Doanh thu khám và dịch vụ IVF MD_FAMILY</th>
            <th></th>
        </tr>
    	<tr>
            <th align="center">
        		STT
        	</th>
            <th  align="center">
                Ngày khám
            </th>
            <th  align="center">
                Ngày thanh toán
            </th>
            <th  align="center">
                Mã BN
            </th>
            <th  align="center">
                Họ tên BN
            </th>
            <th  align="center">
                Tên hạng mục
            </th>
            <th  align="center">
                Giá DV
            </th>
            <th  align="center">
        		Giá thuốc/ VTTH trọn gói
        	</th>
            <th  align="center">
                Giảm trừ doanh thu
            </th>
            <th  align="center">
                Giảm giá
            </th>
            <th  align="center">
        		Doanh thu thực tế
        	</th>
            <th  align="center">
        		BS giới thiệu
        	</th>
            <th  align="center">
               Ghi chú
            </th>
        </tr>
        <!--  -->
        <?php
        $i=0;
        $sum_thanhtien=0;
        $sum_giathuocvtthtrongoi=0;
        $sum_giamtrudoanhthu=0;
        $sum_doanhthuthucte=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve //21
            if($row["ngaygiovaokham"]!='')
                    $row["ngaygiovaokham"]=$row["ngaygiovaokham"]->format('d/m/Y');
            else $row["ngaygiovaokham"]='';

            if($row["ngaygiothanhtoan"]!='')
                    $row["ngaygiothanhtoan"]=$row["ngaygiothanhtoan"]->format('d/m/Y');
            else $row["ngaygiothanhtoan"]='';

            if($row["bacsigioithieu"]!='')
                    $row["bacsigioithieu"]=$row["bacsigioithieu"];
            else $row["bacsigioithieu"]='';
            $numer_auto=$i+1;

            echo "<tr>";
                echo '<td align="left">'.$numer_auto.'</td>';
                echo '<td align="left">'.$row["ngaygiovaokham"].'</td>';
                echo '<td align="left">'.$row["ngaygiothanhtoan"].'</td>';
                echo '<td align="left">'.$row["mabenhnhan"].'</td>';
                echo '<td align="left">'.$row["hotenbenhnhan"].'</td>';
                echo '<td align="left">'.$row["tendichvu"].'</td>';
                echo '<td align="right">'.(float)$row["thanhtiendichvu"].'</td>';
                echo '<td align="right">'.(float)$row["giathuocvtthtrongoi"].'</td>';
                echo '<td align="right">'.(float)$row["giamtrudoanhthu"].'</td>';
                echo '<td align="right">'.(float)$row["giamgia"].'</td>';
                echo '<td align="right">'.(float)$row["doanhthuthucte"].'</td>';
                echo '<td align="left">'.$row["bacsigioithieu"].'</td>';
                echo '<td align="left">'.$row["ghichu"].'</td>';
                
                
            echo "</tr>";
            $sum_thanhtien+=$row["thanhtiendichvu"];
            $sum_giathuocvtthtrongoi+=$row["giathuocvtthtrongoi"];
            $sum_giamtrudoanhthu+=$row["giamtrudoanhthu"];
            $sum_doanhthuthucte+=$row["doanhthuthucte"];
            $i++;
        }
        ?> 
        <tfoot>
            <td colspan="6" align="right">Tổng tiền: </td>

            <td align="right"><?=(float)$sum_thanhtien?></td>
            <td align="right"><?=(float)$sum_giathuocvtthtrongoi?></td>
            <td align="right"><?=(float)$sum_giamtrudoanhthu?></td>
            <td align="right"><?=(float)$sum_doanhthuthucte?></td>
            <td align="right">Kỳ vọng: <?=(float)($sum_doanhthuthucte/100*23)?></td>
        </tfoot>
    </table>
</div>    
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","excel_doanhthudichvu_ivf.xls");
	}
?>