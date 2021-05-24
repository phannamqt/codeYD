<?php
	if(isset($_GET["id_benhnhan"]) && $_GET["id_benhnhan"]!=="undefined"){
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

if(isset($_GET["id_luotkham"])){
	if(	$_GET["id_luotkham"]!=="undefined"){
		echo "<script type='text/javascript'>";
		echo "window.id_luotkham=".$_GET["id_luotkham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_luotkham=0";
		echo "</script>";
		}
}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_luotkham=0";
		echo "</script>";
		
	}

?>	
 
<style>
 #di_ung {
    color: red;
 }
.bongmo{

opacity: 1;	
}
.ui-button-text {
    padding: 0.4em 0.8em!important;
}
.button_xoa_icd10{
	padding:0px;
}
input[id*="SoThuocThucXuat"],input[id*="ThanhTien"] {
  text-align:right;
}

#gbox_rowed6.ui-jqgrid .ui-jqgrid-htable th div{
	 font:12px segoe ui, Geneva, sans-serif!important;
	 font-weight:bold!important;
	 text-shadow: 0 0px 0 rgba(0, 0, 0, 0) !important;
	 
}
#gbox_rowed6,#gbox_rowed3,#gbox_rowed4,#gbox_rowed5{
	 margin-top: 0px !important; 
	 margin-left: 0px !important;
	 
}
.kolaythuoc{
    background: #F00 repeat-x scroll 100% 100% !important;   
    color: #000000!important; ;
}
.laykhongdu{
    background: #FF0 repeat-x scroll 100% 100% !important;   
    color: #000000!important; ;
}
.tralai{
    background: #F00 repeat-x scroll 100% 100% !important;   
    color: #000000!important; 
}
/* .layhet{
    background: #51A511 repeat-x scroll 100% 100% !important;   
    color: #FFFFFF!important; 
} */

.ChuaSanSang,.DaLayBenhPham,.DangCho,.DangKham{
	color:#CCC!important;
}


.DaThucHien{
	color:#06F!important;
}

.Xong{
	
}
/*#rowed3 .ui-state-highlight,#rowed4 .ui-state-highlight,#rowed5 .ui-state-highlight{
	
	border: 1px solid #fcd3a1!important;
	background: #fbf8ee url(js/grid/themes/cupertino/images/ui-bg_glass_50_3baae3_1x400.png) 100% 100% repeat-x!important;
	color: #444444!important;
}*/
#rowed6 td ,#rowed3 td ,#DM_thuoc td{	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	
#rowed4 .ui-widget-content td,#rowed5 .ui-widget-content td{	 
		
		min-height:43px!important;
		height: 40px!important;
	}	

	
	
	
	  th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }
	 .dialog_dm_thuoc,.dialog_dm_duongdung,.dialog_dm_khamicd10,.dialog_icd10_luotkham {
 					position:absolute;
					z-index:1000000;		 
					display:none;	
					box-shadow:0px 0px 6px #333	
					 }
	input[type=button].custom_button{
	/*	border:1px solid #000;*/
		border:none;
		background:none;
		/*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
		outline:  none;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
		font-size:11px;
		height:17px!important;
		width:40px!important;
		text-decoration:underline;
	 
		/*box-shadow:0px 0px 2px 1px #a0a0a0;*/
	}
	input[type=button].custom_button:focus{	 
		outline:  none;
	} 
	:focus {outline:none;}
	::-moz-focus-inner {border:0;} 
	fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:21%;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:5px;
	   margin-right:0px;
	   display:inline-block;
	    margin-right: -4px;	 
	}
	fieldset input{
		background:none;
		text-align:center;
		box-shadow:0px 0px 3px 0px #a0a0a0;
	    border:1px solid #919191;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		display:table-cell;
		margin-left:3px;
		padding:0px;	
	}
	legend {
		background-color:#f5f3e5;
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6)!important;
		color:#000;		  
	}
	.ui-layout-west{
		
	}
	.ui-layout-center{
		
	}
	.ui-layout-east{
		
	}
	.top_form{
		width:100%;
		height:175px;
		margin-top: 0px;
				
	}	 
	.diung,.tien_su_benh_nhan,.tien_su_gia_dinh{
		display:inline-block;	
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;	
		vertical-align:top;
		height:118px;	
		width:100px;	 
	}
	.thongtin_tongthe{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:845px;		
	}
	.thongtin_luotkham{
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:scroll;
		margin-top:2px;
		height:50px;
				
	}
	
	
	.button_panel{
		display:inline-block;
		width:44%;
		padding-top:7px;
		 
	}
	.top_form textarea{		 
		height:151px;
		margin-left:2px;	
		margin-bottom:2px;		 
	}
	.top_form .title{
		padding-top:2px;
		padding-bottom:2px;
		text-align:center;
		font:12px/19px segoe ui, Tahoma, sans-serif!important;
		color:#000;		 
		font-weight:bold!important;		
	}
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:55px;
		border-top:1px solid #919191;		
		border-bottom:1px solid #919191;	
		 
	}
	.lamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:27px;
		border-top:1px solid #919191;		
		margin-top:3px;		 
	}
	.canlamsang div,.lamsang div,.canlamsang_luotkham div{
		display:inline-block;
		font-weight:bold;
		border:1px solid #919191;
		font-size:10px;
		margin-right:1px;
		margin-top:1px;
		line-height:11px;
		width:134px;
		height:21px;
		text-align:center;
		vertical-align:top;
		padding-bottom:4px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.thongtin_dieutri div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-right:2px;
		margin-top:0px;
		padding:2px;
		width:114px;
		height:13px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	#patient_info{
		width:860px!important;
	}
	
	.canlamsang_luotkham{		 
		display:inline-block;
		margin-top:1px;
		margin-left:2px;	 
	}
	.canlamsang_luotkham div{
		margin-top:	1px;		 	
		min-width:82px;
		max-width:140px;
		vertical-align: text-bottom;
		height:24px;		
		font-size:11px;	
	}
	.canlamsang_luotkham div span.topcls{
		display:block;	 	
	}	 
	.canlamsang div:hover,.lamsang div:hover,.canlamsang_luotkham div:hover{
		box-shadow:0px 0px 4px 2px #208ac8;
		border:1px solid #0463b4;	
	}
	.thongtin_dieutri{
		display:inline-block;
		vertical-align:top;
		width:99%;
		overflow-y:scroll;
		margin-top:2px;
		height:20px;
		margin-left:0px;	
		margin-top:0px;		
	}
	textarea{
		padding-left:1px;
		padding-bottom:1px;
		border:1px solid #999;
	}
	  #menu { 
        width: 250px!important; 
        display:none; 
        position:absolute;  	 
        box-shadow:0px 0px 3px #333;
        z-index:100000;	 
        background: #ffffff;
    }
	
#gbox_rowed7{
	display:none;
}
input[id$="CachDungLieuDung"]{
	width:96% !important;
} 
input[id$="MaICD10"]{
	width:60% !important;
}
a.ui-button.ui-button-text-only {
    min-width: 60px !important;
}
</style>
<body>
<div id="dialog_quota" style="display:none" title="Quota">
	<table style="width: 100%;">
		<tbody>
			<tr>
				<td>Số tiền:</td>
				<td><input type="text" id="sotiengiam" placeholder="Số tiền" style="width: 100px;"></td>
			</tr>
			<tr>
				<td style="vertical-align: top; ">Ghi chú:</td>
				<td><textarea name="ghichu_quota" id="ghichu_quota" style="width: 100%; height: 50px;" placeholder="Ghi chú"></textarea></td>
			</tr>
		</tbody>
	</table>
	 
	
</div>

<div id="matkhau" style="display:none; max-width:350px !important">
Nhập mật khẩu Bác sĩ chính để thay đổi thông tin lượt khám<br>
<span style=" margin: auto;"><input type="password" id="matkhau_input"></span>

</div>

<div id="dialog_hotrongonngu" style="display:none">
Hỗ trợ ngôn ngữ: <input type="text" id="input_hotrongonngu">
</div>



<div id="chandoan" style="display:none">
Chẩn đoán trống,bạn có muốn sao chẩn đoán gần đây không</div>
<div id="chandoan_intoa" style="display:none">
Chẩn đoán trống,bạn có muốn sao chẩn đoán gần đây không</div>
<div id="dialog-thuochuacogiaban" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Thuốc <span id="_tenthuoc" style="font-weight:bold"></span> chưa có giá bán. Bạn có muốn kê không?</p>
	<input type="hidden" id="val_donvitinh" value="" >
    <input type="hidden" id="val_lathuoc" value="" >
    <input type="hidden" id="val_dongia" value="" >
    <input type="hidden" id="val_duongdung" value="" >
</div>

<ul id="menu" class="menu" style="display:none">
    
    <li class="chuyenthanhbschinh" ><a href="javascript:void(0)">Chuyển quyền thành Bác sĩ chính</a></li>
    <li class="chuyenbschinh"><a href="javascript:void(0)">Chuyển Bác sĩ chính</a></li>
    <li class="saothuoctoaphu"><a href="javascript:void(0)">Sao thuốc từ toa phụ sang toa chính</a></li>
    <hr>
    <li class="saotoathuoc"><a href="javascript:void(0)">Sao toa thuốc này</a></li>
    <hr>
    
    <li class="medical"><a href="javascript:void(0)">Medical report</a></li>
  
</ul>


<div id="dialog_sothuoc" style="display:none">


</div>
 <div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    
 </div>
 <div  class="dialog_dm_khamicd10">
    <table id="dm_khamicd10">
    </table>
    
 </div>
 
  <div class="dialog_icd10_luotkham">
    <table id="dm_icd10_luotkham"></table>
  </div>
 
  <div  class="dialog_canhbaothuoc" style="display:none">
  </div>

 
  <div  class="dialog_dm_duongdung">
    <table id="dm_duongdung">
    </table>
    
 </div>
<div style="display:none">
    <table id="thuocmau" >
    </table>
    </div>
<div class="hoantat" style="display:none">
Bạn chắc chắn trả lượt khám này lượt khám này?
  <div class="form_row" style="vertical-align:top;font-size:16px;display:none;" >
          <div>
          <label style="width:250px; ">0.Không đánh giá được</label>          
          </div><br>

          <div>
           <label style="width:250px; ">1.Tốt</label>      
          
          </div><br>
          <div>
           <label style="width:250px; ">2.Khá</label>   
         
          </div><br>
          <div>
          <label style="width:250px; ">3.Vừa</label> 
        
          </div><br>
          <div>
          <label style="width:250px; ">4.Kém</label>
          
          </div>
  </div>
   <div class="form_row" style="vertical-align:top;font-size:16px;display:none;">
      <div>
      <label  style="width:150px; ">Người chấm</label>
      
      </div><br>
      <div>
      <label for="kinhte" style="width:150px; ">Điểm tín nhiệm:</label>
       <input id="kinhte" name="ten" style="width:130px;"type="text">
      </div><br>
      <div>
      <label for="thaido" style="width:150px; ">Điểm năng lực:</label>
       <input id="thaido" name="ten" style="width:130px;"type="text">
      </div><br>
      <div>
      <label for="hailong" style="width:150px; ">Điểm hài lòng:</label>
         <input id="hailong" name="ten" style="width:130px;"type="text" disabled>
      </div><br>
      <div>
      <label style="width:250px; ">Xin vui lòng nhập điểm số tù 0->4</label>
        
      </div>
  </div>
</div>


<div class="chandoanmau" style="display:none">
 	<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Lịch sử chẩn đoán</a></li>
    <li><a href="#tabs-2">Danh mục chẩn đoán tạo sẵn</a></li>  
  </ul>
  <div id="tabs-1">   
 
  		 <label for="timlscd" style="width:150px; ">Nhập nội dung cần tìm kiếm:</label>
         <input id="timlscd" name="timlscd" style="width:130px;"type="text">
         
           <div>
           <table id="lichsuchandoan" >
           </table>
           </div>
   
  </div>
  <div id="tabs-2">  
  <div>  
  		<label for="timcdmau" style="width:150px; ">Nhập nội dung cần tìm kiếm:</label>
         <input id="timcdmau" name="timcdmau" style="width:130px;"type="text">
         <span id="check_box">
         <input type="radio" name="sex" checked value="1">Thông thường
		 <input type="radio" name="sex" value="0">Tất cả
         </span>
   </div>
   <table id="chandoanmau" >
   </table>
  </div>

</div>
</div>



 <div class="top_form ui-widget-content">
 	<div class="thongtin_tongthe">
 		<div class="patient_info1" style="width:1070px"></div>  
        <div class="canlamsang"></div> 
        <div class="lamsang"></div>
    </div>
    <div class="tien_su_gia_dinh"  style="width: 135px;">
    	<div class="title ui-widget-header "><?php lang('tsgiadinh')?></div>
    	<textarea id="gia_dinh" style="height:84px;width:132px"></textarea>
    </div> 
    <div class="tien_su_benh_nhan"  style="width: 135px;">
    	<div class="title ui-widget-header"><?php lang('tsbnhan')?></div>
   		<textarea id="benh_nhan" style="height:84px;width:118pxs"></textarea>
    </div> 
    <div class="diung" style="width: 135px;">
    	<div class="title ui-widget-header"  ><?php lang('diung')?></div>
    	<textarea id="di_ung" style="height:84px;width:132px"></textarea>
    </div>
    <div class="thongtin_luotkham">
    	<div class="canlamsang_luotkham"></div> 
    </div>
    <div class="button_panel">  
     <a href="javascript:void(0)" id="btn_batdau" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Bắt đầu</a>  
     <a href="javascript:void(0)" id="btn_chidinhkham" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('cdkham')?></a> 
     <a href="javascript:void(0)" id="btn_dieutriphoihop" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('dtphoihop')?></a> 
     <a href="javascript:void(0)" id="btn_hoantat" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('trakq')?></a> 
     <a href="javascript:void(0)" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('luu')?></a>  
     <a href="javascript:void(0)" id="btn_lammoi" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only" style="margin-left:0px;  margin-bottom:1px;">Làm tươi</a>
	 <!--
     <a href="javascript:void(0)" id="btn_benhannoitru" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('banoitru')?></a> 	
     <a href="javascript:void(0)" id="btn_vltl" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">VLTL</a> 	 
     <a href="javascript:void(0)" id="btn_ngtru" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">N.Tru</a> -->
    </div>
 </div> 
 
 <div id="panel_main">    
 	      
    <div class="ui-widget-content ui-layout-west">
         <table id="rowed3" ></table>
         <div id="prowed3" ></div>             
    </div>         
    <div class="ui-widget-content  ui-layout-center" id="inner"> 
    
        <div class="ui-layout-north"> 
        	<table id="rowed4" ></table>
        	
        </div>
        <div class="ui-layout-center"> 
        	<table id="rowed5" ></table>
        	    
        </div>
         <div class="ui-layout-south"> 
        	<table id="khamicd10" ></table>
            <div id="pkhamicd10" ></div>
           
        </div>     	
    </div>
    <div class="ui-widget-content ui-layout-east"> 
     <div class="thongtin_dieutri">
    	<div class="dieutri_luotkham"></div> 
    </div>
  		<table id="rowed6" ></table>
        <div id="prowed6" ></div>
        <table id="rowed7"  style="display:none"></table>
        <div id="prowed7" style="display:none"></div>
		<table border=0>
			<tr>
				<td rowspan=5>
					<table id="rowed_icd10_nhieu"></table>
    <div id="prowed_icd10_nhieu"></div>
				</td>
				<td colspan=2><span style="" id="tongtien"></span></td> 
			</tr>
			<tr>
				
				<td colspan=2><label for="toanmau"  style="width:150px;text-align:left"><?php lang('toamau')?> </label>
					<input id="toanmau1" type="text"  name="toanmau1" style="width:100px;display:none" >
					<input id="toanmau" name="toanmau" type="text" style="width:150px;" > 
						 <label for="ylenh"  style="width:150px;text-align:left;margin-left:50px"><?php lang('ylenh')?> </label>
					<input list="ylenh" name="ylenh" style="display:inline-block; width: 155px;">
					<datalist id="ylenh">
						<option value="Nhập viện">
						<option value="Chuyển viện">
						<option value="Lấy thuốc đem về">
					</datalist>
				</td>
			</tr>
			<tr> 
				<td colspan=2>
					<label for="dando"  style="width:150px;text-align:left"><?php lang('dando')?> </label>
					<span style="margin-left:20px">
						<input id="trathuoc" name="comat" checked   type="checkbox" value="1" >
						<label for="trathuoc"  style="width:150px;text-align:left"><?php lang('bndtrathuoc')?> </label>
					</span>
					<span style="margin-left:60px">
						<input id="taikham" name="comat" checked   type="checkbox" value="1" >
						<label for="taikham"  style="width:50px;text-align:left"><?php lang('taikham')?></label>
					</span>
					<input id="ngaytaikham" name="ngaytaikham"   type="text" style="width:50px;" >
					<label for="ndtaikham"  style="width:150px;text-align:right"><?php lang('ndtaikham')?></label>
				</td>
				
			</tr>
			<tr> 
				<td>
					<textarea id="ghichu" rows="1" cols="34" style="height: 65px">  </textarea>
				</td>
				<td><textarea id="noidungtaikham" rows="1" cols="34" style="height: 65px">            
				</textarea>
				</td>
			</tr>
			<tr> 
				<td colspan=2>
					<a href="javascript:void(0)" id="btn_dantoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Dán</a>  
					<a href="javascript:void(0)" id="btn_saotoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sao G.nhất</a>
					<a href="javascript:void(0)" id="btn_chinhsua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</a>
					<a href="javascript:void(0)" id="btn_xemtoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('xem')?></a>  
					<a href="javascript:void(0)" id="btn_intoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; "><?php lang('in')?></a>  
					
					<!-- <a href="javascript:void(0)" id="btn_phieu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   "><?php lang('pvien')?></a>  
					<a href="javascript:void(0)" id="btn_phieuchuyen" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   ">P.Cviện</a> -->
					<a href="javascript:void(0)" id="btn_innhiet_vtth" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;">VTTH</a>  
					<a href="javascript:void(0)" id="btn_innhiet" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   "><?php lang('xemtpcn')?></a>
					
					<!-- <a href="javascript:void(0)" id="btn_xeminnhiet" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   "><?php lang('intpcn')?></a>   -->
			
			</td> 
			</tr>
		</table> 
    </div>   
  
          
</div>
<div id="countdown" style="display:none"><span style="font-size:15px">Bệnh nhân không thuộc đối tượng Bảo hiểm y tế. Sẽ tạo bệnh án nội trú trong </span><b> <span id="count_num">5</span></b> <span style="font-size:15px">giây</span></div>
</body>
</html>
<script type="text/javascript">
window.id_rowed6_delete=0;
var ds_kho='1';
window.id_khamsua=0;
var report_code=["InKhoA4DenTrang"];
var report_name=["Đơn thuốc Bác sĩ"];


