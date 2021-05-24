<?php
// $data= new SQLServer;
$id_return='';
$array_column;
 if($_POST['hsdtu']!='')
     $_POST['hsdtu']=convert_date($_POST['hsdtu']);
 else
    $_POST['hsdtu']=NULL;
        
 if($_POST['hsdden']!='')
     $_POST['hsdden']=convert_date($_POST['hsdden']);
 else
	$_POST['hsdden']=NULL;  


if($_POST['nhabhcc']==''){
	$array_column=array(  
		'SoThe' =>$_POST['mabh'],
		'DiaChiTheBHCC' => $_POST['diachi'],
		'HanSD_TuNgay' =>$_POST['hsdtu'],
		'HanSD_DenNgay' =>$_POST['hsdden'],
		'ID_BenhNhan' => $_REQUEST['id_benhnhan'],
		'ID_LoaiTheBHCC' =>$_POST['loaithe']
	);
}else{
	$array_column=array(  
		'SoThe' =>$_POST['mabh'],
		'DiaChiTheBHCC' => $_POST['diachi'],
		'HanSD_TuNgay' =>$_POST['hsdtu'],
		'HanSD_DenNgay' =>$_POST['hsdden'],
		'ID_BenhNhan' => $_REQUEST['id_benhnhan'],
		'ID_LoaiTheBHCC' =>$_POST['loaithe'],
		'ID_NhaBHCC' =>$_POST['nhabhcc'],
	);
}

if($_POST['hsdden']=='' && $_POST['hsdtu']=='' && $_POST['nhabhcc']==''){
	$array_column=array(  
		'SoThe' =>$_POST['mabh'],
		'DiaChiTheBHCC' => $_POST['diachi'],
		'ID_BenhNhan' => $_REQUEST['id_benhnhan'],
		'ID_LoaiTheBHCC' =>$_POST['loaithe'],
	);
}


if($_POST['hsdden']=='' && $_POST['hsdtu']=='' ){
	$array_column=array(  
		'SoThe' =>$_POST['mabh'],
		'DiaChiTheBHCC' => $_POST['diachi'],
		'ID_BenhNhan' => $_REQUEST['id_benhnhan'],
		'ID_LoaiTheBHCC' =>$_POST['loaithe'],
		'ID_NhaBHCC' =>$_POST['nhabhcc'],
	);
}
	


 
if($_GET['oper']=='add'){
    $id_return=dbInsert(
        'GD2_DM_TheBHCC',
        $array_column
	);
//	print_r($array_column);
    echo ';'.$id_return;
}else{
    dbUpdate(
        'GD2_DM_TheBHCC'
        ,'ID_The_BHCC'
        ,$_POST['idbh']
        ,$array_column
    ); 
}
?>


