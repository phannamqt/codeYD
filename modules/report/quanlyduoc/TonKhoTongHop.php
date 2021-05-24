<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$data = new SQLServer; 
$store_name = "{call GD2_TonKhoHienTai_TongHop_Test1 (?,?,?)}"; 
$params = array(0,'2018/1/1 00:00','2019/1/1');
$get= $data->query($store_name, $params); 
$excute = new SQLServerResult($get); 
$tam = $excute->get_as_array();
$dataTonKho = $tam;
$store_name = "{call GD2_DM_LoaiNhapXuatAll ()}"; 
$params = array();
$get1= $data->query($store_name, $params); 
$excute = new SQLServerResult($get1); 
$tam = $excute->get_as_array();
$dataLoaiNhapXuatAll = $tam;
$uniquePids = array_unique(array_map(function ($i) { return $i['ID_NhapXuat']; }, $dataLoaiNhapXuatAll));
$result = [];
foreach ($dataTonKho as $row) {   
    $a = $row['ID_Thuoc'];
    if (! array_key_exists($a, $result)) {
        $result[$a] = [
            'ID_Thuoc' => $row['ID_Thuoc'],
            'TenGoc' => $row['TenGoc'],
            'TenDonViTinh' => $row['TenDonViTinh']
        ];
        foreach ($uniquePids as $row1){
            $result[$a][$row1] = array();
            $result[$a][$row1]['TongTonThuc']=0;
            $result[$a][$row1]['TongTien']=0;
        }
        $result[$a][$row['LoaiNhapXuat']]['TongTonThuc']=$row['TongTonThuc'];    
        $result[$a][$row['LoaiNhapXuat']]['TongTien']=($row['Gia']*$row['TongTonThuc']);  
    }else{
        if($result[$a][$row['LoaiNhapXuat']]==''){
            $result[$a][$row['LoaiNhapXuat']]['TongTonThuc']+=$row['TongTonThuc'];
            $result[$a][$row['LoaiNhapXuat']]['TongTien']+=($row['Gia']*$row['TongTonThuc']);  
        }else{
            $result[$a][$row['LoaiNhapXuat']]['TongTonThuc']+=$row['TongTonThuc'];
            $result[$a][$row['LoaiNhapXuat']]['TongTien']+=($row['Gia']*$row['TongTonThuc']);  
        }        
    }
}
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
<h1>Tổng hợp tồn kho Từ Ngày 2018/1/1 đến ngày 2018/12/31</h1>
<div id="wrapper">
    <table border="1" cellpadding="0" cellspacing="0" align="center" >
    	<tr height="30">
            <th>ID_Thuoc</th>
            <th>Tên gốc</th>
            <th>Tên ĐVT</th>
         
            <?php
                foreach ($dataLoaiNhapXuatAll as $row1){
                  echo "<th>".$row1['TenHienThi']."</th>";
                  echo "<th>Tổng Tiền ".$row1['TenHienThi']."</th>";
                }
            ?>
      </tr>
        <?php		
            foreach ($result as $row) {
		?>
         <tr>        
            <td><?=$row['ID_Thuoc']?></td>          
            <td><?=$row['TenGoc']?></td>   
            <td><?=$row['TenDonViTinh']?></td>  
            <?php            
                foreach ($uniquePids as $row1){                    
                    echo "<td align='center'>".abs($row[$row1]['TongTonThuc'])."</td>";
                    echo "<td align='center'>".abs($row[$row1]['TongTien'])."</td>";
                }          
            ?>
          </tr>
        <?php			
    	    }
		?>
        <?php
		?>
    </table>
</div>
</body>
</html>
<?php
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","TonKhoTongHop.xls");
	
?>