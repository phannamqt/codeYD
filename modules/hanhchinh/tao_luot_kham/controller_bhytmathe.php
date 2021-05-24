<?php
  $soap_do = curl_init();
  $url = 'https://gdbhyt.baohiemxahoi.gov.vn/ThongTuyenLSKCB/CheckMaThe';
  curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, FALSE);  
  curl_setopt($soap_do, CURLOPT_MAXREDIRS,5);
  curl_setopt($soap_do, CURLOPT_URL, $url );
  curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT ,10);
  curl_setopt($soap_do, CURLOPT_TIMEOUT, 10);
  curl_setopt($soap_do, CURLOPT_POSTFIELDS, $_POST); 
  $response = curl_exec($soap_do);
  curl_close($soap_do);
  print_r($response);
?>