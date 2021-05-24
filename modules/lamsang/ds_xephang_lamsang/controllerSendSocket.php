
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<?php
$PORT = 21222; //the port on which we are connecting to the "remote" machine
$HOST = "192.168.1.105"; //the ip of the remote machine (in this case it's the same machine)105

$sock = socket_create(AF_INET, SOCK_STREAM, 0) //Creating a TCP socket
        or die("error: could not create socket\n");

$succ = socket_connect($sock, $HOST, $PORT) //Connecting to to server using that socket
        or die("error: could not connect to host\n");
// chuoi dịnh dang: $[00000000][n][t][qqq][xxxx]#

/*+ xxxx là số phiếu khám từ 0000 - 9999
+ qqq là số quầy hoặc số phòng từ 000 – 999
+ t là số tầng 1 – 9
+ n là nhóm gọi: 1-gọi đến quầy; 2-gọi đến lễ tân; 3-gọi đến phòng
+ [00000000] là địa chỉ các cụm loa từ 1 – 8 nằm rải trên các tầng. Giá trị 0 thì ko phát loa, giá trị 1 là phát loa. Âm thanh sẽ phát trên tất cả các loa con thuộc cụm.
Vd chuỗi dữ liệu: $01101000110120112#: Thì sẽ gọi số 0112 đến quầy 012 tầng 1. Âm thanh được phát ở cụm loa 2 (tầng 2),cụm 3 (tầng 2), cụm 5 (tầng 3)*/
$diachi_loa='10001000';
$n_nhomgoi='1';
$tang='2';
$qqq='212';
$sophieukham='0112';

    //$text ='$10001000122120112#' ; //the text we want to send to the server
$text='$'.$diachi_loa.$n_nhomgoi.$tang.$qqq.$sophieukham.'#';

socket_write($sock, $text . "\n", strlen($text) + 1) //Writing the text to the socket
        or die("error: failed to write to socket\n");

//$reply = socket_read($sock, 10000, PHP_NORMAL_READ) //Reading the reply from socket
  //      or die("error: failed to read from socket\n");

//echo $reply;
socket_close($sock);

?>

