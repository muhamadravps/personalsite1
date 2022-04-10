<?php

class Portofolio extends Controller
{
    public function index()
    {
        //tampung method getProfile() dari PortofolioModel.php di $data
        $data['profile'] = $this->model('PortofolioModel')->getProfile();

        //tampung method getAbout() kedalam $data['about']
        $data['about'] = $this->model('PortofolioModel')->getAbout();

        //tampung method getAbout() kedalam $data['about']
        $data['project'] = $this->model('PortofolioModel')->getProject();


        //kirim parameter $data ke file index.php yang ada di folder views/portofolio
        $this->view('portofolio/index',$data);
    
    }
    public function pesan()
    {
        if ($this->model('PortofolioModel')->tampungPesan($_POST)>0) {
            echo"
            <script>
            alert('Data berhasil dikirim')
            window.location.href= 'http://localhost/ujikomrav/public'
            </script>";
        }
        else{
            echo"gagal terkirim
            window.location.href= 'http://localhost/ujikomrav/public'
            ";
        }
    }
}
