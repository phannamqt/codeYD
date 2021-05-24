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
        $store_name1="{call [GD2_GetCamKet2ById](?)}";//tao bien khai bao store
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
    ?>

    


        <div style=" margin-left:65px;margin-top:20px">
        <table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:35%; text-align:center">
                    CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
                <br />
                Độc lập - Tự do - Hạnh phúc
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
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;color:#000!important">CAM KẾT ĐIỀU TRỊ, PHẪU THUẬT, THỦ THUẬT </span><br />
                <span style="font-weight:bold;font-size:20px;"></span>
                <div style="height:10px;">
                </div>
             </td>

         </tr>
     </table>
       <br>
     <table cellpadding="0" cellspacing="0" border="0" style="line-height:1.7;font-size:14px; width:95%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">
         <tr>
            <td> Bệnh nhân: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
            <td>Số thẻ BHYT/CMND: <?=$thongtinluotkham[0]["SoThe"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>

            
         </tr>
         <tr>
            <td colspan="3" >Người giám hộ..........................................Số CMND................................ là........ của bệnh nhân.</td>

         </tr>
         
        

          </table>

            <div style="font-style:italic;width:95%">
            	Sau khi được thăm khám và làm đầy đủ các xét nghiệm để chẩn đoán, chúng tôi được bác sỹ giải thích rỏ ràng về tình trạng bệnh như sau:<br />
             </div>
            	<pre style="width:95%"><?=$thongtinluotkham[0]["NoiDungCamKetCap2"]?> </pre>
              <div style="font-style:italic;width:95%">
            	Chúng tôi đã trao đổi với bác sỹ, có cơ hội hỏi các vấn đề liên quan đến bệnh tình và phương pháp điều trị. Chúng tôi hoàn toàn đồng ý nhập viện để thực hiện thủ thuật, phẫu thuật và điều trị. Chúng tôi xin chấp hành mọ quy định hiện hành của bệnh viện, chịu trách nhiệm về mọi rủi ro xảy ra ở ngoài bệnh viện trong suốt thời gian điều trị nội trú.
            </div>


    <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:95%;font-family:Tahoma, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">
         <tr>
             <td></td>
             <td style="width:35%;text-align:center" valign="top">
                <b>
                    Đà Nẵng, ngày <?php echo $thongtinluotkham[0]["NgayGioThucHien"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioThucHien"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioThucHien"]->format("Y"); ?>
                    </b>
               


            </td>
         </tr>
         <tr>
                <td style="width:35%;text-align:center"align="left"><b>Bác sỹ điều trị</b></td>
                <td align="center" >
                 <b>
                    Bệnh nhân/Người giám hộ
                 </b>
                </td>

            </tr>

            <tr>
             <td align="center" valign="top"><img class="chuky"id="nv_chandoan" width="130"/></td>
                <td ></td>
               

         </tr>
         <tr>
            
                <td align="center" ><b style="color:red"><?= $viettat. " ".$nhanvien;?></b></td>
                 <td ></td>
               

         </tr>
    
     </table>

    <script type="application/javascript">
        $(document).ready(function() {
         var imageUrl='';
         imageUrl='images/du_an_cham_soc.jpg';
         
    
     
        $('html').css({"background":"url("+imageUrl+") no-repeat center center fixed"});
        $('html').css({"-webkit-background-size":"cover"});
        $('html').css({"-moz-background-size":"cover"});
        $('html').css({"-o-background-size":"cover"});
        $('html').css({"background-size":"cover"});
               // load_sign('< ?=$hinhchuky?>',"nv_chandoan");
           
            

          print_preview();

            
        });
    </script>
</body>
</html>
