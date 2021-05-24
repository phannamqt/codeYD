
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["id_benhnhan"];
		echo "</script>";
	}
	}
		


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.sid=".$_GET["id_kham"];
		echo "</script>";
		
	}

?><head>

    <script src="js/jquery.fileDownload-master/src/Scripts/jquery.fileDownload.js"></script>
</head>
      

 

<style>
fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:98%;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:0px;
	   margin-right:0px;	   
	   margin-right: 0px;			 
	}
	#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	fieldset div{
		display:table;		
	}
	fieldset label{
		display:inline-block;
		/* width:50px;
		*/
		text-align:center;		 
	}
	fieldset input{		 
		width:40px; 
	}
	fieldset div div{
		display:table-cell;		
	}
	fieldset input{
		background:none!important;
		text-align:center;
		box-shadow:0px 0px 3px 0px #a0a0a0!important;
	    border:1px solid #919191!important;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;		
		margin-left:3px;
		padding:0px;
		font-size:12px;
		padding-bottom:2px;		 	
	}
	.ui-menu { 
	width: 300px;
	display:none;
	position:absolute;  	 
	box-shadow:0px 0px 3px #333;
	z-index:100000;  
	}
	 #rowed5 td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}	 
	 #rowed6 td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
 	#rowed4 td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	.thongtin_tongthe,.thongtin_chidinh{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		
		/* padding-left:20px;*/
		 
	 }
	 .fm-button{
     box-shadow:0px 0px 5px #383838;
     border:1px solid #919191;
      text-shadow: 0 0 0 rgba(0, 0, 0, 0.6) !important;
   }
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.renal{
		border: solid;
	   border-radius: 4px;
	   width:150px;
	   margin-left: 500px;
	    margin-top: -57px;
	     height: 58px;
	     float: right;
	     border-color: #DFD5D5;
	     border-width:1px;
	     margin-right: 3px;
	}
	.top{
		border: solid;
	   border-radius: 4px;
	   width:647px;
	     height: 35px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     margin-top: 2px;
	}
	.mid{
		border: solid;
	   border-radius: 4px;
	   width:647px;
	     height: 35px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     margin-top: 2px;
	}
	.navigator{
		 display:inline-block;
		 border:1px solid #327E04;
		 padding-top:6px;
		 margin-top:-4px;
		 margin-left:2px;
		 padding-bottom:2px;
		 padding-left:2px;
		 padding-right:1px; 
	}
	.navigator_title{
		display:inline-block;
		width:100px;
		text-align:center;
	}
	input[type="checkbox"]:focus {
	-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
	  box-shadow:  0px 0px 2px 2px #208AC8 !important;
	}
	.hinhchunhat{
    border: 1px solid #666;
    box-shadow: 0 0 3px #333;
    display: inline-block;
    height: 20px;
    margin-left: 5px;
    vertical-align: middle;
    width: 40px;
    background: #f9ab02 !important;;
	}
	#images_viewer{
		width: 800px; height: 700px;
	}
	.css-icon{
		cursor: pointer;
	    display: inline-block;
	    font-size: 24px;
	    margin-top: -19px;
	    position: absolute;
	    color: #0B3B0B;
	}
	.css-edit{
	    margin-left: 409px;
	}
	.css-print{
	    margin-left: 441px;
	}
</style>
<body>
	<div display="none" id="dialog-kqir">
	<label>Mô tả</label><br>
    Chọn mẫu
            <input type="text" id="template_title" name="template_title"  style="width:230px">
            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>-->
            <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
		<textarea id="ketqua_ir" lang="luu"style="width:710px;height:50px" ></textarea><br>
		<label>Kết luận</label><br>
		<textarea id="ketluan_ir"lang="luu" style="width:710px;height:50px"></textarea><br><br>
		<div id="image_id" style="width:710px;height:300px">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>  
        <input type="button" value="Lưu" id="luu_kqir" >
	</div>
	
	<input type="file" id="upload_input" style="visibility:hidden" value="Chọn file"  hidden>
    <form id="image_submit">
        <input type="hidden" name="action" value="single_image">
        <input type="hidden" name="default_name" id="default_name">  
        <input type="hidden" name="cmd" value="upload">
        <input type="hidden" name="target" value="f1_XA">    
        <input type="hidden" name="answer" value="42">  
        <input type="hidden" name="tenthumuc" id="tenthumuc">  
        <input type="hidden" name="profile" id="tcd" value="tcd"> 
        <input type='hidden'  id='anh'  name='image_data[]'>         		
	</form>
 <div class="top_form ui-widget-content" style="height:70px" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="height: 58px;width:687px!important">
 		<div style="width: 490px;">
 			<div class="form_row" >
        	<label style="text-align:center;width:50px">Hẹn gần</label><input lang='luu' id="giohentraketqua"name="giohentraketqua"style="width:100px" type="text"disabled>
        	<label style="text-align:center;width:50px">Hẹn xa</label><input lang='luu' id="giohentraketquaxa"name="giohentraketquaxa"style="width:100px" type="text"disabled>
        	<input type="button" value="Đã lấy BP" id="dalaybenhpham"/> 
    		<input type="button" value="Sửa" id="chinhsua"/> 
		</div>  
		<div class="form_row" >
			<label style="text-align:center">Người nhập kết quả:</label>
			<span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
			<input type="button" value="Đã thực hiện" id="dathuchien"style="margin-top: 1px;"/> 
    		<input type="button" value="Sàng lọc trước sinh" id="sangloctruocsinh"style="margin-top: 1px;"/> 
		</div>
		</div>  
		<div class="renal">
		<label style="text-align:center;margin-left:20px">H:</label><input lang='luu' align="center"id="height_1"name="height_1"style="width:25px;margin-left:2px;" type="text"disabled>
		<label style="text-align:center;margin-left:15px">W:</label><input lang='luu' align="center" id="weight_1"name="weight_1"style="width:25px;margin-left:2px;" type="text"disabled>
		<input type="button" value="RENAL,LDLC,LIPID" id="renal_ldlc"style="margin-top: 2px; margin-left: 20px; width: 120px;"/> 
		</div>     
    </div>
    
   
 </div> 
 
 <div id="panel_main">    

        <div class="ui-widget-content ui-layout-west">
                 	 
         		 <table id="rowed3" ></table>
         		 <table id="rowed4" ></table>
         		 <table id="rowed5" ></table>
    		
        </div>   

        <div class="ui-layout-center top_form ui-widget-content" >
        	<div class="top">
        		<div class="thongtin_luotkham" id="left_col" style="width: 604px;">
        			
	            	<span class="navigator" style="margin-top: 3px" >
	                <button id="first">bắt đầu</button>
	                <button id="prev">tới</button>
	                <span class="navigator_title"></span>
	                <button id="next">lui</button>
	                <button id="last">kết thúc</button> 
            		</span>
            		<label style="text-align:center">Giờ khám:</label>
            		<input type="text" id="giokham" disabled style="width:78px">
            		<input type="checkbox" id="inrutgon">
            		<label>In rút gọn</label>
					<span id="In_CoChuKy">
                    	<input type="checkbox" style="margin-left:5px" checked />
            			<label>In có chữ ký</label>
                    </span><br>	
            	<div>
            	</div>
			</div>
           		<button style="float:right; margin-top: -30px; margin-right: 6px;"id="xemin">Xem in</button>
				<button style="float:right; margin-top: -30px; margin-right: 75px;"id="reload">Reload</button>
            </div>
        	
            <div class="mid">

            <label style="text-align:left;margin-left: 10px;color:blue">Sample ID</label><input type="text" style="margin-left: 10px;text-align:center;color:red; font-size:12px!important;width: 215px!important;" id="ID_Sample" disabled="disabled" name="ID_Sample" ></input>
            	<label style="text-align:left;margin-left: 10px;">KQ</label><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"style="width: 40px!important;margin-top:5px" ></select>
            	<label style="text-align:left;margin-left: 10px;">Loại XN</label><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"style="width: 40px!important;" ></select>
            	<label style="text-align:left;margin-left: 10px;">Chỉ số</label><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"style="width: 40px!important;" ></select>
            	<label style="text-align:left;margin-left: 10px;">XN trùng</label><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"style="width: 40px!important;" ></select>

            </div>
        	<div class="bot">
        		 <table id="rowed6" ></table>
        		  <div id="prowed6"></div>  
            </div>    
	</div>
</div>
<ul id="menu" > 
		<li id='xoaketquaxetnghiem'><a id="xoaketqua" href="#"><span class="ui-icon ui-icon-trash"></span>Xóa kết quả xét nghiệm đã nhập</a></li>
		<li id='capnhatGioHenTra'><a id="capnhatGioHenTraAndThucHien" href="#"><span class="ui-icon ui-icon-calendar"></span>Cập nhật giờ trả KQ ,nơi thực hiện, vị trí lấy mẫu</a></li>
		
</ul>	
<div id="dialog-form" title="Thêm bản ghi" style="display:none">
	<table id="rowed7" ></table>
</div>
<div id="dialog-form3" title="Cập nhật giờ hẹn và nơi thực hiện(click đôi vào dòng nếu muốn sửa)" style="display:none">
	<table id="rowed8" ></table>
</div>
<div id="dialog-form2" title="Sàng lọc trước sinh" style="display:none">
	<div style="width:100%;height:120px">
	 <div style="width:460px;float:left">
	           <fieldset>
	                <legend>Thông tin bệnh nhân</legend>
	                	<table>
	                		<tr>
	                			<td>Cân nặng</td>
	                			<td><input  type="text" style="text-align:center" name="cannang" id="cannang" ></td>
	                			<td>IVF(Thụ tinh trong ống nghiệm)</td>
	                			<td><input  type="checkbox" name="thutinh" value="1"  id="thutinh" ></td>
	                		</tr>
	                		<tr>
	                			<td>Para</td>
	                			<td><input  type="text" style="width:20px;text-align:center" id="para1" maxlength="1">
                                    <input  type="text"  style="width:20px;text-align:center"  id="para2" maxlength="1">
                                    <input  type="text"   style="width:20px;text-align:center" id="para3" maxlength="1">
                                    <input  type="text"   style="width:20px;text-align:center" id="para4" maxlength="1">
	                			</td>
	                			<td>Tiểu đường</td>
	                			<td><input  type="checkbox"  value="1" name="tieuduong" id="tieuduong" ></td>
	                		</tr>
	                					
	                		<tr>
	                			
	                			<td>Ngày kinh cuối</td>
	                			<td>	                				<input  name="ngaykinhcuoi" style="text-align:center;width:50px" value="" type="text"   id="ngaykinhcuoi" >
	                			</td>
	                			<td>Hút thuốc</td>
	                			<td>	                				<input  type="checkbox" value="1" name="hutthuoc" id="hutthuoc" >
	                			</td>
	                		</tr>
	                		
	                	</table>
	                   
	           </fieldset>
	</div> 
	 <div style="width:500px;float:left;height:100px">
	           <fieldset  style="height: 100px; margin-left: 10px;">
	           			<legend>Chọn Test xét nghiệm</legend>
	                    <div style="width:100%"><input  type="checkbox" name="doubletest" value="1" id="doubletest" ><label> Double test (Quý 1: tuần thai 11-14 tuần)</label></div>
	                    <div style="width:100%"><input  type="checkbox"  name="tripletest" value="1" id="tripletest" ><label> Triple test(Quý 2: tuần thai 15-20 tuần)</label></div> 
	               	<br>
	               	Bác sĩ chẩn đoán: 
	               	<span class="custom-combobox">
                    	<input id="chandoan" name="chandoan"  type="text" style="width:70px;">
		            </span> 
		            <input id="chandoan1"  name="chandoan1" type="text" lang='luu' style="display:none" >
	           </fieldset>
	</div>
