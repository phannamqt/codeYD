<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kha</title>
</head>
<style>
/*#slider-range{width:400px;}
#slider-range,#time{margin:10px;display:block;}*/
textarea
{
	float:left;
}

.lbl {
  /*  padding-left:26px;
    width:125px;
    text-transform: uppercase;*/
    display:inline-block;
    height: auto;
/*    border: 1px solid;
    background-color: yellow;*/
    color: red;
	
}
textarea[disabled] {background-color: #FFF;} 


#lbl_ghichucanhbao{
	width:220px;
	/*border:1px solid black;*/
	}
	
#lbl_diengiaidon{
	width:700px;
	/*border:1px solid black;*/
	}	
  #lbl_logkohle{
  width:85px;
  /*border:1px solid black;*/
  }
  #lbl_logtresom{
  width:85px;
  /*border:1px solid black;*/
  }

#tblDataLog td:first-child{
color:blue;
font-size: 16px;
font-style: italic;
}

#tblDataLog td:nth-child(2) {
font-size: 10px;
color: red;
 
}
#tblDataLog tr
{
height: auto;
max-height: 50px;
overflow: scroll;;
}

#slider-range{width:821px;}


.readmore-js-toggle, .readmore-js-section {
  display: block;
  width: 100%;
}
.readmore-js-section {
  overflow: hidden;
}
.classLock {
background-image: url('images/lock4.png');

background-repeat:   no-repeat;
position: absolute;
    z-index: 10;
    width: 100%;
    height: 640px;
     
    background-position: center center; 


}

.highlight_No {
    background-image: url('images/cancel.png');
    
    background-repeat:   no-repeat;
    background-position: center center; 
 text-align: center;
 font-size: 18px;
    
}
/*.ui-rangeSlider-innerBar
{
  width: 795px !important;
}
.ui-rangeSlider-arrow {
  margin:  2px 0 5px 0px 10px !important;
  }
.ui-rangeSlider .ui-rangeSlider-innerBar {
margin: 2px -18px !important;
   }*/

.highlight_OK{
background-image: url('images/ok2.png');
                 
background-repeat:   no-repeat;
background-position: center center;  
text-align: center;
 font-size: 20px;
 color: blue;


}
.tbl_td{
  text-align: center;
 font-size: 20px;
 color: blue;


}


.viewE,.view,.viewB,.viewC,.viewD
{
  position: relative;
}

#slider,#slideLich{
  margin-left: 4px;
}

 body {
               /*// border: 1px solid red;
               // padding: 20px;*/
                overflow: scroll;
                 /*background-image: url('images/hinhnendon.jpg');*/
               
        }
     


#time-range p {
    font-family:"Arial", sans-serif;
    font-size:14px;
    color:#333;
}
.ui-slider-horizontal {
    height: 8px;
    background: #D7D7D7;
    border: 1px solid #BABABA;
    box-shadow: 0 1px 0 #FFF, 0 1px 0 #CFCFCF inset;
    clear: both;
    margin: 8px 0;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
    border-radius: 6px;
}
.ui-slider {
    position: relative;
    text-align: left;
}
.ui-slider-horizontal .ui-slider-range {
    top: -1px;
    height: 100%;
}
.ui-slider .ui-slider-range {
    position: absolute;
    z-index: 1;
    height: 8px;
    font-size: .7em;
    display: block;
    border: 1px solid #5BA8E1;
    box-shadow: 0 1px 0 #AAD6F6 inset;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    -khtml-border-radius: 6px;
    border-radius: 6px;
    background: #81B8F3;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…pZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0%, #A0D4F5), color-stop(100%, #81B8F3));
    background-image: -webkit-linear-gradient(top, #A0D4F5, #81B8F3);
    background-image: -moz-linear-gradient(top, #A0D4F5, #81B8F3);
    background-image: -o-linear-gradient(top, #A0D4F5, #81B8F3);
    background-image: linear-gradient(top, #A0D4F5, #81B8F3);
}
.ui-slider .ui-slider-handle {
    border-radius: 50%;
    background: #F9FBFA;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…pZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0%, #C7CED6), color-stop(100%, #F9FBFA));
    background-image: -webkit-linear-gradient(top, #C7CED6, #F9FBFA);
    background-image: -moz-linear-gradient(top, #C7CED6, #F9FBFA);
    background-image: -o-linear-gradient(top, #C7CED6, #F9FBFA);
    background-image: linear-gradient(top, #C7CED6, #F9FBFA);
    width: 22px;
    height: 22px;
    -webkit-box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
    -moz-box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
    box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
    -webkit-transition: box-shadow .3s;
    -moz-transition: box-shadow .3s;
    -o-transition: box-shadow .3s;
    transition: box-shadow .3s;
}
.ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    width: 22px;
    height: 22px;
    cursor: default;
    border: none;
    cursor: pointer;
}
.ui-slider .ui-slider-handle:after {
    content:"";
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    top: 50%;
    margin-top: -4px;
    left: 50%;
    margin-left: -4px;
    background: #30A2D2;
    -webkit-box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 #FFF;
    -moz-box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 white;
    box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 #FFF;
}
.ui-slider-horizontal .ui-slider-handle {
    top: -.5em;
    margin-left: -.6em;
}
.ui-slider a:focus {
    outline:none;
}
  .form_row{
  width:100px!important;
  height:95px;
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
.action{
    text-align: right;
    margin-left: 15px;
     margin-right: 15px;

}
  /*Nam moi them*/
.time-x{
    float:left;
    display: inline-block;
    float: left;
    position: absolute;
    border-left: 1px solid #000;
    height: 2px;
}


.timeDraw-x{
	height:15px;
	background-color:#CF0;
	text-align:center;
	position: absolute;
	border-radius:3px;
	box-shadow: 1px 2px 5px #999999; 

	border-color:#000;
	border-width: 1px;
	z-index: 20;
}



    .timeDraw2-x,.timeDraw3-x{
    /*border-top: 2px solid blue;*/
    height:15px;
    background-color:#CF0;


   background: #CF0; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#CF0, yellow,grey); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#CF0, yellow,grey); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#CF0, yellow,grey); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#CF0, yellow,grey); /* Standard syntax */

    text-align:center;
    position: absolute;
    border-radius:3px;
    box-shadow: 1px 2px 5px #999999; 

    border-color:#000;
      border-width: 1px;
      z-index: 20;

  }
  .time-x-top{
    float:left;
    display: inline-block;
    float: left;
    position: absolute;
    border-left: 1px solid #000;
    height: 2px;
  margin-top:-3px;
  
  }
    .time-view-top-edit{
    margin-left:-13px;
    margin-top:-13px;
    display: inline-block;
    color:red;
  
  }
  .time-view{
    margin-left:-13px;
  }
  .time-view-top{
    margin-left:-13px;
  margin-top:-13px;
   display: inline-block;
  }
  .time-edit{
    color:red;
}

 #Chamcong td {
    width: 900px;
    overflow: hidden;
  
    white-space: nowrap;
}
#ChamcongC td {
    width: 800px;
    overflow: hidden;
  
    white-space: nowrap;
}
td.TdName {
	display: block;
    width: 148px !important;
}
.TdGiocong {
width: 30px !important;
}
#mausuco{
  font-size: 15px !important;
    height: 18px;
    width: 676px !important;
  
  }
  #noidung
  {
    margin-left: 30px;
    margin-right: 0px;
     margin-top: 5px;
  }
#Chamcong tr{
    
height:33px!important;
}



#tblDataLog th{
  vertical-align: top;
  border-top:1px solid #e0e0e0;
  border-bottom:1px solid #e0e0e0;
}
#tblDataLog td{
 border-bottom:1px solid #e0e0e0;
 vertical-align: top;
  
}



.button-0XXX {
    /*position: absolute;*/
    padding: 16px 32px;
    margin: 5px 8px 11px 37px;
    float: left;
    border-radius: 10px;
    font-family: 'Helvetica', cursive;
    font-size: 15px;
    color: #FFF;
    text-decoration: none;  
    background-color: #3498DB;
    border-bottom: 5px solid #2980B9;
    text-shadow: 0px -2px #2980B9;
    /* Animation */
    transition: all 0.1s;
    -webkit-transition: all 0.1s;
}

.button-0:hover, 
.button-0:focus {
    text-decoration: none;
    color: #fff;
}

.button-0:active {
    transform: translate(0px,5px);
    -webkit-transform: translate(0px,5px);
    border-bottom: 1px solid;
}
/*@media screen and (min-width: 640px) {
  article {
    max-height: 12em;
  }
}*/


#ghichu,#logkohople,#logtresom{
float:left;
/*background-color:#E6EE9C;*/
text-align: center;
}
.slider-time,.slider-time2
{
  font-size: 16px;
  color: red;
}
legend{
text-align:center;
color:blue;
font-size: 18px;
  }
 .div-left{
 	width: 955px;
 	float: left;


 }
 .div-right{
 	width: 190px;
 	float: left;

 }
 fieldset{
 	border: 1px solid #ccc;
 	padding: 0 0 0 4px;
 	width:1150px;
 }
 #hoantat,#xoadon{
  font-size: 13px;
  margin-top: 8px;
  padding: 6px;
 }
 #tang1{
  width: 45px ! important;
 }
  </style>


  
