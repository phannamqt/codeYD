<!--//an_nam   :mo de load hinh anh-->
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
	}
	}


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["id_kham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0";
		echo "</script>";
		}
?>
 
 
<style>
	#DM_template td,#data_soitructrang td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	 #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
		  }
	  #open_template{		
		 border-radius:0px!important;	
	 }	 
	 .ui-corner-all{		 
		 border-radius:3px!important;		 
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }  	
	.top_form{
		width:100%;
		height:139px;
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:114px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
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
	.ui-layout-mask {
		background:#FFF !important;
		opacity:.20 !important;
		filter:	alpha(opacity=20) !important;
	}
	#mota{
		font-size:13px!important;		 	 
	}.thongtin_chidinh{
		height:58px;
	}#right_col{
		padding-left:2px;
	}input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}select {
    height: 22px !important;
    width: 90px;
}#right_top{
	border: 0px solid #D4CCB0;
}
#right_top table{
	padding-left:5px;
}
#right_bottom table{
	padding-left:5px;
}
#right_bottom{
	border: 1px solid #D4CCB0;
}
.right_top{
	height:18px;
	border-radius:3px;
	border: 1px solid #D4CCB0;
	background:#F5F3EB;
	
	margin-top:1px;
	margin-left:1px;
	margin-right:1px;
	padding-top: 2px;
}.cacthongso{
	font-weight:bold;
	color:#0000FF;
	margin-left:5px;
}#soitructrang{
	width:708px;
	height:95px !important;
	 font-size: 13px !important;
}#dacdiem{
	width:708px;
	height:55px !important;
	 font-size: 13px !important;
}
#benhsu{
	width:708px;
	height:95px !important;
	font-size: 13px !important;
}
#dacdiemhaumon{
	width:708px;
	height:95px;
	 font-size: 13px !important;
}
#ghichunoibo{
	width:708px;
	height:55px!important;
	 font-size: 13px !important;
}#right_bottom select{
	width:245px;
}
#right_bottom input[type="text"] {
	width:465px;
}.custom-combobox-input{
	width:70px !important
}.ui-autocomplete {
	min-height:100px !important;
}#vitribuitri{
	width:98px;
}.thongtin_tongthe{
		height:62px;
}#combo_ppdieutri11,#combo_ppdieutri21{
	width:200px!important;
	
}.backhidde{
	background:#F0F0F0!important;

}
#tgmacbenh{
	width:98px;
}
#sobuitri{
	width:98px;
}
#solandieutri{
	width:98px;
}
#right_bottom{
	overflow:auto;
}
#builonnhat {
    width: 98px;
}
</style>
<body>

<div  class="data_soitructrang">
    <table id="data_soitructrang">
    </table>   
</div>
<div  class="data_chuandoan">
    <table id="data_chuandoan">
    </table>   
</div>

 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
            <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
            <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> 
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="">   
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>

    <div class="thongtin_luotkham" id="right_col">
    	 
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
    	</div>
    	<div style="margin-top: 12px;">

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    	<span id="In_CoChuKy" style="float:right;margin:5px 7px 0 0">
                    	<input type="checkbox"  checked />
            			<label>In có chữ ký</label>
        </span> 	
    	</div>
    	<div style="margin-top: -9px">
	    	<label>Giờ hẹn trả kết quả:</label>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 0px; margin-left:5px;">
	    	<span id="edit_by" class="visibility"><label>Sửa bởi:</label>
	    		<label style="color:blue" id="nguoisua"></label>
	    		<label style="color:blue" id="ngaygiosua"></label>
	    	</span>
            <span style="margin-left:80px"><label for="chonanh">Chọn ảnh</label><input type="checkbox" id="chonanh"></span>
    	</div>
    </div>
   
 </div> 
 
 <div id="panel_main">    
		<input type="hidden" lang="luu" id="daluu"  name="daluu">
        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
        <div id="right_top">
        <div class="right_top">
        <label class="cacthongso">Các thông số </label>
        </div>
        <table width="100%">
  <tr>
    <td><label for="tgmacbenh">TG mắc bệnh (Năm):</label></td>
    <td style="padding-right: 30px;">
        <input  lang='luu' type="text" id="tgmacbenh"  name="tgmacbenh" />
    </td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="tieuduong" id="tieuduong" />
   <label for="tieuduong"> Tiểu đường</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="phanmau" id="phanmau" />
      <label for="phanmau">Phân máu</label></td>
    <td colspan="2"><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="cohoitot" id="cohoitot" />
      <label for="cohoitot">Co hồi tốt</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="buitriloi" id="buitriloi" />
      <label for="buitriloi">Búi trĩ lồi ra</label></td>
  </tr>
  <tr>
    <td><label for="solandieutri">Số lần điều trị:</label></td>
    <td>
    <input type="text"  lang='luu'  name="solandieutri" id="solandieutri" />
    </td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="benhtimmach" id="benhtimmach" />
     <label for="benhtimmach">Bệnh tim mạch</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="nuthaumon" id="nuthaumon" />
      <label for="nuthaumon">Nứt hậu môn</label></td>
    <td colspan="2"><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="niemmacmem" id="niemmacmem" />
      <label for="niemmacmem">Niêm mạc mềm</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="phaidaylen" id="phaidaylen" />
      <label for="phaidaylen">Phải đẩy lên</label></td>
  </tr>
  <tr>
    <td><label for="ppdieutricu1">PP điều trị cũ:</label></td>
    <td><select lang="luu" name="ppdieutricu" id="ppdieutricu" style="width:200px;display:none">
    	<option value="1">Mổ </option>
        <option value="2">Bôi thuốc </option>
        <option value="3">Nội khoa </option>
        <option value="4" selected>Thắt búi trĩ vị trí xxx giờ và tiêm thuốc </option>
        <option value="5">Không cần điều trị gì </option>
        <option value="6">Chưa điều trị gì </option>
        
    </select></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="taobon" id="taobon" />
    <label for="taobon">Táo bón</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="polyp" id="polyp" />
      <label for="polyp">Polyp</label></td>
    <td><label for="sobuitri">Số búi trĩ:</label></td>
    <td><input type="text" lang="luu" name="sobuitri" id="sobuitri" /></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="buitrixuathuyet" id="buitrixuathuyet" />
      <label for="buitrixuathuyet">Búi trĩ xuất huyết</label></td>
  </tr>
  <tr>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="huyetapcao" id="huyetapcao" />    
    <label for="huyetapcao">Huyết áp cao</label></td>
    <td>&nbsp;</td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="dau" id="dau" />
   <label for="dau">Đau</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="nhugaihm" id="nhugaihm" />
      <label for="nhugaihm">Nhú gai HM</label></td>
    <td><label for="vitribuitri">Vị trí búi trĩ:</label></td>
    <td>
    <input type="text" lang='luu' name="vitribuitri" id="vitribuitri" />
    </td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="buitriviem" id="buitriviem" />
      <label for="buitriviem">Búi trĩ viêm</label></td>
  </tr>
  <tr>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="huyetapthap" id="huyetapthap" />
   <label for="huyetapthap"> Huyết áp thấp</label></td>
    <td>&nbsp;</td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="daitieuduong" id="daitieuduong" />
    <label for="daitieuduong">Đại tiện đau</label></td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="gianvanhhm" id="gianvanhhm" />
     <label for="gianvanhhm">Giãn vành HM</label></td>
    <td><label for="builonnhat">Búi lớn nhất:</label></td>
    <td>
    <input type="text" lang="luu" name="builonnhat" id="builonnhat"/>
    </td>
    <td><input type="checkbox"  lang='luu' onClick=" return checkboxval(this.id);" name="buitrixochai" id="buitrixochai" />
      <label for="buitrixochai">Búi trĩ xơ chai</label></td>
  </tr>
