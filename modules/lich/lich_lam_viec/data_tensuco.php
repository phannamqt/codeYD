<?php




$data= new SQLServer;
$store_name="{call GD2_GetDMSuCo(?)}";
$params = array(1);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 

/*  $params = array($tables,$id,$name,$term);//tao param cho store
   $tam=connect_data('GD2_GetDMSuCo',"(?)",$params);
  $i=0;
  if($status==0){
    echo " :;";
  }elseif($status==1){
    echo " :Tất cả;";
  }*/



$i=0;
  foreach ($tam as $v) {//duyet toan bo mang tra ve

    if(trim($v[1])!=""){
      if($i!=count($tam)-1){
        $phancach=";";
      }else{
        $phancach="";
      }
      //echo $v[0].":".$v[1].$phancach;
		  echo $v[0].":";lang($v[2]);echo $phancach;
		//echo  $v[2];
    }
    $i++;
  }

?>