</div>
<div id="thai1" style="width:41%;float:left">
		<fieldset>
			<legend>Kết quả siêu âm thai 1</legend>
				<table width="405">
	                		<tr>
	                			<td  colspan="3">
	                				Ngày siêu âm	                			</td>
	                			<td width="149"><input  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text" style="text-align:center;width:50px" name="ngaysieuam" id="ngaysieuam"  /></td>
	                		</tr>
	                		<tr>
	                			<td width="92">
	                				Tuổi thai	                			</td>
	                			<td width="55">
	                				<input  type="text" style="width:20px;text-align:center" name="tuan" id="tuan" maxlength="2">
	                				Tuần                			  </td>
	                			<td width="121">
	                				<input  type="text" style="width:20px;text-align:center" name="ngay" id="ngay" maxlength="2">
	                				Ngày                			  </td>
	                		</tr>
	                		<tr>
	                			<td>
	                				Số lượng thai	                			</td>
	                			<td>
	                				<input  type="text" style="width:50px;text-align:center"name="soluongthai"  id="soluongthai" value="1" maxlength="1">	                			</td>
	                		</tr>
	                		<tr>
	                			<td colspan="3">
	                				Chiều dài đầu mông(CRL) mm	                			</td>
	                			<td>
	                				<input  type="text" name="chieudaidaumong1" style="text-align:center" id="chieudaidaumong1" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Độ mờ da gáy(NT)mm	                			</td>
	                			<td>
	                				<input  type="text" style="text-align:center" name="domodagay1" id="domodagay1" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Đường kính lưỡng đỉnh BPD(bipariental)mm	                			</td>
	                			<td>
	                				<input  type="text" style="text-align:center" name="duongkinh1" id="duongkinh1" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td >
	                				Khác (Others)	                			</td>
	                			<td  colspan="3">
	                				<input  type="text" style="width:288px" name="khac1" id="khac1" >	                			</td>
	                		</tr>
        </table>
		</fieldset>
	</div> 	
	<div id="thai2"style="width:44%;float:left;margin-left:10px"hidden>
		<fieldset style="height: 206px;">
			<legend>Kết quả siêu âm thai 2</legend>
				<table width="445">
	                		<tr>
                            <td></td>
                            <td width="24"></td>
                            <td width="170"></td>
                            <td></td>
                            </tr>
	                		<tr>
	                			<td colspan="3">
	                				Chiều dài đầu mông(CRL) mm	                			</td>
	                			<td width="144">
	                				<input  type="text" style="text-align:center" name="chieudaidaumong2" id="chieudaidaumong2" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Độ mờ da gáy(NT)mm	                			</td>
	                			<td>
	                				<input  type="text" style="text-align:center" name="domodagay2" id="domodagay2" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Đường kính lưỡng đỉnh BPD(bipariental)mm	                			</td>
	                			<td>
	                				<input  type="text"  style="text-align:center" name="duongkinh2" id="duongkinh2" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td width="87" height="91" >
	                				Khác (Others)	                			</td>
	                			<td  colspan="3">   
	                				<textarea style="width:345px;height:80px" name="khac2" id="khac2" ></textarea>
	                   			</td>
	                		</tr>
        </table>
		</fieldset>
	</div> 	
	<div id="thai3"style="width:44%;;margin-left:10px" hidden>
		<fieldset style="height: 206px;">
			<legend>Kết quả siêu âm thai 3</legend>
				<table width="445">
	                		<tr>
                            <td></td>
                            <td width="24"></td>
                            <td width="170"></td>
                            <td></td>
                            </tr>
	                		<tr>
	                			<td colspan="3">
	                				Chiều dài đầu mông(CRL) mm	                			</td>
	                			<td width="144">
	                				<input  type="text"  style="text-align:center" name="chieudaidaumong3" id="chieudaidaumong3" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Độ mờ da gáy(NT)mm	                			</td>
	                			<td>
	                				<input  type="text"  style="text-align:center" name="domodagay3" id="domodagay3" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td  colspan="3">
	                				Đường kính lưỡng đỉnh BPD(bipariental)mm	                			</td>
	                			<td>
	                				<input  type="text" style="text-align:center" name="duongkinh3" id="duongkinh3" >	                			</td>
	                		</tr>
	                		<tr>
	                			<td width="87" height="91" >
	                				Khác (Others)	                			</td>
	                			<td  colspan="3">
	                				<textarea style="width:345px;height:80px" name="khac3" id="khac3" ></textarea>                			</td>
	                		</tr>
        </table>
		</fieldset>
	</div> 
</div>
</body>
</html>
<script type="text/javascript">
var report_code=["SangLocTruocSinh","XetNghiem"];
var report_name=["Sàng lọc trước sinh","Xem in xét nghiệm"];
var arrary_enter=[];
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var trangthai;
var id_benhnhan;
var nhanvien_control;
var tenloaikham;
var gioitinh;
var data_xetnghiem="";
var _id_xetnghiem=[];
var dalaybenhpham2="";
var chuky=1;
 window.id_XNkhamUpdate=0;
$(document).ready(function() {	
openform_shortcutkey();
image_message();



window.loaikham = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_LoaiKham &id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	$("#luu_kqir").button();
	$("#inkqir").button();
	$("#ngaykinhcuoi").datepicker({dateFormat: $.cookie("ngayJqueryUi")});	
	$("#ngaysieuam").datepicker({dateFormat: $.cookie("ngayJqueryUi")});	
	init_data();
	number_textbox("#cannang");
        number_textbox("#tuan");
        number_textbox("#ngay");
        number_textbox("#soluongthai");
        number_textbox("#chieudaidaumong1");
        number_textbox("#domodagay1");
        number_textbox("#duongkinh1");
        number_textbox("#chieudaidaumong2");
        number_textbox("#domodagay2");
        number_textbox("#duongkinh3");
        number_textbox("#chieudaidaumong3");
        number_textbox("#domodagay3");
        number_textbox("#duongkinh3");
       number_textbox("#para1");
        number_textbox("#para2");
        number_textbox("#para3");
        number_textbox("#para4");
	$("#upload_input").change(function(e) {
			_folder_name_="LABO//"+ma_benhnhan;
		   imagesSelected(this.files,submit_file); 
		 
			
	});
	$( "#dialog-kqir" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-kqir" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
                $( "#dialog-kqir" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(60)).toFixed(0) );
                $("#ketqua_ir").val(ketqua);
                $("#ketluan_ir").val(ketluan);

				
            },
            buttons: {
           	}
            });
	$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
		 
		});



$( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(90)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
            modal: true,
            open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(38)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(82)).toFixed(0) );
                 
                
            },
            buttons: {
     

             Cancel: function() {
              $( this ).dialog( "close" );

               }
               }
            });








	$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(90)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
            modal: true,
            open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(36)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(82)).toFixed(0) );
                 
                
            },
            buttons: {
            Save: function() {
               
            	 $("#rowed7").jqGrid('saveRow', id_xetnghiem2);
            	 var myData = $('#rowed7').jqGrid('getRowData');
        		 myData= JSON.stringify(myData);
        		 dataToSend ='{';
		           dataToSend +='"data":' + myData ;
		            dataToSend += '}';
		            // alert(dataToSend);
		           dataToSend = jQuery.parseJSON(dataToSend);
			   		//alertObject(dataToSend);
        		 setTimeout(function(){							
						   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=updatecannamnu&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");	 
			                                             $("#dialog-form").dialog( "close" );
			                                            $("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
														 })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });					
						},200);
        		 
            },

             Cancel: function() {
              $( this ).dialog( "close" );
               }
               }
            });
	$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(90)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
            modal: true,
            open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(82)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(85)).toFixed(0) );
                 
                
            },
            buttons: {
            Save: function() {
                phancach="";
	            dataToSend ='{';
	            key1='';
	            i=0;
	             var a = $("#para1").val();
                 var b = $("#para2").val();
                 var c = $("#para3").val();
                 var d = $("#para4").val();
                 var e=a+"-"+b+"-"+c+"-"+d;
                // ngaykinhcuoi2= convert_to_datejs($("#ngaykinhcuoi").val())
	            // ngaykinhcuoi2=$.datepicker.formatDate('yy-mm-dd 00:00', new Date(ngaykinhcuoi2)); 
	             ngaysieuam2= convert_to_datejs($("#ngaysieuam").val())
	             ngaysieuam2=$.datepicker.formatDate('yy-mm-dd 00:00', new Date(ngaysieuam2)); 
	            $('#dialog-form2').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
	                if(i>0){
	                phancach=","; 
	                        }
	              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
	              i++;
	                });
	             dataToSend += phancach + '"para":"' + e + '"';
	             dataToSend += phancach + '"id_luotkham":"' + id_luotkham + '"';
	             dataToSend += phancach + '"ngaygiochandoan":"' + gio("current") + '"';
	             dataToSend += phancach + '"ngaykinhcuoi2":"' + $("#ngaykinhcuoi").val() + '"';
	             dataToSend += phancach + '"ngaysieuam2":"' +ngaysieuam2 + '"';
	             dataToSend +='}'; 
	            //alert(dataToSend);
        		  dataToSend = jQuery.parseJSON(dataToSend);
        		  //alertObject(dataToSend);
        		  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=sangloctruocsinh&hienmaloi=3',dataToSend)
											.done(function( gridData ) {	
																$.cookie("in_status", "print_preview"); 
																dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=phieusangloc&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=report&id_form=10",'SangLocTruocSinh');
																$(".frame_u78787878975f").css("width","793px");
																 })
																.fail(function() {
																tooltip_message( "Có lỗi trong quá trình cập nhật" );
																});
            },
            Print:function(){
              			if($("#cannang").val()=='' || $("#cannang").val()=='0')
            	{
            		alert('Nhập cân nặng bắt buộc');
            	}
            	else
            	{
            		$.cookie("in_status", "print_preview"); 
						dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=phieusangloc&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=report&id_form=10",'SangLocTruocSinh');
						$(".frame_u78787878975f").css("width","793px");
            	}
              },
             Cancel: function() {
              $( this ).dialog( "close" );
               }
              
               }
            });
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chandoan', '#chandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	window.nuocsanxuat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}	
	})
	$("#add_template").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
					 })
	$("#xemin").click(function(e){	
		var ID_xetnghiem="";
		 $('#rowed6 tr td[aria-describedby="rowed6_ChonIn"] input[type="checkbox"]').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				var tam2=$("#rowed6").jqGrid ('getCell', tam, 'ID_KetQuaXN');
				 if($(this).is( ":checked" )) {
				
				  ID_xetnghiem+=tam2+";";					 
				 }
			
		});
		var rutgon='';		
		if($('#inrutgon').is( ":checked" )===true){
			rutgon=1
		}else{
			rutgon=0
		}
		    $.cookie("in_status", "print_preview"); 
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=xetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=report&id_form=10&ID_xetnghiem="+ID_xetnghiem+'&inrutgon='+rutgon+'&chuky='+chuky,'XetNghiem');
			$(".frame_u78787878975f").css("width","793px");
	});
	$("#inkqir").click(function(e){	
		
		$.cookie("in_status", "print_preview"); 
		// var ketqua=jQuery.parseJSON(ketqua);
		
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=nhuomsoi_xetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham_rowed5+"&type=report&id_form=10",'XetNghiem');
		$(".frame_u78787878975f").css("width","793px");
		
	});
	$("#luu_kqir").click(function(e){	
		var ketqua=$("#ketqua_ir").val()+"|||"+$("#ketluan_ir").val()+" ";
		myData= '{id_kham:"' + id_kham_rowed5 + '"'+"," + 'ketqua:"' +ketqua+ '"}';
		//alert(myData);
		ketqua= JSON.stringify(ketqua);
		//alert(myData);
        		 dataToSend ='{';
		           dataToSend +='"ketqua":' + ketqua ;
		            dataToSend += '}';
		          dataToSend = jQuery.parseJSON(dataToSend);
		//alertObject(dataToSend);
						  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu_kqir&hienmaloi=3&id_kham='+id_kham_rowed5,dataToSend)
											.done(function( gridData ) {	
																tooltip_message( "Đã lưu OK" );
																$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
																$("#rowed4").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
																$("#dialog-kqir").dialog("close");
																 })
																.fail(function() {
																tooltip_message( "Có lỗi trong quá trình cập nhật" );
																});
	})
	create_grid();
	create_grid2();
	create_grid3();
	ketqua_xetnghiem();
	$("#xemchitiet2").change(function(event) {
      if($("#xemchitiet2").is(':checked')==false){
		  $( "[id^=rowed6ghead_1_]" ).each(function(){
       		 
			 $('#'+this.id +' .ui-icon-circlesmall-plus').click()
        });
     

      }else{
		  
		  $( "[id^=rowed6ghead_1_]" ).each(function(){
          $('#'+this.id +' .ui-icon-circlesmall-minus').click()
			   
        });

      }
    });
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	window.nhanvien3_complete=0;
	 //$('.nhanvien_button').button( {disabled:true});
	 $('.nhanvien_button').hide();
	 $('#nhanvien').attr("disabled", "disabled");
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	   $("#height_1").val($("#panel_chieucao").html()); 
	  $("#weight_1").val($("#panel_canang").html());  
	 // alert($('.profile_container:nth-child(7) .texts').text());
	 gioitinh= $('.profile_container:nth-child(2)  .texts').text();
	 age= $('.profile_container:nth-child(3)  .texts').text();
	  $("#cannang").val($('.profile_container:nth-child(8)  .texts').text());  
	 window.ma_benhnhan=$('.profile_container:nth-child(4)  .texts').text();
	});

	$("#panel_main").css("height",$(window).height()-75+"px");	
	$("#panel_main").css("width",$(window).width());			 
	$("#panel_main").fadeIn(1000); 
	create_layout();
	$(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_all&idbenhnhan="+id_benhnhan+"&sid="+window.sid, 
		function( data ) {
			data_luotkham=data;

		 	
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
				
					var tam1_cls=val[i]["cell"];
					
					_id_luotkham.push(tam1_cls[0]);	
					_id_luotkham_non_unique.push(tam1_cls[0]);
					
					
				}
				
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_luotkham=$.unique(_id_luotkham);
					
				navigator_load("end","first");			 
			
			});		
	});
	
	resize_control();
	
	//phanquyen();
});
function load_select1(){
	window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	$("#rowed3").setColProp('ID_Template', { editoptions: { value: xaphuong} });
	$('#ID_Template').empty();
	create_select("#ID_Template",xaphuong);
}