</table>
</div> <!--end rigt-top -->
<div id="right_bottom">
<table width="100%">
  <tr>
    <td class="td1">Bệnh sử</td>
    <td colspan="2" ><input id="combo_soitructrang1"  name="combo_soitructrang1" type="text" lang='luu' style="display:none" >
      <textarea name="benhsu" id="benhsu"  lang='luu'></textarea></td>
  </tr>
  <tr>
    <td class="td1">Đặc điểm hậu môn</td>
    <td colspan="2" ><input id="combo_soitructrang1"  name="combo_soitructrang1" type="text" lang='luu' style="display:none" >
      <textarea name="dacdiemhaumon" id="dacdiemhaumon"  lang='luu'></textarea></td>
  </tr>
  <tr>
    <td class="td1">Soi trực tràng:</td>
    <td colspan="2" >
    <span class="custom-combobox">
   		<input id="combo_soitructrang" name="combo_soitructrang"  type="text" style="width:180px ;" placeholder="--Chọn mẫu chẩn đoán--">
    </span> 
    <input id="combo_soitructrang1"  name="combo_soitructrang1" type="text" lang='luu' style="display:none" >
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><textarea name="soitructrang" id="soitructrang"  lang='luu'></textarea></td>
  </tr>
  <tr>
    <td>Chẩn đoán:</td>
    <td>
    <span class="custom-combobox">
   		<input id="combo_chuandoan" name="combo_chuandoan"  type="text" style="width:170px ; " placeholder="--Chọn bệnh--"><button id="add_chuandoan" style="height:23px;width:23px;float: right;margin-left: 33px; position: absolute;">Thêm</button>
    </span> 
    <input id="combo_chuandoan1"  name="combo_chuandoan1"  type="text" lang='luu' style="display:none" >
    </td>
    <td style="padding-left: 33px;"><input type="text" name="text_chuandoan"  lang='luu' id="text_chuandoan" /></td>
  </tr>
  <tr>
    <td>PP điều trị 1:</td>
    <td><select lang="luu" name="combo_ppdieutri1" id="combo_ppdieutri1" style="width:200px;display:none" >
    	<option value="Mổ">Mổ </option>
        <option value="Bôi thuốc ">Bôi thuốc </option>
        <option value="Nội khoa">Nội khoa </option>
        <option value="Thắt búi trĩ vị trí xxx giờ và tiêm thuốc " selected>Thắt búi trĩ vị trí xxx giờ và tiêm thuốc </option>
        <option value="Không cần điều trị gì">Không cần điều trị gì </option>
        <option value="Chưa điều trị gì">Chưa điều trị gì </option>
    </select></td>
    <td style="padding-left: 33px;"><input  type="text" name="ppdieutri1" id="ppdieutri1"  lang='luu' /></td>
  </tr>
  <tr>
    <td>PP điều trị 2:</td>
    <td><select lang="luu" name="combo_ppdieutri2" id="combo_ppdieutri2" style="width:200px;display:none">
    	<option value="Mổ">Mổ </option>
        <option value="Bôi thuốc ">Bôi thuốc </option>
        <option value="Nội khoa">Nội khoa </option>
        <option value="Thắt búi trĩ vị trí xxx giờ và tiêm thuốc " selected>Thắt búi trĩ vị trí xxx giờ và tiêm thuốc </option>
        <option value="Không cần điều trị gì">Không cần điều trị gì </option>
        <option value="Chưa điều trị gì">Chưa điều trị gì </option>
    </select></td>
    <td style="padding-left: 33px;"><input type="text" name="ppdieutri2" id="ppdieutri2" lang='luu' /></td>
  </tr>
  <tr>
    <td>Đặc điểm:</td>
    <td colspan="2"><textarea name="dacdiem" id="dacdiem"  lang='luu'></textarea></td>
  </tr>
  <tr>
    <td>Ghi chú:<br>(Nội bộ)</td>
    <td colspan="2"><textarea name="ghichunoibo" id="ghichunoibo"  lang='luu'></textarea></td>
  </tr>
</table>
</div><!--end bottom -->
        </div>
                 
	</div>
	
		
		
</body>
</html>
<script type="text/javascript">
var report_code=["anus"];
var report_name=["ANUS"];
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var id_benhnhan;
var tenloaikham;

