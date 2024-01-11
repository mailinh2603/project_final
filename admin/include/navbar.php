<div class="mauxanh col-2">
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
              Quản Lý
            </div>
             <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sanpham" aria-expanded="true" aria-controls="sanpham">
                <i class="fas fa-fw fa-cog"></i>
                <span>Quản Lý Đăng Ký Phòng</span> 
              </a>
              <div id="sanpham" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class=" py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Quản Lý Sản Phẩm</h6>-->
                  <a class="collapse-item" href="">Xử Lý Đăng Ký</a>
                  <a class="collapse-item" href="">danh sách đã xử lý</a>
                  
                </div>

              </div>
           </li>

              <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#phong" aria-expanded="true" aria-controls="phong">
                  <i class="fas fa-poll-h"></i>
                  <span>Quản Lý Phòng</span>
              </a>
              <div id="phong" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                 
                  <a class="collapse-item" href="">Danh sách phòng còn trống</a>
                  <a class="collapse-item" href="">Danh sách phòng full</a>
                  <a class="collapse-item" href="index.php?action=quanlyphong&view=phong">Xử lí Đ/K phòng</a>
                  <a class="collapse-item" href="index.php?action=quanlyloaiphong&view=loaiphong">Danh sách loại phòng</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#hoadon" aria-expanded="true" aria-controls="hoadon">
                  <i class="fas fa-yen-sign"></i>
                  <span>Quản Lý Tiền Điện Nước</span>
              </a>
              <div id="hoadon" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">          
                  <a class="collapse-item" href="">Thêm tiền điện nước</a>
                </div>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#toa" aria-expanded="true" aria-controls="toa">
                  <i class="fas fa-poll-h"></i>
                  <span>Quản Lý Tòa</span>
              </a>
              <div id="toa" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                 
                  <a class="collapse-item" href="index.php?action=quanlytoa&view=toa">Tòa</a>
                
                </div>
              </div>
            </li>
            </li>
             <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#nhanvien" aria-expanded="true" aria-controls="nhanvien">
                  <i class="fas fa-poll-h"></i>
                  <span>Quản Lý  Nhân Viên</span>
              </a>
              <div id="nhanvien" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="index.php?action=quanlynhanvien&view=nhanvien">Tất cả nhân viên</a>          
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#sinhvien" aria-expanded="true" aria-controls="sinhvien">
                  <i class="fas fa-poll-h"></i>
                  <span>Quản Lý  Sinh Viên</span>
              </a>
              <div id="sinhvien" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="index.php?action=quanlysinhvien&view=sinhvien">Tất cả sinh viên</a>          
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#hopdong" aria-expanded="true" aria-controls="hopdong">
                  <i class="fas fa-poll-h"></i>
                  <span>Quản Lý Hợp Đồng</span>
              </a>
              <div id="hopdong" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="index.php?action=quanlyhopdong&view=hopdong">Tất cả sinh viên</a>          
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#danhmuc1" aria-expanded="true" aria-controls="danhmuc1">
                  <i class="fas fa-poll-h"></i>
                  <span>Báo cáo thống kê</span>
              </a>
              <div id="danhmuc1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                 
                  <a class="collapse-item" href="">Báo cáo thống kê</a>
                
                </div>
              </div>
            </li>
</ul>
</div>