$(function() {
		$( "#left_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");

			
		});
		$( "#left_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#left_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#left_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
			
		});         
}); 
 
function navigator_load(_value,_click){
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}	
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){			
			var tam1_cls=val[i]["cell"];
			if(_id_luotkham[navigator_count]==tam1_cls[1]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'"></div>';				
				//window.idluotkham=tam1_cls[0];

			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}

	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	

}
function create_grid(){	
	window.nguoichidinh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_NoiThucHien&id=ID_NoiThucHien&name=TenNoiThucHien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nơi thực hiện');}}).responseText;
	//var filekqir3 = "<input type='button' value='Lưu' onclick='filekqir3()'\>";
	 $("#rowed3").jqGrid({
		url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idbenhnhan="+id_benhnhan+"&sid="+window.sid,
		datatype: "local",	
		colNames: ['','Tên xét nghiệm', 'Ngày chỉ định', 'Ngày hẹn trả','Nơi thực hiện','Vị trí lấy mẫu','Lưu'],
            colModel: [
  

            	{name: 'ID_Kham',width:"0%", index: 'ID_Kham', hidden: true},
                {name: 'TenLoaiKham',width:"15%", index: 'TenLoaiKham'},
                {name: 'NgayGioTao', index: 'NgayGioTao',width:"15%"},
                {name: 'NgayGioHenTraKQ',editable: true, index: 'NgayGioHenTraKQ',width:"15%"},
                {name: 'NguoiThucHien2',editable: true, width:"15%",index: 'NguoiThucHien2',edittype:"select", editoptions:{value:nguoichidinh},formatter: "select"},
                {name: 'ThongSoKyThuat',editable: true, index: 'ThongSoKyThuat',width:"20%"},
                
                {name: 'duongdanfile', index: 'duongdanfile', align: 'center',width:"7%", edittype: "button",hidden: false,formatter: function (cellValue, options, rowObject) {return "<input type='button' value='Lưu' onclick=\"filekqir3('" + rowObject[0] + "','" + rowObject[3]  + "','" + rowObject[4]  +"');\" />"}},
                
                
                
            ],


		loadonce: true,
		scroll: 1,	
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:100,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		multiselect: true,

		serializeRowData: function (postdata) { 		 	
	
		},
		onSelectRow: function(id){		
		jQuery('#rowed3').jqGrid('editRow', id, true);   
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},

		loadComplete: function(data) {	

		window.nhanvien_complete=1;
		var allRowsInGrid = $('#rowed3').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				 	jQuery("#rowed3").jqGrid('saveRow',allRowsInGrid[i]);
				    pid2 = allRowsInGrid[i].ID_Kham;
				    NgayGioHenTraKQ=allRowsInGrid[i].NgayGioHenTraKQ;
				   // NguoiThucHien2=allRowsInGrid[i].NguoiThucHien2;
				   //	var NguoiThucHien2=$("#"+allRowsInGrid[i]+"_NguoiThucHien2").val();
				    jQuery("#rowed3").jqGrid('setSelection',pid2);
				    	//alert(NguoiThucHien2);
				    
				    //se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='Làm đơn' onclick=\"lamdon('" + pid2 + "','" + NgayGioHenTraKQ  + "','" +  NguoiThucHien2  +"');\" />";
  					//$("#rowed3").jqGrid('setRowData', allRowsInGrid[i], {action: se});

				  }
		},	  
		caption: "<span style='color:red;box-shadow: 10px 10px 5px  #666633;'> FORM MỚI- XN CẦN NHẬP KQ- Sample ID "+window.sid+"</span>"
	});	
$('.cbox').trigger('click').attr('checked', true);
};

function checkBox(obj) {
  
  var xn= $("#checkAll:checked").val();
  
  if(xn==1){
  	 $('.check input').attr('checked',true);

  }
   else{
   	 $('.check input').attr('checked', false);
   }
}

function create_grid2(){


	 $("#rowed4").jqGrid({
		url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idbenhnhan="+id_benhnhan+"&sid="+window.sid,
		datatype: "local",	
		colNames: ["id_kham","id_benhnhan","id_xetnghiem",'Tên XN', 'Chỉ số', 'Kết quả','KQ LAB','Giá trị bình thường','','','',''],
            colModel: [
            	{name:"ID_Kham",index:"ID_Kham",hidden:true,width:50},
            	{name:"ID_BenhNhan",index:"ID_BenhNhan",hidden:true,width:50},
            	{name:"ID_XetNghiem",index:"ID_XetNghiem",hidden:true,width:50},
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', hidden: false,width:50,

                formatter:"select",edittype:"select",hidden:false,editoptions:{value:loaikham},summaryType: 'sum',},
                {name: 'TenXetNghiem', index: 'TenXetNghiem',hidden: false,width:150},
                {name: 'ketqua', index: 'ketqua',align:'center', hidden: false,editable: true,width:50},
                {name: 'KQHisLis', index: 'KQHisLis',align:'center', hidden: false,editable: false,width:50},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', hidden: false,width:100},
                {name: 'MoTa', index: 'MoTa', hidden: true,width:50},
                {name: 'tennhom', index: 'tennhom', hidden: true,width:50},
                {name: 'CoLuuKQInRieng', index: 'CoLuuKQInRieng', width: "100%", align: 'center',summaryType: 'sum',  hidden: true},
                {name:"MaBenhNhan",index:"MaBenhNhan",hidden:true,width:50},
                
            ],
	//

		loadonce: true,
		scroll: 1,	
 		cellEdit: true,
		cmTemplate: { sortable: false },
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 1000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'TenXetNghiem',
		height:220,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",
		grouping:true,
                groupingView : {
        				groupField : ['ID_LoaiKham'],
                        groupColumnShow : [false],
                        groupCollapse : false,
                        groupText: ['<b style="color:red"> Loại XN: {0}</b>\
                        <div cokqinrieng="{CoLuuKQInRieng}" id="{ID_LoaiKham};{1}" class="ui-state-error ui-state-hover subTotal "onClick=\"themketluan({ID_LoaiKham},{1});\" style="border:0;display:none">\
                        <i class="fa fa-pencil-square-o css-edit css-icon" aria-hidden="true" title="Thêm ảnh, mô tả và kết luận"></i>\
                        </div>'
                        ],
                },
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	

		},
		onSelectRow: function(id){		  
	
		 	$("#rowed4 #"+id+"_ketqua").focus();
		 	$("#rowed4 #"+id+"_ketqua").select();
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,id) {
			$(".ui-icon-pencil").trigger('click');
			//jQuery("#rowed4").jqGrid('editRow',ids[i]);

 		},//6386
		loadComplete: function(data,rowid) {	
			avgTotal();
			$( "[id^=rowed4ghead_0_]" ).each(function(){
       		 
			if($('#'+this.id +' td div').attr("cokqinrieng")!="0" ){
				kl=$('#'+this.id +' td div').attr("id");
				$("#"+kl).show();
			}
       			 });
			window.ids = $("#rowed4").getDataIDs();
			$(arrary_enter.toString()).unbind('keyup')
			arrary_enter.splice(0, arrary_enter.length-1)
			
			for (i=0;i<=ids.length-1;i++){

				jQuery("#rowed4").jqGrid('editRow',ids[i]);
				arrary_enter.push("#rowed4 #"+ids[i]+"_ketqua");
				$("#rowed4 #"+ids[i]+"_ketqua").css("text-align","center");
				if(i==(ids.length-1)){				

						setTimeout(function(){
						jQuery("#rowed4 #"+ids[0]+"_ketqua").focus();
						jQuery("#rowed4 #"+ids[0]+"_ketqua").select();
						},100);
						$("#rowed4").setSelection(ids[0]);

				}
			}
			$(arrary_enter.toString()).bind('keyup',function(e){
				//alert(arrary_enter);
				if (e.keyCode==13) {
					//alert(arrary_enter.indexOf("#rowed4 #"+e.target.id));
					$("#dathuchien").button( {disabled:false});
					if(arrary_enter.indexOf("#rowed4 #"+e.target.id)==arrary_enter.length-1){
				
						if(e.ctrlKey){
						//alert($("#rowed4 #"+e.target.id).val());
						$("#rowed4 #"+e.target.id).val($(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)-1]).val());
						//$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1]).val("111");
					}
					else{
						if(window.dem2=="0"){
						window.dem2="1";
						post_data();

						}
					}	

						
						
						
						
					}
					else{
					if(e.ctrlKey){
						//alert($("#rowed4 #"+e.target.id).val());
						$("#rowed4 #"+e.target.id).val($(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)-1]).val());
						//$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1]).val("111");
					}
					else{
							$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1]).focus();
						//alert(e.target.id.substring(0,12));
						a=arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1].split("#")[2];
						a=a.split("_");
						a2=a[0]+"_"+a[1];
						$("#rowed4").setSelection(a2);
					}
					
				}	
				}
				if(e.keyCode==40){
					$("#dathuchien").button( {disabled:false});
					if(arrary_enter.indexOf("#rowed4 #"+e.target.id)==arrary_enter.length-1){

					}
					else{
						$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1]).focus();
						$("#rowed4").setSelection(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1].split("_")[0].split("#")[2]);
						a=arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1].split("#")[2];
						a=a.split("_");
						a2=a[0]+"_"+a[1];
						$("#rowed4").setSelection(a2);
					}
				}
				if(e.keyCode==38){
					$("#dathuchien").button( {disabled:false});
					if(arrary_enter.indexOf("#rowed4 #"+e.target.id)==0){

					}
					else{
						$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)-1]).focus();
						a=arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)-1].split("#")[2];
						a=a.split("_");
						a2=a[0]+"_"+a[1];
						$("#rowed4").setSelection(a2);
					}
				}

			})
			window.nhanvien1_complete=1;	 
		},	  
		//caption: "Nhập kết quả xét nghiệm"

		caption:"<div style='float:right'><label class='diengiai'>Nhập KQ</label><button onclick=copyfromLab() style='text-align:center;margin-left: 180px;color:blue'>Copy from LAB to KQ</button></div>"
	});
		
};    
function copyfromLab()
{
	var ID_xetnghiem="";
		 $('#rowed4 tr td[aria-describedby="rowed4_KQHisLis"] ').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				var tam2=$("#rowed4").jqGrid ('getCell', tam, 'KQHisLis');
				if( $('#'+tam+'_ketqua').val()=="")
				{
				 $('#'+tam+'_ketqua').val(tam2);
				}
				
		});
		
}

