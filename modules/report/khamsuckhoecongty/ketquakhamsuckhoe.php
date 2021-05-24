
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical report</title>
<style type="text/css" media="all">
 table{
		letter-spacing:0px;
		font-family:Arial, Helvetica, sans-serif;
		font-size:13px;	
		border-top:1px solid black;
	}
	.bold{
		font-weight:600;
		}
pre{
	 	letter-spacing:0px;
		font-family:Arial, Helvetica, sans-serif;
		font-size:13px;
		white-space: pre-line;
	}
	th,td{
		border-bottom:1px solid black;
		}
th{
	height:30px;
	}
</style>
<style type="text/css" media="print">
 table{
		letter-spacing:0px;
		font-family:Arial, Helvetica, sans-serif;
		font-size:13px;	
	}
	.bold{
		font-weight:600;
		}
pre{
	 	letter-spacing:0px;
		font-family:Arial, Helvetica, sans-serif;
		font-size:13px;
		white-space: pre-line;
		padding-left:7px;
	}
</style>
</head>
 	<?php
		$data= new SQLServer;//tao lop ket noi SQL
		$params = array($_GET['iddotkham']);//tao param cho store 
		$store_name="{call spMedicalreport_SelectAllByID_GoiKham(?)}";//tao bien khai bao store
		$get_thongtin=$data->query( $store_name,$params);//Goi store
		$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$result= $excute->get_as_array();//Tra ve mang toan bo data lay 
		$i=0;
	foreach ($result as $row) {//duyet toan bo mang tra ve
		$responce[$i]=array($row["STT"],
		$row["HoTenBN"],
		$row["Tuoi"],
		$row["GioiTinh"],
		$row["NgayKham"],
		$row["KetLuan"],
		$row["HuongDanDieuTri"],
		$row["PL"]
		);
		$i++; 
	} 
	//print_r($responce);
	$rsdata=json_encode($responce);  
	?>
    
<body>
	
<div id="wrapper" style="margin-left:40px">
	 <div id="page_1" class="page" style="page-break-after: always; padding-top:5px">
       <div class="n_top">
        <table width="97%" border="0" cellpadding="0" cellpadding="0" style="border:none; ">
            <tr>
               <td width="37%" rowspan="2"  style="border:none">
               		<table width="100%" style="border:none">
                    	<tr>
                        	<td rowspan="3" align="center"  style="border:none">
                            	<span class="bold" style="font-size:14px;">FAMILY</span><img width="30px" height="50px" src="./modules/report/lamsang/img/theodoichucnangsong/logo_den.png"  />
                            </td>
                            <td align="center" colspan="2"  style="border:none">
                            	<label class="bold"><?php echo $_SESSION["com"]["TenBenhVien"]?></label><br />
                            </td>
                        </tr>
                        <tr>
                        	<td align="left"  style="border:none">Địa chỉ:</td>
                            <td align="right"  style="border:none"> <label style="font-size:13px"><?php echo $_SESSION["com"]["DiaChi"]?></label></td>
                        </tr>
                         <tr>
                        	<td align="left"  style="border:none">Điện thoại:</td>
                            <td align="right"  style="border:none">   <label style="font-size:13px"><?php echo $_SESSION["com"]["SoDT"]?></label></td>
                        </tr>
                    </table>
                    	
   						
                      
                      
                        
                    </td>
                <td class="bold" align="center"  style="border:none"><label style="font-size:25px; ">KẾT QUẢ KHÁM SỨC KHỎE</label></td>
            </tr>
            <tr>
            	<td align="center"  style="border:none"><label style="font-size:20px;"><?php echo ($_GET["tencongty"])?></label></td>
            </tr>
        </table>
        </div>
        <table  id="bang_1" width="97%" border="0" cellpadding="0" cellspacing="0">
        	 <tr>
            	<th align="center" width="25px">STT</th>
                <th width="165px">Họ tên</th>
                <th align="center" width="30px">Tuổi</th>
                <th align="center" width="50px">Giới</th>
                <th align="center" width="80px">Ngày khám</th>
                <th width="25%">Kết quả</th>
                <th width="35%">Xử trí</th>
                <th align="center" width="50px">Xếp loại</th>
            </tr>
           <tbody id="tbody_1">
              
          </tbody>
        </table>
        
	</div><!-- end page-->
</div><!-- end wrapper-->
</body>
<script type="text/javascript">
var loai1=0;
var loai2=0;
var loai3=0;
var loai4=0;
var loai5=0;
var tong=0;
	$(document).ready(function(e) { //180
		window.page=1;
		var ds=Array;
		var d=0;
		var heightpage=600;
		ds=<?=$rsdata?>;
		//alertObject(ds);
		for( var i=0;i<ds.length;i++){
			if(checkpage(heightpage,window.page)>22){
				loaddata(i,ds,window.page);	
			}else{
				addtable(window.page);
				loaddata(i,ds,window.page);	
			}
			if(i==ds.length-1){
				addbottom(heightpage,window.page);
			}
		}
        print_preview();
    });
	
