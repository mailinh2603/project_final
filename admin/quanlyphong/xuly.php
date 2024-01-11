<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':{
      $MaPhong=$_GET['MaPhong'];
      $TenPhong=$_GET['TenPhong'];
      $TinhTrang=$_GET['TinhTrang'];
      $MaLP=$_GET['MaLP'];
      $MaToa=$_GET['MaToa'];
        $sql="update phong set TenPhong='$TenPhong',TinhTrang='$TinhTrang', MaLP='$MaLP',MaToa='$MaToa' where MaPhong='$MaPhong'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlyphong&view=phong');
        }
			break;
    }
     case 'xoa':{///đang lỗi nhé 
        $mp=$_GET['mp'];
        $sql="delete from phong where MaPhong='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlyphong&view=phong');
        }
        
     
    break;
     }   
    case 'them':{
      $TenPhong=$_GET['TenPhong'];
      $TinhTrang=$_GET['TinhTrang'];
      $MaLP=$_GET['MaLP'];
      $MaToa=$_GET['MaToa'];
      $sql="insert into phong(TenPhong,TinhTrang,MaLP,MaToa) values('$TenPhong','$TinhTrang','$MaLP','$MaToa')" ;
      $rs=mysqli_query($conn,$sql);
     
        if($rs){
          header('location:../index.php?action=quanlyphong&view=phong');
        }
      break;  
    }
     
		default:
			# code...
			break;
	}
}


?>