<script src="js/readmore.js"></script>
<script src="js/readmore.min.js"></script>
<script src="js/Chart.js/moment.js"></script>
<script src="js/jQRangeSlider-5.7.2/lib/jquery.mousewheel.min.js"></script>
<script src="js/jQRangeSlider-5.7.2/jQAllRangeSliders-min.js"></script>
<link rel="stylesheet" id="themeCSS" href="js/jQRangeSlider-5.7.2/css/classic.css"> 
<body>
<div id="keyImage"  align="center" ></div>
<div id="container"  align="center">
<div id="con0" >
	<fieldset  style=""><legend align="center">THÔNG TIN VỀ ĐƠN VÀ VIỆC CHẤM CÔNG NGÀY <?=$_GET['Ngaysuco']?></legend>
	<div class="div-left">
		<div class="lbl" >
			<div class="lbl" id="lbl_diengiaidon" >CÁCH CHỌN LOẠI SỰ CỐ PHÙ HỢP</div>
			<div class="lbl" id="lbl_ghichucanhbao" >THÔNG BÁO TỪ HỆ THỐNG</div>
			<textarea disabled="disabled" name="diengiaidon" id="diengiaidon" style="width: 702px" rows="4" ></textarea>
			<textarea disabled="disabled" name="ghichu" id="ghichu"  style="margin-left: 4px; width: 229px;" rows="4" placeholder="GHI CHÚ VÀ CẢNH BÁO"></textarea>
		</div>
	</div>
	<div class="div-right">
		<div class="lbl" >
			<div class="lbl" id="lbl_logkohle" >Không hợp lệ</div>
			<div class="lbl" id="lbl_logtresom">Trễ sớm</div>
		</div>
		<textarea disabled="disabled" name="logkohople" id="logkohople" style="width: 85px;" rows="4" placeholder="LOG KHÔNG HỢP LỆ"></textarea>
	    <textarea disabled="disabled" name="logtresom" id="logtresom" style="width: 85px; margin-left: 4px;" rows="4" placeholder="LOG TRỄ SỚM"></textarea>
	</div>
	<!-- <hr style="float: left; width: 100%; border: 1px dashed rgb(204, 204, 204);"> -->
	<div class="div-left">
		<span class="custom-combobox" style="float:left;margin-top: 7px">
			<strong>CHỌN SỰ CỐ</strong>
			<br />
			<input id="mausuco" name="mausuco" lang='luu' type="text">    
		</span>
		<textarea name="noidung" id="noidung"   style="width: 229px;" rows="2" placeholder="GIẢI TRÌNH LÝ DO TẠI ĐÂY"></textarea>   
	</div>
	<div class="div-right">
		<button id='hoantat'>LƯU</button> 
    <button id='xoadon'>XÓA</button> 
	</div>
	</fieldset>
</div>
<fieldset style="border-top: 0px none ! important;">
<div id="conA">

<table width="100%" id='Chamcong'>
  <tr id="lichchinh" >
  <td class="TdName"><strong>LỊCH CHÍNH</strong>
  </td>  
  <td>
  <div class="view" id='view' style="width:795px;border-top: 1px solid  #A5A49A;"></div> <!--Nam moi them-->
  </td>
  <td >
    <strong><label style="display:inline-block; width:57px;text-align: center;">Giờ công</label> <label style="display:inline-block; width:54px;text-align: center;">Giờ đêm</label> <label style="display:inline-block; width:32px;text-align: center;">Trễ</label><label style="display:inline-block; width:32px;text-align: center;">Sớm</strong></td>
 

  </tr>
    <tr id="logdacham">
    <td class="TdName"><strong>LOG ĐÃ CHẤM</strong></td>
    <td><div id='viewD' class="viewD" style="width:795px;border-top: 1px solid  #a5549a"></div></td>
    <td>    <input type="text" id="CongTheoLogDaCham" readonly style="width:50px;border:0; color:blue; font-weight:bold;">
      <input type="text" disabled="disabled" id="CongTrucTheoLogDaCham" style="width:50px;border:0; color:blue; font-weight:bold;" readonly="readonly" />
      <input type="text" id="DiTre" readonly="readonly" style="width:25px;border:0; color:blue; font-weight:bold;" />
      <input type="text" id="RaSom" readonly="readonly" style="width:25px;border:0; color:blue; font-weight:bold;" />
      <input type="text" id="CongTrucTheoLogThemVao_Hide" style="display:none" /></td>
   
    
  </tr>
  <tr id="lichbosung">
  <td class="TdName"><strong>LỊCH BỔ SUNG</strong></td>  
  <td>
  <div id='viewE' class="viewE" style="width:795px;border-top: 1px solid  #a5549a"></div> 
  </td>
  <td>
  <input type="text" id="CongTheoLichThemVao" readonly="readonly" style="width:50px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" disabled="disabled" id="CongTrucTheoLichThemVao" style="width:50px;border:0; color:#f6931f; font-weight:bold;" readonly="readonly" />
  <input type="text" id="DiTreTheoLichThemVao" readonly="readonly" style="width:25px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" id="RaSomTheoLichThemVao" readonly="readonly" style="width:25px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" id="CongTheoLichThemVao_Hide" style="display:none" /></td>
  

  </tr>
  <tr id="logbosung">
  <td class="TdName"><strong>LOG ĐÃ CHẤM BỔ SUNG</strong></td>  
  <td>
  <div id='viewB' class="viewB" style="width:795px;border-top: 1px solid  #a5549a"></div> 
  </td>
  <td>
  <input type="text" id="CongTheoLogThemVao" readonly="readonly" style="width:50px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" disabled="disabled" id="CongTrucTheoLogThemVao" style="width:50px;border:0; color:#f6931f; font-weight:bold;" readonly="readonly" />
  <input type="text" id="DiTreTheoLogThemVao" readonly="readonly" style="width:25px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" id="RaSomTheoLogThemVao" readonly="readonly" style="width:25px;border:0; color:#f6931f; font-weight:bold;" />
  <input type="text" id="CongTheoLogThemVao_Hide" style="display:none" /></td>
  

  </tr>
  <tr id="editLog">
  <td class="TdName"><button id='themlog' onclick="ThemLogEdit()">Thêm log</button>
      <input type="text" id="logdenghi" readonly style="width:40px;border:0; color:#f6931f; font-weight:bold;">
  </td>  
  <td>
  <div id="slider" style="width:795px;"> </div>
  </td>
  
   <td></td>
  </tr>
  
  <tr id="editLich">
  <td class="TdName"><button id='themlich' onclick="ThemLichEdit()">Sửa lịch</button>
      <input type="text" id="lichdenghi" readonly style="width:40px;border:0; color:#f6931f; font-weight:bold;">
  </td>  
  <td>
  <div id="sliderLich" style="width:795px;"> </div>
  </td>
  
   <td></td>
  </tr>

</table>
</div>
<div id="conB">
<table width="100%" id='chamcongC'>
  <tr>
  <td style="width: 145px;">
    <strong>Tầng </strong>
    <select id='tang'>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	</select>
</td>
  
  <td>

