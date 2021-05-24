
<?php
//print_r($_SESSION["ThongTinBenhNhan"]) ;
if(isset($_GET["id_benhnhan"])){
  echo "<script type='text/javascript'>";
  echo "window.id_benhnhan=".$_GET["id_benhnhan"];
  echo "</script>";

}else{
  if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
    echo "<script type='text/javascript'>";
    echo "parent.postMessage('hosobenhnhantrong;' , '*')";

    echo "</script>";
    return;
  }else{
    echo "<script type='text/javascript'>";
    echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
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
#DM_template td,#data_soitructrang td  {   
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
.ui-widget-overlay {
  opacity:0.01;
  filter: alpha(opacity=1); 
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
  /*overlay trong suot*/  
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
  width:150px;
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
  }.thongtin_chidinh{
    height:58px;
    }#right_col{
      padding-left:2px;
      }input[type="checkbox"]:focus {
        -webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
        box-shadow:  0px 0px 2px 2px #208AC8 !important;
        }select {
          height: 22px !important;
          width: 90px;
          }#right_top{
            border: 0px solid #D4CCB0;
          }
          #right_bottom select{
            width:245px;
          }
          #right_bottom input[type="text"] {
            width:501px;
            }.custom-combobox-input{
              width:70px !important
              }.ui-autocomplete {
                min-height:100px !important;
                }#vitribuitri{
                  width:98px;
                  }.thongtin_tongthe{
                    height:62px;
                    }#combo_ppdieutri11,#combo_ppdieutri21{
                      width:200px!important;

                      }.backhidde{
                        background:#F0F0F0!important;

                        }.n_bd{
                          border: 1px solid #D4CCB0;

                          }.l_top{
                            background: none repeat scroll 0 0 #F5F3EB;
                            border: 1px solid #D4CCB0;
                            border-radius: 3px;
                            height: 15px;
                            margin-left: 1px;
                            margin-right: 1px;
                            margin-top: 1px;
                            padding-top: 2px;
                            }.n_title{
                              /*font-weight:bold;*/
                              text-align:center;
                              background:#EDFC72;
                              /*border-bottom:solid 1px #D4CCB0;*/

                              }.mg{
                                color:#F36;
                                }#klc_ketluan{
                                  height:25px;
                                  width: 235px;
                                  }.bacsy,.phanloai{
                                    width:155px !important;
                                    }#panel_main{
                                      overflow: scroll!important; /* set overflow to scroll for desktop browsers */
                                      overflow-x: hidden!important; /* hide scrollbar on x-axis */
                                    }

                                    #sub_main{   

                                     height:500px!important;
                                     width:100%!important;
                                     }.left_col{
                                      float:left;
                                      box-shadow: 0px 0px 10px #A0A0A0;
                                      border: 1px solid #919191;
                                      display: inline-block;
                                      vertical-align: top;
                                      margin-top: 2px;
                                      margin-right:2px;
                                      }.right_col{
                                        float:left;
                                        box-shadow: 0px 0px 10px #A0A0A0;
                                        border: 1px solid #919191;
                                        display: inline-block;
                                        vertical-align: top;
                                        margin-top: 2px;
                                        margin-left:2px;
                                        }#phanloaisk1,#phanloaitl1{
                                          width:50px !important;
                                          }.Khoichung div{
                                            display:inline-block;
                                            vertical-align: top;
                                            height:180px;
                                            width: 193px;
                                            border: 1px solid #000;
                                            border-spacing: 4px
                                          }
                                          .Khoichung div span{

                                            display: block;

                                          }
                                          .Khoichung div#CVD,.Khoichung div#CHF4Y,.Khoichung div#STROKE10Y{

                                            display: block;
                                            height: 250px !important;

                                          }
                                          .Khoichung div span label{
                                            display:inline-block;
                                            width: 100px;
                                            text-align: left;
                                            color :#000;

                                          }
                                          .Khoichung div span input{
                                           display:inline-block;
                                           width: 30px;
                                           height: 30px;
                                           text-align: right;
                                         }
                                         .widthTextPanelPhanNhapDoYta{
                                           width: 50px;
                                         }
                                         fieldset input{               
                                           width: 22px;
                                         }

                                         #bacsy .label{
                                          display:inline-block;
                                          width: 124px !important;
                                          text-align: left;

                                        }
                                        #bacsy label{
                                         display:inline-block;             
                                         text-align: left;
                                         cursor:pointer;

                                       }
                                       #yta label{
                                         display:inline-block;             
                                         text-align: left;
                                         cursor:pointer;
                                         width: 100px;

                                       }  
                                       #yta div{
                                         display:inline-block; 
                                         width: 70px;
                                         margin:0;
                                         margin-bottom: 3px;
                                         padding:0;        
                                       }
                                       #yta div  input{
                                         display:inline-block; 
                                         width: 40px;
                                         margin:0;
                                         padding:0;        
                                       }
                                       #tudong label{
                                         display:inline-block;             
                                         text-align: left;
                                         cursor:pointer;
                                         width: 100px;

                                       }
                                       #tudong div input{
                                         display:inline-block; 
                                         width: 50px;
                                         margin:0;
                                         padding:0;  
                                       }
                                       #tudong div
                                       {
                                        display:inline-block; 
                                        width: 70px;
                                        margin:0;
                                        margin-bottom: 3px;
                                        padding:0; 
                                      }
                                      #bacsy div{
                                       display:inline-block; 

                                       width: 30px;
                                       margin:0;
                                       padding:0;        
                                     }
                                     #container{  
                                      width:1300px;  
                                      margin-left:auto;
                                      margin-right:auto;
                                      letter-spacing: 0px;
                                      word-spacing: 0px;
                                      font-family:Tahoma, Geneva, sans-serif;
                                      font-size:11px; 
                                    }
                                    fieldset{
                                     font-family:Tahoma, Geneva, sans-serif;
                                     font-size:12px;
                                     border:1px solid #000;
                                   }
                                   body{
                                     font-family:Tahoma, Geneva, sans-serif;
                                     font-size:12px; 
                                   }
                                   div input[type='text']{

                                    height: 12px !important;

                                    }.Khoichung input[type='text']{
                                     width:20px;
                                     }.left_col{
                                       height:520px;
                                       }.rtop1{
                                         width:65px;
                                         height:130px;
                                         padding-top: 25%;
                                         float: left;
                                         padding-left:5px;
                                       }
                                       .rbottom1{
                                         width:65px;
                                         height:130px;
                                         padding-top: 25%;
                                         float: left;
                                         padding-left:5px;

                                         }.rtop2{
                                           height:230px;
                                           float:left;

                                           }.rbottom2{
                                             float:left;
                                             height:230px;


                                             }.sub_right_top{
                                               float:left;
                                               border-bottom:1px solid #919191;
                                               }.sub_right_bottom{
                                                 float:left;
                                                 margin-top:5px;
                                                 }#Chandoan{
                                                   height:92%;
                                                   margin-top:5px;
                                                 }
                                                 #Dieutri{
                                                   height:92%;
                                                   }.ttlk_sub{
                                                     float:left;
                                                     height:100%;
                                                     width:262px;
                                                     padding-top:5px;
                                                   }
                                                   .ttlk_sub2{
                                                     float:left;
                                                     height:100%;
                                                     width:170px;
                                                     padding-top:5px;
                                                     padding-left: 22px;
                                                   }
                                                   .ttlk_sub3{
                                                     float:left;
                                                     height:100%;
                                                     width:180px;
                                                     padding-top:5px;
                                                   }
/*table
{
border-collapse:collapse;
}*/

