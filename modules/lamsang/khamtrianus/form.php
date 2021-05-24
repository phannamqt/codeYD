<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <div id="panel_main">    
        <div class="ui-widget-content ui-layout-west left_col">
             <div id="ketluanchung" class="n_bd">
                 <div class="l_top">
                <label class="n_title mg">KẾT LUẬN CHUNG </label>
                </div>
                <table id="kl" style="width:100%">
                <tr>
                <td>Kết luận: </td>
                <td class="kl1"><textarea id="klc_ketluan"> </textarea> </td>
                <td class="kl2"><label for=""> Phân loại sức khỏe: </label><select> </select></td>
                <td class="kl3"><label for=""> Phân loại thể lực: </label><select> </select> </td>
                </tr>
                </table>
                
             </div>
             <div id="mat" class="n_bd">
                 <div class="l_top">
                <label class="n_title">MẮT </label>
                </div>
                <table id="n_mat">
                 <tr>
                    <td rowspan="2"> <fieldset id="mck">
                        <legend>Mắt có kính</legend>
                        Mắt phải: <input type="text" name="ck_matphai" id="ck_matphai" size="1">/10
                        Mắt trái: <input type="text" name="ck_mattrai" id="ck_mattrai" size="1">/10
                        </fieldset></td>
                    <td rowspan="2"><fieldset id="mkk">
                        <legend>Mắt không kính</legend>
                        Mắt phải: <input type="text" name="kk_matphai" id="kk_matphai" size="1">/10
                        Mắt trái: <input type="text" name="kk_mattrai" id="kk_mattrai" size="1">/10
                        </fieldset>
                     </td>
                	<td>Bác sỹ: </td>
                	<td>
                    <select id="m_bacsy" class="bacsy">
                    
                    </select>
                    </td>
                </tr>
                <tr>
                	<td>Phân loại: </td>
                	<td>
                    <select id="m_phanloai" class="phanloai">
                    
                    </select>
                    </td>
                </tr>
                <tr>
               	 <td colspan="2">Bệnh về mắt: <input type="text" id="m_benhvemat" size="57" ></td>
               	 <td colspan="2">&nbsp;</td>
                </tr>

                </table>
             </div>
             <div id="taimuihong" class="n_bd">
                 <div class="l_top">
                <label class="n_title">TAI - MŨI - HỌNG </label>
                </div>
                 <table  id="tai_mui_hong">
                  <tr>
                    <td rowspan="2">
                    <label for="taimuihong_ghichu"></label>
                    <textarea name="taimuihong_ghichu" id="taimuihong_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="tmh_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="tmh_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="ranghammat" class="n_bd">
             	<div class="l_top">
                <label class="n_title">RĂNG - HÀM - MẶT </label>
                </div>
                 <table  id="tranghammat">
                  <tr>
                    <td rowspan="2">
                    <label for="ranghammat_ghichu"></label>
                    <textarea name="ranghammat_ghichu" id="ranghammat_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="rhm_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="rhm_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="dalieu" class="n_bd">
             <div class="l_top">
                <label class="n_title">DA LIỄU </label>
                </div>
                <table  id="tdalieu">
                  <tr>
                    <td rowspan="2">
                    <label for="dalieu_ghichu"></label>
                    <textarea name="dalieu_ghichu" id="dalieu_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="dalieu_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="dalieu_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="noikhoa" class="n_bd">
                <div class="l_top">
                <label class="n_title">NỘI KHOA </label>
                </div>
                 <table  id="tnoikhoa">
                  <tr>
                    <td rowspan="2">
                    <label for="noikhoa_ghichu"></label>
                    <textarea name="noikhoa_ghichu" id="noikhoa_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="noikhoa_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="noikhoa_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="ngoaikhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">NGOẠI KHOA </label>
                </div>
                 <table  id="tngoaikhoa">
                  <tr>
                    <td rowspan="2">
                    <label for="ngoaikhoa_ghichu"></label>
                    <textarea name="ngoaikhoa_ghichu" id="ngoaikhoa_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="ngoaikhoa_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="ngoaikhoa_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="sanphukhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">SẢN PHỤ KHOA </label>
                </div>
             		<table  id="tsanphukhoa">
                  <tr>
                    <td rowspan="2">
                    <label for="sanphukhoa_ghichu"></label>
                    <textarea name="nsanphukhoa_ghichu" id="sanphukhoa_ghichu" cols="66" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="sanphukhoa_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="sanphukhoa_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center right_col">
            <div id="tuanhoan" class="n_bd">
                 <div class="l_top">
                <label class="n_title ">TUẦN HOÀN </label>
                </div>
                
                 <table  id="ttuanhoan">
                  <tr>
                    <td rowspan="2">
                    <label for="tuanhoan_ghichu"></label>
                    <textarea name="tuanhoan_ghichu" id="tuanhoan_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="tuanhoan_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="tuanhoan_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="hohap" class="n_bd">
                 <div class="l_top">
                <label class="n_title">HÔ HẤP </label>
                </div>
                
                 <table  id="thohap">
                  <tr>
                    <td rowspan="2">
                    <label for="hohap_ghichu"></label>
                    <textarea name="hohap_ghichu" id="hohap_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="hohap_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="hohap_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="tieuhoa" class="n_bd">
                 <div class="l_top">
                <label class="n_title">TIÊU HÓA </label>
                </div>
                 <table  id="ttieuhoa">
                  <tr>
                    <td rowspan="2">
                    <label for="tieuhoa_ghichu"></label>
                    <textarea name="tieuhoa_ghichu" id="tieuhoa_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="tieuhoa_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="sanphukhoa_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="thantietnieusinhduc" class="n_bd">
             	<div class="l_top">
                <label class="n_title">THẬN - TIẾT NIỆU - SINH DỤC </label>
                </div>
                 <table  id="tthantietnieusinhduc">
                  <tr>
                    <td rowspan="2">
                    <label for="thantietnieusinhduc_ghichu"></label>
                    <textarea name="thantietnieusinhduc_ghichu" id="thantietnieusinhduc_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="thantietnieusinhduc_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="thantietnieusinhduc_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="thankinh" class="n_bd">
             <div class="l_top">
                <label class="n_title">THẦN KINH </label>
                </div>
                <table  id="tthankinh">
                  <tr>
                    <td rowspan="2">
                    <label for="thankinh_ghichu"></label>
                    <textarea name="thankinh_ghichu" id="thankinh_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="thankinh_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="thankinh_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="tamthan" class="n_bd">
                <div class="l_top">
                <label class="n_title">TÂM THẦN </label>
                </div>
                 <table  id="ttamthan">
                  <tr>
                    <td rowspan="2">
                    <label for="tamthan_ghichu"></label>
                    <textarea name="tamthan_ghichu" id="tamthan_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="tamthan_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="tamthan_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="hevandong" class="n_bd">
                 <div class="l_top">
                <label class="n_title">HỆ VẬN ĐỘNG </label>
                </div>
                 <table  id="thevandong">
                  <tr>
                    <td rowspan="2">
                    <label for="hevandong_ghichu"></label>
                    <textarea name="hevandong_ghichu" id="hevandong_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="hevandong_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="hevandong_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
             <div id="noitiet" class="n_bd">
                 <div class="l_top">
                <label class="n_title">NỘI TIẾT </label>
                </div>
             		<table  id="tnoitiet">
                  <tr>
                    <td rowspan="2">
                    <label for="noitiet_ghichu"></label>
                    <textarea name="noitiet_ghichu" id="noitiet_ghichu" cols="52" rows="2"></textarea></td>
                    <td>Bác sỹ: </td>
                    <td><select id="noitiet_bacsy" class="bacsy">
                                    
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Phân loại: </td>
                    <td><select id="noitiet_phanloai" class="phanloai">
                                    
                        </select>
                    </td>
                  </tr>
                </table>
             </div>
        </div>
</body>
</html>