<!-- <div id="time-range" width="900px"> -->
   <i style="color:blue;font-size:14px"> Chấm công vào khoảng  </i> <strong><span id="slider-time"  class="slider-time">5:30 sáng</span> - <span id="slider-time2" class="slider-time2">6:30 sáng </span></strong>
   <button id='themkhoan' onclick="ThemKhoan()">TÌM LOG</button>
   <input type="text" id="slider-time-hideA" value="5:30" style="display:none"/>
   <input type="text" id="slider-time-hideB" value="6:30" style="display:none"/>
    <div id="slider-range"></div>
<!-- </div> -->
  </td>
  </tr>
</table>
<br>
<br>
    <div id="dynamictable">
        <table id="tblDataLog"  cellpadding="0" cellspacing="0" style="width:800px;margin-left: -40px;" >      
            <thead>
              <tr>
                <th align="center" width="80px">Khoảng thời gian</th>
                <th align="center" width="280px">Các trường hợp chấm thành công</th>
                <th align="center" width="50px">Tổng lần chấm thành công</th>
                <th align="center" width="50px">Chấm tại tầng</th>
                <th align="center" width="50px">----</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>
</fieldset>
</body>
<script type="text/javascript">
    var VietLogMay=[];// log từ máy chấm công
    var VietLogEdit=[];// log do người dùng muốn thêm khi làm đơn
    var VietLichEdit=[];// lịch do người dùng muốn sửa khi làm đơn
    var VietLogLichChinh=[];// log của lịch chính
    var _id_nhanvien="<?=$_GET['idnhanvien']?>";
    var _Ngaysuco="<?=$_GET['Ngaysuco']?>";
    var _values = [];// dùng để chứa các item mảng log đề nghị
    var _valuesLich = [];// dùng để chứa các item mảng lịch đề nghị
    var _khoangThGian=[];
    var _id_donkey=0 ;//  khóa chính của đơn,dùng xác định thêm mới hay sửa
    var _SoLogChoPhepGoiDon=0 ;//  khóa chính của đơn,dùng xác định thêm mới hay sửa
    
    var _SoLuongMocLichChoPhepTim=0 ;//  số lượng mốc lịch cho phép yêu càu khoảng tìm log
    var _IsDuyetDonUpdate=0 ;//  đã duyệt chính thức
    var VietLogEditRemove=[];// dùng để loại trừ khi vẽ lại
    var _khoantgianTimLogSend=[];//lưu các khoảng giờ yêu cầu tìm log
    var _khoantgianTimLogLoadTuDon=[];//lưu các khoảng đã yeu cau tìm từ đơn
    window.demKhoan=0;
   
      
  jQuery(document).ready(function() {
	$('article').readmore({
		speed: 100,
		maxHeight: 300,
		heightMargin: 16,
		moreLink: '<a href="#">Read More</a>',
		lessLink: '<a href="#">Close</a>',
		embedCSS: false,

		startOpen: false,
		blockCSS: 'display: inline-block; width: 50%;',

		// callbacks
		blockProcessed: function() {},
		beforeToggle: function(){},
		 afterToggle: function(trigger, element, expanded) {
		    if(! expanded) { // The "Close" link was clicked
		      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
		    }
		  }
	});

  autocompleted_combobox('#tang');
             
      //slide thời gian chọn
           $(function() {
                $( "#slider" ).slider({
                  value:(new Date().getHours()),
                  min: 0,
                  max: (86400-60),
                  step: 60,
                  slide: function( event, ui ) {
                
                var tam=    (new Date).clearTime() .addSeconds(ui.value) .toString('HH:mm');
                
                   $( "#logdenghi" ).val( tam );
           
                  }
                    });

              $( "#logdenghi" ).val( $( "#slider" ).slider( "value" ) );
              $( "#logdenghi" ).change(function() {
              if($( "#logdenghi" ).val()){
              var t=$( "#logdenghi" ).val().split(":");
              var val=((parseInt(t[0])*60)*60)+(parseInt(t[1])*60);

              $( "#slider" ).slider( "value",  val );
              }
              });
              $('#logdenghi').timeEntry({show24Hours: true});
              });


//slide lịch chọn
           $(function() {
                $( "#sliderLich" ).slider({
                  value:(new Date().getHours()),
                  min: 0,
                  max: (86400-60),
                  step: 60,
                  slide: function( event, ui ) {
                
                var tam=    (new Date).clearTime() .addSeconds(ui.value) .toString('HH:mm');
                
                   $( "#lichdenghi" ).val( tam );
           
                  }
                    });

              $( "#lichdenghi" ).val( $( "#sliderLich" ).slider( "value" ) );
              $( "#lichdenghi" ).change(function() {
              if($( "#lichdenghi" ).val()){
              var t=$( "#lichdenghi" ).val().split(":");
              var val=((parseInt(t[0])*60)*60)+(parseInt(t[1])*60);

              $( "#sliderLich" ).slider( "value",  val );
              }
              });
              $('#lichdenghi').timeEntry({show24Hours: true});
              });

        
      //Đổ dữ liệu    
  LoadData();// đổ xong dữ liệu khi load form
  $("#hoantat").click(function() {
    HoanTat();
  });
    $("#xoadon").click(function() {
    //HoanTat();
    //alert(_id_donkey)

      $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco_new&oper=del&_id_donkey='+_id_donkey)
             .done(function( data ) { 
              if (data==0)
              {
                tooltip_message( "Xóa thành công" );
              }
           
         else  {
           tooltip_message( "Xóa không thành công do đơn đã được duyệt" );
         }
                              }).fail(function() {
                                                  tooltip_message( "error" );
                                                  }); 
     
  });

  $("#themlog,#themkhoan,#themlich,#hoantat,#xoadon").button();
      
     
  
})// hết dom



  function HoanTat()
  {
    _cacMoclichYeuCau=[];
      
      VietLichEdit=  VietLichEdit.filter(function(v){return v!==''});
      VietLogEdit=  VietLogEdit.filter(function(v){return v!==''});
      _khoantgianTimLogSend=  _khoantgianTimLogSend.filter(function(v){return v!==''});



    switch ($("#mausuco_hidden").val())
    {

      case '1': // do cá nhân
    //  alert($("#mausuco_hidden").val());
      break;
      case '2': // do khoa phòng
 
      if(VietLichEdit.length>0 && VietLichEdit.length%2!=0)// kiểm tra số mốc lịch lẻ thì remove
            {
              tooltip_message('Các mốc lịch lẻ được tự động xóa');
              VietLichEdit.splice(-1,1);
              gettimeE(VietLichEdit);//gán lịch cho trục viewE 
              veLaiCong(VietLichEdit,'viewE','viewE','timeDraw3-x'); 
                    

            }

            break;

      case '3':// do CNTT


            var table = $("#tblDataLog");
            table.find('tr').each(function (i, el) {
            var $tds = $(this).find('td'),
          
          
            totalThanhCong =parseInt($tds.eq(2).text()) ;
            khoantgian=$tds.eq(0).text();
           
              id_row=$(this).closest('tr').attr('id');




                      
                      if (typeof(id_row) != "undefined"&&id_row)
                      {

                              
                              if(totalThanhCong>_SoLogChoPhepGoiDon)
                              {
                             
                              alert('Trong khoảng thời gian '+khoantgian+' tại mấy chấm công tầng '+tang+', có '+totalThanhCong+' lần chấm công thành công, đây không phải là lỗi kỹ thuật, đây là lỗi do cá nhân, hãy chọn lý do cá nhân hoặc chọn khoảng thời gian khác và nhấn nút "Hủy không tìm nữa"');
                              

                                var res ='#col'+ ("#"+$(this).closest('tr').attr('id')).substr(4, 2); 
                              
                                $(res).addClass("highlight_No" );
                              
                              }
                               else
                              {
                            
                               /* alert(_khoantgianTimLogSend);
                                alert($tds.eq(5).text());*/
                                 if($.inArray($tds.eq(5).text(), _khoantgianTimLogSend)==-1)
                                 {
                                     _khoantgianTimLogSend.push($tds.eq(5).text()) ;
                                    var res2 ='#col'+ ("#"+$(this).closest('tr').attr('id')).substr(4, 2); 
                                     $(res2).addClass("highlight_OK" );
                                    
                                   
                                 }
                               

                              }
                        }

       
    });
    if (_khoantgianTimLogSend==''&&_khoantgianTimLogSend.length==0)
    {
          alert('Đơn chưa có khoảng tìm log hợp lệ, hãy chọn tầng và chọn khoảng thời gian và nhấn nút "TÌM LOG THEO KHOẢNG THỜI GIAN VÀ TẦNG ĐÃ CHỌN" ');
          return;
    }

       break;


       case '4': // do chấm muộn
      /* if($('#logkohople').val()==''){
                      alert('Bạn không thể chọn loại đơn này vì bạn không có "log không hợp lệ" ');
                      return;
                    }*/
      default : break;
    }


//*8888888888888888 hết sswitch



    logthem=VietLogEdit.join("|");
    dataToSend = '{';
        phancach = ",";
    dataToSend +=  '"Ngayxayrasuco":' + JSON.stringify(_Ngaysuco);
    dataToSend += phancach + '"mausuco":' +JSON.stringify($("#mausuco_hidden").val());
    dataToSend += phancach + '"noidung":' + JSON.stringify($.trim($("#noidung").val()));
    dataToSend += phancach + '"denghicongthem":' + JSON.stringify($("#CongTheoLogThemVao_Hide").val());
    dataToSend += phancach + '"send":' + JSON.stringify(1);
    dataToSend += phancach + '"tinhDitre":' + JSON.stringify($("#DiTreTheoLogThemVao").val());
    dataToSend += phancach + '"tinhRasom":' + JSON.stringify($("#RaSomTheoLogThemVao").val());
    dataToSend += phancach + '"id_nhanvien":' + JSON.stringify(_id_nhanvien);
    dataToSend += phancach + '"tongCongTruc":' + JSON.stringify($("#CongTrucTheoLogThemVao_Hide").val());
    dataToSend += phancach + '"logThem":' + JSON.stringify($.trim(VietLogEdit.join("|")));
    dataToSend += phancach + '"lichThem":' + JSON.stringify($.trim(VietLichEdit.join("|")));
    dataToSend += phancach + '"IndexId":' + JSON.stringify($.trim(_id_donkey));
    dataToSend += phancach + '"khoantgianSend":' + JSON.stringify($.trim(_khoantgianTimLogSend.join("~~~")));
    dataToSend += '}';
    dataToSend=jQuery.parseJSON(dataToSend);
    
    
       $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco_new&hienmaloi=3&oper=add',dataToSend)
             .done(function( data ) { 
                    if (isNaN(data) ==false&& $.trim(data)<0) 
                  {
                    tooltip_message('Đơn bị khóa vì dã duyệt chính thức');
                    $('#container').find('*').prop('disabled',true);
                    
                     $( "#hoantat" ).prop( "disabled", true );
                    
                    
                  }
                  else
                  {
                    if(isNaN(data) ==false&& $.trim(data)>0) 
                      {tooltip_message('Cập nhật thành công ID đơn :'+data);
                      _id_donkey=data;
                      }
                      
                      else {tooltip_message('Có lỗi rồi :'+data );}
                      
                  }
                  
                              }).fail(function() {
                                                  tooltip_message( "error" );
                                                  }); 
  }     
          
  //function all  
  function LoadData()
  {
    
    $.ajax({
                type: 'POST',
                async : false,
                url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_chamcong_new&from='+_Ngaysuco+'&to='+_Ngaysuco+                       '&ID_NhanVien='+_id_nhanvien,
                  success: function(data, status, xhr) {
                   data=jQuery.parseJSON(data);
                       
                     if(typeof data.rows != 'undefined')
                     {
             
             
               
                        if(data.rows[0]['cell'][27]!=null)
                         {
                          VietLogLichChinh=(data.rows[0]['cell'][27]).split("|");
                         }
                         else
                         {
                             alert('Ngày này chưa được cài lịch, hãy đề nghị cán bộ quản lý cài lịch bằng cách chọn loại sự cố liên quan đến khoa phòng và chọn mốc lịch vào ra theo mong muốn');
                             
                         }


                         if(data.rows[0]['cell'][28]!=null){ VietLogMay=(data.rows[0]['cell'][28]).split("|");}
            
            
                         if(data.rows[0]['cell'][29]!=null) { VietLogEdit=(data.rows[0]['cell'][29]).split("|");} 
                         if(data.rows[0]['cell'][35]!=null) { VietLichEdit=(data.rows[0]['cell'][35]).split("|");} 
                          
                           if(data.rows[0]['cell'][19]!=null) {_id_donkey=data.rows[0]['cell'][19];} else {_id_donkey=0;}

                        $("#CongTheoLogDaCham").val(data.rows[0]['cell'][8]);
                        $("#CongTrucTheoLogDaCham").val(data.rows[0]['cell'][25]);
                        $("#DiTre").val(data.rows[0]['cell'][31]);
                         $("#noidung").val(data.rows[0]['cell'][39]);
                        $("#RaSom").val(data.rows[0]['cell'][32]);
                         $("#ghichu").val(data.rows[0]['cell'][17]+'\n Sửa lần cuối lúc '+data.rows[0]['cell'][40]+ ' bởi: '+ data.rows[0]['cell'][22]);
                         $("#logkohople").val(data.rows[0]['cell'][12]);
                         $("#logtresom").val(data.rows[0]['cell'][14]);
                        if(data.rows[0]['cell'][30]!=null)
                          { $("#denghicongthem").val(data.rows[0]['cell'][30]);}
                        else {$("#denghicongthem").val(0);}



                          if(data.rows[0]['cell'][37]!=null){

                          _khoantgianTimLogLoadTuDon=data.rows[0]['cell'][37].split("~~~");

                              for(var i=0;i<_khoantgianTimLogLoadTuDon.length;i++)
                              {
                               
                               
                                $.ajax({
                                          type: 'POST',
                                          async : false,
                                          url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_getLogNhanVienTheoTangvaGio&id_tang='+_khoantgianTimLogLoadTuDon[i].split('T')[1]+'&khoantim='+_khoantgianTimLogLoadTuDon[i].split('T')[0]+'&from='+_Ngaysuco+'&to='+_Ngaysuco+'&ID_NhanVien='+_id_nhanvien,
                                          success: function(data, status, xhr) {
                                             data=jQuery.parseJSON(data);
                                                 
                                               if(typeof data.rows != 'undefined'){
                                                  $('#tblDataLog tr:last').after('<tr id=row_'+ i+'><td class="logtim" style="text-align:center">'+_khoantgianTimLogLoadTuDon[i].split('T')[0].split('|').join(' đến ')+'</td><td style="text-align:center">  <article class="slide"> '
                                                  +data.rows[0]['cell'][1]+'</article></td><td class="tbl_td">'
                                                  +data.rows[0]['cell'][2]+'</td><td class="tbl_td" id=col_'+ i+'>'+data.rows[0]['cell'][3]+'</td> <td> <button class="remove" onclick=huy('+ i+')>HỦY KHÔNG TÌM NỮA</button></td><td style="display:none;">'+
                                                  _khoantgianTimLogLoadTuDon[i]+'</td> </tr>');

                                                  _khoangThGian.push( _khoantgianTimLogLoadTuDon[i]);
                                                  _khoantgianTimLogSend.push( _khoantgianTimLogLoadTuDon[i]);
                                                  $('#col_'+i).addClass("highlight_OK" ); 
                                                  window.demKhoan++;
                                                  $(".remove").button();
                                               }



                                          },
                                });


                              }
                          }
                        

                          //lí do làm đơn
                          if(data.rows[0]['cell'][36]!=null)
                          {
                           create_combobox_new('#mausuco',create_dmsuco,'bw','','data_tensuco_new',data.rows[0]['cell'][36]);  
                          }
                           else
                           {
                            create_combobox_new('#mausuco',create_dmsuco,'bw','','data_tensuco_new',1);  
                           }

                           
                      
                           //lí do làm đơn


                          if(data.rows[0]['cell'][38]!=null) 
                              {_SoLuongMocLichChoPhepTim=parseInt(data.rows[0]['cell'][38]) ;
                              }
                        
                        

                        
                        if(data.rows[0]['cell'][33]!=null) 
                          {_SoLogChoPhepGoiDon=parseInt(data.rows[0]['cell'][33]) ;
                          }

                          if(data.rows[0]['cell'][34]==1)
                          {
                          alert('Ngày này đã bị khóa vì đơn đã duyệt chính thức');
                          $('#container').find('*').prop('disabled',true);
                           
                            $('#keyImage').addClass('classLock');
                          }
                    
                              
                     }


                },
             });
       
        gettime();//ve
        
   if(VietLichEdit.length==0||VietLichEdit=='')

   {
      VietLichEdit=VietLogLichChinh.slice();//copy dữ liệu lịch chính sang dữ liệu lịch edit
   }

       
        gettimeE(VietLichEdit);//gán lịch cho trục viewE 
        veLaiCong(VietLichEdit,'viewE','viewE','timeDraw3-x');

        gettimeB();
        gettimeC();
        gettimeD();    
  
        veLaiCongChinhXacTuLogVaLich(); 
        getKetQuaTuSQL();   
  }


