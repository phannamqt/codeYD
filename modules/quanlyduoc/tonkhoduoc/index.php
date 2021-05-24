<style>

.ui-jqgrid-labels th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
#panel_main{
	display:block !important;
	background:#F5F3E5!important;
}#main_top{
	background:#F5F3E5;
	height:35px;
	width:1355px;
	float:left;
	border-radius:3px;
	border:#D8CEBE solid 1px;
	margin:5px;
}
#main_bottom{
	height:600px;
	width:1355px;
	float:left;
	margin-left:5px;
	border:#D8CEBE solid 1px;
	background:#F5F3E5;
	
}select{
	width:120px;
}#sub_main_top{
	margin-left:15px;
	margin-top:5px;
}#tabs .ui-tabs-nav li {
    font-size: 90%;
	margin-top: 0.1em;	
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
  background: none repeat scroll 0 0 #F5F3E5;
    border-top:solid  #D8CEBE 1px;
	border-left:solid  #D8CEBE 1px;
	border-right:solid  #D8CEBE 1px;;
    box-shadow: none;
    font-size: 90%;
    margin-top: 0.1em;	
}#tabs .ui-tabs-nav li.ui-tabs-selected, #tabs .ui-tabs-nav li.ui-state-active {
z-index: 1;
}#tabs-1,#tabs-2{
	padding:0!important;
}.trai,.phai,.trai2,.phai2{
	float:left;
}
#tieude{

	height:22px;
	border-bottom:#D7D6CC 1px solid;
	padding-left:5px;
	padding-top:3px;
	font-weight:bold;
}#ghichubs{
	margin-left:2px;
}.ntext{
	width:100px;
	text-align:center;
}
#soluongton{
	width:30px;
	text-align:center;
}
input.ui-button{
	padding:0.3em 1em;
}
#xemdanhsach{
	margin-left:35px;
	margin-top: -1px;
}

.colored{
	background-color:#f9fbe7;
	color:black;
	}
.colored2{
	background-color:#f0f4c3;
	color:black;
	}
	.colored3{
	background-color:#e6ee9c;
	color:#2A120A;
	}
.colored4{
	background-color:#e3f2fd;
	color:black;
	}
.colored5{
	background-color:#bbdefb;
	color:black;
	}
	.colored6{
	background-color:#f9fbe7;
	color:blue;
	}

</style>
<body> 


<div id="dialog_excel" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng chọn loại xuất Excel</p>
  <select id="excel">
  <option value="1">Báo cáo tổng hợp thuốc nội trú hàng ngày</option>
  <option value="2">Báo cáo tổng hợp thuốc nội trú theo tháng</option>
  <option value="4">Báo cáo tổng hợp thuốc ngoại trú hàng ngày</option>
  <option value="5">Báo cáo tổng hợp thuốc ngoại trú theo tháng</option>
  <option value="3" selected>Báo cáo tổng hợp xuất nhập tồn(Thẻ kho)</option>
  <option value="6">Báo cáo tổng hợp thuốc trả lại hàng ngày</option>
  <option value="7">Báo cáo tổng hợp thuốc trả lại theo tháng</option>
</select><br>
	<div style="margin-top:10px; display:none;padding-left:23px" id="option2_">Tháng
    	  <select id="option2_month">
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
              <option value="6">06</option>
              <option value="7">07</option>
              <option value="8">08</option>
              <option value="9">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
		</select> năm <select id="option2_year">
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
		</select>
        
    </div>
