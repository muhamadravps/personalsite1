<?php
if (isset($_POST['simpan'])) {
  $id = $_GET['id_about'];
  $judul = $_POST['column1'];
  $subjudul = $_POST['column2'];
  $endjudul = $_POST['column3'];

  if(empty($namaFoto)) {
    $q = mysqli_query($conn, 
    "update about set column1='$judul', column2='$subjudul', column3='$endjudul'
    where id_about=$id"
    );
    $message = "<div class='alert alert-success'>About berhasil diubah!</div>";
  } else {
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
      $q = mysqli_query($conn, 
      "update about set column1='$judul', column2='$subjudul', column3='$endjudul'
      where id_about=$id"
      );
      $message = "<div class='alert alert-success'>About berhasil diubah!</div>";
    }
  }
}


$id = $_GET['id_about'];
$getData = mysqli_query($conn, "select * from about where id_about=$id");
$data = mysqli_fetch_assoc($getData);
?>

<div class="container-fluid px-2 px-md-4">
  <div class="card card-body min-height-400 border-radius-xl mt-4card card-body min-height-400 border-radius-xl mt-4">
    <div class="col-12 mt-4">
      <div class="mb-5 ps-3">
        <h1>
          Ubah About
          <a href="?menu=about" class="btn btn-secondary btn-sm"  style="margin-left: 55rem; margin-top: -7rem;">BACK</a>
        </h1>
      </div>
      <?=@$message?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Tagline</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['column1']?>" required>
        </div>
        <div class="form-group">
          <label>Your Caption</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['column2']?>" required>
        </div>
        <div class="form-group">
          <label>Your Motivation</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['column3']?>" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>