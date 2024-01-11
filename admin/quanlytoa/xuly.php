<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$mk=$_GET['mk'];
      $tk=$_GET['tk'];
      $gt=$_GET['GioiTinh'];
        $sql="update toa set TenToa='$tk', GioiTinh='$gt' where MaToa='$mk'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlytoa&view=toa');
        }
			break;
		  
      case 'xoa':
        $mp=$_GET['mp'];
        $sql="delete from toa where MaToa='$mp'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
          header('location:../index.php?action=quanlytoa&view=toa');
        }
      break;

    case 'them':
      $mk=$_GET['mk'];
      $tk=$_GET['tk'];
      $gt=$_GET['GioiTinh'];
        $sql="insert into toa( MaToa, TenToa, GioiTinh ) values('$mk','$tk','$gt')" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
                  header('location:../index.php?action=quanlytoa&view=toa');
        }
      break;  
		default:
			# code...
			break;
	}
}


?>