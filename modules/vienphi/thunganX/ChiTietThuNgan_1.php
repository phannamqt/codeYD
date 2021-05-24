<?php


	
	$data= new SQLServer;
	if($_GET['oper']=='add'){
	$store="{call GD2_GetThongTinBenhNhan (?)}";
	$param = array($_GET['idbenhnhan']);
	$get=$data->query( $store, $param);
	$excute = new SQLServerResult($get);
	$tam1 = $excute->get_as_array();		
	$store_name="{call GD2_demsophieu_FormatThanhToanVienPhi ()}";
	$params = array();
	$get=$data->query( $store_name, $params);
	$excute = new SQLServerResult($get);
	$tam = $excute->get_as_array();
	$store_name1="{call GD2_nocu_get (?)}";
	$params1 = array($_GET['idbenhnhan']);
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam2 = $excute1->get_as_array();
	$store_name1="{call GD2_miengiam_getby_luotkham (?)}";
	$params1 = array( $_GET["ID_LuotKham"] );
	$get1=$data->query( $store_name1, $params1);
	$excute1 = new SQLServerResult($get1);
	$tam3 = $excute1->get_as_array();
	}else{
		$store="{call Gd2_thu_trano_select_byidthutrano (?)}";
		$param = array($_GET["ID_ThuTraNo"]);
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam = $excute->get_as_array();
		$store="{call GD2_miengiam_by_ID_ThuTraNo (?)}";
		$param = array($_GET["ID_ThuTraNo"]);
		$get=$data->query( $store, $param);
		$excute = new SQLServerResult($get);
		$tam3 = $excute->get_as_array();
	
	}
	

?>
<style>

fieldset {
  margin: 0;
  padding: 0;
}

fieldset {display: inline-block; vertical-align: top;}
fieldset {display: inline !ie7; /* IE6/7 need display inline after the inline-block rule */}
    #DM_template td  {	 
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
    .thongtin_tongthe,.thongtin_luotkham_vienphi,.thongtin_lichsuvienphi,.kieuin{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;		
    }
    .thongtin_luotkham_vienphi{	 	 
        padding-bottom:4px;
        padding-top:4px;	
        width: 410px;
    }
    .thongtin_lichsuvienphi{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;		 		
    }
    .thongtin_lichsuvienphi_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }	 
    .kieuin{ 
      padding-bottom:4px;
        padding-top:4px;    
        width: 190px;
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
    }
	
	#mid input
	{
		text-align:right;
		font-size:18px!important;
		font-weight:bold!important;
		margin-top:3px;
	}
	#thongtinnoptien input{
		margin-top:3px;
	}
</style>

<body>

<div id="dialog_lydo_sua" style="display:none">

<textarea style="width:250px" id="lydo_sua">

</textarea>
</div>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_sothuoc" style="display:none"></div>

<div id="dialog_print" style="display:none">

<table>
    <tr>
     	<td rowspan="5">
    <input id="id_print" style="outline: 0;border: none;background-color:#6CF;width: 40px;height: 100px;padding-left: 40px;">
   		</td>
    	<td><strong>
    	1.In 2 liên  </strong> 
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 2.In liên 1  </strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 3.In liên 2 </strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 4.Không in và lưu</strong>
   		</td>
    </tr>
     <tr>     
    	<td>
      <strong>  5.In bill tiếng anh</strong>
   		</td>
    </tr>
    
    
    
</table>
</div>

<div id="dialog_sotien_thieu" style="display:none">
<strong>Diễn giải lý do nợ bill</strong><br>
<textarea style="width:250px" id="lydothieu">

</textarea>
<table>
    <tr>
     	<td rowspan="8">
    <input id="id_thieu" style="outline: 0;border: none;width:90px;height:40px;text-align: center; height:160px; font-size:14px; border: 1px solid #327E04; ">
   		</td>
    	<td><strong>
    	1.Bệnh nhân bỏ về  </strong> 
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 2.Bệnh nhân không đủ tiền  </strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 3.Bệnh nhân quen </strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 4.Bệnh nhân nợ vật lý trị liệu</strong>
   		</td>
    </tr>
     <tr>     
    	<td>
      <strong>  5.Khám sức khỏe</strong>
   		</td>
    </tr>
     <tr>     
    	<td>
      <strong>  6.Nhân viên công ty </strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 7.Khám tại nhà</strong>
   		</td>
    </tr>
     <tr>     
    	<td>
       <strong> 8.Lấy thuốc KGBS(ĐT)</strong>
   		</td>
    </tr>
    
    
