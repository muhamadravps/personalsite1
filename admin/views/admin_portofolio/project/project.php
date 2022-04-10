<?php

error_reporting(0);
if ($_GET['id']) {
    $id = $_GET['id'];
    $k = mysqli_query($conn, "DELETE FROM project where id_p=$id");
}
?>

<div class="container-fluid px-2 px-md-4">
  <div class="page-header min-height-200 border-radius-xl mt-4" style="background-image: url('https://wall.zencafe.net/wp-content/uploads/2021/01/Dark-Purple-Anime-Scenery-Background-Wallpaper-1007.jpg?w=600');">
    <span class="mask  bg-gradient-secondary  opacity-6"></span>
  </div>
  <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="col-12 mt-4">
      <div class="mb-5 ps-3">
        <h6 class="mb-1" style="font-size: 50px;">Projects
          <a href="?menu=tambah_p" style="margin-left: 50rem; margin-top: -10rem;" class="btn btn-success btn-sm ">Insert</a>
        </h6>
        
      </div>
      <div class="row">
        <?php foreach($p as $pro): ?>
        <div class="col-md-4 mb-9" style="margin-top: -7rem;">
          <div class="card text-center" style="width: 18rem;">
            <img src="<?= baseurl;?>/assets/img/<?= $pro['poto'];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $pro['nama_p'];?></h5>
              <p><?= $pro['ket'];?></p>
              <a href="?menu=project&id=<?= $pro['id_p'] ?>" class="btn btn-danger">Delete</a>
              <a href="?menu=ubah_p&id=<?=$pro['id_p']?>" class="btn btn-info">Update</a>
            </div>
          </div>
          
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
