<?php
	$map=$_GET['map'];
	$sql="select * from loaiphong where MaLP='$map'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);

 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlyloaiphong/xuly.php" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="MaLP" value="<?php echo $row['MaLP'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Phòng</label>
                    <input type="text" class="form-control" name="TenLP" value="<?php echo $row['TenLP'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Giá Phòng</label>
                    <input type="text" class="form-control" name="Gia" value="<?php echo $row['Gia'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tối Đa Người Ở</label>
                    <select name="ToiDaNguoiO" class="form-control" id="ToiDaNguoiO">
                        <option selected><?php echo $row['ToiDaNguoiO'] ?></option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                    </select>
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ảnh Phòng</label>
                    <input type="file" class="form-control" name="AnhPhong" value="<?php echo $row['AnhPhong'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Miêu Tả</label>
                    <input type="text" class="form-control" name="MieuTa" value="<?php echo $row['MieuTa'] ?>"> 
                 </div>
              </div><hr>
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>