function validText(value) {
var chaos = new Array ("'","~","@","#","$","%","^","&","*",";","/","\\","|","-");
var sum = chaos.length;
for (var i in chaos) {if (!Array.prototype[i]) {sum += value.lastIndexOf(chaos[i])}}
if (sum) {
alert("Một số phần không nên có những ký tự đặc biệt như kiểu này: @ # $ % ^ * ~ ");
return false;
}
$(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1]).focus();
$("#rowed4").setSelection(arrary_enter[arrary_enter.indexOf("#rowed4 #"+e.target.id)+1].split("_")[0].split("#")[2]);
}
function resize_control(){
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#rowed3").setGridWidth($(".ui-layout-west").width()-10);
	$("#rowed3").setGridHeight($(".ui-layout-west").height()/3-100);
	$("#rowed4").setGridWidth($(".ui-layout-west").width()-10);
	$("#rowed4").setGridHeight($(".ui-layout-west").height()/3+27);
	$("#rowed5").setGridWidth($(".ui-layout-west").width()-10);
	$("#rowed5").setGridHeight($(".ui-layout-west").height()/3-100);
	$(".top").css("width",$(".ui-layout-center").width());
	$(".mid").css("width",$(".ui-layout-center").width());
	$(".bot").css("width",$(".ui-layout-center").width());
	$("#rowed6").setGridWidth($(".ui-layout-center").width()-10);
	$("#rowed6").setGridHeight($(".ui-layout-center").height()-160);
	$("#panel_main").css("height",$(window).height()-75+"px");	
	$("#panel_main").css("width",$(window).width());		 
	$("#panel_main").fadeIn(1000); 
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"45%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"55%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  

		 
	});		 
}
function create_grid3(){	
	var filekqir = '<button id="kqir" class="chonfile">File KQIR</button>';

	 $("#rowed5").jqGrid({
		url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idbenhnhan="+id_benhnhan+"&sid="+window.sid,
		datatype: "local",	
		colNames: ['','Loại xét nghiệm', 'Dường dẫn File KQIR', 'Xem File KQIR',''],
            colModel: [
            	{name: 'ID_Kham', index: 'ID_Kham', hidden: true},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false},
                {name: 'duongdanfile', index: 'duongdanfile', align: 'center',width:100, edittype: "button",editable:true,hidden: false,formatter: function (cellValue, options, rowObject) {return filekqir}},
                {name: 'xemfile', index: 'xemfile', hidden: false},
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', hidden: true},
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'TenXetNghiem',
		height:100,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
		
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){	
			var rowData = $("#rowed5").getRowData(id);   
            window.id_loaikham2=rowData["ID_LoaiKham"];
            window.id_kham2=rowData["ID_Kham"];
            window.search_string=ma_benhnhan+"_"+id_loaikham2+"_"+id_kham2;
            window.diachi=rowData["xemfile"];
        
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,id) {
		
			window._default_name=search_string;
		window._tenthumuc="LABO//FileKQ//"+ma_benhnhan;
		
		_filetype='application/pdf|application/msword|application/vnd.openxmlformats-officedocument.wordprocessingml.document|image/bmp|image/jpeg';

		accept='application/msword|application/pdf|application/vnd.openxmlformats-officedocument.wordprocessingml.document|image/bmp|image/jpeg';
		 
		 parent.postMessage('upload_module;pages.php?module=images_control&view=image_upload&accept=accept&id_form=61&multi=false&action_upload=upload_module&tenthumuc='+_tenthumuc+'&default_name='+_default_name+'&profile=tcd&filetype='+_filetype+";"+_default_name , '*');
		
		
	
 		},
 		onCellSelect: function (rowid,iCol,cellcontent,e) {
 			
        },
		loadComplete: function(data) {	
			
                    window.nhanvien2_complete=1;
		},	  
		caption: "Nhập kết quả in riêng"
	});	
};
 $("#rowed5").click(function(e) {
 	//alert();
                var el = e.target;
                var iCol = $(el).index();
               var diachi2=$(el).html();
                	/*elem=42432543543;
				  dialog_main("" , 80, 85, elem, "file_manager/elfinder_ehealth.php?profile=tcd&tenthumuc=LABO//FileKQ//"+ma_benhnhan)
				$(".frame_42432543543").css("width","1000px");*/
				    //stop the browser from following
				  setTimeout(function(){	
				  if(iCol=="3" && window.diachi!=""){
				  var diachi3=diachi2.split("\\");
				 //alert(diachi2.length);
				  for(i=0;i<=diachi3.length;i++){
				 
				  	if(i==diachi3.length){
				  		window.diachi=diachi3[i-1];
				  		//alert(diachi3[i-1]);
				  	}
				  }
				 // alert(window.diachi);
				// alert(decode64("ODkwNDVfMzc1Ml8xMjU3ODAyLmRvYw"));
				  	e.preventDefault();
				 window.location.href = 'file_manager/php/connector.php?tenthumuc=LABO//FileKQ//'+ma_benhnhan+'&answer=42&profile=tcd&cmd=file&target=f1_'+encode64(window.diachi);
					}
				},500);
   				
            });
function mysum(val, name, record)
{
return (val);
}
function nguoinhap(val, name, record)
{
	
	//alertObject(record);
return (val);
}
function GioHenTraKQ(val, name, record)
{
	
	//alertObject(record);
return (val);
}
function avgTotal3()
{
    $('.subTotal_kha').each(function() {

   

        var subTotal = 0;
        tam = $(this).attr("id").split(";");
            //if(typeof(tam[0])!="undefined"){
                tam[0] = tam[0].replace(".", ",");

                //if (parseFloat(tam[0]) != 100) {
                    subTotal = (parseFloat(tam[0]) / parseInt(tam[1]));
                //}
            //}

            $(this).attr("id",subTotal)
        });

}

