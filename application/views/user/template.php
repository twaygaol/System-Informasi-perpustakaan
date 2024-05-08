<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?> | perpustakaan-digital</title>
    <link href="https://disdikbud.banyuasinkab.go.id/wp-content/uploads/sites/269/2022/11/Logo-Tut-Wuri-Handayani-PNG-Warna.png" rel="icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/tamplate/css/style.min.css') ?>">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/startbootstrap-shop-homepage/css/bootstrap.min.css"> -->
    <!-- owl css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/startbootstrap-shop-homepage/css/owl.carousel.min.css">
    <!-- responsive-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/startbootstrap-shop-homepage/css/responsive.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/startbootstrap-shop-homepage/css/style.css">
    <!-- kamu css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/startbootstrap-shop-homepage/css/kamu.css">

    <!-- sweetalert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/fontawesome.css">
    <link rel="stylesheet" href="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/owl.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha3/css/bootstrap.min.css">

    <!-- Google Font -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <style>
        .menu_utama {
   margin-top:3px;
   width: 100px;
   background-color: white;
   color: black;
   padding:10px 15px;
}
.menu_utama:hover{
   background-color: #ffff;
}
.menu_sub {
   display: none;
   list-style-type: none;
   margin-left: -55px;
   margin-bottom: -20px;
   width: 250px;
}
.menu_sub a{
   display: block;
   width: 100%;
   color: black;
   background:white;
   padding: 20px;
   text-decoration: none;
   border-bottom:solid 1px #black;
}
.menu_sub a:hover{
   background-color: gray;
}
#menu_dropdown .menu_utama:hover > .menu_sub {
   display:block;
}
      </style>
  </head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-black layout-top-nav ">
