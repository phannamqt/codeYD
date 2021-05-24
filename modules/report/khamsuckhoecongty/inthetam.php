<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >

body{
    overflow:auto;
    margin:0 !important;
    font-family:Arial, Helvetica, sans-serif!important;
    /*background-image: url(images/logo_den.png);*/
    background-repeat: none;
    /*background: green;*/
    /*position:absolute;
    z-index:1;
    background:white;
    display:block;*/
    background-size: 100% 100%;
    letter-spacing:0.5px;
}
.frame_u78787878975f{
    width:300px!important;
    }
.footer{
        margin-top:55px;
       height:4px;
       background: #f9f9f9;
}
#background{
    position:absolute;
    z-index:0;
    background:white;
    display:block;
    min-height:50%; 
    min-width:50%;
    margin: 0px;


}

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
    text-align: center;
    color:lightgrey;
    font-size:90px;

 
    /*transform:rotate(300deg);*/
    /*-webkit-transform:rotate(300deg);*/
}
#bg-text img{
    
    margin: -80px 0px 0px 0px;
}
.thetam{
    padding: 80px 0px 0px 0px;
    margin-left: 0px;
}
.thetamtd{
    width: 320px;
}
td{
    padding:5px 0px 0px 0px;
}
</style>
</head>
 
<body>
    <?php
        function chuyenChuoi($str) {
        // In thường
             $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
             $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
             $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
             $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
             $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
             $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
             $str = preg_replace("/(đ)/", 'd', $str);    
        // In đậm
             $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
             $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
             $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
             $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
             $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
             $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
             $str = preg_replace("/(Đ)/", 'D', $str);
             return $str; // Trả về chuỗi đã chuyển
        }

        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_DM_BenhNhan_Select_Inthetam(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
        // print_r($thongtinbenhnhan);
        $tenbenhnhan=chuyenChuoi($thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"]);
        $ma_bn=$thongtinbenhnhan[0]["MaBenhNhan"];
        $thethanhvien=$thongtinbenhnhan[0]["SoTheThanhVien"];
        //print_r($thethanhvien);

    ?>
<div id="background">
  <p id="bg-text"><img src="images/background_thetam.jpg" width="50%" height="50%" align="middle"></p>

</div>
<center><div style=" position: relative; z-index:0;">
    <table border="0" class="thetam">
        <tr>
            <td class="thetamtd">
                <?php echo $tenbenhnhan;?>
            </td>

        </tr>
        <tr>
            <td>
                ID: <?php echo $ma_bn;?>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom: 0px;">
                NHOM MAU / BLOOD GROUP: A
            </td>
        </tr>
        <tr>
            <td>
                <p style="">
                    <img style="display: block;border: 5px solid #fff; border-radius: 5px;"  id="barcode" src = 'http://<?=$_SERVER['HTTP_HOST']?>/giaidoan2/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=8&thickness=30&checksum=&code=BCGcode128&text=<?=$thethanhvien?>'>
                </p>
            </td>
        </tr>
    </table>
</div></center>

     <script type="application/javascript">
   $(document).ready(function() {
    
            print_preview();
           // print_direct();
       
   });
  
   </script>
</div>
</body>
</html>
 