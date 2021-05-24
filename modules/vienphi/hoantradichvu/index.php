

 <?php 

	
			$data= new SQLServer;
			$store_name="{call GD2_HuyChiDinh_hoantien (?)}";
			$params = array($_GET['id_huychidinh']);			
			$get=$data->query( $store_name, $params);
			$excute = new SQLServerResult($get);
			$thongtin = $excute->get_as_array();
		
?>
<style>
#gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: -10px;
    margin-top: -5px;
}
#tamthu,#tongtien,#tienthu,#nocuoi,#tienthuoc,#tienvon{
		
			text-align:right;
			font-size: 18px !important;
			font-weight: bold !important;
			margin-top: 3px;
			text-align: right;
		
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
		height:240px;
		margin-top:3px;
				
	}	 
	.diung,.tien_su_benh_nhan,.tien_su_gia_dinh{
		display:inline-block;	
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;	
		vertical-align:top;
		height:185px;		 
	}
	.thongtin_tongthe{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:55%;		
	}
	.thongtin_luotkham{
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:scroll;
		margin-top:2px;
		height:38px;
		margin-left:3px;		
	}
	
	
	.button_panel{
		display:inline-block;
		width:40%;
		 
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
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}
	.lamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:38px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		margin-top:3px;		 
	}
	.canlamsang div,.lamsang div,.canlamsang_luotkham div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-right:2px;
		margin-top:0px;
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
		height:28px;			
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
		margin-left:3px;		
	}
	textarea{
		padding-left:1px;
		padding-bottom:1px;
		border:1px solid #999;
	}
	fieldset label{
	 display:inline-block;
	}
</style>
<body>
<div id="dialog_lydo_sua" style="display:none">

<textarea style="width:250px" id="lydo_sua">

</textarea>
</div>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_print" style="display:none">

