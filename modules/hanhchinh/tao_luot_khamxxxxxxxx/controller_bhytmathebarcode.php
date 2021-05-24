<?php
   
 /* $connected= @fsockopen("http://egw.baohiemxahoi.gov.vn/api/token/take" ,80);
  if($connected){
    $a
  }else{
    $a=false;
  }
  return $a;*/
  $Post=  array(
    'username' => '48195_BV',
    'password' => 'fd16b54a98681877301e32b0efeb87ae'              
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
  $url = 'http://egw.baohiemxahoi.gov.vn/api/egw/KQNhanLichSuKCB595?token='.$response["APIKey"]["access_token"].'&id_token='.$response["APIKey"]["id_token"].'&username=48195_BV&password=fd16b54a98681877301e32b0efeb87ae';
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
    'gioiTinh' => $_POST['gioiTinh'],
    'maCSKCB' => $_POST['maCSKCB']
  );
//  print_r($Post);
  curl_setopt($soap_do, CURLOPT_POSTFIELDS, http_build_query($Post));
  $response = curl_exec($soap_do); 
  curl_close($soap_do);
  print_r($response);
  
?>