</style>
<body>
  <div  class="data_combo_bacsy">
    <table id="data_combo_bacsy">
    </table>   
  </div>
  <div class="top_form ui-widget-content" >
    <div style="padding:2px 0px;" class="thongtin_tongthe">
      <div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
      <div class="form_row">
        <label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
        <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
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
        <label style="width:90px;text-align:right">Ngày chỉ định:</label>
        <input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
        <label id="giothuchien"  name="giothuchien" type="text" lang='luu'style="width: 90px;margin-left: 10px;">Giờ tT</label>

        <a href="#" id="dathuchien" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
        <label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
        <a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
      </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="">   
      <div class="thongtin_luotkham_scroll"></div>
      <span class="navigator" >
        <button id="first">bắt đầu</button>
        <button id="prev">tới</button>
        <span class="navigator_title"></span>
        <button id="next">lui</button>
        <button id="last">kết thúc</button> 
      </span>
      <!-- <label id="ngay_kham"></label>         -->
    </div>

    <div class="thongtin_luotkham" id="right_col">
      <div class="ttlk_sub">
        <label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px;margin-top:12px"></label> <br>  

        <label style="margin-top:12px"><a href="#">Giờ hẹn trả kết quả:</a></label>
        <label id="giohentra" style="color:blue;margin-top:12px"></label>   <br>  
        <label style="margin-top:12px">Sửa bởi:</label>
        <label id="nguoisua" style="color:blue;margin-top:12px"></label>
        <label id="ngaygiosua" style="color:blue;margin-top:12px"></label>
      </div>
      <div class="ttlk_sub2">
        <a href="#" id="tinhchandoan" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:117px;  margin-bottom:1px; ">TÍNH TOÁN<span class="ui-icon ui-icon-calculator"></span></a>

        <a href="#" id="laylaidulieu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:117px; margin-bottom:1px; ">Reload tự động<span class="ui-icon ui-icon-refresh"></span></a>
      </div>
      <div class="ttlk_sub3">
        <a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
        <a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
        <a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
        <!-- <a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a>  -->
        <a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
      </div>

      
    </div>

  </div> 

  <div id="panel_main">  
    <div id="sub_main" >
      <div class="ui-widget-content ui-layout-west left_col">
        <div class="tt_bacsy">
          <fieldset id="bacsy" style=" width: 97%">
           <legend style="text-align: left ;color: red"><?php get_text("phannhapdobacsy")?></legend>
           <table width="97%">
            <tr>
              <td><input type="checkbox" name="Smoker" id ="Smoker" lang='luu'> <label for="Smoker"><?php get_text("hutthuoc")?></label></td>
              <td><input type="checkbox" name="CVD" id ="CVD" lang='luu'><label for="CVD"><?php get_text("benhtimmach")?></label></td>
              <td><input type="checkbox" name="DIABET" id ="DIABET"  lang='luu'> <label for="DIABET"> <?php get_text("tieuduong")?></label></td>
              <td><input type="checkbox" name="Treated" id ="Treated" lang='luu'><label for="Treated"><?php get_text("dieutricaohuyetap")?></label></td>
              <td><input type="checkbox" name="Murmur" id ="Murmur" lang='luu'> <label for="Murmur"><?php get_text("amthoitrongtim")?></label></td>
              <td><input type="checkbox" name="LVH" id ="LVH" lang='luu'> <label  for="LVH"><?php get_text("daythattrai")?></label> </td>
            </tr>
            <tr>

              <td><input type="text" style="width :23px" name="CigsOnDate" id ="CigsOnDate" lang='luu'><label for="CigsOnDate"><?php get_text("sodieungay")?></label></td>
              <td><input type="checkbox" name="Valve" id ="Valve" lang='luu'> <label for="benhvantim"><?php get_text("benhvantim")?></label></td>
              <td><input type="checkbox" name="AF" id ="AF" lang='luu'> <label for="AF"><?php get_text("rungnhi")?></label></td>
              <td><input type="checkbox" name="IC" id ="IC" lang='luu'> <label for="IC" style="width:140px"><?php get_text("dikhapkhiengcachhoi")?></label></td>
              <td><input type="checkbox" name="CHD" id ="CHD" lang='luu'> <label  for="CHD"><?php get_text("benhmachvanh")?></label></td>
              <td><input type="checkbox" name="HF" id ="HF" lang='luu'>  <label for="HF">Suy tim</label></td>
            </tr>
          </table>
        </fieldset>
      </div>

      <div class="sub_left" style="float:left; width:45%; height: 75px;">
        <div class="tt_yta">
          <fieldset style=" width: 95%; height: 55px" id="yta" >
            <legend style="text-align: left ;color: red"><?php get_text("phannhapdoyta")?></legend>
            <table width="100%">
              <tr>
                <td><label for="SBP"><?php get_text("hatamthu")?></label><input type="text" name="SBP" id ="SBP"lang='luu'> </td>
                <td><label for="High" style="width:55px"><?php get_text("cao")?></label><input type="text" name="High" id ="High"lang='luu'></td>
                <td><label for="HRate" style="width:35px"><?php get_text("hrate")?></label><input type="text" name="HRate" id ="HRate"lang='luu'></td>

              </tr>
              <tr>
                <td> <label for="DBP"><?php get_text("hatamtruong")?></label><input type="text" name="DBP" id ="DBP"lang='luu'></td>
                <td><label for="Weight" style="width:55px"><?php get_text("nang")?></label><input type="text" name="Weight" id ="Weight"lang='luu'> </td>
                <td><label for="PR" style="width:35px"><?php get_text("pr")?></label><input type="text" name="PR" id ="PR"lang='luu'></td>

              </tr>
            </table>
          </fieldset>
        </div>

      </div>
      <div class="sub_right" style=" float:left; width:52%; height: 75px;">
        <div class="tt_tudong">
         <fieldset style=" width: 100%;height: 55px" id="tudong" >
          <legend style="text-align: left ;color: red"><?php get_text("phannhaptudong")?></legend>
          <table width="100%">
            <tr>
              <td><label for="Age" style="width:45px"><?php get_text("tuoi")?></label><input type="text" name="Age" id ="Age"  disabled> </td>
              <td><label for="HDLMol" style="width:45px">HDL</label><input type="text" name="HDLMol" id ="HDLMol" lang='luu'></td>
              <td><label for="CHOMol" style="width:45px">CHOL</label><input type="text" name="CHOMol" id ="CHOMol" lang='luu'></td>
              <td><label for="TG" style="width:70px">Triglyceride </label> <input type="text" name="TG" id ="TG" lang='luu'></td>

            </tr>
            <tr>
              <td><label for="Men" style="width:45px"><?php get_text("nam")?></label><input type="checkbox" name="Men" id ="Men"  disabled></td>
              <td><label for="LDLMol" style="width:45px">LDL</label><input type="text" name="LDLMol" id ="LDLMol" lang='luu'></td>
              <td> <label for="BMI" style="width:45px">BMI</label><input type="text" name="BMI" id ="BMI"></td>
              <td> <label for="Glucoserum" style="width:75px">Glucoserum</label><input type="text" name="Glucoserum" id ="Glucoserum" lang='luu'></td>

            </tr>
          </table>
        </fieldset>
      </div>
    </div>
    <div class="Khoichung" style="float:left;"> 


      <div class="CVD" style="margin-left:2px;" >
        <table width="100%" >
          <tr>
            <td colspan="4" class="n_title">General CardioVascular</td>
          </tr>
          <tr>
            <td><label for="TextAge_CVD" >Age</label> 
            </td>
            <td><input type="text" name="TextAge_CVD" id ="TextAge_CVD"></td>
            <td><label for="TextCHO_CVD">CHO</label> </td>
            <td><input type="text" name="TextCHO_CVD" id ="TextCHO_CVD"></td>
          </tr>
          <tr>
            <td><label for="TextSmoker_CVD">Smoking</label></td>
            <td><input type="text" name="TextSmoker_CVD" id ="TextSmoker_CVD"></td>
            <td><label for="TextHDL_CVD">HDL</label></td>
            <td><input type="text" name="TextHDL_CVD" id ="TextHDL_CVD"></td>
          </tr>
          <tr>
            <td><label for="TextDiabet_CVD">DIABET</label></td>
            <td><input type="text" name="TextDiabet_CVD" id ="TextDiabet_CVD" /></td>
            <td><label for="TextSBP_CVD">SBP/Treated </label></td>
            <td><input type="text" name="TextSBP_CVD" id ="TextSBP_CVD" /></td>
          </tr>
          <tr style="height:32px;">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;"><input  type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_CVD" id ="TextPercent_CVD">
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_CVD"  id ="TextTotal_CVD">
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_CVD" id ="NTextPercent_CVD">
              &nbsp;%&nbsp;

              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_CVD" id ="NTextTotal_CVD">


            </td>
          </tr>
        </table>

      </div>

      <div class="CHF4Y">
       <table width="100%">
        <tr>
          <td colspan="4" class="n_title">Congestive Heart Failure(4Y)</td>
        </tr>
        <tr>
          <td><label for="TextAge_CHF">Age</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextAge_CHF" id ="TextAge_CHF" />
          </span></td>
          <td><label for="TextCHD_CHF">CHD</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextCHD_CHF" id ="TextCHD_CHF" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextBMI_CHF">BMI(Women)</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextBMI_CHF" id ="TextBMI_CHF" />
          </span></td>
          <td><label for="TextLVH_CHF">LVH</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextLVH_CHF" id ="TextLVH_CHF" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextSBP_CHF">SBP</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextSBP_CHF" id ="TextSBP_CHF" />
          </span></td>
          <td><label for="TextValve_CHF">Valve</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextValve_CHF" id ="TextValve_CHF" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextHrate_CHF"> H.Rate</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextHrate_CHF" id ="TextHrate_CHF" />
          </span></td>
          <td><label for="TextDiabet_CHF">DIABET</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextDiabet_CHF" id ="TextDiabet_CHF" />
          </span></td>
        </tr>
        <tr>
          <td colspan="4" style="text-align: center;">
            <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_CHF" id ="TextPercent_CHF" />
            &nbsp;%&nbsp;
            <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_CHF" id ="TextTotal_CHF" />
          </td>
        </tr>
        <tr>
          <td colspan="4" style="text-align: center;">
            <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_CHF" id ="NTextPercent_CHF" />
            &nbsp;%&nbsp;
            <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_CHF" id ="NTextTotal_CHF" />
          </td>
        </tr>
      </table>
    </div>

    <div class="STROKE10Y">

      <table width="100%">
        <tr>
          <td colspan="4" class="n_title">Stroke (10Y)</td>
        </tr>
        <tr>
          <td><label for="TextAge_Stroke">Age</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextAge_Stroke" id ="TextAge_Stroke" />
          </span></td>
          <td><label for="TextCVD_Stroke">CVD</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextCVD_Stroke" id ="TextCVD_Stroke" />
          </span></td>
        </tr>
        <tr>
          <td> <label for="TextSmoker_Stroke">Smoking</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextSmoker_Stroke" id ="TextSmoker_Stroke" />
          </span></td>
          <td><label for="TextAF_Stroke">AF</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextAF_Stroke" id ="TextAF_Stroke" />
          </span></td>
        </tr>
        <tr>
          <td> <label for="TextSBP_Stroke">SBP/Treated</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextSBP_Stroke" id ="TextSBP_Stroke" />
          </span></td>
          <td><label for="TextLVH_Stroke">LVH</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextLVH_Stroke" id ="TextLVH_Stroke" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextDiabet_Stroke">DIABET</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
            <input type="text" name="TextDiabet_Stroke" id ="TextDiabet_Stroke" />
          </span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4" style="text-align: center;">
            <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_Stroke" id ="TextPercent_Stroke" />
            &nbsp;%&nbsp;
            <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_Stroke" id ="TextTotal_Stroke" />
          </td>
        </tr>
        <tr>
          <td colspan="4" style="text-align: center;">
            <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_Stroke" id ="NTextPercent_Stroke" />
            &nbsp;%&nbsp;
            <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_Stroke" id ="NTextTotal_Stroke" />
          </td>
        </tr>
      </table>


    </div>

    <div class="CHD10Y">

      <table width="100%">
        <tr>
          <td colspan="4" class="n_title">Coronary Heart Disease(10Y)</td>
        </tr>
        <tr>
          <td><label for="TextAge_CHD">Age</label></td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextAge_CHD" id ="TextAge_CHD" />
          </span></td>
          <td><label for="TextLDL_CHD">LDL</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextLDL_CHD" id ="TextLDL_CHD" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextSmoker_CHD">Smoking</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextSmoker_CHD" id ="TextSmoker_CHD" />
          </span></td>
          <td><label for="TextSBP_CHD">SBP - DBP</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextSBP_CHD" id ="TextSBP_CHD" />
          </span></td>
        </tr>
        <tr>
          <td><label for="TextDiabet_CHD">DIABET</label> </td>
          <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
            <input type="text" name="TextDiabet_CHD" id ="TextDiabet_CHD" />
          </span></td>
          <td><label for="TextLVH_CHD" style="width:60px">HDL</label>&nbsp;<input type="text" name="TextHDLLDL_CHD" id ="TextHDLLDL_CHD" />
            <span style="margin-top: -2px; ">

            </span></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextHDLCHO_CHD" id ="TextHDLCHO_CHD" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextCHO_CHD">CHO</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextCHO_CHD" id ="TextCHO_CHD" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercentCHD" id ="TextPercentCHD" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_CHD" id ="TextTotal_CHD" />
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercentCHD" id ="NTextPercentCHD" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_CHD" id ="NTextTotal_CHD" />
            </td>
          </tr>
        </table>

        <br>
      </div>
    </div>
    <div class="Khoichung" style="float:left; margin-top:2px;">
      <div class="HardCoronary10Year" style="margin-left:2px;"  >    
        <table width="100%">
          <tr>
            <td colspan="4" class="n_title">Hard Coronary Heart Disease</td>
          </tr>
          <tr>
            <td><label for="TextAgeP" >Age</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
              <input type="text" name="TextAgeP" id ="TextAgeP" />
            </span></td>
            <td> <label for="TextSBPAndTreatedP">SBP/Treated</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
              <input type="text" name="TextSBPAndTreatedP" id ="TextSBPAndTreatedP" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextAgeSmokerP">Smoking</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
              <input type="text" name="TextAgeSmokerP" id ="TextAgeSmokerP" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="TextAgeCholesterolP">CHO</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
              <input type="text" name="TextAgeCholesterolP" id ="TextAgeCholesterolP" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="TextHDLLevelP">HDL</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px;">
              <input type="text" name="TextHDLLevelP" id ="TextHDLLevelP" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercentCoronary10YearMen"  id ="TextPercentCoronary10YearMen" />
              &nbsp;%&nbsp;
              <input  type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TexTTotalCoronary10Year" id ="TexTTotalCoronary10Year" />
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercentCoronary10YearMen" id ="NTextPercentCoronary10YearMen" /> 
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTexTTotalCoronary10Year" id ="NTexTTotalCoronary10Year" />
            </td>
          </tr>
        </table>
      </div>

      <div class="RCHD2Y">

        <table width="100%">
          <tr>
            <td colspan="4" class="n_title">Recuring Coronary Herat Disease(2Y)</td>
          </tr>
          <tr>
            <td><label for="TextAge_RCHD">Age</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextAge_RCHD" id ="TextAge_RCHD" />
            </span></td>
            <td><label for="TextSBP_RCHD">SBP</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSBP_RCHD" id ="TextSBP_RCHD" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextSmoker_RCHD">Smoking</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSmoker_RCHD" id ="TextSmoker_RCHD" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="TextDiabet_RCHD">DIABET</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextDiabet_RCHD" id ="TextDiabet_RCHD" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="TextCHOHDL_RCHD">CHO-HDL</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextCHOHDL_RCHD" id ="TextCHOHDL_RCHD" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_RCHD" id ="TextPercent_RCHD" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_RCHD" id ="TextTotal_RCHD" />
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_RCHD" id ="NTextPercent_RCHD" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_RCHD" id ="NTextTotal_RCHD" />
            </td>
          </tr>
        </table>

      </div>
      <div class="AF">

        <table width="100%" >
          <tr>
            <td colspan="4" class="n_title">Atrial  Fibrillation</td>
          </tr>
          <tr>
            <td><label for="TextAge_AF">Age</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextAge_AF" id ="TextAge_AF" />
            </span></td>
            <td><label for="TextMurmur_AF">Murmur</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextMurmur_AF" id ="TextMurmur_AF" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextBMI_AF">BMI</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextBMI_AF" id ="TextBMI_AF" />
            </span></td>
            <td><label for="TextHF_AF">HF</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextHF_AF" id ="TextHF_AF" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextSBP_AF">SBP</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSBP_AF" id ="TextSBP_AF" />
            </span></td>
            <td><label for="TextTreated_AF">Treat/Un</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextTreated_AF" id ="TextTreated_AF" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextPR_AF">PR</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextPR_AF" id ="TextPR_AF" />
            </span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_AF" id ="TextPercent_AF" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_AF" id ="TextTotal_AF" />
            </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_AF" id ="NTextPercent_AF" />
              &nbsp;%&nbsp;
              <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_AF" id ="NTextTotal_AF" />
            </td>
          </tr>
        </table>

      </div>
      <div class="IC" >
        <table width="100%">
          <tr>
            <td colspan="4" class="n_title"  border="0" cellpadding="0" cellspacing="0"> Intermittent Claudication(4Y)</td>
          </tr>
          <tr>
            <td><label for="TextAge_IC">Age</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextAge_IC" id ="TextAge_IC" />
            </span></td>
            <td><label for="TextSBP_IC">SBP</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSBP_IC" id ="TextSBP_IC" />
            </span></td>
          </tr>
          <tr>
            <td><label for="TextSmoker_IC">Smoking(n)</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSmoker_IC" id ="TextSmoker_IC" />
            </span></td>
            <td><label for="TextDiabet_IC">DIABET</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextDiabet_IC" id ="TextDiabet_IC" />


            </span></td>
          </tr>
          <tr>
            <td><label for="TextCHO_IC">CHO</label> </td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextCHO_IC" id ="TextCHO_IC" />
            </span></td>

            <td><label for="TextSex_IC">Sex</label></td>
            <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
              <input type="text" name="TextSex_IC" id ="TextSex_IC" />
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><label for="TextCVD_IC">CVD</label> </td>
              <td><span style="margin-left: 5px;margin-right: 2px; margin-top: 2px; ">
                <input type="text" name="TextCVD_IC" id ="TextCVD_IC" />
              </span></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: center;">
                <input  type="text" style="   width: 50px ; background: #FFC3C3; text-align: right;" name="TextPercent_IC" id ="TextPercent_IC" />
                &nbsp;%&nbsp;
                <input type="text" style=" width: 50px ; background: #FFC3C3; text-align: right;" name="TextTotal_IC" id ="TextTotal_IC" />
              </td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: center;">
                <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextPercent_IC" id ="NTextPercent_IC" />
                &nbsp;%&nbsp;
                <input type="text" style=" width: 50px ;background: #b8ec79; text-align: right;" name="NTextTotal_IC" id ="NTextTotal_IC" />
              </td>
            </tr>
          </table>
        </div>

      </div>

      <br><br>&nbsp;<br>
    </div>      <!-- end left_col -->   
    <div class="ui-widget-content  thongtin_thai ui-layout-center right_col">
      <div class="sub_right_top">
                 <!--  <div class="rtop1">
                    <label for="Chandoan">Mô tả</label>
                  </div>
                    <div class="rtop2">
                    <textarea rows="15" style="width: 430px" id="Chandoan">Chẩn đoán</textarea>
                  </div> -->
                  <fieldset id="cdoan" style=" width: 90%;padding-bottom: 1px;">
                    <legend style="text-align: left ;color: blue">Chẩn đoán</legend>
                    <div class="rtop2">
                      <textarea rows="15" style="width: 100%" id="Chandoan"></textarea>
                    </div> 
                  </fieldset >




                </div>
                
                <div class="sub_right_bottom">
                 <!--  <div class="rbottom1">
                    <label for="Dieutri">Kết luận</label>
                  </div>
                    <div class="rbottom2">
                    <textarea rows="15" style="width: 430px" id="Dieutri">Điều trị</textarea>
                  </div> -->
                  <fieldset id="dtri" style=" width: 90%;padding-bottom: 1px;">
                    <legend style="text-align: left ;color: blue">Điều trị</legend>
                    <div class="rbottom2">
                      <textarea rows="15" style="width: 100%" id="Dieutri"></textarea>
                    </div> 
                  </fieldset >
                </div>
              </div> <!-- end right_col -->  
            </div><!--//submain -->              
          </div>




        </body>
        </html>
        <script type="text/javascript">