function checkpage(heightpage,page){
	if(page==1){
		var t=heightpage-$("#page_"+page).height()-22;
	}else{
		var t=heightpage-$("#page_"+page).height();	
	}
	return t;
}

function loaddata(i,ds,page){
	//alert(ds[i][3]);
	d=i+1;
	if(ds[i][7]==null){ds[i][7]=''};
	$("#tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center" style="vertical-align:top">'+d+'</td>'+
		'<td style="vertical-align:top">'+ds[i][1]+'</td>'+
		
		'<td align="center" style="vertical-align:top">'+ds[i][2]+'</td>'+
		'<td align="center" style="vertical-align:top">'+ds[i][3]+'</td>'+
		'<td style="vertical-align:top">'+ds[i][4]+'</td>'+
		'<td style="vertical-align:top"><pre >'+ds[i][5]+'</pre></td>'+
		'<td style="vertical-align:top"><pre>'+ds[i][6]+'</pre></td>'+
		'<td align="center"><b>'+ds[i][7]+'</b></td>'+
	 '</tr>');
	 //tính % xếp loại
	 tong++;
	 if(parseInt(ds[i][7])==1){loai1++;}
	 else{
		 if(parseInt(ds[i][7])==2){loai2++;}
		 else{
			 	if(parseInt(ds[i][7])==3){loai3++;}
		 		else{
			 			if(parseInt(ds[i][7])==4){loai4++;}
		 				else{
			 					loai5++;
			 				}
			 		}
			 }
		 }
}

function addtable(page){
	var page=page+1;
	$("#wrapper").append('<div id="page_'+page+'" class="page" style="page-break-after: always; padding-top:5px">'+
	'<table id="bang_'+page+'" width="97%" cellpadding="0" cellspacing="0" border="0">'+
       ' <tr>'+
            	'<th align="center" width="25px">STT</th>'
                +'<th width="165px">Họ tên</th>'
                +'<th align="center" width="30px">Tuổi</th>'
                +'<th align="center" width="50px">Giới</th>'
                +'<th align="center" width="80px">Ngày khám</th>'
                +'<th width="25%">Kết quả</th>'
                +'<th width="35%">Xử trí</th>'
                +'<th align="center"  width="50px">Xếp loại</th>'
            +'</tr>'+
          '<tbody id="tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.page=page;
}

function addbottom(heightpage,page){
	kq1=loai1/tong*100; kq1=kq1.toFixed(2);
	kq2=loai2/tong*100;	kq2=kq2.toFixed(2);
	kq3=loai3/tong*100;	kq3=kq3.toFixed(2);
	kq4=loai4/tong*100;	kq4=kq4.toFixed(2);
	kq5=loai5/tong*100;	kq5=kq5.toFixed(2);
	//kq1=kq1.toFi;
	
	if(checkpage(heightpage,page)>80){
		$("#page_"+page).append(
			'<table width="97%" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;border:none">'+
        	'<tr>'+
            	'<td width="50%" style="border:none"> -'+loai1+' người loại 1 chiếm '+ kq1.replace(".",",") + '%'+
					'<br>-'+loai2+' người loại 2 chiếm '+ kq2.replace(".",",") + '%'+
					'<br>-'+loai3+' người loại 3 chiếm '+ kq3.replace(".",",") + '%'+
					'<br>-'+loai4+' người loại 4 chiếm '+ kq4.replace(".",",") + '%' +
                	'<br>-'+loai5+' người loại 5 chiếm '+ kq5.replace(".",",") + '%' +
                '</td>'+
               ' <td width="50%" style="border:none" align="center">'+
                	'Đà Nẵng, ngày <?php echo date("d");?> tháng  <?php echo date("m");?> năm <?php echo date("Y");?><br />'+
					'<b>Bác sỹ kết luận</b>'+
                    
                '</td>'+
           ' </tr>'+
       ' </table>'
		);
	}else{
		$("#wrapper").append(
		'<table width="97%" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;border:none">'+
        	'<tr>'+
            	'<td width="50%" style="border:none"> -'+loai1+' người loại 1 chiếm '+ loai1/tong*100 + '%'+
					'<br>-'+loai2+' người loại 2 chiếm '+ loai2/tong*100 + '%'+
					'<br>-'+loai3+' người loại 3 chiếm '+ loai3/tong*100 + '%'+
					'<br>-'+loai4+' người loại 4 chiếm '+ loai4/tong*100 + '%' +
                	'<br>-'+loai5+' người loại 5 chiếm '+ loai2/tong*100 + '%' +
                '</td>'+
               ' <td width="50%" style="border:none" align="center">'+
                	'Đà Nẵng, ngày <?php echo date("d");?> tháng  <?php echo date("m");?> năm <?php echo date("Y");?><br />'+
					'Bác sỹ kết luận'+
                    
                '</td>'+
           ' </tr>'+
       ' </table>'
		);
	}
}
</script>
</html>