<?php
$data= new SQLServer;
if($_GET['oper']=='add'){		
  $store_name1="{call GD2_miengiam_getby_luotkham (?)}";
  $params1 = array( $_GET["ID_LuotKham"] );
  $get1=$data->query( $store_name1, $params1);
  $excute1 = new SQLServerResult($get1);
  $tam3 = $excute1->get_as_array();	
  $store_name1="{call GD2_thongtin_thanhtoanngoaitru (?)}";
  $params1 = array( $_GET["ID_LuotKham"] );
  $get1=$data->query( $store_name1, $params1);
  $excute1 = new SQLServerResult($get1);
  $thongtinbenhnhan = $excute1->get_as_array();


  $store_name2="{call GD2_TongMienGiam_LoadForm (?)}";
  $params2 = array( $_GET["ID_LuotKham"] );
  $get2=$data->query( $store_name2, $params2);
  $excute2 = new SQLServerResult($get2);
  $miengiam = $excute2->get_as_array();
  if(count($miengiam)>0){
    $sotienmg_nv=$miengiam[0]['SoTienMienGiam'];
  }else{
    $sotienmg_nv=0;
  }
}else{
  $store="{call Gd2_thu_trano_select_byidthutrano (?)}";
  $param = array($_GET["ID_ThuTraNo"]);
  $get=$data->query( $store, $param);
  $excute = new SQLServerResult($get);
  $thongtinbenhnhan = $excute->get_as_array();
  $store="{call GD2_miengiam_by_ID_ThuTraNo (?)}";
  $param = array($_GET["ID_ThuTraNo"]);
  $get=$data->query( $store, $param);
  $excute = new SQLServerResult($get);
  $tam3 = $excute->get_as_array();
  $sotienmg_nv=0;
}

?>
<style>
 #gbox_rowed6, #gbox_rowed7, #gbox_rowed8 {
  border: 1px solid #919191;
  box-shadow: 0 0 10px #A0A0A0;
  margin-left: -15px;
  margin-top: -8px;
}

#panel_main{
  margin-left: -20px; margin-top: -15px;
}
#gbox_rowed4,#gbox_rowed5{
  margin-left: -1px;
}
fieldset {
  margin: 0;
  padding: 0;
}

fieldset {display: inline-block; vertical-align: top;}
fieldset {display: inline !ie7; /* IE6/7 need display inline after the inline-block rule */}

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
#thongtinnoptien #lydogiamgia{
  margin-top:0px;
}

#thongtinnoptien #lydogiamgia_combobox{
  margin-top:3px;
}
#thongtinnoptien #tiengiam,#thongtinnoptien #tiendathu,#thongtinnoptien #chiphigoc,#thongtinnoptien #phantram,#giamdtph,#giamchidinh,#giamthuoc,#giamtienthuoc,#toantam,#toadaxuat
{
  text-align:right;
  font-size:18px!important;
  font-weight:bold!important;


}
#ttmg{
  text-align:right;
  font-size:18px!important;
  font-weight:bold!important;
  width: 120px;
}
#sotienquota,#sotienvoucher,#sotiencoupon{
  text-align:right;
  font-size:15px!important;
  font-weight:bold!important;
  width: 100px;
}

</style>

<body class="">
<div id="dialog_hoadon" style="display:none">
	Bill đã lập hóa đơn Liên hệ với kế toán hoặc CSKH để được hủy bill
</div>
  <div id="dialog_hoanung_print" style="display:none">

    <table>
      <tr>
        <td rowspan="4">
          <input  id="id_hoanung_print" value="1" style="outline: 0;border: none;background-color:#6CF;width: 80px;height: 100px;font-size:36px;text-align:center" maxlength="1">
        </td>
        <td><strong> 1.In 2 liên  </strong>
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

   </table>
 </div>

 <div id="dialog_lydo_sua" style="display:none">
  <textarea style="width:250px" id="lydo_sua"></textarea>
</div>
<div id="dialog_sotien" style="display:none"></div>
<div id="dialog_sothuoc" style="display:none"></div>
<div id="dialog_print" style="display:none">
  <table>
    <tr>
      <td rowspan="5">
        <input id="id_print" value="1" style="outline: 0;border: none;background-color:#6CF;width: 80px;height: 100px;font-size:36px;text-align:center" maxlength="1">
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
   <tr style="display:none">
     <td>
      <strong>  5.In bill tiếng anh</strong>
    </td>
  </tr>



</table>
</div>

<div id="dialog_hoanung" style="display:none">

</div>

<div id="dialog_sotien_thieu" style="display:none">
  <strong>Diễn giải lý do nợ bill</strong><br>
  <textarea style="width:250px" id="lydothieu"></textarea>
  <table>
    <tr>
      <td rowspan="8">
        <input id="id_thieu" style="outline: 0;border: none;width:90px;height:40px;text-align: center; height:160px; font-size:14px; border: 1px solid #327E04;font-size:50px;text-align:center" maxlength="1">
      </td>
      <td ><strong>1.</strong> <strong lydothieu="1">
       Bệnh nhân bỏ về
     </td>
   </tr>
   <tr>
     <td>
       <strong>2.</strong><strong lydothieu="2">Bệnh nhân không đủ tiền  </strong>
     </td>
   </tr>
   <tr>
     <td>
       <strong>3.</strong><strong lydothieu="3">Bệnh nhân quen </strong>
     </td>
   </tr>
   <tr style="display:none">
     <td>
       <strong>4.</strong><strong lydothieu="4" >Bệnh nhân nợ vật lý trị liệu</strong>
     </td>
   </tr>
   <tr style="display:none">
     <td>
      <strong>5.</strong><strong lydothieu="5">Khám sức khỏe</strong>
    </td>
  </tr>
  <tr style="display:none">
   <td>
    <strong>6.</strong><strong lydothieu="6">Nhân viên công ty </strong>
  </td>
</tr>
<tr style="display:none">
 <td>
  <strong>7.</strong> <strong lydothieu="7">Khám tại nhà</strong>
</td>
</tr>
<tr style="display:none">
 <td>
  <strong>8.</strong> <strong lydothieu="8">Lấy thuốc KGBS(ĐT)</strong>
</td>
</tr>


</table>
</div>

<div id="DM_template_container">
  <table id="DM_template"></table>
</div>


<fieldset style="display:inline-block;height:188px;width:550px" id="thongtinnoptien" >
  <legend>Thông tin nộp tiền:</legend>
  <table width="100%">
   <tr >
     <td colspan="2" valign="top">
      <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block" id="thongtinphieu"><?php echo $thongtinbenhnhan[0]['MaPhieu'];?></label>
      <label for="ngay">Ngày</label>  <input type='textbox' id="ngay" style="width:100px">
      <label style="width:50px;display:inline-block">Thu ngân</label>  <label><?php if($_GET['oper']=='add'){echo $_SESSION["user"]["nickname"];}else{echo $thongtinbenhnhan[0]['NickName']; }?></label>
      <label>&nbsp;&nbsp;&nbsp;Đối tượng:</label> <label style="font-weight:bold"><?php echo  $thongtinbenhnhan[0]['LoaiDoiTuongKham']; 
      if($thongtinbenhnhan[0]['LoaiDoiTuongKham']=='BHYT'){
        if($thongtinbenhnhan[0]['TrangThaiKham']==1){
         echo '(Đúng tuyến)'; 
       }
       if($thongtinbenhnhan[0]['TrangThaiKham']==2){
         echo '(CGCV)'; 
       }
       if($thongtinbenhnhan[0]['TrangThaiKham']==3){
         echo '(Trái tuyến)'; 
       }
       if($thongtinbenhnhan[0]['TrangThaiKham']==4){
         echo '(Cấp cứu)'.$thongtinbenhnhan[0]['Ma_KCB_BanDau']; 
       }					 
     }
     if($thongtinbenhnhan[0]['ID_TheBHCC']=='' or $thongtinbenhnhan[0]['ID_TheBHCC']==0){}
      else{echo '/BHCC';}

    ?></label>
  </td>
</tr>
<tr >
  <td width="400px" valign="top">

   <label style="width:90px;display:inline-block">Người nộp</label>  <input type='textbox' style="width:300px" id="nguoigd" value='<?php echo $thongtinbenhnhan[0]['tenbn'];?>'><br>
   <label style="width:90px;display:inline-block">Địa chỉ</label>  <input type='textbox' style="width:300px" id="diachi" value='<?php	echo $thongtinbenhnhan[0]['DiaChi'];?>'><br>
   <label style="width:90px;display:inline-block">Diễn giải</label>  <input type='textbox' style="width:300px" id="diengiai"  value='<?php  echo $thongtinbenhnhan[0]['GhiChu'];?>'><br>
   <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block">Lý do giảm giá</label>  
   <input id="lydogiamgia" type='textbox' style="width:270px" >
   <input id="lydogiamgia1" type='textbox' style="display:none" > <input style="margin-left:25px;display:none" type="checkbox" name="checkbox" id="nhanvien_giamthuoc" > <!--Có tiền thuốc  -->  <br>
   <label style="font-weight:bold;font-size:12px;width:90px;display:inline-block;">Tiền đã thu</label>  <input type='textbox' style="width:100px" value='<?php echo number_format($thongtinbenhnhan[0]['SoTien'], 0, '', '.'); ?>' id="tiendathu" disabled>
   <label style="font-weight:bold;font-size:12px;width:100px;display:none;">% giảm</label>  <input type='textbox' id="phantram" style="width:30px;display:none" value='0'>
   <label style="font-weight:bold;font-size:12px">Tiền giảm</label>  <input type='textbox' id="tiengiam" style="width:125px" value='<?php

   if($_GET['oper']=='add'){
     if($sotienmg_nv>0){
       echo  $sotienmg_nv;
    }else{
      echo 0;
    }
  }else{
    if($tam3[0]['SoTienGiam_nhanvien']>0){
     echo  number_format($tam3[0]['SoTienGiam_nhanvien'], 0, '', '.');
   }else{
    echo 0;
  }
}


?>'>

<label style="font-weight:bold;font-size:12px;display:none"><!--Giảm tiền thuốc--></label>  <input type='textbox' id="giamtienthuoc" style="width:80px;display:none" value='' disabled>
</td>
<td  valign="top">
  <div style="width: 100%; overflow-y: auto; overflow-x: hidden; height: 108px; margin-bottom: 5px;">
   <?php
   if(trim($thongtinbenhnhan[0]['luotkhamchuathanhtoan'],' ')!=''){
     echo 'Chưa thanh toán: <br>'. htmlspecialchars_decode($thongtinbenhnhan[0]['luotkhamchuathanhtoan']);
   }
   ?>
 </div>
 <div style="width: 100%;text-align: center;">
   <a href="javascript:void(0)" id="miengiamchitiet" style="text-decoration: none; display:none;">Miễn giảm<br>(rê chuột để xem chi tiết)</a>
 </div>
</td>
</tr>
</table>
</fieldset>

<fieldset style="display:inline-block;margin-top:7px;height:180px;width:250px" id="chonkieuin">
  <div style="font-size:13px;display:inline-block;width:250px"><label style="font-size:13px;display:inline-block;width:80px;font-weight:bold">Bác sĩ:</label><label id="bsydtri" style="font-size:13px;width:250px"></label></div>
  <div style="font-size:12px;display:inline-block;width:250px"><label style="font-size:13px;display:inline-block;width:80px;font-weight:bold">Chẩn đoán:</label><label id="chandoan" style="font-size:12px;width:250px"></label></div>
  <div style="font-size:13px;display:inline-block;width:250px"><label style="font-size:13px;display:inline-block;width:80px;font-weight:bold">ICD:</label><label id="icd" style="font-size:14px;width:250px"></label></div>

</fieldset>



