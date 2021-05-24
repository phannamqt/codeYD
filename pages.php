<?php
ob_start("ob_gzhandler");
session_start();
if(isset($_GET["view"])){$view = $_GET["view"];};
if(isset($_GET["action"])){$action = $_GET["action"];};
if(isset($_GET["id_form"])){$id_form = $_GET["id_form"];};
if(isset($_GET["module"])){$modules = $_GET["module"];};
if(isset($_GET["public"])){	
 	if(isset($_GET["module"])&&($_GET["function"]="printer_check")){
			include("class/class.sqlserver.php");
			include("modules/".$modules."/$action.php");
			return;	 
	}
};
	if((!isset($_SESSION["user"]["login"]))&&($_GET["module"]!="login")){
		echo "Vui lòng đăng nhập"; 
		return;
	}
include("class/class.sqlserver.php");
include("class/basic_function.php");


if(isset($_GET["type"])){
	include("class/ExportToExcel.class.php");
	$types = $_GET["type"];
}else{
	$types ="";
};
if(!isset($view)){
	if(!isset($action)){
		include("header_modules.php");
		include("class/language.php");
		phanquyen($id_form);
		include("modules/".$modules."/index.php");		
	}else{		 
		include("modules/".$modules."/$action.php");		
	}
}else{	
	if(!isset($action)){
		include("header_modules.php");
		include("class/language.php");
                //kha add 19/11/13------------
                include("class/php_common/func.php");
                //----------------------------
		phanquyen($id_form);
		if (file_exists("modules/".$modules."/".$view."/index.php")) {
			include("modules/".$modules."/".$view."/index.php");	
		}else{
			echo "<center><h1><b>Chức năng này không tồn tại!</b></h1></center>";
			//echo "<center>Không tìm thấy form <b>".$view."</b> trong modules <b>".$modules."</b></center>";
		}
		 
	}else{	    
	  if(($types=="report")||($types=="test")){
		//if($types=="print"){			 
			include("header_modules.php");
			include("class/language.php");
			phanquyen($id_form);
			if(isset($_GET["report_name"])){			 
				echo '<script type="text/javascript">';
				echo ' var report_name="'.$_GET["report_name"].'";';
				echo ' var default_url="'.$_SESSION["com"]["DuongDanPhanMem"].'/";';
				echo '</script>';
			}; 
			
			
		//}
		//echo "chinh";
	  }	
	  if (file_exists("modules/".$modules."/".$view."/$action.php")) {
			include("modules/".$modules."/".$view."/$action.php");	
		}else{
			echo "<center>Không tìm thấy file <b>$action</b> trong form <b>".$view."</b> trong modules <b>".$modules."</b></center>";
		}
	}	
}
function phanquyen22($id_form){
}
function phanquyen($id_form){
	echo '<script type="text/javascript">';
	echo ' var permission=[];';
	echo ' var phimtat=[];';
	
	$data= new SQLServer;
	$store_name="{call GD2_quyennhanvien_button_get(?,?)}";
	$params = array($_SESSION["user"]["id_user"],$id_form);
	$get_main_menu=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get_main_menu);
	$tam= $excute->get_as_array();     
	//print_r($store_name);
	$i=0;
	
				foreach ($tam as $v) {		
					  
						echo "permission['$v[TenControl]']=$v[Active];\n" ;      
						 //$permission->v[$i][TenControl]=$v["TenControl"];
						 //$permission->v[$i][Caption]=$v["Caption"];
						 $i++;
				}  
			//print_r($_SESSION["phimtat"]);
				if(isset($_SESSION["phimtat"])){
				echo 'function openform_shortcutkey(){';
				echo  '$("body").keydown(function(e){';
				for($i=0;$i<=count($_SESSION["phimtat"])-1;$i++){
				$pageopen=	explode(":", $_SESSION["phimtat"][$i][2]);
				
				if($i==0){
					if(strtolower($_SESSION["phimtat"][$i][0])=='f6'){
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("benhan_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");											
						}';		
					}elseif(strtolower($_SESSION["phimtat"][$i][0])=='f7'){
							echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("edit_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");											
						}';	
					}else{
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("opentab;'.$pageopen[0].';" , "*");						
						}';	
					}
				}else{
					if(strtolower($_SESSION["phimtat"][$i][0])=='f6'){
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("benhan_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan, "*");	
																
						}';	
					}elseif(strtolower($_SESSION["phimtat"][$i][0])=='f7'){
							echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						if(typeof idluotkham === "undefined"){
  							idluotkham="undefined";
						 };
						 if(typeof id_benhnhan === "undefined"){
  							id_benhnhan="undefined";
						 };
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("edit_luotkham;'.$pageopen[0].';"+idluotkham+";"+id_benhnhan , "*");	
																
						}';
					}else{
						echo 'if(jwerty.is("'.$_SESSION["phimtat"][$i][0].'",e)){
						jwerty.key("'.$_SESSION["phimtat"][$i][0].'", false);
						parent.postMessage("opentab;'.$pageopen[0].';" , "*");						
						}';	
					}
					
				}
				}
				echo  '});';
				
				echo  '$("body").keydown(function(e){';
				echo  'if(jwerty.is("ctrl+space",e)){	
							jwerty.key("ctrl+space", false);
							if(!$("#barcode_key").length){
								$("body").append("<input id=\'barcode_key\' style=\'position:absolute; top: 50%;left: 50%;z-index:1000;\'>");
								$("#barcode_key").focus();	
								$("#barcode_key").blur(function() {
									 barcode($("#barcode_key").val());
								  $("#barcode_key").remove();
								  
								});	
								$("#barcode_key").scannerDetection({onComplete:  function(e,data){barcode(e)}})	;
							}
						}';
				
					echo  'if(jwerty.is("ctrl+2",e)){	
										jwerty.key("ctrl+2", false);										
						}';
									
				echo  '})';
			echo '}';
				}
	echo '</script>';

	//print_r($_SESSION["phimtat"]);		
	//echo '<br>memory_get_usage start: [' . (memory_get_usage()/1048576.2) . ']';
}
die;
?>