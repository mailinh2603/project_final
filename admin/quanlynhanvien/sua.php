<?php
	$map=$_GET['map'];
	$sql="select * from nhanvien where MaNV='$map'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);

 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlynhanvien/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="MaNV" value="<?php echo $row['MaNV'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" value="<?php echo $row['HoTen'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ngày Sinh</label>
                    <input type="text" class="form-control" name="NgaySinh" value="<?php echo $row['NgaySinh'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mật Khẩu</label>
                    <input type="text" class="form-control" name="MatKhau" value="<?php echo $row['MatKhau'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myPassword">Quyền</label>
                    <select class="form-control" name="Quyen" >
                        <?php $t=$row['Quyen']; $st="select DISTINCT Quyen from nhanvien";$rs1=mysqli_query($conn,$st);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option <?php  if($kq['Quyen']==$t){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq['Quyen']; ?>"> <?php if($kq['Quyen']=='1'){echo 'Nhân Viên';} else {echo 'Admin';};  ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                 </div>
              </div><hr>
   
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>