</table>
</div>

    <div id="DM_template_container">
        <table id="DM_template"></table>
    </div>
   
       
        <fieldset style="display:inline-block;height:188px;width:580px" id="thongtinnoptien" >
   		 <legend>Thông tin nộp tiền:</legend>
         		 <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block" id="thongtinphieu"><?php if($_GET['oper']=='add'){echo 'TTVP_'.($tam[0][0]+1);}else{echo $tam[0]['MaPhieu']; }?></label> 
   			     <label for="ngay">Ngày</label>  <input type='textbox' id="ngay">    
                 <label style="width:70px;display:inline-block">Thu ngân</label>  <label><?php if($_GET['oper']=='add'){echo $_SESSION["user"]["nickname"];}else{echo $tam[0]['NickName']; }?></label>  <br>  
                 <label style="width:70px;display:inline-block">Người nộp</label>  <input type='textbox' style="width:400px" id="nguoigd" value='<?php if($_GET['oper']=='add'){echo $tam1[0]["HoLotBenhNhan"].' '.$tam1[0]["TenBenhNhan"];}else{echo $tam[0]['tenbn']; }?>'>     <br>  
                 <label style="width:70px;display:inline-block">Địa chỉ</label>  <input type='textbox' style="width:400px" id="diachi" value='<?php if($_GET['oper']=='add'){echo $tam1[0]["DiaChi"];}else{echo $tam[0]['DiaChi']; }?>'>     <br>  
                 <label style="width:70px;display:inline-block">Diễn giải</label>  <input type='textbox' style="width:400px" id="diengiai"  value='<?php if($_GET['oper']=='add'){}else{echo $tam[0]['GhiChu']; }?>'>     <br>  
                 <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Chi phí gốc</label>  <input type='textbox' value='0' disabled id="chiphigoc"> 
                 <label style="font-weight:bold;font-size:12px;width:80px;display:inline-block">Lý do giảm giá</label>  <input id="lydogiamgia" type='textbox' style="width:120px" ><input id="lydogiamgia1" type='textbox' style="display:none" >     <br>  
                 <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tiền đã thu</label>  <input type='textbox' value='<?php if($_GET['oper']=='add'){echo '0';}else{echo $tam[0]['SoTien']; }?>' id="tiendathu" disabled> 
                 <label style="font-weight:bold;font-size:12px;width:80px;display:inline-block">% giảm</label>  <input type='textbox' id="phantram" style="width:50px" value='0'> 
                 <label style="font-weight:bold;font-size:12px">Tiền giảm</label>  <input type='textbox' id="tiengiam" style="width:50px" value='0'>   <br>  
  	   </fieldset>
       <fieldset style="display:inline-block;margin-top:7px;height:180px;width:400px" id="mid">
                <div class="form_row">
                     <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tổng cộng</label>
                    <input lang='luu' name="tongcong" style="width:90px;height:25px" type="text" value="0" id="tongcong" disabled >
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ đầu kỳ</label>
                    <input lang='luu' name="nodauky" style="width:90px;height:25px" type="text" value="<?php 
					
					if($_GET['oper']=='add'){
						if(count($tam2)>0){
							if($tam2[0][0]>0){
								echo  number_format($tam2[0][0], 0, '', '.');
							}else{
								echo 0;
							}
					
						}else{
							echo '0';
						}
					}else{
						if($tam[0]['nocu']>0){
							echo  number_format($tam[0]['nocu'], 0, '', '.');
						}else{
							echo 0;
						} }
					
					
					?>" id="nodauky" disabled >

                    <br>

                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Phụ thu</label>
                    <input lang='luu' name="tongphuthu" style="width:90px;height:25px" type="text" value="0" id="tongphuthu" disabled>

                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Tạm ứng</label>
                    <input lang='luu' name="tamung" style="width:90px;height:25px" type="text" value="<?php 
					
					if($_GET['oper']=='add'){
						if(count($tam2)>0){
							if($tam2[0][0]<0){
								echo  number_format(abs($tam2[0][0]), 0, '', '.');
							}else{
								echo 0;
							}
					
						}else{
							echo '0';
						}
					}else{
						if($tam[0]['nocu']<0){
							echo  number_format(abs($tam[0]['nocu']), 0, '', '.');
						}else{
							echo 0;
						}
						
						 }
					
					
					?>" id="tamung" disabled>
                    <br>
                   
                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Giảm giá</label>
                    <input lang='luu' name="giamgia" style="width:90px;height:25px;background-color:#9F9" type="text" value="0" id="giamgia" disabled>

                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ cuối kỳ</label>
                    <input lang='luu' name="nocuoiky" style="width:90px;height:25px" type="text" value="<?php if($_GET['oper']=='add'){echo '0';}else{echo  number_format($tam[0]['nocuoiky'], 0, '', '.'); }?>" id="nocuoiky" disabled>
                   
                    <br>

                    <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tiền thuốc</label>
                    <input lang='luu' name="tienthuoc" style="width:90px;height:25px;background-color:#9CC " type="text" value="0" id="tienthuoc" disabled>
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Tiền thừa</label>
                    <input lang='luu' name="tienthua" style="width:90px;height:25px" type="text" value="0" id="tienthua" disabled>
                   
                    <br>

                     <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Phải trả</label>
                    <input lang='luu' name="phaitra" style="width:90px;height:25px;background-color:#6CF " type="text" value="0" id="phaitra" disabled>
                    <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Bệnh nhân trả</label>
                    <input lang='luu' name="benhnhantra" style="width: 90px; height: 25px; background-color: #FFC" type="text" value="<?php if($_GET['oper']=='add'){echo '0';}else{echo number_format($tam[0]['SoTien'], 0, '', '.'); }?>" id="benhnhantra"  >

                    <br>

                </div>    
        </fieldset>

        <fieldset style="display:inline-block;;height:188px" id="chonkieuin">
        <legend>Chọn kiểu in:</legend>
                <input type="radio" name="sex" value="1" checked>In phiếu thanh toán<br>
                <input type="radio" name="sex" value="2">In chi tiết xét nghiệm<br>
                <input type="radio" name="sex" value="3">In các cận lâm sàng<br>
                <input type="radio" name="sex" value="4">In toàn bộ các DV sử dụng<br>
                <input type="radio" name="sex" value="5">In bill tiếng Anh<br>
             
           </fieldset>
       
  <div >	 <button id="btn_refesh3" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
  	   	 <button href="#" id="btn_trahet" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Trả hết[F12]</button>  
         <button href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu[Ctrl-S]</button> 
         <button href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</button> 
         <button href="#" id="btn_huy" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy phiếu</button> 
         <button href="#" id="btn_gtgt" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hóa đơn GTGT</button>  
    	 <button href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Liên 1</button>  
    	 <button href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Liên 2</button>  
    
  </div>
   
