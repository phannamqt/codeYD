
<?php
    if(isset($_GET["id_benhnhan"])){
        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan=".$_GET["id_benhnhan"];
        echo "</script>";
		$data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
		echo "<script type='text/javascript'>";
        echo "window.tenbenhnhan='".create_name($thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"])."'";
        echo "</script>";

    }else{
    if($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]==""){
        echo "<script type='text/javascript'>";
            echo "parent.postMessage('hosobenhnhantrong;' , '*')";

        echo "</script>";
        return;
    }else{
        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["id_benhnhan"];
        echo "</script>";
		$data= new SQLServer;//tao lop ket noi SQL
        $params = array($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
		echo "<script type='text/javascript'>";
        echo "window.tenbenhnhan='".create_name($thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"])."'";
        echo "</script>";

    }
    }


    if(isset($_GET["id_kham"])){
        echo "<script type='text/javascript'>";
        echo "window.id_kham2=".$_GET["id_kham"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.id_kham2=0";
        echo "</script>";
        }
 		?>

<style>
    #DM_template td  {
        word-wrap:normal!important;
        white-space:nowrap;
    }
    .ui-widget-overlay {
          opacity:0.01;
          filter: alpha(opacity=1);
          -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
          /*overlay trong suot*/
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
    .thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;
    }
    .thongtin_chidinh{
        padding-bottom:4px;
        padding-top:4px;
    }
    .thongtin_luotkham{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;
    }
    .thongtin_luotkham_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
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
    .thongtin_luotkham div div{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        font-size:11px;
        margin-left:2px;
        margin-top:2px;
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
        filter: alpha(opacity=20) !important;
    }
    #mota{
        font-size:13px!important;
    }
    .sieuam1{
        background-color: #b3ffb3;
    }
     .divTable
    {
        font-size:10.5px;
        font-family:Tahoma, Geneva, sans-serif;
        display:  table;
        width:auto;
        /*background-color:#eee;*/
        border:1px solid  #666666;
       border-spacing:5px;/*cellspacing:poor IE support for  this*/
       /* border-collapse:separate;*/

    }

    .divRow
    {
       display:table-row;
       width:auto;

    }

    .divCell
    {
        float:left;/*fix for  buggy browsers*/
        display:table-column;
        width:200px;
        text-wrap:normal;
        white-space:normal;
        /*background-color:#ccc;*/
    }
    .border_doc{
        box-shadow:0px 0px 3px #000;
        border:7px ridge #70b01c; width:100px; height:141px; background:#FFF
    }
    .border_ngang{
        box-shadow:0px 0px 3px #000;
        border:7px ridge #70b01c; width:141px; height:100px; background:#FFF;margin-top:20px;
    }
</style>
<body>
    <input type="file" id="upload_input" style="visibility:hidden" value="Chọn file"  hidden>
    <form id="image_submit">
        <input type="hidden" name="action" value="single_image">
        <input type="hidden" name="default_name" id="default_name">
        <input type="hidden" name="cmd" value="upload">
        <input type="hidden" name="target" value="f1_XA">
        <input type="hidden" name="answer" value="42">
        <input type="hidden" name="tenthumuc" id="tenthumuc">
        <input type="hidden" name="profile" id="tcd" value="tcd">
        <input type='hidden'  id='anh'  name='image_data[]'>
    </form>


    <div class="top_form ui-widget-content">
        <div style="padding:2px 0px;" class="thongtin_tongthe">
            <div class="patient_info"></div>
        </div>
        <div class="thongtin_chidinh">
            <div class="form_row">
                <label style="width:70px;text-align:Left">Chỉ định:</label><input lang='luu' name="nguoi_chidinh" style="width:90px" type="text"  id="nguoi_chidinh" name="nguoi_chidinh" disabled>
                <label style="width:100px;text-align:Left">Người thực hiện:</label>
                <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span>
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span>
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
                <div style="height:3px"></div>
                <label style="width:70px;text-align:Left">Chỉ định lúc:</label><input lang='luu' style="width:90px" type="text"  id="ngaychidinh" name="ngaychidinh" disabled>
                <input style="width:95px" type="text" value="22:26 24/05/13" lang="luu"id="ngaythuchien" name="ngaythuchien"disabled >
                <a href="#" id="dathuchien" class="ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a>
                <input style="width:105px" type="text" value="22:26 24/05/13"  lang="luu" id="ngaychandoan" name="ngaychandoan"disabled>
                <a href="#" id="hoantat" class=" ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>


            </div>
        </div>
        <div class="thongtin_luotkham" id="left_col">
            <div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button>
            </span>
            <label id="ngay_kham"></label>
             <a href="#" id="themvideo" class=" ui-state-default ui-corner-all fm-button-icon-left" style="margin-top:-8px;width:90px;margin-right:20px; float: right; ">Thêm Video<span class="ui-icon ui-icon-plus"></span></a>
        </div>
        <div class="thongtin_luotkham thongtin_thai" id="center_col">
                  <label id="id_trangthai"style="font-size:14px;margin-left:5px;font-weight:bold" name="id_trangthai"></label>
				  <div style="margin-left:5px">
						<a href="#" id="open_form_hentra" style="color:blue">Giờ hẹn trả kết quả:</a>
						<label id="giohentra" style="color:blue;margin-left:5px"></label>
				  </div>
				  <div style="margin-top: 5px;margin-left:5px;color:#F781D8;font-size:13px" id="edit_by">
						<label>Sửa bởi:</label>
						<label id="nguoisua" style="color:blue"></label>
						<label id="ngaygiosua" style="color:blue"></label>

                        <input id="sovideo"style="float:right;width: 20px;"disabled>
                        <label style="float:right"> Số Video hiện tại</label>
                        <button id="viewvideo" style="float:right;width:90px;margin-top: -3px;">View Video</button>
				  </div>
        </div>
        <div class="thongtin_luotkham" id="right_col">
		
        <div style="margin-top: 6px;">
        <a href="#" id="luu" class=" ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;margin-right:4px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a>
        <a href="#" id="sua" class=" ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
        <a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:62px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
        <a href="#" id="inlichKhamThai" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:40px;  margin-bottom:1px;float: right;">In 4H <span class="ui-icon ui-icon-print"></span></a>
        <a href="#" id="inPhieuGiamPhanTram" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:50px;  margin-bottom:1px;float: right;display:none;">Giảm %<span class="ui-icon ui-icon-print"></span></a>
        <a href="#" id="inPhieuCanhNoan" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:60px;  margin-bottom:1px;float: right; ">Canh noãn<span class="ui-icon ui-icon-print"></span></a>
		 <a href="#" id="xemin" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
        <a href="#" id="inHinh4D" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right;  display:none;">In 4D<span class="ui-icon ui-icon-print"></span></a>
        </div>
        <div style="margin-top: 5px;">
        <span style="margin-left:12px;"><label  for="chonanh">C.ảnh</label><input id="chonanh" type="checkbox"></span>
        <span style="" id="In_CoChuKy" style="margin-left:5px" > 
        	Chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>
        </div>
        </div>


        <!--<div class="canlamsang"></div>-->


    </div>

    <div id="panel_main">

        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>
        </div>
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
            Chọn mẫu
            <input type="text" id="template_title"  style="width:75%">
            <input id="template_title1"  name="template_title1" type="text" style="display:none" >
            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>-->
            <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">Thêm template</button>
            <label style="width:90px;text-align:left;font-size:14px">Mô tả:</label>
            <input type="button" value="Xóa" id="xoamota"style="float: right;margin-top: 3px;"/>
            <input type="button" value="Chèn" id="chen"style="float: right;margin-top: 3px;"/>
            <textarea id="mota" name="mota"  lang='luu'></textarea>
        </div>
        <div class="ui-widget-content ui-layout-east" id="inner">
            <div class="ui-layout-north">
                <div class="thongtin_thai">
                    <div class="form_row">
                        <label style="width:40px;text-align:right">Tuần: </label><input  lang="luu" style="width:20px" type="text" value="0" id="tuanthai"  name="tuanthai" maxlength="2">
                        <label style="width:40px;text-align:right">Ngày: </label><input   lang="luu"style="width:20px" type="text" value="0" id="ngaythai" name="ngaythai" maxlength="2">
                        <label style="width:90px;text-align:right">Trọng lượng (g): </label><input lang="luu"  style="width:40px" type="text" value="0" id="trongluongthai" name="trongluongthai" maxlength="4">
                        <div style="height:2px"></div>
                        <label style="width:50px;text-align:right">Số thai: </label><input lang="luu"  style="width:20px" type="text" value="1" id="soluongthai" name="soluongthai" maxlength="1">
                        <label style="width:5px;text-align:right">PARA: </label>
                        <input style="width:15px;margin-left: 23px;text-align:center;" type="text" id="para1" name="para1" maxlength="1" >
                <input style="width:15px;text-align:center;" type="text" id="para2" name="para2" maxlength="1" >
                <input style="width:15px;text-align:center;" type="text" id="para3" name="para3" maxlength="1" >
                <input style="width:15px;text-align:center;margin-top: 10px;" type="text" id="para4" name="para4" maxlength="1" >
                        <label style="width:30px;text-align:right;display:none;">Giá: </label><input lang="luu"  style="width:40px;display:none;" type="text" value="0" id="phithuchien" name="phithuchien" disabled>

                    </div>
                </div>

            </div>

            <div class="ui-layout-center thongtin_thai">
                 <label style="width:90px;text-align:left;font-size:14px">Kết luận</label>
            <input type="button" value="Xóa" id="xoaketluan"style="float: right;margin-top: 3px;"/>
                <textarea lang='luu' id="ketluan"  name="ketluan" style="width:98%; height:98%;font-size:13px!important" ></textarea>

            </div>
            <div class="ui-layout-south thongtin_thai">
               <label style="width:90px;text-align:left;font-size:14px">Đề nghị</label>
            <input type="button" value="Xóa" id="xoaloikhuyen"style="float: right;margin-top: 3px;"/>
                <textarea lang='luu'  id="loikhuyen"    name="loikhuyen"  style="width:98%; height:98%;font-size:13px!important" ></textarea>

            </div>

        </div>
    </div>

    <div id="dialog-form" title="Thêm bản ghi" style="display:none">
        <div style="text-align: center;">
            <label style="width:90px;text-align:center;font-size:20px">Mô tả có rồi,bạn có muốn ghi đè hay không? </label>
        </div>
        <div style="text-align: center;">
            <label style="width:90px;text-align:right;ont-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
            <label style="width:90px;text-align:right;ont-size:17px">No(Chỉ chèn thêm)</label>
            <label style="width:90px;text-align:right;ont-size:17px;margin-left: 20px;">Cance(Thoát)</label>
        </div>
        <div style="text-align: center;margin-top:10px">
            <input type="button" value="Yes" id="yes" style="width: 60px; margin-right: 20px"/>
            <input type="button" value="No" id="no"  style="width: 60px"/>
            <input type="button" value="Cancel" id="cancel" style="margin-left: 20px; width: 60px"/>
        </div>
    </div>
    <div id="dialog-form2" title="Cảnh báo lưu ý" style="display:none">
        <div style="text-align: center;">
            <label style="width:90px;text-align:center;font-size:20px">Bạn có muốn xóa không?</label>
        </div>
        <div style="text-align: center;margin-top:10px">
            <input type="button" value="Yes" id="yes2"style="width: 60px; margin-right: 20px;"/>
            <input type="button" value="No" id="no2"style="width: 60px;"/>
        </div>
    </div>
     <div id="dialog-form3" title="Chọn kiểu in ảnh" style="display:none">
        <div class="divTable">
            <div class="headRow">
                <div class="divCell" align="center"><strong>Mẫu 1</strong></div>
                <div class="divCell" align="center"><strong>Mẫu 2</strong></div>
                <div class="divCell" align="center"><strong>Mẫu 3</strong></div>
            </div>
            <div class="divRow">
               <div class="divCell" align="center">
                    <div class="border_doc" id="kieu1">
                        <div style="border:1px dotted #000; width:80px; height:120px; background:#00c005; margin-top:10px">
                            <div style="margin-top:65%;">Hình 1</div>
                        </div>
                    </div>
               </div>
                <div class="divCell" align="center">
                    <div class="border_ngang" id="kieu2">
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#00c005; margin-top:10px;display:inline-block">
                            <div style="margin-top:60%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#2a73be; margin-top:10px;display:inline-block">
                            <div style="margin-top:60%;">Hình 2</div>
                        </div>
                    </div>
               </div>
                <div class="divCell" align="center">
                    <div class="border_doc" id="kieu3">
                        <div style="border:1px dotted #000; width:60px; height:75px; background:#2a73be; margin-top:10px">
                            <div style="margin-top:52%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:40px; background:#00c005; margin-top:4px;display:inline-block">
                            <div style="margin-top:35%;">Hình 2</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:40px; background:#00c005; margin-top:4px;display:inline-block">
                            <div style="margin-top:35%;">Hình 3</div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="divRow" >
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 4</strong></div>
                <div class="divCell" align="center" style=" padding-top:4px;"><strong>Mẫu 5</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 6</strong></div>
           </div>
            <div class="divRow">
                 <div class="divCell" align="center">
                    <div class="border_doc" id="kieu4">
                         <div style="border:1px dotted #000; width:40px; height:57px; background:#2a73be; margin-top:10px;display:inline-block">
                            <div style="margin-top:48%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#00c005; margin-top:10px;display:inline-block">
                            <div style="margin-top:48%;">Hình 2</div>
                        </div><br>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#00c005; margin-top:3px;display:inline-block">
                            <div style="margin-top:48%;">Hình 3</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:57px; background:#2a73be; margin-top:3px;display:inline-block">
                            <div style="margin-top:48%;">Hình 4</div>
                        </div>
                    </div>
               </div>
               <div class="divCell" align="center">
                    <div class="border_ngang" id="kieu5">
                    <div style="float:left; width:47%">
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#2a73be; margin-top:10px;display:inline-block">
                            <div style="margin-top:52%;">Hình 1</div>
                        </div>
                    </div>
                    <div style="float:left">
                        <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:12px;">
                            <div style="margin-top:30%;">Hình 2</div>
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:12px;">
                            <div style="margin-top:30%;">Hình 3</div>
                        </div>
                        <br>
                        <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:3px;">
                            <div style="margin-top:30%;">Hình 4</div>
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:35px; background:#00c005; display:inline-block;margin-top:3px;">
                            <div style="margin-top:30%;">Hình 5</div>
                        </div>
                    </div>
                    </div>
               </div>
                <div class="divCell">
                  <div class="divCell" align="center" id="kieu6">
                    <div class="border_doc">
                    <div style="float:left; width:48%;margin-left:5px ">
                         <div style="border:1px dotted #000; width:40px; height:63px; background:#2a73be; margin-top:3px;display:inline-block">
                            <div style="margin-top:64%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:40px; height:63px; background:#2a73be; margin-top:5px;display:inline-block">
                            <div style="margin-top:59%;">Hình 2</div>
                        </div>
                     </div>
                      <div style="float:left; margin-left:10px ">
                         <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:5px">
                            <div style="margin-top:10%;">Hình 3</div>
                        </div>
                            <br>
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                            <div style="margin-top:10%;">Hình 4</div>
                        </div>
                            <br>
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:7px">
                            <div style="margin-top:10%;">Hình 5</div>
                        </div>
                            <br>
                        <div style="border:1px dotted #000; width:25px; height:28px; background:#00c005; display:inline-block;margin-top:2px">
                            <div style="margin-top:10%;">Hình 6</div>
                        </div>
                     </div>
                    </div>
                </div>
           </div>
           <div class="divRow" >
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 7</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 8</strong></div>
                <div class="divCell" align="center" style="padding-top:4px;"><strong>Mẫu 9</strong></div>
           </div>
             <div class="divCell" align="center">
                    <div class="border_ngang" id="kieu7">
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#2a73be; margin-top:5px;display:inline-block">
                            <div style="margin-top:26%;">Hình 1</div>
                        </div>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#00c005; margin-top:5px;display:inline-block">
                            <div style="margin-top:26%;">Hình 2</div>
                        </div>
                        <br>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#00c005; margin-top:5px;display:inline-block">
                            <div style="margin-top:26%;">Hình 3</div>
                        </div>
                        <div style="border:1px dotted #000; width:50px; height:40px; background:#2a73be; margin-top:5px;display:inline-block">
                            <div style="margin-top:26%;">Hình 4</div>
                        </div>
                    </div>
               </div>
               <div class="divCell" align="center">
                    <div class="border_ngang" id="kieu8">
                    <div style="float:left; width:48%">
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#00c005; margin-top:10px;display:inline-block">
                            <div style="margin-top:52%;">Hình 1</div>
                        </div>
                    </div>
                    <div style="float:left">
                        <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:12px;">
                            <div style="margin-top:30%;">Hình 2</div>
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:12px;">
                            <div style="margin-top:30%;">Hình 3</div>
                        </div>
                        <br>
                        <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:10px;">
                            <div style="margin-top:30%;">Hình 4</div>
                        </div>
                         <div style="border:1px dotted #000; width:32px; height:30px; background:#00c005; display:inline-block;margin-top:10px;">
                            <div style="margin-top:30%;">Hình 5</div>
                        </div>
                    </div>
                    </div>
               </div>
                <div class="divCell">
                  <div class="divCell" align="center" >
                    <div class="border_ngang"id="kieu9">
                    <div style="float:left; width:47%">
                        <div style="border:1px dotted #000; width:55px; height:80px; background:#2a73be; margin-top:10px;display:inline-block">
                            <div style="margin-top:52%;">Hình 1</div>
                        </div>
                    </div>
                    <div style="float:left">
                        <div style="border:1px dotted #000; width:64px; height:35px; background:#00c005; display:inline-block;margin-top:12px;">
                            <div style="margin-top:30%;">Hình 2</div>
                        </div>

                        <br>
                        <div style="border:1px dotted #000; width:64px; height:35px; background:#00c005; display:inline-block;margin-top:3px;">
                            <div style="margin-top:30%;">Hình 3</div>
                        </div>

                    </div>
                    </div>
                </div>
           </div>


      </div>
     </div>
</body>
</html>
<script type="text/javascript">
var report_code=["SieuAmThai4D_Kieu1Hinh","SieuAmThai4D_Kieu2Hinh","SieuAmThai4D_Kieu3Hinh","SieuAmThai4D_Kieu4Hinh","SieuAmThai4D_Kieu5Hinh","SieuAmThai4D_Kieu6Hinh","SieuAmThai4D_Kieu4HinhNgang","SieuAmThai4D_Kieu3HinhNgang","PhieuCanhNoan","PhieuGiamGiaSieuAmPhanTram","PhieuGiamGiaSieuAm","SieuAmThai4D_LichHen","SieuAmThai4D"];
var report_name=["Siêu âm 1 hình","Siêu âm 2 hình","Siêu âm 3 hình","Siêu âm 4 hình","Siêu âm 5 hình","Siêu âm 6 hình","Siêu âm 4 hình ngang","Siêu âm 3 hình ngang","Phiếu canh noãn","Phiếu giảm giá phần trăm siêu âm","Phiếu giảm giá siêu âm","Lich hẹn khám thai siêu âm","Xem in siêu âm thai 4d"];

    var _id_luotkham = [];
    var data_luotkham = "";
    var navigator_count = 0;
    var _folder_name;
    var ma_benhnhan=0;
    var id_loaikham;
    var _id_kham;
     var _soNgayThai;
     var _id_trangthai;
     var tenloaikham;
    $(document).ready(function() {

        $("#upload_input").change(function(e) {
            _folder_name_="USTH4D//"+ma_benhnhan;
           imagesSelected(this.files,submit_file);
      });
        number_textbox("#tuanthai");
        number_textbox("#ngaythai");
        number_textbox("#trongluongthai");
        number_textbox("#soluongthai");
       number_textbox("#para1");
        number_textbox("#para2");
        number_textbox("#para3");
        number_textbox("#para4");

    $("#xemin").click(function(e){
        $("#luu").click();
        if($('#chonanh').is( ":checked" )) {
            print_action="chonanh";

        } else {
            print_action="xemin";
            //dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
        }
        if($("#soluongthai").val()=="2"){
			if($('#In_CoChuKy input:checkbox').is( ":checked" ))
			{
            dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",3,"sieuam4d_2",'<?=$modules?>');
			}else{
				dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",3,"sieuam4d_2_khongchuky",'<?=$modules?>');
				}
        } else{
			if($('#In_CoChuKy input:checkbox').is( ":checked" ))
			{
            dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",3,"sieuam4d",'<?=$modules?>');
			}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_khongchuky",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",3,"sieuam4d_khongchuky",'<?=$modules?>');
			}
        }

    });
    $("#inHinh4D").click(function(e){
        $("#luu").click();
        $("#dialog-form3").dialog("open");
    });
    $("#kieu1").click(function(e){
        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu1Hinh",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",6,"sieuamkieu1",'<?=$modules?>');
    });
    $("#kieu2").click(function(e){
        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu2HinhNgang",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",6,"sieuamkieu2",'<?=$modules?>');
    });
    $("#kieu3").click(function(e){
        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu3Hinh",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",6,"sieuamkieu3",'<?=$modules?>');
    });
    $("#kieu4").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu4Hinh",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",7,"sieuamkieu4",'<?=$modules?>');
    });
    $("#kieu5").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu5Hinh",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",8,"sieuamkieu5",'<?=$modules?>');
    });
    $("#kieu6").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu6Hinh",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",9,"sieuamkieu6",'<?=$modules?>');
    });
    $("#kieu7").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu4HinhNgang",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",7,"sieuamkieu7",'<?=$modules?>');
    });
    /*$("#kieu8").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu2HinhNgang",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",7,"sieuamkieu8",'<?=$modules?>');
    });*/
    $("#kieu9").click(function(e){

        print_action="xemin";
        dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_Kieu3HinhNgang",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",7,"sieuamkieu9",'<?=$modules?>');
    });
    $("#inlichKhamThai").click(function(e){
		
		$("#luu").click();
        if($('#chonanh').is( ":checked" )) {
            print_action="chonanh";

        } else {
            print_action="xemin";
            //dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
        }
        if($("#soluongthai").val()=="2"){
			if($('#In_CoChuKy input:checkbox').is( ":checked" ))
			{
            dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",4,"sieuam4d_4_hinh",'<?=$modules?>');
			}else{
				dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",4,"sieuam4d_4_hinh",'<?=$modules?>');
				}
        } else{
			if($('#In_CoChuKy input:checkbox').is( ":checked" ))
			{
            dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",4,"sieuam4d_4_hinh",'<?=$modules?>');
			}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"SieuAmThai4D_khongchuky",print_action,"PHIẾU SIÊU ÂM SẢN PHỤ KHOA 4 CHIỀU","4D 0B - GYN ULTRASOUND","Bác sĩ SIÊU ÂM","left",4,"sieuam4d_4_hinh",'<?=$modules?>');
			}
        }
     });
     $("#inPhieuGiamPhanTram").click(function(e){
        $("#luu").click();
        $.cookie("in_status", "print_preview");
        dialog_report("Xem trước khi in",90,90,"u78787878975b","pages.php?module=report&view=<?=$modules?>&action=phieumiengiam4d&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuGiamGiaSieuAmPhanTram');
        $(".frame_u78787878975b").css("width","793px");
        });
     $("#inPhieuCanhNoan").click(function(e){
        $("#luu").click();
        $.cookie("in_status", "print_preview");
        dialog_report("Xem trước khi in",90,90,"u78787878975c","pages.php?module=report&view=<?=$modules?>&action=phieucanhnoan&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuCanhNoan');
        $(".frame_u78787878975c").css("width","793px");
        });
      $("#inPhieuGiam").click(function(e){
        $("#luu").click();
        /* if($("#phithuchien").val()<"250000"){
            alert("Chỉ in phiếu giảm giá đối với lần đầu tiên khám thai giá 250,000 đồng!");
        } */
       // else{
            $("#luu").click();
        $.cookie("in_status", "print_preview");
        dialog_report("Xem trước khi in",90,90,"u78787878975d","pages.php?module=report&view=<?=$modules?>&action=phieugiam4d&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'PhieuGiamGiaSieuAm');
        $(".frame_u78787878975d").css("width","793px");
        //}
        });



        $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
            $(".patient_info").html(data);
            $(".patient_info").css("width", $("#patient_info").width() + "css");
             ma_benhnhan=$('.profile_container .mabenhnhan').text() ;

        });
        $("#panel_main").css("height", $(window).height() - 151 + "px");
        $("#panel_main").fadeIn(1000);
        create_layout();
        resize_control();
        openform_shortcutkey();
        window.nhanvien_complete=0;
        window.nhanvien1_complete=0;
        window.nhanvien2_complete=0;
        create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 300, 'danhmuc', 'data_nhanvien',<?=$_SESSION["user"]["id_user"]?>);
        create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi',<?=$_SESSION["user"]["id_user"]?>);
        $('#sua').button();
        $('#luu').button();
        $('#dathuchien').button();
        $('#hoantat').button();
        $('#boqua').button();
        $('#themvideo').button();
        $('#boqua').hide();
       window.stt = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) { if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
   if(id_kham2!="0"){
         $.getJSON("pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_loaisieuam&idbenhnhan=" +id_benhnhan,
            function(data) {
            data_luotkham = data;
            //alertObject(data);
            var tam1_cls = "";
            $.each(data, function(key, val) {
                for (i = 0; i < val.length; i++) {
                    var tam1_cls = val[i]["cell"];
                    _id_luotkham.push(tam1_cls[5]);
                }
                _id_luotkham = $.unique(_id_luotkham);
                load_complete();
                goto_kham(id_kham2)  ;
                if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
                    $('.template_title_button').button( 'disable');
                }else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
                    $('.template_title_button').button( 'enable');
                }
            });
        });
    }else{
        $.getJSON("pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_loaisieuam&idbenhnhan=" +id_benhnhan,
                function(data) {
            data_luotkham = data;
            //alertObject(data);
            var tam1_cls = "";
            $.each(data, function(key, val) {
                for (i = 0; i < val.length; i++) {
                    var tam1_cls = val[i]["cell"];
                    _id_luotkham.push(tam1_cls[5]);
                }
                _id_luotkham = $.unique(_id_luotkham);
                load_complete();
                if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
                    $('.template_title_button').button( 'disable');
                }else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
                    $('.template_title_button').button( 'enable');
                }
            });
        });
    }
	function reload_data(){
        _id_luotkham.splice(0, _id_luotkham.length-1)
        delete tong_luotkham;
		 $.getJSON("pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_loaisieuam&idbenhnhan=" +id_benhnhan,
            function(data) {
                data_luotkham = data;
                //alertObject(data);
                var tam1_cls = "";
                $.each(data, function(key, val) {
                    for (i = 0; i < val.length; i++) {
                        var tam1_cls = val[i]["cell"];
                        _id_luotkham.push(tam1_cls[5]);
                    }
                    _id_luotkham = $.unique(_id_luotkham);
                   //load_complete();
                   if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
                     $('.template_title_button').button( 'disable');
                    }else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
                        $('.template_title_button').button( 'enable');
                    }
                });
            });
	}
    $(window).resize(function() {
        $("#panel_main").css("height", $(window).height() - 151 + "px");
        resize_control();
    });
        //navigator_load(0);
        $(function() {
            $("#first").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-first"
                }
            })
                    .click(function() {
                navigator_load("first");
            });
            $("#last").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-end"
                }
            })
                    .click(function() {
                navigator_load("end");
            });
            $("#next").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-next"
                }
            })
                    .click(function() {
                navigator_load(1);
            });
            $("#prev").button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-prev"
                }
            })
                    .click(function() {
                navigator_load(-1);
            });

            $( "#add_template" ).button({
              text: false,
              icons: {
                primary: "ui-icon-plus"
              }
            })
            .click(function() {

            });
                    $("#cancel").click(function(){
                $("#dialog-form").dialog("close");
            });

            $("#xoamota").click(function(){
                // alert('')
                $("#dialog-form2").dialog("open");
                window.oper='xoamt';
                    //$("#mota").val("");
                    //$("#ketluan").val("");
                    //$("#loikhuyen").val("");
            });

            $("#xoaketluan").click(function(){
                $("#dialog-form2").dialog("open");
                window.oper='xoakl';
                    //$("#ketluan").val("");
            });
            $("#xoaloikhuyen").click(function(){
                $("#dialog-form2").dialog("open");
                window.oper='xoalk';
                //$("#loikhuyen").val("");
            });
        });


         $("#yes2").click(function(){
                if(window.oper=='xoamt'){
                    $("#mota").val("");
                    $("#ketluan").val("");
                    $("#loikhuyen").val("");
                    $( "#dialog-form2" ).dialog( "close" );
                }
                if(window.oper=='xoakl'){
                    $("#ketluan").val("");
                    $( "#dialog-form2" ).dialog( "close" );
                }
                if(window.oper=='xoalk'){
                    $("#loikhuyen").val("");
                    $( "#dialog-form2" ).dialog( "close" );
                }
            });
              $("#no2").click(function(){
                $( "#dialog-form2" ).dialog( "close" );
              });
         $("#cancel").click(function(){
            $("#dialog-form").dialog("close");
        });
        $("#sua").click(function(){
            //$('#sua').button( {disabled:true});
			lock_viewer(true,"visible");
			$('#themvideo').button( {disabled:false});
            $('#luu').button( {disabled:false});
            $('#ketluan').attr("disabled",false);
            $('#mota').attr("disabled",false);
            $('#tuanthai').attr("disabled",false);
            $('#ngaythai').attr("disabled",false);
            $('#trongluongthai').attr("disabled",false);
            $('#soluongthai').attr("disabled",false);
            $('#para1').attr("disabled",false);
            $('#para2').attr("disabled",false);
            $('#para3').attr("disabled",false);
            $('#para4').attr("disabled",false);
            $('#thongsokt').attr("disabled",false);//thong so ky thuat
            $('#loikhuyen').attr("disabled",false);
            $('#xoatskt').button( {disabled:false});//xoa thong so ky thuat
            $('#xoaketluan').button( {disabled:false});
            $('#xoaloikhuyen').button( {disabled:false});
            $('#xoamota').button( {disabled:false});
            $('#open_template').button( {disabled:false});
            $( "#template_title" ).attr("disabled",false);
            $("#sua").hide();
            $('#boqua').show();
             $('#chen').button( {disabled:false});
            $('.template_title_button').button( {disabled:false});
           /* $('.chuandoan_button').button( {disabled:false});
            $('.nhanvien_button').button( {disabled:false});
            $( "#nhanvien" ).attr("disabled",false);
              $( "#chuandoan" ).attr("disabled",false);*/
              $('#add_template').button( {disabled:false});
			  kt_trangthai(_id_trangthai);
              window.test="giosuacuoi";
          });
            $("#boqua").click(function(){
                lock_viewer(false,"hidden");
                $("#sua").show();
                $('#boqua').hide();
                $('#luu').button( {disabled:true});
                $('#ketluan').attr("disabled",true);
                $('#mota').attr("disabled",true);
                $('#thongsokt').attr("disabled",true);//thong so ky thuat
                $('#loikhuyen').attr("disabled",true);
                $('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
                $('#xoaketluan').button( {disabled:true});
                $('#xoaloikhuyen').button( {disabled:true});
                $('#xoamota').button( {disabled:true});
                $('#open_template').button( {disabled:true});
                $( "#template_title" ).attr("disabled",true);
                $('#chen').button( {disabled:true});
                $('#themvideo').button( {disabled:true});
                $('#tuanthai').attr("disabled",true);
                $('#ngaythai').attr("disabled",true);
                $('#trongluongthai').attr("disabled",true);
                $('#soluongthai').attr("disabled",true);
                $('#para1').attr("disabled",true);
                $('#para2').attr("disabled",true);
                $('#para3').attr("disabled",true);
                $('#para4').attr("disabled",true);
                /* $("#mota").val(mota5);
                $("#thongsokt").val(thongsokt5);
                $("#ketluan").val(ketluan5);
                $("#loikhuyen").val(loikhuyen5);
                $("#nhanvien1").val(nhanvien4);
                $("#chuandoan1").val(chuandoan4);*/
                $('.template_title_button').button( {disabled:true});
                /*  $('.chuandoan_button').button( {disabled:true});
                $('.nhanvien_button').button( {disabled:true});
                $( "#nhanvien" ).attr("disabled",true);*/
                kt_trangthai(_id_trangthai);
                // $( "#chuandoan" ).attr("disabled",true);
                $('#add_template').button( {disabled:true});
                /*setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);*/
                //reload();
            });
            $("#add_template").click(function(e){
              links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
              elem=1 + Math.floor(Math.random() * 1000000000);
              width=90;
              height=90;
              dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);
            })
              $("#dathuchien").click(function(){
                    $("#id_trangthai").html("Đã thực hiện");
                    window.test2="dathuchien1";
                    $('#dathuchien').button( {disabled:true});
                    $('#sua').button( {disabled:false});
                    $('#luu').button( {disabled:true});
                    $('#xoamota').button( {disabled:true});
                    $('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
                    $('#xoaketluan').button( {disabled:true});
                    $('#xoaloikhuyen').button( {disabled:true});
                    $('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
                    $('#ketluan').attr("disabled", "disabled");
                    $('#mota').attr("disabled", "disabled");
                    $('#themvideo').button( {disabled:true});
                    $('#loikhuyen').attr("disabled", "disabled");
                    $('#open_template').button( {disabled:true});
                    $( "#template_title" ).attr("disabled",true);
                    $('#chen').button( {disabled:true});
                    _id_trangthai="DaThucHien";
                    $('.template_title_button').button( {disabled:true});
                    /* $('.chuandoan_button').button( {disabled:false});
                    $('.nhanvien_button').button( {disabled:true});
                    $( "#nhanvien" ).attr("disabled",true)*/;
                    kt_trangthai(_id_trangthai);
                    $('#add_template').button( {disabled:true});
                    $('#tuanthai').attr("disabled",true);
                    $('#ngaythai').attr("disabled",true);
                    $('#trongluongthai').attr("disabled",true);
                    $('#soluongthai').attr("disabled",true);
                    $('#para1').attr("disabled",true);
                    $('#para2').attr("disabled",true);
                    $('#para3').attr("disabled",true);
                    $('#para4').attr("disabled",true);
                    $('#boqua').hide();
                    $('#sua').show();
                    $("#ngaythuchien").html(gio("current"));
                    var giothuchien2= $( "#ngaythuchien" ).text();
                    var a = $("#para1").val();
                    var b = $("#para2").val();
                    var c = $("#para3").val();
                    var d = $("#para4").val();
                    var e=a+"-"+b+"-"+c+"-"+d;
                    phancach = "";
                    i = 0;
                    dataToSend = '{';
                    $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {
                        if ($(this).attr("lang") == "luu") {
                            dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                        }
                        phancach = ",";
                    });
                    var sotuanthai=$("#tuanthai").val();
                    var songaythai=$("#ngaythai").val();
                    songaythai2 = parseFloat(sotuanthai)*7+parseFloat(songaythai);
                    dataToSend += phancach + '"id_kham":"' + _id_kham + '"';
                    dataToSend += phancach + '"para":"' +e+ '"';
                    dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
                    dataToSend += phancach + '"songaythai":"' + songaythai2+ '"';
                    dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
                    dataToSend += phancach + '"id_luotkham":"' +id_luotkham2+ '"';
                    dataToSend += '}';
                    //alert(dataToSend);
                    dataToSend = jQuery.parseJSON(dataToSend);
                    //alertObject(dataToSend);
                    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
                    .done(function( gridData ) {
                        tooltip_message("Đã thực hiện");
                        
                    })
                    .fail(function() {
                        alert( "error" );
                    });
                    reload_data();
              });
              $("#hoantat").click(function(){
                    $("#id_trangthai").html("Đã hoàn tất");
                    window.test2="hoantat1";
                    $('#dathuchien').button( {disabled:true});
                    $('#themvideo').button( {disabled:true});
                    $('#hoantat').button( {disabled:true});
                    $('#sua').button( {disabled:false});
                    $('#luu').button( {disabled:true});
                    $('#xoamota').button( {disabled:true});
                    $('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
                    $('#xoaketluan').button( {disabled:true});
                    $('#xoaloikhuyen').button( {disabled:true});
                    $('#thongsokt').attr("disabled", "disabled"); //thong so ky thuat
                    $('#ketluan').attr("disabled", "disabled");
                    $('#mota').attr("disabled", "disabled");
                    $('#loikhuyen').attr("disabled", "disabled");
                    $('#open_template').button( {disabled:true});
                    $( "#template_title" ).attr("disabled",true);
                    $('#chen').button( {disabled:true});
                    _id_trangthai="Xong";
                    $('.template_title_button').button( {disabled:true});
                    /* $('.chuandoan_button').button( {disabled:true});
                    $('.nhanvien_button').button( {disabled:true});
                    $( "#nhanvien" ).attr("disabled",true);
                    $( "#chuandoan" ).attr("disabled",true);*/
                    kt_trangthai(_id_trangthai);
                    $('#add_template').button( {disabled:true});
                    $('#boqua').hide();
                    $('#sua').show();
                    $('#tuanthai').attr("disabled",true);
                    $('#ngaythai').attr("disabled",true);
                    $('#trongluongthai').attr("disabled",true);
                    $('#soluongthai').attr("disabled",true);
                    $('#para1').attr("disabled",true);
                    $('#para2').attr("disabled",true);
                    $('#para3').attr("disabled",true);
                    $('#para4').attr("disabled",true);
                    $("#ngaythuchien").html(gio("current"));
                    var giothuchien2= $( "#ngaythuchien" ).text();
                    $("#ngaychandoan").html(gio("current"));
                    var giohoantat2= $( "#ngaychandoan" ).text();
                    var a = $("#para1").val();
                    var b = $("#para2").val();
                    var c = $("#para3").val();
                    var d = $("#para4").val();
                    var e=a+"-"+b+"-"+c+"-"+d;
                    phancach = "";
                    i = 0;
                    dataToSend = '{';
                    $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {
                        if ($(this).attr("lang") == "luu") {
                            dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                        }
                        phancach = ",";
                    });
                    var sotuanthai=$("#tuanthai").val();
                    var songaythai=$("#ngaythai").val();
                    songaythai2 = parseFloat(sotuanthai)*7+parseFloat(songaythai)
                    dataToSend += phancach + '"id_kham":"' + _id_kham + '"';
                    dataToSend += phancach + '"para":"' +e+ '"';
                    dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
                    dataToSend += phancach + '"songaythai":"' + songaythai2+ '"';
                    dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
                    dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
                    dataToSend += phancach + '"id_luotkham":"' +id_luotkham2+ '"';
                    dataToSend += '}';
                    //alert(dataToSend);
                    dataToSend = jQuery.parseJSON(dataToSend);
                    // alertObject(dataToSend);
                    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
                    .done(function( gridData ) {
                        tooltip_message("Đã hoàn tất");

                    })
                    .fail(function() {
                        alert( "error" );
                    });
                    reload_data();
                    emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng
          });
        $('#luu').click(function (){
                if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){

                }else{
                    $('#luu').button( {disabled:true});
                    $('#boqua').hide();
                    $('#sua').show();
                    $('#sua').button( {disabled:false});
                    $('.template_title_button').button( {disabled:true});
                    /*$('.chuandoan_button').button( {disabled:true});
                    $('.nhanvien_button').button( {disabled:true});
                    $( "#nhanvien" ).attr("disabled",true);
                    $( "#chuandoan" ).attr("disabled",true);*/
                    kt_trangthai(_id_trangthai);
                    $('#add_template').button( {disabled:true});
                    // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                    //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                    $('#ketluan').attr("disabled",true);
                    $('#mota').attr("disabled",true);
                    $('#thongsokt').attr("disabled",true);//thong so ky thuat
                    $('#loikhuyen').attr("disabled",true);
                    $('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
                    $('#xoaketluan').button( {disabled:true});
                    $('#xoaloikhuyen').button( {disabled:true});
                    $('#xoamota').button( {disabled:true});
                    $('#open_template').button( {disabled:true});
                    $( "#template_title" ).attr("disabled",true);
                    $('#themvideo').button( {disabled:true});
                    $('#tuanthai').attr("disabled",true);
                    $('#ngaythai').attr("disabled",true);
                    $('#trongluongthai').attr("disabled",true);
                    $('#soluongthai').attr("disabled",true);
                    $('#chen').button( {disabled:true});
                    $('#para1').attr("disabled",true);
                    $('#para2').attr("disabled",true);
                    $('#para3').attr("disabled",true);
                    $('#para4').attr("disabled",true);
                    if(window.test=="giosuacuoi"){
                    $("#edit_by").show();
                    var nguoisua2=$("#nhanvien1").val();
                    //alert(nguoisua2);
                    $("#nguoisua").html(nguoisua2);
                    $("#ngaygiosua").html(gio("current"));
                    }}
                    var ngaygiosua2=$("#ngaygiosua").text();
                    var a = $("#para1").val();
                    var b = $("#para2").val();
                    var c = $("#para3").val();
                    var d = $("#para4").val();
                    var e=a+"-"+b+"-"+c+"-"+d;
                    phancach = "";
                    i = 0;
                    dataToSend = '{';
                    $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {
                        if ($(this).attr("lang") == "luu") {
                            dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
                        }
                        phancach = ",";
                    });
                    // dataToSend += phancach + '"id_kham":"' + _kham + '"';
                    //alert(_id_trangthai);
                    var sotuanthai=$("#tuanthai").val();
                    var songaythai=$("#ngaythai").val();
                    songaythai2 = parseFloat(sotuanthai)*7+parseFloat(songaythai);
                    dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
                    dataToSend += phancach + '"para":"' +e+ '"';
                    dataToSend += phancach + '"id_kham":"' + _id_kham + '"';
                    dataToSend += phancach + '"songaythai":"' + songaythai2+ '"';
                    dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
                    dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
                    dataToSend += phancach + '"id_luotkham":"' +id_luotkham2+ '"';
                    dataToSend += '}';
                    //alert(dataToSend);
                    dataToSend = jQuery.parseJSON(dataToSend);
                   //alertObject(dataToSend);
                   if(window.test2=="dathuchien1"){
                        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend).done(function( gridData ) {
                            tooltip_message("Đã lưu");
                        })
                        .fail(function() {
                            alert( "error" );
                        })
                    }else
                     if(window.test2=="hoantat1"){
                        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend).done(function( gridData ) {
                                tooltip_message("Đã lưu");
                        }).fail(function() {
                            alert( "error" );
                        })
                        //alert();
                     }
                     else {
                        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend).done(function( gridData ) {
                            tooltip_message("Đã lưu");
                        }).fail(function() {
                            alert( "error" );
                        })
                     }
                    reload_data();
                });

            phanquyen();
            image_message();

     check_folder_exist();


    });
