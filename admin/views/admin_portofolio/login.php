
<?php 
if (isset($_POST["login"])) {
  $user = $_POST["username"];
  $pwd = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user_login WHERE username = '$user' ");
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pwd, $row["password"])){
      $_SESSION["login"]=true;
      header('Location: ?menu=profile');
      exit;
    }
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= baseurl ?>/assets/img/loli.png">
  <link rel="icon" type="image/png" href="<?= baseurl ?>/assets/img/loli.png">
  <title>
    Login to your Personalsite
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= baseurl ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= baseurl ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= baseurl ?>/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-info-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://cdn-cfmok.nitrocdn.com/juJsjTwdTqWjkJBaBrLnvLeovPsDevAD/assets/static/optimized/rev-b5a7330/wp-content/uploads/1589583110_398_Aesthetic-Anime-Laptop-Wallpapers-2020.jpg');">
      <span class="mask bg-secondary opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-info shadow-info border-radius-lg py-3 pe-1">
                  <a href="<?= baseurl;?>">
                    <h3 class="text-white font-weight-bolder text-center mt-2 mb-0">My Portofolio</h3>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <form action="" method="POST" class="text-start">
                  <?php if (isset($error)) : ?>
                      <p>Password atau email salah</p>

                  <?php endif ?>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn bg-info w-100 my-4 mb-2 text-white">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?= baseurl ?>/assets/js/core/popper.min.js"></script>
  <script src="<?= baseurl ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= baseurl ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= baseurl ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="<?= baseurl ?>/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>