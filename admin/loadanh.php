<?php
header("Content-type: text/html; charset=utf-8");

$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'qlktx';
$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
mysqli_select_db($conn, $csdl);
mysqli_query($conn, "SET NAMES 'UTF8'");

if (isset($_POST['action']) && $_POST['action'] === 'themmoi') {
    $AnhPhong = basename($_FILES['AnhPhong']['name']);
    $target_dir = "./image/";

    $target_file = $target_dir . $AnhPhong;

    if (move_uploaded_file($_FILES['AnhPhong']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO image (image) VALUES ('$AnhPhong')";
        $rs = mysqli_query($conn, $sql);

        if ($rs) {
            echo 'Upload thành công.';
        } else {
            echo 'Lỗi khi thêm vào cơ sở dữ liệu.';
        }
    } else {
        echo 'Lỗi khi tải lên file.';
    }
}
?>

<form class="col-md-12 m-auto" action="" method="GET" enctype="multipart/form-data">
    <div class="form-group col-sm-3">
        <label for="myEmail">Ảnh Phòng :</label>
        <input type="file" id="AnhPhong" name="AnhPhong">
    </div>
    <button type="submit" name="action" value="themmoi" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhật</button>
</form>