$(document).ready(function() {
	openform_shortcutkey();
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}	
	})	
	$("#xemin").click(function(e){
	//	alert(window.search_string);
	//	alert(maviettat);
	$.cookie("in_status", "print_preview"); 	
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";
		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"anus",print_action,"PHIẾU SOI HẬU MÔN - TRỰC TRÀNG","RECTO-ANAL-SCOPY","BÁC SỸ CHẨN ĐOÁN","left",3,"anus",'<?=$modules?>');
		}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"anus",print_action,"PHIẾU SOI HẬU MÔN - TRỰC TRÀNG","RECTO-ANAL-SCOPY","BÁC SỸ CHẨN ĐOÁN","left",3,"anus_khongchuky",'<?=$modules?>');
			}
		
	    
  });
  $("#tgmacbenh").change(function(e) {
	add_text();
  });
  $("#solandieutri").change(function(e) {
	add_text();
  });
  $("#ppdieutricu1").keyup(function(e) {
	add_text();
  });
  
  $("#sobuitri").keyup(function(e) {
	add_text();
  });
  $("#vitribuitri").keyup(function(e) {
	add_text();
  });
  $("#builonnhat").keyup(function(e) {
	add_text();
  });
	
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	window.search_string='';	
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	
	create_combobox('#combo_soitructrang', '#combo_soitructrang1', ".data_soitructrang", "#data_soitructrang", create_soitructrang, 500, 400, 'Soi trực trạng', 'data_soitructrang');

	create_combobox('#combo_chuandoan', '#combo_chuandoan1', ".data_chuandoan", "#data_chuandoan", create_chuandoan, 500, 400, 'Chuẩn đoán', 'data_chuandoan');
	
	//autocompleted_combobox('#sobuitri');
	//autocompleted_combobox('#builonnhat');
	//autocompleted_combobox('#ppdieutricu');
	autocompleted_combobox_callback('#ppdieutricu',ppdieutricu_callback);
	//autocompleted_combobox('#solandieutri');
	//autocompleted_combobox('#tgmacbenh');
	autocompleted_combobox('#combo_ppdieutri1');
	autocompleted_combobox('#combo_ppdieutri2');
	
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );

	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container .mabenhnhan').text() ;
	
	});
     
	  
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	
	$("#combo_ppdieutri11").attr("placeholder","--Chọn phương pháp điều trị 1--");
	$("#combo_ppdieutri21").attr("placeholder","--Chọn phương pháp điều trị 2--");
	
	$("#combo_ppdieutri11").val("");
	$("#combo_ppdieutri21").val("");
	$("#combo_ppdieutri11,#combo_ppdieutri21,#solandieutri1,#ppdieutricu1,#builonnhat1").attr("lang","luu");

	
	$( "#combo_ppdieutri1" ).select(function() {
	  $("#ppdieutri1").val($( "#combo_ppdieutri1" ).val());
	});
	$( "#combo_ppdieutri2" ).select(function() {
	  $("#ppdieutri2").val($( "#combo_ppdieutri2" ).val());
	});
	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				$("#luu").click();
				return false;
			}
		};
	$( "#tgmacbenh" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#tieuduong" ).focus();
				return false;
			}
	});
	$( "#tieuduong" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#phanmau" ).focus();
				return false;
			}
	});
	$( "#phanmau" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#cohoitot" ).focus();
				return false;
			}
	});
	$( "#cohoitot" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#buitriloi" ).focus();
				return false;
			}
	});
	$( "#buitriloi" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#solandieutri" ).focus();
				return false;
			}
	});
	$( "#solandieutri" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#benhtimmach" ).focus();
				return false;
			}
	});
	$( "#benhtimmach" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#nuthaumon" ).focus();
				return false;
			}
	});
	$( "#nuthaumon" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#niemmacmem" ).focus();
				return false;
			}
	});
	$( "#niemmacmem" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#phaidaylen" ).focus();
				return false;
			}
	});
	$( "#phaidaylen" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#ppdieutricu1" ).focus();
				return false;
			}
	});
	$( "#ppdieutricu1" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#taobon" ).focus();
				return false;
			}
	});
	$( "#taobon" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#polyp" ).focus();
				return false;
			}
	});
	$( "#polyp" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#sobuitri" ).focus();
				return false;
			}
	});
	$( "#sobuitri" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#buitrixuathuyet" ).focus();
				return false;
			}
	});
	$( "#buitrixuathuyet" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#huyetapcao" ).focus();
				return false;
			}
	});
	$( "#huyetapcao" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#dau" ).focus();
				return false;
			}
	});
	$( "#dau" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#nhugaihm" ).focus();
				return false;
			}
	});

	$( "#nhugaihm" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#vitribuitri" ).focus();
				return false;
			}
	});
	$( "#vitribuitri" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#buitriviem" ).focus();
				return false;
			}
	});
	$( "#buitriviem" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#huyetapthap" ).focus();
				return false;
			}
	});
	$( "#huyetapthap" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#daitieuduong" ).focus();
				return false;
			}
	});
	$( "#daitieuduong" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#gianvanhhm" ).focus();
				return false;
			}
	});
	$( "#gianvanhhm" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#builonnhat" ).focus();
				return false;
			}
	});
	$( "#builonnhat" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#buitrixochai" ).focus();
				return false;
			}
	});
	
	$( "#buitrixochai" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#combo_soitructrang" ).focus();
				return false;
			}
	});
	$( "#combo_soitructrang" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#soitructrang" ).focus();
				return false;
			}
	});
	$( "#soitructrang" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#combo_chuandoan" ).focus();
				return false;
			}
	});
	$( "#combo_chuandoan" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#text_chuandoan" ).focus();
				return false;
			}
	});
	$( "#text_chuandoan" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#combo_ppdieutri11" ).focus();
				return false;
			}
	});
	$( "#combo_ppdieutri11" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#ppdieutri1" ).focus();
				return false;
			}
	});
	$( "#ppdieutri1" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#combo_ppdieutri21" ).focus();
				return false;
			}
	});
	$( "#combo_ppdieutri21" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#ppdieutri2" ).focus();
				return false;
			}
	});
	$( "#ppdieutri2" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#dacdiem" ).focus();
				return false;
			}
	});
	$( "#dacdiem" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#ghichunoibo" ).focus();
				return false;
			}
	});
	$( "#ghichunoibo" ).keyup(function(e){
		//alert(e.keyCode);
			if ((e.keyCode === 13) || (jwerty.is("tab",e))) {
				$( "#luu" ).focus();
				return false;
			}
	});
	
	$("#add_chuandoan").click(function(e){
	links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=169&id_loai=90';
	elem=1 + Math.floor(Math.random() * 1000000000); 
	width=90;
	height=80;   
	dialog_add_dm("",width,height,elem,links); 
}) 
	
	
	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_anus&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
				data_luotkham=data;

		 	//alertObject(data);
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(tam1_cls[5]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(tam1_cls[5]);
					_id_kham.push(val[i]["id"]);
				}
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);
				//_id_loaikham=$.unique(_id_loaikham);
				//navigator_load("end","first");			
				 //alert(_id_kham);		
						load_complete();			 
			//$('.template_title_button').button( 'disable');
				//trangthai=tam1_cls[9]; 
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}
				 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
}
else{

	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_anus&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
			
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);

				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			
			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
				$('.template_title_button').button( 'disable');
			}
			 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
			 	$('.template_title_button').button( 'enable');
			 }
		});		
	});
}
	function n_loadform(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_anus&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");
		//	loaikham_click();			
					
		
		});		
	});
}