<div > 
            <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Chi tiết dịch vụ</a></li>
                <li><a href="#tabs-2">Các phiếu tạm ưng</a></li>  
              </ul>
                  <div id="tabs-1"> 
                    <div id="panel_main">
                          <div class="left_col ui-widget-content ui-layout-center"> 
                            <table id="rowed3" style="width:100%" ></table>
                            <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm điều trị phối hợp</label>
          <input lang='luu' name="benhnhantra" style="width:90px" type="text" id="giamdtph" value="<?=$tam3[0]['SoTienGiam_dtphoihop']?>" disabled >
 		  <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm Chỉ Định</label>
          <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_chidinh']?>" id="giamchidinh" disabled >
                          </div > 
          

                          <div class="right_col ui-widget-content ui-layout-east" id="subToathuoc" > 
                             <div class="right_col tren ui-widget-content ui-layout-center"> 
                                <table id="rowed4" style="width:100%" ></table>
                                 <button id="btn_refesh4" style="height:23px;width:23px;margin-left: 25px;margin-top:5px">thêm template</button>
                             </div>
                            
                               <div class="right_col duoi ui-widget-content ui-layout-south"> 
                                <table id="rowed5" style="width:100%" ></table>
                                <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm giá thuốc</label>
          <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_thuoc']?>"  id="giamthuoc" disabled >
                             </div>
          

                          </div > 
                          
                   </div>
                   
                  </div>
                   
                  <div id="tabs-2">            
                
                   </table>
                    </div>
		

            </div>
            
        </div>

</body>
</html>
<script type="text/javascript">

var url_rowed3='';
var	url_rowed4='';

<?php
if(isset($_GET["ID_ThuTraNo"])){	
	echo 'var ID_ThuTraNo='.$_GET["ID_ThuTraNo"].';';
}else{
	echo 'var ID_ThuTraNo=0;';
}
if(isset($_GET["ID_LuotKham"])){	
	echo 'var ID_LuotKham='.$_GET["ID_LuotKham"].';';
}else{
	echo 'var ID_LuotKham=0;';	
}
	
	
	


