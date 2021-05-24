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
}.frame_u78787878975f{
    width:300px!important;
    }
.footer{
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
    opacity: 0.2;
    margin: -40px 0px 0px 10px;
}
</style>
</head>
 
<body>
    <?php
   // print_r();
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_SESSION['user']['id_user'],$_SERVER['REMOTE_ADDR']);//tao param cho store 
        $store_name="{call GD2_SaveTicket_New(?,?)}";//tao bien khai bao store$store_name="{call GD2_DeNghiThanhToan_new(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  

        $so=$thongtinbenhnhan[0]['SoKiemSoat'];
        $id=$thongtinbenhnhan[0]['Id_Auto'];
        $sobarcode= $id."".$so;
        //print_r($sobarcode);
       // echo "<br>";
         //print_r(strlen($sobarcode));
        // echo "<br>";
        $cutso=substr($sobarcode,3);
        // print_r($cutso);
        // echo "<br>";
        // print_r($thongtinbenhnhan[0]['Id_Auto']);

        $loai = $thongtinbenhnhan[0]['Loai'];

        $id_auto = $thongtinbenhnhan[0]['Id_Auto']*789;
        //print_r($id_auto);

    ?>
<div id="background">
  <p id="bg-text"><img src="images/logowater.jpg" width="90%" height="100%" align="middle"></p>

</div>
<div style=" position: relative; z-index:0;">
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> 
                <img width="28" src="images/logo_den.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
     </table>
<p align="center"><strong>VOUCHER GIỮ XE</strong><br />
<strong>Giá trị 3.000đ</strong></p>
    <!-- <p align="center"><strong>ID: <?php echo ($_GET["MaBenhNhan"])?></strong></p> -->

<p>Tạo lúc: <em><strong><?php echo (date('d/m/y'))?></strong></em></p>

<p>In bởi: <em><?php echo ($_SESSION["user"]["fullname"])?>, <?php echo ($_SESSION["user"]["TenPhongBan"])?>.&nbsp;</em></p>
<p>Loại voucher: <em>
        <?php 
            if($loai==1){
                echo 'Voucher giữ xe';
            }else{

            } 
        ?></em></p>

<center><p><img style="display: block;"  id="barcode" src = '<?=get_system_one_config("GD2_BarCode_BCGcode128_Src")?><?=$sobarcode?>'></p></center>

<!-- Ẩn ticket id, đè id auto lên -->
<center style="position: absolute;z-index: 1; left: 0;right:0">
<p style="margin-top: -24px; background: white; width: 100px; font-size: 10px;">
    <?php echo $id_auto ?>
</p></center>

<p align="center"><em><strong><font size="5">Quý khách vui lòng thanh  toán chênh lệch nếu gởi xe qua đêm</font></strong></em></p>
    
     <div class="footer"></div>
     <script type="application/javascript">
   $(document).ready(function() {
			<?php
				if(isset($_GET['xemtruocin']) && $_GET['xemtruocin']==0){
					echo "print_direct();";
					
				}else{
					echo "print_preview();";
				}
			?>
      
           
       
   });
  
   </script>
</div>
</body>
</html>
 