function huy(idrow)
{
//alert(_khoantgianTimLogSend);
  loghuy='';
      
  $('table#tblDataLog tr#row_'+idrow).each(function(){  
  
    loghuy=$(this).find('td').eq(5).text()  ;

    });
 // alert(loghuy);

  _khoangThGian = $.grep(_khoangThGian, function(value) {
    return value != loghuy;
    });

  _khoantgianTimLogSend= $.grep(_khoantgianTimLogSend, function(value) {
    return value != loghuy;
    });

  $('table#tblDataLog tr#row_'+idrow).remove();
}




function ThemKhoan()
{
      tamA=$("#slider-time-hideA").val();
      tamB=$("#slider-time-hideB").val();
      tang=$( "#tang" ).val();
      tu='Từ '+$( "#slider-time" ).text();
      den=' đến '+$( "#slider-time2" ).text();
      tamK=tamA+'|'+tamB+'T'+tang;
     /* alert(tang);*/

    if($.inArray(tamK, _khoangThGian)==-1)
     {

                $.ajax({
                    type: 'POST',
                    async : false,
                    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_getLogNhanVienTheoTangvaGio&id_tang='+tang+'&khoantim='+tamA+'|'+tamB+'&from='+_Ngaysuco+'&to='+_Ngaysuco+'&ID_NhanVien='+_id_nhanvien,
                    success: function(data, status, xhr) {
                       data=jQuery.parseJSON(data);
                           
                         if(typeof data.rows != 'undefined')
                         {
             
                         window.demKhoan++;
                         
                       
                        
                              if(_SoLuongMocLichChoPhepTim<= _khoangThGian.length)
                              {
                               
                                     alert('Theo lịch làm việc bạn chỉ  có tối đa '+_SoLuongMocLichChoPhepTim+' khoảng thời gian tìm log') ;
                              }
                              else
                              {
                                _khoangThGian.push(tamA+'|'+tamB+'T'+tang);
                                 $('#tblDataLog tr:last').after('<tr id=row_'+ window.demKhoan+'><td class="logtim" style="text-align:center">'+tu+den+'</td><td style="text-align:center">  <article class="slide"> '
                                  +data.rows[0]['cell'][1]+'</article></td><td class="tbl_td">'
                                  +data.rows[0]['cell'][2]+'</td><td class="tbl_td" id=col_'+ window.demKhoan+'>'+data.rows[0]['cell'][3]+'</td> <td> <button class="remove" onclick=huy('+ window.demKhoan+')>HỦY KHÔNG TÌM NỮA</button></td><td style="display:none;">'+
                                  tamA+'|'+tamB+'T'+tang+'</td> </tr>');
                                  $(".remove").button();

                              }

                         }



                    },
                 });
     }
     else
     {
      tooltip_message('Khoảng thời gian từ '+ $("#slider-time-hideA").val()+'-'+$("#slider-time-hideB").val()+ ' tại tầng '+tang+' bạn đã tìm rồi');
       return;
     }



      
    }








  function ThemLogEdit() 
  {  
        if($.inArray($( "#logdenghi").val(), _values)==-1 &&$( "#logdenghi").val()!='0' &&$( "#logdenghi").val()!='00:00' && $.inArray($( "#logdenghi").val(), VietLogMay)==-1 )
        {
        _values.push($( "#logdenghi").val());
        var now = moment();
        var tam=moment($( "#logdenghi").val(),"HH:mm:ss");
        var tamx=$( "#logdenghi").val().split(":");
    var gio=parseInt(tamx[0])<10 ? tamx[0].length==1 ? 0+''+tamx[0]:tamx[0]:tamx[0];
        var phut=parseInt(tamx[1])<10 ? tamx[1].length==1 ? 0+''+tamx[1]:tamx[1]:tamx[1];
        VietLogEdit.push(gio+':'+phut);
        gettimeC();
    getKetQuaTuSQL();
        }
        else
        {
        if($( "#logdenghi").val()=='0' || $( "#logdenghi").val()=='00:00')
        {
        tooltip_message('Log 0:00 không cần thêm vì hệ thống luôn tự động đưa vào nếu bạn làm ca cần chấm lúc khuya 00:00');
        }
        else
        {
        tooltip_message($( "#logdenghi").val()+' đã yêu cầu hoặc đã có chấm trong máy');
        }
    
        }
         
            
    } 
    function ThemLichEdit() 
  {  

              if($( "#lichdenghi").val()=='0')
              {
                $( "#lichdenghi").val('00:00');
              }

        //if($.inArray($( "#lichdenghi").val(), VietLichEdit)==-1 &&$( "#lichdenghi").val()!='0' &&$( "#lichdenghi").val()!='00:00')
        if($.inArray($( "#lichdenghi").val(), VietLichEdit)==-1)
        {
       // _valuesLich.push($( "#lichdenghi").val());
        var now = moment();
        var tam=moment($( "#lichdenghi").val(),"HH:mm:ss");
        var tamx=$( "#lichdenghi").val().split(":");
        var gio=parseInt(tamx[0])<10 ? tamx[0].length==1 ? 0+''+tamx[0]:tamx[0]:tamx[0];
        var phut=parseInt(tamx[1])<10 ? tamx[1].length==1 ? 0+''+tamx[1]:tamx[1]:tamx[1];
        VietLichEdit.push(gio+':'+phut);
        gettimeE(VietLichEdit);
        veLaiCong(VietLichEdit,'viewE','viewE','timeDraw3-x');
        }
        else
        {
             /* if($( "#lichdenghi").val()=='0' || $( "#lichdenghi").val()=='00:00')
              {
              tooltip_message('Mốc lịch 0:00 không cần thêm vì hệ thống luôn tự động đưa vào nếu bạn làm ca cần chấm lúc khuya 00:00');
              }
              else
              {*/
              tooltip_message($( "#lichdenghi").val()+' đã yêu cầu');
              //}
    
        }
         
            
    }         
        
