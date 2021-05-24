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
}else{
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
	width:175px;
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
#right_bottom select{
	width:245px;
}
#right_bottom input[type="text"] {
	width:501px;
}.custom-combobox-input{
	width:70px !important
}.ui-autocomplete {
	min-height:100px !important;
	bottom:100px!important;
}#vitribuitri{
	width:98px;
}.thongtin_tongthe{
		height:62px;
}#combo_ppdieutri11,#combo_ppdieutri21{
	width:200px!important;
	
}.backhidde{
	background:#F0F0F0!important;

}.n_bd{
	border: 1px solid #D4CCB0;
	
}.l_top{
    background: none repeat scroll 0 0 #F5F3EB;
    border: 1px solid #D4CCB0;
    border-radius: 3px;
    height: 15px;
    margin-left: 1px;
    margin-right: 1px;
    margin-top: 1px;
    padding-top: 2px;
}.n_title{
	font-weight:bold;
	margin-left:5px;
	
}.mg{
	color:#F36;
}#klc_ketluan{
	height:45px;
}.bacsy,.phanloai{
	width:155px !important;
}#panel_main{
	overflow: scroll!important; /* set overflow to scroll for desktop browsers */
 	overflow-x: hidden!important; /* hide scrollbar on x-axis */
}
 #sub_main{   
	height:500px!important;
	width:100%!important;
 }.left_col{
	float:left;
	box-shadow: 0px 0px 10px #A0A0A0;
	border: 1px solid #919191;
	display: inline-block;
	vertical-align: top;
	margin-top: 2px;
	margin-right:2px;
 }.right_col{
	float:left;
	box-shadow: 0px 0px 10px #A0A0A0;
	border: 1px solid #919191;
	display: inline-block;
	vertical-align: top;
	margin-top: 2px;
	margin-left:2px;
}#phanloaisk1,#phanloaitl1{
	width:50px !important;
}#m_phanloai1,
#tmh_phanloai1,
#rhm_phanloai1,
#dalieu_phanloai1,
#noikhoa_phanloai1,
#ngoaikhoa_phanloai1,
#sanphukhoa_phanloai1,
#tuanhoan_phanloai1,
#hohap_phanloai1,
#tieuhoa_phanloai1,
#thantietnieusinhduc_phanloai1,
#thankinh_phanloai1,
#tamthan_phanloai1,
#hevandong_phanloai1,
#noitiet_phanloai1{
	width:90px !important;
}

#taimuihong,#ranghammat,#dalieu,
#noikhoa,#ngoaikhoa,#sanphukhoa,
#tuanhoan,#hohap,#tieuhoa,
#thantietnieusinhduc,#thankinh,
#tamthan,#hevandong,#noitiet
{
	height:110px;
}
#ketluanchung{
	height:135px;
}
.n_temp{
	width:345px;
}
.fieldset_ketluan{
	width:200px;
}
#ttbenhtathientai{
	height:110px;
}
#hamtren,#hamduoi{
	width: 175px;
}
#taimuihong,#mat{
	height:182px;
}
#ranghammat{
	height:191px;
}
#m_benhvemat,#taimuihong_ghichu,#ranghammat_ghichu, #klc_ketquacls{
	height:35px;
}

</style>
<body>
<input type="hidden" id="dialog_report" name="dialog_report" value="">
<div id="dialog-print" title="Tùy chọn In" style="display:none;">
  <table cellpadding="0" cellspacing="0" border="0" style="font-weight:bold; font-size:12px; width:320px;">
    
	  <tr>
        <td rowspan="11"><textarea cols="2" rows="0" style="text-align: center;padding-top: 30px; font-weight:bold;" id="_mauin"></textarea></td>
        <td > <input type="radio" name="chonin" id="phieuksk_mau1_mat1" value="5"><label for="phieuksk_mau1_mat1">5. In phiếu KSK C.ty mặt 1 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau1_mat2" value="6"><label for="phieuksk_mau1_mat2">6. In phiếu KSK C.ty mặt 2 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau1_2mat" value="7"><label for="phieuksk_mau1_2mat">7. In phiếu KSK 2 mặt (KSK C.ty) </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau2_mat1" value="8"><label for="phieuksk_mau2_mat1">8. In phiếu KSK cơ bản mặt 1 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau2_mat2" value="9"><label for="phieuksk_mau2_mat2">9. In phiếu KSK cơ bản mặt 2 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau2_2mat" value="10"><label for="phieuksk_mau2_2mat">10. In phiếu KSK 2 mặt (KSK cơ bản) </label></td>
      </tr>
	  <!--
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau3_mat1" value="11"><label for="phieuksk_mau3_mat1">11. In phiếu KSK chi tiết mặt 1 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau3_mat2" value="12"><label for="phieuksk_mau3_mat2">12. In phiếu KSK chi tiết mặt 2 </label></td>
      </tr>
      <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau3_mat3" value="13"><label for="phieuksk_mau3_mat3">13. In phiếu KSK chi tiết mặt 3 </label></td>
      </tr>
       <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau3_mat2_3" value="14"><label for="phieuksk_mau3_mat2_3">14. In phiếu KSK chi tiết mặt 2-3 </label></td>
      </tr>
       <tr>
        <td><input type="radio" name="chonin" id="phieuksk_mau3_mat1_2_3" value="15"><label for="phieuksk_mau3_mat1_2_3">15. In phiếu KSK 3 mặt (KSK chi tiết) </label></td>
      </tr>
	  -->
  </table>
</div>
<div  class="data_combo_bacsy">
    <table id="data_combo_bacsy">
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
            <input id="nhanvien1"  name="nguoithuchien" type="text"  style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs kết luận:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> 
            <input id="chuandoan1"  name="chuandoan1" type="text"  style="display:none" >
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

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    		 	
    	</div>
    	<div style="margin-top: -9px">
	    	<label><a href="#">Giờ hẹn trả kết quả:</a></label>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 5px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
    	</div> 
    </div>
   
 </div> 
 
 <div id="panel_main">  
 		<div id="sub_main" >

        <div class="ui-widget-content ui-layout-west left_col">
         <div id="ttbenhtathientai" class="n_bd">
       	   <div class="l_top">
                <label class="n_title">TÌNH TRẠNG BỆNH TẬT HIỆN TẠI </label>
                </div>
             	<textarea lang="luu" name="benhtathientai" id="benhtathientai" cols="96" rows="4" style="margin-left:5px;"></textarea>
         </div>
          <div id="mat" class="n_bd">
                 <div class="l_top">
                <label class="n_title">MẮT </label>
                </div>
             <table id="n_mat">
               <tr>
                  <td rowspan="2"> <fieldset id="mck">
                      <legend>Mắt có kính</legend>
                      Mắt phải: <input lang="luu"type="text" name="ck_matphai" id="ck_matphai" size="1" style="text-align:center">/10
                        Mắt trái: <input lang="luu"type="text" name="ck_mattrai" id="ck_mattrai" size="1" style="text-align:center">/10
                      </fieldset></td>
                  <td rowspan="2"><fieldset id="mkk">
                      <legend>Mắt không kính</legend>
                      Mắt phải: <input lang="luu"type="text" name="kk_matphai" id="kk_matphai" size="1" style="text-align:center">/10
                        Mắt trái: <input lang="luu"type="text" name="kk_mattrai" id="kk_mattrai" size="1" style="text-align:center">/10
                        </fieldset>
                   </td>
               	  <td>Bác sỹ: </td>
               	  <td>   
               		  <span class="custom-combobox">
               			  <input id="m_bacsy" name="m_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                      </span> 
                      <input id="m_bacsy1"  name="m_bacsy1" type="text" style="display:none" >
                  </td>
               </tr>
               <tr>
               	   <td>Phân loại: </td>
               	   <td>
                     <span class="custom-combobox">
                   	 	<input id="m_phanloai" name="m_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="m_phanloai1"  name="m_phanloai1" type="text"  style="display:none" >
                   </td>
               </tr>
               <tr>
               	 <td colspan="2" rowspan="2">
                  <fieldset  style="width: 402px;">
                        <legend>Bệnh về mắt</legend>
                        <input type="text" id="temp_mat" class="n_temp" name="temp_mat" size="57" placeholder="Chọn mẫu" style="width: 325px;"><button id="add_temp_mat" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
           	      <textarea lang="luu" name="m_benhvemat" id="m_benhvemat" cols="60" rows="2"></textarea>
                        </fieldset>
                 
                  <!--<input type="text" id="m_benhvemat" name="m_benhvemat" size="57" >-->                 </td>
               	 <td colspan="2">&nbsp;</td>
               </tr>
               <tr>
               	 <td colspan="2">&nbsp;</td>
               </tr>

             </table>
            </div>
             <div id="taimuihong" class="n_bd">
               <div class="l_top">
                <label class="n_title">TAI - MŨI - HỌNG </label>
                </div>
                 <table id="tai_mui_hong">
                   <tr>
                     <td rowspan="2"><fieldset id="mck2">
                       <legend>Nói thường</legend>
                       Tai trái:
                       <input lang="luu"type="text" name="taitrai_noithuong" id="taitrai_noithuong" size="1" style="text-align:center">
                       m 
                       Tai phải:
                       
                       <input lang="luu"type="text" name="taiphai_noithuong" id="taiphai_noithuong" size="1" style="text-align:center">
                       m
                     </fieldset></td>
                     <td rowspan="2"><fieldset id="mkk2">
                       <legend>Nói thầm</legend>
                       Tai trái:
                       
                       <input lang="luu"type="text" name="taitrai_noitham" id="taitrai_noitham" size="1" style="text-align:center">
                       m
                       Tai phải:
<input lang="luu"type="text" name="taiphai_noitham" id="taiphai_noitham" size="1" style="text-align:center">
                       m</fieldset></td>
                     <td>Bác sỹ: </td>
                     <td><span class="custom-combobox">
                       <input id="tmh_bacsy" name="tmh_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                     </span>                       <input id="m_bacsy3"  name="m_bacsy2" type="text" style="display:none" ></td>
                   </tr>
                   <tr>
                     <td>Phân loại: </td>
                     <td><span class="custom-combobox">
                       <input id="tmh_phanloai" name="tmh_phanloai"  type="text" style="width:90px;">
                     </span>                       <input id="m_phanloai3"  name="m_phanloai2" type="text"  style="display:none" ></td>
                   </tr>
                   <tr>
                     <td colspan="2" rowspan="2"><fieldset>
                       <legend>Bệnh về tai - mũi - họng</legend>
                       <input type="text" id="temp_taimuihong" class="n_temp" placeholder="Chọn mẫu" style="width: 325px;">
<button id="add_temp_taimuihong" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                       <textarea lang="luu" name="taimuihong_ghichu" id="taimuihong_ghichu" cols="60" rows="2"></textarea>
                     </fieldset>
                       <!--<input type="text" id="m_benhvemat" name="m_benhvemat" size="57" >--></td>
                     <td colspan="2">&nbsp;</td>
                   </tr>
                   <tr>
                     <td colspan="2">&nbsp;</td>
                   </tr>
               </table>
                 <p>&nbsp;</p>
             </div>
             <div id="ranghammat" class="n_bd">
           	   <div class="l_top">
                <label class="n_title">RĂNG - HÀM - MẶT </label>
                </div>
              <table id="ranghammat">
                <tr>
                  <td rowspan="2" style="vertical-align:top;"><fieldset id="mck3">
                    <legend>Hàm trên</legend>
                    <input lang="luu"type="text" name="hamtren" id="hamtren" size="1">
                  </fieldset></td>
                  <td rowspan="2" style="vertical-align:top;"><fieldset id="mkk3">
                    <legend>Hàm dưới</legend>
                    <input lang="luu"type="text" name="hamduoi" id="hamduoi" size="1">
                  </fieldset></td>
                  <td>Bác sỹ: </td>
                  <td><input id="rhm_bacsy" name="rhm_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">                    <input id="m_bacsy2"  name="m_bacsy3" type="text" style="display:none" ></td>
                </tr>
                <tr>
                  <td>Phân loại: </td>
                  <td><input id="rhm_phanloai" name="rhm_phanloai"  type="text" style="width:90px;">                    <input id="m_phanloai2"  name="m_phanloai3" type="text"  style="display:none" ></td>
                </tr>
                <tr>
                  <td colspan="2" rowspan="2" style="vertical-align:top;"><fieldset>
                    <legend>Bệnh về răng - hàm - mặt</legend>
                    <input type="text" id="temp_ranghammat" class="n_temp" placeholder="Chọn mẫu" style="width: 325px;">
                     <button id="add_temp_ranghammat" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="ranghammat_ghichu" id="ranghammat_ghichu" cols="60" rows="2"></textarea>
                  </fieldset>
                    <!--<input type="text" id="m_benhvemat" name="m_benhvemat" size="57" >--></td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
              </table>
             </div>
             <div id="dalieu" class="n_bd">
             <div class="l_top">
                <label class="n_title">DA LIỄU </label>
                </div>
                <table  id="tdalieu">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_dalieu" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_dalieu" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="dalieu_ghichu" id="dalieu_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="dalieu_bacsy" name="dalieu_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="dalieu_bacsy1"  name="dalieu_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                     <span class="custom-combobox">
                   	 	<input id="dalieu_phanloai" name="dalieu_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="dalieu_phanloai1"  name="dalieu_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="noikhoa" class="n_bd" style="display:none;">
                <div class="l_top">
                <label class="n_title">NỘI KHOA </label>
                </div>
                 <table  id="tnoikhoa">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_noikhoa" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_noikhoa" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="noikhoa_ghichu" id="noikhoa_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="noikhoa_bacsy" name="noikhoa_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="noikhoa_bacsy1"  name="noikhoa_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                     <span class="custom-combobox">
                   	 	<input id="noikhoa_phanloai" name="noikhoa_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="noikhoa_phanloai1"  name="noikhoa_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="ngoaikhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">NGOẠI KHOA </label>
                </div>
                 <table  id="tngoaikhoa">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_ngoaikhoa" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_ngoaikhoa" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="ngoaikhoa_ghichu" id="ngoaikhoa_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="ngoaikhoa_bacsy" name="ngoaikhoa_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="ngoaikhoa_bacsy1"  name="ngoaikhoa_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                    <span class="custom-combobox">
                   	 	<input id="ngoaikhoa_phanloai" name="ngoaikhoa_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="ngoaikhoa_phanloai1"  name="ngoaikhoa_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="sanphukhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">SẢN PHỤ KHOA </label>
                </div>
             		<table  id="tsanphukhoa">
                  <tr>
                     <td rowspan="3">
                    <input type="text" id="temp_sanphukhoa" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_sanphukhoa" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="sanphukhoa_ghichu" id="sanphukhoa_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="sanphukhoa_bacsy" name="sanphukhoa_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="sanphukhoa_bacsy1"  name="sanphukhoa_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                     <span class="custom-combobox">
                   	 	<input id="sanphukhoa_phanloai" name="sanphukhoa_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="sanphukhoa_phanloai1"  name="sanphukhoa_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="tuanhoan" class="n_bd">
                 <div class="l_top">
                <label class="n_title ">TUẦN HOÀN </label>
                </div>
                
                 <table  id="ttuanhoan">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_tuanhoan" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_tuanhoan" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="tuanhoan_ghichu" id="tuanhoan_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="tuanhoan_bacsy" name="tuanhoan_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="tuanhoan_bacsy1"  name="tuanhoan_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                    <span class="custom-combobox">
                   	 	<input id="tuanhoan_phanloai" name="tuanhoan_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="tuanhoan_phanloai1"  name="tuanhoan_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="hohap" class="n_bd">
                 <div class="l_top">
                <label class="n_title">HÔ HẤP </label>
                </div>
                
                 <table  id="thohap">
                  <tr>
                     <td rowspan="3">
                    <input type="text" id="temp_hohap" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_hohap" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="hohap_ghichu" id="hohap_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="hohap_bacsy" name="hohap_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="hohap_bacsy1"  name="hohap_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                    <span class="custom-combobox">
                   	 	<input id="hohap_phanloai" name="hohap_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="hohap_phanloai1"  name="hohap_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
            
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center right_col">
        	 
            
             <div id="tieuhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">TIÊU HÓA </label>
                </div>
                 <table  id="ttieuhoa">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_tieuhoa" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_tieuhoa" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="tieuhoa_ghichu" id="tieuhoa_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="tieuhoa_bacsy" name="tieuhoa_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="tieuhoa_bacsy1"  name="tieuhoa_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                    <span class="custom-combobox">
                   	 	<input id="tieuhoa_phanloai" name="tieuhoa_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="tieuhoa_phanloai1"  name="tieuhoa_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="thantietnieusinhduc" class="n_bd">
             	<div class="l_top">
                <label class="n_title">THẬN - TIẾT NIỆU - SINH DỤC </label>
                </div>
                 <table  id="tthantietnieusinhduc">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_thantietnieusinhduc" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_thantietnieusinhduc" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="thantietnieusinhduc_ghichu" id="thantietnieusinhduc_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="thantietnieusinhduc_bacsy" name="thantietnieusinhduc_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="thantietnieusinhduc_bacsy1"  name="thantietnieusinhduc_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                      <span class="custom-combobox">
                   	 	<input id="thantietnieusinhduc_phanloai" name="thantietnieusinhduc_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="thantietnieusinhduc_phanloai1"  name="thantietnieusinhduc_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="thankinh" class="n_bd">
             <div class="l_top">
                <label class="n_title">THẦN KINH </label>
                </div>
                <table  id="tthankinh">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_thankinh" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_thankinh" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="thankinh_ghichu" id="thankinh_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="thankinh_bacsy" name="thankinh_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="thankinh_bacsy1"  name="thankinh_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                     <span class="custom-combobox">
                   	 	<input id="thankinh_phanloai" name="thankinh_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="thankinh_phanloai1"  name="thankinh_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="tamthan" class="n_bd">
                <div class="l_top">
                <label class="n_title">TÂM THẦN </label>
                </div>
                 <table  id="ttamthan">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_tamthan" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_tamthan" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="tamthan_ghichu" id="tamthan_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="tamthan_bacsy" name="tamthan_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="tamthan_bacsy1"  name="tamthan_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                     <span class="custom-combobox">
                   	 	<input id="tamthan_phanloai" name="tamthan_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="tamthan_phanloai1"  name="tamthan_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="hevandong" class="n_bd">
                 <div class="l_top">
                <label class="n_title">HỆ VẬN ĐỘNG </label>
                </div>
                 <table  id="thevandong">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_hevandong" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_hevandong" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="hevandong_ghichu" id="hevandong_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                        <span class="custom-combobox">
                   			<input id="hevandong_bacsy" name="hevandong_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="hevandong_bacsy1"  name="hevandong_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                      <span class="custom-combobox">
                   	 	<input id="hevandong_phanloai" name="hevandong_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="hevandong_phanloai1"  name="hevandong_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
             <div id="noitiet" class="n_bd">
                 <div class="l_top">
                <label class="n_title">NỘI TIẾT </label>
                </div>
             		<table  id="tnoitiet">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_noitiet" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_noitiet" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="noitiet_ghichu" id="noitiet_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="noitiet_bacsy" name="noitiet_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="noitiet_bacsy1"  name="noitiet_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td>
                    <span class="custom-combobox">
                   	 	<input id="noitiet_phanloai" name="noitiet_phanloai"  type="text" style="width:90px;">
                	 </span> 
               		 <input id="noitiet_phanloai1"  name="noitiet_phanloai1" type="text"  style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
              <div id="noitiet" class="n_bd">
                <div class="l_top">
                <label class="n_title">KẾT QUẢ XÉT NGHIỆM </label>
                </div>
             		<table  id="tnoitiet">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_ketquaxetnghiem" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_ketquaxetnghiem" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="ketquaxetnghiem_ghichu" id="ketquaxetnghiem_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="ketquaxetnghiem_bacsy" name="ketquaxetnghiem_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                        </span> 
                        <input id="ketquaxetnghiem_bacsy1"  name="ketquaxetnghiem_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
             </div>
          <div id="noitiet" class="n_bd">
                 <div class="l_top">
                <label class="n_title">KẾT QUẢ SIÊU ÂM</label>
            </div>
           		<table  id="tnoitiet">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_ketquasieuam" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_ketquasieuam" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="ketquasieuam_ghichu" id="ketquasieuam_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="ketquasieuam_bacsy" name="ketquasieuam_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                      </span> 
                        <input id="ketquasieuam_bacsy1"  name="ketquasieuam_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;<button id="chen_sieuam" >Chèn KQ</button></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
            </table>
            </div>
          <div id="noitiet" class="n_bd">
                 <div class="l_top">
                <label class="n_title">KẾT QUẢ X-QUANG</label>
            </div>
           		<table  id="tnoitiet">
                  <tr>
                    <td rowspan="3">
                    <input type="text" id="temp_ketquaxquang" class="n_temp" placeholder="Chọn mẫu"><button id="add_temp_ketquaxquang" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                    <textarea lang="luu" name="ketquaxquang_ghichu" id="ketquaxquang_ghichu" cols="63" rows="2"></textarea></td>
                    <td>Bác sỹ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                    <td>
                       <span class="custom-combobox">
                   			<input id="ketquaxquang_bacsy" name="ketquaxquang_bacsy"  type="text" style="width:90px; " placeholder="--Chọn bác sỹ--">
                      </span> 
                        <input id="ketquaxquang_bacsy1"  name="ketquaxquang_bacsy1" type="text" style="display:none" >
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;<button id="chen_xquang" >Chèn KQ</button></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
            </table>
            </div>
              <div id="ketquacl" class="n_bd">
                <div class="l_top">
                <label class="n_title ">KẾT QUẢ CẬN LÂM SÀNG </label>
                </div>
             
                
            <table style="width:100%">
                   <tr>
                     <td style="width:412px">
                        <input type="text" id="temp_ketquacls" class="n_temp" placeholder="Chọn mẫu" style="width:345px"><button id="add_temp_ketquacls" class="add_temp" style="height:23px;width:23px;float: right; margin-right:210px;">Thêm</button><br>
                	<textarea lang="luu" id="klc_ketquacls" name="klc_ketquacls" cols="97"> </textarea>
