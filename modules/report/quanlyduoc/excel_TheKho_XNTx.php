<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params1 = array(convert_date($_GET['from_day']),convert_date($_GET['to_day']).' 23:59:59');//tao param cho store
	$store_name1="{call [KHODUOC_TONHIENTAI_THAMSO_KhoTong](?,?)}";//tao bien khai bao store dieukienloc
	$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
	$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 		
	$thuoc= $excute1->get_as_array();
		
?>
<body>





   <table width="700px" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
              <td></td>
              <td colspan=2 align="left"><strong> CÔNG TY CP Y KHOA BÁC SỸ GIA ĐÌNH</strong>
              </td>
              </tr>
               <tr>
                <td></td>
              <td  colspan=2 align="left">73 Nguyễn Hữu Thọ - Đà Nẵng
              </td>
              </tr>
               <tr>
                <td></td>
              <td colspan=2 align="left">ĐT : 0236.3652111   Fax 0236.3632333
              </td>
              </tr>
              <tr>
               <td></td>
              <td colspan=2 align="left">-----***-----
              </td>
              </tr>
          <tr align="center" style="text-align:center">
                    
                </tr>
            </table><br />
            <br />
         <br />
       </div>
      <h2>BÁO CÁO XUẤT NHẬP TỒN<?=' TỪ NGÀY '.$_GET["from_day"].' ĐẾN NGÀY '.$_GET["to_day"]?></h2> 








