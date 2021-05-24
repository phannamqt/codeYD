<?php
switch ($_GET["oper"]) {
    
    case "hoantat":
        hoantat("GD2_duyetketquaxetnghiem_upd");
        break;
    case "trangthai_hoantat":
    	trangthai_hoantat("GD2_Update_TrangThai_byID_Kham");
    	break;
     case "updateGioHenGan"   :
    upGioHen();

     case "duyet"   :
   // upGioHen();
     break;
	 
	 //up nguoi nhap mau
     case "danhapmauxn":
        danhapmauxn("GD2_UpdateNguoilaymau_XetNghiemKSKCT");
        break;
	//up nguoi nhap mau
     case "bonhapmauxn":
        bonhapmauxn("GD2_UpdateBoNguoilaymau_XetNghiemKSKCT");
        break;
		
     
}	
function duyet()
{
    
}
function upGioHen()
{

         $data= new SQLServer;//tao lop ket noi SQL
      $store_name="{call GD2_UpGioHenSample (?,?,?)}";
       $HG='';
       $HX='';
     if (isset($_GET['NgayGioHenGan']))
     {
        $HG=convert_date($_GET['NgayGioHenGan']);
     }
     else
     {
        $HG=null;
     }
      if (isset($_GET['NgayGioHenXa']))
     {
        $HX=convert_date($_GET['NgayGioHenXa']);
     }
     else
     {
            $HX=null;
     }
     $params=array($_GET['SID'],$HG,$HX);
      $get=$data->query( $store_name, $params);
} 		 

function hoantat($store_name){

    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_kqxn"]),($value["daduyetketqua"]),($value["nguoiduyet"]));
         
            $store_name1="{call GD2_duyetketquaxetnghiem_upd (?,?,?)}";
          
            $get2=$data->query( $store_name1, $params1);
      }
    
}
function trangthai_hoantat($store_name){

    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_kham"]),($value["trangthai"]));
          
            $store_name1="{call GD2_Update_TrangThai_byID_Kham_XetNghiem (?,?)}";
           
            $get2=$data->query( $store_name1, $params1);
      }
    
}
function danhapmauxn($store_name){

    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_luotkham"]),($value["id_sample"]),$_SESSION["user"]["id_user"] ,$_SERVER['REMOTE_ADDR']);
         
            $store_name1="{call GD2_UpdateNguoilaymau_XetNghiemKSKCT (?,?,?,?)}";
          
            $get2=$data->query( $store_name1, $params1);
      }
    
}
function bonhapmauxn($store_name){

    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_luotkham"]),($value["id_sample"]),$_SESSION["user"]["id_user"] ,$_SERVER['REMOTE_ADDR']);
         
            $store_name1="{call GD2_UpdateBoNguoilaymau_XetNghiemKSKCT (?,?,?,?)}";
          
            $get2=$data->query( $store_name1, $params1);
      }
    
}
?>