$(document).ready(function() {
	<?php
	if(isset($_GET['id_benhnhan']) && $_GET['id_benhnhan']!=''){
		$_GET['id_benhnhan']=$_GET['id_benhnhan'];
	}else{
		if($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]==""){

		}else{
			$_GET['id_benhnhan']=$_SESSION["ThongTinBenhNhan"]["id_benhnhan"];
		}
	}
	$data= new SQLServer;
	$store_name1="{call GD2_GetThongTinBenhAnNoiTruByID_BenhNhan(?)}";
	$params1 = array ($_GET['id_benhnhan']);
	$get=$data->query( $store_name1, $params1);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();	
	if(count($tam)>0){
		echo 'window.conoitru=1;';
		echo 'window.n_idluotkham='.$tam[0]['ID_LuotKham'].';';
		echo 'window.n_idbenhnhan='.$tam[0]['ID_BenhNhan'].';';
		echo 'window.n_idbenhannoitru='.$tam[0]['ID_BenhAnNoiTru'].';';
		echo 'window.n_idloaibenhannoitru='.$tam[0]['ID_LoaiBenhAnNoiTru'].';';
		echo 'window.n_hotenbenhnhan="'.$tam[0]['HoTenBN'].'";';
		echo 'window.n_idphongban='.$tam[0]['ID_PhongBan'].';';
		echo 'window.n_ngaytaobenhan="'.$tam[0]['NgayTaoBenhAn']->format($_SESSION["config_system"]["ngaythang"]).'";';
	}else{
		echo 'window.conoitru=0;';
	}
	?>
	window.n_idkham_=0;
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) { 
		//alert(e.data);
		tam=e.data.split(";");
		if(tam[0]=='taobenhannoitru'){
			parent.postMessage('open_idbenhnhan;tao_benh_an_noi_tru;'+tam[2]+';'+tam[3]+';;'+tam[5]+';'+tam[6]+'&doituong='+tam[7]+'&bacsydieutri='+tam[8]+'&oper='+tam[9],'*');
		}else if(tam[0]=='mobenhannoi'){
			//console.log('mobenhannoi');
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_get_luotkhamnoitrucuoi&id_benhnhan='+<?=$_GET['id_benhnhan']?>).done(function(data){
				data=data.split('|||');
				if(parseInt(data[1])==1){
					window.conoitru=data[1];
					window.n_idluotkham=data[2];
					window.n_idbenhnhan=data[3];
					window.n_idbenhannoitru=data[4];
					window.n_idloaibenhannoitru=data[5];
					window.n_hotenbenhnhan=data[6];
					window.n_idphongban=data[7];
					window.n_ngaytaobenhan=data[8];
					
					if(window.n_idloaibenhannoitru==1){
						parent.postMessage('open_idluotkham;benh_an_noi_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=1&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==2){
						parent.postMessage('open_idluotkham;benh_an_ngoai_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=2&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==3){
						parent.postMessage('open_idluotkham;benh_an_san_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=3&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==4){
						parent.postMessage('open_idluotkham;benh_an_san_phu_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=4&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==5){
						parent.postMessage('open_idluotkham;benh_an_rang_ham_mat;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=5&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==6){
						parent.postMessage('open_idluotkham;benh_an_nhi_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=6&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==7){
						parent.postMessage('open_idluotkham;benh_an_tai_mui_hong;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=7&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==8){
						parent.postMessage('open_idluotkham;benh_an_mat_lacvannhan;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=8&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}
					else if(window.n_idloaibenhannoitru==9){
						parent.postMessage('open_idluotkham;benh_an_mat_glocom;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=9&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}
					else if(window.n_idloaibenhannoitru==10){
						parent.postMessage('open_idluotkham;benh_an_mat_streem;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=10&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}
					else if(window.n_idloaibenhannoitru==11){
						parent.postMessage('open_idluotkham;benh_an_so_sinh;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=11&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==12){
						parent.postMessage('open_idluotkham;benh_an_dieu_duong_phcn;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=12&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}else if(window.n_idloaibenhannoitru==13){
						parent.postMessage('open_idluotkham;benh_an_ngoai_vltl;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=13&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
					}
				}else{
					window.conoitru=0;
				}
				
			});
}
})
create_combobox_new('#input_hotrongonngu',create_hotrongonngu,'bw','','data_nhanvien',0);
$('#rowed3').bind("contextmenu", function(e) {
	return false;
});
bhyt_thuoc();
sua();
dialog_matkhau();
$('#matkhau_input').bind('keydown',function(e){
	if (jwerty.is('enter',e)){
		kiemtrapass()
	}
})

$('#btn_benhannoitru').click(function(e) {
	data_rowed3 = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))

	if(data_rowed3['ID_BenhAnNoiTru']!=''){
		parent.postMessage('open_idluotkham;'+data_rowed3['FolderOpen']+';'+data_rowed3['ID_LuotKham']+';'+window.id_benhnhan+';;;&id_benhannoitru='+data_rowed3['ID_BenhAnNoiTru']+'&idloaibenhan='+data_rowed3['ID_LoaiBenhAnNoiTru']+'&tenbenhnhan='+$('#panel_tenbn').text()+'&ngaytaobenhan='+data_rowed3['NgayTaoBenhAn']+'&idkhoa='+data_rowed3['ID_PhongBan'],'*');
	}else{

		if(window.conoitru==1){
			if(window.n_idloaibenhannoitru==1){
				parent.postMessage('open_idluotkham;benh_an_noi_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=1&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==2){
				parent.postMessage('open_idluotkham;benh_an_ngoai_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=2&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==3){
				parent.postMessage('open_idluotkham;benh_an_san_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=3&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==4){
				parent.postMessage('open_idluotkham;benh_an_san_phu_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=4&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==5){
				parent.postMessage('open_idluotkham;benh_an_rang_ham_mat;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=5&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==6){
				parent.postMessage('open_idluotkham;benh_an_nhi_khoa;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=6&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==7){
				parent.postMessage('open_idluotkham;benh_an_tai_mui_hong;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=7&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==8){
				parent.postMessage('open_idluotkham;benh_an_mat_lacvannhan;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=8&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}
			else if(window.n_idloaibenhannoitru==9){
				parent.postMessage('open_idluotkham;benh_an_mat_glocom;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=9&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}
			else if(window.n_idloaibenhannoitru==10){
				parent.postMessage('open_idluotkham;benh_an_mat_streem;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=10&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}
			else if(window.n_idloaibenhannoitru==11){
				parent.postMessage('open_idluotkham;benh_an_so_sinh;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=11&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==12){
				parent.postMessage('open_idluotkham;benh_an_dieu_duong_phcn;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=12&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}else if(window.n_idloaibenhannoitru==13){
				parent.postMessage('open_idluotkham;benh_an_ngoai_vltl;'+window.n_idluotkham+';'+window.n_idbenhnhan+';;;&id_benhannoitru='+window.n_idbenhannoitru+'&idloaibenhan=13&tenbenhnhan='+window.n_hotenbenhnhan+'&ngaytaobenhan='+window.n_ngaytaobenhan+'&idkhoa='+window.n_idphongban,'*');
			}
		}else{
				//$( "#dialog-chuataobenhan" ).dialog('open');
				tooltip_message("Bệnh nhân chưa có lượt khám nội trú");
			}
		}
	});


window.focus_ngaythuoc=0;
$('#taikham').click(function(){
	if($('#taikham').is(':checked')){
		var myDate = new Date();

		var rowData = $("#rowed3").getRowData(rowed3_select);
		var NgayHetThuoc=convert_to_datejs(rowData['NgayHetThuoc'])

			 //var date1=selectedDate.split("/").reverse().join("/");
      		 //date1=(new Date(date1)).addDays(1);

			//var date1=selectedDate.split("/").reverse().join("/");
        //date1=(new Date(date1)).addDays(1);

        $('#ngaytaikham').prop('disabled', false);
        $('#noidungtaikham').prop('disabled', false);

        MyDateString = ('0' + myDate.getDate()).slice(-2) + '/'
        + ('0' + (myDate.getMonth()+1)).slice(-2) + '/'
        + (myDate.getFullYear().toString().substr(2,2));
        $("#ngaytaikham").val(convert_date_to_string(NgayHetThuoc.addDays(1)));			
    }else{
    	$('#ngaytaikham').prop('disabled', true);
    	$('#noidungtaikham').prop('disabled', true);
    }
})


window.thieuthuoc=0;
window.id_rowed3_bd=0;
window.dem=0;
window.grid_datathuoc='';
window.id_datathuoc='';
window.saotaophu=0;	
right_menu();
window.nickname=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName",
	async:false                       
}).responseText; 
$('#btn_batdau,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_lammoi,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieuchuyen,#btn_phieu,#btn_benhannoitru,#btn_vltl,#btn_ngtru,#btn_innhiet,#btn_xeminnhiet,#btn_innhiet_vtth').button();
$('#btn_batdau,#btn_hoantat,#btn_luu,#btn_dantoa,#btn_saotoa,#btn_chinhsua').button('disable');	
openform_shortcutkey();	
saotaogannhat();
$('#btn_dantoa').click(function(){
	saotoathuoc();
})
window.bd=0;
window.IsDoctor=<?=$_SESSION["user"]["IsDoctor"]?>;
window.user_login=<?=$_SESSION["user"]["id_user"]?>;
	 
	

	$("#kinhte").keyup(function(e) {
		if (e.keyCode === 13) {
			$("#thaido").focus();
		}
	});
	$("#thaido").keyup(function(e) {
		if (e.keyCode === 13) {
			$(".n_btn1").focus();
		}
	});
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham&id_benhnhan='+window.id_benhnhan).done(function(data){					
		window.batdau_status=data;	
		if(data==2){
			$('#btn_batdau').button('enable');	
		}
	})

	$("#btn_xemtoa").click(function(){
		var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='Xong')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan").dialog('open');
		}else{
			$.cookie("in_status", "print_preview"); 
			
			//if(window.user_login==178){
				$.ajax({
					type: 'POST',
					async : false,
					url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cogiay&ID_DonThuoc='+rowData['ID_DonThuoc'],
					success: function(data, status, xhr) {
						//if(parseInt($.trim(data))>12){
							dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');
						/* }else{
							dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');
						} */
					},
				});
			/*}else{			
				if($('#rowed6 .jqgrid-new-row').length==false){
					dong_tam=0
				}else{
					dong_tam=1
				}
				if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');
				}else{
					  alert("Chưa có đơn thuốc"); 
				}
			}*/
			
		}
	})
	
	

	$("#btn_intoa").click(function(){
		var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='Xong')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan_intoa").dialog('open');
		}else{
			$.cookie("in_status", "print_direct"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=0",'InKhoA4DenTrang');
				$(".modalu78787878975f").dialog("close");
			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	})
	$("#btn_xeminnhiet").click(function(){
		var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='Xong')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan_intoa").dialog('open');
		}else{
			$.cookie("in_status", "print_direct"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_toatpcn&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=0",'InNhiet');
				$(".modalu78787878975f").dialog("close");
			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	})
	$("#btn_innhiet").click(function(){
		var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='Xong')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan").dialog('open');
		}else{
			$.cookie("in_status", "print_preview"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_toatpcn&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InNhiet');
			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	})
	
	$("#btn_innhiet_vtth").click(function(){
		var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='Xong')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan").dialog('open');
		}else{
			$.cookie("in_status", "print_preview"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_toathuoc_vtth&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InNhiet');
			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	})

	$(".medical").click(function(e){
		parent.postMessage("open_idbenhnhan;medical_report;;"+window.id_benhnhan+";;","*");
		
	});		
	$(document).bind("mouseup", function(e) {
		$("#menu").hide();
	});
	window.batdau_luotkham=0;
	$("#menu").menu();
	$("#btn_phieu").click(function(e){	
		elem=42432543543;		
		dialog_main("" , 80, 98, elem, "pages.php?module=lamsang&view=benh_an&action=phieuvaovien&header=top&type=report&id_form=10&id_benhnhan="+window.id_benhnhan+"&id_luotkham="+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+"&id_kham="+rowed3_select)
		$(".frame_42432543543").css("width","90%");
		$(".frame_42432543543").css("display","block");
		$(".frame_42432543543").css("margin","0 auto");

	});
	$("#btn_phieuchuyen").click(function(e){	
		elem=42432543543;		
		dialog_main("" , 80, 98, elem, "pages.php?module=lamsang&view=benh_an&action=phieuvaovien_thaotest&header=top&type=report&id_form=10&id_benhnhan="+window.id_benhnhan+"&id_luotkham="+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+"&id_kham="+rowed3_select)
		$(".frame_42432543543").css("width","90%");
		$(".frame_42432543543").css("display","block");
		$(".frame_42432543543").css("margin","0 auto");

	});
	$("#btn_vltl").click(function(e){	
		elem=42432543543;		
		dialog_main("" , 80, 98, elem, "pages.php?module=lamsang&view=benh_an&action=phieuvaovien_test&header=top&type=report&id_form=10&id_benhnhan="+window.id_benhnhan+"&id_luotkham="+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+"&id_kham="+rowed3_select)
		$(".frame_42432543543").css("width","90%");
		$(".frame_42432543543").css("display","block");
		$(".frame_42432543543").css("margin","0 auto");

	});
	$("#btn_ngtru").click(function(e){	
	//alert(window.id_benhnhan);
	$.cookie("in_status", "print_preview");
	dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=lamsang&action=benhan_ngoaitru&header=top&id_benhnhan="+window.id_benhnhan+"&id_luotkham="+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+"&type=report&check=&xemtruocin=1&id_form=123",'BenhAnSanKhoa');
	$(".frame_u78787878975f").css("width","793px");

});
	$( "#countdown" ).dialog({
		autoOpen: false,
		height: ($(window).height()-480).toFixed(0),
		width: ($(window).width()-700).toFixed(0),
		modal: true,            
	});
	$( "#dialog_sothuoc" ).dialog({
		resizable: false,
		height:'auto',	  
		autoOpen :false,
		modal: true,
		buttons: {
			"Yes": function() {		
				var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow') 
				$( this ).dialog( "close" );	
				$('#'+id_row+'_ThanhTien').focus();	
				$('#'+id_row+'_ThanhTien').select();	  
			},
			"No": function() {
				var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow')
				$( this ).dialog( "close" );
				$('#'+id_row+'_ID_Thuoc1').val('');
				$('#'+id_row+'_ID_Thuoc1').focus();
			}
		},open: function () {
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
			$('.ui-dialog').keyup(function(e) {
				if (e.keyCode === 37){
					$('.n_btn1').focus(); 
					$('.n_btn2').focusout();
				}
				if (e.keyCode === 39){
					$('.n_btn2').focus(); 
					$('.n_btn1').focusout();
				}
			})
		},close: function () {			
			$('.ui-dialog-titlebar-close').focus(); 
			$('.ui-dialog-titlebar-close').click(); 
		}
	});
	
	$( "#dialog-thuochuacogiaban" ).dialog({
		resizable: false,
		height:'auto',	  
		autoOpen :false,
		modal: true,
		buttons: {
			"Yes": function() {		
				$( this ).dialog( "close" );					
				$(".ui-dialog-titlebar-close").click();
			},
			"No": function() {
				$( this ).dialog( "close" );
				$('#rowed6 #'+id_rowed6_edit+'_ID_Thuoc1').val('');
				$('#rowed6 #'+id_rowed6_edit+'_ID_Thuoc1').focus();	
				$('#rowed6').jqGrid("setCell", $("#rowed6").jqGrid('getGridParam', 'selrow'), "Gia",'' );

			}
		},open: function () {
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
			$('.ui-dialog').keyup(function(e) {
				if (e.keyCode === 37){
					$('.n_btn1').focus(); 
					$('.n_btn2').focusout();
				}
				if (e.keyCode === 39){
					$('.n_btn2').focus(); 
					$('.n_btn1').focusout();
				}
			})
		}
		,close: function () {			
			$('.ui-dialog-titlebar-close').focus(); 
			$('.ui-dialog-titlebar-close').click(); 
		}
	});
	$( "#dialog_canhbaothuoc" ).dialog({
		resizable: false,
		height:200,
		minWidth:300,
		autoOpen :false,
		modal: true,
		buttons: {
			"Yes": function() {
				$( this ).dialog( "close" );		 
			},
			"No": function() {			 
				$( this ).dialog( "close" );		  
			}
		},open: function () {
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
			$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
			$('.ui-dialog').keyup(function(e) {
				if (e.keyCode === 37){
					$('.n_btn1').focus(); 
					$('.n_btn2').focusout();
				}
				if (e.keyCode === 39){
					$('.n_btn2').focus(); 
					$('.n_btn1').focusout();
				}
			})
		},close: function () {			
			$('.ui-dialog-titlebar-close').focus(); 
			$('.ui-dialog-titlebar-close').click(); 
		}
	});


	$( "#dialog_quota" ).dialog({
		resizable: false,
		height:200,
		minWidth:300,
		autoOpen :false,
		modal: true,
		buttons: {
			"Lưu": function() {
				rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
				$.ajax({
					type: 'POST',
					async : false,
					url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham='+rowData['ID_LuotKham'],
					success: function(data, status, xhr) {
					if(data=='true'){
						alert("Lượt khám đã thanh toán");
					}else{
						if($("#sotiengiam").val()==''){
							alert("Vui lòng nhập số tiền");
						}else{
							$.ajax({
								type: 'POST',
								async : false,
								url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controler_quota&oper=save',
								data:{
									ID_LuotKham:rowData['ID_LuotKham'],
									ID_BenhNhan:<?=$_GET['id_benhnhan']?>,
									SoTien:$("#sotiengiam").val(),
									GhiChu:$("#ghichu_quota").val(),
								},
								success: function(data, status, xhr) {
									if(data==''){
										tooltip_message("Đã lưu");
										$( "#dialog_quota" ).dialog( "close" );
										getquota_luotkham(rowData['ID_LuotKham']);	
									}else{
										//alert(data);
									}
								}
							});
						}

					}
				}
			});

},
"Thoát": function() {
	$( this ).dialog( "close" );		  
}
},open: function () {

},close: function () {	

}
});
number_textbox('#sotiengiam');

$('#quota').click(function(){
	rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
	$.ajax({
		type: 'POST',
		async : false,
		url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham='+rowData['ID_LuotKham'],
		success: function(data, status, xhr) {
			if(data=='true'){
				alert("Lượt khám đã thanh toán");
			}else{
				$('#sotiengiam').val(window.quota_luotkham);
				$('#ghichu_quota').val(window.ghichu_quota_luotkham);
				$( "#dialog_quota" ).dialog('open');
			}
		}
	});

})


$('#miengiam').click(function(){
	elem=42432543543;
	rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))
	dialog_main("<?php lang('miengiam')?>: " , 98, 98, elem, 'pages.php?module=hanhchinh&view=mien_giam&id_form=230&id_donthuoc=' + rowData['ID_DonThuoc']+'&id_luotkham=' + rowData['ID_LuotKham']+'&id_benhnhan='+window.id_benhnhan)
})

$('#chitietquota').click(function(){

	elem=42432543543;
	rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))	
	dialog_main("Thông tin quota" , 95, 95, elem, 'pages.php?module=hanhchinh&view=chi_tiet_quota&id_form=1&id_quotaNV=' + rowData['id_quotaNV'])
	
});	

window.ds_tang=$.cookie("dstang");
number_textbox('#kinhte');
number_textbox('#hailong');
number_textbox('#thaido');
$('#kinhte').keyup(function(e) {  
	$('#kinhte').val( minmax('#kinhte', 0, 4))
});
$('#hailong').keyup(function(e) {  
	$('#hailong').val( minmax('#hailong', 0, 4))
});
$('#thaido').keyup(function(e) {  
	$('#thaido').val( minmax('#thaido', 0, 4))
});
create_lschuandoan();
$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_tiensu&idbenhnhan='+window.id_benhnhan).done(function(data) {
	if($.trim(data)!=''){
		data=data.split(';');		
		$('#gia_dinh').val(data[1]);
		$('#benh_nhan').val(data[0]);
		$('#di_ung').val(data[2]);
		window.id_tiensubenh=data[3];			
		window.TienSuNguoiThan=data[1];
		window.TienSu=data[0];
		window.DiUng=data[2];			
	}else{
		window.id_tiensubenh=0;
	}	  
});


$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chuandoanmau').done(function(data) {	
	window.datacdmau=data;
	create_chuandoanmau('#chandoanmau',data);	
	grid_filter('#chandoanmau',2,1,$.parseJSON(datacdmau))
});	

$('#check_box').click(function(){		
	if($('input[name=sex]:checked', '#check_box').val()==0){
		$('#chandoanmau').jqGrid('setGridParam', { datatype: "jsonstring" ,datastr:$.parseJSON(datacdmau)}).trigger("reloadGrid");
	}else{
		grid_filter('#chandoanmau',2,1,$.parseJSON(datacdmau))
	}		
})

$(".hoantat").dialog({
	autoOpen:false,
	/* height: 320,
	width: 580, */
	height: 150,
	width: 400,
	modal: true,
	title: 'Hoàn tất',
	draggable: true,
	resizable: false,
	stack: false,
	buttons: {
		"OK": function() {	
			hienthongbao("Đang lưu...");
			rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));			
			luu_thoatform();
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chamdiem&thaido='+$('#thaido').val()+'&kinhte='+$('#kinhte').val()+'&hailong='+$('#hailong').val()+'&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+$("#rowed3").jqGrid('getGridParam', 'selrow')+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				hienthongbao("");
				$( ".hoantat" ).dialog( "close" );
			})			  
		},
	},
	beforeClose: function( event, ui ) {			 
	},
	open: function () {
		$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');			
		$('#kinhte').focus();
	},
	close: function(event, ui) {	
	},

});

$(".chandoanmau").dialog({
	autoOpen:false,
	height: ($(window).height() / 100 * parseFloat(90)).toFixed(0),
	width: ($(window).width() / 100 * parseFloat(60)).toFixed(0),
	modal: true,
	title: 'Mẫu chẩn đoán',
	draggable: true,
	resizable: false,
	stack: false,
	buttons: {
		"<?php lang('luu')?>": function() {			
			$( ".chandoanmau" ).dialog( "close" );
		}
	},
	open: function( event, ui ) {
		$("#lichsuchandoan").setGridWidth($('.ui-tabs').width()-50);
		$("#lichsuchandoan").setGridHeight($(".ui-tabs").height()-100);
		$("#chandoanmau").setGridWidth($('.ui-tabs').width()-50);
		$("#chandoanmau").setGridHeight($(".ui-tabs").height()-100);
	},
	close: function(event, ui) {	 
	},
});
$("#chandoan").dialog({
	autoOpen:false,
	height:'auto',
	width: '400px',
	modal: true,
	title: '<?php lang('chdoan')?>',
	draggable: true,
	resizable: false,
	stack: false,
	buttons: {
		"Có": function() {			
			$( "#chandoan" ).dialog( "close" );
			var rowData = $("#rowed3").getRowData(rowed3_select);	
			$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_saochandoan&id_kham="+rowed3_select+"&id_benhnhan="+window.id_benhnhan).done(function(data){


					//$('#rowed6').jqGrid("setCell", rowed3_select, "chandoan",data );
					if($('#rowed6 .jqgrid-new-row').length==false){
						dong_tam=0
					}else{
						dong_tam=1
					}
					$.cookie("in_status", "print_preview"); 
					if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
						dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');

					}else{
						alert("Chưa có đơn thuốc"); 
					}

					// laydulieu_khamlamsang();
				})
		},
		"Không": function() {			
			$( "#chandoan" ).dialog( "close" );
			var rowData = $("#rowed3").getRowData(rowed3_select);
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			$.cookie("in_status", "print_preview"); 
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');

			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	},

});




$("#chandoan_intoa").dialog({
	autoOpen:false,
	height:'auto',
	width: 'auto',
	modal: true,
	title: '<?php lang('chdoan')?>',
	draggable: true,
	resizable: false,
	stack: false,
	buttons: {
		"Ok": function() {			
			$( "#chandoan_intoa" ).dialog( "close" );
			var rowData = $("#rowed3").getRowData(rowed3_select);	
			$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_saochandoan&id_kham="+rowed3_select+"&id_benhnhan="+window.id_benhnhan).done(function(data){
				$.cookie("in_status", "print_direct"); 

					//$('#rowed6').jqGrid("setCell", rowed3_select, "chandoan",data );
					if($('#rowed6 .jqgrid-new-row').length==false){
						dong_tam=0
					}else{
						dong_tam=1
					}
					
					if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
						dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=0",'InKhoA4DenTrang');
						$(".modalu78787878975f").dialog("close");
					}else{
						alert("Chưa có đơn thuốc"); 
					}

					laydulieu_khamlamsang();
				})
		},
		"Can": function() {			
			$( "#chandoan_intoa" ).dialog( "close" );
			$.cookie("in_status", "print_direct"); 
			var rowData = $("#rowed3").getRowData(rowed3_select);
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=0",'InKhoA4DenTrang');
				$(".modalu78787878975f").dialog("close");
			}else{
				alert("Chưa có đơn thuốc"); 
			}
		}
	},

});



$("#dialog_hotrongonngu").dialog({
	autoOpen:false,
	height: 150,
	width: 300,
	modal: true,
	title: 'Hỗ trợ ngôn ngữ',
	draggable: true,
	resizable: false,
	stack: false,
	buttons: {
		"Lưu": function() {		
			$( "#dialog_hotrongonngu" ).dialog( "close" );
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controler_hotrongongu&id_nguoihotro='+$('#input_hotrongonngu_hidden').val()+'&id_kham='+$("#rowed3").jqGrid('getGridParam', 'selrow')).done(function(){
				laydulieu_khamlamsang();
			})

		}
	}

});

$('#btn_hoantat').click(function(){

	if( $('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'LoaiDoiTuongKham')=='BHYT'){
		if($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))==''||
			$.trim($('#khamicd10').jqGrid('getCell', $("#khamicd10").jqGrid('getGridParam', 'selrow'), 'maicd10'))=='')
		{
			alert('Lượt khám Bảo hiểm y tế phải nhập chẩn đoán và icd10')
		}else{
			$(".hoantat").dialog('open');	
		}
	}else{
		$(".hoantat").dialog('open');		
	}
})
window.rowed3_select=0;
window.rowed4_select=0;
window.reload_status=0;
window.id_admin=0;
create_combobox('#toanmau','#toanmau1','.toa_mau','#toa_mau',create_toamau,'','','','data_toathuocmau');
create_thuocmau('#thuocmau');	
window.loaikham=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_NhomCLS=20 and ID_LoaiKham<>3918 and Active=1&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=MaVietTat",
	async:false                       
}).responseText;		
window.duongdung=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DuongDung&id=ID_DuongDung&name=TenDuongDung",
	async:false                       
}).responseText;		 	
window.duongdung_chia=duongdung.split(';');	
window.thuoc=  $.ajax({                       
	url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=0&tables=DM_Thuoc&id=ID_Thuoc&name=TenGoc",
	async:false                       
}).responseText;

$("#panel_main").css("height",$(window).height()-160+"px");			 
$("#panel_main").fadeIn(1000);
ghichu_width=($(window).width()-850)/3-8;
$(".tien_su_benh_nhan,.diung,.tien_su_gia_dinh").css("width",ghichu_width+"px"); 
$(".top_form textarea").css("width",ghichu_width-10+"px");
$.get( "pages.php?module=web_services&function=create_panel_small&action=index&id_benhnhan="+window.id_benhnhan, function( data ) {
	$( ".patient_info1" ).html( data );
	$( ".patient_info1" ).css("width", ($( "#patient_info" ).width()+50)+"css");		  
	parent.postMessage('changetitle;<?=$view?>-'+window.id_benhnhan+';Bệnh án;'+$('#panel_tenbn').text() , '*')
	tenbn_resize();
});

$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd10').done(function(data) {	
	create_icd10('#dm_khamicd10',data)
	  create_icd10_nhapnhieu('#dm_icd10_luotkham', data);
})
setsel();
create_layout();
canlamsang();
lamsang();	 
btn_luu();
create_lichsu_khamlamsang();
create_lichsu_dienbienbenh();
create_lichsu_chandoan();
create_lichsu_donthuoc();
laydulieu_khamlamsang();
create_khamicd10();	
resize_control();
create_khamicd10_nhapnhieu();




/* $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc&id_benhnhan='+window.id_benhnhan).done(function(data) {
	data=data.split('|||');		
	window.grid_datathuoc= jQuery.parseJSON(data[0]);
	window.id_datathuoc= jQuery.parseJSON(data[1]);
	create_Dm_thuoc_grid('#DM_thuoc',data[2])
}) */


