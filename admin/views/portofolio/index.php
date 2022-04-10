<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ravoffc | Personalsite</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?=baseurl;?>/assets/css/style.css" />

  </head>
  <body id="home">
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #6495ED;">
      <div class="container">
        <a class="navbar-brand text-white" href="#" text-white>ravoffc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#About">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
          </ul>
        </div>
      </div>
      <div>
        <a href="http://localhost/ujikomrav/admin" style="teks-decoration: none; ">
          <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 2rem;" width="25" height="25" fill="#ffffff" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
        </a>
      </div>
    </nav>
    
    <?php foreach($data['profile'] as $pro):?>
    <section class="jumbotron text-center">
    <div data-aos="zoom-in">
      <img src="<?= baseurl;?>/assets/img/<?= $pro['foto'];?>"alt="ini gambar"  width="300"  height="300" class="img-thumbnail image rounded-circle"/>
      </div>
      <h1 class="display-4 text-white"><?= $pro['nama'];?></h1>
      <p class="lead text-white"><?= $pro['jabatan'];?> | <?= $pro['perusahaan'];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -8rem;" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,192C384,181,480,139,576,133.3C672,128,768,160,864,181.3C960,203,1056,213,1152,208C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <?php endforeach ?>
    <div style="background-image: url('<?=baseurl;?>/assets/img/b4.jpg'); background-size: 100%;">
    <section id="About">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,192C384,181,480,139,576,133.3C672,128,768,160,864,181.3C960,203,1056,213,1152,208C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div data-aos="fade-up" data-aos-anchor-placement="top-center">
      <div class="row justify-content-center">
        <?php foreach($data['about'] as $ab):?>
          <div class="col-sm-6">
          <div class="card text-white text-center border-primary bg-transparent ">
            <div class="card-header">
              <p style="font-size: 25px;"><b>About Me</b></p>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $ab['column1'];?></h5>
              <p class="card-text"><?= $ab['column2'];?></p>
              <p class="card-text"><?= $ab['column3'];?></p>
              <a href="#contact" class="btn btn-primary">Contact</a>
            </div>
          </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -3rem;" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,224L48,234.7C96,245,192,267,288,266.7C384,267,480,245,576,240C672,235,768,245,864,261.3C960,277,1056,299,1152,261.3C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    </div>
    
    <div style="background-image: url('<?=baseurl;?>/assets/img/b2.jpg'); background-size: 100%;">
      <section id="projects">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,112C384,117,480,139,576,122.7C672,107,768,53,864,53.3C960,53,1056,107,1152,154.7C1248,203,1344,245,1392,266.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div>
            <div class="row justify-content-center text-center" style="margin-top: -8rem; margin-left: -4rem;">
            <div class="text-white">
              <p style="font-size: 25px;"><b>Project</b></p>
            </div>
              <?php foreach($data['project'] as $pro):?>
                <div class="card" style="width: 18rem;">
                  <img src="<?= baseurl;?>/assets/img/<?= $pro['poto'];?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $pro['nama_p'];?></h5>
                    <p class="card-text"><?= $pro['ket'];?></p>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 0rem;" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,202.7C384,224,480,224,576,213.3C672,203,768,181,864,149.3C960,117,1056,75,1152,69.3C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
    </div>
    
    <div style="background-image: url('<?=baseurl;?>/assets/img/b3.jpg'); background-size: 100%;">
      <section id="contact">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4169E1" fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,250.7C384,224,480,128,576,122.7C672,117,768,203,864,240C960,277,1056,267,1152,229.3C1248,192,1344,128,1392,96L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
          <div data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="container">
              <div class="row text-center mb-3">
                <div class="col" style="margin-top: -4rem;">
                  <h2>Contact Me</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6" style="margin-top: 0rem;">
                    <form action="<?=baseurl;?>/Portofolio/pesan" method="POST">
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_k" id="name" aria-describedby="name" required>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required/>
                      </div>
                      <div class="mb-3">
                        <label for="Pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" name="pesan" id="Pesan"rows="3" required></textarea>
                      </div>
                      <div>
                        <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                      </div>
                </form>
                </div>
              </div>
          </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0095ff" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,181.3C672,203,768,181,864,149.3C960,117,1056,75,1152,48C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
    </div>
    
    <footer class="text-white text-center pt-4 pb-2">
      <div>
      <p>Creater with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https:/www.instagram.com/vinaaatae_"class="text-white fw-bold" style="text-decoration: none;">ravoffc</a></p>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