function ketqua_xetnghiem() {
	var countrowed6=0;	
		  $("#rowed6").jqGrid({
            url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&sid="+window.sid,
            datatype: "local",
            colNames: ['','','','Ngày chỉ định','Loại XN','Chỉ số', 'KQ','KQ LAB' ,'Giá Trị BT', 'Người nhập', 'Người duyệt', 'Giờ KT','','In','','Hẹn','Nơi','',''],
            colModel: [
				{name: 'ID_KetQuaXN', index: 'ID_KetQuaXN',  search: false, width: "100%", editable: false, align: 'right', hidden: true},
            	{name: 'ID_XetNghiem', index: 'ID_XetNghiem',  search: false, width: "100%", editable: false, align: 'right', hidden: true},
             	{name: 'ID_Kham', index: 'ID_Kham',  search: false, width: "100%", editable: false, align: 'right', hidden: true,summaryType: 'sum'},
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                 {name: 'ID_LoaiKham', index: 'ID_LoaiKham', hidden: false,width:50,formatter:"select",edittype:"select",hidden:false,editoptions:{value:loaikham},summaryType: 'sum',},
                {name: 'TenXetNghiem', index: 'TenXetNghiem', width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "100%", align: 'center',  hidden: false,editable: true, formoptions: {}},
                {name: 'KQHisLis', index: 'KQHisLis', width: "100%", align: 'center',  hidden: false,editable: true, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'NguoiNhap', index: 'NguoiNhap', width: "100%", align: 'center',summaryType: nguoinhap, editable: false},
                {name: 'NguoiDuyet', index: 'NguoiDuyet', width: "100%", align: 'center',hidden:false},
                {name: 'GhiChu', index: 'GhiChu', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'Color', index: 'Color', width: "100%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
				{name:'ChonIn',index:'ChonIn', width:"15%", editable:true,stype: 'text', editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false}},
            	{name: 'MoTa', index: 'MoTa', width: "100%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
            	{name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', width: "100%", align: 'center',summaryType: 'sum',  hidden: true},
            	{name: 'TenNoiThucHien', index: 'TenNoiThucHien', width: "100%", align: 'center',summaryType: 'sum',  hidden: true},
            	{name: 'MaBenhNhan', index: 'MaBenhNhan', width: "100%", align: 'center', hidden: true},
            	{name: 'CoLuuKQInRieng', index: 'CoLuuKQInRieng', width: "100%", align: 'center',summaryType: 'sum',  hidden: true},
            ],
           loadonce: true,
		scroll: 1,	
		modal:true,	 	
		rowNum: 100,  	
		pager: '#prowed6',	
		rowNum: 1000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:350,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,

		sortorder: "asc",
           grouping: true,
            groupingView: {groupField: ['NgayGioTao', 'ID_LoaiKham'],
                groupOrder: ['desc', 'desc'],
                
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
               	groupText: ['<b style="color:red">Cđịnh {0}</b>', '<b style="color:blue">{0}</b><span class="subTotal_kha" id="{ID_Kham};{1}" >{ID_Kham};{1}</span>\
               	<div cokqinrieng="{CoLuuKQInRieng}" id="{ID_LoaiKham};{1}" class="ui-state-error ui-state-hover subTotal2 "onClick=\"themketluan2({ID_LoaiKham},{1});\" style="border:0;display:none"><i class="fa fa-pencil-square-o css-edit css-icon" aria-hidden="true" title="Thêm ảnh, mô tả và kết luận"></i></div>\
               	<div cokqinrieng="{CoLuuKQInRieng}" id="_{ID_LoaiKham};{1}" class="ui-state-error ui-state-hover subTotal2 "onClick=\"inKQNew({ID_LoaiKham},{1});\" style="border:0;display:none"><i class="fa fa-print css-print css-icon" aria-hidden="true" title="In KQ in riêng"></i></span></div>\
               	<input type="checkbox" style="float:right;margin-top: -15px;margin-right:40px" checked onclick="check_list(this)" class="check_list">'],
                groupCollapse: false,
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {       
            window.id_XNkhamUpdate=rowid    ;   
					if ($("#menu").width() + e.pageX > $(document).width()) {
						$("#menu").css('left', e.pageX - $("#menu").width() + "px");
					} else {
						$("#menu").css('left', e.pageX + "px");
					}
					if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
						$("#menu").css('top', e.pageY  - $("#menu").height() + "px");
					} else {
						$("#menu").css('top', e.pageY + "px");
					}
					$("#menu").show(300);

					$(document).bind("contextmenu", function(e) {
						return false;
					});
                //$("#stopxephang").addClass("disable");
                
            },
            
            loadComplete: function(data,rowid) {	
            avgTotal3();
            avgTotal2();
			$( "[id^=rowed6ghead_1_]" ).each(function(){
       		 //console.log('#'+this.id +' td div');
			if($('#'+this.id +' td div').attr("cokqinrieng")!="0"){
				//kl=$('#'+this.id +' td div').attr("id");
				
				$('#'+this.id +' td div').show();

				  ids = $('#rowed6').jqGrid('getDataIDs');
				   for (i = 0; i < ids.length; i++) {
				   	  var rowData = jQuery('#rowed6').getRowData(ids[i]);
				   	var NgayGioHenTraKQ = rowData['NgayGioHenTraKQ'];
                    var ID_Kham = rowData['ID_Kham'];
                    var TenNoiThucHien = rowData['TenNoiThucHien'];
                    
                    $('#'+ID_Kham ).html(NgayGioHenTraKQ+TenNoiThucHien);
                    countrowed6=$("#rowed6").jqGrid('getGridParam', 'records');


                     $("#rowed14").jqGrid('setCaption',  "Kết quả "+countrowed6  +"  <div id='xct' style='float:left; margin-top: -20px; margin-left: 10%;'><input type='checkbox'  id='xemchitiet2'   /> Thu gọn chi tiết-----------------------------Màu cam<div class='hinhchunhat'></div><label class='diengiai'> Chưa được duyệt</label></div>");
				   		}
			}
       			 });		
			 window.dem="0";
			 setTimeout(function(){	

			 	window.dem2="0";

			 	},2000);
			

			  $("#rowed6").bind('keyup',function(e){
				if (e.keyCode==13) {
					// $("#rowed6").jqGrid('saveRow', id_xetnghiem);
					/*alert(id_kqxn);
					alert($("#"+id_xetnghiem+"_KetQua").val());*/
					dataToSend ='{';
						 dataToSend += '"id_kqxn":"' + id_kqxn + '"';
						  dataToSend += "," + '"ketqua":"' +$("#"+id_kqxn+"_KetQua").val()+ '"';
						 dataToSend +='}'; 
						  dataToSend = jQuery.parseJSON(dataToSend);
						  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=ketqua&hienmaloi=3',dataToSend)
											.done(function( gridData ) {	
																$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
																$("#rowed6").jqGrid('saveRow', id_xetnghiem);
																 })
																.fail(function() {
																tooltip_message( "Có lỗi trong quá trình cập nhật" );
																});
				}
			  });
				window.nhanvien3_complete=1;
				 var ids = $('#rowed6').jqGrid('getDataIDs');
				var allRowsInGrid = $('#rowed6').jqGrid('getRowData');
				//alertObject(allRowsInGrid);
				 for (i = 0; i < allRowsInGrid.length; i++) {
					
				    pid2 = allRowsInGrid[i].Color;
				   	pid3 = allRowsInGrid[i].ID_KetQuaXN;
				    if(pid2=="Red"){
				    	$('#rowed6').jqGrid('setCell',pid3,"KetQua","",{color:'red'});
				    	 $('#rowed6').jqGrid('setCell',pid3,"KetQua","",{'font-weight':'bold'});
				    }else if(pid2=="Blue"){
				    	$('#rowed6').jqGrid('setCell',pid3,"KetQua","",{color:'blue'});
				    	 $('#rowed6').jqGrid('setCell',pid3,"KetQua","",{'font-weight':'bold'});
				    }else if(pid2=="Orange"){
				    	$('#rowed6').jqGrid('setCell',pid3,"KetQua","",{color:'orange'});
				    	 $('#rowed6').jqGrid('setCell',pid3,"KetQua","",{'font-weight':'bold'});
				    }else{
				    	$('#rowed6').jqGrid('setCell',pid3,"KetQua","",{color:'black'});
				    	 $('#rowed6').jqGrid('setCell',pid3,"KetQua","",{'font-weight':'bold'});
				    }


				     var rowData = jQuery('#rowed6').getRowData(ids[i]);
                     
                       var  nguoiduyet=rowData["NguoiDuyet"];
                       var  KetQua=rowData["KetQua"];
                     if (nguoiduyet=="" && KetQua!='')
                     {
                     	$('#rowed6').jqGrid('setCell',pid3,"KetQua","",{background:'#59596E'});
                     	 $('#rowed6').jqGrid('setCell',pid3,"NguoiDuyet","",{background:'orange'});
                     	 /*rowData.NguoiDuyet = "Chưa duyệt";
                     	 $('#rowed6').jqGrid('setRowData', ids[i], rowData);
                     	 $('#rowed6').jqGrid('setCell',pid3,"NguoiDuyet","",{color:'red'});*/
                     }
				    
				  }
				 
				},	  
            onSelectRow: function(id){		
				nguoiduyet=$("#rowed6").jqGrid ('getCell', id, 'NguoiDuyet');
				//alert(nguoiduyet);
				if($.trim(nguoiduyet)==""){
					//alert();
					 $("#rowed6").jqGrid('editRow',id);
				window.id_kham=$("#rowed6").jqGrid ('getCell', id, 'ID_Kham');
				window.id_kqxn=$("#rowed6").jqGrid ('getCell', id, 'ID_KetQuaXN');
				window.id_xetnghiem=$("#rowed6").jqGrid ('getCell', id, 'ID_XetNghiem');
				}
				
				},
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            	//alert(permission['updatecannamnu']);
            	if(permission['updatecannamnu']==1){
            		var rowData = jQuery(this).getRowData(rowId);
                 window.id_xetnghiem2 = rowData['ID_XetNghiem'];
            	 $('#dialog-form').dialog('open');
            	 update_cannamnu();
            	 $("#rowed7").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_update_cannamnu&id_xetnghiem="+id_xetnghiem2}).trigger("reloadGrid");	
            
            	}
            	
            	
            },
            caption: "Kết quả  <div id='xct' style='float:left; margin-top: -20px; margin-left: 10%;'><input type='checkbox'  id='xemchitiet2'   /> Thu gọn chi tiết-----------------------------Màu cam<div class='hinhchunhat'></div><label class='diengiai'> Chưa được duyệt</label></div>"
        });

    }
 $("#menu").menu();
 $(document).bind("contextmenu", function(e) {
	var selr = jQuery('#rowed6').jqGrid('getGridParam','selrow'); 
	var rowData = $("#rowed6").getRowData(selr);	
	return false;
 });
 $(document).bind("mouseup", function(e) {
	$("#menu").hide();
});
$("#xoaketqua").bind( "click", function(e) {

 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=xoaketqua&id_kham=' + id_kham).done(function(data)
        {
            if ($.trim(data) == '') {
                tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
				arrary_enter=[];
				 
            			$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed4").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed3").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	   
						$("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
            }
            else {
                tooltip_message("<?php get_text1("xoa_khongthanhcong") ?>");
            }
        });
})
$("#capnhatGioHenTraAndThucHien").bind( "click", function(e) {

 //alert();
  $('#dialog-form3').dialog('open');
   update_giohenvanoithuchien();
   $("#rowed8").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem_idkham&id_XNkhamUpdate="+ window.id_XNkhamUpdate}).trigger("reloadGrid");	
})
function loaikham_click(){

	$.each( data_luotkham, function( key, val ) {

		//$("#left_col div div").click(function(e) {
			
				for(i=0;i<val.length;i++){
					
					
					if(i==navigator_count){	
					
						id_luotkham=val[i]["cell"][0];
						window.idluotkham=val[i]["cell"][0];
				
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						$("#giohentraketqua").val(val[i]["cell"][5]);
						$("#giohentraketquaxa").val(val[i]["cell"][6]);
						$("#ID_Sample").val(val[i]["cell"][4]);

				 $.get( "pages.php?module=web_services&function=create_panel_new&id_luotkham="+id_luotkham+"&action=index", function( data ) {
				  $( ".patient_info" ).html( data );
				  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");

					});      

						
						parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';Xét Nghiệm - ;'+$('#panel_tenbn').text() , '*');
						
						$("#giokham").val(val[i]["cell"][1]);
						$("#dathuchien").button( {disabled:false});
						$("#dalaybenhpham").button( {disabled:false});
						$("#sangloctruocsinh").button( {disabled:false});
						$("#chinhsua").button( {disabled:false});
						$("#renal_ldlc").button( {disabled:false});
						$("#reload").button( {disabled:false});
						$("#xemin").button( {disabled:false});
						//$("#dathuchien").button( {disabled:true});
						$("#chinhsua").button( {disabled:false});
						
						reload23();
			
					} 
				}

		//});

	});
}
function reload23(){
						
					 
						$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed4").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed3").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	   
						$("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
						
}	
function color(){
	for(i=0;i<=_id_xetnghiem.length-1;i++){
	$.each( data_xetnghiem, function( key, val ) {
		
		})
	}
}	
function post_data(){
	
    
     	var ids = $('#rowed4').jqGrid('getDataIDs');
		
         dataToSend = '{"data":[';
		 phancach = ",";
		 phancach1 = "";
        for (j = 0; j < ids.length; j++) {
        	var rowData = $('#rowed4').getRowData(ids[j]);
          
          	ketqua2=$('#'+ids[j]+'_ketqua').val();
          	if(ketqua2!=""){
          	
          		        		
				
					dataToSend += phancach1 + '{"ID_Kham":"' + rowData.ID_Kham+ '"';	
						       
					
					dataToSend += phancach + '"ID_BenhNhan":"' + rowData.ID_BenhNhan+ '"';
					dataToSend += phancach + '"ID_XetNghiem":"' + rowData.ID_XetNghiem+ '"';
					dataToSend += phancach + '"ketqua":' +JSON.stringify(ketqua2)+'}';
					phancach1 = ",";
          	}
        };
      	 dataToSend += ']}';
          
            dataToSend = jQuery.parseJSON(dataToSend);
           $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");	

			                                             $("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham}).trigger("reloadGrid");	
						$("#rowed4").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed3").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	   
						$("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
			                                            })

       
}	
function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(nhanvien_complete==0)&&(nhanvien3_complete==0)){
		setTimeout(load_complete,50);
		return;
	}
	
	nhanvien1_complete=0;
	nhanvien2_complete=0;
	nhanvien_complete=0;
	nhanvien3_complete=0;

	
}	
$("#fileanh").click(function(){

	 $("#dialog-kqir").dialog( "close" );
		window._default_name=search_string;
		window._tenthumuc="LABO//FileKQ//"+ma_benhnhan;
		
		_filetype='application/pdf|application/msword';
		accept='application/msword|application/pdf';
		 
		 parent.postMessage('upload_module;pages.php?module=images_control&view=image_upload&accept=accept&id_form=61&multi=false&action_upload=upload_module&tenthumuc='+_tenthumuc+'&default_name='+_default_name+'&profile=tcd&filetype='+_filetype+";"+_default_name , '*');
		
})