<fieldset style="display:inline-block;margin-top:7px;height:180px;width:400px" id="mid">
  <div class="form_row">
   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tổng cộng</label>
   <input lang='luu' name="tongcong" style="width:100px;height:15px" type="text" value="0" id="tongcong" disabled >
   <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ đầu kỳ</label>
   <input lang='luu' name="nodauky" style="width:100px;height:15px" type="text" value="<?php

   if($_GET['oper']=='add'){						
     echo  number_format(($thongtinbenhnhan[0]['nocuoi']+$thongtinbenhnhan[0]['tamung']), 0, '', '.');
   }else{
     echo  number_format($thongtinbenhnhan[0]['nocu']+$thongtinbenhnhan[0]['tamung'], 0, '', '.');
   }


   ?>" id="nodauky" disabled >
   <label style="font-weight:bold;font-size:12px;width:70px;display:none"><!--Tổng BHYT--></label>
   <input lang='luu' name="tongcong" style="width:100px;height:15px;display:none" type="text" value="0" id="tongbhyt" disabled >
   <br style="display:none">

   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block;display:none">BHYT</label>
   <input lang='luu' name="bhyt" style="width:100px;height:15px;display:none" type="text" value="0" id="tongbhyt" disabled>

   

   <br style="display:none">
   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block;display:none">BHCC</label>
   <input lang='luu' name="bhcc" style="width:100px;height:15px;display:none" type="text" value="0" id="bhcc" disabled>

   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tạm ứng</label>
   <input lang='luu' name="tamung" style="width:100px;height:15px" type="text" value="<?php echo  number_format($thongtinbenhnhan[0]['tamung'], 0, '', '.');?>" id="tamung" disabled>

   <br style="display:none">

   <label style="font-weight:bold;font-size:10px;width:100px;display:none">K/H Thuốc VTYT</label>
   <input lang='luu' name="KhauHaoThuocVTYT" style="width:100px;height:15px;display:none" type="text" value="0" id="KhauHaoThuocVTYT" disabled>

   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block;display:none">K/H Dịch Vụ</label>
   <input lang='luu' name="KhauHaoDichVu" style="width:100px;height:15px;display:none" type="text" id="KhauHaoDichVu" disabled>
   
	<label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">BHYT</label>
   <input lang='luu' name="bhyt" style="width:100px;height:15px; " type="text" value="0" id="bhyt" disabled>   
   <br>
   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Giảm giá</label>
   <input lang='luu' name="giamgia" style="width:100px;height:15px;background-color:#9F9" type="text" value="0" id="giamgia" disabled>

   <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Nợ cuối kỳ</label>
   <input lang='luu' name="nocuoiky" style="width:100px;height:15px" type="text" value="<?php echo  number_format($thongtinbenhnhan[0]['nocuoiky']+$thongtinbenhnhan[0]['hoanung'], 0, '', '.');?>" id="nocuoiky" disabled>
   <label style="font-weight:bold;font-size:12px;width:70px;display:none">Cùng chi trả</label>
   <input lang='luu' name="giamgia" style="width:100px;height:15px;background-color:#9F9;display:none" type="text" value="0" id="cungchitra" disabled>
   <br>

   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Tiền thuốc</label>
   <input lang='luu' name="tienthuoc" style="width:100px;height:15px;background-color:#9CC " type="text" value="0" id="tienthuoc" disabled>
   <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Hoàn ứng</label>
   <input lang='luu' name="tienthua" style="width:100px;height:15px" type="text" value="<?php echo  number_format($thongtinbenhnhan[0]['hoanung'], 0, '', '.');?>" id="tienthua" disabled>

   <br>

   <label style="font-weight:bold;font-size:12px;width:70px;display:inline-block">Phải trả</label>
   <input lang='luu' name="phaitra" style="width:100px;height:15px;background-color:#6CF " type="text" value="0" id="phaitra" disabled>
   <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Bệnh nhân trả</label>
   <input lang='luu' name="benhnhantra" style="width: 100px; height: 15px; background-color: #FFC" type="text" value="<?php echo number_format($thongtinbenhnhan[0]['SoTien'], 0, '', '.'); ?>" id="benhnhantra"  >

   <br>

 </div>
</fieldset>

<fieldset style="display:none;height:188px" id="chonkieuin">
  <legend>Chọn kiểu in:</legend>
  <input type="radio" name="sex" value="1" checked>In phiếu thanh toán<br>
  <input type="radio" name="sex" value="2">In chi tiết xét nghiệm<br>
  <input type="radio" name="sex" value="3">In các cận lâm sàng<br>
  <input type="radio" name="sex" value="4">In toàn bộ các DV sử dụng<br>
  <input type="radio" name="sex" value="5" style="display:none">In bill tiếng Anh<br>

</fieldset>

<div >	 <button id="btn_refesh3" >Thêm template</button>
  <button href="#" id="btn_trahet" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Trả hết</button>
  <button href="#" id="hentra" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;display:none">Hẹn trả KQ</button>
  <button href="#" id="btn_luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Thanh toán</button>
  <button href="#" id="btn_sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy thanh toán</button>
  <button href="#" id="btn_lien1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 1</button>
  <button href="#" id="btn_lien2" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">In liên 2</button>
  <button href="#" id="btn_inquota" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; display: none;">Quota</button>
  <button href="#" id="btn_hdKhamCb" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;display:none">Hóa đơn khám chữa bệnh</button>

  <button href="#" id="btn_gtgt" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;display:none">Hóa đơn Thuốc và VTTH</button>
  <button href="#" id="btn_bhyt" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;">Bảng kê</button>
  <button href="#" id="btn_bangke" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;display:none ">Bảng kê Chi phí</button>
  <button href="#" id="btn_khonghotro" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px;display:none">Không hỗ trợ BHYT</button>


  <?php  if($_SESSION["user"]["id_user"]==788 || $_SESSION["user"]["id_user"]==88 || $_SESSION["user"]["id_user"]==178 || $_SESSION["user"]["id_user"]==834 ){
   // echo '<button href="#" id="btn_sualoi" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">BK</button>';
  }?>
</div>

<div >
  <div id="tabs">
    <ul>
      <li id="tab1"><a href="#tabs-1">Chi tiết dịch vụ</a></li>
      <li id="tab2"><a href="#tabs-2">Danh sách tạm ứng trong lượt</a></li>
      <li id="tab3"><a href="#tabs-3">Chi tiết công nợ bệnh nhân</a></li>
      <li id="tab4"><a href="#tabs-4">Danh sách các phiếu đã lập</a></li>
    </ul>
    <div id="tabs-1">
      <div id="panel_main">
        <div class="left_col ui-widget-content ui-layout-center">
          <table id="rowed3" style="width:100%" ></table>
          <div style="margin-top:3px; display:none;" >
            <span style="float:right;margin-right:50px!important;">
              <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm điều trị phối hợp</label>
              <input lang='luu' name="benhnhantra" style="width:90px;margin-left:60px" type="text" id="giamdtph" value="<?=$tam3[0]['SoTienGiam_dtphoihop']?>" disabled >
            </span>
            <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm Chỉ Định</label>
            <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_chidinh']?>" id="giamchidinh" disabled >
          </span>
        </div>
      </div >


      <div class="right_col ui-widget-content ui-layout-east" id="subToathuoc" >
       <div class="right_col tren ui-widget-content ui-layout-center">
        <table id="rowed4" style="width:100%" ></table>
        <span>
          <button href="#" id="khonglaythuoc" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Không lấy thuốc</button>

          <button id="btn_refesh4" >Thêm template</button>

          <span id="toantam_label" style="margin-top:3px"><label><strong>Tổng Tiền thuốc </strong></label> <input type="text" id="toantam" style="width:100px"></span>
          <span id="toadaxuat_label" ><label><strong>Tiền thuốc toa tạm</strong></label> <input  type="text" id="toadaxuat" style="width:100px"></span>
        </span>
      </div>

      <div class="right_col duoi ui-widget-content ui-layout-south">
        <table id="rowed5" style="width:100%" ></table>
        <span style="float:right;margin-right:10px!important;margin-top:3px; display:none;">
          <label style="font-weight:bold;font-size:12px;width:100px;display:inline-block">Giảm giá thuốc</label>
          <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="<?=$tam3[0]['SoTienGiam_thuoc']?>"  id="giamthuoc" disabled >
        </span>
      </div>


    </div >

  </div>

</div>

<div id="tabs-2">
 <table id="rowed6" style="width:100%" ></table>

</div>

<div id="tabs-3">
 <table id="rowed7" style="width:100%" ></table>

</div>

<div id="tabs-4" >
 <table>
   <tr>
     <td><table id="rowed8" style="width:100%" ></table></td>
     <td> <table id="rowed9" style="width:100%" ></table></td>
   </tr>
 </table>
</div>


</div>

</div>


<div id="dialog-miengiamchitiet" title="Chi tiết miễn giảm">
  <div id="tabs_miengiamchitiet">
    <ul>
      <li><a href="#tabs-1">Coupon</a></li>
      <li><a href="#tabs-2">Quota</a></li>
      <li><a href="#tabs-3">Voucher</a></li>
    </ul>
    <div id="tabs-1">
      <div id="ds_coupon">

      </div>
      <label style="display:inline-block; width:45px;">Số tiền:</label> <input type="text" name="sotiencoupon" id="sotiencoupon" value="" disabled><br>
      <textarea name="ghichu_coupon" id="ghichu_coupon" cols="82" rows="4" placeholder="Ghi chú"></textarea>
    </div>
    <div id="tabs-2">
      <label style="display:inline-block; width:70px;">Chọn quota:</label> <input type="text" name="quota" id="quota" value=""><br>
      <label style="display:inline-block; width:70px;">Số tiền:</label> <input type="text" name="sotienquota" id="sotienquota" value=""><br>
      <textarea name="ghichu_quota" id="ghichu_quota" cols="82" rows="4" placeholder="Ghi chú"></textarea>
    </div>
    <div id="tabs-3">
      <div id="ds_voucher" style="overflow-y: scroll; overflow-x: hidden; max-height: 150px;">

      </div>
      <label style="display:inline-block; width:45px;">Số tiền:</label> <input type="text" name="sotienvoucher" id="sotienvoucher" value="" disabled><br>
      <textarea name="ghichu_voucher" id="ghichu_voucher" cols="82" rows="4" placeholder="Ghi chú"></textarea>
    </div>
  </div>
  <label style="display:inline-block; width:120px;">Tổng tiền miễn giảm:</label> <input type="text" name="ttmg" id="ttmg" value="0" disabled>
</div>

</body>
</html>
<script type="text/javascript">

  var report_code=["InPhieuChi","PhieuThanhToan"];
  var report_name=["Phiếu Chi","Phiu Thanh Toán"];
  window.tienthuoc_toatam=0;
  window.dem=0;
  window.dskho=1;
  window.lydogiamgia=0;
//dskho;
window.kotinhlai=0;
window.url_rowed3='';
window.url_rowed4='';
window.url_rowed5='';
window.lydothieu='';
<?php
if($thongtinbenhnhan[0]['LoaiDoiTuongKham']=='BHYT'){
  echo 'var VP=false;';
}else{
  echo 'var VP=true;';
}							

?>

<?php

echo 'var TrangThaiKham='.$thongtinbenhnhan[0]['TrangThaiKham'].';';

?>

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
	if (DaLapHoaDon==0){
		$( "#dialog_lydo_sua" ).dialog('open');
	}else{
		$( "#dialog_hoadon" ).dialog('open');
	}

})


$('input').click(function(){
  $(this).select();
})
$('#btn_trahet,#btn_sua,#btn_huy,#btn_lien1,#btn_lien2,#btn_trahet,#btn_luu,#btn_gtgt,#hentra,#btn_hdKhamCb,#btn_bhyt,#btn_khonghotro,#btn_inquota').button();
<?php if($_GET['oper']=='add'){
  echo "create_combobox('#lydogiamgia','#lydogiamgia1','.lydo_giamgia','#lydo_giamgia',create_lydogiamgia,'','','','data_lydogiamgia',0);";
}else{
	echo "create_combobox('#lydogiamgia','#lydogiamgia1','.lydo_giamgia','#lydo_giamgia',create_lydogiamgia,'','','','data_lydogiamgia',".$tam3[0]['id_loaigiamgia'].");";
}

?>

window.oper='<?=$_GET['oper']?>';

var DaLapHoaDon=<?php if($_GET['oper']=='add'){echo 0;}else{echo $thongtinbenhnhan[0]['DaLapHoaDon'];}?>;

var tongcong=0;
var giamgia=0;
var phaitra=0;
var tienthuoc=0;
var giamhientai=0;
var hotro=0;
var hotro_kham=0;
var hotro_thuoc=0;
var sum_bhyt_tra=0;
var hoanung=<?=$thongtinbenhnhan[0]['hoanung']?>;
var	sum_bhyt_kham  = 0;
var	sum_bhyt_thuoc = 0;
var	sum_bhcc_tra   = 0;
var isvuotmuc=0;
var HoTroNgoaiTru=<?=$thongtinbenhnhan[0]['HoTroNgoaiTru']?>;
var HoTroNoiTru=<?=$thongtinbenhnhan[0]['HoTroNoiTru']?>;
var idbenhnhan=<?php if($_GET['oper']=='add'){
  echo   $_GET['idbenhnhan'];
}else{echo $thongtinbenhnhan[0]['ID_BenhNhan']; }?>;

var id_luotkham=<?php if($_GET['oper']=='add'){
 echo  $_GET["ID_LuotKham"].'';
}else{echo "'".$thongtinbenhnhan[0]['ID_LuotKham']."'"; }?>;
icd_chandoan();
var giam_dtph=<?=$tam3[0]['SoTienGiam_dtphoihop']?>;
var giam_chidinh=<?=$tam3[0]['SoTienGiam_chidinh']?>;
var giam_thuoc=<?=$tam3[0]['SoTienGiam_thuoc']?>;

var id_giam_dtph='<?=$tam3[0]['ID_dtphoihop']?>';
var id_giam_chidinh='<?=$tam3[0]['ID_chidinh']?>';
var id_giam_thuoc='<?=$tam3[0]['ID_thuoc']?>';
var id_giam_nv='<?=$tam3[0]['ID_nv']?>';
var nhanvien_giamthuoc;


var nodauky=<?php if($_GET['oper']=='add'){
 echo  $thongtinbenhnhan[0]['nocuoi'];

}else{echo $thongtinbenhnhan[0]['nocu']; }?>;

