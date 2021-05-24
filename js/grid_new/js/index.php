<!--Người viết: Trần Trương Chính-->
<?php
	if($_GET["id_benhnhan"]!=="undefined"){
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
    color: #000000!important; ;
}
.layhet{
    background: #51A511 repeat-x scroll 100% 100% !important;   
    color: #FFFFFF!important; ;
}

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
	 .dialog_dm_thuoc,.dialog_dm_duongdung{
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
		height:160px;
		margin-top:3px;
				
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
		height:38px;
				
	}
	
	
	.button_panel{
		display:inline-block;
		width:40%;
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
</style>
<body>
<div id="matkhau" style="display:none">
Nhập mật khẩu bác sỹ chính để thay đổi thông tin lượt khám<br>
<span style=" margin: auto;"><input type="password" id="matkhau_input"></span>

</div>


<div id="chandoan" style="display:none">
Chẩn đoán trống,bạn có muốn sao chẩn đoán gần đây không</div>

<div id="dialog-thuochuacogiaban" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Thuốc <span id="_tenthuoc" style="font-weight:bold"></span> chưa có giá bán. Bạn có muốn kê không?</p>
	<input type="hidden" id="val_donvitinh" value="" >
    <input type="hidden" id="val_lathuoc" value="" >
    <input type="hidden" id="val_dongia" value="" >
    <input type="hidden" id="val_duongdung" value="" >
</div>

<ul id="menu" class="menu" style="display:none">
    
    <li class="chuyenthanhbschinh " ><a href="#">Chuyển quyền thành bác sỹ chính</a></li>
    <li class="chuyenbschinh"><a href="#">Chuyển bác sỹ chính</a></li>
    <li class="saothuoctoaphu"><a href="#">Sao thuốc từ toa phụ sang toa chính</a></li>
    <hr>
    <li class="saotoathuoc"><a href="#">Sao toa thuốc này</a></li>
    <hr>
    
    <li class="medical"><a href="#">Medical report</a></li>
  
</ul>


<div id="dialog_sothuoc" style="display:none">


</div>
 <div  class="dialog_dm_thuoc">
    <table id="DM_thuoc">
    </table>
    
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
  <div class="form_row" style="vertical-align:top;font-size:16px" >
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
   <div class="form_row" style="vertical-align:top;font-size:16px">
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
    	<div class="title ui-widget-header ">Tiền sử gia đình</div>
    	<textarea id="gia_dinh" style="height:84px;width:132px"></textarea>
    </div> 
    <div class="tien_su_benh_nhan"  style="width: 135px;">
    	<div class="title ui-widget-header">Tiền sử bệnh nhân</div>
   		<textarea id="benh_nhan" style="height:84px;width:118pxs"></textarea>
    </div> 
    <div class="diung" style="width: 135px;">
    	<div class="title ui-widget-header"  >Dị ứng</div>
    	<textarea id="di_ung" style="height:84px;width:132px"></textarea>
    </div>
    <div class="thongtin_luotkham">
    	<div class="canlamsang_luotkham"></div> 
    </div>
    <div class="button_panel">  
     <a href="#" id="btn_batdau" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Bắt đầu</a>  
     <a href="#" id="btn_chidinhkham" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Chỉ định khám</a> 
     <a href="#" id="btn_dieutriphoihop" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Điệu trị phối hợp</a> 
     <a href="#" id="btn_hoantat" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất</a> 
     <a href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu</a>  
     <a href="#" id="btn_lammoi" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only" style="margin-left:0px;  margin-bottom:1px; "><span class="ui-icon ui-icon-refresh"></span></a>  		 
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
         <div class="toathuocmau"> 
         <div>
  		    <input class="custom_button xanh" type="button"  value="Chi tiết quota" style="height:22px;width:80px!important;">
            <input class="custom_button xanh" type="button" id="miengiam"  value="Miễn giảm" style="height:22px;width:60px!important;">
            <input class="custom_button xanh" type="button"  value="Ghi chú điều dưỡng" style="height:22px;width:100px!important;">
            <span style="font-size:14px;color:#36F;right:0px;position:absolute;" id="tongtien"></span>
            </div>
            <div  style="padding-left:5px;">
            <label for="toanmau"  style="width:150px;text-align:left">Toa mẫu </label>
    
            <input id="toanmau1" type="text"  name="toanmau1" style="width:100px;display:none" >
           
            <input id="toanmau" name="toanmau"   type="text" style="width:200px;" >
          
            <label for="ylenh"  style="width:150px;text-align:left;margin-left:50px">Y lệnh </label>
    
           
           <input list="ylenh" name="ylenh">
<datalist id="ylenh">
  <option value="Nhập viện">
  <option value="Chuyển viện">
  <option value="Lấy thuốc đem về">

</datalist>
            </div>
             <div  style="padding-left:5px;">
            <label for="dando"  style="width:150px;text-align:left">Dặn dò </label>
            <span style="margin-left:20px">
            <input id="trathuoc" name="comat" checked   type="checkbox" value="1" >
            
            <label for="trathuoc"  style="width:150px;text-align:left">BN được trả thuốc </label>
              </span>
                <span style="margin-left:60px">
            <input id="taikham" name="comat" checked   type="checkbox" value="1" >
          
            <label for="taikham"  style="width:50px;text-align:left">Tái khám</label>
            </span>
            <input id="ngaytaikham" name="ngaytaikham"   type="text" style="width:50px;" >
            <label for="ndtaikham"  style="width:150px;text-align:right">Nội dung tái khám</label>
            </div>
            <div  style="padding-left:5px;">
            <textarea id="ghichu" rows="1" cols="34"> 
            </textarea>
            <textarea id="noidungtaikham" rows="1" cols="34">            
            </textarea>
            </div>
            <div style="padding-left:5px;">
            <a href="#" id="btn_dantoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Dán toa</a>  
            <a href="#" id="btn_saotoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sao toa gần nhất</a>  
            <a href="#" id="btn_xemtoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Xem toa</a>  
            <a href="#" id="btn_intoa" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In toa</a>  
            <a href="#" id="btn_chinhsua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</a>  
            <a href="#" id="btn_phieu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;   ">Phiếu vào viện</a>  
            </div>
    	</div>
    </div>   
  
          
</div>
<div id="countdown" style="display:none"><span style="font-size:15px">Bệnh nhân không thuộc đối tượng Bảo hiểm y tế. Sẽ tạo bệnh án nội trú trong </span><b> <span id="count_num">5</span></b> <span style="font-size:15px">giây</span></div>
</body>
</html>
<script type="text/javascript">
window.id_rowed6_delete=0;
var ds_kho='1';
window.id_khamsua=0;
var report_code=["InDonThuoc_Bsy"];
var report_name=["Đơn thuốc bác sỹ"];
$(document).ready(function() {
	
	
	
	  $(document).bind("contextmenu", function(e) {
                    return false;
       			});
	
	sua();
	dialog_matkhau();
	$('#matkhau_input').bind('keydown',function(e){
		if (jwerty.is('enter',e)){
		kiemtrapass()
		}
	})
	
	
	
	
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
	$('#btn_batdau,#btn_chidinhkham,#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_lammoi,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieu').button();
	$('#btn_batdau,#btn_hoantat,#btn_luu,#btn_dantoa,#btn_saotoa,#btn_chinhsua').button('disable');	
	openform_shortcutkey();	
	saotaogannhat();
	$('#btn_dantoa').click(function(){
		saotaothuoc();
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
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='DangKham')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan").dialog('open');
		}else{
			$.cookie("in_status", "print_preview"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
			  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InDonThuoc_Bsy');
			 
			  }else{
				  alert("Chưa có đơn thuốc"); 
			 }
		}
	})

	$("#btn_intoa").click(function(){
				 var rowData = $("#rowed3").getRowData(rowed3_select);			
		if(($.trim($('#rowed5').jqGrid('getCell', $("#rowed5").jqGrid('getGridParam', 'selrow'), 'ChanDoan'))=='')&&(rowData['ID_trangthai']=='DangKham')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
			$("#chandoan").dialog('open');
		}else{
			$.cookie("in_status", "print_direct"); 
			if($('#rowed6 .jqgrid-new-row').length==false){
				dong_tam=0
			}else{
				dong_tam=1
			}
			if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
			  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=0",'InDonThuoc_Bsy');
			 $(".modalu78787878975f").dialog("close");
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

$('#miengiam').click(function(){
	 elem=42432543543;
	 rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))
	 dialog_main("Miễn giảm: " , 98, 98, elem, 'pages.php?module=hanhchinh&view=mien_giam&id_form=230&id_donthuoc=' + rowData['ID_DonThuoc']+'&id_luotkham=' + rowData['ID_LuotKham']+'&id_benhnhan='+window.id_benhnhan)
	})
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
        height: 320,
        width: 580,
        modal: true,
        title: 'Chấm điểm',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Lưu": function() {				
				rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));			
				luu_thoatform();
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chamdiem&thaido='+$('#thaido').val()+'&kinhte='+$('#kinhte').val()+'&hailong='+$('#hailong').val()+'&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+$("#rowed3").jqGrid('getGridParam', 'selrow')+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
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
		    "Lưu": function() {			
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
        width: 'auto',
        modal: true,
        title: 'Chẩn đoán',
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {
			"Ok": function() {			
				$( "#chandoan" ).dialog( "close" );
				var rowData = $("#rowed3").getRowData(rowed3_select);	
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_saochandoan&id_kham="+rowed3_select+"&id_benhnhan="+window.id_benhnhan).done(function(data){
					
					laydulieu_khamlamsang();
					//$('#rowed6').jqGrid("setCell", rowed3_select, "chandoan",data );
					if($('#rowed6 .jqgrid-new-row').length==false){
						dong_tam=0
					}else{
						dong_tam=1
					}
					
					if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
					  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InDonThuoc_Bsy');
					 }else{
						  alert("Chưa có đơn thuốc"); 
					 }
				})
			},
			"Can": function() {			
				$( "#chandoan" ).dialog( "close" );
				var rowData = $("#rowed3").getRowData(rowed3_select);
				if($('#rowed6 .jqgrid-new-row').length==false){
					dong_tam=0
				}else{
					dong_tam=1
				}
				if( ($("#rowed6").getGridParam("reccount")-dong_tam)>0){
					  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=benhan_intoathuoc&header=top&id_donthuoc="+rowData['ID_DonThuoc']+"&type=report&id_form=10&tenin=TenGoc&check=&xemtruocin=1",'InDonThuoc_Bsy');
				 
				}else{
					  alert("Chưa có đơn thuốc"); 
				}
			}
		},

    });
	
	$('#btn_hoantat').click(function(){
		$(".hoantat").dialog('open');		
	})
	window.rowed3_select=0;
	window.rowed4_select=0;
	window.reload_status=0;
	window.id_admin=0;
	create_combobox('#toanmau','#toanmau1','.toa_mau','#toa_mau',create_toamau,'','','','data_toathuocmau');
	create_thuocmau('#thuocmau');	
	window.loaikham=  $.ajax({                       
		url: "pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_NhomCLS=20 and ID_LoaiKham<>3918&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=MaVietTat",
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
	  $( ".patient_info1" ).css("width", $( "#patient_info" ).width()+"css");		  
	   parent.postMessage('changetitle;<?=$view?>-'+window.id_benhnhan+';Bệnh án;'+$('#panel_tenbn').text() , '*')
	});
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMthuoc&id_benhnhan='+window.id_benhnhan).done(function(data) {
		data=data.split('|||');		
		window.grid_datathuoc= jQuery.parseJSON(data[0]);
		window.id_datathuoc= jQuery.parseJSON(data[1]);
	    create_Dm_thuoc_grid('#DM_thuoc',data[0])
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
	$('body').bind('keydown', function (e) {	
		  var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
		  jwerty.key("ctrl+shift+z", false);
		  if(jwerty.is("ctrl+shift+z",e)){
			  alert('ID_Kham='+ $("#rowed3").jqGrid('getGridParam', 'selrow')+'----------ID_Luotkham='+rowData['ID_LuotKham']+'----------ID_Benhnhan='+window.id_benhnhan+'----------ID_donthuoc='+rowData['ID_DonThuoc']+'----------Đối tượng='+rowData['LoaiDoiTuongKham']);
		  }else if(jwerty.is("ctrl+shift+f",e)){			  
			  window.id_admin=1;
			  $('#btn_dieutriphoihop,#btn_hoantat,#btn_luu,#btn_lammoi,#btn_dantoa,#btn_saotoa,#btn_xemtoa,#btn_intoa,#btn_chinhsua,#btn_phieu').button('enable');
			  ids = jQuery("#rowed3").jqGrid('getDataIDs');
			  $("#rowed4").setColProp('MoTa', {editable: true});
			  $("#rowed5").setColProp('ChanDoan', {editable: true});					 
			  $("#rowed3").setColProp('SoNgayThuoc', {editable: true});
			  $("#rowed3").setColProp('ID_LoaiKham', {editable: true});
			  $('#ghichu').prop('disabled', false);
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
	batdau();
	lammoi();
	$( "#tabs" ).tabs();
	chidinhkham();
	dieutriphoihop();
	$('#prowed6').hide();		
	$('#toanmau').val('Chọn toa mẫu')
	phanquyen();
})
 
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			resizable: true
		,	size:					"30%"
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
		,	east: {
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
		 
	});		
	$('#inner').layout({
    	resizerClass: 'ui-state-default'
		 ,south: {
			resizable: true
		,	size:					"20%"
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
	});
}
var rowed6_curentsel; 
function create_lichsu_donthuoc(){	
	 var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
	 mydata=[];	 
	 $("#rowed6").jqGrid({	
		data:mydata,	 
		datatype: "local",		 	
		colNames:['','','','','','Tên thuốc',"Giá bán", "Đ.dùng", "SL", "Tổng", "Dược xuất", "C.dùng", "T.hiện"],
		colModel:[		
			{name:'trangthaidonthuoc',index:'trangthaidonthuoc',width:"8%",align:'right',hidden:true, editable: false}  ,
			{name:'iddonthuocct',index:'iddonthuocct',width:"8%",align:'right',hidden:true, editable: false}  ,
			{name:'id_dvt',index:'id_dvt',width:"10%",align:'center',hidden:true, editable: false },
			{name:'lavattu',index:'lavattu',width:"10%",align:'center',hidden:true, editable: false }  ,
			{name:'xoa',index:'xoa',width:"3%",align:'center',hidden:false, editable: false}  ,
			{name:'ID_Thuoc',index:'ID_Thuoc',width:"27%", align:'left',hidden:false, editable: true,edittype:"select",editoptions:{value:window.thuoc},formatter: "select",editrules:{custom: true, custom_func: function(value, colName) {
                           return check_idthuoc(value,colName);
                        },formatter: function (cellValue, options, rowObject) {                    
                            return searhicon
                        }}
		    }, 
			{name:'Gia',index:'Gia', width:"8%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
			{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc', width:"10%",align:'left', editable: true,edittype:"select",editoptions:{value:window.duongdung, dataEvents:  [{ type: 'blur', fn: function(e) { 
				savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {		
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{  
						$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);		
						}
					}	
						
                 } }]},formatter: "select"},		 
			{name:'SoThuocThucXuat',index:'SoThuocThucXuat',width:"6%",formatter:currency_convert,align:'right',hidden:false, editable: true
			,newgrid:true,func_grid:"check_soluong",editoptions:{dataEvents: [{ type: 'blur keydown', fn: function(e) {
							
							 ngaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
							 		
							 tongcong_thuoc=parseFloat(ngaythuoc)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+$(e.target).attr('id').split('_')[0]+'_SoThuocThucXuat').val()));	
								
							$('#'+$(e.target).attr('id').split('_')[0]+"_ThanhTien").val(tongcong_thuoc)
							
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
			{name:'ThanhTien',index:'ThanhTien',width:"6%",align:'right',hidden:false,formatter:'number', formatoptions:{decimalPlaces: 1}, editable: true
			,editoptions:{dataEvents: [{ type: 'dblclick', fn: function(e) {
					ngaythuoc=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');
					var row = $(e.target).closest('tr.jqgrow');
              		var tam = row.attr('id');
					sl1ngay=$('#rowed6').jqGrid('getCell', tam, 'SoThuocThucXuat');						
					SoThuocThucXuat=convert_comma_dot_cacl(sl1ngay)* ngaythuoc;
					$(e.target).val(SoThuocThucXuat);					
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
						
                 } }]}
			},
			{name:'SoThuocduocXuat',index:'SoThuocduocXuat', width:"8%",align:'right',hidden:true,formatter:'number', formatoptions:{decimalPlaces: 0}, editable: false},
			{name:'CachDungLieuDung',index:'CachDungLieuDung',width:"8%",align:'right',hidden:false, editable: true
			,editoptions:{dataEvents: [{ type: 'keydown blur', fn: function(e) {
				
					if (jwerty.is('enter',e)){
						
						 $('#rowed6 .jqgrid-new-row').length ? oper="add" : oper="edit";
						savedRow2 = $('#rowed6').jqGrid("getGridParam", "savedRow");
						jQuery("#rowed6").jqGrid('saveRow',savedRow2[0].id,null,null,{"extraparam" : {"oper":oper} }, aftersave,null,null,null,"POST");
					}
					
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
				}}]}
			
			},
			{name:'PhuongThucThucHien',index:'PhuongThucThucHien',width:"7%",align:'center',hidden:false, editable: true,edittype:"select",formatter:'select',editoptions:{value:"0:Hospital;1:Home;2:Seft", dataEvents:  [{ type: 'blur', fn: function(e) { 
					savedRow = $('#rowed6').jqGrid("getGridParam", "savedRow");					 
					if (savedRow && savedRow.length > 0) {		
						if($("#rowed6").find('.jqgrid-new-row').length==false)	{ 	  
						$('#rowed6').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);			
						}
					}	
						
                 } }]}
				
				},
			                      
		],
		//scrollOffset:0,
		inline_editrule:true,
		inline_esc:true,
		cellEdit: true,
		cellsubmit: 'remote',
		cell_move_enter:true,
		afterEditCell: function (rowid, celname, value, iRow, iCol) {
	
		
		 },/*	
		afterSubmitCell: function (serverresponse, rowid, cellname, value, iRow, iCol) {		
			
			if(serverresponse.responseText.split('|')[1]=0){
				return[true,'']
			}else{
				
				return[false,'Toa thuốc đã có xuất tạm không thể đổi hoặc chỉnh số lượng thấp hơn']
			}
			
		 },*/
		
		cellurl : 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donthuoc&hienmaloi=1',
		column:["CachDungLieuDung"],
		func_column:["luoi_CachDungLieuDung"],	
		loadonce: true,
		local:true,
		scroll: false,		 
		cmTemplate: {sortable: false},
		modal:true,
        shrinkToFit: true,
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
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_tienkham&ID_LuotKham='+rowData["ID_LuotKham"]).done(function(data){				
				$('#tongtien').html(data);
			})
			
			return [true,'']
		},
		serializeCellData: function (postdata) { 			
			var rowData = $("#rowed6").getRowData( rowed6_select);
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
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];
			postdata.iddonthuocct=rowData['iddonthuocct'];					
            return postdata;
		},	
		width:100,
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		afterInsertRow: function(rowid, aData){
    	},
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) { 	
		
			var rowData = $("#rowed6").getRowData( rowed6_select);
			postdata.id_donthuoc=$("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'))['ID_DonThuoc'];
			postdata.id_dvt=rowData['id_dvt'];
			postdata.lavattu=rowData['lavattu'];
			postdata.Gia=rowData['Gia'];
			postdata.iddonthuocct=rowData['iddonthuocct'];			
			postdata.ds_tang =window.ds_tang;
			postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_LuotKham'];			
			postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc'];
			postdata.id_benhnhan=window.id_benhnhan;
			postdata.khamchinh=$("#rowed3").getRowData( rowed3_select)['khamchinh'];
			postdata.id_kham=rowed3_select;
			//console.log(postdata);
            return postdata;			
		},
		 onCellSelect: function (rowid,iCol,cellcontent,e) {			
		    var rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));	
			var rowData1 = $("#rowed6").getRowData( rowid);	
			var cm = $("#rowed6").jqGrid("getGridParam", "colModel");
			window.colName_rowed6 = cm[iCol].name;
        	if((iCol==4)&&(rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&(user_login==rowData['BSChanDoan'])){
              $('#rowed6').jqGrid('delRowData',rowid);
			  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&id='+rowData1['iddonthuocct']+'&oper=del')
            }      
			if(iCol==5){
				
				//var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;			
				//$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
				//$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				//create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');		
			}                  
        }, 
		afterEditCell: function (rowid, celname, value, iRow, iCol) {	
		window.cell_rowed6=celname;
		rowed6_select=rowid;		
		//$("#"+iRow+"_"+name,"#rowed6").bind('blur',function(){
			 // $('#rowed6').saveCell(iRow,iCol);
			//});     
			if(iCol==5){					
				var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;			
				$('#rowed6 #'+iRow+'_ID_Thuoc').hide(); 
				$('#rowed6 #'+iRow+'_ID_Thuoc').before( '<input id="'+iRow+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
				create_combobox_inline('#'+iRow+'_ID_Thuoc1','#'+iRow+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+iRow+'_ID_Thuoc').val());
				
				$('#'+iRow+'_ID_Thuoc1').keyup(function(e){					
					if (jwerty.is('enter',e)){
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
			$('#lui_rowed3').hide();
		 	$('body').unbind('click')
		
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
						$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 
					}
				else if (rowdata6['trangthaidonthuoc']=='FullNormal'){
						$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
						$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
						$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
						$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
						$("#rowed6").setGridWidth($(".ui-layout-east").width());
						$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 
					}
				else if (rowdata6['trangthaidonthuoc']=='NotFull'){
						$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
   						$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
						$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('tralai').addClass('laykhongdu');
						//$("#rowed6").setColProp('SoThuocThucXuat', { hidden: { value: contract_list} });
						
						$("#rowed6").jqGrid('showCol','SoThuocduocXuat');
						$("#rowed6").setGridWidth($(".ui-layout-east").width());
						$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 
					}
				else if (rowdata6['trangthaidonthuoc']=='Return'){
						$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
   						$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
						$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('layhet').removeClass('laykhongdu').addClass('tralai');
						$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
						$("#rowed6").setGridWidth($(".ui-layout-east").width());
						$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 
					}
			}else{
					$('#gview_rowed6 .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
   					$('#gview_rowed6 .ui-widget-content .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$('#gview_rowed6 .ui-widget-header .ui-state-default').removeClass('kolaythuoc').removeClass('laykhongdu').removeClass('tralai').addClass('layhet')
					$("#rowed6").jqGrid('hideCol','SoThuocduocXuat');
					$("#rowed6").setGridWidth($(".ui-layout-east").width());
					$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 
			}
		for(var i=0;i < ids.length;i++){	
			var cl = ids[i];
			be = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
			jQuery("#rowed6").jqGrid('setRowData',ids[i],{xoa:be});
		}
		if((rowData['ID_trangthai']=='DangKham') &&(rowData['BSChanDoan']==user_login)){
				$("#prowed6 .ui-icon-plus").click();
			}
		},
		caption: "Đơn thuốc (Insert để thêm dòng)",
		editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&hienmaloi=1',
	});

	$("#rowed6").jqGrid('navGrid',"#prowed6",{add: false, edit: false, del: true, search: false, refresh: true,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
	$("#rowed6").jqGrid('inlineNav', '#prowed6', {add: true, addtext: '', edittext: '', edit: false,save:true,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						id_donthuoctrave=response.responseText.split('|');
						$('#rowed6').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );
						
						if($.trim(id_donthuoctrave[0])!=''){
						$('#rowed3').jqGrid("setCell", rowed3_select, "ID_DonThuoc",$.trim(id_donthuoctrave[0]) );
						}
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
						  
						   $("#rowed3 #"+id_rowed3_current).click();		
						},200);
					
						//$('#'+rowId+'_ID_Thuoc1').focus();
						//var slton=response.split(';');
						
                    },
					oneditfunc: function(rowId) {	
						window.id_rowed6_edit=rowId;					
						var with_idthuoc=parseFloat($('#jqgh_rowed6_ID_Thuoc').width())-32;
						var with_idduongdung=parseFloat($('#jqgh_rowed6_ID_DuongDungThuoc').width())-32;
						$('#rowed6 #'+rowId+'_ID_Thuoc').hide(); 
						$('#rowed6 #'+rowId+'_ID_Thuoc').before( '<input id="'+rowId+'_ID_Thuoc1" class="editable" type="text" name="Gia" style="width:'+with_idthuoc+'px" role="textbox">' );   
					
						
						
						$('#'+rowId+'_ID_Thuoc1').click(function(e){
							setTimeout(function(){$('#'+rowId+'_ID_Thuoc1').focus();},100)
							
							})
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc');
						$('#DM_thuoc').data('input_focus','#'+rowId+'_ID_Thuoc1');
						
						if(is_rowed3select==0){
							$('#'+rowId+'_ID_Thuoc1').focus();
							$('#'+rowId+'_ID_Thuoc1').select();
						}
						
					 	$("#rowed6").jqGrid('unbindKeys');	
						number_textbox('#'+rowId+'_SoThuocThucXuat');
						inline_enter(rowId)
					},	
                    afterrestorefunc: function(rowId) {	
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");					
						$('#rowed6').focus();						
                    }				 
                }
            	},	
            editParams: {
				keys:true,				 
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
						create_combobox_inline('#'+rowId+'_ID_Thuoc1','#'+rowId+'_ID_Thuoc','.dialog_dm_thuoc','#DM_thuoc',$('#rowed6 #'+rowId+'_ID_Thuoc').val());
						
					 	$("#rowed6").jqGrid('unbindKeys');		
						inline_enter(rowId);
						number_textbox('#'+rowId+'_SoThuocThucXuat');
					},	
                    afterrestorefunc: function(rowId) {	
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("keyup");
						$('#'+rowId+'_ID_Thuoc1,.dialog_dm_thuoc .ui-jqgrid-hbox').unbind("click");
						$('body').unbind("click");	
						$('#rowed6').focus();									   
					},	 
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
		colNames:['Loại khám',"Bác sỹ", "Giờ", "Ngày", "N.T", "H.thuốc", "ID_DonThuoc","ID_LuotKham","ID_trangthai","","","","","","","","","","","",""],
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
			editoptions: { dataEvents:  [{ type: 'blur', fn: function(e) { 
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
			{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham',width:"5%",align:'center',hidden:true,editable:false}					                            
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
		 
		 if(rowData['khamchinh']==0){
			 $("#btn_xemtoa").button('disable');
			 $("#btn_intoa").button('disable');			 
		 }else{
			 $("#btn_xemtoa").button('enable');
			 $("#btn_intoa").button('enable');
		 }
			is_rowed3select=1;								
			id_rowed3_current=id;
			$("#rowed3").find('.ui-state-hover').removeClass('ui-state-hover');
			$("#rowed3").find('td.ui-state-highlight').removeClass('ui-state-highlight');
			$("#rowed4").find('.ui-state-hover').removeClass('ui-state-hover');
			$("#rowed4").find('td.ui-state-highlight').removeClass('ui-state-highlight');	
			$("#rowed5").find('.ui-state-hover').removeClass('ui-state-hover');
			$("#rowed5").find('td.ui-state-highlight').removeClass('ui-state-highlight');			
				var rowData = $("#rowed3").getRowData(id);	
				if((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){								
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
				
				if(($($("#rowed6").find('.jqgrid-new-row')).length==false)&&(rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua')&&(user_login==rowData['BSChanDoan'])&&(IsDoctor==1)){
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
						}else if(tam1_cls[2]==4556){
							tam1_cls[1]='kham_suc_khoe_tong_quat';
						}
						else if(tam1_cls[2]==38){
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
					$('.chuyenthanhbschinh a').css({'color': '#CCC'});	
					$('.chuyenbschinh a').css({'color': '#CCC'});	
					$('.saothuoctoaphu a').css({'color': '#CCC'});					
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
		for(var i=0;i < tmp1.length;i++){
			var rowData = $("#rowed3").getRowData(tmp1[i]);	
			if(rowData["homnay"]==1){
				$("#rowed3").jqGrid('setRowData', tmp1[i], false, { color: 'red',border:'1px solid #BBBBBB' });
			}
			if(rowData["khamchinh"]==3 || rowData["khamchinh"]==1){
				jQuery("#rowed3").jqGrid('setCell', tmp1[i], 'BSChanDoan', '', {'font-weight': 'bold'});
			}
		}
		},	  
		caption: "Khám lâm sàng <span></span>"
	});		   
	$("#rowed3").jqGrid('unbindKeys');
		  $('.ui-jqgrid-sdiv td[aria-describedby="rowed3_BSChanDoan"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_GioTao"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_NgayTao"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_SoNgayThuoc"],.ui-jqgrid-sdiv td[aria-describedby="rowed3_NgayHetThuoc"]').remove();	
} 
function create_lichsu_dienbienbenh(){	 
	 $("#rowed4").jqGrid({
		 datastr:{},
        datatype: "jsonstring",		 	
		colNames:['Diễn biến bệnh'],
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
		colNames:['Tên đơn thuốc', 'Tên người tạo','','','','',''],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc'},
			{name:'cachdung',index:'cachdung'},	 
			{name:'PhuongThucThucHien',index:'PhuongThucThucHien'},	
			{name:'ID_DuongDungThuoc',index:'ID_DuongDungThuoc'},	
			{name:'SoThuocDeNghiTheoDon',index:'SoThuocDeNghiTheoDon'},	
			{name:'TenGoc',index:'TenGoc'},	
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
				saotaothuoc();
				window.saotaophu=0;	
			}
			
		},	  
		
	});	
		
} 


function resize_control(){	 
	$("#rowed3").setGridWidth($(".ui-layout-west").width());
	$("#rowed3").setGridHeight($(".ui-layout-west").height()-78);
	$("#rowed4").setGridWidth($(".ui-layout-center .ui-layout-north").width());
	$("#rowed4").setGridHeight($(".ui-layout-center .ui-layout-north").height()-25); 
	$("#rowed5").setGridWidth($(".ui-layout-center .ui-layout-center").width());
	$("#rowed5").setGridHeight($(".ui-layout-center .ui-layout-center").height()-25); 
	$("#khamicd10").setGridWidth($(".ui-layout-center .ui-layout-south").width());
	$("#khamicd10").setGridHeight($(".ui-layout-center .ui-layout-south").height()-25); 
	$("#rowed6").setGridWidth($(".ui-layout-east").width());
	$("#rowed6").setGridHeight($(".ui-layout-east").height()-210); 

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
		//window.id_rowed3_current=$("#rowed3").jqGrid('getGridParam', 'selrow');
		if(batdau_status==2){
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&hienmaloi=1&action=controler&id_benhnhan='+window.id_benhnhan).done(function(data){
			
			window.id_rowed3_current=data;
			//alert(id_rowed3_current);
			window.batdau_luotkham=1;			
			laydulieu_khamlamsang();
			window.batdau_status=1;	
			
			});
		}else{
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controler&id_kham='+id_rowed3_current+'&ID_LuotKham='+$('#rowed3').jqGrid('getCell', id_rowed3_current, 'ID_LuotKham')).done(function(data){	
								
					$('#btn_lammoi').trigger('click');
			
			});
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


function create_combobox_inline(input,input1,dialog,grid,defaultvalue){				
		afterInit_combox_inline(input,dialog,grid,input1);
		init_combox_inline(input,input1,dialog,grid,defaultvalue);					
	}	

function init_combox_inline(input,input1,dialog,grid,defaultvalue){    
jwerty.key('tab', false);

if (typeof defaultvalue != 'undefined'){
	
	
	var idToDataIndex = $(grid).jqGrid('getGridParam','_index');	
	trang=Math.ceil(id_datathuoc.indexOf(parseFloat(defaultvalue))/200);
	//
		$(grid).jqGrid('setGridParam', { loadComplete: function(data){ 				
			$(grid).jqGrid("setSelection",defaultvalue, true);					
			var columnNames = $(grid).jqGrid('getGridParam','colModel');
			ten = $(grid).jqGrid('getCell', defaultvalue, columnNames[0].name);	
			//alert(trang);
			//console.log(ten);
			//console.log(trang);
			$(input).val(ten);	
			$(input1).val(defaultvalue);
			$(grid).jqGrid('setGridParam', { loadComplete: function(data){ } })
		 } } );		
		$(grid)[0].p.search = false;
		$.extend($(grid)[0].p.postData,{filters:""});			
		$(grid).jqGrid('setGridParam', {page:parseInt(trang)}).trigger('reloadGrid')							
		
		
			
	

	
		
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
		colNames:['Tên thuốc', 'Hoạt chất','Tên biệt dược', 'Tên nhóm thuốc','','','','bhyt'],
		colModel:[			
			{name:'TenBietDuoc',index:'TenBietDuoc'}, 
			{name:'TenNhomThuoc',index:'TenNhomThuoc', searchoptions: { sopt: ['cn'] }},					 
			{name:'MaThuoc',index:'MaThuoc',hidden :true},	 	
			{name:'ID_DuongDung',index:'ID_DuongDung',hidden :true},	
			{name:'DonGia',index:'DonGia',hidden :true},	
			{name:'ID_dvt',index:'ID_dvt',hidden :true},	
			{name:'LaThuoc',index:'LaThuoc',hidden :true},	 	 
			{name:'bhyt',index:'bhyt',hidden :true},
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
						$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
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
						$('#rowed6').jqGrid("setCell", rowed6_select, "Gia",rowData['DonGia'] );	
						
						
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
			/*ids_DM_thuoc=$('#DM_thuoc').jqGrid('getDataIDs');	
			for(i=0;i<=ids_DM_thuoc.length;i++){
				var rowData = $(elem).getRowData(i);	
				if(rowData['bhyt']==1){					
					$("#DM_thuoc #" + ids_DM_thuoc[i]).find("td").css("background-color", "#CCC!important");
				}
			}*/
		},	  		
	});	
	 $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });				 
	 $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $("#DM_thuoc").jqGrid('bindKeys', {} );		
} 	

