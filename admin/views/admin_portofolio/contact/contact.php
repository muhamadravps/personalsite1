<?php
// REMOVE MESSAGE
if(@$_GET['hapus']) {
  $id = $_GET['hapus'];
  $delete = mysqli_query($conn, 
  "delete from contact where id_k=$id");

  if($delete) $pesan = "<div class='alert alert-success'>Pesan telah dihapus!</div>";
}
?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Authors table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead class="text-center">
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pesan</th>
                  <th class="text-secondary opacity-7">Action</th>
                </tr>
              </thead>
              
              <tbody class="text-center">
                  <?php
                  $q = mysqli_query($conn, "select * from contact");
                  $count = mysqli_num_rows($q);
                  if($count > 0) {
                    $i = 0;
                    while($data=mysqli_fetch_array($q)) { $i++?>
                      <tr>
                        <td><?=$i?>.</td>
                        <td><?=$data['nama_k']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=$data['pesan']?></td>
                        <td>
                        <a onclick="hapus(<?=$data['id_k']?>)" class="btn btn-danger">hapus</a>
                    <?php }
                  } 
                  else { ?>
                    <tr>
                      <td colspan="4" class="text-center"><em>Tidak ada pesan</em></td>
                    </tr>
                  <?php } ?>
                  </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function hapus(id) {
    let h = confirm('apakah yakin ?');
    if(h) {
      location.href = "?menu=contact&hapus="+id;
    }
  }
</script>
