<?php
	$map=$_GET['map'];
	$sql="select * from sinhvien where MaSV='$map'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);

 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlysinhvien/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="MaSV" value="<?php echo $row['MaSV'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail"> Họ Tên </label>
                    <input type="text" class="form-control" name="HoTen" value="<?php echo $row['HoTen'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                 <label for="myPassword">Giới Tính</label>
                    <select class="form-control" name="GioiTinh" >
                        <?php $t=$row['GioiTinh']; $s="select DISTINCT GioiTinh from sinhvien";$rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option <?php  if($kq['GioiTinh']==$t){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq['GioiTinh']; ?>"> <?php if($kq['GioiTinh']=='1'){echo 'Nam';} else {echo 'Nữ';};  ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ngày Sinh</label>
                    <input type="date" class="form-control" name="NgaySinh" value="<?php echo $row['NgaySinh'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Quê Quán</label>
                    <input type="text" class="form-control" name="QueQuan" value="<?php echo $row['QueQuan'] ?>">
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Số điện thoại</label>
                    <input type="text" class="form-control" id="SDT" name="SDT" value="<?php echo $row['SDT'] ?>">
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">CMND</label>
                    <input type="text" class="form-control" id="CMND" name="CMND" value="<?php echo $row['CMND'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Phòng</label>
                    <select class="form-control" name="MaPhong" >
                        <?php 
                           $GT= $row['GioiTinh'];
                           $s="SELECT P.MaPhong,P.TenPhong from phong P inner join toa t on P.MaToa=t.MaToa where t.GioiTinh='$GT'";

                           $rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option  value="<?php  echo $kq['MaPhong']; ?>"><?php  echo $kq['TenPhong']; ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                   
                 </div>
                 
                 
              </div><hr>
   
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>