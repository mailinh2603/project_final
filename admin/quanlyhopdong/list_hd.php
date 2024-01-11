
<?php
	$sql="SELECT hd.MaDK,hd.MaSV,sv.HoTen,p.TenPhong,hd.noidung,hd.NgayBD,hd.NgayKT,hd.TinhTrang from hopdong hd,sinhvien sv,phong p where hd.MaSV=sv.MaSV and sv.MaPhong=p.MaPhong and hd.TinhTrang='Đã thanh toán'";
	$rs=mysqli_query($conn,$sql);
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã Đăng Ký</th>
            <th>Mã Sinh Viên</th>
            <th>Họ Tên Sinh Viên</th>
            <th>Phòng</th>
            <th>Nội dung</th>
            <th>Ngày Bắt Đầu</th>
            <th>Ngày Kết Thúc</th>
            <th>Tình Trạng</th>
            <th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
<?php
	
	while ($row=mysqli_fetch_array($rs)){ ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['MaDK'] ?></td>
                        <td><?php echo $row['MaSV'] ?></td>
                        <td><?php echo $row['HoTen'] ?></td>
                        <td><?php echo $row['TenPhong'] ?></td>
                        <td><?php echo $row['noidung'] ?></td>
                        <td><?php echo $row['NgayBD'] ?></td>
                        <td><?php echo $row['NgayKT'] ?></td>
                        <td><?php echo $row['TinhTrang'] ?></td>
                        <td><a href="index.php?action=quanlyhopdong&view=sua&map=<?php echo  $row['MaDK']?>" >Cập Nhập </a></td>
                        <td><a href="quanlyhopdong/xuly.php?action=xoa&mp=<?php echo $row['MaDK']; ?>" >Xóa</a></td>
                    </tr>
                </tbody>
            <?php }?>

</table>
<hr class="badge-danger">
<?php 


?>