var _id_luotkham=[];// có thể có nhiều lượt khám
var _id_loaikham=[];// có thể có nhiều loại khám
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var id_benhnhan;
var tenloaikham;
var keys=[];
var values=[];

var id_kham_focus;
/*var giothuchien;
var giohoantat;*/
var ID_Framingham;




var cd1  ; //'CVD
var cd2   ;//'CHF
var cd3   ;//'Stroke
var cd4   ;//'CHD
var cd5  ;//'HCHD
var cd6  ; //'RCHD
var cd7   ;//'AF
var cd8  ; //'IC
var str_dt_fra="";

var chA0;
var ch2;
var ch3;
var ch4;
var ch51;
var ch52;
var ch53;
var ch54;
var ch55;
var ch6b2;
var ch6b1;
var ch63;
var ch6a6;
var ch6a5;
var ch6a4;
var ch71;
var ch72;
var ch8;
var ch9;
var ch102;
var ch101;



var tch0;
var tch2;
var tch3;
var tch4;
var tch51;
var tch52;
var tch53;
var tch54;
var tch55;
var tch6b2;
var tch6b1;
var tch63;
var tch6a6;
var tch6a5;
var tch6a4;
var tch71;
var tch72;
var tch8;
var tch9;
var tch102;
var tch101;

var myArray_dieutri = [];

var str_dt_fra="";



