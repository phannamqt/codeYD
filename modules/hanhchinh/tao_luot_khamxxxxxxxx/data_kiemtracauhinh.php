<?php
			$huyad = new DB_SELECT();
			$sql = $huyad->sql()
		    ->select("CASE WHEN COUNT(1) > 0 THEN 1 ELSE 0 END AS GiaTri")
		    ->from("GD2_CauHinh_ChuyenKhoa_PLK_KLS AS gchckpk")
		    // ->join("")
		    ->where("gchckpk.ID_PhanLoaiKham = $_POST[id_phanloaikham] AND gchckpk.Id_ChuyenKhoa = $_POST[id_chuyenkhoa] AND gchckpk.Id_LoaiKham IS NOT NULL")
		    // ->groupBy("gchkq.ID_Auto,gchkq.NgayGioHenTraKQ, llv.Ngay, llv.ID_NhanVien, nv.NickName")
		    // ->orderBy("Order BY gchkq.NgayGioHenTraKQ ASC")
		    ->get();
		   echo $sql[0]['GiaTri'];
?>