$('body').bind('keydown', function (e) {	
	var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
	jwerty.key("ctrl+shift+z", false);
	if(jwerty.is("ctrl+shift+z",e)){
		alert('ID_Kham='+ $("#rowed3").jqGrid('getGridParam', 'selrow')+'----------ID_Luotkham='+rowData['ID_LuotKham']+'----------ID_Benhnhan='+window.id_benhnhan+'----------ID_donthuoc='+rowData['ID_DonThuoc']+'----------Đối tượng='+rowData['LoaiDoiTuongKham']);
	}else if(jwerty.is("ctrl+shift+f",e)){			  
		window.id_admin=1;
		$('#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_lammoi,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieuchuyen,#btn_phieu,#btn_innhiet,#btn_xeminnhiet').button('enable');
		ids = jQuery("#rowed3").jqGrid('getDataIDs');
		$("#rowed4").setColProp('MoTa', {editable: true});
		$("#rowed5").setColProp('ChanDoan', {editable: true});					 
		$("#rowed3").setColProp('SoNgayThuoc', {editable: true});
		$("#rowed3").setColProp('ID_LoaiKham', {editable: true});
			 // $('#ghichu').prop('disabled', false);
			 $('#taikham').prop('disabled', false);
			 $('#ngaytaikham').prop('disabled', false);
			 $('#noidungtaikham').prop('disabled', false);
			 $('#rowed4').jqGrid("editCell",(ids.indexOf(jQuery('#rowed4').jqGrid('getGridParam','selrow'))+1),0,true);
			 $('#rowed5').jqGrid("editCell",(ids.indexOf(jQuery('#rowed5').jqGrid('getGridParam','selrow'))+1),0,true);				
			}

			if((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua')&&rowData['BSChanDoan']==user_login){
				$('#rowed6_iladd').removeClass('ui-state-disabled')	 ;
				if (e.keyCode == '45') {
					savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");     
					if (savedRow && savedRow.length > 0) {		
					}else{					
						$("#prowed6 .ui-icon-plus").click();
						var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
						  $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();// nam them khi nhấn phím Insert tạo dòng mới sẽ focus vào combo tên thuốc
						}
					}
				}
			});

$("#rowed3,#rowed4,#rowed5").click(function(e) {
	grid_click_status=$(this).attr("id");
}); 
$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()-160+"px");	
	resize_control();
	ghichu_width=($(window).width()-850)/3-8;		
	$(".tien_su_benh_nhan,.diung,.tien_su_gia_dinh").css("width",ghichu_width+"px"); 
	$(".top_form textarea").css("width",ghichu_width-10+"px");		 
})
$('#DM_thuoc').click(function(){
	$('#DM_thuoc').data('clicked', true);
});		
$('#dm_khamicd10').click(function(){
	$('#dm_khamicd10').data('clicked', true);
});
batdau();
lammoi();
$( "#tabs" ).tabs();
chidinhkham();
dieutriphoihop();
$('#prowed6').hide();		
$('#toanmau').val('Chọn toa mẫu')
phanquyen();
$.ajax({
	type: "GET",
	url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc&id_benhnhan='+window.id_benhnhan,
	async: true,
	success: function (data) {
		data=data.split('|||');		
		window.grid_datathuoc= jQuery.parseJSON(data[0]);
		window.id_datathuoc= jQuery.parseJSON(data[1]);
		create_Dm_thuoc_grid('#DM_thuoc',data[2])
	}
});
})

function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			resizable: true
			,	size: "30%"
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
			,	size: "22%"
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
			,	size: "53%"
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
	$('#inner').layout({
		resizerClass: 'ui-state-default'
		,south: {
			resizable: true
			,	size:					"25%"
			,	resizerDblClickToggle: false 
			,	onresize_end:function () { 				 
				resize_control();
			}
			,	onopen_end:function () { 

			}
			,	onclose_end:function () { 				 

			}

		}	
		,north: {
			resizable: true
			,	size:					"40%"
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
	});
}
var rowed6_curentsel; 

function create_lichsu_donthuoc(){	
	var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	mydata=[];	 
	$("#rowed6").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','','<?php lang('bh')?>','','<?php lang('tenthuoc')?>',"<?php lang('giaban')?>", "<?php lang('ddung')?>", "<?php lang('sl')?>", "<?php lang('tong')?>", "Dược xuất", "<?php lang('cdung')?>", "<?php lang('thhien')?>", "Cách dùng chi tiết"],
		colModel:[		
		{name:'trangthaidonthuoc',index:'trangthaidonthuoc',width:"8%",align:'right',hidden:true, editable: false}  ,
		{name:'iddonthuocct',index:'iddonthuocct',width:"8%",align:'right',hidden:true, editable: false}  ,
		{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: false },
		{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: false }  ,
		{name:'isbhyt',index:'isbhyt', width:"18%",editoptions: { value:"1:0"}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false}},
		{name:'xoa',index:'xoa',width:"18%",align:'center',hidden:false, editable: false} ,
		{name:'ID_Thuoc',index:'ID_Thuoc',width:"160%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
			return check_idthuoc(value,colName);
		}}}, 
		{name:'Gia',index:'Gia', width:"50%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
		{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"50%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung, dataEvents:  [{ type: 'keydown blur', fn: function(e) { 
			if (jwerty.is('enter',e)){
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
				var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
				SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
				CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
				ID_DuongDungThuoc_cachdung=$(e.target).find("option:selected").text();	
				CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
				$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
			}else{
				if($("#rowed6").find('.jqgrid-new-row').length==true){ 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
				}
			}
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){				

					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							var row = $(e.target).closest('tr.jqgrow');
							var tam = row.attr('id');
							ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');		
							var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
							SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
							CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
							ID_DuongDungThuoc_cachdung=$(e.target).find("option:selected").text();	
							CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
							$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
						}	
					}
				}else{

				}
			}
		}}]},formatter: "select"},		 
		{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"30%",formatter:currency_convert,align:'right',hidden:false, editable: true
		,newgrid:true,func_grid:"check_soluong",editoptions:{
			dataInit: function (elem) {number_textbox_demical(('#'+elem.id))},
			dataEvents: [{ type: 'keydown blur', fn: function(e) {
				if (jwerty.is('enter',e)){
					var row = $(e.target).closest('tr.jqgrow');
					var tam = row.attr('id');
					ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));	
					SoThuocThucXuat_cachdung=$(e.target).val();	
					CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
					ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);

				}else{
					if($("#rowed6").find('.jqgrid-new-row').length==true){ 
						var row = $(e.target).closest('tr.jqgrow');
						var rowId = row.attr('id');
						ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
						var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
						SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
						CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
						ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
						CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
						$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
					}
				}
				savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
				if ((savedRow && savedRow.length > 0)) {
					if (e.type=='blur'){
						if (e.type=='keydown'){				

						}else{
							if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
								var row = $(e.target).closest('tr.jqgrow');
								var tam = row.attr('id');
								ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
								var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));	
								SoThuocThucXuat_cachdung=$(e.target).val();	
								CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
								ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
								CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
								$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);										
								$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
							}	
						}
					}else{

					}
				}			
			}
		}]}},
		{name:'ThanhTien',index:'ThanhTien',width:"40%",align:'right',hidden:false,formatter:'number'
		, formatoptions:{decimalPlaces: 1}, editable: true
		,editoptions:{dataInit: function (elem) {
			number_textbox(('#'+elem.id))

		},
		dataEvents: [{ type: 'dblclick', fn: function(e) {
			ngaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			sl1ngay=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');

			

			SoThuocThucXuat=convert_comma_dot_cacl(sl1ngay)* ngaythuoc;

			$(e.target).val(Math.ceil(SoThuocThucXuat));					
		}},{ type: 'blur keydown', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){									
					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);	
						}
					}
				}
			}	
		}}]}},
		{name:'SoThuocduocXuat',index:'SoThuocduocXuat', width:"30%",align:'right',hidden:true,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
		{name:'CachDungLieuDung', index:'CachDungLieuDung',width:"50%",align:'right',hidden:false, editable: true
		,editoptions:{dataEvents: [{ type: 'keydown blur', fn: function(e) {
			if (jwerty.is('enter',e)){
				var row = $(e.target).closest('tr.jqgrow');
				var tam = row.attr('id');
				ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');
				var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));
				SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
				CachDungLieuDung_cachdung=$(e.target).val();
				ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
				CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
				$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);			
			}else{				
				if($("#rowed6").find('.jqgrid-new-row').length==true){ 
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));	
				}				
			}
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if ((savedRow && savedRow.length > 0)) {
				if (e.type=='blur'){
					if (e.type=='keydown'){				

					}else{
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 
							var row = $(e.target).closest('tr.jqgrow');
							var tam = row.attr('id');
							ID_Thuoc_cachdung=$('#rowed6').jqGrid('getCell', tam, 'ID_Thuoc');	
							var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));							
							SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
							CachDungLieuDung_cachdung=$(e.target).val();
							ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();	
							CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
							$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);										
							$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
						}	
					}
				}else{

				}
			}
		}}]}},
		{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"40%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Self", dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {		
				if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 	  
					$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
				}
			}	

		} }]}},
		{name:'CachDung',index:'CachDung',width:"350%",align:'left',hidden:false, editable: true,editoptions:{dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {		
				if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 	  
					$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
				}
			}	

		} }]}},
		],

		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellnotmove: 'CachDung',
		cellsubmit: 'remote',
		cell_move_enter:true,
		//resizeStop: fixPositionsOfFrozenDivs,
		afterEditCell: function (rowid, celname, value, iRow, iCol) {

		},	
		afterSubmitCell: function (serverresponse, rowid, cellname, value, iRow, iCol) {		
			if(serverresponse.responseText.split('|')[0]==0){
				return[true,'']
			}else{					
				$("#rowed6").jqGrid().trigger("reloadGrid");
				return[false,serverresponse.responseText.split('|')[1]]
			}
		},
		cellurl : 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&hienmaloi=1',
		column:["CachDungLieuDung"],
		func_column:["luoi_CachDungLieuDung"],	
		loadonce: true,
		local:true,
		scroll: false,		 
		cmTemplate: {sortable: false},
		modal:true,
		shrinkToFit: false,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed6',
		sortname: 'ID_LoaiKham',
		height:100,
		afterSaveCell : function ( rowid, cellname, value, iRow, iCol){	
			$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");	
			var rowData = $("#rowed3").getRowData(rowed3_select);
			$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_tienkham&ID_LuotKham='+rowData["ID_LuotKham"]).done(function(data){				
				$('#tongtien').html(data);
			})	
			return [true,'']
		},
		serializeCellData: function (postdata) { 			
			var rowData = $("#rowed6").getRowData( rowed6_select);
			var rowData1 = $('#rowed3').getRowData(id_rowed3_current);
			if(cell_rowed6!='ThanhTien'){
				postdata.ThanhTien=rowData['ThanhTien'];
			}
			if(cell_rowed6!='SoThuocThucXuat'){
				postdata.SoThuocThucXuat=rowData['SoThuocThucXuat'];
			}
			if(cell_rowed6!='ID_Thuoc'){
				postdata.ID_Thuoc=rowData['ID_Thuoc'];
			}
			if(cell_rowed6!='CachDungLieuDung'){
				postdata.CachDungLieuDung=rowData['CachDungLieuDung'];
			}
			if(cell_rowed6!='PhuongThucThucHien'){
				postdata.PhuongThucThucHien=rowData['PhuongThucThucHien'];
			}
			if(cell_rowed6!='ID_DuongDungThuoc'){
				postdata.ID_DuongDungThuoc=rowData['ID_DuongDungThuoc'];	
			}	
			if(cell_rowed6!='CachDung'){
				postdata.CachDung=rowData['CachDung'];	
			}		
			postdata.id_dvt=rowData['id_dvt'];
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];			
			postdata.isbhyt=rowData['isbhyt'];
			postdata.iddonthuocct=rowData['iddonthuocct'];			
			postdata.phantram=rowData1['phantram'];		
			postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_LuotKham'];
			postdata.rowdata='celldata';	
			return postdata;
		},	
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		grouping: true,
		afterInsertRow: function(rowid, aData){
		},
		pgbuttons: false, 
		pgtext: null, 
		serializeRowData: function (postdata) { 	
			var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
			var rowData = $("#rowed6").getRowData( rowed6_select);
			postdata.id_donthuoc=$("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))['ID_DonThuoc'];
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];
			postdata.isbhyt=rowData['isbhyt'];
			postdata.iddonthuocct=rowData['iddonthuocct'];			
			postdata.ds_tang =window.ds_tang;
			postdata.ID_LuotKham=$("#rowed3").getRowData(rowed3_select)['ID_LuotKham'];			
			postdata.id_donthuoc=$("#rowed3").getRowData(rowed3_select)['ID_DonThuoc'];
			postdata.id_benhnhan=window.id_benhnhan;
			postdata.khamchinh=$("#rowed3").getRowData( rowed3_select)['khamchinh'];
			postdata.id_kham=rowed3_select;
			postdata.id_kham=rowed3_select;
			postdata.phantram=rowData1['phantram'];	
			postdata.rowdata='rowdata';			
			return postdata;			
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {			
			var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			var rowData1 = $("#rowed6").getRowData( rowid);	
			var cm = $("#rowed6").jqGrid("getGridParam", "colModel");
			window.colName_rowed6 = cm[iCol].name;
			if((iCol==5)&&(rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&(user_login==rowData['BSChanDoan'])){
				$.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&id='+rowData1['iddonthuocct']+'&oper=del&ID_LuotKham='+$("#rowed3").getRowData(rowed3_select)['ID_LuotKham']).done(function(data){
					if($.trim(data).split('|')[0]==0){
						$('#rowed6').jqGrid('delRowData',rowid);
					}else{
						alert($.trim(data).split('|')[1]);
					}	   
				})
			}             
		}, 
		afterRestoreCell: function (rowid, value, iRow, iCol) {	
			if(iCol==6){
				$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+iRow+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");
			}
		},
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	
			window.cell_rowed6=celname;
			rowed6_select=rowid;
			if(iCol==6){
				var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;			
				$('#rowed6 #'+iRow+'_ID_Thuoc').hide(); 
				$('#rowed6 #'+iRow+'_ID_Thuoc').before( '<input id="'+iRow+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				create_combobox_inline('#'+iRow+'_ID_Thuoc1','#'+iRow+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+iRow+'_ID_Thuoc :selected').text());
				$('#'+iRow+'_ID_Thuoc1').keyup(function(e){					
					if (jwerty.is('enter',e)){
						var row = $('#'+iRow+'_ID_Thuoc').closest('tr.jqgrow');
						var tam = row.attr('id');
						ID_Thuoc_cachdung=$('#rowed6 #'+iRow+'_ID_Thuoc').val();
						var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
						SoThuocThucXuat_cachdung=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');	
						CachDungLieuDung_cachdung=$('#rowed6').jqGrid('getCell', tam, 'CachDungLieuDung');
						ID_DuongDungThuoc_cachdung=$('#rowed6 #'+tam+' td[aria-describedby="rowed6_ID_DuongDungThuoc"]').html();
						CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
						$("#rowed6").jqGrid('setCell', tam, 'CachDung', CachDungChiTiet);
						$('#rowed6').jqGrid("nextCell",iRow,iCol);
					}
				})		
				setTimeout(function(){
					$('#'+iRow+'_ID_Thuoc1').focus();
					$('#'+iRow+'_ID_Thuoc1').select();
				},10)
			}                  
		}, 
		onSelectRow: function(id){		
			$("#rowed6 #"+window.id_rowed6_delete).removeClass('ui-state-highlight')	
			is_rowed3select=0;
			$('#'+window.rowed6_select).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"});
			window.rowed6_select=id;
			savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");     
			if (savedRow && savedRow.length > 0) {					
				if(!isNaN(savedRow[0].id)){
					jQuery("#rowed6").jqGrid('restoreRow',savedRow[0].id);	
				}
				var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));				
				if((rowData['ID_trangthai']=='DangKham') &&(rowData['BSChanDoan']==user_login)){
					$("#prowed6 .ui-icon-pencil").click();	
				}				
			}else{
				var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));				
				if((rowData['ID_trangthai']=='DangKham') &&(rowData['BSChanDoan']==user_login)){
					$("#prowed6 .ui-icon-pencil").click();	
				}						
			}
			window.id_rowed6_delete=id
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
			$("#rowed6").jqGrid("destroyFrozenColumns")
			.jqGrid("setColProp", "CachDungLieuDung", { frozen: true })
			.jqGrid("setFrozenColumns")
			.trigger("reloadGrid", [{ current: true}]);
			$('#lui_rowed3').hide();
			$('body').unbind('click');
			var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			var ids = jQuery("#rowed6").jqGrid('getDataIDs');			
			if($("#rowed6").getGridParam("reccount")-($($("#rowed6").find('.jqgrid-new-row')).length)>0){
				rowdata6=$("#rowed6").getRowData(ids[0]);
				if (rowdata6['trangthaidonthuoc']=='Cancel'){	
					$('#gview_rowed6 .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('layhet').removeClass('laykhongdu').removeClass('tralai').addClass('kolaythuoc')
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(".ui-layout-east").width());
					$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 
				}
				else if (rowdata6['trangthaidonthuoc']=='FullNormal'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(".ui-layout-east").width());
					$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 
				}
				else if (rowdata6['trangthaidonthuoc']=='NotFull'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
					$("#rowed6").jqGrid('showCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(".ui-layout-east").width());
					$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 
				}
				else if (rowdata6['trangthaidonthuoc']=='Return'){
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(".ui-layout-east").width());
					$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 
				}
			}else{
				$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
				$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
				$("#rowed6").setGridWidth($(".ui-layout-east").width());
				$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 
			}
			for(var i=0;i < ids.length;i++){	
				var cl = ids[i];
				be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				jQuery("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
			}
			if((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DaThucHien') &&(rowData['BSChanDoan']==user_login)){
				$("#prowed6 .ui-icon-plus").click();
			}
		},
		caption: "<?php lang('dthuoc')?>",
		editurl:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&hienmaloi=1',
	});


$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: false,save:true,
	addParams: {
		keys:true,
		position: "last",
		addRowParams: {
			keys:true,   
			restoreAfterError : false,	               
			aftersavefunc: function(rowId, response,lastsel) {
				id_donthuoctrave=response.responseText.split('|');
				 
				$('#rowed6').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );				
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");
				$('#rowed6').focus();	
				var current_rowed6=$('#rowed6').jqGrid('getCell',rowId, 'ID_Thuoc')
				$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
				$("#" + rowId).attr("id",current_rowed6);
				$('#'+current_rowed6).removeClass("ui-state-highlight");						
				be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
				$("#rowed6").jqGrid('setRowData',current_rowed6,{xoa:be});
				setTimeout(function(){							
					$("#prowed6 .ui-icon-plus").click();	
					var ids = jQuery("#rowed6").jqGrid('getDataIDs');						 
					$('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();
					$("#rowed3 #"+id_rowed3_current).click();		
				},200);			
			},
			oneditfunc: function(rowId) {	

				window.id_rowed6_edit=rowId;		
				$('#'+rowId+'_CachDungLieuDung,#'+rowId+'_SoThuocThucXuat').keyup(function(event) {					
					ID_Thuoc_cachdung=$('#'+rowId+'_ID_Thuoc').val();		
					var a = id_datathuoc.indexOf(parseInt(ID_Thuoc_cachdung));		
					SoThuocThucXuat_cachdung=$('#'+rowId+'_SoThuocThucXuat').val();	
					CachDungLieuDung_cachdung=$('#'+rowId+'_CachDungLieuDung').val();
					ID_DuongDungThuoc_cachdung=$('#'+rowId+'_ID_DuongDungThuoc').find("option:selected").text();	
					CachDungChiTiet=PhienCachDungThuoc(parseFloat(SoThuocThucXuat_cachdung.replace(",", ".")),CachDungLieuDung_cachdung,grid_datathuoc.rows[a]['cell'][16],ID_DuongDungThuoc_cachdung);
					$('#'+rowId+'_CachDung').val($.trim(CachDungChiTiet));
				})	


				var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
				var with_idduongdung=parseFloat($('#jqgh_rowed6_ID_DuongDungThuoc').width())-32;
				$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
				$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				$('#'+rowId+'_ID_Thuoc1').click(function(e){
					setTimeout(function(){$('#'+rowId+'_ID_Thuoc1').focus();},100)
				})
				create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');
				$('#DM_thuoc').data('input_focus','#'+rowId+'_ID_Thuoc1');
				//if(is_rowed3select==0){
					setTimeout(function(){
						$('#'+rowId+'_ID_Thuoc1').focus();
						$('#'+rowId+'_ID_Thuoc1').select();

					},200)
					
				//}
				$("#rowed6").jqGrid('unbindKeys');	
				inline_enter(rowId)
			},	
			afterrestorefunc: function(rowId) {	
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
				$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
				$('body').unbind("click");					
				$('#rowed6').focus();						
			},
			errorfunc: function (rowId, response,lastsel) {
				alert(response.responseText);
				
			}			 
		}
	},	
	editParams: {
		keys:true,		
		restoreAfterError : false,	  	 
		aftersavefunc: function(rowId, response,lastsel) {
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");
			$('#rowed6').focus();	
			setTimeout(function(){
				$("#prowed6 .ui-icon-plus").click();
			},200);	
		},					 	
		oneditfunc: function(rowId) {					
			window.id_rowed6_edit=rowId;
			$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
			$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width: 82%;" role="textbox">' );   
			create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc :selected').text());
			$("#rowed6").jqGrid('unbindKeys');		
			inline_enter(rowId);
		},	
		afterrestorefunc: function(rowId) {	
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
			$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
			$('body').unbind("click");	
			$('#rowed6').focus();									   
		},	 
		errorfunc: function (rowId, response,lastsel) {
			alert(response.responseText);
			return false;
		}
	}
});           
} 

