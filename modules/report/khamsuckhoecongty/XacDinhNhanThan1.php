<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
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
        $store_name1="{call GD2_GetXacDinhNhanThanById(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);

    ?>

	<?php if($_GET["header"]=="left"){ ?>
		<div style="font-size:14px;font-family:Tahoma, Geneva, sans-serif;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);writing-mode: rl-tb;position:absolute;top:563px;left:-354px">  <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />  <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span> - <?php echo $_SESSION["com"]["DiaChi"]?> * T: <?php echo $_SESSION["com"]["SoDT"]?></div>
	<?php } ?>
	<?php if($_GET["header"]=="top"){ ?>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;">
         <tr style="font-size:14px;">
             <td style=" width:60%">
                <span style="letter-spacing: 0.5px;font-weight:bold;color:#00b3a0">FAMILY</span> <img src="images/logo_mau.png" />
                <br />
                <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
             </td>
             <td style=" width:40%; text-align:right">
                Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                Đà Nẵng
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
     </table>
     <?php	} ?>
     <?php if($_GET["header"]=="left"){ ?>
    	<div style=" margin-left:65px;margin-top:20px">
        <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?><br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>   
     <?php	} ?>

     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
     	<tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;color:#000!important">PHIẾU XÁC ĐỊNH NHÂN THÂN</span>

                <br />
                <span style="font-weight:bold;font-size:20px;">*******</span>
                <div style="height:10px;">
                </div>
             </td>

         </tr>
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#036;line-height:1.7;font-size:14px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">
         <tr>
            <td> Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td>
        <td>Tuổi: <?=$thongtinbenhnhan[0]["Tuoi"];?></td>
            <td>G.tính: <?=$thongtinbenhnhan[0]["Gioi"];?></td>
            <td>ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"];?></td>
         </tr>
         <tr>
            <td  style="width:65%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td>

         </tr>
          <tr>
            <td colspan="4">Mã thẻ BHYT :
             <?php
			if($thongtinluotkham[0]["SoThe"]!=""){
            	echo $thongtinluotkham[0]["SoThe"].'. Hạn sử dụng từ '.$thongtinluotkham[0]["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"]).' đến '.$thongtinluotkham[0]["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);
			}
          
			?>
            </td>
         </tr>
        

      <!--    <tr>
            <td colspan="4">Ngày giờ vào khám:
            <?php
			if($thongtinluotkham[0]["ThoiGianVaoKham"]!=""){
            	echo $thongtinluotkham[0]["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
			}
			?></td>
       </tr> -->
      <!--  <tr>
         <td colspan="4">Lý do đi khám: <?=$thongtinluotkham[0]["LyDo"] ?>
            
         </td>
       </tr> -->

          </table>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">
         <tr>
            <td valign="top" style="width:30%;padding-top:10px;padding-left:10px">
            <fieldset id="chandung">
  <legend align="center">ẢNH 4X6</legend>
                                           <div id="images_chandung"></div>
                                           
                                             <ul>
    
    <li>Nặng: <?=$thongtinbenhnhan[0]["CanNang"];?> kg</li>
      <li>Cao: <?=$thongtinbenhnhan[0]["ChieuCao"];?> cm</li>
      
      
      
      
      <?php
                if($thongtinbenhnhan[0]["CanNang"]!="" && $thongtinbenhnhan[0]["ChieuCao"]!=""){

                    echo ("<li> BMI : ");
				if($thongtinbenhnhan[0]["ChieuCao"]==""){
                    $BMI="0";
                }
                else{
                    $BMI= $thongtinbenhnhan[0]["CanNang"]/($thongtinbenhnhan[0]["ChieuCao"]*$thongtinbenhnhan[0]["ChieuCao"])*10000;
                }
                
				echo round($BMI,1);			
				if($BMI<18.5 ){
					echo "<br> (Gầy)</li>";                 
				}else if(($BMI>=18.5)&&($BMI<23)){
					echo " (Bình thường)</li>";                
				}else if(($BMI>=23)&&($BMI<25)){
					echo "<br> (Thừa cân)</li>";                 
				}else if(($BMI>=25)&&($BMI<30)){
					echo "<br> (Béo phì độ I)</li>";                 
				}else if(($BMI>=30)&&($BMI<35)){
					echo "<br> (Béo phì độ II)</li>";               
				}else if($BMI>=35){
					echo "<br> (Béo phì độ III)</li>";                
				}
                 }
			?>
      
      
      
      
      
      
      
      
      <li>HA: <?=$thongtinbenhnhan[0]["Ps"].'/'.$thongtinbenhnhan[0]["Pd"]?> mmHg</li>
      <li>Mạch: <?=$thongtinbenhnhan[0]["Mach"].' lần/Phút'?></li>

</ul>
 </fieldset>



                <br />

<!--                <pre>

                 Tuổi <?=$thongtinbenhnhan[0]["Tuoi"];?>

                <br />
                   Tuổi <?=$thongtinbenhnhan[0]["Gioi"];?>
                </pre>-->


              

                <br /><br />


			</td>
             <td style="width:70%;padding-top:10px; text-align:center" valign="top">
             <fieldset id="anh">
  <legend align="center">GIẤY TỜ ĐÍNH KÈM</legend>
                   <div id="images_container"></div>
 </fieldset>

             	 <br /><br />
                 <i>
                 	In từ dữ liệu gốc<br />
                 	Ngày <?php echo date("d")." tháng " . date("m")." năm " .  date("Y"); ?>
                 </i>
                 <br />
                 <b>
                 	NGƯỜI THỰC HIỆN
               </b>
                 <br />
                 <img id="bs_chandoan" width="159"/>
                 <br />
                 <b style="color:red"><?=$thongtinluotkham[0]["NguoiThucHien"] ?></b>
            </td>
         </tr>
     </table>
    <?php if($_GET["header"]=="left"){ ?>
    	</div>
    <?php	} ?>

    <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinluotkham[0]["ID_NguoiThucHien"]?>',"bs_chandoan");
			<?php
				echo "var _links='".$_GET['links']."';";
			?>
            <?php
                echo "var _avatar='".$thongtinbenhnhan[0]["Avatar"]."';";
            ?>

			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){
                if(i==0){
                    if(_avatar.length>10){
                $("#images_chandung").append(' <img id="myImg'+i+'" width="180px" height="230px" src="data:image/jpeg;base64,'+_avatar+'" /><div style="height:7px"></div> ');
                    }else{
                $("#images_chandung").append(' <img id="myImg'+i+'" width="180px" height="230px" src="'+_split_link[i]+'" /><div style="height:7px"></div> ');
                }
                }else{
	           $("#images_container").append(' <img id="myImg'+i+'" width="400px" height="240px" src="'+_split_link[i]+'"  /><div style="height:7px"></div> ');
    }
							}
			//setInterval(function(){	send_message("print_preview","");	},2000);


				/*	var i=i+2;
			//alert(i)
			var ii=0;
			$("img").one('load', function() {

			}).each(function() {
				ii++;
			  if(this.complete){
			 	if(ii==i){
					//alert(ii)
					t=setTimeout(function(){
				 		//send_message("print_preview","");
				 	},500);
				}

			  };
			});*/


				print_preview();

				/*	d=setTimeout(function(){
							//window.close();
					},1100);*/
			/*t=setTimeout(function(){
				send_message("print_preview","");
				//window.print();
				d=setTimeout(function(){
					window.close();
				},500);
			},500);*/
		});
	</script>
</body>
</html>
