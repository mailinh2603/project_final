<div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlyloaiphong/xuly.php" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tên Loại Phòng</label>
                    <input type="text" class="form-control" name="TenLP" value="">
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Giá</label>
                    <input type="text" class="form-control" name="Gia" value="">
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Tối Đa Người Ở</label>
                    <input type="text" class="form-control" name="ToiDaNguoiO" value="">
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Miêu Tả</label>
                    <input type="text" class="form-control" name="MieuTa" value="">
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Ảnh Phòng</label>
                    <input type="file" class="form-control" name="AnhPhong" value="">
                 </div>
              </div><hr>
   
              <button type="sub" name="action" value="them" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Cập Nhập</button>
           </form></div>
         </div>
       </div>