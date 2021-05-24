<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name_mat="{call GD2_KSK_TemplateMat()}";
$params_mat= array(); 
$get_mat=$data->query( $store_name_mat, $params_mat);
$excute_mat= new SQLServerResult($get_mat);
$tam_mat= $excute_mat->get_as_array();
$responce_mat = new stdClass;
$i_mat=0;
foreach ($tam_mat as $row) {//duyet toan bo mang tra ve
    $responce_mat->rows[$i_mat]['id']=$row["ID_Template"];
    $responce_mat->rows[$i_mat]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_mat++; 
}  
echo json_encode($responce_mat);//0
echo '|||';

$store_name_ketluan="{call GD2_KSK_TemplateKetLuan()}";
$params_ketluan = array(); 
$get_ketluan=$data->query( $store_name_ketluan, $params_ketluan);
$excute_ketluan= new SQLServerResult($get_ketluan);
$tam_ketluan= $excute_ketluan->get_as_array();
$responce_ketluan = new stdClass;
$i_ketluan=0;
foreach ($tam_ketluan as $row) {//duyet toan bo mang tra ve
    $responce_ketluan->rows[$i_ketluan]['id']=$row["ID_Template"];
    $responce_ketluan->rows[$i_ketluan]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_ketluan++; 
}  
echo json_encode($responce_ketluan);//1
echo '|||';

$store_name_taimuihong="{call GD2_KSK_Template_TaiMuiHong()}";
$params_taimuihong = array(); 
$get_taimuihong=$data->query( $store_name_taimuihong, $params_taimuihong);
$excute_taimuihong= new SQLServerResult($get_taimuihong);
$tam_taimuihong= $excute_taimuihong->get_as_array();
$responce_taimuihong = new stdClass;
$i_taimuihong=0;
foreach ($tam_taimuihong as $row) {//duyet toan bo mang tra ve
    $responce_taimuihong->rows[$i_taimuihong]['id']=$row["ID_Template"];
    $responce_taimuihong->rows[$i_taimuihong]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_taimuihong++; 
}  
echo json_encode($responce_taimuihong);//2
echo '|||';

$store_name_ranghammat="{call GD2_KSK_Template_RangHamMat()}";
$params_ranghammat = array(); 
$get_ranghammat=$data->query( $store_name_ranghammat, $params_ranghammat);
$excute_ranghammat= new SQLServerResult($get_ranghammat);
$tam_ranghammat= $excute_ranghammat->get_as_array();
$responce_ranghammat = new stdClass;
$i_ranghammat=0;
foreach ($tam_ranghammat as $row) {//duyet toan bo mang tra ve
    $responce_ranghammat->rows[$i_ranghammat]['id']=$row["ID_Template"];
    $responce_ranghammat->rows[$i_ranghammat]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_ranghammat++; 
}  
echo json_encode($responce_ranghammat);//3
echo '|||';

$store_name_dalieu="{call GD2_KSK_Template_DaLieu()}";
$params_dalieu = array(); 
$get_dalieu=$data->query( $store_name_dalieu, $params_dalieu);
$excute_dalieu= new SQLServerResult($get_dalieu);
$tam_dalieu= $excute_dalieu->get_as_array();
$responce_dalieu = new stdClass;
$i_dalieu=0;
foreach ($tam_dalieu as $row) {//duyet toan bo mang tra ve
    $responce_dalieu->rows[$i_dalieu]['id']=$row["ID_Template"];
    $responce_dalieu->rows[$i_dalieu]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_dalieu++; 
}  
echo json_encode($responce_dalieu);//4
echo '|||';

$store_name_noikhoa="{call GD2_KSK_Template_NoiKhoa()}";
$params_noikhoa = array(); 
$get_noikhoa=$data->query( $store_name_noikhoa, $params_noikhoa);
$excute_noikhoa= new SQLServerResult($get_noikhoa);
$tam_noikhoa= $excute_noikhoa->get_as_array();
$responce_noikhoa = new stdClass;
$i_noikhoa=0;
foreach ($tam_noikhoa as $row) {//duyet toan bo mang tra ve
    $responce_noikhoa->rows[$i_noikhoa]['id']=$row["ID_Template"];
    $responce_noikhoa->rows[$i_noikhoa]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_noikhoa++; 
}  
echo json_encode($responce_noikhoa);//5
echo '|||';

$store_name_ngoaikhoa="{call GD2_KSK_Template_NgoaiKhoa()}";
$params_ngoaikhoa = array(); 
$get_ngoaikhoa=$data->query( $store_name_ngoaikhoa, $params_ngoaikhoa);
$excute_ngoaikhoa= new SQLServerResult($get_ngoaikhoa);
$tam_ngoaikhoa= $excute_ngoaikhoa->get_as_array();
$responce_ngoaikhoa = new stdClass;
$i_ngoaikhoa=0;
foreach ($tam_ngoaikhoa as $row) {//duyet toan bo mang tra ve
    $responce_ngoaikhoa->rows[$i_ngoaikhoa]['id']=$row["ID_Template"];
    $responce_ngoaikhoa->rows[$i_ngoaikhoa]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_ngoaikhoa++; 
}  
echo json_encode($responce_ngoaikhoa);//6
echo '|||';

