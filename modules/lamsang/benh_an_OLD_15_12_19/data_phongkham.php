<?php

$responce = new stdClass;
 
   //$responce->rows[$i]['id']=$row["ID_Khoa"];
   $responce->rows[0]['id']=1;
    $responce->rows[0]['cell']=array("Phòng khám");
	$responce->rows[1]['id']=2;
	 $responce->rows[1]['cell']=array("Phòng cấp cứu");
echo json_encode($responce);
?>