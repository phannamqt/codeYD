<style type="text/css">
 
.form_row label {
	text-align: right!important;
}
</style>
<body>
<div class="form_search">
        <div class="form_row" style="vertical-align:top;width:50%"  >
          <div>
            <label for="tungay" style="width:90px;" >Từ ngày</label>
            <input id="tungay" name="tungay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
            <label for="denngay" style="width:273px;">Đến ngày</label>
            <input id="denngay" name="denngay" style="width:70px;" value="<?php echo date("d-m-Y") ?>" type="text">
          </div>
          <div>
            <label for="tuso" style="width:90px;">Từ số</label>
            <input id="tuso" name="tuso" style="width:70px;" type="text">
            <label for="denso" style="width:273px;">Đến số</label>
            <input id="denso" name="denso" style="width:70px;" type="text">
          </div>
          <div>
            <label for="maKH" style="width:90px;">Mã khách hàng</label>
            <input id="maKH" name="maKH" style="width:70px;" type="text">
            <label class="hienthi" id="maKH1" style="width:350px;"></label>            
          </div>
          <div>
            <label for="maKHO" style="width:90px;">Mã kho</label>
            <input id="maKHO" name="maKHO" style="width:70px;" type="text">
            <label class="hienthi" id="maKHO1" style="width:350px;"></label>            
          </div>
          <div>
            <label for="ghichu" style="width:90px;">Ghi chú</label>
            <input id="ghichu" name="ghichu" style="width:429px;" type="text">                  
          </div>
          <div>
            <label for="maThuoc" style="width:90px;">Mã thuốc</label>
            <input id="maThuoc" name="maThuoc" style="width:70px;" type="text">
            <label class="hienthi" id="maThuoc1" style="width:350px;"></label>            
          </div>
         
 		</div>
</div> 
 </body>
 <script type="text/javascript">
 	  jwerty.key('tab', false);
	  jwerty.key('shift+tab', false);		  
	   $('.form_search input[type=text]').bind("keydown", function(e) {			 
            if (jwerty.is("enter",e)||jwerty.is("tab",e)) {   
			
                /* FOCUS ELEMENT */
                var inputs = $(this).parents(".form_search").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);			 
                if (idx == inputs.length - 1) {					 
                    //inputs[0].focus();					 
                } else {				 
					inputs[idx + 1].focus(); //  handles submit buttons										 
                }			 
                return false;
            }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents(".form_search").eq(0).find(":input[type=text]");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
			 
				
        });
 </script>       
        
        