$store_name_sanphukhoa="{call GD2_KSK_Template_SanPhuKhoa()}";
$params_sanphukhoa = array(); 
$get_sanphukhoa=$data->query( $store_name_sanphukhoa, $params_sanphukhoa);
$excute_sanphukhoa= new SQLServerResult($get_sanphukhoa);
$tam_sanphukhoa= $excute_sanphukhoa->get_as_array();
$responce_sanphukhoa = new stdClass;
$i_sanphukhoa=0;
foreach ($tam_sanphukhoa as $row) {//duyet toan bo mang tra ve
    $responce_sanphukhoa->rows[$i_sanphukhoa]['id']=$row["ID_Template"];
    $responce_sanphukhoa->rows[$i_sanphukhoa]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_sanphukhoa++; 
}  
echo json_encode($responce_sanphukhoa);//7
echo '|||';

$store_name_tuanhoan="{call GD2_KSK_Template_TuanHoan()}";
$params_tuanhoan = array(); 
$get_tuanhoan=$data->query( $store_name_tuanhoan, $params_tuanhoan);
$excute_tuanhoan= new SQLServerResult($get_tuanhoan);
$tam_tuanhoan= $excute_tuanhoan->get_as_array();
$responce_tuanhoan = new stdClass;
$i_tuanhoan=0;
foreach ($tam_tuanhoan as $row) {//duyet toan bo mang tra ve
    $responce_tuanhoan->rows[$i_tuanhoan]['id']=$row["ID_Template"];
    $responce_tuanhoan->rows[$i_tuanhoan]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
    $i_tuanhoan++; 
}  
echo json_encode($responce_tuanhoan);//8
echo '|||';

$store_name_hohap="{call GD2_KSK_Template_HoHap()}";
$params_hohap = array(); 
$get_hohap=$data->query( $store_name_hohap, $params_hohap);
$excute_hohap= new SQLServerResult($get_hohap);
$tam_hohap= $excute_hohap->get_as_array();
$responce_hohap = new stdClass;
$i_hohap=0;
foreach ($tam_hohap as $row) {//duyet toan bo mang tra ve
    $responce_hohap->rows[$i_hohap]['id']=$row["ID_Template"];
    $responce_hohap->rows[$i_hohap]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_++; 
}  
echo json_encode($responce_hohap);//9
echo '|||';

$store_name_tieuhoa="{call GD2_KSK_Template_TieuHoa()}";
$params_tieuhoa = array(); 
$get_tieuhoa=$data->query( $store_name_tieuhoa, $params_tieuhoa);
$excute_tieuhoa= new SQLServerResult($get_tieuhoa);
$tam_tieuhoa= $excute_tieuhoa->get_as_array();
$responce_tieuhoa = new stdClass;
$i_tieuhoa=0;
foreach ($tam_tieuhoa as $row) {//duyet toan bo mang tra ve
    $responce_tieuhoa->rows[$i_tieuhoa]['id']=$row["ID_Template"];
    $responce_tieuhoa->rows[$i_tieuhoa]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_tieuhoa++; 
}  
echo json_encode($responce_tieuhoa);//10
echo '|||';

$store_name_thantietnieu="{call GD2_KSK_Template_ThanTietNieuSinhDuc()}";
$params_thantietnieu = array(); 
$get_thantietnieu=$data->query( $store_name_thantietnieu, $params_thantietnieu);
$excute_thantietnieu= new SQLServerResult($get_thantietnieu);
$tam_thantietnieu= $excute_thantietnieu->get_as_array();
$responce_thantietnieu = new stdClass;
$i_thantietnieu=0;
foreach ($tam_thantietnieu as $row) {//duyet toan bo mang tra ve
    $responce_thantietnieu->rows[$i_thantietnieu]['id']=$row["ID_Template"];
    $responce_thantietnieu->rows[$i_thantietnieu]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_thantietnieu++; 
}  
echo json_encode($responce_thantietnieu);//11
echo '|||';

$store_name_thankinh="{call GD2_KSK_Template_ThanKinh()}";
$params_thankinh = array(); 
$get_thankinh=$data->query( $store_name_thankinh, $params_thankinh);
$excute_thankinh= new SQLServerResult($get_thankinh);
$tam_thankinh= $excute_thankinh->get_as_array();
$responce_thankinh = new stdClass;
$i_thankinh=0;
foreach ($tam_thankinh as $row) {//duyet toan bo mang tra ve
    $responce_thankinh->rows[$i_thankinh]['id']=$row["ID_Template"];
    $responce_thankinh->rows[$i_thankinh]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_thankinh++; 
}  
echo json_encode($responce_thankinh);//12
echo '|||';

