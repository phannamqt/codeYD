<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
$id_nhanvien =563;
$thang =1;
$nam =2016;



$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call Gd2_GetDiemNhanXetAndThuongKD (?,?,?)}"; 
$params = array($id_nhanvien,$thang,$nam);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly 
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc
?>



<style type="text/css">
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font-size:15px!important;
 font-family:Arial, Helvetica, sans-serif;
 margin-bottom: 0px !important;
 margin-top: 5px !important;
} 

#nxet{width:auto;
}
body
{
	line-height: 1.0em;
	 overflow: scroll;
}
.diem{
    display: inline-block;
}
#hor-minimalist-a
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	background: #fff;
	margin: 45px;
	width: 480px;
	border-collapse: collapse;
	text-align: left;
}
#hor-minimalist-a th
{
	font-size: 14px;
	font-weight: normal;
	color: #039;
	padding: 10px 8px;
	border-bottom: 2px solid #6678b1;
}
#hor-minimalist-a td
{
	color: #669;
	padding: 9px 8px 0px 8px;
}
#hor-minimalist-a tbody tr:hover td
{
	color: #009;
}


#hor-minimalist-b
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	background: #fff;
	margin: 45px;
	width: 480px;
	border-collapse: collapse;
	text-align: left;
}
#hor-minimalist-b th
{
	font-size: 14px;
	font-weight: normal;
	color: #039;
	padding: 10px 8px;
	border-bottom: 2px solid #6678b1;
}
#hor-minimalist-b td
{
	border-bottom: 1px solid #ccc;
	color: #669;
	padding: 6px 8px;
}
#hor-minimalist-b tbody tr:hover td
{
	color: #009;
}






#box-table-a
{
	font-family: "Arial", "Arial", Sans-Serif;
	font-size: 12px;
	margin: 10px;
	width: auto;
	text-align: left;
	border-collapse: collapse;
}
#box-table-a th
{
	font-size: 13px;
	font-weight: normal;
	padding: 8px;
	background: #b9c9fe;
	border-top: 4px solid #aabcfe;
	border-bottom: 1px solid #fff;
	color: #039;
}
#box-table-a td
{
	padding: 8px;
	background: #e8edff; 
	border-bottom: 1px solid #fff;
	color: #669;
	border-top: 1px solid transparent;
}
#box-table-a tr:hover td
{
	background: #d0dafd;
	color: #339;
}


#box-table-b
{
	font-family: "Arial", "Arial", Sans-Serif; Sans-Serif;
	font-size: 12px;
	margin: 10px;
	width: auto;
	text-align: center;
	border-collapse: collapse;
	border-top: 7px solid #9baff1;
	border-bottom: 7px solid #9baff1;
	
}
#box-table-b th
{
	font-size: 13px;
	font-weight: normal;
	padding: 8px;
	background: #e8edff;
	border-right: 1px solid #9baff1;
	border-left: 1px solid #9baff1;
	color: #039;
}
#box-table-b td
{
	padding: 8px;
	background: #e8edff; 
	border-right: 1px solid #aabcfe;
	border-left: 1px solid #aabcfe;
	color: #669;
}

</style>
</head>
<body>

<h3 align="center">ĐÁNH GIÁ NHÂN VIÊN
</H3>
<div align="center">

  <table id="box-table-a" summary="Employee Pay Sheet">
    <thead>
      <tr>
        <th scope="col"><div align="left">Thông tin</div></th>
        <th scope="col"><div align="center">Chi tiết</div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div align="left">Họ tên</div></td>
        <td><div align="center"><?=$tam[0]["HoTen"] ?></div></td>
      </tr>
      <tr>
        <td><div align="left">Chức vụ</div></td>
        <td><div align="center"><?=$tam[0]["ChucVu"] ?></div></td>
      </tr>
      <tr>
        <td><div align="left">Nơi công tác</div></td>
        <td><div align="center"><?=$tam[0]["NoiCongTac"] ?></div></td>
      </tr>
      <tr>
        <td><div align="left">Người nhận xét</div></td>
        <td><div align="center"><?=$tam[0]["NguoiCham"] ?></div></td>
      </tr>
    </tbody>
    
  </table>
  <fieldset id="nxet">
    <legend><strong>I. Nhận xét</strong></legend>
    