function filekqir3(P1,P2,P3)
{


					var ids = $('#rowed3').jqGrid('getDataIDs');
					var phancach = "";
					var dataToSend='[';
					for(var i=0;i<=ids.length-1;i++){
						//jQuery("#rowed3").jqGrid('saveRow',ids[i]);
					//jQuery("#rowed3").jqGrid('saveRow',ids[i]);
						var rowData = $('#rowed3').jqGrid ('getRowData', ids[i]);
						var NguoiThucHien2=$("#"+ids[i]+"_NguoiThucHien2").val();
						var NgayGioHenTraKQ=$("#"+ids[i]+"_NgayGioHenTraKQ").val();
						var ThongSoKyThuat=$("#"+ids[i]+"_ThongSoKyThuat").val();
						//alert(NguoiThucHien2);   {name: 'ThongSoKyThuat',editable: true, index: 'ThongSoKyThuat',width:"20%"},
						dataToSend += phancach+'{';
						dataToSend += '"ID_Kham":' + JSON.stringify(rowData['ID_Kham'])+',';
						dataToSend += '"NgayGioHenTraKQ":' + JSON.stringify(NgayGioHenTraKQ)+',';
						dataToSend += '"ThongSoKyThuat":' + JSON.stringify(ThongSoKyThuat)+',';
						dataToSend += '"NguoiThucHien2":' + JSON.stringify(NguoiThucHien2);
						dataToSend += '}';
						phancach=',';
						
					}
					dataToSend+=']';
					postData='{"id":'+dataToSend+'}';
					postData=$.parseJSON(postData);
					//alertObject(postData);
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_ThucHien2&oper=update&hienmaloi=3',postData).done(function(data){
						
						
						
						$("#rowed3").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger("reloadGrid");	   
					//alert(id_luotkham+'---'+id_benhnhan);
							tooltip_message("Lưu thành công");
					})//$.post


}
function filekqir4(P1,P2,P3)
{


					var ids = $('#rowed8').jqGrid('getDataIDs');
					var phancach = "";
					var dataToSend='[';
					for(var i=0;i<=ids.length-1;i++){
		
						var rowData = $('#rowed8').jqGrid ('getRowData', ids[i]);
						var NguoiThucHien2=$("#"+ids[i]+"_NguoiThucHien2").val();
						var NgayGioHenTraKQ=$("#"+ids[i]+"_NgayGioHenTraKQ").val();
						var ThongSoKyThuat=$("#"+ids[i]+"_ThongSoKyThuat").val();
						if(!ThongSoKyThuat){ThongSoKyThuat=' '};
						//alert(NguoiThucHien2);
						dataToSend += phancach+'{';
						dataToSend += '"ID_Kham":' + JSON.stringify(rowData['ID_Kham'])+',';
						dataToSend += '"NgayGioHenTraKQ":' + JSON.stringify(NgayGioHenTraKQ)+',';
						dataToSend += '"ThongSoKyThuat":' + JSON.stringify(ThongSoKyThuat)+',';
						dataToSend += '"NguoiThucHien2":' + JSON.stringify(NguoiThucHien2);
						dataToSend += '}';
						phancach=',';
						
					}
					dataToSend+=']';
					postData='{"id":'+dataToSend+'}';
					postData=$.parseJSON(postData);
					//alertObject(postData);
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_ThucHien2&oper=update&hienmaloi=3',postData).done(function(data){
						
						
						
						
						$("#rowed8").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem_idkham&id_XNkhamUpdate="+ window.id_XNkhamUpdate}).trigger("reloadGrid");	
						$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
			
							tooltip_message("Lưu thành công");
							   $( '#dialog-form3' ).dialog( "close" );
					})//$.post


}
$("#filekqir").click(function(){

	 elem=42432543543;
	 dialog_main("" ,60,73, elem,"pages.php?module=canlamsang&view=nhap_ket_qua_xet_nghiem&action=ketquainrieng&header=top&type=report&id_form=10&id_kham="+id_kham_rowed5+"&id_benhnhan="+id_benhnhan)
	 $("#dialog-kqir").dialog( "close" );
})
$("#dalaybenhpham").click(function(e){	
		window.dalaybenhpham2="dalay";
		
	});	
	$("#chinhsua").click(function(e){	
		$("#dathuchien").button( {disabled:false});
		$("#chinhsua").button( {disabled:true});
		
	});	
	function gio(inputA){
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();
			if(inputA!="current"){
			if(String(inputA).match(' ')!=null){
			var bientam=inputA.split(" ");
			if(bientam[0].length>bientam[1].length){
			var ngaytam=bientam[0].split($.cookie("phancachngay"));
			var giotam=bientam[1].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}else if(bientam[1].length>bientam[0].length){
			var ngaytam=bientam[1].split($.cookie("phancachngay"));
			var giotam=bientam[0].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}
			}else if(String(inputA).match(':')!=null){
			var ngaytam=[];
			ngaytam[0]=dd,ngaytam[1]=mm,ngaytam[2]=yyyy;
			var giotam=inputA.split(":");
			}else{
			var ngaytam=inputA.split($.cookie("phancachngay"));
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			var giotam=[];
			giotam[0]=0;giotam[1]=0;
			}
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(giotam[1]),
			hour: parseInt(giotam[0]),
			day: parseInt(ngaytam[0]),
			month: parseInt(ngaytam[1])-1,
			year: parseInt(ngaytam[2])
			});
			}else{
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(curr_minute),
			hour: parseInt(curr_hour),
			day: parseInt(dd),
			month: parseInt(mm)-1,
			year: parseInt(yyyy)
			});
			thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
			}
			return thoigian;
} 	
$("#dathuchien").click(function(e){
	
	if(window.dem=="0"){
		window.dem="1";
		
	
			$("#dalaybenhpham").button( {disabled:true});
			$("#dathuchien").button({disabled:true});
			$("#chinhsua").button({disabled:false});
			post_data();
			phancach = ",";
			
			//alert(allRowsInGrid);
			setTimeout(function(){	
			var allRowsInGrid = $('#rowed6').jqGrid('getRowData');
			//alert(allRowsInGrid);						
						 for (i = 0; i < allRowsInGrid.length; i++) {
				    pid2 = allRowsInGrid[i].ID_Kham;
				      //dataToSend +='"id_kham":' + pid2 ;
				     dataToSend ='{';
				 dataToSend += '"id_kham":"' + pid2 + '"';
				  dataToSend += phancach + '"id_nguoithuchien":"' + $('#nhanvien1').val() + '"';
				  dataToSend += phancach + '"giothuchien":"' + gio("current") + '"';
				 dataToSend +='}'; 
				  dataToSend = jQuery.parseJSON(dataToSend);
				  //alertObject(dataToSend);
	   			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             //tooltip_message("Đã thực hiện xong việc nhập liệu");	 
			                                            $("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
														 })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
				}
				 		
		},200);
			
				
		 /*$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Đã thực hiện xong việc nhập liệu");	 
			                                             $("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+<?=$_SESSION["ThongTinBenhNhan"]["id_benhnhan"]?>}).trigger("reloadGrid");	
														 })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });*/
			
	
					
						
						
	}
	});	
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
window.nhanvien1_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function update_cannamnu() {
        $("#rowed7").jqGrid({
            url:'',
    		datatype: "local",   
            colNames: ['','Tên xét nghiệm','Cận nam 1', 'Cận nam 2', 'Cận nam 3','Cận nam 4','Cận nữ 1','Cận nữ 2','Cận nữ 3','Cận nữ 4','Red','Blue','Yellow','Giá trị bình thường'],
            colModel: [
            	{name: 'ID_XetNghiem', index: 'ID_XetNghiem', hidden: true,editable:true},
            	{name: 'TenXetNghiem', index: 'TenXetNghiem', hidden: false,width:"300%",editable:false},
                {name: 'CanNam1', index: 'CanNam1', hidden: false,editable:true},
                {name: 'CanNam2', index: 'CanNam2', hidden: false,editable:true},
                {name: 'CanNam3', index: 'CanNam3', hidden: false,editable:true},
                {name: 'CanNam4', index: 'CanNam4', hidden: false,editable:true},
                {name: 'CanNu1', index: 'CanNu1', hidden: false,editable:true},
                {name: 'CanNu2', index: 'CanNu2', hidden: false,editable:true},
                {name: 'CanNu3', index: 'CanNu3', hidden: false,editable:true},
                {name: 'CanNu4', index: 'CanNu', hidden: false,editable:true},
                {name: 'Red', index: 'Red', hidden: false,editable:true},
                {name: 'Blue', index: 'Blue', hidden: false,editable:true},
                {name: 'Yellow', index: 'Yellow', hidden: false,editable:true},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', hidden: false,editable:true,width:"400%"},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 70,
            width: 1030,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {

            },
            onSelectRow: function(id) {

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            	
            	 $("#rowed7").jqGrid('editRow', id_xetnghiem2, true);
            	 //alert($("#"+id_xetnghiem2+"_CanNam1").val());
            	 //number_textbox("#"+id_xetnghiem2+"_CanNam1");
            	 setTimeout(function(){							
						  number_textbox("#"+id_xetnghiem2+"_CanNam1");	
						 number_textbox("#"+id_xetnghiem2+"_CanNam2");	
						 number_textbox("#"+id_xetnghiem2+"_CanNam3");	
						 number_textbox("#"+id_xetnghiem2+"_CanNam4");	
						 number_textbox("#"+id_xetnghiem2+"_CanNu1");	
						 number_textbox("#"+id_xetnghiem2+"_CanNu2");	
						 number_textbox("#"+id_xetnghiem2+"_CanNu3");	
						 number_textbox("#"+id_xetnghiem2+"_CanNu4");			
						},200);
            },
        });
        }


 function update_giohenvanoithuchien() {
      
    window.nguoichidinh2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_NoiThucHien&id=ID_NoiThucHien&name=TenNoiThucHien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nơi thực hiện');}}).responseText;
	
	 $("#rowed8").jqGrid({
	
		url:'',
		datatype: "local",	
		colNames: ['','Tên xét nghiệm', 'Ngày chỉ định', 'Ngày hẹn trả','Nơi thực hiện','Vị trí lấy mẫu','Lưu'],
            colModel: [
  

            	{name: 'ID_Kham',width:"0%", index: 'ID_Kham', hidden: true},
                {name: 'TenLoaiKham',width:"15%", index: 'TenLoaiKham'},
                {name: 'NgayGioTao', index: 'NgayGioTao',width:"15%"},
                {name: 'NgayGioHenTraKQ',editable: true, index: 'NgayGioHenTraKQ',width:"15%"},
                {name: 'NguoiThucHien2',editable: true, width:"15%",index: 'NguoiThucHien2',edittype:"select", editoptions:{value:nguoichidinh2},formatter: "select"},
                {name: 'ThongSoKyThuat',editable: true, width:"15%",index: 'ThongSoKyThuat'},
                {name: 'duongdanfile', index: 'duongdanfile', align: 'center',width:"10%", edittype: "button",hidden: false,formatter: function (cellValue, options, rowObject) {return "<input type='button' value='Lưu' onclick=\"filekqir4('" + rowObject[0] + "','" + rowObject[3]  + "','" + rowObject[4]  +"');\" />"}},
                
                
                
            ],

        	hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 70,
            width: 1030,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {

            },
            onSelectRow: function(id) {
			jQuery('#rowed8').jqGrid('editRow', id, true); 
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

            },
        });
        }     


	$("#reload").click(function(){
		
						$("#rowed6").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idbenhnhan="+id_benhnhan+"&idluotkham="+id_luotkham+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed4").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
						$("#rowed3").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	   
						$("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan+"&sid="+window.sid}).trigger("reloadGrid");	
	})

	function imagesSelected(myFiles,callback) {
		 
		  var i,f;
		 // alert(myFiles.length) 
		 
		  for ( i = 0, f; f = myFiles[i]; i++) {
			var imageReader = new FileReader();
			imageReader.onload = (function(aFile) {
			  return function(e) {		 
			   //var span = document.createElement('span');
			   image_data=e.target.result;			  
			  // $("#image_submit").append("<input type='hidden'  id='anh'  name='image_data[]'>");
			   $('#anh').attr("value",""); 
			   $('#anh').attr("value",image_data);     
			   $("#default_name").val(search_string); 
			   $("#tenthumuc").val("LABO//"+ma_benhnhan); 
			   $("#kqir").attr("src",image_data);	
			 // alert($("#tenthumuc").val());	
			//alert(aFile.type)			    
			   check_file_type('application/msword;application/vnd.openxmlformats-officedocument.wordprocessingml.document',aFile.type);		

			  };
			})(f);
			imageReader.readAsDataURL(f);
			//console.log((i)+"=="+myFiles.length)	 
			/*if((i+1)==myFiles.length){
				
			}*/
		  }			 
		 callback();
}
function submit_file(){
	
	
	 var _tam=_folder_name_.split("//"); 
 $.getJSON( 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_, 
  function( data ){
    if (data["error"]=="errConf,errNoVolumes"){              
      $.get( 'file_manager/php/connector.php?profile=tcd&answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'&target=f1_XA&_=1387301727041', 
      function( data ){  
	            t=setTimeout(function(){     
		   		if(window.file_type==false){			 
					var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page			
					_status=$.ajax({
						url: 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=upload&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_,  //Server script to process data
						type: 'POST',
						 //This is just looks like bloat
						 
						// Form data
						// enctype: 'multipart/form-data',  <-- don't do this       
						data: formData,
						//Options to tell jQuery not to process data or worry about content-type.
						//cache: false, post requests aren't cached
						contentType: false,
						processData: false,
						async: false, success: function(data, result) { 	
						          		 
						 }}).responseText;	 			 
		  		}
	   },2000);
	            alert();
      });
    }else{
      t=setTimeout(function(){     
		   		if(window.file_type==false){			 
					var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page			
					_status=$.ajax({
						url: 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=upload&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_,  //Server script to process data
						type: 'POST',
						 //This is just looks like bloat
						 
						// Form data
						// enctype: 'multipart/form-data',  <-- don't do this       
						data: formData,
						//Options to tell jQuery not to process data or worry about content-type.
						//cache: false, post requests aren't cached
						contentType: false,
						processData: false,
						async: false, success: function(data, result) { 			           		 
						 }}).responseText;	 			 
		  		}
	   },2000);
    }

 }); 
	 
}
$("#sangloctruocsinh").click(function(){
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_para&idbenhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham, 
		function( data ) {
			$.each( data, function( key, val ) {		 
				  var para = val[0]["cell"][0]; 
				  var SoNgayThai = val[0]["cell"][1]; 
                       // alert(para);
                       if(para!=null){
                            
                            var rs=para.split("-");
                            $("#para1").val(rs[0]);
                            $("#para2").val(rs[1]);
                            $("#para3").val(rs[2]);
                            $("#para4").val(rs[3]);
                        }else{
                                $("#para1").val('');
                                $("#para2").val('');
                                $("#para3").val('');
                                $("#para4").val('');
                            }
                          $("#cannang").val($("#weight_1").val());     
                          $("#tuan").val(parseInt(SoNgayThai/7));
                          $("#ngay").val(SoNgayThai%7);
						  
						  if(val[0]["cell"][5]=="1"){		
						 					 
								$("#doubletest").prop('checked', true);
						  }
						  else{
								$("#doubletest").prop('checked', false);
						  }
						   $("#chieudaidaumong1").val( parseFloat(val[0]["cell"][2].replace(/\,/gi, '.')));
						   $("#domodagay1").val(parseFloat(val[0]["cell"][4].replace(/\,/gi, '.')));
						   $("#duongkinh1").val(parseFloat(val[0]["cell"][3].replace(/\,/gi, '.')));
						    $("#ngaysieuam").val(val[0]["cell"][6]);
						 	var chieudai=$("#chieudaidaumong1").val();
						 	var domo=$("#domodagay1").val();
						    var duongkinh=$("#duongkinh1").val();
						    chieudai=chieudai.replace("NaN","");
						    domo=domo.replace("NaN","");
						    duongkinh=duongkinh.replace("NaN","");
						     $("#chieudaidaumong1").val(chieudai);
						     $("#domodagay1").val(domo);
						     $("#duongkinh1").val(duongkinh);

						     if( $("#chieudaidaumong1").val()=="" && $("#domodagay1").val()=="" && $("#duongkinh1").val()!=""){
						     	$("#tripletest").prop('checked', true);
						     }	
						    
                          $("#soluongthai").val("1");
                        //  $("#chieudaidaumong1").val("");
                        //  $("#domodagay1").val("");
                        //  $("#duongkinh1").val("");
                          $("#khac").val("");
                          $("#thai2").hide();
						$("#thai3").hide();
						 $("#thutinh").prop('checked', false);
                        $("#tieuduong").prop('checked', false); 
                        $("#hutthuoc").prop('checked', false);
                        //$("#doubletest").prop('checked', false);
                       // $("#tripletest").prop('checked', false);
						//$("#chandoan1").val(<?=$_SESSION["user"]["id_user"]?>);
						setval('#chandoan','#chandoan1','#nhan_vien1',<?=$_SESSION["user"]["id_user"]?>);
		})
		})
	 $('#dialog-form2').dialog('open');

	 $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_sangloctruocsinh&id_luotkham="+id_luotkham, 
		function( data ) {
			$.each( data, function( key, val ) {
				var para = val[0]["cell"][1]; 
                       // alert(para);
                       if(para!=null){
                            
                            var rs=para.split("-");
                            $("#para1").val(rs[0]);
                            $("#para2").val(rs[1]);
                            $("#para3").val(rs[2]);
                            $("#para4").val(rs[3]);
                        }else{
                                $("#para1").val('');
                                $("#para2").val('');
                                $("#para3").val('');
                                $("#para4").val('');
                            }

				$("#cannang").val(val[0]["cell"][0]); 
				if(val[0]["cell"][2]=="1"){
					$("#thutinh").prop('checked', true);
				}
				else{
					$("#thutinh").prop('checked', false);
				}
				if(val[0]["cell"][3]=="1"){
					$("#tieuduong").prop('checked', true);
				}
				else{
					$("#tieuduong").prop('checked', false);
				}
				if(val[0]["cell"][4]=="1"){
					$("#hutthuoc").prop('checked', true);
				}
				else{
					$("#hutthuoc").prop('checked', false);
				}
				
				$("#ngaykinhcuoi").val(  val[0]["cell"][5]); 
				$("#ngaysieuam").val(val[0]["cell"][6]); 
				$("#tuan").val(val[0]["cell"][7]); 
				$("#ngay").val(val[0]["cell"][8]); 
				$("#soluongthai").val(val[0]["cell"][9]); 
				if(val[0]["cell"][9]=="2"){
					$("#thai2").show();
					$("#thai3").hide();
				}
				else if(val[0]["cell"][9]=="3"){
					$("#thai2").show();
					$("#thai3").show();
				}
				else{
					$("#thai2").hide();
					$("#thai3").hide();
				}
				$("#chieudaidaumong1").val(parseFloat(val[0]["cell"][10])); 
				$("#domodagay1").val(parseFloat(val[0]["cell"][11])); 
				$("#duongkinh1").val(parseFloat(val[0]["cell"][12])); 
				//alert(val[0]["cell"][11]);
				var chieudai=$("#chieudaidaumong1").val();
						 	var domo=$("#domodagay1").val();
						    var duongkinh=$("#duongkinh1").val();
						    chieudai=chieudai.replace("NaN","");
						    domo=domo.replace("NaN","");
						    duongkinh=duongkinh.replace("NaN","");
						     $("#chieudaidaumong1").val(chieudai);
						     $("#domodagay1").val(domo);
						     $("#duongkinh1").val(duongkinh);

				$("#khac").val(val[0]["cell"][13]); 
				if(val[0]["cell"][14]=="1"){
					$("#doubletest").prop('checked', true);
				}
				else{
					$("#doubletest").prop('checked', false);
				}
				if(val[0]["cell"][15]=="1"){
					$("#tripletest").prop('checked', true);
				}
				else{
					$("#tripletest").prop('checked', false);
				}
				
				//$("#chandoan1").val(val[0]["cell"][16]);
				setval('#chandoan','#chandoan1','#nhan_vien1',val[0]["cell"][16]);
				$("#chieudaidaumong2").val(val[0]["cell"][17]); 
				$("#domodagay2").val(val[0]["cell"][18]); 
				$("#duongkinh2").val(val[0]["cell"][19]); 
				$("#khac2").val(val[0]["cell"][20]); 
				$("#chieudaidaumong3").val(val[0]["cell"][21]); 
				$("#domodagay3").val(val[0]["cell"][22]); 
				$("#duongkinh3").val(val[0]["cell"][23]); 
				$("#khac3").val(val[0]["cell"][24]); 
			})
		})
})
function init_data(){
    $("#cannang").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);
           
	   $('#dialog-form2 input[type=text],#dialog-form2 textarea,#dialog-form2 select,#dialog-form2 button,#dialog-form2 input[type=checkbox],#dialog-form2 input[type=radio]').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#dialog-form2").eq(0).find(":input[type=text],button,textarea,select,:input[type=checkbox],:input[type=radio]");
                var idx = inputs.index(this);
                if (idx == inputs.length - 1) {	
                    
					if(inputs[0].nodeName!="SELECT"){
                                        inputs[0].select();
                        
					}else{
						inputs[0].focus();
					}
                } 
                else {		
					 //$(".ui-datepicker").hide();  			 
                    
					inputs[idx+1].focus();
					
					if(inputs[idx+1].nodeName!="SELECT"){
                                            inputs[idx+1].select();
                                          
					}
                                        
                                           
                }
			}	
            
        });
}
$('#soluongthai').keyup(function () {
	$("#thutinh").prop('checked', false);
	if($('#soluongthai').val()=="2"){
		$("#thai2").show();
		$("#thai3").hide();
	}
	else if($('#soluongthai').val()=="3"){
		$("#thai2").show();
		$("#thai3").show();
	}
	else{
		$("#thai2").hide();
		$("#thai3").hide();
	}
})
$("#renal_ldlc").click(function(){
	var tg="n";
	var chol="n";
	var hdlc="n";
	var ldlc;
	var Kq_createnin="n";
	//var Kq_createnin="0";
	var height_cal=$("#height_1").val();
	var weight_cal=$("#weight_1").val();

	 ids = $("#rowed4").getDataIDs();	
	 
	 for (i=0;i<=ids.length-1;i++){
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22219"){
					
					tg=$("#"+ids[i]+"_ketqua").val();
				}
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22218"){
					chol=$("#"+ids[i]+"_ketqua").val();
				}
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22220"){
					hdlc=$("#"+ids[i]+"_ketqua").val();
				}
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22221"){
					ldlc=$("#"+ids[i]+"_ketqua").val();
				}
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22227"){
					Kq_createnin=$("#"+ids[i]+"_ketqua").val();
				}

				//kha bổ sung ngày 19/5/16
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22376" ){
					
					if($("#"+ids[i]+"_ketqua").val()==""&&tg!="" && chol!=""&& chol!="n"&& tg!="n"){
						num=(parseFloat( chol)*0.387 + parseFloat(tg)*0.885)+4.2 ;
						
						$("#"+ids[i]+"_ketqua").val( Math.round(num * 100) / 100);
					}
					else
					{
						alert('Không tính được LIPID vì thiếu Cholesterol hoặc Triglyceride');
					}
				}
	}
	if(tg!="" && chol!="" && hdlc!=""&& hdlc!="n"&& chol!="n"&& tg!="n" ){
		 for (i=0;i<=ids.length-1;i++){
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22221" ){
					//alert(chol);
					if($("#"+ids[i]+"_ketqua").val()==""){
						num=parseFloat( chol) - parseFloat(hdlc) - (parseFloat(tg) / 5);
						$("#"+ids[i]+"_ketqua").val( Math.round(num * 100) / 100);
					}
				}
		}	
	}
	if(Kq_createnin!="" && Kq_createnin!="n"){
		if($("#height_1").val()=="" || $("#height_1").val()=="0" || $("#weight_1").val()=="" || $("#weight_1").val()=="0"){
			alert("Có loại xét nghiệm RENAL FUNCTION.Yêu cầu nhập chiều cao và cân nặng để tính toán!");
		}
		else{
			BSA = 0.007184 * Math.pow(height_cal,0.725) * Math.pow(weight_cal,0.425);	
			age_tam=age.split(' ');			
			if(typeof age_tam[1] != "undefined") {
				if(age_tam[1] == "Tháng") {
					age=Math.round(age_tam[0]/12);
				}
			}
			
			if(age<=15){
				for (i=0;i<=ids.length-1;i++){
							if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
								//alert($("#"+ids[i]+"_ketqua").val());
								if($("#"+ids[i]+"_ketqua").val()==""){
									$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.23 / parseFloat(Kq_createnin)) * 1.73 / BSA,0));
								}
							}
							if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22230" ){
								//alert($("#"+ids[i]+"_ketqua").val());
								if($("#"+ids[i]+"_ketqua").val()==""){
									$("#"+ids[i]+"_ketqua").val( 0.413 * height_cal / (parseFloat(Kq_createnin) / 88.4));
								}
							}
					}
			}
			else{

						if(gioitinh="Nam"){
							for (i=0;i<=ids.length-1;i++){
									if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
										//alert($("#"+ids[i]+"_ketqua").val());
										if($("#"+ids[i]+"_ketqua").val()==""){
											$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.23 / parseFloat(Kq_createnin)) * 1.73 / BSA));
										}
									}
									if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22229" ){
										if($("#"+ids[i]+"_ketqua").val()==""){
											 if ((parseFloat(Kq_createnin) / 88.4) > 0.9) {
											 	$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin) / (88.4 * 0.9), (-1.209)) * Math.pow(0.993,age)) * 1.73 / BSA))
											 }
											else{
												$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin) / (88.4 * 0.9), (-0.411)) * Math.pow(0.993,age)) * 1.73 / BSA))
											} 
										}
									}

							}
						}
						else{
							for (i=0;i<=ids.length-1;i++){
										if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
											//alert($("#"+ids[i]+"_ketqua").val());
											if($("#"+ids[i]+"_ketqua").val()==""){
												$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.04 / parseFloat(Kq_createnin)) * 1.73 / BSA));
											}
										}
										if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22229" ){
											if($("#"+ids[i]+"_ketqua").val()==""){
												 if ((parseFloat(Kq_createnin) / 88.4) > 0.7) {
												 	$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin) / (88.4 * 0.7), (-1.209)) * Math.pow(0.993,age)) * 1.73 / BSA))
												 }
												else{
													$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin) / (88.4 * 0.7), (-0.329)) * Math.pow(0.993,age)) * 1.73 / BSA))
												} 
											}
										}

								}
						}
			}
			
		}
	}
	 ids2 = $("#rowed6").getDataIDs();	
	 tg2="";
	 chol2="";
	 hdlc2="";
	for (i=0;i<=ids2.length-1;i++){
				if($("#rowed6").jqGrid ('getCell', ids2[i], 'ID_XetNghiem')=="22219"){
					
					tg2=$("#rowed6").jqGrid ('getCell', ids2[i], 'KetQua');
				}
				if($("#rowed6").jqGrid ('getCell', ids2[i], 'ID_XetNghiem')=="22218"){
					chol2=$("#rowed6").jqGrid ('getCell', ids2[i], 'KetQua');
				}
				if($("#rowed6").jqGrid ('getCell', ids2[i], 'ID_XetNghiem')=="22220"){
					hdlc2=$("#rowed6").jqGrid ('getCell', ids2[i], 'KetQua');
				}
				if($("#rowed6").jqGrid ('getCell', ids2[i], 'ID_XetNghiem')=="22221"){
					ldlc2=$("#rowed6").jqGrid ('getCell', ids2[i], 'KetQua');
				}
				if($("#rowed6").jqGrid ('getCell', ids2[i], 'ID_XetNghiem')=="22227"){
					Kq_createnin2=$("#rowed6").jqGrid ('getCell', ids2[i], 'KetQua');
				}
	}
	if(tg2!="" && chol2!="" && hdlc2!="" ){
		 for (i=0;i<=ids.length-1;i++){
				if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22221" ){
					//alert(chol);
					if($("#"+ids[i]+"_ketqua").val()==""){
						num=parseFloat( chol2) - parseFloat(hdlc2) - (parseFloat(tg2) / 5);
						//alert(num);
						$("#"+ids[i]+"_ketqua").val( Math.round(num * 100) / 100);
					}
				}
		}	
	}
	if(Kq_createnin!=""){
		if($("#height_1").val()=="" || $("#height_1").val()=="0" || $("#weight_1").val()=="" || $("#weight_1").val()=="0"){
			alert("Có loại xét nghiệm RENAL FUNCTION.Yêu cầu nhập chiều cao và cân nặng để tính toán!");
		}
		else{
			BSA = 0.007184 * Math.pow(height_cal,0.725) * Math.pow(weight_cal,0.425);
			age_tam=age.split(' ');
			
			if(typeof age_tam[1] != "undefined") {
				if(age_tam[1] == "Tháng") {
					age=Math.round(age_tam[0]/12);
				}
			}
			
			if(age<=15){
				for (i=0;i<=ids.length-1;i++){
							if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
								//alert($("#"+ids[i]+"_ketqua").val());
								if($("#"+ids[i]+"_ketqua").val()==""){

									$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.23 / parseFloat(Kq_createnin2)) * 1.73 / BSA,0));
								}
							}
							if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22230" ){
								//alert($("#"+ids[i]+"_ketqua").val());
								if($("#"+ids[i]+"_ketqua").val()==""){
									$("#"+ids[i]+"_ketqua").val( 0.413 * height_cal / (parseFloat(Kq_createnin2) / 88.4));
								}
							}
					}
			}
			else{

						if(gioitinh="nam"){
							for (i=0;i<=ids.length-1;i++){
									if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
										//alert($("#"+ids[i]+"_ketqua").val());
										if($("#"+ids[i]+"_ketqua").val()==""){

											$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.23 / parseFloat(Kq_createnin2)) * 1.73 / BSA));
										}
									}
									if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22229" ){
										if($("#"+ids[i]+"_ketqua").val()==""){
											 if ((parseFloat(Kq_createnin2) / 88.4) > 0.9) {
											 	$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin2) / (88.4 * 0.9), (-1.209)) * Math.pow(0.993,age)) * 1.73 / BSA))
											 }
											else{
												$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin2) / (88.4 * 0.9), (-0.411)) * Math.pow(0.993,age)) * 1.73 / BSA))
											} 
										}
									}

							}
						}
						else{
							for (i=0;i<=ids.length-1;i++){
										if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22228" ){
											//alert($("#"+ids[i]+"_ketqua").val());
											if($("#"+ids[i]+"_ketqua").val()==""){
												$("#"+ids[i]+"_ketqua").val( Math.round(((140 - age) * weight_cal * 1.04 / parseFloat(Kq_createnin2)) * 1.73 / BSA));
											}
										}
										if($("#rowed4").jqGrid ('getCell', ids[i], 'ID_XetNghiem')=="22229" ){
											if($("#"+ids[i]+"_ketqua").val()==""){
												 if ((parseFloat(Kq_createnin2) / 88.4) > 0.7) {
												 	$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin2) / (88.4 * 0.7), (-1.209)) * Math.pow(0.993,age)) * 1.73 / BSA))
												 }
												else{
													$("#"+ids[i]+"_ketqua").val( Math.round((141 * Math.pow(parseFloat(Kq_createnin2) / (88.4 * 0.7), (-0.329)) * Math.pow(0.993,age)) * 1.73 / BSA))
												} 
											}
										}

								}
						}
			}
			
		}
	}
	post_data();
})
  function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
        window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function refresh_file(){
	 
	$.getJSON('file_manager/php/connector.php?answer=42&tenthumuc='+_tenthumuc+'&cmd=search&q='+search_string+'&_=1387364774212&profile=tcd', 
	       			 		function( data ) { 						
	       			 			//search_string2=search_string;
	       			 			//alert(data["files"][data["files"].length-1]["name"]);
	       			 			if(data["files"].length==0){		 
									ten_file="";
								}else{		 
								 	ten_file=data["files"][data["files"].length-1]["name"];
								}	
								 dataToSend ='{';
										 dataToSend += '"id_kham":"' + id_kham2 + '"';
										  dataToSend += "," + '"search_string":"' +ten_file+ '"';
										 dataToSend +='}'; 
										  dataToSend = jQuery.parseJSON(dataToSend);
						  		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=filedoc&hienmaloi=3',dataToSend)
											.done(function( gridData ) {	
																$("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketquainrieng&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger("reloadGrid");	
																 })
																.fail(function() {
																tooltip_message( "Có lỗi trong quá trình cập nhật" );
																});	
							 });
		
}
function themketluan(id_loaikham,soluong){
	window.id_lk=parseInt(id_loaikham/soluong);
	var allRowsInGrid = $('#rowed4').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    pid2 = allRowsInGrid[i].ID_LoaiKham;
			
				    if(pid2==id_lk){
 							
          				window.id_kham_rowed5=allRowsInGrid[i].ID_Kham;
          				window.MaBenhNhan=allRowsInGrid[i].MaBenhNhan;
          				var mota=allRowsInGrid[i].MoTa.split("|||");
          				window.ketqua=mota[0];
          				window.ketluan=mota[1];
          				
          			}
				  
          	
          }



     			function load_image(search_string){	 
					  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+window.id_lk
					  	, async: false, success: function(data, result) { 			           		 
				      }}).responseText;	
					  _folder_name=$.trim(_folder_name)+"//"+window.MaBenhNhan;	
					  _search_string=	window.MaBenhNhan+"_"+window.id_kham_rowed5+"_"+window.id_lk;
					  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+_search_string);   
					 
				}

                load_image($(this).attr("alt"));	

	            $("#dialog-kqir").dialog("open");
			
}
function themketluan2(id_loaikham,soluong){
	window.id_lk=parseInt(id_loaikham/soluong);

	window.MaBenhNhan=0;

	var allRowsInGrid = $('#rowed6').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    pid2 = allRowsInGrid[i].ID_LoaiKham;
			window.idlk=allRowsInGrid[i].ID_LoaiKham;
				    if(pid2==id_lk){
 							
          				window.id_kham_rowed5=allRowsInGrid[i].ID_Kham;
          				window.MaBenhNhan=allRowsInGrid[i].MaBenhNhan;
          				var mota=allRowsInGrid[i].MoTa.split("|||");
          				window.ketqua=mota[0];
          				window.ketluan=mota[1];
          				
          			}
				  
          	
          }

