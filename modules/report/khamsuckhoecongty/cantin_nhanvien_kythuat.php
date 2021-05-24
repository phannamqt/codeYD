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
}.frame_u78787878975f{
  width:300px!important;
  }
.footer{
    margin-top:55px;
       height:4px;
     background: #f9f9f9;
}
</style>
</head> 
<body>
<?php if($_GET["oper"]==1){ ?>
   <table   cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-top: 1px">
        
        <tr style="height:27px">
            <td align="center" style=" font-size: 16px; font-weight:bold; ">Số phiếu:xxx</td>
        </tr>
        <tr style="height:27px">
            <td align="center" style=" font-weight:bold;  ">xxx</td>
        </tr>
        <tr style="height:27px">
            <td align="center" style="   ">xxx</td>
        </tr>
        <tr style="height:27px">
            <td align="center" style=" ">Tạo lúc:xxx </td>
        </tr>
        
    </table>
<?php } 
 if($_GET["oper"]==0){  
        $data= new SQLServer;
    $id_return=0;
        $params = array(
         $_GET["idnhanvien"]
        ,$_SESSION['user']['id_user']
        ,$_SERVER['REMOTE_ADDR']
        ,$_GET["LoaiXacNhan"]
        ,array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
        );
        $store_name="{call GD2_DmNhanVien_VanTay_insert(?,?,?)}";
        $get_thongtinbenhnhan=$data->query( $store_name,$params);

        $params = array($id_return);//tao param cho store 
        $store_name="{call GD2_cantin_vantaynhanvien_report(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  

        if($thongtinbenhnhan[0]["TaoLuc"]!=''){
            $thongtinbenhnhan[0]["TaoLuc"]=$thongtinbenhnhan[0]["TaoLuc"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);}
    else $thongtinbenhnhan[0]["TaoLuc"]='';
  
    ?>
    
    <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        
        <tr style="height:27px">
            <td align="center" style=" font-size: 16px; font-weight:bold; ">Số phiếu: <?php echo  $thongtinbenhnhan[0]['Id_AuTo']; 
    ?> </td>
        </tr>
        <tr style="height:27px">
            <td align="center" style=" font-weight:bold;  "><?php echo  $thongtinbenhnhan[0]['hotenv']."(".$thongtinbenhnhan[0]['NickName'].")"?> </td>
        </tr>
        <tr style="height:27px">
            <td align="center" style="   "><?php echo  $thongtinbenhnhan[0]['TenPhongBan'];        ?> </td>
        </tr>
        <tr style="height:27px">
            <td align="center" style=" ">Tạo lúc: <?php echo  $thongtinbenhnhan[0]['TaoLuc']; 
        ?> </td>
        </tr>
        
    </table>
    <?php } ?>
     <div class="footer"></div>
     <script type="application/javascript">
   $(document).ready(function() {   

     var _xemtruocin=<?=$_GET['xemtruocin'];?>;
     if(_xemtruocin==0){
      print_direct(10,10);  
     }
     if(_xemtruocin==1){
       print_preview();
     }
   });
  
   </script>
  
    
    
</body>
</html>
 