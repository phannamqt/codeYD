<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
<body>
<?php
$data= new SQLServer;//tao lop ket noi SQL
$tungay=convert_date($_GET["tungay"]).' 0:00:00';
$denngay=convert_date($_GET["denngay"]).' 23:59:59';
$store_name="{call GD2_GetDSBenhNhanDaRaVienByPhongBanAndNgay(?,?,?)}";//tao bien khai bao store
$params = array($_GET['idphongban'],$tungay,$denngay);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$i=0;
?>
<div align="center"><strong>Từ ngày <?php echo ($_GET["tungay"]).' đến '.($_GET["denngay"]);?></strong></div>
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
    <td><div align="center"><strong>STT</strong></div></td>
    <td><div align="center"><strong>Mã BN</strong></div></td>
    <td><div align="center"><strong>Họ lót BN</strong></div></td>
    <td><div align="center"><strong>Tên BN</strong></div></td>
    <td><div align="center"><strong>Tuổi</strong></div></td>
    <td><div align="center"><strong>Giới</strong></div></td>
    <td><div align="center"><strong>Người tạo</strong></div></td>
    <td><div align="center"><strong>Ngày giờ tạo</strong></div></td>
    <td><div align="center"><strong>Đối tượng</strong></div></td>
    <td><div align="center"><strong>Tên loại bệnh án</strong></div></td>
    <td><div align="center"><strong>Phòng</strong></div></td>
    <td><div align="center"><strong>Chẩn đoán khoa điều trị</strong></div></td>
    <td><div align="center"><strong>Ngày giờ ra viện</strong></div></td>
    <td><div align="center"><strong>BS điều trị</strong></div></td>
    <td><div align="center"><strong>Loại bệnh án</strong></div></td>

</tr>

<?php

foreach ($tam as $row) {
$i++;
    $giotao='';
    if($row["NgayTaoBenhAn"]!=''){
            $ngaytao=$row["NgayTaoBenhAn"];
            $row["NgayTaoBenhAn"]=$row["NgayTaoBenhAn"]->format($_SESSION["config_system"]["ngaythang"]);
            $giotao=$ngaytao->format('H:i');
    }else{
         $row["NgayTaoBenhAn"]='';
         $giotao='';
    }
    if($row["NgayGioRaVien"]!=''){
            $ngayravien=$row["NgayGioRaVien"];
            $row["NgayGioRaVien"]=$row["NgayGioRaVien"]->format($_SESSION["config_system"]["ngaythang"]);
            $gioravien=$ngayravien->format('H:i');
    }else{
         $row["NgayGioRaVien"]='';
         $gioravien='';
    }
    $doituong='';
    if($row["LoaiDoiTuongKham"]=='Viện phí'){
            $doituong='Viện phí';
    }else{
        if($row["TrangThaiKham"]==1){
            $doituong='BHYT/Đúng tuyến';
        }else if($row["TrangThaiKham"]==3){
             $doituong='BHYT/Trái tuyến';
        }else if($row["TrangThaiKham"]==4){
             $doituong='BHYT/Cấp cứu';
        }
    }

?>
    
   <tr>
    <td><?=$i?></td>
    <td><?=$row["MaBenhNhan"]?></td>
    <td><?=$row["HoLotBenhNhan"]?></td>
    <td><?=$row["TenBenhNhan"]?></td>
    <td><?=$row["Tuoi"]?></td>
    <td><?=$row["Gioi"]?></td>
    <td><?=$row["NguoiTaoBenhAn"]?></td>
    <td><?=$row["NgayTaoBenhAn"]?></td>
    <td><?=$doituong?></td>
    <td><?=$row["Ten_LoaiBenhAnNoiTru"]?></td>
    <td><?=$row["Buong"]?></td>
    <td><?=$row["CD_KhoaDieuTri"]?></td>
    <td><?=$row["NgayGioRaVien"]?></td>
    <td><?=$row["BSDieuTri"]?></td>
    <td><?=$row["TenLoaiBA"]?></td>
  </tr>
<?php

}
?>
</table>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();

		$exp->exportWithPage("excel/temp.html","DS_Ra_Vien.xls");
	
	}

?>