<?php

switch ($_GET["oper"]) {
	 case "edit":
        edit("GD2_spDM_LoaiKham_Update_xetnghiem");
        break;
	 case "delxn":
		delxn("GD2_Xetnghiem_del");
		break;
   
}
function edit($store_name){
	if(!isset($_POST['IsKetNoiLab'])){    
            $IsKetNoiLab=0;
        }else{    
                $IsKetNoiLab=$_POST['IsKetNoiLab'];
        }
	if(!isset($_POST['CoLuuKQInRieng'])){    
		$CoLuuKQInRieng=0;
	}else{    
			$CoLuuKQInRieng=$_POST['CoLuuKQInRieng'];
	}
	if(!isset($_POST['Active'])){    
		$Active=0;
	}else{    
			$Active=$_POST['Active'];
	}
	
	if(!isset($_POST['CoFormChucNangRieng'])){    
		$CoFormChucNangRieng=0;
	}else{    
			$CoFormChucNangRieng=$_POST['CoFormChucNangRieng'];
	}
	       $check1='';
              
        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call [GD2_spDM_LoaiKham_Update_xetnghiem_new](?,?,?,?,? ,?,?,?)}";//tao bien khai bao store
		
        $params = array(
            $_GET['id'],
		   $_POST['STT'],
         	$IsKetNoiLab,
			$CoLuuKQInRieng,
			$Active,
			
			$CoFormChucNangRieng,
           $_SESSION['user']['id_user'],
         $_SERVER['REMOTE_ADDR']
		 //SQLSRV_PARAM_IN array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)  
        );
     //print_r($params);
        
       $get=$data->query( $store_name, $params);
	    echo ';;'.$check1.';;';
      
	  
	  
	
}
function delxn($store_name){
	$check1='';
	 
		
		$data= new SQLServer;//tao lop ket noi SQL
        
 		$params4=array(
		 $_GET['ID_XetNghiem'],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],
		array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)	
		);
	   // print_r($params1);
		$store_name2="{call GD2_Xetnghiem_del(?,?,?,?)}";
	   // print_r($params4);
	   $get4=$data->query( $store_name2, $params4);
	   echo $check1;
}
?>