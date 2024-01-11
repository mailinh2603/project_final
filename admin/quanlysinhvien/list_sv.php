
<?php
	$sql="select sv.MaSV ,sv.HoTen,sv.GioiTinh,sv.NgaySinh,sv.QueQuan,sv.SDT,sv.CMND,p.TenPhong from sinhvien sv,phong p where sv.MaPhong=p.MaPhong";
	$rs=mysqli_query($conn,$sql);
	
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã Sinh Vien</th>
            <th>Tên Sinh Viên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th>Quê Quán</th>
            <th>Số điện thoại</th>
            <th>CMND</th>
            <th>Phòng</th>
            <th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
<?php
	
	while ($row=mysqli_fetch_array($rs)) { ?>
	<tbody>
		<tr>
			<td><?php echo $row['MaSV'] ?></td>
            <td><?php echo $row['HoTen'] ?></td>
            <td>
                <?php
                if($row['GioiTinh']=='1'){
                echo 'Nam';
                }
                else{
                echo 'Nữ';
                } ?>
            </td>
            <td><?php echo $row['NgaySinh'] ?></td>
            <td><?php echo $row['QueQuan'] ?></td>
            <td><?php echo $row['SDT'] ?></td>
            <td><?php echo $row['CMND'] ?></td>
            <td><?php echo $row['TenPhong'] ?></td>
			<td><a href="index.php?action=quanlysinhvien&view=sua&map=<?php echo  $row['MaSV']?>" >Cập Nhập </a></td>
			<td><a href="quanlysinhvien/xuly.php?action=xoa&mp=<?php echo $row['MaSV']; ?>" >Xóa</a></td>
		</tr>
	</tbody>
<?php }?>
</table>
<hr class="badge-danger">
<?php 


?>