$(document).ready(function() {



  openform_shortcutkey(); 
  window.nhanvien_complete=0;
  window.nhanvien1_complete=0;
  window.nhanvien2_complete=0;
  
  create_combobox('#nhanvien', '#nhanvien1', ".data_combo_bacsy", "#data_combo_bacsy", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
  create_combobox('#chuandoan', '#chuandoan1', ".data_combo_bacsy2", "#data_combo_bacsy2", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');  

  
  $('#sua').button();
  $('#luu').button();
  $('#xemin').button();
 // $('#dong').button();
 $('#dathuchien').button();
 $('#hoantat').button();
 $('#boqua').button();
 $('#boqua').hide();
 $('#tinhchandoan').button();
 $('#laylaidulieu').button();
 
 $('#xemin').click(function(){
	 $.cookie("in_status", "print_preview"); 
   dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=Framingham&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'Framingham');
   $(".frame_u78787878975f").css("width","793px");
 });





 load_select();





 $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
  $( ".patient_info" ).html( data );

  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");  
  ma_benhnhan=$('.profile_container:nth-child(4)').text() ;

});


 $("#panel_main").fadeIn(100); 

 resize_control();



/*                                 //Men TotalCVD và phầntrăm
      var TotalCVD=0;
                      //  $("#TextTotal_CVD").val(TotalCVD);
      $('.CVD-General-CardioVascular').find(':input[type=text]').each(function()
                                { 
        if((!isNaN(this.value))&&(this.value!="")){      
            TotalCVD+=parseFloat(this.value); 
        }
      
      })
                       // $("#TextTotal_CVD").val(TotalCVD);
                          //console.log(sum)      
                              
                        });*/



//lay table framingham điều trị tạm







  $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_Framingham_DieuTri_All",
    function( data ) {
      //getFram_DT=data;
  var re;
      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){

          var tam1_cls=val[i]["cell"];


           switch(tam1_cls[1])
{
case "ch0":tch0=tam1_cls[0]+ "\n";
 break;
case "ch2":tch2=tam1_cls[0]+ "\n";
 break;
 case "ch3":tch3=tam1_cls[0]+ "\n";
 break;
  case "ch4":tch4=tam1_cls[0]+ "\n";
 break;
  case "ch51":tch51=tam1_cls[0]+ "\n";
 break;
   case "ch52":tch52=tam1_cls[0]+ "\n";
 break;
   case "ch53":tch53=tam1_cls[0]+ "\n";
 break;
   case "ch54":tch54=tam1_cls[0]+ "\n";
 break;
   case "ch55":tch55=tam1_cls[0]+ "\n";
 break;
   case "ch6b2":tch6b2=tam1_cls[0]+ "\n";
 break;
   case "ch6b1":tch6b1=tam1_cls[0]+ "\n";
 break;
   case "ch63":tch63=tam1_cls[0]+ "\n";
 break;
   case "ch6a6":tch6a6=tam1_cls[0]+ "\n";
 break;
   case "ch6a5":tch6a5=tam1_cls[0]+ "\n";
 break;
   case "ch6a4":tch6a4=tam1_cls[0]+ "\n";
 break;
   case "ch71":tch71=tam1_cls[0]+ "\n";
 break;
   case "ch72":tch72=tam1_cls[0]+ "\n";
 break;
   case "ch8":tch8=tam1_cls[0]+ "\n";
 break;
    case "ch9":tch9=tam1_cls[0]+ "\n";
 break;
    case "ch102":tch102=tam1_cls[0]+ "\n";
 break;
    case "ch101":tch101=tam1_cls[0]+ "\n";
 break;

}





             }



        });   
    }); 








$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_Framingham&idbenhnhan="+<?= $_SESSION["ThongTinBenhNhan"]["ID"] ?>,
  function( data ) {
    data_luotkham=data;

    var tam1_cls="";
    $.each( data, function( key, val ) {     
      for(i=0;i<val.length;i++){

        var tam1_cls=val[i]["cell"];

        _id_luotkham.push(tam1_cls[13]);       
        _id_loaikham.push(tam1_cls[3]);
        _id_luotkham_non_unique.push(tam1_cls[13]);
        _id_kham.push(val[i]["id"]);         
      }
      _id_kham=_id_kham.reverse();
      _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
      _id_loaikham=_id_loaikham.reverse();
      _id_luotkham=$.unique(_id_luotkham);
       // ID_Framingham=tam1_cls[48]
       load_complete();  

        //alert(ID_Framingham)     ;

      }); 
  });


function Framingham_GetData() 
{

 $.get( "pages.php?module=web_services&function=framingham2&id_kham="+id_kham_focus+"&id_form=12&action=index", 
  function( data ) { 
   // alertObject(data);

   _fara=data.split(":");
   for(i=0;i<_fara.length-2;i++){
    _fara1=_fara[i].split(";");
    keys[i]=_fara1[1];
    values[_fara1[1]]=_fara1[0];
  }
  
  DO_Framingham();
  loaitruCVD10();

  loaitruCHF(); 
  loaitruStroke();
  loaitruCHD10();
  loaitruHCHD10();
  loaitruRCHD2Y();
  loaitruAF() ;
  loaitruIC() ;
  ChandoanNC();
  hddieutri();

});  
}




$(window).resize(function() {    

  resize_control();  
});

$(function() {
  $( "#left_col #first" ).button({
    text: false,
    icons: {
      primary: "ui-icon-seek-first"
    }
  })
  .click(function() {
    navigator_load("first","first");

  });
  $( "#left_col #last" ).button({
    text: false,
    icons: {
      primary: "ui-icon-seek-end"
    }
  })
  .click(function() {
    navigator_load("end","first");

  }); 
  $( "#left_col #next" ).button({
    text: false,
    icons: {
      primary: "ui-icon-seek-next"
    }
  })
  .click(function() {
    navigator_load(1,"first");       
  });  
  $( "#left_col #prev" ).button({
    text: false,
    icons: {
      primary: "ui-icon-seek-prev"
    }
  })
  .click(function() {
    navigator_load(-1,"first");

  });
  $( "#open_template" ).button({
    text: false,
    icons: {
      primary: "ui-icon-triangle-1-s"
    }
  })
  .click(function(e) {
   e.stopPropagation();   
   $("#DM_template_container").fadeIn(200);
   $("#template_title").focus();      
 });
  $( "#add_template" ).button({
    text: false,
    icons: {
      primary: "ui-icon-plus"
    }
  })
  .click(function() {

  });
  $( "#add_chuandoan" ).button({
    text: false,
    icons: {
      primary: "ui-icon-plus"
    }
  })
  $("#cancel").click(function(){
    $("#dialog-form").dialog("close");
  });
  $("#xoamota").click(function(){
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


$("#laylaidulieu").click(function(){
  laydulieu();

});

$("#sua").click(function(){


  dis_all("hien");
  $('#sua').button( {disabled:true});
  $('#luu').button( {disabled:false});
  $('#tinhchandoan').button( {disabled:false});
  $('#laylaidulieu').button( {disabled:false});
  $("#sua").hide();
  $('#boqua').show();

  $('.nhanvien_button').button( {disabled:false});
  $( "#nhanvien" ).attr("disabled",false);
  $( "#chuandoan" ).attr("disabled",false);


});


$("#boqua").click(function(){
  dis_all("an");
  $("#sua").show();
  $('#sua').button( {disabled:false});
  $('#boqua').hide();
  $('#luu').button( {disabled:true});
  $('#tinhchandoan').button( {disabled:true});
  $('#laylaidulieu').button( {disabled:true});
});


$("#dathuchien").click(function(){
 _id_trangthai="DaThucHien";
 dis_all("an");
 $("#id_trangthai").html("Đã thực hiện");
 $('#dathuchien').button( {disabled:true});
 $('#sua').button( {disabled:false});
 $('#luu').button( {disabled:true});
 $( "#nhanvien" ).attr("disabled",true);
 $('#boqua').hide();
 $('#sua').show();

           //thongtin_chidinh
           var giothuchien2= $( "#giothuchien" ).text();
           phancach = "";
           i = 0;
           dataToSend = '{';
           $('.tt_bacsy,.tt_yta,.tt_tudong,.thongtin_chidinh').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {

            if ($(this).attr("lang") == "luu")  {

              if($(this).is(':checkbox'))
              {
               if ($(this).prop('checked')==true){ 
                 dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(1)   ;
               }
               else
               {
                 dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(0)   ;
               }
               
             }
             else 
             {
              dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
            }

          }
          phancach = ",";

        });
           dataToSend += phancach + '"id_kham":"' + id_kham_focus + '"';

           dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';

           dataToSend += phancach + '"ID_Framingham":"' +ID_Framingham+ '"';
          //dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';

          dataToSend += '}';

          dataToSend = jQuery.parseJSON(dataToSend);
          alertObject(dataToSend);
          $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
          .done(function( gridData ) { 
          })
          tooltip_message("Đã thực hiện");

        });
$("#hoantat").click(function(){
  _id_trangthai="Xong";
  dis_all("an");
  $("#id_trangthai").html("Đã hoàn tất");
  $('#dathuchien').button( {disabled:true});
  $('#hoantat').button( {disabled:true});
  $('#sua').button( {disabled:false});
  $('#luu').button( {disabled:true});
  $('.nhanvien_button').button( {disabled:true});
  $('.chuandoan_button').button( {disabled:true});
  $( "#nhanvien" ).attr("disabled",true);
  $( "#chuandoan" ).attr("disabled",true);
  $('#boqua').hide();
  $('#sua').show();


       //var giohoantat2= $( "#giohoantat" ).text();
       phancach = "";
       i = 0;
       dataToSend = '{';
       $('.tt_bacsy,.tt_yta,.tt_tudong,.thongtin_chidinh').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {

         if ($(this).attr("lang") == "luu")  {

          if($(this).is(':checkbox'))
          {
           if ($(this).prop('checked')==true){ 
             dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(1)   ;
           }
           else
           {
             dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(0)   ;
           }

         }
         else 
         {
          dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
        }

      }
      phancach = ",";

    });
       dataToSend += phancach + '"id_kham":"' + id_kham_focus + '"';

       dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';

       dataToSend += phancach + '"ID_Framingham":"' +ID_Framingham+ '"';

       dataToSend += '}';

       dataToSend = jQuery.parseJSON(dataToSend);
       alertObject(dataToSend);
       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
       .done(function( gridData ) {  

       })
       tooltip_message("Đã hoàn tất");

     });






$('#luu').click(function ()
{

  phancach = "";
  i = 0;
  dataToSend = '{';
  $('.tt_bacsy,.tt_yta,.tt_tudong').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {

    if ($(this).attr("lang") == "luu")  {

      if($(this).is(':checkbox'))
      {
       if ($(this).prop('checked')==true){ 
         dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(1)   ;
       }
       else
       {
         dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(0)   ;
       }

     }
     else 
     {
      dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
    }

  }
  phancach = ",";

});
  dataToSend += phancach + '"id_kham":"' + id_kham_focus + '"';
  dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
  var cdoan=$('#Chandoan').val();
    var dtri=$('#Dieutri').val();

  dataToSend += phancach + '"cdoan":' + JSON.stringify(cdoan)   ;
  dataToSend += phancach + '"Dieutri":' + JSON.stringify(dtri)   ;
   dataToSend += phancach + '"chuoiDieutri":' + JSON.stringify(str_dt_fra)   ;



  dataToSend += '}';
  
  window.datalocalToSend = jQuery.parseJSON(dataToSend);

  luu();  


  $('#luu').button( {disabled:true});
  $('#boqua').hide();
  $('#sua').show();
  $('#sua').button( {disabled:false});
  $('.template_title_button').button( {disabled:true});
  $('.chuandoan_button').button( {disabled:true});
  $('.nhanvien_button').button( {disabled:true});
  $( "#nhanvien" ).attr("disabled",true);
  $( "#chuandoan" ).attr("disabled",true);


});






phanquyen();
var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
eventer(messageEvent,function(e) {

},false);      






$("#tinhchandoan").click(function(){

  $('.tt_yta,.tt_tudong').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {

   if($(this).val() == '')
   {
    alert('Chưa có dữ lệu '+ this.name + ' Có thể nhấn nút lấy lại dữ liệu để cập nhật ');
    $(this).css("background-color","orange");  
  }


});
  $( "#luu" ).click();

  //luu();

  Framingham_GetData();
   tooltip_message("Đã tính toán lại theo dữ liệu mới nhất");


}); 






});

