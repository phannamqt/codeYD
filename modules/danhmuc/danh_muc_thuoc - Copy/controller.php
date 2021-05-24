<?php 
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_Thuoc_Add");
        
        break;
    case "edit":
        edit("Gd2_Thuoc_Upd");
        break;
    case "del":
        del("Gd2_Thuoc_Delete");
        break;
}

function add($store_name){
        //print_r($_POST);
        $check1='';
        if(!isset($_POST['lathuoc'])){    
            $lathuoc=0;
        }else{    
            $lathuoc=$_POST['lathuoc'];
         }
        if(!isset($_POST['BHYTNoiTruOrNgTru'])){    
            $BHYTNoiTruOrNgTru=0;
        }else{    
            $BHYTNoiTruOrNgTru=$_POST['BHYTNoiTruOrNgTru'];
         }
        if(!isset($_POST['ThuocBHYT'])){    
            $ThuocBHYT=0;
        }else{    
                $ThuocBHYT=$_POST['ThuocBHYT'];
        }
        if(!isset($_POST['IsHide4GPP'])){    
            $IsHide4GPP=0;
        }else{    
                $IsHide4GPP=$_POST['IsHide4GPP'];
        }
        if(!isset($_POST['active'])){    
            $active=0;
        }else{    
                $active=$_POST['active'];
        }
         if( trim($_POST['hesodieuchinhgiaban']," ")==""){    
           $_POST['hesodieuchinhgiaban']=null;
        }else{    
                $_POST['hesodieuchinhgiaban']=trim($_POST['hesodieuchinhgiaban']," ");
        }
      //  if( trim($_POST['hesodieuchinhgiaban_hoadon']," ")==""){    
       //     $_POST['hesodieuchinhgiaban_hoadon']=null;
       // }else{    
        //        $_POST['hesodieuchinhgiaban_hoadon']=trim($_POST['hesodieuchinhgiaban_hoadon']," ");
      //  }

      //  if( trim($_POST['dongia_hoadon']," ")==""){    
       //            $_POST['dongia_hoadon']=null;
      //  }else{    
      //          $_POST['dongia_hoadon']=trim($_POST['dongia_hoadon']," ");
      //  }
        if( trim($_POST['ID_DuongDung']," ")=="null"){    
                   $_POST['ID_DuongDung']="";
        }else{    
                $_POST['ID_DuongDung']=trim($_POST['ID_DuongDung']," ");
        }
        if( trim($_POST['tonkhotoithieu']," ")==""){    
                   $_POST['tonkhotoithieu']=null;
        }else{    
                $_POST['tonkhotoithieu']=trim($_POST['tonkhotoithieu']," ");
        }
        if( trim($_POST['phantramthue']," ")==""){    
                   $_POST['phantramthue']=null;
        }else{    
                $_POST['phantramthue']=trim($_POST['phantramthue']," ");
        }
        if( trim($_POST['ID_NuocSanXuat']," ")==""){    
                   $_POST['ID_NuocSanXuat']=null;
        }else{    
                $_POST['ID_NuocSanXuat']=trim($_POST['ID_NuocSanXuat']," ");
        }
        if( trim($_POST['ID_NhomBenh']," ")==""){    
                   $_POST['ID_NhomBenh']=null;
        }else{    
                $_POST['ID_NhomBenh']=trim($_POST['ID_NhomBenh']," ");
        }
        if( trim($_POST['ID_HangSanXuat']," ")==""){    
                   $_POST['ID_HangSanXuat']=null;
        }else{    
                $_POST['ID_HangSanXuat']=trim($_POST['ID_HangSanXuat']," ");
        }
        if( trim($_POST['hamluong']," ")==""){    
                   $_POST['hamluong']=null;
        }else{    
                $_POST['hamluong']=trim($_POST['hamluong']," ");
        }
		if( trim($_POST['dongia']," ")==""){    
                   $_POST['dongia']=null;
        }else{    
                $_POST['dongia']=trim($_POST['dongia']," ");
        }
		if( trim($_POST['ID_DonViTinh']," ")==""){    
                   $_POST['ID_DonViTinh']=null;
        }else{    
                $_POST['ID_DonViTinh']=trim($_POST['ID_DonViTinh']," ");
        }
		if( trim($_POST['ID_NhomThuoc']," ")==""){    
                   $_POST['ID_NhomThuoc']=null;
        }else{    
                $_POST['ID_NhomThuoc']=trim($_POST['ID_NhomThuoc']," ");
        }
		
		if( trim($_POST['ID_NhomBHYT']," ")==""){    
                   $_POST['ID_NhomBHYT']=null;
        }else{    
                $_POST['ID_NhomBHYT']=trim($_POST['ID_NhomBHYT']," ");
        }
		
		if( trim($_POST['DonGia_BHYT']," ")==""){    
                   $_POST['DonGia_BHYT']=null;
        }else{    
                $_POST['DonGia_BHYT']=trim($_POST['DonGia_BHYT']," ");
        }
		
		if( trim($_POST['PhanHangBV']," ")==""){    
                   $_POST['PhanHangBV']=null;
        }else{    
                $_POST['PhanHangBV']=trim($_POST['PhanHangBV']," ");
        }
		
		if(!isset($_POST['HideVienPhi'])){    
            $HideVienPhi=0;
        }else{    
            $HideVienPhi=$_POST['HideVienPhi'];
        }
		
		if(!isset($_POST['HideBHYT'])){    
            $HideBHYT=0;
        }else{    
            $HideBHYT=$_POST['HideBHYT'];
        }
		
		if(!isset($_POST['HideBHYT_traituyen'])){    
            $HideBHYT_traituyen=0;
        }else{    
            $HideBHYT_traituyen=$_POST['HideBHYT_traituyen'];
        }
		
		
		if(!isset($_POST['HideBHYT_dungtuyen'])){    
            $HideBHYT_dungtuyen=0;
        }else{    
            $HideBHYT_dungtuyen=$_POST['HideBHYT_dungtuyen'];
        }
		
		if( trim($_POST['SignNumber']," ")==""){    
                   $_POST['SignNumber']=null;
        }else{    
                $_POST['SignNumber']=trim($_POST['SignNumber']," ");
        }
		
		if( trim($_POST['MaBHYT']," ")==""){    
                   $_POST['MaBHYT']=null;
        }else{    
                $_POST['MaBHYT']=trim($_POST['MaBHYT']," ");
        }
		
		
		if( trim($_POST['CoSoTuTruc']," ")==""){    
                   $_POST['CoSoTuTruc']=null;
        }else{    
                $_POST['CoSoTuTruc']=trim($_POST['CoSoTuTruc']," ");
        }
		if( trim($_POST['BaoDongDo']," ")==""){    
                   $_POST['BaoDongDo']=null;
        }else{    
                $_POST['BaoDongDo']=trim($_POST['BaoDongDo']," ");
        }
		if( trim($_POST['BaoDongVang']," ")==""){    
                   $_POST['BaoDongVang']=null;
        }else{    
                $_POST['BaoDongVang']=trim($_POST['BaoDongVang']," ");
        }
		
		if( trim($_POST['MaSoTheoDMBHYT']," ")==""){    
                   $_POST['MaSoTheoDMBHYT']=null;
        }else{    
                $_POST['MaSoTheoDMBHYT']=trim($_POST['MaSoTheoDMBHYT']," ");
        }
		
		if( trim($_POST['Id_NhomThuoc_Toa']," ")==""){    
                   $_POST['Id_NhomThuoc_Toa']=null;
        }else{    
                $_POST['Id_NhomThuoc_Toa']=trim($_POST['Id_NhomThuoc_Toa']," ");
        }
		
		if( trim($_POST['ID_NhomBHYT']," ")==""){    
                   $_POST['ID_NhomBHYT']=null;
        }else{    
                $_POST['ID_NhomBHYT']=trim($_POST['ID_NhomBHYT']," ");
        }
		
		
	
		
		if( trim($_POST['HamLuong_BHYT']," ")==""){    
                   $_POST['HamLuong_BHYT']=null;
        }else{    
                $_POST['HamLuong_BHYT']=trim($_POST['HamLuong_BHYT']," ");
        }
		
		if( trim($_POST['MaThuoc_BV']," ")==""){    
                   $_POST['MaThuoc_BV']=null;
        }else{    
                $_POST['MaThuoc_BV']=trim($_POST['MaThuoc_BV']," ");
        }
		$_POST['MaThuoc_BHYT']='';
		if( trim($_POST['MaThuoc_BHYT']," ")==""){    
                   $_POST['MaThuoc_BHYT']=null;
        }else{    
                $_POST['MaThuoc_BHYT']=trim($_POST['MaThuoc_BHYT']," ");
        }
		
		if( trim($_POST['HoatChat_BHYT']," ")==""){    
                   $_POST['HoatChat_BHYT']=null;
        }else{    
                $_POST['HoatChat_BHYT']=trim($_POST['HoatChat_BHYT']," ");
        }
		if( trim($_POST['MaDuongDung_BHYT']," ")==""){    
                   $_POST['MaDuongDung_BHYT']=null;
        }else{    
                $_POST['MaDuongDung_BHYT']=trim($_POST['MaDuongDung_BHYT']," ");
        }
		if( trim($_POST['DuongDung_BHYT']," ")==""){    
                   $_POST['DuongDung_BHYT']=null;
        }else{    
                $_POST['DuongDung_BHYT']=trim($_POST['DuongDung_BHYT']," ");
        }
		if( trim($_POST['DongGoi_BHYT']," ")==""){    
                   $_POST['DongGoi_BHYT']=null;
        }else{    
                $_POST['DongGoi_BHYT']=trim($_POST['DongGoi_BHYT']," ");
        }
		if( trim($_POST['Gia_BHYT_Thanhtoan']," ")==""){    
                   $_POST['Gia_BHYT_Thanhtoan']=null;
        }else{    
                $_POST['Gia_BHYT_Thanhtoan']=trim($_POST['Gia_BHYT_Thanhtoan']," ");
        }
		
		if( trim($_POST['Gia_BHYT_Thanhtoan']," ")==""){    
                   $_POST['Gia_BHYT_Thanhtoan']=null;
        }else{    
                $_POST['Gia_BHYT_Thanhtoan']=trim($_POST['Gia_BHYT_Thanhtoan']," ");
        }
		if( trim($_POST['NhietDo_DoAm']," ")==""){    
                   $_POST['NhietDo_DoAm']=null;
        }else{    
                $_POST['NhietDo_DoAm']=trim($_POST['NhietDo_DoAm']," ");
        }
		/*if( trim($_POST['Id_NhomphanLoaiThuoc']," ")==""){    
                   $_POST['Id_NhomphanLoaiThuoc']=null;
        }else{    
                $_POST['Id_NhomphanLoaiThuoc']=trim($_POST['Id_NhomphanLoaiThuoc']," ");
        }*/
		
        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call Gd2_Thuoc_Add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
			trim($_POST['mathuoc']," "),//@MaThuoc nvarchar(50),
			null,// @Barcode  nvarchar(50),
			trim($_POST['tenbietduoc']," "),//@TenBietDuoc nvarchar(200),
			trim($_POST['tengoc']," "),//@TenGoc nvarchar(200), 
			null,// @TenHoaDon nvarchar(200),
			trim($_POST['tenkhac']," "),//@TenKhac  nvarchar(200),
			$_POST['ID_DuongDung'],//@ID_DuongDung nvarchar(20),
			$_POST['ID_NuocSanXuat'],//@ID_NuocSanXuat int,
			$_POST['ID_NhomThuoc'],//@ID_NhomThuoc int,
			$_POST['ID_NhomBenh'],//@ID_NhomBenh int,
			$_POST['ID_DonViTinh'],//@ID_DonViTinh int, 
			$_POST['hamluong'],//@HamLuong nvarchar(50),
			null,//@HanSuDung nvarchar(50),
			$_POST['dongia'],//@DonGia decimal(18,0),	
			$_POST['tonkhotoithieu'],//@TonKhoToiThieu int,
			trim($_POST['douutien']," "),//@DoUuTien int,
			trim($_POST['ghichu']," "),//@GhiChu nvarchar(200),
			$_POST['hesodieuchinhgiaban'],//@HeSoDieuChinhGiaBan decimal(18,0),
			null,//@HeSoDieuChinhGiaBan_HoaDon DECIMAL(18,0),
			null,//@DonGia_HoaDon DECIMAL(18,0),
			$_POST['phantramthue'],//@PhanTramThue tinyint,
			trim($_POST['quycach']," "),//@QuyCach nvarchar(150),
			$lathuoc,//@LaThuoc BIT,
			$BHYTNoiTruOrNgTru,//@BHYTNoiTruOrNgTru bit,
			$ThuocBHYT,//@ThuocBHYT bit,
			$IsHide4GPP,//@IsHide4GPP bit,
			$active,//@Active BIT,
			$_POST['ID_HangSanXuat'],//@ID_NSXThuoc	int,
			$_POST['SignNumber'],//@SignNumber	nvarchar(50),
			// trim($_POST['ID_NhomPhanLoaiThuoc']," "),--@Id_NhomphanLoaiThuoc	int,
			trim($_POST['ID_NhomBHYT']," "),//@SignNumber	nvarchar(50),
			$_POST['DonGia_BHYT'],//@Id_NhomphanLoaiThuoc	int,
			$HideVienPhi,
			$HideBHYT,
			$_POST['PhanHangBV'],
			$HideBHYT_traituyen,
			$_POST['MaBHYT'],
			$HideBHYT_dungtuyen,

			$_POST['CoSoTuTruc'],

			$_POST['BaoDongDo'],

			$_POST['BaoDongVang'],

			$_POST['MaSoTheoDMBHYT'],

			$_POST['Id_NhomThuoc_Toa'],
			$_POST['ID_NhomBHYT'],

			$_POST['HamLuong_BHYT'],
			$_POST['MaThuoc_BV'],
			$_POST['MaThuoc_BHYT'],
			$_POST['HoatChat_BHYT'],
			$_POST['MaDuongDung_BHYT'],
			$_POST['DuongDung_BHYT'],
			$_POST['DongGoi_BHYT'],
			$_POST['Gia_BHYT_Thanhtoan'],
			$_POST['DinhMuc_BHYT'],

			$_POST['NhietDo_DoAm'],
			trim($_POST['giaban']," "),
			$_SESSION['user']['id_user'],//  @IdUser_Login int,
			$_SERVER['REMOTE_ADDR'],

           array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)   //@ID_return int OUTPUT
        );
		
		
       $get=$data->query( $store_name, $params);
      if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params1=array($check1,$value['ID_HoatChat'],$value['HamLuong'],$value['ID_DonViTinh'],$value['IsHoatChatChinh'],$value['Active'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name1="{call GD2_Thuoc_HoatChat_Add (?,?,?,?,?,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }}
       if(isset($_POST['id2'])){  
       foreach ($_POST['id2'] as $key => $value) {
           // unset($params1);
           // print_r($_POST['id']);
            $params3=array($check1,$value['ID_PhanLoai'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name3="{call GD2_Thuoc_PhanLoaiThuoc_Add (?,?,?)}";
           // print_r($params1);
            $get3=$data->query( $store_name3, $params3);
      }}
        echo ';'.$check1;
}
function edit($store_name){
        if(!isset($_POST['lathuoc'])){    
            $lathuoc=0;
        }else{    
            $lathuoc=$_POST['lathuoc'];
         }
        if(!isset($_POST['BHYTNoiTruOrNgTru'])){    
            $BHYTNoiTruOrNgTru=0;
        }else{    
            $BHYTNoiTruOrNgTru=$_POST['BHYTNoiTruOrNgTru'];
         }
        if(!isset($_POST['ThuocBHYT'])){    
            $ThuocBHYT=0;
        }else{    
                $ThuocBHYT=$_POST['ThuocBHYT'];
        }
        if(!isset($_POST['IsHide4GPP'])){    
            $IsHide4GPP=0;
        }else{    
                $IsHide4GPP=$_POST['IsHide4GPP'];
        }
        if(!isset($_POST['active'])){    
            $active=0;
        }else{    
                $active=$_POST['active'];
        }
        //print_r($_POST);
         if( trim($_POST['hesodieuchinhgiaban']," ")==""){    
           $_POST['hesodieuchinhgiaban']=null;
        }else{    
                $_POST['hesodieuchinhgiaban']=trim($_POST['hesodieuchinhgiaban']," ");
        }
       // if( trim($_POST['hesodieuchinhgiaban_hoadon']," ")==""){    
       //     $_POST['hesodieuchinhgiaban_hoadon']=null;
       // }else{    
       //         $_POST['hesodieuchinhgiaban_hoadon']=trim($_POST['hesodieuchinhgiaban_hoadon']," ");
       // }

       // if( trim($_POST['dongia_hoadon']," ")==""){    
       //            $_POST['dongia_hoadon']=null;
       // }else{    
       //         $_POST['dongia_hoadon']=trim($_POST['dongia_hoadon']," ");
       // }
        if( trim($_POST['ID_DuongDung']," ")=="null"){    
                   $_POST['ID_DuongDung']="";
        }else{    
                $_POST['ID_DuongDung']=trim($_POST['ID_DuongDung']," ");
        }
        if( trim($_POST['tonkhotoithieu']," ")==""){    
                   $_POST['tonkhotoithieu']=null;
        }else{    
                $_POST['tonkhotoithieu']=trim($_POST['tonkhotoithieu']," ");
        }
        if( trim($_POST['phantramthue']," ")==""){    
                   $_POST['phantramthue']=null;
        }else{    
                $_POST['phantramthue']=trim($_POST['phantramthue']," ");
        }
        if( trim($_POST['ID_NuocSanXuat']," ")==""){    
                   $_POST['ID_NuocSanXuat']=null;
        }else{    
                $_POST['ID_NuocSanXuat']=trim($_POST['ID_NuocSanXuat']," ");
        }
        if( trim($_POST['ID_NhomBenh']," ")==""){    
                   $_POST['ID_NhomBenh']=null;
        }else{    
                $_POST['ID_NhomBenh']=trim($_POST['ID_NhomBenh']," ");
        }
        if( trim($_POST['ID_HangSanXuat']," ")==""){    
                   $_POST['ID_HangSanXuat']=null;
        }else{    
                $_POST['ID_HangSanXuat']=trim($_POST['ID_HangSanXuat']," ");
        }
        if( trim($_POST['hamluong']," ")==""){    
                   $_POST['hamluong']=null;
        }else{    
                $_POST['hamluong']=trim($_POST['hamluong']," ");
        }
		
		if( trim($_POST['ID_NhomBHYT']," ")==""){    
                   $_POST['ID_NhomBHYT']=null;
        }else{    
                $_POST['ID_NhomBHYT']=trim($_POST['ID_NhomBHYT']," ");
        }
		
		if( trim($_POST['DonGia_BHYT']," ")==""){    
                   $_POST['DonGia_BHYT']=null;
        }else{    
                $_POST['DonGia_BHYT']=trim($_POST['DonGia_BHYT']," ");
        }
		
		if( trim($_POST['PhanHangBV']," ")==""){    
                   $_POST['PhanHangBV']=null;
        }else{    
                $_POST['PhanHangBV']=trim($_POST['PhanHangBV']," ");
        }
		
		if(!isset($_POST['HideVienPhi'])){    
            $HideVienPhi=0;
        }else{    
            $HideVienPhi=$_POST['HideVienPhi'];
        }
		
		if(!isset($_POST['HideBHYT'])){    
            $HideBHYT=0;
        }else{    
            $HideBHYT=$_POST['HideBHYT'];
        }
		
		if( trim($_POST['SignNumber']," ")==""){    
                   $_POST['SignNumber']=null;
        }else{    
                $_POST['SignNumber']=trim($_POST['SignNumber']," ");
        }
		if(!isset($_POST['HideBHYT_traituyen'])){    
            $HideBHYT_traituyen=0;
        }else{    
            $HideBHYT_traituyen=$_POST['HideBHYT_traituyen'];
        }
		
		if(!isset($_POST['HideBHYT_dungtuyen'])){    
            $HideBHYT_dungtuyen=0;
        }else{    
            $HideBHYT_dungtuyen=$_POST['HideBHYT_dungtuyen'];
        }
		
		
		if( trim($_POST['MaBHYT']," ")==""){    
                   $_POST['MaBHYT']=null;
        }else{    
                $_POST['MaBHYT']=trim($_POST['MaBHYT']," ");
        }
		
		
		if( trim($_POST['CoSoTuTruc']," ")==""){    
                   $_POST['CoSoTuTruc']=null;
        }else{    
                $_POST['CoSoTuTruc']=trim($_POST['CoSoTuTruc']," ");
        }
		if( trim($_POST['BaoDongDo']," ")==""){    
                   $_POST['BaoDongDo']=null;
        }else{    
                $_POST['BaoDongDo']=trim($_POST['BaoDongDo']," ");
        }
		if( trim($_POST['BaoDongVang']," ")==""){    
                   $_POST['BaoDongVang']=null;
        }else{    
                $_POST['BaoDongVang']=trim($_POST['BaoDongVang']," ");
        }
		if( trim($_POST['MaSoTheoDMBHYT']," ")==""){    
                   $_POST['MaSoTheoDMBHYT']=null;
        }else{    
                $_POST['MaSoTheoDMBHYT']=trim($_POST['MaSoTheoDMBHYT']," ");
        }
		if( trim($_POST['Id_NhomThuoc_Toa']," ")==""){    
                   $_POST['Id_NhomThuoc_Toa']=null;
        }else{    
                $_POST['Id_NhomThuoc_Toa']=trim($_POST['Id_NhomThuoc_Toa']," ");
        }
		
		if( trim($_POST['ID_NhomBHYT']," ")==""){    
                   $_POST['ID_NhomBHYT']=null;
        }else{    
                $_POST['ID_NhomBHYT']=trim($_POST['ID_NhomBHYT']," ");
        }
		
		
		if( trim($_POST['HamLuong_BHYT']," ")==""){    
                   $_POST['HamLuong_BHYT']=null;
        }else{    
                $_POST['HamLuong_BHYT']=trim($_POST['HamLuong_BHYT']," ");
        }
		
		if( trim($_POST['MaThuoc_BV']," ")==""){    
                   $_POST['MaThuoc_BV']=null;
        }else{    
                $_POST['MaThuoc_BV']=trim($_POST['MaThuoc_BV']," ");
        }
		$_POST['MaThuoc_BHYT']='';
		if( trim($_POST['MaThuoc_BHYT']," ")==""){    
                   $_POST['MaThuoc_BHYT']=null;
        }else{    
                $_POST['MaThuoc_BHYT']=trim($_POST['MaThuoc_BHYT']," ");
        }
		
		if( trim($_POST['HoatChat_BHYT']," ")==""){    
                   $_POST['HoatChat_BHYT']=null;
        }else{    
                $_POST['HoatChat_BHYT']=trim($_POST['HoatChat_BHYT']," ");
        }
		if( trim($_POST['MaDuongDung_BHYT']," ")==""){    
                   $_POST['MaDuongDung_BHYT']=null;
        }else{    
                $_POST['MaDuongDung_BHYT']=trim($_POST['MaDuongDung_BHYT']," ");
        }
		if( trim($_POST['DuongDung_BHYT']," ")==""){    
                   $_POST['DuongDung_BHYT']=null;
        }else{    
                $_POST['DuongDung_BHYT']=trim($_POST['DuongDung_BHYT']," ");
        }
		if( trim($_POST['DongGoi_BHYT']," ")==""){    
                   $_POST['DongGoi_BHYT']=null;
        }else{    
                $_POST['DongGoi_BHYT']=trim($_POST['DongGoi_BHYT']," ");
        }
		if( trim($_POST['Gia_BHYT_Thanhtoan']," ")==""){    
                   $_POST['Gia_BHYT_Thanhtoan']=null;
        }else{    
                $_POST['Gia_BHYT_Thanhtoan']=trim($_POST['Gia_BHYT_Thanhtoan']," ");
        }
		
		if( trim($_POST['Gia_BHYT_Thanhtoan']," ")==""){    
                   $_POST['Gia_BHYT_Thanhtoan']=null;
        }else{    
                $_POST['Gia_BHYT_Thanhtoan']=trim($_POST['Gia_BHYT_Thanhtoan']," ");
        }
		if( trim($_POST['NhietDo_DoAm']," ")==""){    
                   $_POST['NhietDo_DoAm']=null;
        }else{    
                $_POST['NhietDo_DoAm']=trim($_POST['NhietDo_DoAm']," ");
        }
		
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call Gd2_Thuoc_Upd(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
            $_GET['id'],
           trim($_POST['mathuoc']," "),
           null,
           trim($_POST['tenbietduoc']," "),
           trim($_POST['tengoc']," "),
           null,
           trim($_POST['tenkhac']," "),
           $_POST['ID_DuongDung'],
           $_POST['ID_NuocSanXuat'],
           trim($_POST['ID_NhomThuoc']," "),
           $_POST['ID_NhomBenh'],
           trim($_POST['ID_DonViTinh']," "),
           $_POST['hamluong'],
           null,
           trim($_POST['dongia']," "),
           $_POST['tonkhotoithieu'],
           trim($_POST['douutien']," "),
           trim($_POST['ghichu']," "),
           $_POST['hesodieuchinhgiaban'],
           null,
           null,
          $_POST['phantramthue'],
           trim($_POST['quycach']," "),
           $lathuoc,
           $BHYTNoiTruOrNgTru,
           $ThuocBHYT,
           $IsHide4GPP,
           $active,
           $_POST['ID_HangSanXuat'],
           $_POST['SignNumber'],
           trim($_POST['ID_NhomBHYT']," "),//@SignNumber	nvarchar(50),
           $_POST['DonGia_BHYT'],//@Id_NhomphanLoaiThuoc	int,
		   $HideVienPhi,
		   $HideBHYT,
		   $_POST['PhanHangBV'],
		   $HideBHYT_traituyen,
		  
		   $_POST['MaBHYT'],
		   $HideBHYT_dungtuyen,
		   $_POST['CoSoTuTruc'],
           $_POST['BaoDongDo'],
           $_POST['BaoDongVang'],
		   $_POST['MaSoTheoDMBHYT'],
		   $_POST['Id_NhomThuoc_Toa'],
		   $_POST['ID_NhomBHYT'],
		   $_POST['HamLuong_BHYT'],
			$_POST['MaThuoc_BV'],
			$_POST['MaThuoc_BHYT'],
			$_POST['HoatChat_BHYT'],
			$_POST['MaDuongDung_BHYT'],
			$_POST['DuongDung_BHYT'],
			$_POST['DongGoi_BHYT'],
			$_POST['Gia_BHYT_Thanhtoan'],
			$_POST['DinhMuc_BHYT'],
			$_POST['NhietDo_DoAm'],
			trim($_POST['giaban']," "),
           $_SESSION['user']['id_user'],
		    $_SERVER['REMOTE_ADDR'],
           
      );	
	$get=$data->query( $store_name, $params);//Goi store	
	//echo $check1;
        $params1=array($_GET['id']);
        $get1=$data->query( "{call ThuocHC_Select(?)}", $params1);
        $excute= new SQLServerResult($get1);
        $tam= $excute->get_as_array();
        foreach ($tam as $row) {//duyet toan bo mang tra ve
            $params2=array($row["ID_ThuocHoatChat"],$_SESSION['user']['id_user']);
            $get_del=$data->query( "{call GD2_ThuocHC_Del(?,?)}", $params2);
        }
        $params4=array($_GET['id']);
        $get4=$data->query( "{call Thuoc_PhanLoaiThuoc_Select(?)}", $params4);
        $excute2= new SQLServerResult($get4);
        $tam2= $excute2->get_as_array();
        foreach ($tam2 as $row) {//duyet toan bo mang tra ve
            $params5=array($row["ID_Thuoc"],$_SESSION['user']['id_user']);
            $get_del2=$data->query( "{call GD2_Thuoc_PhanLoaiThuoc_Del(?,?)}", $params5);
        }

        if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params1=array($_GET['id'],$value['ID_HoatChat'],$value['HamLuong'],$value['ID_DonViTinh'],$value['IsHoatChatChinh'],$value['Active'],$_SESSION['user']['id_user'],);
            //print_r($params1);
            $store_name1="{call GD2_Thuoc_HoatChat_Add (?,?,?,?,?,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }}
       if(isset($_POST['id2'])){  
       foreach ($_POST['id2'] as $key => $value) {
            //unset($params1);
           // print_r($_POST['id']);
            $params3=array($_GET['id'],$value['ID_PhanLoai'],$_SESSION['user']['id_user'],);
            //print_r($params3);
            $store_name3="{call GD2_Thuoc_PhanLoaiThuoc_Add (?,?,?)}";
           // print_r($params1);
            $get3=$data->query( $store_name3,$params3);
      }}
     // print_r(expression)
        
        
}
function del($store_name){
	///print_r($_POST);
  $check1="";
  $data= new SQLServer;//tao lop ket noi SQL
  $params1=array($_POST['id']);
  $get1=$data->query( "{call ThuocHC_Select(?)}", $params1);
  $excute= new SQLServerResult($get1);
  $tam= $excute->get_as_array();
  foreach ($tam as $row) {//duyet toan bo mang tra ve
      $params2=array($row["ID_ThuocHoatChat"],$_SESSION['user']['id_user']);
      $get_del=$data->query( "{call GD2_ThuocHC_Del(?,?)}", $params2);
  }
  $params4=array($_POST['id']);
  $get4=$data->query( "{call Thuoc_PhanLoaiThuoc_Select(?)}", $params4);
  $excute2= new SQLServerResult($get4);
  $tam2= $excute2->get_as_array();
  foreach ($tam2 as $row) {//duyet toan bo mang tra ve
      $params5=array($row["ID_Thuoc"],$_SESSION['user']['id_user']);
      $get_del2=$data->query( "{call GD2_Thuoc_PhanLoaiThuoc_Del(?,?)}", $params5);
  }

	
	$store_name="{call GD2_Thuoc_Delete (?,?)}";//tao bien khai bao store
	$params = array( 
                  array($_POST["id"], SQLSRV_PARAM_IN),
		               array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                  array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get=$data->query( $store_name, $params);//Goi store	

   echo $check1;
}
?>

