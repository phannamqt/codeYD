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
@media print {
    #trang2 {page-break-after: always;}
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
        

        <div id="trang1">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td colspan="2" style="text-align: right; font-weight: bold;">
                      <span>Số hồ sơ: <input style="width: 60px;" class="input_style" type="text" value="" name=""></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;font-size: 14px;">
                    <h3><span style=" font-weight: bold;">SỞ Y TẾ ĐÀ NẴNG</span><br>
                    <?=$_SESSION["com"]["TenBenhVien"]?></h3>
                </td>
            </tr>
            <tr style="height: 40px;">
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; font-size: 20px;">
                    <h1>HỒ SƠ NGOẠI TRÚ<BR>HIẾM MUỘN</h1>
                    <div style="margin-top: -30px;"><span>(IVF)</span><br><span>Năm:</span><input style="width: 60px; font-size: 20px;" class="input_style" type="text" value=" <?php echo date('Y'); ?>" name=""></span>
                    </div>
                </td>
            </tr>
            <tr style="height: 140px;">
                <td colspan="2"></td>
            </tr>

        </table>
        <center><div style="border: 1px solid #000;width: 50%; padding:20px; border-radius: 10px;"><table style="border: 1px solid #000; border-radius: 8px; font-size: 14px; padding:5px; " width="100%" cellpadding="2" cellspacing="3" border="0">
            <tr>
                <td style="width: 70%">
                    Họ tên vợ: <span style="text-transform: uppercase;"><?=$thongtinbenhnhan[0]['HoTenVo']?></span>
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
                    Họ tên chồng: <span style="text-transform: uppercase;"><?=$thongtinbenhnhan[0]['HoTenChong']?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="width: 48%; float: left;">Năm sinh: <?=$thongtinbenhnhan[0]['NamSinhChong']?></span>
                    <span style="width: 48%; float: right;">Mã ch: <?=$thongtinbenhnhan[0]['MaBenhNhanChong']?></span>
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
        
        <table cellspacing="5" cellpadding="5" border="0" width="100%">
            <tr style="height: 200px;"></tr>
            <tr>
                <td rowspan="4" style=" vertical-align: top;" width="25%">
                    <span style="font-size: 18px; float: right; padding-right: 20px;">Ngày thủ thuật</span>
                </td>
                <td width="25%">
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                <td width="25%">
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                 <td width="25%">
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
            </tr>
            <tr>
                </td>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                 <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                 <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
                 <td>
                    <input style="width: 94%" class="input_style" type="text" value="" name="">
                </td>
            </tr>
        </table>
        <br>
        </div>

        <div id="trang2">
            <h2 style="text-align: center; line-height: 100px;">MỤC LỤC</h2>
            <table width="100%" cellspacing="0" cellpadding="0"  border="1" style="text-align: center;">
                <tr style="font-weight: bold;">
                    <td colspan="2" width="10%" >
                        THỨ TỰ DÁN GÁY HỒ SƠ
                    </td>
                    <td>
                        TRÍCH YẾU NỘI DUNG
                    </td>
                    <td>
                        GHI CHÚ
                    </td>
                </tr>
                <tr style="height: 50px;">
                    <td colspan="2" style="font-weight: bold;">
                        BÌA
                    </td>
                    <td style="text-align: left; padding-left:5px;">
                        Ghi theo cột mục
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        1
                    </td>
                    <td style='width:12px;'>
                        &nbsp;
                    </td>
                    <td style="text-align: left; padding-left:5px;">
                        Bệnh án ngoại trú
                    </td>
                    <td style="text-align: left; padding-left:5px;">
                        Cấp cứu, Nội, Ngoại, Nhi, Phụ khoa, Sản khoa Hiếm muộn, Thủ thuật
                    </td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        2
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Tờ điều trị</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        3
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Các tài liệu của tuyến dưới (giấy chuyển viện)</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        4
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Các xét nghiệm máu của vợ</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                       5
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Các xét nghiệm máu của người cho noãn</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        6
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Các xét nghiệm máu của chồng</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        7
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Các xét nghiệm vi sinh (Papsmear, HPV, Soi CTC)</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        8
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu Xquang, Phiếu ECG</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        9
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu siêu âm (nhũ, phụ khoa)</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        10
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu xét nghiệm giải phẫu bệnh lý</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        11
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu theo dõi nang noãn</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        12
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu theo dõi phôi</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        13
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Biên bản hội chẩn</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        14
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Giấy cam đoan, Hợp đồng trữ phôi</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        15
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu khám tiền vô cảm</td>
                    <td></td>
                </tr>
                <tr style='height:45px;'>
                    <td style='width:6px;'>
                        16
                    </td>
                    <td style='width:12px;'>&nbsp;</td>
                    <td style="text-align: left; padding-left:5px;">Phiếu gây mê hồi sức</td>
                    <td></td>
                </tr>
                <!-- <?php
                    for ($i=1; $i < 17; $i++) { 
                       echo "<tr style='height:45px;'>
                                <td style='width:6px;'>
                                    ".$i."
                                </td>
                                <td style='width:12px;'>
                                    &nbsp;
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>";
                    }
                ?> -->
                
            </table>
            <br><br>
            <p style="float: left; font-style: italic;">47-BM/IVFMDPN - Mẫu Hồ sơ hiếm muộn</p>
            <p style="float: right; font-style: italic;">Version 02/01/2018</p>
        </div>

    </div>

</body>

</html>
    <script type="application/javascript">
        $(document).ready(function() {
              print_preview();  
        });
    </script>