</td>
                   </tr>
                </table>
          </div>
          
           <div id="ketluanchung" class="n_bd">
                 <div class="l_top">
                <label class="n_title mg">KẾT LUẬN CHUNG </label>
                </div>
             
                
            <table style="width:100%">
                   <tr>
                     <td style="width:412px" rowspan="3"><fieldset class="fieldset_ketluan">
                        <legend>Kết luận</legend>
                        <input type="text" id="temp_ketluan" class="n_temp" placeholder="Chọn mẫu" style="width:328px"><button id="add_temp_ketluan" class="add_temp" style="height:23px;width:23px;float: right;">Thêm</button><br>
                	<textarea lang="luu" id="klc_ketluan" name="klc_ketluan" cols="59"> </textarea>
                        </fieldset></td>
                     <td width="100px">Phân loại sức khỏe:</td>
                     <td><span class="custom-combobox">
                    <input id="phanloaisk" name="phanloaisk"  type="text" style="width:70px;">
                </span> 
                <input id="phanloaisk1"  name="phanloaisk1" type="text"  style="display:none" ></td>
                   </tr>
                   <tr>
                     <td>Phân loại thể lực:</td>
                     <td><span class="custom-combobox">
                    <input id="phanloaitl" name="phanloaitl"  type="text" style="width:70px;">
                </span> 
                <input id="phanloaitl1"  name="phanloaitl1" type="text"  style="display:none" ></td>
                   </tr>
                   <tr>
                     <td>&nbsp;</td>
                     <td height="50px">&nbsp;</td>
                   </tr>
            </table>
          </div>
        </div>
  		</div><!--//submain -->              
	</div>		
		