function inline_enter(rowid){	
	 $('#'+rowid+'_SoThuocThucXuat').blur(function (){				
			 aa=$('#rowed3').jqGrid('getCell', $("#rowed3").jqGrid('getGridParam', 'selrow'), 'SoNgayThuoc');				
			 tongcong_thuoc=parseFloat(aa)* parseFloat(convert_comma_dot_cacl($('#rowed6 #'+rowid+'_SoThuocThucXuat').val()));				
			$('#rowed6 #'+rowid+'_ThanhTien').val(tongcong_thuoc);
			
	  });
	$('#rowed6 #'+rowid+'_ID_Thuoc1,#rowed6 #'+rowid+'_ID_DuongDungThuoc,#rowed6 #'+rowid+'_SoThuocThucXuat,#rowed6 #'+rowid+'_CachDungLieuDung').unbind('keydown')
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
					if(window.n_chuacogiaban==1){
							setTimeout(function(){
								$( "#dialog-thuochuacogiaban" ).dialog('open');
								},100);	
								delete window.n_chuacogiaban;
						}
						
						
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
		rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
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

	
	
	
		datatosend='{"TienSuNguoiThan":'+JSON.stringify($('#gia_dinh').val());
		datatosend+=',"TienSu":'+JSON.stringify($('#benh_nhan').val());
		datatosend+=',"DiUng":'+JSON.stringify($('#di_ung').val());
		datatosend+=',"ghichu":'+JSON.stringify($('#ghichu').val());
		datatosend+=',"ID_BenhNhan":"'+window.id_benhnhan+'"';
		datatosend+=',"ID_TienSuBenh":"'+window.id_tiensubenh+'"';
		datatosend+=',"ID_Donthuoc":"'+rowData['ID_DonThuoc']+'"';
		datatosend+=',"ID_LuotKham":"'+rowData['ID_LuotKham']+'"';
		if($('#taikham').is(':checked')){
			datatosend+=',"ngaytaikham":"'+$('#ngaytaikham').val()+'"';
			datatosend+=',"noidungtaikham":'+JSON.stringify($('#noidungtaikham').val());
		}else{
			datatosend+=',"ngaytaikham":""';
			datatosend+=',"noidungtaikham":""';
		}
		datatosend+='}';
		datatosend=$.parseJSON(datatosend);
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_luu&hienmaloi=1',datatosend).done(function(data){
			
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
		colNames:['Tên thuốc', 'Hoạt chất','Tên biệt dược'],
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
		colNames:['chẩn đoán', 'Tên bác sỹ','Ngày giờ'],
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



function create_icd10(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['CICD10', 'VVIET','NHOM'],
		colModel:[			
			{name:'CICD10',index:'CICD10'}, 
			{name:'VVIET',index:'VVIET'},					 
			{name:'NHOM',index:'NHOM'}
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: true,		 
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
		},	  		
	});					 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
	 $(elem).jqGrid('bindKeys', {} );
		
} 	

