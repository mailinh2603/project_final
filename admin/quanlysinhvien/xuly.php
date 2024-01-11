<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$MaSV=$_GET['MaSV'];
      $HoTen=$_GET['HoTen'];
      $GioiTinh=$_GET['GioiTinh'];
      $NgaySinh=$_GET['NgaySinh'];
      $QueQuan=$_GET['QueQuan'];
      $SDT=$_GET['SDT'];
      $CMND=$_GET['CMND'];
      $MaPhong=$_GET['MaPhong'];
        $sql="update sinhvien set HoTen='$HoTen',GioiTinh='$GioiTinh',NgaySinh='$Ngaysinh',QueQuan='$QueQuan',SDT='$SDT',CMND='$CMND',MaPhong='$MaPhong' where MaSV='$MaSV'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlysinhvien&view=sinhvien');
        }
			break;
		  
      case 'xoa':
        $mp=$_GET['mp'];
        $sql="delete from phong where MaPhong='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
            header('location:../index.php?action=quanlysinhvien&view=sinhvien');
        }
      break;

		default:
			# code...
			break;
	}
}


?>