function check_product_available(mathuoc,tenthuoc,id_thuoc,tendonvitinh){	
	kiemtra=false;	
	id_rowed6=$('#rowed6').jqGrid('getDataIDs');		 
	for(i=0;i<id_rowed6.length;i++){		
		var rowData = $('#rowed6').getRowData(id_rowed6[i]);				 
		if(rowData['ID_Thuoc']==id_thuoc){
			tooltip_message(tenthuoc+" đã có trên đơn thuốc này");
			kiemtra=true;			 
		}			   
	}	 
	if(kiemtra==false){	 	 
		$("#"+rowed6_curentsel+"_ID_Thuoc").val(id_thuoc);
		$(".dialog_dm_thuoc").dialog( "close" );
	}	
}
var grid_click_status="";
function create_lichsu_khamlamsang(){	 
	$("#rowed3").jqGrid({
		datastr:{},
		datatype: "jsonstring",		 	
		colNames:['<?php lang('loaikhamba')?>',"<?php lang('bacsy')?>", "<?php lang('gio')?>", "<?php lang('ngay')?>", "<?php lang('nt')?>", "<?php lang('hthuoc')?>"
		, "ID_DonThuoc","ID_LuotKham","ID_trangthai","","","","","","","","","","","","","","","","","","","","",""],
		colModel:[
		{name:'ID_LoaiKham',index:'ID_LoaiKham',width:"30%",align:'left',hidden:false,edittype:"select",formatter: "select"	,editable:true,
		editoptions: { value:window.loaikham,dataEvents:  [{ type: 'change', fn: function(e) { 
			savedRow = $('#rowed3').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {			  
				$('#rowed3').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);	
						//$("#rowed3").jqGrid("setSelection",id_rowed3_current, true);		

					}					
				} }]}
			},	
			
			{name:'BSChanDoan',index:'BSChanDoan',width:"18%",align:'left',formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: window.nickname},editable:false},		   	 	 
			{name:'GioTao',index:'GioTao',width:"12%", align:'center',hidden:false,editable:false}, 
			{name:'NgayTao',index:'NgayTao', width:"20%",align:'center',hidden:false,editable:false},
			{name:'SoNgayThuoc',index:'SoNgayThuoc', width:"8%",align:'right',editable:true,
			editoptions: {
				dataInit: function (elem) {

					number_textbox(('#'+elem.id))
				},
				
				dataEvents:  [{ type: 'blur', fn: function(e) { 
					savedRow = $('#rowed3').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {			  
						$('#rowed3').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
					}	

				} }]}},		 
				{name:'NgayHetThuoc',index:'NgayHetThuoc',width:"20%",align:'center',hidden:false,editable:false},
				{name:'ID_DonThuoc',index:'ID_DonThuoc',width:"10%",align:'center',hidden:true,editable:false},
				{name:'ID_LuotKham',index:'ID_LuotKham',width:"8%",align:'center',hidden:true,editable:false},
				{name:'ID_trangthai',index:'ID_trangthai',width:"5%",align:'center',hidden:true,editable:false},
				{name:'ghichu',index:'ghichu',width:"5%",align:'center',hidden:true,editable:false},
				{name:'NoiDungTaiKham',index:'NoiDungTaiKham',width:"5%",align:'center',hidden:true,editable:false},
				{name:'NgayHenTaiKham',index:'NgayHenTaiKham',width:"5%",align:'center',hidden:true,editable:false},
				{name:'khamchinh',index:'khamchinh',width:"5%",align:'center',hidden:true,editable:false},		
				{name:'homnay',index:'homnay',width:"5%",align:'center',hidden:true,editable:false}	,
				{name:'luotkhamphu',index:'luotkhamphu',width:"5%",align:'center',hidden:true,editable:false}	,
				{name:'bschinh',index:'bschinh',width:"5%",align:'center',hidden:true,editable:false}	,
				{name:'donthuocchinh',index:'donthuocchinh',width:"5%",align:'center',hidden:true,editable:false},
				{name:'LayDauHieuSinhTon',index:'luotkhamphu',width:"5%",align:'center',hidden:true,editable:false}	,
				{name:'SanSangGoiVaoKham',index:'bschinh',width:"5%",align:'center',hidden:true,editable:false}	,
				{name:'dhsinhton',index:'donthuocchinh',width:"5%",align:'center',hidden:true,editable:false},	
				{name:'phantram',index:'phantram',width:"5%",align:'center',hidden:true,editable:false},	
				{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham',width:"5%",align:'center',hidden:true,editable:false},
				{name:'TrangThaiKham',index:'TrangThaiKham',width:"5%",align:'center',hidden:true,editable:false},
				{name:'NguoiThucHien',index:'NguoiThucHien',width:"5%",align:'center',hidden:true,editable:false},
				{name:'NickName_nguoithuchien',index:'NickName_nguoithuchien',width:"5%",align:'center',hidden:true,editable:false},			
				{name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',width:"5%",align:'center',hidden:true,editable:false},
				{name:'ID_LoaiBenhAnNoiTru',index:'ID_LoaiBenhAnNoiTru',width:"5%",align:'center',hidden:true,editable:false},
				{name:'FolderOpen',index:'FolderOpen',width:"5%",align:'center',hidden:true,editable:false},
				{name:'NgayTaoBenhAn',index:'NgayTaoBenhAn',width:"5%",align:'center',hidden:true,editable:false},
				{name:'ID_PhongBan',index:'ID_PhongBan',width:"5%",align:'center',hidden:true,editable:false}		 
				],
				loadonce: false,
				scroll: false,		 
				modal:true,		 
				footerrow: true,
				scrollrows : true,
				shrinkToFit: true,
				rowNum: 10000000,
				rowList:[],	
				sortname: 'ID_LoaiKham',
				height:100,
				width:100,
				viewrecords: true,	
				ignoreCase:true,	
				sortorder: "asc",
				cmTemplate: {sortable: false},
				afterSubmitCell : function (serverresponse, rowid, cellname, value, iRow, iCol){	
					var rowData = $("#rowed3").getRowData(rowid);			
					$("#rowed6").jqGrid().setGridParam({
						url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc="+rowData["ID_DonThuoc"]
						,loadonce: false
						,datatype: "json"}).trigger("reloadGrid");
					return [true,'']
				},	  
				pgbuttons: false, 
				pgtext: null, 		
				cellEdit: true,
				cellsubmit: 'remote',
				cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_ngaythuoc',
				onCellSelect: function (rowid,iCol,cellcontent,e) {			
					$("#rowed3").jqGrid("setSelection",rowid, true);		
					if(iCol==4){
						window.focus_ngaythuoc=1;
					}                  
				},
				serializeCellData: function (postdata) { 
					postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_LuotKham'];			
					postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc'];
					postdata.khamchinh=$("#rowed3").getRowData( rowed3_select)['khamchinh'];				
					postdata.id_benhnhan=window.id_benhnhan;
					return postdata;			
				},		
				onSelectRow: function(id){		



					$('#btn_chidinhkham,#btn_dieutriphoihop').button('enable')

					var rowData = $("#rowed3").getRowData(id);	
					window.hotrongonngu=rowData['NguoiThucHien'];
		 //update hotrongonngu
		 if(rowData['BSChanDoan']!=rowData['NguoiThucHien']){
		 	$('#hotrongonngu').html('Hỗ trợ NN: '+rowData['NickName_nguoithuchien']);
		 }else{
		 	$('#hotrongonngu').html('Hỗ trợ NN:');
		 }
		 

		 
		 
		 if($.trim(rowData['LoaiDoiTuongKham'])==''){rowData['LoaiDoiTuongKham']='Viện phí'};
		 $('#panel_doituong').text(rowData['LoaiDoiTuongKham']);

		 if(rowData['LoaiDoiTuongKham']=='BHYT'){
		 	if(rowData['TrangThaiKham']=='3'){$('#panel_trangthaiBHYT').text('Trái tuyến')};
		 	if(rowData['TrangThaiKham']=='1'){$('#panel_trangthaiBHYT').text('Đúng tuyến')};
		 	if(rowData['TrangThaiKham']=='4'){$('#panel_trangthaiBHYT').text('Cấp cứu')};
		 }else{
		 	$('#panel_trangthaiBHYT').text('');
		 }

		 
		 /* if(rowData['khamchinh']==0){
		 	$("#btn_xemtoa").button('disable');
		 	$("#btn_intoa").button('disable');			 
		 }else{
		 	$("#btn_xemtoa").button('enable');
		 	$("#btn_intoa").button('enable');
		 } */
		 is_rowed3select=1;								
		 id_rowed3_current=id;
		 window.n_idkham_=id;
		 $("#rowed3").find('.ui-state-hover').removeClass('ui-state-hover');
		 $("#rowed3").find('td.ui-state-highlight').removeClass('ui-state-highlight');
		 $("#rowed4").find('.ui-state-hover').removeClass('ui-state-hover');
		 $("#rowed4").find('td.ui-state-highlight').removeClass('ui-state-highlight');	
		 $("#rowed5").find('.ui-state-hover').removeClass('ui-state-hover');
		 $("#rowed5").find('td.ui-state-highlight').removeClass('ui-state-highlight');
		 $("#khamicd10").find('.ui-state-hover').removeClass('ui-state-hover');

		 $("#khamicd10").find('td.ui-state-highlight').removeClass('ui-state-highlight');				
		 var rowData = $("#rowed3").getRowData(id);	 

		 if((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){								
		 	$("#khamicd10").setColProp('maicd10', {editable: true});
		 	$("#rowed4").setColProp('MoTa', {editable: true});
		 	$("#rowed5").setColProp('ChanDoan', {editable: true});					 
		 	$("#rowed3").setColProp('SoNgayThuoc', {editable: true});
		 	$("#rowed3").setColProp('ID_LoaiKham', {editable: true});
		 	$("#rowed6").setColProp('ID_Thuoc', {editable: true});					
		 	$("#rowed6").setColProp('ID_DuongDungThuoc', {editable: true});
		 	$("#rowed6").setColProp('SoThuocThucXuat', {editable: true});
		 	$("#rowed6").setColProp('ThanhTien', {editable: true});
		 	$("#rowed6").setColProp('CachDungLieuDung', {editable: true});
		 	$("#rowed6").setColProp('PhuongThucThucHien', {editable: true});
		 }else{
		 	$("#khamicd10").setColProp('maicd10', {editable: false});
		 	$("#rowed6").setColProp('ID_Thuoc', {editable: false});				
		 	$("#rowed6").setColProp('ID_DuongDungThuoc', {editable: false});
		 	$("#rowed6").setColProp('SoThuocThucXuat', {editable: false});
		 	$("#rowed6").setColProp('ThanhTien', {editable: false});
		 	$("#rowed6").setColProp('CachDungLieuDung', {editable: false});
		 	$("#rowed6").setColProp('PhuongThucThucHien', {editable: false});
		 	$("#rowed4").setColProp('MoTa', {editable: false});
		 	$("#rowed5").setColProp('ChanDoan', {editable: false});
		 	$("#rowed3").setColProp('SoNgayThuoc', {editable: false});
		 	$("#rowed3").setColProp('ID_LoaiKham', {editable: false});
		 }
		 kiemtra_kham(rowData);

		 $("#ghichu").val(rowData["ghichu"]);
		 if($.trim(rowData["NgayHenTaiKham"])!=''){
		 	$("#taikham").prop("checked" ,true);				
		 }else{
		 	$("#taikham").prop("checked" ,false);

		 }
		 $("#ngaytaikham").val(rowData["NgayHenTaiKham"]);
		 $("#noidungtaikham").val(rowData["NoiDungTaiKham"]);
		 window.id_ttluotkham=rowData['ID_LuotKham']
		 if(rowed3_select!=id){			
			   //console.log('bbb');
			   $('#lui_rowed3').show();
			   $("#rowed6").jqGrid().setGridParam({
			   	url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc="+rowData["ID_DonThuoc"]
			   	,loadonce: false
			   	,datatype: "json"}).trigger("reloadGrid");
			}else{
				
				if(($($("#rowed6").find('.jqgrid-new-row')).length==false)&&(rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
					savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {			  
						$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);	
						$("#rowed6").find('.ui-state-hover').removeClass('ui-state-hover');
						$("#rowed6").find('td.ui-state-highlight').removeClass('ui-state-highlight');					
					}
					$("#prowed6 .ui-icon-plus").click();	
				}
			}
			
			

			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chung&ID_LuotKham='+rowData["ID_LuotKham"]).done(function(data){
				jQuery("#rowed_icd10_nhieu").jqGrid('setGridParam', {
                url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd10_luotkham&id_luotkham=' +
                  rowData['ID_LuotKham'],
                datatype: 'json'
              }).trigger('reloadGrid');
				data=data.split('|||');				
				datacls=$.parseJSON(data[1]);
				datadtph=$.parseJSON(data[0]);
				$('#tongtien').html(data[3]);
				$(".canlamsang_luotkham").html("");	
				var tam1_cls="",tam_cls="";
				$.each( datacls, function( key, val ) {		 
					for(i=0;i<val.length;i++){
						var tam1_cls=val[i]["cell"];  						
						if((tam1_cls[2]=='3913')||(tam1_cls[2]=='4496')||(tam1_cls[2]=='4591')){
							tam1_cls[1]='kham_phu_khoa';
						}else if((tam1_cls[2]=='34')||(tam1_cls[2]=='4379')){
							tam1_cls[1]='kham_thai';	
						}else if(tam1_cls[2]==4556||tam1_cls[2]==4383||tam1_cls[2]==6750||tam1_cls[2]==9835){
							tam1_cls[1]='kham_suc_khoe_tong_quat';
						}
						else if(tam1_cls[2]==6872 || tam1_cls[2]==6873){
							tam1_cls[1]='kham_tuvantiemchung';
						}else if(tam1_cls[2]==38){
							tam1_cls[1]='sieu_am_4d';
						}
						$(".canlamsang_luotkham").html($(".canlamsang_luotkham").html()+ '<div id="cls_'+val[i]["id"]+'" class="'+tam1_cls[3]+'" lang="'+tam1_cls[1]+'"><span class="topcls"></span><span class="bottomcls">'+tam1_cls[0]+'</span></div>');
						var topcls=$(".canlamsang_luotkham div").height() - $('#cls_'+val[i]["id"]+' span.bottomcls').height();
						$('#cls_'+val[i]["id"]+' span.topcls').css("height",topcls/2+"px");
					}				 				
					$(".canlamsang_luotkham div").click(function(e) {
						parent.postMessage('canlamsang;'+$(this).attr("lang")+';'+window.id_benhnhan+';'+$('#panel_tenbn').text()+';'+$(this).attr("id").split('_')[1], "*");
					});					 
				});				
				$(".thongtin_dieutri").html('')
				var tam1_cls="";tam_cls=""; 
				$.each( datadtph, function( key, val ) {				 
					for(i=0;i<val.length;i++){
						var tam1_cls=val[i]["cell"];
						tam_cls+= '<div id="'+tam1_cls[0]+'">' +tam1_cls[1]+ '</div>';
					}
				});

				$(".thongtin_dieutri").html(tam_cls);
				$('.ui-jqgrid-sdiv td[aria-describedby="rowed3_ID_LoaiKham"]').html(data[2]);
			})		
			window.rowed3_select=id	;
			// GET quota by luot kham
			getquota_luotkham(rowData['ID_LuotKham']);
		},
		onRightClickRow: function(rowid, iRow, iCol, e) {			
			$("#rowed3").find('.ui-state-hover').removeClass('ui-state-hover');
			$("#rowed3").find('td.ui-state-highlight').removeClass('ui-state-highlight');
			if ($("#menu").width() + e.pageX > $(document).width()) {
				$("#menu").css('left', e.pageX - $("#menu").width() + "px");
			} else {
				$("#menu").css('left', e.pageX + "px");
			}
			if ($("#menu").height() + e.pageY > $(document).height()) {
				$("#menu").css('top', e.pageY - $("#menu").height() + "px");
			} else {
				$("#menu").css('top', e.pageY + "px");
			}
			var rowData = $("#rowed3").getRowData(rowid);			
			if((rowData['luotkhamphu']>1)&&((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangSua'))){
				if((rowData['khamchinh']==1)&&((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangSua'))){
					$('.chuyenthanhbschinh a').css({'color': '#CCC'});	
					$('.chuyenbschinh a').css({'color': '#CCC'});	
					$('.saothuoctoaphu a').css({'color': '#000'});						
				}else if(((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangSua'))&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){						
					$('.chuyenthanhbschinh a').css({'color': '#000'});	
					$('.chuyenbschinh a').css({'color': '#CCC'});	
					$('.saothuoctoaphu a').css({'color': '#CCC'});					
				}else if (((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangSua'))&&(user_login==rowData['bschinh'])&&(IsDoctor==1)){
					$('.chuyenthanhbschinh a').css({'color': '#CCC'});	
					$('.chuyenbschinh a').css({'color': '#000'});	
					$('.saothuoctoaphu a').css({'color': '#CCC'});						
				}
			}else{
				if(rowData['luotkhamphu']==1){
					$('.chuyenthanhbschinh a').css({'color': '#000'});	
					$('.chuyenbschinh a').css({'color': '#CCC'});	
					$('.saothuoctoaphu a').css({'color': '#CCC'});
				}else{
					$('.chuyenthanhbschinh a').css({'color': '#CCC'});	
					$('.chuyenbschinh a').css({'color': '#CCC'});	
					$('.saothuoctoaphu a').css({'color': '#CCC'});
				}					
			}
			window.rowed3_right=rowid;    
			$("#menu").show(100);

		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {						
		},
		loadComplete: function(data) {	
			
			if($("#rowed3").getGridParam("reccount")==0){	
				
				$('#btn_chidinhkham,#btn_dieutriphoihop').button('disable')
			}


			$('#rowed3').jqGrid("setCell", id_khamsua, "ID_trangthai",'DangSua' );
			if(reload_status==1 && $("#rowed3").getGridParam("reccount")>0){							
				var ids = $("#rowed3").getDataIDs();
				if(window.bd==1){											
					$("#rowed3 #"+ids[(ids.length-1)]).click();	
					$("#rowed3 #"+ids[(ids.length-1)]).focus();						
				}else{
					if(window.id_luotkham!=0){	
						flag_focus=0;
						focus_tam=0;					
						for(i=0;i<ids.length;i++){
							rowData = $("#rowed3").getRowData(ids[i]);								
							if((rowData['ID_LuotKham']==window.id_luotkham)){
								focus_tam=ids[i];
								if(user_login==rowData['BSChanDoan']){
									$("#rowed3 #"+ids[i]).click();	
									$("#rowed3 #"+ids[i]).focus();
									flag_focus=1;

									break;
								}
							}
						}		
						if(flag_focus==0){
							$("#rowed3 #"+ids[(ids.length-1)]).click();	
							$("#rowed3 #"+ids[(ids.length-1)]).focus();
						}
					}else{
						$("#rowed3 #"+ids[(ids.length-1)]).click();	
						$("#rowed3 #"+ids[(ids.length-1)]).focus();	
					}
				}

			}else if(reload_status>1 && $("#rowed3").getGridParam("reccount")>0){				
				$("#rowed3").jqGrid("setSelection",$.trim(window.id_rowed3_current), true);						
			} 


			window.reload_status++;
			var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
			var noitru =0;
			for(var i=0;i < tmp1.length;i++){
				var rowData = $("#rowed3").getRowData(tmp1[i]);	
				if($.trim(rowData["ID_BenhAnNoiTru"])!=''){
					noitru=noitru+1;
			   // $("#rowed3"+' #'+tmp1[i]).css("background", "#FF0");
			   $("#rowed3").jqGrid('setCell',tmp1[i],"ID_LoaiKham","",{'background-color':'yellow'});
			}
			
			if(rowData["homnay"]==1){
				$("#rowed3").jqGrid('setRowData', tmp1[i], false, { color: 'red',border:'1px solid #BBBBBB' });
			}
			if(rowData["khamchinh"]==3 || rowData["khamchinh"]==1){
				jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'BSChanDoan', '', {'font-weight': 'bold'});
			}
			if(rowData["LoaiDoiTuongKham"]=='BHYT'){
				jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'BSChanDoan', '', {'font-style': 'italic'});
			}
			if(i==tmp1.length-1){				
				if(noitru>0){
					$("#btn_benhannoitru span").html('<?php lang('banoitru')?> '+noitru)
				}
			}
		}
	},	  
	caption: "<?php lang('khamlamsang')?> <span></span>"
});		   
$("#rowed3").jqGrid('unbindKeys');
$('.ui-jqgrid-sdiv td[aria-describedby="rowed3_BSChanDoan"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_GioTao"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_NgayTao"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_SoNgayThuoc"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_NgayHetThuoc"]').remove();	
	//if(window.user_login==178){
		var _buton_xemtoaphu=''
		if(permission['btn_xemtoaphu']==1){
			_buton_xemtoaphu='<button type="button" id="xemtoaphu">Toa phụ</button>';
		}
		_buton_cptoathuoc='<button type="button" id="cptoathuoc">Tìm kiếm</button>';
		//$("#gview_rowed3 .ui-jqgrid-titlebar").append('&nbsp&nbsp&nbsp&nbsp<button type="button" id="hotrongonngu">Hỗ trợ NN:</button>'+_buton_xemtoaphu+' '+_buton_cptoathuoc);
		$('#hotrongonngu').click(function(){
			$("#dialog_hotrongonngu").dialog('open');
			setval_new('#input_hotrongonngu',window.hotrongonngu);
		});
		$('#cptoathuoc').click(function(){			
			
			elem=42432543543;		
			dialog_main("" , 95, 98, elem, "pages.php?module=lamsang&view=lich_su_dung_thuoc&header=top&id_form=10&id_benhnhan="+window.id_benhnhan)
			$(".frame_42432543543").css("width","99%");
			$(".frame_42432543543").css("display","block");
			$(".frame_42432543543").css("margin","0 auto");
		})
		
		$('#xemtoaphu').click(function(){	
			var rowData = $("#rowed3").getRowData(rowed3_select);		
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc_a4&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InKhoA4DenTrang');
		})
	//}
} 
function create_lichsu_dienbienbenh(){	 
	$("#rowed4").jqGrid({
		datastr:{},
		datatype: "jsonstring",		 	
		colNames:['<?php lang('dbbenh')?>'],
		colModel:[
		{name:'MoTa',index:'MoTa',width:"100%",align:'left',hidden:false,editable:true,edittype:'textarea',
		editoptions: { dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {			  
				$('#rowed4').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
			}	

		} }]}},         		                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
		scrollrows : true,
		shrinkToFit: true,
		rowNum: 10000000,
		rowList:[],
		pager: '#prowed4',
		sortname: 'MaBenhNhan',
		height:95,
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
		grouping: true,
		forceFit : true,
		cmTemplate: {sortable: false},
		enter_cell:false,
		cellEdit: true,
		cellsubmit: 'remote',
		cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_mota',
		
		pgbuttons: false, 
		pgtext: null, 
		serializeRowData: function (postdata) {		
			return	postdata				
		},
		onSelectRow: function(id){	
			
	/*	var ids = jQuery("#rowed3").jqGrid('getDataIDs');
			
				var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
		
				if((rowData['ID_trangthai']=='DangKham')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){				
					 $("#rowed4").setColProp('MoTa', {editable: true});
					 $("#rowed5").setColProp('ChanDoan', {editable: true});					 
					 $("#rowed3").setColProp('SoNgayThuoc', {editable: true});
					 $("#rowed3").setColProp('ID_LoaiKham', {editable: true});
				}else{
					$("#rowed4").setColProp('MoTa', {editable: false});
					$("#rowed5").setColProp('ChanDoan', {editable: false});
					$("#rowed3").setColProp('SoNgayThuoc', {editable: false});
					$("#rowed3").setColProp('ID_LoaiKham', {editable: false});
				}
				*/

			/*	if((rowData['ID_trangthai']=='DangKham')){
					savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");   					
					if(window.focus_ngaythuoc==0){
					$('#rowed4').jqGrid("editCell",(ids.indexOf(id)+1),0,true);
					}
					window.focus_ngaythuoc=0;
				}else{
					savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {			  
						$('#rowed4').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
					}					
				}*/
				


			/*setTimeout(function(){
				if(grid_click_status=="rowed4"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed5",id);
				}
			
		
			},300);	*/		
		},
		onCellSelect: function (rowid,iCol,cellcontent,e) {
			$("#rowed4").jqGrid("setSelection",rowid, true);				
		}, 
		ondblClickRow: function (rowId, rowIndex, columnIndex) {			
		},
		loadComplete: function(data) {
			/* if(($("#rowed4").jqGrid('getGridParam', 'records')!=0)&&(reload_status==1)){
				  jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop($("#rowed4").height());
				var ids = $("#rowed4").getDataIDs();
				$("#rowed4").jqGrid("setSelection",ids[(ids.length-1)], true);				  
			  }
			  if(window.bd==1){				 
					var ids = jQuery("#rowed3").jqGrid('getDataIDs');				
					var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
					var idr4= $("#rowed4").jqGrid('getGridParam', 'selrow');		  
					/*if((rowData['ID_trangthai']=='DangKham')){
						savedRow = $('#rowed4').jqGrid("getGridParam", "savedRow");   	
						$('#rowed4').jqGrid("editCell",(ids.indexOf(idr4)+1),0,true);
					}
				}*/
				if(reload_status==1 && $("#rowed3").getGridParam("reccount")>0){							
					var ids = $("#rowed3").getDataIDs();
					//$("#rowed4").jqGrid("setSelection",ids[(ids.length-1)], true);	
					if(window.bd==1){											
						$("#rowed4 #"+ids[(ids.length-1)]).click();	
						$("#rowed4 #"+ids[(ids.length-1)]).focus();						
					}else{
						if(window.id_luotkham!=0){	
							flag_focus=0;
							focus_tam=0;					
							for(i=0;i<ids.length;i++){
								rowData = $("#rowed3").getRowData(ids[i]);								
								if((rowData['ID_LuotKham']==window.id_luotkham)){
									focus_tam=ids[i];
									if(user_login==rowData['BSChanDoan']){
										$("#rowed4 #"+ids[i]).click();	
										$("#rowed4 #"+ids[i]).focus();
										flag_focus=1;										
										break;
									}
								}
							}		
							if(flag_focus==0){
								$("#rowed4 #"+focus_tam).click();	
								$("#rowed4 #"+focus_tam).focus();
							}
						}else{
							$("#rowed4 #"+ids[(ids.length-1)]).click();	
							$("#rowed4 #"+ids[(ids.length-1)]).focus();	
						}
					}
					
				}else if(reload_status>1 && $("#rowed4").getGridParam("reccount")>0){

					$("#rowed4").jqGrid("setSelection",$.trim(window.id_rowed3_current), true);
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).focus();		
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).click();	

				}
				
				//window.reload_status++;
			},
		});

} 

function create_lichsu_chandoan(){	 
	var searhicon = '<span class="ui-state-highlight ui-state-hover" style="border:0"><span class="ui-icon ui-icon-search" style="float: left; margin-right: .3em;"></span></span>';

	$("#rowed5").jqGrid({
		datastr:{},
		datatype: "jsonstring",		 	
		colNames:['Chấn đoán',''],
		colModel:[			
		{name:'ChanDoan',index:'ChanDoan',width:"90%",align:'left',hidden:false,editable:true,edittype:'textarea',
		editoptions: { dataEvents:  [{ type: 'blur', fn: function(e) { 
			savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");					 
			if (savedRow && savedRow.length > 0) {			  
				$('#rowed5').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
			}	

		} }]}},  
		{name:'sear',index:'sear',width:"10%",align:'left',hidden:false,editable:false,formatter: function (cellValue, options, rowObject) {                    
			return searhicon
		},
	},       		                            
	],
	loadonce: false,
	scroll: false,		 
	scrollrows : true,
	modal:true,
	shrinkToFit: true,
	cmTemplate: {sortable: false},
	rowNum: 10000000,
	rowList:[],
	pager: '#prowed5',
	sortname: 'MaBenhNhan',
	height:95,
	width:100,
	viewrecords: false,	
	ignoreCase:true,	
	sortorder: "asc",
	forceFit : true,
	cellEdit: true,
	cellsubmit: 'remote',
	cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_chuandoan',
	enter_cell:false,
	grouping: true,
	pgbuttons: false,
	pgtext: null,
	serializeRowData: function (postdata) { 
		return	postdata			 
	},
	onCellSelect: function (rowid,iCol,cellcontent,e) {
		
		if($("#rowed3").jqGrid('getGridParam', 'selrow')==rowid){
			if(iCol==1){
				var rowData = $("#rowed3").getRowData($("#rowed3").jqGrid('getGridParam', 'selrow'));		
				if((rowData['ID_trangthai']=='DangKham')&&(user_login=rowData['BSChanDoan'])&&(IsDoctor==1)){
					$('.chandoanmau').dialog('open')
				}
			}
		}           
		$("#rowed5").jqGrid("setSelection",rowid, true);  
		window.idrd5=rowid; 
		var ids = jQuery("#rowed3").jqGrid('getDataIDs');
		var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');
			//$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
		},
		onSelectRow: function(id){	
			

			/*		var rowData = $("#rowed3").getRowData(id);	
				if((rowData['ID_trangthai']=='DangKham')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){				
					 $("#rowed4").setColProp('MoTa', {editable: true});
					 $("#rowed5").setColProp('ChanDoan', {editable: true});					 
					 $("#rowed3").setColProp('SoNgayThuoc', {editable: true});
					 $("#rowed3").setColProp('ID_LoaiKham', {editable: true});
				}else{
					$("#rowed4").setColProp('MoTa', {editable: false});
					$("#rowed5").setColProp('ChanDoan', {editable: false});
					$("#rowed3").setColProp('SoNgayThuoc', {editable: false});
					$("#rowed3").setColProp('ID_LoaiKham', {editable: false});
				}*/
			/*setTimeout(function(){
				if(grid_click_status=="rowed5"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed4",id);
				}
			},300);		*/				
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {
		  	  /*if(($("#rowed5").jqGrid('getGridParam', 'records')!=0)&&(reload_status==1)){
				jQuery("#rowed5").closest(".ui-jqgrid-bdiv").scrollTop($("#rowed5").height());
				var ids = $("#rowed5").getDataIDs();
				$("#rowed5").jqGrid("setSelection",ids[(ids.length-1)], true);
				  
			}*/
			if(reload_status==1 && $("#rowed3").getGridParam("reccount")>0){							
				var ids = $("#rowed3").getDataIDs();
					//$("#rowed5").jqGrid("setSelection",ids[(ids.length-1)], true);	
					if(window.bd==1){											
						$("#rowed5 #"+ids[(ids.length-1)]).click();	
						$("#rowed5 #"+ids[(ids.length-1)]).focus();						
					}else{
						if(window.id_luotkham!=0){	
							flag_focus=0;
							focus_tam=0;					
							for(i=0;i<ids.length;i++){
								rowData = $("#rowed3").getRowData(ids[i]);								
								if((rowData['ID_LuotKham']==window.id_luotkham)){
									focus_tam=ids[i];
									if(user_login==rowData['BSChanDoan']){
										$("#rowed5 #"+ids[i]).click();	
										$("#rowed5 #"+ids[i]).focus();
										flag_focus=1;										
										break;
									}
								}
							}		
							if(flag_focus==0){
								$("#rowed5 #"+focus_tam).click();	
								$("#rowed5 #"+focus_tam).focus();
							}
						}else{
							$("#rowed5 #"+ids[(ids.length-1)]).click();	
							$("#rowed5 #"+ids[(ids.length-1)]).focus();	
						}
					}
					
				}else if(reload_status>1 && $("#rowed5").getGridParam("reccount")>0){

					$("#rowed5").jqGrid("setSelection",$.trim(window.id_rowed3_current), true);
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).focus();		
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).click();	

				}
				
			},
		});

} 




function create_toamau(elem,datalocal){	
	datalocal=jQuery.parseJSON(datalocal);	 
	$(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Tên đơn thuốc', 'Tên người tạo','Tên nhóm bệnh'],
		colModel:[			
		{name:'TenBietDuoc',index:'TenBietDuoc'}, 
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},					 
		{name:'MaThuoc',index:'MaThuoc'},	 	

		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],
		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},		
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			if($(elem).data('clicked')){
				window.saotaophu=1;
				$('#thuocmau').setGridParam({datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuocmau&id_donthuoc='+id+'&ngaythuoc='+$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc')}).trigger("reloadGrid");	
			}
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {		
		},	  
		
	});	
	$(elem).jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$(elem).jqGrid('bindKeys', {} );

} 