var sum_bhyt_tra=0;
window.load_complete3=0;
window.load_complete5=0;
window.load_complete4=0;
window.GioihanBHYT=223499;//
$(document).ready(function() {
  hentraketqua();
  $("#panel_main").css("height", $(window).height() - 200 + "px");
  $("#panel_main").css("width", $(window).width()  + "px");
  $("#panel_main").fadeIn(1000);
  create_layout();

  $( "#khonglaythuoc" ).button();
  $( "#tabs" ).tabs({

   heightStyle:"fill"

 });
  load_form();
  loadtab();
  $('#lydo_sua').bind('keydown',function(e){
   if (jwerty.is("tab",e)||(jwerty.is("enter",e))) {
    $('#dialog_lydo_sua').closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus();
    return false
  }
})

  $('#id_hoanung_print').keydown(function(e){
   if (jwerty.is("enter",e)) {
    if($('#id_hoanung_print').val()==4){
     $('#dialog_hoanung_print').dialog('close');
   }else if($('#id_hoanung_print').val()==1||$('#id_hoanung_print').val()==2||$('#id_hoanung_print').val()==3){
     $.cookie("in_status", "print_direct");
     dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=hoan_ung&tenreport=hoantien&header=top&lien="+$('#id_hoanung_print').val()+"&type=report&id_form=10&idthutrano="+window.ID_hoanung,'InPhieuChi');
     $('#dialog_hoanung_print').dialog('close');
   }
 }
})



  $('#nhanvien_giamthuoc').click(function(){
   $('#phantram').val(0);
   $('#tiengiam').val(0);
   $('#giamtienthuoc').val(0);
 })
  $('#btn_sualoi').click(function(){
   $.cookie("in_status", "print_preview");
   dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=bhyt_sualoi&header=top&lien=2&type=report&id_form=10&idthutrano="+ID_ThuTraNo,'ChitietBHYT');
   $('#dialog_print').dialog('close');
 })
  $('#btn_bhyt').click(function(){
   $.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=bhyt&header=top&lien=2&type=report&id_form=10&idthutrano="+ID_ThuTraNo,'ChitietBHYT');
		$('#dialog_print').dialog('close');
 })


  $('#btn_lien1').click(function(){
   $.cookie("in_status", "print_preview");
   dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=2&type=report&id_form=10&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
   $('#dialog_print').dialog('close');
 })
  $('#btn_lien2').click(function(){
   $.cookie("in_status", "print_preview");
   dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&lien=3&type=report&id_form=11&kieuin="+$('input[name=sex]:radio:checked').val()+"&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
   $('#dialog_print').dialog('close');
 })
  $('#btn_inquota').click(function(){
    $.cookie("in_status", "print_preview");
    dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=quota&header=top&type=report&id_form=11&id_luotkham="+id_luotkham,'PhieuThanhToan');
    $('#dialog_print').dialog('close');
  })
        //btn_gtgt
        $('#btn_hdKhamCb').click(function(){

         dialog_main("Hóa đơn khám chữa bệnh chi tiết "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD=1");  
       })
        $('#btn_gtgt').click(function(){

         dialog_main("Hóa đơn thuốc chi tiết ngoại trú "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD=5");  
       })

        $('#id_print').keydown(function(e){
          if (jwerty.is("enter",e)) {
           if($('#id_print').val()==4){
            $('#dialog_print').dialog('close');
          }else if($('#id_print').val()==1||$('#id_print').val()==2||$('#id_print').val()==3){
            $.cookie("in_status", "print_direct");
            dialog_report("Xem trước khi in",90,100,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=thungan&header=top&kieuin="+$('input[name=sex]:radio:checked').val()+"&lien="+$('#id_print').val()+"&type=report&id_form=10&idthutrano="+ID_ThuTraNo,'PhieuThanhToan');
            $('#dialog_print').dialog('close');
          }
        }
      })

        $('#btn_bangke').click(function(){			
         $.cookie("in_status", "print_preview");
         dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=bangke_chiphi&header=top&lien=2&type=report&id_form=10&id_luotkham="+id_luotkham,'ChitietBHYT');
         $('#dialog_print').dialog('close');
       })

    // Nam edit
    $( function() {
      $( "#tabs_miengiamchitiet" ).tabs();

      $( "#dialog-miengiamchitiet" ).dialog({
        resizable: false,
        height: "auto",
        autoOpen:false,
        width: 600,
        modal: true,
        buttons: {
          "Lưu": function() {
            emrhienthongbao('Đang lưu...');
            $.ajax({
              type: 'POST',
              async : false,
              url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham='+id_luotkham,
              data: {},
              success: function(data, status, xhr) {
                data=$.parseJSON(data);
            //  alert(data['DaThanhToanBill']);
            if(data['DaThanhToanBill']=='0'){
                if(data['GiamGia']=='0'){
                  $.ajax({
                    type: 'POST',
                    async : false,
                    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_miengiam&hienmaloi=a',
                    data: {
                      ID_LuotKham:id_luotkham,
                      ID_BenhNhan:<?=$_GET['idbenhnhan']?>,
                      SoTienCoupon:window.tien_coupon,
                      SoTienQuoTa:window.tien_quota,
                      SoTienVoucher:window.tien_voucher,
                      ID_NhanVienSuDungQuoTa:$("#quota_hidden").val(),
                      ID_LoaiCoupon:window.ID_LoaiCoupon,
                      ChiTiet_Voucher:window.chitiet_voucher,
                      GhiChuCoupon:$("#ghichu_coupon").val(),
                      GhiChuQuota:$("#ghichu_quota").val(),
                      GhiChuVoucher:$("#ghichu_voucher").val()
                         //    window.tongtiengiamgia=0
                    },
                   success: function(data, status, xhr) {
                    $("#tiengiam").val(window.tongtiengiamgia);
                    tientgiam_tinhlai();
                    $( "#dialog-miengiamchitiet" ).dialog( "close" );
                    $( "#lydogiamgia" ).val('Lý do khác');
                    $( "#lydogiamgia1" ).val(18);
                    emrhienthongbao('');
                    getchitietmg();
                        //setval_new('#lydogiamgia',18);
                    }
                  });
            }else{
               tooltip_message("Đối tượng BHYT trái tuyến và BHCC không thuộc chính sách này!");
            }
            }else{
              tooltip_message("Lượt khám đã thanh toán");
              emrhienthongbao('');
            }
          }
        });
          },
          "Thoát": function() {
            $( this ).dialog( "close" );
          }
        }
      });
    });
    //create_combobox_new('#quota',create_quota,'bw','','data_quota',0); 


    $("#miengiamchitiet").click(function(){
      //alert("");
     // $("#n_dangtai" ).show();
     // $("#hienbongmo").addClass('bongmo');
      func_moformmiengiam();

    })
	/*	$('#sotienquota').change(function(){
        tonggiamgia();
      })*/
      setTimeout(function(){
        getchitietmg();
      },1000);
      
    // End Nam edit








    setTimeout(function(){$("#benhnhantra").focus()},500); ;
    number_textbox('#benhnhantra');
    number_textbox('#phantram');
    number_textbox('#tiengiam');
    tinhtienthuoc();

    khonglaythuoc();
    $( "#btn_refesh3" ).button({
      text: false,
      icons: {
       primary: "ui-icon-refresh"
     }
   }).click(function(){
		//	alert(window.lydogiamgia);
   if(window.oper=='edit'){
    $('#rowed3').jqGrid('setGridParam', { datatype: "json",url:url_rowed3 }).trigger("reloadGrid");
    $('#rowed4').jqGrid('setGridParam', { datatype: "json",url:url_rowed4 }).trigger("reloadGrid");
    $('#rowed5').jqGrid('setGridParam', { datatype: "json",url:url_rowed5 }).trigger("reloadGrid");
    icd_chandoan()
  }else{
   // $('#rowed3').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP  }).trigger("reloadGrid");
    //$('#rowed4').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
   // $('#rowed5').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
   // icd_chandoan()
  }
})
   $( "#btn_refesh4" ).button({
    text: false,
    icons: {
     primary: "ui-icon-refresh"
   }
 }).click(function(){
   if(window.oper=='edit'){
    $('#rowed4').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
    $('#rowed5').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				//tinhlai();
			}else{
				$('#rowed4').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				$('#rowed5').jqGrid('setGridParam', { datatype: "json" }).trigger("reloadGrid");
				//tinhlai();
			}
   })


 $( "#dialog_sotien" ).dialog({
  resizable: false,
  height:'auto',
  modal: true,
  autoOpen :false,
  buttons: {
    "Có": function() {
		 // sum_bhyttra = $("#rowed3").jqGrid("getCol", "bhyt", false, "sum");
		 // sum_bhyttra = $("#rowed3").jqGrid("getCol", "bhyt", false, "sum");
     $( this ).dialog( "close" );
     if(($('#benhnhantra').val().split('.').join(''))<phaitra){
      $( "#dialog_sotien_thieu" ).dialog('open');
    }else{
      if(dem==0){
       luu();
     }
   }
 },
 "Không": function() {
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
  close: function( event, ui ) {
   <?php 
   if($thongtinbenhnhan[0]['LoaiDoiTuongKham']=='BHYT'){
     if($thongtinbenhnhan[0]['TrangThaiKham']==3 || $thongtinbenhnhan[0]['TrangThaiKham']==2){
      echo "parent.postMessage('dong_popup', '*');";
    }	 
  }else{
    echo "parent.postMessage('dong_popup', '*');";					
  }
  ?>		
},
open: function( event, ui ) {
  $( "#id_print" ).focus()
  $( "#id_print" ).select()
},
});
	$( "#dialog_hoadon" ).dialog({
	  resizable: false,
	  height:'auto',
	  modal: true,
	  autoOpen :false,
	  close: function( event, ui ) {	  
	  },
	  open: function( event, ui ) {	
	  },
	  buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
	});
		
 $( "#dialog_hoanung_print" ).dialog({
  resizable: false,
  height:'auto',
  modal: true,
  autoOpen :false,
  close: function( event, ui ) {
   $( "#dialog_print" ).dialog('open')

 },
 open: function( event, ui ) {
  $( "#id_hoanung_print" ).select()
},
});

 $( "#dialog_lydo_sua" ).dialog({
   title:'Nhập lý do hủy phiếu thanh toán',
   resizable: false,
   height:'auto',
   modal: true,
   autoOpen :false,
   close: function( event, ui ) {

   },
   buttons: {
    "OK": function() {

      if($.trim($('#lydo_sua').val().replace("\n", ""))!=''){
        sua();
        $( this ).dialog( "close" );
      }else{
       alert('Nhập lý do sửa');

       return false;
     }
   },
   "Thoát": function() {
    $( this ).dialog( "close" );
  }
}
});

 $('#btn_khonghotro').click(function(){			
   $('#rowed3').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham+'&ko_hotro=1&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
   $('#rowed4').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham+'&ko_hotro=1' }).trigger("reloadGrid");
   $('#rowed5').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+ID_LuotKham+'&ko_hotro=1' }).trigger("reloadGrid");

			//tinhlai();
		})

 $( "#lydothieu" ).keydown(function(e){
   if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
    $( "#id_thieu" ).focus();
    $( "#id_thieu" ).select();
    return false;
  }
});
 $( "#benhnhantra" ).keydown(function(e){
   if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
    if(window.kotinhlai==1){
     setTimeout(function(){$('#btn_luu').click();},100)
   }else{


     if(phaitra<0){
      $( "#benhnhantra" ).val(0)
      setTimeout(function(){$('#btn_luu').click();},100)
    }else{
      if(phaitra!=parseInt($( "#benhnhantra" ).val().split('.').join(''))){
       $("#btn_trahet").trigger("click");
     }else if(phaitra-parseInt($( "#benhnhantra" ).val().split('.').join(''))==0){
       setTimeout(function(){$('#btn_luu').click();},100)
     }
   }
 }
}else{
  if (e.shiftKey || (e.keyCode > 48 || e.keyCode < 57) && (e.keyCode > 96 || e.keyCode < 105 )) {
   window.kotinhlai=1
 }

}
});
 $( "#benhnhantra" ).blur(function(){
  window.kotinhlai=0;
})
 $('#tiengiam').keydown(function(e){
  if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
   $('#lydogiamgia').focus();
 }
})

 $('#lydogiamgia').keydown(function(e){
  if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
   $('#benhnhantra').focus();
 }
})

 $( "#benhnhantra" ).keyup(function(e){
   var tam=$( "#benhnhantra" ).val().split('.').join('');
   tam=parseInt(tam).formatMoney(0, ',', '.')
		//alert(tam);
   $("#benhnhantra").val(tam)
 });



 $( "#id_thieu" ).keydown(function(e){
   if (jwerty.is("enter",e)) {
    if($( "#id_thieu" ).val()<=8 && $( "#id_thieu" ).val()>0){
     $('#dialog_sotien_thieu').dialog('close')
   }
   return false;
 }
});



 $( "#dialog_sotien_thieu" ).dialog({
  resizable: false,
  height:'auto',
  width:'auto',
  autoOpen :false,
  modal: true,
  close: function( event, ui ) {
    window.lydothieu= $('[lydothieu=' +  $('#id_thieu').val() + ']').html()+' ('+$('#lydothieu').val().replace(/\n/g, "")+')'
    if(dem==0){
     luu();
   }
 },

});






   	//$('#giamgia').val(parseInt($('#giamdtph').val())+parseInt($('#giamthuoc').val())+parseInt($('#giamchidinh').val()))




        //Tạo lưới
        $('#ngay').datetimeEntry({datetimeFormat: 'H:M D/O/y',spinnerImage: ''});
        $('#ngay').val('<?php 
         echo $thongtinbenhnhan[0]['NgayGio']->format('H').':'.$thongtinbenhnhan[0]['NgayGio']->format('i').' '.$thongtinbenhnhan[0]['NgayGio']->format('d/m/Y')
         ?>');
        create_grid();
        create_grid_toathuoc();
        create_grid_toathuoc_chitiet();

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
	if(phaitra<=0){
   $('#benhnhantra').val(0)
 }else{
   $('#benhnhantra').val(phaitra.formatMoney(0, ',', '.'))
   $('#benhnhantra').focus();
   $('#benhnhantra').select();
 }
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
  if (jwerty.is('enter',e)) {
   $('#benhnhantra').focus();
   $('#benhnhantra').select();
 }
});