function edit_images(tam){
    tam=tam.split(";");
    elem="6754353898787675";
    dialog_add_dm('Chỉnh sửa hình ảnh',95,95,elem,'pages.php?module=images_control&view=images_edit&id_form=49&search_string='+tam[1]+"&tenthumuc="+tam[2],refresh_images);
}
function refresh_images(){
     $("#images_viewer").attr("src",$("#images_viewer").attr("src"));
}
    function navigator_load(_value) {
        if ((navigator_count + _value > _id_luotkham.length - 1) || (navigator_count + _value < 0)) {
            return false;
        }
        var tam_cls = "";
        if (_value == "first") {
            navigator_count = 0;
        } else if (_value == "end") {
            navigator_count = _id_luotkham.length - 1;
        } else {
            navigator_count += parseInt(_value);
        }
        var _mota = "";
        $.each(data_luotkham, function(key, val) {
            for (i = 0; i < val.length; i++) {
                //tam+=" ; "+val[i]["id"];
                var tam1_cls = val[i]["cell"];
                //alert(tam1_cls[5])
                if (_id_luotkham[navigator_count] == tam1_cls[5]) {
                    //alert(_id_luotkham[navigator_count])
                   tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
                    $("#ngay_kham").html(tam1_cls[2]);

                    $("#id_trangthai").html(tam1_cls[9]);
                    _id_trangthai=tam1_cls[9];
                    window.idluotkham=tam1_cls[5];
                }
            }
            $("#left_col div").html(tam_cls);
            loaikham_click();
        });
        $(".navigator_title").html("Lượt khám " + (navigator_count + 1) + "/" + _id_luotkham.length);
        $("#left_col div div:first-child").click();

    }
    function loaikham_click() {
		//var kt_para=0;
        $.each(data_luotkham, function(key, val) {

            $("#left_col div div").click(function(e) {
                $('#boqua').hide();
                $('#sua').show();
				//alert(data_luotkham);
                for (i = 0; i < val.length; i++) {
                    tam = val[i]["id"];
                                //alert(val.length);
                    var tam1_cls = val[i]["cell"];
                    tam1 = $(this).attr("id");
                    $("#"+tam).removeClass("sieuam1");

                    if (tam == tam1) {
                        $("#mota").val(val[i]["cell"][6]);
                        $("#"+tam).addClass("sieuam1");
                        window.id_loaikham = val[i]["cell"][3];
                        id_luotkham2=val[i]["cell"][5];
                        $("#ketluan").val(val[i]["cell"][7]);
                        $("#loikhuyen").val(val[i]["cell"][8]);
                        $("#nguoi_chidinh").val(val[i]["cell"][4]);
                        $("#ngaychidinh").val(val[i]["cell"][2]);
                        $("#ngaythuchien").val(val[i]["cell"][12]);
                        $("#ngaychandoan").val(val[i]["cell"][14]);
                        $("#nguoisua").html(val[i]["cell"][20]);
                        $("#ngaygiosua").html(val[i]["cell"][21]);

                        $('#viewvideo').button();
                        //alert(val[i]["cell"][21]);
                        tenloaikham=val[i]["cell"][1];
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][13]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][10]);
                        if(val[i]["cell"][15]==null){
                            $("#trongluongthai").val("0");
                        }else{
                            $("#trongluongthai").val(val[i]["cell"][15]);
                        }
                        // alert();
                        if(val[i]["cell"][17]==null){
                            $("#soluongthai").val("1");
                        }else{
                            $("#soluongthai").val(val[i]["cell"][17]);
                        }
                       // $("#phithuchien").val(val[i]["cell"][18]);
                        $('#xoamota').button( {disabled:false});
                        $('#xoaketluan').button( {disabled:false});
                        $('#xoaloikhuyen').button( {disabled:false});
                        $('#yes').button( {disabled:false});
                        $('#no').button( {disabled:false});
                        $('#cancel').button( {disabled:false});
                        $('#yes2').button( {disabled:false});
                        $('#no2').button( {disabled:false});
                        $('#chen').button();
                        _soNgayThai=val[i]["cell"][16];
                        // var SoNgayThai = val[i]["cell"][16];
                        var sotuan = _soNgayThai / 7;
                        var songay = _soNgayThai % 7;
                        $("#ngaythai").val(songay);
                        $("#tuanthai").val(parseInt(sotuan));
                        _id_kham = tam;
                        window.id_kham=tam;
                        _id_trangthai=tam1_cls[9];
                        var para = val[i]["cell"][19];
                        // alert(para);
                        if(para!=null){
                            var rs=para.split("-");
                            $("#para1").val(rs[0]);
                            $("#para2").val(rs[1]);
                            $("#para3").val(rs[2]);
                            $("#para4").val(rs[3]);
                        }else{
                            $("#para1").val('');
                            $("#para2").val('');
                            $("#para3").val('');
                            $("#para4").val('');
                        }

                        var tamthoilathe= stt.split(";");
                        for (i = 0; i <tamthoilathe.length; i++){
                            check=tamthoilathe[i].split(":");
                            if($("#nguoisua").text()==check[0]){ //alert(check[0]);
                                $("#nguoisua").text(check[1]);}
                        }
                        if(_id_trangthai=="DangCho"){
                            $("#id_trangthai").html("Đang chờ");
                            $('#sua').button( {disabled:true});
                            $('#luu').button( {disabled:false});
                            $('#xoaketluan').button( {disabled:false});
                            $('#xoaloikhuyen').button( {disabled:false});
                            $('#ketluan').attr("disabled",false);
                            $('#mota').attr("disabled",false);
                            $('#loikhuyen').attr("disabled",false);
                            $('#xoamota').button( {disabled:false});
                            $('#open_template').button( {disabled:false});
                            $( "#template_title" ).attr("disabled",false);
                            $('#dathuchien').button( {disabled:false});
                            $('.template_title_button').button( {disabled:false});
                            /* $('.chuandoan_button').button( {disabled:false});
                            $('.nhanvien_button').button( {disabled:false});
                            $( "#nhanvien" ).attr("disabled",false);
                            $( "#chuandoan" ).attr("disabled",false);*/
                            kt_trangthai(_id_trangthai);
                            $('#add_template').button( {disabled:false});
                            $('#hoantat').button( {disabled:false});
                            $('#chen').button( {disabled:false});
                            setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                            setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                            $('#tuanthai').attr("disabled",false);
                            $('#ngaythai').attr("disabled",false);
                            $('#themvideo').button( {disabled:false});
                            $('#trongluongthai').attr("disabled",false);
                            $('#soluongthai').attr("disabled",false);
                            $('#para1').attr("disabled",false);
                            $('#para2').attr("disabled",false);
                            $('#para3').attr("disabled",false);
                            $('#para4').attr("disabled",false);

                        }else if(_id_trangthai=="DaThucHien"){
                            $("#id_trangthai").html("Đã thực hiện");
                            $('#sua').button( {disabled:false});
                            $('#luu').button( {disabled:true});
                            $('#xoamota').button( {disabled:true});
                            $('#xoaketluan').button( {disabled:true});
                            $('#xoaloikhuyen').button( {disabled:true});
                            $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                            $('#loikhuyen').attr("disabled", "disabled");
                            $('#open_template').button( {disabled:true});
                            $( "#template_title" ).attr("disabled",true);
                            $('#dathuchien').button( {disabled:true});
                            $('#themvideo').button( {disabled:true});
                            /* $('.chuandoan_button').button( {disabled:false});
                            $('.nhanvien_button').button( {disabled:true});*/
                            kt_trangthai(_id_trangthai);
                            $('.template_title_button').button( {disabled:true});
                            $('#tuanthai').attr("disabled",true);
                            $('#ngaythai').attr("disabled",true);
                            $('#trongluongthai').attr("disabled",true);
                            $('#soluongthai').attr("disabled",true);
                            $('#para1').attr("disabled",true);
                            $('#para2').attr("disabled",true);
                            $('#para3').attr("disabled",true);
                            $('#para4').attr("disabled",true);
                            $( "#nhanvien" ).attr("disabled",true);
                            $('#hoantat').button( {disabled:false});
                            $('#add_template').button( {disabled:true});
                            $( "#chuandoan" ).attr("disabled",false);
                            $('#chen').button( {disabled:true});
                            window.test2="dathuchien1";
                            window.test3="dathuchien";
                            setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                        }else if(_id_trangthai=="DangKham"){
                            $('#themvideo').button( {disabled:false});
                            $("#id_trangthai").html("Đang khám");
                            $('#sua').button( {disabled:true});
                            $('#luu').button( {disabled:false});
                            $('#xoaketluan').button( {disabled:false});
                            $('#xoaloikhuyen').button( {disabled:false});
                            $('#ketluan').attr("disabled",false);
                            $('#mota').attr("disabled",false);
                            $('#loikhuyen').attr("disabled",false);
                            $('#xoamota').button( {disabled:false});
                            $('#open_template').button( {disabled:false});
                            $( "#template_title" ).attr("disabled",false);
                            $('#dathuchien').button( {disabled:false});
                            $('.template_title_button').button( {disabled:false});
                            /* $('.chuandoan_button').button( {disabled:false});
                            $('.nhanvien_button').button( {disabled:false});
                            $( "#nhanvien" ).attr("disabled",false);
                            $( "#chuandoan" ).attr("disabled",false);*/
                            kt_trangthai(_id_trangthai);
                            $('#add_template').button( {disabled:false});
                            $('#hoantat').button( {disabled:false});
                            $( "#chuandoan" ).attr("disabled",false);
                            $('#chen').button( {disabled:false});
                            setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                            setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                            window.test2="dangkham1";
                            $('#tuanthai').attr("disabled",false);
                            $('#ngaythai').attr("disabled",false);
                            $('#trongluongthai').attr("disabled",false);
                            $('#soluongthai').attr("disabled",false);
                            $('#para1').attr("disabled",false);
                            $('#para2').attr("disabled",false);
                            $('#para3').attr("disabled",false);
                            $('#para4').attr("disabled",false);
                        }else if(_id_trangthai=="Xong"){
                            $('#themvideo').button( {disabled:true});
                            $("#id_trangthai").html("Đã hoàn tất");
                            $('#sua').button( {disabled:false});
                            $('#luu').button( {disabled:true});
                            $('#xoamota').button( {disabled:true});
                            $('#xoaketluan').button( {disabled:true});
                            $('#xoaloikhuyen').button( {disabled:true});
                            $('#ketluan').attr("disabled", "disabled");
                            $('#mota').attr("disabled", "disabled");
                            $('#loikhuyen').attr("disabled", "disabled");
                            $('#open_template').button( {disabled:true});
                            $( "#template_title" ).attr("disabled",true);
                            $('#dathuchien').button( {disabled:true});
                            $('#hoantat').button( {disabled:true});
                            $('.template_title_button').button( {disabled:true});
                            /*$('.chuandoan_button').button( {disabled:true});
                            $('.nhanvien_button').button( {disabled:true});
                            $( "#nhanvien" ).attr("disabled",true);
                            $( "#chuandoan" ).attr("disabled",true);*/
                            kt_trangthai(_id_trangthai);
                            $('#add_template').button( {disabled:true});
                            $('#chen').button( {disabled:true});
                            window.test2="hoantat1";
                            window.test3="hoantat";
                            $('#tuanthai').attr("disabled",true);
                            $('#ngaythai').attr("disabled",true);
                            $('#trongluongthai').attr("disabled",true);
                            $('#soluongthai').attr("disabled",true);
                            $('#para1').attr("disabled",true);
                            $('#para2').attr("disabled",true);
                            $('#para3').attr("disabled",true);
                            $('#para4').attr("disabled",true);
                        }
                    }
                }


                create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham,0);
                window.search_string=$(this).attr("alt");
                load_image($(this).attr("alt"));
                bokhoangtrang();
            });
        });
    }
    function resize_control() {
        //$(window).height()thongtin_chidinh thongtin_tongthe
        //alert($(".thongtin_tongthe").width())
        $(".thongtin_chidinh").css("width", $(window).width() - $(".thongtin_tongthe").width() - 12 + "px");
        $("#left_col").css("width", $(window).width() / 3 - 5 + "px");
        $("#center_col").css("width", $(window).width() / 3 - 5 + "px");
        $("#right_col").css("width", $(window).width() / 3 - 7 + "px");
        $("#template_title").css("width", $(".ui-layout-center").width() - 120 + "px");
        $("#mota").css("width",$(".ui-layout-center").width()-8+"px");
        $("#mota").css("height",$(".ui-layout-center").height()-64+"px");
        $("#ketluan").css("width",$(".ui-layout-east").width()-8+"px");
        $("#ketluan").css("height",$(".ui-layout-east").height()-$(".ui-layout-south").height()-$(".ui-layout-north").height()-53+"px");
        $("#loikhuyen").css("width",$(".ui-layout-east").width()-8+"px");
        $("#loikhuyen").css("height",$(".ui-layout-south").height()-40+"px");


    }


    function create_layout() {
        //alert("")
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , west: {
                maskContents: true
                        , resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , east: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }

        });



        $('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "17%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "53%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , south: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
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


    function load_image(search_string){
      /*_folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) {
      }}).responseText; */
      _folder_name="USTH4D//"+ma_benhnhan;
      //alert(_folder_name);
      $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);
      $('#DM_template').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+id_loaikham,datatype:'json'}) .trigger('reloadGrid');
        }

    function create_DM_template_grid(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
        colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
        colModel:[
            {name:'TenTemplate',index:'TenTemplate'},
            {name:'NoiDung',index:'NoiDung'},
            {name:'KetLuan',index:'KetLuan'},
            {name:'LoiKhuyen',index:'LoiKhuyen'},

        ],
        hidegrid: false,
        gridview: true,
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: -1,
        rowList:[],
        pager: '#prowed_DM_template',
        sortname: 'ID_Thuoc',
        height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
        width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        cmTemplate: {sortable:false},

    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
        sortorder: "desc",
        serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
        },
        onSelectRow: function(id){


            if(jQuery('#DM_template').data('clicked')) {

              var mota2=$("#mota").val();
                        var ketluan2=$("#ketluan").val();
                        var loikhuyen2=$("#loikhuyen").val();
                                    var rowData = $('#DM_template').getRowData(id);
                          if(mota2!=""){
                            $( "#dialog-form" ).dialog( "open" );
                          }
                                      else{
                                         $("#mota").val(rowData["NoiDung"]);
                                         $("#ketluan").val(rowData["KetLuan"]);
                                         $("#loikhuyen").val(rowData["LoiKhuyen"]);
                                      }
                          if($("#yes").click(function(){
                                $("#mota").val(rowData["NoiDung"]);
                                $("#ketluan").val(rowData["KetLuan"]);
                                $("#loikhuyen").val(rowData["LoiKhuyen"]);
                                $( "#dialog-form" ).dialog( "close" );

                            })
                            );
                                       if($("#no").click(function(){
                                          mota4=$.trim(rowData["NoiDung"]);
                                          ketluan3=$.trim(rowData["KetLuan"]);
                                          loikhuyen3=$.trim(rowData["LoiKhuyen"]);
                                          mota2=mota2+"\n"+mota4;
                                          if(ketluan2=="")
                                          {
                                            ketluan2=ketluan3;
                                          }
                                         else
                                         {
                                            ketluan2=ketluan2+"\n"+ketluan3;
                                         }
                                          if(loikhuyen2=="")
                                          {
                                            loikhuyen2=loikhuyen3;
                                          }
                                         else
                                         {
                                             loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
                                         }


                                           $("#mota").val(mota2);
                                           $("#ketluan").val(ketluan2);
                                           $("#loikhuyen").val(loikhuyen2);
                                           $( "#dialog-form" ).dialog( "close" );
                                       }));
            } else {
                //run function2
            }

        },
        ondblClickRow: function (id, rowIndex, columnIndex){



             $("#DM_template_container").fadeOut(200);
        },
        loadComplete: function(data) {
            window.nhanvien_complete=1;
        },
        //caption: "Danh mục thuốc"
    });

     $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
     $(elem).jqGrid('bindKeys', {"onEnter":function( id ) {

        } } );

}


    function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
              window.nhanvien1_complete=1;




            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function gio(inputA){
            var d = new Date();
            var curr_hour = d.getHours();
            var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
            var curr_time = curr_hour + ":" + curr_minute+ " ";
            var dd = d.getDate();
            var mm = d.getMonth()+1;//January is 0!`
            var yyyy = d.getFullYear();
            if(inputA!="current"){
            if(String(inputA).match(' ')!=null){
            var bientam=inputA.split(" ");
            if(bientam[0].length>bientam[1].length){
            var ngaytam=bientam[0].split($.cookie("phancachngay"));
            var giotam=bientam[1].split(":");
            ngaytam[2]=$.cookie('namjs')+ngaytam[2];
            }else if(bientam[1].length>bientam[0].length){
            var ngaytam=bientam[1].split($.cookie("phancachngay"));
            var giotam=bientam[0].split(":");
            ngaytam[2]=$.cookie('namjs')+ngaytam[2];
            }
            }else if(String(inputA).match(':')!=null){
            var ngaytam=[];
            ngaytam[0]=dd,ngaytam[1]=mm,ngaytam[2]=yyyy;
            var giotam=inputA.split(":");
            }else{
            var ngaytam=inputA.split($.cookie("phancachngay"));
            ngaytam[2]=$.cookie('namjs')+ngaytam[2];
            var giotam=[];
            giotam[0]=0;giotam[1]=0;
            }
            var thoigian=Date.today().set({
            millisecond: 0,
            second: 0,
            minute: parseInt(giotam[1]),
            hour: parseInt(giotam[0]),
            day: parseInt(ngaytam[0]),
            month: parseInt(ngaytam[1])-1,
            year: parseInt(ngaytam[2])
            });
            }else{
            var thoigian=Date.today().set({
            millisecond: 0,
            second: 0,
            minute: parseInt(curr_minute),
            hour: parseInt(curr_hour),
            day: parseInt(dd),
            month: parseInt(mm)-1,
            year: parseInt(yyyy)
            });
            thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
            }
            return thoigian;
}
     function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},

            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);

        window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }

   /* $('#luu').click(function ()
    {

        phancach = "";
        i = 0;
        dataToSend = '{';
        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

            if ($(this).attr("lang") == "luu") {
              //  dataToSend += phancach + '"' + this.name + '":"' + encodeURIComponent(this.value) + '"';



                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;


            }
            phancach = ",";

        });
        dataToSend += phancach + '"id_kham":"' + _id_kham + '"';
       // dataToSend += phancach + '"songaythai":"' + _soNgayThai+ '"';
        //dataToSend += phancach + '"songaythai":"' + _soNgayThai+ '"';ID_TrangThai
        dataToSend += '}';
        //alert(dataToSend);
        dataToSend = jQuery.parseJSON(dataToSend);
        alertObject(dataToSend);

        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=3',dataToSend)
                     .done(function( gridData ) {
                                     //alert(gridData);
//                       tam=gridData.split(";");
//                       if($.trim(tam[1])=="0"){
//                           tooltip_message("cập nhật thành công");
//
//
//
//                       }
//                                                 else{
//                           tooltip_message("cập nhật thất bại");
//                       }

                    })
                                         .fail(function() {
                                        alert( "error" );
                                        })





    });
*/
$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: false,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(40)).toFixed(0) );


            },
            buttons: {
            }
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: false,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(20)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(40)).toFixed(0) );


            },
            buttons: {
            }
            });
$( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(100)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(55)).toFixed(0),
            modal: false,
             open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(55)).toFixed(0) );


            },
            buttons: {
            }
            });

function load_complete(){
    if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
        setTimeout(load_complete,50);
        return;
    }
    if(id_kham2!='0'){
        navigator_load("end","");
    }else{
        navigator_load("end","first");
    }
    //navigator_load("end","first");
   // create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
}
 $("#chen").click(function(e){
             var sotuanthai=$("#tuanthai").val();
            var songaythai=$("#ngaythai").val();
             var trongluong=$("#trongluongthai").val();
            if(sotuanthai<"1")
            {
                sotuanthai="0";

            }else{
                sotuanthai=sotuanthai;
                }

            if(songaythai<"1")
            {
                songaythai="0";

            }else{
                songaythai=songaythai;
                }
           //$ngaythai=($khamthai[0]["SoTuanThai"]*7)+$khamthai[0]["SoNgayThai"]+1;
            var ngaythai=(parseFloat(sotuanthai)*7)+parseFloat(songaythai)+1;



             if(sotuanthai< 11) {
                 ngayhenkham=12 * 7-parseFloat(ngaythai);
                 sotuan=12;
                 //alert(ngayhenkham);
             }
            else
             if(sotuanthai< 17)  {
                // echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(18 * 7-$ngaythai)." days"))." - khi thai 18 tuần (siêu âm)<br>";
                 ngayhenkham=18 * 7-parseFloat(ngaythai);
                 sotuan=18;
             }
             else if(sotuanthai< 21)  {
                //echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(22 * 7-$ngaythai)." days"))." - khi thai 22 tuần (siêu âm)<br>";
                ngayhenkham=22 * 7-parseFloat(ngaythai);
                sotuan=22;
             }
             else if(sotuanthai< 25)  {
               //echo  "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(26 * 7-$ngaythai)." days"))." - khi thai 26 tuần (siêu âm)<br>";
                ngayhenkham=28 * 7-parseFloat(ngaythai);
                sotuan=28;
             }

            else  if(sotuanthai< 31)  {
                 //echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(32 * 7-$ngaythai)." days"))." - khi thai 32 tuần (siêu âm)<br>";
                 ngayhenkham=32 * 7-parseFloat(ngaythai);
                 sotuan=32;
             }

             else if(sotuanthai< 35)  {
                //echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(36 * 7-$ngaythai)." days"))." - khi thai 36 tuần<br>";
                 ngayhenkham=36 * 7-parseFloat(ngaythai);
                 sotuan=36;
             }

            else  if(sotuanthai< 39)  {
                 //echo "Ngày Khám: ".date($_SESSION["config_system"]["ngaythang"], strtotime(" +".(40 * 7-$ngaythai)." days"))." - khi thai 40 tuần (siêu âm)<br>";
                  ngayhenkham=40 * 7-parseFloat(ngaythai);
                  sotuan=40;
             }else{				 
				ngayhenkham=0;
				sotuan=40;				
			 }

            ngayhenkham2= convert_to_datejs($("#ngaychidinh").val()).addDays(ngayhenkham+1);
            ngayhenkham2=$.datepicker.formatDate('dd/mm/yy', new Date(ngayhenkham2));
            ngaysinh= 40 * 7-parseFloat(ngaythai);
             ngaysinh2= convert_to_datejs($("#ngaychidinh").val()).addDays(ngaysinh+1);
            ngaysinh2=$.datepicker.formatDate('dd/mm/yy', new Date(ngaysinh2));


        if($("#loikhuyen").val()==""){
			
			if(sotuanthai< 39)  {             
                $("#loikhuyen").val("Hẹn siêu âm lại ngày "+ngayhenkham2+" khi thai "+sotuan+" tuần hoặc sớm hơn nếu có gì bất thường.");
             }else{				 
				$("#loikhuyen").val("");			
			 }
           
            var mota6=$("#mota").val();

            if(sotuanthai<=13){
                var res4=mota6.replace("Đo đạc","Tuổi thai: "+sotuanthai+" tuần "+songaythai+" ngày - Ngày sinh dự kiến: "+ngaysinh2 );
            }
            else {
                var res4=mota6.replace("Đo đạc","Tuổi thai: "+sotuanthai+" tuần "+songaythai+" ngày - Ngày sinh dự kiến: "+ngaysinh2 +"\n- Trọng lượng: "+trongluong+" gram");
            }

             $("#mota").val(res4);
             // alert(ngaythai);
        }
        else{
            var ketluan6=$("#ketluan").val();
            var res = ketluan6.replace("XXX tuần XXX ngày",sotuanthai+" tuần " +songaythai+" ngày");
           // var res2 = ketluan6.replace("",songaythai+" ngày");
            $("#ketluan").val(res);
            var loikhuyen6=$("#loikhuyen").val();
            var mota6=$("#mota").val();
            if(sotuanthai<=13 ){
                var res4=mota6.replace("Đo đạc","Tuổi thai: "+sotuanthai+" tuần "+songaythai+" ngày - Ngày sinh dự kiến: "+ngaysinh2 );
            }
            else{
                var res4=mota6.replace("Đo đạc","Tuổi thai: "+sotuanthai+" tuần "+songaythai+" ngày - Ngày sinh dự kiến: "+ngaysinh2 +"\n- Trọng lượng: "+trongluong+" gram");
            }
            var res2 = loikhuyen6.replace("ngày XXX","XXX");
           
			if(sotuanthai< 39)  {             
                 var res3= res2.replace("XXX","ngày "+ngayhenkham2+" khi thai "+sotuan+" tuần");
             }else{				 
				var res3="";			
			 }
           
             $("#loikhuyen").val(res3);
             $("#mota").val(res4);
        }
    });
 $('#soluongthai').keyup(function () {
        if( $('#soluongthai').val()=="0"){
             tooltip_message("Yêu cầu nhập số lượng thai");
        }
        else
        if( $('#soluongthai').val()=="1"){
            if($('#tuanthai').val()>=1 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("135000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("195000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("250000");
            }
        }
        else if( $('#soluongthai').val()=="2"){
            if($('#tuanthai').val()>=0 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("200000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("290000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("375000");
            }
        }
         else {
            if($('#tuanthai').val()>=0 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("265000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("385000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("500000");
            }
        }
     });
$('#tuanthai').keyup(function () {
        if( $('#soluongthai').val()=="0"){
             tooltip_message("Yêu cầu nhập số lượng thai");
        }
        else
        if( $('#soluongthai').val()=="1"){
            if($('#tuanthai').val()>=1 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("180000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("220000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("250000");
            }
        }
        else if( $('#soluongthai').val()=="2"){
            if($('#tuanthai').val()>=0 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("200000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("290000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("375000");
            }
        }
         else {
            if($('#tuanthai').val()>=0 && $('#tuanthai').val()<=10){
                $('#phithuchien').val("265000");
            }
            else if($('#tuanthai').val()>=11 && $('#tuanthai').val()<=17){
                $('#phithuchien').val("385000");
            }
            else if($('#tuanthai').val()>=18 && $('#tuanthai').val()<=40){
                $('#phithuchien').val("500000");
            }
        }


     });
$( "#tuanthai" ).keyup(function(e){
        //alert(e.keyCode);
            if (e.keyCode === 13|| e.keyCode == 9) {
                $( "#ngaythai" ).focus();
                $( "#ngaythai" ).select();
                return false;
            }
    });
    $( "#ngaythai" ).keyup(function(e){
        //alert(e.keyCode);
            if (e.keyCode === 13|| e.keyCode == 9) {
                $( "#trongluongthai" ).focus();
                $( "#trongluongthai" ).select();
                return false;
            }
    });
    $( "#trongluongthai" ).keyup(function(e){
        //alert(e.keyCodetrongluongthai
         if (e.keyCode === 13|| e.keyCode == 9) {
                $( "#soluongthai" ).focus();
                $( "#soluongthai" ).select();
                return false;
            }
    });
    $( "#soluongthai" ).keyup(function(e){
        //alert(e.keyCode);
            if (e.keyCode === 13|| e.keyCode == 9) {
                $( "#para1" ).focus();
                $( "#para1" ).select();
                return false;
            }
    });
$( "#para1" ).keyup(function(e) {
        //alert(e.keyCode);
        if (e.keyCode === 17) {
            return false
        }else{
            if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13|| e.keyCode == 9){
            var para1=$( "#para1" ).val();
            if (para1==null || para1=="") {
                $( "#para1" ).focus();
            } else {
            $( "#para2" ).focus();
            }
            }

        }

    });
    $( "#para2" ).keyup(function(e) {
        if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13|| e.keyCode == 9){
            var para2=$( "#para2" ).val();
            if (para2==null || para2=="") {
                $( "#para2" ).focus();
            } else {
            $( "#para3" ).focus();
            }
        }
    });
    $( "#para3" ).keyup(function(e) {
        if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13|| e.keyCode == 9){
            var para3=$( "#para3" ).val();
            if (para3==null || para3=="") {
                $( "#para3" ).focus();
            } else {
            $( "#para4" ).focus();
            }
        }
    });
    $( "#para4" ).keyup(function(e){
        if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105 ) || e.keyCode == 13|| e.keyCode == 9){
            var para4=$( "#para4" ).val();
            $( "#text_para4" ).val($( "#para4" ).val());
            if (para4==null || para4=="") {
                $( "#para4" ).focus();
            }
            else {
            $( "#luu" ).focus();
            }
        }
    });

