<?php
	$map=$_GET['map'];
	$sql="SELECT hd.MaDK,hd.MaSV,sv.HoTen,p.MaPhong,p.TenPhong,hd.noidung,hd.NgayBD,hd.NgayKT,hd.TinhTrang from hopdong hd,sinhvien sv,phong p where hd.MaSV=sv.MaSV and sv.MaPhong=p.MaPhong and hd.TinhTrang='Đã thanh toán' and hd.MaSV='$map'";
    $rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
 ?>
 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlyhopdong/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <input hidden class="form-control" name="MaDK" value="<?php echo $row['MaDK'] ?>">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mã Sinh Viên</label>
                    <input type="text" class="form-control" name="MaSV" value="<?php echo $row['MaSV'] ?>">     
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" value="<?php echo $row['HoTen'] ?>">
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Phòng</label>
                    <select class="form-control" name="MaPhong" >
                        <?php $Ttoa=$row['TenPhong'];$toa="select * from Phong";$rs3=mysqli_query($conn,$toa);
                    		while ($kq1=mysqli_fetch_array($rs3)) { ?>
                    			<option <?php if($kq1['TenPhong']==$Ttoa){ echo 'selected="selected"' ;} ?> value="<?php  echo $kq1['MaPhong']; ?>"><?php  echo $kq1['TenPhong']; ?></option>
                    <?php	}

                    ?>
                    </select>
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Nội dung</label>
                    <select class="form-select" aria-label="Default select example" id="noidung" name="noidung">
                        <option selected><?php echo $row['noidung'] ?></option>
                        <option value="hợp đồng 6 tháng">hợp đồng 6 tháng</option>
                        <option value="hợp đồng 12 tháng">hợp đồng 12 tháng</option>
                    </select>
                 </div>


                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ngày Bắt Đầu</label>
                    <input type="date" class="form-control" name="NgayBD" value="<?php echo $row['NgayBD'] ?>">
                   
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ngày Kết Thúc</label>
                    <input type="date" class="form-control" name="NgayKT"  value="<?php echo $row['NgayKT'] ?>">
                 </div>

                 <div class="form-group col-sm-3">
                    <label for="myEmail">Loại Phòng</label>
                    <select class="form-select" aria-label="Default select example" id="TinhTrang" name="TinhTrang">
                        <option selected><?php echo $row['TinhTrang'] ?></option>
                        <option value="Đã thanh toán">Đã thanh toán</option>
                        <option value="Chờ thanh toán">Chờ thanh toán</option>
                        <option value="Đang xử lý">Đang xử lý</option>
                    </select>
                   
                 </div>

              </div><hr>
   
              <button type="sub" name="action" value="sua" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>