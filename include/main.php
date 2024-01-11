
<div class="col-7">
        <?php
        if(isset($_GET['action']))
        {
            $action=$_GET['action'];
            switch ($action) 
                {
                    case 'view':{
                        include('view/phongo.php');
                        break;
                    }
                    case 'gioithieu':{
                        include('view/gioithieu.php');
                        break;
                    }
                    case 'lienhe':{
                        include('view/lienhe.php');
                        break;
                    }
                    case 'login':{
                        include('view/phongo.php');
                        break;
                    }
                    case 'dangky':{
                        include('view/phongo.php');
                        break;
                    }
                
                
                }
            }
            else{
                include_once('body_a.php');
            }
        
        ?>
  </div>