function create_khamicd10(){	 
	 $("#khamicd10").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamicd10&idbenhnhan='+window.id_benhnhan,
		datatype: "json",		 	
		colNames:['Mã','ICD10'],
		colModel:[
			{name:'maicd10',index:'maicd10',width:"30%"}, 
			{name:'vviet',index:'vviet',width:"70%"},        		                            
		],
		loadonce: false,
		scroll: false,		 
		modal:true,
        shrinkToFit: true,
		rowNum: 1000000000,
		rowList:[],
		viewrecords: false,	
		ignoreCase:true,	
		sortorder: "asc",
	    grouping: true,
		editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_mota',
		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'	 
		serializeRowData: function (postdata) {		
		return	postdata				
		},
		onSelectRow: function(id){	
			jQuery("#rowed4").jqGrid('saveRow',window.rowed4_select);
			setTimeout(function(){
				if(grid_click_status=="rowed4"){	
					grid_scroll("#rowed3",id);
					grid_scroll("#rowed5",id);
				}
			},200);			
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			
 		},
		loadComplete: function(data) {
		  	
		},
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
	 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc_soluong&ds_kho='+ds_kho+'&soluong='+tongcong_thuoc+'&id_thuoc='+$('#'+id_row+'_ID_Thuoc').val()).done(function(data){
		data=data.split(';;');		
		if(data[1]==0){		
			window.thieuthuoc=1;
			$('#dialog_sothuoc').html(data[0]);		
			$('#dialog_sothuoc #tenthuocton').html('<strong>'+$('#'+id_row+'_ID_Thuoc1').val()+'</strong>')			
			$('#dialog_sothuoc').dialog('open');	
			$('.n_btn1').focus()
				
		}else{
			$('#'+id_row+'_ThanhTien').focus();
		}
		})		
	}
	}



