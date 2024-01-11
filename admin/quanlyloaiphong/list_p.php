
<?php
	$sql="SELECT MaLP,TenLP,Gia,ToiDaNguoiO,AnhPhong,MieuTa from loaiphong";
        $rs=mysqli_query($conn,$sql);
        
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã Loại Phòng</th>
            <th>Tên Loại Phòng</th>
            <th>Giá</th>
            <th>Tối Đa Người Ở</th>
            <th>Ảnh Phòng</th>
            <th>Miêu Tả</th>
            <th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
    <tbody>
        <?php 
            while ($row=mysqli_fetch_array($rs)){ 
                ?>
                            <tr>
                                <td><?php echo $row['MaLP'] ?></td>
                                <td><?php echo $row['TenLP'] ?></td>
                                <td><?php echo $row['Gia'] ?></td>
                                <td><?php echo $row['ToiDaNguoiO'] ?></td>
                                <td>
                                    <?php
                                    $image=  $row['AnhPhong'] ;
                                    $image_url="./image/".$image;
                                    if(is_file($image_url)){
                                        echo '<img src="'.$image_url.'" alt="Ảnh Phòng" height="80" width="100">';
                                    }
                                    else{
                                        echo 'không có ảnh';
                                    }
                                    ?>
                                    
                                </td>
                                <td><?php echo $row['MieuTa'] ?></td>
                                <td><a href="index.php?action=quanlyloaiphong&view=sua&map=<?php echo  $row['MaLP']?>" >Cập Nhập </a></td>
                                <td><a href="quanlyloaiphong/xuly.php?action=xoa&mp=<?php echo $row['MaLP']; ?>" >Xóa</a></td>
                            </tr>
                    <?php }
                ?>
    
</table>
<hr class="badge-danger">
