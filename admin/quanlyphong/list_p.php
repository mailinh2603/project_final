
<?php
	$sql="SELECT 
    p.MaPhong, p.TenPhong, lp.TenLP, t.TenToa, p.TinhTrang,
    COUNT(sv.MaSV) AS soluongsv, lp.ToiDaNguoiO
    FROM 
        phong p
    JOIN 
        loaiphong lp ON p.MaLP = lp.MaLP
    JOIN 
        toa t ON p.MaToa = t.MaToa
    LEFT JOIN 
        sinhvien sv ON p.MaPhong = sv.MaPhong
    GROUP BY 
        p.MaPhong, p.TenPhong, lp.TenLP, t.TenToa, p.TinhTrang, lp.ToiDaNguoiO;";
        $rs=mysqli_query($conn,$sql);
        
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã Phòng</th>
            <th>Tên Phòng</th>
            <th>Tên Loại Phòng</th>
            <th>Tòa</th>
            <th>Tình Trạng </th>
            <th>Số lượng sinh viên</th>
            <th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
    <tbody>
        <?php 
            while ($row=mysqli_fetch_array($rs)){ 
                ?>
                            <tr>
                                <td><?php echo $row['MaPhong'] ?></td>
                                <td><?php echo $row['TenPhong'] ?></td>
                                <td><?php echo $row['TenLP'] ?></td>
                                <td><?php echo $row['TenToa'] ?></td>
                                <td><?php echo $row['TinhTrang'] ?></td>
                                <td><?php echo $row['soluongsv']. "/" .$row['ToiDaNguoiO'] ?></td>
                                <td><a href="index.php?action=quanlyphong&view=sua&map=<?php echo  $row['MaPhong']?>" >Cập Nhập </a></td>
                                <td><a href="quanlyphong/xuly.php?action=xoa&mp=<?php echo $row['MaPhong']; ?>" >Xóa</a></td>
                            </tr>
                    <?php }
                ?>
    
</table>
<hr class="badge-danger">
