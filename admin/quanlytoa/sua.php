<?php
	$map=$_GET['map'];
	$sql="select * from toa where MaToa='$map'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);

 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlytoa/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="mk" value="<?php echo $row['MaToa'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Khu</label>
                    <input type="text" class="form-control" name="tk" value="<?php echo $row['TenToa'] ?>">
                   
                 </div>
                 
                 <div class="form-group col-sm-3">
                    <label for="myPassword">Giới Tính</label>
                    <select class="form-control" name="GioiTinh" >
                        <?php $t=$row['GioiTinh']; $s="select DISTINCT GioiTinh from Toa";$rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option <?php  if($kq['GioiTinh']==$t){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq['GioiTinh']; ?>"> <?php if($kq['GioiTinh']=='1'){echo 'Nam';} else {echo 'Nữ';};  ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                 </div>
              </div><hr>
   
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>