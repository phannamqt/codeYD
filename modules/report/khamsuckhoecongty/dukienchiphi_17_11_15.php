<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >

body{
    overflow:auto;
    margin:0;	
/*	background:url(file://///192.168.1.200/phanmemtest/modules/report/hanhchinh/du_an_cham_soc.jpg) no-repeat center center fixed !important;
*/	
}
li{
    font-size:15px;
    font-weight:bold;
    }
#images_chandung
{
    /*padding-top:7px;*/
    }
fieldset {
    display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
    height: 520px;
}
#chandung{width:188px;
}

pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#myImg0{
    border-style:solid;
    border-color:#00C;
    }
</style>
</head>

<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc


        $params1 = array($_GET["id_kham"]);//tao param cho store
        $store_name1="{call [GD2_GetCamKetById](?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);
        if($thongtinluotkham!=null){
                 $hinhchuky=$thongtinluotkham[0]["HinhChuKy"];
                $nhanvien=$thongtinluotkham[0]["HotenNV"];
                $viettat=$thongtinluotkham[0]["VietTat"];
          }
          else{
                $hinhchuky="";
                $nhanvien="";
                $viettat="";
            }
			
	//lay thuoc va vat tu y te
	$params2 = array($_GET["id_kham"]);//tao param cho store
        $store_name2="{call [GD2_GetCamKet_thuoc](?)}";//tao bien khai bao store
        $get_thongtinthuoc=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinthuoc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinthuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinthuoc);
		
		//lay kham, xet nghiem va can lam sang
	$params3 = array($_GET["id_kham"]);//tao param cho store
        $store_name3="{call [GD2_GetCamKet_kham](?)}";//tao bien khai bao store
        $get_thongtinkham=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinkham= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham[0]["DonGia_KhamChinh"]);
		$tongtphau=0;
		$tong=0;
    ?>

    


        <div style=" margin-left:65px;margin-top:20px">
        <table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:35%; text-align:center">
                    73 Nguyễn Hữu Thọ, Đà Nẵng<br />
                Tell: 19002250
                <br />
              
             </td>
         </tr>
         <td colspan="2">
            <span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>   
    <br>

     <table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;color:#000!important">DỰ KIẾN CHI PHÍ ĐIỀU TRỊ NỘI TRÚ</span><br />
                <span style="font-weight:bold;font-size:20px;"></span>
                <div style="height:10px;">
                </div>
          </td>

       </tr>
     </table>
       <br>
