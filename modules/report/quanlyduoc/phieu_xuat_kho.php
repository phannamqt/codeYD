<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phiếu xuất kho</title>
<style>
	body{
		width:100%;
		margin:auto;
		padding-left:3px;
		overflow-y:auto;	
		font-family:"Times New Roman", Times, serif;
		font-size:14px;				
	}
	label,input,table,div{
		font-family:"Times New Roman", Times, serif!important;	
		font-size:14px;
		letter-spacing:0px;		 		
	}
	div#info label{		 
		letter-spacing:0px;
		font-weight:normal;
		text-align:left!important;
		display:inline-block;
		width:100px;
	}	 
	.header{
		margin:0auto;
		padding-top:3px;
		width:100%;
		height:120px;		 
	}	 
	#center{
		 
		font-weight:600;
		margin-top:0px;		
	}	
	table{
		margin-top: 5px;
		border-top:1px solid #000;
		border-right:1px solid #000;		
	}
	table td{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;		 
	}
	table th{
		border-left:1px solid #000;
		border-bottom:1px solid #000;
		padding:2px 2px;
		}
	.kovien{
		border:none;
		width:748px;
		}	
	.aaa{
		word-wrap: break-word ;
		display: block; width: 640px; 
		}
	.inhoa{
		font-weight:bold;
		font-size:14px;
		}
	input{
		border:none;
	}
	.footer{
		width:100%;
		vertical-align:top;	
			
	}
	.footer div{
		width:145px;
		display:inline-block;	
		vertical-align:top;
		text-align:left;		
	}
	 
</style>
</head>

