<div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlynhanvien/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mã Nhân Viên</label>
                    <input type="text" class="form-control" name="MaNV" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ngày Sinh</label>
                    <input type="date" class="form-control" name="NgaySinh" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mật Khẩu</label>
                    <input type="text" class="form-control" name="MatKhau" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Quyền</label>
                    <select class="form-select" aria-label="Default select example" id="Quyen" name="Quyen">
                        <option value="1">nhân viên</option>
                        <option value="2">admin</option>
                    </select>  
                 </div>
              </div><hr>
   
              <button type="sub" name="action" value="them" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>