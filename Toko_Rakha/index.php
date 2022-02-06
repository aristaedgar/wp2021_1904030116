<?php
//date_default_timezone_get("Asia/Jakarta");

require 'functions.php';
$barang = query("SELECT * FROM tbl_barang");

if (isset($_POST['cari'])) {
  $barang = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                       
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="tambah_barang.php">Tambah Barang</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Nikmati Kemudahan Berbelanja di warung Rakha!</div>
                <div class="masthead-heading text-uppercase">Selamat Berbelanja</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        
        
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Warung Rakha.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="http://asset-a.grid.id/crop/0x0:0x0/x/photo/2018/11/08/2315016569.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2016</h4>
                                <h4 class="subheading">Awal Kepindahan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Awal mula tercetusnya ide membuka Warung Rakha pada saat keluarga Ibu Rakha pindah dari rumah lamanya kerumah baru yang sekarang menjadi tempat dimana Warung Rakha berada. Yang kebetulan letak rumah tersebut sangat stategis untuk membuka peluang dagang.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="data:image/jpeg;base64,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" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2017</h4>
                                <h4 class="subheading">Dibukanya Warung Rakha</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Setelah mematangkan niat dan mempelajari seputar perdagangan, akhirnya Warung Rakha buka pada tahun kedua kepindahan keluarga tersebut. Dengan kegigihan akhirnya Warung Rakha bisa berkembang dan sudah banyak dikunjungi masyarakat sekitar.</p></div>
                        </div>
                    </li>
                    
                   
                </ul>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                <h3><i class="fas fa-store"></i></i> Sembako</h3>
      <hr>
      

      <!-- pencarian data -->
      <form action=" " method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="Cari Barang" autocomplete="">
        <button type="submit" class="btn btn-primary" name="cari">Cari</button>
      </form>

      <table class="table table-striped">
        <thead>

          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi </th>
          </tr>
        </thead>

        <?php if (empty($barang)) : ?>
          <tr>
            
              <p><b>
                  
            </td>
          </tr>
        <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($barang as $brg) : ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $brg['Nama_Barang']; ?></td>
              <td><img src="image/<?php echo $brg['Foto']; ?>" width="80px"></td>
              <td><a href="detail.php?Id=<?= $brg['Id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
                </div>
            </div>
        </section>
        

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
