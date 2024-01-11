
<div class="col-10">
    <?php
      if(isset($_GET['action']))
       {
          $action=$_GET['action'];
          switch ($action) 
            {
                case 'quanlytoa':{
                    include('quanlytoa/main.php');
                    break;
                }                    
                case 'quanlyphong':{
                    include('quanlyphong/main.php');
                    break;
                }
                case 'quanlynhanvien':{
                    include('quanlynhanvien/main.php');
                    break;
                }
                case 'quanlysinhvien':{
                    include('quanlysinhvien/main.php');
                    break;
                }
                case 'quanlyhopdong':{
                    include('quanlyhopdong/main.php');
                    break;
                }
                case 'quanlyloaiphong':{
                    include('quanlyloaiphong/main.php');
                    break;
                }
            }
        }
      else 
      {
          include_once('loi.php');
      }

    ?>
  </div>
