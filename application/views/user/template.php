<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?> | perpustakaan-digital</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/tamplate/css/style.min.css') ?>">
    
    
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

    
   
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/fontawesome.css">
    <link rel="stylesheet" href="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="stylesheet" href="<?php echo base_url()?>assets/homepage-readme/assets/css/owl.css">


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-black layout-top-nav ">
<div class="loader_bg">
        <div class="loader"><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/loading.gif" alt="" /></div>
    </div>
    <div class="wrapper">
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                    <a href="<?= base_url(); ?>" class="navbar-brand"> DIGITAL <strong style='color:orange'>LIBRARY    </strong></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left " id="navbar-collapse">
                        <ul class="nav navbar-nav " >
                            <?php if (isset($_SESSION['isLogin'])) : ?>
                            <li class="<?= ($title == 'home') ? 'active' : '' ?> "><a href="<?= base_url('/') ?>">Home</a></li>
                            <li class="<?= ($title == 'History') ? 'active' : '' ?> "><a href="<?= base_url('page/history') ?>">History</a></li>     
                            <li class="<?= ($title == 'daftar buku') ? 'active' : '' ?> "><a href="<?= base_url('page/buku') ?>">Gallery Books</a></li>
                            <li class="<?= ($title == 'Kontak') ? 'active' : '' ?> "><a href="<?= base_url('page/kontak') ?>">Contact Us</a></li>
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
                                <li class="<?= ($title == 'Login') ? 'active' : '' ?> " ><a href="<?= base_url('page/login') ?> ">Login</a></li>
                                <li class="<?= ($title == 'Register') ? 'active' : '' ?> " ><a href="<?= base_url('') ?>">Register</a></li>
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

        <footer class="main-footer skin-black">
        
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->        
         <!-- <div class="col-md-20 ">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div> -->
        <div class="copyright " style="margin-top:-5px">
                <div class="container">
                    <p>© 2021 DIGITAL LIBRARY. Design by team</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>

    </div>
    <!-- ./wrapper -->

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
                    <button type="submit" <?= (!$this->session->userdata('isLogin'))?'disabled':'' ?> name="submit" class="btn btn-primary"  onclick="return confirm('apakah anda yakin?')">Pinjam</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        
    </div>
    <!-- /.modal -->

   

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

</body>

</html>