?>

$('#btn_sua').click(function(){
 $( "#dialog_lydo_sua" ).dialog('open');

})
$('input').click(function(){
    $(this).select();
})
$('#btn_trahet,#btn_sua,#btn_huy,#btn_lien1,#btn_lien2,#btn_trahet,#btn_luu,#btn_gtgt').button();
create_combobox('#lydogiamgia','#lydogiamgia1','.lydo_giamgia','#lydo_giamgia',create_lydogiamgia,'','','','data_lydogiamgia',0)
window.oper='<?=$_GET['oper']?>';
load_form();
var tongcong=0;
var giamgia=0;
var phaitra=0;
var tienthuoc=0;
var giamhientai=0;

var idbenhnhan=<?php if($_GET['oper']=='add'){
						echo   $_GET['idbenhnhan'];
						}else{echo $tam[0]['ID_BenhNhan']; }?>;
					
var id_luotkham=<?php if($_GET['oper']=='add'){
					echo  $_GET["ID_LuotKham"];
					}else{echo $tam[0]['ID_LuotKham']; }?>;

var giam_dtph=<?=$tam3[0]['SoTienGiam_dtphoihop']?>;
var giam_chidinh=<?=$tam3[0]['SoTienGiam_chidinh']?>;
var giam_thuoc=<?=$tam3[0]['SoTienGiam_thuoc']?>;

var id_giam_dtph='<?=$tam3[0]['ID_dtphoihop']?>';
var id_giam_chidinh='<?=$tam3[0]['ID_chidinh']?>';
var id_giam_thuoc='<?=$tam3[0]['ID_thuoc']?>';
var id_giam_nv='<?=$tam3[0]['ID_nv']?>';



var nodauky=<?php if($_GET['oper']=='add'){if(count($tam2)>0){
					echo  $tam2[0][0];}else{
						echo '0';
					}}else{echo $tam[0]['nocu']; }?>;

