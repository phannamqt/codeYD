<?php
 
//print_r($GLOBALS); 
echo $_POST["total_images"];
for($i=0;$i<count($_POST["image_data"]);$i++){
	list($type, $data) = explode(';', $_POST["image_data"][$i]);
	echo $type;
	list(, $data)      = explode(',', $data);
	$data = base64_decode($data);	 
	list(,$type)= explode('/', $type);
	$name=$_POST["default_name"]."_".($i+1+$_POST["total_images"]).".$type";
	file_put_contents('tmp_images/'.$name, $data);
	$_FILES["upload"]["name"][$i]=$name;
	$_FILES["upload"]["type"][$i]="image/$type";
	$_FILES["upload"]["tmp_name"][$i]="D:\xampp\htdocs\giaidoan2\tmp_images\$name";
	$_FILES["upload"]["error"][$i]="0";
	$_FILES["upload"]["size"][$i]="0"; 	
}


/*print_r($_FILES);
$target = "/screenshots/";
$target = $target . basename($_FILES["valueimage"]["name"]);
$picchallengervalue=($_FILES['valueimage']['name']);
*/
/*$uploads_dir = 'tmp_images';
//foreach ($_FILES["valueimage"]["error"] as $key => $error) {
    if ($_FILES["valueimage"]["error"] == 0) {
        $tmp_name = $_FILES["valueimage"]["tmp_name"];
        $name = $_FILES["valueimage"]["name"];
		echo $name;
       echo move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
//}
*/
//echo $target;
/*$file_tam = fopen($_FILES['valueimage']['tmp_name'],'r'); 
$fp = fopen($_FILES['valueimage']['name'],'w');
fwrite($fp, $file_tam);
fclose($fp); */
//print_r($_POST);
	/*$data = $_POST['data'];
	$fileName = $_POST['name'];
	echo $fileName;
	$fp = fopen('/uploads/'.$fileName,'w'); //Prepends timestamp to prevent overwriting
	fwrite($fp, $data);
	fclose($fp);
	$returnData = array( "serverFile" => $fileName );
	echo json_encode($returnData);*/
?>