function n_loadform2(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_anus&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");
			loaikham_click2();			
					
		
		});		
	});
}
	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});

	//navigator_load(0);
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
		$( "#open_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-triangle-1-s"
		  }
		})
		.click(function(e) {
			 e.stopPropagation();   
		 	 $("#DM_template_container").fadeIn(200);
			 $("#template_title").focus();			
		});
		$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
		 
		});
		$( "#add_chuandoan" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
                $("#cancel").click(function(){
			$("#dialog-form").dialog("close");
		});
		$("#xoamota").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoamt';
				//$("#mota").val("");
				//$("#ketluan").val("");
				//$("#loikhuyen").val("");
		});
		$("#xoaketluan").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoakl';
				//$("#ketluan").val("");
		});
		$("#xoaloikhuyen").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
				//$("#loikhuyen").val("");
		});
		         
  	}); 
      		  
			  $("#sua").click(function(){
				  dis_all("hien");
			  	//$('#sua').button( {disabled:true});
					$('#luu').button( {disabled:false});
					$('#open_template').button( {disabled:false});
					$( "#template_title" ).attr("disabled",false);
					$("#sua").hide();
					$('#boqua').show();
					$('.template_title_button').button( {disabled:false});
					$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:false});
					$( "#nhanvien" ).attr("disabled",false);
					$( "#chuandoan" ).attr("disabled",false);
					$('#add_template').button( {disabled:false});
					window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
				dis_all("an");
				$("#sua").show();
				$('#boqua').hide();
				$('#luu').button( {disabled:true});
				$('#ketluan').attr("disabled",true);
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				$('.template_title_button').button( {disabled:true});
				//$('.chuandoan_button').button( {disabled:true});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				// $( "#chuandoan" ).attr("disabled",true);
				$('#add_template').button( {disabled:true});
				setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
				setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  
                         		 
				});
			  $("#dathuchien").click(function(){
				  dis_all("an");
					$("#id_trangthai").html("Đã thực hiện");
					$('#dathuchien').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="DaThucHien";
					$('.template_title_button').button( {disabled:true});
					$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					$('#boqua').hide();
					$('#sua').show();
					 
						$("#giothuchien").html(gio("current"));
						var giothuchien2= $( "#giothuchien" ).text();
					  phancach = "";
					i = 0;
					dataToSend = '{';
					$('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
					
						if ($(this).attr("lang") == "luu") {
						  
							dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						  
						}
						phancach = ",";
					
					});
					dataToSend += phancach + '"id_kham":"' + _kham + '"';
					//alert(_id_trangthai);
					dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
					
					 dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
					 dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					alertObject(dataToSend); 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
					 .done(function( gridData ) {	
											 //alert(gridData);	 
											})
											tooltip_message("Đã thực hiện");
					n_loadform();                                  
			  });
			  $("#hoantat").click(function(){
				  dis_all("an");
				$("#id_trangthai").html("Đã hoàn tất");
				$('#dathuchien').button( {disabled:true});
				$('#hoantat').button( {disabled:true});
				$('#sua').button( {disabled:false});
				$('#luu').button( {disabled:true});
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				_id_trangthai="Xong";
				$('.template_title_button').button( {disabled:true});
				$('.chuandoan_button').button( {disabled:true});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				$( "#chuandoan" ).attr("disabled",true);
				$('#add_template').button( {disabled:true});
				$('#boqua').hide();
				$('#sua').show();
				
				$("#giothuchien").html(gio("current"));
				var giothuchien2= $( "#giothuchien" ).text();
				$("#giohoantat").html(gio("current"));
				var giohoantat2= $( "#giohoantat" ).text();
				phancach = "";
				i = 0;
				dataToSend = '{';
				$('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {
				
				if ($(this).attr("lang") == "luu") {
				  
					dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
				  
				}
				phancach = ",";
				
				});
				dataToSend += phancach + '"id_kham":"' + _kham + '"';
				//alert(_id_trangthai);
				dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
				
				dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
				dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
				//alertObject(dataToSend); 
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {	
									 //alert(gridData);	 
					})
					tooltip_message("Đã hoàn tất");
				n_loadform();                                     
			  });
			  $('#luu').click(function (){
				  
			  	if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
			  		
			  	}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
					
					
					if(window.n_trangthailuu=="dathuchien1"){
						$( "#nhanvien" ).attr("disabled",true);
						$('.nhanvien_button').button( {disabled:true});
					}
					if(window.n_trangthailuu=="hoantat1"){
						$( "#nhanvien" ).attr("disabled",true);
						$('.nhanvien_button').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",true);
						$('.chuandoan_button').button( {disabled:true});
					}
					$('#add_template').button( {disabled:true});
					// setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					if(window.test=="giosuacuoi"){
					$("#edit_by").show();
					var nguoisua2=$("#nhanvien1").val();
					//alert(nguoisua2);
					$("#nguoisua").html(nguoisua2);
					$("#ngaygiosua").html(gio("current"));
					}}  
			                      
									var ngaygiosua2=$("#ngaygiosua").text();
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			              
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_kham":"' + _kham + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			       
			        dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
			        dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			      // alertObject(dataToSend); 
				 // alert(window.n_trangthailuu);
			       if(window.n_trangthailuu=="dathuchien1"){
					   dis_all("an");
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");	 
			                                            })
			         }
			         if(window.n_trangthailuu=="hoantat1"){
						 dis_all("an");
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                            })
			         }     
			          if(window.n_trangthailuu=="dangkham1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                            })
			         }

			         n_loadform();                           
			    });
			 	phanquyen();
				/*var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {
					edit_images(e.data);
				},false);	*/
				image_message();		 
				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});
function edit_images(tam){
	tam=tam.split(";");				 
	elem="6754353898787675";	
	dialog_add_dm('Chỉnh sửa hình ảnh',95,95,elem,'pages.php?module=images_control&view=images_edit&id_form=49&search_string='+tam[1]+"&tenthumuc="+tam[2],refresh_images);		
}
function refresh_images(){
	 $("#images_viewer").attr("src",$("#images_viewer").attr("src"));
}