function navigator_load(_value,_click){
  // Framingham_GetData();
  if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
    return false; 
  }
  var tam_cls=""; 
  if(_value=="first"){
    navigator_count=0;  
  }else if(_value=="end"){     
    navigator_count=_id_luotkham.length-1;
  }else{
    navigator_count+=parseInt(_value);
  }
  var _mota="";   
  $.each( data_luotkham, function( key, val ) {          
    for(i=0;i<val.length;i++){

      var tam1_cls=val[i]["cell"];

      if(_id_luotkham[navigator_count]==tam1_cls[13]){


        var k=tam1_cls[0];
        tam_cls+= '<div id="'+val[i]["id"]+'" style="color:#4AC4F3;font-weight: bold;font-size:13px;" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'"><b>'+k+'</b></div>';
        
        $("#ngay_kham").html(tam1_cls[2]);         
        $("#id_trangthai").html(tam1_cls[7]);
      }


    }
    $("#left_col div").html(tam_cls); 
  });
  //alert id_kham;
  
  loaikham_click();
  if(_click=="first"){
    $("#left_col div div:first-child").click();

  }
  $("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);  
 // alert(id_kham[navigator_count+1];

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
    function loaikham_click(){
      $.each( data_luotkham, function( key, val ) {

        $("#left_col div div").click(function(e) {

          $('#boqua').hide();
          $('#sua').show();
          for(i=0;i<val.length;i++){
            tam=val[i]["id"];  
            _id_kham
         // alert(tam)   ;
         var tam1_cls=val[i]["cell"]; 
         tam1=$(this).attr("id");  
         if(tam==tam1){

           $("#nguoi_chidinh").val(val[i]["cell"][3]);
           $("#ngaychidinh").val(val[i]["cell"][2]);
           $("#giohentra").val(val[i]["cell"][15]);
           tenloaikham=val[i]["cell"][1]; 
           
           id_kham_focus=tam;







$.get( "pages.php?module=web_services&function=framingham2&id_kham="+id_kham_focus+"&id_form=12&action=index", 
  function( data ) { 
   // alertObject(data);

   _fara=data.split(":");
   for(i=0;i<_fara.length-2;i++){
    _fara1=_fara[i].split(";");
    keys[i]=_fara1[1];
    values[_fara1[1]]=_fara1[0];
  }
  
  DO_Framingham();
  loaitruCVD10();

  loaitruCHF(); 
  loaitruStroke();
  loaitruCHD10();
  loaitruHCHD10();
  loaitruRCHD2Y();
  loaitruAF() ;
  loaitruIC() ;
  ChandoanNC();
  hddieutri();

});  

























           
           ID_Framingham=tam1_cls[48];

           

           id_loaikham=val[i]["cell"][3];
            // Người thực hiện
            if(val[i]["cell"][11])
              setval('#nhanvien','#nhanvien1','#data_combo_bacsy',val[i]["cell"][11]);

            else
              setval('#nhanvien','#nhanvien1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);

          // BS chẩn đoán
          if(val[i]["cell"][8])
            setval('#chuandoan','#chuandoan1','#data_combo_bacsy',val[i]["cell"][8]);
          else
            setval('#chuandoan','#chuandoan1','#data_combo_bacsy',<?=$_SESSION['user']['id_user']?>);

          $("#center_col div").html(val[i]["cell"][1]);   

          $("#edit_by").show();
          _id_trangthai=tam1_cls[7]; 
         //  _huthtuoc=tam1_cls[16]; 


         $("#Chandoan").val(tam1_cls[5]);
         $("#Dieutri").val(tam1_cls[6]);
         $("#giothuchien").text(val[i]["cell"][10]);                      
         $("#giohoantat").text(val[i]["cell"][12]);


         if(val[i]["cell"][9]!=null)
         {
          $("#nguoisua").text(val[i]["cell"][9]);
          $("#ngaygiosua").text(val[i]["cell"][10]);
        }
        else $("#edit_by").hide();     

          //Chi tiet Framingham
          if(tam1_cls[16]==1)
          { 
            $("#Smoker").prop("checked", true);}
            else 
              {$("#Smoker").prop("checked", false);}


            if(tam1_cls[16]==1)
            { 
              $("#Smoker").prop("checked", true);}
              else 
                {$("#Smoker").prop("checked", false);
            }

            $("#CigsOnDate").val(tam1_cls[17]);
  //$("#CVD").val(tam1_cls[18]);

  if(tam1_cls[28]==1)
  { 
    $("#CVD").prop("checked", true);}
    else 
      {$("#CVD").prop("checked", false);
  }

  if(tam1_cls[29]==1)
  { 
    $("#Valve").prop("checked", true);}
    else 
      {$("#Valve").prop("checked", false);
  }
  if(tam1_cls[34]==1)
  { 
    $("#DIABET").prop("checked", true);}
    else 
      {$("#DIABET").prop("checked", false);
  }

  if(tam1_cls[27]==1)
  { 
    $("#AF").prop("checked", true);}
    else 
      {$("#AF").prop("checked", false);
  }    
  if(tam1_cls[35]==1)
  { 
    $("#Treated").prop("checked", true);}
    else 
      {$("#Treated").prop("checked", false);
  }
  if(tam1_cls[40]==1)
  { 
    $("#IC").prop("checked", true);}
    else 
      {$("#IC").prop("checked", false);
  }     

  if(tam1_cls[37]==1)
  { 
    $("#Murmur").prop("checked", true);}
    else 
      {$("#Murmur").prop("checked", false);
  }           

  if(tam1_cls[31]==1)
  { 
    $("#CHD").prop("checked", true);}
    else 
      {$("#CHD").prop("checked", false);
  }   

  if(tam1_cls[32]==1)
  { 
    $("#LVH").prop("checked", true);}
    else 
      {$("#LVH").prop("checked", false);
  } 
  if(tam1_cls[30]==1)
  { 
    $("#HF").prop("checked", true);}
    else 
      {$("#HF").prop("checked", false);
  }                 
        //----------Thông tin nhập do y tá

        $("#SBP").val(tam1_cls[25]);
        $("#DBP").val(tam1_cls[33]);
        $("#High").val(tam1_cls[43]);
        $("#Weight").val(tam1_cls[44]);
        $("#HRate").val(tam1_cls[26]);
        $("#PR").val(tam1_cls[42]);
      //-----------Thông tin nhập do y tá


      //---Thông tin nhập tự động
      $("#Age").val(tam1_cls[46]);

      if(tam1_cls[45]==1)
      { 
        $("#Men").prop("checked", true);}
        else 
          {$("#Men").prop("checked", false);}

        $("#HDLMol").val(tam1_cls[20]);
        $("#LDLMol").val(tam1_cls[21]);
        $("#CHOMol").val(tam1_cls[19]);
        $("#TG").val(tam1_cls[24]);
        $("#Glucoserum").val(tam1_cls[41]);
        $("#BMI").val(tam1_cls[47]);



        //  Kiểm tra trạngh thái
        if(_id_trangthai=="DangCho" || _id_trangthai=="DangKham")
        {
         dis_all("hien");
         $("#id_trangthai").html("Đang chờ");
         $('#sua').button( {disabled:true});
         $('#luu').button( {disabled:false});
         $('#dathuchien').button( {disabled:false});
         $('#hoantat').button( {disabled:false});
         $('#tinhchandoan').button( {disabled:false});
         $('#laylaidulieu').button( {disabled:false});  
         $('.chuandoan_button').button( {disabled:false}); 
         $('.nhanvien_button').button( {disabled:false});   

       }


       if(_id_trangthai=="DaThucHien"){
        $("#id_trangthai").html("Đã thực hiện");
        $('#sua').button( {disabled:false});
        $('#luu').button( {disabled:true});
        $('#dathuchien').button( {disabled:true});
        $('#hoantat').button( {disabled:false});
        $('#tinhchandoan').button( {disabled:true});
        $('#laylaidulieu').button( {disabled:true});  
        $('.nhanvien_button').button( {disabled:true});
        $('.chuandoan_button').button( {disabled:false}); 


      }

      if(_id_trangthai=="Xong"){
        $("#id_trangthai").html("Đã hoàn tất");
        $('#sua').button( {disabled:false});
        $('#luu').button( {disabled:true});
        $('#dathuchien').button( {disabled:true});
        $('#hoantat').button( {disabled:true});
        $('#tinhchandoan').button( {disabled:true});

        $('#laylaidulieu').button( {disabled:true});     
        $('#Chandoan').attr("disabled", "disabled");
        $('#Dieutri').attr("disabled", "disabled");
        $('.chuandoan_button').button( {disabled:true}); 
        $('.nhanvien_button').button( {disabled:true}); 

      }



    } 
  }

        var tamthoilathe= stt.split(";");
        for (i = 0; i <tamthoilathe.length; i++) 
        {

          check=tamthoilathe[i].split(":");
          //console.log(check[1]);
          if($("#nguoisua").text()==check[0]){ //alert(check[0]);
            $("#nguoisua").text(check[1]);
          }
          if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
            $("#nguoi_chidinh").val(check[1]);
          }
          
        }
        
 
        var ii=0;        
        for(i=0;i<_id_kham.length;i++){
          if(_id_loaikham[i]==id_loaikham){                    
                 
            if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
              id_kham=_id_kham[i]

              break;
            }
            ii++;            
          }
        }

     });
});



}


