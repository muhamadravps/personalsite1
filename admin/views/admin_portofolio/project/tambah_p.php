<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $keterangan = $_POST['keterangan'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namaFoto);

  if (move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
    rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
    $q = mysqli_query($conn, 
    "insert into project values (NULL, '$nama', '$keterangan', '$namaFoto')"
    );
    $message = "<div class='alert alert-success'>Project berhasil ditambahkan!</div>";
  }
}
?>
<div class="container-fluid px-2 px-md-4">
  <div class="card card-body min-height-400 border-radius-xl mt-4card card-body min-height-400 border-radius-xl mt-4">
    <div class="col-12 mt-4">
      <div class="mb-5 ps-3">
        <h1>
          Tambah Project
          <a href="?menu=project" style="margin-left: 55rem; margin-top: -7rem;" class="btn btn-secondary btn-sm">Back</a>
        </h1>
      </div>
        <?=@$message?>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Project Name</label>
            <input type="text" name="nama" class="form-control" placeholder="Please Insert Your Project Name...">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Upload Project Picture</label>
              <input type="file" id="file" name="foto" class="form-control" aria-label="File browser example">
              <span class="file-custom"></span>
            </label>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Project Description</label>
            <textarea name="keterangan" cols="30" rows="3" class="form-control" placeholder="Please Insert Your Project Description..."></textarea>
          </div>
          <button type="submit" name="simpan" class="btn btn-info">Save</button>
        </form>
      
    </div>
  </div>
</div>