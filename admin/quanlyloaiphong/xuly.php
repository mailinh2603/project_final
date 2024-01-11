<?php 
session_start();
include_once('../../config/database.php');
if(isset($_POST['action'])){
	$action=$_POST['action'];
	switch ($action) {
		case 'sua':{
      $MaLP=$_POST['MaLP'];
      $TenLP=$_POST['TenLP'];
      $Gia=$_POST['Gia'];
      $ToiDaNguoiO=$_POST['ToiDaNguoiO'];
      $MieuTa=$_POST['MieuTa'];
      if ($_POST['action'] === 'sua') {
        $AnhPhong=$_FILES['AnhPhong']['name'];
        $target_dir = "../image/";
        $target_file = $target_dir . $AnhPhong;
        if (move_uploaded_file($_FILES["AnhPhong"]["tmp_name"], $target_file)) {
          $sql="update loaiphong set TenLP='$TenLP', Gia='$Gia',ToiDaNguoiO='$ToiDaNguoiO',MieuTa='$MieuTa',AnhPhong='$AnhPhong' where MaLP='$MaLP'" ;
          $rs=mysqli_query($conn,$sql);
          if($rs){
            header('location:../index.php?action=quanlyloaiphong&view=loaiphong');
          }
        }else{
          $sql="update loaiphong set TenLP='$TenLP', Gia='$Gia',ToiDaNguoiO='$ToiDaNguoiO',MieuTa='$MieuTa' where MaLP='$MaLP'" ;
          $rs=mysqli_query($conn,$sql);
          if($rs){
            header('location:../index.php?action=quanlyloaiphong&view=loaiphong');
          }
        }
      }
			break;
    }
     case 'xoa':{///đang lỗi nhé 
        $mp=$_POST['mp'];
        $sql="delete from loaiphong where MaLP='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlyloaiphong&view=loaiphong');
        }
        
     
    break;
     }   
    case 'them':{
      $TenLP=$_POST['TenLP'];
      $Gia=$_POST['Gia'];
      $ToiDaNguoiO=$_POST['ToiDaNguoiO'];
      $MieuTa=$_POST['MieuTa'];
      //xử lý ảnh
      if ($_POST['action'] === 'them') {
     $AnhPhong=$_FILES['AnhPhong']['name'];
     $target_dir = "../image/";
     $target_file = $target_dir . $AnhPhong;
     if (move_uploaded_file($_FILES["AnhPhong"]["tmp_name"], $target_file)) {
      $sql="insert into loaiphong(TenLP,Gia,ToiDaNguoiO,AnhPhong,MieuTa) values('$TenLP','$Gia','$ToiDaNguoiO','$AnhPhong','$MieuTa')" ;
      $rs=mysqli_query($conn,$sql);
     
        if($rs){
          header('location:../index.php?action=quanlyloaiphong&view=loaiphong');
        }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
     
      }
      break;  
    }
     
		default:
			# code...
			break;
	}
}


?>