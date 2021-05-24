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
?>

<style>
#DM_template td,#data_combo_khamnoikhoa td,#data_combo_khamphukhoa td,#data_combo_khamvu td,#data_combo_khamkhac td,#data_combo_khamsankhoa td,#data_combo_ketluan td,#data_combo_denghi td {	 
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
		height:62px;		 		
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
		padding:1px;
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
		 margin-top:-10px;
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
	}table{
		/*border-collapse: collapse !important;*/
		border:none  !important;
	}#cacbenhdamac_cacbenhkhac{
		width:230px;
		height:42px;
		
	}.textnho{
		width:17px;
	}.textngay{
		width:74px;
	}#dauhieubatthuong{
		height:25px;
		width:380px;
		margin:2px;
	}.cacbenhdamac  table td,.benhdatiemphong table td,.tinhtuoithai table td,#tiensu table td{
		text-align:right;
	}.tinhtuoithai table td.hienthi_text_trai{
		text-align:left!important;
}.xanhnhat{
	background:#C0FFFF;
}.mauvang{
	background:#FFFFC0;
}.mauhong{
	color:#F08080;
	font-weight:bold;
}legend,.chumauxanh{
	color:#0036FD;
	font-weight:bold;
}#dauhieubatthuongthainghen_fieldset2 legend{
	color:#000!important;
	font-weight:bold;
}fieldset{
	padding:0px!important;
}td{
	padding:0px!important;
}.dauhieubatthuongthainghen_dauhieukhac{
	margin-top:-12px;
}#tiensu{
	height:70px;
	background:#F5F3E5;
	margin-top: 0px;
	border-top:2px solid #DFD9C3; 
	border-left:2px solid #DFD9C3; 
	border-right:2px solid #DFD9C3; 
}#tiensusanphukhoa_fieldset{
	margin:0px 3px 3px 3px;
	height:63px;
	float:left;
	width: 955px;
}
#tiensubenhvaskchong_fieldset{
	margin:0px 0px 3px;
	height:63px;
	float:left;
	width:324px;
}#tiensusanphukhoa_ketluan{
	height:34px;
	width: 330px;
	margin-right: 2px;
}.para{
	width:15px;
	text-align:center;
}#tiensubenhvaskchong_ketluan{
	height:36px;
	width: 314px;
	margin-right: 2px;
	margin-left: 2px;
	margin-top: 2px;
}#select_khamnoikhoa{
	width:70%;
}
#select_khamkhac{
	width:76%;
}
#select_khamvu{
	width:79%;
}
#select_khamphukhoa{
	width:69%;
}#panel_main{
	height:145px;
}#select_ketluan{
	width:76%;
}
#select_denghi{
	width:78%;
}#panel_main2{
	border-top:1px solid #DFD9C3; 
	border-left:1px solid #DFD9C3; 
	border-right:1px solid #DFD9C3; 
}.ui-datepicker{ z-index: 9999 !important;}
#somui{
appearance:none;	
}#cacbenhdamac{
	width:95%;
}.textnho,.textngay{
	text-align:center;
}#right_col{
	padding-left:3px;
}#panel_main2 div.thongtin_thai{
	padding-top:1px;
}#ketluan_khamkhac{
	height:39%;
}#nonemagintop{
	padding-top:0 !important;
}input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}#cacbenhdamac_khac{
	width:220px;
	height:44px;
}.thongtin_tongthe{
		height:62px;
}
textarea{
font-size:15px;
}
</style>
<body>
<div id="dialog-confirm" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng kiểm tra lại dữ liệu nhập trên form</p>
</div>
<div id="dialog-confirm2" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu nhập ngày kinh cuối nhỏ hơn ngày hiện tại</p>
</div>
<div id="dialog-confirm3" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu nhập đầy đủ thông số PARA</p>
</div>
<div  class="data_combo_khamnoikhoa">
    <table id="data_combo_khamnoikhoa">
    </table>   
</div>
<div  class="data_combo_khamphukhoa">
    <table id="data_combo_khamphukhoa">
    </table>   
</div>
<div  class="data_combo_khamvu">
    <table id="data_combo_khamvu">
    </table>   
</div>
<div  class="data_combo_khamkhac">
    <table id="data_combo_khamkhac">
    </table>   
</div>
<div  class="data_combo_khamsankhoa">
    <table id="data_combo_khamsankhoa">
    </table>   
</div>
<div  class="data_combo_ketluan">
    <table id="data_combo_ketluan">
    </table>   
</div>
<div  class="data_combo_denghi">
    <table id="data_combo_denghi">
    </table>   
</div>

<input type="hidden" id="text_para1" value="" />
<input type="hidden" id="text_para2" value=""/>
<input type="hidden" id="text_para3" value=""/>
<input type="hidden" id="text_para4" value=""/>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="height: 58px;width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' name="nguoi_chidinh"style="width:100px" type="text" id="nguoi_chidinh"disabled>
            <label style="width:90px;text-align:right">Người thực hiện:</label>
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
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh" id="ngaychidinh" lang='luu'style="width:100px" type="text">
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:-10px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 656px!important">   
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
   <div class="thongtin_luotkham" id="right_col" style="width: 680px!important">
    	 
   	 <div>
   	   <label id="id_trangthai"class="thongtin_thai" lang='luu' type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 	
   	   </div>
    	
     <table width="672" border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td width="275"><label><a id="hentrakq" href="#">Giờ hẹn trả kết quả: </a></label> <label id="giohentra" style="color:blue"></label></td>
         <td width="224">&nbsp;</td>
         <td width="76"><a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
         <a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;margin-top: 1px;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a></td>
         <td width="87"><a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a></td>
       </tr>
       <tr>
         <td><label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label></td>
         <td>In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/></td>
         <td><a href="#" id="lichkhamthai" class="ui-widget ui-state-default ui-corner-all ui-button-icon-left" style="float: right; width: 100px; height: 22px; padding-left:30px; text-decoration:none; padding-top: 5px;">Lịch khám thai<span class="ui-icon ui-icon-clock" style="margin-left: -29px; margin-top: -17px;"></span></a> </td>
         <td><a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a></td>
       </tr>
     </table>
    </div>
   
 </div> 
 
 <div id="panel_main" >    
 	<div class="ui-widget-content ui-layout-west">
        <div id="sub_panel_main">
            <div class="ui-widget-content ui-layout-west" id="left_col1">
            <div class="cacbenhdamac">
            <fieldset id="cacbenhdamac_fieldset">
                <legend>Các bệnh đã mắc</legend>
                
                        <table width="100%">
                          <tr>
                            <td><label for="timmach">Tim mạch</label></span></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="timmach" lang='luu' id="timmach"  />
                            </td>
                            <td><label for="than">Thận</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="than" lang='luu' id="than"  />
                            </td>
                            <td><label for="rubella">Rubella</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="rubella" lang='luu'  id="rubella" />
                            </td>
                          </tr>
                          <tr>
                            <td><label for="daiduong">Đái đường</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="daiduong" lang='luu' id="daiduong"  />
                            </td>
                            <td><label for="roiloandongmau">Rối loạn đông máu</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="roiloandongmau" lang='luu' id="roiloandongmau"  />
                            </td>
                            <td><label for="tamthan">Tâm thần</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tamthan" lang='luu' id="tamthan"  />
                            </td>
                          </tr>
                          <tr>
                            <td><label for="bassdown">Base down</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="bassdown" lang='luu' id="bassdown"  />
                            </td>
                            <td><label for="viemganb">Viêm gan B</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="viemganb" lang='luu' id="viemganb"  />
                            </td>
                            <td><label for="viemganc">Viêm gan C</label></td>
                            <td>
                              <input type="checkbox" onClick=" return checkboxval(this.id);"  name="viemganc" lang='luu' id="viemganc"  />
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2"><label for="cacbenhdamac_khac">Các bệnh khác</label></td>
                            <td colspan="4" rowspan="2">
                            <textarea lang='luu' id="cacbenhdamac_khac" name="cacbenhdamac_khac"></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">&nbsp;</td>
                          </tr>
                        </table>
                
                </fieldset>
                </div>
                
                
            </div>
             <div class="ui-widget-content  ui-layout-center " id="left_col2">
             <div class="benhdatiemphong">
              <fieldset id="benhdatiemphong_fieldset">
                <legend>Bệnh đã tiêm phòng</legend>
                <table width="100%" >
                            <tr>
                              <td><label for="tiemphong_rubella">Rubella</label></td>
                              <td>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_rubella" lang='luu' id="tiemphong_rubella"  /></td>
                              <td colspan="2"><label for="tiemphong_cum">Cúm</label>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_cum" lang='luu' id="tiemphong_cum"  /></td>
                            </tr>
                            <tr>
                              <td><label for="tiemphong_thuydau">Thủy đậu</label></td>
                              <td>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_thuydau" lang='luu' id="tiemphong_thuydau"  /></td>
                              <td colspan="2"><label for="tiemphong_viemganb">Viêm gan B</label>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_viemganb" lang='luu' id="tiemphong_viemganb"  /></td>
                            </tr>
                            <tr>
                            <td><label for="tiemphong_quaibi">Quai bị</label></td>
                              <td>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_quaibi" lang='luu' id="tiemphong_quaibi"  /></td>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                            <td><label for="tiemphong_uonvansosinh">Uốn ván sơ sinh</label></td>
                              <td>
                                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="tiemphong_uonvansosinh" lang='luu' id="tiemphong_uonvansosinh"  /></td>
                              <td colspan="2"><label for="tiemphong_somui">Số mũi </label>
                              <label>
                              	<select lang="luu" id="tiemphong_somui" name="tiemphong_somui">
                                	<option value="0"></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>  
                                </label>                            </td>
                            </tr>
                            <tr>
                            <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            
                          </table>
                            
                  </fieldset>
            </div>
            
             
             </div>
        </div>
    </div>         
    <div class="ui-widget-content  ui-layout-center ">
          <div id="sub_panel_main2">
             <div class="ui-widget-content ui-layout-west"  id="right_col1">
             
                    <div class="tinhtuoithai">
                      <fieldset id="tinhtuoithai_fieldset">
                        <legend>Tính tuổi thai
                    
                                  </legend>
                        <table width="100%">
                                    <tr>
                                      <td colspan="4" class="hienthi_text_trai"><span class="col mauhong">
                                        <input  id="lalandautienkhamthai" type="checkbox" onClick=" return checkboxval(this.id);" lang="luu"  name="lalandautienkhamthai" />
                                      <label for="lalandautienkhamthai">Là lần đầu tiên khám thai</label></span></td>
                                    </tr>
                                    <tr>
                                      <td style="width: 80px;"><label for="KT_SoTuanThai">Tuổi thai K.thai:</label></td>
                                      <td><input class="textnho xanhnhat" type="text" name="KT_SoTuanThai" lang="luu" id="KT_SoTuanThai" /> 
                                        <label for="KT_SoTuanThai">Tuần</label> 
                                      <input class="textnho xanhnhat" type="text" name="KT_SoNgayThai" lang="luu" id="KT_SoNgayThai" /></td>
                                      <td><label for="SA_SoTuanThai">Tuổi thai S.âm:</label></td>
                                      <td><input class="textnho xanhnhat" type="text" name="SA_SoTuanThai" lang="luu" id="SA_SoTuanThai" />
                    <label for="SA_SoTuanThai">Tuần</label>
                      <input class="textnho xanhnhat" type="text" name="SA_SoNgayThai" lang="luu" id="SA_SoNgayThai" /></td>
                                    </tr>
                                    <tr>
                                    <td><label for="NSDK_KhamThai">NSDK (K.thai):</label></td>
                                      <td><input class="textngay xanhnhat" type="text" name="NSDK_KhamThai" lang="luu" id="NSDK_KhamThai" />
                                     	 <input class="textngay xanhnhat" type="text" name="NSDK_KhamThai1" id="NSDK_KhamThai1" style="display:none" />
                                      </td>
                                      <td><label for="ngay_sieuam">NSDK (siêu âm):</label></td>
                                      <td><input class="textngay xanhnhat" type="text" name="ngay_sieuam" lang="luu" id="ngay_sieuam" /></td>
                                    </tr>
                                    <tr>
                                    <td><label for="NgayKinhCuoi">Ngày kinh cuối:</label></td>
                                      <td><input class="textngay" type="text" name="NgayKinhCuoi" lang="luu" id="NgayKinhCuoi" /></td>
                                      <td><label for="NgaySinhDuKien">N.sinh dự kiến:</label></td>
                                      <td><input class="textngay mauvang" type="text" name="NgaySinhDuKien" lang="luu" id="NgaySinhDuKien" /></td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    
                        </table>
                                    
                      </fieldset>
                     </div>
             
             </div>
             <div class="ui-widget-content  ui-layout-center "  id="right_col2">
             <div class="dauhieubatthuongthainghen">
  <fieldset id="dauhieubatthuongthainghen_fieldset">
    <legend>Các dấu hiệu bất thường khi thai nghén </legend>
	<div class="dauhieubatthuongthainghen_trai" style=" width:50%; height:80px; float:left;" >
    <fieldset id="dauhieubatthuongthainghen_fieldset2">
    <legend>Các triệu chứng nghén </legend>
    <table width="100%">
      <tr>
        <td>
          <input type="checkbox" onClick=" return checkboxval(this.id);"  name="non" lang='luu' id="non"  /></td>
        <td><label for="non">Nôn</label></td>
        <td>
          <input type="checkbox" onClick=" return checkboxval(this.id);"  name="metmoi" lang='luu' id="metmoi"  /></td>
        <td><label for="metmoi">Mệt mỏi</label></td>
      </tr>
      <tr>
        <td>
          <input type="checkbox" onClick=" return checkboxval(this.id);"  name="buonnon" lang='luu' id="buonnon"  /></td>
        <td><label for="buonnon">Buồn nôn</label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </fieldset>
    </div>
    <div class="dauhieubatthuongthainghen_phai" style=" width:50%;height:80px; float:left;" >
      <table width="100%">
        <tr>
          <td>
            <input type="checkbox" onClick=" return checkboxval(this.id);"  name="daubungduoi" lang='luu' id="daubungduoi"  /></td>
          <td><label for="daubungduoi">Đau bụng dưới</label></td>
          <td>
            <input type="checkbox" onClick=" return checkboxval(this.id);"  name="daudau" lang='luu' id="daudau"  /></td>
          <td><label for="daudau">Đau đầu</label></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" onClick=" return checkboxval(this.id);"  name="ramauamdao" lang='luu' id="ramauamdao"  /></td>
          <td><label for="ramauamdao">Ra máu âm đạo</label></td>
          <td>
            <input type="checkbox" onClick=" return checkboxval(this.id);"  name="daumat" lang='luu' id="daumat"  /></td>
          <td><label for="daumat">Hoa mắt</label></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" onClick=" return checkboxval(this.id);"  name="dauthuongvi" lang='luu' id="dauthuongvi"  /></td>
          <td><label for="dauthuongvi">Đau thượng vị</label></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="dauhieubatthuongthainghen_dauhieukhac" style="float:left;" >
    <label style="font-weight:bold" for="dauhieubatthuong">Các dấu hiệu bất thường khác </label><br>
    <textarea lang='luu' id="dauhieubatthuong" name="dauhieubatthuong"></textarea>
    </div>
  </fieldset>