function getKetQuaTuSQL()
{

   $.ajax({
                type: 'POST',
                async : false,
                url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_chamcong_bylog&VietLogEdit='+VietLogEdit.join(          "|")+'&from='+_Ngaysuco+'&to='+_Ngaysuco+'&ID_NhanVien='+_id_nhanvien,
                success: function(data, status, xhr) {
                   data=jQuery.parseJSON(data);
                       
                     if(typeof data.rows != 'undefined')
                     {
                                
                      $("#CongTheoLogThemVao").val(data.rows[0]['cell'][1]);
                      $("#CongTheoLogThemVao_Hide").val(data.rows[0]['cell'][2]== null?0:data.rows[0]['cell'][2]);
                      $("#CongTrucTheoLogThemVao").val(data.rows[0]['cell'][4]== null?0:data.rows[0]['cell'][4]);
                      $("#CongTrucTheoLogThemVao_Hide").val(data.rows[0]['cell'][7]== null?0:data.rows[0]['cell'][7]);
                      $("#DiTreTheoLogThemVao").val(data.rows[0]['cell'][5]== null?0:data.rows[0]['cell'][5]);
                      $("#RaSomTheoLogThemVao").val(data.rows[0]['cell'][6]== null?0:data.rows[0]['cell'][6]);
               
              
               
                         window.mangMoc=[];
                       
                        if(data.rows[0]['cell'][3]!=null)
                        
                        {
                          window.mangMoc=data.rows[0]['cell'][3].split("~");
                           $("div.timeDraw2-x").remove();// không remove sẽ sai vì vẽ chồng lên các div cũ

                          for (var i =0;i<= window.mangMoc.length ;i++) {
                               if(window.mangMoc[i]!=''&& window.mangMoc[i])// loại trừ các chuỗi ko đủ cặp và undefine
                               {  
                               
                                 veLaiCong(window.mangMoc[i].split("|"),'viewB','viewB','timeDraw2-x');
                               }
                           
                          };
                          
                        
                              
                        }
                
                          
                                              
                     }


                },
        });
} 
      