function right_menu(){
	
	$('.chuyenthanhbschinh').click(function(){
		rowData = $("#rowed3").getRowData( rowed3_select)
		
		if(id_admin==1){
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				$('#btn_lammoi').click();
				})
		}else{
			if ((rowData['ID_trangthai']=='DangKham'||rowData['ID_trangthai']=='DangSua'||rowData['ID_trangthai']=='DaThucHien')&&((user_login==rowData['bschinh'])||(user_login==rowData['BSChanDoan']))&&(IsDoctor==1)&&(rowData['luotkhamphu']>1)){
			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chuyenbschinh&oper=1&id_luotkham='+rowData['ID_LuotKham']+'&id_kham='+rowed3_select+'&id_donthuoc='+rowData['ID_DonThuoc']).done(function(){
				$('#btn_lammoi').click();
				})
			}
			
		}
		
	})
	$('.chuyenbschinh').click(function(){
		rowData = $("#rowed3").getRowData( rowed3_select)
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
		$('#ghichu').prop('disabled', true);
		$('#taikham').prop('disabled', true);
		$('#ngaytaikham').prop('disabled', true);
		$('#noidungtaikham').prop('disabled', true);
		if((rowData['ID_trangthai']=='DangKham')||(rowData['ID_trangthai']=='DangCho')){
			$('#btn_hoantat span').html('Hoàn tất');	
		}else{
			$('#btn_hoantat span').html('Đã Hoàn tất');	
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
					$('#ghichu').prop('disabled', false);
					$('#taikham').prop('disabled', false);
					$('#ngaytaikham').prop('disabled', false);
					$('#noidungtaikham').prop('disabled', false);					
				}else{
					$('#btn_hoantat,#btn_luu').button('disable');
					create_combobox_disable('#toanmau');
					$('#ghichu').prop('disabled', true);
					$('#taikham').prop('disabled', true);
					$('#ngaytaikham').prop('disabled', true);
					$('#noidungtaikham').prop('disabled', true);
				}							
				$('#btn_chinhsua span').html('Sửa');	
				$('#btn_hoantat span').html('Hoàn tất');				
			}else if((rowData['ID_trangthai']=='DangCho')){				
					if(rowData['BSChanDoan']==''){		
						$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_luu').button('disable');	
					}else{		
						$('#btn_hoantat,#btn_dantoa,#btn_saotoa,#btn_chinhsua,#btn_luu').button('enable');						
					}				
					create_combobox_disable('#toanmau');
					$('#ghichu').prop('disabled', true);
					$('#taikham').prop('disabled', true);
					$('#ngaytaikham').prop('disabled', true);
					$('#noidungtaikham').prop('disabled', true);
					$('#btn_hoantat span').html('Hoàn tất');
					$('#btn_chinhsua span').html('Sửa');	
			}else if(rowData['ID_trangthai']=='Xong'){	
						
				$('#btn_saotoa,#btn_dantoa,#btn_hoantat,#btn_luu').button('disable');
				$('#btn_chinhsua').button('enable');
				$('#btn_hoantat span').html('Đã hoàn tất');
				create_combobox_disable('#toanmau');
				$('#ghichu').prop('disabled', true);
				$('#taikham').prop('disabled', true);
				$('#ngaytaikham').prop('disabled', true);
				$('#noidungtaikham').prop('disabled', true);
				$('#btn_chinhsua span').html('Sửa');	
			}	
			
			else if(rowData['ID_trangthai']=='DangSua'){	
				 $('#btn_luu,#btn_dantoa,#btn_saotoa').button('enable');
				 $('#btn_hoantat').button('disable');
				 $('#btn_hoantat span').html('Đã hoàn tất');		
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
				 $('#ghichu').prop('disabled', false);
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
			$('#ghichu').prop('disabled', true);
			$('#taikham').prop('disabled', true);
			$('#ngaytaikham').prop('disabled', true);
			$('#noidungtaikham').prop('disabled', true);
		}
		
	
}
}


