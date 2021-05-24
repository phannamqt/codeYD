<?php
$responce->rows[0]['id']=0;
$responce->rows[0]['cell']=array('','');
$responce->rows[1]['id']=1;
$responce->rows[1]['cell']=array(1,1);
$responce->rows[2]['id']=2;
$responce->rows[2]['cell']=array(2,2);
$responce->rows[3]['id']=3;
$responce->rows[3]['cell']=array(3,3);
$responce->rows[4]['id']=4;
$responce->rows[4]['cell']=array(4,4);
$responce->rows[5]['id']=5;
$responce->rows[5]['cell']=array(5,5);

echo json_encode($responce);
?>