$('#btn_luu').click(function(){
  if(($('#phantram').val()>0||$('#tiengiam').val()>0)&&$('#lydogiamgia1').val()==''){
   alert('Vui lòng chọn lý do giảm');
   $('#lydogiamgia').val();
 }else{
  $('#dialog_sotien').html('Số tiền thu là '+$('#benhnhantra').val()+'.Bạn có muốn tiếp tục')	;
  $( "#dialog_sotien" ).dialog('open');
}
})


});


function resize_control() {
  $("#rowed3").setGridHeight($("#panel_main .left_col").height() - 160);
  $("#rowed3 ").setGridWidth($(".left_col").width() -5);
  $("#rowed4").setGridHeight($("#panel_main .right_col.tren").height() - 90);
  $("#rowed4 ").setGridWidth($(".right_col").width() - 3);
  $("#rowed5").setGridHeight($("#panel_main .right_col.duoi").height() - 160);
  $("#rowed5").setGridWidth($(".right_col").width() - 3);


}
function resize_subToathuoc() {
  $("#rowed4").setGridHeight($("#panel_main .right_col.tren").height() - 90);
  $("#rowed5").setGridHeight($("#panel_main .right_col.duoi").height() - 160);

}
function create_layout() {
 $('#panel_main').layout({
  resizerClass: 'ui-state-default'
  , center: {
   resizable: true
   , size: "55%"
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
   resize_control();

 }
 , onclose_end: function() {

   resize_control();
 }

}
, east: {
  resizable: true
  , size: "45%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                        , fxSettings_close: {easing: "easeOutQuint"}

                        , onresize_end: function() {
                          resize_control();
                        }
                        , onopen_end: function() {
                         resize_control();

                       }
                       , onclose_end: function() {

                         resize_control();
                       }
                     }
                   });

 $("#subToathuoc").layout({
  resizerClass: 'ui-state-default'
  , center: {
   resizable: true
   , size: "30%"
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
                   resize_subToathuoc();

                 }
                 , onclose_end: function() {

                   resize_subToathuoc();
                 }

               }
               , south: {
                resizable: true
                , size: "70%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                        , fxSettings_close: {easing: "easeOutQuint"}

                        , onresize_end: function() {
                          resize_subToathuoc();
                        }
                        , onopen_end: function() {

                          resize_subToathuoc();
                        }
                        , onclose_end: function() {
                         resize_subToathuoc();

                       }
                     }
                   });

}


function create_layout2() {
 $('#panel_sub').layout({
  resizerClass: 'ui-state-default'
  , center: {
   resizable: true
   , size: "55%"
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
   resize_control();

 }
 , onclose_end: function() {

   resize_control();
 }

}
, east: {
  resizable: true
  , size: "45%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                        , fxSettings_close: {easing: "easeOutQuint"}

                        , onresize_end: function() {
                          resize_control();
                        }
                        , onopen_end: function() {
                         resize_control();

                       }
                       , onclose_end: function() {

                         resize_control();
                       }
                     }
                   });
}
function create_grid() {
	//alert();
  var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
  $("#rowed3").jqGrid({
    url: url_rowed3,
    datatype: "json",
    colNames: ['ID_LoaiKham','ID_Kham','Tên loại khám','Trạng thái','Phí thực hiện','Giá bảo hiểm','Tỷ lệ BH TT'
    ,'Số lần','Phần trăm','BHYT chi trả','Cùng chi trả','Hỗ trợ BHYT','BHCC trả','KH Thuôc/VTYT','KH DV','Miễn giảm','Tổng phải trả'
    ,'Tiền vốn','Tên nhóm','','','','','','','','',''],
    colModel: [			
    {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},               
    {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},    
    {name: 'trangthai', index: 'trangthai', search: false, width: "10%", editable: false, align: 'left', hidden: false},           
    {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'GiaBaoHiem',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'GiaBaoHiem', search: false, width: "10%", editable: false, align: 'right', hidden: true},
	{name: 'TyLeThanhToanBHYT', index: 'TyLeThanhToanBHYT', search: false, width: "12%", editable: false, align: 'right', hidden: VP}, 
    {name: 'solan', index: 'solan', search: false, width: "5%", editable: false, align: 'right', hidden: false}, 			
    {name: 'Phantram', index: 'Phantram', search: false, width: "5%", editable: false, align: 'right', hidden: VP}, 
    {name: 'bhyt', index: 'bhyt', search: false, width: "10%", editable: false, align: 'right', hidden: VP,formatter:"integer"}, 
    {name: 'Cungchitra', index: 'Cungchitra', search: false, width: "10%", editable: false, align: 'right', hidden: VP,formatter:"integer"},
    {name: 'hotro', index: 'hotro', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:"integer"},  	
    {name: 'BHCCtra', index: 'BHCCtra', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:"integer"},

    {name: 'KhauHaoThuocVTYT', index: 'KhauHaoThuocVTYT', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:"integer"},
    {name: 'KhauHaoDichVu', index: 'KhauHaoDichVu', search: false, width: "15%", editable: false, align: 'right', hidden: true,formatter:"integer"},

    {name: 'miengiam', index: 'miengiam', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:"integer"},				
    {name: 'tongphaitra', index: 'tongphaitra', search: false, width: "15%", editable: false, align: 'right', hidden: false,formatter:"integer"}, 
    {name: 'tienvon', index: 'tongphaitra', search: false, width: "10%", editable: false, align: 'right', hidden: false,formatter:"integer"}, 
    {name: 'TenNhom', index: 'TenNhom', search: false, editable: false, align: 'left', hidden: true},            
    {name: 'ExtField1',index: 'ExtField1',hidden: true},
    {name: 'id_kham_dtph',index: 'id_kham',hidden: true},
    {name: 'Isbhyt',index: 'Isbhyt',hidden: true},
    {name: 'Tongbhyt',index: 'Tongbhyt',width: "10%",hidden: true},
    {name: 'bhyt_hidden',index: 'bhyt_hidden',hidden: true},
    {name: 'Cungchitra_hidden',index: 'Cungchitra_hidden',hidden: true},
    {name: 'tongphaitra_hidden', index: 'tongphaitra_hidden',hidden: true}, 
    {name: 'PhanTramGiam',index: 'PhanTramGiam',hidden: true},
    {name: 'SoTienGiam', index: 'SoTienGiam',hidden: true},

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
      groupText : ['<b>{0} : {PhiThucHien}</b>']
    },

    onCellSelect: function (rowid,iCol,cellcontent,e) {

    },
    onSelectRow: function(id) {
    },
    ondblClickRow: function(rowId) {
    },
    onselect: function(rowId, rowIndex, columnIndex) {
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
      tongphaitra_bhyt=grid.jqGrid('getCol', 'tongphaitra', false, 'sum');
      tong_bhyt=grid.jqGrid('getCol', 'bhyt', false, 'sum');
      tong_hotro=grid.jqGrid('getCol', 'hotro', false, 'sum');
      tong_cungchitra=grid.jqGrid('getCol', 'Cungchitra', false, 'sum');
      tong_miengiam=grid.jqGrid('getCol', 'miengiam', false, 'sum');


      window.KhauHaoThuocVTYT_grid=grid.jqGrid('getCol', 'KhauHaoThuocVTYT', false, 'sum');
      window.KhauHaoDichVu_grid=grid.jqGrid('getCol', 'KhauHaoDichVu', false, 'sum');

      $('#KhauHaoDichVu').val(KhauHaoDichVu_grid.formatMoney(0, ',', '.'));
      $('#KhauHaoThuocVTYT').val(KhauHaoThuocVTYT_grid.formatMoney(0, ',', '.'));
      grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
      grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:',bhyt:tong_bhyt, GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien,tongphaitra:tongphaitra_bhyt,hotro:tong_hotro,Cungchitra:tong_cungchitra,miengiam:tong_miengiam});
      load_complete();
    },
    caption: "Danh sách dịch vụ - <span style='color:red'>Nếu tổng BH chi trả <="+window.GioihanBHYT+"đ thì BH chi trả 100%<span>"
  });
}








function create_grid_toathuoc() {

  $("#rowed4").jqGrid({
    url: url_rowed4,
    datatype: "json",
    colNames: ['','ID_DonThuoc','ID_LuotKham','Bác sĩ kê','Ngày kê toa','Tổng tiền','BHYT','Cùng chi trả','Giảm giá','BHCC','Hỗ trợ','Phải trả','',''],
    colModel: [
    {name:'laythuoc',index:'laythuoc', width:'2%', align:"right",edittype:'checkbox',formatter: "checkbox",editable:true,formatoptions: {disabled : false},editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {
      $.ajax({
       type: 'POST',
       async : false,
       url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_isxuatthuoc&id_donthuoc='+ window.id_donthuoc,
       success: function(data, status, xhr) {		
        if($.trim(data)==0){
          tinhlai();
        }else{
         alert('Toa đã xuất');
         e.preventDefault();
       }									
     },
   });



    } }]}},
    {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "40%", editable: false, align: 'left', hidden: true},
    {name: 'ID_LuotKham', index: 'ID_LuotKham', search: true, width: "10%", editable: false, align: 'left', hidden: true},
    {name: 'TenBSKeToa',  index: 'TenBSKeToa', search: false, width: "20%", editable: false, align: 'left', hidden: false},
    {name: 'NgayBatDauDungThuoc', index: 'NgayBatDauDungThuoc', search: false, width: "20%", editable: false, align: 'left', hidden: false},
    {name: 'ThanhTien',formatter:"integer", index: 'ThanhTien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'bhyt',formatter:"integer", index: 'bhyt', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'cungchitra',formatter:"integer", index: 'cungchitra', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'giamgia',formatter:"integer", index: 'giamgia', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'bhcc',formatter:"integer", index: 'bhcc', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'hotro',formatter:"integer", index: 'hotro', search: false, width: "10%", editable: false, align: 'right', hidden: true},				
    {name: 'phaitra',formatter:"integer", index: 'phaitra', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'hotro_an',formatter:"integer", index: 'hotro_an', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'phaitra_an',formatter:"integer", index: 'hotro_an', search: false, width: "10%", editable: false, align: 'right', hidden: true},



    ],
    loadonce: false,
    scroll: false,
    modal: true,
    shrinkToFit: true,
    cmTemplate: {sortable: false},
    rowNum: 10000000,
    rowList: [],
    pager: '#prowed4',
    height: 100,
    width: 100,
    viewrecords: true,
    ignoreCase: true,
    sortorder: "desc",

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
       window.id_donthuoc=tmp1[0];
     }else{
       window.id_donthuoc=0;
     }


   },
   caption: "Toa thuốc"
 });
}