<table width="100%" border="1">
  <tr>
    <td rowspan="4" align="center" valign="middle">STT</td>
    <td rowspan="4" align="center" valign="middle">Tên thuốc</td>
    <td rowspan="4" align="center" valign="middle">ĐVT</td>
    <td rowspan="4" align="center" valign="middle">Nhóm</td>
    <td rowspan="4" align="center" valign="middle">Quy cách</td>
 
    <td rowspan="4" align="center" valign="middle">Giá nhập</td>
    <td colspan="2" align="center" valign="middle">Tồn   đầu kỳ</td>
    <td colspan="2" align="center" valign="middle">Nhập trong kỳ</td>
    <td colspan="18" align="center" valign="middle">Xuất trong kỳ</td>
    <td colspan="2" align="center" valign="middle">Tồn cuối kỳ</td>
  </tr>
  <tr>
    <td rowspan="3" align="center" valign="middle">Số lượng</td>
    <td rowspan="3" align="center" valign="middle">Thành tiền</td>
    <td rowspan="3" align="center" valign="middle">Số lượng</td>
    <td rowspan="3" align="center" valign="middle">Thành tiền</td>
    <td colspan="8" align="center" valign="middle">BHYT(A)</td>
    <td colspan="8" align="center" valign="middle">Viện phí(B)</td>
    <td colspan="2" align="center" valign="middle">Tổng hợp(A và B)</td>
 <td rowspan="3" align="center" valign="middle">Số lượng</td>
    <td rowspan="3" align="center" valign="middle">Thành tiền</td>

  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle">Ngoại trú(1)</td>
    <td colspan="2" align="center" valign="middle">Nội trú(2)</td>
    <td colspan="2" align="center" valign="middle">Tiêu hao(3)</td>
    <td colspan="2" align="center" valign="middle">Tổng cộng(1+2+3)</td>
    <td colspan="2" align="center" valign="middle">Ngoại trú(4)</td>
    <td colspan="2" align="center" valign="middle">Nội trú(5)</td>
    <td colspan="2" align="center" valign="middle">Tiêu hao(6)</td>
    <td colspan="2" align="center" valign="middle">Tổng cộng(4+5+6)</td>
    <td colspan="2" align="center" valign="middle">Tổng cộng(1+2+3+4+5+6)</td>

    
  </tr>
  <tr>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
    <td align="center" valign="middle">Số lượng</td>
    <td align="center" valign="middle">Thành tiền</td>
     <td align="center" valign="middle">Số lượng</td>
      <td align="center" valign="middle">Thành tiền</td>
  </tr>
  
  
   <tbody id="tbody_1">
              <?php
			  $i=0;
       		  $sumN=0;
       		  $sumX=0;
       		  $sumT=0;
			  	foreach($thuoc as $row){
					$i++;
			   		/*$sumN=$sumN+$row['TT_N'];
		   			$sumX=$sumX+$row['TT_X'];
			   		$sumT=$sumT+$row['TT_Ton'];*/

					?>
<!-- //  CoSoTuTruc         SL_X_TrongKy_TieuHao_VP -->

					 <tr>
						<td width="10px"><?=$i?></td>
						<td style="text-align:left"><?=$row['tengoc']?></td>
						<td style="text-align:left"><?=$row['TenDonViTinh']?></td>
            <td style="text-align:left"><?=$row['TenNhomThuoc']?></td>
						<td style="text-align:left"><?=$row['QuyCach']?></td>
						
					
						<td style="text-align:left"><?=$row['GiaNhap']?></td>
					
						<td  ><?=$row['SL_TonDau']?></td>
            <td  ><?=$row['TT_TonDau']?></td>
            <td  ><?=$row['SL_N_TrongKy']?></td>
             <td  ><?=$row['TT_N_TrongKy']?></td>
            <td  ><?=$row['SL_X_TrongKy_BHYT_NgoaiTru']?></td>
            <td  ><?=$row['TT_X_TrongKy_BHYT_NgoaiTru']?></td>
            <td  ><?=$row['SL_X_TrongKy_BHYT_NoiTru']?></td>
            <td  ><?=$row['TT_X_TrongKy_BHYT_NoiTru']?></td>
            <td  ><?=$row['SL_X_TrongKy_TieuHao_BHYT']?></td>
            <td  ><?=$row['TT_X_TrongKy_TieuHao_BHYT']?></td>
            <td  ><?=$row['SL_TongXuat_TrongKy']?></td>
            <td  ><?=$row['TT_TongXuat_TrongKy']?></td>
            <td  ><?=$row['SL_X_TrongKy_NgoaiTru_VP']?></td>
            <td  ><?=$row['TT_X_TrongKy_NgoaiTru_VP']?></td>
            <td  ><?=$row['SL_X_TrongKy_NoiTru_VP']?></td>
            <td  ><?=$row['TT_X_TrongKy_NoiTru_VP']?></td>
            <td  ><?=$row['SL_X_TrongKy_TieuHao_VP']?></td>
            <td  ><?=$row['TT_X_TrongKy_TieuHao_VP']?></td>
            <td  ><?=$row['SL_TongXuat_TrongKy_VP']?></td>
            <td  ><?=$row['TT_TongXuat_TrongKy_VP']?></td>
            <td  ><?=$row['SL_TongXuat_TrongKy_VP']+$row['SL_TongXuat_TrongKy']?></td>
            <td  ><?=$row['TT_TongXuat_TrongKy_VP']+$row['TT_TongXuat_TrongKy']?></td>
            <td  ><?=$row['SL_TonDau']+$row['SL_N_TrongKy']-($row['SL_TongXuat_TrongKy_VP']+$row['SL_TongXuat_TrongKy'])?></td>
            <td  ><?=($row['SL_TonDau']+$row['SL_N_TrongKy']-($row['SL_TongXuat_TrongKy_VP']+$row['SL_TongXuat_TrongKy']))*$row['GiaNhap']?></td>
                       
		              </tr>


					<?php

				}

			  ?>

              <tr>
            <td>&nbsp;</td>
            <td>Tổng cộng</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align:right"><?=  number_format($sumN,"0",",",".")?></td>
              <td>&nbsp;</td>
             <td style="text-align:right"><?=  number_format($sumX,"0",",",".")?></td>
                <td>&nbsp;</td>
                   <td>&nbsp;</td>
                      <td>&nbsp;</td>
                         <td>&nbsp;</td>
                            <td>&nbsp;</td>
                             <td style="text-align:right"><?=  number_format($sumT,"0",",",".")?></td>
            </tr>
          </tbody>
</table>
</body>
</html>
<?php 
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","thekho_XNT_".$_GET['from_day']."_to_".$_GET['to_day'].".xls");
	
	}
?>