</div>
             </div>
          </div>
    </div>

</div>
<div id="tiensu">
<fieldset id="tiensusanphukhoa_fieldset">
<legend>Tiền sử sản phụ khoa </legend>
<table width="100%">
  <tr>
    <td><label for="para1">PARA</label>
    <input lang='luu' type="text" name="para1" id="para1" class="para" maxlength="1" />
    <input lang='luu' type="text" name="para2" id="para2" class="para" maxlength="1" />
    <input lang='luu' type="text" name="para3" id="para3" class="para" maxlength="1" />
    <input lang='luu' type="text" name="para4" id="para4" class="para" maxlength="1" /></td>
    <td><label for="thaichetluu">Thai chết lưu</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="thaichetluu" lang='luu' id="thaichetluu"  /></td>
    <td><label for="sangiat">Sản giật</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="sangiat" lang='luu' id="sangiat"  /></td>
    <td><label for="chaymautruocsanh">Chảy máu trước sanh</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="chaymautruocsanh" lang='luu' id="chaymautruocsanh"  /></td>
    <td><label for="dekho">Sinh bất thường(đẻ khó)</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="dekho" lang='luu' id="dekho"  /></td>
    <td rowspan="2"><span class="dauhieubatthuongthainghen_dauhieukhac">
      <textarea lang='luu' id="tiensusanphukhoa_ketluan" name="tiensusanphukhoa_ketluan"></textarea>
    </span></td>
  </tr>
  <tr>
    <td><label for="binhthuong">Bình thường</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="binhthuong" lang='luu' id="binhthuong"  /></td>
    <td><label for="banghuyet">Băng huyết</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="banghuyet" lang='luu' id="banghuyet"  /></td>
    <td><label for="molaythai">Mổ lấy thai</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="molaythai" lang='luu' id="molaythai"  /></td>
    <td><label for="deconduoi2500gr">Đẻ con dưới 2500gr</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="deconduoi2500gr" lang='luu' id="deconduoi2500gr"  /></td>
    <td><label for="conchetsaude">Con chết tuần đầu sau đẻ</label>
    <input type="checkbox" onClick=" return checkboxval(this.id);"  name="conchetsaude" lang='luu' id="conchetsaude"  /></td>
  </tr>
</table>
</fieldset>
<fieldset id="tiensubenhvaskchong_fieldset">
<legend>Tiền sử bệnh và SK chồng </legend>
<textarea lang='luu' id="tiensubenhvaskchong_ketluan" name="tiensubenhvaskchong_ketluan"></textarea>
</fieldset>

</div>
<div id="panel_main2">    

        <div class="ui-widget-content ui-layout-west"  id="inner">
				<div class="ui-layout-north thongtin_thai" id="sub_inner"> 
                
                    <div class="ui-layout-north thongtin_thai"> 
                        <label style="text-align:left" class="chumauxanh" >Khám nội khoa:</label>
                        
                        <span class="custom-combobox">
                   		<input id="combo_khamnoikhoa" name="combo_khamnoikhoa"  type="text" style="width:250px;" placeholder="--Chọn mẫu--">
                        </span> 
                        <input id="combo_khamnoikhoa1"  name="combo_khamnoikhoa1" type="text" style="display:none" >
                        
                        <button id="add_khamnoikhoa" style="height:23px;width:23px;float: right;">Thêm</button>
                        <textarea lang='luu'id="ketluan_khamnoikhoa" name="ketluan_khamnoikhoa"style="width:98%; height:52%;font-size:13px" ></textarea>
        
                    </div>
                  <div class="ui-layout-center thongtin_thai"> 
                        <label style="text-align:left;" class="chumauxanh">Khám phụ khoa:</label>
                         <span class="custom-combobox">
                   		<input id="combo_khamphukhoa" name="combo_khamphukhoa"  type="text" style="width:246px;" placeholder="--Chọn mẫu--">
                        </span> 
                        <input id="combo_khamphukhoa1"  name="combo_khamphukhoa1" type="text" style="display:none" >
                        <button id="add_khamphukhoa" style="height:23px;width:23px;float: right;">Thêm</button>
                        <textarea lang='luu'id="ketluan_khamphukhoa" name="ketluan_khamphukhoa"style="width:98%; height:52%;font-size:13px" ></textarea>
        
                    </div>

    
                </div>
              <div class="ui-layout-center thongtin_thai" id="sub_inner2"> 
                   <div class="ui-layout-north thongtin_thai" id="nonemagintop"> 
                        <label style="text-align:left;" class="chumauxanh">Khám vú:</label>
                        <span class="custom-combobox">
                   			<input id="combo_khamvu" name="combo_khamvu"  type="text" style="width:280px;" placeholder="--Chọn mẫu--">
                        </span> 
                        <input id="combo_khamvu1"  name="combo_khamvu1" type="text"  style="display:none" >
                        <button id="add_khamvu" style="height:23px;width:23px;float: right;" >Thêm</button>
                        <textarea lang='luu'id="ketluan_khamvu" name="ketluan_khamvu"style="width:98%; height:52%;font-size:13px" ></textarea>
        
                    </div>
                  <div class="ui-layout-center thongtin_thai"> 
                        <label style="text-align:left;" class="chumauxanh">Khám khác:</label>
                        <span class="custom-combobox">
                   			<input id="combo_khamkhac" name="combo_khamkhac"  type="text" style="width:270px;" placeholder="--Chọn mẫu--">
                        </span> 
                        <input id="combo_khamkhac1"  name="combo_khamkhac1" type="text" style="display:none" >
                        <button id="add_khamkhac" style="height:23px;width:23px;float: right;">Thêm</button>
                        <textarea lang='luu'id="ketluan_khamkhac" name="ketluan_khamkhac"style="width:98%; height:39%;font-size:13px" ></textarea>
        
                    </div>
    
                </div>
        
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center " id="n_center">
           <div id="sub_center">
           	<fieldset id="sub_center_fieldset" style="padding:5px !important;">
          		<legend>Khám toàn thân </legend>
                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="ktt_binhthuong" lang='luu' id="ktt_binhthuong"> <label for="ktt_binhthuong">Bình thường</label>
                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="ktt_phutoanthan" lang='luu' id="ktt_phutoanthan"> <label for="ktt_phutoanthan">Phù toàn chân</label>
                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="ktt_phu2chiduoi" lang='luu' id="ktt_phu2chiduoi"> <label for="ktt_phu2chiduoi">Phù 2 chi dưới</label>
                <input type="checkbox" onClick=" return checkboxval(this.id);"  name="ktt_daxanhdiemmacnhot" lang='luu' id="ktt_daxanhdiemmacnhot"> <label for="ktt_daxanhdiemmacnhot">Da xanh, niêm mạc nhợt</label>
            </fieldset>
            <label style="text-align:left;margin-top:10px;margin-bottom:10px;" class="chumauxanh">Khám sản khoa:</label>
             <span class="custom-combobox" style="margin-top:10px">
                 <input id="combo_khamsankhoa" name="combo_khamsankhoa"  type="text" style="width:300px;" placeholder="--Chọn mẫu--">
              </span> 
             <input id="combo_khamsankhoa1"  name="combo_khamsankhoa1" type="text" style="display:none" >
            <button id="add_khamsankhoa" style="height:23px;width:23px;float: right;margin-top:10px;margin-bottom:10px;">Thêm</button>
            <textarea lang='luu'id="ketluan_khamsankhoa" name="ketluan_khamsankhoa"style="width:98%; height:65%;font-size:13px" ></textarea>
           </div>
        </div>
        <div class="ui-widget-content ui-layout-east" id="inner2"> 
            <div class="ui-layout-north thongtin_thai"id="sub_inner2"> 
            	<label style="text-align:left;font-size:14px;color:#F08080; font-weight:bold;">KẾT LUẬN:</label>
                <span class="custom-combobox">
                 <input id="combo_ketluan" name="combo_ketluan"  type="text" style="width:260px;" placeholder="--Chọn mẫu--">
              	</span> 
             	<input id="combo_ketluan1"  name="combo_ketluan1" type="text" style="display:none" >
                        <button id="add_ketluan" style="height:23px;width:23px;float: right;">Thêm</button>
                <textarea lang='luu'id="ketluan_ketluan" name="ketluan_ketluan"style="width:98%; height:78%;font-size:13px" ></textarea>

            </div>
          <div class="ui-layout-center thongtin_thai" id="sub_inner22"> 
            	<label style="text-align:left;font-size:14px;color:#F08080; font-weight:bold;">ĐỀ NGHỊ:</label>
                 <span class="custom-combobox">
                 <input id="combo_denghi" name="combo_denghi"  type="text" style="width:267px;" placeholder="--Chọn mẫu--">
              	</span> 
             	<input id="combo_denghi1"  name="combo_denghi1" type="text" style="display:none" >
                        <button id="add_denghi" style="height:23px;width:23px;float: right;">Thêm</button>
                <textarea lang='luu'id="ketluan_denghi" name="ketluan_denghi"style="width:98%; height:71%;font-size:13px" ></textarea>

            </div>

        </div>          
	</div>
