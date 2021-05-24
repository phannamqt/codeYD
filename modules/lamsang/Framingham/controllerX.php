<?php
switch ($_GET["oper"]) {
    case "luu":
    luu("GD2_FRAMINGHAM_Update");
      break;
    case "add":
    add("GD2_FRAMINGHAM_Add");
      break;
         case "dathuchien":
    dathuchien("GD2_FRAMINGHAM_KHAM_Update");
      break;

       case "hoantat":
    hoantat("GD2_FRAMINGHAM_KHAM_Update");
      break;
 
}	 		 

function add($store_name){


        unset($_POST["High"]);
        unset($_POST["Weight"]);
        unset($_POST["oper"]);
        $chuoi='(?,?,?,?,?
        	,?,?,?,?,?
        		,?,?,?,?,?
        	,?,?,?,?,?,
        	?,?,?)';

if($_POST["SBP"] =="")

 {
 	$_POST["SBP"]=null;
 }

 if($_POST["DBP"] =="")

 {
 	$_POST["DBP"]=null;
 }
  
  
   if($_POST["HDLMol"] =="")
 {
 	$_POST["HDLMol"]=null;
 }

   if($_POST["CHOMol"] =="")
 {
 	$_POST["CHOMol"]=null;
 }

   if($_POST["TG"] =="")
 {
 	$_POST["TG"]=null;
 }

   if($_POST["Glucoserum"] =="")
 {
 	$_POST["Glucoserum"]=null;
 }

   if($_POST["LDLMol"] =="")
 {
 	$_POST["LDLMol"]=null;
 }


     $bien=  array(
($_POST["Smoker"]),
($_POST["CVD"]),
($_POST["DIABET"]),
($_POST["Treated"]),
($_POST["Murmur"]),
($_POST["LVH"]),
($_POST["CigsOnDate"]),
($_POST["Valve"]),
($_POST["AF"]),
($_POST["IC"]),
($_POST["CHD"]),
($_POST["HF"]),
$_POST["SBP"],
$_POST["HRate"],
($_POST["DBP"]),
($_POST["PR"]),
($_POST["HDLMol"]),
($_POST["CHOMol"]),
($_POST["TG"]),
($_POST["LDLMol"]),
($_POST["Glucoserum"]),


($_POST["id_kham"]),
 $_SESSION["user"]["id_user"]
     	);

 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;
	$get_danh_mu=$data->query( $store_name, $params);//Goi store	
}

function luu($store_name){
	$chuoi="(";
	$i=0;
	$check1="";
        unset($_POST["High"]);
        unset($_POST["Weight"]);
        unset($_POST["oper"]);
        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';


if($_POST["SBP"] =="")

 {
 	$_POST["SBP"]=null;
 }

 if($_POST["DBP"] =="")

 {
 	$_POST["DBP"]=null;
 }
  
  
   if($_POST["HDLMol"] =="")
 {
 	$_POST["HDLMol"]=null;
 }

   if($_POST["CHOMol"] =="")
 {
 	$_POST["CHOMol"]=null;
 }

   if($_POST["TG"] =="")
 {
 	$_POST["TG"]=null;
 }

   if($_POST["Glucoserum"] =="")
 {
 	$_POST["Glucoserum"]=null;
 }

   if($_POST["LDLMol"] =="")
 {
 	$_POST["LDLMol"]=null;
 }  

     $bien2=  array(
($_POST["Smoker"]),
($_POST["CVD"]),
($_POST["DIABET"]),
($_POST["Treated"]),
($_POST["Murmur"]),
($_POST["LVH"]),
($_POST["CigsOnDate"]),
($_POST["Valve"]),
($_POST["AF"]),	
($_POST["IC"]),	
($_POST["CHD"]),
($_POST["HF"]),
($_POST["SBP"]),
($_POST["HRate"]),
($_POST["DBP"]),
($_POST["PR"]),
($_POST["HDLMol"]),
($_POST["CHOMol"]),
($_POST["TG"]),
($_POST["LDLMol"]),
($_POST["Glucoserum"]),
($_POST["id_kham"]),
($_POST["cdoan"]),
($_POST["Dieutri"]),
($_POST["chuoiDieutri"]),
 $_SESSION["user"]["id_user"]
     	);
 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;

	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}