function create_grid_toathuoc_chitiet() {

  $("#rowed5").jqGrid({
    datatype:'json',
    url: url_rowed5,
    colNames: ['ID_DonThuocCT','Tên thuốc','ĐVT','Đơn giá','Đơn giá cùng chi trả','SL kê','SL Bn lấy','Thành tiền','Cùng chi trả','Hỗ trợ','Giảm giá','BHCC trả','Phải trả','','','','Giá vốn','','','','',''],
    colModel: [
    {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'TenThuoc', index: 'TenThuoc', search: true, width: "30%", editable: false, align: 'left', hidden: false},
    {name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "5%", editable: false, align: 'left', hidden: false},
    {name: 'Gia',formatter:"integer", index: 'Gia', search: false, width: "8%", editable: false, align: 'right', hidden: false},
    {name: 'GiaCungchitra',formatter:"integer", index: 'Gia', search: false, width: "8%", editable: false, align: 'right', hidden: VP},
    {name: 'SoThuocDeNghiTheoDon',formatter:"integer", index: 'SoThuocDeNghiTheoDon', search: false, width: "5%", editable: false, align: 'right', hidden: false},
    {name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "5%", editable: false, align: 'right', hidden: false},
    {name: 'ThanhTien',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},				
    {name: 'Cungchitra',formatter:"currency",formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, index: 'Cungchitra', search: false, width: "10%", editable: false, align: 'right', hidden: VP},
    {name: 'hotro',formatter:"integer", index: 'hotro', search: false, width: "10%", editable: false, align: 'right', hidden: VP},
    {name: 'giamgia',formatter:"integer", index: 'giamgia', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'BHCCtra',formatter:"integer", index: 'BHCCtra', search: false, width: "5%", editable: false, align: 'right', hidden: true},
    {name: 'phaitra',formatter:"integer", index: 'phaitra', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'ID_Thuoc', index: 'ID_Thuoc', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'SoLuong', index: 'SoLuong', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'SoLuongtoatam', index: 'SoLuong', search: false, width: "10%", editable: false, align: 'right', hidden: true},
    {name: 'giavon', index: 'giavon',formatter:"integer", search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'IsBhyt', index: 'IsBhyt',hidden: true},
    {name: 'Tongbhyt', index: 'Tongbhyt',hidden: true},
    {name: 'Cungchitra_hidden',index: 'Cungchitra_hidden',hidden: true},
    {name: 'phaitra_hidden',index: 'bhyt_hidden',hidden: true},
    {name: 'GiaCungchitra_hidden',index: 'GiaCungchitra_hidden',hidden: true},

    ],
    loadonce: true,
    scroll: false,
    modal: true,
    footerrow: true,

    shrinkToFit: true,
    cmTemplate: {sortable: false},
    rowNum: 10000000,
    rowList: [],
    pager: '#prowed4',
    height: 100,
    width: 100,
    viewrecords: true,
    ignoreCase: true,
    sortorder: "desc",
    onSelectRow: function(id) {
    },
    onCellSelect: function (rowid,iCol,cellcontent,e) {

    },
    ondblClickRow: function(rowId) {
     var rowData = jQuery(this).getRowData(rowId);
   },
   onselect: function(rowId, rowIndex, columnIndex) {

   },
   onRightClickRow: function(rowid, iRow, iCol, e) {



   },
   loadComplete: function(data) {
    sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
    sum_giavon =  $("#rowed5").jqGrid("getCol", "Cungchitra", false, "sum");
    sum_hotro= $("#rowed5").jqGrid("getCol", "hotro", false, "sum");
    sum_phaitra=$("#rowed5").jqGrid("getCol", "phaitra", false, "sum");
    $("#rowed5").jqGrid("footerData", "set", {Cungchitra:sum_giavon, ThanhTien: sum_ThanhTien,hotro:sum_hotro,phaitra:sum_phaitra});

    window.load_complete5=1;


  },
  caption: "Toa thuốc chi tiết"
});
}

/*function create_lydogiamgia(elem,datalocal){
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

  }*/
  function create_lydogiamgia(elem,datalocal){
    datalocal=jQuery.parseJSON(datalocal);
    $(elem).jqGrid({
      datastr:datalocal,
      datatype: "jsonstring" ,
      colNames:['Lý do giảm','Ghi chú','Hết hạn',''],
      colModel:[
      {name:'lydogiam',index:'lydogiam'},
      {name:'ghichu',index:'ghichu'},
      {name:'NgayHetHan',index:'NgayHetHan'},
      {name:'tiengiam',index:'tiengiam',hidden:true}
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
		/*	window.lydogiamgia=id;
			if(oper=='add'){
				if($.trim($(elem).jqGrid('getCell', id, 'tiengiam'))==''){	
					$('#tiengiam').val(0)
				}else{			
					$('#tiengiam').val($.trim($(elem).jqGrid('getCell', id, 'tiengiam')))
				}
			}*/
			
			$('#rowed3').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
			$('#rowed4').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
			$('#rowed5').jqGrid('setGridParam', { datatype: "json",url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP }).trigger("reloadGrid");
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
  dem=dem+1;
  if(tongcong>=0){
    miengiam_nv='';
    ids = $("#rowed4").jqGrid('getDataIDs')
    sum = tienthuoc;
    sumvat = $("#rowed5").jqGrid("getCol", "tongtienvat", false, "sum");		
    if(giamgia>0){
      miengiam_nv=',"id_miengiam":"'+$('#lydogiamgia1').val()+'","tien_miengiam":"'+$.trim($('#tiengiam').val())+'"';
      miengiam_nv=miengiam_nv+',"miengiamthuoc":"'+$('#giamtienthuoc').val()+'","check_miengiamthuoc":"'+$("#nhanvien_giamthuoc").is(':checked')+'","bsgiamthuoc":"'+giam_thuoc+'"';
    }
    window.datatosend = '{';
    window.datatosend+='"VP":'+JSON.stringify(VP);
    window.datatosend+=',"TrangThaiKham":'+JSON.stringify(TrangThaiKham);
    window.datatosend+=',"isvuotmuc":'+JSON.stringify(isvuotmuc);				
    window.datatosend+=',"id_giam_nv":'+JSON.stringify(id_giam_nv);
    window.datatosend+=',"ID_LuotKham":'+JSON.stringify(ID_LuotKham);
    window.datatosend+=',"sum_bhcc_tra":'+JSON.stringify(sum_bhcc_tra);
    window.datatosend+=',"id_giam_thuoc":'+JSON.stringify(id_giam_thuoc);
    window.datatosend+=',"id_giam_chidinh":'+JSON.stringify(id_giam_chidinh);
    window.datatosend+=',"id_giam_dtph":'+JSON.stringify(id_giam_dtph);
    window.datatosend+=',"idbenhnhan":'+JSON.stringify(idbenhnhan);
    window.datatosend+=',"NgayGio":'+JSON.stringify($('#ngay').val());
    window.datatosend+=',"nguoigd":'+JSON.stringify(+$('#nguoigd').val());
    window.datatosend+=',"diachi":'+JSON.stringify($('#diachi').val());
    window.datatosend+=',"diengiai":'+JSON.stringify($('#diengiai').val());
    window.datatosend+=',"tienthu":'+JSON.stringify($('#benhnhantra').val().split('.').join(''));
    window.datatosend+=',"tongcong":'+JSON.stringify(tongcong);
    window.datatosend+=',"id_luotkham":'+JSON.stringify(id_luotkham);
    window.datatosend+=',"tienthu_hoantra":'+JSON.stringify((parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra)));
    window.datatosend+=',"giamgia":'+JSON.stringify(giamgia);
    window.datatosend+=',"dskho":'+JSON.stringify(dskho);
    window.datatosend+=',"sum":'+JSON.stringify(sum);
    window.datatosend+=',"sumvat":'+JSON.stringify(sumvat);
    window.datatosend+=',"sum_bhyttra":'+JSON.stringify(sum_bhyt_tra);
    window.datatosend+=',"lydothieu":'+JSON.stringify($.trim(window.lydothieu));
    window.datatosend+=',"iddonthuoc":'+JSON.stringify(window.id_donthuoc);
    window.datatosend+=',"hotro_kham":'+JSON.stringify(hotro_kham);
    window.datatosend+=',"hotro_thuoc":'+JSON.stringify(hotro_thuoc);

    window.datatosend+=',"KhauHaoThuocVTYT":'+JSON.stringify(KhauHaoThuocVTYT_grid);
    window.datatosend+=',"KhauHaoDichVu":'+JSON.stringify(KhauHaoDichVu_grid);

    window.datatosend+=miengiam_nv;
    window.datatosend+=',"laythuoc":'+JSON.stringify($("#"+ids[0]+"_laythuoc").is(':checked'))+'';
    window.datatosend+=',"thuoc":'+JSON.stringify($('#rowed5').jqGrid('getGridParam','data'))+'';	
    window.datatosend+=',"kham":'+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'))+'';	




    window.datatosend+='}'	
    window.datatosend=jQuery.parseJSON(datatosend);
				/*if(<?=$_SESSION["user"]["id_user"]?>==178){
					alert($('#rowed5').jqGrid('getGridParam','data'));
				}*/
       if($('#benhnhantra').val().split('.').join('')>phaitra){
        $( "#dialog_hoanung" ).html('Bệnh nhân còn dư '+(parseInt ($('#benhnhantra').val().split('.').join(''))-parseInt (phaitra)).formatMoney(0, ',', '.')+' đồng có lập phiếu hoàn tiền cho bệnh nhân không');
        $( "#dialog_hoanung" ).dialog('open');
      }else{
        if(<?=$_SESSION["user"]["id_user"]?>==178){
         $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet1&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
           data1=data1.split(';');
           if(data1[0]==1){
           }else{
             $('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
             window.oper='edit';
             ID_ThuTraNo=$.trim(data1[0]);
             load_form();
             $( "#dialog_print" ).dialog('open');
           }
         })
       }else{
         $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
           data1=data1.split(';');
           if(data1[0]==1){
           }else{
             $('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
             window.oper='edit';
             ID_ThuTraNo=$.trim(data1[0]);
             load_form();
             $( "#dialog_print" ).dialog('open');
           }
         })
       }
     }

   }
 }



 $( "#dialog_hoanung" ).dialog({
   title:'Thông báo',
   resizable: false,
   height:'auto',
   modal: true,
   autoOpen :false,
   close: function( event, ui ) {
   },
   buttons: {
    "Có": function() {
     $( this ).dialog( "close" );			
     $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hoanung=1&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
      data1=data1.split(';');
      if(data1[0]==1){
      }else{
        window.ID_hoanung=$.trim(data1[1]);
        $('#dialog_hoanung_print').dialog('open');
        $('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
        window.oper='edit';
        ID_ThuTraNo=$.trim(data1[0]);
        load_form();
      }
    })
   },
   "Không": function() {
    $( this ).dialog( "close" );
    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet&hienmaloi=1&kho='+dskho,datatosend).done(function(data1){
      data1=data1.split(';');
      if(data1[0]==1){
      }else{
        $( "#dialog_print" ).dialog('open');
        $('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')).formatMoney(0, ',', '.'))
        window.oper='edit';
        ID_ThuTraNo=$.trim(data1[0]);
        load_form();
      }
    })
  }
}
});





function load_complete(){
	//alert(load_complete3+'-'+load_complete4+'-'+load_complete5);
	if((load_complete3==0)||(load_complete4==0)||(load_complete5==0)){
		setTimeout(load_complete,50);
		return;
	}else{
		setTimeout(tinhlai,200);
		load_complete3=0;
		load_complete4=0;
		load_complete5=0;
	}
	
  
}

