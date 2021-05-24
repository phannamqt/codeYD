<?php
include("class/class.sqlserver.php");
include("class/basic_function.php");
$data= new SQLServer;//tao lop ket noi SQL

$store_name="{call GD2_GetPhanQuyenById_NhanVien_and_group_quyen(?)}";//tao bien khai bao store
$params = array(1);//tao param cho store
$get_main_menu=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_main_menu);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
//echo count($tam);
check(0,$tam,'');




function check($a,$menu,$b){
	$d=0;
	foreach($menu as $key=>$row){
	  if($row['ID_Parent']==$a){
		  if($row['ID_Parent']==''){
			  $tam1=explode(":",$row['PageOpen']);
			  if (!file_exists('modules/'.$tam1[0])) {
				  echo $row['ID_Control'].",";
			  	//echo 'modules/'.$tam1[0].'<br>';
			  }
			 // echo '<li class="has-sub"><a class="'.$tam1[0].'" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$row['Caption'].'</a><ul>'; 
			  unset($menu[$key]);
			  check($row['ID_Control'],$menu,$tam1[0]); 
			 // echo '</ul></li>'; 
		  }else{
			if($a>0){
				if($row['ID_Parent']==$a){
					$tam=explode(":",$row['PageOpen']);
					if($row['PageOpen']==true){
					  $class='tab_form';  
					}else{
					  $class='modal_form';   
					}
					//echo $tam[0].'<br>';
					if (!file_exists('modules/'.$b.'/'.$tam[0])) {
						echo $row['ID_Control'].",";
						//echo 'modules/'.$b.'/'.$tam[0].'<br>';
					}
				 // echo ' <li id="pages.php?module='.$b.'&view='. $tam[0].'&id_form='.$row['ID_Control'].'&id_loai=0" class="'.$tam[0].' '.$class.'" lang="'.$row['ChoPhepMoNhieuTab'].'" role="'.$row['Form_size'].'" >'.$row['Caption'].'</li>';
				  unset($menu[$key]);
				}
			}else{
			  //  echo ' <li><a class="'.$row['pageopen'].'" href="#" onClick="menu_openform('.$row['PageOpen'].',1)">'.$row['Caption'].'</a></li>';
				unset($menu[$key]);
			}
		  }
	  }
	  
	}//end for
 }//end func
?>