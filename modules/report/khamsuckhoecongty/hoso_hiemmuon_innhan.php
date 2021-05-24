<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Report VN</title>
<style >
body{
    font-family:"Times New Roman", Geneva, sans-serif;
    color: #184a89;
}
/*table{
    overflow:auto;
    font-family:Arial, Helvetica, sans-serif;
    -webkit-print-color-adjust: exact;
}*/
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px "Times New Roman", Helvetica, sans-serif;

}
.input_style{
    border: none;
    border-bottom:1px dotted #184a89!important;
    color: #184a89;
}
input[type=checkbox].css-checkbox {
    display:none;
}

input[type=checkbox].css-checkbox + label.css-label {
    padding-left:20px;
    height:15px; 
    display:inline-block;
    line-height:15px;
    background-repeat:no-repeat;
    background-position: 0 0;
    font-size:15px;
    vertical-align:middle;
    cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
    background-position: 0 -15px;
}
@media print
 {
   /*thead {display: table-header-group!important;}*/
 }
</style>
</head>
 
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_ThongTinVoChong_IVF(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

        // print_r($thongtinbenhnhan);


?>
<body>
    
    <div style="width: 100%;height: auto;margin: 0px; padding:0px; border: 0px solid #ccc; overflow: auto;">
        

        <center><div style="border: 0px solid #000;width: 100%; padding:0px; border-radius: 10px;"><table style="border: 1px solid #000; border-radius: 8px; font-size: 14px; padding:5px; " width="100%" cellpadding="2" cellspacing="3" border="0">
            <tr>
                <td style="width: 70%">
                    Họ tên vợ: <span style="text-transform: uppercase; font-weight: bold;"><?=$thongtinbenhnhan[0]['HoTenVo']?></span>
                </td>
                <td rowspan="3" style="vertical-align: right;">
                    <img id="barcode" src = 'http://<?=$_SERVER['HTTP_HOST']?>/giaidoan2/barcodegen/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=8&thickness=30&checksum=&code=BCGcode39&text=<?=$thongtinbenhnhan[0]["MaBenhNhanVo"]?>'>
                </td>
            </tr>
            <tr>
                <td>
                    Năm sinh: <?=$thongtinbenhnhan[0]['NamSinhVo']?>
                </td>
            </tr>
            <tr>
                <td>
                    Họ tên chồng: <span style="text-transform: uppercase; font-weight: bold;"><?=$thongtinbenhnhan[0]['HoTenChong']?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="width: 48%; float: left;">Năm sinh: <?=$thongtinbenhnhan[0]['NamSinhChong']?></span>
                    <span style="width: 48%; float: right;">Mã chồng: <?=$thongtinbenhnhan[0]['MaBenhNhanChong']?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Địa chỉ: <?=$thongtinbenhnhan[0]['DiaChi']?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Điện thoại: <?=$thongtinbenhnhan[0]['DienThoai1']?>
                </td>
            </tr>
        </table></div></center>
    </div>

</body>

</html>
    <script type="application/javascript">
        $(document).ready(function() {
              print_preview();  
        });
    </script>
