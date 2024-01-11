<div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlytoa/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mã Tòa</label>
                    <input type="text" class="form-control" name="mk" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Tòa</label>
                    <input type="text" class="form-control" name="tk" value="">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="GioiTinh">Giới tính</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="GioiTinh" name="GioiTinh" value="1">
                      <label class="form-check-label" for="GioiTinh">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="GioiTinh" name="GioiTinh" value="0">
                      <label class="form-check-label" for="GioiTinh">Nữ</label>
                    </div>
                </div>
              </div><hr>
   
              <button type="sub" name="action" value="them" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>