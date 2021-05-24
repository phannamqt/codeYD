<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style>
  body {
    counter-reset: section;
    overflow:auto;
  }

  #content {
    display: table;
  }

  #pageFooter {
    display: table-footer-group;
  }
  .bold{
     font-weight: bold;
  }


  th {
   border: 1px solid black    !important;
   color: #096;
   font-family: Arial, sans-serif;
 }
 thead tr td {
  border: 1px solid black    !important;
}
td {
  vertical-align: top;
}
pre{
  font-family: Arial, sans-serif;
  padding: 0px 2px;
  margin: 0px;
  text-align: left;
  vertical-align: top;
  max-width: 360px;

  white-space: pre-wrap;       /* Since CSS 2.1 */
  white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
  white-space: -pre-wrap;      /* Opera 4-6 */
  white-space: -o-pre-wrap;    /* Opera 7 */
  word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
</style>


<?php 

$data= new SQLServer;//tao lop ket noi SQL
$params1 = array($_GET['iddotkham']);//tao param cho store
        $store_name1="{call spMedicalreport_SelectAllByID_GoiKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $result= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc

        ?>

        <div id="wrapper" style="margin-left:40px">
         <div id="page_1" class="page" style="page-break-after: always; padding-top:5px">
           <div class="n_top">
            <table width="97%" border="0"  cellpadding="0" cellspacing="0" style="border:none; ">
              <tr>
               <td width="" rowspan="2"  style="border:none">
                <table width="100%" style="border:none">
                  <tr>
               <!--     <td rowspan="3" align="center"  style="border:none">
                      <span class="bold" style="font-size:14px;">FAMILY</span><img width="30px" height="50px"  src="./modules/report/lamsang/img/theodoichucnangsong/logo_mau.png"   />
                    </td>-->
                    <td align="center" colspan="4"  style="border:none">
                      <label class="bold"><?php echo $_SESSION["com"]["TenBenhVien"]?></label><br />
                    </td>
                  </tr>
                  <tr>
                    <td align="left"  style="border:none">Địa chỉ:</td>
                    <td align="right"  style="border:none"> <label style="font-size:13px"><?php echo $_SESSION["com"]["DiaChi"]?></label></td>
                  </tr>
                  <tr>
                    <td align="left"  style="border:none">Điện thoại:</td>
                    <td align="right"  style="border:none">   <label style="font-size:13px"><?php echo $_SESSION["com"]["SoDT"]?></label></td>
                  </tr>
                </table>
              </td>
              <td colspan="2" class="bold" align="center"  style="border:none"><label style="font-size: 35px; ">KẾT QUẢ KHÁM SỨC KHỎE</label></td>
            </tr>
            <tr>
              <td colspan="2" align="center"  style="border:none"><label style="font-size:28px;color:#096"><strong><?php echo ($_GET["tencongty"])?></strong></label></td>
            </tr>
          </table>
        </div>

        <div id="content">

          <br>
          <div id="pageFooter"> </div>


          <table width="95%" id="tb_center"  cellpadding="1" cellspacing="1" border="1" >
            <thead  >
             <tr>
               <th width="auto">STT</th>
              <th width="auto" >Họ tên</th>
              <th  width="auto">Tuổi</th>
              <th 	width="auto">Giới</th>
              <th width="auto">Ngày khám</th>
              <th width="auto">Kết quả</th>
              <th width="auto">Xử trí</th>
              <th align="center" width="auto">Xếp loại</th>
            </tr>
          </thead>

          <tbody>

           <?php


           $stt=0;
           $countLoai1=0;
           $countLoai2=0;
           $countLoai3=0;
           $countLoai4=0;
           $countLoai5=0;

           foreach ($result as $row) {
            $stt++;

            if($row['PL']==1){
              $countLoai1++;
            }
            if($row['PL']==2){
              $countLoai2++;
            }
            if($row['PL']==3){
              $countLoai3++;
            }
            if($row['PL']==4){
              $countLoai4++;
            }
            if($row['PL']==5){
              $countLoai5++;
            }
            ?>
            <tr>
              <td align="center"><?=$stt?></td>
              <td align="left"><?=$row['HoTenBN']?></td>
              <td align="center"><?=$row['Tuoi']?></td>
              <td align="center"><?=$row['GioiTinh']?></td>
              <td align="center"><?=$row['NgayKham']?></td>
              <td align="left"><pre><?=$row['KetLuan']?></pre></td>
              <td align="left"><pre><?=trim($row['HuongDanDieuTri'])?></pre></td>
              <td align="center"><strong>
                <?=$row['PL']?>
              </strong></td>
            </tr>
            <?php 
          }
          ?>
        </tbody></table>

        <div>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;border:none">

            <tr>
              <td colspan="2">
                <strong>
                  <em>
                    <?php
                    echo 'Tổng danh sách ' . $stt.' người.';

                    ?>
                  </em>
                  </strong></td>
                  
                 <td colspan="6">
                <strong>
                  <em>
                   <p style="text-align: right;width:100%">
                     <?php echo 'Đà Nẵng, ngày ' . date("d").' tháng ' . date("m").' năm '. date("Y");?>
                     </p>
                    <p style="text-align: right;padding-right: 70px;">Bác sỹ kết luận</p>
                 	 
                  </em>
                  </strong></td>  
                  
                </tr>
                
                
                
                
                <tr>
                  <td width="12%">Xếp Loại 1:</td>
                  <td width="88%">
                    <?php echo ($countLoai1.', chiếm '.round(($countLoai1/$stt*100),2). '%.') ?>

                  </td>
                </tr>
                <tr>
                  <td>Xếp Loại 2:</td>
                  <td>
                   <?php echo ($countLoai2.', chiếm '.round(($countLoai2/$stt*100),2). '%.') ?>
                 </td>
               </tr>
               <tr>
                <td>Xếp Loại 3:</td>
                <td>
                 <?php echo ($countLoai3.', chiếm '.round(($countLoai3/$stt*100),2). '%.') ?>
               </td>
             </tr>
             <tr>
              <td>Xếp Loại 4:</td>
              <td>
               <?php echo ($countLoai4.', chiếm '.round(($countLoai4/$stt*100),2). '%.') ?>


             </td>
           </tr>
           <tr>
            <td>Xếp Loại 5:</td>
            <td>
              <?php echo ($countLoai5.', chiếm '.round(($countLoai5/$stt*100),2). '%.') ?>


            </td>
          </tr>
       
              </table>

            </div>

           
          </div>
          <script type="application/javascript">
            $(document).ready(function() {
           
					<?php
				if($types=="excel"){
					file_put_contents('excel/temp.html', ob_get_contents());
					$exp=new ExportToExcel();
					$exp->exportWithPage("excel/temp.html","MedicalReportList.xls");
				}
			?>
           });
         </script>