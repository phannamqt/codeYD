<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<script src="../giaidoan2/js/dojo/dojo/dojo.js" type="text/javascript"></script>
<style>
body{
	overflow:auto;
}
#bieudotheongay{
	height:450px;
}
.diengiai_sinhton, .diengiai_thetrang{
	position:absolute;
	width:100px;	
 }
 .diengiai_sinhton ,.diengiai_thetrang {		 
	 font-size:10px;		 		
 }
 .diengiai_sinhton div,.diengiai_thetrang div{
	 display:inline-block;	 		 		
 }
 #idnhietdo,#idnhietdo2{
	 background-color:red;
	 border-radius: 7px;
	 width:7px;
	 height:7px;
	 margin-right:4px;
 }
 #iddoam,#iddoam2{
	 background-color:#ff8a00;
	 border-radius: 7px;
	 width:7px;
	 height:7px;
	 margin-right:4px;
	 margin-left:4px;		 
 }
</style>
</head>
 
<body>
	<?php
		$tu_ngay='';
		$den_ngay='';
		if(isset($_GET["tu_ngay"]))
		{
		$tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
		}
		else
		{
		$tu_ngay=date("Y-m-d").' 0:00:00';
		}
		if(isset($_GET["den_ngay"]))
		{
		$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
		}
		else
		{
		 $den_ngay=date("Y-m-d").' 23:59:59';
		}
		
		$tn=$_GET["tu_ngay"];
		$dn=$_GET["den_ngay"];
		
		$data= new SQLServer;
		$store_name="{call GD2_SoTheoDoiNhietDo_SelectAll_FromDate_ToDate (?,?)}";
		$params = array($tu_ngay,$den_ngay);
        $get_thongtin=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongso= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		//print_r($thongso);
    ?>
 <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:12px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
         	<span style=" font-size:12px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>    
	<h2 style="text-align:center; font-family:Arial, Helvetica, sans-serif; margin: 0px;">SỔ THEO DÕI NHIỆT ĐỘ - ĐỘ ẨM</h2>
    <h3 style="text-align:center; font-family:Arial, Helvetica, sans-serif; margin: 0px;">(Từ ngày <?=$tn ?> đến ngày <?=$dn ?>)</h3>
    <h3 style="text-align:center; font-family:Arial, Helvetica, sans-serif; margin: 0px;">*******</h3>
    <br />
     <table cellpadding="0" cellspacing="0" border="0" style="width:85%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:12px;">
         <td id="bieudotheongay">
         </td>
         </tr>
      </table>