</body>
</html>
<script type="text/javascript">
var report_code=["KhamSucKhoe","KhamSucKhoe_Mat1","KhamSucKhoe_Mat2","KhamSucKhoe_Mat1"];
var report_name=["In phiếu KSK (Loại 1 tờ)","In phiếu KSK mặt 1(Loại 2 tờ)","In phiếu KSK mặt 2(Loại 2 tờ)","In phiếu KSK 2 mặt(Loại 2)"];
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
  // $("#m_benhvemat").val('KHÔNG ĐO MẮT');
  $("#dalieu_ghichu").val('BÌNH THƯỜNG');
  $("#ngoaikhoa_ghichu").val('BÌNH THƯỜNG');
  $("#tuanhoan_ghichu").val('BÌNH THƯỜNG');
  $("#hohap_ghichu").val('BÌNH THƯỜNG');
  $("#tieuhoa_ghichu").val('BÌNH THƯỜNG');
  $("#thantietnieusinhduc_ghichu").val('BÌNH THƯỜNG');
  $("#thankinh_ghichu").val('BÌNH THƯỜNG');
  $("#tamthan_ghichu").val('BÌNH THƯỜNG');
  $("#hevandong_ghichu").val('BÌNH THƯỜNG');
  $("#noitiet_ghichu").val('BÌNH THƯỜNG');




	openform_shortcutkey();	
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_bacsi').done(function(data) {
		create_combobox_new('#nhanvien',create_nhanvien,'bw',data,'data_bacsi',0);
		create_combobox_new('#chuandoan',create_bacsi_chandoan,'bw',data,'data_bacsi',0);
		create_combobox_new('#m_bacsy',create_bacsi_mat,'bw',data,'data_bacsi',0);
		create_combobox_new('#tmh_bacsy',create_bacsi_taimuihong,'bw',data,'data_bacsi',0);
		create_combobox_new('#rhm_bacsy',create_bacsi_ranghammat,'bw',data,'data_bacsi',0);
		create_combobox_new('#dalieu_bacsy',create_bacsi_dalieu,'bw',data,'data_bacsi',0);
		create_combobox_new('#noikhoa_bacsy',create_bacsi_noikhoa,'bw',data,'data_bacsi',0);
		create_combobox_new('#ngoaikhoa_bacsy',create_bacsi_ngoaikhoa,'bw',data,'data_bacsi',0);
		create_combobox_new('#sanphukhoa_bacsy',create_bacsi_sanphukhoa,'bw',data,'data_bacsi',0);
		create_combobox_new('#tuanhoan_bacsy',create_bacsi_tuanhoan,'bw',data,'data_bacsi',0);
		create_combobox_new('#hohap_bacsy',create_bacsi_hohap,'bw',data,'data_bacsi',0);
		create_combobox_new('#tieuhoa_bacsy',create_bacsi_tieuhoa,'bw',data,'data_bacsi',0);
		create_combobox_new('#thantietnieusinhduc_bacsy',create_bacsi_thantietnieusinhduc,'bw',data,'data_bacsi',0);
		create_combobox_new('#thankinh_bacsy',create_bacsi_thankinh,'bw',data,'data_bacsi',0);
		create_combobox_new('#tamthan_bacsy',create_bacsi_tamthan,'bw',data,'data_bacsi',0);
		create_combobox_new('#hevandong_bacsy',create_bacsi_hevandong,'bw',data,'data_bacsi',0);
		create_combobox_new('#noitiet_bacsy',create_bacsi_noitiet,'bw',data,'data_bacsi',0);
		
		create_combobox_new('#ketquaxetnghiem_bacsy',create_bacsi_xetnghiem,'bw',data,'data_bacsi',0);
		create_combobox_new('#ketquasieuam_bacsy',create_bacsi_sieuam,'bw',data,'data_bacsi',0);
		create_combobox_new('#ketquaxquang_bacsy',create_bacsi_xquang,'bw',data,'data_bacsi',0);
		
	});
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_phanloai').done(function(data) {
		create_combobox_new('#phanloaisk',create_phanloai_suckhoe,'bw',data,'data_phanloai',0);
		create_combobox_new('#phanloaitl',create_phanloai_theluc,'bw',data,'data_phanloai',0);
		create_combobox_new('#m_phanloai',create_phanloai_mat,'bw',data,'data_phanloai',0);
		create_combobox_new('#tmh_phanloai',create_phanloai_taimuihong,'bw',data,'data_phanloai',0);
		create_combobox_new('#rhm_phanloai',create_phanloai_ranghammat,'bw',data,'data_phanloai',0);
		create_combobox_new('#dalieu_phanloai',create_phanloai_dalieu,'bw',data,'data_phanloai',0);
		create_combobox_new('#noikhoa_phanloai',create_phanloai_noikhoa,'bw',data,'data_phanloai',0);
		create_combobox_new('#ngoaikhoa_phanloai',create_phanloai_ngoaikhoa,'bw',data,'data_phanloai',0);
		create_combobox_new('#sanphukhoa_phanloai',create_phanloai_sanphukhoa,'bw',data,'data_phanloai',0);
		create_combobox_new('#tuanhoan_phanloai',create_phanloai_tuanhoan,'bw',data,'data_phanloai',0);
		create_combobox_new('#hohap_phanloai',create_phanloai_hohap,'bw',data,'data_phanloai',0);
		create_combobox_new('#tieuhoa_phanloai',create_phanloai_tieuhoa,'bw',data,'data_phanloai',0);
		create_combobox_new('#thantietnieusinhduc_phanloai',create_phanloai_thantietnieusinhduc,'bw',data,'data_phanloai',0);
		create_combobox_new('#thankinh_phanloai',create_phanloai_thankinh,'bw',data,'data_phanloai',0);
		create_combobox_new('#tamthan_phanloai',create_phanloai_tamthan,'bw',data,'data_phanloai',0);
		create_combobox_new('#hevandong_phanloai',create_phanloai_hevandong,'bw',data,'data_phanloai',0);
		create_combobox_new('#noitiet_phanloai',create_phanloai_noitiet,'bw',data,'data_phanloai',0);
		
	});
	load_template();
	number_textbox_demical_new("#taitrai_noithuong");
	number_textbox_demical_new("#taiphai_noithuong");
	number_textbox_demical_new("#taitrai_noitham");
	number_textbox_demical_new("#taiphai_noitham");
	$("#taitrai_noithuong,#taiphai_noithuong,#taitrai_noitham,#taiphai_noitham").focusout(function(e) {
        if( $(this).val()=="")
			$(this).val(0);
    });

	$(".add_temp").click(function(e){
		links='resource.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=169&id_loai=90';
		elem=1 + Math.floor(Math.random() * 1000000000); 
		width=90;
		height=80;   
		//dialog_add_dm("",width,height,elem,links); 
		dialog_add_dm("",width,height,elem,links,load_template);  
	}) 
	
	$(".custom-combobox-toggle").click(function(){
		setTimeout(function(){
			$(".custom-combobox-toggle").css('top','0');
			$(".custom-combobox-toggle").css('bottom','0');
		},1000);
	});
	
	$("#phanloaisk_hidden,#phanloaitl_hidden,#m_phanloai_hidden,#tmh_phanloai_hidden,#rhm_phanloai_hidden,#dalieu_phanloai_hidden,#noikhoa_phanloai_hidden,#ngoaikhoa_phanloai_hidden,#sanphukhoa_phanloai_hidden,#tuanhoan_phanloai_hidden,#hohap_phanloai_hidden,#tieuhoa_phanloai_hidden,#thantietnieusinhduc_phanloai_hidden,#thankinh_phanloai_hidden,#tamthan_phanloai_hidden,#hevandong_phanloai_hidden,#noitiet_phanloai_hidden").attr("lang","luu");
	
	number_textbox("#ck_matphai");
	number_textbox("#ck_mattrai");
	number_textbox("#kk_matphai");
	number_textbox("#kk_mattrai");
	
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	phanquyen();
	$('#chen_xquang,#chen_sieuam').button();
	load_select();
	
	func_reload();
	
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );

	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;
	
	});

	$( "#dialog-print" ).dialog({
	  autoOpen: false,
      modal: true,
	  width:340,
      buttons: {
        Ok: function(){
          $( this ).dialog( "close" );
		  $.cookie("in_status", "print_preview"); 
		  var _vl=$("#_mauin").val();	
			if(_vl==1){
        console.log(_id_luotkham2);
				 alert(id_benhnhan+"_"+_id_luotkham2+"_"+id_kham)
				// dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_1&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe');
				// $(".frame_u78787878975f").css("width","793px");
			}else if(_vl==2){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_cty&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			
			}else if(_vl==3){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat2');
				$(".frame_u78787878975f").css("width","793px");
			
			}else if(_vl==4){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=phieukhamsuckhoe_all&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==5){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau1_mat1&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==6){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau1_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==7){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau1_2mat&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==8){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau2_mat1&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==9){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau2_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==10){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau2_2mat&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==11){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau3_mat1&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==12){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau3_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==13){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau3_mat3&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==14){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau3_mat2_3&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}else if(_vl==15){
				//alert();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ksk_mau3_mat1_2_3&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
				$(".frame_u78787878975f").css("width","793px");
			}
			
        }
      }
    })
	.dialog("widget")
	.find(".ui-dialog-buttonset button")
	.eq(0).addClass("btnSave").end()
	



	$("#xemin").click(function(){
		$.cookie("in_status", "print_preview"); 
		$( "#dialog-print" ).dialog("open");	

	});
	
	$("#phieuksk_loai1to").click(function(){
		$("#_mauin").val(1);
		$(".btnSave").focus();
	});
	$("#phieuksk_mat1_loai2to").click(function(){
		$("#_mauin").val(2);
		$(".btnSave").focus();
	});
	$("#phieuksk_mat2_loai2to").click(function(){
		$("#_mauin").val(3);
		$(".btnSave").focus();
	});
	$("#phieuksk_mat2mat_loai2").click(function(){
		$("#_mauin").val(4);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau1_mat1").click(function(){
		$("#_mauin").val(5);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau1_mat2").click(function(){
		$("#_mauin").val(6);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau1_2mat").click(function(){
		$("#_mauin").val(7);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau2_mat1").click(function(){
		$("#_mauin").val(8);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau2_mat2").click(function(){
		$("#_mauin").val(9);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau2_2mat").click(function(){
		$("#_mauin").val(10);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau3_mat1").click(function(){
		$("#_mauin").val(11);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau3_mat2").click(function(){
		$("#_mauin").val(12);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau3_mat3").click(function(){
		$("#_mauin").val(13);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau3_mat2_3").click(function(){
		$("#_mauin").val(14);
		$(".btnSave").focus();
	});
	$("#phieuksk_mau3_mat1_2_3").click(function(){
		$("#_mauin").val(15);
		$(".btnSave").focus();
	});
	$("#_mauin").keyup(function(e){
		if (e.keyCode === 13) {
			var _vl=$("#_mauin").val();	
			if(_vl==1){
				$("#phieuksk_loai1to").click();
				$( ".btnSave" ).click();
				}else if(_vl==2){
					$("#phieuksk_mat1_loai2to").click();
					$( ".btnSave" ).click();
					}else if(_vl==3){
						$("#phieuksk_mat2_loai2to").click();
						$( ".btnSave" ).click();
						}else if(_vl==4){
							$("#phieuksk_mat2mat_loai2").click();
							$( ".btnSave" ).click();
							}else if(_vl==5){
								$("#phieuksk_mau1_mat1").click();
								$( ".btnSave" ).click();
								}else if(_vl==6){
									$("#phieuksk_mau1_mat2").click();
									$( ".btnSave" ).click();
									}else if(_vl==7){
										$("#phieuksk_mau1_2mat").click();
										$( ".btnSave" ).click();
										}else if(_vl==8){
											$("#phieuksk_mau1_mat1").click();
											$( ".btnSave" ).click();
											}else if(_vl==9){
												$("#phieuksk_mau2_mat2").click();
												$( ".btnSave" ).click();
												}else if(_vl==10){
													$("#phieuksk_mau2_2mat").click();
													$( ".btnSave" ).click();
													}else if(_vl==11){
														$("#phieuksk_mau3_mat1").click();
														$( ".btnSave" ).click();
														}else if(_vl==12){
															$("#phieuksk_mau3_mat2").click();
															$( ".btnSave" ).click();
															}else if(_vl==13){
																$("#phieuksk_mau3_mat3").click();
																$( ".btnSave" ).click();
																}else if(_vl==14){
																	$("#phieuksk_mau3_mat2_3").click();
																	$( ".btnSave" ).click();
																	}else if(_vl==15){
																		$("#phieuksk_mau3_mat1_2_3").click();
																		$( ".btnSave" ).click();
																		}else {
																			$("#_mauin").val("");
																			}
		}
	});
	
     
	  
	//$("#panel_main").css("height",$(window).height()-450+"px");
	//$("#panel_main").css("height",550+"px");			 
	$("#panel_main").fadeIn(100); 
	//create_layout();	
	resize_control();
	
	
	// enter event 
	$( "#klc_ketluan" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#phanloaisk1" ).focus();
				return false;
			}
	});
	$( "#phanloaisk1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#phanloaitl1" ).focus();
				return false;
			}
	});
	$( "#phanloaitl1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ck_matphai" ).focus();
				return false;
			}
	});
	$( "#ck_matphai" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ck_mattrai" ).focus();
				return false;
			}
	});
	$( "#ck_mattrai" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#kk_matphai" ).focus();
				return false;
			}
	});
	$( "#kk_matphai" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#m_bacsy" ).focus();
				return false;
			}
	});
	$( "#m_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#m_phanloai1" ).focus();
				return false;
			}
	});
	$( "#m_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#m_benhvemat" ).focus();
				return false;
			}
	});
	$( "#m_benhvemat" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#taimuihong_ghichu" ).focus();
				return false;
			}
	});
	$( "#taimuihong_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tmh_bacsy" ).focus();
				return false;
			}
	});
	$( "#tmh_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tmh_phanloai1" ).focus();
				return false;
			}
	});
	$( "#tmh_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ranghammat_ghichu" ).focus();
				return false;
			}
	});
	$( "#ranghammat_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#rhm_bacsy" ).focus();
				return false;
			}
	});
	$( "#rhm_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#rhm_phanloai1" ).focus();
				return false;
			}
	});
	$( "#rhm_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#dalieu_ghichu" ).focus();
				return false;
			}
	});
	$( "#dalieu_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#dalieu_bacsy" ).focus();
				return false;
			}
	});
	$( "#dalieu_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#dalieu_phanloai1" ).focus();
				return false;
			}
	});
	$( "#dalieu_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noikhoa_ghichu" ).focus();
				return false;
			}
	})
	$( "#noikhoa_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noikhoa_bacsy" ).focus();
				return false;
			}
	});
	$( "#noikhoa_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noikhoa_phanloai1" ).focus();
				return false;
			}
	});
	$( "#noikhoa_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ngoaikhoa_ghichu" ).focus();
				return false;
			}
	});
	$( "#ngoaikhoa_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ngoaikhoa_bacsy" ).focus();
				return false;
			}
	});
	$( "#ngoaikhoa_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#ngoaikhoa_phanloai1" ).focus();
				return false;
			}
	});
	$( "#ngoaikhoa_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#sanphukhoa_ghichu" ).focus();
				return false;
			}
	});
	$( "#sanphukhoa_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#sanphukhoa_bacsy" ).focus();
				return false;
			}
	});
	$( "#sanphukhoa_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#sanphukhoa_phanloai1" ).focus();
				return false;
			}
	});
	$( "#sanphukhoa_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tuanhoan_ghichu" ).focus();
				return false;
			}
	});
	$( "#tuanhoan_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tuanhoan_bacsy" ).focus();
				return false;
			}
	});
	$( "#tuanhoan_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tuanhoan_phanloai1" ).focus();
				return false;
			}
	});
	$( "#tuanhoan_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hohap_ghichu" ).focus();
				return false;
			}
	});
	$( "#hohap_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hohap_bacsy" ).focus();
				return false;
			}
	});
	$( "#hohap_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hohap_phanloai1" ).focus();
				return false;
			}
	});
	$( "#hohap_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tieuhoa_ghichu" ).focus();
				return false;
			}
	});
	$( "#tieuhoa_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tieuhoa_bacsy" ).focus();
				return false;
			}
	});
	$( "#tieuhoa_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tieuhoa_phanloai1" ).focus();
				return false;
			}
	});
	$( "#tieuhoa_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thantietnieusinhduc_ghichu" ).focus();
				return false;
			}
	});
	$( "#thantietnieusinhduc_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thantietnieusinhduc_bacsy" ).focus();
				return false;
			}
	});
	$( "#thantietnieusinhduc_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thantietnieusinhduc_phanloai1" ).focus();
				return false;
			}
	});
	$( "#thantietnieusinhduc_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thankinh_ghichu" ).focus();
				return false;
			}
	});
	$( "#thankinh_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thankinh_bacsy" ).focus();
				return false;
			}
	});
	$( "#thankinh_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#thankinh_phanloai1" ).focus();
				return false;
			}
	});
	$( "#thankinh_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tamthan_ghichu" ).focus();
				return false;
			}
	});
	$( "#tamthan_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tamthan_bacsy" ).focus();
				return false;
			}
	});
	$( "#tamthan_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#tamthan_phanloai1" ).focus();
				return false;
			}
	});
	$( "#tamthan_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hevandong_ghichu" ).focus();
				return false;
			}
	});
	$( "#hevandong_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hevandong_bacsy" ).focus();
				return false;
			}
	});
	$( "#hevandong_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#hevandong_phanloai1" ).focus();
				return false;
			}
	});
	$( "#hevandong_phanloai1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noitiet_ghichu" ).focus();
				return false;
			}
	});
	$( "#noitiet_ghichu" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noitiet_bacsy" ).focus();
				return false;
			}
	});
	$( "#noitiet_bacsy" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 13) {
				$( "#noitiet_phanloai1" ).focus();
				return false;
			}
	});
	
	//end enter event
	if(id_kham2!="0"){
		$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ksk_tongquat&idbenhnhan="+id_benhnhan, 
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

	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ksk_tongquat&idbenhnhan="+id_benhnhan, 
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
          $("#dalieu_ghichu").val('BÌNH THƯỜNG');
          $("#ngoaikhoa_ghichu").val('BÌNH THƯỜNG');
          $("#tuanhoan_ghichu").val('BÌNH THƯỜNG');
          $("#hohap_ghichu").val('BÌNH THƯỜNG');
          $("#tieuhoa_ghichu").val('BÌNH THƯỜNG');
          $("#thantietnieusinhduc_ghichu").val('BÌNH THƯỜNG');
          $("#thankinh_ghichu").val('BÌNH THƯỜNG');
          $("#tamthan_ghichu").val('BÌNH THƯỜNG');
          $("#hevandong_ghichu").val('BÌNH THƯỜNG');
          $("#noitiet_ghichu").val('BÌNH THƯỜNG');
          if (tam1_cls[84]==1) {
            $("#sanphukhoa_ghichu").val('BÌNH THƯỜNG');
          }
			 }
		});	
		
	});
}
	function n_loadform(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ksk_tongquat&idbenhnhan="+id_benhnhan, 
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
			loaikham_click();			
					
		
		});
	});	}
	
	function n_loadform2(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_ksk_tongquat&idbenhnhan="+id_benhnhan, 
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
			//loaddatanew();			
					
		
		});		
	});	}
	
	$(window).resize(function() {		 
		//$("#panel_main").css("height",$(window).height()-450+"px");	
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
				  	dis_all("hien",window.idloaikham_dis);
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
					window.n_suagiocuoi="giosuacuoi";
			  });
				$("#boqua").click(function(){
					dis_all("an",window.idloaikham_dis);
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
					$( "#chuandoan" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					//setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					setval_new('#nhanvien',nhanvien4); 
					setval_new('#chuandoan',chuandoan4); 
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);      		 
				});
			  $("#dathuchien").click(function(){
				  dis_all("an",window.idloaikham_dis);
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
							dataToSend += phancach + '"'+ this.id + '":' + JSON.stringify(this.value)   ;
						}
						phancach = ",";
					
					});
					dataToSend += phancach + '"id_kham":"' + _kham + '"';
					//alert(_id_trangthai);
					dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
					 dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
					 dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
					 dataToSend += phancach + '"idkhamsk":"' +_idkhamsk+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					//alertObject(dataToSend); 
					$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=a',dataToSend)
					 .done(function( gridData ) {	
					 tooltip_message("Đã thực hiện");
					})
											
					n_loadform2();                                  
			  });
			  $("#hoantat").click(function(){
				  dis_all("an",window.idloaikham_dis);
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
				$('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
				
					if ($(this).attr("lang") == "luu") {
						dataToSend += phancach + '"'+ this.id + '":' + JSON.stringify(this.value)   ;
					}
					phancach = ",";
				});
				dataToSend += phancach + '"id_kham":"' + _kham + '"';
				//alert(_id_trangthai);
				dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
				
				dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
				dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
				dataToSend += phancach + '"idkhamsk":"' +_idkhamsk+ '"';
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
				//alertObject(dataToSend); 
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=a',dataToSend)
				.done(function( gridData ) {	
									 //alert(gridData);	 
					})
					tooltip_message("Đã hoàn tất");
				n_loadform2();                                     
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
					$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$( "#chuandoan" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					// setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					if(window.n_suagiocuoi=="giosuacuoi"){
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
			                dataToSend += phancach + '"'+ this.id + '":' + JSON.stringify(this.value)   ;
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_kham":"' + _kham + '"';
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
			        dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
					dataToSend += phancach + '"idkhamsk":"' +_idkhamsk+ '"';
			        dataToSend += '}';
			       // alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			        console.log(window.trangthai_luu);
			       if(window.trangthai_luu=="dathuchien1"){
					   dis_all("an",window.idloaikham_dis);
			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=a',dataToSend).done(function( gridData ) {	
						 tooltip_message("Đã lưu");	 
						})
					}
			         if(window.trangthai_luu=="hoantat1"){
						 dis_all("an",window.idloaikham_dis);
			         	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=a',dataToSend).done(function( gridData ) {	
						 tooltip_message("Đã lưu"); 
						})
			         }     
			          if(window.trangthai_luu=="dangkham1"){
			     			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=a',dataToSend).done(function( gridData ) {	
								 tooltip_message("Đã lưu"); 
							})
			         }

			        n_loadform2();                           
			    });
		var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
		var eventer = window[eventMethod];
		var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
		eventer(messageEvent,function(e) {

		},false);			 
		
		$("#DM_template").click(function(e) {
			grid_click_status=true;
		});  

	
	$( ".add_temp" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
	});
	$('#chen_sieuam').click(function(e) {
		$("#ketquasieuam_ghichu").val(window.kqsieuam);
		tooltip_message("Chèn dữ liệu thành công");
	});
	$('#chen_xquang').click(function(e) {
		$("#ketquaxquang_ghichu").val(window.kqxquang);
		tooltip_message("Chèn dữ liệu thành công");
		//alert(window.kqxquang);
	});
	
});//end ready

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
			var tam1_cls=val[i]["cell"];
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				var k=tam1_cls[1];
				tam_cls+= '<div id="'+val[i]["id"]+'" style="color:#4AC4F3;font-weight: bold;font-size:13px;" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'"><b>'+k+'</b></div>';
				$("#ngay_kham").html(tam1_cls[2]);				 
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
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					if(tam==tam1){
						
						//alert(val[i]["cell"][3]);
						/*if(val[i]["cell"][3]==6608){// if kham SK chi tiet
							
						}else if(val[i]["cell"][3]==6608){
							
						}*/
						$("#nguoi_chidinh").val(val[i]["cell"][4]);
						$("#ngaychidinh").val(val[i]["cell"][2]);
						tenloaikham=val[i]["cell"][1]; 
						
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
					
						window.idloaikham_dis=val[i]["cell"][3];
						setval_new('#nhanvien',val[i]["cell"][7]); 
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',val[i]["cell"][7]);
						if(val[i]["cell"][12]){
							setval_new('#chuandoan',val[i]["cell"][12]); 
							//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',val[i]["cell"][12]);
						}else{
							setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>); 
							//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						}
						$("#center_col div").html(val[i]["cell"][1]); 	
						
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
             if ((_id_trangthai!="Xong" || _id_trangthai!="DaThucHien" || _id_trangthai!="KetThucKham") ) {// && tam1_cls[84]!=18
                // $("#m_benhvemat").val('KHÔNG ĐO MẮT');
             }
             _kham = tam;
             _id_luotkham2=tam1_cls[5];
 
            $("#giothuchien").text(val[i]["cell"][13]);                      
            $("#giohoantat").text(val[i]["cell"][14]);
						//alert(val[i]["cell"][16]);null
						if(val[i]["cell"][16]!="" && val[i]["cell"][16]!=null){
							var str=val[i]["cell"][16].split('|||');
							$("#klc_ketluan").val(str[0]);
							$("#klc_ketquacls").val(str[1]);//
						}else{
							$("#klc_ketluan").val('');
							$("#klc_ketquacls").val('');
						}
						
					//	$("#phanloaisk1").val(val[i]["cell"][17]);
						//$("#phanloaisk1").val(val[i]["cell"][17]);
						if(val[i]["cell"][17]!=""){
						//setval('#phanloaisk','#phanloaisk1','#data_combo_1',val[i]["cell"][17]);
							setval_new('#phanloaisk',val[i]["cell"][17]); 
						}else{
							//setval('#phanloaisk','#phanloaisk1','#data_combo_1',"");
							setval_new('#phanloaisk',"");
							}
						//$("#phanloaitl1").val(val[i]["cell"][18]); 
						if(val[i]["cell"][18]!=""){
							setval_new('#phanloaitl',val[i]["cell"][18]);
							//setval('#phanloaitl','#phanloaitl1','#data_combo_2',val[i]["cell"][18]);
						}else{
							//setval('#phanloaisk','#phanloaisk1','#data_combo_2',"");
							setval_new('#phanloaitl',"");
							}
						if(val[i]["cell"][19]!=""){
							$("#ck_matphai").val(val[i]["cell"][19]);
						}
						if(val[i]["cell"][20]!=""){
							$("#ck_mattrai").val(val[i]["cell"][20]);
						}
						if(val[i]["cell"][21]!=""){
							$("#kk_matphai").val(val[i]["cell"][21]); 
						}
						if(val[i]["cell"][22]!=""){
							$("#kk_mattrai").val(val[i]["cell"][22]);
						}
						$("#m_benhvemat").val(val[i]["cell"][23]);
						//$("#m_bacsy").val(val[i]["cell"][24]); 
						if(val[i]["cell"][24]!=""){
							//setval('#m_bacsy','#m_bacsy1','#data_combo_bacsy',val[i]["cell"][24]);
							setval_new('#m_bacsy',val[i]["cell"][24]);
						}else{
							//setval('#m_bacsy','#m_bacsy1','#data_combo_bacsy',"");
							setval_new('#m_bacsy',"");
						}
						//if(val[i]["cell"][25]!=""){
						//$("#m_phanloai1").val(val[i]["cell"][25]);
						//}
						if(val[i]["cell"][25]!=""){
							//setval('#m_phanloai','#m_phanloai1','#data_combo_3',val[i]["cell"][25]);
							setval_new('#m_phanloai',val[i]["cell"][25]);
						}else{
							//setval('#m_phanloai','#m_phanloai1','#data_combo_3',"");
							setval_new('#m_phanloai',"");
						}
						$("#taimuihong_ghichu").val(val[i]["cell"][26]);
						if(val[i]["cell"][27]!=""){
							//setval('#tmh_bacsy','#tmh_bacsy1','#data_combo_bacsy',val[i]["cell"][27]);
							setval_new('#tmh_bacsy',val[i]["cell"][27]);
						}else{
							//setval('#tmh_bacsy','#tmh_bacsy1','#data_combo_bacsy',"");
							setval_new('#tmh_bacsy',"");
						}
						//if(val[i]["cell"][28]!=""){
						//$("#tmh_phanloai1").val(val[i]["cell"][28]);
						//}
						if(val[i]["cell"][28]!=""){
							//setval('#tmh_phanloai','#tmh_phanloai1','#data_combo_4',val[i]["cell"][28]);
							setval_new('#tmh_phanloai',val[i]["cell"][28]);
						}else{
							//setval('#tmh_phanloai','#tmh_phanloai1','#data_combo_4',"");
							setval_new('#tmh_phanloai',"");
						}
						$("#ranghammat_ghichu").val(val[i]["cell"][29]);
						if(val[i]["cell"][30]!=""){
							//setval('#rhm_bacsy','#rhm_bacsy1','#data_combo_bacsy',val[i]["cell"][30]);
							setval_new('#rhm_bacsy',val[i]["cell"][30]);
						}else{
							//setval('#rhm_bacsy','#rhm_bacsy1','#data_combo_bacsy',"");
							setval_new('#rhm_bacsy',"");
						}
						//if(val[i]["cell"][31]!=""){
						//$("#rhm_phanloai1").val(val[i]["cell"][31]);
						//}
						if(val[i]["cell"][31]!=""){
						//	setval('#rhm_phanloai','#rhm_phanloai1','#data_combo_5',val[i]["cell"][31]);
							setval_new('#rhm_phanloai',val[i]["cell"][31]);
						}else{
							//setval('#rhm_phanloai','#rhm_phanloai1','#data_combo_5',"");
							setval_new('#rhm_phanloai',"");
						}
						$("#dalieu_ghichu").val(val[i]["cell"][32]);
						if(val[i]["cell"][33]!=""){ 
							//setval('#dalieu_bacsy','#dalieu_bacsy1','#data_combo_bacsy',val[i]["cell"][33]);
							setval_new('#dalieu_bacsy',val[i]["cell"][33]);
						}else{
							//setval('#dalieu_bacsy','#dalieu_bacsy1','#data_combo_bacsy',"");
							setval_new('#dalieu_bacsy',"");
						}
						//if(val[i]["cell"][34]!=""){
						//$("#dalieu_phanloai1").val(val[i]["cell"][34]);
						//}
						if(val[i]["cell"][34]!=""){ 
							//setval('#dalieu_phanloai','#dalieu_phanloai1','#data_combo_6',val[i]["cell"][34]);
							setval_new('#dalieu_phanloai',val[i]["cell"][34]);
						}else{
							//setval('#dalieu_phanloai','#dalieu_phanloai1','#data_combo_6',"");
							setval_new('#dalieu_phanloai',"");
						}
						$("#noikhoa_ghichu").val(val[i]["cell"][35]);
						if(val[i]["cell"][36]!=""){ 
						//	setval('#noikhoa_bacsy','#noikhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][36]);
							setval_new('#noikhoa_bacsy',val[i]["cell"][36]);
						}else{
							//setval('#noikhoa_bacsy','#noikhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#noikhoa_bacsy',"");
						}
						//if(val[i]["cell"][37]!=""){
						//$("#noikhoa_phanloai1").val(val[i]["cell"][37]);
						//}
						if(val[i]["cell"][37]!=""){ 
							//setval('#noikhoa_phanloai','#noikhoa_phanloai1','#data_combo_7',val[i]["cell"][37]);
							setval_new('#noikhoa_phanloai',val[i]["cell"][37]);
						}else{
							//setval('#noikhoa_phanloai','#noikhoa_phanloai1','#data_combo_7',"");
							setval_new('#noikhoa_phanloai',"");
						}
						$("#ngoaikhoa_ghichu").val(val[i]["cell"][38]);
						if(val[i]["cell"][39]!=""){
							//setval('#ngoaikhoa_bacsy','#ngoaikhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][39]);
							setval_new('#ngoaikhoa_bacsy',val[i]["cell"][39]);
						}else{
							//setval('#ngoaikhoa_bacsy','#ngoaikhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#ngoaikhoa_bacsy',""); 
						}
						//if(val[i]["cell"][40]!=""){
						//$("#ngoaikhoa_phanloai1").val(val[i]["cell"][40]);
						//}
						if(val[i]["cell"][40]!=""){ 
							//setval('#ngoaikhoa_phanloai','#ngoaikhoa_phanloai1','#data_combo_8',val[i]["cell"][40]);
							setval_new('#ngoaikhoa_phanloai',val[i]["cell"][40]);
						}else{
							//setval('#ngoaikhoa_phanloai','#ngoaikhoa_phanloai1','#data_combo_8',"");
							setval_new('#ngoaikhoa_phanloai',"");
						}
						$("#sanphukhoa_ghichu").val(val[i]["cell"][41]);
						if(val[i]["cell"][42]!=""){
							//setval('#sanphukhoa_bacsy','#sanphukhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][42]);
							setval_new('#sanphukhoa_bacsy',val[i]["cell"][42]);
						}else{
							//setval('#sanphukhoa_bacsy','#sanphukhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#sanphukhoa_bacsy',"");
						}
						//if(val[i]["cell"][43]!=""){
						//$("#sanphukhoa_phanloai1").val(val[i]["cell"][43]);
						//}
						if(val[i]["cell"][43]!=""){ 
							//setval('#sanphukhoa_phanloai','#sanphukhoa_phanloai1','#data_combo_9',val[i]["cell"][43]);
							setval_new('#sanphukhoa_phanloai',val[i]["cell"][43]);
						}else{
							//setval('#sanphukhoa_phanloai','#sanphukhoa_phanloai1','#data_combo_9',"");
							setval_new('#sanphukhoa_phanloai',"");
						}
						$("#tuanhoan_ghichu").val(val[i]["cell"][44]);
						if(val[i]["cell"][45]!=""){
							//setval('#tuanhoan_bacsy','#tuanhoan_bacsy1','#data_combo_bacsy',val[i]["cell"][45]); 
							setval_new('#tuanhoan_bacsy',val[i]["cell"][45]);
						}else{
							//setval('#tuanhoan_bacsy','#tuanhoan_bacsy1','#data_combo_bacsy',"");
							setval_new('#tuanhoan_bacsy',"");
						}
						//if(val[i]["cell"][46]!=""){
						//$("#tuanhoan_phanloai1").val(val[i]["cell"][46]);
						//}
						if(val[i]["cell"][46]!=""){ 
							//setval('#tuanhoan_phanloai','#tuanhoan_phanloai1','#data_combo_10',val[i]["cell"][46]);
							setval_new('#tuanhoan_phanloai',val[i]["cell"][46]);
						}else{
							//setval('#tuanhoan_phanloai','#tuanhoan_phanloai1','#data_combo_10',"");
							setval_new('#tuanhoan_phanloai',"");
						}
						$("#hohap_ghichu").val(val[i]["cell"][47]);
						if(val[i]["cell"][48]!=""){
							//setval('#hohap_bacsy','#hohap_bacsy1','#data_combo_bacsy',val[i]["cell"][48]); 
							setval_new('#hohap_bacsy',val[i]["cell"][48]);
						}else{
							//setval('#hohap_bacsy','#hohap_bacsy1','#data_combo_bacsy',"");
							setval_new('#hohap_bacsy',"");
						}
						//if(val[i]["cell"][49]!=""){
						//$("#hohap_phanloai1").val(val[i]["cell"][49]);
						//}
						if(val[i]["cell"][49]!=""){ 
							//setval('#hohap_phanloai','#hohap_phanloai1','#data_combo_11',val[i]["cell"][49]);
							setval_new('#hohap_phanloai',val[i]["cell"][49]);
						}else{
							//setval('#hohap_phanloai','#hohap_phanloai1','#data_combo_11',"");
							setval_new('#hohap_phanloai',"");
						}
						$("#tieuhoa_ghichu").val(val[i]["cell"][50]);
						if(val[i]["cell"][51]!=""){ 
							//setval('#tieuhoa_bacsy','#tieuhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][51]); 
							setval_new('#tieuhoa_bacsy',val[i]["cell"][51]);
						}else{
							//setval('#tieuhoa_bacsy','#tieuhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#tieuhoa_bacsy',"");
						}
						//if(val[i]["cell"][52]!=""){
						//$("#tieuhoa_phanloai1").val(val[i]["cell"][52]);
						//}
						if(val[i]["cell"][52]!=""){ 
							//setval('#tieuhoa_phanloai','#tieuhoa_phanloai1','#data_combo_12',val[i]["cell"][52]);
							setval_new('#tieuhoa_phanloai',val[i]["cell"][52]);
						}else{
						//	setval('#tieuhoa_phanloai','#tieuhoa_phanloai1','#data_combo_12',"");
							setval_new('#tieuhoa_phanloai',"");
						}
						
						$("#thantietnieusinhduc_ghichu").val(val[i]["cell"][53]);
						if(val[i]["cell"][54]!=""){
							//setval('#thantietnieusinhduc_bacsy','#thantietnieusinhduc_bacsy1','#data_combo_bacsy',val[i]["cell"][54]);
							setval_new('#thantietnieusinhduc_bacsy',val[i]["cell"][54]);
						}else{
							//setval('#thantietnieusinhduc_bacsy','#thantietnieusinhduc_bacsy1','#data_combo_bacsy',"");
							setval_new('#thantietnieusinhduc_bacsy',"");
						}
						//if(val[i]["cell"][55]!=""){
						//$("#thantietnieusinhduc_phanloai1").val(val[i]["cell"][55]);
						//}
						if(val[i]["cell"][55]!=""){ 
						//	setval('#thantietnieusinhduc_phanloai','#thantietnieusinhduc_phanloai1','#data_combo_13',val[i]["cell"][55]);
							setval_new('#thantietnieusinhduc_phanloai',val[i]["cell"][55]);
						}else{
							//setval('#thantietnieusinhduc_phanloai','#thantietnieusinhduc_phanloai1','#data_combo_13',"");
							setval_new('#thantietnieusinhduc_phanloai',"");
						}
						
						$("#thankinh_ghichu").val(val[i]["cell"][56]);
						if(val[i]["cell"][57]!=""){
							//setval('#thankinh_bacsy','#thankinh_bacsy1','#data_combo_bacsy',val[i]["cell"][57]);  
							setval_new('#thankinh_bacsy',val[i]["cell"][57]);
						}else{
							//setval('#thankinh_bacsy','#thankinh_bacsy1','#data_combo_bacsy',"");
							setval_new('#thankinh_bacsy',"");
						}
						//if(val[i]["cell"][58]!=""){
						//$("#thankinh_phanloai1").val(val[i]["cell"][58]);
						//}
						
						if(val[i]["cell"][58]!=""){ 
							//setval('#thankinh_phanloai','#thankinh_phanloai1','#data_combo_14',val[i]["cell"][58]);
							//alert(val[i]["cell"][58]);
							setval_new('#thankinh_phanloai',val[i]["cell"][58]);
						}else{
							//setval('#thankinh_phanloai','#thankinh_phanloai1','#data_combo_14',"");
							setval_new('#thankinh_phanloai',"");
						}
						$("#tamthan_ghichu").val(val[i]["cell"][59]);
						if(val[i]["cell"][60]!=""){
							//setval('#tamthan_bacsy','#tamthan_bacsy1','#data_combo_bacsy',val[i]["cell"][60]);  
							setval_new('#tamthan_bacsy',val[i]["cell"][60]);
						}else{
							//setval('#tamthan_bacsy','#tamthan_bacsy1','#data_combo_bacsy',"");  
							setval_new('#tamthan_bacsy',"");
						}
						//if(val[i]["cell"][61]!=""){
						//$("#tamthan_phanloai1").val(val[i]["cell"][61]);
						//}
						if(val[i]["cell"][61]!=""){ 
							//setval('#tamthan_phanloai','#tamthan_phanloai1','#data_combo_15',val[i]["cell"][61]);
							setval_new('#tamthan_phanloai',val[i]["cell"][61]);
						}else{
							//setval('#tamthan_phanloai','#tamthan_phanloai1','#data_combo_15',"");
							setval_new('#tamthan_phanloai',"");
						}
						$("#hevandong_ghichu").val(val[i]["cell"][62]);
						if(val[i]["cell"][63]!=""){
							//setval('#hevandong_bacsy','#hevandong_bacsy1','#data_combo_bacsy',val[i]["cell"][63]); 
							setval_new('#hevandong_bacsy',val[i]["cell"][63]); 
						}else{
							//setval('#hevandong_bacsy','#hevandong_bacsy1','#data_combo_bacsy',""); 
							setval_new('#hevandong_bacsy',""); 
						}
						//if(val[i]["cell"][64]!=""){
						//$("#hevandong_phanloai1").val(val[i]["cell"][64]);
						//}
						if(val[i]["cell"][64]!=""){ 
							//setval('#hevandong_phanloai','#hevandong_phanloai1','#data_combo_16',val[i]["cell"][64]);
							setval_new('#hevandong_phanloai',val[i]["cell"][64]); 
						}else{
							//setval('#hevandong_phanloai','#hevandong_phanloai1','#data_combo_16',"");
							setval_new('#hevandong_phanloai',"");
						}
						$("#noitiet_ghichu").val(val[i]["cell"][65]);
						//$("#noitiet_bacsy").val(val[i]["cell"][66]); 
						if(val[i]["cell"][66]!=""){
							//setval('#noitiet_bacsy','#noitiet_bacsy1','#data_combo_bacsy',val[i]["cell"][66]); 
							setval_new('#noitiet_bacsy',val[i]["cell"][66]);
						}else{
							//setval('#noitiet_bacsy','#noitiet_bacsy1','#data_combo_bacsy',""); 
							setval_new('#noitiet_bacsy',"");
						}
						//if(val[i]["cell"][67]!=""){
						//$("#noitiet_phanloai1").val(val[i]["cell"][67]);
						//}
						if(val[i]["cell"][67]!=""){ 
							//setval('#noitiet_phanloai','#noitiet_phanloai1','#data_combo_17',val[i]["cell"][67]);
							setval_new('#noitiet_phanloai',val[i]["cell"][67]);
						}else{
							//setval('#noitiet_phanloai','#noitiet_phanloai1','#data_combo_17',"");
							setval_new('#noitiet_phanloai',"");
							}
						_idkhamsk=val[i]["cell"][68];
						
						if(_idkhamsk>0){
							$("#taiphai_noithuong").val(val[i]["cell"][71]);
							$("#taiphai_noitham").val(val[i]["cell"][72]);
							$("#taitrai_noithuong").val(val[i]["cell"][73]);
							$("#taitrai_noitham").val(val[i]["cell"][74]);
							$("#benhtathientai").val(val[i]["cell"][75]);
						}else{
              if (val[i]["cell"][84]==1) {
                $("#sanphukhoa_ghichu").val('BÌNH THƯỜNG');
              }
							$("#taitrai_noithuong").val(5);
							$("#taiphai_noithuong").val(5);
							$("#taitrai_noitham").val(0.5);
							$("#taiphai_noitham").val(0.5);
              $("#dalieu_ghichu").val('BÌNH THƯỜNG');
              $("#ngoaikhoa_ghichu").val('BÌNH THƯỜNG');
              $("#tuanhoan_ghichu").val('BÌNH THƯỜNG');
              $("#hohap_ghichu").val('BÌNH THƯỜNG');
              $("#tieuhoa_ghichu").val('BÌNH THƯỜNG');
              $("#thantietnieusinhduc_ghichu").val('BÌNH THƯỜNG');
              $("#thankinh_ghichu").val('BÌNH THƯỜNG');
              $("#tamthan_ghichu").val('BÌNH THƯỜNG');
              $("#hevandong_ghichu").val('BÌNH THƯỜNG');
              $("#noitiet_ghichu").val('BÌNH THƯỜNG');
							
						}
						
						$("#hamtren").val(val[i]["cell"][76]);
						$("#hamduoi").val(val[i]["cell"][77]);
						
						if(val[i]["cell"][78]!="" && val[i]["cell"][78]!=null){
							setval_new('#ketquaxetnghiem_bacsy',val[i]["cell"][78]);
						}else{
							setval_new('#ketquaxetnghiem_bacsy','');
						}
						if(val[i]["cell"][79]!="" && val[i]["cell"][79]!=null){
							setval_new('#ketquasieuam_bacsy',val[i]["cell"][79]);
						}else{
							setval_new('#ketquasieuam_bacsy','');
						}
						if(val[i]["cell"][80]!="" && val[i]["cell"][80]!=null){
							setval_new('#ketquaxquang_bacsy',val[i]["cell"][80]);
						}else{
							setval_new('#ketquaxquang_bacsy','');
						}
						if(val[i]["cell"][81]!="" && val[i]["cell"][81]!=null){
							var str=val[i]["cell"][81].split('|||');
							$("#ketquaxetnghiem_ghichu").val(str[0]);
							$("#ketquasieuam_ghichu").val(str[1]);
							$("#ketquaxquang_ghichu").val(str[2]);
						}else{
							$("#ketquaxetnghiem_ghichu").val('');
							$("#ketquasieuam_ghichu").val('');
							$("#ketquaxquang_ghichu").val('');
						}
						
						if(val[i]["cell"][82]!="" && val[i]["cell"][82]!=null){
							$('#chen_sieuam').button( {disabled:false});
							window.kqsieuam=val[i]["cell"][82];
						}else{
							$('#chen_sieuam').button( {disabled:true});	
							window.kqsieuam='';
						}
						if(val[i]["cell"][83]!="" && val[i]["cell"][83]!=null){
							$('#chen_xquang').button( {disabled:false});
							window.kqxquang=val[i]["cell"][83];
						}else{
							$('#chen_xquang').button( {disabled:true});	
							window.kqxquang='';
						}
						
						
						
					//alert(_id_trangthai);
            if(_id_trangthai=="DangCho"){
                      if (val[i]["cell"][84]==1) {
                        $("#sanphukhoa_ghichu").val('BÌNH THƯỜNG');
                      }
                      $("#dalieu_ghichu").val('BÌNH THƯỜNG');
                      $("#ngoaikhoa_ghichu").val('BÌNH THƯỜNG');
                      $("#tuanhoan_ghichu").val('BÌNH THƯỜNG');
                      $("#hohap_ghichu").val('BÌNH THƯỜNG');
                      $("#tieuhoa_ghichu").val('BÌNH THƯỜNG');
                      $("#thantietnieusinhduc_ghichu").val('BÌNH THƯỜNG');
                      $("#thankinh_ghichu").val('BÌNH THƯỜNG');
                      $("#tamthan_ghichu").val('BÌNH THƯỜNG');
                      $("#hevandong_ghichu").val('BÌNH THƯỜNG');
                      $("#noitiet_ghichu").val('BÌNH THƯỜNG');
						dis_all("hien",window.idloaikham_dis);
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
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						setval_new('#nhanvien',<?=$_SESSION['user']['id_user']?>);
						setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>);
                         window.trangthai_luu="dangkham1";		
						 if(_idkhamsk>0){
							
						}else{
							$('#panel_main').find('textarea').each(function() {
								if ($(this).attr("lang") == "luu" && this.id!="klc_ketluan") {
									$("#"+this.id).val("Bình thường");
								}
							});
						}  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an",window.idloaikham_dis);
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
						//setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						if(val[i]["cell"][70]){
							//alert(val[i]["cell"][70]);
							$( "#chuandoan" ).attr("disabled",true);
							$('#hoantat').button( {disabled:true});	
							$('.chuandoan_button').button( {disabled:true});
						}
						 
						window.trangthai_luu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien",window.idloaikham_dis);
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
						//alert(_idkhamsk);
						if(_idkhamsk>0){
							
						}else{
							$('#panel_main').find('textarea').each(function() {
								if ($(this).attr("lang") == "luu" && this.id!="klc_ketluan") {
									$("#"+this.id).val("Bình thường");
								}
							});
						}
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						setval_new('#nhanvien',<?=$_SESSION['user']['id_user']?>);
						setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>);
						//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						window.trangthai_luu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an",window.idloaikham_dis);
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
						
						window.trangthai_luu="hoantat1";
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
					//console.log(check[1]);
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);
						}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);
						}
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
								
		});
	});
}

