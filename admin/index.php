<?php
session_start();
require('config/Config.php');

include('core/koneksi.php');

if(!isset($_SESSION['login'])) {
  include('views/admin_portofolio/login.php');
}else{
  include('views/admin_portofolio/index.php');
}

?>