$store_name_tamthan="{call GD2_KSK_Template_TamThan()}";
$params_tamthan = array(); 
$get_tamthan=$data->query( $store_name_tamthan, $params_tamthan);
$excute_tamthan= new SQLServerResult($get_tamthan);
$tam_tamthan= $excute_tamthan->get_as_array();
$responce_tamthan = new stdClass;
$i_tamthan=0;
foreach ($tam_tamthan as $row) {//duyet toan bo mang tra ve
    $responce_tamthan->rows[$i_tamthan]['id']=$row["ID_Template"];
    $responce_tamthan->rows[$i_tamthan]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_tamthan++; 
}  
echo json_encode($responce_tamthan);//13
echo '|||';

$store_name_hevandong="{call GD2_KSK_Template_CoXuongKhop()}";
$params_hevandong = array(); 
$get_hevandong=$data->query( $store_name_hevandong, $params_hevandong);
$excute_hevandong= new SQLServerResult($get_hevandong);
$tam_hevandong= $excute_hevandong->get_as_array();
$responce_hevandong = new stdClass;
$i_hevandong=0;
foreach ($tam_hevandong as $row) {//duyet toan bo mang tra ve
    $responce_hevandong->rows[$i_hevandong]['id']=$row["ID_Template"];
    $responce_hevandong->rows[$i_hevandong]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_hevandong++; 
}  
echo json_encode($responce_hevandong);//14
echo '|||';

$store_name_noitiet="{call GD2_KSK_Template_NoiTiet()}";
$params_noitiet = array(); 
$get_noitiet=$data->query( $store_name_noitiet, $params_noitiet);
$excute_noitiet= new SQLServerResult($get_noitiet);
$tam_noitiet= $excute_noitiet->get_as_array();
$responce_noitiet = new stdClass;
$i_noitiet=0;
foreach ($tam_noitiet as $row) {//duyet toan bo mang tra ve
    $responce_noitiet->rows[$i_noitiet]['id']=$row["ID_Template"];
    $responce_noitiet->rows[$i_noitiet]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_noitiet++; 
}  
echo json_encode($responce_noitiet);//15
echo '|||';

$store_name_noitiet="{call GD2_KSK_Template_KetQuaCLS()}";
$params_noitiet = array(); 
$get_noitiet=$data->query( $store_name_noitiet, $params_noitiet);
$excute_noitiet= new SQLServerResult($get_noitiet);
$tam_noitiet= $excute_noitiet->get_as_array();
$responce_noitiet = new stdClass;
$i_noitiet=0;
foreach ($tam_noitiet as $row) {//duyet toan bo mang tra ve
    $responce_noitiet->rows[$i_noitiet]['id']=$row["ID_Template"];
    $responce_noitiet->rows[$i_noitiet]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_noitiet++; 
}  
echo json_encode($responce_noitiet);//16
echo '|||';
$store_name_noitiet="{call GD2_KSK_Template_KetQuaXetNghiem()}";
$params_noitiet = array(); 
$get_noitiet=$data->query( $store_name_noitiet, $params_noitiet);
$excute_noitiet= new SQLServerResult($get_noitiet);
$tam_noitiet= $excute_noitiet->get_as_array();
$responce_noitiet = new stdClass;
$i_noitiet=0;
foreach ($tam_noitiet as $row) {//duyet toan bo mang tra ve
    $responce_noitiet->rows[$i_noitiet]['id']=$row["ID_Template"];
    $responce_noitiet->rows[$i_noitiet]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_noitiet++; 
}  
echo json_encode($responce_noitiet);//17
echo '|||';
$store_name_noitiet="{call GD2_KSK_Template_KetQuaSieuAm()}";
$params_noitiet = array(); 
$get_noitiet=$data->query( $store_name_noitiet, $params_noitiet);
$excute_noitiet= new SQLServerResult($get_noitiet);
$tam_noitiet= $excute_noitiet->get_as_array();
$responce_noitiet = new stdClass;
$i_noitiet=0;
foreach ($tam_noitiet as $row) {//duyet toan bo mang tra ve
    $responce_noitiet->rows[$i_noitiet]['id']=$row["ID_Template"];
    $responce_noitiet->rows[$i_noitiet]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_noitiet++; 
}  
echo json_encode($responce_noitiet);//18
echo '|||';
$store_name_noitiet="{call GD2_KSK_Template_KetQuaXQuang()}";
$params_noitiet = array(); 
$get_noitiet=$data->query( $store_name_noitiet, $params_noitiet);
$excute_noitiet= new SQLServerResult($get_noitiet);
$tam_noitiet= $excute_noitiet->get_as_array();
$responce_noitiet = new stdClass;
$i_noitiet=0;
foreach ($tam_noitiet as $row) {//duyet toan bo mang tra ve
    $responce_noitiet->rows[$i_noitiet]['id']=$row["ID_Template"];
    $responce_noitiet->rows[$i_noitiet]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i_noitiet++; 
}  
echo json_encode($responce_noitiet);//19
echo '|||';
?>