window.load_complete3=0;
window.load_complete5=0;
window.load_complete4=0;
    $(document).ready(function() {
		$("#id_thieu").keyup(function(e) {
            if($("#id_thieu").val()<0){
				$("#id_thieu").val(0)
			}
			if($("#id_thieu").val()>8){
				$("#id_thieu").val(8)
			}
        });
		
		$('#btn_lien1').click(function(){
			$.cookie("in_status", "print_preview"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=2&type=report&id_form=10&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
			 $('#dialog_print').dialog('close');
		})
		$('#btn_lien2').click(function(){
			$.cookie("in_status", "print_preview"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=3type=report&id_form=11&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
			 $('#dialog_print').dialog('close');
		})
		
		$('#id_print').keydown(function(e){
			if (jwerty.is("enter",e)) {	
			if($('#id_print').val()==4){
				$('#dialog_print').dialog('close');
			}else{
			 $.cookie("in_status", "print_direct"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&kieuin="+$('input[name=sex]:radio:checked').val()+"&lien="+$('#id_print').val()+"&type=report&id_form=10&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
			 $('#dialog_print').dialog('close');
			}
				
			}
			})
		
		
		setTimeout(function(){$("#benhnhantra").focus()},500); ;
		number_textbox('#benhnhantra');
		number_textbox('#phantram');
		number_textbox('#tiengiam');
		
		
		$( "#btn_refesh3" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-refresh"
		  }
		}).click(function(){
			if(window.oper=='edit'){
				$('#rowed3').jqGrid('setGridParam', { datatype: "local" }).trigger("reloadGrid");			
				tinhlai();
			}else{
				$('#rowed3').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");			
				tinhlai();
			}
			})
		$( "#btn_refesh4" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-refresh"
		  }
		}).click(function(){
			if(window.oper=='edit'){
				$('#rowed4').jqGrid('setGridParam', { datatype: "local" }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "local" }).trigger("reloadGrid");
			tinhlai();
			}else{
				$('#rowed4').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				tinhlai();
			
			}
			})
			
		
		 $( "#dialog_sotien" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
      buttons: {
        "Yes": function() {
		
          $( this ).dialog( "close" );
		 	 if($('#benhnhantra').val().split('.').join('')<phaitra){		  
		  		  $( "#dialog_sotien_thieu" ).dialog('open');
			}else{
				luu();	
			}
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
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
    });
	
	
	 $( "#dialog_print" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
      
    });
	
	 $( "#dialog_lydo_sua" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,     
 	  close: function( event, ui ) {
		 if($.trim($('#lydo_sua').val().replace("\n", ""))!=''){
		 	sua();		 
		 }else{
			alert('Nhập lý do sửa');
			return false;
		 }
}
    });
	
	
	$( "#lydothieu" ).keydown(function(e){		
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {				
				$( "#id_thieu" ).focus();
				$( "#id_thieu" ).select();				
				return false;
			}
	});
	$( "#benhnhantra" ).keydown(function(e){		
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {		
			setTimeout(function(){$('#btn_luu').click();},100)		
				
			}
	});
	$( "#benhnhantra" ).keyup(function(e){		
	var tam=$( "#benhnhantra" ).val().split('.').join('');
		tam=parseInt(tam).formatMoney(0, ',', '.')
			$("#benhnhantra").val(tam)
	});
	
	
	
	$( "#id_thieu" ).keydown(function(e){		
			if (jwerty.is("enter",e)) {				
				luu();
				$('#dialog_sotien_thieu').dialog('close')
			}
	});
	
	
	
	 $( "#dialog_sotien_thieu" ).dialog({
      resizable: false,
      height:'auto',
	width:'auto',
	  autoOpen :false,
      modal: true,
     
    });
	
	 $( "#dialog_sothuoc" ).dialog({
      resizable: false,
      height:'auto',
	  
	  autoOpen :false,
      modal: true,
      buttons: {
        "Ok": function() {		 
          $( this ).dialog( "close" );		  
        }
      }
    });
		
		//$('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2').button({disabled:true});
		
		
		
   	$('#giamgia').val(parseInt($('#giamdtph').val())+parseInt($('#giamthuoc').val())+parseInt($('#giamchidinh').val()))
	window.dmkho = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_Kho&id=ID_Kho&name=TenKho', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	
		
      
        $("#panel_main").css("height", $(window).height() - 200 + "px");
        $("#panel_main").fadeIn(1000);
        create_layout();
   		$( "#tabs" ).tabs({
        
         heightStyle:"fill"
         
         });
        //Tạo lưới
		$('#ngay').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
		$('#ngay').val('<?=date("h")?>:<?=date("i")?> <?= date("d")?>/<?= date("m")?>/<?= date("y")?>');
  create_grid();
  create_grid_toathuoc();
  create_grid_toathuoc_chitiet();
  //
  load_complete();
  		resize_control();
        $(window).resize(function() {
            temp = jQuery(window).height() - 200;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
		
        //Lấy thông tin viện phí
//laythongtinvienphi();
$('#btn_trahet').click(function(){
	
	$('#benhnhantra').val(phaitra.formatMoney(0, ',', '.'))
	 
	})
	
	$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f12',e)) {
				 $("#btn_trahet").trigger("click");				 
			}
	});
	$('body').bind('keydown', function (e) {		 
			if (jwerty.is('ctrl+s',e)) {
				 $("#btn_luu").trigger("click");				 
			}
	});
	
	$('#phantram').bind('keyup', function (e) {		 
		$('#tiengiam').val(0);
			sum =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
			 giamhientai=parseInt($('#phantram').val()*sum/100);
			 $('#tiengiam').val(giamhientai)
			
			tinhlai()
	});
	
	$('#tiengiam').bind('keyup', function (e) {		 
	$('#phantram').val(0);
			sum =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
			giamhientai=parseInt($('#tiengiam').val())
			// alert(giamhientai);
			tinhlai()
	});
	
	
	


    $('#btn_luu').click(function(){
		if(($('#phantram').val()>0||$('#tiengiam').val()>0)&&$('#lydogiamgia1').val()==''){
			alert('Vui lòng chọn lý do giảm');
		}else{
			 $('#dialog_sotien').html('Số tiền thu là '+$('#benhnhantra').val()+'.Bạn có muốn tiếp tục')	;
		    $( "#dialog_sotien" ).dialog('open');
		}
		})
	
	
    });
  
  
    function resize_control() {     
        $("#rowed3").setGridHeight($("#panel_main .left_col").height() - 190);
      
        $("#rowed3 ").setGridWidth($(".left_col").width() - 40);

        $("#rowed4").setGridHeight($("#panel_main .right_col.tren").height() - 100);
      
        $("#rowed4 ").setGridWidth($(".right_col").width() - 14);
         $("#rowed5").setGridHeight($("#panel_main .right_col.duoi").height() - 170);
      
        $("#rowed5").setGridWidth($(".right_col").width() - 14);
          
    }
   function resize_subToathuoc() {
    $("#rowed4").setGridHeight($(".left_col").height() - 60);
      
    $("#rowed5").setGridHeight($(".left_col").height() - 30);

   }
    function create_layout() {
         $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "58%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                    resize_control();

                }
                , onopen_end: function() {

             
                }
                , onclose_end: function() {

                 resize_control();
                }

            }
            , east: {
                resizable: true
                        , size: "40%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

         
                }
                , onclose_end: function() {

              
                }
            }
        });
       
   $("#subToathuoc").layout({
    resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "40%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
        
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                   // alert();
                   resize_subToathuoc();
             

                }
                , onopen_end: function() {

             
                }
                , onclose_end: function() {

                
                }

            }
            , south: {
                resizable: true
                        , size: "60%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

        
                }
                , onclose_end: function() {

              
                }
            }
   });

    }
     function create_grid() {
       var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
        $("#rowed3").jqGrid({
            url: url_rowed3,
            datatype: "json",
            colNames: ['','ID_LoaiKham','ID_Kham','ID_LuotKham','MaBenhNhan','TenBenhNhan','Ngày chỉ định','Tên loại khám','Trạng thái','Phí thực hiện' ,'Tên nhóm','Phí gốc','','','',''],
            colModel: [
			{name:'xoa',index:'xoa',width:"2%",align:'center',hidden:false, editable: false,formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        }}
		   ,
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham',  index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'center', hidden: false},                
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'TenTrangThaiCLSCuaBenhNhan', index: 'TenTrangThaiCLSCuaBenhNhan', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'GiaThueNgoaiThucHien',index: 'GiaThueNgoaiThucHien',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: false},
				 {name: 'Giamgia',index: 'Giamgia',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true},
				  {name: 'tongphuthu',index: 'tongphuthu',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "10%", editable: false, align: 'right', hidden: true},
        		{name: 'ExtField1',index: 'ExtField1',hidden: true},
          		{name: 'id_kham_dtph',index: 'id_kham',hidden: true},
        
                
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,

            grouping:true, 
            groupingView : { 
            groupField : ['TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            //groupOrder: ['DESC'],
            groupText : ['<b>{0} : {PhiThucHien}</b>']
             }, 

			onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==0){
              $('#rowed3').jqGrid('delRowData',rowid);
			  $('#rowed3').trigger("reloadGrid");
			  tinhlai();
            }                      
        }, 
            onSelectRow: function(id) {

                    
            },
           ondblClickRow: function(rowId) {
                 },
            onselect: function(rowId, rowIndex, columnIndex) {
            /*    // $(".ui-icon-pencil").trigger('click');
                alert(rowId("MaBenhNhan"));
                alert(rowIndex);
                alert(columnIndex);*/
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
             

            },
            loadComplete: function(data) {
              
			window.load_complete3=1;

                var grid = $("#rowed3"),
    sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
    sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');

grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:', GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien});
	
	
            },
            caption: "Ds chưa thanh toán"
        });
       // $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
      //  $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }








