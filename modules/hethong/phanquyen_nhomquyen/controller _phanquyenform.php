<?php
print_r($_POST);
$id=$_POST['id'];
$id_control=$_POST['id_control'];
$isactive=$_POST['isactive'];
//neu $_POST['id_check'] rong
if(isset ($_POST['id_check'])){
	$id_check=$_POST['id_check'];
}else{
	$id_check=array(0);
}

$data= new SQLServer;//tao lop ket noi SQL
$flag=0;
$params =array();
$dem=count($id_check)-1;
for($i=0;$i<=count($id_control)-1;$i++){
  unset ($params);
  //chua co quyen data
	if($id[$i]==0){
		for($ii=0;$ii<=count($id_check)-1;$ii++){
		//neu check add
			if($id_control[$i]==$id_check[$ii]){
				$params=array($id_control[$i],$_POST['id_nhanvien'],$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_add(?,?,?)}", $params);
				break;
			}
		}
		//da co quyen
	}else{
		for($y=0;$y<=count($id_check)-1;$y++){
			$flag=0;
		//neu check up co quyen
			if($id_control[$i]==$id_check[$y]){
				if($isactive[$i]==0){
				$params=array($id[$i],1,$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_upd(?,?,?)}", $params);				
				}
				$flag=1;				
				break;
			}
		}
		//ko check update co quyen
		if($flag==0){
			//echo $id[$i];
			if($isactive[$i]==1){
				$params=array($id[$i],0,$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_upd(?,?,?)}", $params);
			}
		}
		
		
	}

}
	
?>