<table>
    <tr>
     	<td rowspan="5">
   		 <input id="id_print" style="outline: 0;border: none;background-color:#6CF">
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

	 <div class="top_form ui-widget-content" >
        <div style="padding:2px 0px;" class="thongtin_tongthe">
            <div class="patient_info"></div>      
             
   		 </div>
         <div>
         <fieldset>
                <legend>Thông tin:</legend>
                <table style="width:100%" >
            
                	<tr>
                  	  <td>
                        <label for="ngaylap" style="width:100px; ">Ngày lập phiếu:</label>
                        </td>
                        <td>
                        <input id="ngaylap" name="ngaylap" style="width:130px;" type="text" value="<?php echo $thongtin[0]['NgayGio']->format('H:i '. $_SESSION["config_system"]["ngaythang"]);?>"> 
                      </td>
                      <td>
                         <label for="sophieu" style="width:60px; ">Số phiếu:</label>
                          </td>
                        <td>
                        <input  id="sophieu" name="sophieu" style="width:130px;"type="text" value="<?php echo $thongtin[0]['MaPhieu'];?>"> 
                       </td>
                        <td>
                         <label for="thungan" >Thu ngân:</label>
                          </td>
                        <td>
                        <input id="thungan" name="thungan" style="width:98%;"type="text" value="<?php if($thongtin[0]['DaHoanTien']==0){echo $_SESSION["user"]["nickname"];}else{echo $thongtin[0]['NickName']; }?>">  
                        </td>
                         <td>
                          <label for="nocuoi" ><strong>Nợ cuối:</strong></label>
                           </td>
                        <td>
                        <input id="nocuoi" name="nocuoi" style="width:100%;text-align:right;font-weight:bold;font-size:25px" type="text" disabled>  
                        </td>
                    </tr>
                <tr>
                  	  <td>
                    <label for="nguoigd" style="width:100px; ">Người giao dịch:</label>
                     </td>
                        <td>
                    <input id="nguoigd" name="nguoigd" style="width:130px;"type="text" value="<?php echo $thongtin[0]['tenbn']; ?>"> 
                     </td>
                     <td>
                     <label for="diachi" style="width:60px; ">Địa chỉ:</label>
                      </td>
                        <td colspan="5" align="right">
                    <input  id="diachi" name="diachi" style="width:100%;"type="text" value="<?php echo $thongtin[0]['DiaChi']; ?>"> 
                     </td>
                    </tr>
            
                 <tr>
                  	  <td>
                    <label for="diengiai" style="width:100px; ">Diễn giải:</label>
                     </td>
                        <td  colspan="7">
                    <input id="diengiai" name="ngaylap" style="width:100%;"type="text" value="<?php echo $thongtin[0]['ghichu']; ?>"> 
                   </td>
                    </tr>
                    </table>
                 <table style="width:100%" >
                    <tr>
                    <td  align="right">
                    <label for="tienhuycd" style="width:150px; " id="tienhuycd_label"><strong>TIỀN HỦY CHỈ ĐỊNH:</strong></label>
                    </td>
                    <td >
                    <input id="tienhuycd" name="tienhuycd" style="width:100%;" type="text" value="<?php echo $thongtin[0]['SoTienThucTra']; ?>" disabled> 
                    </td> 
                    <td  align="right">                 
                    </td>
                    <td>                 
                    </td>
                    <td  align="right">
                    <label for="tienthu" style="width:60px; "><strong>TIỀN TRẢ:</strong></label>
                    </td>
                    <td >
                    <input id="tienthu" name="tienthu" style="width:100%;" type="text" value="<?php echo number_format(($thongtin[0]['SoTien']), 0, '', '.');?>"> 
                    </td>
                    </tr>
                </table>
              </fieldset>  
              
        </div>
        <div>
          <a href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu[Ctrl-S]</a>  
          <a href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 1</a> 
          <a href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 2</a> 
          <a href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</a> 
          <a href="#" id="btn_huy" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy phiếu</a>  
    
        </div>
    </div>
       <div id="tabs">
              <ul>
                <li><a href="#tabs-1" id="tab1">Chi tiết dịch vụ</a></li>
                <li><a href="#tabs-2" id="tab2">Chi tiết công nợ bệnh nhân</a></li>  
              </ul>
               <div id="tabs-1"> <table id="rowed3" style="width:100%" ></table>
               </div>
               <div id="tabs-2"><table id="rowed4" style="width:100%" ></table>
               
               </div>
        </div> 
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {	
window.dem=0;
window.id_benhnhan=<?php echo  $thongtin[0]['ID_BenhNhan'];?>;
window.oper='<?php if($thongtin[0]['DaHoanTien']==0){ echo  'add';}
else{echo 'edit';}?>';
window.ID_ThuTraNo='<?php echo $thongtin[0]['ID_ThuTraNo'];?>';
$( "#tabs" ).tabs({heightStyle:"fill"});
$('#tab1').hide();		
$('#tab2').click();
$('#tab2').click(function(){
		   $("#rowed4").setGridHeight($("#tabs-2").height() - 50);      
      	   $("#rowed4 ").setGridWidth($("#tabs-2").width() +20);   
		
		})
create_grid1();
resize_control();

$('#nocuoi').val((<?php echo  $thongtin[0]['nocuoi'];?>).formatMoney(0, ',', '.'));
$('#btn_sua').click(function(){$( "#dialog_lydo_sua" ).dialog('open');})

  
      
   


		 $( "#dialog_sotien" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,
      buttons: {
        "Yes": function() {
		
          $( this ).dialog( "close" );		
		 		 luu(); 	 
				$( "#dialog_print" ).dialog('open');	
				$( this ).dialog( "close" );			
					
			
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	 $( "#dialog_print" ).dialog({
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,      
    });
number_textbox('#tienthu');



setTimeout(function(){$("#tienthu").focus()},500); ;
	
	$( "#tienthu" ).keydown(function(e){		
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {				
					setTimeout(function(){$('#btn_luu').click();},200);
			}
	});
	 $( "#dialog_lydo_sua" ).dialog({
	  title:'Nhập lý do sửa',
      resizable: false,
      height:'auto',
      modal: true,
	  autoOpen :false,     
 	  close: function( event, ui ) {
		 
		},
	   buttons: {
        "Yes": function() {
		
          if($.trim($('#lydo_sua').val().replace("\n", ""))!=''){
		 	sua();		 
			 $( this ).dialog( "close" );
		 }else{
			alert('Nhập lý do sửa');			
			return false;
		 }
        },
        "No": function() {
          $( this ).dialog( "close" );
        }
      }
    });
	$('#id_print').keydown(function(e){
			if (jwerty.is("enter",e)) {	
			if($('#id_print').val()==4){
				$('#dialog_print').dialog('close');
			}else{
			 $.cookie("in_status", "print_direct"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=hoan_ung&header=top&lien="+$('#id_print').val()+"&type=report&tenreport=1&id_form=10&idthutrano="+window.ID_ThuTraNo,'InPhieuChi');
			 $('#dialog_print').dialog('close');
			}
				
			}
			})
   $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;    
	})
   
   $('#lydo_sua').bind('keydown',function(e){	
			if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {			
				$('#dialog_lydo_sua').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
				return false
			}
		})
   
 
   $('#btn_luu,#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button();
   
   
   $('#btn_luu').click(function(){	   
    	$('#dialog_sotien').html('Số tiền thu là '+$('#tienthu').val()+'. Bạn có muốn tiếp tục')	;
		$( "#dialog_sotien" ).dialog('open');
	})
	    trangthai(oper);
	   $('#btn_lien1').click(function(){
	   		$.cookie("in_status", "print_preview"); 
			 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=hoan_ung&header=top&tenreport=1&lien=2&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu');
			 $('#dialog_print').dialog('close');	   
	   })
	   $('#btn_lien2').click(function(){
	   		$.cookie("in_status", "print_preview"); 
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=hoan_ung&header=top&tenreport=1&lien=3&type=report&id_form=10&idthutrano="+window.ID_ThuTraNo,'PhieuThu');
			$('#dialog_print').dialog('close');	   
	   })
   phanquyen();
   
   
})
function luu(){
	if(dem==0){
	window.dem++;
			window.datatosend='{';
			window.datatosend+='"idbenhnhan":'+JSON.stringify(id_benhnhan);
			window.datatosend+=',"nguoigd":'+JSON.stringify($('#nguoigd').val());
			window.datatosend+=',"diachi":'+JSON.stringify($('#diachi').val());
			window.datatosend+=',"diengiai":'+JSON.stringify($('#diengiai').val());
			window.datatosend+=',"tienthu":'+JSON.stringify($('#tienthu').val().split('.').join(''));
			window.datatosend+=',"diengiai":'+JSON.stringify($('#diengiai').val());
		
			window.datatosend+=',"id_huychidinh":'+JSON.stringify('<?php echo $_GET['id_huychidinh'];?>');
			window.datatosend+=',"tienhuychidinh":'+JSON.stringify('<?php echo $thongtin[0]['SoTienThucTra']; ?>');
			
		
		window.datatosend+='}'
		
		
		
		
		//alert(datatosend);
		datatosend =$.parseJSON(datatosend) ;		
	    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1',datatosend).done(function(data){
		   window.ID_ThuTraNo=data;
		  
	   })
	}
	   
   }
   

	function trangthai(oper){
	if(oper=='add'){
		$('#btn_luu').button('enable');		
		$('#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button('disable');
		$('#tienthu').prop('disabled', false);
		$('#tienthuoc,#tienthuoc_label,#tienvon,#tienvon_label').hide()
	}else if(oper=='edit'){		
		$('#btn_luu').button('disable');	
		$('#btn_lien1,#btn_lien2,#btn_sua,#btn_huy').button('enable');
		$('#tienthu').prop('disabled', true);
		$('#tienthuoc,#tienthuoc_label,#tienvon,#tienvon_label').hide()
	}
}

function sua(){
			var datatosend = '{"idbenhnhan":"'+id_benhnhan+'","id_thutrano":"'+ID_ThuTraNo+'","lydo_sua":'+JSON.stringify($('#lydo_sua').val())+',"id_huychidinh":'+JSON.stringify('<?php echo $_GET['id_huychidinh'];?>');				
			datatosend+='}';		
			//alert(datatosend);	
			datatosend=jQuery.parseJSON(datatosend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_sua&hienmaloi=1',datatosend).done(function(data){
				if($.trim(data)==2){
					alert('Bill đã có lượt thanh toán sau không ');
				}else{
					window.oper='add';
					trangthai(oper)
				}
			})
	}
	
  function create_grid1() {      
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietcongno&id_benhnhan='+id_benhnhan,
            datatype: "json",
            colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Số tiền thu','Tiền hủy chỉ định','Tiền miễn giảm','Nợ cuối'],
            colModel: [			
                {name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
                {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
                {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
                {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
                {name: 'TienHuyChiDinh', index: 'TienHuyChiDinh', search: false, width: "20%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
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
			onCellSelect: function (rowid,iCol,cellcontent,e) {			                   
        	}, 
            onSelectRow: function(id) { },
            ondblClickRow: function(rowId) {},
            onselect: function(rowId, rowIndex, columnIndex) {},
            onRightClickRow: function(rowid, iRow, iCol, e) {
                       
            },
            loadComplete: function(data) {      
              	sumTongTienPhaiTra = $("#rowed4").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum');
				sumSoTienThanhToan=$("#rowed4").jqGrid('getCol', 'SoTienThanhToan', false, 'sum');	
				sumTienHuyChiDinh=$("#rowed4").jqGrid('getCol', 'TienHuyChiDinh', false, 'sum');		
				sumGiamGia=$("#rowed4").jqGrid('getCol', 'GiamGia', false, 'sum');		
				
				$("#rowed4").jqGrid('footerData','set', {TongTienPhaiTra: sumTongTienPhaiTra, SoTienThanhToan: sumSoTienThanhToan, TienHuyChiDinh: sumTienHuyChiDinh, GiamGia: sumGiamGia});
            },
           
        });
    }
	
	
 function resize_control() {     
        $("#rowed3").setGridHeight($("#tabs-1").height() - 40);      
        $("#rowed3 ").setGridWidth($("#tabs-1").width() +20);
        $("#rowed4").setGridHeight($("#tabs-2").height() - 40);      
        $("#rowed4 ").setGridWidth($("#tabs-2").width() +20);         
    }
</script>
 
 