function create_grid_toathuoc() {
      
        $("#rowed4").jqGrid({
            url: url_rowed4,
            datatype: "json",
            colNames: ['','ID_DonThuoc','ID_LuotKham','Bác sĩ kê','Ngày kê toa','Tổng tiền','Tiền giảm'],
            colModel: [
				{name:'laythuoc',index:'laythuoc', width:'2%', align:"right",edittype:'checkbox',formatter: "checkbox",editable:true,formatoptions: {disabled : false},editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				
					 tinhlai();

                 } }]}}, 
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "40%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: true, width: "10%", editable: false, align: 'left', hidden: true},
                {name: 'TenBSKeToa',  index: 'TenBSKeToa', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'NgayBatDauDungThuoc', index: 'NgayBatDauDungThuoc', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'ThanhTien',formatter:"integer", index: 'ThanhTien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'SoTienGiam',formatter:"integer", index: 'SoTienGiam', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                
                
        
                
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            //sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
           // footerrow: true,
          //  userDataOnFooter: true,

          


            onSelectRow: function(id) {

                    
            },
           ondblClickRow: function(rowId) {
       
              

            },
            onselect: function(rowId, rowIndex, columnIndex) {
             
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

             

            },
            loadComplete: function(data) {
				window.load_complete4=1;
				var $this = $(this), ids = $this.jqGrid('getDataIDs'), i, l = ids.length;
			    for (i = 0; i < l; i++) {
			        $this.jqGrid('editRow', ids[i], true);
			    }
				 var tmp1 = $("#rowed4").jqGrid('getDataIDs'); 
              
				if(tmp1.length>0){
					window.id_donthuoc=tmp1[0]
				$("#rowed5").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+tmp1[0],datatype: 'json'}).trigger("reloadGrid");
				}else{
					window.id_donthuoc=0;
				}
            },
            caption: "Toa thuốc"
        });
    }