<table cellpadding="0" cellspacing="0" border="0" style="line-height:1.7;font-size:14px; width:95%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000;">
         <tr>
            <td> Bệnh nhân: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>Số thẻ BHYT/CMND: <?=$thongtinluotkham[0]["SoThe"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>

            
         </tr>
         <tr>
            <td colspan="3" >Người giám hộ..........................................Số CMND................................ là........ của bệnh nhân.</td>

         </tr>
         
        

          </table>

            <table cellpadding="0" cellspacing="0" border="0" style="line-height:1.7;font-size:14px; width:99%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:0px solid #000; padding:5px 0px">
         
         <tr>
           
                <td colspan="3">
           <strong>1. Chẩn đoán: </strong>     <?=$thongtinluotkham[0]["TenLoaiKham"];?></pre></td>
         </tr>
         <tr>
           
                <td width="70%" colspan="2" ><strong>2. Phương pháp phẫu thuật:</strong> <?php echo $thongtinluotkham[0]["TenLoaiKham"]; 
				//$tong=$tong+$thongtinluotkham[0]["DonGia_KhamChinh"]?>
                </td>
                <td width="30%" align="right" valign="top" ><em>Thành tiền:
                <?php echo number_format($thongtinluotkham[0]["DonGia_KhamChinh"],"0",",",".").'&nbsp;VNĐ';?>
                </em></td>
         </tr>
         <tr>
           
                <td colspan="2"><strong>3. Ngày điều trị:</strong><?=$thongtinluotkham[0]["SoNgayDieuTri"];?>&nbsp;ngày</pre></td>
                <td align="right" valign="top"><em>Thành tiền:</em>                  <em>
                <?php echo number_format($thongtinluotkham[0]["giadieutri"],"0",",",".").'&nbsp;VNĐ';?>
                </em>                </td>
                </td>
         </tr>
         <tr>
           
                <td colspan="2" ><strong>4. Mức chăm sóc:</strong> cấp 1:
                <?=$thongtinluotkham[0]["Cap1"];?>&nbsp;ngày&nbsp;&nbsp;cấp 2:<?=$thongtinluotkham[0]["Cap2"];?>&nbsp;ngày&nbsp;&nbsp;cấp3:<?=$thongtinluotkham[0]["Cap3"];?>&nbsp;ngày</td>
                <td align="right" valign="top" ><em>Thành tiền:
                <?php echo number_format($thongtinluotkham[0]["giachamsoc"],"0",",",".").'&nbsp;VNĐ';?>
                </em></td>
         </tr>
         <tr>
           
                <td colspan="3">
                <strong>5. Thuốc và vật tư y tế tiêu hao</strong>:
                
                <table border="1" width="99%" cellpadding="0" cellspacing="0">
                 <tr>
                	<td colspan="3" align="center"><strong>Thuốc</strong></td>
                    <td colspan="3" align="center"><strong>Vật tư y tế</strong></td>
                  </tr>
                <tr>
                	<td align="center" width="30%" ><strong>Tên thuốc</strong></td>
                    <td align="center" width="10%"><strong>S.lượng</strong></td>
                    <td align="center" width="10%"><strong>T.tiền</strong></td>
                    <td align="center" width="30%"><strong>Tên vtyt</strong></td>
                    <td align="center" width="10%"><strong>S.lượng</strong></td>
                    <td align="center" width="10%"><strong>T.tiền</strong></td>
                </tr>
                <?php 
				$tongthuoc=0;
				$tongvt=0;
				for($i=0;$i<=count($thongtinthuoc)-1;$i++){
					$tong=$tong+$thongtinthuoc[$i]['DonGia'];
					if($thongtinthuoc[$i]['LaThuoc']==1){
						$tongthuoc=$tongthuoc+($thongtinthuoc[$i]['DonGia']*$thongtinthuoc[$i]['SoLuong']);
					}
					if($thongtinthuoc[$i]['LaThuoc']==0){
						$tongvt=$tongvt+$thongtinthuoc[$i]['DonGia'];
					}
					if($i%2==0){
						
						echo '<tr>';
						}
					
						echo '<td style="padding-left:5px">';
						echo $thongtinthuoc[$i]['TenGoc'];
						echo '</td>';
						
						echo '<td align="right" style="padding-right:5px">';
						echo $thongtinthuoc[$i]['SoLuong'];
						echo '</td>';
						
						echo '<td align="right" style="padding-right:3px">';
						echo number_format(($thongtinthuoc[$i]['DonGia']* $thongtinthuoc[$i]['SoLuong']),"0",",",".");
						echo '</td>';
					//echo '</tr>';
					if($i%2==1){
						echo '</tr>';
						
						}
						if($i==count($thongtinthuoc)-1){
							echo '<tr>';
							echo '<td align="right"><i>Tổng tiền thuốc:</i></td>';
							echo '<td colspan="2" align="right" style="padding-right:5px"><i>'.number_format($tongthuoc,"0",",",".").'</i></td>';
							echo '<td align="right" ><i>Tổng tiền vật tư y tế:</i> </td>';
							echo '<td colspan="2" align="right" style="padding-right:5px"><i>'.number_format($tongvt,"0",",",".").'</i></td>';
							echo '</tr>';
						}
				}
				?>
                	
                 </table>
                </td></td>
         </tr>
          <tr>
           
                <td colspan="3" style=""><strong>6. Cận lâm sàng:</strong><?php 
			   for($k=0;$k<=count($thongtinkham)-1;$k++){ 
			   		$tongtphau=$tongtphau + ($thongtinkham[$k]['DonGia']*$thongtinkham[$k]['SoLuong']);
				echo ' '.$thongtinkham[$k]['TenLoaiKham'];
				if(count($thongtinkham)>0){
					echo ',';
				}
                }
                echo '<i>Tổng tiền: '.number_format($tongtphau,"0",",",".").'&nbsp;VNĐ</i>' ;?>
                </td>
         </tr>
         <tr>
           
                <td colspan="3"><br /> <strong>Kinh phí dự kiến:
                
                <?php 
					//echo $tong;
					$tong=$tong+$thongtinluotkham[0]["DonGia_KhamChinh"]+$thongtinluotkham[0]["giadieutri"]+$thongtinluotkham[0]["giachamsoc"]+$tongtphau; 
					echo number_format($tong,"0",",",".").'&nbsp;VNĐ'; 
					
				?> <label id="tongtien"></label>
                </strong></td> <br /></td>
         </tr>
         
          <tr>
           
                <td colspan="3" style="font-weight:bold;">&nbsp;</td>
         </tr>
         
         <tr>
           
                  <td width="10%" valign="top" style=" font-style: italic;"><strong><em>*Lưu ý:</em></strong></td>
                  <td width="90%" colspan="2" valign="top" style=" font-style: italic;"><strong><em>-Kinh phí trên chưa bao gồm tiền giường điều trị và dịch vụ BHYT.<br />
                  -Các chi phí trên đây là dự kiến, nó sẽ thay đổi theo tình trạng bệnh lý của từng bệnh nhân. Bác sĩ sẽ trực tiếp trao đổi với bệnh nhân hoặc người nhà bệnh nhân khi có sự thay đổi.</em></strong></td>
              </tr>
         
       

          </table>


   

<script type="application/javascript">
        $(document).ready(function() {
			$('#tongtien').html('('+toWords((<?=abs($tong)?>).toString())+"đồng"+')');
         var imageUrl='';
         imageUrl='images/du_an_cham_soc.jpg';
         
    
     
        $('html').css({"background":"url("+imageUrl+") no-repeat center center fixed"});
        $('html').css({"-webkit-background-size":"cover"});
        $('html').css({"-moz-background-size":"cover"});
        $('html').css({"-o-background-size":"cover"});
        $('html').css({"background-size":"cover"});
                load_sign('<?=$hinhchuky?>',"nv_chandoan");
           
            

          print_preview();

            
        });
    </script>
</body>
</html>
