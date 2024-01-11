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
			case 'nhanvien':
				?><h4>Quản Lý Tòa  </h4><hr> <?php 
					include_once('list_nv.php');
                    include_once('them.php');
				break;
			
			case 'sua':
				?><h4>Quản Lý Phòng -> Cập nhập</h4><hr> <?php 
					include_once('sua.php');
				break;		
			default:
					
				break;
		}
	}


?>