function load_select(){
  window.stt = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText; 

}
function reload(){
  $('#nhanvien').combobox('reload');
  $('#chuandoan').combobox('reload');
}
function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
  }  

  $( "#dialog-form" ).dialog({
    autoOpen: false,
    height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
    modal: true,
    open: function(event,ui){
      $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
      $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 

              },
              buttons: {
              }
            });
  $( "#dialog-form2" ).dialog({
    autoOpen: false,
    height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
    modal: true,
    open: function(event,ui){
      $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(22)).toFixed(0) );
      $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(20)).toFixed(0) );


    },
    buttons: {
    }
  });
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

  function load_complete(){
    if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
      setTimeout(load_complete,50);
      return;
    }

    navigator_load("end","first");

  }


  function resize_control(){

    $(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
    $(".td1").css("width",100+"px");
    $("#left_col").css("width",$(window).width()/2-12+"px");
    $("#right_col").css("width",$(window).width()/2+1+"px"); 
    $("#panel_main").css("height",$(window).height()-141+"px");


    $(".left_col").css("width",$("#sub_main").width()/2+150+"px");
    $(".right_col").css("width",$("#sub_main").width()/2-160+"px");
    $(".right_col").css("height",$(".left_col").height()+"px");
    $(".sub_right_top,.sub_right_bottom").css("height",$(".right_col").height()/2+"px");
    $(".sub_right_top,.sub_right_bottom").css("width",$(".right_col").width()+"px");
    $("#rtop2,#rbottom2").css("width",$(".right_col").width()-$(".rtop1").width()+"px");
    $("#Chandoan,#Dieutri").css("width",$(".right_col").width()-30+"px");
  }


  function DO_Framingham(){

   for(i=0;i<=keys.length-1;i++){
    if($("#"+keys[i]).attr('type')=="checkbox"){
      if(values[keys[i]]==1){         
        $("#"+keys[i]).prop("checked", true);   
      }      
    }   
    if($("#"+keys[i]).attr('type') =="text"){           
      $("#"+keys[i]).val(values[keys[i]]);       
    }    
  }  


}
function dis_all(tam){
  //alert(tam)
  if(tam=="an"){
   $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
    $(this).attr("disabled",true);
  });


 }
 if(tam=="hien")
 {
   $('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
   
     if( $(this).attr('id')!='Age'&&$(this).attr('id')!='Men')
     {
       $(this).attr("disabled",false);
     }
  });

  }
} 


function luu(){
  if(typeof window.datalocalToSend=='undefined'){
    setTimeout(luu,50);
    return;
  }

  if (ID_Framingham==null) 
  {

   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=3',datalocalToSend)
   .done(function( gridData ) {  
    delete window.datalocalToSend;
    reloadform(); 
    tooltip_message("Đã thêm");
  })
 }
 else
 {

  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu&hienmaloi=3',datalocalToSend)
  .done(function( gridData ) {  
    delete window.datalocalToSend;
    reloadform(); 
    tooltip_message("Đã lưu");
  })
}

}


function reloadform(){
  _id_luotkham.splice(0, _id_luotkham.length-1)
  _id_loaikham.splice(0, _id_loaikham.length-1)
  _id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
  _id_kham.splice(0, _id_kham.length-1)
  
  
  $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_Framingham&idbenhnhan="+<?= $_SESSION["ThongTinBenhNhan"]["ID"] ?>,
    function( data ) {
      data_luotkham=data;

      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){

          var tam1_cls=val[i]["cell"];
          
          _id_luotkham.push(tam1_cls[13]);       
          _id_loaikham.push(tam1_cls[3]);
          _id_luotkham_non_unique.push(tam1_cls[13]);
          _id_kham.push(val[i]["id"]);         
        }
        _id_kham=_id_kham.reverse();
        _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
        _id_loaikham=_id_loaikham.reverse();
        _id_luotkham=$.unique(_id_luotkham);
        load_complete();        


      });   
    }); 
}