function gettime(){
    $('.view').empty();
    window.dem=0;
    window.margin=0;
      window.h=0;
      window.m=0;
    window.countchan=0; 
      window.ValueDraw=[];        
    window.ThoiLuongChenhLech=[];
  
   for(var i=0;i<=1440;i++){

    if(window.m<=59){
    window.hours=window.h<10 ? 0+''+window.h:window.h;
      window.minus=window.m<10 ? 0+''+window.m:window.m;
      if($.inArray(window.hours+':'+window.minus, VietLogLichChinh)>=0){
  
        var tam=window.hours+':'+window.minus;
        
        $('.view').append( '<div class="time-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+window.margin+'px;"><span class="time-view-top" id=logLich_'+tam+' ondblclick="removeLog(\''+tam+'\')">'+window.hours+':'+window.minus+'</span></div>');
            window.countchan++;
              window.ThoiLuongChenhLech[window.countchan]=i;
        window.ValueDraw[window.countchan]=window.margin;

      tam2=ValueDraw[window.countchan]-ValueDraw[window.countchan-1];// độ rộng thẻ div
      tam3=ValueDraw[window.countchan-1];// margin
      
      if (tam=='23:59')tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1]+1;
      else tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1];
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+' phút'; 
      tam7=tam5 +tam6;
        if (window.countchan% 2 == 0&& window.countchan>1)
        {
        
        $('.view').append( '<div  title="'+tam7+'" class="timeDraw-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
        
        }
            
      }
      window.m++;
 
    }else{
     
      window.m=0;
      window.minus=0+''+0;
      window.h++;
    window.hours=window.h<10 ? 0+''+window.h:window.h;
  
      if($.inArray(window.hours+':'+window.minus, VietLogLichChinh)>=0){
      var tam=window.hours+':'+window.minus;
        $('.view').append( '<div class="time-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+window.margin+'px;"><span class="time-view-top" id=logLich_'+tam+'ondblclick="removeLog(\''+tam+'\')">'+window.hours+':'+window.minus+'</span></div>');
    
    
           window.countchan++;
             window.ThoiLuongChenhLech[window.countchan]=i;
       window.ValueDraw[window.countchan]=window.margin;
      
      tam2=(ValueDraw[window.countchan]-ValueDraw[window.countchan-1]);// độ rộng thẻ div
      tam3=(ValueDraw[window.countchan-1]);// margin
      
      if (tam=='23:59')tam4=(ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1])+1;
      else tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1];
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+' phút'; 
      tam7=tam5 +tam6;
        if (window.countchan% 2 == 0&& window.countchan>1)
        {
        
           $('.view').append( '<div  title="'+tam7+'" class="timeDraw-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
        }
            
      }
    window.m++;
    }
    window.margin=window.margin+0.55;

   }

}






