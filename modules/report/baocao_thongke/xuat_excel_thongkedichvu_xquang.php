<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
//if (date('H') <16 && $_SESSION["user"]["id_user"]!=74 && $_SESSION["user"]["id_user"]!=8){
	if (date('H') >=8 && date('H') <=11  && $_SESSION["user"]["id_user"]!=74 && $_SESSION["user"]["id_user"]!=8&& $_SESSION["user"]["id_user"]!=67 && $_SESSION["user"]["id_user"]!=53 
	&& $_SESSION["user"]["id_user"]!=178 && $_SESSION["user"]["id_user"]!=709 ) {
 echo "<h1><center>Chức năng này đang tạm khóa chỉ dùng sau 17h vì ảnh hưởng tốc độ hệ thống!</center></h1>";
 exit();
}

$data = new SQLServer; //tao lop ket noi SQL

    $params = array($_GET["id_nhanvien"],$_GET["id_loaikham"],19,convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');//tao param cho store
    //print_r($params);
    $store_name="{call GD2_THONGKE_KHAM_THAMSO(?,?,?,?,?)}";//tao bien khai bao store dieukienloc
    $get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
    $excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
    $tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
   
?>
<style type="text/css">
	body{205
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
902
		}

	#wrapper{
		width:1000px;
		margin:0 auto;
		}
        .type1{
            
            color:blue; font-weight:bold;
        }

</style>

</head>
<body>
<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold">Thống kê dịch vụ khám chữa bệnh <?=$_GET["tennhanvien"]?></div>
    <?php
	
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	
	?>

    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
    	    <tr height="30">
    		<th>STT</th>
    		<th>Ngày</th>
    		<th>Tên dịch vụ</th>
            <th>Tiền dịch vụ </th>
            <th>Phí thuê ngoài </th>
    		<th >Nhóm dịch vụ</th>
    		<th bgcolor="pink">Họ lót BN</th>
    		<th bgcolor="pink">Tên BN</th>
            <th bgcolor="pink">Năm sinh</th>
            <th bgcolor="pink">Mã BN</th>
            
            <th bgcolor="yellow">Người chỉ định</th>
            <th bgcolor="yellow">Người thực hiện</th>
            <th bgcolor="yellow">Người hoàn tất</th>
            <th >Kết luận</th>
            <th >Trạng thái</th>
            <th>Loại khám</th>
    
         
           
      </tr>
         <?php
		$stt=1;
        $chidinh=0;
        $thuchien=0;
        $hoantat=0;
        $sum=0;
        foreach ($tam as $row) {//duyet toan bo mang tra ve

    	

		?>
         <tr>
         	<td align="center"><?=$stt?></td>
         	<td align="left"><?= $row['TaoLuc']?></td>
         	<td bgcolor="#dce775"><?=$row['TenLoaiKham']?></td>
            <td style="color:red"><?=$row['PhiThucHien']?></td>
            <td style="color:green"><?=$row['giathuengoaithuchien']?></td>
         	<td align="left"><?= $row['TenNhom']?></td>
         	<td align="left"><?= $row['HoLotBenhNhan']?></td>
            <td align="left"><?= $row['TenBenhNhan']?></td>         
            <td align="left"><?= $row['namsinh']?></td>
             <td align="left"><?= $row['MaBenhNhan']?></td>

             <?php
            if( $row["BSChiDinh"]==$_GET["id_nhanvien"]){
                echo ( '<td class="type1">'.$row['ChiDinh'].'</td>');
                $chidinh=$chidinh+1;
                }
            else
            {
                echo ( '<td >'.$row['ChiDinh'].'</td>');
            }
             if( $row["NguoiThucHien"]==$_GET["id_nhanvien"]){
                echo ( '<td class="type1">'.$row['ThucHien'].'</td>');
                $thuchien=$thuchien+1;
                }
            else
            {
                echo ( '<td >'.$row['ThucHien'].'</td>');
            }
                  if( $row["BSChanDoan"]==$_GET["id_nhanvien"]){
                echo ( '<td class="type1">'.$row['HoanTat'].'</td>');
                $hoantat=$hoantat+1;
                }
            else
            {
                echo ( '<td >'.$row['HoanTat'].'</td>');
            }
            ?>
          <td align="left"><?= $row['KetLuan']?></td>
          <td align="left"><?= $row['Id_trangthai']?></td>
          <td align="left"><?= $row['LoaiKham']?></td>
          </tr>
          

        <?php
			$stt++;
            $sum=$sum+$row['PhiThucHien'];
            
		}
		?>
            <tr>
            <td ></td>
            <td ></td>
            <td ></td>
            <td align="right" bgcolor="pink"><?= $sum?></td>
            <td ></td>
            <td ></td>         
            <td ></td>
            <td ></td>
            <td ></td>
            <td align="right" bgcolor="yellow"><?= $chidinh?></td>
            <td align="right" bgcolor="yellow"><?= $thuchien?></td>
            <td align="right" bgcolor="yellow"><?= $hoantat?></td>
          
              
          </tr>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.xls","THONGKE_CHITIET_DICHVU_KCB.xls");
	}
//print_preview();
	?>