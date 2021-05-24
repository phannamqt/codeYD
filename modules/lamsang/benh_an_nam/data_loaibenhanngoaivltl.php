<?php
$responce = new stdClass;
 
   //$responce->rows[$i]['id']=$row["ID_Khoa"];
   $responce->rows[0]['id']=1;
    $responce->rows[0]['cell']=array("Đau cuộc sống/thoái hóa cuộc sống");
	$responce->rows[1]['id']=2;
	 $responce->rows[1]['cell']=array("Liệt nữa người");
	 $responce->rows[2]['id']=3;
	 $responce->rows[2]['cell']=array("Đau khớp/cứng khớp");
echo json_encode($responce);
?>