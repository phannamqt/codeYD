<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
	font-family:arial, Geneva, sans-serif !important;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font-size:13px;
 font-family:arial, Geneva, sans-serif !important;
}

</style>
</head>
 
<body style="margin-left:55px!important">
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idbenhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         
        
        $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);      
        //print_r($thongtinluotkham[0]["HinhChuKy"]);
        if($thongtinluotkham!=null){
            $thongtinluotkham[0]["tennv"]=$thongtinluotkham[0]["tennv"];
        }
        else{
            $thongtinluotkham[0]["tennv"]="";
        }
    ?>

	 <?=HeaderReportA4()?>
 
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;margin-top:20px;font-family:Tahoma, Geneva, sans-serif;color:#000">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">KẾT QUẢ KHÁM BỆNH</span>
                <br />
                <span style="font-weight:bold;font-size:20px;">*****</span>
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#000;line-height:18px; width:100%;font-family:arial, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td style=" width:45%">Họ tên: <?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></td> 
            <td align="right"style=" width:30%">Giới tính: <?=$thongtinbenhnhan[0]["Gioi"];?>, <?=$thongtinbenhnhan[0]["Tuoi"];?> tuổi</td>
			<td style=" width:15%" align="right">ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]?></td>
            <?php 
				if($_SESSION["com"]["HienThiBarcodeBenhNhan"]==1){
			?>
				<td rowspan="1" style=" width:10%" align="right" valign="middle"><img id="barcode" src = '<?=get_system_one_config("GD2_BarCode_PatientID_Src")?><?=$thongtinbenhnhan[0]["MaBenhNhan"]?>'></td>
			<?php
				}else{
			?>
				<td rowspan="1" style=" width:0%" align="right" valign="middle"></td>
			<?php
				}
			?>
         </tr>
         <tr>
            <td colspan="5" style="width:100%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"]." - ĐT: ".$thongtinbenhnhan[0]["DienThoai1"]?></td>           
         </tr>  

     </table>
      <td valign="top" style="width:65%;padding-top:10px">
                <strong style="font-size:15px;color:#000;font-style:arial, Geneva, sans-serif !important;">KẾT QUẢ KHÁM</strong>
                <br />
                <pre> <?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo str_replace("<","&lt;",str_replace(">","&gt;",$thongtinluotkham[0]["MoTaBenh"]));
                            }
                
                ?> </pre>
                
                <strong style="font-size:15px;color:#000;font-style:arial, Geneva, sans-serif !important;">KẾT LUẬN</strong><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham[0]["KetLuan"] ;
                            }
                
                ?></b></pre>
                
                <strong style="font-size:15px;color:#000;font-style:arial, Geneva, sans-serif !important;">ĐỀ NGHỊ</strong><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham[0]["HuongDanDieuTri"] ;
                            }
                
                ?></b></pre>
            </td> 
     <table cellpadding="0" cellspacing="0" border="0" style="margin-top:30px;margin-left:340px;color:#000;font-size:13px; width:50%;font-family:arial, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">   
     <tr>
       <td colspan="3" style="width:35%;text-align:center" valign="top">
     <i>
                    Ngày <?php $a=explode(" ",$_GET["ngaygio"]); $d= explode("/",$a[1]);echo $d[0].' tháng '.$d[1].' năm '.$d[2];?>
                 </i>
     </td>
     </tr>        
          <?php if ($thongtinluotkham[0]["Id_BSDaiDien"]==null){echo ('
		<tr>
            
             <td colspan="3" style="width:35%;text-align:center" valign="top">
                  <h3 style="margin-top:0px">Bác sỹ kết luận</h3>
                 <div style="height:80px">
                 <img id="bs_chandoan" width="100"/></div>
                 <b style="color:#000">'.$thongtinluotkham[0]["tennv"].'</b>
        </td>
                       
</tr> 
		 ') ;
		 }
		 else{
	echo ('
		 <tr>
		  <td colspan="3" style="width:100%;text-align:center" valign="top">
		  <td>
		  </tr>
		  
		  <tr>
		  <td>
		  		  <h3 style="margin-top:0px" align="center">Bác sỹ kết luận</h3>
		  </td>
		  <td></td>
		  <td>
		  		  <h3 style="margin-top:0px" align="center">Bác sỹ tham vấn</h3>
		  </td>
		  </tr>
<tr>
<td>
	
	  <div style="height:80px" align="center">
          <img id="bs_daidien" width="120"/></div>
		  <h4 style="color:#000"  align="center">'.$thongtinluotkham[0]["tennv_daidien"].'</h4>
</td>
<td width="30"></td>
	<td>	

		  
	
		  <div style="height:80px" align="center">
          <img id="bs_chandoan" width="120"/></div>
		  <h4 style="color:#000"  align="center">'.$thongtinluotkham[0]["tennv"].'</h4>
		    </td>
</tr>'); 
		 }
		 ?>           
     </table>
    <?php if($_GET["header"]=="left"){ ?>
        </div>
    <?php   } ?>
    
   
</body>
</html>
  <script type="application/javascript">
        $(document).ready(function() {
        if(1==<?= $_GET['chuky']?>){
			//load_sign('<?=$thongtinluotkham[0]["HinhChuKy"]?>',"bs_chandoan");
		}
		<?php if($thongtinluotkham[0]["Id_BSDaiDien"] != null){
				echo ("load_sign('".$thongtinluotkham[0]['chuky_daidien']."','bs_daidien');");
			 }
			 ?>
              print_preview();
            
        });
    </script>