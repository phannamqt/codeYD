<?php
	 if(trim($_POST['dhlamsang'])==""){
			$_POST['dhlamsang']=NULL;
	 }
	 else{
		$_POST['dhlamsang']=trim($_POST['dhlamsang']);
	 }
	 if(trim($_POST['ttrang'])==""){
			$_POST['ttrang']=NULL;
	 }
	 else{
		$_POST['ttrang']=trim($_POST['ttrang']);
	 }
	 
	 if(trim($_POST['ketquaxn'])==""){
			$_POST['ketquaxn']=NULL;
	 }
	 else{
		$_POST['ketquaxn']=trim($_POST['ketquaxn']);
	 }
	 if(trim($_POST['chandoan'])==""){
			$_POST['chandoan']=NULL;
	 }
	 else{
		$_POST['chandoan']=trim($_POST['chandoan']);
	 }
	 
	 if(trim($_POST['pphap'])==""){
			$_POST['pphap']=NULL;
	 }
	 else{
		$_POST['pphap']=trim($_POST['pphap']);
	 }
	 
	 if(trim($_POST['lydochuyen'])==""){
			$_POST['lydochuyen']=NULL;
	 }
	 else{
		$_POST['lydochuyen']=trim($_POST['lydochuyen']);
	 }
	 
	 if(trim($_POST['phtien'])==""){
			$_POST['phtien']=NULL;
	 }
	 else{
		$_POST['phtien']=trim($_POST['phtien']);
	 }
	 
	 if(trim($_POST['nguoihotong'])==""){
			$_POST['nguoihotong']=NULL;
	 }
	 else{
		$_POST['nguoihotong']=trim($_POST['nguoihotong']);
	 }
	 
	 if(trim($_POST['ddkchuyen'])==""){
			$_POST['ddkchuyen']=NULL;
	 }
	 else{
		$_POST['ddkchuyen']=trim($_POST['ddkchuyen']);
	 }
	 
	 if(trim($_POST['huongdieutri'])==""){
			$_POST['huongdieutri']=NULL;
	 }
	 else{
		$_POST['huongdieutri']=trim($_POST['huongdieutri']);
	 }
	 
	 if(trim($_POST['chuyenden'])==""){
			$_POST['chuyenden']=NULL;
	 }
	 else{
		$_POST['chuyenden']=trim($_POST['chuyenden']);
	 }
	 
$data= new SQLServer;
$store_name="{call GD2_PhieuChuyenVien_Update(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?  ,?)}";	

$params    = array (
					
					$_POST['id_luotkham'],
					$_POST['dhlamsang'],
					$_POST['ketquaxn'],
					$_POST['chandoan'],
					$_POST['pphap'],
					
					$_POST['ttrang'],
					$_POST['lydochuyen'],
					$_POST['phtien'],
					$_POST['nguoihotong'],
					$_POST['bsdieutri'],
					
					$_SESSION["user"]["id_user"],
					$_POST['ddkchuyen'],
					$_POST['huongdieutri'],
					$_POST['chuyenden'],
					$_SESSION["user"]["id_user"],
					
					$_POST['ngaychuyen']
					);
	
$add=$data->query( $store_name, $params);

	
?>
