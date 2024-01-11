<?php
	$map=$_GET['map'];
	$sql="select * from phong where MaPhong='$map'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);

 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlyphong/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="MaPhong" value="<?php echo $row['MaPhong'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Phòng</label>
                    <input type="text" class="form-control" name="TenPhong" value="<?php echo $row['TenPhong'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Loại Phòng</label>
                    <select class="form-control" name="MaLP" >
                        <?php $Ttoa=$row['TenLP'];$toa="select MaLP,TenLP from loaiphong";$rs3=mysqli_query($conn,$toa);
                    		while ($kq1=mysqli_fetch_array($rs3)) { ?>
                    			<option <?php if($kq1['TenLP']==$Ttoa){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq1['MaLP']; ?>"><?php  echo $kq1['TenLP']; ?></option>
                    <?php	}

                    ?>
                    </select>
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tòa</label>
                    <select class="form-control" name="MaToa" >
                        <?php $Ttoa=$row['TenToa'];$toa="select * from Toa";$rs3=mysqli_query($conn,$toa);
                    		while ($kq1=mysqli_fetch_array($rs3)) { ?>
                    			<option <?php if($kq1['TenToa']==$Ttoa){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq1['MaToa']; ?>"><?php  echo $kq1['TenToa']; ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tình Trạng</label>
                    <select name="TinhTrang" id="" class="form-control">
                           <option selected><?php echo $row['TinhTrang'] ?></option>
                           <option value="Trống">Trống</option>
                           <option value="Full">Full</option>
                    </select>                 
                 </div>
              </div><hr>
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>