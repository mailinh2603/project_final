<?php 
	//include_once('../../config/database.php');
    $tenmaychu='localhost';
    $tentaikhoan='root';
    $pass='';
    $csdl='qlktx';
    $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
    mysqli_select_db($conn,$csdl);
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'sinhvien':
				?><h4>Quản Lý Sinh Viên  </h4><hr> <?php 
					include_once('list_sv.php');
				break;
			
			case 'sua':
				?><h4>Quản Lý Sinh Viên -> Cập nhập</h4><hr> <?php 
					include_once('sua.php');
				break;	
			
			
			default:
					
				break;
		}
	}


?>