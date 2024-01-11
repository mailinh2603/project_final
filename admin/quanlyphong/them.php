<div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
           <form class="col-md-12 m-auto" action="quanlyphong/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Phòng</label>
                    <input type="text" class="form-control" name="TenPhong" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Loại Phòng</label>
                    <select class="form-control" name="MaLP" >
                        <?php $s="select MaLP,TenLP from loaiphong";$rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option  value="<?php  echo $kq['MaLP']; ?>"><?php  echo $kq['TenLP']; ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tòa</label>
                    <select class="form-control" name="MaToa" >
                        <?php $s="select * from Toa";$rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option  value="<?php  echo $kq['MaToa']; ?>"><?php  echo $kq['TenToa']; ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tình Trạng</label>
                    <select class="form-control" name="TinhTrang" >
                    			<option  value="trống">Trống</option>
                           <option  value="full">Full</option>
                    </select>
                   
                 </div>
                 
              </div><hr>
   
              <button type="sub" name="action" value="them" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>