function dathuchien($store_name){
 // echo ('dathuchien');
  $chuoi="(";
  $i=0;
  $check1="";
        unset($_POST["High"]);
        unset($_POST["Weight"]);
        unset($_POST["oper"]);
        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';


if($_POST["SBP"] =="")

 {
  $_POST["SBP"]=null;
 }

 if($_POST["DBP"] =="")

 {
  $_POST["DBP"]=null;
 }
  
  
   if($_POST["HDLMol"] =="")
 {
  $_POST["HDLMol"]=null;
 }

   if($_POST["CHOMol"] =="")
 {
  $_POST["CHOMol"]=null;
 }

   if($_POST["TG"] =="")
 {
  $_POST["TG"]=null;
 }

   if($_POST["Glucoserum"] =="")
 {
  $_POST["Glucoserum"]=null;
 }

   if($_POST["LDLMol"] =="")
 {
  $_POST["LDLMol"]=null;
 }  

     $bien2=  array(
($_POST["Smoker"]),
($_POST["CVD"]),
($_POST["DIABET"]),
($_POST["Treated"]),
($_POST["Murmur"]),
($_POST["LVH"]),
($_POST["CigsOnDate"]),
($_POST["Valve"]),
($_POST["AF"]), 
($_POST["IC"]), 
($_POST["CHD"]),
($_POST["HF"]),
($_POST["SBP"]),
($_POST["HRate"]),
($_POST["DBP"]),
($_POST["PR"]),
($_POST["HDLMol"]),
($_POST["CHOMol"]),
($_POST["TG"]),
($_POST["LDLMol"]),
($_POST["Glucoserum"]),
($_POST["id_kham"]),
 $_SESSION["user"]["id_user"],
'DaThucHien',
($_POST["nguoithuchien"]),
($_POST["chuandoan1"])
      );
 
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name="{call $store_name $chuoi2}";//tao bien khai bao store
  $params = $bien2;
//print_r($bien2);
  $get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store 
}
function hoantat($store_name){
 //echo ('hoantat');
  $chuoi="(";
  $i=0;
  $check1="";
        unset($_POST["High"]);
        unset($_POST["Weight"]);
        unset($_POST["oper"]);
        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';


if($_POST["SBP"] =="")

 {
  $_POST["SBP"]=null;
 }

 if($_POST["DBP"] =="")

 {
  $_POST["DBP"]=null;
 }
  
  
   if($_POST["HDLMol"] =="")
 {
  $_POST["HDLMol"]=null;
 }

   if($_POST["CHOMol"] =="")
 {
  $_POST["CHOMol"]=null;
 }

   if($_POST["TG"] =="")
 {
  $_POST["TG"]=null;
 }

   if($_POST["Glucoserum"] =="")
 {
  $_POST["Glucoserum"]=null;
 }

   if($_POST["LDLMol"] =="")
 {
  $_POST["LDLMol"]=null;
 }  

     $bien2=  array(
($_POST["Smoker"]),
($_POST["CVD"]),
($_POST["DIABET"]),
($_POST["Treated"]),
($_POST["Murmur"]),
($_POST["LVH"]),
($_POST["CigsOnDate"]),
($_POST["Valve"]),
($_POST["AF"]), 
($_POST["IC"]), 
($_POST["CHD"]),
($_POST["HF"]),
($_POST["SBP"]),
($_POST["HRate"]),
($_POST["DBP"]),
($_POST["PR"]),
($_POST["HDLMol"]),
($_POST["CHOMol"]),
($_POST["TG"]),
($_POST["LDLMol"]),
($_POST["Glucoserum"]),
($_POST["id_kham"]),
 $_SESSION["user"]["id_user"],
'Xong',
($_POST["nguoithuchien"]),
($_POST["chuandoan1"])
      );
 
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name="{call $store_name $chuoi2}";//tao bien khai bao store
  $params = $bien2;
print_r($bien2);
  $get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store 
}

?>

