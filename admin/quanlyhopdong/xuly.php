<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$MaDK=$_GET['MaDK'];
            $MaSV=$_GET['MaSV'];
            $MaPhong=$_GET['MaPhong'];
            $noidung=$_GET['noidung'];
            $NgayBD=$_GET['NgayBD'];
            $NgayKT=$_GET['NgayKT'];
            $TinhTrang=$_GET['TinhTrang'];
        $sql="update hopdong set noidung='$noidung', NgayBD='$NgayBD',NgayKT='$NgayKT',TinhTrang='$TinhTrang' where MaDK='$MaDK'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlyphong&view=phong');
        }
			break;
		  
      case 'xoa':
        $mp=$_GET['mp'];
        $sql="delete from hopdong where MaDK='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlyhopdong&view=hopdong');
        }
      break;

    case 'them':
      $MaPhong=$_GET['MaPhong'];
      $TenPhong=$_GET['TenPhong'];
      $GiaPhong=$_GET['GiaPhong'];
      $TinhTrang=$_GET['TinhTrang'];
      $ToiDaNguoiO=$_GET['ToiDaNguoiO'];
      $LoaiPhong=$_GET['LoaiPhong'];
      $MaToa=$_GET['MaToa'];
      $AnhPhong=$_GET['AnhPhong'];
        $sql="insert into phong( MaPhong,TenPhong,GiaPhong,TinhTrang,ToiDaNguoiO,LoaiPhong,MaToa,AnhPhong) values('$MaPhong','$TenPhong','$GiaPhong','$TinhTrang','$ToiDaNguoiO','$LoaiPhong','$MaToa','$AnhPhong')" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
                  header('location:../index.php?action=quanlyphong&view=phong');
        }
      break;  
		default:
			# code...
			break;
	}
}


?>