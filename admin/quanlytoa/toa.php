
<?php
	$sql="select * from toa";
	$rs=mysqli_query($conn,$sql);
	
?>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã Tòa</th><th>Tên Tòa</th><th>Giới Tính</th><th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
<?php
	
	while ($row=mysqli_fetch_array($rs)) { ?>
	<tbody>
		<tr>
			<td><?php echo $row['MaToa'] ?></td>
            <td><?php echo $row['TenToa'] ?></td>
            <td>
                <?php 
                if($row['GioiTinh']=='1'){
                echo 'Nam';
                }
                else{
                echo 'Nữ';
                }
            ?>
           </td>
			<td><a href="index.php?action=quanlytoa&view=sua&map=<?php echo  $row['MaToa']?>" >Cập Nhập </a></td>
			<td><a href="quanlytoa/xuly.php?action=xoa&mp=<?php echo $row['MaToa']; ?>" >Xóa</a></td>
		</tr>
	</tbody>
<?php }?>
</table>
<hr class="badge-danger">
<?php 


?>