<pre style="text-align:left">
<?php echo $tam[0]["NhanXet"] ?>
</pre>
  
  </fieldset>
  <p align="left"><strong>II. Chấm điểm</strong></p>
  <table id="box-table-b" width="200" border="0">
    <thead>
      <tr>
        <th scope="col"><div align="center"><strong>Tiêu chí</strong></div></th>
        <th scope="col"><div align="center"><strong>Điểm</strong></div></th>
        <th scope="col"><div align="center"><strong>Tiêu chí</strong></div></th>
        <th scope="col"><div align="center"><strong>Điểm</strong></div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div align="left">Tính chất và khối lượng công việc (1)</div></td>
        <td><div align="center">
          <?=$tam[0]["A"] ?>
        </div></td>
        <td><div align="left">Quan hệ giao tiếp với đồng nghiệp cùng bộ phận (7)</div></td>
        <td><div align="center">
          <?=$tam[0]["G"] ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Mức độ hoàn thành công việc (2)</div></td>
        <td><div align="center">
          <?=$tam[0]["B"] ?>
        </div></td>
        <td><div align="left">Quan hệ giao tiếp với đồng nghiệp khác bộ phận/ khách hàng (8)</div></td>
        <td><div align="center">
          <?=$tam[0]["H"] ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Tinh thần trách nhiệm trong công việc đối với công ty (3)</div></td>
        <td><div align="center">
          <?=$tam[0]["C"] ?>
        </div></td>
         <td><div align="left">Kĩ năng làm việc theo nhóm và mở rộng công việc (9)</div></td>
        <td><div align="center">
          <?=$tam[0]["I"] ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Khả năng làm việc độc lập và sự linh hoạt trong công việc (4)</div></td>
        <td><div align="center">
          <?=$tam[0]["D"] ?>
        </div></td>
        <td><div align="left">Thâm niên (10)</div></td>
        <td><div align="center">
          <?=$tam[0]["K"] ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Kĩ năng làm việc theo nhóm và mở rộng công việc (5)</div></td>
        <td><div align="center">
          <?=$tam[0]["E"] ?>
        </div></td>
        <td><div align="left">Bằng cấp (11)</div></td>
        <td><div align="center">
          <?=$tam[0]["L"] ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Lập kế hoạch công việc và làm báo cáo với cấp trên (6)</div></td>
        <td><div align="center">
          <?=$tam[0]["F"] ?>
        </div></td>
        <td><div align="left">Thời gian gắn bó Family (12)</div></td>
        <td><div align="center">
          <?=$tam[0]["M"] ?>
        </div></td>
      </tr>
    </tbody>
  </table>
  <table id="box-table-a" summary="Employee Pay Sheet">
    
    <tbody>
      <tr>
        <td width="346"><div align="left">Tổng điểm nhận xét=(1) X [(2)+(3)+(4)+(5)+(6)] + (7)+(8)+(9)+(10)+(11)+(12)</div></td>
        <td width="150"><div align="center"> <?=$tam[0]["TongDiemNhanXet"] ?></div></td>
      </tr>
      <tr>
        <td><div align="left">Tổng điểm</div></td>
        <td><div align="center">350</div></td>
      </tr>
      <tr>
        <td>Giờ công</td>
        <td><div align="center">208</div></td>
      </tr>
      <tr>
        <td><div align="left">Lương Kinh Doanh</div></td>
        <td><div align="center">4.000.000</div></td>
      </tr>
      <tr>
        <td>Tỉ lệ hưởng LKD</td>
        <td>80%</td>
      </tr>
      <tr>
        <td>Ghi chú</td>
        <td>Vi phạm quy định mang thai</td>
      </tr>
      <tr>
        <td><div align="left"><strong>Tổng Lương Kinh Doanh thực nhận</strong></div></td>
        <td><div align="center"><strong>4.000.000</strong></div></td>
      </tr>
    </tbody>
  </table>
</div>
<!--<p align="center">Giám đốc Bệnh Viện Gia Đình</p>
<p align="center">&nbsp;</p>-->
</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180
	 print_preview();
	});
</script>
</html>