</div>




    <div id="panel_main" >  
		<div id="main_top">
        	<div id="sub_main_top">
		    <div style="display:inline-block">
        	<label style="margin-left:1px;font-weight:bold">Từ ngày </label> 
            <input type="text" id="tungay" value="<?php echo date("d/m/Y") ?>" style="text-align:center;width:60px"/>
            <label  style="font-weight:bold"> đến ngày </label> 
            <input type="text" id="denngay" value="<?php echo date("d/m/Y") ?>" style="text-align:center;width:60px"/>
        	</div>
            <label style="margin-left:10px; font-weight:bold">Kho:</label> <input id="kho" type="text" style="margin-left:0px;">
            <!-- <label style="margin-left:40px; font-weight:bold">Lọc theo:</label> <input id="dieukienloc" type="text" style="margin-left:0px;"> -->
            <!-- <label style="margin-left:40px; font-weight:bold">BHYT</label> <input id="isBHYT" type="checkbox" style="margin-left:0px;"> -->
            <input type="button" id="xemdanhsach" value="Xem"/>
             <input type="button" id="xemtheolo" value="Xem theo lô hạn dùng"/>
              <input type="button" id="xuatexcel_XNT" value="Excel xuất nhập tồn(Mẫu3)"/> 
              <input type="button" id="xuatexcel_XNT_A" value="Excel xuất nhập tồn(Mẫu3A)"/> 
            <input type="button" id="xuat_excel" value="Excel"  style="display: none;"/>
            <input type="button" id="xuatexcel" value="Excel_option"  style="display: none;"/>
         
            </div><!--sub_main_top-->
        
        </div><!--main_top-->
        <div id="main_bottom">
        	<table id="rowed3" ></table>
            <!-- <div id="prowed3"><input type="text" style="margin-left: 7px; margin-top: 4px; width: 295px;;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold; text-align:left; box-shadow:none!important;padding: 0px!important;" disabled="" readonly value="Số dòng =" class="disable" id="sodong"></div>  -->
        </div><!--main_bottom-->
    </div>

    
</body>
</html> 
<script type="text/javascript">
    jQuery(document).ready(function() {
		create_combobox_new('#kho',create_kho,'bw','','data_kho');
		create_combobox_new('#dieukienloc',create_dieukienloc,'bw','','data_dieukienloc');
		create_grid();
		resize_control();
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000);
		$("#xemdanhsach").button();
		//$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=1&soluongton='+$('#soluongton').val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');
		$("#xemtheolo").click(function(){
			hienthongbao("Đang tải dữ liệu...")
			$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho_theolovahandung&ac=2&isbhyt='+0+'&fromdate='+ $( '#tungay' ).val()+'&todate='+$( '#denngay' ).val()+'&kho='+$("#kho").val()+'&idkho='+$("#kho_hidden").val()+'&dieukienloc='+$("#dieukienloc_hidden").val(),datatype:'json'}).trigger('reloadGrid');
				resize_control();
		})
		$("#xemdanhsach").click(function(){
			hienthongbao("Đang tải dữ liệu...")
//alert($("#dieukienloc_hidden").val());
		var isbhyt=0;
		if($('#isBHYT').is( ":checked" ))
			{isbhyt=1;
			}else
			{
			isbhyt=0;
			}

			$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=2&isbhyt='+isbhyt+'&fromdate='+ $( '#tungay' ).val()+'&todate='+$( '#denngay' ).val()+'&kho='+$("#kho").val()+'&idkho='+$("#kho_hidden").val()+'&dieukienloc='+$("#dieukienloc_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			resize_control();
		});
			$("#xuat_excel").click(function(){

//alert($('#kho').val());
		var isbhyt=0;
		if($('#isBHYT').is( ":checked" ))
			{isbhyt=1;
			}else
			{
			isbhyt=0;
			}
		window.open('pages.php?module=report&view=quanlyduoc&action=tonkhoThuoc_Excel&type=excel&isbhyt='+isbhyt+'&fromdate='+ $( '#tungay' ).val()+'&todate='+$( '#denngay' ).val()+'&idkho='+$("#kho_hidden").val()+'&kho='+$("#kho").val()+'&dieukienloc='+$("#dieukienloc_hidden").val());
		

		});
		$("#dieukien").click(function(){
		if($('#dieukien').is( ":checked" )){
			$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=2&soluongton='+$('#soluongton').val()+'&kho='+$("#kho").val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}else{
			$("#rowed3").jqGrid('setGridParam',{url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dsthuoc_tonkho&ac=1&soluongton='+$('#soluongton').val()+'&kho='+$("#kho").val()+'&idkho='+$("#kho_hidden").val(),datatype:'json'}).trigger('reloadGrid');
			}
		});



		


	
	 $( "#dialog_excel" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:230,
      modal: true,
      buttons: {
        "OK": function() {
			switch ($('#excel option:selected').val()) {
    case '1':
        window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay&type=excel&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val());
        break;
    case '2':
       window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
    case '3':

	  window.open("pages.php?module=report&view=quanlyduoc&action=excel_TheKho_XNT&type=excel&theonhacungcap=false&from_day="+$("#tungay").val()+"&to_day="+$("#denngay").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc");
        break;
    case '4':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay_ngoaitru&type=excel&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val());
        break;
    case '5':
         window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang_ngoaitru&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
	 case '6':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay_tralai&type=excel&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val());
        break;
	case '7':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang_tralai&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
		}//case
          $( this ).dialog( "close" );
		},
      }
    });