function tinhlai(){
	//if(<?=$_SESSION["user"]["id_user"]?>==178){
		
	if(oper=='edit'){
		tongbhyt_thuoc=$("#rowed5").jqGrid('getCol', 'Tongbhyt', false, 'sum');		
		tongbhyt_kham =$("#rowed3").jqGrid('getCol', 'Tongbhyt', false, 'sum');			
		tongbhyt=parseInt(tongbhyt_kham)+parseInt(tongbhyt_thuoc);
		if(tongbhyt<=window.GioihanBHYT){
			isvuotmuc=1;
		}else{
			isvuotmuc=0;
		}
	}

	ids  =  $("#rowed4").jqGrid('getDataIDs');
	if($('#'+ids[0]+'_laythuoc').is(':checked')){
		tongbhyt_thuoc=$("#rowed5").jqGrid('getCol', 'Tongbhyt', false, 'sum');		
		tongbhyt_kham =$("#rowed3").jqGrid('getCol', 'Tongbhyt', false, 'sum');			
		tongbhyt=parseInt(tongbhyt_kham)+parseInt(tongbhyt_thuoc);
		
		if(!VP && oper=='add'){
			 if(tongbhyt<=window.GioihanBHYT){	 // Dưới hạn mức BH  trả 100%
			// alert(tongbhyt+' <= '+window.GioihanBHYT);
				isvuotmuc=1;
				var ids_rowed3 = $("#rowed3").getDataIDs();					
				for(var i=0;i<ids_rowed3.length;i++){				
					if($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Isbhyt')=='1'){
						bhyt_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt');
						Cungchitra_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Cungchitra');	
						bhyt_dung=parseInt(bhyt_tam)+parseInt(Cungchitra_tam);
						KhauHaoThuocVTYT=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'KhauHaoThuocVTYT');	
						KhauHaoDichVu=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'KhauHaoDichVu');

						tongphaitra_kham=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhiThucHien'))-bhyt_dung-KhauHaoThuocVTYT-KhauHaoDichVu-$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'BHCCtra');	
 
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "bhyt",bhyt_dung );	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "Cungchitra",0);	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",tongphaitra_kham);	
					}
				}				
				var ids_rowed5 = $("#rowed5").getDataIDs();
				for(var i=0;i<ids_rowed5.length;i++){	
					if($('#rowed5').jqGrid('getCell', ids_rowed5[i], 'IsBhyt')=='1'){
						bhyt_tam=$('#rowed5').jqGrid('getCell', ids_rowed5[i], 'ThanhTien');																
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "GiaCungchitra",0 );	
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "phaitra",0 );	
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "Cungchitra",0);		
					}
				}

				rowed5_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
				rowed5_Cungchitra =  $("#rowed5").jqGrid("getCol", "Cungchitra", false, "sum");

				rowed5_phaitra=$("#rowed5").jqGrid("getCol", "phaitra", false, "sum");

				rowed4_bhyt=rowed5_ThanhTien-rowed5_Cungchitra;
				$('#rowed4').jqGrid("setCell",ids[0], "cungchitra",rowed5_Cungchitra );	
				$('#rowed4').jqGrid("setCell",ids[0], "phaitra",rowed5_phaitra );	
				$('#rowed4').jqGrid("setCell",ids[0], "bhyt",rowed4_bhyt);	

			}else{// trên hạn mức BH  trả 100%
				isvuotmuc=0;
				var ids_rowed3 = $("#rowed3").getDataIDs();					
				for(var i=0;i<ids_rowed3.length;i++){							
					if($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Isbhyt')=='1'){
						bhyt_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt_hidden');
						Cungchitra_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Cungchitra_hidden');								
						tongphaitra_kham=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'tongphaitra_hidden'));	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "bhyt",bhyt_tam );	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "Cungchitra",Cungchitra_tam);	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",tongphaitra_kham);	
					}
				}				
				var ids_rowed5 = $("#rowed5").getDataIDs();
				for(var i=0;i<ids_rowed5.length;i++){	
					if($('#rowed5').jqGrid('getCell', ids_rowed5[i], 'IsBhyt')=='1'){
						phaitra_hidden=$('#rowed5').jqGrid('getCell', ids_rowed5[i], 'phaitra_hidden');
						Cungchitra_tam=$('#rowed5').jqGrid('getCell', ids_rowed5[i], 'Cungchitra_hidden');																
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "phaitra",phaitra_hidden );	
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "Cungchitra",Cungchitra_tam);
						$('#rowed5').jqGrid("setCell", ids_rowed5[i], "GiaCungchitra",$('#rowed5').jqGrid('getCell', ids_rowed5[i], 'GiaCungchitra_hidden'));
					}
				}
			}
		}	
	}else{
		tongbhyt_thuoc=0;								
		tongbhyt_kham =$("#rowed3").jqGrid('getCol', 'Tongbhyt', false, 'sum');			
		tongbhyt=parseInt(tongbhyt_kham)+parseInt(tongbhyt_thuoc);		
		if(!VP && TrangThaiKham!=3 && oper=='add'){
			if(tongbhyt<=window.GioihanBHYT){
				isvuotmuc=1;		     
				var ids_rowed3 = $("#rowed3").getDataIDs();											
				for(var i=0;i<ids_rowed3.length;i++){
					if($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Isbhyt')=='1'){	
						  bhyt_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt');
						  Cungchitra_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Cungchitra');	
						  bhyt_dung=parseInt(bhyt_tam)+parseInt(Cungchitra_tam);
						  KhauHaoThuocVTYT=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'KhauHaoThuocVTYT');	
						  KhauHaoDichVu=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'KhauHaoDichVu');
						  tongphaitra_kham=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhiThucHien'))-bhyt_dung-KhauHaoThuocVTYT-KhauHaoDichVu;
						  $('#rowed3').jqGrid("setCell", ids_rowed3[i], "bhyt",bhyt_dung );	
						  $('#rowed3').jqGrid("setCell", ids_rowed3[i], "Cungchitra",0);	
						  $('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",tongphaitra_kham);	
					}
				}
			}else{
				isvuotmuc=0;
				var ids_rowed3 = $("#rowed3").getDataIDs();					
				for(var i=0;i<ids_rowed3.length;i++){	
					if($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Isbhyt')=='1'){
						bhyt_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt_hidden');
						Cungchitra_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Cungchitra_hidden');								
						tongphaitra_kham=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'tongphaitra_hidden'));	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "bhyt",bhyt_tam );	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "Cungchitra",Cungchitra_tam);	
						$('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",tongphaitra_kham);	
					}
				}
			}	
		}	
	}

	//}
	if(oper=='add'){
		var ids_rowed3 = $("#rowed3").getDataIDs();	
		for(var i=0;i<ids_rowed3.length;i++){
			tongphaitra_kham=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'tongphaitra'));	
			giavon=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'tienvon'));
			solan=parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'solan'));

			if($.trim($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhanTramGiam'))!='' ||$.trim($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'SoTienGiam'))!='' ){			
				if($.trim($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhanTramGiam'))=='' ){
					miengiam=tongphaitra_kham-parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'SoTienGiam'));				  	
				}else{
					miengiam=(tongphaitra_kham-(giavon))*parseInt($('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhanTramGiam'))/100;
				}
				
				if(miengiam>0){	  
					$('#rowed3').jqGrid("setCell", ids_rowed3[i], "miengiam",parseInt(miengiam));
					$('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",parseInt(tongphaitra_kham-miengiam));
				}
			}
		}
	}
	
	tong_miengiam=$("#rowed3").jqGrid('getCol', 'miengiam', false, 'sum');
	sum_bhyt_kham  = $("#rowed3").jqGrid("getCol","bhyt", false, "sum");
	sum_bhyt_thuoc = parseInt($("#rowed5").jqGrid("getCol","ThanhTien", false, "sum"))-parseInt($("#rowed5").jqGrid("getCol","Cungchitra", false, "sum"));
	hotro_kham=$("#rowed3").jqGrid("getCol","hotro", false, "sum");
	sum_bhcc_tra=parseInt($("#rowed3").jqGrid("getCol","BHCCtra", false, "sum"))+parseInt($("#rowed5").jqGrid("getCol","BHCCtra", false, "sum"))
	sum  =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
	sum1 =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
	ids  =  $("#rowed4").jqGrid('getDataIDs');
	giamgia=giam_dtph+giam_chidinh+giam_thuoc+parseInt($('#tiengiam').val().split('.').join(''))+parseInt(tong_miengiam);
	giamgia_nv=giam_dtph+giam_chidinh+giam_thuoc+parseInt($('#tiengiam').val().split('.').join(''));

	if($('#'+ids[0]+'_laythuoc').is(':checked')){
		if(oper=='add'){
			hotro_thuoc=$("#rowed5").jqGrid("getCol","hotro", false, "sum");
			tienthuoc_tra=$("#rowed5").jqGrid("getCol", "phaitra", false, "sum");
			$('#rowed4').jqGrid("setCell", ids[0], "hotro",hotro_thuoc );
			$('#rowed4').jqGrid("setCell", ids[0], "phaitra",tienthuoc_tra );
		}else{
			hotro_thuoc=$("#rowed4").jqGrid("getCol","hotro", false, "sum");
			tienthuoc_tra=$("#rowed4").jqGrid("getCol", "phaitra", false, "sum");
		}
		if(!VP && TrangThaiKham==3 && oper=='add'){
			if(hotro_thuoc>HoTroNgoaiTru){
				hotro_thuoc=HoTroNgoaiTru
				ThanhTien_tam=parseInt($('#rowed4').jqGrid("getCell", ids[0], "ThanhTien" ));
				bhyt_tam     =parseInt($('#rowed4').jqGrid("getCell", ids[0], "bhyt" ));
				bhcc_tam     =parseInt($('#rowed4').jqGrid("getCell", ids[0], "bhcc" ));

				tienthuoc_tra=ThanhTien_tam-bhyt_tam-bhcc_tam-HoTroNgoaiTru
				$('#rowed4').jqGrid("setCell", ids[0], "hotro",HoTroNgoaiTru );
				$('#rowed4').jqGrid("setCell", ids[0], "phaitra",tienthuoc_tra );
			}
		}
		tienthuoc=sum1;
	}else{
		sum_bhyt_thuoc=0;
		hotro_thuoc=0;
		$('#rowed4').jqGrid("setCell", ids[0], "hotro",0 );
		$('#rowed4').jqGrid("setCell", ids[0], "phaitra",0 );
		tienthuoc=tienthuoc_toatam;
		tienthuoc_tra=tienthuoc_toatam;
		giamgia=giam_dtph+giam_chidinh+parseInt($('#tiengiam').val().split('.').join(''))+parseInt(tong_miengiam);
		giamgia_nv=giam_dtph+giam_chidinh+parseInt($('#tiengiam').val().split('.').join(''));
	}
	var grid = $("#rowed3");	
	rowed3_sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
	rowed3_sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');
	rowed3_tongphaitra_bhyt=grid.jqGrid('getCol', 'tongphaitra', false, 'sum');
	rowed3_tong_bhyt=grid.jqGrid('getCol', 'bhyt', false, 'sum');
	rowed3_tong_hotro=grid.jqGrid('getCol', 'hotro', false, 'sum');
	rowed3_tong_cungchitra=grid.jqGrid('getCol', 'Cungchitra', false, 'sum');

	grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: rowed3_sum});
	grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:',bhyt:rowed3_tong_bhyt, GiaThueNgoaiThucHien: rowed3_sumGiaThueNgoaiThucHien,tongphaitra:rowed3_tongphaitra_bhyt,hotro:rowed3_tong_hotro,Cungchitra:rowed3_tong_cungchitra,miengiam:tong_miengiam});

	rowed5_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
	rowed5_Cungchitra =  $("#rowed5").jqGrid("getCol", "Cungchitra", false, "sum");
	rowed5_hotro=  $("#rowed5").jqGrid("getCol", "hotro", false, "sum");
	rowed5_phaitra=$("#rowed5").jqGrid("getCol", "phaitra", false, "sum");


	$("#rowed5").jqGrid("footerData", "set", {Cungchitra:rowed5_Cungchitra, ThanhTien: rowed5_ThanhTien,hotro:rowed5_hotro,phaitra:rowed5_phaitra});

	////////
	sum_bhyt_tra = parseInt(sum_bhyt_kham)+parseInt(sum_bhyt_thuoc);
	if(<?=$_SESSION["com"]["TinhTienThuoc"]?>==0){
		tienthuoc=0;
		tienthuoc_tra=0;
	}
	tongcong=parseFloat(sum)+tienthuoc;		
	phaitra= $("#rowed3").jqGrid("getCol", "tongphaitra", false, "sum")+tienthuoc_tra-giamgia_nv+nodauky;	
	//nam	 miengiam
	window.mg_tongphaitra=tongcong-(sum_bhyt_tra+sum_bhcc_tra+hotro_thuoc+hotro_kham); //family
	//window.mg_tongphaitra=tongcong-(sum_bhyt_tra+sum_bhcc_tra+hotro_kham);

	$('#bhcc').val((sum_bhcc_tra).formatMoney(0, ',', '.'));
	$('#phaitra').val(phaitra.formatMoney(0, ',', '.'));
	$('#giamgia').val(giamgia_nv.formatMoney(0, ',', '.'));
	$('#tienthuoc').val(tienthuoc.formatMoney(0, ',', '.'));
	$('#tongcong').val(tongcong.formatMoney(0, ',', '.')); 
	$('#bhyt').val(sum_bhyt_tra.formatMoney(0, ',', '.'));
	//$('#hotro').val((hotro_kham).formatMoney(0, ',', '.'));
	
	$('#hotro').val((hotro_thuoc+hotro_kham).formatMoney(0, ',', '.')); //family
	if(window.oper=='edit'){
	 $('#nocuoiky').val((phaitra-$('#benhnhantra').val().split('.').join('')+hoanung).formatMoney(0, ',', '.'))
	}
	//console.log('tongphaitra '+$("#rowed3").jqGrid("getCol", "tongphaitra", false, "sum")+' thuoc'+tienthuoc_tra+'BHYT'+sum_bhyt_tra+'NHCC'+sum_bhcc_tra)
	console.log("Tong phải trả: "+window.mg_tongphaitra);
}



  function load_form(){
    if(oper=='add'){
     $('#btn_trahet,#btn_luu,#khonglaythuoc').button('enable');
     $('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2,#btn_hdKhamCb,#btn_bhyt').button('disable');
     $('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", false);
     $('#nocuoiky').val(0);
     $('#benhnhantra').val(0);
     $('.lydogiamgia_button').button('enable')
     window.url_rowed3 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
     window.url_rowed4 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
     window.url_rowed5 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham='+ID_LuotKham+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
     $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantam&ID_LuotKham='+ID_LuotKham).done(function(data){
      if(parseInt(data)>0){
       $('#toantam_label').show()
     }else{
       $('#toantam_label').hide()
     }
    // $('#toantam').val(parseInt(data).formatMoney(0, ',', '.'))
	  $('#toantam').val(0)
   })
     $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantamdaxuat&ID_LuotKham='+id_luotkham).done(function(data){

				//if(parseInt(data)>0){
				//	$('#toadaxuat_label').show()
				//}else{
					$('#toadaxuat_label').hide()
				//}
				//$('#toadaxuat').val(parseInt(data).formatMoney(0, ',', '.'))
				window.tienthuoc_toatam=0;
			})
   }else{
     $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tienthuoctoantamdaxuat&ID_LuotKham='+id_luotkham).done(function(data){

			//	if(parseInt(data)>0){
				//	$('#toadaxuat_label').show()
				//}else{
					$('#toadaxuat_label').hide()
			//	}
      window.tienthuoc_toatam=0;
      $('#toadaxuat').val(parseInt(data).formatMoney(0, ',', '.'))
    })
     $('#toantam_label').hide()
     $('#btn_trahet,#btn_luu,#khonglaythuoc').button('disable');
     $('#btn_sua,#btn_huy,#btn_gtgt,#btn_lien1,#btn_lien2,#btn_hdKhamCb,#btn_bhyt').button('enable');
     $('#ngay,#nguoigd,#diachi,#diengiai,#benhnhantra,#phantram,#tiengiam,#lydogiamgia').attr("disabled", true);
     $('.lydogiamgia_button').button('disable')
     window.url_rowed3 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_ThuTraNo='+ID_ThuTraNo+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
     window.url_rowed4 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_ThuTraNo='+ID_ThuTraNo+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
     window.url_rowed5 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_ThuTraNo='+ID_ThuTraNo+'&lydogiamgia='+window.lydogiamgia+'&VP='+VP;
   }

   

 }


 function sua(){
  dem=0;
  window.datatosend = '{';
  window.datatosend+='"VP":'+JSON.stringify(VP);
  window.datatosend+=',"TrangThaiKham":'+JSON.stringify(TrangThaiKham);
  window.datatosend+=',"isvuotmuc":'+JSON.stringify(isvuotmuc);	
  window.datatosend+=',"id_giam_nv":'+JSON.stringify(id_giam_nv);
  window.datatosend+=',"id_giam_thuoc":'+JSON.stringify(id_giam_thuoc);
  window.datatosend+=',"id_giam_chidinh":'+JSON.stringify(id_giam_chidinh);				
  window.datatosend+=',"id_giam_dtph":'+JSON.stringify(id_giam_dtph);
  window.datatosend+=',"idbenhnhan":'+JSON.stringify(idbenhnhan);
  window.datatosend+=',"id_luotkham":'+JSON.stringify(id_luotkham);
  window.datatosend+=',"id_thutrano":'+JSON.stringify(ID_ThuTraNo);
  window.datatosend+=',"NgayGio":'+JSON.stringify($('#ngay').val());
  window.datatosend+=',"iddonthuoc":'+JSON.stringify(window.id_donthuoc);
  window.datatosend+=',"lydo_sua":'+JSON.stringify($('#lydo_sua').val());				
  window.datatosend+=',"dskho": '+JSON.stringify(dskho);
  window.datatosend+=',"thuoc":'+JSON.stringify($('#rowed5').jqGrid('getGridParam','data'))+'';	
  window.datatosend+=',"kham":'+JSON.stringify($('#rowed3').jqGrid('getGridParam','data'))+'';						
  window.datatosend+='}'	

  window.datatosend=jQuery.parseJSON(datatosend);			
  if(<?=$_SESSION["user"]["id_user"]?>==178){
   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet_sua1&hienmaloi=1',datatosend).done(function(data){
    if($.trim(data)==2){
     alert('Bill đã có lượt thanh toán sau, vui lòng hủy bill thanh toán sau bill này trước');
   }else{
     window.oper='add';
     load_form()
     $("#tiengiam").val(0);
     tientgiam_tinhlai();
   }
 })
 }else{				
   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chitiet_sua&hienmaloi=1',datatosend).done(function(data){
    if($.trim(data)==2){
     alert('Bill đã có lượt thanh toán sau, vui lòng hủy bill thanh toán sau bill này trước');
   }else{
     window.oper='add';
     load_form()
     $("#tiengiam").val(0);
     tientgiam_tinhlai();
   }
 })
 }


}


