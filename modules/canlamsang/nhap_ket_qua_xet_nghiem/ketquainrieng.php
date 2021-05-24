<style>
fieldset{
	   -webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	   border-radius: 5px;
	   width:700px;
	   box-shadow:0px 0px 3px 0px #a0a0a0;
	   border:1px solid #919191;
	   margin-top:2px;
	   margin-left:0px;
	   margin-right:0px;	   
	   margin-right: 0px;			 
	}
	fieldset div{
		display:table;		
	}
	fieldset label{
		display:inline-block;
		 width:40px;
		
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
	body{
		font-size:13px!important;
		 overflow: auto;
		}
	</style>
<label>Chọn mẫu kết quả in riêng:</label>
<select>
  <option value="tinhdo_xetnghiem">Tinh đồ</option>
  <option value="soituoi_xetnghiem">Soi tươi</option>
  <option value="nhuomsoi_dichamdao_xetnghiem">Nhuộm soi dịch âm đạo</option>
  <option value="stoolexam_xetnghiem" selected>Stool exam</option>
  <option value="spermatogram_xetnghiem" selected>Spermatogram</option>
  <option value="gonorrhea_xetnghiem" selected>Gonorrhea</option>
  <option value="nhuomsoi_timnam_xetnghiem" selected>Nhuộm soi</option>
  <option value="huyetdo_xetnghiem" selected>Huyết đồ</option>
</select>
<br /><br />
		<div id="huyetdo_xetnghiem" style="display:none">
        <fieldset>
			<div><label>RBC</label><input id="rbc"lang="luu" style="width:40px;"><label>WBC</label><input id="wbc"lang="luu" style="width:40px;"><label>PLT</label><input id="plt"lang="luu" style="width:40px;">
				<label>HGB</label><input id="hgb" lang="luu"style="width:40px;"><label>NEUT</label><input id="neut"lang="luu" style="width:40px;"><label>HCT</label><input id="hct"lang="luu" style="width:40px;">
			</div>
			<br>
			<div>
				<label>LYMPH</label><input lang="luu"id="lymph" style="width:40px;"><label>MCV</label><input lang="luu"id="mcv" style="width:40px;"><label>MONO</label><input id="mono" style="width:40px;">
				<label>MCH</label><input id="mch" lang="luu"style="width:40px;"><label>EO</label><input id="eo" lang="luu"style="width:40px;"><label>MCHC</label><input id="mchc"lang="luu" style="width:40px;">
				<label>BASO</label><input id="baso" lang="luu"style="width:40px;">
			</div>
		</fieldset>
        
       
		<label>Kết quả</label><br>
		<textarea id="ketqua_ir" lang="luu"style="width:710px;height:50px" ></textarea><br>
		<label>Kết luận</label><br>
		<textarea id="ketluan_ir"lang="luu" style="width:710px;height:50px">HUYẾT ĐỒ BÌNH THƯỜNG</textarea><br>
		<label>Chẩn đoán</label><br>
		<textarea id="chandoan_ir"lang="luu" style="width:710px;height:20px"></textarea><br>
        </div>
         <div id="nhuomsoi_timnam_xetnghiem" style="display:none">
         <table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>- Tế bào biểu mô:</label></td><td><input id="rbc"lang="luu" style="width:40px;"></td><td><label>- Bạch cầu:</label></td><td><input lang="luu" id="wbc" style="width:40px;"></td><td><label>- Nấm:</label></td><td><input lang="luu" id="plt" style="width:40px;"></td></tr>
				<tr><td><label>- Trực khuẩn Gram (+)</label></td><td><input id="hgb" lang="luu" style="width:40px;"></td><td><label>- Trực khuẩn Gram (-)</label></td><td><input lang="luu" id="neut" style="width:40px;"></td><td><label>- Cầu khuẩn Gram (+)</label></td><td><input lang="luu" id="hct" style="width:40px;"></td><td><label>- Cầu khuẩn Gram (-)</label></td><td><input lang="luu" id="hct" style="width:40px;"></td></tr>
		</table>
        	
        <br /><br />
        </div>
        <div id="gonorrhea_xetnghiem" style="display:none">
        	<table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>- Tế bào biểu mô gai:</label></td><td><input lang="luu" id="rbc" style="width:40px;"></td><td><label>- Bạch cầu:</label></td><td><input id="wbc" lang="luu" style="width:40px;"></td></tr>
				<tr><td><label>- Nấm:</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>-  Song cầu Gram âm  hình hạt cà phê nằm ngoài tế bào bạch cầu</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
		</table>
        <br /><br />
        </div>
        <div id="spermatogram_xetnghiem" style="display:none">
        	<table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>Màu sắc, tính chất(Appearance)</label></td><td><input lang="luu" id="rbc" style="width:40px;"></td><td><label>- Kiêng giao hợp (Abstinence time)</label></td><td><input lang="luu" id="wbc" style="width:40px;"></td></tr>
				<tr><td><label>- Thể tích (Volume)</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Ly giải (Lyquefaction)</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
                <tr><td><label>- pH</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Mật độ (Concentration)</label></td><td><input id="neut"lang="luu" style="width:40px;"></td></tr>
                <tr><td><label>- Tổng số tinh trùng (Total sperm number)</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>+ PR - tiến tới (Progressive)</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
                <tr><td><label>+ NP - không tiến tới(Non - Progressive)</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>+ MI- không di động</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
                <tr><td><label>- Tỉ lệ sống (Vitality)</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Hình dạng bình thường</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
                <tr><td><label>- Bạch cầu</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Thời gian lấy tinh dịch trước nhận mẫu</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
		</table>
        <br />
        <label>Nơi lấy mẫu</label><br>
		<textarea id="ketluan_ir" lang="luu" style="width:710px;height:30px"></textarea><br>
        <label>Bệnh viện</label><br>
		<textarea id="ketluan_ir"lang="luu"  style="width:710px;height:30px"></textarea><br>
        <label>Nhà</label><br>
		<textarea id="ketluan_ir" lang="luu" style="width:710px;height:30px"></textarea><br>
        <label>- Nhận xét khác</label><br>
		<textarea id="ketluan_ir" lang="luu" style="width:710px;height:30px"></textarea><br>
        <label>Kết luận</label><br>
		<textarea id="ketluan_ir" lang="luu" style="width:710px;height:50px"></textarea><br>
        <br />
        </div>
        <div id="stoolexam_xetnghiem" style="display:none">
         <table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>- Hồng cầu:</label></td><td><input lang="luu" id="rbc" style="width:40px;"></td><td><label>- Bạch cầu:</label></td><td><input lang="luu" id="wbc" style="width:40px;"></td><td><label>- Amib và Kén amib</label></td><td><input lang="luu" id="plt" style="width:40px;"></td></tr>
				<tr><td><label>- Trứng ký sinh trùng đường ruột: </label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Nấm</label></td><td><input lang="luu" id="neut" style="width:40px;"></td></tr>
		</table>
        	
        <br />
         <label>Kết luận</label><br>
		<textarea lang="luu" id="ketluan_ir" style="width:710px;height:50px"></textarea><br><br />
        </div>
         <div id="nhuomsoi_dichamdao_xetnghiem" style="display:none">
         <table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>- Tế bào biểu mô:</label></td><td><input lang="luu" id="rbc" style="width:40px;"></td><td><label>- Bạch cầu:</label></td><td><input lang="luu" id="wbc" style="width:40px;"></td><td><label>- Nấm Candida:</label></td><td><input lang="luu" id="plt" style="width:40px;"></td></tr>
				<tr><td><label>- Trực khuẩn Gram (+)</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Trực khuẩn Gram (-)</label></td><td><input lang="luu" id="neut" style="width:40px;"></td><td><label>- Cầu khuẩn Gram (+)</label></td><td><input lang="luu" id="hct" style="width:40px;"></td><td><label>- Cầu khuẩn Gram (-)</label></td><td><input lang="luu" id="hct" style="width:40px;"></td></tr>
		</table>
        	
        <br /><br />
        </div>
        <div id="soituoi_xetnghiem" style="display:none">
         <table border="1" style="border-collapse:collapse">
            <tr><td>
			<label>- Tế bào biểu mô:</label></td><td><input lang="luu" id="rbc" style="width:40px;"></td><td><label>- Bạch cầu:</label></td><td><input id="wbc" lang="luu" style="width:40px;"></td></tr>
				<tr><td><label>- Hồng cầu:</label></td><td><input lang="luu" id="hgb" style="width:40px;"></td><td><label>- Nấm:</label></td><td><input id="neut"lang="luu" style="width:40px;"></td></tr>
		</table>
        	
        <br /><br />
        </div>
        
		<input type="button" value="Lưu" id="luu_kqir" >
		<input type="button" value="In kết quả in riêng" id="inkqir" >
<script>
$(document).ready(function(){
		$("#luu_kqir").button();
		$("#inkqir").button();
		$( "select" ).change(function() {
    var str = "";
    $( "select option:selected" ).each(function() {
      str += $( this ).val() + " ";
	  window.tenclass=$( this ).val();
	 $("#tinhdo_xetnghiem").hide();
	 $("#soituoi_xetnghiem").hide();
	 $("#nhuomsoi_dichamdao_xetnghiem").hide();
	 $("#stoolexam_xetnghiem").hide();
	 $("#spermatogram_xetnghiem").hide();
	 $("#gonorrhe_xetnghiema").hide();
	 $("#nhuomsoi_timnam_xetnghiem").hide();
	 $("#huyetdo_xetnghiem").hide();
    });
    $( "#"+str ).show();
  })
  .trigger( "change" );
  $("#luu_kqir").click(function(){
	  phancach = "";
		dataToSend = '';
		$('#'+window.tenclass).find(':input[type=text],select,textarea,input').each(function() {
	
			if ($(this).attr("lang") == "luu") {
			  
				dataToSend += phancach + this.value   ;
			  
			}
			phancach = "|||";
	
		});
		
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu_kqir&hienmaloi=3&id_kham=<?=$_GET["id_kham"]?>&ketqua='+									dataToSend)
											.done(function( gridData ) {	
																tooltip_message( "Đã lưu" );
																 })
																.fail(function() {
																tooltip_message( "Có lỗi trong quá trình cập nhật" );
																});
 	})
	$("#inkqir").click(function(e){	
		
		$.cookie("in_status", "print_preview"); 
		// var ketqua=jQuery.parseJSON(ketqua);
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action="+window.tenclass+"&header=top&id_benhnhan=<?=$_GET["id_benhnhan"]?>&id_kham="+<?=$_GET["id_kham"]?>+"&type=report&id_form=10",'XetNghiem');
		$(".frame_u78787878975f").css("width","793px");
		
	});
})
</script>