function veLaiLich(){
    $('.view').empty();
    window.dem=0;
    window.margin=0;
      window.h=0;
      window.m=0;
    window.countchan=0; 
      window.ValueDraw=[];        
    window.ThoiLuongChenhLech=[];
  
   for(var i=0;i<=1440;i++){

    if(window.m<=59){
    window.hours=window.h<10 ? 0+''+window.h:window.h;
      window.minus=window.m<10 ? 0+''+window.m:window.m;
      if($.inArray(window.hours+':'+window.minus, VietLogLichChinh)>=0){
  
        var tam=window.hours+':'+window.minus;
        
        $('.view').append( '<div class="time-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+window.margin+'px;"><span class="time-view-top" id=logLich_'+tam+' ondblclick="removeLog(\''+tam+'\')">'+window.hours+':'+window.minus+'</span></div>');
            window.countchan++;
              window.ThoiLuongChenhLech[window.countchan]=i;
        window.ValueDraw[window.countchan]=window.margin;

      tam2=ValueDraw[window.countchan]-ValueDraw[window.countchan-1];// độ rộng thẻ div
      tam3=ValueDraw[window.countchan-1];// margin
      
      if (tam=='23:59')tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1]+1;
      else tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1];
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+' phút'; 
      tam7=tam5 +tam6;
        if (window.countchan% 2 == 0&& window.countchan>1)
        {
        
        $('.view').append( '<div  title="'+tam7+'" class="timeDraw-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
        }
            
      }
      window.m++;
 
    }else{
     
      window.m=0;
      window.minus=0+''+0;
      window.h++;
    window.hours=window.h<10 ? 0+''+window.h:window.h;
  
      if($.inArray(window.hours+':'+window.minus, VietLogLichChinh)>=0){
      var tam=window.hours+':'+window.minus;
        $('.view').append( '<div class="time-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+window.margin+'px;"><span class="time-view-top" id=logLich_'+tam+'ondblclick="removeLog(\''+tam+'\')">'+window.hours+':'+window.minus+'</span></div>');
    
    
           window.countchan++;
             window.ThoiLuongChenhLech[window.countchan]=i;
       window.ValueDraw[window.countchan]=window.margin;
      
      tam2=(ValueDraw[window.countchan]-ValueDraw[window.countchan-1]);// độ rộng thẻ div
      tam3=(ValueDraw[window.countchan-1]);// margin
      
      if (tam=='23:59')tam4=(ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1])+1;
      else tam4=ThoiLuongChenhLech [window.countchan] - ThoiLuongChenhLech[window.countchan-1];
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+' phút'; 
      tam7=tam5 +tam6;
        if (window.countchan% 2 == 0&& window.countchan>1)
        {
        
           $('.view').append( '<div  title="'+tam7+'" class="timeDraw-x '+window.dem+' '+window.hours+'-'+window.minus+'" time="'+window.hours+':'+window.minus+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
        }
            
      }
    window.m++;
    }
    window.margin=window.margin+0.55;

   }

















    
  }         
  function gettimeB(){
     $('.viewB').empty();
            window.demB=0;
            window.marginB=0;
            window.hB=0;
            window.mB=0;
 
    for(var i=0;i<=1440;i++){
    if(window.mB<=59){
    window.hoursB=window.hB<10 ? 0+''+window.hB:window.hB;
      window.minusB=window.mB<10 ? 0+''+window.mB:window.mB;
      if($.inArray(window.hoursB+':'+window.minusB, VietLogMay)>=0){
  
        var tamB=window.hoursB+':'+window.minusB;
        
        $('.viewB').append( '<div class="time-x-top '+window.demB+' '+window.hoursB+'-'+window.minusB+'" time="'+window.hoursB+':'+window.minusB+'" style="margin-left:'+window.marginB+'px;"><span class="time-view-top" id=logTuMay_'+tamB+' ondblclick="removeLog(\''+tamB+'\')">'+window.hoursB+':'+window.minusB+'</span></div>');
    
      }
      window.mB++;
    }else{
     
      window.mB=0;
      window.minusB=0+''+0;
      window.hB++;
    window.hoursB=window.hB<10 ? 0+''+window.hB:window.hB;
  
      if($.inArray(window.hoursB+':'+window.minusB, VietLogMay)>=0){
      var tamB=window.hoursB+':'+window.minusB;
        $('.viewB').append( '<div class="time-x-top '+window.demB+' '+window.hoursB+'-'+window.minusB+'" time="'+window.hoursB+':'+window.minusB+'" style="margin-left:'+window.marginB+'px;"><span class="time-view-top" id=logTuMay_'+tamB+' ondblclick="removeLog(\''+tamB+'\')">'+window.hoursB+':'+window.minusB+'</span></div>');
      }
    window.mB++;
    }
    window.marginB=window.marginB+0.55;
   
  }
    
  }       
 function gettimeC(){
 
  window.demC=0;
  window.marginC=0;
  window.hC=0;
  window.mC=0;
    for(var i=0;i<=1440;i++){
    if(window.mC<=59){
    window.hoursC=window.hC<10 ? 0+''+window.hC:window.hC;
      window.minusC=window.mC<10 ? 0+''+window.mC:window.mC;
      if($.inArray(window.hoursC+':'+window.minusC, VietLogEdit)>=0){
  
        var tamC=window.hoursC+':'+window.minusC;
        
        $('.viewB').append( '<div class="time-x '+window.demC+' '+window.hoursC+'-'+window.minusC+'" time="'+window.hoursC+':'+window.minusC+'" style="margin-left:'+window.marginC+'px;"><span class="time-view-top-edit" id=logEdit_'+tamC+' ondblclick="removeLog(\''+tamC+'\')">'+window.hoursC+':'+window.minusC+'</span></div>');
      }
      window.mC++;
    }else{
     
      window.mC=0;
      window.minusC=0+''+0;
      window.hC++;
    window.hoursC=window.hC<10 ? 0+''+window.hC:window.hC;
  
      if($.inArray(window.hoursC+':'+window.minusC, VietLogEdit)>=0){
      var tamC=window.hoursC+':'+window.minusC;
        $('.viewB').append( '<div class="time-x '+window.demC+' '+window.hoursC+'-'+window.minusC+'" time="'+window.hoursC+':'+window.minusC+'" style="margin-left:'+window.marginC+'px;"><span class="time-view-top-edit" id=logEdit_'+tamC+' ondblclick="removeLog(\''+tamC+'\')">'+window.hoursC+':'+window.minusC+'</span></div>');
      }
    window.mC++;
    }
    window.marginC=window.marginC+0.55;
  
   }
    
  }
        
     function gettimeD(){
 
         $('.viewD').empty();
             window.demD=0;
            window.marginD=0;
            window.hD=0;
            window.mD=0;
    for(var i=0;i<=1440;i++){
    if(window.mD<=59){
    window.hoursD=window.hD<10 ? 0+''+window.hD:window.hD;
      window.minusD=window.mD<10 ? 0+''+window.mD:window.mD;
      if($.inArray(window.hoursD+':'+window.minusD, VietLogMay)>=0){
  
        var tamD=window.hoursD+':'+window.minusD;
        
        $('.viewD').append( '<div class="time-x '+window.demD+' '+window.hoursD+'-'+window.minusD+'" time="'+window.hoursD+':'+window.minusD+'" style="margin-left:'+window.marginD+'px;"><span class="time-view-top " id=logTuMayCC_'+tamD+' ondblclick="removeLog(\''+tamD+'\')">'+window.hoursD+':'+window.minusD+'</span></div>');
    
    
    

    
      }
      window.mD++;
    }else{
     
      window.mD=0;
      window.minusD=0+''+0;
      window.hD++;
    window.hoursD=window.hD<10 ? 0+''+window.hD:window.hD;
  
      if($.inArray(window.hoursD+':'+window.minusD, VietLogMay)>=0){
      var tamD=window.hoursD+':'+window.minusD;
        $('.viewD').append( '<div class="time-x '+window.demD+' '+window.hoursD+'-'+window.minusD+'" time="'+window.hoursD+':'+window.minusD+'" style="margin-left:'+window.marginD+'px;"><span class="time-view-top " id=logTuMayCC_'+tamD+' ondblclick="removeLog(\''+tamD+'\')">'+window.hoursD+':'+window.minusD+'</span></div>');
    
  
    
      }
    window.mD++;
    }
    window.marginD=window.marginD+0.55;
  
   }
    
  }
  
  
  function gettimeE(mangLich){
     $('.viewE').empty();
 
  window.demE=0;
  window.marginE=0;
  window.hE=0;
  window.mE=0;
    for(var i=0;i<=1440;i++){
    if(window.mE<=59){
    window.hoursE=window.hE<10 ? 0+''+window.hE:window.hE;
      window.minusE=window.mE<10 ? 0+''+window.mE:window.mE;
      if($.inArray(window.hoursE+':'+window.minusE, mangLich)>=0){
  
        var tamE=window.hoursE+':'+window.minusE;
        
        $('.viewE').append( '<div class="time-x '+window.demE+' '+window.hoursE+'-'+window.minusE
          +'" time="'+window.hoursE+':'+window.minusE+'" style="margin-left:'+
          window.marginE+'px;"><span class="time-view-top-edit" id=lichEdit_'+
          tamE+' ondblclick="removeLich(\''+tamE+'\')">'+window.hoursE+':'+window.minusE+'</span></div>');
      }
      window.mE++;
    }else{
     
      window.mE=0;
      window.minusE=0+''+0;
      window.hE++;
    window.hoursE=window.hE<10 ? 0+''+window.hE:window.hE;
  
      if($.inArray(window.hoursE+':'+window.minusE, mangLich)>=0){
      var tamE=window.hoursE+':'+window.minusE;
      //  $('.viewE').append( '<div class="time-x '+window.demC+' '+window.hoursC+'-'+window.minusC+'" time="'+window.hoursC+':'+window.minusC+'" style="margin-left:'+window.marginC+'px;"><span class="time-view-top-edit" id=logEdit_'+tamC+' ondblclick="removeLog(\''+tamC+'\')">'+window.hoursC+':'+window.minusC+'</span></div>');

        $('.viewE').append( '<div class="time-x '+window.demE+' '+window.hoursE+'-'+window.minusE
          +'" time="'+window.hoursE+':'+window.minusE+'" style="margin-left:'+
          window.marginE+'px;"><span class="time-view-top-edit" id=lichEdit_'+
          tamE+' ondblclick="removeLich(\''+tamE+'\')">'+window.hoursE+':'+window.minusE+'</span></div>');
      }
    window.mE++;
    }
    window.marginE=window.marginE+0.55;
  
   }
    
  }
      
     function veLaiCong(mangLog,ClassDivName,idString,classString){
   
          window.countchanD=0;  
          window.ValueDrawD=[];       
          window.ThoiLuongChenhLechD=[];  
    
    
    
           
            window.marginD=0;
            window.hD=0;
            window.mD=0;
            
    for(var i=0;i<=1440;i++){
    if(window.mD<=59){
    window.hoursD=window.hD<10 ? 0+''+window.hD:window.hD;
      window.minusD=window.mD<10 ? 0+''+window.mD:window.mD;
      if($.inArray(window.hoursD+':'+window.minusD, mangLog)>=0){
         window.countchanD++;
             window.ThoiLuongChenhLechD[window.countchanD]=i;
       window.ValueDrawD[window.countchanD]=window.marginD;
      tamd= window.hoursD+':'+window.minusD;
      tam2=(ValueDrawD[window.countchanD]-ValueDrawD[window.countchanD-1]);// độ rộng thẻ div
      tam3=(ValueDrawD[window.countchanD-1]);// margin
      tam4=(ThoiLuongChenhLechD[window.countchanD]-ThoiLuongChenhLechD[window.countchanD-1]);// thời lượng công
    
      if(window.hoursD=='23'&&window.minusD=='59')tam4=(ThoiLuongChenhLechD[window.countchanD]-ThoiLuongChenhLechD[window.countchanD-1])+1;
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+'\''; 
      tam7=tam5 +tam6;
        if (window.countchanD% 2 == 0&& window.countchanD>1)
        {
        
         $('.'+ClassDivName).append( '<div id='+idString+tamd+'  title="'+tam7+'" class="'+classString+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
          
         
        }
    
    
      }
      window.mD++;
    }else{
     
      window.mD=0;
      window.minusD=0+''+0;
      window.hD++;
    window.hoursD=window.hD<10 ? 0+''+window.hD:window.hD;
  
      if($.inArray(window.hoursD+':'+window.minusD, mangLog)>=0){
     

    
       window.countchanD++;
             window.ThoiLuongChenhLechD[window.countchanD]=i;
       window.ValueDrawD[window.countchanD]=window.marginD;
       tamd= window.hoursD+':'+window.minusD;
      tam2=(ValueDrawD[window.countchanD]-ValueDrawD[window.countchanD-1]);// độ rộng thẻ div
      tam3=(ValueDrawD[window.countchanD-1]);// margin
      tam4=(ThoiLuongChenhLechD[window.countchanD]-ThoiLuongChenhLechD[window.countchanD-1]);// thời lượng công
      
    
      if(window.hoursD=='23'&&window.minusD=='59')tam4=(ThoiLuongChenhLechD[window.countchanD]-ThoiLuongChenhLechD[window.countchanD-1])+1;
      tam5=Math.floor(tam4/60)<=0 ? '' : Math.floor(tam4/60)+' h ';
      tam6=Math.floor(tam4%60)<=0? '' : Math.floor(tam4%60)+'\''; 
      tam7=tam5 +tam6;
      
        if (window.countchanD% 2 == 0&& window.countchanD>1)
        { 
          $('.'+ClassDivName).append( '<div id='+idString+tamd+'  title="'+tam7+'" class="'+classString+'" style="margin-left:'+tam3+'px; width:'+ tam2+'px">'+tam7+'</div>');
        }
    
    
    
    
      }
    window.mD++;
    }
    window.marginD=window.marginD+0.55;
  
   }
    
  }
        

function veLaiCongChinhXacTuLogVaLich()
{
     $.ajax({
                type: 'POST',
                async : false,
                url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_moctinhcong&from='+_Ngaysuco+'&to='+_Ngaysuco+'&ID_NhanVien='+_id_nhanvien,
                success: function(data, status, xhr) {
          
                   data=jQuery.parseJSON(data);
            if(typeof data.rows != 'undefined')
                     {
                 var tam="";
                $.each( data, function( key, val ) {     
                  for(i=0;i<val.length;i++){
                    
                    tam=(val[i]["cell"]);
                      if(tam[1]!=null)
                      {
                        mocVeCong=tam[1].split("|");
                    
                        veLaiCong(mocVeCong,'viewD','viewD','timeDraw-x');
                        
                      }
                    
                    }
      
                }); 
           }
           
           
           
                       
                 


                },
             });
  }
 function removeLog(log)
  {

    VietLogEdit = $.grep(VietLogEdit, function(value) {
    return value != log;
    });
  
  
  _values = $.grep(_values, function(value) {
    return value != log;
    });
  gettimeB();
  gettimeC();
  getKetQuaTuSQL();

  }
  function removeLich(loglich)
  {

    VietLichEdit = $.grep(VietLichEdit, function(value) {
    return value != loglich;
    });
  
  
/*  _values = $.grep(_values, function(value) {
    return value != log;
    });
  gettimeB();
  gettimeC();
  getKetQuaTuSQL();*/
   $("div.timeDraw3-x").remove();
  gettimeE(VietLichEdit);

  veLaiCong(VietLichEdit,'viewE','viewE','timeDraw3-x');

  }
 var lastSel;
function create_dmsuco(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: [ 'Tên sự cố','Diễn giải', 'Màu'],
            colModel: [
               
                {name: 'TenVuviec', index: 'TenVuviec', hidden: false,width:'30%'},
                {name: 'Diengiai', index: 'Diengiai', hidden: false,width:'65%'},
        {name: 'Tenmau', index: 'Tenmau', hidden: false,width:'5%'},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
            width: 1000,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
                if (id!= lastSel)
                {
					
		
                  diengiaitam = $(elem).jqGrid ('getCell', id, 'Diengiai');

					
                  
                  lastSel= id;
                  if(id==1){
                    $('#conB').hide();
                    $('#conA').show();
                    $('#lichbosung').hide();
                    $('#logbosung').show();
                     $('#editLog').show();
                     $('#editLich').hide();
                       $('#diengiaidon').val(diengiaitam);
                  }
                  else if(id==3){
                    $('#conA').show();
                    $('#conB').show();
                      $('#editLich').hide();
                       $('#editLog').hide();
                       $('#lichbosung').hide();
                       $('#logbosung').hide();
                         $('#diengiaidon').val(diengiaitam);
                            range_log();
                    
                  }
                  else if(id==2){
                    $('#conB').hide();
                    $('#conA').show();
                    $('#logbosung').hide();
                    $('#lichbosung').show();
                    $('#editLog').hide();
                    $('#editLich').show();
                      $('#diengiaidon').val(diengiaitam);
                  }
                  else if(id==4){
                    /*if($('#logkohople').val()==''){
                      alert('Bạn không thể chọn loại đơn này vì bạn không có "log không hợp lệ" ');
                      return;
                    }
                    else
                    {*/
                       $('#conB').hide();
                        $('#conA').show();
                        $('#lichbosung').hide();
                        $('#logbosung').show();
                         $('#editLog').show();
                         $('#editLich').hide();
                           $('#diengiaidon').val(diengiaitam);
                    //}
                   
                  }

                
                  
                }
         
              
          
         

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
                /* ids = $(elem).jqGrid('getDataIDs');
                  for (i = 0; i < ids.length; i++) {
                      var rowData = jQuery('#rowed_xChamCong').getRowData(ids[i]);
                  }*/
        
            
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }












function range_log(){
  $("#slider-range").rangeSlider(
      { step: 5  },
      {
       bounds: {min: 0, max: 1439},
       defaultValues:{min: 330, max: 390},
       formatter: function (val) {

          var hours1 = Math.floor(val / 60);
          var minutes1 = val - (hours1 * 60);

          if (hours1.length == 1) hours1 = '0' + hours1;
          if (minutes1.length == 1) minutes1 = '0' + minutes1;
          if (minutes1 == 0) minutes1 = '00';
          if (hours1 >= 12) {
              if (hours1 == 12) {
                  hours1 = hours1;
                  minutes1 = minutes1 + " chiều tối";
              } else {
                  hours1 = hours1 - 12;
                  minutes1 = minutes1 + " chiều tối";
              }
          } else {
              hours1 = hours1;
              minutes1 = minutes1 + " sáng";
          }
          if (hours1 == 0) {
              hours1 = 12;
              minutes1 = minutes1;
          }


          return addZero(hours1) + ':' + addZero(minutes1);
       // $('.slider-time').html(hours1 + ':' + minutes1);
      }

      });
      $('#slider-range').on("userValuesChanged",function (e, data) {
        var hours1 = Math.floor(data.values.min / 60);
        var minutes1 = data.values.min - (hours1 * 60);

        if (hours1.length == 1) hours1 = '0' + hours1;
        if (minutes1.length == 1) minutes1 = '0' + minutes1;
        if (minutes1 == 0) minutes1 = '00';
        if (hours1 >= 12) {
            if (hours1 == 12) {
                hours1 = hours1;
                minutes1 = minutes1 + " chiều tối";
            } else {
                hours1 = hours1 - 12;
                minutes1 = minutes1 + " chiều tối";
            }
        } else {
            hours1 = hours1;
            minutes1 = minutes1 + " sáng";
        }
        if (hours1 == 0) {
            hours1 = 12;
            minutes1 = minutes1;
        }

        $(".slider-time").html(addZero(hours1) + ':' + addZero(minutes1));




        var hours2 = Math.floor(data.values.max / 60);
        var minutes2 = data.values.max - (hours2 * 60);

        if (hours2.length == 1) hours2 = '0' + hours2;
        if (minutes2.length == 1) minutes2 = '0' + minutes2;
        if (minutes2 == 0) minutes2 = '00';
        if (hours2 >= 12) {
            if (hours2 == 12) {
                hours2 = hours2;
                minutes2 = minutes2 + " chiều tối";
            } else if (hours2 == 24) {
                hours2 = 11;
                minutes2 = "59 chiều tối";
            } else {
                hours2 = hours2 - 12;
                minutes2 = minutes2 + " chiều tối";
            }
        } else {
            hours2 = hours2;
            minutes2 = minutes2 + " sáng";
        }
        $(".slider-time2").html(addZero(hours2) + ':' + addZero(minutes2));


         $("#slider-time-hideA").val((new Date).clearTime() .addMinutes(data.values.min) .toString('HH:mm'));
          $("#slider-time-hideB").val((new Date).clearTime() .addMinutes(data.values.max) .toString('HH:mm'));

      });
}

function addZero(val) {
    if (val < 10) {
        return "0" + val;
    }

    return ""+val;
}







      
</script>
</html>