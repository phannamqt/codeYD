<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_Framingham_ById_BenhNhan(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    $MaVietTat='FRAMINGHAM';
    $SBP="";
    if($row["SBP"]=='')
    {
      $SBP=$row["PS"];
    }
    else
    {
      $SBP=$row["SBP"];
    }


        $DBP="";
    if($row["DBP"]=='')
    {
      $DBP=$row["PD"];
    }
    else
    {
      $DBP=$row["DBP"];
    }
    

     $HRate="";
    if($row["HRate"]=='')
    {
      $HRate=$row["Mach"];
    }
    else
    {
      $HRate=$row["HRate"];
    }

     $TG="";
    if($row["TG"]=='')
    {
      $TG=$row["TG2"];
    }
    else
    {
      $TG=$row["TG"];
    }

     $CHOMol="";
    if($row["CHOMol"]=='')
    {
      $CHOMol=$row["CHOL"];
    }
    else
    {
      $CHOMol=$row["CHOMol"];
    }

     $HDLMol="";
    if($row["HDLMol"]=='')
    {
     $HDLMol=$row["HDLC"];
    }
    else
    {
       $HDLMol=$row["HDLMol"];
    }
    

     $LDLMol="";
    if($row["LDLMol"]=='')
    {
      $LDLMol=$row["LDLC"];
    }
    else
    {
      $LDLMol=$row["LDLMol"];
    }

        $GlucoSerumMol="";
    if($row["GlucoSerumMol"]=='')
    {
     
      $GlucoSerumMol=$row["G"];

    }
    else
    {
      
 $GlucoSerumMol=$row["GlucoSerumMol"];
    }


    
    $ngaygiothuchien = "";
    if (isset($row["NgayGioThucHien"])) {
        $ngaygiothuchien = $row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    
    $ngaygiochandoan = "";
    if (isset($row["NgayGioChanDoan"])) {
        $ngaygiochandoan = $row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    if (isset($row["NgayGioThucHien"])) {
        $NgayGioThucHien = $row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    $NgayGioHenTraKQ = "";
    if (isset($row["NgayGioHenTraKQ"])) {
        $NgayGioHenTraKQ = $row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
       $MaVietTat,//0
       "FRAMINGHAM",//1
       $row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),//2
       $row["NguoiChiDinh"],//3
       $row["ID_LuotKham"],//4
       $row["MoTa"],//5
       $row["KetLuan"],//6
       $row["ID_TrangThai"],//7
       $row["BSChanDoan"],//8
       $row["NguoiDoc"],//9
       $ngaygiothuchien,//10
       $row["NguoiThucHien"],//11
       $ngaygiochandoan,//12
       $row["ID_LuotKham"],//13
       $row["ID_LoaiKham"],//14
       $NgayGioHenTraKQ ,//15


          $row["Smoker"],//16
              $row["CigsOnDate"],//17
                  $row["CHOL_Total"],//18
                      //$row["CHOMol"],//19
                  $CHOMol,//19
                        //  $row["HDLMol"],//20
                  $HDLMol,//20
                            //  $row["LDLMol"],//21
                  $LDLMol,//21
                                  $row["CHOL_HDL"],//22
                                      $row["CHOL_LDL"],//23
                                        //  $row["TG"],//24
                                        $TG,//24
                                              //$row["SBP"],//25
                                          $SBP,//25
                                                //  $row["HRate"],//26
                                            $HRate,//26
                                                      $row["AF"],//27
                                                          $row["CVD"],//28
               $row["Valve"],//29
                    $row["HF"],//30
                         $row["CHD"],//31
                              $row["LVH"],//32
                                 //  $row["DBP"],//33
                              $DBP,//33
                                        $row["DIABET"],//34
                                             $row["Treated"],//35
                                                  $row["Murmur"],//36
                                                       $row["Murmur"],//37
                                                            $row["PR"],//38
                $row["RMS"],//39
                 $row["IC"],//40
                  //$row["GlucoSerumMol"],//41
                 $GlucoSerumMol,//41
                   $row["PR"],//42                                             
  $row["High"],//43                                             
  $row["Weight"],//44 
   $row["Gioi"],//45
    $row["Tuoi"],//46    
    $row["BMI"],//47  
     $row["ID_Framingham"],//48                                              
                                         




       );
    $i++; 
}
echo json_encode($responce);
?>