function laydulieu()
{
  $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_Framingham_Laythongtin&idbenhnhan="+<?= $_SESSION["ThongTinBenhNhan"]["ID"] ?>,
    function( data ) {
      data_luotkham=data;

      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){

          var tam1_cls=val[i]["cell"];
          
          $("#HDLMol").val(tam1_cls[2]);        }
          $("#LDLMol").val(tam1_cls[1]);
          $("#CHOMol").val(tam1_cls[0]);
          $("#TG").val(tam1_cls[3]);
          $("#Glucoserum").val(tam1_cls[4]);



        });   
    }); 
}
function LoaiTru()
{
   //'--------Cac bien chan doan nguy co.Quyet dinh hien thi ra text box de in.

 }
 function gVChk(ele)
 {
  if($(ele).is( ":checked" ))
  {
    return -1;
  }
  else
  {
   return 0;
 }
}
function loaitruCHD10()
{

  if ($("#Age").val() < 30 ||  $("#Age").val()  > 74 || gVChk('#CHD')==-1 ) 
  {
    cd4=0;
    $('#TextAge_CHD').attr("disabled", true);
    $('#TextSmoker_CHD').attr("disabled", true);
    $('#TextDiabet_CHD').attr("disabled", true);
    $('#TextCHO_CHD').attr("disabled", true);

    $('#TextLDL_CHD').attr("disabled", true);
    $('#TextSBP_CHD').attr("disabled", true);
    $('#TextHDLLDL_CHD').attr("disabled", true);
    $('#TextHDLCHO_CHD').attr("disabled", true);





  }
  else
  {
    cd4=1;
    $('#TextAge_CHD').attr("disabled", false);
    $('#TextSmoker_CHD').attr("disabled", false);
    $('#TextDiabet_CHD').attr("disabled", false);
    $('#TextCHO_CHD').attr("disabled", false);

    $('#TextLDL_CHD').attr("disabled", false);
    $('#TextSBP_CHD').attr("disabled", false);
    $('#TextHDLLDL_CHD').attr("disabled", false);
    $('#TextHDLCHO_CHD').attr("disabled", false);

  }
}
function loaitruIC()
{
  if ($("#Age").val() < 45 ||  $("#Age").val()  > 84 || gVChk('#IC')==-1 ) 
  {
    cd8=0;
    $('#TextAge_IC').attr("disabled", true);
    $('#TextSex_IC').attr("disabled", true);
    $('#TextSBP_IC').attr("disabled", true);
    $('#TextSmoker_IC').attr("disabled", true);
    $('#TextCVD_IC').attr("disabled", true);
    $('#TextCHO_IC').attr("disabled", true);
    $('#TextDiabet_IC').attr("disabled", true);

  }
  else
  {
    cd8=1;
    $('#TextAge_IC').attr("disabled", false);
    $('#TextSex_IC').attr("disabled", false);
    $('#TextSBP_IC').attr("disabled", false);
    $('#TextSmoker_IC').attr("disabled", false);
    $('#TextCVD_IC').attr("disabled", false);
    $('#TextCHO_IC').attr("disabled", false);
    $('#TextDiabet_IC').attr("disabled", false);
  }
  
}
function loaitruStroke()
{

  if ($("#Age").val() < 55 ||  $("#Age").val()  > 84 ) 
  {
    cd3=0;
    $('#TextAge_Stroke').attr("disabled", true);
    $('#TextDiabet_Stroke').attr("disabled", true);
    $('#TextSmoker_Stroke').attr("disabled", true);
    $('#TextSBP_Stroke').attr("disabled", true);
    $('#TextCVD_Stroke').attr("disabled", true);
    $('#TextLVH_Stroke').attr("disabled", true);

  }
  else
  {
    cd3=1;
    $('#TextAge_Stroke').attr("disabled", false);
    $('#TextDiabet_Stroke').attr("disabled", false);
    $('#TextSmoker_Stroke').attr("disabled", false);
    $('#TextSBP_Stroke').attr("disabled", false);
    $('#TextCVD_Stroke').attr("disabled", false);
    $('#TextLVH_Stroke').attr("disabled", false);
  }
}
function loaitruHCHD10()
{
    //If Age < 20 Or Age > 79 Or CHD = -1 Or DIABET = -1 Or IC = -1 Then

    if ($("#Age").val() < 20 ||  $("#Age").val()  > 79 ||gVChk('#IC')==-1||gVChk('#DIABET')==-1) 
    {
      cd5=0;
      $('#TextAgeP').attr("disabled", true);
      $('#TextAgeSmokerP').attr("disabled", true);
      $('#TextAgeCholesterolP').attr("disabled", true);
      $('#TextHDLLevelP').attr("disabled", true);
      $('#TextSBPAndTreatedP').attr("disabled", true);


    }
    else
    {
      cd5=1;
      $('#TextAgeP').attr("disabled", false);
      $('#TextAgeSmokerP').attr("disabled", false);
      $('#TextAgeCholesterolP').attr("disabled", false);
      $('#TextHDLLevelP').attr("disabled", false);
      $('#TextSBPAndTreatedP').attr("disabled", false);
    }
  }
  function loaitruRCHD2Y()
  {
    //If Age < 35 Or Age > 74 Or CHD = 0 Then
    if ($("#Age").val() < 35 ||  $("#Age").val()  > 74 ||gVChk('#CHD')==0) 
    {
      cd6 = 0;

      $('#TextAge_RCHD').attr("disabled", true);
      $('#TextDiabet_RCHD').attr("disabled", true);
      $('#TextSmoker_RCHD').attr("disabled", true);
      $('#TextSBP_RCHD').attr("disabled", true);
      $('#TextCHOHDL_RCHD').attr("disabled", true);
      $('#TextSBP_RCHD').attr("disabled", true);
    }
    else
    {
      cd6=1;
      $('#TextAge_RCHD').attr("disabled", false);
      $('#TextDiabet_RCHD').attr("disabled", false);
      $('#TextSmoker_RCHD').attr("disabled", false);
      $('#TextSBP_RCHD').attr("disabled", false);
      $('#TextCHOHDL_RCHD').attr("disabled", false);
      $('#TextSBP_RCHD').attr("disabled", false);

    }
  }
  function loaitruAF()
  {
    //If Age < 45 Or Age > 95 Or AF = -1 Then
    if ($("#Age").val() < 45 ||  $("#Age").val()  > 95 ||gVChk('#AF')==-1) 
    {
      cd7=0;

      $('#TextAge_AF').attr("disabled", true);
      $('#TextBMI_AF').attr("disabled", true);
      $('#TextSBP_AF').attr("disabled", true);
      $('#TextMurmur_AF').attr("disabled", true);
      $('#TextTreated_AF').attr("disabled", true);
      $('#TextPR_AF').attr("disabled", true);
      $('#TextHF_AF').attr("disabled", true);

    }
    else
    {
      cd7=1;

      $('#TextAge_AF').attr("disabled", false);
      $('#TextBMI_AF').attr("disabled", false);
      $('#TextSBP_AF').attr("disabled", false);
      $('#TextMurmur_AF').attr("disabled", false);
      $('#TextTreated_AF').attr("disabled", false);
      $('#TextPR_AF').attr("disabled", false);
      $('#TextHF_AF').attr("disabled", false);
    }
  }
  function loaitruCVD10()
  {


//'TH5: CVD 10 Years(30-74)
if ($("#Age").val() < 30 ||  $("#Age").val()  > 74 ||gVChk('#CVD')==-1) 
{
  cd1 = 0;

  $('#TextAge_CVD').attr("disabled", true);
  $('#TextSmoker_CVD').attr("disabled", true);
  $('#TextDiabet_CVD').attr("disabled", true);
  $('#TextCHO_CVD').attr("disabled", true);
  $('#TextHDL_CVD').attr("disabled", true);
  $('#TextSBP_CVD').attr("disabled", true);

}


else

{
  cd1 = 1;
  $('#TextAge_CVD').attr("disabled", false);
  $('#TextSmoker_CVD').attr("disabled", false);
  $('#TextDiabet_CVD').attr("disabled", false);
  $('#TextCHO_CVD').attr("disabled", false);
  $('#TextHDL_CVD').attr("disabled", false);
  $('#TextSBP_CVD').attr("disabled", false);
}

}
function loaitruCHF()
{

  if ($("#Age").val() < 45 ||  $("#Age").val()  > 95 ||gVChk("#HF")==-1) 
  {

   cd2=0;



   $('#TextAge_CHF').attr("disabled", true);
   $('#TextBMI_CHF').attr("disabled", true);
   $('#TextSBP_CHF').attr("disabled", true);
   $('#TextValve_CHF').attr("disabled", true);
   $('#TextDiabet_CHF').attr("disabled", true);
   $('#TextHrate_CHF').attr("disabled", true);
   $('#TextLVH_CHF').attr("disabled", true);
   $('#TextCHD_CHF').attr("disabled", true);
 }
 else
 {
  cd2=1;
  $('#TextAge_CHF').attr("disabled", false);
  $('#TextBMI_CHF').attr("disabled", false);
  $('#TextSBP_CHF').attr("disabled", false);
  $('#TextValve_CHF').attr("disabled", false);
  $('#TextDiabet_CHF').attr("disabled", false);
  $('#TextHrate_CHF').attr("disabled", false);
  $('#TextLVH_CHF').attr("disabled", false);
  $('#TextCHD_CHF').attr("disabled", false);
}

}
function ChandoanNC()
{
  var nc1 ;
  var nc2 ; 
  var nc3 ; 
  var nc4 ;
  var nc5 ; 
  var nc6 ; 
  var nc7 ; 
  var nc8 ; 

  var tnc1 ; 
  var tnc2 ; 
  var tnc3 ; 
  var tnc4 ; 
  var tnc5 ; 
  var tnc6 ; 
  var tnc7 ; 
  var tnc8 ;

  var xd ;
  xd =  "\n";

// 1***********CVD**************************
if (cd1 == 1 && $("#TextTotal_CVD").val() != "")
{
  nc1 = "-Nguy cơ xuất hiện bệnh lý tim mạch trong 10 năm tới: " +$("#TextPercent_CVD").val()+" %."+ xd +" (Người bình thường là: " +$("#NTextPercent_CVD").val()+ "%)"+"."+ xd +xd

}
else
{
  nc1="";
}

if (cd1==0 && $("#TextTotal_CVD").val()!="")
{
  if (gVChk($('#CVD'))==-1)
  {
    tnc1="-Nguy cơ xuất hiện bệnh lý tim mạch trong 10 năm tới: Không đánh giá được do bệnh nhân hiện đang có bệnh tim mạch."+ xd+xd 
  }
  else
  {
    tnc1="-Nguy cơ xuất hiện bệnh lý tim mạch trong 10 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
  }

}
else
{
  tnc1 = "";
}


//CVD***************************************

//2.**CHF*********************;
//If cd2 = True And TextTotal_CHF <> "Invalid" Then


if (cd2 == 1 && $("#TextTotal_CHF").val() != "")
{

  nc2 = "-Nguy cơ suy tim 4 năm tới: "
  +$("#TextPercent_CHF").val()+" %."+ xd +" (Người bình thường là: " 
    +$("#NTextPercent_CHF").val()+ "%)"+"."+ xd +xd
}
else
{
  nc2="";
}

if (cd2 == 0 && $("#TextTotal_CHF").val() != "")
{

  if (gVChk($('#HF'))==-1)
  {
    tnc2="-Nguy cơ suy tim trong 4 năm tới: Không đánh giá được do bệnh nhân hiện đang có bệnh suy tim."+ xd+xd 
  }
  else
  {
    tnc2="-Nguy cơ suy tim trong 4 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
  }

}
else
{
  tnc2 = ""
}

//3.****************Stroke
if (cd3 == 1 && $("#TextTotal_Stroke").val() != "")
{

  nc3 = "-Nguy cơ đột quỵ trong 10 năm tới: "
  +$("#TextPercent_Stroke").val()+" %."+ xd +" (Người bình thường là: " 
    +$("#NTextPercent_Stroke").val()+ "%)"+"."+ xd +xd
}
else
{
  nc3="";
}

if (cd3== 0 && $("#TextTotal_Stroke").val() != "")
{
  tnc3="-Nguy cơ suy tim trong 4 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd  
}
else
{
  tnc3 = ""
}


  ////4.**CHd*********************;
//If cd2 = True And TextTotal_CHF <> "Invalid" Then


if (cd4 == 1 && $("#TextTotal_CHD").val() != "")
{

  nc4 = "-Nguy cơ bệnh mạch vành trong 10 năm tới: "
  +$("#TextPercentCHD").val()+" %."+ xd +" (Người bình thường là: " 
    +$("#NTextPercentCHD").val()+ "%)"+"."+ xd +xd
}
else
{
  nc4="";
}

if (cd4 == 0 && $("#TextTotal_CHD").val() != "")
{

  if (gVChk($('#CHD'))==-1)
  {
    tnc4="-Nguy cơ bệnh mạch vành trong 10 năm tới: Không đánh giá được do bệnh nhân hiện đang có bệnh mạch vành."+ xd+xd 
  }
  else
  {
    tnc4="-Nguy cơ bệnh mạch vành trong 10 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
  }

}
else
{
  tnc4 = ""
}




//**6**
//5**RCHD********************
if (cd5 == 1 && $("#TextTotal_HCHD").val() != "")
{

  nc5 = "-Nguy cơ nhồi máu cơ tim trong 10 năm tới: "
  +$("#TexTTotalCoronary10Year").val()+" %."+ xd +" (Người bình thường là: " 
    +$("#NTexTTotalCoronary10Year").val()+ "%)"+"."+ xd +xd
}
else
{
  nc5="";
}

if (cd5 == 0 && $("#TextTotal_RCHD").val() != "")
{
  tnc5="-Nguy cơ nhồi máu cơ tim trong 10 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
}
else
{
  tnc5 = ""
}

  //6*RCHD********************
  if (cd6 == 1 && $("#TextTotal_RCHD").val() != "")
  {

    nc6 = "-Nguy cơ bệnh mạch vành tái phát trong 2 năm tới: "
    +$("#TextPercent_RCHD").val()+" %."+ xd +" (Người bình thường là: " 
      +$("#NTextPercent_RCHD").val()+ "%)"+"."+ xd +xd
}
else
{
  nc6="";
}

if (cd6 == 0 && $("#TextTotal_RCHD").val() != "")
{
  if (gVChk($('#CHD'))==0)
  {
    tnc6="-Nguy cơ bệnh mạch vành tái phát trong 2 năm tới: Không đánh giá được do bệnh nhân hiện không mắc bệnh mạch vành."+ xd+xd 
  }
  else
  {
   tnc6="-Nguy cơ bệnh mạch vành tái phát trong 2 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
 }

}
else
{
  tnc6 = ""
}
  //******7**AF**********


  if (cd7 == 1 && $("#TextTotal_AF").val() != "")
  {

    nc7 = "-Nguy cơ xuất hiện rung nhĩ trong 10 năm tới: "
    +$("#TextPercent_AF").val()+" %."+ xd +" (Người bình thường là: " 
      +$("#NTextPercent_AF").val()+ "%)"+"."+ xd +xd
}
else
{
  nc7="";
}

if (cd7 == 0 && $("#TextTotal_AF").val() != "")
{
  if (gVChk($('#AF'))==-1)
  {
    tnc7="-Nguy cơ xuất hiện rung nhĩ trong 10 năm tới: Không đánh giá được do bệnh nhân hiện đang có bệnh rung nhĩ."+ xd+xd 
  }
  else
  {
   tnc7="-Nguy cơ xuất hiện rung nhĩ trong 10 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
 }

}
else
{
  tnc7 = ""
}


 //******8**IC**********


 if (cd8 == 1 && $("#TextTotal_IC").val() != "")
 {

  nc8 = "-Nguy cơ bệnh viêm tắc động mạch chi dưới (Khập khiễng cách hồi) trong 4 năm tới: "
  +$("#TextPercent_IC").val()+" %."+ xd +" (Người bình thường là: " 
    +$("#NTextPercent_IC").val()+ "%)"+"."+ xd +xd
}
else
{
  nc8="";
}

if (cd8 == 0 && $("#TextTotal_IC").val() != "")
{
  if (gVChk($('#IC'))==-1)
  {
    tnc8="-Nguy cơ bệnh viêm tắc động mạch chi dưới (Khập khiễng cách hồi) trong 4 năm tới: Không đánh giá được do bệnh nhân hiện đang có bệnh viêm tắc động mạch chi dưới."+ xd+xd 
  }
  else
  {
   tnc8="Nguy cơ bệnh viêm tắc động mạch chi dưới (Khập khiễng cách hồi) trong 4 năm tới: Không đánh giá được trong độ tuổi này."+ xd+xd 
 }

}
else
{
  tnc8 = ""
}




$("#Chandoan").val(nc1+nc2+nc3+nc4+nc5+nc6+nc7+nc8
  +tnc1+tnc2+tnc3+tnc4+tnc5+tnc6+ tnc7 + tnc8);
}