</body>
</html>
<script type="text/javascript">
var report_code=["PhieuKhamThai"];
var report_name=["Phiếu Khám Thai"];
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan="";
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var sieuanthai4d=0;
var chuky = 1;
$(document).ready(function() {	
	jwerty.key('ctrl+s', false);
	window.luotthu1=1;
	window.nhanvien2_complete=0;
	window.nhanvien1_complete=0;
	openform_shortcutkey();
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}	
	})	
	$("#xemin").click(function(e){
		$.cookie("in_status", "print_preview"); 
	dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=khamthai&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&chuky="+chuky,'PhieuKhamThai');
	
	});
	
	$("#lichkhamthai").click(function(e){
	$.cookie("in_status", "print_preview"); 
	dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=lichhenkhamthai&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuKhamThai');
	
	});


	<?php
	echo "window.IsDoctor= ".$_SESSION["user"]["IsDoctor"];
	?>
	//alert(IsDoctor);
	//alert(encode64("89045"))
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
		});
    $.post( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_para&idbenhnhan="+id_benhnhan).done(function(data) {

		window._n_para=data;
	//	alert(window._n_para);

	});
	$("#panel_main").fadeIn(1000); 
	$("#panel_main2").css("height",$(window).height()-350+"px");			 
	$("#panel_main2").fadeIn(1000); 
			 
	create_layout();	
	create_layout2();
	create_layout_sub();
	create_layout_sub2();
	resize_control();
	
	number_textbox("#para1");
	number_textbox("#para2");
	number_textbox("#para3");
	number_textbox("#para4");
	
	
	
	$.get( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_solankhamthai&idbenhnhan="+id_benhnhan, function( data ) {
	  //$( ".result" ).html( data );
	  window.solandakhamthai=data;
	  //alert(data);
	});
	
	
	$("#lalandautienkhamthai").click(function(){
		
		if(sieuanthai4d!=0){
			var idk=sieuanthai4d[0]["ID_Kham"];
			var sn=sieuanthai4d[0]["SoNgayThai"];
			if(sn>7){
				var tam=sn/7;
				var sotuan =parseInt(tam);
				var songay = sn-(sotuan*7);
			}else if(sn==7){
				var tinhtuan=sn/7;
				var sotuan =tinhtuan;
				var songay = sn-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = sn;
			}
			$("#SA_SoTuanThai").val(sotuan);
			$("#SA_SoNgayThai").val(songay);
			var date = new Date(sieuanthai4d[0]["NgayGioThucHien"]);
			date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[0]["SoNgayThai"]));
			$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
			$("#NgaySinhDuKien").val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			var rs=$("#NgaySinhDuKien").val().split("/");
			var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			date.setDate(date.getDate()-280);
			$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			$('#NSDK_KhamThai').val($("#NgaySinhDuKien").val());
			
			var rs=$('#NgayKinhCuoi').val().split("/");
			var MyDate = new Date();
			var MyDateString = new Date();
			var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
			var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
			MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
			//--------
	
			var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			var MyDateString2 = new Date();
			var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
			var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
			MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();
			var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString))-1;
	
			if(tongngay>7){
				var tam=tongngay/7;
				var sotuan =parseInt(tam);
				var songay = tongngay-(sotuan*7);
			}else if(tongngay==7){
				var tinhtuan=tongngay/7;
				var sotuan =tinhtuan;
				var songay = tongngay-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = tongngay;
				}
			
			//alert(tongngay); 
			$('#KT_SoTuanThai').val(sotuan);
			$('#KT_SoNgayThai').val(songay);
			//$('#NSDK_KhamThai').hide();
			//$('#NSDK_KhamThai1').show();
		}//end if
		$.post( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_para&idbenhnhan="+id_benhnhan).done(function(data) {
			//setTimeout(function(){
				var _pr=data;
				var rs=_pr.split("-");
				$("#para1").val(rs[0]);
				$("#para2").val(rs[1]);
				$("#para3").val(rs[2]);
				$("#para4").val(rs[3]);
			//},1000);

		});
	});
	$(document).keyup(function(e) {
		if(jwerty.is("ctrl+s",e)){
			$("#luu").click();
			return false;
		}
	});
	 
	//$("#KT_SoTuanThai,#KT_SoNgayThai,#SA_SoTuanThai,#SA_SoNgayThai,#NSDK_KhamThai,#ngay_sieuam").attr('readonly','readonly');
	$("#SA_SoTuanThai,#SA_SoNgayThai,#NSDK_KhamThai,#ngay_sieuam").attr('readonly','readonly');
	
	$('#NgayKinhCuoi').datepicker( {
     onSelect: function (dateText, inst) {
	
		 var rs=$(this).val().split("/");
		 var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
		 var date2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
		 var date3 = rs[1]+"/"+(rs[0]-1)+"/"+rs[2];
		 
			var d = new Date();
			var thang_2 = ((d.getMonth()+1)<10?'0':'') + (d.getMonth()+1);
			var today_date =  thang_2 + '/' + d.getDate()+ '/' + d.getFullYear();
			 var today_date2 = new Date(today_date);
			if(today_date2 < date){
				$('#NgayKinhCuoi').val("");
				$( "#dialog-confirm2" ).dialog('open');
				return false;
			}else{
				//date2.setDate(date2.getDate()-1); // chon ngay kinh no tru 1 ngày
				date2.setDate(date2.getDate());
				//date3.setDate(date3.getDate()-1);
				$(this).val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date2));
				date.setDate(date.getDate()+280);
				$('#NSDK_KhamThai').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
				$('#NgaySinhDuKien').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
				var MyDate = new Date();
				var MyDateString = new Date();
				var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
				var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
				MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
				//--------

				var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
				var MyDateString2 = new Date();
				var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
				var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
				MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();

				function parseDate(str) {
				var mdy = str.split('/')
				return new Date(mdy[2], mdy[0]-1, mdy[1]);
				}

				function daydiff(first, second) {
				return (second-first)/(1000*60*60*24)
				}

				var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString))-1;

				if(tongngay>7){
				var tam=tongngay/7;
				var sotuan =parseInt(tam);
				var songay = tongngay-(sotuan*7);
				}else if(tongngay==7){
				var tinhtuan=tongngay/7;
				var sotuan =tinhtuan;
				var songay = tongngay-(tinhtuan*7);
				}else{
				var sotuan =0;
				var songay = tongngay;
				}
				//alert(tongngay); 
				$('#KT_SoTuanThai').val(sotuan);
				$('#KT_SoNgayThai').val(songay);
				//alert(MyDateString+"___"+toTimestamp(MyDateString)+"-"+toTimestamp(MyDateString2)+"___"+MyDateString2);
				//alert(MyDateString+"-"+toTimestamp('01/15/14'));
		
			}
     },dateFormat: $.cookie("ngayJqueryUi"),
  	});
	
	$('#NgaySinhDuKien').datepicker( {
		//nam123
     onSelect: function (dateText, inst) {
		var rs=$(this).val().split("/");
		var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
		date.setDate(date.getDate()-280);
		$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
		$('#NSDK_KhamThai').val($(this).val());
		
		var rs=$('#NgayKinhCuoi').val().split("/");
		var MyDate = new Date();
		var MyDateString = new Date();
		var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
		var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
		MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
		//--------

		var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
		var MyDateString2 = new Date();
		var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
		var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
		MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();

		var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString))-1;

		if(tongngay>7){
			var tam=tongngay/7;
			var sotuan =parseInt(tam);
			var songay = tongngay-(sotuan*7);
		}else if(tongngay==7){
			var tinhtuan=tongngay/7;
			var sotuan =tinhtuan;
			var songay = tongngay-(tinhtuan*7);
		}else{
			var sotuan =0;
			var songay = tongngay;
			}
		//alert(tongngay); 
		$('#KT_SoTuanThai').val(sotuan);
		$('#KT_SoNgayThai').val(songay);

     },dateFormat: $.cookie("ngayJqueryUi"),
  	});

    $( "#dialog-confirm" ).dialog({ 
		autoOpen: false,
      resizable: false,
	  width:295,
      modal: true,
      buttons: {
        "Ok": function() {
          $( this ).dialog( "close" );
		 setTimeout(function() {
		  $("#NgaySinhDuKien").focus();
		  }, 300);
        }
      }
    });
	 $( "#dialog-confirm2" ).dialog({ 
		autoOpen: false,
      resizable: false,
	  width:330,
      modal: true,
      buttons: {
        "Ok": function() {
			$( this ).dialog( "close" );
			setTimeout(function() {
			$("#NgayKinhCuoi").focus();
			$("#NgayKinhCuoi").click();
			}, 300);
          
        }
      }
    });
	
	$( "#dialog-confirm3" ).dialog({ 
		autoOpen: false,
      resizable: false,
	  width:330,
      modal: true,
      buttons: {
        "Ok": function() {
			
          $( this ).dialog( "close" );
		  
		  setTimeout(function() {
       		var para1=$("#para1").val();
			var para2=$("#para2").val();
			var para3=$("#para3").val();
			var para4=$("#para4").val();
			if(para1=="")
				$("#para1").focus();
				else if(para2=="")
		  			$("#para2").focus();
					else if(para3=="")
		  				$("#para3").focus();
						else if(para4=="")
		  					$("#para4").focus();
			}, 300);
		 
        }
      }
    });
	
	$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
	
	//para 
	$( "#para1" ).click(function() {
		//alert($( "#para1" ).val());
	  $( "#text_para1" ).val($( "#para1" ).val());
	});
	$( "#para2" ).click(function() {
	   $( "#text_para2" ).val($( "#para2" ).val());
	});
	$( "#para3" ).click(function() {
	    $( "#text_para3" ).val($( "#para3" ).val());
	});
	$( "#para4" ).click(function() {
		//alert();
	  $( "#text_para4" ).val($( "#para4" ).val());
	});
	
	$( "#para1" ).focus(function() {
		//alert($( "#para1" ).val());
	  $( "#text_para1" ).val($( "#para1" ).val());
	});
	$( "#para2" ).focus(function() {
	   $( "#text_para2" ).val($( "#para2" ).val());
	});
	$( "#para3" ).focus(function() {
	    $( "#text_para3" ).val($( "#para3" ).val());
	});
	$( "#para4" ).focus(function() {
		//alert();
	  $( "#text_para4" ).val($( "#para4" ).val());
	});
	
	$( "#para1" ).keyup(function(e) {
		//alert(e.keyCode);
		if (e.keyCode === 17) {
			return false
		}else{
			if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13){
			var para1=$( "#para1" ).val();
			if (para1==null || para1=="") {
				$( "#para1" ).focus();
			} else {
			$( "#para2" ).focus();
			}
			}
			
		}
  		
	});
	$( "#para2" ).keyup(function(e) {
  		if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13){
			var para2=$( "#para2" ).val();
			if (para2==null || para2=="") {
				$( "#para2" ).focus();
			} else {
			$( "#para3" ).focus();
			}
		}
	});
	$( "#para3" ).keyup(function(e) {
  		if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13){
			var para3=$( "#para3" ).val();
			if (para3==null || para3=="") {
				$( "#para3" ).focus();
			} else {
			$( "#para4" ).focus();
			}
		}
	});
	$( "#para4" ).keyup(function(e){
		if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13){
			var para4=$( "#para4" ).val();
			$( "#text_para4" ).val($( "#para4" ).val());
			if (para4==null || para4=="") {
				$( "#para4" ).focus();
				
			} 
		}
		if (e.keyCode === 8 || e.keyCode === 46) {
				var val4 =$( "#text_para4" ).val();
				$( "#text_para4" ).val($( "#para4" ).val())
				//var a=event.target.$( "#para4" ).val()
				if(val4==""){
					$( "#para3" ).focus();
					}
					
				return false;
				}
		});
	$( "#para3" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val3 =$( "#text_para3" ).val();
				$( "#text_para3" ).val($( "#para3" ).val())
				if(val3==""){
					$( "#para2" ).focus();
					}
					
				return false;
			}
		});
	$( "#para2" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val2 =$( "#text_para2" ).val();
				$( "#text_para2" ).val($( "#para2" ).val())
				if(val2==""){
					$( "#para1" ).focus();
					}
					
				return false;
			}
		});
	$( "#para1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val1 =$( "#text_para1" ).val();
				$( "#text_para1" ).val($( "#para1" ).val())
				if(val1==""){
					$( "#para1" ).focus();
					}
					
				return false;
			}
		});
	// end para

		
	// enter event 
	$( "#timmach" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#than" ).focus();
				$( "#than" ).select();
				return false;
			}
	});
	$( "#than" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#rubella" ).focus();
				$( "#rubella" ).select();
				return false;
			}
	});
	$( "#rubella" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#daiduong" ).focus();
				$( "#daiduong" ).select();
				return false;
			}
	});
	$( "#daiduong" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#roiloandongmau" ).focus();
				$( "#roiloandongmau" ).select();
				return false;
			}
	});
	$( "#roiloandongmau" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tamthan" ).focus();
				$( "#tamthan" ).select();
				return false;
			}
	});
	$( "#tamthan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#bassdown" ).focus();
				$( "#bassdown" ).select();
				return false;
			}
	});
	$( "#bassdown" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#viemganb" ).focus();
				$( "#viemganb" ).select();
				return false;
			}
	});
	$( "#viemganb" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#viemganc" ).focus();
				$( "#viemganc" ).select();
				return false;
			}
	});
	$( "#viemganc" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#cacbenhdamac_khac" ).focus();
				return false;
			}
	});
	$( "#cacbenhdamac_khac" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#tiemphong_rubella" ).focus();
				$( "#tiemphong_rubella" ).select();
				return false;
			}
	});
	
	$( "#tiemphong_rubella" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_cum" ).focus();
				$( "#tiemphong_cum" ).select();
				return false;
			}
	});
	$( "#tiemphong_cum" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_thuydau" ).focus();
				$( "#tiemphong_thuydau" ).select();
				return false;
			}
	});
	$( "#tiemphong_thuydau" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_viemganb" ).focus();
				$( "#tiemphong_viemganb" ).select();
				return false;
			}
	});
	$( "#tiemphong_viemganb" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_quaibi" ).focus();
				$( "#tiemphong_quaibi" ).select();
				return false;
			}
	});
	$( "#tiemphong_quaibi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_uonvansosinh" ).focus();
				$( "#tiemphong_uonvansosinh" ).select();
				return false;
			}
	});
	$( "#tiemphong_uonvansosinh" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tiemphong_somui" ).focus();
				$( "#tiemphong_somui" ).select();
				return false;
			}
	});
	$( "#tiemphong_somui" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#lalandautienkhamthai" ).focus();
				$( "#lalandautienkhamthai" ).select();
				return false;
			}
	});
	$( "#lalandautienkhamthai" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#NgayKinhCuoi" ).focus();
				$( "#NgayKinhCuoi" ).select();
				return false;
			}
	});
	
	$( "#NgayKinhCuoi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#NgaySinhDuKien" ).focus();
				$( "#NgaySinhDuKien" ).select();
				return false;
			}
	});
	$( "#NgaySinhDuKien" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#non" ).focus();
				$( "#non" ).select();
				$( "#NgaySinhDuKien" ).datepicker("hide");
				return false;
			}
	});
	$( "#non" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#metmoi" ).focus();
				$( "#metmoi" ).select();
				return false;
			}
	});
	$( "#metmoi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#buonnon" ).focus();
				$( "#buonnon" ).select();
				return false;
			}
	});
	$( "#buonnon" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#daubungduoi" ).focus();
				$( "#daubungduoi" ).select();
				return false;
			}
	});
	$( "#daubungduoi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#daudau" ).focus();
				$( "#daudau" ).select();
				return false;
			}
	});
	$( "#daudau" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ramauamdao" ).focus();
				$( "#ramauamdao" ).select();
				return false;
			}
	});
	$( "#ramauamdao" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#daumat" ).focus();
				$( "#daumat" ).select();
				return false;
			}
	});
	$( "#daumat" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#dauthuongvi" ).focus();
				$( "#dauthuongvi" ).select();
				return false;
			}
	});
	$( "#dauthuongvi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#dauhieubatthuong" ).focus();
				return false;
			}
	});
	$( "#dauhieubatthuong" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#para1" ).focus();
				return false;
			}
	});
	$( "#para4" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				var para4=$( "#para4" ).val();
				if (para4==null || para4=="") {
					$( "#para4" ).focus();
				} else {
				$( "#thaichetluu" ).focus();
				}
			}
	});
	$( "#thaichetluu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#sangiat" ).focus();
				return false;
			}
	});
	$( "#sangiat" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#chaymautruocsanh" ).focus();
				return false;
			}
	});
	$( "#chaymautruocsanh" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#dekho" ).focus();
				$( "#dekho" ).select();
				return false;
			}
	});
	$( "#dekho" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#tiensusanphukhoa_ketluan" ).focus();
				return false;
			}
	});
	$( "#tiensusanphukhoa_ketluan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#binhthuong" ).focus();

				return false;
			}
	});
	$( "#binhthuong" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#banghuyet" ).focus();
				$( "#banghuyet" ).select();
				return false;
			}
	});
	$( "#banghuyet" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#molaythai" ).focus();
				return false;
			}
	});
	$( "#molaythai" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#deconduoi2500gr" ).focus();
				return false;
			}
	});
	$( "#deconduoi2500gr" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#conchetsaude" ).focus();
				return false;
			}
	});
	$( "#conchetsaude" ).keyup(function(e){
		//alert(e.keyCode); e.ctrlKey && 
			if (e.keyCode == 13) {
				$( "#tiensubenhvaskchong_ketluan" ).focus();
				return false;
			}
	});
	$( "#tiensubenhvaskchong_ketluan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#combo_khamnoikhoa" ).focus();
				return false;
			}
	});
	$( "#combo_khamnoikhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if ( e.keyCode == 13) {
				$( "#ketluan_khamnoikhoa" ).focus();
				return false;
			}
	});
	$( "#ketluan_khamnoikhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if ( e.keyCode == 16  && e.keyCode == 13) {
				$( "#combo_khamphukhoa" ).focus();
				return false;
			}
	});
	$( "#combo_khamphukhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_khamphukhoa" ).focus();
				return false;
			}
	});
	$( "#ketluan_khamphukhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#combo_khamvu" ).focus();
				return false;
			}
	});
	$( "#combo_khamvu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_khamvu" ).focus();

				return false;
			}
	});
	$( "#ketluan_khamvu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#combo_khamkhac" ).focus();

				return false;
			}
	});
	$( "#combo_khamkhac" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_khamkhac" ).focus();
				return false;
			}
	});
	$( "#ketluan_khamkhac" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#ktt_binhthuong" ).focus();
				return false;
			}
	});
	$( "#ktt_binhthuong" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13 ) {
				$( "#ktt_phutoanthan" ).focus();
				return false;
			}
	});
	$( "#ktt_phutoanthan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ktt_phu2chiduoi" ).focus();
				$( "#ktt_phu2chiduoi" ).select();
				return false;
			}
	});
	$( "#ktt_phu2chiduoi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ktt_daxanhdiemmacnhot" ).focus();
				return false;
			}
	});
	$( "#ktt_daxanhdiemmacnhot" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#combo_khamsankhoa" ).focus();

				return false;
			}
	});
	$( "#combo_khamsankhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_khamsankhoa" ).focus();
				return false;
			}
	});
	$( "#ketluan_khamsankhoa" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#combo_ketluan" ).focus();
				return false;
			}
	});
	$( "#combo_ketluan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_ketluan" ).focus();
				return false;
			}
	});
	$( "#ketluan_ketluan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#combo_denghi" ).focus();
				return false;
			}
	});
	$( "#combo_denghi" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode == 13) {
				$( "#ketluan_denghi" ).focus();
				return false;
			}
	});
	$( "#ketluan_denghi" ).keyup(function(e){
			if (e.keyCode == 16  && e.keyCode == 13) {
				$( "#luu" ).focus();
				return false;
			}
			
			if (e.shiftKey && e.keyCode == 9) {
				$( "#combo_denghi" ).focus();
				return false;
			}
	});
	
	
