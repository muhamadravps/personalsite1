<?php
if($_GET['menu'] == NULL || $_GET['menu'] == '' || $_GET['menu']=="profile"){
    include("views/admin_portofolio/profile/profile.php");
}
    else if($_GET['menu'] == "ubah"){
    include("views/admin_portofolio/profile/ubah.php");
}
    else if($_GET['menu'] == "about"){
    include("views/admin_portofolio/about/about.php");
}
else if($_GET['menu'] == "ubah_a"){
    include("views/admin_portofolio/about/ubah_a.php");
}
else if($_GET['menu'] == "Dashboard"){
    include("views/admin_portofolio/home/Dashboard.php");
}
    else if($_GET['menu'] == "project"){
    include("views/admin_portofolio/project/project.php");
}
else if($_GET['menu'] == "tambah_p"){
    include("views/admin_portofolio/project/tambah_p.php");
}
else if($_GET['menu'] == "ubah_p"){
    include("views/admin_portofolio/project/ubah_p.php");
}
    else if($_GET['menu'] == "contact"){
    include("views/admin_portofolio/contact/contact.php");
}
    else if ($_GET['menu'] == 'logout') {
    session_destroy();
    echo "
            <script>
            alert('Sayonara Matane :)')
            window.location.href= 'http://localhost/ujikomrav/'
            </script>      
        ";
}


?>