$("#xuatexcel_XNT").click(function(e) {
		 
		  window.open("pages.php?module=report&view=<?=$modules?>&action=Med_Duoc_XNT&type=excel&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()+"&id_kho="+$("#kho_hidden").val());
    });

$("#xuatexcel_XNT_A").click(function(e) {
		 
		  window.open("pages.php?module=report&view=<?=$modules?>&action=Med_Duoc_XNT_Mau3A&type=excel&tungay="+$("#tungay").val()+"&denngay="+$("#denngay").val()+"&id_kho="+$("#kho_hidden").val());
    });

$("#xuatexcel").click(function(e) {
		 
		 $( "#dialog_excel" ).dialog('open');

    });
$("#excel").change(function(){
			$("#option2_month").val('<?= date("m")?>').attr("selected", "selected");
			$("#option2_year").val('<?= date("Y")?>').attr("selected", "selected");
			if($('#excel option:selected').val()==2||$('#excel option:selected').val()==5||$('#excel option:selected').val()==7)
				$("#option2_").show();
			else $("#option2_").hide();
	})





	$.dateEntry.setDefaults({spinnerImage: ''});
	 $("#tungay,#denngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});

	 $("#tungay,#denngay").datepicker({
           showWeek: true, firstDay: 1,
							defaultDate: "+1w",
							changeMonth: true,
							changeYear: true,
							numberOfMonths: 1,
							dateFormat:  $.cookie("ngayJqueryUi"),
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });

	 var myDate = new Date();
		var prettyDate ='01/05/2019';
		$("#tungay").val(prettyDate);


		
	});// end ready
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()+"px");			 
		$("#panel_main").fadeIn(1000); 
		resize_control();	 
	});
	
	/*$responce->rows[$i]['cell']=array($row["tengoc"],$row["SL_TonT12_2014"],$row["SL_N"],$row["SL_X"],$row["TonHienTai"]);*/
	
