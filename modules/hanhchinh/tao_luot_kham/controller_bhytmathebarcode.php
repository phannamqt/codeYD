<?php
 
     $Post=  array(
    'username' => '48202_BV',
    'password' => '2c3513de35d539f706e913c3f446f8a4'              
  );
  $soap_do = curl_init();
  $url = 'http://egw.baohiemxahoi.gov.vn/api/token/take';
  curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($soap_do, CURLOPT_URL, $url );
  curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($soap_do,CURLOPT_CONNECTTIMEOUT ,10);
  curl_setopt($soap_do,CURLOPT_TIMEOUT, 10);
  curl_setopt($soap_do, CURLOPT_POST,  true);
  curl_setopt($soap_do, CURLOPT_POSTFIELDS, http_build_query($Post));

  $response = curl_exec($soap_do); 
  curl_close($soap_do);

  $response=json_decode($response,true);
  $soap_do = curl_init();
  $url = 'http://egw.baohiemxahoi.gov.vn/api/egw/KQNhanLichSuKCB2019?token='.$response["APIKey"]["access_token"].'&id_token='.$response["APIKey"]["id_token"].'&username=48202_BV&password=2c3513de35d539f706e913c3f446f8a4';
  curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($soap_do, CURLOPT_URL, $url );
  curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($soap_do,CURLOPT_CONNECTTIMEOUT ,10);
  curl_setopt($soap_do,CURLOPT_TIMEOUT, 10);
  curl_setopt($soap_do, CURLOPT_POST,  true);
  $Post=  array(
    'maThe' => $_POST['maThe'],
    'hoTen' => $_POST['hoTen'],
    'ngaySinh' => $_POST['ngaySinh'],
    //'gioiTinh' => $_POST['gioiTinh'],
    //'maCSKCB' => $_POST['maCSKCB']
  );
//  print_r($Post);
  curl_setopt($soap_do, CURLOPT_POSTFIELDS, http_build_query($Post));
  $response = curl_exec($soap_do); 
  curl_close($soap_do);
  print_r($response);  
  /*
 if($_POST['maThe']=="DN4111111111111"){
	  print_r  (('{"maKetQua":"000","hoTen":"","gioiTinh":"","diaChi":"","maDKBD":"","cqBHXH":"","gtTheTu":"","gtTheDen"
:"","maKV":"","ngayDu5Nam":"30/08/2019","dsLichSuKCB":[{"maHoSo":1183631925,"maCSKCB":"49088","tuNgay":"07/09/2019"
,"denNgay":"07/09/2019","tenBenh":"","tinhTrang":"1","kqDieuTri":"2"},{"maHoSo":1177369363,"maCSKCB"
:"49088","tuNgay":"30/08/2019","denNgay":"30/08/2019","tenBenh":"","tinhTrang":"1","kqDieuTri":"1"}]
}'));
	  
  }else if($_POST['maThe']=="DN4222222222222"){
	  print_r  (('{"maKetQua":"010","hoTen":"","gioiTinh":"Nam","diaChi":"","maDKBD":" ","cqBHXH":"Bảo hiểm Xã hội quận 4","gtTheTu":"01/07/2017","gtTheDen":"31/12
/2017","maKV":"","ngayDu5Nam":" ","dsLichSuKCB":null}'));
  }else {
	  print_r  (('{"maKetQua":"060","hoTen":"","gioiTinh":"Nam","diaChi":"","maDKBD":" ","cqBHXH":"Bảo hiểm Xã hội quận 4","gtTheTu":"01/07/2017","gtTheDen":"31/12
/2017","maKV":"","ngayDu5Nam":" ","dsLichSuKCB":null}'));
  } 
   */
?>