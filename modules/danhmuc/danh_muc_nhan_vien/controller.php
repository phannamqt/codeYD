<?php
	$_POST['mabenhnhan']=	trim($_POST['mabenhnhan']," ");
	$_POST['ho']=	trim($_POST['ho']," ");
	$_POST['ngaysinh']=	trim($_POST['ngaysinh']," ");
	$_POST['cmnd']=	trim($_POST['cmnd']," ");
	$_POST['NoiCapCMND']=	trim($_POST['NoiCapCMND']," ");
	$_POST['hochieu']=	trim($_POST['hochieu']," ");
	$_POST['Nickname']=	trim($_POST['Nickname']," ");
	$_POST['ten']=	trim($_POST['ten']," ");
	$_POST['NgayCapCMND']=	trim($_POST['NgayCapCMND']," ");
	$_POST['quoctich']=	trim($_POST['quoctich']," ");
	$_POST['sobaohiem']=	trim($_POST['sobaohiem']," ");
	$_POST['diachi']=	trim($_POST['diachi']," ");
	$_POST['mobile']=	trim($_POST['mobile']," ");
	$_POST['dienthoainha']=	trim($_POST['dienthoainha']," ");
	$_POST['email']=	trim($_POST['email']," ");
	$_POST['phongban']=	trim($_POST['phongban']," ");
	$_POST['chucdanh']=	trim($_POST['chucdanh']," ");
	$_POST['trinhdo']=	trim($_POST['trinhdo']," ");
	$_POST['Id_chuyenkhoa']=	trim($_POST['Id_chuyenkhoa']," ");
	$_POST['chucvu']=	trim($_POST['chucvu']," ");
	$_POST['ghichu']=	trim($_POST['ghichu']," ");
	$_POST['Id_TinhTrangHonNhan']=	trim($_POST['Id_TinhTrangHonNhan']," ");
	$_POST['masothue']=	trim($_POST['masothue']," ");
	$_POST['ngayvaolam']=	trim($_POST['ngayvaolam']," ");
	$_POST['Kinhnghiem']=	trim($_POST['Kinhnghiem']," ");
	$_POST['username']=	trim($_POST['username']," ");
	$_POST['Id_GoiBenh']= null;
	$_POST['SoChungChiHanhNghe']=	trim($_POST['SoChungChiHanhNghe']," ");





		
		$check1='';
        $check2='';
        if(!isset($_POST['sex'])){    
            $_POST['sex']=0;
        }else{    
            $_POST['sex']=$_POST['sex'];
         }
        if(!isset($_POST['nghiviec'])){    
            $_POST['nghiviec']=0;
        }else{    
            $_POST['nghiviec']=$_POST['nghiviec'];
         }
       
        if(!isset($_POST['labacsi'])){    
            $_POST['labacsi']=0;
        }else{    
            $_POST['labacsi']=$_POST['labacsi'];
        }
        if(!isset($_POST['congtacvien'])){    
            $_POST['congtacvien']=0;
        }else{    
               $_POST['congtacvien']=$_POST['congtacvien'];
        }       
        if(!isset($_POST['disable'])){    
            $_POST['disable']=0;
        }else{    
               $_POST['disable']=$_POST['disable'];
        }
		
		   
		if(!isset($_POST['ChungChiHanhNghe'])){   
	
            $_POST['ChungChiHanhNghe']=0;
        }else{    
            $_POST['ChungChiHanhNghe']=$_POST['ChungChiHanhNghe'];
        }
		
		if(!isset($_POST['CoTinhLuongKeToan'])){    
            $_POST['CoTinhLuongKeToan']=0;
        }else{    
            $_POST['CoTinhLuongKeToan']=$_POST['CoTinhLuongKeToan'];
        }
		
		$_POST['Kinhnghiem']=trim($_POST['Kinhnghiem']," ");
		if( $_POST['Kinhnghiem']==''){
			$_POST['Kinhnghiem']=null;
		}else{
			$_POST['Kinhnghiem']=implode("/",array_reverse(explode("/", $_POST['Kinhnghiem'])));
		}
		$_POST['ngaysinh']=trim($_POST['ngaysinh']," ");			
		if( $_POST['ngaysinh']==''){
			$_POST['ngaysinh']=null;
		}else{
			$_POST['ngaysinh']=implode("/",array_reverse(explode("/", $_POST['ngaysinh'])));
		}
		$_POST['NgayCapCMND']=trim($_POST['NgayCapCMND']," ");			
		if( $_POST['NgayCapCMND']==''){
			$_POST['NgayCapCMND']=null;
		}else{
			$_POST['NgayCapCMND']=implode("/",array_reverse(explode("/", $_POST['NgayCapCMND'])));
		}
		if( $_POST['ngayvaolam']==''){
			$_POST['ngayvaolam']=null;
		}else{
			$_POST['ngayvaolam']=implode("/",array_reverse(explode("/", $_POST['ngayvaolam'])));
		}
		
		/*if( $_POST['ngayvaolam']==''){
			$_POST['ngayvaolam']=null;
		}else{
			$_POST['ngayvaolam']=implode("/",array_reverse(explode("/", $_POST['ngayvaolam'])));
		}*/
		
		if( $_POST['NgayNghiViec']==''){
			$_POST['NgayNghiViec']=null;
		}else{
			$_POST['NgayNghiViec']=implode("/",array_reverse(explode("/", $_POST['NgayNghiViec'])));
		}
		
		
		if( $_POST['Id_chuyenkhoa']==''){
			$_POST['Id_chuyenkhoa']=null;
		};
		if( $_POST['Id_TinhTrangHonNhan']==''){
			$_POST['Id_TinhTrangHonNhan']=null;
		};
		
		if( $_POST['NoiCapCMND']==''){
			$_POST['NoiCapCMND']=null;
		};
		
		if( $_POST['mabenhnhan']==''){
			$_POST['mabenhnhan']=null;
		};		
		if( $_POST['Id_GoiBenh']==''){
			$_POST['Id_GoiBenh']=null;
		};	