function hddieutri()
{

var ChuoiTQ ;

//Xóa các phần tử trước khi phân tích
    myArray_dieutri.splice(0,  myArray_dieutri.length);
    str_dt_fra="";
//}



ChuoiTQ = "";
ChuoiTQ_New = "";
var xh;
var sql ;
sql = "select dieutri from framingham_Dieutri where note = "
var xd = "\n"



var MangHienthi = new Array();


 MangHienthi[0] = cd1 //'CVD
 MangHienthi[1] = cd2 //'CHF
 MangHienthi[2]  = cd3 //'Stroke
 MangHienthi[3] = cd4 //'CHD
 MangHienthi[4] = cd5 //'HCHD
 MangHienthi[5] = cd6 //'RCHD
 MangHienthi[6] = cd7 //'AF
 MangHienthi[7] = cd8 //'IC


var MangDuocSoSanh = new Array();
 MangDuocSoSanh[0] = $('#NTextPercent_CVD');
 MangDuocSoSanh[1] =  $('#NTextPercent_CHF');
 MangDuocSoSanh[2] =  $('#NTextPercent_Stroke');
 MangDuocSoSanh[3] =  $('#NTextPercentCHD');
 MangDuocSoSanh[4] =  $('#NTextPercentCoronary10YearMen');
 MangDuocSoSanh[5] =  $('#NTextPercent_RCHD');
 MangDuocSoSanh[6] =  $('#NTextPercent_AF');
 MangDuocSoSanh[7] =  $('#NTextPercent_IC');

var MangDemSoSanh = new Array();

 MangDuocSoSanh[0] = $('#TextPercent_CVD');
 MangDuocSoSanh[1] =  $('#TextPercent_CHF');
 MangDuocSoSanh[2] =  $('#TextPercent_Stroke');
 MangDuocSoSanh[3] =  $('#TextPercentCHD');
 MangDuocSoSanh[4] =  $('#TextPercentCoronary10YearMen');
 MangDuocSoSanh[5] =  $('#TextPercent_RCHD');
 MangDuocSoSanh[6] =  $('#TextPercent_AF');
 MangDuocSoSanh[7] =  $('#TextPercent_IC');

 var showch0=new Boolean();

 for (var i = 0; i <= 7; i++)
  {
   
//console.log(i);
   if (MangDuocSoSanh[i] >= MangDemSoSanh[i] )
   {
     showch0 = true;
   }
    else  
          
         {
            showch0 = false;
            break;
         }
        
              
 }
  if (showch0 == true && gVChk('#Smoker') == 0 && gVChk('#CVD') == 0 && gVChk('#CHD') == 0 && gVChk('#Valve') == 0 && gVChk('#AF') == 0 && gVChk("#IC")==0 && gVChk("#DIABET") == 0 && gVChk("#HF") == 0 && gVChk("#LVH") == 0 && gVChk("#Murmur") == 0 && gVChk("#Treated") == 0  )
     {
        ChuoiTQ_New+=tch0;
        myArray_dieutri.push("tch0");
     }
     else
     {
   
     // ChuoiTQ_New-=tch0;
     }
//2----------------------------

if (gVChk("#Smoker") == -1 )
{
  ChuoiTQ_New+=tch2;
    myArray_dieutri.push("tch2");
}
else
{
 ch0="";
}
////////////////////////////////
//3------------------------
if ($("#SBP").val() >= 140 || $("#DBP").val() >= 90 ||
 gVChk('#Treated') == -1 || gVChk('#DIABET')  == -1 || gVChk('#CVD') == -1 ||
 gVChk('#Murmur')  == -1 || $("#CHOMol") > 5.18 || $("#LDLMol").val()  >= 3.36 || $('#BMI') >= 23 )
{
   //  getFramingHamDT("ch3");

}
else
{
  // ChuoiTQ_New-=tch3;
}
//4************Mọi trường  hợp*********
//getFramingHamDT("ch4");
////////////////////////
//5**************
    //5.5
    if($('#TG').val()>5.7)
    {
  ChuoiTQ_New+=tch5;
  myArray_dieutri.push("tch51");
    }
    else
    {
      ch55="";
    }
    //5.1
    if ($('#TextPercentCHD').val()>20)
    {
     ChuoiTQ_New+=tch51;
         myArray_dieutri.push("tch51");
    }
    
    else
    {
       ch51="";
    }
    //5.2
    if($('#TextPercentCHD').val()>10 && $('#TextPercentCHD').val()<=20)
    {
      ChuoiTQ_New+=tch52;
            myArray_dieutri.push("tch52");
    }
    else
    {
        ch52="";
    }

       //5.3
    if($('#TextPercentCHD').val()>=5 && $('#TextPercentCHD').val()<=10)
    {
        ChuoiTQ_New+=tch53;
               myArray_dieutri.push("tch53");
    }
    else
    {
      ch53="";
    }

     //5.4
    if($('#TextPercentCHD').val()<5)
    {
      ChuoiTQ_New+=tch54;
       myArray_dieutri.push("tch54");
    }
    else
    {
      ch54="";
    }

    //6b2
    //If (CHOMol > 6.22 Or LDLMol > 4.13 Or TG > 2.26 Or bmi > 30 Or DIABET = -1) Then
      if($('#CHOMol').val()>6.22 ||$('#LDLMol').val()>4.13 || $('#TG').val()>2.26 || $('#BMI').val()>30 || gVChk('#DIABET')==-1   )
      {
         // getFramingHamDT("ch6b2");
          ChuoiTQ_New+=tch6b2;
           myArray_dieutri.push("tch6b2");
      }
      else
      {
       ch6b2="";
      }

      //ch6b1
      if(ch6b2!="")
      {
        ch6b1="";
      }
      else
      {
        if ((5.18 <= $('#CHOMol').val() && $('#CHOMol').val() <= 6.22) || (3.36 <= $('#LDLMol').val() && $('#LDLMol').val()  <= 4.13) || (1.7 <= $('#TG').val()  && $('#TG').val()  <= 2.26) || (23 <= $('#BMI').val()  && $('#BMI').val()  <= 30) )
        {
       ChuoiTQ_New+=tch6b1;
             myArray_dieutri.push("tch6b1");
        }
        else
        {
          ch6b1="";
        }
        
      }

      //ch63

      if ($('#SBP').val() >= 140 || $('#DBP').val() >= 90 || gVChk('#gVChk') == -1 || gVChk('#Treated') == -1)
      {
       ChuoiTQ_New+=tch63;
         myArray_dieutri.push("tch63");
      }
      else
      {
          ch63="";
      }

      //ch6a6: có ch66 thì không có 65 và 64
      if( gVChk('#AF') == -1 || gVChk('#DIABET') == -1 || gVChk('#HF') == -1 )
      {
        ChuoiTQ_New+=tch6a6;
         myArray_dieutri.push("tch6a6");
      }
      else
      {
          ch6a6="";

      }

      //ch6a5
      if(ch6a6!="")
      {
          ch6a5="";
      }
      else
      {
           if ($('#CHOMol').val()  > 6.22 || $('#LDLMol').val() > 4.13 ||  $('#TG').val()  > 2.26 ||
            $('#BMI').val() > 30 ||  $('#SBP').val() >= 140 ||  $('#DBP').val() >= 90 || gVChk('#CVD') == -1 || gVChk('#Treated') == -1)
            {
          ChuoiTQ_New+=tch6a5;
           myArray_dieutri.push("tch6a5");
            } 
            else
            {
                ch6a5="";
            }
      }

      //ch6a4

        if (ch6a6 != "" || ch6a5 != "" )
        {
             ch6a4 = "";
        }
        else
        {
              if ((5.18 <= $('#CHOMol').val() && $('#CHOMol').val() <= 6.22) || (3.36 <= $('#LDLMol').val() && $('#LDLMol').val()  <= 4.13) || (1.7 <= $('#TG').val()  && $('#TG').val()  <= 2.26) || (23 <= $('#BMI').val()  && $('#BMI').val()  <= 30) )      
              {
            ChuoiTQ_New+=tch6a4;
            myArray_dieutri.push("tch6a4");
              }
              else
              {
               ch6a4 = "";

              }
          
        }

     //ch72
     //If (CHD = -1 Or HF = -1 Or AF = -1 Or IC = -1 Or Age > 70) Then
     if(gVChk('#CHD')==-1 ||gVChk('#HF')==-1|| gVChk('#AF')==-1||gVChk('#IC')==-1 || $('#Age')>70 )
     {
             ChuoiTQ_New+=tch72;
               myArray_dieutri.push("tch72");
     }
     else
     {
         ch72="";
     }

     //Ch71: nếu có ch72 thì ko xuất hiện
     if(ch72!="")
     {
        ch71="";
     }
     else
     {
      ChuoiTQ_New+=tch71;
   myArray_dieutri.push("tch71");
     }

     //ch8: mọi TH


    ChuoiTQ_New+=tch8;
    myArray_dieutri.push("tch8");

//alert(tch8+ ''+ myArray_dieutri[1]);



     //

     //ch9
      if($('#TextPercentCHD').val()>=10 || $('#Age').val()>60)
      {
    ChuoiTQ_New+=tch9;
       myArray_dieutri.push("tch9");

      }
      else
      {
        ch9="";
      }
     //

     //ch102
       if ($('#TextPercent_CVD').val()>=10 || $('#TextPercent_CVD').val() >= 15 ||  $('#CHOMol').val() >= 6.22 || $('#TG').val()  >= 2.26 || $('#LDLMol').val() >= 4.13) 
       {
   ChuoiTQ_New+=tch102;
       myArray_dieutri.push("tch102");

       }
       else
       {
          ch102="";
       }
       
     //ch101
     if (ch102!="" )
     {
        ch101="";
     }
     else
     {
        ChuoiTQ_New+=tch101;
           myArray_dieutri.push("tch101");

     }


////////////////

     //ChuoiTQ= chA0+ch2+ ch3+ch4+ch51;
    // ChuoiTQ = chA0 + ch2 + ch3 + ch4 + 
     // + ch55 + ch6b2 + ch6b1 + ch63 + ch6a6 + ch6a5 + ch6a4 + ch71 + ch72 + ch8 + ch9 + ch102 + ch101

     
    $("#Dieutri").val(ChuoiTQ_New);


// đua vào chuoi để lưu
$.each(myArray_dieutri, function( index, value ) {

str_dt_fra+=value.substring(1,value.length)+';';

});

str_dt_fra=str_dt_fra.substring(0,str_dt_fra.length-1); 

  }
  //  alert(' sđấ'+myArray_dieutri);




function getFramingHamDT(ch)
{

  $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_Framingham_DieuTri&note="+ch,
    function( data ) {
      //getFram_DT=data;
  var re;
      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){

          var tam1_cls=val[i]["cell"];

          //str_dt_fra+=tam1_cls[0]+ "\n";
 
   //$("#Dieutri").val(str_dt_fra);
     
             }
                       switch(ch)
{
case "ch0":chA0=tam1_cls[0]+ "\n";
 break;
case "ch2":ch2=tam1_cls[0]+ "\n";
 break;
 case "ch3":ch3=tam1_cls[0]+ "\n";
 break;
  case "ch4":ch4=tam1_cls[0]+ "\n";
 break;
  case "ch51":ch51=tam1_cls[0]+ "\n";
 break;
 default:
}
   


        });   
    }); 
 // return re;

}




</script>


