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
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#footer
{
    clear: both;
    color: Black;
    text-align: left;
    vertical-align: middle;
    line-height: normal;
    margin: 0;
    padding-right: 10px!important;
    position: fixed;
    bottom: 5px;
    width: 90%;
    font-size: 13px;
    right: 5px;
}

#clound{
	background:url("./modules/report/canlamsang/img/stork.jpg")  ;
	background-repeat:repear-x;
	background-position:top;	
	width:92%;   
}
img{
	margin-top:14px;
	padding-bottom:14px;
	margin-left:19px;	
	padding-right:19px;	 
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
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);        

        $params2 = array($_GET["id_kham"]);//tao param cho store 
        $store_name2="{call GD2_GetTuoiThai_SieuAm4D_ByID_Kham(?)}";//tao bien khai bao store
        $get_khamthai=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_khamthai);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $khamthai= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc
       // print_r($khamthai); 
      //  $sotuanthai=floor($khamthai[0]["SoNgayThai"]/7);
       // $songaythai=$khamthai[0]["SoNgayThai"]%7; 
         if($thongtinluotkham[0]["NgayGioChanDoan"]!=null){
        	 $gio=$thongtinluotkham[0]["NgayGioChanDoan"]->format("H:i "); 
       		 $ngay=$thongtinluotkham[0]["NgayGioChanDoan"]->format($_SESSION["config_system"]["ngaythang"]);
        }
    ?>
     <div class="footer" id="footer">

    </div>
    <div style="width:100%;margin-top:0px;" align="center">
           <div style="width:100%;margin-top:1%" > 
            <div style="width:360px;float:left;" >
				<div id="top">
					<div id="bottom">
						<div id="left">
							<div id="right">
								<div id="conner1">
									<div id="conner2">
										<div id="conner3">
											<div id="conner4">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="width:360px;float:left;" >
				<div id="top2">
					<div id="bottom2">
						<div id="left2">
							<div id="right2">
								<div id="conner5">
									<div id="conner6">
										<div id="conner7">
											<div id="conner8">
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<?php if($thongtinluotkham[0]["NgayGioChanDoan"]==""){
					echo("");
			}
			else{ 
				echo('<div style=" text-align: center;display:inline-block;">Họ tên: '.$thongtinbenhnhan[0]["HoLotBenhNhan"].' '.$thongtinbenhnhan[0]["TenBenhNhan"].' - ID: '.$thongtinbenhnhan[0]["MaBenhNhan"].' - '.$thongtinbenhnhan[0]["Tuoi"].' tuổi</div>');
			}
			?>
		</div>
       </div>
</body>
</html>
<script type="application/javascript">
$(document).ready(function() {
	<?php 
		echo "var _links='".$_GET['links']."';";
	?>
	_split_link= _links.split(":::");  
	$("#conner4").append(' <img id="myImg'+0+'" width="350px" height="380px" src="'+_split_link[3]+'"  /> ');
	 $("#conner8").append(' <img id="myImg'+1+'"  width="350px" height="380px" src="'+_split_link[4]+'"  /> ');
	print_preview();
});
</script>