function create_grid() {
      mydata=[];
        $("#rowed3").jqGrid({
            data: mydata,
            datatype: "local",
            colNames: ['ID','Mã Thuốc','Tên thuốc','ĐVT','Quy cách','Nhóm','Nhà cung cấp','Là thuốc','Số lô','Hạn sử dụng','Giá nhập cuối',
            'SL Tồn đầu 12_2104', 'SL nhập','Tiền nhập', 'SL xuất',
            'Tiền xuất','Xuất nội trú','Xuất ngoại trú','Xuất tiêu hao','Xuất điều chuyển', 'SL tồn','Tồn thực','Chênh lệch NX','Số lần nhập',' Số Lần XUất','Tiền tồn','SL Tủ trực','SLTỒN THỰC TẾ','NhậpBH','TiềnnhậpBH','Xuất_Ngoạitrú_BH_BV','Tiền_Ngoạitrú_BH_BV','Xuất_Nộitrú_BH_BV','Tiền_Nộitrú_BH_BV',''],
            colModel: [
            {name: 'id_thuoc', index: 'id_thuoc',sortable: true, search: true, width: "5%", editable: false, align: 'left', hidden: false,classes:'abc'},
              {name: 'MaThuoc', index: 'MaThuoc',sortable: true, search: true, width: "5%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'tengoc', index: 'tengoc',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'TenDonViTinh', index: 'TenDonViTinh',sortable: true, search: true, width: "6%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'QuyCach', index: 'QuyCach',sortable: true, search: true, width: "9%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'TenNhomThuoc', index: 'TenNhomThuoc',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'NCC', index: 'NCC',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: true,classes:'abc'},
                {name: 'LaThuoc', index: 'LaThuoc', formatter: "checkbox",sortable: true, edittype: "checkbox", editoptions: {value: "1:0"},search: true, width: "4%", editable: false, align: 'left', hidden: false,classes:'abc'},
				{name: 'SoLo', index: 'SoLo', sortable: true, search: true, width: "7%", editable: false, align: 'left', hidden: false,classes:'abc'},
				{name: 'HanSuDung', index: 'HanSuDung', sortable: true, search: true, width: "7%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'GiaCuoi',classes:'colored6' ,sorttype:'float',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, index: 'GiaCuoi', sortable: true,search: true, width: "6%", editable: false, align: 'right', hidden: true},
				{name: 'SL_TonT12_2014', index: 'SL_TonT12_2014',sortable: true, search: true, width: "5%", editable: false, align: 'right', hidden: true},
				{name: 'SL_N',classes:'colored',sorttype:'float' , index: 'SL_N', sortable: true,search: true, width: "5%", editable: false, align: 'right', hidden: false},
				{name:'TT_N',classes:'colored3',sorttype:'float' ,index:'TT_N',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, width:"12%",sortable: true, editable:false,align:'right',hidden:true},
				{name: 'SL_X',classes:'colored',sorttype:'float' , index: 'SL_X', search: true,sortable: true, width: "5%", editable: false, align: 'right', hidden: false},
				{name:'TT_X',classes:'colored3',sorttype:'float' ,index:'TT_X',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, width:"10%",sortable: true, editable:false,align:'right',hidden:true},
				{name: 'SL_X_NOITRU',sorttype:'float' ,classes:'colored2', index: 'SL_X_NOITRU', sortable: true,search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'SL_X_NGOAITRU',classes:'colored2', index: 'SL_X_NGOAITRU',sortable: true, search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'SL_X_TIEUHAONOIBO',sorttype:'float' ,classes:'colored2', index: 'SL_X_TIEUHAONOIBO',sortable: true, search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'SL_X_DIEUCHUYEN',sorttype:'float' ,classes:'colored2', index: 'SL_X_DIEUCHUYEN', sortable: true,search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'TonHienTai',sorttype:'float' ,classes:'colored2', index: 'TonHienTai',sortable: true, search: true, width: "8%", editable: false, align: 'right', hidden: false},
				{name: 'TonThuc',sorttype:'float' ,classes:'colored3', index: 'TonThuc',sortable: true, search: true, width: "8%", editable: false, align: 'right', hidden: false},
				{name: 'ChenhLech',sorttype:'float' ,classes:'colored3', index: 'ChenhLech',sortable: true, search: true, width: "5%", editable: false, align: 'right', hidden: false},
				 {name: 'CountLoHD_N',classes:'colored5',sorttype:'float', index: 'CountLoHD_N',sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'CountLoHD_X',classes:'colored5',sorttype:'float', index: 'CountLoHD_X',sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name:'TT_Ton',sorttype:'float' ,classes:'colored3',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""},index:'TT_Ton',sortable: true,width:"10%", editable:false,align:'right',hidden:true},
				{name: 'CoSoTuTruc',sorttype:'float' ,classes:'colored', index: 'CoSoTuTruc',sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'TonThucTe',sorttype:'float' ,classes:'colored',sorttype:'float', index: 'TonThucTe',sortable: true, search: true, width: "7%", editable: false, align: 'center', hidden: true},
				{name: 'SL_N_BH',index: 'SL_N_BH',sorttype:'float' ,classes:'colored4', sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'TT_N_BH',index: 'TT_N_BH',classes:'colored4',sorttype:'float',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, sortable: true, search: true, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'SLX_NgoaiTru_BH',classes:'colored5',sorttype:'float', index: 'SLX_NgoaiTru_BH',sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'TT_NgoaiTru_BH',classes:'colored5',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, index: 'TT_NgoaiTru_BH',sortable: true, search: true, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'SLX_NoiTru_BH',sorttype:'float' ,classes:'colored5', index: 'SLX_NoiTru_BH',sortable: true, search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'TT_NoiTru_BH',classes:'colored5',sorttype:'float',formatter:'currency',formatoptions:{ thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}, index: 'TT_NoiTru_BH',sortable: true, search: true, width: "10%", editable: false, align: 'center', hidden: true},
				{name: 'MauBaoDong', index: 'MauBaoDong', hidden: true},

            ],
            loadonce: true,
            local:true,
            scroll: true,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
           // sortname: 'tengoc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow:true,
			
			afterShowForm : function (formid) {
				xuongdong(formid);
				lendong(formid);
			},
            onSelectRow: function(id) {
				
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {


            	  var rowData = jQuery('#rowed3').getRowData(rowId);
			
			 	 var id_thuoc=rowData[ "id_thuoc"];
			 	 var tengoc=rowData[ "tengoc"];


			   // alert(columnIndex+'----'+id_thuoc+'--id_kho--'+$("#kho_hidden").val());

				//dialog_main("Xem đơn chấm công " + ' nhân viên', 98, 98, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=formduyetdon&type=test&id_form=139&fromdate="+elem1[0]+"&todate="+elem1[1]);
				dialog_main("Kho "+$("#kho").val()+" - Chi tiết nhập - xuất kho "+tengoc + " từ "+$( '#tungay' ).val()+" đến "+ $( '#denngay' ).val(), 98, 98, 56743265743657, "pages.php?module=quanlyduoc&view=tonkhoduoc&action=chitietnhapkho&type=test&id_form=1&id_thuoc="+id_thuoc+"&id_kho="+$("#kho_hidden").val()+'&fromdate='+ $( '#tungay' ).val()+'&todate='+$( '#denngay' ).val());

							
							},
            onselect: function(rowId, rowIndex, columnIndex) {
				 
              
            },
        
            loadComplete: function(data) {
				hienthongbao("")
				if ($("#rowed3").jqGrid("getGridParam", "datatype") !== "local") {
					setTimeout(function () {						
						
						$("#rowed3")[0].triggerToolbar();
					}, 50);
				}


				var ids = $('#rowed3').jqGrid('getDataIDs');
				for (i = 0; i < ids.length; i++) {
					var rowData = jQuery('#rowed3').getRowData(ids[i]);
					
					 var CountLoHD_N=rowData[ "CountLoHD_N"];
					if(rowData ['MauBaoDong']=='V')

					{
						$("#rowed3").setCell (ids[i],'TonHienTai','',{ background:'yellow'});
					}
					if(rowData ['MauBaoDong']=='D')
					{
						$("#rowed3").setCell (ids[i],'TonHienTai','',{ background:'red'});
					}
					if(CountLoHD_N>1)

					{
						$("#rowed3").setCell (ids[i],'tengoc','',{ background:'yellow'});
					}
				}
			//
				$("#rowed3").jqGrid('footerData', 'set', 
					{ 'tengoc': $("#rowed3").jqGrid('getCol', 'tengoc', false, 'count')+' thuốc.',
					'TT_N': $("#rowed3").jqGrid('getCol', 'TT_N', false, 'sum'),
					'TT_X': $("#rowed3").jqGrid('getCol', 'TT_X', false, 'sum'),
					'TT_Ton': $("#rowed3").jqGrid('getCol', 'TT_Ton', false, 'sum'),
					'TT_NgoaiTru_BH': $("#rowed3").jqGrid('getCol', 'TT_NgoaiTru_BH', false, 'sum'),
					'TT_NoiTru_BH': $("#rowed3").jqGrid('getCol', 'TT_NoiTru_BH', false, 'sum'),

					'TT_N_BH': $("#rowed3").jqGrid('getCol', 'TT_N_BH', false, 'sum'), 
					'TonHienTai': $("#rowed3").jqGrid('getCol', 'TonHienTai', false, 'sum'),
				});
			 
			},

            caption: "Danh sách thuốc tồn"
        });
		$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
		$("#rowed3").jqGrid('bindKeys', {});
		setTimeout(function(){
			$("#xemdanhsach").click();
		},500);
				
    }
	
function resize_control(){
	$("#main_bottom").css("width",$("#panel_main").width()-10+"px");
	$("#main_bottom").css("height",$(window).height()-50+"px");
	$("#rowed3 ").setGridWidth($('#main_bottom').width()-10);
	$("#rowed3 ").setGridHeight($('#main_bottom').height()-152);
}
function create_kho(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idkho=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
}//data_dieukienloc
function create_dieukienloc(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idkho=id;
		var selr = jQuery(elem).jqGrid('getGridParam','selrow');

		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
}//data_dieukienloc
</script>