//alert(idlk);
//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+idlk,0);
//create_combobox_new('#template_title',create_DM_template_grid,'bw','','data_DMtemplate&loaikham='+idlk,0);
create_combobox_new('#template_title',create_DM_template_grid,'bw','','data_DMtemplate&loaikham='+idlk,0);


     			function load_image(search_string){	 
					  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+window.id_lk
					  	, async: false, success: function(data, result) { 			           		 
				      }}).responseText;	
					  _folder_name=$.trim(_folder_name)+"//"+window.MaBenhNhan;	
					  _search_string=	window.MaBenhNhan+"_"+window.id_kham_rowed5+"_"+window.id_lk;
					  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+_search_string);   
					 
				}

                load_image($(this).attr("alt"));	

	            $("#dialog-kqir").dialog("open");
			
}


function inKQNew(id_loaikham,soluong){
	window.id_lk=parseInt(id_loaikham/soluong);
	window.MaBenhNhan=0;
	
	var allRowsInGrid = $('#rowed6').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    pid2 = allRowsInGrid[i].ID_LoaiKham;
				    
				    if(pid2==id_lk){

          				window.id_kham_rowed5=allRowsInGrid[i].ID_Kham;
          				id_kham=allRowsInGrid[i].ID_Kham;
          				window.MaBenhNhan=allRowsInGrid[i].MaBenhNhan;
          				var mota=allRowsInGrid[i].MoTa.split("|||");
          				window.ketqua=mota[0];
          				window.ketluan=mota[1];    				
          				
          				}
				  
          	
          }



          		function load_image(search_string){	 
					  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+window.id_lk
					  	, async: false, success: function(data, result) { 			           		 
				      }}).responseText;	
					  _folder_name=$.trim(_folder_name)+"//"+window.MaBenhNhan;	
					  _search_string=	window.MaBenhNhan+"_"+window.id_kham_rowed5+"_"+window.id_lk;
					  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+_search_string);   
					 
				}

                load_image($(this).attr("alt"));	

  			   _search_string=	window.MaBenhNhan+"_"+window.id_kham_rowed5+"_"+window.id_lk;
		
				$.cookie("in_status", "print_preview"); 
				print_action="xemin";
				
				dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",_search_string,"xetnghiem_kqir2",print_action,"fasdf","ds","da","left",3,"xetnghiem_kqir2",'<?=$modules?>');

				$(".frame_u78787878975f").css("width","793px");
	
}
function avgTotal() {
  
    $('.subTotal').each(function() {


        var subTotal = 0;
        tam = $(this).attr("id").split(";");
            //if(typeof(tam[0])!="undefined"){
                tam[0] = tam[0].replace(".", ",");

                if (parseFloat(tam[0]) != 100) {
                    subTotal = (parseFloat(tam[0]) / parseInt(tam[1]));
                }
            //}

            $(this).attr("id",subTotal+"_ketluan")
        });



}
function avgTotal2() {
  
    $('.subTotal2').each(function() {


        var subTotal = 0;
        tam = $(this).attr("id").split(";");
            //if(typeof(tam[0])!="undefined"){
                tam[0] = tam[0].replace(".", ",");

                if (parseFloat(tam[0]) != 100) {
                    subTotal = (parseFloat(tam[0]) / parseInt(tam[1]));
                }
            //}

            $(this).attr("id",subTotal+"_ketluan2")
        });



}