function navigator_load(_value,_click){
	//alert(tam1_cls.length);
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
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
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
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
                       	tenloaikham=val[i]["cell"][1]; 
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
						
						setval('#combo_soitructrang','#combo_soitructrang1','#data_soitructrang');
						setval('#combo_chuandoan','#combo_chuandoan1','#data_chuandoan');
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
						  idluotkham=val[i]["cell"][5]; 
                        $("#giothuchien").text(val[i]["cell"][13]);                      
                        $("#giohoantat").text(val[i]["cell"][14]);  
						
						//---
                        $("#tgmacbenh").val(val[i]["cell"][16]);
						$("#solandieutri").val(val[i]["cell"][17]);
						$("#ppdieutricu1").val(val[i]["cell"][18]);
						//alert(val[i]["cell"][19]);
						if((val[i]["cell"][19]=='True') ||(val[i]["cell"][19]=='False')){
							$("#daluu").val(1);
							}else{
								$("#daluu").val(0);
								}
						if(val[i]["cell"][19]=='True'){
							$('#huyetapcao').prop('checked', true);
							$("#huyetapcao").val("True");		
						}else{
								$("#huyetapcao").prop('checked', false);
								$("#huyetapcao").val("False");
						}
						if(val[i]["cell"][20]=='True'){
							$('#huyetapthap').prop('checked', true);
							$("#huyetapthap").val("True");		
						}else{
								$("#huyetapthap").prop('checked', false);
								$("#huyetapthap").val("False");
						}
						//np
						//$("#huyetapcao").val(val[i]["cell"][19]);
						//$("#huyetapthap").val(val[i]["cell"][20]);
						
						if(val[i]["cell"][21]=='True'){
							$('#tieuduong').prop('checked', true);
							$("#tieuduong").val("True");		
						}else{
								$("#tieuduong").prop('checked', false);
								$("#tieuduong").val("False");
						}
						if(val[i]["cell"][22]=='True'){
							$('#benhtimmach').prop('checked', true);
							$("#benhtimmach").val("True");		
						}else{
								$("#benhtimmach").prop('checked', false);
								$("#benhtimmach").val("False");
						}
						if(val[i]["cell"][23]=='True'){
							$('#taobon').prop('checked', true);
							$("#taobon").val("True");		
						}else{
								$("#taobon").prop('checked', false);
								$("#taobon").val("False");
						}
						if(val[i]["cell"][24]=='True'){
							$('#dau').prop('checked', true);
							$("#dau").val("True");		
						}else{
								$("#dau").prop('checked', false);
								$("#dau").val("False");
						}
						if(val[i]["cell"][25]=='True'){
							$('#daitieuduong').prop('checked', true);
							$("#daitieuduong").val("True");		
						}else{
								$("#daitieuduong").prop('checked', false);
								$("#daitieuduong").val("False");
						}
						//$("#tieuduong").val(val[i]["cell"][21]);
						//$("#benhtimmach").val(val[i]["cell"][22]);
						//$("#taobon").val(val[i]["cell"][23]);
						//$("#dau").val(val[i]["cell"][24]);
						//$("#daitieuduong").val(val[i]["cell"][25]);
						
						
						if(val[i]["cell"][26]=='True'){
							$('#phanmau').prop('checked', true);
							$("#phanmau").val("True");		
						}else{
								$("#phanmau").prop('checked', false);
								$("#phanmau").val("False");
						}
						if(val[i]["cell"][27]=='True'){
							$('#nuthaumon').prop('checked', true);
							$("#nuthaumon").val("True");		
						}else{
								$("#nuthaumon").prop('checked', false);
								$("#nuthaumon").val("False");
						}
						if(val[i]["cell"][28]=='True'){
							$('#polyp').prop('checked', true);
							$("#polyp").val("True");		
						}else{
								$("#polyp").prop('checked', false);
								$("#polyp").val("False");
						}
						//alert(val[i]["cell"][29]);
						if(val[i]["cell"][29]=='True'){
							$('#nhugaihm').prop('checked', true);
							$("#nhugaihm").val("True");		
						}else{
								$("#nhugaihm").prop('checked', false);
								$("#nhugaihm").val("False");
						}
						if(val[i]["cell"][30]=='True'){
							$('#gianvanhhm').prop('checked', true);
							$("#gianvanhhm").val("True");		
						}else{
								$("#gianvanhhm").prop('checked', false);
								$("#gianvanhhm").val("False");
						}
						//$("#phanmau").val(val[i]["cell"][26]);
						//$("#nuthaumon").val(val[i]["cell"][27]);
						//$("#polyp").val(val[i]["cell"][28]);
						//$("#nhugaihm").val(val[i]["cell"][29]);
						//$("#gianvanhhm").val(val[i]["cell"][30]);
						
						
						if(val[i]["cell"][31]=='True'){
							$('#cohoitot').prop('checked', true);
							$("#cohoitot").val("True");		
						}else{
								$("#cohoitot").prop('checked', false);
								$("#cohoitot").val("False");
						}
						if(val[i]["cell"][32]=='True'){
							$('#niemmacmem').prop('checked', true);
							$("#niemmacmem").val("True");		
						}else{
								$("#niemmacmem").prop('checked', false);
								$("#niemmacmem").val("False");
						}
						//alert(val[i]["cell"][34]);
						if(val[i]["cell"][33]!='False')
							$("#sobuitri").val(val[i]["cell"][33]);
						if(val[i]["cell"][34]!='False')
							$("#vitribuitri").val(val[i]["cell"][34]);
						if(val[i]["cell"][35]!='False')
							$("#builonnhat").val(val[i]["cell"][35]);
						
						
						if(val[i]["cell"][36]=='True'){
							$('#buitriloi').prop('checked', true);
							$("#buitriloi").val("True");		
						}else{
								$("#buitriloi").prop('checked', false);
								$("#buitriloi").val("False");
						}
						if(val[i]["cell"][37]=='True'){
							$('#phaidaylen').prop('checked', true);
							$("#phaidaylen").val("True");		
						}else{
								$("#phaidaylen").prop('checked', false);
								$("#phaidaylen").val("False");
						}
						if(val[i]["cell"][38]=='True'){
							$('#buitrixuathuyet').prop('checked', true);
							$("#buitrixuathuyet").val("True");		
						}else{
								$("#buitrixuathuyet").prop('checked', false);
								$("#buitrixuathuyet").val("False");
						}
						if(val[i]["cell"][39]=='True'){
							$('#buitriviem').prop('checked', true);
							$("#buitriviem").val("True");		
						}else{
								$("#buitriviem").prop('checked', false);
								$("#buitriviem").val("False");
						}
						if(val[i]["cell"][40]=='True'){
							$('#buitrixochai').prop('checked', true);
							$("#buitrixochai").val("True");		
						}else{
								$("#buitrixochai").prop('checked', false);
								$("#buitrixochai").val("False");
						}
						//alert(val[i]["cell"][42]);
						$("#soitructrang").val(val[i]["cell"][41]);
						$("#text_chuandoan").val(val[i]["cell"][42]);
						$("#ppdieutri1").val(val[i]["cell"][43]);
						$("#ppdieutri2").val(val[i]["cell"][44]);
						$("#dacdiem").val(val[i]["cell"][45]);
						$("#ghichunoibo").val(val[i]["cell"][46]);
						
						$("#benhsu").val(val[i]["cell"][47]);
						$("#dacdiemhaumon").val(val[i]["cell"][48]);
						if(val[i]["cell"][47]=='' && val[i]["cell"][48]==""){
							//alert();
							add_text();
						}
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                        window.n_trangthailuu="dangkham1"; 		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#add_template').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.n_trangthailuu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.n_trangthailuu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#add_template').button( {disabled:true});
						
						window.n_trangthailuu="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[8]);
                    		 			 
						if(val[i]["cell"][9]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][9]);
								$("#ngaygiosua").text(val[i]["cell"][10]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
					
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
						
							break;
						}
						ii++;						 
					}
				}
				create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham,0);
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));
				bokhoangtrang();				
		});
	});
	
}