function goto_kham(id_kham){

for(var i=0; i<data_luotkham['rows'].length;i++){

    if(id_kham==data_luotkham['rows'][i]['id']){
        id_luotkham_hentai=data_luotkham['rows'][i]['cell'][5]
    }
}

_id_luotkham
y=0;
for(var i=_id_luotkham.length-1;i>=0;i--){
    if(_id_luotkham[i]==id_luotkham_hentai){
        break;
    }
    y--;
}

 navigator_load(y,"");
 $('#'+id_kham).click();
}
$("#themvideo").click(function(){
    // $("#upload_input").click();
  			 var d = new Date();
            var curr_hour = d.getHours();
            var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
            var curr_time = curr_hour + ":" + curr_minute+ " ";
            var dd = d.getDate();
            var mm = d.getMonth()+1;//January is 0!`
            var yyyy = d.getFullYear();
            window.search_string=id_kham+"_"+id_loaikham+"_"+window.tenbenhnhan+"_"+dd+"_"+mm+"_"+yyyy;
          // alert(window.search_string);
		// $("#upload_input").click();
		_default_name=search_string;
        _tenthumuc="USTH4D//"+ma_benhnhan;
        //_filetype='application/msword;application/vnd.openxmlformats-officedocument.wordprocessingml.document';
        _filetype="video/mpeg;video/mpg;video/mp4;video/avi";

         parent.postMessage('upload_module;pages.php?module=images_control&view=image_upload&id_form=61&multi=true&action_upload=upload_module&tenthumuc='+_tenthumuc+'&default_name='+_default_name+'&profile=tcd&filetype='+_filetype+";"+_default_name , '*')


})
function imagesSelected(myFiles,callback) {

          var i,f;
         // alert(myFiles.length)

          for ( i = 0, f; f = myFiles[i]; i++) {
            var imageReader = new FileReader();
            imageReader.onload = (function(aFile) {
              return function(e) {
               //var span = document.createElement('span');
               image_data=e.target.result;
              // $("#image_submit").append("<input type='hidden'  id='anh'  name='image_data[]'>");
               $('#anh').attr("value","");
               $('#anh').attr("value",image_data);
               $("#default_name").val("123.flv");
               $("#tenthumuc").val("USTH4D//"+ma_benhnhan);
               $("#themvideo").attr("src",image_data);
             // alert($("#tenthumuc").val());
             //alert(aFile.type)
               check_file_type('video/flv',aFile.type);

              };
            })(f);
            imageReader.readAsDataURL(f);
            //console.log((i)+"=="+myFiles.length)
            /*if((i+1)==myFiles.length){

            }*/
          }
         callback();
}
function submit_file(){


     var _tam=_folder_name_.split("//");
 $.getJSON( 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_,
  function( data ){
    if (data["error"]=="errConf,errNoVolumes"){
      $.get( 'file_manager/php/connector.php?profile=tcd&answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'&target=f1_XA&_=1387301727041',
      function( data ){
                t=setTimeout(function(){
                if(window.file_type==false){
                    var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page
                    _status=$.ajax({
                        url: 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=upload&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_,  //Server script to process data
                        type: 'POST',
                         //This is just looks like bloat

                        // Form data
                        // enctype: 'multipart/form-data',  <-- don't do this
                        data: formData,
                        //Options to tell jQuery not to process data or worry about content-type.
                        //cache: false, post requests aren't cached
                        contentType: false,
                        processData: false,
                        async: false, success: function(data, result) {
                         }}).responseText;
                }
       },2000);

      });
    }else{
      t=setTimeout(function(){
                if(window.file_type==false){
                    var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page
                    _status=$.ajax({
                        url: 'file_manager/php/connector.php?profile=tcd&answer=42&cmd=upload&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name_,  //Server script to process data
                        type: 'POST',
                         //This is just looks like bloat

                        // Form data
                        // enctype: 'multipart/form-data',  <-- don't do this
                        data: formData,
                        //Options to tell jQuery not to process data or worry about content-type.
                        //cache: false, post requests aren't cached
                        contentType: false,
                        processData: false,
                        async: false, success: function(data, result) {
                         }}).responseText;
                }
       },2000);
    }

 });

}
$("#viewvideo").click(function(){
	elem=42432543543;

	  dialog_main("" , 80, 80, elem, "file_manager/elfinder_ehealth.php?profile=tcd&tenthumuc=USTH4D//"+ma_benhnhan)
		$(".frame_42432543543").css("width","1000px");
})
$("body").bind('keydown', function( e ) {
   if (jwerty.is("ctrl+s",e)) {
        $('#luu').click();
   }
  })
