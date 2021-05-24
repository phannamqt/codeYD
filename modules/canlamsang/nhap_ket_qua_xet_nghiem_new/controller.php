<?php
 
switch ($_GET["oper"]) {
    case "xoaketqua":
        xoaketqua("GD2_xoaketquaxetnghiem");
        break;
    case "luu":
    	luu("GD2_ketquaxetnghiem_insert");
    	break;
    case "dathuchien":
      dathuchien("GD2_XetNghiem_dathuchien");
      break;
    case "updatecannamnu":
      updatecannamnu("GD2_Update_Cannamnu_XetNghiem");
      break;
	case "filedoc":
      filedoc("GD2_Update_filedoc");
      break;
    case "ketqua":
      ketqua("GD2_Update_KetQuaXN");
      break;
    case "sangloctruocsinh":
      sangloctruocsinh("GD2_SangLocTruocSinh_Insert");
      break;
    case "luu_kqir":
      luu_kqir("GD2_XetNghiem_Luu_KetQuaInRieng");
      break;
}	 		 

function xoaketqua(){	
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_xoaketquaxetnghiem (?,?)}";//tao bien khai bao store
    $params = array($_GET['id_kham'],$_SESSION["user"]["id_user"]);
       // print_r($params) ;
	$data->query( $store_name, $params);//Goi store	
  $store_name2="{call GD2_xoaketquaxetnghiem_kham (?,?)}";//tao bien khai bao store
    $params2 = array($_GET['id_kham'],$_SESSION["user"]["id_user"]);
       // print_r($params) ;
  $data->query( $store_name2, $params2);//Goi store 


}
function filedoc(){	
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Update_filedoc(?,?)}";//tao bien khai bao store
    $params = array($_POST['id_kham'],$_POST['search_string']);
      // print_r($_POST) ;
	$data->query( $store_name, $params);//Goi store	

}
function ketqua(){	
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Update_KetQuaXN(?,?)}";//tao bien khai bao store
    $params = array($_POST['id_kqxn'],$_POST['ketqua']);
       // print_r($params) ;
	$data->query( $store_name, $params);//Goi store	

}
function luu(){	
  //echo "kha";
	$data= new SQLServer;
  print_r($_POST);
    if(isset($_POST['data'])){  
       foreach ($_POST['data'] as $key => $value) {
            //unset($params1);
           //print_r($_POST['data']);
        if(preg_match("/\,/",$value["ketqua"])){
          $value["ketqua"]= str_ireplace(",",".",$value["ketqua"]);     
         }
            $params1=array(($value["ID_Kham"]),($value["ID_BenhNhan"]),($value["ID_XetNghiem"]),($value["ketqua"]),0,$_SESSION["user"]["id_user"]);
            //print_r($params1);
            $store_name1="{call [GD2_ketquaxetnghiem_insert_new] (?,?,?,?,?,?)}";
            //print_r($params1);
           $get2=$data->query( $store_name1, $params1);
          //print_r($_POST['data']);
      }}

}
function dathuchien($store_name){ 
    
    
    
  $chuoi="(";
  $i=0;
  $check1="";

 
  foreach($_POST as $key => $value) {   
     //    echo $key.": ".urldecode($value).";"."<br>";
    if($key!="oper"){
      $bien[]=urldecode($value) ;         
      $i++;     
      if(count($_POST)==$i){
      $bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
        $chuoi.="?";      
      }elseif(count($_POST)>$i){
        $chuoi.="?,";  
      }   
    }   
  }
   
  $chuoi.=",?)";
      

        $chuoi2='(?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        
             $bien2=  array(($_POST["id_kham"]),($_POST["id_nguoithuchien"]),($_POST["giothuchien"]),"DaThucHien");
       
  //print_r($_POST);
  //print_r($chuoi2);  
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name="{call $store_name $chuoi2}";//tao bien khai bao store
  $params = $bien2;//tao param cho store 
  $get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store 
  echo $get_danh_muc_phong_ban;
  
}
function updatecannamnu(){ 
         $data= new SQLServer;
         
        if(isset($_POST['data'])){  
           foreach ($_POST['data'] as $key => $value) {
                if(trim($value["CanNam1"]," ")==""){    
            $value["CanNam1"]=null;
        }else{    
                $value["CanNam1"]=$value["CanNam1"];
        }
        if(trim($value["CanNam2"]," ")==""){    
            $value["CanNam2"]=null;
        }else{    
                $value["CanNam2"]=$value["CanNam2"];
        }  if(trim($value["CanNam3"]," ")==""){    
            $value["CanNam3"]=null;
        }else{    
                $value["CanNam3"]=$value["CanNam3"];
        }
        if(trim($value["CanNam4"]," ")==""){    
            $value["CanNam4"]=null;
        }else{    
                $value["CanNam4"]=$value["CanNam4"];
        }  if(trim($value["CanNu1"]," ")==""){    
            $value["CanNu1"]=null;
        }else{    
                $value["CanNu1"]=$value["CanNu1"];
        }
        if(trim($value["CanNu2"]," ")==""){    
            $value["CanNu2"]=null;
        }else{    
                $value["CanNu2"]=$value["CanNu2"];
        }  if(trim($value["CanNu3"]," ")==""){    
            $value["CanNu3"]=null;
        }else{    
                $value["CanNu3"]=$value["CanNu3"];
        }
        if(trim($value["CanNu4"]," ")==""){    
            $value["CanNu4"]=null;
        }else{    
                $value["CanNu4"]=$value["CanNu4"];
        }
                $params1=array(($value["CanNam1"]),($value["CanNam2"]),($value["CanNam3"]),($value["CanNam4"]),($value["CanNu1"]),($value["CanNu2"]),($value["CanNu3"]),($value["CanNu4"]),($value["Red"]),($value["Blue"]),($value["Yellow"]),($value["GiaTriBinhThuong1"]),($value["ID_XetNghiem"]),$_SESSION['user']['id_user'] );
                //print_r($params1);
                $store_name1="{call GD2_Update_Cannamnu_XetNghiem (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
                //print_r($params1);
               $get2=$data->query( $store_name1, $params1);
               //print_r($get2);
          }}
}
function sangloctruocsinh(){ 
  
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name2="{call GD2_SangLocTruocSinh_DeleteAllByID_LuotKham(?)}";//tao bien khai bao store
    $params2 = array($_POST['id_luotkham']);
       // print_r($params) ;
  $data->query( $store_name2, $params2);//Goi store 
  if(trim($_POST['ngaykinhcuoi2']," ")==""){
    $_POST['ngaykinhcuoi2']=null;
  }
  else{
    $_POST['ngaykinhcuoi2']=convert_date(trim($_POST['ngaykinhcuoi2']," "));
  }
  if(!isset($_POST['thutinh'])){    
            $thutinh=0;
        }else{    
            $thutinh=$_POST['thutinh'];
         }
        if(!isset($_POST['tieuduong'])){    
            $tieuduong=0;
        }else{    
            $tieuduong=$_POST['tieuduong'];
         }
        if(!isset($_POST['hutthuoc'])){    
            $hutthuoc=0;
        }else{    
            $hutthuoc=$_POST['hutthuoc'];
         }
        if(!isset($_POST['doubletest'])){    
            $doubletest=0;
        }else{    
                $doubletest=$_POST['doubletest'];
        }
        if(!isset($_POST['tripletest'])){    
            $tripletest=0;
        }else{    
                $tripletest=$_POST['tripletest'];
        }
       if(trim($_POST['cannang']," ")==""){    
            $cannang=null;
        }else{    
                $cannang=trim($_POST['cannang']," ");
        }
        if(trim($_POST['chieudaidaumong1']," ")==""){    
            $chieudaidaumong1=null;
        }else{    
                $chieudaidaumong1=trim($_POST['chieudaidaumong1']," ");
        }
        if(trim($_POST['domodagay1']," ")==""){    
            $domodagay1=null;
        }else{    
                $domodagay1=trim($_POST['domodagay1']," ");
        }
        if(trim($_POST['duongkinh1']," ")==""){    
            $duongkinh1=null;
        }else{    
                $duongkinh1=trim($_POST['duongkinh1']," ");
        }
        if(trim($_POST['chieudaidaumong2']," ")==""){    
            $chieudaidaumong2=null;
            
        }else{    
                $chieudaidaumong2=trim($_POST['chieudaidaumong2']," ");
                
        }
        if(trim($_POST['domodagay2']," ")==""){    
            $domodagay2=null;
        }else{    
                $domodagay2=trim($_POST['domodagay2']," ");
        }
        if(trim($_POST['duongkinh2']," ")==""){    
            $duongkinh2=null;
        }else{    
                $duongkinh2=trim($_POST['duongkinh2']," ");
        }if(trim($_POST['chieudaidaumong3']," ")==""){    
            $chieudaidaumong3=null;
        }else{    
                $chieudaidaumong3=trim($_POST['chieudaidaumong3']," ");
        }
        if(trim($_POST['domodagay3']," ")==""){    
            $domodagay3=null;
        }else{    
                $domodagay3=trim($_POST['domodagay3']," ");
        }
        if(trim($_POST['duongkinh3']," ")==""){    
            $duongkinh3=null;
        }else{    
                $duongkinh3=trim($_POST['duongkinh3']," ");
        }

  $store_name="{call GD2_SangLocTruocSinh_Insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
    $params = array(
      trim($_POST['id_luotkham']," "),
      $cannang,
      trim($_POST['para']," "),
       $thutinh,
       $tieuduong,
       $hutthuoc,
      $_POST['ngaykinhcuoi2'],
      trim($_POST['ngaysieuam2']," "),
      trim($_POST['tuan']," "),
      trim($_POST['ngay']," "),
      trim($_POST['soluongthai']," "),
      $chieudaidaumong1,
      $domodagay1,
      $duongkinh1,
      trim($_POST['khac1']," "),
      $doubletest,
       $tripletest,
      trim($_POST['chandoan1']," "),
      trim($_POST['ngaygiochandoan']," "),
      $chieudaidaumong2,
      $domodagay2,
      $duongkinh2,
      trim($_POST['khac2']," "),
      $chieudaidaumong3,
      $domodagay3,
      $duongkinh3,
      trim($_POST['khac3']," "),
      
       );
      // print_r($_POST) ;
   //print_r($cannang);
  $data->query( $store_name, $params);//Goi store 
  print_r($params);
}
function luu_kqir(){ 
  
  $data= new SQLServer;//tao lop ket noi SQL
   
            $params1=array($_GET["id_kham"],$_POST["ketqua"],$_SESSION["user"]["id_user"]);
          
            $store_name1="{call GD2_XetNghiem_Luu_KetQuaInRieng (?,?,?)}";
         
           $get2=$data->query( $store_name1, $params1);
       


}
?>

