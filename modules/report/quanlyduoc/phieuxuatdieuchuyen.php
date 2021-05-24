<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left:4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
.ghichukyten{
	font-size:12px;
	font-style:italic;
}
}
</style>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params2 = array($_GET['id_phieuxuat']);//tao param cho store 
	$store_name2="{call GD2_GetAllThuocByID_XuatKho(?)}";//tao bien khai bao store
	$get_thongtin2=$data->query( $store_name2,$params2);//Goi store
	$excute2= new SQLServerResult($get_thongtin2);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thuoc= $excute2->get_as_array();//Tra ve mang toan bo data lay 
	//print_r($thuoc);
	$i=0;
	foreach ($thuoc as $row) {//duyet toan bo mang tra ve
		$responce[$i]=array($row["MaThuoc"],
		$row["TenGoc"],
		$row["TenDonViTinh"],
		$row["SoLuong"],
		$row["SoLo"],
		$row["SoLoNhaSanXuat"]
		);
		$i++; 
	} 
	$rsdata=json_encode($responce);  
	
?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
         <div class="n_top">
            <table width="700px" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="595px">
                            <span style="letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
                </td>
                <td style="vertical-align:top; width:100px"></td>
              </tr>
            </table><br />
            
            <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        PHIẾU XUẤT ĐIỀU CHUYỂN<br />
                        <label style="text-align:center; font-size:15px; font-weight:normal">( Từ kho <span style="text-transform:capitalize"><?=$_GET['tukho']?></span> đến kho <span style="text-transform:capitalize"><?=$_GET['denkho']?></span> )</label>
                  </td>
                </tr>
            </table>
            <br />
        </div>
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>
            <th width="50px">Mã</th>
            <th width="350px">Tên thuốc</th>
            <th width="70px">ĐVT</th>
            <th width="100px">Số lượng</th>
            <th width="100px">Số lô HT</th>
            <th width="100px">Số lô NSX</th>
          </tr>
          <tbody id="tbody_1">
              
          </tbody>
        </table>
    </div><!-- end page-->
</div><!-- end tongthe-->
   

</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
		window.page=1;
		var ds=Array;
		var d=0;
		var heightpage=1240;
		ds=<?=$rsdata?>;
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
		/*
		for( var i=0;i<205;i++){
			//alert(checkpage(heightpage,window.page))
			if(checkpage(heightpage,window.page)>22){
				loaddata(i,ds,window.page);	
			}else{
				addtable(window.page);
				loaddata(i,ds,window.page);	
			}
			if(i==204){
				addbottom(heightpage,window.page);	
			}
		}
		*/
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
/*function loaddata(i,ds,page){
	d=i+1;
	$("#tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center">'+d+'</td>'+
		'<td>'+1+'</td>'+
		'<td>'+2+'</td>'+
		'<td  align="center">'+3+'</td>'+
		'<td>'+4+'</td>'+
	 '</tr>');
}*/
function loaddata(i,ds,page){
	d=i+1;
	$("#tbody_"+page).append('<tr id="row_'+i+'">'+
		'<td align="center">'+d+'</td>'+
		'<td>'+ds[i][0]+'</td>'+
		'<td>'+ds[i][1]+'</td>'+
		'<td  align="center">'+ds[i][2]+'</td>'+
		'<td>'+ds[i][3]+'</td>'+
		'<td>'+ds[i][4]+'</td>'+
		'<td>'+ds[i][5]+'</td>'+
	 '</tr>');
}
function addbottom(heightpage,page){
	if(checkpage(heightpage,page)>180){
		$("#page_"+page).append('<div id="bottom">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			  '  <td style="text-align:center">Người xuất<br><span class="ghichukyten">(Ký, ghi rõ họ tên)</span></td>'+
			 '   <td style="text-align:center"></td>'+
			   ' <td style="text-align:center">Người nhận<br><span class="ghichukyten">(Ký, ghi rõ họ tên)</span></td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td><br><br><br><br></td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td style="text-align:center"> <strong></strong></td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}else{
		$("#tongthe").append('<div id="bottom" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
		   '<br />'+
		   ' <table width="700px" border="0" cellpadding="0" cellspacing="0">'+
			 ' <tr>'+
			 '   <td colspan="3" style="text-align:right; font-style:italic">Ngày in: <?php
						$date = date("H:i ".$_SESSION["config_system"]["ngaythang"]);
						echo $date;
						?><br><br></td>'+
			 ' </tr>'+
			 ' <tr>'+
			  '  <td style="text-align:center">Người xuất<br><span class="ghichukyten">(Ký, ghi rõ họ tên)</span></td>'+
			 '   <td style="text-align:center"></td>'+
			   ' <td style="text-align:center">Người nhận<br><span class="ghichukyten">(Ký, ghi rõ họ tên)</span></td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td><br><br><br><br></td>'+
				'<td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
			  '</tr>'+
			  '<tr>'+
			   ' <td>&nbsp;</td>'+
				'<td>&nbsp;</td>'+
				'<td style="text-align:center"> <strong></strong></td>'+
			  '</tr>'+
		 '   </table>'+
	  '  </div>');
	}
}
function addtable(page){
	var page=page+1;
	$("#tongthe").append('<div id="page_'+page+'" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">'+
	'<table id="bang_'+page+'" width="700px" cellpadding="0" cellspacing="0" border="1">'+
         ' <tr>'+
           ' <th width="50px">STT</th>'+
            '<th width="50px">Mã</th>'+
            '<th width="430px">Tên thuốc</th>'+
            '<th width="70px">ĐVT</th>'+
            '<th width="100px">Số lượng</th>'+
            '<th width="100px">Số lô HT</th>'+
            '<th width="100px">Số lô NSX</th>'+
          '</tr>'+
          '<tbody id="tbody_'+page+'">'+
          '</tbody>'+
        '</table>');
	window.page=page;
}
</script>
</html>
