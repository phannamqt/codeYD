
	<?php
        $data= new SQLServer;
		$id_return=0;
        $params = array($_GET["idnhanvien"],$_GET["LoaiXacNhan"],array($id_return, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));		
        $store_name="{call GD2_DmNhanVien_VanTay_insert(?,?,?)}";
        $get_thongtinbenhnhan=$data->query( $store_name,$params);
	
	
    ?>
<script type="text/javascript">
    $(document).ready(function() {
		if($.cookie("in_status")=="print_preview"){
			print_preview();
		}else if($.cookie("in_status")=="print_direct"){
			print_direct(10,10);
		}
	})
</script>