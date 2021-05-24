 
 
 
   
    <div class="form_row">
        <label style="width:70px;">Phòng ban</label>
        <span><select name="phongban" id="phongban" ></select><input type="text" style="display:none" name="text_phongban" id='text_phongban'></span>
		<a style="margin-left:30px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="capnhat" href="#">Cập nhật<span class="ui-icon ui-icon-person"></span></a>
    </div>
    <div class="form_row2">
        <label style="width:70px;">Tầng:</label>
        <span><input type="text" name="text_tang" id='text_tang' style="margin-left:41px; width:225px;" ></span>
    </div>
      <div class="form_row2">
        <label style="width:70px;">Kho:</label>
        <span><input type="text" name="text_kho" id='text_kho' style="margin-left:46px; width:225px;" ></span>
    </div>
    
           
  
</body>
</html> 
<script type="text/javascript">
jQuery(document).ready(function() {
	t=setTimeout(function(){
		$('#phongban').val($.cookie("phongbanclient"));
		$('#phongban1').val($('#phongban :selected').text()); 
		$('#text_tang').val($.cookie("dstang"));
		$('#text_kho').val($.cookie("dskho"));			
	},300);	 
phanquyen();
	window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
			if (!result)
				alert('Không load được danh mục phòng ban');
		}}).responseText;
	phongban1 = phongban.split(";");
	for (i = 0; i <= phongban1.length - 1; i++) {
		temp = phongban1[i].split(":");
		$('#phongban').append($('<option>', {
			value: temp[0],
			text: temp[1]
		}));
	}
	autocompleted_combobox('#phongban');
   $("#capnhat").click ( function () {			 
	   send_message("phongban",$('#phongban').val());
	   send_message("dstang",$('#text_tang').val()) ;
	   send_message("dskho",$('#text_kho').val())     
   } );       
	 
});
  

</script>