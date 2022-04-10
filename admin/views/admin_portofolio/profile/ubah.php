<?php
if (isset($_POST['simpan'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['keterangan'];
  $perusahaan = $_POST['jabatan'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namaFoto);

  if(empty($namaFoto)) {
    $q = mysqli_query($conn, 
    "update user set nama='$nama', jabatan='$jabatan', perusahaan='$perusahaan'
    where id=$id"
    );
    $message = "<div class='alert alert-success'>Profile berhasil diubah!</div>";
  } else {
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
      $q = mysqli_query($conn, 
      "update user set nama='$nama', jabatan='$jabatan', perusahaan='$perusahaan', foto='$namaFoto'
      where id=$id"
      );
      $message = "<div class='alert alert-success'>Profile berhasil diubah!</div>";
    }
  }
}


$id = $_GET['id'];
$getData = mysqli_query($conn, "select * from user where id=$id");
$data = mysqli_fetch_assoc($getData);
?>

<div class="container-fluid px-2 px-md-4">
  <div class="card card-body min-height-400 border-radius-xl mt-4card card-body min-height-400 border-radius-xl mt-4">
    <div class="col-12 mt-4">
      <div class="mb-5 ps-3">
        <h1>
          Ubah Profile <?=$data['nama']?>
          <a href="?menu=profile" class="btn btn-secondary btn-sm"  style="margin-left: 55rem; margin-top: -7rem;">BACK</a>
        </h1>
      </div>
      <?=@$message?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['nama']?>" required>
        </div>
        <div class="form-group">
          <label>JABATAN</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['jabatan']?>" required>
        </div>
        <div class="form-group">
          <label>PERUSAHAAN</label>
          <input type="text" name="nama" class="form-control" value="<?=$data['perusahaan']?>" required>
        </div>
        <div class="form-group">
          <label>UPLOAD FOTO</label>
          <img src="../public/assets/img/<?=$data['foto']?>" width="300px">
          <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>