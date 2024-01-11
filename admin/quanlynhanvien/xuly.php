<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$MaNV=$_GET['MaNV'];
      $HoTen=$_GET['HoTen'];
      $NgaySinh=$_GET['NgaySinh'];
      $MatKhau=$_GET['MatKhau'];
      $Quyen=$_GET['Quyen'];
        $sql="update nhanvien set HoTen='$HoTen', NgaySinh='$NgaySinh',MatKhau='$MatKhau',Quyen='$Quyen' where MaNV='$MaNV'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlynhanvien&view=nhanvien');
        }
			break;
		  
      case 'xoa':
        $mp=$_GET['mp'];
        $sql="delete from nhanvien where MaNV='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlynhanvien&view=nhanvien');
        }
      break;

    case 'them':
      $MaNV=$_GET['MaNV'];
      $HoTen=$_GET['HoTen'];
      $NgaySinh=$_GET['NgaySinh'];
      $MatKhau=$_GET['MatKhau'];
      $Quyen=$_GET['Quyen'];
        $sql="insert into nhanvien(MaNV,HoTen,NgaySinh,MatKhau,Quyen) values('$MaNV','$HoTen','$NgaySinh','$MatKhau','$Quyen')" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
                  header('location:../index.php?action=quanlynhanvien&view=nhanvien');
        }
      break;  
		default:
			# code...
			break;
	}
}


?>