$( "body" ).bind( "click", function(e) {
check_files_exist();
})
function getTextNodesIn(node) {
    var textNodes = [];
    if (node.nodeType == 3) {
        textNodes.push(node);
    } else {
        var children = node.childNodes;
        for (var i = 0, len = children.length; i < len; ++i) {
            textNodes.push.apply(textNodes, getTextNodesIn(children[i]));
        }
    }
    return textNodes;
}

function setSelectionRange(el, start, end) {
    if (document.createRange && window.getSelection) {
        var range = document.createRange();
        range.selectNodeContents(el);
        var textNodes = getTextNodesIn(el);
        var foundStart = false;
        var charCount = 0, endCharCount;

        for (var i = 0, textNode; textNode = textNodes[i++]; ) {
            endCharCount = charCount + textNode.length;
            if (!foundStart && start >= charCount && (start < endCharCount || (start == endCharCount && i < textNodes.length))) {
                range.setStart(textNode, start - charCount);
                foundStart = true;
            }
            if (foundStart && end <= endCharCount) {
                range.setEnd(textNode, end - charCount);
                break;
            }
            charCount = endCharCount;
        }

        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    } else if (document.selection && document.body.createTextRange) {
        var textRange = document.body.createTextRange();
        textRange.moveToElementText(el);
        textRange.collapse(true);
        textRange.moveEnd("character", end);
        textRange.moveStart("character", start);
        textRange.select();
    }
}


