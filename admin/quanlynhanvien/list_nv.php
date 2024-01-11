
<?php
	$sql="select *from nhanvien";
	$rs=mysqli_query($conn,$sql);
	
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã NV</th>
            <th>Họ Tên</th>
            <th>Ngày Sinh</th>
            <th>Mật Khẩu</th>
            <th>Quyền</th>
            <th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
<?php
	
	while ($row=mysqli_fetch_array($rs)) { ?>
	<tbody>
		<tr>
			<td><?php echo $row['MaNV'] ?></td>
            <td><?php echo $row['HoTen'] ?></td>
            <td><?php echo $row['NgaySinh'] ?></td>
            <td><?php echo $row['MatKhau'] ?></td>
            <td><?php echo $row['Quyen'] ?></td>
			<td><a href="index.php?action=quanlynhanvien&view=sua&map=<?php echo  $row['MaNV']?>" >Cập Nhập </a></td>
			<td><a href="quanlynhanvien/xuly.php?action=xoa&mp=<?php echo $row['MaNV']; ?>" >Xóa</a></td>
		</tr>
	</tbody>
<?php }?>
</table>
<hr class="badge-danger">
<?php 


?>