function loaikham_click2(){
	$.each( data_luotkham, function( key, val ) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
                       	tenloaikham=val[i]["cell"][1]; 
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
						
						setval('#combo_soitructrang','#combo_soitructrang1','#data_soitructrang');
						setval('#combo_chuandoan','#combo_chuandoan1','#data_chuandoan');
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                        $("#giothuchien").text(val[i]["cell"][13]);                      
                        $("#giohoantat").text(val[i]["cell"][14]);  
						
						//---
                        $("#tgmacbenh").val(val[i]["cell"][16]);
						$("#solandieutri").val(val[i]["cell"][17]);
						$("#ppdieutricu1").val(val[i]["cell"][18]);
						//alert(val[i]["cell"][19]);
						if((val[i]["cell"][19]=='True') ||(val[i]["cell"][19]=='False')){
							$("#daluu").val(1);
							}else{
								$("#daluu").val(0);
								}
						if(val[i]["cell"][19]=='True'){
							$('#huyetapcao').prop('checked', true);
							$("#huyetapcao").val("True");		
						}else{
								$("#huyetapcao").prop('checked', false);
								$("#huyetapcao").val("False");
						}
						if(val[i]["cell"][20]=='True'){
							$('#huyetapthap').prop('checked', true);
							$("#huyetapthap").val("True");		
						}else{
								$("#huyetapthap").prop('checked', false);
								$("#huyetapthap").val("False");
						}
						//np
						//$("#huyetapcao").val(val[i]["cell"][19]);
						//$("#huyetapthap").val(val[i]["cell"][20]);
						
						if(val[i]["cell"][21]=='True'){
							$('#tieuduong').prop('checked', true);
							$("#tieuduong").val("True");		
						}else{
								$("#tieuduong").prop('checked', false);
								$("#tieuduong").val("False");
						}
						if(val[i]["cell"][22]=='True'){
							$('#benhtimmach').prop('checked', true);
							$("#benhtimmach").val("True");		
						}else{
								$("#benhtimmach").prop('checked', false);
								$("#benhtimmach").val("False");
						}
						if(val[i]["cell"][23]=='True'){
							$('#taobon').prop('checked', true);
							$("#taobon").val("True");		
						}else{
								$("#taobon").prop('checked', false);
								$("#taobon").val("False");
						}
						if(val[i]["cell"][24]=='True'){
							$('#dau').prop('checked', true);
							$("#dau").val("True");		
						}else{
								$("#dau").prop('checked', false);
								$("#dau").val("False");
						}
						if(val[i]["cell"][25]=='True'){
							$('#daitieuduong').prop('checked', true);
							$("#daitieuduong").val("True");		
						}else{
								$("#daitieuduong").prop('checked', false);
								$("#daitieuduong").val("False");
						}
						//$("#tieuduong").val(val[i]["cell"][21]);
						//$("#benhtimmach").val(val[i]["cell"][22]);
						//$("#taobon").val(val[i]["cell"][23]);
						//$("#dau").val(val[i]["cell"][24]);
						//$("#daitieuduong").val(val[i]["cell"][25]);
						
						
						if(val[i]["cell"][26]=='True'){
							$('#phanmau').prop('checked', true);
							$("#phanmau").val("True");		
						}else{
								$("#phanmau").prop('checked', false);
								$("#phanmau").val("False");
						}
						if(val[i]["cell"][27]=='True'){
							$('#nuthaumon').prop('checked', true);
							$("#nuthaumon").val("True");		
						}else{
								$("#nuthaumon").prop('checked', false);
								$("#nuthaumon").val("False");
						}
						if(val[i]["cell"][28]=='True'){
							$('#polyp').prop('checked', true);
							$("#polyp").val("True");		
						}else{
								$("#polyp").prop('checked', false);
								$("#polyp").val("False");
						}
						//alert(val[i]["cell"][29]);
						if(val[i]["cell"][29]=='True'){
							$('#nhugaihm').prop('checked', true);
							$("#nhugaihm").val("True");		
						}else{
								$("#nhugaihm").prop('checked', false);
								$("#nhugaihm").val("False");
						}
						if(val[i]["cell"][30]=='True'){
							$('#gianvanhhm').prop('checked', true);
							$("#gianvanhhm").val("True");		
						}else{
								$("#gianvanhhm").prop('checked', false);
								$("#gianvanhhm").val("False");
						}
						//$("#phanmau").val(val[i]["cell"][26]);
						//$("#nuthaumon").val(val[i]["cell"][27]);
						//$("#polyp").val(val[i]["cell"][28]);
						//$("#nhugaihm").val(val[i]["cell"][29]);
						//$("#gianvanhhm").val(val[i]["cell"][30]);
						
						
						if(val[i]["cell"][31]=='True'){
							$('#cohoitot').prop('checked', true);
							$("#cohoitot").val("True");		
						}else{
								$("#cohoitot").prop('checked', false);
								$("#cohoitot").val("False");
						}
						if(val[i]["cell"][32]=='True'){
							$('#niemmacmem').prop('checked', true);
							$("#niemmacmem").val("True");		
						}else{
								$("#niemmacmem").prop('checked', false);
								$("#niemmacmem").val("False");
						}
						//alert(val[i]["cell"][34]);
						if(val[i]["cell"][33]!='False')
							$("#sobuitri").val(val[i]["cell"][33]);
						if(val[i]["cell"][34]!='False')
							$("#vitribuitri").val(val[i]["cell"][34]);
						if(val[i]["cell"][35]!='False')
							$("#builonnhat").val(val[i]["cell"][35]);
						
						
						if(val[i]["cell"][36]=='True'){
							$('#buitriloi').prop('checked', true);
							$("#buitriloi").val("True");		
						}else{
								$("#buitriloi").prop('checked', false);
								$("#buitriloi").val("False");
						}
						if(val[i]["cell"][37]=='True'){
							$('#phaidaylen').prop('checked', true);
							$("#phaidaylen").val("True");		
						}else{
								$("#phaidaylen").prop('checked', false);
								$("#phaidaylen").val("False");
						}
						if(val[i]["cell"][38]=='True'){
							$('#buitrixuathuyet').prop('checked', true);
							$("#buitrixuathuyet").val("True");		
						}else{
								$("#buitrixuathuyet").prop('checked', false);
								$("#buitrixuathuyet").val("False");
						}
						if(val[i]["cell"][39]=='True'){
							$('#buitriviem').prop('checked', true);
							$("#buitriviem").val("True");		
						}else{
								$("#buitriviem").prop('checked', false);
								$("#buitriviem").val("False");
						}
						if(val[i]["cell"][40]=='True'){
							$('#buitrixochai').prop('checked', true);
							$("#buitrixochai").val("True");		
						}else{
								$("#buitrixochai").prop('checked', false);
								$("#buitrixochai").val("False");
						}
						//alert(val[i]["cell"][42]);
						$("#soitructrang").val(val[i]["cell"][41]);
						$("#text_chuandoan").val(val[i]["cell"][42]);
						$("#ppdieutri1").val(val[i]["cell"][43]);
						$("#ppdieutri2").val(val[i]["cell"][44]);
						$("#dacdiem").val(val[i]["cell"][45]);
						$("#ghichunoibo").val(val[i]["cell"][46]);
						
						$("#benhsu").val(val[i]["cell"][47]);
						$("#dacdiemhaumon").val(val[i]["cell"][48]);
						if(val[i]["cell"][47]=='' && val[i]["cell"][48]==""){
							//alert();
							add_text();
						}
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                        window.n_trangthailuu="dangkham1"; 
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#add_template').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.n_trangthailuu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.n_trangthailuu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#add_template').button( {disabled:true});
						
						window.n_trangthailuu="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[8]);
                    		 			 
						if(val[i]["cell"][9]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][9]);
								$("#ngaygiosua").text(val[i]["cell"][10]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
					
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
						
							break;
						}
						ii++;						 
					}
				}
				//alert(id_loaikham);
				create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham,0);
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));			
		});
}