function loaddatanew(){
$.each( data_luotkham, function( key, val ) {
	$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
					tam=val[i]["id"];			
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					if(tam==tam1){
					
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
                       	tenloaikham=val[i]["cell"][1]; 
						
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
						
						setval_new('#nhanvien',val[i]["cell"][7]); 
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',val[i]["cell"][7]);
						if(val[i]["cell"][12]){
							setval_new('#chuandoan',val[i]["cell"][12]); 
							//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',val[i]["cell"][12]);
						}else{
							setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>); 
							//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						}
						$("#center_col div").html(val[i]["cell"][1]); 	
						
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
               _kham = tam;
               _id_luotkham2=tam1_cls[5];
	 
              $("#giothuchien").text(val[i]["cell"][13]);                      
              $("#giohoantat").text(val[i]["cell"][14]);
						  
						//$("#klc_ketluan").val(val[i]["cell"][16]);
						
						
						if(val[i]["cell"][16]!="" && val[i]["cell"][16]!=null){
							var str=val[i]["cell"][16].split('|||');
							$("#klc_ketluan").val(str[0]);
							$("#klc_ketquacls").val(str[1]);
						}else{
							$("#klc_ketluan").val('');
							$("#klc_ketquacls").val('');
						}
					//	$("#phanloaisk1").val(val[i]["cell"][17]);
						//$("#phanloaisk1").val(val[i]["cell"][17]);
						if(val[i]["cell"][17]!=""){
						//setval('#phanloaisk','#phanloaisk1','#data_combo_1',val[i]["cell"][17]);
							setval_new('#phanloaisk',val[i]["cell"][17]); 
						}else{
							//setval('#phanloaisk','#phanloaisk1','#data_combo_1',"");
							setval_new('#phanloaisk',"");
							}
						//$("#phanloaitl1").val(val[i]["cell"][18]); 
						if(val[i]["cell"][18]!=""){
							setval_new('#phanloaitl',val[i]["cell"][18]);
							//setval('#phanloaitl','#phanloaitl1','#data_combo_2',val[i]["cell"][18]);
						}else{
							//setval('#phanloaisk','#phanloaisk1','#data_combo_2',"");
							setval_new('#phanloaitl',"");
							}
						if(val[i]["cell"][19]!=""){
							$("#ck_matphai").val(val[i]["cell"][19]);
						}
						if(val[i]["cell"][20]!=""){
							$("#ck_mattrai").val(val[i]["cell"][20]);
						}
						if(val[i]["cell"][21]!=""){
							$("#kk_matphai").val(val[i]["cell"][21]); 
						}
						if(val[i]["cell"][22]!=""){
							$("#kk_mattrai").val(val[i]["cell"][22]);
						}
						$("#m_benhvemat").val(val[i]["cell"][23]);
						//$("#m_bacsy").val(val[i]["cell"][24]); 
						if(val[i]["cell"][24]!=""){
							//setval('#m_bacsy','#m_bacsy1','#data_combo_bacsy',val[i]["cell"][24]);
							setval_new('#m_bacsy',val[i]["cell"][24]);
						}else{
							//setval('#m_bacsy','#m_bacsy1','#data_combo_bacsy',"");
							setval_new('#m_bacsy',"");
						}
						//if(val[i]["cell"][25]!=""){
						//$("#m_phanloai1").val(val[i]["cell"][25]);
						//}
						if(val[i]["cell"][25]!=""){
							//setval('#m_phanloai','#m_phanloai1','#data_combo_3',val[i]["cell"][25]);
							setval_new('#m_phanloai',val[i]["cell"][25]);
						}else{
							//setval('#m_phanloai','#m_phanloai1','#data_combo_3',"");
							setval_new('#m_phanloai',"");
						}
						$("#taimuihong_ghichu").val(val[i]["cell"][26]);
						if(val[i]["cell"][27]!=""){
							//setval('#tmh_bacsy','#tmh_bacsy1','#data_combo_bacsy',val[i]["cell"][27]);
							setval_new('#tmh_bacsy',val[i]["cell"][27]);
						}else{
							//setval('#tmh_bacsy','#tmh_bacsy1','#data_combo_bacsy',"");
							setval_new('#tmh_bacsy',"");
						}
						//if(val[i]["cell"][28]!=""){
						//$("#tmh_phanloai1").val(val[i]["cell"][28]);
						//}
						if(val[i]["cell"][28]!=""){
							//setval('#tmh_phanloai','#tmh_phanloai1','#data_combo_4',val[i]["cell"][28]);
							setval_new('#tmh_phanloai',val[i]["cell"][28]);
						}else{
							//setval('#tmh_phanloai','#tmh_phanloai1','#data_combo_4',"");
							setval_new('#tmh_phanloai',"");
						}
						$("#ranghammat_ghichu").val(val[i]["cell"][29]);
						if(val[i]["cell"][30]!=""){
							//setval('#rhm_bacsy','#rhm_bacsy1','#data_combo_bacsy',val[i]["cell"][30]);
							setval_new('#rhm_bacsy',val[i]["cell"][30]);
						}else{
							//setval('#rhm_bacsy','#rhm_bacsy1','#data_combo_bacsy',"");
							setval_new('#rhm_bacsy',"");
						}
						//if(val[i]["cell"][31]!=""){
						//$("#rhm_phanloai1").val(val[i]["cell"][31]);
						//}
						if(val[i]["cell"][31]!=""){
						//	setval('#rhm_phanloai','#rhm_phanloai1','#data_combo_5',val[i]["cell"][31]);
							setval_new('#rhm_phanloai',val[i]["cell"][31]);
						}else{
							//setval('#rhm_phanloai','#rhm_phanloai1','#data_combo_5',"");
							setval_new('#rhm_phanloai',"");
						}
						$("#dalieu_ghichu").val(val[i]["cell"][32]);
						if(val[i]["cell"][33]!=""){ 
							//setval('#dalieu_bacsy','#dalieu_bacsy1','#data_combo_bacsy',val[i]["cell"][33]);
							setval_new('#dalieu_bacsy',val[i]["cell"][33]);
						}else{
							//setval('#dalieu_bacsy','#dalieu_bacsy1','#data_combo_bacsy',"");
							setval_new('#dalieu_bacsy',"");
						}
						//if(val[i]["cell"][34]!=""){
						//$("#dalieu_phanloai1").val(val[i]["cell"][34]);
						//}
						if(val[i]["cell"][34]!=""){ 
							//setval('#dalieu_phanloai','#dalieu_phanloai1','#data_combo_6',val[i]["cell"][34]);
							setval_new('#dalieu_phanloai',val[i]["cell"][34]);
						}else{
							//setval('#dalieu_phanloai','#dalieu_phanloai1','#data_combo_6',"");
							setval_new('#dalieu_phanloai',"");
						}
						$("#noikhoa_ghichu").val(val[i]["cell"][35]);
						if(val[i]["cell"][36]!=""){ 
						//	setval('#noikhoa_bacsy','#noikhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][36]);
							setval_new('#noikhoa_bacsy',val[i]["cell"][36]);
						}else{
							//setval('#noikhoa_bacsy','#noikhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#noikhoa_bacsy',val[i]["cell"][36]);
						}
						//if(val[i]["cell"][37]!=""){
						//$("#noikhoa_phanloai1").val(val[i]["cell"][37]);
						//}
						if(val[i]["cell"][37]!=""){ 
							//setval('#noikhoa_phanloai','#noikhoa_phanloai1','#data_combo_7',val[i]["cell"][37]);
							setval_new('#noikhoa_phanloai',val[i]["cell"][37]);
						}else{
							//setval('#noikhoa_phanloai','#noikhoa_phanloai1','#data_combo_7',"");
							setval_new('#noikhoa_phanloai',"");
						}
						$("#ngoaikhoa_ghichu").val(val[i]["cell"][38]);
						if(val[i]["cell"][39]!=""){
							//setval('#ngoaikhoa_bacsy','#ngoaikhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][39]);
							setval_new('#ngoaikhoa_bacsy',val[i]["cell"][39]);
						}else{
							//setval('#ngoaikhoa_bacsy','#ngoaikhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#ngoaikhoa_bacsy',""); 
						}
						//if(val[i]["cell"][40]!=""){
						//$("#ngoaikhoa_phanloai1").val(val[i]["cell"][40]);
						//}
						if(val[i]["cell"][40]!=""){ 
							//setval('#ngoaikhoa_phanloai','#ngoaikhoa_phanloai1','#data_combo_8',val[i]["cell"][40]);
							setval_new('#ngoaikhoa_phanloai',val[i]["cell"][40]);
						}else{
							//setval('#ngoaikhoa_phanloai','#ngoaikhoa_phanloai1','#data_combo_8',"");
							setval_new('#ngoaikhoa_phanloai',"");
						}
						$("#sanphukhoa_ghichu").val(val[i]["cell"][41]);
						if(val[i]["cell"][42]!=""){
							//setval('#sanphukhoa_bacsy','#sanphukhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][42]);
							setval_new('#sanphukhoa_bacsy',val[i]["cell"][42]);
						}else{
							//setval('#sanphukhoa_bacsy','#sanphukhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#sanphukhoa_bacsy',"");
						}
						//if(val[i]["cell"][43]!=""){
						//$("#sanphukhoa_phanloai1").val(val[i]["cell"][43]);
						//}
						if(val[i]["cell"][43]!=""){ 
							//setval('#sanphukhoa_phanloai','#sanphukhoa_phanloai1','#data_combo_9',val[i]["cell"][43]);
							setval_new('#sanphukhoa_phanloai',val[i]["cell"][43]);
						}else{
							//setval('#sanphukhoa_phanloai','#sanphukhoa_phanloai1','#data_combo_9',"");
							setval_new('#sanphukhoa_phanloai',"");
						}
						$("#tuanhoan_ghichu").val(val[i]["cell"][44]);
						if(val[i]["cell"][45]!=""){
							//setval('#tuanhoan_bacsy','#tuanhoan_bacsy1','#data_combo_bacsy',val[i]["cell"][45]); 
							setval_new('#tuanhoan_bacsy',val[i]["cell"][45]);
						}else{
							//setval('#tuanhoan_bacsy','#tuanhoan_bacsy1','#data_combo_bacsy',"");
							setval_new('#tuanhoan_bacsy',"");
						}
						//if(val[i]["cell"][46]!=""){
						//$("#tuanhoan_phanloai1").val(val[i]["cell"][46]);
						//}
						if(val[i]["cell"][46]!=""){ 
							//setval('#tuanhoan_phanloai','#tuanhoan_phanloai1','#data_combo_10',val[i]["cell"][46]);
							setval_new('#tuanhoan_phanloai',val[i]["cell"][46]);
						}else{
							//setval('#tuanhoan_phanloai','#tuanhoan_phanloai1','#data_combo_10',"");
							setval_new('#tuanhoan_phanloai',"");
						}
						$("#hohap_ghichu").val(val[i]["cell"][47]);
						if(val[i]["cell"][48]!=""){
							//setval('#hohap_bacsy','#hohap_bacsy1','#data_combo_bacsy',val[i]["cell"][48]); 
							setval_new('#hohap_bacsy',val[i]["cell"][48]);
						}else{
							//setval('#hohap_bacsy','#hohap_bacsy1','#data_combo_bacsy',"");
							setval_new('#hohap_bacsy',"");
						}
						//if(val[i]["cell"][49]!=""){
						//$("#hohap_phanloai1").val(val[i]["cell"][49]);
						//}
						if(val[i]["cell"][49]!=""){ 
							//setval('#hohap_phanloai','#hohap_phanloai1','#data_combo_11',val[i]["cell"][49]);
							setval_new('#hohap_phanloai',val[i]["cell"][49]);
						}else{
							//setval('#hohap_phanloai','#hohap_phanloai1','#data_combo_11',"");
							setval_new('#hohap_phanloai',"");
						}
						$("#tieuhoa_ghichu").val(val[i]["cell"][50]);
						if(val[i]["cell"][51]!=""){ 
							//setval('#tieuhoa_bacsy','#tieuhoa_bacsy1','#data_combo_bacsy',val[i]["cell"][51]); 
							setval_new('#tieuhoa_bacsy',val[i]["cell"][51]);
						}else{
							//setval('#tieuhoa_bacsy','#tieuhoa_bacsy1','#data_combo_bacsy',"");
							setval_new('#tieuhoa_bacsy',"");
						}
						//if(val[i]["cell"][52]!=""){
						//$("#tieuhoa_phanloai1").val(val[i]["cell"][52]);
						//}
						if(val[i]["cell"][52]!=""){ 
							//setval('#tieuhoa_phanloai','#tieuhoa_phanloai1','#data_combo_12',val[i]["cell"][52]);
							setval_new('#tieuhoa_phanloai',val[i]["cell"][52]);
						}else{
						//	setval('#tieuhoa_phanloai','#tieuhoa_phanloai1','#data_combo_12',"");
							setval_new('#tieuhoa_phanloai',"");
						}
						
						$("#thantietnieusinhduc_ghichu").val(val[i]["cell"][53]);
						if(val[i]["cell"][54]!=""){
							//setval('#thantietnieusinhduc_bacsy','#thantietnieusinhduc_bacsy1','#data_combo_bacsy',val[i]["cell"][54]);
							setval_new('#thantietnieusinhduc_bacsy',val[i]["cell"][54]);
						}else{
							//setval('#thantietnieusinhduc_bacsy','#thantietnieusinhduc_bacsy1','#data_combo_bacsy',"");
							setval_new('#thantietnieusinhduc_bacsy',"");
						}
						//if(val[i]["cell"][55]!=""){
						//$("#thantietnieusinhduc_phanloai1").val(val[i]["cell"][55]);
						//}
						if(val[i]["cell"][55]!=""){ 
						//	setval('#thantietnieusinhduc_phanloai','#thantietnieusinhduc_phanloai1','#data_combo_13',val[i]["cell"][55]);
							setval_new('#thantietnieusinhduc_phanloai',val[i]["cell"][55]);
						}else{
							//setval('#thantietnieusinhduc_phanloai','#thantietnieusinhduc_phanloai1','#data_combo_13',"");
							setval_new('#thantietnieusinhduc_phanloai',"");
						}
						
						$("#thankinh_ghichu").val(val[i]["cell"][56]);
						if(val[i]["cell"][57]!=""){
							//setval('#thankinh_bacsy','#thankinh_bacsy1','#data_combo_bacsy',val[i]["cell"][57]);  
							setval_new('#thankinh_bacsy',val[i]["cell"][57]);
						}else{
							//setval('#thankinh_bacsy','#thankinh_bacsy1','#data_combo_bacsy',"");
							setval_new('#thankinh_bacsy',"");
						}
						//if(val[i]["cell"][58]!=""){
						//$("#thankinh_phanloai1").val(val[i]["cell"][58]);
						//}
						if(val[i]["cell"][58]!=""){ 
							//setval('#thankinh_phanloai','#thankinh_phanloai1','#data_combo_14',val[i]["cell"][58]);
							setval_new('#thankinh_phanloai',val[i]["cell"][58]);
						}else{
							//setval('#thankinh_phanloai','#thankinh_phanloai1','#data_combo_14',"");
							setval_new('#thankinh_phanloai',"");
						}
						$("#tamthan_ghichu").val(val[i]["cell"][59]);
						if(val[i]["cell"][60]!=""){
							//setval('#tamthan_bacsy','#tamthan_bacsy1','#data_combo_bacsy',val[i]["cell"][60]);  
							setval_new('#tamthan_bacsy',val[i]["cell"][60]);
						}else{
							//setval('#tamthan_bacsy','#tamthan_bacsy1','#data_combo_bacsy',"");  
							setval_new('#tamthan_bacsy',"");
						}
						//if(val[i]["cell"][61]!=""){
						//$("#tamthan_phanloai1").val(val[i]["cell"][61]);
						//}
						if(val[i]["cell"][61]!=""){ 
							//setval('#tamthan_phanloai','#tamthan_phanloai1','#data_combo_15',val[i]["cell"][61]);
							setval_new('#thankinh_phanloai',val[i]["cell"][61]);
						}else{
							//setval('#tamthan_phanloai','#tamthan_phanloai1','#data_combo_15',"");
							setval_new('#thankinh_phanloai',"");
						}
						$("#hevandong_ghichu").val(val[i]["cell"][62]);
						if(val[i]["cell"][63]!=""){
							//setval('#hevandong_bacsy','#hevandong_bacsy1','#data_combo_bacsy',val[i]["cell"][63]); 
							setval_new('#hevandong_bacsy',val[i]["cell"][63]); 
						}else{
							//setval('#hevandong_bacsy','#hevandong_bacsy1','#data_combo_bacsy',""); 
							setval_new('#hevandong_bacsy',""); 
						}
						//if(val[i]["cell"][64]!=""){
						//$("#hevandong_phanloai1").val(val[i]["cell"][64]);
						//}
						if(val[i]["cell"][64]!=""){ 
							//setval('#hevandong_phanloai','#hevandong_phanloai1','#data_combo_16',val[i]["cell"][64]);
							setval_new('#hevandong_phanloai',val[i]["cell"][64]); 
						}else{
							//setval('#hevandong_phanloai','#hevandong_phanloai1','#data_combo_16',"");
							setval_new('#hevandong_phanloai',"");
						}
						$("#noitiet_ghichu").val(val[i]["cell"][65]);
						//$("#noitiet_bacsy").val(val[i]["cell"][66]); 
						if(val[i]["cell"][66]!=""){
							//setval('#noitiet_bacsy','#noitiet_bacsy1','#data_combo_bacsy',val[i]["cell"][66]); 
							setval_new('#noitiet_bacsy',val[i]["cell"][66]);
						}else{
							//setval('#noitiet_bacsy','#noitiet_bacsy1','#data_combo_bacsy',""); 
							setval_new('#noitiet_bacsy',"");
						}
						//if(val[i]["cell"][67]!=""){
						//$("#noitiet_phanloai1").val(val[i]["cell"][67]);
						//}
						if(val[i]["cell"][67]!=""){ 
							//setval('#noitiet_phanloai','#noitiet_phanloai1','#data_combo_17',val[i]["cell"][67]);
							setval_new('#noitiet_phanloai',val[i]["cell"][67]);
						}else{
							//setval('#noitiet_phanloai','#noitiet_phanloai1','#data_combo_17',"");
							setval_new('#noitiet_phanloai',"");
							}
						_idkhamsk=val[i]["cell"][68];
						$("#taiphai_noithuong").val(val[i]["cell"][71]);
						$("#taiphai_noitham").val(val[i]["cell"][72]);
						$("#taitrai_noithuong").val(val[i]["cell"][73]);
						$("#taitrai_noitham").val(val[i]["cell"][74]);
						$("#benhtathientai").val(val[i]["cell"][75]);
						$("#hamtren").val(val[i]["cell"][76]);
						$("#hamduoi").val(val[i]["cell"][77]);
						
						if(val[i]["cell"][78]!="" && val[i]["cell"][78]!=null){
							setval_new('#ketquaxetnghiem_bacsy',val[i]["cell"][78]);
						}else{
							setval_new('#ketquaxetnghiem_bacsy','');
						}
						if(val[i]["cell"][79]!="" && val[i]["cell"][79]!=null){
							setval_new('#ketquasieuam_bacsy',val[i]["cell"][79]);
						}else{
							setval_new('#ketquasieuam_bacsy','');
						}
						if(val[i]["cell"][80]!="" && val[i]["cell"][80]!=null){
							setval_new('#ketquaxquang_bacsy',val[i]["cell"][80]);
						}else{
							setval_new('#ketquaxquang_bacsy','');
						}
						if(val[i]["cell"][81]!="" && val[i]["cell"][81]!=null){
							var str=val[i]["cell"][81].split('|||');
							$("#ketquaxetnghiem_ghichu").val(str[0]);
							$("#ketquasieuam_ghichu").val(str[1]);
							$("#ketquaxquang_ghichu").val(str[2]);
						}else{
							$("#ketquaxetnghiem_ghichu").val('');
							$("#ketquasieuam_ghichu").val('');
							$("#ketquaxquang_ghichu").val('');
						}
						
						if(val[i]["cell"][82]!="" && val[i]["cell"][82]!=null){
							$('#chen_sieuam').button( {disabled:false});
							window.kqsieuam=val[i]["cell"][82];
						}else{
							$('#chen_sieuam').button( {disabled:true});	
							window.kqsieuam='';
						}
						if(val[i]["cell"][83]!="" && val[i]["cell"][83]!=null){
							$('#chen_xquang').button( {disabled:false});
							window.kqxquang=val[i]["cell"][83];
						}else{
							$('#chen_xquang').button( {disabled:true});	
							window.kqxquang='';
						}
						
                    if(_id_trangthai=="DangCho"){
						dis_all("hien",window.idloaikham_dis);
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
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						setval_new('#nhanvien',<?=$_SESSION['user']['id_user']?>);
						setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>);
            if (val[i]["cell"][84]==1) {
              $("#sanphukhoa_ghichu").val('BÌNH THƯỜNG');
            }
            $("#dalieu_ghichu").val('BÌNH THƯỜNG');
            $("#ngoaikhoa_ghichu").val('BÌNH THƯỜNG');
            $("#tuanhoan_ghichu").val('BÌNH THƯỜNG');
            $("#hohap_ghichu").val('BÌNH THƯỜNG');
            $("#tieuhoa_ghichu").val('BÌNH THƯỜNG');
            $("#thantietnieusinhduc_ghichu").val('BÌNH THƯỜNG');
            $("#thankinh_ghichu").val('BÌNH THƯỜNG');
            $("#tamthan_ghichu").val('BÌNH THƯỜNG');
            $("#hevandong_ghichu").val('BÌNH THƯỜNG');
            $("#noitiet_ghichu").val('BÌNH THƯỜNG');
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an",window.idloaikham_dis);
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
						//setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						if(val[i]["cell"][70]){
							$( "#chuandoan" ).attr("disabled",true);
							$('#hoantat').button( {disabled:true});	
							$('.chuandoan_button').button( {disabled:true});
						}
						window.trangthai_luu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien",window.idloaikham_dis);
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
						
						$('#panel_main').find('textarea').each(function() {
							if ($(this).attr("lang") == "luu" && this.id!="klc_ketluan") {
								$("#"+this.id).val("Bình thường");
							}
			      		});
						
						
						//setval('#nhanvien','#nhanvien1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						//setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);
						setval_new('#nhanvien',<?=$_SESSION['user']['id_user']?>);
						setval_new('#chuandoan',<?=$_SESSION['user']['id_user']?>);
						window.trangthai_luu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an",window.idloaikham_dis);
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
						
						window.trangthai_luu="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[8]);
						if(val[i]["cell"][9]!=null){
							$("#nguoisua").text(val[i]["cell"][9]);
							$("#ngaygiosua").text(val[i]["cell"][10]);
						}else 
							$("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++){
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);
					}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);
					}
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
							break;
						}
						ii++;						 
					}
				}
});

}

