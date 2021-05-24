<head>
  
 
    <script src="js/SlickGrid-master/lib/jquery.event.drag-2.2.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellrangedecorator.js"></script>
	<script src="js/SlickGrid-master/plugins/slick.cellrangeselector.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.core.js"></script>
    <script src="js/SlickGrid-master/slick.formatters.js"></script>
    <script src="js/SlickGrid-master/slick.editors.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.rowselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.grid.js"></script>
    <script src="js/SlickGrid-master/slick.dataview.js"></script>
    <script src="js/SlickGrid-master/controls/slick.pager.js"></script>
    <script src="js/SlickGrid-master/controls/slick.columnpicker.js"></script>
    <script src="js/SlickGrid-master/slick.groupitemmetadataprovider.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>
    <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css" type="text/css"/>
      
  
 


     
    <style type="text/css">
	

	
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}

/*.ui-widget-header .ui-state-focus {
	border: 1px solid #006cab;
	background: #67b021 url(images/ui-bg_highlight-soft_25_67b021_1x100.png) 50% 50% repeat-x;
	font-weight: bold;
	color: #ffffff;
	background:#008ddf;
}*/

.slick-row:hover {
   background:#008ddf;
 }

 .slick-headerrow-column {
      background: #87ceeb;
      text-overflow: clip;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .slick-headerrow-column input {
      margin: 0;   
      width: 100%;
      height: 100%;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }
    #dialog-form{     
    }
    .error{
        border:1px solid  orangered;
    }
    #rowed4{
       height:500px;
       text-align:left;
    }
    #rowed4 .textarea{
        text-align:right;
    }
    #text{
        width: 290px!important;
    }
    div.form_row{
        vertical-align:top;margin-left:40px!important;outline:#327E04;padding: 0.3em;    
    }
    .form_row textarea{
        font-size: 12px;
    }
    div.form_row input[type="text"] {
    border: 1px solid #327E04;
    padding: 0.3em;
    text-align: center;
    width: 230px;
    font: 12px Tahoma,Geneva,sans-serif !important;
    }

   
</style>
</head>

<body style="font:12px Tahoma,Geneva,sans-serif !important"> 
  
          <div style="width:1300px;" id="slickgrid">
            <div id="myGrid" style="width:100%;height:650px;margin-bottom:4px"></div>
          
          </div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {

   
   $(window).resize(function() {		 
		   resize_control();
	})
  var dataView;
  window.grid;
  var data = [];
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: true,
	
  };
  var columns = [  		
 		    
			{name:'Mã',id:'CICD10',field: "CICD10",width: 50},				
			{name:'Chẩn đoán tiếng việt',id:'VVIET',field: "VVIET",width: 500},	 		
			{name:'Chẩn đoán tiếng anh',id:'VANH',field: "VANH",width: 500},
  
  ];



 window.columnFilters = {};

 function filter(item) {
     
        var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; 
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); 

                if(item[c.field] == null)
                    return false;
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {                        
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                      
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{
					if(columnId=='VVIET'||columnId=='VANH' ){
						 if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1)
                       		 return false;	
					}else{
						if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
						 return false;
						}     
					}
					 
               
                }
            }
        }
        return true;
    }

    function testCondition(condition, value1, value2){
        switch(condition) {
            case '<':   var resultCond = (value1 < value2) ? true : false;
                        break;
            case '<=':  var resultCond = (value1 <= value2) ? true : false;
                        break;
            case '>':   var resultCond = (value1 > value2) ? true : false;
                        break;
            case '>=':  var resultCond = (value1 >= value2) ? true : false;
                        break;
            case '!=':  
            case '<>':  var resultCond = (value1 != value2) ? true : false;
                        break;
            case '=':   
            case '==':  var resultCond = (value1 == value2) ? true : false;
                        break;          
        }
        return resultCond;
    }
  $(function () {
	  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
	  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
  
	  
	  dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider,inlineFilters: true});	
      grid = new Slick.Grid("#myGrid", dataView, columns, options);		
	  dataView.onRowCountChanged.subscribe(function (e, args) {
		grid.updateRowCount();			
		grid.render();
  	  });  
	  dataView.setGrouping([
	   {getter: "CHAPTER",
		formatter: function (g) {return  "<strong>"+ g.value + "</strong>  <span style='color:green'>(" + g.count + ")</span>";},			
	    collapsed: true,
		lazyTotalsCalculation: false},
	   {getter: "NHOM",
		formatter: function (g) {return "<strong>"+ g.value + "</strong>   <span style='color:green'>(" + g.count + ")</span>";},	 		
	    collapsed: true,
		lazyTotalsCalculation: false
	  }]);
		 grid.registerPlugin(groupItemMetadataProvider);
		  plugin = new Slick.AutoTooltips();
	   	  grid.registerPlugin(plugin);
		
	  grid.setSelectionModel(new Slick.CellSelectionModel());	
	  grid.setSelectionModel(new Slick.RowSelectionModel());
	  dataView.onRowsChanged.subscribe(function (e, args) {
		grid.invalidateRows(args.rows);
		grid.render();
	  });


  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
        columnFilters[columnId] = $.trim($(this).val());
        dataView.refresh();
		  if( $.trim($(this).val())!=''){
			dataView.expandAllGroups();
			//dataView.expandCollapseGroup(1,"NHOM",true);
		  }else{
			dataView.collapseAllGroups();
		  }
      }
    });		
	
	  grid.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });	  
	grid.init();
    dataView.beginUpdate();
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(data){
		data=$.parseJSON(data)
		dataView.setItems(data);
		dataView.setFilter(filter);		
 		dataView.endUpdate();		
	})
  })
 resize_control();
})

 	function resize_control(){
        var h=$(window).height();
         var w=$(window).width();
      $('#myGrid').css({'height':(h-35)+'px'});
      $('#myGrid').css({'width':(w-10)+'px'});
     
     }
 
</script>