function resize_control(){

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$(".td1").css("width",100+"px");
	$("#right_bottom").css("height",$(".ui-layout-center").height()-$("#right_top").height()+"px");
	duoi=$("#right_bottom").height();
	//alert(duoi);
	if(duoi<250){
		$("#soitructrang").css("height",$("#right_bottom").height()*12/100+"px");
	$("#dacdiem").css("height",$("#right_bottom").height()*8/100+"px");
	$("#ghichunoibo").css("height",$("#right_bottom").height()*8/100+"px");
		}else{
	$("#soitructrang").css("height",$("#right_bottom").height()*22/100+"px");
	$("#dacdiem").css("height",$("#right_bottom").height()*17/100+"px");
	$("#ghichunoibo").css("height",$("#right_bottom").height()*17/100+"px");
		}
	$("#left_col").css("width",$(window).width()/2-14+"px");
	$("#right_col").css("width",$(window).width()/2+1+"px");
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"35%"
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
		,	size:					"65%"
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
function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  //alert(_folder_name);
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
	  $('#DM_template').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+id_loaikham,datatype:'json'}) .trigger('reloadGrid');
}

function load_select(){
window.stt = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	

}
function reload(){
	$('#nhanvien').combobox('reload');
	$('#chuandoan').combobox('reload');
}
function create_DM_template_grid(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
		colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			 
			{name:'KetLuan',index:'KetLuan'}, 			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: -1,
		rowList:[],
		pager: '#prowed_DM_template',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){


			if(jQuery('#DM_template').data('clicked')) {
				
			  var mota2=$("#mota").val();
						var ketluan2=$("#ketluan").val();
						var loikhuyen2=$("#loikhuyen").val();
			                        var rowData = $('#DM_template').getRowData(id);
						  if(mota2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#mota").val(rowData["NoiDung"]);
			                             $("#ketluan").val(rowData["KetLuan"]);
			                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
			                          }
						  if($("#yes").click(function(){
								$("#mota").val(rowData["NoiDung"]);
								$("#ketluan").val(rowData["KetLuan"]);
								$("#loikhuyen").val(rowData["LoiKhuyen"]);	
								$( "#dialog-form" ).dialog( "close" );
			                                        
							})
						  	);
			                           if($("#no").click(function(){
			                              mota4=$.trim(rowData["NoiDung"]);
			                              ketluan3=$.trim(rowData["KetLuan"]);
			                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
			                              mota2=mota2+"\n"+mota4;
			                              if(ketluan2=="")
			                              {	
			                              	ketluan2=ketluan3;
			                              }
			                             else
			                             {
			                             	ketluan2=ketluan2+"\n"+ketluan3;
			                             }
			                              if(loikhuyen2=="")
			                              {	
			                              	loikhuyen2=loikhuyen3;
			                              }
			                             else
			                             {
			                             	 loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
			                             } 
			                               
			                              
			                               $("#mota").val(mota2);
			                               $("#ketluan").val(ketluan2);
			                               $("#loikhuyen").val(loikhuyen2);
			                               $( "#dialog-form" ).dialog( "close" );
			                           }));
			} else {
			    //run function2
			}
           
		},
		ondblClickRow: function (id, rowIndex, columnIndex){
		
			 
			
			 $("#DM_template_container").fadeOut(200);		
 		},
		loadComplete: function(data) {			 
			/*$("#DM_template_container").css("top",$("#template_title").offset().top+25+"px");
			$("#DM_template_container").css("left",$("#template_title").offset().left+"px");	
			$("#DM_template_container").click(function(e) {
				 e.stopPropagation();                
            });   */			 
		},	  
		//caption: "Danh mục thuốc"
	});	

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {"onEnter":function( id ) {
	 	
		} } );	
		
}
function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  