function create_thuocmau(elem){	
	datalocal=[];
	$(elem).jqGrid({
		data:datalocal,
		datatype: "local",	
		colNames:['Tên đơn thuốc', 'Tên người tạo','','','','','',''],
		colModel:[			
		{name:'TenBietDuoc',index:'TenBietDuoc'}, 
		{name:'TenNhomThuoc',index:'TenNhomThuoc'},
		{name:'CachDungLieuDung',index:'CachDungLieuDung'},	 
		{name:'PhuongThucThucHien',index:'PhuongThucThucHien'},	
		{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc'},	
		{name:'SoThuocDeNghiTheoDon',index:'SoThuocDeNghiTheoDon'},	
		{name:'TenGoc',index:'TenGoc'},	
		{name:'CachDung',index:'CachDung'},	
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200,
		rowList:[],

		height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){	

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

		},
		loadComplete: function(data) {	
			
			if(window.saotaophu==1){
				saotoathuoc();
				window.saotaophu=0;	
			}
			
		},	  
		
	});	

} 


function resize_control(){	 
	$("#rowed3").setGridWidth($(".ui-layout-west").width());
	$("#rowed3").setGridHeight($(".ui-layout-west").height()-110);
	$("#rowed4").setGridWidth($(".ui-layout-center .ui-layout-north").width());
	$("#rowed4").setGridHeight($(".ui-layout-center .ui-layout-north").height()-25); 
	$("#rowed5").setGridWidth($(".ui-layout-center .ui-layout-center").width());
	$("#rowed5").setGridHeight($(".ui-layout-center .ui-layout-center").height()-25); 
	$("#khamicd10").setGridWidth($(".ui-layout-center .ui-layout-south").width());
	$("#khamicd10").setGridHeight($(".ui-layout-center .ui-layout-south").height()-45); 
	$("#rowed6").setGridWidth($(".ui-layout-east").width());
	$("#rowed6").setGridHeight($(".ui-layout-east").height()-300); 

} 
function render_name(cellValue, opts, rowObject) {         
	var tam1;
	nickname1 = window.nickname.split(";");
	for (i = 0; i <= nickname1.length - 1; i++) {
		temp = nickname1[i].split(":");
		if (temp[1] == cellValue) {
			tam1 = temp[0];
			break;
		}
	}
	return tam1;
} 
function render_loaikham(cellValue, opts, rowObject) {         
	var tam1;
	nickname1 = window.loaikham.split(";");
	for (i = 0; i <= nickname1.length - 1; i++) {
		temp = nickname1[i].split(":");
		if (temp[1] == cellValue) {
			tam1 = temp[0];
			break;
		}
	}
	return tam1;
} 

function currency_convert (cellvalue, options, rowObject)
{
	return parseFloat(convert_comma_dot_cacl(cellvalue)).formatMoney(1, ',', '.');
} 


function batdau(){
	
	
	$("#btn_batdau").click(function(){
		$('#btn_batdau').button('disable');	
		setTimeout(function(){
			window.bd=1;
				hienthongbao("Đang xử lý...");
			if(batdau_status==2){
				$.ajax({
					type: 'POST',
					async : false,
					url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&hienmaloi=1&action=controler&id_benhnhan='+window.id_benhnhan,
					success: function(data, status, xhr) {
						hienthongbao("");
						window.id_rowed3_current=data;			
						window.batdau_luotkham=1;			
						laydulieu_khamlamsang();
						window.batdau_status=1;			
					},
				});
					// $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&hienmaloi=1&action=controler&id_benhnhan='+window.id_benhnhan).done(function(data){			
						// window.id_rowed3_current=data;			
						// window.batdau_luotkham=1;			
						// laydulieu_khamlamsang();
						// window.batdau_status=1;				
					// });
				}else{
					$.ajax({
						type: 'POST',
						async : false,
						url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controler&hienmaloi=1&id_kham='+id_rowed3_current+'&ID_LuotKham='+$('#rowed3').jqGrid('getCell', id_rowed3_current, 'ID_LuotKham'),
						success: function(data, status, xhr) {
							hienthongbao("");
							$('#btn_lammoi').trigger('click');	
						},
					});
					//$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controler&hienmaloi=1&id_kham='+id_rowed3_current+'&ID_LuotKham='+$('#rowed3').jqGrid('getCell', id_rowed3_current, 'ID_LuotKham')).done(function(data){	
					//	$('#btn_lammoi').trigger('click');			
					//});
				}
			},200)			
	});
}


function canlamsang(){
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_canlamsang&idbenhnhan="+window.id_benhnhan, 
		function( data ) {
			var tam1_cls="",tam_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					var tam1_cls=val[i]["cell"];
					tam_cls+= '<div id="'+val[i]["id"]+'">'+tam1_cls[0]+" ("+tam1_cls[1]+ ")<br \> " +tam1_cls[2]+'</div>';
				}
				$(".canlamsang").html(tam_cls);
				$(".canlamsang div").click(function(e) {
					parent.postMessage('canlamsang;'+$(this).attr("id")+';'+window.id_benhnhan+';'+$('.profile_outer:first').text()+';0', "*");
				});

			});
		});
}


function  lamsang(){
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lamsang&idbenhnhan="+window.id_benhnhan, 
		function( data ) {
			var tam1_cls="",tam_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				tam_cls+= '<div id="ls_'+val[i]["id"]+'" class="'+tam1_cls[5]+'">'+tam1_cls[0]+" ("+tam1_cls[1]+ ")<br \> " +tam1_cls[2]+'</div>';
			}
			$(".lamsang").html(tam_cls);
			$(".lamsang div").click(function(e) {
				parent.postMessage('canlamsang;'+$(this).attr("class")+';'+window.id_benhnhan+';'+$('#panel_tenbn').text()+';0', "*");
			});
			
		});
		});	
	
}

function lammoi(){
	$('#btn_lammoi').click(function(){		
		window.scrollPositiontop = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
		window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();			
		//canlamsang();
		//lamsang();		
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham&id_benhnhan='+window.id_benhnhan).done(function(data){					
			window.batdau_status=data;	
			if(data==2){
				$('#btn_batdau').button('enable');	
			}else{
						//$('#btn_batdau').button('disable');	
					}
				})
		laydulieu_khamlamsang();
	})
}



function lammoi_click(){

	window.scrollPositiontop = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
	window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();				
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thongtinluotkham&id_benhnhan='+window.id_benhnhan).done(function(data){					
		window.batdau_status=data;	
		if(data==2){
			$('#btn_batdau').button('enable');	
		}else{
						//$('#btn_batdau').button('disable');	
					}
				})
	laydulieu_khamlamsang();
	
}
function create_combobox_inline_icd10(input,input1,dialog,grid,defaultvalue){				
	afterInit_combox_inline(input,dialog,grid,input1);
	init_combox_inline_icd10(input,input1,dialog,grid,defaultvalue);					
}

function create_combobox_inline(input,input1,dialog,grid,defaultvalue){				
	afterInit_combox_inline(input,dialog,grid,input1);
	init_combox_inline(input,input1,dialog,grid,defaultvalue);					
}	

function init_combox_inline(input,input1,dialog,grid,defaultvalue){    
	jwerty.key('tab', false);

	if (typeof defaultvalue != 'undefined'){
		$(input).val(defaultvalue);	
			//$(input1).val(defaultvalue);
		}
		$(input).bind("click",function(event) {	
			event.stopPropagation();
		});
		$(grid).bind("click",function(event) {	
			$(input).focus();
			$(input).select();
		});




		$('body').bind("click",function(event) {
	//alert(input1);
	if($(dialog).is(":visible")===true){		
		create_combobox_close_inline(input,dialog,input1,grid)
	}
});


		$(dialog+' .ui-jqgrid-hbox').click(function(event) {
			event.stopPropagation();
		});


		$(input+','+dialog+' .ui-jqgrid-hbox').bind("keyup", function(e) { 
			var key = e.which;
			if(jwerty.is("enter",e)||jwerty.is("tab",e)){		
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					var idcur = $(grid).jqGrid('getGridParam', 'selrow');
					$(grid).jqGrid("setSelection",idcur, true);

					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("esc",e)){
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("↓",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow');
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	
				}else{
					if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
					}else{
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
						if (idcur == null) return;
						var ids = $(grid).getDataIDs();
						var index = $(grid).getInd(idcur);
						if (ids.length < 2) return;
						index++;
						if (index > ids.length)
							index = 1;
						$(grid).jqGrid("setSelection",ids[index - 1], true);
					}
				}

			}
			else if(jwerty.is("↑",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	}
					else{
						if(idcur==null){
							var ids = $(grid).getDataIDs();
							$(grid).jqGrid("setSelection",ids[0], true);
						}else{

							var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
							if (idcur == null) return;
							var ids = $(grid).getDataIDs();
							var index = $(grid).getInd(idcur);
							if (ids.length < 2) return;
							index--;
							if (index == 0){
								index = ids.length;
							}
							$(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
				}
				else{
					$(grid).data('clicked', false);
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){				
						create_combobox_open(input,dialog);
						grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"bw",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])					
						$(grid).jqGrid("setSelection",grid.getDataIDs()[0], true);				
					}
				}
			});	

	}


	function afterInit_combox_inline(input,dialog,grid,input1) { 
		$(input).wrap( "<span class='custom-combobox'></span>" );
		var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
			icons: {
				primary: "ui-icon-triangle-1-s"
			},
			text: false
		}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right "+input.substr(1)+"_button").click(function(event) {
			$(input).focus();	
			$(input).select();	
			if($(dialog).is(":visible")===true){				
				create_combobox_close_inline(input,dialog,input1,grid)				
			}else{				
				create_combobox_open(input,dialog);
				event.stopImmediatePropagation();				
				grid = $(grid);
				var columnNames = $(grid).jqGrid('getGridParam','colModel');
				grid[0].p.search = false;
				$.extend(grid[0].p.postData,{filters:""});							      
				grid.trigger("reloadGrid",[{current:true}]);						
			}
		});
	}	 

	function create_combobox_close_inline(input,dialog,input1,grid){
		$(dialog).hide();
		count = jQuery(grid).jqGrid('getGridParam', 'records');				
		if((count<=0)||($.trim($(grid).jqGrid('getGridParam', 'selrow'))=='')){

			$(input).val("");		
			$(input1).val(" ");				
		}				
		else{					
			var ids = $(grid).getDataIDs();
			var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
			var columnNames = $(grid).jqGrid('getGridParam','colModel');
			ten = $(grid).jqGrid('getCell', idcur, columnNames[0].name);										
			$(input1).val(idcur);			
			$(input).val(ten);	
		}					
	}	 
	
	
	
	function create_Dm_thuoc_grid(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['<?php lang('tenthuoc')?>', 'Hoạt chất','Tên biệt dược', 'Tên nhóm thuốc','','','','bhyt','bhytnt','bhytnt','Hãng sản xuất','Nước sản xuất','','','','','TenDonViTinh','SL tồn kho'],
			colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc', searchoptions: { sopt: ['cn'] }},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},
			
			{name:'ID_dvt',index:'ID_dvt',hidden :true},	
			{name:'LaThuoc',index:'LaThuoc',hidden :true},	 	 
			{name:'bhyt',index:'bhyt',hidden :true},
			{name:'bhytnt',index:'bhytnt',hidden :true},
			{name:'giabhyt',index:'bhytnt',hidden :true},
			
			{name:'TenNhaSanXuat',index:'TenNhaSanXuat',hidden :false},
			{name:'TenDayDu',index:'TenDayDu',hidden :false},
			{name:'HideVienPhi',index:'HideVienPhi',hidden :false,hidden :true},
			{name:'HideBHYT',index:'HideBHYT',hidden :false,hidden :true},
			{name:'HideBHYT_traituyen',index:'HideBHYT_traituyen',hidden :false,hidden :true},
			
			{name:'HideBHYT_dungtuyen',index:'HideBHYT_dungtuyen',hidden :false,hidden :true},
			{name:'TenDonViTinh',index:'TenDonViTinh',hidden :false,hidden :true},
			{name:'SoLuongTon',index:'SoLuongTon',hidden :false,align:'left'},
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scrollrows : true,
			scroll: false,		 
			modal:true,	 
			rowNum: 200,
			rowList:[],
			pager: '#prowed_DM_thuoc',
			sortname: 'ID_Thuoc',
			height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
			width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
			viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},		
			sortorder: "desc",
			serializeRowData: function (postdata) { 
			},
			onSelectRow: function(id){	
				$("#rowed6").jqGrid('getGridParam', 'selrow');
				var rowData = $(elem).getRowData(id);		
				var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
				var duongdung_tam=rowData['ID_DuongDung'].split(',');
				ppth=2		

				for (i=0;i<duongdung_chia.length;i++){
					dd_tam=duongdung_chia[i].split(':');

					if(dd_tam[0]==duongdung_tam[0]){			
						if((dd_tam[1].split(' ')[0]=='Tiêm')||(dd_tam[1].split(' ')[0]=='Truyền')){					
							ppth=0
						}else{
							ppth=2
						}
						break;
					}

				}


				if(rowData['DonGia']<1){
					
					window.n_chuacogiaban=1;							
					$('#rowed6').jqGrid("setCell", rowed6_select, "id_dvt",rowData['ID_dvt'] );
					$('#rowed6').jqGrid("setCell", rowed6_select, "lavattu",rowData['LaThuoc'] );

					if($.trim(rowData1['LoaiDoiTuongKham'])=="BHYT"){

						if(rowData1['ID_LoaiKham']==5892){
							if(rowData['bhyt']==1){					   
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['giabhyt'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",1 );					
							}else{
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
							}
						}else{
							if(rowData['bhytnt']==0 && rowData['bhyt']==1){
								
								if	(rowData['HideBHYT_traituyen']==1 && rowData1['TrangThaiKham']==3)	{
									$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
								}else{
									$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['giabhyt'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",1 );
								}

							}else{
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
							}
						}
					}else{
						$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );	
						$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
					}
					if($($("#rowed6").find('.jqgrid-new-row')).length==true){

						$('#rowed6 #'+rowed6_select+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
						$('#rowed6 #'+rowed6_select+'_PhuongThucThucHien').val(ppth);

					}else{

						$('#rowed6').jqGrid("setCell", rowed6_select, "ID_DuongDungThuoc",duongdung_tam[0] );
						$('#rowed6').jqGrid("setCell", rowed6_select, "PhuongThucThucHien",ppth);
					}								
				}else{
					$('#rowed6').jqGrid("setCell", rowed6_select, "id_dvt",rowData['ID_dvt'] );
					$('#rowed6').jqGrid("setCell", rowed6_select, "lavattu",rowData['LaThuoc'] );
					if($.trim(rowData1['LoaiDoiTuongKham'])=="BHYT"){
						
						if(rowData1['ID_LoaiKham']==5892){
							if(rowData['bhyt']==1){					   
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['giabhyt'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",1 );					
							}else{
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
							}
						}else{
							if(rowData['bhytnt']==0 && rowData['bhyt']==1){					   
								if	(rowData['HideBHYT_traituyen']==1 && rowData1['TrangThaiKham']==3)	{
									$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
								}else{
									$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['giabhyt'] );	
									$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",1 );
								}				
							}else{
								$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
								$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );
							}
						}
					}else{
						$('#rowed6').jqGrid("setCell", rowed6_select, "isbhyt",0 );	
						$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
					}


					if($('#rowed6 .jqgrid-new-row').length==true){
						$('#rowed6 #'+rowed6_select+'_ID_DuongDungThuoc').val(duongdung_tam[0]);	
						$('#rowed6 #'+rowed6_select+'_PhuongThucThucHien').val(ppth);							
					}else{						

						$('#rowed6').jqGrid("setCell", rowed6_select, "ID_DuongDungThuoc",duongdung_tam[0] );
						$('#rowed6').jqGrid("setCell", rowed6_select, "PhuongThucThucHien",ppth);
					}									
					window.n_chuacogiaban=0;
				}						
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {				
			},
			loadComplete: function(data) {				
				ids_DM_thuoc=$('#DM_thuoc').jqGrid('getDataIDs');	

				if(typeof id_rowed3_current != 'undefined'){
					var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
				}
				for(i=0;i<=ids_DM_thuoc.length;i++){
					var rowData = $('#DM_thuoc').getRowData(ids_DM_thuoc[i]);	
					if(typeof id_rowed3_current != 'undefined'){
						if(rowData1['LoaiDoiTuongKham']=='BHYT'){
							if(rowData['HideBHYT']==1){
								$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).hide();	
							}else{
								$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).show();	
								if(rowData1['TrangThaiKham']==3){								

								}else{
									if(rowData['HideBHYT_dungtuyen']==1){									
										$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).hide();	
									}else{
										$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).show();	
									}
								}
							}


						}else{
							if(rowData['HideVienPhi']==1){
								$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).hide();	
							}else{
								$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).show();	
							}
						}
					}

					if(rowData['bhyt']==1){						
						if(rowData['bhytnt']==1){					   
							$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).css("background", "#CF6");						
						}else{
					  // if(rowData['HideBHYT_traituyen']==1){									
									//$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).hide();	
					//	}else{
						$("#DM_thuoc"+' #'+ids_DM_thuoc[i]).css("background", "#0F9");	
					//	}

				}
			}
		}
	},	  		
});	
$("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
$("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
$("#DM_thuoc").jqGrid('bindKeys', {} );		
} 	

function inline_enter(rowid){	
	//alert(rowid+'_ID_Thuoc1')	
	$('#'+rowid+'_SoThuocThucXuat').blur(function (){				
		aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');				
		tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+rowid+'_SoThuocThucXuat').val()));				
		$('#rowed6 #'+rowid+'_ThanhTien').val(tongcong_thuoc);

	});
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').unbind('keydown')
	number_textbox_demical('#'+rowid+'_SoThuocThucXuat');
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').bind('keydown',function(e){
		if ((jwerty.is('enter',e))||(jwerty.is('tab',e))){
			if($('#rowed6 #'+rowid+'_ID_Thuoc1').is(":focus")){
				if($('.dialog_dm_thuoc').is(":visible")===true){
					$('#DM_thuoc').data('clicked', true);
					var idcur = $('#DM_thuoc').jqGrid('getGridParam', 'selrow');
					$('#DM_thuoc').jqGrid("setSelection",idcur, true);		

					create_combobox_close_inline('#rowed6 #'+rowid+'_ID_Thuoc1','.dialog_dm_thuoc','#rowed6 #'+rowid+'_ID_Thuoc','#DM_thuoc');
				}				
				ids_rowed6=$('#rowed6').jqGrid('getDataIDs');	
				if($.trim($('#rowed6 #'+rowid+'_ID_Thuoc').val())==''){
					alert('Vui lòng chọn thuốc');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').val('');
					$('#rowed6 #'+rowid+'_ID_Thuoc1').focus();
				}else{
					/* if(window.n_chuacogiaban==1){
						setTimeout(function(){
							$( "#dialog-thuochuacogiaban" ).dialog('open');
						},100);	
						delete window.n_chuacogiaban;
					} */


					setTimeout(function(){
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').focus();
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').select();
					},50);	

					
						//nam thêm bắt sự kiện thuốc chưa có giá bán
						

					}
					
				}			

				if($('#rowed6 #'+rowid+'_ID_DuongDungThuoc').is(":focus")){

					setTimeout(function(){
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').focus();
						$('#rowed6 #'+rowid+'_SoThuocThucXuat').select();
					},50);			
				}
				if($('#rowed6 #'+rowid+'_SoThuocThucXuat').is(":focus")){
					if(window.thieuthuoc==0){
						setTimeout(function(){
							$('#rowed6 #'+rowid+'_ThanhTien').focus();
							$('#rowed6 #'+rowid+'_ThanhTien').select();
						},50);	
					}
				}
				if($('#rowed6 #'+rowid+'_ThanhTien').is(":focus")){

					setTimeout(function(){
						$('#rowed6 #'+rowid+'_CachDungLieuDung').focus();
						$('#rowed6 #'+rowid+'_CachDungLieuDung').select();
					},50);			
				}
				if($('#rowed6 #'+rowid+'_CachDungLieuDung').is(":focus")){

					if (jwerty.is('enter',e)){
					//if(window.user_login='178'){
						$('body').addClass('bongmo');
					//}
					$('#rowed6 .jqgrid-new-row').length ? oper="add" : oper="edit";
					savedRow2 = $('#rowed6').jqGrid("getGridParam", "savedRow");
					jQuery("#rowed6").jqGrid('saveRow',savedRow2[0].id,null,null,{"extraparam" : {"oper":oper} }, aftersave,null,null,null,"POST");
				}		
			}

		}		
	})
						setTimeout(function(){
							var id_r = $('#rowed6').jqGrid('getGridParam', 'selrow');
		//alert("#"+id_r+"_CachDungLieuDung");
		$("#"+id_r+"_CachDungLieuDung").focusout(function(){
			if($("#"+id_r+"_CachDungLieuDung").val()==''){
				$("#"+id_r+"_CachDungLieuDung").val('');
			}
		});
	},100);	
}
function btn_luu(){
	$('#btn_luu').bind('click',function(e){

		if(window.TienSuNguoiThan==$('#gia_dinh').val() && window.TienSu==$('#benh_nhan').val() && window.DiUng==$('#di_ung').val()){
			thaydoi_tiensu=0;
		}else{
			thaydoi_tiensu=1;
		}
		
		
		rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
		datatosend='{"TienSuNguoiThan":'+JSON.stringify($('#gia_dinh').val());
		datatosend+=',"TienSu":'+JSON.stringify($('#benh_nhan').val());
		datatosend+=',"DiUng":'+JSON.stringify($('#di_ung').val());
		datatosend+=',"ghichu":'+JSON.stringify($('#ghichu').val());
		datatosend+=',"thaydoi_tiensu":'+JSON.stringify(thaydoi_tiensu);
		datatosend+=',"ID_BenhNhan":'+JSON.stringify(window.id_benhnhan);
		datatosend+=',"ID_TienSuBenh":'+JSON.stringify(window.id_tiensubenh);
		datatosend+=',"ID_Donthuoc":'+JSON.stringify(rowData['ID_DonThuoc']);
		datatosend+=',"ID_LuotKham":'+JSON.stringify(rowData['ID_LuotKham']);
		if($('#taikham').is(':checked')){
			datatosend+=',"ngaytaikham":'+JSON.stringify($('#ngaytaikham').val());
			datatosend+=',"noidungtaikham":'+JSON.stringify($('#noidungtaikham').val());
		}else{
			datatosend+=',"ngaytaikham":""';
			datatosend+=',"noidungtaikham":""';
		}
		datatosend+='}';
		//console.log(datatosend);
		datatosend=$.parseJSON(datatosend);		
		savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");					 
		if (savedRow && savedRow.length > 0) {			  
			$('#rowed5').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
		}
		savedRow1 = $('#rowed4').jqGrid("getGridParam", "savedRow");					 
		if (savedRow1 && savedRow1.length > 0) {			  
			$('#rowed4').jqGrid("saveCell", savedRow1[0].id, savedRow1[0].ic);						
		}

		savedRow2 = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
		if (savedRow2 && savedRow2.length > 0) {		
			if($('#'+savedRow2[0].id+'_ID_Thuoc1').val()!=''){  
				$('#rowed6 .jqgrid-new-row').length ? oper="add" : oper="edit";			
				jQuery("#rowed6").jqGrid('saveRow',savedRow2[0].id,null,null,{"extraparam" : {"oper":oper} }, aftersave,null,null,null,"POST");	  
			}
		}
		hienthongbao("Đang lưu...");
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_luu&hienmaloi=1',datatosend).done(function(data){
			hienthongbao("");
			$('#btn_lammoi').click();
		})
	})
}