function saotaothuoc(){		
			
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
								
						datatosend='{"ID_Thuoc":"'+grid_datathuoc.rows[a]['id']+'","ID_DuongDungThuoc":"'+rowData["ID_DuongDungThuoc"]+'","PhuongThucThucHien":"'+rowData["PhuongThucThucHien"]+'","oper":"add","id_donthuoc":"'+$("#rowed3").getRowData( rowed3_select)['ID_DonThuoc']+'","id_dvt":"'+grid_datathuoc.rows[a]['cell'][5]+'","Gia":"'+grid_datathuoc.rows[a]['cell'][4]+'","iddonthuocct":"'+grid_datathuoc.rows[a]['id']+'","ID_LuotKham":"'+$("#rowed3").getRowData( rowed3_select)['ID_LuotKham']+'","id_benhnhan":"'+window.id_benhnhan+'","id_kham":"'+rowed3_select+'","SoThuocThucXuat":"'+rowData["TenNhomThuoc"]+'"," ":"'+rowed3_select+'","CachDungLieuDung":"'+rowData["cachdung"]+'","lavattu":"'+grid_datathuoc.rows[a]['cell'][6]+'","ThanhTien":"'+rowData["SoThuocDeNghiTheoDon"]+'","khamchinh":"'+$("#rowed3").getRowData( rowed3_select)['khamchinh']+'"}'
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
												initdata : {id_dvt:grid_datathuoc.rows[a]['cell'][5],lavattu:grid_datathuoc.rows[a]['cell'][6],iddonthuocct:$.trim(output[1]),xoa:'X',ID_Thuoc:grid_datathuoc.rows[a]['id'],ID_DuongDungThuoc:rowData["ID_DuongDungThuoc"],SoThuocThucXuat:rowData["TenNhomThuoc"],ThanhTien:rowData["SoThuocDeNghiTheoDon"],CachDungLieuDung:rowData["cachdung"],Gia:grid_datathuoc.rows[a]['cell'][4],PhuongThucThucHien:rowData["PhuongThucThucHien"]},
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
		})
	}
	
	function aftersave(rowId, response,lastsel) {
						id_donthuoctrave=response.responseText.split('|');
						$('#rowed6').jqGrid("setCell", rowId, "iddonthuocct",$.trim(id_donthuoctrave[1]) );						
						if($.trim(id_donthuoctrave[0])!=''){
						$('#rowed3').jqGrid("setCell", rowed3_select, "ID_DonThuoc",$.trim(id_donthuoctrave[0]) );
						}
						$("#rowed3").jqGrid("setSelection",id_rowed3_current, true);
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
				 $('#ghichu').prop('disabled', true);
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
	  width :'auto',	 
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
				 $('#ghichu').prop('disabled', false);
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
	
		rowData = $("#rowed3").getRowData( $("#rowed3").jqGrid('getGridParam', 'selrow'));
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

	
	
	
		datatosend='{"TienSuNguoiThan":'+JSON.stringify($('#gia_dinh').val());
		datatosend+=',"TienSu":'+JSON.stringify($('#benh_nhan').val());
		datatosend+=',"DiUng":'+JSON.stringify($('#di_ung').val());
		datatosend+=',"ghichu":'+JSON.stringify($('#ghichu').val());
		datatosend+=',"ID_BenhNhan":"'+window.id_benhnhan+'"';
		datatosend+=',"ID_TienSuBenh":"'+window.id_tiensubenh+'"';
		datatosend+=',"ID_Donthuoc":"'+rowData['ID_DonThuoc']+'"';
		datatosend+=',"ID_LuotKham":"'+rowData['ID_LuotKham']+'"';
		if($('#taikham').is(':checked')){
			datatosend+=',"ngaytaikham":"'+$('#ngaytaikham').val()+'"';
			datatosend+=',"noidungtaikham":'+JSON.stringify($('#noidungtaikham').val());
		}else{
			datatosend+=',"ngaytaikham":""';
			datatosend+=',"noidungtaikham":""';
		}
		datatosend+='}';
		datatosend=$.parseJSON(datatosend);
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
		})		
	$("#rowed4").bind('click',function(e){
		var row = $(e.target).closest('tr.jqgrow');
        var tam = row.attr('id');
		$("#rowed3").jqGrid("setSelection",tam, true);	
		$("#rowed5").jqGrid("setSelection",tam, true);		
	})	
	
	$("#rowed5").bind('click',function(e){
		var row = $(e.target).closest('tr.jqgrow');
        var tam = row.attr('id');
		  $("#rowed4").jqGrid("setSelection",tam, true);	
		  $("#rowed3").jqGrid("setSelection",tam, true);
	})		
}

</script>
 
 