function khonglaythuoc(){
  ids = $("#rowed4").jqGrid('getDataIDs');
  $('#khonglaythuoc').click(function(e){
   $.ajax({
     type: 'POST',
     async : false,
     url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_isxuatthuoc&id_donthuoc='+ window.id_donthuoc,
     success: function(data, status, xhr) {		
      if($.trim(data)==0){
        if($("#"+ids[0]+"_laythuoc").is(':checked')){
         $("#"+ids[0]+"_laythuoc").prop('checked',false);
         tinhlai();
       }else{
         $("#"+ids[0]+"_laythuoc").prop('checked',true);
         tinhlai();
       }
     }else{
       alert('Toa đã xuất');
       e.preventDefault();
     }									
   },
 });


 })
}


function tinhtienthuoc(){
	$('#phantram').keyup(function(){
		$('#tiengiam').val(0);
   sum_PhiThucHien =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
   sum_GiaThueNgoaiThucHien =  $("#rowed3").jqGrid("getCol", "GiaThueNgoaiThucHien", false, "sum");
   sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
   sum_giavon =  $("#rowed5").jqGrid("getCol", "giavon", false, "sum");
   sum_loinhuan_kham=sum_PhiThucHien;
   sum_loinhuan_thuoc=sum_ThanhTien-sum_giavon;

   if($('#nhanvien_giamthuoc').is(':checked')){
    $('#giamtienthuoc').val($('#phantram').val()*sum_loinhuan_thuoc/100)
    giamhientai=parseInt($('#phantram').val()*(sum_loinhuan_kham+sum_loinhuan_thuoc)/100);
    sum_giamgia=sum_loinhuan_kham+sum_loinhuan_thuoc;
  }else{
    giamhientai=parseInt($('#phantram').val()*(sum_loinhuan_kham)/100);
    sum_giamgia=sum_loinhuan_kham;
  }

  if(giamhientai>sum_giamgia){
    $('#tiengiam').val(0);
  }else{
    $('#tiengiam').val(giamhientai);
  }
  tinhlai();
})



	$('#tiengiam').keyup(function(){
		// change tien giam
    tientgiam_tinhlai();
  })
}








function create_congno() {
 $("#rowed7").jqGrid({
  url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietcongno&id_benhnhan='+idbenhnhan,
  datatype: "json",
  colNames: ['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu ký','Tổng phát sinh','Tiền miễn giảm','BHYT','Hỗ trợ','BHCC','Thanh toán','Nợ cuối','',''],
  colModel: [			
  {name: 'NgayGio', index: 'NgayGio', width: "10%", editable: false, align: 'left'},
  {name: 'MaPhieu', index: 'MaPhieu', search: true, width: "10%", editable: false, align: 'left'},
  {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
  {name: 'NoCu', index: 'NoCu', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'GiamGia', index: 'GiamGia', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'TongTienBHYTChiTra', index: 'TongTienBHYTChiTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'HoTroTuBenhVien', index: 'HoTroTuBenhVien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'TongTienBHCCTra', index: 'TongTienBHCCTra', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
  {name: 'SoTienThanhToan', index: 'SoTienThanhToan', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
  {name: 'Nomoi',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},                
  {name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},		
  {name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',hidden:true},
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

  },

});
}

function create_tamung() {
  $("#rowed6").jqGrid({
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tamung&id_luotkham='+id_luotkham,
    datatype: "json",
    colNames: ['Số phiếu','Ngày nộp','Người nộp tiền','Tạm ứng','Hoàn ứng','Thu ngân'],
    colModel: [
    {name: 'MaPhieu', index: 'MaPhieu', width: "10%", editable: false, align: 'left'},
    {name: 'NgayGio', index: 'NgayGio', search: true, width: "10%", editable: false, align: 'left'},
    {name: 'GhiChu',  index: 'GhiChu', search: false, width: "10%", editable: false, align: 'left'},
    {name: 'Tamung', index: 'Tamung', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'Hoanung', index: 'Hoanung', search: false, width: "10%", editable: false, align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TongTienPhaiTra', index: 'TongTienPhaiTra', search: false, width: "10%", editable: false, align: 'left'},

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
     sumTamung = $("#rowed6").jqGrid('getCol', 'Tamung', false, 'sum');
     sumHoanung=$("#rowed6").jqGrid('getCol', 'Hoanung', false, 'sum');


     $("#rowed7").jqGrid('footerData','set', {Tamung: sumTamung, Hoanung: sumHoanung});
   },

 });
}

function create_billdalap() {
  $("#rowed8").jqGrid({
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_thanhtoanvienphi&hienmaloi=1&id_benhnhan='+idbenhnhan,
    datatype: "json",
    colNames: ['Số phiếu','Ngày lập','Nợ cũ','Tổng phát sinh','Số tiền thu','Tiền hủy chỉ định','Tiền miễn giảm','Nợ cuối'],
    colModel: [
    {name: 'MaPhieu', index: 'MaPhieu', width: "10%", editable: false, align: 'left'},
    {name: 'NgayGio', index: 'NgayGio', search: true, width: "10%", editable: false, align: 'left'},
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
    onSelectRow: function(id) {
      url_tam='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theothutrano&ID_ThuTraNo='+id;
      $('#rowed9').jqGrid('setGridParam', { datatype: "json",url:url_tam }).trigger("reloadGrid");
    },
    ondblClickRow: function(rowId) {},
    onselect: function(rowId, rowIndex, columnIndex) {
    },
    onRightClickRow: function(rowid, iRow, iCol, e) {
    },
    loadComplete: function(data) {
     sumTongTienPhaiTra = $("#rowed8").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum');
     sumSoTienThanhToan=$("#rowed8").jqGrid('getCol', 'SoTienThanhToan', false, 'sum');
     sumTienHuyChiDinh=$("#rowed8").jqGrid('getCol', 'TienHuyChiDinh', false, 'sum');
     sumGiamGia=$("#rowed8").jqGrid('getCol', 'GiamGia', false, 'sum');
     $("#rowed8").jqGrid('footerData','set', {TongTienPhaiTra: sumTongTienPhaiTra, SoTienThanhToan: sumSoTienThanhToan, TienHuyChiDinh: sumTienHuyChiDinh, GiamGia: sumGiamGia});
   },

 });
}


function loadtab(){
  $('#tab3').click(function(){
   if(!$('#gbox_rowed7').length){
    create_congno();
    $("#rowed7").setGridHeight($("#tabs-3").height() - 170);
    $("#rowed7").setGridWidth($("#tabs-3").width() +20);
  }
})
  $('#tab2').click(function(){
   if(!$('#gbox_rowed6').length){
    create_tamung();
    $("#rowed6").setGridHeight($("#tabs-2").height() - 170);
    $("#rowed6").setGridWidth($("#tabs-2").width() +20);
  }
})
  $('#tab4').click(function(){
   if(!$('#gbox_rowed8').length){
				//create_layout2();
				create_billdalap();
				create_chitiet();
				$("#rowed8").setGridHeight($("#tabs-4").height() - 170);
				$("#rowed8").setGridWidth($("#tabs-4").width() -600);
				$("#rowed9").setGridHeight($("#tabs-4").height() - 170);
				$("#rowed9").setGridWidth($("#tabs-4").width() -900);
			}
		})

}
function create_chitiet() {

  $("#rowed9").jqGrid({
    data:[],
    datatype: "local",
    colNames: ['Tên loại khám','Phí thực hiện' ,'Tên nhóm'],
    colModel: [
    {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "20%", editable: false, align: 'left', hidden: false},
    {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
    {name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false}
    ],
    loadonce: true,
    scroll: false,
    modal: true,
    shrinkToFit: true,
    cmTemplate: {sortable: false},
    rowNum: 10000000,
    rowList: [],
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
      groupText : ['<b>{0} : {PhiThucHien}</b>']
    },
    onCellSelect: function (rowid,iCol,cellcontent,e) {
    },
    onSelectRow: function(id) {
    },
    ondblClickRow: function(rowId) {
    },
    onselect: function(rowId, rowIndex, columnIndex) {
    },
    onRightClickRow: function(rowid, iRow, iCol, e) {
    },
    loadComplete: function(data) {
    }

  });
}



function hentraketqua(){
  $('#hentra').click(function(){
   $.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
     window.elem=1 + Math.floor(Math.random() * 1000000000);
     var folder= data.split(';');
     var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+id_luotkham;
     dialog_main('Hẹn trả kết quả',100,100,elem,duong_dan);
   })
 })
}


function icd_chandoan(){
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_icd&id_luotkham='+id_luotkham).done(function(data){
   data=$.trim(data).split('||');
   $('#icd').text(data[1]);
   $('#bsydtri').text(data[2])
   $('#chandoan').text(data[0])
 })
}


function bhytvuot(){
 if($('#'+ids[0]+'_laythuoc').is(':checked')){
  tongbhyt_thuoc=$("#rowed5").jqGrid('getCol', 'Tongbhyt', false, 'sum');		
}else{
  tongbhyt_thuoc=0;				
}
tongbhyt_kham =$("#rowed3").jqGrid('getCol', 'Tongbhyt', false, 'sum');			
tongbhyt=tongbhyt_kham+tongbhyt_thuoc;		
if(!VP && TrangThaiKham!=3 && oper=='add' && tongbhyt<=window.GioihanBHYT){			     
 var ids_rowed3 = $("#rowed3").getDataIDs();
 for(var i=0;i<ids_rowed3.length;i++){	
   bhyt_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt');
   Cungchitra_tam=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'Cungchitra');	
   tongphaitra_kham=$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'PhiThucHien')-$('#rowed3').jqGrid('getCell', ids_rowed3[i], 'bhyt');					
   $('#rowed3').jqGrid("setCell", ids_rowed3[i], "bhyt",bhyt_tam+Cungchitra_tam );	
   $('#rowed3').jqGrid("setCell", ids_rowed3[i], "Cungchitra",0);	
   $('#rowed3').jqGrid("setCell", ids_rowed3[i], "tongphaitra",tongphaitra_kham);				
 }				
 if($('#'+ids[0]+'_laythuoc').is(':checked')){
   var ids_rowed5 = $("#rowed5").getDataIDs();
   for(var i=0;i<ids_rowed5.length;i++){	
     bhyt_tam=$('#rowed5').jqGrid('getCell', ids_rowed5[i], 'ThanhTien');

     $('#rowed5').jqGrid("setCell", ids_rowed5[i], "phaitra",bhyt_tam+Cungchitra_tam );	
     $('#rowed5').jqGrid("setCell", ids_rowed5[i], "Cungchitra",0);				
   }
 }			
}	
}