$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 
               
            },
            buttons: {
           	}
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(22)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(20)).toFixed(0) );
                 
                
            },
            buttons: {
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
	
	 function create_soitructrang(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên mẫu', 'Nội dung', 'Kết luận','Lời khuyên'],
            colModel: [
                {name: 'TenMau', index: 'TenMau', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				{name: 'KetLuan', index: 'KetLuan', hidden: false},
				{name: 'LoiKhuyen', index: 'LoiKhuyen', hidden: true},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$('#soitructrang').val('');
				$("#soitructrang").val(rowdata["NoiDung"]);
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
	
	function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên thông thường', 'Nội dung', 'Kết luận','Lời khuyên'],
            colModel: [
                {name: 'TenMau', index: 'TenMau', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: true},
				{name: 'KetLuan', index: 'KetLuan', hidden: true},
				{name: 'LoiKhuyen', index: 'LoiKhuyen', hidden: true},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 350,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$('#text_chuandoan').val('');
				$("#text_chuandoan").val(rowdata["TenMau"]);
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
	
	
    function load_select1(){
	window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	$("#rowed3").setColProp('ID_Template', { editoptions: { value: xaphuong} });
	$('#ID_Template').empty();
	create_select("#ID_Template",xaphuong);
}
function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
}
function checkboxval(el){
		add_text();
		
		if($("#"+el).is(':checked')){
			return $("#"+el).val("True");
		}else{
			return $("#"+el).val("False");
		}
	}
function dis_all(tam){
	if(tam=="an"){
	 $('#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",true);
});
		$(".custom-combobox-toggle").button( {disabled:true});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		$("#add_chuandoan").button( {disabled:true});
		//$(".custom-combobox-toggle").attr("class","backhidde");
		$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).addClass( "backhidde" );
		
	 }else if(tam=="hien"){
		 $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
			$(this).attr("disabled",false);
	});
	$(".custom-combobox-toggle").button( {disabled:false});
	$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
	$("#add_chuandoan").button( {disabled:false});
	$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).removeClass( "backhidde" );
	
		}
}	
function bokhoangtrang(){
    var text=$("#mota").val();
//alert(text);
	$("#mota").dblclick(function(e) {
	// alert(window.getSelection().toString())
		//var n = text.search(window.getSelection().toString());

		 var ta = $('#mota').get( 0 );
		  //return ta.value.substring(ta.selectionStart, ta.selectionEnd);
		  alert(ta.selectionStart);
		  alert(ta.selectionEnd -1);
		  //return ta.value.substring(ta.selectionStart, ta.selectionEnd);
		 selectAndHighlightRange('mota', ta.selectionStart, ta.selectionEnd -1)
		//alert(window.getSelection().toString().length)
	})
}
function setdata_benhsu(){
	if($("#tgmacbenh").val()!=''){
		window.n_thoigianmacbenh="Bị bệnh đã "+$("#tgmacbenh").val()+" năm";
	}else{
		window.n_thoigianmacbenh="";
	}
	if($("#solandieutri").val()!=''){
		window.n_solandieutri="đã điều trị "+$("#solandieutri").val()+" lần";
	}else{
		window.n_solandieutri="";
	}
	if($("#ppdieutricu1").val()!=''){
		window.n_ppdieutricu1="bằng phương pháp: "+$("#ppdieutricu1").val();
	}else{
		window.n_ppdieutricu1="";
	}
	if($("#tgmacbenh").val()!=''){
		window.n_benhsu_dong1="+ "+window.n_thoigianmacbenh+" "+window.n_solandieutri+" "+window.n_ppdieutricu1+"\n";
	}else{
		window.n_benhsu_dong1="";
	}
	//--------
	if($("#taobon").val()=='False'){
		window.n_taobon="Không táo bón";
	}else{
		window.n_taobon="Hay táo bón";
	}
	if($("#phanmau").val()=='False'){
		window.n_phanmau=", không đi cầu ra máu.";
	}else{
		window.n_phanmau=", hay đi cầu ra máu.";
	}
	window.n_benhsu_dong2="+ "+window.n_taobon+window.n_phanmau+'\n';
	//--------
	if($("#dau").val()=='False'){
		window.n_dau="Bình thường không đau";
	}else{
		window.n_dau="Bình thường hay đau";
	}
	if($("#daitieuduong").val()=='False'){
		window.n_daitieuduong=".";
	}else{
		window.n_daitieuduong=", hay đi cầu ra máu.";
	}
	window.n_benhsu_dong3="+ "+window.n_dau+window.n_daitieuduong+'\n';
	//-------- tieuduong
	if($("#huyetapcao").val()=='False'){
		window.n_huyetapcao="";
	}else{
		window.n_huyetapcao="Huyết áp cao. ";
	}
	if($("#huyetapthap").val()=='False'){
		window.n_huyetapthap="";
	}else{
		window.n_huyetapthap="Huyết áp thấp. ";
	}
	if($("#tieuduong").val()=='False'){
		window.n_tieuduong="";
	}else{
		window.n_tieuduong="Bệnh tiểu đường. ";
	}
	if($("#benhtimmach").val()=='False'){
		window.n_benhtimmach="";
	}else{
		window.n_benhtimmach="Bệnh tim mạch. ";
	}
	window.n_benhsu_dong4="+ Tiền sử: "+window.n_huyetapcao+window.n_huyetapthap+window.n_tieuduong+window.n_benhtimmach;
	$("#benhsu").val(window.n_benhsu_dong1+window.n_benhsu_dong2+window.n_benhsu_dong3+window.n_benhsu_dong4);
}
function setdata_dacdiemhaumon(){
	if($("#nuthaumon").val()=='False'){
		window.n_nuthaumon="Không nứt";
	}else{
		window.n_nuthaumon="Nứt";
	}
	if($("#polyp").val()=='False'){
		window.n_polyp=", không có polyp";
	}else{
		window.n_polyp=", có polyp";
	}
	if($("#nhugaihm").val()=='False'){
		window.n_nhugaihm=", không có nhú gai";
	}else{
		window.n_nhugaihm=", có nhú gai";
	}
	if($("#gianvanhhm").val()=='False'){
		window.n_gianvanhhm=", vành hậu môn không giãn";
	}else{
		window.n_gianvanhhm=", vành hậu môn giãn";
	}
	if($("#gianvanhhm").val()=='False'){
		window.n_gianvanhhm=", vành hậu môn không giãn";
	}else{
		window.n_gianvanhhm=", vành hậu môn giãn";
	}
	if($("#cohoitot").val()=='False'){
		//window.n_cohoitot=" và co hồi kém";
		window.n_cohoitot="";
	}else{
		window.n_cohoitot=" và co hồi tốt";
	}
	if($("#niemmacmem").val()=='False'){
		window.n_niemmacmem=". Niêm mạc hậu môn mềm mại";
		//window.n_niemmacmem=". Niêm mạc hậu môn không mềm mại"; bác phủ bieur bỏ chữ KHÔNG
	}else{
		window.n_niemmacmem=". Niêm mạc hậu môn mềm mại";
	}
	window.n_dacdiemhaumon_dong1="- "+window.n_nuthaumon+window.n_polyp+window.n_nhugaihm+window.n_gianvanhhm+window.n_cohoitot+window.n_niemmacmem+'\n';
	
	if($("#sobuitri").val()!=''){
		if($("#builonnhat").val()!=''){
			window.n_sobuitri='Có '+$("#sobuitri").val()+' búi trĩ vị trí '+$("#vitribuitri").val()+' búi trĩ lớn nhất '+$("#builonnhat").val();
		}else{
			window.n_sobuitri='Có '+$("#sobuitri").val()+' búi trĩ vị trí '+$("#vitribuitri").val();
		}
	}else{
		window.n_sobuitri="";
	}
	if($("#buitriloi").val()=='False'){
		window.n_buitriloi="Trĩ không lồi ra ngoài";
	}else{
		if($("#phaidaylen").val()=='False'){
			window.n_buitriloi=". Trĩ lồi ra ngoài không cần đẩy lên";
		}else{
			window.n_buitriloi=". Trĩ lồi ra ngoài phải đẩy lên mới được";
		}
	}
	if($("#buitrixuathuyet").val()=='False'){
		window.n_buitrixuathuyet='. Búi trĩ không xung huyết';
	}else{
		window.n_buitrixuathuyet=". Búi trĩ xung huyết";
	}
	if($("#buitriviem").val()=='False'){
		window.n_buitriviem=', không viêm';
	}else{
		window.n_buitriviem=", có viêm";
	}
	if($("#buitrixochai").val()=='False'){
		window.n_buitrixochai=', và không xơ chai';
	}else{
		window.n_buitrixochai=", và xơ chai";
	}
	window.n_dacdiemhaumon_dong2="- "+window.n_sobuitri+window.n_buitriloi+window.n_buitrixuathuyet+window.n_buitriviem+window.n_buitrixochai+'\n';
	
	$("#dacdiemhaumon").val(window.n_dacdiemhaumon_dong1+window.n_dacdiemhaumon_dong2);
}
function ppdieutricu_callback(){
	add_text()
}
function add_text(){
	setTimeout(function(){
		setdata_benhsu();
		setdata_dacdiemhaumon();
	},500);
}
</script>
 
 