function check_list(obj){
	
	//$('.check_list').click(function(e){		
		//alert();
		$('#'+$(obj).closest('tr.jqgroup').next('.jqgrow').attr('id') +' td[aria-describedby="rowed6_ChonIn"] input').click();
	//})
	check_list_next($(obj).closest('tr.jqgroup').next('.jqgrow').attr('id'));
	
}

function check_list_next(id){
	if(typeof($('#'+id).next('.jqgrow').attr('id'))!='undefined'){
	$('#'+$('#'+id).next('.jqgrow').attr('id') +' td[aria-describedby="rowed6_ChonIn"] input').click();
	check_list_next($('#'+id).next('.jqgrow').attr('id'))
	}
	//console.log($('#'+id).next('.jqgrow').attr('id'))
	
	
}

function create_DM_template_grid(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
        colNames:['Tên mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
        colModel:[
            {name:'TenTemplate',index:'TenTemplate',width:'40%'},
            {name:'NoiDung',index:'NoiDung',width:'20%'},
            {name:'KetLuan',index:'KetLuan',width:'20%'},
            {name:'LoiKhuyen',index:'LoiKhuyen',width:'20%'},

        ],
         hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 300,
            rowList: [],
            height: 200,
            width: 700,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",

            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowData = $(this).getRowData(id);
              $("#ketqua_ir").val(rowData["NoiDung"]);
              $("#ketluan_ir").val(rowData["KetLuan"]); 
      
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {

            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>
 
 
 