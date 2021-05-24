<?php
print_r($_FILES);
 $target = "screenshots/";
$target = $target . basename($_FILES["valueimage"]["name"]);
echo $target;
$picchallengervalue=($_FILES['valueimage']['name']);
$uploads_dir = 'tmp_images';
//foreach ($_FILES["valueimage"]["error"] as $key => $error) {
    //if ($_FILES["valueimage"]["error"] == 0) {
        $tmp_name = $_FILES["valueimage"]["tmp_name"];
        $name = $_FILES["valueimage"]["name"];
		//echo $name;
        //echo move_uploaded_file($tmp_name, "$uploads_dir/$name");
		//if(move_uploaded_file($_FILES["valueimage"]["tmp_name"], "$uploads_dir/$name")){
		//	echo "ok";
		//}
   // }
//}

 
/*$file_tam = fopen($_FILES['valueimage']['tmp_name'],'r'); 
$fp = fopen($_FILES['valueimage']['name'],'w');
fwrite($fp, $file_tam);
fclose($fp); */
//print_r($_POST);
	 
?>