function selectAndHighlightRange(id, start, end) {
    setSelectionRange(document.getElementById("mota"), start, end);

}
function bokhoangtrang(){
    var text=$("#mota").val();
//alert(text);
            $("#mota").dblclick(function(e) {
            // alert(window.getSelection().toString())
                //var n = text.search(window.getSelection().toString());

                 var ta = $('#mota').get( 0 );
                  //return ta.value.substring(ta.selectionStart, ta.selectionEnd);
                  //alert(ta.selectionStart);
                 // alert(ta.selectionEnd -1);
                  //return ta.value.substring(ta.selectionStart, ta.selectionEnd);
                 selectAndHighlightRange('mota', ta.selectionStart, ta.selectionEnd -1)
                //alert(window.getSelection().toString().length)
            })
}
function check_folder_exist(){


    $.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc=USTH4D//'+ma_benhnhan+"&profile=tcd",
        function( data ){
                if (data["error"]=="errConf,errNoVolumes"){
                     $.get( 'file_manager/php/connector.php?answer=42&tenthumuc=USTH4D&cmd=mkdir&name='+ma_benhnhan+'&target=f1_XA&_=1387301727041'+"&profile=tcd",
                        function( data ){
                            check_files_exist();
                     });
                }
    });
}
function check_files_exist(){
    $.getJSON('file_manager/php/connector.php?profile=tcd&answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc=USTH4D//'+ma_benhnhan,
        function( data ) {
       $("#sovideo").val(data["files"].length-1);
        //alert(data["files"].length-1);
    });
}
function kt_trangthai(id_thai){
	//alert(_id_trangthai);
	if(_id_trangthai=="Xong"){
		$('.chuandoan_button').button( {disabled:true});
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		$( "#chuandoan" ).attr("disabled",true);
		 $( "#dathuchien" ).attr("disabled",true);
		  $( "#hoantat" ).attr("disabled",true);
	}else if(_id_trangthai=="DaThucHien"){
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		 $( "#dathuchien" ).attr("disabled",true);
	}else{
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);
		$('.chuandoan_button').button( {disabled:false});
	}
}
</script>


