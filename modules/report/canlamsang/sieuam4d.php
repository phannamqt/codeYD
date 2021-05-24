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
    text-align: right;
    vertical-align: middle;
    line-height: normal;
    margin: 0;
    padding-right: 10px!important;
    position: fixed;
    bottom: 0px;
    width: 90%;
    font-size: 13px;
    border-top:1px solid #000;
    right: 5px;
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
        if($thongtinluotkham[0]["GhiChu"]==""){
            $denghi="";
        }
        else{
            $denghi="ĐỀ NGHỊ";
        }
    ?>
  
<?=HeaderReportA4()?>	
	<?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"]." - ĐT: ".$thongtinbenhnhan[0]["DienThoai1"])?>
     
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Arial,Tahoma,arial, Geneva, sans-serif;padding:5px 7px">         
         <tr>
            <td valign="top" style="width:65%;padding-top:10px">
                <b style="font-size:15px;color:#000;">MÔ TẢ</b>
                <br />
                <pre><i style="line-height:1.3"><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
                <br /><br />
                <b style="font-size:15px;color:#000">KẾT LUẬN</b><br />
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
                <br /><br />
                <b style="font-size:15px;color:#000"><?=$denghi?></b><br />
                <pre><?=$thongtinluotkham[0]["GhiChu"] ?></pre>
            </td> 
             <td style="width:35%; text-align:center;" valign="top">
                 <div id="images_container" style="height:600px"></div>
                 <br><br>
                 <i>
                    Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
                 <br />
                 <b>
                    Bác sĩ thực hiện
                 </b>
                 <br /><br /><br /><br />
                 <img id="bs_chandoan" width="159"/>
                 <br />                 
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
            </td>             
         </tr>            
     </table>
    
    <script type="application/javascript">
        $(document).ready(function() {
            //load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");            
             
            
            <?php 
                echo "var _links='".$_GET['links']."';";
            ?>
            
            _split_link= _links.split(":::");
            for(i=0;i<=_split_link.length-2;i++){            
                $("#images_container").append(' <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  /><div style="height:7px"></div> ');
            }
           
                 
              print_preview();
            

        });
    </script>
</body>
</html>
 