function chidinhkham(){
	$('#btn_chidinhkham').click(function(){
		parent.postMessage("chidinhkham;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
	})	
}
function dieutriphoihop(){
	$('#btn_dieutriphoihop').click(function(){
		parent.postMessage("dieutriphoihop;"+window.id_ttluotkham+";"+$('.profile_outer:first').text()+";"+window.id_benhnhan, "*");
	})
}
function check_idthuoc(value,colname){	

		//idrowed6=$('#rowed6').jqGrid('getGridParam','selrow')
		ids_rowed6=$('#rowed6').jqGrid('getDataIDs');		
		ids_rowed6=removeA(ids_rowed6, $('#rowed6 [editable=1]').attr('id'));
		
		if($.inArray(value, ids_rowed6) > -1){			 
			return [false,'Thuốc đã có','ID_Thuoc1']
		}else if($.trim(value)==''){
			return [false,'Chưa chọn thuốc','ID_Thuoc1']
		}else{
			return[true,'']
		}

	}


	function create_chuandoan(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['<?php lang('tenthuoc')?>', 'Hoạt chất','Tên biệt dược'],
			colModel:[			
			{name:'ID_LoaiKham',index:'ID_LoaiKham',width:"12%",align:'left',hidden:false,formatter:render_loaikham,editable:false},	
			{name:'BSChanDoan',index:'BSChanDoan',width:"18%",align:'left',formatter:render_name,editable:false},		   	 	 
			{name:'GioTao',index:'GioTao',width:"10%", align:'center',hidden:false,editable:false}, 
			{name:'NgayTao',index:'NgayTao', width:"10%",align:'center',hidden:false,editable:false},
			{name:'SoNgayThuoc',index:'SoNgayThuoc', width:"10%",align:'right',editable:true},		 
			{name:'NgayHetThuoc',index:'NgayHetThuoc',width:"10%",align:'center',hidden:false,editable:false},
			{name:'ID_DonThuoc',index:'ID_DonThuoc',width:"10%",align:'center',hidden:true,editable:false},
			{name:'ID_LuotKham',index:'ID_LuotKham',width:"10%",align:'center',hidden:true,editable:false},
			{name:'ID_trangthai',index:'ID_trangthai',width:"10%",align:'center',hidden:true,editable:false}	 	

			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: true,		 
			modal:true,	 
			rowNum: 10000,
			rowList:[],

			pager: '#prowed_DM_thuoc',
			sortname: 'ID_Thuoc',
			height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
			width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
			viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},

			sortorder: "desc",
			serializeRowData: function (postdata) { 					
			},
			onSelectRow: function(id){							
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {
				
			},
			loadComplete: function(data) {	

			},	  

		});	

		
	} 	



	function create_chuandoanmau(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['Tên chẩn đoán', 'Tên quốc tế',''],
			colModel:[			
			{name:'tenchandoan',index:'tenchandoan',width:"45%",align:'left',hidden:false},	
			{name:'tenquocte',index:'tenquocte',width:"45%",align:'left'},		
			{name:'ispopular',index:'ispopular',width:"18%",align:'left',hidden:true}, 		
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: true,		 
			modal:true,	 
			rowNum: 200,
			rowList:[],
			pager: '#prowed_DM_thuoc',
			sortname: 'ID_Thuoc',		
			height:$('#tabs-2').height() -50,
			width: $('#tabs-2').width() -50,
			viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},

			sortorder: "desc",
			serializeRowData: function (postdata) { 					
			},
			onSelectRow: function(id){							
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {
				var ids = jQuery("#rowed3").jqGrid('getDataIDs');
				var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');			
				var rowData = jQuery(elem).jqGrid ('getRowData', id);			
				var rowData2 = jQuery("#rowed5").jqGrid ('getRowData', idr5);			
				if(rowData2['ChanDoan']==''){
					$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rowData['tenchandoan'] );
				}else{
					var rs= rowData2['ChanDoan']+'\n'+rowData['tenchandoan'];
					$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rs );
				}
				$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
				var thought = jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val();
				jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val(thought+' ');
				$('#rowed5').jqGrid("saveCell",(ids.indexOf(idr5)+1),0,true);

				$(".ui-dialog-titlebar-close").click();
			},
			loadComplete: function(data) {	

			},	  

		});	

		
	} 


	function create_chuandoan(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['Tên chẩn đoán', 'tên quốc tế',''],
			colModel:[			
			{name:'tenchandoan',index:'tenchandoan',width:"45%",align:'left',hidden:false},	
			{name:'tenquocte',index:'tenquocte',width:"45%",align:'left'},		
			{name:'ispopular',index:'ispopular',width:"18%",align:'left',hidden:true}, 		
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: true,		 
			modal:true,	 
			rowNum: 200,
			rowList:[],
			pager: '#prowed_DM_thuoc',
			sortname: 'ID_Thuoc',		
			height:$('#tabs-2').height() -50,
			width: $('#tabs-2').width() -50,
			viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},		
			sortorder: "desc",
			serializeRowData: function (postdata) { 					
			},
			onSelectRow: function(id){							
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {				
			},
			loadComplete: function(data) {			
			},  

		});	
	} 

	function create_lschuandoan(){	
		$('#lichsuchandoan').jqGrid({
			url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lichsuchandoan&idbenhnhan='+window.id_benhnhan,
			datatype: "json", 
			colNames:['chẩn đoán', 'Tên Bác sĩ','Ngày giờ'],
			colModel:[			
			{name:'chandoan',index:'chandoan',width:"45%",align:'left',hidden:false},	
			{name:'bacsy',index:'bacsy',width:"30%",align:'left'},		
			{name:'ngaygio',index:'ngaygio',width:"15%",align:'left'}, 		
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: true,		 
			modal:true,	 
			rowNum: 200,
			rowList:[],	
			height:$('#tabs-2').height() -50,
			width: $('#tabs-2').width() -50,
			viewrecords: true,	
			ignoreCase:true,
			shrinkToFit:true,
			cmTemplate: {sortable:false},		
			sortorder: "desc",
			serializeRowData: function (postdata) { 					
			},
			onSelectRow: function(id){							
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {			
				var ids = jQuery("#rowed3").jqGrid('getDataIDs');
				var idr5= $("#rowed5").jqGrid('getGridParam', 'selrow');			
				var rowData = jQuery("#lichsuchandoan").jqGrid ('getRowData', id);			
				var rowData2 = jQuery("#rowed5").jqGrid ('getRowData', idr5);			
				if(rowData2['ChanDoan']==''){
					$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rowData['chandoan'] );
				}else{
					var rs= rowData2['ChanDoan']+'\n'+rowData['chandoan'];
					$('#rowed5').jqGrid("setCell", $("#rowed5").jqGrid('getGridParam', 'selrow'), "ChanDoan",rs );
				}
				$('#rowed5').jqGrid("editCell",(ids.indexOf(idr5)+1),0,true);
				var thought = jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val();
				jQuery("textarea#"+(ids.indexOf(idr5)+1)+"_ChanDoan").val(thought+' ');
				$('#rowed5').jqGrid("saveCell",(ids.indexOf(idr5)+1),0,true);			
				$(".ui-dialog-titlebar-close").click();
			},
			loadComplete: function(data) {	

			},  

		});	
	} 


function create_icd10_nhapnhieu(elem, datalocal) {
  datalocal = jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr: datalocal,
    datatype: "jsonstring",
    colNames: ['<?php lang('ma')?>', '<?php lang('icd10')?>'],
    colModel: [{
        name: 'CICD10',
        index: 'CICD10',
        sortable: false
      },
      {
        name: 'VVIET',
        index: 'VVIET',
        sortable: false
      },
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal: true,
    rowNum: 50,
    rowList: [],
    height: 200,
    width: 400,
    viewrecords: false,
    ignoreCase: true,
    shrinkToFit: true,
    cmTemplate: {
      sortable: false
    },
    sortorder: "desc",
    serializeRowData: function(postdata) {

    },
    onSelectRow: function(id) {
      var rowData = $(elem).getRowData(id);
      rowData2 = $("#rowed3").getRowData($("#rowed3").jqGrid('getGridParam', 'selrow'));
      window.id_luotkham_icd10 = rowData2['ID_LuotKham'];
      window.ma_icd10_check = rowData['CICD10'];

      $('#rowed_icd10_nhieu').jqGrid("setCell", $("#rowed_icd10_nhieu").jqGrid('getGridParam', 'selrow'),
        "NoiDungICD10", rowData['VVIET']);
      $('#rowed_icd10_nhieu').jqGrid("setCell", $("#rowed_icd10_nhieu").jqGrid('getGridParam', 'selrow'),
        "nguoinhap", '<?php echo $_SESSION['user']['nickname']?>');
      var id_row = jQuery("#rowed_icd10_nhieu").getGridParam('selrow');
      $('#' + id_row + '_MaICD10').val(rowData['CICD10']);
    },
    ondblClickRow: function(id, rowIndex, columnIndex) {},
    loadComplete: function(data) {},
  });
  $(elem).jqGrid('filterToolbar', {
    searchOperators: false,
    searchOnEnter: false,
    defaultSearch: "cn"
  });
  $(elem).jqGrid('bindKeys', {});
}


	function create_icd10(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		$(elem).jqGrid({
			datastr:datalocal,	
			datatype: "jsonstring" ,
			colNames:['<?php lang('ma')?>', '<?php lang('icd10')?>'],
			colModel:[			
			{name:'CICD10',index:'CICD10',sortable: false}, 
			{name:'VVIET',index:'VVIET',sortable: false}
			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: false,
			modal: true,
			rowNum: 50,
			rowList: [],
			height: 200,
			width: 400,

			viewrecords: false,	
			ignoreCase:true,
			shrinkToFit: true,
			cmTemplate: {sortable: false},
			sortorder: "desc",
			serializeRowData: function (postdata) { 	 			
			},
			onSelectRow: function(id){	
				dataFromTheRow = jQuery(this).jqGrid ('getRowData', id);
				$("#khamicd10").jqGrid('setCell',window.n_icd10_rowid,'vviet', dataFromTheRow['VVIET']);	
				if($.trim($('#rowed5').jqGrid('getCell',window.n_icd10_rowid, 'ChanDoan'))==''){
					$("#rowed5").jqGrid('setCell',window.n_icd10_rowid,'ChanDoan', dataFromTheRow['VVIET']);
				}
				if($(elem).data('clicked')){
					savedRow = $('#khamicd10').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {	
						setTimeout(function(){		  
							$('#khamicd10').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
						},100)
					}		
					$('#dm_khamicd10').data('clicked', false);
				}
			},
			ondblClickRow: function (id, rowIndex, columnIndex) {				
			},
			loadComplete: function(data) {				
			},	  		
		});					 
		$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$(elem).jqGrid('bindKeys', {} );
		
	} 	

	function create_khamicd10(){	 
		$("#khamicd10").jqGrid({
			datastr:{},
			datatype: "jsonstring",		 		 	
			colNames:['<?php lang('ma')?>','<?php lang('icd10')?>'],
			colModel:[
			{name:'maicd10',index:'maicd10',width:"30%",
			editoptions: { dataEvents:  [{ type: 'blur', fn: function(e) { 
				savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");					 
				if (savedRow && savedRow.length > 0) {			  
					$('#rowed5').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
				}	

			} }]}},
			/*{name:'maicd10',index:'maicd10',width:"30%",
			editoptions: { dataEvents:  [{ type: 'blur', fn: function(e) { 
					savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {			  
						$('#rowed5').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
					}	
						
				} }]}}, */
				{name:'vviet',index:'vviet',width:"70%"},        		                            
				],
				loadonce: false,
				scroll: false,		 
				scrollrows : true,
				modal:true,
				shrinkToFit: true,
				rowNum: 1000000000,
				rowList:[],
				viewrecords: false,	
				ignoreCase:true,		
				cellEdit: true,
				cmTemplate: {sortable: false},
				cellsubmit: 'remote',
				cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_icd10',
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
        serializeRowData: function (postdata) { 
        	return	postdata	 
        },
        serializeCellData: function (postdata) { 			
        	var rowData = $("#khamicd10").getRowData(n_icd10_rowid);			
        	postdata.vviet=rowData['vviet'];		
        	return postdata;
        },	
        onSelectRow: function(id){	

        }, 
        afterEditCell: function (rowid, celname, value, iRow, iCol) {	

        	window.cell_khamicd10=celname;
        	khamicd10_select=rowid;
        	window.n_icd10_rowid=rowid;	
		//$("#"+iRow+"_"+name,"#rowed6").bind('blur',function(){
			 // $('#rowed6').saveCell(iRow,iCol);
			//});     
			if(iCol==0){		
				setTimeout(function(){			
					var with_icd10=parseFloat($('#jqgh_khamicd10_maicd10').width())-32;			
					$('#khamicd10 #'+iRow+'_maicd10').hide(); 
					$('#khamicd10 #'+iRow+'_maicd10').before( '<input id="'+iRow+'_maicd101" class="editable" type="text" name="maicd101" style="width:'+with_icd10+'px" role="textbox">' );   
					create_combobox_inline_icd10('#'+iRow+'_maicd101','#'+iRow+'_maicd10','.dialog_dm_khamicd10','#dm_khamicd10',$('#khamicd10 #'+iRow+'_maicd10').val());

					$('#'+iRow+'_maicd101').keyup(function(e){					
						if (jwerty.is('enter',e)){
							$('#khamicd10').jqGrid("nextCell",iRow,iCol);
						}
					})		
					setTimeout(function(){
						$('#'+iRow+'_maicd101').focus();
						$('#'+iRow+'_maicd101').select();
					},10)
				},300)
				}                  
			},
			ondblClickRow: function (rowId, rowIndex, columnIndex) {

			},
			loadComplete: function(data) {
				if(reload_status==1 && $("#khamicd10").getGridParam("reccount")>0){							
					var ids = $("#khamicd10").getDataIDs();
					
					if(window.bd==1){											
						$("#khamicd10 #"+ids[(ids.length-1)]).click();	
						$("#khamicd10 #"+ids[(ids.length-1)]).focus();						
					}else{
						if(window.id_luotkham!=0){	
							flag_focus=0;
							focus_tam=0;					
							for(i=0;i<ids.length;i++){
								rowData = $("#rowed3").getRowData(ids[i]);								
								if((rowData['ID_LuotKham']==window.id_luotkham)){
									focus_tam=ids[i];
									if(user_login==rowData['BSChanDoan']){
										$("#khamicd10 #"+ids[i]).click();	
										$("#khamicd10 #"+ids[i]).focus();
										flag_focus=1;										
										break;
									}
								}
							}		
							if(flag_focus==0){
								$("#khamicd10 #"+focus_tam).click();	
								$("#khamicd10 #"+focus_tam).focus();
							}
						}else{
							$("#khamicd10 #"+ids[(ids.length-1)]).click();	
							$("#khamicd10 #"+ids[(ids.length-1)]).focus();	
						}
					}
					
				}else if(reload_status>1 && $("#khamicd10").getGridParam("reccount")>0){

					$("#khamicd10").jqGrid("setSelection",$.trim(window.id_rowed3_current), true);
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).focus();		
					//$("#rowed3 #"+$.trim(window.id_rowed3_current)).click();	

				}
			}
		});

				$("#khamicd10").jqGrid('navGrid',"#pkhamicd10",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
				$("#khamicd10").jqGrid('inlineNav', '#pkhamicd10', {add: true, addtext: '', edittext: '', edit: false,save:true,
					addParams: {
						keys:true,
						position: "last",
						addRowParams: {
							keys:true,                  
							aftersavefunc: function(rowId, response,lastsel) {
						//$('#khamicd10').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );
						
						//if($.trim(id_donthuoctrave[0])!=''){
						//$('#rowed3').jqGrid("setCell", rowed3_select, "ID_DonThuoc",$.trim(id_donthuoctrave[0]) );
						//}
						$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");

						$('#khamicd10').focus();	
						
						var current_rowed6=$('#khamicd10').jqGrid('getCell',rowId, '_maicd10')
						$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
						$("#" + rowId).attr("id",current_rowed6);
						$('#'+current_rowed6).removeClass("ui-state-highlight");						
						be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
						$("#khamicd10").jqGrid('setRowData',current_rowed6,{xoa:be});
						setTimeout(function(){							
							$("#pkhamicd10 .ui-icon-plus").click();	
							var ids = jQuery("#khamicd10").jqGrid('getDataIDs');	
						   $('#'+ids[ids.length-1]+'_maicd101').focus();	 //nam them khi enter tao dòng mới focus vào combo thuốc

						   $("#khamicd10 #"+id_rowed3_current).click();		
						},200);

						//$('#'+rowId+'_ID_Thuoc1').focus();
						//var slton=response.split(';');
						
					},
					oneditfunc: function(rowId) {	
						window.id_rowed6_edit=rowId;					
						$('#khamicd10 #'+rowId+'_maicd10').hide(); 
						$('#khamicd10 #'+rowId+'_maicd10').before( '<input id="'+rowId+'_maicd101" class="editable" type="text" name="maicd10" style="" role="textbox">' );   

						$('#'+rowId+'_maicd101').click(function(e){
							setTimeout(function(){$('#'+rowId+'_maicd101').focus();},100)
							
						})
						create_combobox_inline_icd10('#'+rowId+'_maicd101','#'+rowId+'_maicd10','.dialog_dm_khamicd10','#dm_khamicd10');
						$('#dm_khamicd10').data('input_focus','#'+rowId+'_maicd101');
						
						if(is_rowed3select==0){
							$('#'+rowId+'_maicd101').focus();
							$('#'+rowId+'_maicd101').select();
						}
						
						$("#khamicd10").jqGrid('unbindKeys');	
						
						inline_enter(rowId)
					},	
					afterrestorefunc: function(rowId) {	
						$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");					
						$('#khamicd10').focus();						
					}				 
				}
			},	
			editParams: {
				keys:true,				 
				aftersavefunc: function(rowId, response,lastsel) {
					$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");

					$('#khamicd10').focus();	
					setTimeout(function(){
						$("#pkhamicd10 .ui-icon-plus").click();

					},200);	

			},					 	
			oneditfunc: function(rowId) {					

				$('#khamicd10 #'+rowId+'_maicd10').hide(); 
				$('#khamicd10 #'+rowId+'_maicd10').before( '<input id="'+rowId+'_maicd101" class="editable" type="text" name="maicd10" style="width: 82%;" role="textbox">' );   
				create_combobox_inline_icd10('#'+iRow+'_maicd101','#'+iRow+'_maicd10','.dialog_dm_khamicd10','#dm_khamicd10',$('#khamicd10 #'+iRow+'_maicd10').val());

				$("#khamicd10").jqGrid('unbindKeys');		
					//	inline_enter(rowId);

				},	
				afterrestorefunc: function(rowId) {	
					$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_maicd101,.dialog_dm_khamicd10 .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");	
					$('#khamicd10').focus();									   
				},	 
			}
		});    

} 

function check_soluong(){
	var id_row = $('#rowed6').jqGrid('getGridParam', 'selrow');	
	aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
	tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()));
	$('#'+id_row+'_ID_Thuoc').val();
	if(parseFloat(convert_comma_dot_cacl($('#rowed6 #'+id_row+'_SoThuocThucXuat').val()))<=0){
		alert('Số thuốc phải lớn hơn 0');
		setTimeout(function(){$('#rowed6 #'+id_row+'_SoThuocThucXuat').focus();},50)
	}else{
	 /*$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc_soluong&ds_kho='+ds_kho+'&soluong='+tongcong_thuoc+'&id_thuoc='+$('#'+id_row+'_ID_Thuoc').val()).done(function(data){
		data=data.split(';;');		
		if(data[1]==0){		
			window.thieuthuoc=1;
			$('#dialog_sothuoc').html(data[0]);		
			$('#dialog_sothuoc #tenthuocton').html('<strong>'+$('#'+id_row+'_ID_Thuoc1').val()+'</strong>')			
			$('#dialog_sothuoc').dialog('open');	
			$('.n_btn1').focus()
				
		}else{*/
			$('#'+id_row+'_ThanhTien').focus();
		/*}
	})	*/	
}
}