/*	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				$("#luu").click();
				return false;
			}
		};*/
	
$("#add_khamnoikhoa,#add_khamphukhoa,#add_khamvu,#add_khamsankhoa,#add_khamkhac,#add_ketluan,#add_denghi").click(function(e){
	links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=169&id_loai=90';
	elem=1 + Math.floor(Math.random() * 1000000000); 
	width=90;
	height=80;   
	dialog_add_dm("",width,height,elem,links); 
})      

	//end enter event


	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien','');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi','');
	
	create_combobox('#combo_khamnoikhoa', '#combo_khamnoikhoa1', ".data_combo_khamnoikhoa", "#data_combo_khamnoikhoa", create_khamnoikhoa, 500, 400, 'Khám nội khoa', 'data_khamnoikhoa','');
	create_combobox('#combo_khamphukhoa', '#combo_khamphukhoa1', ".data_combo_khamphukhoa", "#data_combo_khamphukhoa", create_khamphukhoa, 500, 400, 'Khám phụ khoa', 'data_khamphukhoa','');
	create_combobox('#combo_khamvu', '#combo_khamvu1', ".data_combo_khamvu", "#data_combo_khamvu", create_khamvu, 500, 400, 'Khám vú', 'data_khamvu','');
	create_combobox('#combo_khamkhac', '#combo_khamkhac1', ".data_combo_khamkhac", "#data_combo_khamkhac", create_khamkhac, 500, 400, 'Khám khác', 'data_khamkhac','');
	
	create_combobox('#combo_khamsankhoa', '#combo_khamsankhoa1', ".data_combo_khamsankhoa", "#data_combo_khamsankhoa", create_khamsankhoa, 500, 400, 'Khám sản khoa', 'data_khamsankhoa','');
	create_combobox('#combo_ketluan', '#combo_ketluan1', ".data_combo_ketluan", "#data_combo_ketluan", create_ketluan, 500, 400, 'Kết luận', 'data_ketluan','');
	create_combobox('#combo_denghi', '#combo_denghi1', ".data_combo_denghi", "#data_combo_denghi", create_denghi, 500, 400, 'Đề nghị', 'data_denghi','');
	
	
	
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham_thai&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//alert(val[i]["cell"][9])
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
			load_complete();			
									 
		
		});		
	});	
	
	$(window).resize(function() {		 
		$("#panel_main").fadeIn(1000); 
		$("#panel_main2").css("height",$(window).height()-350+"px");			 
		$("#panel_main2").fadeIn(1000); 
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
		$( "#add_khamnoikhoa" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_khamphukhoa" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_khamvu" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_khamkhac" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_khamsankhoa" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_ketluan" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_denghi" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		
		.click(function() {
		 
		});
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
		$("#xoatskt").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoats';
				//$("#ketluan").val("");
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
		/*center*/
		$( "#center_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			sub_navigator_load("end","click");
		});
		$( "#center_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			sub_navigator_load("end","click"); 
		}); 
		$( "#center_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			sub_navigator_load(1,"click");  
		});  
		$( "#center_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			sub_navigator_load(-1,"click");  
		});		         
  	}); 
        
 
			  $("#sua").click(function(){
				  dis_all("hien");
				 // $("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
			  	//$('#sua').button( {disabled:true});
					$('#luu').button( {disabled:false});
					$('#ketluan').attr("disabled",false);
					$('#mota').attr("disabled",false);
					$('#thongsokt').attr("disabled",false);//thong so ky thuat							
					$('#loikhuyen').attr("disabled",false);
					$('#xoatskt').button( {disabled:false});//xoa thong so ky thuat								
					$('#xoaketluan').button( {disabled:false});
					$('#xoaloikhuyen').button( {disabled:false});
					$('#xoamota').button( {disabled:false});
					$('#open_template').button( {disabled:false});
					$( "#template_title" ).attr("disabled",false);
					$("#sua").hide();
					$('#boqua').show();
					$('.template_title_button').button( {disabled:false});
					/*$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:false});
					$( "#nhanvien" ).attr("disabled",false);
					$( "#chuandoan" ).attr("disabled",false);*/
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:false});
					window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					dis_all("an");
					$("#sua").show();
					$('#boqua').hide();
					$('#luu').button( {disabled:true});
					$('#ketluan').attr("disabled",true);
					$('#mota').attr("disabled",true);
					$('#thongsokt').attr("disabled",true);//thong so ky thuat
					$('#loikhuyen').attr("disabled",true);
					$('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
					$('#xoaketluan').button( {disabled:true});
					$('#xoaloikhuyen').button( {disabled:true});
					$('#xoamota').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					$("#mota").val(mota5);
					$("#thongsokt").val(thongsokt5);
					$("#ketluan").val(ketluan5);
					$("#loikhuyen").val(loikhuyen5);
					/*$("#nhanvien1").val(nhanvien4);
					$("#chuandoan1").val(chuandoan4);*/
					$('.template_title_button').button( {disabled:true});
					/*$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$( "#chuandoan" ).attr("disabled",true);*/
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:true});
					/*setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);*/
					if(_id_trangthai=="DaThucHien" || _id_trangthai=="DangKham"){
						$( "#chuandoan" ).attr("disabled",false);
						$('.chuandoan_button').button( {disabled:false});
					}
                         		   
				});
			 $("#dathuchien").click(function(){
				 var n_ngaysinhdukien=$("#NgaySinhDuKien").val();
				 if(n_ngaysinhdukien==""){
					 $( "#dialog-confirm" ).dialog('open');
					// $("#NgaySinhDuKien").focus();
					 //$( "#NgaySinhDuKien" ).datepicker("hide");
				 }else {
					var rs=$("#NgaySinhDuKien").val().split("/");
					var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
					date.setDate(date.getDate()-279);
					var d = new Date();
					var thang_2 = ((d.getMonth()+1)<10?'0':'') + (d.getMonth()+1);
					var today_date =  thang_2 + '/' + d.getDate()+ '/' + d.getFullYear();
					var today_date2 = new Date(today_date);
					var date_nkc_rs = new Date(date);
					if(today_date2 < date_nkc_rs){
					$( "#dialog-confirm2" ).dialog('open');
					return false;
					}else{
						var para1=$("#para1").val();
						var para2=$("#para2").val();
						var para3=$("#para3").val();
						var para4=$("#para4").val();
						if((para1 =="" || para2=="" || para3 =="" || para4 =="") && (para1 !="" || para2!="" || para3 !="" || para4 !="") ){
							 $( "#dialog-confirm3" ).dialog('open');
							 //$("#para1").focus();
						}else{
								$("#id_trangthai").html("Đã thực hiện");
								$('#dathuchien').button( {disabled:false});
								$('#sua').button( {disabled:false});
								$('#luu').button( {disabled:true});
								$('#xoamota').button( {disabled:true});
								$('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
								$('#xoaketluan').button( {disabled:true});
								$('#xoaloikhuyen').button( {disabled:true});
								$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
								$('#ketluan').attr("disabled", "disabled");
								$('#mota').attr("disabled", "disabled");
								$('#loikhuyen').attr("disabled", "disabled");
								$('#open_template').button( {disabled:true});
								$( "#template_title" ).attr("disabled",true);
								_id_trangthai="DaThucHien";
								$('.template_title_button').button( {disabled:true});
								/*$('.chuandoan_button').button( {disabled:false});
								$('#chuandoan').attr( {disabled:false});
								$('.nhanvien_button').button( {disabled:true});
								$( "#nhanvien" ).attr("disabled",true);*/
								kt_trangthai(_id_trangthai);
								$('#add_template').button( {disabled:true});
								$('#boqua').hide();
								$('#sua').show();
								$("#giothuchien").html(gio("current"));
								var giothuchien2= $( "#giothuchien" ).text();
								phancach = "";
								i = 0;
						        dataToSend = '{';
						        			$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
								//$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2').each(function() {
						            if ($(this).attr("lang") == "luu")  {
						              
						                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
										//dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this)   ;
						              
						            }
						            phancach = ",";

						        });
										dataToSend += phancach + '"id_kham":"' + _kham + '"';
										//alert(_id_trangthai);
										dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
										dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
										dataToSend += phancach + '"idkhamthai":"' +_idkhamthai+ '"';
										dataToSend += '}';
										window.datalocalToSend = jQuery.parseJSON(dataToSend);
							 			dathuchien_post();  
										
								}
								}//end  else sub
				 }//end else

			  });//end dathuchien
			  $("#hoantat").click(function(){
				var n_ngaysinhdukien=$("#NgaySinhDuKien").val();
				 if(n_ngaysinhdukien==""){
					 $( "#dialog-confirm" ).dialog('open');
					// $("#NgaySinhDuKien").focus();
					 //$( "#NgaySinhDuKien" ).datepicker("hide");
				 }else{
					var rs=$("#NgaySinhDuKien").val().split("/");
					var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
					date.setDate(date.getDate()-279);
					var d = new Date();
					var thang_2 = ((d.getMonth()+1)<10?'0':'') + (d.getMonth()+1);
					var today_date =  thang_2 + '/' + d.getDate()+ '/' + d.getFullYear();
					var today_date2 = new Date(today_date);
					var date_nkc_rs = new Date(date);
					if(today_date2 < date_nkc_rs){
					$( "#dialog-confirm2" ).dialog('open');
					return false;
					}else{
						var para1=$("#para1").val();
						var para2=$("#para2").val();
						var para3=$("#para3").val();
						var para4=$("#para4").val();
						if((para1 =="" || para2=="" || para3 =="" || para4 =="") && (para1 !="" || para2!="" || para3 !="" || para4 !="") ){
							 $( "#dialog-confirm3" ).dialog('open');
							 //$("#para1").focus();
						}else{
							$("#id_trangthai").html("Đã hoàn tất");
							$('#dathuchien').button( {disabled:true});
							$('#hoantat').button( {disabled:true});
							$('#sua').button( {disabled:false});
							$('#luu').button( {disabled:true});
							$('#xoamota').button( {disabled:true});
							$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
							$('#xoaketluan').button( {disabled:true});
							$('#xoaloikhuyen').button( {disabled:true});
							$('#thongsokt').attr("disabled", "disabled"); //thong so ky thuat
							$('#ketluan').attr("disabled", "disabled");
							$('#mota').attr("disabled", "disabled");
							$('#loikhuyen').attr("disabled", "disabled");
							$('#open_template').button( {disabled:true});
							$( "#template_title" ).attr("disabled",true);
							_id_trangthai="Xong";
							$('.template_title_button').button( {disabled:true});
							/*$('.chuandoan_button').button( {disabled:true});
							$('.nhanvien_button').button( {disabled:true});
							$( "#nhanvien" ).attr("disabled",true);
							$( "#chuandoan" ).attr("disabled",true);*/
							kt_trangthai(_id_trangthai);
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
							$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
							
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
							dataToSend += phancach + '"idkhamthai":"' +_idkhamthai+ '"';
							dataToSend += '}';
							window.datalocalToSend = jQuery.parseJSON(dataToSend);
							 hoantat_post();  
						}
					}
				 }
			 });
			  					
			$("#add_template").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
					 })
			  $('#luu').click(function (){
				var n_ngaysinhdukien=$("#NgaySinhDuKien").val();
				if(n_ngaysinhdukien==""){
					 $( "#dialog-confirm" ).dialog('open');
					// $("#NgaySinhDuKien").focus();
					 //$( "#NgaySinhDuKien" ).datepicker("hide");
				 }else{
					var rs=$("#NgaySinhDuKien").val().split("/");
					var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
					date.setDate(date.getDate()-279);
					var d = new Date();
					var thang_2 = ((d.getMonth()+1)<10?'0':'') + (d.getMonth()+1);
					var today_date =  thang_2 + '/' + d.getDate()+ '/' + d.getFullYear();
					var today_date2 = new Date(today_date);
					var date_nkc_rs = new Date(date);
					if(today_date2 < date_nkc_rs){
						$( "#dialog-confirm2" ).dialog('open');
						return false;
					}else{
						var para1=$("#para1").val();
						var para2=$("#para2").val();
						var para3=$("#para3").val();
						var para4=$("#para4").val();
						if((para1 =="" || para2=="" || para3 =="" || para4 =="") && (para1 !="" || para2!="" || para3 !="" || para4 !="") ){
							 $( "#dialog-confirm3" ).dialog('open');
							 //$("#para1").focus();
						}else{
										 
							if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
								//alert("Đã lưu!!!");
							}
							else{
								$('#luu').button( {disabled:true});
								$('#boqua').hide();
								$('#sua').show();
								$('#sua').button( {disabled:false});
								$('.template_title_button').button( {disabled:true});
								/*$('.chuandoan_button').button( {disabled:true});
								$('.nhanvien_button').button( {disabled:true});
								$( "#nhanvien" ).attr("disabled",true);
								$( "#chuandoan" ).attr("disabled",true);*/
								kt_trangthai(_id_trangthai);
								$('#add_template').button( {disabled:true});
								// setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
								//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
								$('#ketluan').attr("disabled",true);
								$('#mota').attr("disabled",true);
								$('#thongsokt').attr("disabled",true);//thong so ky thuat
								$('#loikhuyen').attr("disabled",true);
								$('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
								$('#xoaketluan').button( {disabled:true});
								$('#xoaloikhuyen').button( {disabled:true});
								$('#xoamota').button( {disabled:true});
								$('#open_template').button( {disabled:true});
								$( "#template_title" ).attr("disabled",true);
									if(window.test=="giosuacuoi"){
										$("#edit_by").show();
										var nguoisua2=$("#nhanvien1").val();
										//alert(nguoisua2);
										$("#nguoisua").html(nguoisua2);
										$("#ngaygiosua").html(gio("current"));
									}
								}  //end else
					 
									  var ngaygiosua2=$("#ngaygiosua").text();
						phancach = "";
						i = 0;
						dataToSend = '{';
						$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
	
							if ($(this).attr("lang") == "luu") {
							  
								dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
							  
							}
							phancach = ",";
	
						});
						dataToSend += phancach + '"id_kham":"' + _kham + '"';
						//alert(_id_trangthai);
						dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';'"';
						dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
						dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
						dataToSend += phancach + '"idkhamthai":"' +_idkhamthai+ '"';
						dataToSend += '}';

						window.datalocalToSend = jQuery.parseJSON(dataToSend);
					 //  alertObject(dataToSend); 
						 luu_post();  
						}
					}
				}
			    });
			 	phanquyen();
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {	
					parent.postMessage(e.data , '*')
				},false);

				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
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
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				if(tam1_cls[0]=="K.Thai_65"){
					var tenlk="Khám thai";
				}
				else{
					var tenlk="Tái khám thai";
					}
				tam_cls+= '<div style="color:#4AC4F3;font-weight: bold;font-size:13px;" id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+tam1_cls[5]+"_"+tam1_cls[3]+'">'+tenlk+'</div>';				
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
			thoigian=thoigian.addHours(0).toString("yyyy/MM/dd H:mm ");
			}
			return thoigian;
} 
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				for(var i=0;i<val.length;i++){
					tam=val[i]["id"];	
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					if(tam==tam1){	
					
						tenloaikham=val[i]["cell"][1]; 
        				parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';'+tenloaikham+' - ;'+$('#panel_tenbn').text() , '*');
						mota5=val[i]["cell"][6];
						thongsokt5=val[i]["cell"][18];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];	
						$("#nguoi_chidinh").val(val[i]["cell"][4]);	
						idluotkham=val[i]["cell"][5]; 		 
						$("#mota").val(val[i]["cell"][6]);
						$("#thongsokt").val(val[i]["cell"][18]);//thong so ky thuat
						 $("#ketluan").val(val[i]["cell"][7]);
                        $("#loikhuyen").val(val[i]["cell"][8]);
						$("#ngaychidinh").val(val[i]["cell"][2]);
						setval('#combo_khamnoikhoa','#combo_khamnoikhoa1','#data_combo_khamnoikhoa');
						setval('#combo_khamphukhoa','#combo_khamphukhoa1','#data_combo_khamphukhoa');
						setval('#combo_khamvu','#combo_khamvu1','#data_combo_khamvu');
						setval('#combo_khamkhac','#combo_khamkhac1','#data_combo_khamkhac');
						setval('#combo_khamsankhoa','#combo_khamsankhoa1','#data_combo_khamsankhoa');
						setval('#combo_ketluan','#combo_ketluan1','#data_combo_ketluan');
						setval('#combo_denghi','#combo_denghi1','#data_combo_denghi');
						//cac benh da mac
						if(val[i]["cell"][19]==1){
							$("#timmach").val(1);
							$('#timmach').prop('checked', true);
							console.log(val[i]["cell"][19]);
						}else{
							$('#timmach').prop('checked', false);
							$("#timmach").val(0);
						}
						if(val[i]["cell"][20]==1){
							$('#daiduong').prop('checked', true);
							$("#daiduong").val(1);		
						}else{
							$("#daiduong").prop('checked', false);
							$("#daiduong").val(0);
						}
						if(val[i]["cell"][21]==1){
							$('#bassdown').prop('checked', true);
							$("#bassdown").val(1);		
						}else{
							$("#bassdown").prop('checked', false);
							$("#bassdown").val(0);
						}
						if(val[i]["cell"][22]==1){
							$('#than').prop('checked', true);
							$("#than").val(1);		
						}else{
							$("#than").prop('checked', false);
							$("#than").val(0);
						}
						if(val[i]["cell"][23]==1){
							$('#roiloandongmau').prop('checked', true);
							$("#roiloandongmau").val(1);		
						}else{
							$("#roiloandongmau").prop('checked', false);
							$("#roiloandongmau").val(0);
						}
						if(val[i]["cell"][24]==1){
							$('#viemganb').prop('checked', true);
							$("#viemganb").val(1);		
						}else{
							$("#viemganb").prop('checked', false);
							$("#viemganb").val(0);
						}
						if(val[i]["cell"][25]==1){
							$('#rubella').prop('checked', true);
							$("#rubella").val(1);		
						}else{
							$("#rubella").prop('checked', false);
							$("#rubella").val(0);
						}
						if(val[i]["cell"][26]==1){
							$('#tamthan').prop('checked', true);
							$("#tamthan").val(1);		
						}else{
							$("#tamthan").prop('checked', false);
							$("#tamthan").val(0);
						}
						if(val[i]["cell"][27]==1){
							$('#viemganc').prop('checked', true);
							$("#viemganc").val(1);		
						}else{
							$("#viemganc").prop('checked', false);
							$("#viemganc").val(0);
						}
						$("#cacbenhdamac_khac").html(val[i]["cell"][28]); 
						
						//benh da tiem phong
						if(val[i]["cell"][29]==1){
							$('#tiemphong_rubella').prop('checked', true);
							$("#tiemphong_rubella").val(1);		
						}else{
								$("#tiemphong_rubella").prop('checked', false);
								$("#tiemphong_rubella").val(0);
						}
						if(val[i]["cell"][30]==1){
							$('#tiemphong_thuydau').prop('checked', true);
							$("#tiemphong_thuydau").val(1);		
						}else{
								$("#tiemphong_thuydau").prop('checked', false);
								$("#tiemphong_thuydau").val(0);
						}
						if(val[i]["cell"][31]==1){
							$('#tiemphong_quaibi').prop('checked', true);
							$("#tiemphong_quaibi").val(1);		
						}else{
								$("#tiemphong_quaibi").prop('checked', false);
								$("#tiemphong_quaibi").val(0);
						}
						if(val[i]["cell"][32]==1){
							$('#tiemphong_uonvansosinh').prop('checked', true);
							$("#tiemphong_uonvansosinh").val(1);		
						}else{
								$("#tiemphong_uonvansosinh").prop('checked', false);
								$("#tiemphong_uonvansosinh").val(0);
						}
						if(val[i]["cell"][33]==1){
							$('#tiemphong_cum').prop('checked', true);
							$("#tiemphong_cum").val(1);		
						}else{
								$("#tiemphong_cum").prop('checked', false);
								$("#tiemphong_cum").val(0);
						}
						if(val[i]["cell"][34]==1){
							$('#tiemphong_viemganb').prop('checked', true);
							$("#tiemphong_viemganb").val(1);		
						}else{
								$("#tiemphong_viemganb").prop('checked', false);
								$("#tiemphong_viemganb").val(0);
						}
						$("#tiemphong_somui").val(val[i]["cell"][35]);
						//tinh tuoi thai				
						$("#KT_SoTuanThai").val(val[i]["cell"][36]);
						$("#KT_SoNgayThai").val(val[i]["cell"][37]);
						$("#NgaySinhDuKien").val(val[i]["cell"][38]);
						$("#NSDK_KhamThai").val(val[i]["cell"][38]);
						
						if(val[i]["cell"][39]==1){
							$('#lalandautienkhamthai').prop('checked', true);
							$("#lalandautienkhamthai").val(1);		
						}else{
								$("#lalandautienkhamthai").prop('checked', false);
								$("#lalandautienkhamthai").val(0);
						}
						$("#NgayKinhCuoi").val(val[i]["cell"][40]);
						//dau hieu bat thuong
						if(val[i]["cell"][41]==1){
							$('#non').prop('checked', true);
							$("#non").val(1);		
						}else{
								$("#non").prop('checked', false);
								$("#non").val(0);
						}
						if(val[i]["cell"][42]==1){
							$('#buonnon').prop('checked', true);
							$("#buonnon").val(1);		
						}else{
								$("#buonnon").prop('checked', false);
								$("#buonnon").val(0);
						}
						if(val[i]["cell"][43]==1){
							$('#metmoi').prop('checked', true);
							$("#metmoi").val(1);		
						}else{
								$("#metmoi").prop('checked', false);
								$("#metmoi").val(0);
						}
						if(val[i]["cell"][44]==1){
							$('#daubungduoi').prop('checked', true);
							$("#daubungduoi").val(1);		
						}else{
								$("#daubungduoi").prop('checked', false);
								$("#daubungduoi").val(0);
						}
						if(val[i]["cell"][45]==1){
							$('#ramauamdao').prop('checked', true);
							$("#ramauamdao").val(1);		
						}else{
								$("#ramauamdao").prop('checked', false);
								$("#ramauamdao").val(0);
						}
						if(val[i]["cell"][46]==1){
							$('#dauthuongvi').prop('checked', true);
							$("#dauthuongvi").val(1);		
						}else{
								$("#dauthuongvi").prop('checked', false);
								$("#dauthuongvi").val(0);
						}
						if(val[i]["cell"][47]==1){
							$('#daudau').prop('checked', true);
							$("#daudau").val(1);		
						}else{
								$("#daudau").prop('checked', false);
								$("#daudau").val(0);
						}
						if(val[i]["cell"][48]==1){
							$('#daumat').prop('checked', true);
							$("#daumat").val(1);		
						}else{
								$("#daumat").prop('checked', false);
								$("#daumat").val(0);
						}
						$("#dauhieubatthuong").html(val[i]["cell"][49]); 
						//tien su san phu khoa
						
						var para = val[i]["cell"][50];
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
						
						if(val[i]["cell"][51]==1){
							$('#thaichetluu').prop('checked', true);
							$("#thaichetluu").val(1);		
						}else{
								$("#thaichetluu").prop('checked', false);
								$("#thaichetluu").val(0);
						}
						if(val[i]["cell"][52]==1){
							$('#sangiat').prop('checked', true);
							$("#sangiat").val(1);		
						}else{
								$("#sangiat").prop('checked', false);
								$("#sangiat").val(0);
						}
						if(val[i]["cell"][53]==1){
							$('#chaymautruocsanh').prop('checked', true);
							$("#chaymautruocsanh").val(1);		
						}else{
								$("#chaymautruocsanh").prop('checked', false);
								$("#chaymautruocsanh").val(0);
						}
						if(val[i]["cell"][54]==1){
							$('#dekho').prop('checked', true);
							$("#dekho").val(1);		
						}else{
								$("#dekho").prop('checked', false);
								$("#dekho").val(0);
						}
						if(val[i]["cell"][55]==1){
							$('#binhthuong').prop('checked', true);
							$("#binhthuong").val(1);		
						}else{
								$("#binhthuong").prop('checked', false);
								$("#binhthuong").val(0);
						}
						if(val[i]["cell"][56]==1){
							$('#banghuyet').prop('checked', true);
							$("#banghuyet").val(1);		
						}else{
								$("#banghuyet").prop('checked', false);
								$("#banghuyet").val(0);
						}
						if(val[i]["cell"][57]==1){
							$('#molaythai').prop('checked', true);
							$("#molaythai").val(1);		
						}else{
								$("#molaythai").prop('checked', false);
								$("#molaythai").val(0);
						}
						if(val[i]["cell"][58]==1){
							$('#deconduoi2500gr').prop('checked', true);
							$("#deconduoi2500gr").val(1);		
						}else{
								$("#deconduoi2500gr").prop('checked', false);
								$("#deconduoi2500gr").val(0);
						}
						if(val[i]["cell"][59]==1){
							$('#conchetsaude').prop('checked', true);
							$("#conchetsaude").val(1);		
						}else{
								$("#conchetsaude").prop('checked', false);
								$("#conchetsaude").val(0);
						}
						$("#tiensusanphukhoa_ketluan").val(val[i]["cell"][60]); 
						$("#tiensubenhvaskchong_ketluan").val(val[i]["cell"][61]); 
						//ket luan
						$("#ketluan_khamnoikhoa").val(val[i]["cell"][62]); 
						$("#ketluan_khamphukhoa").val(val[i]["cell"][63]); 
						$("#ketluan_khamvu").val(val[i]["cell"][64]); 
						$("#ketluan_khamkhac").val(val[i]["cell"][65]); 
						
						//kham toan than
						if(val[i]["cell"][66]==1){
							$('#ktt_binhthuong').prop('checked', true);
							$("#ktt_binhthuong").val(1);		
						}else{
								$("#ktt_binhthuong").prop('checked', false);
								$("#ktt_binhthuong").val(0);
						}
						if(val[i]["cell"][67]==1){
							$('#ktt_phutoanthan').prop('checked', true);
							$("#ktt_phutoanthan").val(1);		
						}else{
								$("#ktt_phutoanthan").prop('checked', false);
								$("#ktt_phutoanthan").val(0);
						}
						if(val[i]["cell"][68]==1){
							$('#ktt_phu2chiduoi').prop('checked', true);
							$("#ktt_phu2chiduoi").val(1);		
						}else{
								$("#ktt_phu2chiduoi").prop('checked', false);
								$("#ktt_phu2chiduoi").val(0);
						}
						if(val[i]["cell"][69]==1){
							$('#ktt_daxanhdiemmacnhot').prop('checked', true);
							$("#ktt_daxanhdiemmacnhot").val(1);		
						}else{
								$("#ktt_daxanhdiemmacnhot").prop('checked', false);
								$("#ktt_daxanhdiemmacnhot").val(0);
						}
						$("#ketluan_khamsankhoa").val(val[i]["cell"][70]); 
						$("#ketluan_ketluan").val(val[i]["cell"][71]); 
						$("#ketluan_denghi").val(val[i]["cell"][72]); 
                       
					   
					  	//alert(val[i]["cell"][15])
						
						if(val[i]["cell"][10]){
							setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
						}else{
							setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						}
						if(val[i]["cell"][15]){
							setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
						}else{
							setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						}
						
						nhanvien4=val[i]["cell"][10];
						chuandoan4=val[i]["cell"][15];
						_idkhamthai=val[i]["cell"][73];
						//alert(_idkhamthai);
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						_id_trangthai=tam1_cls[9]; 
						//alert(_id_trangthai);
						_kham = tam;
						//alert(_kham);
						
						_id_luotkham2=tam1_cls[5];
						$.get( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_sieuamthai4d&idbenhnhan="+id_benhnhan+"&idluotkham="+_id_luotkham2).done(function(data) {
						 if(data==0){
							 window.sieuanthai4d=0;
							 }else{
								window.sieuanthai4d=jQuery.parseJSON(data);
								
								var idk=sieuanthai4d[0]["ID_Kham"];
								var sn=sieuanthai4d[0]["SoNgayThai"];
								if(sn>7){
									var tam=sn/7;
									var sotuan =parseInt(tam);
									var songay = sn-(sotuan*7);
								}else if(sn==7){
									var tinhtuan=sn/7;
									var sotuan =tinhtuan;
									var songay = sn-(tinhtuan*7);
								}else{
									var sotuan =0;
									var songay = sn;
									
								}
								$("#SA_SoTuanThai").val(sotuan);
								$("#SA_SoNgayThai").val(songay);
								var date = new Date(sieuanthai4d[0]["NgayGioThucHien"]);
								date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[0]["SoNgayThai"]));
								$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
							 }
						});
						// $(".zodi").show();
						$("#giothuchien").text(val[i]["cell"][16]);                      
						$("#giohoantat").text(val[i]["cell"][17]);     
						$("#hentrakq").click(function(e){
							links='pages.php?module=canlamsang&view=ds_xephang_canlamsang&action=ds_hentraKQ3&type=test&id_form=123&idluotkham='+_id_luotkham2;
							elem=1 + Math.floor(Math.random() * 1000000000); 
							width=90;
							height=80;   
							dialog_add_dm("",width,height,elem,links); 
						})  
					//alert(val[0]["cell"][3]);                                          
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#thongsokt').attr("disabled",false);//thong so ky thuat
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
						
						n_getdata(val);//goi ham lay lai data luot truoc
						
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						//$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#add_template').button( {disabled:true});
						if(val[i]["cell"][74]){
							$( "#chuandoan" ).attr("disabled",true);
							$('#hoantat').button( {disabled:true});	
							$('.chuandoan_button').button( {disabled:true});
						}
						
						window.oper="dathuchien1";

						//n_getdata(val);//goi ham lay lai data luot truoc		
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoaketluan').button( {disabled:false});
						$('#xoatskt').button( {disabled:false});//xoa thong so ky thuat
						$('#xoaloikhuyen').button( {disabled:false});
						$('#thongsokt').attr("disabled",false);//thong so ky thuat
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
						window.oper="dangkham1";
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						//alert(window.solandakhamthai);
						
						if(window.solandakhamthai==0){
							$('#lalandautienkhamthai').prop('checked', true);
							if(window.luotthu1==1){
								$("#lalandautienkhamthai").val(1);	
								$('#cacbenhdamac_khac').val("Không");
								$('#dauhieubatthuong').val("Không");
								$('#tiensusanphukhoa_ketluan,#tiensubenhvaskchong_ketluan').val("Bình thường");
								$('#ketluan_khamvu').val("Hai vú: không u, núm vú bình thường");
								$('#ketluan_ketluan').val("Thai XXX tuần đang phát triển");
								window.luotthu1=0;
							}

						}
						n_getdata(val);//goi ham lay lai data luot truoc
						
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						//alert(IsDoctor);
						//if(IsDoctor==1){
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
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
						window.oper="hoantat1";
						//n_getdata(val);//goi ham lay lai data luot truoc	
                    }
                    $("#giohentra").html(tam1_cls[11]);
                    		 			 
						if(val[i]["cell"][12]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][12]);
								//var khongbiet=val[i]["cell"][12];
								//$("#ID_NguoiSua").text(khongbiet);
								$("#ngaygiosua").text(val[i]["cell"][13]);
						}
						else $("#edit_by").hide();					
					} // end tam==tam1
				} // end for
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
				//alert(sieuanthai4d);
				/*if(sieuanthai4d!=0){
					//alert(sieuanthai4d.length);
					for(var i=0;i<sieuanthai4d.length;i++){
						var idk=sieuanthai4d[i]["ID_Kham"];
						//console.log(_kham+"=="+idk);
							if(parseInt(_kham)>=parseInt(idk)){
								var sn=sieuanthai4d[i]["SoNgayThai"];
								if(sn>7){
									var tam=sn/7;
									var sotuan =parseInt(tam);
									var songay = sn-(sotuan*7);
									}else if(sn==7){
									var tinhtuan=sn/7;
									var sotuan =tinhtuan;
									var songay = sn-(tinhtuan*7);
									}else{
									var sotuan =0;
									var songay = sn;
									
									}
								$("#SA_SoTuanThai").val(sotuan);
								$("#SA_SoNgayThai").val(songay);
								var date = new Date(sieuanthai4d[i]["NgayGioThucHien"]);
								//var date=sieuanthai4d[i]["NgayGioTao"];
								date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[i]["SoNgayThai"]));
								//alert(sieuanthai4d[i]["NgayGioThucHien"]);
								$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
								//alert(val[i]["cell"][38]);
								if(val[i]["cell"][38]){
									$('#NSDK_KhamThai').show();
									$('#NSDK_KhamThai1').hide();
									}else{
										$("#NgaySinhDuKien").val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
										var rs=$("#NgaySinhDuKien").val().split("/");
										var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
										date.setDate(date.getDate()-280);
										$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
										$('#NSDK_KhamThai').val($("#NgaySinhDuKien").val());
										
										var rs=$('#NgayKinhCuoi').val().split("/");
										var MyDate = new Date();
										var MyDateString = new Date();
										var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
										var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
										MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
										//--------
								
										var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
										var MyDateString2 = new Date();
										var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
										var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
										MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();
										var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString));
								
										if(tongngay>7){
											var tam=tongngay/7;
											var sotuan =parseInt(tam);
											var songay = tongngay-(sotuan*7);
										}else if(tongngay==7){
											var tinhtuan=tongngay/7;
											var sotuan =tinhtuan;
											var songay = tongngay-(tinhtuan*7);
										}else{
											var sotuan =0;
											var songay = tongngay;
											}
										//alert(tongngay); 
										$('#KT_SoTuanThai').val(sotuan);
										$('#KT_SoNgayThai').val(songay);
										$('#NSDK_KhamThai').hide();
										$('#NSDK_KhamThai1').show();
										}

								return false;
							}
					}	//end for
				
			}//end if*/	
		});
	});
	
}
function resize_control(){
	//$("#panel_main").css("height",$(window).height()-524+"px");			 
	$("#panel_main2").css("height",$(window).height()-350+"px");			 
	$("#sub_panel_main").css("height",$("#panel_main").height()+"px");		//n_center	 
	$("#sub_panel_main2").css("height",$("#panel_main").height()+"px");	
	$("#inner").css("height",$("#panel_main2").height()-15+"px");	
	$("#sub_center").css("height",$("#n_center").height()+"px");		

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-13+"px");
	$("#right_col").css("width",$(window).width()/2+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-center").height()-64+"px");
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
	
	$(".cacbenhdamac").css("width",$("#left_col1").width()+"px");
	$(".cacbenhdamac").css("height",$("#left_col1").height()+"px");
	$(".benhdatiemphong").css("width",$("#left_col2").width()+"px");
	$(".benhdatiemphong").css("height",$("#left_col2").height()+"px");
	$("#benhdatiemphong_fieldset").css("height",$(".benhdatiemphong").height()-5+"px"); //dauhieubatthuongthainghen_fieldset
	$("#cacbenhdamac_fieldset").css("height",$(".cacbenhdamac").height()-5+"px");
	$("#dauhieubatthuongthainghen_fieldset").css("height",$(".benhdatiemphong").height()-5+"px");
	$(".tinhtuoithai").css("height",$("#right_col1").height()+"px");
	$("#tinhtuoithai_fieldset").css("height",$(".tinhtuoithai").height()-5+"px");
	$(".dauhieubatthuongthainghen").css("width",$("#right_col2").width()+"px");
	$(".dauhieubatthuongthainghen").css("height",$("#right_col2").height()+"px");
	
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"42%"
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
		,	size:					"58%"
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

function create_layout_sub(){
	//alert("")
	$('#sub_panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"62%"
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
		,	size:					"38%"
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

function create_layout_sub2(){
	//alert("")
	$('#sub_panel_main2').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"46%"
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
		,	size:					"54%"
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

function create_layout2(){
	//alert("")
	$('#panel_main2').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"32%"
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
		,	size:					"41%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  
		,	east: {
			resizable: true
		,	size:					"32%"
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
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=57&tenthumuc="+_folder_name+"&search_string="+search_string);   
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
		colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên','Thông số kỹ thuât'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			 
			{name:'KetLuan',index:'KetLuan'}, 			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 
			{name:'thongsokt',index:'thongsokt'},		 	 	 
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
						var thongsokt2=$("#thongsokt").val();
						var ketluan2=$("#ketluan").val();
						var loikhuyen2=$("#loikhuyen").val();
			                        var rowData = $('#DM_template').getRowData(id);
						  if(mota2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#mota").val(rowData["NoiDung"]);
										 $("#thongsokt").val(rowData["thongsokt"]);
			                             $("#ketluan").val(rowData["KetLuan"]);
			                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
			                          }
						  if($("#yes").click(function(){
								$("#mota").val(rowData["NoiDung"]);
								$("#thongsokt").val(rowData["thongsokt"]);
								$("#ketluan").val(rowData["KetLuan"]);
								$("#loikhuyen").val(rowData["LoiKhuyen"]);	
								$( "#dialog-form" ).dialog( "close" );
			                                        
							})
						  	);
			                           if($("#no").click(function(){
			                              mota4=$.trim(rowData["NoiDung"]);
										  thongsokt3=$.trim(rowData["thongsokt"]);
			                              ketluan3=$.trim(rowData["KetLuan"]);
			                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
			                              mota2=mota2+"\n"+mota4;
										  if(thongsokt2=="")//thong so ky thuat
			                              {	
			                              	thongsokt2=thongsokt3;
			                              }
			                             else
			                             {
			                             	thongsokt2=thongsokt2+"\n"+thongsokt3;
			                             }
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
										   $("#thongsokt").val(thongsokt2);
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
$('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
          
        });
$('#inner2').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                  resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
          
        });

$('#sub_inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
          
        });
		
$('#sub_inner2').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                  resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
          
        });

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
            	setTimeout(function(){
				window.nhanvien1_complete=1;
				},300);
		


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
				setTimeout(function(){
				window.nhanvien2_complete=1;
				},300);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_khamnoikhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_khamnoikhoa').val('');
			$("#ketluan_khamnoikhoa").val(rowdata["NoiDung"]);
			//alert(rowdata["NoiDung"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_khamphukhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_khamphukhoa').val('');
			$("#ketluan_khamphukhoa").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_khamvu(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_khamvu').val('');
			$("#ketluan_khamvu").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_khamkhac(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_khamkhac').val('');
			$("#ketluan_khamkhac").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_khamsankhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_khamsankhoa').val('');
			$("#ketluan_khamsankhoa").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_ketluan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_ketluan').val('');
			$("#ketluan_ketluan").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

	
	
	function create_denghi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
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
			var rowdata = $(this).getRowData(id);
			$('#ketluan_denghi').val('');
			$("#ketluan_denghi").val(rowdata["NoiDung"]);
			//alert($('#ketluan_denghi').val());
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            



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
function checkboxval(el){
		//alert();
		if($("#"+el).is(':checked'))
		return $("#"+el).val(1);
		return $("#"+el).val(0);
	}
function load_complete(){
	if((window.nhanvien1_complete==0)||(window.nhanvien2_complete==0)){
		setTimeout(load_complete,50);
		return;
	}
	navigator_load("end","first");
}
function reloadform(){
	_id_luotkham.splice(0, _id_luotkham.length-1)
	_id_loaikham.splice(0, _id_loaikham.length-1)
	_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
	_id_kham.splice(0, _id_kham.length-1)
	
	
$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham_thai&idbenhnhan="+id_benhnhan, 
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
		
		load_complete();		
		//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
	//$('.template_title_button').button( 'disable');
	
	});		
});	
}


function luu_post(){
	if(typeof window.datalocalToSend=='undefined'){
		setTimeout(luu_post,50);
		return;
	}

	if(window.oper=="dangkham1"){
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham',datalocalToSend)
		 .done(function( gridData ) {	
			delete window.datalocalToSend;
			reloadform(); 
			tooltip_message("Đã lưu");
			})
	 }
	
	if(window.oper=="dathuchien1"){
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien',datalocalToSend)
		 .done(function( gridData ) {	
			delete window.datalocalToSend;
				reloadform(); 
				tooltip_message("Đã lưu");
				})

	 }
	 if(window.oper=="hoantat1"){
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat',datalocalToSend)
				 .done(function( gridData ) {	
						delete window.datalocalToSend;
						 reloadform(); 
						 tooltip_message("Đã lưu");
						})

	 }
	 }
function hoantat_post(){
	if(typeof window.datalocalToSend=='undefined'){
		setTimeout(hoantat_post,50);
		return;
	}
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat',datalocalToSend)
	.done(function( gridData ) {	
		delete window.datalocalToSend;
		 reloadform(); 
	 	tooltip_message("Đã lưu");
	})
	
}
function dathuchien_post(){
	if(typeof window.datalocalToSend=='undefined'){
		setTimeout(dathuchien_post,50);
		return;
	}
$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien',datalocalToSend)
.done(function( gridData ) {
	delete window.datalocalToSend;	
	reloadform(); 
	tooltip_message("Đã lưu");
})
}
	 

	


function dis_all(tam){
	if(tam=="an"){
	 $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",true);
});
		$(".combo_khamnoikhoa_button").button( {disabled:true});
		$(".combo_khamphukhoa_button").button( {disabled:true});
		$(".combo_khamvu_button").button( {disabled:true});
		$(".combo_khamkhac_button").button( {disabled:true});
		$(".combo_khamsankhoa_button").button( {disabled:true});
		$(".combo_ketluan_button").button( {disabled:true});
		$(".combo_denghi_button").button( {disabled:true});
		
		$("#add_denghi").button( {disabled:true});
		$("#add_ketluan").button( {disabled:true});
		$("#add_khamkhac").button( {disabled:true});
		$("#add_khamnoikhoa").button( {disabled:true});
		$("#add_khamphukhoa").button( {disabled:true});
		$("#add_khamsankhoa").button( {disabled:true});
		$("#add_khamvu").button( {disabled:true});
		
	 }else if(tam=="hien"){
		 $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
			$(this).attr("disabled",false);
	});
		
		$(".combo_khamnoikhoa_button").button( {disabled:false});
		$(".combo_khamphukhoa_button").button( {disabled:false});
		$(".combo_khamvu_button").button( {disabled:false});
		$(".combo_khamkhac_button").button( {disabled:false});
		$(".combo_khamsankhoa_button").button( {disabled:false});
		$(".combo_ketluan_button").button( {disabled:false});
		$(".combo_denghi_button").button( {disabled:false});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		
		$("#add_denghi").button( {disabled:false});
		$("#add_ketluan").button( {disabled:false});
		$("#add_khamkhac").button( {disabled:false});
		$("#add_khamnoikhoa").button( {disabled:false});
		$("#add_khamphukhoa").button( {disabled:false});
		$("#add_khamsankhoa").button( {disabled:false});
		$("#add_khamvu").button( {disabled:false});
		}
}	
function parseDate(str) {
	var mdy = str.split('/')
	return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

function daydiff(first, second) {
	return (second-first)/(1000*60*60*24)
}
function n_getdata(val){
//alert(_idkhamthai);
if(_idkhamthai==0){
	$('#ketluan_khamvu').val("Hai vú: không u, núm vú bình thường");
	$('#ketluan_ketluan').val("Thai XXX tuần đang phát triển");
	
	if(val.length>0){
	setTimeout(function(){
	if(val[0]["cell"][3]==34){
		$("#lalandautienkhamthai").prop('checked',true);
		$("#lalandautienkhamthai").val(1);	
		if(sieuanthai4d!=0){
			var idk=sieuanthai4d[0]["ID_Kham"];
			var sn=sieuanthai4d[0]["SoNgayThai"];
			if(sn>7){
				var tam=sn/7;
				var sotuan =parseInt(tam);
				var songay = sn-(sotuan*7);
			}else if(sn==7){
				var tinhtuan=sn/7;
				var sotuan =tinhtuan;
				var songay = sn-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = sn;
			}
			var _para=window._n_para;
			var rs=_para.split("-");
			$("#para1").val(rs[0]);
			$("#para2").val(rs[1]);
			$("#para3").val(rs[2]);
			$("#para4").val(rs[3]);
			
			
			$("#SA_SoTuanThai").val(sotuan);
			$("#SA_SoNgayThai").val(songay);
			var date = new Date(sieuanthai4d[0]["NgayGioThucHien"]);
			date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[0]["SoNgayThai"]));
			$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
			$("#NgaySinhDuKien").val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			var rs=$("#NgaySinhDuKien").val().split("/");
			var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			date.setDate(date.getDate()-280);
			$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			$('#NSDK_KhamThai').val($("#NgaySinhDuKien").val());
			
			var rs=$('#NgayKinhCuoi').val().split("/");
			var MyDate = new Date();
			var MyDateString = new Date();
			var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
			var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
			MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
			//--------
	
			var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			var MyDateString2 = new Date();
			var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
			var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
			MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();
			var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString))-1;
			//alert(sn+"_"+tongngay);
			if(tongngay>7){
				var tam=tongngay/7;
				var sotuan =parseInt(tam);
				var songay = tongngay-(sotuan*7);
			}else if(tongngay==7){
				var tinhtuan=tongngay/7;
				var sotuan =tinhtuan;
				var songay = tongngay-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = tongngay;
				}
			//alert(tongngay); 
			$('#KT_SoTuanThai').val(sotuan);
			$('#KT_SoNgayThai').val(songay);
			//$('#NSDK_KhamThai').hide();
			//$('#NSDK_KhamThai1').show();
								
		
		}//end if sieuanthai4d
	}//end if val[0]["cell"][3]==34
	if(val.length>1 && val[0]["cell"][3]==4379){
		if(val[1]["cell"][19]==1){
			$("#timmach").val(1);
			$('#timmach').prop('checked', true);
			console.log(val[1]["cell"][19]);
		}else{
				
				$('#timmach').prop('checked', false);
				$("#timmach").val(0);
		}
		if(val[1]["cell"][20]==1){
			$('#daiduong').prop('checked', true);
			$("#daiduong").val(1);		
		}else{
				$("#daiduong").prop('checked', false);
				$("#daiduong").val(0);
		}
		if(val[1]["cell"][21]==1){
			$('#bassdown').prop('checked', true);
			$("#bassdown").val(1);		
		}else{
				$("#bassdown").prop('checked', false);
				$("#bassdown").val(0);
		}
		if(val[1]["cell"][22]==1){
			$('#than').prop('checked', true);
			$("#than").val(1);		
		}else{
				$("#than").prop('checked', false);
				$("#than").val(0);
		}
		if(val[1]["cell"][23]==1){
			$('#roiloandongmau').prop('checked', true);
			$("#roiloandongmau").val(1);		
		}else{
				$("#roiloandongmau").prop('checked', false);
				$("#roiloandongmau").val(0);
		}
		if(val[1]["cell"][24]==1){
			$('#viemganb').prop('checked', true);
			$("#viemganb").val(1);		
		}else{
				$("#viemganb").prop('checked', false);
				$("#viemganb").val(0);
		}
		if(val[1]["cell"][25]==1){
			$('#rubella').prop('checked', true);
			$("#rubella").val(1);		
		}else{
				$("#rubella").prop('checked', false);
				$("#rubella").val(0);
		}
		if(val[1]["cell"][26]==1){
			$('#tamthan').prop('checked', true);
			$("#tamthan").val(1);		
		}else{
				$("#tamthan").prop('checked', false);
				$("#tamthan").val(0);
		}
		if(val[1]["cell"][27]==1){
			$('#viemganc').prop('checked', true);
			$("#viemganc").val(1);		
		}else{
				$("#viemganc").prop('checked', false);
				$("#viemganc").val(0);
		}
		$("#cacbenhdamac_khac").html(val[1]["cell"][28]); 
		
		//benh da tiem phong
		if(val[1]["cell"][29]==1){
			$('#tiemphong_rubella').prop('checked', true);
			$("#tiemphong_rubella").val(1);		
		}else{
				$("#tiemphong_rubella").prop('checked', false);
				$("#tiemphong_rubella").val(0);
		}
		if(val[1]["cell"][30]==1){
			$('#tiemphong_thuydau').prop('checked', true);
			$("#tiemphong_thuydau").val(1);		
		}else{
				$("#tiemphong_thuydau").prop('checked', false);
				$("#tiemphong_thuydau").val(0);
		}
		if(val[1]["cell"][31]==1){
			$('#tiemphong_quaibi').prop('checked', true);
			$("#tiemphong_quaibi").val(1);		
		}else{
				$("#tiemphong_quaibi").prop('checked', false);
				$("#tiemphong_quaibi").val(0);
		}
		if(val[1]["cell"][32]==1){
			$('#tiemphong_uonvansosinh').prop('checked', true);
			$("#tiemphong_uonvansosinh").val(1);		
		}else{
				$("#tiemphong_uonvansosinh").prop('checked', false);
				$("#tiemphong_uonvansosinh").val(0);
		}
		if(val[1]["cell"][33]==1){
			$('#tiemphong_cum').prop('checked', true);
			$("#tiemphong_cum").val(1);		
		}else{
				$("#tiemphong_cum").prop('checked', false);
				$("#tiemphong_cum").val(0);
		}
		if(val[1]["cell"][34]==1){
			$('#tiemphong_viemganb').prop('checked', true);
			$("#tiemphong_viemganb").val(1);		
		}else{
				$("#tiemphong_viemganb").prop('checked', false);
				$("#tiemphong_viemganb").val(0);
		}
		$("#tiemphong_somui").val(val[1]["cell"][35]);
		//tinh tuoi thai				
		//$("#KT_SoTuanThai").val(val[1]["cell"][36]);
		//$("#KT_SoNgayThai").val(val[1]["cell"][37]);
		if(sieuanthai4d!=0){
			var idk=sieuanthai4d[0]["ID_Kham"];
			var sn=sieuanthai4d[0]["SoNgayThai"];
			if(sn>7){
				var tam=sn/7;
				var sotuan =parseInt(tam);
				var songay = sn-(sotuan*7);
			}else if(sn==7){
				var tinhtuan=sn/7;
				var sotuan =tinhtuan;
				var songay = sn-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = sn;
			}
			var _para=window._n_para;
			var rs=_para.split("-");
			$("#para1").val(rs[0]);
			$("#para2").val(rs[1]);
			$("#para3").val(rs[2]);
			$("#para4").val(rs[3]);
			
			
			$("#SA_SoTuanThai").val(sotuan);
			$("#SA_SoNgayThai").val(songay);
			var date = new Date(sieuanthai4d[0]["NgayGioThucHien"]);
			date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[0]["SoNgayThai"]));
			$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
			$("#NgaySinhDuKien").val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			var rs=$("#NgaySinhDuKien").val().split("/");
			var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			date.setDate(date.getDate()-280);
			$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			$('#NSDK_KhamThai').val($("#NgaySinhDuKien").val());
			
			var rs=$('#NgayKinhCuoi').val().split("/");
			var MyDate = new Date();
			var MyDateString = new Date();
			var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
			var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
			MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
			//--------
	
			var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			var MyDateString2 = new Date();
			var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
			var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
			MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();
			var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString))-1;
			//alert(sn+"_"+tongngay);
			if(tongngay>7){
				var tam=tongngay/7;
				var sotuan =parseInt(tam);
				var songay = tongngay-(sotuan*7);
			}else if(tongngay==7){
				var tinhtuan=tongngay/7;
				var sotuan =tinhtuan;
				var songay = tongngay-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = tongngay;
				}
			//alert(sotuan+'_'+songay); 
			$('#KT_SoTuanThai').val(sotuan);
			$('#KT_SoNgayThai').val(songay);
			//$('#NSDK_KhamThai').hide();
			//$('#NSDK_KhamThai1').show();
								
		
		}//end if sieuanthai4d
		//$("#NSDK_KhamThai").val(val[1]["cell"][38]);

		//$("#NgayKinhCuoi").val(val[1]["cell"][40]);
		
		if(val[1]["cell"][44]==1){
			$('#daubungduoi').prop('checked', true);
			$("#daubungduoi").val(1);		
		}else{
				$("#daubungduoi").prop('checked', false);
				$("#daubungduoi").val(0);
		}
		if(val[1]["cell"][45]==1){
			$('#ramauamdao').prop('checked', true);
			$("#ramauamdao").val(1);		
		}else{
				$("#ramauamdao").prop('checked', false);
				$("#ramauamdao").val(0);
		}
		if(val[1]["cell"][46]==1){
			$('#dauthuongvi').prop('checked', true);
			$("#dauthuongvi").val(1);		
		}else{
				$("#dauthuongvi").prop('checked', false);
				$("#dauthuongvi").val(0);
		}
		if(val[1]["cell"][47]==1){
			$('#daudau').prop('checked', true);
			$("#daudau").val(1);		
		}else{
				$("#daudau").prop('checked', false);
				$("#daudau").val(0);
		}
		if(val[1]["cell"][48]==1){
			$('#daumat').prop('checked', true);
			$("#daumat").val(1);		
		}else{
				$("#daumat").prop('checked', false);
				$("#daumat").val(0);
		}
		$("#dauhieubatthuong").html(val[1]["cell"][49]);
		//tien su san phu khoa
		
		/*var para = val[1]["cell"][50];
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
			}*/
		var _para=window._n_para;
		var rs=_para.split("-");
		$("#para1").val(rs[0]);
		$("#para2").val(rs[1]);
		$("#para3").val(rs[2]);
		$("#para4").val(rs[3]);
		
		if(val[1]["cell"][51]==1){
			$('#thaichetluu').prop('checked', true);
			$("#thaichetluu").val(1);		
		}else{
				$("#thaichetluu").prop('checked', false);
				$("#thaichetluu").val(0);
		}
		if(val[1]["cell"][52]==1){
			$('#sangiat').prop('checked', true);
			$("#sangiat").val(1);		
		}else{
				$("#sangiat").prop('checked', false);
				$("#sangiat").val(0);
		}
		if(val[1]["cell"][53]==1){
			$('#chaymautruocsanh').prop('checked', true);
			$("#chaymautruocsanh").val(1);		
		}else{
				$("#chaymautruocsanh").prop('checked', false);
				$("#chaymautruocsanh").val(0);
		}
		if(val[1]["cell"][54]==1){
			$('#dekho').prop('checked', true);
			$("#dekho").val(1);		
		}else{
				$("#dekho").prop('checked', false);
				$("#dekho").val(0);
		}
		if(val[1]["cell"][55]==1){
			$('#binhthuong').prop('checked', true);
			$("#binhthuong").val(1);		
		}else{
				$("#binhthuong").prop('checked', false);
				$("#binhthuong").val(0);
		}
		if(val[1]["cell"][56]==1){
			$('#banghuyet').prop('checked', true);
			$("#banghuyet").val(1);		
		}else{
				$("#banghuyet").prop('checked', false);
				$("#banghuyet").val(0);
		}
		if(val[1]["cell"][57]==1){
			$('#molaythai').prop('checked', true);
			$("#molaythai").val(1);		
		}else{
				$("#molaythai").prop('checked', false);
				$("#molaythai").val(0);
		}
		if(val[1]["cell"][58]==1){
			$('#deconduoi2500gr').prop('checked', true);
			$("#deconduoi2500gr").val(1);		
		}else{
				$("#deconduoi2500gr").prop('checked', false);
				$("#deconduoi2500gr").val(0);
		}
		if(val[1]["cell"][59]==1){
			$('#conchetsaude').prop('checked', true);
			$("#conchetsaude").val(1);		
		}else{
				$("#conchetsaude").prop('checked', false);
				$("#conchetsaude").val(0);
		}
		$("#tiensusanphukhoa_ketluan").val(val[1]["cell"][60]); 
		$("#tiensubenhvaskchong_ketluan").val(val[1]["cell"][61]); 
		
		//ket thuc luot kham truoc
	}
	},1000);// end setTimeout
}//if val.length
else{
	$("#lalandautienkhamthai").prop('checked',true);
	$("#lalandautienkhamthai").val(1);	
		if(sieuanthai4d!=0){
			var idk=sieuanthai4d[0]["ID_Kham"];
			var sn=sieuanthai4d[0]["SoNgayThai"];
			if(sn>7){
				var tam=sn/7;
				var sotuan =parseInt(tam);
				var songay = sn-(sotuan*7);
			}else if(sn==7){
				var tinhtuan=sn/7;
				var sotuan =tinhtuan;
				var songay = sn-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = sn;
			}
			var _para=window._n_para;
			var rs=_para.split("-");
			$("#para1").val(rs[0]);
			$("#para2").val(rs[1]);
			$("#para3").val(rs[2]);
			$("#para4").val(rs[3]);
			
			
			$("#SA_SoTuanThai").val(sotuan);
			$("#SA_SoNgayThai").val(songay);
			var date = new Date(sieuanthai4d[0]["NgayGioThucHien"]);
			date.setDate(parseInt(date.getDate())+280-parseInt(sieuanthai4d[0]["SoNgayThai"]));
			$('#ngay_sieuam').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date)); 
			$("#NgaySinhDuKien").val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			var rs=$("#NgaySinhDuKien").val().split("/");
			var date = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			date.setDate(date.getDate()-280);
			$('#NgayKinhCuoi').val($.datepicker.formatDate( $.cookie("ngayJqueryUi"), date));
			$('#NSDK_KhamThai').val($("#NgaySinhDuKien").val());
			
			var rs=$('#NgayKinhCuoi').val().split("/");
			var MyDate = new Date();
			var MyDateString = new Date();
			var thang = ((MyDate.getMonth()+1)<10?'0':'') + (MyDate.getMonth()+1);
			var ngay = (MyDate.getDate()<10?'0':'') + MyDate.getDate();
			MyDateString = thang + '/' + ngay + '/' + MyDate.getFullYear();
			//--------
	
			var MyDate2 = new Date(rs[1]+"/"+rs[0]+"/"+rs[2]);
			var MyDateString2 = new Date();
			var thang2 = ((MyDate2.getMonth()+1)<10?'0':'') + (MyDate2.getMonth()+1);
			var ngay2 = ((MyDate2.getDate()-1)<10?'0':'') + (MyDate2.getDate()-1);
			MyDateString2 = thang2 + '/' + ngay2 + '/' + MyDate2.getFullYear();
			var tongngay=daydiff(parseDate(MyDateString2), parseDate(MyDateString));
	
			if(tongngay>7){
				var tam=tongngay/7;
				var sotuan =parseInt(tam);
				var songay = tongngay-(sotuan*7);
			}else if(tongngay==7){
				var tinhtuan=tongngay/7;
				var sotuan =tinhtuan;
				var songay = tongngay-(tinhtuan*7);
			}else{
				var sotuan =0;
				var songay = tongngay;
				}
			//alert(tongngay); 
			$('#KT_SoTuanThai').val(sotuan);
			$('#KT_SoNgayThai').val(songay);
			$('#NSDK_KhamThai').hide();
			$('#NSDK_KhamThai1').show();
								
		
		}//end if sieuanthai4d
}//end else
}//if id kham thai
}
function kt_trangthai(id_thai){
	//alert(_id_trangthai);
	if(_id_trangthai=="Xong"){
		$('.chuandoan_button').button( {disabled:true});
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		$( "#chuandoan" ).attr("disabled",true);
		 $( "#dathuchien" ).attr("disabled",true);
		  $( "#hoantat" ).attr("disabled",true);
	}else if(_id_trangthai=="DaThucHien"){
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		 $( "#dathuchien" ).attr("disabled",true);
	}else{
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);
		$('.chuandoan_button').button( {disabled:false});
	}
}
</script>
 
 