function create_grid_toathuoc_chitiet() {
      var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
        $("#rowed5").jqGrid({
            data:[],
            datatype: "local",
            colNames: ['','ID_DonThuocCT','Tên thuốc','ĐVT','Đơn giá','SL kê','SL Bn lấy','','','','',''],
            colModel: [
			{name:'xoa',index:'xoa',width:"3%",align:'center',hidden:false, editable: false,formatter: function (cellValue, options, rowObject) {                    
                            return searhicon
                        }}
		   ,
                {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenThuoc', index: 'TenThuoc', search: true, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'Gia', index: 'Gia', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'SoThuocDeNghiTheoDon',formatter:"integer", index: 'SoThuocDeNghiTheoDon', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'ThanhTien',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: true},
                {name: 'ID_Thuoc', index: 'ID_Thuoc', search: false, width: "10%", editable: false, align: 'right', hidden: true},
                {name: 'PhanTramThue', index: 'PhanTramThue', search: false, width: "10%", editable: false, align: 'right', hidden: true},
                {name: 'tongtien', index: 'tongtien', search: false, width: "10%", editable: false, align: 'right', hidden: true},
                {name: 'tongtienvat', index: 'tongtienvat', search: false, width: "10%", editable: false, align: 'right', hidden: true},
                
        
                
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            //sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
           // footerrow: true,
          //  userDataOnFooter: true,

          


            onSelectRow: function(id) {

                    
            },
			onCellSelect: function (rowid,iCol,cellcontent,e) {
			if(iCol==0){
              $('#rowed5').jqGrid('delRowData',rowid);
			  tinhlai();
			 // $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_donthuoc&id='+rowid+'&oper=del')
            }                      
        }, 
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId); 
            
           
            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

             

            },
            loadComplete: function(data) {
              
			setTimeout (function(){
				window.load_complete5=1;
				},500)

            },
            caption: "Toa thuốc chi tiết"
        });
    }

function create_lydogiamgia(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,	
		datatype: "jsonstring" ,
		colNames:['Lý do giảm','Ghi chú'],
		colModel:[			
			{name:'lydogiam',index:'lydogiam'}, 
			{name:'ghichu',index:'ghichu'}
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
function luu(){
	if(($('#lydogiamgia1').val()=='')&&($('#tiengiam').val()>0)){
		alert('xin chọn loại giảm giá');
		return;
	}
	if(tongcong>0){
		miengiam_nv='';
		ids = $("#rowed4").jqGrid('getDataIDs')
		sum = $("#rowed5").jqGrid("getCol", "tongtien", false, "sum");
	    sumvat = $("#rowed5").jqGrid("getCol", "tongtienvat", false, "sum");
			if($('#tiengiam').val()>0){				
				miengiam_nv=',"id_miengiam":"'+$('#lydogiamgia1').val()+'","tien_miengiam":"'+$('#tiengiam').val()+'"';
			}

			giamgia
		var datatosend = '{"id_giam_nv":"'+id_giam_nv+'","id_giam_thuoc":"'+id_giam_thuoc+'","id_giam_chidinh":"'+id_giam_chidinh+'","id_giam_dtph":"'+id_giam_dtph+'","idbenhnhan":"'+idbenhnhan+'","NgayGio":'+JSON.stringify($('#ngay').val())+',"nguoigd":"'+$('#nguoigd').val()+'","diachi":"'+$('#diachi').val()+'","diengiai":"'+$('#diengiai').val()+'","tienthu":"'+$('#benhnhantra').val().split('.').join('')+'","tongcong":"'+tongcong+'","id_luotkham":"'+id_luotkham+'","giamgia":"'+giamgia+'","dskho":"'+$.cookie("dskho")+'","sum":"'+sum+'","sumvat":"'+sumvat+'","iddonthuoc":"'+window.id_donthuoc+'"'+miengiam_nv;			
			datatosend+=',"kham":'+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'))+'';
			
			if($("#rowed5").jqGrid('getGridParam', 'records')>0&&$("#"+ids[0]+"_laythuoc").is(':checked')){
		    datatosend+=',"thuoc":'+JSON.stringify($('#rowed5').jqGrid('getGridParam','data'));
			}
			datatosend+='}'
			//alert(datatosend);
			datatosend=jQuery.parseJSON(datatosend);
			chuoi='';
				//if($("#"+$(e.target).attr('id')).is(':checked')){	
			if($("#rowed5").getGridParam("reccount")>0&&$("#"+ids[0]+"_laythuoc").is(':checked')){
		
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_tonkho&hienmaloi=1',datatosend).done(function(data){
			//data=jQuery.parseJSON(data);
			
			data=data.split(';;')
			if(data[1]==0){
				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+$.cookie("dskho").split(',')[0],datatosend).done(function(data1){
					window.oper='edit';
					ID_ThuTraNo=$.trim(data1);
					load_form();
					$( "#dialog_print" ).dialog('open');
					})
				}else{
					$('#dialog_sothuoc').html(data[0]);
					$('#dialog_sothuoc').dialog('open');
				}
			
			})
			}else{				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+$.cookie("dskho").split(',')[0],datatosend).done(function(data1){
					$('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
					window.oper='edit';
					ID_ThuTraNo=$.trim(data1);
					load_form();
					$( "#dialog_print" ).dialog('open');
					})
				
			}
	   }
	
	}
	
	

	
	