function create_layout(){
	//alert("")
	$('#sub_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
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
	    ,	center: {
			resizable: true
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
		 
	});		 
}

function load_select(){
	window.stt = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	

}
function reload(){
	$('#nhanvien').combobox('reload');
	$('#chuandoan').combobox('reload');
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
/*function create_phanloai(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Loại'],
            colModel: [
                {name: 'loaival', index: 'loaival', hidden: false},
                {name: 'loai', index: 'loai', hidden: true},
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

              //  grid_filter_enter(elem);
            
//window.nhanvien1_complete=1;


            },
        });
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }*/
	
function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên', 'Bộ phận'],
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
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
 function create_bacsi_chandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
 function create_bacsi_taimuihong(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
 function create_bacsi_xetnghiem(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_sieuam(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_xquang(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
 function create_bacsi_noitiet(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_hevandong(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_tamthan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_thankinh(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_thantietnieusinhduc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_tieuhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_hohap(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_tuanhoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
 function create_bacsi_sanphukhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_ngoaikhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_noikhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_mat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_ranghammat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
function create_bacsi_dalieu(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['NickName', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', width: "30%", hidden: false},
                {name: 'hovaten', index: 'hovaten', width: "70%", hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 300,
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
	
	
 function create_phanloai(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},

                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_theluc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},

                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_mat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},

                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				/*setTimeout(function(){
				alert($('#m_phanloai_hidden').val()+'__'+$('#m_phanloai1').val());
				},100);*/
				
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
                window.nhanvien2_complete=1;


            },
        });
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function create_phanloai_taimuihong(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
        $(elem).jqGrid('bindKeys', {});
}
function create_phanloai_ranghammat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_dalieu(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_thantietnieusinhduc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_tamthan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_noitiet(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_hevandong(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_thankinh(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_tieuhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_hohap(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_tuanhoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_sanphukhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_ngoaikhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_noikhoa(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_phanloai_suckhoe(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Phân loại'],
            colModel: [
                {name: 'phanloai', index: 'phanloai', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 190,
            width: 100,
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
       // $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
}
function checkboxval(el){
	//alert();
	if($("#"+el).is(':checked'))
	return $("#"+el).val("True");
	return $("#"+el).val("False");
}

function resize_control(){

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$(".td1").css("width",100+"px");
	$("#left_col").css("width",$(window).width()/2-14+"px");
	$("#right_col").css("width",$(window).width()/2+1+"px"); 
	$("#panel_main").css("height",$(window).height()-141+"px");
	
//	$(".n_bd").css("height",$("#sub_main").height()/8+15+"px");
	//$("#ketluanchung").css("height",$("#sub_main").height()/8-2+"px");
	//$("#mat").css("height",$("#sub_main").height()/8+40+"px");
	//$("#taimuihong,#ranghammat,#dalieu,#noikhoa,#ngoaikhoa,#sanphukhoa").css("height",$("#sub_main").height()/8+15+"px");
	
	//$("#tuanhoan").css("height",$("#sub_main").height()/8+19+"px");
	//$("#hohap").css("height",$("#sub_main").height()/8+19+"px");
	
	$(".left_col").css("width",$("#sub_main").width()/2-5+"px");
	$(".right_col").css("width",$("#sub_main").width()/2-5+"px");

}
function load_report(){
	if(!$('#print_report').length || !$('.ui-icon-closethick').length){
		setTimeout(load_report,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
			$('.modalu78787878975f').dialog('destroy').remove();
			dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat2');
			 $(".frame_u78787878975f").css("width","793px");
			 load_report2();
	},500);		
	});
}
function load_report2(){
	if(!$('#print_report').length){
		setTimeout(load_report2,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
			$('.modalu78787878975f').dialog('destroy').remove();
			kiemtra_dialog_modalu78787878975f(2);
		},500);	
				
	});
}
function func_reload(){
	var data_dialog= $("#dialog_report").val();
	if(data_dialog>0){
		//console.log(data_dialog);
		if ($(".modalu78787878975f").dialog( "isOpen" )===false) {
			 if(data_dialog==1){
				 $('.modalu78787878975f').dialog('destroy').remove();
				dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_mat2&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+_id_luotkham2+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamSucKhoe_Mat2');
				 $(".frame_u78787878975f").css("width","793px");
				 kiemtra_dialog_modalu78787878975f(2);
				 load_report2();
			 }
		}
	}
	setTimeout(func_reload,100);
}
function kiemtra_dialog_modalu78787878975f(tam){
	if ($(".modalu78787878975f").dialog( "isOpen" )===true) {
		$("#dialog_report").val(tam);
	}
}
function load_template(){
	$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_template').done(function(data) {
		var rs_data=data.split('|||');
		create_combobox_new('#temp_mat',create_temp_mat,'bw',rs_data[0],'data_template',0);
		create_combobox_new('#temp_ketluan',create_temp_ketluan,'bw',rs_data[1],'data_template',0);
		create_combobox_new('#temp_taimuihong',create_temp_taimuihong,'bw',rs_data[2],'data_template',0);
		create_combobox_new('#temp_ranghammat',create_temp_ranghammat,'bw',rs_data[3],'data_template',0);
		create_combobox_new('#temp_dalieu',create_temp_dalieu,'bw',rs_data[4],'data_template',0);
		create_combobox_new('#temp_noikhoa',create_temp_noikhoa,'bw',rs_data[5],'data_template',0);
		create_combobox_new('#temp_ngoaikhoa',create_temp_ngoaikhoa,'bw',rs_data[6],'data_template',0);
		create_combobox_new('#temp_sanphukhoa',create_temp_sanphukhoa,'bw',rs_data[7],'data_template',0);
		create_combobox_new('#temp_tuanhoan',create_temp_tuanhoan,'bw',rs_data[8],'data_template',0);
		create_combobox_new('#temp_hohap',create_temp_hohap,'bw',rs_data[9],'data_template',0);
		create_combobox_new('#temp_tieuhoa',create_temp_tieuhoa,'bw',rs_data[10],'data_template',0);
		create_combobox_new('#temp_thantietnieusinhduc',create_temp_thantietnieusinhduc,'bw',rs_data[11],'data_template',0);
		create_combobox_new('#temp_thankinh',create_temp_thankinh,'bw',rs_data[12],'data_template',0);
		create_combobox_new('#temp_tamthan',create_temp_tamthan,'bw',rs_data[13],'data_template',0);
		create_combobox_new('#temp_hevandong',create_temp_hevandong,'bw',rs_data[14],'data_template',0);
		create_combobox_new('#temp_noitiet',create_temp_noitiet,'bw',rs_data[15],'data_template',0);
		create_combobox_new('#temp_ketquacls',create_temp_ketquacls,'bw',rs_data[16],'data_template',0);
		create_combobox_new('#temp_ketquaxetnghiem',create_temp_ketquaxetnghiem,'bw',rs_data[17],'data_template',0);
		create_combobox_new('#temp_ketquasieuam',create_temp_ketquasieuam,'bw',rs_data[18],'data_template',0);
		create_combobox_new('#temp_ketquaxquang',create_temp_ketquaxquang,'bw',rs_data[19],'data_template',0);
	
	});
}
function create_temp_ketquaxetnghiem(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#ketquaxetnghiem_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_ketquasieuam(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#ketquasieuam_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_ketquaxquang(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#ketquaxquang_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_ketquacls(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#klc_ketquacls").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_noitiet(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#noitiet_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_hevandong(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#hevandong_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_tamthan(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#tamthan_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_thankinh(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#thankinh_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_thantietnieusinhduc(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#thantietnieusinhduc_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_tieuhoa(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#tieuhoa_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_hohap(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#hohap_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_tuanhoan(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#tuanhoan_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_sanphukhoa(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#sanphukhoa_ghichu").val(rowdata['NoiDung']);		
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_ngoaikhoa(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#ngoaikhoa_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_noikhoa(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#noikhoa_ghichu").val(rowdata['NoiDung']);	
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_dalieu(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#dalieu_ghichu").val(rowdata['NoiDung']);
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_ranghammat(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#ranghammat_ghichu").val(rowdata['NoiDung']);
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_taimuihong(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#taimuihong_ghichu").val(rowdata['NoiDung']);
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
function create_temp_mat(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên','Nội dung'],
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
		height: 200,
		width: 500,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		onSelectRow: function(id) {
			var rowdata = $(this).getRowData(id);
			$("#m_benhvemat").val(rowdata['NoiDung']);
        },
	});
	$(elem).jqGrid('bindKeys', {});
}
	
function create_temp_ketluan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên','Nội dung'],
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
            height: 200,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$("#klc_ketluan").val(rowdata['NoiDung']);
            },
        });
        $(elem).jqGrid('bindKeys', {});
    }
function dis_all(tam,idloaikham){
	if(tam=="an"){
	 $('#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",true);
});
		$(".custom-combobox-toggle").button( {disabled:true});
		$(".add_temp").button( {disabled:true});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		$("#add_chuandoan").button( {disabled:true});
		//$(".custom-combobox-toggle").attr("class","backhidde");
		$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).addClass( "backhidde" );
		$('#chen_sieuam').button( {disabled:true});
		$('#chen_xquang').button( {disabled:true});
		
	 }else if(tam=="hien"){
			console.log("id loaikham: "+idloaikham);
		 	$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
				$(this).attr("disabled",true);
			});
			$(".custom-combobox-toggle").button( {disabled:true});
			$(".add_temp").button( {disabled:true});
			$('#chen_sieuam').button( {disabled:true});
			$('#chen_xquang').button( {disabled:true});
		// if(idloaikham==4383 || idloaikham==11960){
			create_combobox_enable("#m_bacsy");
			create_combobox_enable("#m_phanloai");
			create_combobox_enable("#temp_mat");
			$("#ck_matphai").attr("disabled",false);
			$("#ck_mattrai").attr("disabled",false);
			$("#kk_matphai").attr("disabled",false);
			$("#kk_mattrai").attr("disabled",false);
			$("#m_benhvemat").attr("disabled",false);
			$("#add_temp_mat").button( {disabled:false});
			
			create_combobox_enable("#tmh_bacsy");
			create_combobox_enable("#tmh_phanloai");
			create_combobox_enable("#temp_taimuihong");
			$("#taitrai_noithuong").attr("disabled",false);
			$("#taiphai_noithuong").attr("disabled",false);
			$("#taitrai_noitham").attr("disabled",false);
			$("#taiphai_noitham").attr("disabled",false);
			$("#taimuihong_ghichu").attr("disabled",false);
			$("#add_temp_taimuihong").button( {disabled:false});
			
			create_combobox_enable("#rhm_bacsy");
			create_combobox_enable("#rhm_phanloai");
			create_combobox_enable("#temp_ranghammat");
			$("#hamtren").attr("disabled",false);
			$("#hamduoi").attr("disabled",false);
			$("#ranghammat_ghichu").attr("disabled",false);
			$("#add_temp_ranghammat").button( {disabled:false});
			
			create_combobox_enable("#dalieu_bacsy");
			create_combobox_enable("#dalieu_phanloai");
			create_combobox_enable("#temp_dalieu");
			$("#dalieu_ghichu").attr("disabled",false);
			$("#add_temp_dalieu").button( {disabled:false});
			
			create_combobox_enable("#thankinh_bacsy");
			create_combobox_enable("#thankinh_phanloai");
			create_combobox_enable("#temp_thankinh");
			$("#thankinh_ghichu").attr("disabled",false);
			$("#add_temp_thankinh").button( {disabled:false});
			
			create_combobox_enable("#tamthan_bacsy");
			create_combobox_enable("#tamthan_phanloai");
			create_combobox_enable("#temp_tamthan");
			$("#tamthan_ghichu").attr("disabled",false);
			$("#add_temp_tamthan").button( {disabled:false});
			
			create_combobox_enable("#tuanhoan_bacsy");
			create_combobox_enable("#tuanhoan_phanloai");
			create_combobox_enable("#temp_tuanhoan");
			$("#tuanhoan_ghichu").attr("disabled",false);
			$("#add_temp_tuanhoan").button( {disabled:false});
			
			create_combobox_enable("#hohap_bacsy");
			create_combobox_enable("#hohap_phanloai");
			create_combobox_enable("#temp_hohap");
			$("#hohap_ghichu").attr("disabled",false);
			$("#add_temp_hohap").button( {disabled:false});
			
			create_combobox_enable("#tieuhoa_bacsy");
			create_combobox_enable("#tieuhoa_phanloai");
			create_combobox_enable("#temp_tieuhoa");
			$("#tieuhoa_ghichu").attr("disabled",false);
			$("#add_temp_tieuhoa").button( {disabled:false});
			
			create_combobox_enable("#thantietnieusinhduc_bacsy");
			create_combobox_enable("#thantietnieusinhduc_phanloai");
			create_combobox_enable("#temp_thantietnieusinhduc");
			$("#thantietnieusinhduc_ghichu").attr("disabled",false);
			$("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			create_combobox_enable("#noitiet_bacsy");
			create_combobox_enable("#noitiet_phanloai");
			create_combobox_enable("#temp_noitiet");
			$("#noitiet_ghichu").attr("disabled",false);
			$("#add_temp_noitiet").button( {disabled:false});
			
			create_combobox_enable("#hevandong_bacsy");
			create_combobox_enable("#hevandong_phanloai");
			create_combobox_enable("#temp_hevandong");
			$("#hevandong_ghichu").attr("disabled",false);
			$("#add_temp_hevandong").button( {disabled:false});
			
			create_combobox_enable("#phanloaisk");
			create_combobox_enable("#phanloaitl");
			create_combobox_enable("#temp_ketluan");
			$("#klc_ketluan").attr("disabled",false);
			$("#add_temp_ketluan").button( {disabled:false});
			
			create_combobox_enable("#ngoaikhoa_bacsy");
			create_combobox_enable("#ngoaikhoa_phanloai");
			create_combobox_enable("#temp_ngoaikhoa");
			$("#ngoaikhoa_ghichu").attr("disabled",false);
			$("#add_temp_ngoaikhoa").button( {disabled:false});
			
			create_combobox_enable("#sanphukhoa_bacsy");
			create_combobox_enable("#sanphukhoa_phanloai");
			create_combobox_enable("#temp_sanphukhoa");
			$("#sanphukhoa_ghichu").attr("disabled",false);
			$("#add_temp_sanphukhoa").button( {disabled:false});
			$('#chen_sieuam').button( {disabled:true});
			$('#chen_xquang').button( {disabled:true});
			
		 // }else if(idloaikham==4556123321){
			// create_combobox_enable("#m_bacsy");
			// create_combobox_enable("#m_phanloai");
			// create_combobox_enable("#temp_mat");
			// $("#ck_matphai").attr("disabled",false);
			// $("#ck_mattrai").attr("disabled",false);
			// $("#kk_matphai").attr("disabled",false);
			// $("#kk_mattrai").attr("disabled",false);
			// $("#m_benhvemat").attr("disabled",false);
			// $("#add_temp_mat").button( {disabled:false});
			
			// create_combobox_enable("#tmh_bacsy");
			// create_combobox_enable("#tmh_phanloai");
			// create_combobox_enable("#temp_taimuihong");
			// $("#taitrai_noithuong").attr("disabled",false);
			// $("#taiphai_noithuong").attr("disabled",false);
			// $("#taitrai_noitham").attr("disabled",false);
			// $("#taiphai_noitham").attr("disabled",false);
			// $("#taimuihong_ghichu").attr("disabled",false);
			// $("#add_temp_taimuihong").button( {disabled:false});
			
			// create_combobox_enable("#rhm_bacsy");
			// create_combobox_enable("#rhm_phanloai");
			// create_combobox_enable("#temp_ranghammat");
			// $("#hamtren").attr("disabled",false);
			// $("#hamduoi").attr("disabled",false);
			// $("#ranghammat_ghichu").attr("disabled",false);
			// $("#add_temp_ranghammat").button( {disabled:false});
			
			// create_combobox_enable("#dalieu_bacsy");
			// create_combobox_enable("#dalieu_phanloai");
			// create_combobox_enable("#temp_dalieu");
			// $("#dalieu_ghichu").attr("disabled",false);
			// $("#add_temp_dalieu").button( {disabled:false});
			
			// create_combobox_enable("#thankinh_bacsy");
			// create_combobox_enable("#thankinh_phanloai");
			// create_combobox_enable("#temp_thankinh");
			// $("#thankinh_ghichu").attr("disabled",false);
			// $("#add_temp_thankinh").button( {disabled:false});
			
			// create_combobox_enable("#tamthan_bacsy");
			// create_combobox_enable("#tamthan_phanloai");
			// create_combobox_enable("#temp_tamthan");
			// $("#tamthan_ghichu").attr("disabled",false);
			// $("#add_temp_tamthan").button( {disabled:false});
			
			// create_combobox_enable("#tuanhoan_bacsy");
			// create_combobox_enable("#tuanhoan_phanloai");
			// create_combobox_enable("#temp_tuanhoan");
			// $("#tuanhoan_ghichu").attr("disabled",false);
			// $("#add_temp_tuanhoan").button( {disabled:false});
			
			// create_combobox_enable("#hohap_bacsy");
			// create_combobox_enable("#hohap_phanloai");
			// create_combobox_enable("#temp_hohap");
			// $("#hohap_ghichu").attr("disabled",false);
			// $("#add_temp_hohap").button( {disabled:false});
			
			// create_combobox_enable("#tieuhoa_bacsy");
			// create_combobox_enable("#tieuhoa_phanloai");
			// create_combobox_enable("#temp_tieuhoa");
			// $("#tieuhoa_ghichu").attr("disabled",false);
			// $("#add_temp_tieuhoa").button( {disabled:false});
			
			// create_combobox_enable("#thantietnieusinhduc_bacsy");
			// create_combobox_enable("#thantietnieusinhduc_phanloai");
			// create_combobox_enable("#temp_thantietnieusinhduc");
			// $("#thantietnieusinhduc_ghichu").attr("disabled",false);
			// $("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			// create_combobox_enable("#noitiet_bacsy");
			// create_combobox_enable("#noitiet_phanloai");
			// create_combobox_enable("#temp_noitiet");
			// $("#noitiet_ghichu").attr("disabled",false);
			// $("#add_temp_noitiet").button( {disabled:false});
			
			// create_combobox_enable("#hevandong_bacsy");
			// create_combobox_enable("#hevandong_phanloai");
			// create_combobox_enable("#temp_hevandong");
			// $("#hevandong_ghichu").attr("disabled",false);
			// $("#add_temp_hevandong").button( {disabled:false});
			
			// create_combobox_enable("#phanloaisk");
			// create_combobox_enable("#phanloaitl");
			// create_combobox_enable("#temp_ketluan");
			// $("#klc_ketluan").attr("disabled",false);
			// $("#add_temp_ketluan").button( {disabled:false});
			
			// create_combobox_enable("#ngoaikhoa_bacsy");
			// create_combobox_enable("#ngoaikhoa_phanloai");
			// create_combobox_enable("#temp_ngoaikhoa");
			// $("#ngoaikhoa_ghichu").attr("disabled",false);
			// $("#add_temp_ngoaikhoa").button( {disabled:false});
			
			// create_combobox_enable("#sanphukhoa_bacsy");
			// create_combobox_enable("#sanphukhoa_phanloai");
			// create_combobox_enable("#temp_sanphukhoa");
			// $("#sanphukhoa_ghichu").attr("disabled",false);
			// $("#add_temp_sanphukhoa").button( {disabled:false});
			// $('#chen_sieuam').button( {disabled:true});
			// $('#chen_xquang').button( {disabled:true});
			 
		// }else if(idloaikham==6750){
			// create_combobox_enable("#m_bacsy");
			// create_combobox_enable("#m_phanloai");
			// create_combobox_enable("#temp_mat");
			// $("#ck_matphai").attr("disabled",false);
			// $("#ck_mattrai").attr("disabled",false);
			// $("#kk_matphai").attr("disabled",false);
			// $("#kk_mattrai").attr("disabled",false);
			// $("#m_benhvemat").attr("disabled",false);
			// $("#add_temp_mat").button( {disabled:false});
			
			// create_combobox_enable("#tmh_bacsy");
			// create_combobox_enable("#tmh_phanloai");
			// create_combobox_enable("#temp_taimuihong");
			// $("#taitrai_noithuong").attr("disabled",false);
			// $("#taiphai_noithuong").attr("disabled",false);
			// $("#taitrai_noitham").attr("disabled",false);
			// $("#taiphai_noitham").attr("disabled",false);
			// $("#taimuihong_ghichu").attr("disabled",false);
			// $("#add_temp_taimuihong").button( {disabled:false});
			
			// create_combobox_enable("#rhm_bacsy");
			// create_combobox_enable("#rhm_phanloai");
			// create_combobox_enable("#temp_ranghammat");
			// $("#hamtren").attr("disabled",false);
			// $("#hamduoi").attr("disabled",false);
			// $("#ranghammat_ghichu").attr("disabled",false);
			// $("#add_temp_ranghammat").button( {disabled:false});
			
			// create_combobox_enable("#dalieu_bacsy");
			// create_combobox_enable("#dalieu_phanloai");
			// create_combobox_enable("#temp_dalieu");
			// $("#dalieu_ghichu").attr("disabled",false);
			// $("#add_temp_dalieu").button( {disabled:false});
			
			// create_combobox_enable("#thankinh_bacsy");
			// create_combobox_enable("#thankinh_phanloai");
			// create_combobox_enable("#temp_thankinh");
			// $("#thankinh_ghichu").attr("disabled",false);
			// $("#add_temp_thankinh").button( {disabled:false});
			
			// create_combobox_enable("#tamthan_bacsy");
			// create_combobox_enable("#tamthan_phanloai");
			// create_combobox_enable("#temp_tamthan");
			// $("#tamthan_ghichu").attr("disabled",false);
			// $("#add_temp_tamthan").button( {disabled:false});
			
			// create_combobox_enable("#tuanhoan_bacsy");
			// create_combobox_enable("#tuanhoan_phanloai");
			// create_combobox_enable("#temp_tuanhoan");
			// $("#tuanhoan_ghichu").attr("disabled",false);
			// $("#add_temp_tuanhoan").button( {disabled:false});
			
			// create_combobox_enable("#hohap_bacsy");
			// create_combobox_enable("#hohap_phanloai");
			// create_combobox_enable("#temp_hohap");
			// $("#hohap_ghichu").attr("disabled",false);
			// $("#add_temp_hohap").button( {disabled:false});
			
			// create_combobox_enable("#tieuhoa_bacsy");
			// create_combobox_enable("#tieuhoa_phanloai");
			// create_combobox_enable("#temp_tieuhoa");
			// $("#tieuhoa_ghichu").attr("disabled",false);
			// $("#add_temp_tieuhoa").button( {disabled:false});
			
			// create_combobox_enable("#thantietnieusinhduc_bacsy");
			// create_combobox_enable("#thantietnieusinhduc_phanloai");
			// create_combobox_enable("#temp_thantietnieusinhduc");
			// $("#thantietnieusinhduc_ghichu").attr("disabled",false);
			// $("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			// create_combobox_enable("#noitiet_bacsy");
			// create_combobox_enable("#noitiet_phanloai");
			// create_combobox_enable("#temp_noitiet");
			// $("#noitiet_ghichu").attr("disabled",false);
			// $("#add_temp_noitiet").button( {disabled:false});
			
			// create_combobox_enable("#hevandong_bacsy");
			// create_combobox_enable("#hevandong_phanloai");
			// create_combobox_enable("#temp_hevandong");
			// $("#hevandong_ghichu").attr("disabled",false);
			// $("#add_temp_hevandong").button( {disabled:false});
			
			// create_combobox_enable("#phanloaisk");
			// create_combobox_enable("#phanloaitl");
			// create_combobox_enable("#temp_ketluan");
			// $("#klc_ketluan").attr("disabled",false);
			// $("#add_temp_ketluan").button( {disabled:false});
			
			// create_combobox_enable("#ngoaikhoa_bacsy");
			// create_combobox_enable("#ngoaikhoa_phanloai");
			// create_combobox_enable("#temp_ngoaikhoa");
			// $("#ngoaikhoa_ghichu").attr("disabled",false);
			// $("#add_temp_ngoaikhoa").button( {disabled:false});
			
			// create_combobox_enable("#sanphukhoa_bacsy");
			// create_combobox_enable("#sanphukhoa_phanloai");
			// create_combobox_enable("#temp_sanphukhoa");
			// $("#sanphukhoa_ghichu").attr("disabled",false);
			// $("#add_temp_sanphukhoa").button( {disabled:false});
						
			// create_combobox_enable("#temp_ketquacls");
			// $("#klc_ketquacls").attr("disabled",false);
			// $("#add_temp_ketquacls").button( {disabled:false});
			// $('#chen_sieuam').button( {disabled:true});
			// $('#chen_xquang').button( {disabled:true});
				
		// }else if(idloaikham==6751){
			// $("#benhtathientai").attr("disabled",false);
			
			// create_combobox_enable("#m_bacsy");
			// create_combobox_enable("#m_phanloai");
			// create_combobox_enable("#temp_mat");
			// $("#ck_matphai").attr("disabled",false);
			// $("#ck_mattrai").attr("disabled",false);
			// $("#kk_matphai").attr("disabled",false);
			// $("#kk_mattrai").attr("disabled",false);
			// $("#m_benhvemat").attr("disabled",false);
			// $("#add_temp_mat").button( {disabled:false});
			
			// create_combobox_enable("#tmh_bacsy");
			// create_combobox_enable("#tmh_phanloai");
			// create_combobox_enable("#temp_taimuihong");
			// $("#taitrai_noithuong").attr("disabled",false);
			// $("#taiphai_noithuong").attr("disabled",false);
			// $("#taitrai_noitham").attr("disabled",false);
			// $("#taiphai_noitham").attr("disabled",false);
			// $("#taimuihong_ghichu").attr("disabled",false);
			// $("#add_temp_taimuihong").button( {disabled:false});
			
			// create_combobox_enable("#rhm_bacsy");
			// create_combobox_enable("#rhm_phanloai");
			// create_combobox_enable("#temp_ranghammat");
			// $("#hamtren").attr("disabled",false);
			// $("#hamduoi").attr("disabled",false);
			// $("#ranghammat_ghichu").attr("disabled",false);
			// $("#add_temp_ranghammat").button( {disabled:false});
			
			// create_combobox_enable("#dalieu_bacsy");
			// create_combobox_enable("#dalieu_phanloai");
			// create_combobox_enable("#temp_dalieu");
			// $("#dalieu_ghichu").attr("disabled",false);
			// $("#add_temp_dalieu").button( {disabled:false});
			
			// create_combobox_enable("#thankinh_bacsy");
			// create_combobox_enable("#thankinh_phanloai");
			// create_combobox_enable("#temp_thankinh");
			// $("#thankinh_ghichu").attr("disabled",false);
			// $("#add_temp_thankinh").button( {disabled:false});
			
			// create_combobox_enable("#tamthan_bacsy");
			// create_combobox_enable("#tamthan_phanloai");
			// create_combobox_enable("#temp_tamthan");
			// $("#tamthan_ghichu").attr("disabled",false);
			// $("#add_temp_tamthan").button( {disabled:false});
			
			// create_combobox_enable("#tuanhoan_bacsy");
			// create_combobox_enable("#tuanhoan_phanloai");
			// create_combobox_enable("#temp_tuanhoan");
			// $("#tuanhoan_ghichu").attr("disabled",false);
			// $("#add_temp_tuanhoan").button( {disabled:false});
			
			// create_combobox_enable("#hohap_bacsy");
			// create_combobox_enable("#hohap_phanloai");
			// create_combobox_enable("#temp_hohap");
			// $("#hohap_ghichu").attr("disabled",false);
			// $("#add_temp_hohap").button( {disabled:false});
			
			// create_combobox_enable("#tieuhoa_bacsy");
			// create_combobox_enable("#tieuhoa_phanloai");
			// create_combobox_enable("#temp_tieuhoa");
			// $("#tieuhoa_ghichu").attr("disabled",false);
			// $("#add_temp_tieuhoa").button( {disabled:false});
			
			// create_combobox_enable("#thantietnieusinhduc_bacsy");
			// create_combobox_enable("#thantietnieusinhduc_phanloai");
			// create_combobox_enable("#temp_thantietnieusinhduc");
			// $("#thantietnieusinhduc_ghichu").attr("disabled",false);
			// $("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			// create_combobox_enable("#noitiet_bacsy");
			// create_combobox_enable("#noitiet_phanloai");
			// create_combobox_enable("#temp_noitiet");
			// $("#noitiet_ghichu").attr("disabled",false);
			// $("#add_temp_noitiet").button( {disabled:false});
			
			// create_combobox_enable("#hevandong_bacsy");
			// create_combobox_enable("#hevandong_phanloai");
			// create_combobox_enable("#temp_hevandong");
			// $("#hevandong_ghichu").attr("disabled",false);
			// $("#add_temp_hevandong").button( {disabled:false});
			
			// create_combobox_enable("#phanloaisk");
			// create_combobox_enable("#phanloaitl");
			// create_combobox_enable("#temp_ketluan");
			// $("#klc_ketluan").attr("disabled",false);
			// $("#add_temp_ketluan").button( {disabled:false});
			
			// create_combobox_enable("#ngoaikhoa_bacsy");
			// create_combobox_enable("#ngoaikhoa_phanloai");
			// create_combobox_enable("#temp_ngoaikhoa");
			// $("#ngoaikhoa_ghichu").attr("disabled",false);
			// $("#add_temp_ngoaikhoa").button( {disabled:false});
			
			// create_combobox_enable("#sanphukhoa_bacsy");
			// create_combobox_enable("#sanphukhoa_phanloai");
			// create_combobox_enable("#temp_sanphukhoa");
			// $("#sanphukhoa_ghichu").attr("disabled",false);
			// $("#add_temp_sanphukhoa").button( {disabled:false});
						
			// create_combobox_enable("#temp_ketquaxetnghiem");
			// create_combobox_enable("#ketquaxetnghiem_bacsy");
			// $("#ketquaxetnghiem_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxetnghiem").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquasieuam");
			// create_combobox_enable("#ketquasieuam_bacsy");
			// $("#ketquasieuam_ghichu").attr("disabled",false);
			// $("#add_temp_ketquasieuam").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquaxquang");
			// create_combobox_enable("#ketquaxquang_bacsy");
			// $("#ketquaxquang_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxquang").button( {disabled:false});
			// if(window.kqsieuam !="" && window.kqsieuam!=null)
				// $('#chen_sieuam').button( {disabled:false});
			// if(window.kqxquang !="" && window.kqxquang!=null)
				// $('#chen_xquang').button( {disabled:false});
		// }else if(idloaikham==9835){
			// $("#benhtathientai").attr("disabled",false);
			
			// create_combobox_enable("#m_bacsy");
			// create_combobox_enable("#m_phanloai");
			// create_combobox_enable("#temp_mat");
			// $("#ck_matphai").attr("disabled",false);
			// $("#ck_mattrai").attr("disabled",false);
			// $("#kk_matphai").attr("disabled",false);
			// $("#kk_mattrai").attr("disabled",false);
			// $("#m_benhvemat").attr("disabled",false);
			// $("#add_temp_mat").button( {disabled:false});
			
			// create_combobox_enable("#tmh_bacsy");
			// create_combobox_enable("#tmh_phanloai");
			// create_combobox_enable("#temp_taimuihong");
			// $("#taitrai_noithuong").attr("disabled",false);
			// $("#taiphai_noithuong").attr("disabled",false);
			// $("#taitrai_noitham").attr("disabled",false);
			// $("#taiphai_noitham").attr("disabled",false);
			// $("#taimuihong_ghichu").attr("disabled",false);
			// $("#add_temp_taimuihong").button( {disabled:false});
			
			// create_combobox_enable("#rhm_bacsy");
			// create_combobox_enable("#rhm_phanloai");
			// create_combobox_enable("#temp_ranghammat");
			// $("#hamtren").attr("disabled",false);
			// $("#hamduoi").attr("disabled",false);
			// $("#ranghammat_ghichu").attr("disabled",false);
			// $("#add_temp_ranghammat").button( {disabled:false});
			
			// create_combobox_enable("#dalieu_bacsy");
			// create_combobox_enable("#dalieu_phanloai");
			// create_combobox_enable("#temp_dalieu");
			// $("#dalieu_ghichu").attr("disabled",false);
			// $("#add_temp_dalieu").button( {disabled:false});
			
			// create_combobox_enable("#thankinh_bacsy");
			// create_combobox_enable("#thankinh_phanloai");
			// create_combobox_enable("#temp_thankinh");
			// $("#thankinh_ghichu").attr("disabled",false);
			// $("#add_temp_thankinh").button( {disabled:false});
			
			// create_combobox_enable("#tamthan_bacsy");
			// create_combobox_enable("#tamthan_phanloai");
			// create_combobox_enable("#temp_tamthan");
			// $("#tamthan_ghichu").attr("disabled",false);
			// $("#add_temp_tamthan").button( {disabled:false});
			
			// create_combobox_enable("#tuanhoan_bacsy");
			// create_combobox_enable("#tuanhoan_phanloai");
			// create_combobox_enable("#temp_tuanhoan");
			// $("#tuanhoan_ghichu").attr("disabled",false);
			// $("#add_temp_tuanhoan").button( {disabled:false});
			
			// create_combobox_enable("#hohap_bacsy");
			// create_combobox_enable("#hohap_phanloai");
			// create_combobox_enable("#temp_hohap");
			// $("#hohap_ghichu").attr("disabled",false);
			// $("#add_temp_hohap").button( {disabled:false});
			
			// create_combobox_enable("#tieuhoa_bacsy");
			// create_combobox_enable("#tieuhoa_phanloai");
			// create_combobox_enable("#temp_tieuhoa");
			// $("#tieuhoa_ghichu").attr("disabled",false);
			// $("#add_temp_tieuhoa").button( {disabled:false});
			
			// create_combobox_enable("#thantietnieusinhduc_bacsy");
			// create_combobox_enable("#thantietnieusinhduc_phanloai");
			// create_combobox_enable("#temp_thantietnieusinhduc");
			// $("#thantietnieusinhduc_ghichu").attr("disabled",false);
			// $("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			// create_combobox_enable("#noitiet_bacsy");
			// create_combobox_enable("#noitiet_phanloai");
			// create_combobox_enable("#temp_noitiet");
			// $("#noitiet_ghichu").attr("disabled",false);
			// $("#add_temp_noitiet").button( {disabled:false});
			
			// create_combobox_enable("#hevandong_bacsy");
			// create_combobox_enable("#hevandong_phanloai");
			// create_combobox_enable("#temp_hevandong");
			// $("#hevandong_ghichu").attr("disabled",false);
			// $("#add_temp_hevandong").button( {disabled:false});
			
			// create_combobox_enable("#phanloaisk");
			// create_combobox_enable("#phanloaitl");
			// create_combobox_enable("#temp_ketluan");
			// $("#klc_ketluan").attr("disabled",false);
			// $("#add_temp_ketluan").button( {disabled:false});
			
			// create_combobox_enable("#ngoaikhoa_bacsy");
			// create_combobox_enable("#ngoaikhoa_phanloai");
			// create_combobox_enable("#temp_ngoaikhoa");
			// $("#ngoaikhoa_ghichu").attr("disabled",false);
			// $("#add_temp_ngoaikhoa").button( {disabled:false});
			
			// create_combobox_enable("#sanphukhoa_bacsy");
			// create_combobox_enable("#sanphukhoa_phanloai");
			// create_combobox_enable("#temp_sanphukhoa");
			// $("#sanphukhoa_ghichu").attr("disabled",false);
			// $("#add_temp_sanphukhoa").button( {disabled:false});
						
			// create_combobox_enable("#temp_ketquaxetnghiem");
			// create_combobox_enable("#ketquaxetnghiem_bacsy");
			// $("#ketquaxetnghiem_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxetnghiem").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquasieuam");
			// create_combobox_enable("#ketquasieuam_bacsy");
			// $("#ketquasieuam_ghichu").attr("disabled",false);
			// $("#add_temp_ketquasieuam").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquaxquang");
			// create_combobox_enable("#ketquaxquang_bacsy");
			// $("#ketquaxquang_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxquang").button( {disabled:false});
			// if(window.kqsieuam !="" && window.kqsieuam!=null)
				// $('#chen_sieuam').button( {disabled:false});
			// if(window.kqxquang !="" && window.kqxquang!=null)
				// $('#chen_xquang').button( {disabled:false});
		// }else if(idloaikham==4556){
			// $("#benhtathientai").attr("disabled",false);
			
			// create_combobox_enable("#m_bacsy");
			// create_combobox_enable("#m_phanloai");
			// create_combobox_enable("#temp_mat");
			// $("#ck_matphai").attr("disabled",false);
			// $("#ck_mattrai").attr("disabled",false);
			// $("#kk_matphai").attr("disabled",false);
			// $("#kk_mattrai").attr("disabled",false);
			// $("#m_benhvemat").attr("disabled",false);
			// $("#add_temp_mat").button( {disabled:false});
			
			// create_combobox_enable("#tmh_bacsy");
			// create_combobox_enable("#tmh_phanloai");
			// create_combobox_enable("#temp_taimuihong");
			// $("#taitrai_noithuong").attr("disabled",false);
			// $("#taiphai_noithuong").attr("disabled",false);
			// $("#taitrai_noitham").attr("disabled",false);
			// $("#taiphai_noitham").attr("disabled",false);
			// $("#taimuihong_ghichu").attr("disabled",false);
			// $("#add_temp_taimuihong").button( {disabled:false});
			
			// create_combobox_enable("#rhm_bacsy");
			// create_combobox_enable("#rhm_phanloai");
			// create_combobox_enable("#temp_ranghammat");
			// $("#hamtren").attr("disabled",false);
			// $("#hamduoi").attr("disabled",false);
			// $("#ranghammat_ghichu").attr("disabled",false);
			// $("#add_temp_ranghammat").button( {disabled:false});
			
			// create_combobox_enable("#dalieu_bacsy");
			// create_combobox_enable("#dalieu_phanloai");
			// create_combobox_enable("#temp_dalieu");
			// $("#dalieu_ghichu").attr("disabled",false);
			// $("#add_temp_dalieu").button( {disabled:false});
			
			// create_combobox_enable("#thankinh_bacsy");
			// create_combobox_enable("#thankinh_phanloai");
			// create_combobox_enable("#temp_thankinh");
			// $("#thankinh_ghichu").attr("disabled",false);
			// $("#add_temp_thankinh").button( {disabled:false});
			
			// create_combobox_enable("#tamthan_bacsy");
			// create_combobox_enable("#tamthan_phanloai");
			// create_combobox_enable("#temp_tamthan");
			// $("#tamthan_ghichu").attr("disabled",false);
			// $("#add_temp_tamthan").button( {disabled:false});
			
			// create_combobox_enable("#tuanhoan_bacsy");
			// create_combobox_enable("#tuanhoan_phanloai");
			// create_combobox_enable("#temp_tuanhoan");
			// $("#tuanhoan_ghichu").attr("disabled",false);
			// $("#add_temp_tuanhoan").button( {disabled:false});
			
			// create_combobox_enable("#hohap_bacsy");
			// create_combobox_enable("#hohap_phanloai");
			// create_combobox_enable("#temp_hohap");
			// $("#hohap_ghichu").attr("disabled",false);
			// $("#add_temp_hohap").button( {disabled:false});
			
			// create_combobox_enable("#tieuhoa_bacsy");
			// create_combobox_enable("#tieuhoa_phanloai");
			// create_combobox_enable("#temp_tieuhoa");
			// $("#tieuhoa_ghichu").attr("disabled",false);
			// $("#add_temp_tieuhoa").button( {disabled:false});
			
			// create_combobox_enable("#thantietnieusinhduc_bacsy");
			// create_combobox_enable("#thantietnieusinhduc_phanloai");
			// create_combobox_enable("#temp_thantietnieusinhduc");
			// $("#thantietnieusinhduc_ghichu").attr("disabled",false);
			// $("#add_temp_thantietnieusinhduc").button( {disabled:false});
			
			// create_combobox_enable("#noitiet_bacsy");
			// create_combobox_enable("#noitiet_phanloai");
			// create_combobox_enable("#temp_noitiet");
			// $("#noitiet_ghichu").attr("disabled",false);
			// $("#add_temp_noitiet").button( {disabled:false});
			
			// create_combobox_enable("#hevandong_bacsy");
			// create_combobox_enable("#hevandong_phanloai");
			// create_combobox_enable("#temp_hevandong");
			// $("#hevandong_ghichu").attr("disabled",false);
			// $("#add_temp_hevandong").button( {disabled:false});
			
			// create_combobox_enable("#phanloaisk");
			// create_combobox_enable("#phanloaitl");
			// create_combobox_enable("#temp_ketluan");
			// $("#klc_ketluan").attr("disabled",false);
			// $("#add_temp_ketluan").button( {disabled:false});
			
			// create_combobox_enable("#ngoaikhoa_bacsy");
			// create_combobox_enable("#ngoaikhoa_phanloai");
			// create_combobox_enable("#temp_ngoaikhoa");
			// $("#ngoaikhoa_ghichu").attr("disabled",false);
			// $("#add_temp_ngoaikhoa").button( {disabled:false});
			
			// create_combobox_enable("#sanphukhoa_bacsy");
			// create_combobox_enable("#sanphukhoa_phanloai");
			// create_combobox_enable("#temp_sanphukhoa");
			// $("#sanphukhoa_ghichu").attr("disabled",false);
			// $("#add_temp_sanphukhoa").button( {disabled:false});
						
			// create_combobox_enable("#temp_ketquaxetnghiem");
			// create_combobox_enable("#ketquaxetnghiem_bacsy");
			// $("#ketquaxetnghiem_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxetnghiem").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquasieuam");
			// create_combobox_enable("#ketquasieuam_bacsy");
			// $("#ketquasieuam_ghichu").attr("disabled",false);
			// $("#add_temp_ketquasieuam").button( {disabled:false});
			
			// create_combobox_enable("#temp_ketquaxquang");
			// create_combobox_enable("#ketquaxquang_bacsy");
			// $("#ketquaxquang_ghichu").attr("disabled",false);
			// $("#add_temp_ketquaxquang").button( {disabled:false});
			// if(window.kqsieuam !="" && window.kqsieuam!=null)
				// $('#chen_sieuam').button( {disabled:false});
			// if(window.kqxquang !="" && window.kqxquang!=null)
				// $('#chen_xquang').button( {disabled:false});
		// }
		
	}
}	
function number_textbox_demical_new(elem){
	$(elem).bind("focus",function(e) {
		$(elem).select();
	});
	$(elem).keydown(function(e) {
		if ( $.inArray(e.keyCode,[46,8,9,27,13,190,110]) !== -1 ||
		   (e.keyCode == 65 && e.ctrlKey === true) ||
		   (e.keyCode >= 35 && e.keyCode <= 39)) {
			 return;
		  }
		  else {
		   if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105 )) {
			e.preventDefault();
		   }
		  }
	})
}


</script>