function create_quota(elem, datalocal) {
  datalocal = jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr: datalocal,
    datatype: "jsonstring",
    colNames: ['Quota',''],
    colModel: [

    {name: 'Quota', index: 'Quota', hidden: false,width:"10%"},
    {name: 'idnv', index: 'idnv', hidden: true,width:1},


    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: 1,
    modal: true,
    rowNum: 100,
    rowList: [],
    height: 200,
    width: 200,
    viewrecords: true,
    ignoreCase: true,
    shrinkToFit: true,
    cmTemplate: {sortable: false},
    sortorder: "desc",
    serializeRowData: function(postdata) {
    },
    onSelectRow: function(id) {

     // var rowData = $(this).getRowData(id);
      //alert(rowData);
     // $("#tenbacsi").val(rowData["hovaten"]);

   },
   ondblClickRow: function(id, rowIndex, columnIndex) {
   },
   loadComplete: function(data) {
   },
 });
  $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
  $(elem).jqGrid('bindKeys', {});
}




function tonggiamgia(){
  //window.mg_tongphaitra
  window.tongtiengiamgia=0
  window.tien_coupon =0;
  window.tien_quota =0;
  window.tien_voucher =0;
  window.chitiet_voucher=[];
  window.ID_LoaiCoupon=0;
 // alert($("input[name='coupon']:checked").length);
 if($("input[name='coupon']:checked").length>0){
  tien_coupon=$("input[name='coupon']:checked").val();
  window.ID_LoaiCoupon=$("input[name='coupon']:checked").attr('loai');
}else{
  window.ID_LoaiCoupon=0;
}

$("#sotienquota").attr("tiengiam",$("#sotienquota").val().replace(".", ""));
  //console.log("A:"+$("#sotienquota").val().replace(".", ""));
  if($("#sotienquota").attr("tiengiam")==''){
    tien_quota=0;
  }else{
    tien_quota=parseInt($("#sotienquota").attr("tiengiam"));
  }
  var i=0;
  if($('#ds_voucher :checked').length>0){
    $('#ds_voucher :checked').each(function() {
     tien_voucher+=parseInt($(this).val());
     window.chitiet_voucher.push( new Array($(this).attr('loai'), $(this).val()));
     i++;
   });
  }

  //alertObject(window.chitiet_voucher);
  
  //alert(tien_coupon+'-'+tien_quota+'-'+tien_voucher);

  if(tien_coupon>window.mg_tongphaitra){
    window.tongtiengiamgia=window.mg_tongphaitra;
    $("#sotiencoupon").val(formatMoney(window.tongtiengiamgia));
    $("#sotiencoupon").attr("tiengiam",window.tongtiengiamgia);
  }else{
    $("#sotiencoupon").val(formatMoney(tien_coupon));
    $("#sotiencoupon").attr("tiengiam",tien_coupon);
  }
  if($("#sotiencoupon").attr("tiengiam")==''){
    tien_coupon=0;
  }else{
    tien_coupon=parseInt($("#sotiencoupon").attr("tiengiam"));
  }


  if((tien_coupon+tien_quota)>window.mg_tongphaitra){
    window.tongtiengiamgia=window.mg_tongphaitra;
    $("#sotienquota").val(formatMoney(window.tongtiengiamgia-tien_coupon));
    $("#sotienquota").attr("tiengiam",window.tongtiengiamgia-tien_coupon);
  }else{
    $("#sotienquota").val(formatMoney(tien_quota));
    $("#sotienquota").attr("tiengiam",tien_quota);
  }
  // Lấy lai quota vì khi nhập cao hơn thực trả của bệnh nhân thì set lại = thực trả của bn nên lấy lai mới chính xác
  if($("#sotienquota").attr("tiengiam")==''){
    tien_quota=0;
  }else{
    tien_quota=parseInt($("#sotienquota").attr("tiengiam"));
  }

  $("#sotienvoucher").val(0);
  $("#sotienvoucher").attr("tiengiam",0);
  if((tien_coupon+tien_quota+tien_voucher)>window.mg_tongphaitra){
    window.tongtiengiamgia=window.mg_tongphaitra;
    $("#sotienvoucher").val(formatMoney(window.tongtiengiamgia-(tien_coupon+tien_quota)));
    $("#sotienvoucher").attr("tiengiam",window.tongtiengiamgia-(tien_coupon+tien_quota));
  }else{
    $("#sotienvoucher").val(formatMoney(tien_voucher));
    $("#sotienvoucher").attr("tiengiam",tien_voucher);
  }

  if($("#sotienvoucher").attr("tiengiam")==''){
    tien_voucher=0;
  }else{
    tien_voucher=parseInt($("#sotienvoucher").attr("tiengiam"));
  }

  //
  window.tongtiengiamgia=tien_coupon+tien_quota+tien_voucher;
  $("#ttmg").attr("tiengiam",window.tongtiengiamgia);
  $("#ttmg").val(formatMoney(window.tongtiengiamgia));
  console.log("Tổng được miển giảm: "+formatMoney(window.tongtiengiamgia));
}

function formatMoney(value) {
  if($.trim(value)=='' || value==0){
    tam='0';
  }else{
    tam=(parseInt(value)).formatMoney(0, ',', '.')
  }
  return tam;
}

function tientgiam_tinhlai(){
  $('#phantram').val(0);
  sum_PhiThucHien =  $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");
  sum_GiaThueNgoaiThucHien =  $("#rowed3").jqGrid("getCol", "GiaThueNgoaiThucHien", false, "sum");
  sum_ThanhTien =  $("#rowed5").jqGrid("getCol", "ThanhTien", false, "sum");
  sum_giavon =  $("#rowed5").jqGrid("getCol", "giavon", false, "sum");
  sum_loinhuan_kham=sum_PhiThucHien-sum_GiaThueNgoaiThucHien;
  sum_loinhuan_thuoc=sum_ThanhTien-sum_giavon;
  giamhientai=parseInt($('#tiengiam').val());
  if($('#nhanvien_giamthuoc').is(':checked')){
    sum_giamgia=sum_loinhuan_kham+sum_loinhuan_thuoc;
    $('#giamtienthuoc').val($('#tiengiam').val()/(sum_loinhuan_kham+sum_loinhuan_thuoc)*sum_loinhuan_thuoc);
  }else{
    sum_giamgia=sum_loinhuan_kham;
  }


  tinhlai();
}
function getchitietmg(){
 $.ajax({
  type: 'POST',
  async : false,
  url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_miengiam&oper=tomtat&id_luotkham='+id_luotkham,
  data: {},
  success: function(data, status, xhr) {
    data=$.parseJSON(data)
    $("#miengiamchitiet").attr('title',data[0]);
    if(data[2]==1 && ID_ThuTraNo==0){
      func_moformmiengiam();
    }else{
      //alert("Đóng");
    }
    if(parseInt(data[1])>0){
      $('#btn_inquota').button('enable');
    }else{
      $('#btn_inquota').button('disable');
    }

  }
});
}

function func_moformmiengiam(){
  $.ajax({
    type: 'POST',
    async : false,
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_thanhtoan&idluotkham='+id_luotkham,
    data: {},
    success: function(data, status, xhr) {
      data=$.parseJSON(data);
      //alert(data['GiamGia']);
      if(data['GiamGia']=='0'){
       emrhienthongbao('Đang tải dữ liệu...');
       $.ajax({
        type: 'POST',
        async : false,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_miengiam&oper=chitiet&id_luotkham='+id_luotkham,
        data: {},
        success: function(data, status, xhr) {
          data=$.parseJSON(data);
          $("#ds_coupon").empty();
          $('[href="#tabs-1"]').closest('li').show();
          $('[href="#tabs-3"]').closest('li').show();
          if(data[0][0]['ID_LyDoGiamGia']!=0){
            for(var i=0;i<data[0].length;i++){
              checked='';
              xuongdong='<br>';
              if(i==0){
                checked='checked';
                    //xuongdong='';
                  }else{
                    if(data[0][i]['DaAp']==1){
                      checked='checked';
                    }else{
                      checked='';
                    }
                  }


                  $("#ds_coupon").append('<input type="radio" name="coupon" loai="'+data[0][i]['ID_LyDoGiamGia']+'" class="coupon" id="coupon_'+data[0][i]['ID_LyDoGiamGia']+'" value="'+data[0][i]['TienGiam']+'" '+checked+'> <label for="coupon_'+data[0][i]['ID_LyDoGiamGia']+'">'+data[0][i]['LyDoGiamGia']+': '+formatMoney(data[0][i]['TienGiam'])+'</label>'+xuongdong);
                }
              }else{
                $('[href="#tabs-1"]').closest('li').hide();
                $( "#ui-id-12" ).click();
              }
              

              $("#ds_voucher").empty();

              if(data[1][0]['ID_LyDoGiamGia']!=0){
                for(var i=0;i<data[1].length;i++){
                  if(data[1][i]['DaAp']==1){
                    checked='checked';
                  }else{
                    checked='';
                  }
                  
                  xuongdong='<br>';

                  $("#ds_voucher").append('<input type="checkbox" name="voucher" loai="'+data[1][i]['ID_LyDoGiamGia']+'" class="voucher" id="voucher_'+data[1][i]['ID_LyDoGiamGia']+'" value="'+data[1][i]['TienGiam']+'" '+checked+'> <label for="voucher_'+data[1][i]['ID_LyDoGiamGia']+'">'+data[1][i]['LyDoGiamGia']+': '+formatMoney(data[1][i]['TienGiam'])+'</label>'+xuongdong);
                }
              }else{
                $('[href="#tabs-3"]').closest('li').hide();
              }
              if(data[2][0]['ID_NhanVienSuDungQuoTa']>0){
                setval_new('#quota',data[2][0]['ID_NhanVienSuDungQuoTa']);
                $("#sotienquota").val(formatMoney(data[2][0]['SoTien']));
                $("#sotienquota").attr('tiengiam',data[2][0]['SoTien']);
              }else{
                $("#sotienquota").val(0);
                $("#sotienquota").attr('tiengiam',0);
              }
              tonggiamgia();

             //setTimeout(function(){
              if(parseInt(data[3][0]['SoTienCoupon'])>0){
               $("#sotiencoupon").val(formatMoney(data[3][0]['SoTienCoupon']));
               $("#sotiencoupon").attr('tiengiam',data[3][0]['SoTienCoupon']);
             }

             if(parseInt(data[3][0]['SoTienQuoTaBS'])>0){
               $("#ghichu_quota").prop('disabled',true);
               $("#sotienquota").prop('disabled',true);
               create_combobox_disable("#quota");
             }else{
               $("#ghichu_quota").prop('disabled',false);
               $("#sotienquota").prop('disabled',false);
               create_combobox_enable("#quota");
             }

             $("#ghichu_coupon").val(data[3][0]['GhiChuCoupon']);

             $("#sotienquota").val(formatMoney(data[3][0]['SoTienQuoTa']));
             $("#sotienquota").attr('tiengiam',data[3][0]['SoTienQuoTa']);
             $("#ghichu_quota").val(data[3][0]['GhiChuQuota']);

             $("#sotienvoucher").val(formatMoney(data[3][0]['SoTienVoucher']));
             $("#sotienvoucher").attr('tiengiam',data[3][0]['SoTienVoucher']);
             $("#ghichu_voucher").val(data[3][0]['GhiChuVoucher']);
              //},200)

               // $("#n_dangtai" ).hide();
               // $("#hienbongmo").removeClass('bongmo');
               emrhienthongbao('');


             }
           });

      //ds_coupon ds_voucher


          // format lại money
          $('#sotienquota').on('input', function(e){
            if($("#quota").val()!='' && $("#quota").val()!='false'){
             tonggiamgia();
           }else{
             $('#sotienquota').val(0);
             alert("Vui lòng chọn loại quota trước");

           }

         }).on('keypress',function(e){
             // console.log("key "+e.which);
             if(!$.isNumeric(String.fromCharCode(e.which)) && e.which!=0 && e.which!=8) e.preventDefault();
           }).on('paste', function(e){    
            var cb = e.originalEvent.clipboardData || window.clipboardData;      
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
          });

           $("#dialog-miengiamchitiet").dialog('open');
           $('.coupon,.voucher').click(function(){
            tonggiamgia();
          })
         }else{
           tooltip_message("Đối tượng BHYT trái tuyến và BHCC không thuộc chính sách này!");
         }
       }
     });
}


</script>