switch ($_GET["oper"]) {
    case "add":
        add("GD2_NhanVien_Insert");
        break;
    case "edit":
        edit("GD2_NhanVien_Update");
        break;
}	 		 



function add($store_name){ 
        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_Insert_new(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,? ,?,?,?,?)}";//tao bien khai bao store
        $params = array(	
				$_POST['mabenhnhan'], 
				$_POST['ho'], 
				$_POST['ngaysinh'], 
				$_POST['cmnd'], 
				$_POST['NoiCapCMND'], 
				$_POST['hochieu'], 
				$_POST['Nickname'], 
				$_POST['ten'], 
				$_POST['NgayCapCMND'], 
				$_POST['quoctich'], 
				$_POST['sobaohiem'], 
				$_POST['diachi'], 
				$_POST['mobile'], 
				$_POST['dienthoainha'], 
				$_POST['email'], 
				$_POST['phongban'], 
				$_POST['chucdanh'], 
				$_POST['trinhdo'], 
				$_POST['Id_chuyenkhoa'], 
				$_POST['chucvu'], 
				$_POST['ghichu'], 
				$_POST['Id_TinhTrangHonNhan'], 
				$_POST['masothue'], 
				$_POST['ngayvaolam'], 
				$_POST['Kinhnghiem'],
				$_POST['username'], 
				$_POST['CoTinhLuongKeToan'], 
				$_POST['nghiviec'], 
				$_POST['labacsi'], 
				$_POST['congtacvien'], 
				$_POST['disable'], 
				$_POST['sex'],
				$_POST['ChungChiHanhNghe'],
				$_POST['NgayNghiViec'],
				$_SERVER['REMOTE_ADDR'],
				$_SESSION['user']['id_user'],
				$_POST['Id_GoiBenh'],
				$_POST['SoChungChiHanhNghe']
			 //	array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)            
        );
		print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
	
}
function edit($store_name){		 	
        $data= new SQLServer;
        $store_name="{call GD2_NhanVien_Update_New(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
        $params = array(
           		$_POST['mabenhnhan'],
				$_POST['ho'],
				$_POST['ngaysinh'],
				$_POST['cmnd'],
				$_POST['NoiCapCMND'],
				$_POST['hochieu'],
				$_POST['Nickname'],
				$_POST['ten'],
				$_POST['NgayCapCMND'],
				$_POST['quoctich'],
				$_POST['sobaohiem'],
				$_POST['diachi'],
				$_POST['mobile'],
				$_POST['dienthoainha'],
				$_POST['email'],
				$_POST['phongban'],
				$_POST['chucdanh'],
				$_POST['trinhdo'],
				$_POST['Id_chuyenkhoa'],
				$_POST['chucvu'],
				$_POST['ghichu'],
				$_POST['Id_TinhTrangHonNhan'],
				$_POST['masothue'],
				$_POST['ngayvaolam'],
				$_POST['Kinhnghiem'],
				$_POST['username'],
				$_POST['CoTinhLuongKeToan'],
				$_POST['nghiviec'],
				$_POST['labacsi'],
				$_POST['congtacvien'],
				$_POST['disable'],
				$_POST['sex'],
				$_POST['ChungChiHanhNghe'],
				$_POST['NgayNghiViec'],
				$_SERVER['REMOTE_ADDR'],
				$_SESSION['user']['id_user'],			 
				trim($_GET['id']," "), 
				$_POST['Id_GoiBenh'],
				$_POST['SoChungChiHanhNghe']
        );
		print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
        
      
}

?>