function right_menu(){	
	$('.chuyenthanhbschinh').click(function(){
		rowData = $("#rowed3").getRowData( rowed3_select);		
		if(id_admin==1){
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				$('#btn_lammoi').click();
			})
		}else{
			if ((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&((user_login==rowData['bschinh'])||(user_login==rowData['BSChanDoan']))&&(IsDoctor==1)&&(rowData['luotkhamphu']>1)){
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
					$('#btn_lammoi').click();
				})
			}else{
				if(rowData['luotkhamphu']==1){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
						$('#btn_lammoi').click();
					})
				}
			}
		}		
	})
	$('.chuyenbschinh').click(function(){		
		rowData = $("#rowed3").getRowData( rowed3_select);
		if ((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&((user_login==rowData['bschinh'])||(user_login==rowData['BSChanDoan']))&&(IsDoctor==1)&&(rowData['luotkhamphu']>1)){			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				$('#btn_lammoi').click();
			})
		}
	})
	$('.saotoathuoc').click(function(){
		rowData = $("#rowed3").getRowData( rowed3_select)
		$('#thuocmau').setGridParam({datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_saothuoc&id_donthuoc='+rowData['ID_DonThuoc']}).trigger("reloadGrid");
	})

	$('.saothuoctoaphu').click(function(){
		rowData = $("#rowed3").getRowData( rowed3_select)
		if(id_admin==1){
			window.saotaophu=1;	
			$('#thuocmau').setGridParam({datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_saothuoc&id_luotkham='+rowData['ID_LuotKham']}).trigger("reloadGrid");
		}else{
			if ((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&((user_login==rowData['bschinh']))&&(IsDoctor==1)&&(rowData['luotkhamphu']>1)){	
				window.saotaophu=1;	
				$('#thuocmau').setGridParam({datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_saothuoc&id_luotkham='+rowData['ID_LuotKham']}).trigger("reloadGrid");
			}
		}
	})
}
function kiemtra_kham(rowData){
	if(IsDoctor==0){
		$('#btn_batdau,#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua').button('disable');
		$('.chuyenthanhbschinh').unbind('click');
		$('.saothuoctoaphu').unbind('click');
		$('.chuyenbschinh').unbind('click');
		create_combobox_disable('#toanmau');
		//$('#ghichu').prop('disabled', true);
		$('#taikham').prop('disabled', true);
		$('#ngaytaikham').prop('disabled', true);
		$('#noidungtaikham').prop('disabled', true);
		if((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangCho')){
			$('#btn_hoantat span').html('<?php lang('trakq')?>');	
		}else{
			$('#btn_hoantat span').html('Đã trả kết quả');	
		}
		
	}else{
		
		if(batdau_status==1){	
			if(rowData['BSChanDoan']==''){					
				$('#btn_batdau').button('enable');
				$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_luu').button('disable');				
			}else{
				$('#btn_batdau').button('disable');
			}
			var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
			if((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DaThucHien')){
				if((user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
					$('#btn_hoantat,#btn_luu,#btn_dantoa,#btn_saotoa').button('enable');
					create_combobox_enable('#toanmau');					
					//$('#ghichu').prop('disabled', false);
					$('#taikham').prop('disabled', false);
					$('#ngaytaikham').prop('disabled', false);
					$('#noidungtaikham').prop('disabled', false);					
				}else{
					$('#btn_hoantat,#btn_luu').button('disable');
					create_combobox_disable('#toanmau');
					//$('#ghichu').prop('disabled', true);
					$('#taikham').prop('disabled', true);
					$('#ngaytaikham').prop('disabled', true);
					$('#noidungtaikham').prop('disabled', true);
				}							
				$('#btn_chinhsua span').html('Sửa');	
				$('#btn_hoantat span').html('<?php lang('trakq')?>');				
			}else if((rowData['ID_trangthai']=='DangCho')){				
				if(rowData['BSChanDoan']==''){		
					$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_luu').button('disable');	
				}else{		
					$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_luu').button('enable');						
				}				
				create_combobox_disable('#toanmau');
					//$('#ghichu').prop('disabled', true);
					$('#taikham').prop('disabled', true);
					$('#ngaytaikham').prop('disabled', true);
					$('#noidungtaikham').prop('disabled', true);
					$('#btn_hoantat span').html('<?php lang('trakq')?>');
					$('#btn_chinhsua span').html('Sửa');	
				}else if(rowData['ID_trangthai']=='Xong'){	

					$('#btn_saotoa,#btn_dantoa,#btn_hoantat,#btn_luu').button('disable');
					$('#btn_chinhsua').button('enable');
					$('#btn_hoantat span').html('Đã trả kết quả');
					create_combobox_disable('#toanmau');
				//$('#ghichu').prop('disabled', true);
				$('#taikham').prop('disabled', true);
				$('#ngaytaikham').prop('disabled', true);
				$('#noidungtaikham').prop('disabled', true);
				$('#btn_chinhsua span').html('Sửa');	
			}	
			
			else if(rowData['ID_trangthai']=='DangSua'){	
				$('#btn_luu,#btn_dantoa,#btn_saotoa').button('enable');
				$('#btn_hoantat').button('disable');
				$('#btn_hoantat span').html('Đã trả kết quả');		
				$('#btn_chinhsua').button('enable');	
				$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "ID_trangthai",'DangSua' );
				$("#rowed4").setColProp('MoTa', {editable: true});
				$("#rowed5").setColProp('ChanDoan', {editable: true});					 
				$("#rowed3").setColProp('SoNgayThuoc', {editable: true});
				$("#rowed3").setColProp('ID_LoaiKham', {editable: true});
				$("#rowed6").setColProp('ID_Thuoc', {editable: true});					
				$("#rowed6").setColProp('ID_DuongDungThuoc', {editable: true});
				$("#rowed6").setColProp('SoThuocThucXuat', {editable: true});
				$("#rowed6").setColProp('ThanhTien', {editable: true});
				$("#rowed6").setColProp('CachDungLieuDung', {editable: true});
				$("#rowed6").setColProp('PhuongThucThucHien', {editable: true});				 
				// $('#ghichu').prop('disabled', false);
				create_combobox_enable('#toanmau');
				$('#taikham').prop('disabled', false);
				$('#ngaytaikham').prop('disabled', false);
				$('#noidungtaikham').prop('disabled', false);				
				$('#btn_chinhsua span').html('Sửa Xong');				
			}				
		}else{			
			$('#btn_batdau').button('enable');
			$('#btn_hoantat,#btn_luu,#btn_saotoa,#btn_dantoa').button('disable');
			create_combobox_disable('#toanmau');
			//$('#ghichu').prop('disabled', true);
			$('#taikham').prop('disabled', true);
			$('#ngaytaikham').prop('disabled', true);
			$('#noidungtaikham').prop('disabled', true);
		}
		

	}
}


function saotoathuoc(){		

	$("#rowed6").setColProp('ID_Thuoc', {editrules: null});
	window.rowed6_current=$("#rowed6").jqGrid('getGridParam', 'selrow');			
	id_thuocmau=$('#thuocmau').jqGrid('getDataIDs');		
	ids_rowed6=$('#rowed6').jqGrid('getDataIDs');	
	for(i=0;i<=id_thuocmau.length-1;i++){	
		var rowData = jQuery('#thuocmau').jqGrid('getGridParam','data')[i];							
		var a = id_datathuoc.indexOf(parseFloat(rowData["_id_"]));	

		if(typeof ( grid_datathuoc.rows[a] )=== 'undefined'){
					//alert('Thuốc '+grid_datathuoc.rows[a]['cell'][0]+' đã được kê vui lòng chọn thuốc khác')
					alert('Thuốc ' +$('#thuocmau').jqGrid('getCell', rowData["_id_"], 'TenGoc') +' không còn sử dụng,vui lòng chọn thuốc khác')
					
				}else{
					if($.inArray(rowData["_id_"], ids_rowed6) == -1){  

					//duong_dung=grid_datathuoc.rows[a]['cell'][3];
					//duong_dung=duong_dung.split(',');
					songaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
					
					SoThuocThucXuat=parseFloat(rowData["TenNhomThuoc"])* parseFloat(songaythuoc);	

				/*	$.ajax({
					  type: "POST",
					  async :false,
					  url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc_soluong&ds_kho='+ds_kho+'&soluong='+SoThuocThucXuat+'&id_thuoc='+grid_datathuoc.rows[a]['id'],
					 success: function(output, status, xhr) {							
					 	output=output.split(';;');*/
						/*if(data[1]==0){				
								mang_toathuoc.push(rowData["_id_"]);
								mang_dialog.push(data[0]);	
							}else{	*/									
								var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
								if($.trim(rowData1['LoaiDoiTuongKham'])=="BHYT"){

									if(grid_datathuoc.rows[a]['cell'][8]==0 && grid_datathuoc.rows[a]['cell'][7]==1){		
										var gia_tam   = grid_datathuoc.rows[a]['cell'][9];
										var isbhyt_tam= 1;
									}else{
										var gia_tam   = grid_datathuoc.rows[a]['cell'][4];
										var isbhyt_tam= 0;	
									}
								}else{
									var gia_tam   = grid_datathuoc.rows[a]['cell'][4];
									var isbhyt_tam= 0;				
								}		
								datatosend='{"ID_Thuoc":"'+grid_datathuoc.rows[a]['id']+'","ID_DuongDungThuoc":"'+rowData["ID_DuongDungThuoc"]+'","PhuongThucThucHien":"'+rowData["PhuongThucThucHien"]+'","oper":"add","id_donthuoc":"'+$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc']+'","id_dvt":"'+grid_datathuoc.rows[a]['cell'][5]+'","Gia":"'+gia_tam+'","iddonthuocct":"'+grid_datathuoc.rows[a]['id']+'","ID_LuotKham":"'+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+'","id_benhnhan":"'+window.id_benhnhan+'","id_kham":"'+rowed3_select+'","SoThuocThucXuat":"'+rowData["TenNhomThuoc"]+'"," ":"'+rowed3_select+'","CachDungLieuDung":"'+rowData["CachDungLieuDung"]+'","lavattu":"'+grid_datathuoc.rows[a]['cell'][6]+'","ThanhTien":"'+rowData["SoThuocDeNghiTheoDon"]+'","khamchinh":"'+$("#rowed3").getRowData( rowed3_select)['khamchinh']+'","isbhyt":"'+isbhyt_tam+'","CachDung":"'+rowData["CachDung"]+'"}'
						//console.log(datatosend);
						datatosend= jQuery.parseJSON(datatosend);
						$.ajax({
							type: "POST",
							async :false,
							url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&hienmaloi=1',
							data:datatosend,
							success: function(output, status, xhr) {
								output=output.split('|');	

								SoThuocThucXuat=parseFloat(rowData["TenNhomThuoc"])* parseFloat(songaythuoc);	
								parameters ={									
									rowID:rowData["_id_"],
									initdata : {id_dvt:grid_datathuoc.rows[a]['cell'][5],lavattu:grid_datathuoc.rows[a]['cell'][6],iddonthuocct:$.trim(output[1]),xoa:'X',ID_Thuoc:grid_datathuoc.rows[a]['id'],ID_DuongDungThuoc:rowData["ID_DuongDungThuoc"],SoThuocThucXuat:rowData["TenNhomThuoc"],ThanhTien:rowData["SoThuocDeNghiTheoDon"],CachDungLieuDung:rowData["CachDungLieuDung"],Gia:gia_tam,PhuongThucThucHien:rowData["PhuongThucThucHien"],isbhyt:isbhyt_tam,CachDung:rowData["CachDung"]},
									position :"first",
									useDefValues : false,
									useFormatter : true,
									addRowParams : {extraparam:{}}
								}
								jQuery("#rowed6").jqGrid('addRow',parameters);			
								be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
								jQuery("#rowed6").jqGrid('setRowData',rowData["_id_"],{xoa:be});
								$("#rowed6 #"+rowData["_id_"]).removeClass('jqgrid-new-row');

								if($.trim(output[0])!=''){
									$('#rowed3').jqGrid("setCell", rowed3_select, "ID_DonThuoc",$.trim(output[0]) );
								}
							},
						})

					//}
					//},
				//});

			}else{					
				alert('Thuốc '+grid_datathuoc.rows[a]['cell'][0]+' đã được kê vui lòng chọn thuốc khác')
			}

		}



			/*if(i==id_thuocmau.length-1){
				//saotao_kiemtra()
				
			}
			*/
			
		}
		


	}


	function saotao_kiemtra(){			
		$('#dialog_canhbaothuoc').html(data[0]);			
		$('#dialog_canhbaothuoc').dialog('open');
	}

	function removeA(arr) {
		var what, a = arguments, L = a.length, ax;
		while (L > 1 && arr.length) {
			what = a[--L];
			while ((ax= arr.indexOf(what)) !== -1) {
				arr.splice(ax, 1);
			}
		}
		return arr;
	}



	function laydulieu_khamlamsang(){
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamlamsang&idbenhnhan='+window.id_benhnhan).done(function(data){	
			data=data.split('|||');
			$('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data[0]  }).trigger('reloadGrid', [{ page: 1}]);
			$('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data[1]  }).trigger('reloadGrid', [{ page: 1}]);
			$('#rowed5').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data[2]  }).trigger('reloadGrid', [{ page: 1}]);   
			$('#khamicd10').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:data[3]  }).trigger('reloadGrid', [{ page: 1}]);     
		})		
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_tiensu&idbenhnhan='+window.id_benhnhan).done(function(data) {
			if($.trim(data)!=''){
				data=data.split(';');		
				$('#gia_dinh').val(data[1]);
				$('#benh_nhan').val(data[0]);
				$('#di_ung').val(data[2]);
				window.id_tiensubenh=data[3];			
				window.TienSuNguoiThan=data[1];
				window.TienSu=data[0];
				window.DiUng=data[2];			
			}else{
				window.id_tiensubenh=0;
			}	  
		});
	}
	
	function aftersave(rowId, response,lastsel) {
		$('body').removeClass('bongmo');
		id_donthuoctrave=response.responseText.split('|');
		$('#rowed6').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );						
		if($.trim(id_donthuoctrave[0])!=''){
						//$('#rowed3').jqGrid("setCell", rowed3_select, "ID_DonThuoc",$.trim(id_donthuoctrave[0]) );
					}
					$("#rowed3").jqGrid("setSelection",id_rowed3_current, true);
					$('#rowed6_iladd').removeClass('ui-state-disabled');
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
					$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
					$('body').unbind("click");

					$('#rowed6').focus();	

					var current_rowed6=$('#rowed6').jqGrid('getCell',rowId, 'ID_Thuoc')
					$('#'+rowId).removeClass("ui-state-highlight").attr({"aria-selected":"false", "tabindex" : "-1"})
					$("#" + rowId).attr("id",current_rowed6);
					$('#'+current_rowed6).removeClass("ui-state-highlight");						
					be='<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
					$("#rowed6").jqGrid('setRowData',current_rowed6,{xoa:be});
					setTimeout(function(){							
						$("#prowed6 .ui-icon-plus").click();	
						var ids = jQuery("#rowed6").jqGrid('getDataIDs');	
						   $('#'+ids[ids.length-1]+'_ID_Thuoc1').focus();	 //nam them khi enter tao dòng mới focus vào combo thuốc

						},200);
}

function sua(){	 
	$('#btn_chinhsua').click(function(e){


		if(id_khamsua==0){
			
			$.ajax({
				type: 'POST',
				async : true,
				url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_kiemtra_sua&id_kham='+$("#rowed3").jqGrid('getGridParam', 'selrow')+'&id_donthuoc='+$("#rowed3").jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'ID_DonThuoc'),		
				success: function(output, status, xhr) {		
					output=output.split('||');
					if(output[0]==1||output[1]==1){
						alert('Lượt khám đã thanh toán');
					}else{
						$('#matkhau').dialog('open');
					}
						   // 	
						},		
					});
		}else{
			$('#rowed3').jqGrid("setCell", id_khamsua, "ID_trangthai",'Xong' );
			$('#btn_chinhsua span').html('Sửa');
			$('#btn_luu,#btn_dantoa,#btn_saotoa').button('disable');
			window.id_khamsua=0;
			
			$("#rowed4").setColProp('MoTa', {editable: false});
			$("#rowed5").setColProp('ChanDoan', {editable: false});					 
			$("#rowed3").setColProp('SoNgayThuoc', {editable: false});
			$("#rowed3").setColProp('ID_LoaiKham', {editable: false});
			$("#rowed6").setColProp('ID_Thuoc', {editable: false});					
			$("#rowed6").setColProp('ID_DuongDungThuoc', {editable: false});
			$("#rowed6").setColProp('SoThuocThucXuat', {editable: false});
			$("#rowed6").setColProp('ThanhTien', {editable: false});
			$("#rowed6").setColProp('CachDungLieuDung', {editable: false});
			$("#rowed6").setColProp('PhuongThucThucHien', {editable: false});				 
				// $('#ghichu').prop('disabled', true);
				create_combobox_disable('#toanmau');
				$('#taikham').prop('disabled', true);
				$('#ngaytaikham').prop('disabled', true);
				$('#noidungtaikham').prop('disabled', true);				

				
			}
		})
}



function dialog_matkhau(){
	$( "#matkhau" ).dialog({
		resizable: false,
		height:'auto',	
		width :'355px',	 
		autoOpen :false,
		modal: true,
		buttons: {
			"Xác nhận": function() {		
				kiemtrapass();
			},
			"Hủy bỏ": function() {		
				$( this ).dialog( "close" );		 
			}
		},open: function () {

		  //$(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');

		  $('.ui-dialog').keyup(function(e) {
		  	if (e.keyCode === 37){
		  		$('.n_btn1').focus(); 
		  		$('.n_btn2').focusout();
		  	}
		  	if (e.keyCode === 39){
		  		$('.n_btn2').focus(); 
		  		$('.n_btn1').focusout();
		  	}
		  })
		},close: function () {
			//$("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow')
			//console.log($("#rowed3").jqGrid('getGridParam', 'selrow'));
			
			$("#rowed3 #"+$("#rowed3").jqGrid('getGridParam', 'selrow')).click();
		}
	});
}

function kiemtrapass(){
	dataToSend='{"pass":'+  JSON.stringify($("#matkhau_input").val())+'}';
	dataToSend=$.parseJSON(dataToSend);
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_pass',dataToSend).done(function(data){
		if($.trim(data)==0){
			alert('Mật khẩu không đúng vui lòng thử lại')
		}else{
			$('#btn_luu,#btn_dantoa,#btn_saotoa').button('enable');
			window.id_khamsua=rowed3_select;
			$('#rowed3').jqGrid("setCell", $("#rowed3").jqGrid('getGridParam', 'selrow'), "ID_trangthai",'DangSua' );
			$("#rowed4").setColProp('MoTa', {editable: true});
			$("#rowed5").setColProp('ChanDoan', {editable: true});					 
			$("#rowed3").setColProp('SoNgayThuoc', {editable: true});
			$("#rowed3").setColProp('ID_LoaiKham', {editable: true});
			$("#rowed6").setColProp('ID_Thuoc', {editable: true});					
			$("#rowed6").setColProp('ID_DuongDungThuoc', {editable: true});
			$("#rowed6").setColProp('SoThuocThucXuat', {editable: true});
			$("#rowed6").setColProp('ThanhTien', {editable: true});
			$("#rowed6").setColProp('CachDungLieuDung', {editable: true});
			$("#rowed6").setColProp('PhuongThucThucHien', {editable: true});				 
				// $('#ghichu').prop('disabled', false);
				create_combobox_enable('#toanmau');
				$('#taikham').prop('disabled', false);
				$('#ngaytaikham').prop('disabled', false);
				$('#noidungtaikham').prop('disabled', false);				
				$('#btn_chinhsua span').html('Sửa Xong');
				$( "#matkhau" ).dialog('close');
			}		
		})	
}
function overListener(rowId){
	//alert();
	setTimeout(function(){$('#'+rowId+'_ID_Thuoc1').focus();},100)

}