<body>
<div align="center" >	 
    <div class="header">
    	  <div style="float:left">
              <div><label class="inhoa"><?php echo $_SESSION["com"]["TenBenhVien"]?></label></div>
              <div><label>Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?></label></div>
              <div><label>SĐT: <?php echo $_SESSION["com"]["SoDT"]?></label></div>
          </div><br style="line-height:60px;" /> 
          <div id="center">
          	<div style="font-size:20px">PHIẾU XUẤT KHO</div>
            <div><label style="font-style:italic">Ngày </label><label style="font-style:italic">XX</label><label style="font-style:italic"> tháng </label><label style="font-style:italic">XX  </label><label style="font-style:italic"> năm </label><label style="font-style:italic">XXXX</label></div>
            <div style="font-size:13px;">
            <label class="inhoa">Mã PXK: </label><label>TEST</label>						
            </div>
          </div>
     </div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px; border:none">
         <tr>
             <td style="width:93px;border:none">Người giao dịch</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"><input type="text" id="ngiaodich" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  						value="TEST"/></td>
         </tr>
         <tr>
             <td style="width:93px;border:none">Nhà cung cấp</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" id="ncc" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
         <tr>
             <td style="width:93px;border:none">Địa chỉ</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
          <tr>
             <td style="width:93px;border:none">Xuất tại kho</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
         <tr>
             <td style="width:93px;border:none">Loại xuất</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
         <tr>
             <td style="width:93px;border:none">Ngày lập phiếu</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
         <tr>
             <td style="width:93px;border:none">Ghi chú</td>
             <td style="width:3px;border:none">:</td>
             <td style="border:none"> <input type="text" style="width:640px; border:none; border-bottom:1px dotted #000" readonly="readonly"  value="TEST"/>	 </td>
         </tr>
     </table>
     <div style="height:10px"></div>
	 <table  style="width:750px" border="0" cellpadding="0" cellspacing="0">
     	<tr>
            <th align="center" style="width:7px"><label class="inhoa">STT</label></th>
            <th align="center" style="width:333px"><label class="inhoa">Tên thuốc - VTYT</label></th>
            <th align="center" style="width:50px"><label class="inhoa">ĐVT</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Lô nội bộ</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Lô NSX</label></th>
            <th align="center" style="width:50px"><label class="inhoa">S.Lượng</label></th>
            <th align="center" style="width:70px"><label class="inhoa">Đơn giá</label></th>
            <th align="center" style="width:90px"><label class="inhoa">Thành tiền</label></th>
        </tr>
         <tr>
        	<td align="center">x</td>
            <td align="left">TEST xxxx</td>
            <td align="left">xcc</td>
            <td align="left">xxxxx2123</td>
            <td align="left">xxxxx2123</td>
            <td align="right" >43234</td>
            <td align="right" >2342</td>
            <td align="right" >21324234</td>
       	</tr>
        <?php
			/*$stt=1;
			$total=0;
			for ($ii=0;$ii<=count($_POST["Id"])-1;$ii++){			 								  
					echo "<tr>";
					echo "<td align=" . '"'. "center".'"'.">".$stt."</td>";
					echo "<td><label>".$_POST["Id"][$ii]["TenBietDuoc"]."</label></td>";
					echo "<td align=" . '"'. "center".'"'."><label>".$_POST["Id"][$ii]["TenDonViTinh"]."</label></td>";
					echo "<td align=" . '"'. "center".'"'."><label>".$_POST["Id"][$ii]["SoLoHeThong"]."</label></td>";
					echo "<td align=" . '"'. "center".'"'."><label>".$_POST["Id"][$ii]["SoLoNhaSanXuat"]."</label></td>";
					echo "<td align=" . '"'. "right".'"'."><label>".number_format($_POST["Id"][$ii]["SoLuong"])."</label></td>";
					$parts = explode('.', $_POST["Id"][$ii]["DonGia"]);
					echo "<td align=" . '"'. "right".'"'."><label>".number_format($parts[0])."</label></td>";
					echo "<td align=" . '"'. "right".'"'."><label>".number_format($_POST["Id"][$ii]["ThanhTien"])."</label></td>";
				 echo "</tr>";
				$stt=$stt+1; 	
				$total=$total+$_POST["Id"][$ii]["ThanhTien"];	
		}
			
			
			
			/* foreach ($tam2 as $row)
			 {
				 echo "<tr>";
					echo "<td>".$stt."</td>";
					echo "<td>".$row["TenBietDuoc"]."</td>";
					echo "<td>".$row["TenDonViTinh"]."</td>";
					echo "<td>".$row["SoLoHeThong"]."</td>";
					echo "<td>".$row["SoLoNhaSanXuat"]."</td>";
					echo "<td>".$row["SoLuong"]."</td>";
					echo "<td>".$row["DonGia"]."</td>";
					echo "<td>".$row["ThanhTien"]."</td>";
					echo "<td>"; echo($row["NgaySanXuat"]->format('d-m-Y')); echo"</td>";
					echo "<td>"; echo($row["NgayHetHan"]->format('d-m-Y')); echo "</td>";
				 echo "</tr>";
				$stt=$stt+1; 
			}*/
		 ?>
        <tr bgcolor="#CCCCCC">
            <td colspan="7" align="center"><label class="inhoa">Tổng cộng </label></td>
            <td align="right"><label class="inhoa"><?php /*echo number_format($total)*/?></label></td>
        </tr>
     </table>
     <div style="height:7px"></div>	
     <div><label>Tổng số tiền bằng chữ: </label> <input type="text" style="width:590px; font-style:italic; font-family:'Times New Roman', Times, serif;
     font-size:14px" name="" id="tongtien" value="123456" /></div>
     <div><div style="margin-left:570px;font-style:italic"><label>Ngày </label><label><?php echo date("d");?></label><label> tháng </label><label><?php echo date("m");?></label><label> năm </label><label><?php echo date("Y");?></label></div></div>
     <table cellpadding="0" cellspacing="0" border="0" style="width:750px; border:none">
		<tr>
        	<th style="width:150px;border:none">Kế toán trưởng</th>
            <th style="width:150px;border:none">Người lập phiếu</th>
            <th style="width:150px;border:none">Người giao hàng</th>
            <th style="width:150px;border:none">Thủ kho</th>
            <th style="width:150px;border:none">Giám đốc</th>
        </tr>
        <tr>
            <td style="width:150px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label></label></div>
            </td>
            <td style="width:150px;border:none" align="center">
                <div style="height:70px"></div>
                <div id="nglapphieu"><label></label></div>
            </td>	
            <td style="width:150px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label></label></div>
            </td>	
            <td style="width:150px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label></label></div>
            </td>	
            <td style="width:150px;border:none" align="center">
                <div style="height:70px"></div>
                <div><label>Trần Hùng</label></div>
            </td>	
        </tr>	       
     </table>
</div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function() { 
 create_report(close_report,<?php echo "'".$_GET["type"]."'" ?>)
});
function create_report(callback,_type){	
 
	$("#tongtien").val(toWords($("#tongtien").val().toString())+"đồng chẵn");
	/*window.NCC = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_NCC=<php echo $_POST["ID_NCC"]?>&status=3&tables=DM_NhaCungCap&id=TenNCC&name=NguoiLienHe', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
	$.post( "resource.php?module=web_services&function=get_hovatenchucdanh&status=2&action=index&id=<php echo $_POST["ID_NhanVien"]?>", function( data ) {
	$("#nglapphieu").text(data);
	});
	var n = window.NCC.split(":");
		$("#ncc").text(n[0]);
		$("#ngiaodich").text(n[1]);
		if(_type=='print'){
			window.print();
			callback();
		}*/
}
function close_report(){	 
	self.close()   
}
</script>
