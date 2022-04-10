<div class="container-fluid px-2 px-md-4">
  <div class="page-header min-height-200 border-radius-xl mt-4" style="background-image: url('https://wall.zencafe.net/wp-content/uploads/2021/01/Dark-Purple-Anime-Scenery-Background-Wallpaper-1007.jpg?w=600');">
    <span class="mask  bg-gradient-secondary  opacity-6"></span>
  </div>
  <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="col-12 col-xl-12">
          <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">About Me</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="?menu=ubah_a">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit About"></i>
                  </a>
                </div>
              </div>
            </div>
            <?php foreach($b as $about):?>
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title"><?= $about['column1'];?></h5>
                <p class="card-text"><?= $about['column2'];?></p>
                <p class="card-text"><?= $about['column3'];?></p>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
    </div>
</div>
