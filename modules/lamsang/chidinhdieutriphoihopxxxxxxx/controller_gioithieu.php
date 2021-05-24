<?php
switch ($_GET["oper"]) {
    case "add":
        add();
        break;
}
function add(){
	//print_r($_POST);
	$max=0;	

	$check1='';
	$check7='';
	$check8='';
	$check_25='';
	$check_con_25='';
	$check_26='';
	$check_con_26='';
	$data= new SQLServer;//tao lop ket noi SQL
	if(isset($_POST['id'])){
		$stt=0;
		$dem25=0;
		$dem26=0;
		foreach ($_POST['id'] as $key => $value) {
			
			if(isset($value['Code'])){
				$value['Code']=$value['Code'];
			}else{
				$value['Code']=NULL;	
			}
			
			if($value['Luu']==1){
				if($value['IDNhomCLS']==25){
					unset($params2);
					$store_name2="{call GD2_PHYSIOTHERAPY_Up_MaGioiThieu (?,?,?,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['Code'],$_SERVER['REMOTE_ADDR'],$_SESSION['user']['id_user'] );
					$data->query( $store_name2, $params2);
				}elseif($value['IDNhomCLS']==26){
					unset($params2);
					$store_name2="{call GD2_DieuTriPhoiHop_Up_MaGioiThieu (?,?,?,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['Code'],$_SERVER['REMOTE_ADDR'],$_SESSION['user']['id_user'] );
					$data->query( $store_name2, $params2);
				}else{
					unset($params2);
					$store_name2="{call GD2_Kham_Up_MaGioiThieu(?,?,?,?)}";
					
					$params2 = array($value['IDKham']
									,$value['Code']
									,$_SERVER['REMOTE_ADDR']
									,$_SESSION['user']['id_user']
					 				);
					$data->query( $store_name2, $params2);
					//print_r($params2);
				}
		
			}
		}
		echo "id;".$check1; 
	   } 
}
?>