<div class="loader_bg">
        <div class="loader"><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/loading.gif" alt="" /></div>
    </div>
    <div class="">
        <header class="main-header" style="position:fixed;background:white;width:100%;">
            <nav class="" >
                <div class="container">
                    <div class="navbar-header">
                    <a href="<?= base_url(); ?>" class="navbar-brand"> <strong style='color:orange'>SMA NEGERI 1 SIMPANG KANAN</strong></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left " id="navbar-collapse">
                    <ul class="nav navbar-nav" id="menu_dropdown">
                      <li class="<?= ($title == 'home') ? 'active' : '' ?>"><a style="color:black;" href="<?= base_url('/home') ?>">Beranda</a></li>
                      <li class="<?= ($title == 'Tentang kami') ? 'active' : '' ?>"><a style="color:black;" href="<?= base_url('/about') ?>">Tentang Kami</a></li>
                      <!-- <li class="menu_utama">
                        Profile
                        <ul class="menu_sub">
                          <li><a href="<?= base_url('/kata') ?>">Kata Sambutan</a></li>
                          <li><a href="<?= base_url('/about') ?>">Profile Perpustakaan</a></li>
                          <li><a href="<?= base_url('/visi') ?>">Visi & Misi Perpustakaan</a></li>
                          <li><a href="<?= base_url('/tugas') ?>">Tugas & Fungsi Perpustakaan</a></li>
                        </ul>
                      </li> -->
                      
                      <?php if (isset($_SESSION['isLogin'])) : ?>
                        <li class="<?= ($title == 'History') ? 'active' : '' ?>"><a style="color:black;" href="<?= base_url('page/history') ?>">History Buku</a></li>     
                        <li class="<?= ($title == 'daftar buku') ? 'active' : '' ?>"><a style="color:black;" href="<?= base_url('page/buku') ?>">Galeri Buku</a></li>
                      <?php endif; ?>
                    </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav " style="color:orange">
                            <?php if (isset($_SESSION['isLogin'])) : ?>
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">
                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url('assets/img/avatar.jpg') ?>" class="user-image" alt="User Image">
                                        <span class="hidden-xs"><?= $this->session->userdata('nama') ?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="">
                                                <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                            <?php else : ?>
                                    <li  class="<?= ($title == 'Login') ? 'active' : '' ?> " ><a   href="<?= base_url('page/login') ?> "><span style="border-radius:5px; font-family:sans-serif; background-color:coral;font-size:18px;padding:7px;color:white;">Login</span></a></li>
                                    
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <?= $contents; ?>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer skin-black" style="background-color: coral;">
        
        <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
                -->
         <!-- <div class="col-md-20 ">
            <div id="map" style="margin-top:100px;">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="40%" height="450px" style="border-radius:15px;" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> -->
            <!-- contact -->
    <!-- <div class="send-message" style="padding:5px; margin:0 700px;margin-top:-500px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="registration number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="btn btn-primary">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <br>
          </div>
        <div class="copyright" style="background-color: coral; margin-top:-5px">
                <div class="container">
                    <p>© Hak Cipta_SMA Negeri 1 Simpang Kanan</p>
                </div>
            </div>
            
        
            
            
        </footer>

    </div>
 
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Buku</h4>
                </div>
                <form id="form" action="" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img id="sampul" width="200" height="350" src="" alt="foto sampul buku">
                        </div>
                        <div class="col-md-7">
                            <table class="table table-striped">
                                <tr>
                                    <td>Judul Buku</td>
                                    <td id="judul_buku"></td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td id="penerbit"></td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td id="pengarang"></td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td id="tahun_terbit"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Rak</td>
                                    <td id="nomor_rak"></td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td>
                                    <td id="jumlah"></td>
                                </tr>
                            </table>
                            <?php if(!$this->session->userdata('isLogin')):?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-warning"></i> Peringatan!</h4>
                                    Silahkan login terlebih dahulu agar dapat melakukan peminjaman buku
                                </div>
                            <?php else: ?>
                            <div class="form-group">
                                <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
                                <small class="text-danger">*masa peminjaman 7 hari</small><br>
                                <small class="text-danger">*dikenakan denda RP 1000/hari jika melebihi waktu</small>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" <?= (!$this->session->userdata('isLogin')) ? 'disabled' : '' ?> name="submit" class="btn btn-primary" onclick="pinjamBuku()">Pinjam</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        
    </div>
    <!-- /.modal -->
    
    <!-- <script>
    function pinjamBuku() {
        // Proses pinjam buku disini (jika perlu)

        // Menampilkan notifikasi setelah tombol "Pinjam" ditekan
        alert("Terima kasih telah meminjam buku! Selamat membaca!");

    }
    </script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function pinjamBuku() {
            // Proses pinjam buku disini (jika perlu)

            // Menampilkan notifikasi SweetAlert setelah tombol "Pinjam" ditekan
            Swal.fire({
                icon: 'success',
                title: 'TERIMA KASIH GUYSS 👍!',
                text: 'Terima kasih telah meminjam buku! Selamat membaca!',
                showConfirmButton: false, // Tidak menampilkan tombol OK
                timer: 400000000, // Waktu tampilan notifikasi dalam milidetik (opsional)
                allowOutsideClick: false // Tidak membiarkan user menutup notifikasi dengan mengklik di luar notifikasi
              }).then((result) => {
            // Redirect ke halaman buku setelah menutup notifikasi
            if (result.dismiss === Swal.DismissReason.timer || result.dismiss === Swal.DismissReason.close) {
                window.location.href = 'http://localhost/perpustakaan-digital/page/history'; // Ganti 'url_halaman_buku' dengan URL yang sesuai
            }
        });
        }
    </script>

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/bower_components/tamplate/js/main.js') ?>"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click', '.detail', function() {
                let id = $(this).data('id');
                $('#form').attr('action', "<?= base_url('transaksi/userpinjam/') ?>"+id)
                console.log(id);
                $.ajax({
                    url: '<?= base_url('buku/getdata/'); ?>'+id,
                    method: 'POST',
                    dataType: 'JSON',
                    data: {id: id },
                    success: function(data) {
                        console.log(data);
                        $('#sampul').attr('src', "<?= base_url('assets/img/buku/') ?>"+data.sampul)
                        $('#judul_buku').html(": "+data.judul_buku);
                        $('#pengarang').html(": "+data.pengarang);
                        $('#penerbit').html(": "+data.penerbit);
                        $('#tahun_terbit').html(": "+data.tahun_terbit);
                        $('#nomor_rak').html(": "+data.nomor_rak);
                        $('#jumlah').html(": "+data.jumlah);
                    }
                })
            });
        });
    </script>

    <!-- Javascript files-->
    <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/custom.js"></script>
     <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

      
    
      <!-- Additional Scripts -->
    <script src="<?php echo base_url()?>assets/homepage-readme/assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>assets/homepage-readme/assets/js/owl.js"></script>
    <script src="<?php echo base_url()?>assets/homepage-readme/assets/js/slick.js"></script>
    <script src="<?php echo base_url()?>assets/homepage-readme/assets/js/isotope.js"></script>
    <script src="<?php echo base_url()?>assets/homepage-readme/assets/js/accordions.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- dropdown -->
  <!-- Tambahkan script berikut di bagian bawah halaman sebelum tag </body> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha3/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha3/js/bootstrap.min.js"></script>



</body>

</html>