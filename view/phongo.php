<?php
    include_once('config/database.php');
	$sql="SELECT MaLP,TenLP,Gia,MieuTa,AnhPhong from loaiphong";
    $rs=mysqli_query($conn,$sql);?>

    <hr class="badge-danger">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
            while ($row=mysqli_fetch_array($rs)){ 
                ?>
            <div class="col">
            <div class="card">
                <?php
                        $image=  $row['AnhPhong'] ;
                        $image_url="./admin/image/".$image;
                        if(is_file($image_url)){
                            echo '<img src="'.$image_url.'" alt="Ảnh Phòng" class="card-img-top" height="200">';
                        }
                        ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['TenLP'] ?></h5>
                <p class="card-text">
                <p> <?php echo $row['Gia'] ?></p>
                <p> <?php echo $row['MieuTa'] ?></p>
                </p>
            </div>
            </div>
        </div>

        <?php }
                    ?>
  
</div>

