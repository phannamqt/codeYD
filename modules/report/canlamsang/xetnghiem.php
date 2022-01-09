<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
body{
   overflow:scroll;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:12px Tahoma, Geneva, sans-serif;
}


 <?php
 if($_GET['inrutgon']==0){

	 echo '#tb_center{
	 font-size:12px!important;

		 };';
 }else{
	  echo '#tb_center{
		 font-size:11px!important;
	 	line-height:1.5!important;
		 };';

 }


 ?>


</style>
</head>

<body style=" margin-left:55px;">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc

        //if()


        $params1 = array($_GET["id_benhnhan"],$_GET["id_luotkham"]);//tao param cho store
        $store_name1="{call GD2_Xetnghiem_Report_New(?,?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc

      
          if(count($thongtinluotkham)>0){
                $ngay=$thongtinluotkham[0]["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
                $nhanvien=$thongtinluotkham[0]["tennhanvien"];
                $viettat=$thongtinluotkham[0]["VietTat"];
                $HinhChuKy=$thongtinluotkham[0]["HinhChuKy"];
				$NguoiDuyet=$thongtinluotkham[0]["NguoiDuyet"];
          }
          else{
             $ngay="";
             $nhanvien="";
             $viettat="";
             $HinhChuKy="";
			 $NguoiDuyet="";
          }
		

       // print_r($thongtinluotkham[0]['NguoiDuyet']);
    ?>

   <?=HeaderReportA4()?>
 <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"]." - ĐT: ".$thongtinbenhnhan[0]["DienThoai1"])?>
    
     <table cellpadding="0" id="tb_center" cellspacing="0" border="0"  style="border-collapse: collapse;line-height:1.7;margin-top:10px;color:#000; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:2px solid #000; border-bottom:2px solid #000; padding:5px 0px">
          <thead  >
             <tr >
                <td align="center" style="width:50%"><b>TÊN XÉT NGHIỆM</b></td>
                <td align="center"style="width:25%"><b >KẾT QUẢ</b></td>
                <td align="center"style="width:25%"><b >GIÁ TRỊ BÌNH THƯỜNG </td>
             </tr>
        </thead>
        <tbody>
           <?php
           $zo="0";
           $dem=0;
             $pieces = "";
           if (isset($_GET["ID_xetnghiem"]))
           {
            $pieces = explode(";", $_GET["ID_xetnghiem"]);
           }
		   
			for($i=0;$i<=count($thongtinluotkham)-1;$i++){
				if (in_array($thongtinluotkham[$i]['ID_KetQuaXN'], $pieces) && $thongtinluotkham[$i]['CoFormChucNangRieng'] !='1')
			{
                $ngaygioduyet="";
                if($thongtinluotkham[$i]['NgayGioChanDoan']!="")
                {
                     $ngaygioduyet=' duyệt lúc '.$thongtinluotkham[$i]['NgayGioChanDoan']->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
                }
                else
                {
                      $ngaygioduyet="";
                }
				if($thongtinluotkham[$i]['NguoiDuyet']!=""){
                    if($zo=="0")
                    {
								
                        
                                  //  echo ('<tr style=" border-top:2px solid #000;"> <td  colspan="2" ><b style="margin-left:10px" d=12>'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$thongtinluotkham[$i]['NgayGioTao']->format('H:i d/m/y').$ngaygioduyet.' )</b></td>');
									 echo ('<tr style=" border-top:2px solid #000;"> <td  colspan="2" ><b style="margin-left:10px" d=12>'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$ngaygioduyet.' )</b></td>');

                                 if($thongtinluotkham[$i]['ID_LoaiKham']!="3902"){
                                    echo('<td colspan="4" style="font-size:11px;color:#000"><i>');

                                 if($thongtinluotkham[$i]['MoTa']!=""){
                                     $mota=str_replace("\n","<br>",$thongtinluotkham[$i]['MoTa']);
                                 list($ketqua, $ketluan) = explode('|||', $mota);
                                 if($ketqua!=""){
                                    echo('Kết quả:'.$ketqua.'<br>');

                                 }
                                 if($ketluan!=" "){
                                    echo('Kết luận:'.$ketluan);
                                 }

                                 }
                                echo('</td>');
                                 }

                                        echo ('</tr><tr><td><i style="margin-left:20px" d=3>'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');


                                        if($thongtinluotkham[$i]['Color']=="Red"){
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Blue"){
                                            echo('<td  align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else if($thongtinluotkham[$i]['Color']=="Orange"){
                                            echo('<td  align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        else{
                                            echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                                        }
                                        echo ('<td align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td></tr>');
                            
					}
					else{

                        if($thongtinluotkham[$i]['ID_Kham']==$thongtinluotkham[$i-1]['ID_Kham'])
						{

                            echo ('<tr ><td ><i style="margin-left:20px" d=4>'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');
                            if($thongtinluotkham[$i]['Color']=="Red"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Blue"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Orange"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else{
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            echo ('<td align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td></tr>');
                        }
                        else{
                            echo ('<tr style=" border-top:2px solid #000;"> <td colspan="2" "><b style="margin-left:10px">'.$thongtinluotkham[$i]['TenLoaiKham'].' ('.$ngaygioduyet.' )</b></td>');
							
									 
                                if($thongtinluotkham[$i]['ID_LoaiKham']!="3902"){
                                    echo('<td colspan="4" style="font-size:11px;color:#000"><i>');
                                 if($thongtinluotkham[$i]['MoTa']!=""){
                                     $mota=str_replace("\n","<br>",$thongtinluotkham[$i]['MoTa']);

                                    if(count(explode('|||', $mota))>1){
                                        list($ketqua, $ketluan) = explode('|||', $mota);
                                    }else{
                                        list($ketqua) = explode('|||', $mota);
                                       $ketluan='';
                                    }
                                    
                                     if( isset($ketqua) && $ketqua!=""){
                                        echo('Kết quả:'.$ketqua.'<br>');

                                     }
                                     if( isset($ketluan) && $ketluan!=""){
                                        echo('Kết luận:'.$ketluan);
                                     }

                                 }
                                echo('</td>');
                                 }

                            
                            echo('</tr><tr><td><i style="margin-left:20px" d=6>'.$thongtinluotkham[$i]['TenXetNghiem'].'</i></td>');
                            if($thongtinluotkham[$i]['Color']=="Red"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:red"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Blue"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Blue"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else if($thongtinluotkham[$i]['Color']=="Orange"){
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:Orange"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            else{
                                echo('<td align="center" width="80px" style="margin-left: 65px;color:black"><strong>'.$thongtinluotkham[$i]['KetQua'].'</strong></td>');
                            }
                            echo ('<td align="center" align="center"><i style="width:200px">'.$thongtinluotkham[$i]['GiaTriBinhThuong1'].'</i></td></tr>');
                        }
                    }
                 $zo="1";
                }
			}
			}


			?>
        </tbody>
     </table>

     <table cellpadding="0" cellspacing="0" border="0" style="color:#000;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000;  padding:5px 0px">
         <tr>
             <td></td>
             <td style="width:35%;text-align:center" valign="top">
                 <i>
                    <?php 
					/* if(isset($thongtinluotkham) &&(isset($thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"])) && $thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]!=''){
						echo $thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]->format("d")." tháng " . $thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]->format("m")." năm " .  $thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]->format("Y"); 
					}else{
						echo date('d')." tháng " .date('m')." năm " .  date('Y'); 
					} */
					if(isset($thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]) && $thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"]!=''){
						$check=1;
						$ngaygio=$thongtinluotkham[count($thongtinluotkham)-1]["NgayGioTao"];
					}else{
						$check=0;
						$ngaygio='';
					}
					ngayinreport($check,$ngaygio);
					?>
                 </i>


            </td>
         </tr>
         <?php
		 if( $NguoiDuyet==-111){
			 ?>
			 <tr>
				<td align="center">
					<b>
					KTV Xét nghiệm
					</b>
					</td>
					<td align="center" >
					 <b>
					  CN Xét nghiệm
					 </b>
					</td>
				</tr>

				<tr>
					<td align="center" valign="top"><img class="chuky" id="ck_nhanvien" width="130"/></td>
					<td align="center" valign="top"><img class="chuky" id="nv_chandoan" width="130"/></td>

				</tr>
			  <tr>
				<td align="center" valign="bottom"><b>KTV Phạm Thị Thùy An</b></td>
				<td align="center" ><b style="color:red">CN Mai Xuân Thụ</b></td>
			</tr>
			 <?php
		 }else{
			 ?>
			 
				<tr>
					<td align="center">
						<b>
						<!-- KTV Xét nghiệm-->
						</b>
						</td>
						<td align="center" >
						 <b>
						  Phòng Xét Nghiệm
						 </b>
						</td>
					</tr>

					<tr>
						<td align="center" valign="top"> </td>
						<td align="center" valign="top"><img class="chuky" id="nv_chandoan" width="130"/></td>

					</tr>
				  <tr>
					<td align="center" valign="bottom"><b><!--KTV Phạm Thị Thùy An--></b></td>
					<!-- <td align="center" ><b style="color:red"><?=$viettat.' '.$nhanvien.' '.$HinhChuKy?></b></td> -->
				</tr>
			 <?php
		 }
		 ?>
         
     </table>

    <script type="text/javascript">
        $(document).ready(function() {
			if(1==<?php echo($_GET["chuky"])?>)
			{
				if(<?php echo($NguoiDuyet)?>==20){
					//load_sign("<?php echo($HinhChuKy)?>","ck_nhanvien");
					//load_sign('thu.jpg',"nv_chandoan");
					
				}else{
					load_sign("<?php echo($HinhChuKy)?>","nv_chandoan");
				}
				
			}	
            

          print_preview();

        });
    </script>
</body>
</html>
