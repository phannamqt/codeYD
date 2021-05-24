<style>

.PopupPanel
{
    position: fixed;
    left: 50%;
    top: 50%;
    background-color: white;
    margin-top: -100px;
    margin-left: -200px;
}


div.form_row input[type="password"] {
    border: 1px solid #327E04;
    text-align: center;
    width: 230px;
}
input[type="password"] {
    height: 15px;
}
input[type="password"], textarea, select {
    border: 1px solid #327E04;
    box-shadow: 2px 2px 2px 0 #DDDDDD inset;
    display: inline-block;
    font-family: segoe ui,Tahoma,sans-serif !important;
    font-size: 11px;
    padding: 3px;
    resize: none;
}

</style>
<body> 


<div id="container">
		<form>
			<fieldset style="width:479px;height:140px" class="PopupPanel">
				
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="tennv">Tên nhân viên:</label> 	<input disabled style="width:180px" type="text" name="tennv" id="tennv" ></div>
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="mkcu">Mật khẩu cũ:*</label> 	<input style="width:180px" type="password" name="mkcu" id="mkcu" ><label id="tb1" for="tb1" style="color: #FF0000">Mật khẩu cũ không đúng!</label><label id="tb2" for="tb2" style="color: #FF0000">Nhập mật khẩu cũ!</label></div>
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="mkmoi">Mật khẩu mới:*</label> 	<input style="width:180px" type="password"type="text" name="mkmoi" id="mkmoi" ></div>
					<div class="form_row" style="vertical-align:top;display:inline-block"  >  <label for="mkmoi1">Nhập lại mật khẩu mới:*</label> 	<input style="width:180px" type="password" name="mkmoi1" id="mkmoi1" ><label id="tb" for="tb" style="color: #FF0000">Mật khẩu không trùng!</label></div>
					
			<div><a id="Luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" href="#" style="margin-left: 140px; margin-bottom: 1px; visibility: visible;" role="button" aria-disabled="false"><span class="ui-button-text">Lưu</span></a></div>
			</fieldset>
		</form>

	</div>
</body>
</html> 
<script type="text/javascript">
jQuery(document).ready(function()
 {	$("#tb").hide();
	$("#tb2").hide();
	 <?php
	  //print_r($_SESSION);
	 echo 'var id_user="'.$_SESSION["user"]["id_user"].'";';
	 echo 'var ten="'.$_SESSION["user"]["fullname"].'";';
	 
	 ?>
	$('#Luu').button();
	var a;
	var b;
	var kt;
	$("#tennv").val(ten);
	$("#tb1").hide();
	$("#mkcu").keyup(function() {
	window.luu=0;
	
	check_pass();
		})
	init_data();
	$("#mkmoi1").keyup(function() {

	check_trungpass();
	});
	//phanquyen();
	
	//nut luu
	$("#Luu").click(function(){ 
	if($("#mkcu").val=""){
		$("#tb2").show();
	}else{
		check_trungpass();
		window.luu=1;
		check_pass();	
	}
	}); 

	setTimeout(function(){$("#mkcu").focus()},500);

})

function init_data(){
     
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=password]').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=password]");
                var idx = inputs.index(this);
				//alert(idx)
                if (idx == inputs.length - 1) {					 
					$('#Luu').focus();
                } else {		

						 inputs[idx + 1].focus();
						 inputs[idx + 1].select();
                }
				
                return false;
             }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=password]");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
        });
}

function check_pass(){
window.kiemtra=false;
	//postData='{"pass":"'+ $("#mkcu").val()+'"}';
	postData='{"pass":'+  JSON.stringify($("#mkcu").val())+'}';
	//alert(postData);
		postData=$.parseJSON(postData);
		$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_passold',postData).done(function(data){ 
			if (data==1){
				window.kiemtra=true;
				$("#mkcu").css("background-color","white");
				//alert(window.kiemtra);
				$("#tb1").hide();
				
				if((window.luu==1)&&(window.kiemtra1===true)){
				save()
				}else if((window.luu==1)&&(window.kiemtra1===false)){
				
				 $("#mkmoi1").focus();
				$("#mkmoi1").select();
				}
			}else{
				window.kiemtra=false;
				$("#mkcu").css("background-color","#F4FA58");
				//alert(window.kiemtra);
				$("#tb1").show();
			if(window.luu==1){
				$("#mkcu").focus();
				$("#mkcu").select();
				
			}
			
			}
		})
}

function check_trungpass(){
window.kiemtra1=false
	//var kt;
		a=$("#mkmoi").val();
		b=$("#mkmoi1").val();
		if(a==b) {
			window.kiemtra1=true
			$("#mkmoi1").css("background-color","white");
			$("#tb").hide();
	
		}else{
			window.kiemtra1=false
			$("#mkmoi1").css("background-color","#F4FA58");
			//$( "#dialog-tb" ).dialog('open');
			$("#tb").show();			
		}
		

}

function save(){

if(kiemtra==true){
			if(kiemtra1==true){
				//====
				//postData='{"pass":"'+ $("#mkcu").val()+'"}';
				//dataToSend='{"mkmoi":"'+ $("#mkmoi1").val()+'"}';
				dataToSend='{"mkmoi":'+  JSON.stringify($("#mkmoi1").val())+'}';
				
					//alert(dataToSend);
				dataToSend=$.parseJSON(dataToSend);
			
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&id='+window.id_edit,dataToSend)
                .done(function( response) {
                    temp = response.split(";");	
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";
					}else{	
						window.id_return= window.id_edit;
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";	
						window.close_edit=true;
					};
					return [success,new_id] ;	
                }); 
				//======
			}
		
		}
	



}
</script>