function luu_thoatform(){
	
	if(window.TienSuNguoiThan==$('#gia_dinh').val() && window.TienSu==$('#benh_nhan').val() && window.DiUng==$('#di_ung').val()){
		thaydoi_tiensu=0;
	}else{
		thaydoi_tiensu=1;
	}


	rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
	datatosend='{"TienSuNguoiThan":'+JSON.stringify($('#gia_dinh').val());
	datatosend+=',"TienSu":'+JSON.stringify($('#benh_nhan').val());
	datatosend+=',"DiUng":'+JSON.stringify($('#di_ung').val());
	datatosend+=',"ghichu":'+JSON.stringify($('#ghichu').val());
	datatosend+=',"thaydoi_tiensu":'+JSON.stringify(thaydoi_tiensu);
	datatosend+=',"ID_BenhNhan":'+JSON.stringify(window.id_benhnhan);
	datatosend+=',"ID_TienSuBenh":'+JSON.stringify(window.id_tiensubenh);
	datatosend+=',"ID_Donthuoc":'+JSON.stringify(rowData['ID_DonThuoc']);
	datatosend+=',"ID_LuotKham":'+JSON.stringify(rowData['ID_LuotKham']);
	if($('#taikham').is(':checked')){
		datatosend+=',"ngaytaikham":'+JSON.stringify($('#ngaytaikham').val());
		datatosend+=',"noidungtaikham":'+JSON.stringify($('#noidungtaikham').val());
	}else{
		datatosend+=',"ngaytaikham":""';
		datatosend+=',"noidungtaikham":""';
	}
	datatosend+='}';
		//console.log(datatosend);
		datatosend=$.parseJSON(datatosend);		
		savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");					 
		if (savedRow && savedRow.length > 0) {			  
			$('#rowed5').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);						
		}
		savedRow1 = $('#rowed4').jqGrid("getGridParam", "savedRow");					 
		if (savedRow1 && savedRow1.length > 0) {			  
			$('#rowed4').jqGrid("saveCell", savedRow1[0].id, savedRow1[0].ic);						
		}

		savedRow2 = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
		if (savedRow2 && savedRow2.length > 0) {		
			if($('#'+savedRow2[0].id+'_ID_Thuoc1').val()!=''){  
				$('#rowed6 .jqgrid-new-row').length ? oper="add" : oper="edit";			
				jQuery("#rowed6").jqGrid('saveRow',savedRow2[0].id,null,null,{"extraparam" : {"oper":oper} }, aftersave,null,null,null,"POST");	  
			}
		}
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_luu&hienmaloi=1',datatosend).done(function(data){
			$('#btn_lammoi').click();
		})


	}

	function saotaogannhat(){
		$('#btn_saotoa').click(function(){
			rowData = $("#rowed3").getRowData( rowed3_select)
			if ((rowData['ID_trangthai']=='DangKham')&&((user_login==rowData['bschinh']))&&(IsDoctor==1)){	
				window.saotaophu=1;	
				$('#thuocmau').setGridParam({datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_saothuoc&id_luotkham='+rowData['ID_LuotKham']+'&id_benhnhan='+window.id_benhnhan}).trigger("reloadGrid");
			}
		})

	}


	function setsel(){	
		$("#rowed3").bind('click',function(e){
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			$("#rowed4").jqGrid("setSelection",tam, true);	
			$("#rowed5").jqGrid("setSelection",tam, true);
			$("#khamicd10").jqGrid("setSelection",tam, true);	
		})		
		$("#rowed4").bind('click',function(e){
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			$("#rowed3").jqGrid("setSelection",tam, true);	
			$("#rowed5").jqGrid("setSelection",tam, true);	
			$("#khamicd10").jqGrid("setSelection",tam, true);		
		})	

		$("#rowed5").bind('click',function(e){
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			$("#rowed4").jqGrid("setSelection",tam, true);	
			$("#rowed3").jqGrid("setSelection",tam, true);
			$("#khamicd10").jqGrid("setSelection",tam, true);	
		})	
		$("#khamicd10").bind('click',function(e){
			var row = $(e.target).closest('tr.jqgrow');
			var tam = row.attr('id');
			$("#rowed3").jqGrid("setSelection",tam, true);
			$("#rowed4").jqGrid("setSelection",tam, true);	

			$("#rowed5").jqGrid("setSelection",tam, true);	
		})		
	}
	function check_icd10(){

	}


	function init_combox_inline_icd10(input,input1,dialog,grid,defaultvalue){    
		jwerty.key('tab', false);

		if (typeof defaultvalue != 'undefined'){
			$(input).val(defaultvalue);	
			$(input1).val(defaultvalue);

		}
		$(input).bind("click",function(event) {	
			event.stopPropagation();
		});
		$(grid).bind("click",function(event) {	
			$(input).focus();
			$(input).select();
		});




		$('body').bind("click",function(event) {
			if($(dialog).is(":visible")===true){		
				create_combobox_close_inline(input,dialog,input1,grid)
			}
		});


		$(dialog+' .ui-jqgrid-hbox').click(function(event) {
			event.stopPropagation();
		});


		$(input+','+dialog+' .ui-jqgrid-hbox').bind("keyup", function(e) { 
			var key = e.which;
			if(jwerty.is("enter",e)||jwerty.is("tab",e)){		
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					var idcur = $(grid).jqGrid('getGridParam', 'selrow');
					$(grid).jqGrid("setSelection",idcur, true);

					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("esc",e)){
				if($(dialog).is(":visible")===true){
					$(grid).data('clicked', true);
					create_combobox_close_inline(input,dialog,input1,grid);
				}
			}else if(jwerty.is("↓",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow');
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	
				}else{
					if(idcur==null){
						var ids = $(grid).getDataIDs();
						$(grid).jqGrid("setSelection",ids[0], true);
					}else{
						var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
						if (idcur == null) return;
						var ids = $(grid).getDataIDs();
						var index = $(grid).getInd(idcur);
						if (ids.length < 2) return;
						index++;
						if (index > ids.length)
							index = 1;
						$(grid).jqGrid("setSelection",ids[index - 1], true);
					}
				}

			}
			else if(jwerty.is("↑",e)){
				$(grid).data('clicked', false);
				var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
				if($(dialog).is(":visible")===false){
					create_combobox_open(input,dialog)	}
					else{
						if(idcur==null){
							var ids = $(grid).getDataIDs();
							$(grid).jqGrid("setSelection",ids[0], true);
						}else{

							var idcur = $(grid).jqGrid('getGridParam', 'selrow')	
							if (idcur == null) return;
							var ids = $(grid).getDataIDs();
							var index = $(grid).getInd(idcur);
							if (ids.length < 2) return;
							index--;
							if (index == 0){
								index = ids.length;
							}
							$(grid).jqGrid("setSelection",ids[index - 1], true);
						}
					}
				}
				else{
					$(grid).data('clicked', false);
					if(key!=13&&key!=9&&key!=16&&key!=37&&key!=38&&key!=39&&key!=40&&key!=27){				
						create_combobox_open(input,dialog);
						grid = $(grid);
						var columnNames = $(grid).jqGrid('getGridParam','colModel');
						var searchFiler = $(input).val(), f;
						if (searchFiler.length === 0) {
							grid[0].p.search = false;
							$.extend(grid[0].p.postData,{filters:""});
						}
						f = {groupOp:"OR",rules:[]};
						f.rules.push({field:columnNames[0].name,op:"bw",data:searchFiler});               
						grid[0].p.search = true;
						$.extend(grid[0].p.postData,{filters:JSON.stringify(f)});         
						grid.trigger("reloadGrid",[{page:1,current:true}])					
						$(grid).jqGrid("setSelection",grid.getDataIDs()[0], true);				
					}
				}
			});	

	}



	function bhyt_thuoc(){	
		$("#rowed6").click(function(e){
			var rowData1 = $('#rowed3').getRowData(id_rowed3_current);	
			if($.trim(rowData1['LoaiDoiTuongKham'])=="BHYT"){
				if($(e.target).is(":checkbox")){
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');			

					var rowData = $("#rowed6").getRowData(rowId);

					if($(e.target).is(":checked")){
						trangthai=1;		
					}else{
						trangthai=0;
					}
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controler_isbhyt&id_donthuocct='+rowData['iddonthuocct']+'&trangthai='+trangthai).done(function(){
						var rowData = $("#rowed3").getRowData(rowed3_select);
						$("#rowed6").jqGrid().setGridParam({
							url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_donthuoc&iddonthuoc="+rowData["ID_DonThuoc"]
							,loadonce: false,datatype: "json"}).trigger("reloadGrid");			
					})
				}
			}else{
				return false; 
			}
		})

	}
	function tenbn_resize(){
		if($('#panel_tenbn').height()>30){
			var size = $("#panel_tenbn").css('font-size');
			size=parseInt(size)-1;
			$("#panel_tenbn").css("font-size",size+"px");	
			tenbn_resize()
		}
	}

	function create_hotrongonngu(elem, datalocal) {
		datalocal = jQuery.parseJSON(datalocal);
		$(elem).jqGrid({
			datastr: datalocal,
			datatype: "jsonstring",
			colNames: [ 'Nickname','Họ tên','Phòng ban'],
			colModel: [
				//{name: 'idnv', index: 'idnv', hidden: true,width:1},

				{name: 'hovaten', index: 'hovaten', hidden: false,width:"20%"},				
				{name: 'nick', index: 'nick', hidden: false,width:"50%"},
				{name: 'phongban', index: 'phongban', hidden: false,width:"30%"},

				],
				hidegrid: false,
				gridview: true,
				loadonce: true,
				scroll: 1,
				modal: true,
				rowNum: 100,
				rowList: [],
				height: 200,
				width: 400,
				viewrecords: true,
				ignoreCase: true,
				shrinkToFit: true,
				cmTemplate: {sortable: false},
				sortorder: "desc",
				serializeRowData: function(postdata) {
				},
				onSelectRow: function(id) {

					var rowData = $(this).getRowData(id);
              //alert(rowData);
              $("#tenbacsi").val(rowData["hovaten"]);

          },
          ondblClickRow: function(id, rowIndex, columnIndex) {
          },
          loadComplete: function(data) {
          },
      });
		$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		$(elem).jqGrid('bindKeys', {});
	}


	function formatMoney(value) {
		if($.trim(value)=='' || value==0){
			tam='0';
		}else{
			tam=(parseInt(value)).formatMoney(0, ',', '.')
		}
		return tam;
	}
	function getquota_luotkham(idluotkham){
		/* $.ajax({
			type: 'POST',
			async : false,
			url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controler_quota&oper=getsotien',
			data:{
				ID_LuotKham:idluotkham,
			},
			success: function(data, status, xhr) {
				data=$.parseJSON(data);
				window.quota_luotkham=parseInt(data[0]);
				window.ghichu_quota_luotkham=data[1];
				$("#view_quota").html(formatMoney(window.quota_luotkham/1000));
			}
		}); */
	}
	
	
	
function PhienCachDungThuoc(SoLuong,CachDung,DonVi,DuongDung){
console.log(SoLuong+"-"+CachDung+"-"+DonVi+"-"+DuongDung);	
	CachDung=CachDung.toLowerCase();	
	ketqua='';
	ketquadacbiet='';
	ChuoiTraVe='';
	A =CachDung.replace(/[^0-9]/g,"").length;
	nUse =CachDung.replace(/[^0-9]/g,"").length;	
	LayketquaChia='';	
	if (nUse == 0 || nUse==''){
		nUse = '1';
		LayketquaChia =' 1';
	}else{
		if (SoLuong == 2.25 || SoLuong == 3.75  || SoLuong == 5.25){
			LayketquaChia  = '3/4'
		}else{
			if ((SoLuong == 1.5 && nUse == 3) || (SoLuong==0.5 && nUse==1)){
				LayketquaChia = '1/2';
			}else{
				if ((SoLuong == 0.7 && nUse==2) || (SoLuong == 0.66 && nUse==2)){
					LayketquaChia = '1/3';
				}else{    			
					if (SoLuong == 0.6 ) {
						LayketquaChia = '2/3';
					}else{
						if (SoLuong == 2  && nUse == 4) {
							LayketquaChia = '1/2';
						}else{
							if ((SoLuong == 3  && nUse == 2) || (SoLuong == 6  && nUse == 4)){
								LayketquaChia = '1,5';
							}else{								
								if (SoLuong == 1.5 && nUse == 2){
									LayketquaChia = '3/4';
								}else{
									if ( SoLuong % nUse != 0){ // nếu chia có dư thì lấy phân số
										LayketquaChia = SoLuong+ '/'+ nUse;
									}else{
										LayketquaChia = SoLuong/nUse;
									}									
								}							
							}							 			
						}
					}
				}
			}     		
		}
	}

	if (SoLuong == 1.5 && nUse==2)   LayketquaChia='3/4';
	if (SoLuong == 0.5 && nUse==2)   LayketquaChia='1/4';
	if (SoLuong == 0.8 && nUse==1)   LayketquaChia='0.8';
	if (SoLuong == 0.3 && nUse==1)   LayketquaChia='0.3';
	if (SoLuong == 1.5 && nUse==1)   LayketquaChia='1.5';

	for (var i = 0, len = CachDung.length; i < len; i++) {		
		if(CachDung[i]=="1"){
			ketqua= ketqua +' Sáng ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Sáng ' +',';
		}
		if(CachDung[i]=="2"){
			ketqua= ketqua +' Trưa ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Trưa ' +',';
		} 
		if(CachDung[i]=="3"){
			ketqua= ketqua +' Chiều ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Chiều ' +',';
		}
		if(CachDung[i]=="4"){
			ketqua= ketqua +' Tối ' + LayketquaChia + ' '+ DonVi+',';
			ketquadacbiet= ketquadacbiet +' Tối ' +','
		} ;
		if(CachDung[i]=="n"){
			ketqua= ketqua +' sau khi ăn. ';
			ketquadacbiet= ketquadacbiet +' sau khi ăn. ';
		} 
		if(CachDung[i]=="d"){
			ketqua= ketqua +' trước khi ăn. ';
			ketquadacbiet= ketquadacbiet +' trước khi ăn. ';
		} 
		if(CachDung[i]=="a"){
			ketqua= ketqua +' 30 phút. ';
			ketquadacbiet= ketquadacbiet +' 30 phút. ';
		} 
		if(CachDung[i]=="b"){
			ketqua= ketqua +' 60 phút. ';
			ketquadacbiet= ketquadacbiet +' 60 phút. ';
		} 
		if(CachDung[i]=="c"){
			ketqua= ketqua +' 2 ngày 1 lần. ';
			ketquadacbiet= ketquadacbiet +' 2 ngày 1 lần. ';
		}
	}

	if (  DonVi.toLowerCase()!='cái' && DonVi.toLowerCase()!='bộ' && DonVi.toLowerCase()!='gói' && DonVi.toLowerCase()!='lít' && DonVi.toLowerCase()!='thùng'
		&& DonVi.toLowerCase()!='cuộn' && DonVi.toLowerCase()!='sợi' && DonVi.toLowerCase()!='hộp' && DonVi.toLowerCase()!='mét' && DonVi.toLowerCase()!='ký' ) {
		ChuoiTraVe=DuongDung + ' ngày '+ LayketquaChia +' '+DonVi+ ' - theo hướng dẫn';
} else{
	ChuoiTraVe=DuongDung+ketqua
}

if (   DonVi.toLowerCase()=='cái' || DonVi.toLowerCase()=='sợi' || DonVi.toLowerCase()=='bộ' || DonVi.toLowerCase()=='lít' || DonVi.toLowerCase()=='cuộn'
	|| DonVi.toLowerCase()=='hộp' || DonVi.toLowerCase()=='thùng' || DonVi.toLowerCase()=='mét' || DonVi.toLowerCase()=='ký' 
	||(! DuongDung.toLowerCase()=='uống' && DonVi.toLowerCase()=='gói' )){
	ChuoiTraVe='Dùng theo hướng dẫn';
}else if(DuongDung.toLowerCase()=='pha' && DonVi.toLowerCase()=='ống'){
	ChuoiTraVe='Pha dịch truyền theo hướng dẫn';
}else{
	ChuoiTraVe=DuongDung+ketqua;
	if(DuongDung.toLowerCase()=='bôi' && (DonVi.toLowerCase()=='tuýp' || DonVi.toLowerCase()=='lọ')){
		ChuoiTraVe=Duongdung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if(DonVi.toLowerCase()=='lọ' && (DuongDung.toLowerCase()=='xịt' || DuongDung.toLowerCase()=='nhỏ' )){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='lọ' || DonVi.toLowerCase()=='tuýp' || DonVi.toLowerCase()=='gói') && DuongDung.toLowerCase()=='rửa'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='chai' || DonVi.toLowerCase()=='lọ')  &&  DuongDung.toLowerCase()=='gội đầu'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet;
	}else if(DonVi.toLowerCase()=='chai'  || DonVi.toLowerCase()=='bịch'){
		ChuoiTraVe=DuongDung+'. '+ketqua+ ' ' + CachDung.replace(/\d+/g, '')+' '+ ' giọt/phút';
	}else if(DonVi.toLowerCase()=='lọ' && DuongDung.toLowerCase()=='uống'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}else if((DonVi.toLowerCase()=='viên' || DonVi.toLowerCase()=='gói' || DonVi.toLowerCase()=='lọ') && DuongDung.toLowerCase()=='ngâm'){
		ChuoiTraVe=DuongDung+'. '+ketqua+ ' pha trong nước';
	}else if(DonVi.toLowerCase()=='viên' && DuongDung.toLowerCase()=='dùng'){
		ChuoiTraVe=DuongDung+' ngày: '+A+ ' lần theo hướng dẫn';
	}else if(DonVi.toLowerCase()=='lọ' && DuongDung.toLowerCase()=='uống'){
		ChuoiTraVe=DuongDung+'. '+ketquadacbiet+ ' theo hướng dẫn';
	}		
}
return ChuoiTraVe;
}




function create_khamicd10_nhapnhieu() {
  rowData = $("#rowed3").getRowData(rowed3_select);
  var searhicon = "<a href='#' style='color:red;'>X</a>";
  var rowData222 = $("#rowed3").getRowData($("#rowed3").jqGrid('getGridParam', 'selrow'));
  $("#rowed_icd10_nhieu").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['X', 'Mã', 'ICD10', 'Người nhập', ''],
    colModel: [{
        name: 'xoaicd10',
        index: 'xoaicd10',
        width: "30px",
        hidden: false,
        formatter: function() {
          return "<center><button class=\"button_xoa_icd10\">X</button></center>";
        }
      },
      {
        name: 'MaICD10',
        index: 'MaICD10',
        width: "50px",
        editable: true,
        align: 'left',
        hidden: false,
        editrules: {
          custom: true,
          custom_func: function(value, colName) {
            return check_null(value, colName);
          }
        }
      },
      {
        name: 'NoiDungICD10',
        index: 'NoiDungICD10',
        width: "300px",
        align: 'left',
        hidden: false,
        editable: false,
        edittype: "text",
        editrules: {
          custom: true,
          custom_func: function(value, colName) {
            return check_null(value, colName);
          }
        }
      },
      {
        name: 'nguoinhap',
        index: 'nguoinhap',
        width: "100px",
        align: 'center',
        hidden: true,
        editable: false
      },
      {
        name: 'id_kham',
        index: 'id_kham',
        width: "10%",
        align: 'center',
        hidden: true,
        editable: true
      },
    ],
    inline_esc: false,
    grid_mode: '',
    grid_move: "",
    grid_save_option: "",
    loadonce: true,
    scroll: false,
    modal: true,
    shrinkToFit: false,
    rowNum: 10000000,
    rowList: [],
    pager: '#prowed_icd10_nhieu',
    sortname: 'id',
    height: 100,
    width: 100,
    viewrecords: false,
    ignoreCase: true,
    sortorder: "asc",
    grouping: true,
    beforeSelectRow: function(rowid, e) {

      if ($(e.target).is("button.button_xoa_icd10")) {
        setTimeout(function() {
          var rowId = $("#rowed_icd10_nhieu").jqGrid('getGridParam', 'selrow');
          var rowData = jQuery("#rowed_icd10_nhieu").getRowData(rowId);
          if (rowData['nguoinhap'] != '<?php echo $_SESSION['user']['nickname']?>') {
            alert('Chỉ có người nhập ICD10 mới có quyền xóa!');
          } else {
            var check_cf = confirm("Bạn muốn xóa ICD này?");
            if (check_cf == true) {
              var therowid = $(this).parents('tr:last').attr('id');
              $(this).jqGrid('setSelection', therowid);
              jQuery("#rowed_icd10_nhieu").jqGrid('setGridParam', {
                datatype: 'json'
              }).trigger('reloadGrid');
              //ajax
              $.ajax({
                type: 'POST',
                async: false,
                dataType: 'json',
                url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_icd10_nhapnhieu&id_kham=' +
                  rowData['id_kham'],
                data: {
                  oper: 'update_huybo_icd10'
                },
                success: function(data) {}
              });
              tooltip_message("Xóa thành công!");
              jQuery("#rowed_icd10_nhieu").jqGrid('setGridParam', {
                datatype: 'json'
              }).trigger('reloadGrid');
            }
          }
        }, 50);
      }
      return true; // select the row

    },
    afterInsertRow: function(rowid, aData) {

    },
    pgbuttons: false,
    pgtext: null,
    serializeRowData: function(postdata) {
      rowData = $("#rowed3").getRowData($("#rowed3").jqGrid('getGridParam', 'selrow'));
      postdata.id_luotkham = rowData['ID_LuotKham'];
      postdata.id_loaikham = 12204;// loại khám
      return postdata;
    },
    onCellSelect: function(rowid, iCol, cellcontent, e) {},
    onSelectRow: function(id) {

    },
    ondblClickRow: function(rowId, rowIndex, columnIndex) {

    },
    loadComplete: function(data) {},

    caption: "ICD 10 bệnh kèm",
    editurl: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_icd10_nhapnhieu',
  });
  // $("#rowed_icd10_nhieu").setGridWidth($(window).width()-800);
  // $("#rowed_icd10_nhieu").setGridHeight($(window).height()-420);
  $("#rowed_icd10_nhieu").setGridWidth(200);
  $("#rowed_icd10_nhieu").setGridHeight(100);
  $("#rowed_icd10_nhieu").jqGrid('navGrid', "#prowed_icd10_nhieu", {
    add: false,
    edit: false,
    del: false,
    search: false,
    refresh: false,
    closeAfterEdit: true,
    clearAfterAdd: true,
    navkeys: [true, 38, 40]
  });

  /////////////add ở đây
  $("#rowed_icd10_nhieu").jqGrid('inlineNav', '#prowed_icd10_nhieu', {
    add: true,
    addtext: '',
    edittext: '',
    edit: true,
    save: false,
    id: "rowed_icd10_nhieu_iladd",
    addParams: {
      keys: true,
      position: "last",
      addRowParams: {
        keys: true,
        aftersavefunc: function(rowId, response, lastsel) {
          create_combobox_close_inline('#rowed_icd10_nhieu #' + rowId + '_MaICD10', '.dialog_icd10_luotkham',
            '#rowed_icd10_nhieu #' + rowId + '_MaICD10', '#rowed_icd10_nhieu');
        },
        oneditfunc: function(rowId) {
          $('#' + rowId + '_MaICD10').width(80);
          create_combobox_inline_icd10_luotkham('#' + rowId + '_MaICD10', '#' + rowId + '_MaICD10',
            '.dialog_icd10_luotkham', '#dm_icd10_luotkham', '');
        },
        afterrestorefunc: function(rowId) {
          create_combobox_close_inline('#rowed_icd10_nhieu #' + rowId + '_MaICD10', '.dialog_icd10_luotkham',
            '#rowed_icd10_nhieu #' + rowId + '_MaICD10', '#rowed_icd10_nhieu');
        }
      }
    },
    editParams: {
      position: "last",
      keys: true,
      aftersavefunc: function(rowId, response, lastsel) {
        create_combobox_close_inline('#rowed_icd10_nhieu #' + rowId + '_MaICD10', '.dialog_icd10_luotkham',
          '#rowed_icd10_nhieu #' + rowId + '_MaICD10', '#rowed_icd10_nhieu');
      },
      oneditfunc: function(rowId) {
        var rowData = jQuery("#rowed_icd10_nhieu").getRowData(rowId);
        if (rowData['nguoinhap'] != '<?php echo $_SESSION['user']['nickname']?>') {
          alert('Chỉ có người nhập ICD10 mới có quyền sửa!');
          setTimeout(function() {
            $("#rowed_icd10_nhieu_ilcancel").click();
          }, 100);
        } else {
          create_combobox_inline_icd10_luotkham('#' + rowId + '_MaICD10', '#' + rowId + '_MaICD10',
            '.dialog_icd10_luotkham', '#dm_icd10_luotkham');
        }
      },
      afterrestorefunc: function(rowId) {
        create_combobox_close_inline('#rowed_icd10_nhieu #' + rowId + '_MaICD10', '.dialog_icd10_luotkham',
          '#rowed_icd10_nhieu #' + rowId + '_MaICD10', '#rowed_icd10_nhieu');
      },
    }
  });

  $("#rowed_icd10_nhieu").jqGrid("navButtonAdd", "#prowed_icd10_nhieu", {
    caption: "Lưu",
    buttonicon: "ui-icon-circle-plus",
    id: "rowed_icd10_nhieu_ilsave",
    onClickButton: function() {
      var rowId = $("#rowed_icd10_nhieu").jqGrid('getGridParam', 'selrow');

      if (rowId > 0) {
        var check_data = check_null(1, 1);
        if ($("#" + rowId + "_MaICD10").val() == "") {
          alert('Vui lòng nhập mã ICD10!');
        } else if (check_data == 1) {
          alert('Mã ICD đã tồn tại. Vui lòng nhập lại!');
        } else {
          $.ajax({
            type: 'POST',
            async: false,
            url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_icd10_nhapnhieu',
            data: {
              oper: 'edit',
              id_kham: rowId,
              MaICD10: $("#" + rowId + "_MaICD10").val(),
            },
            success: function(data) { 
              jQuery("#rowed_icd10_nhieu").jqGrid('setGridParam', {
                url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd10_luotkham&id_luotkham=' +
                  window.id_luotkham_icd10,
                datatype: 'json'
              }).trigger('reloadGrid');
			  
            }

          })
        }
      } else {
        var check_data = check_null(1, 1);
        if ($("#" + rowId + "_MaICD10").val() == "") {
          alert('Vui lòng nhập mã ICD10!');
        } else if (check_data == 1) {
          alert('Mã ICD đã tồn tại. Vui lòng nhập lại!');
        } else {
          $.ajax({
            type: 'POST',
            async: false,
            url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_icd10_nhapnhieu',
            data: {
              oper: 'add',
              id_luotkham: window.id_luotkham_icd10,
              MaICD10: $("#" + rowId + "_MaICD10").val(),
              id_loaikham: 10516
            },
            success: function(data) {
              jQuery("#rowed_icd10_nhieu").jqGrid('setGridParam', {
                url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd10_luotkham&id_luotkham=' +
                  window.id_luotkham_icd10,
                datatype: 'json'
              }).trigger('reloadGrid');
            }

          })
        }
      }




    },
    position: "first"
  });

}

function create_combobox_inline_icd10_luotkham(input, input1, dialog, grid, defaultvalue) {
  afterInit_combox_inline(input, dialog, grid, input1);
  init_combox_inline_icd10(input, input1, dialog, grid, defaultvalue);
}

function check_null(value, colname) {
  var return_vl;
  $.ajax({
    type: 'POST',
    async: false,
    url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller_icd10_nhapnhieu&check_isset',
    data: {
      oper: 'check_isset_icd10',
      id_luotkham: window.id_luotkham_icd10,
      ma_icd10: window.ma_icd10_check
    },
    success: function(data) {
      window.check_icd_isset = data;
      return_vl = data;
    }
  });
  return return_vl;
}
</script>