<?php
		$i=0;
		$nhietdo=array();
		$doam=array();
		$tbnhietdo=array();
		$tbdoam=array();
		$ngaygio=array();
		$_nhietdo=0;
		$_doam=0;
		$_tbnhietdo=0;
		$_tbdoam=0;
		foreach($thongso as $ts){
			if($ts["NgayGioDo"]!='')
				$ts["NgayGioDo"]=$ts["NgayGioDo"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
			else $ts["NgayGioDo"]='';
	
			$nhietdo[$i]=$ts['NhietDo'];
			$doam[$i]=$ts['DoAm'];
			
			$tbnhietdo[$i]=$ts['TBNhietDo'];
			$tbdoam[$i]=$ts['TBDoAm'];
			
			$ngaygio[$i]=$ts["NgayGioDo"];
			$_nhietdo=$_nhietdo+$ts['NhietDo'];
			$_doam=$_doam+$ts['DoAm'];
			$i++;
		}
		/*$tb_nd=$_nhietdo/(count($thongso));
		$tb_da=$_pd/(count($thongso));*/
		$nhietdo=implode(",",$nhietdo); 
		$doam=implode(",",$doam); 
		$ngaygio=implode(",",$ngaygio); 
		$tbnhietdo=implode(",",$tbnhietdo); 
		$tbdoam=implode(",",$tbdoam); 
		echo "<input type='hidden' id='nhietdo' rel='$nhietdo'>";
		echo "<input type='hidden' id='doam' rel='$doam'>";
		echo "<input type='hidden' id='giodo' rel='$ngaygio'>";
		echo "<input type='hidden' id='tbnhietdo' rel='$tbnhietdo'>";
		echo "<input type='hidden' id='tbdoam' rel='$tbdoam'>";
?>

</body>
</html>
<script type="text/javascript">
$(document).ready(function(e) {
	var nd=$("#nhietdo").attr("rel"); 
	var da=$("#doam").attr("rel"); 
	
	var tbnd=$("#tbnhietdo").attr("rel"); 
	var tbda=$("#tbdoam").attr("rel"); 
	
	var gd=$("#giodo").attr("rel"); 
	var mauin=<?=$_GET['mauin']; ?>;
	if(mauin==1){
   		draw_chart_chitiet(nd,da,gd);
		print_preview();
	}else
	{
		draw_chart_theothang(tbnd,tbda,gd);
		print_preview();
	}
});
$(window).resize(function() {	
	draw_chart_chitiet(nd,da,gd);
});
dojo.require("dijit.form.HorizontalSlider");	 
dojo.require("dijit.form.HorizontalRule");
dojo.require("dijit.form.HorizontalRuleLabels");
dojo.require("dojox.charting.Chart2D");
dojo.require("dojox.charting.plot2d.Lines");//charting/plot2d/Lines
dojo.require("dojox.charting.plot2d.Markers");						
dojo.require("dojox.charting.themes.Midwest");
dojo.require("dojox.lang.functional.object");

function draw_chart_chitiet(nhietdo,doam,giodo){
	t=setTimeout(function(){
	$("#bieudotheongay").empty();
	//$(".left_col").removeClass("dauhieusinhton");	
	$("#bieudotheongay").append('<div class="diengiai_sinhton"><div id="idnhietdo"></div>Nhiệt độ<div id="iddoam"></div>Độ ẩm  </div><div style="height:5px"></div><div class="dauhieusinhton" id="dauhieusinhton" style="width:80%; margin-left:auto; margin-right:auto;"></div>');	
    // alert($("#inner-top").height());
	//$(".diengiai").css("height",
	$(".dauhieusinhton").css("height",($("#bieudotheongay").height()-40)+"px");
	$(".dauhieusinhton").css("width",($("#bieudotheongay").width()-100)+"px");	
	$(".diengiai_sinhton").css("top","4px");
	$(".diengiai_sinhton").css("position","relative");
	$(".diengiai_sinhton").css("left",$(".dauhieusinhton").width()-150+"px");
		//alert($(".dauhieusinhton").height());	
		chart_chitiet(nhietdo,doam,giodo);		 
		clearTimeout(t);		 
	},100);		
}

function draw_chart_theothang(nhietdo,doam,giodo){	 
	d=setTimeout(function(){
	$("#bieudotheongay").empty();
	$("#bieudotheongay").append('<div class="diengiai_thetrang"><div id="idnhietdo2"></div>Nhiệt độ<div id="iddoam2"></div>Độ ẩm</div><div style="height:5px"></div><div class="thetrang" id="thetrang" style="width:80%; margin-left:auto; margin-right:auto;"></div>');	 
	$(".thetrang").css("height",($("#bieudotheongay").height()-40)+"px");
	$(".thetrang").css("width",($("#bieudotheongay").width()-100)+"px");	 
	$(".diengiai_thetrang").css("top","4px");
	$(".diengiai_thetrang").css("position","relative");
	$(".diengiai_thetrang").css("left",$(".thetrang").width()-150+"px");			
		chart_theothang(nhietdo,doam,giodo);	
		clearTimeout(d);		 
	},100);			
}

function chart_chitiet  (nhietdo,doam,giodo){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	var nhietdo2=nhietdo.split(",");
	var doam2=doam.split(",");
	var giodo2=giodo.split(",");
	
	for (var i=0;i<nhietdo2.length;i++)
	{
		 chartData.push(parseInt(nhietdo2[i]));
		// console.log(ps2[i]);
	}
	for (var i = 0; i < doam2.length; i++) {
		
		chartData1.push(parseInt(doam2[i]));
	}
	for (var i = 0; i < giodo2.length; i++) {
		labelx.push();
		labelx.push({value:(i+1), text:giodo2[i]});
	}	
	
	// Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("dauhieusinhton");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "red",
		stroke: {color:"red"},
		animate: {duration: 300}
    });
  	chart.addPlot("DoAm", {
        type: "Lines",
        markers: true,
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		animate: {duration: 300}
    });
    // Add axes
	
  	var maxY =[chartData.max()+5,chartData1.max()+5];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });   
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
        }
            );
	
	
 
    // Add the series of data
    chart.addSeries("Nhiệt độ",chartData);
 	chart.addSeries("Độ ẩm", chartData1, {plot: "DoAm"});
    // Render the chart!
    chart.render();
	remove_text  ();
  
};
function chart_theothang(nhietdo,doam,giodo){
    // When the DOM is ready and resources are loaded...
 
    // Define the data
	
 	var chartData =[];
	var chartData1 =[];
	var labelx=[];
	var nhietdo2=0;
	var doam2=0;
	var thangnam="";
	var ngaygio="";
	var ngaythang="";
	var tn= [];
	var n_do=[];
	var d_am=[];
	var d=0;
	var nhietdo2=nhietdo.split(",");
	var doam2=doam.split(",");
	var giodo2=giodo.split(",");
	for(var j=0;j < nhietdo2.length;j++){
		
		ngaygio=giodo2[j].split(' ');
		ngaythang=ngaygio[1].split('/');
		thangnam=ngaythang[1]+'/'+ngaythang[2];
		//var rowData = jQuery('#rowed3').getRowData(tmp1[j]);
		if(tn.length==0){
			tn.push(thangnam);
			n_do.push(nhietdo2[j]);
			d_am.push(doam2[j]);
		}else{
			for(var l=0;l < tn.length;l++){
				if(tn[l]==thangnam){
					d=1;
				}
			}
			if(d==0){
				tn.push(thangnam);
				n_do.push(nhietdo2[j]);
				d_am.push(doam2[j]);
			}
		}
		
		d=0;
	}
	for(var k=0;k < tn.length;k++){
		chartData.push(parseInt(n_do[k]));
		chartData1.push(parseInt(d_am[k]));
		labelx.push({value:(k+1), text:tn[k]});
	}
	
    // Create the chart within it's "holding" node
	var theme = dojox.charting.themes.Midwest;
	var chart = new dojox.charting.Chart2D("thetrang");
    //theme.setMarkers({ "CIRCLE":  "m-5,-5 l0,10 10,0 0,-10 z",  });
 	/*theme.setMarkers({ 
                SQUARE:   "m-5,-5 l0,10 10,0 0,-10 z", 
 
       
	}); */
    // Set the theme
    chart.setTheme(theme);
	
    // Add the only/default plot
    chart.addPlot("default", {
        type: "Lines",
        markers: true,
		fill: "red",
		stroke: {color:"red"},
		animate: {duration: 300}
    });
  	chart.addPlot("CanNang", {
        type: "Lines",
        markers: true,
		fill: "#ff8a00",
		stroke: {color:"#ff8a00"},
		animate: {duration: 300}
    });
    // Add axes
	var maxY =[chartData.max()+5,chartData1.max()+5];  	
    chart.addAxis("y", { min: 0, max: maxY.max(), vertical: true, });
	chart.addAxis("x", {            
            includeZero: false, 
            labels: labelx,
            rotation:90
    });
	
 
 
    // Add the series of data
    chart.addSeries("chieucao",chartData);
 	chart.addSeries("cannang", chartData1, {plot: "CanNang"});
    // Render the chart!
    chart.render();
	remove_text  ();
  
};
function remove_text  (){
	$( "text:contains('1.')" ).remove();
	$( "text:contains('2.')" ).remove();
	$( "text:contains('3.')" ).remove();
	$( "text:contains('4.')" ).remove();
	$( "text:contains('5.')" ).remove();
	$( "text:contains('6.')" ).remove();
	$( "text:contains('7.')" ).remove();
}
</script>
 