function load_complete(){
	if((load_complete3==0)||(load_complete4==0)||(load_complete5==0)){
		setTimeout(load_complete,50);		
		return;
	}
	
	
	setTimeout(tinhlai,500);
	
}	

function tinhlai(){
	sum =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
	sum1 =  $("#rowed5").jqGrid("getCol", "tongtien", false, "sum");
	 ids = $("#rowed4").jqGrid('getDataIDs');		
	 giamgia=giam_dtph+giam_chidinh+giam_thuoc+giamhientai;
	if($('#'+ids[0]+'_laythuoc	').is(':checked')){		
		tienthuoc=sum1;
		$('#giamthuoc').val(giam_thuoc.formatMoney(0, ',', '.'))
	}else{
		tienthuoc=0;
		giamgia=giam_dtph+giam_chidinh+giamhientai;
		$('#giamthuoc').val(0)
	}
	tongcong=parseFloat(sum)+tienthuoc;
	
    phaitra=tongcong-giamgia+nodauky;		
	$('#phaitra').val(phaitra.formatMoney(0, ',', '.'));
	$('#giamgia').val(giamgia.formatMoney(0, ',', '.'));
	$('#tienthuoc').val(tienthuoc.formatMoney(0, ',', '.'));
	$('#tongcong').val(tongcong.formatMoney(0, ',', '.'));
	}	
	
	
	
	function load_form(){		
		if(oper=='add'){
			$('#btn_trahet,#btn_luu').button('enable');
			$('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2').button('disable');
			$('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", false);
			
			$('.lydogiamgia_button').button('enable')
			url_rowed3 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham;
			url_rowed4 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham;			
		}else{
			$('#btn_trahet,#btn_luu').button('disable');
			$('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2').button('enable');
			$('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", true);
			
			$('.lydogiamgia_button').button('disable')
			url_rowed3 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_ThuTraNo='+ID_ThuTraNo;
			url_rowed4 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_ThuTraNo='+ID_ThuTraNo;			
		}
		
	}
	
	
	function sua(){
		
			
			var datatosend = '{"id_giam_nv":"'+id_giam_nv+'","id_giam_thuoc":"'+id_giam_thuoc+'","id_giam_chidinh":"'+id_giam_chidinh+'","id_giam_dtph":"'+id_giam_dtph+'","idbenhnhan":"'+idbenhnhan+'","id_luotkham":"'+id_luotkham+'","id_thutrano":"'+ID_ThuTraNo+'","iddonthuoc":"'+window.id_donthuoc+'","lydo_sua":'+JSON.stringify($('#lydo_sua').val());			
			
			//alert(datatosend);
			datatosend+=',"kham":'+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'))+'';			
			datatosend+='}';			
			datatosend=jQuery.parseJSON(datatosend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet_sua',datatosend).done(function(){
				window.oper='add';
				load_form()
				})
			
		
		
	}
	
</script>


