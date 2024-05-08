
<section class="content">
    <div class="about">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <div class=" float-left">
                        <img style="margin-top:-90px;box-shadow: 5px 10px 10px 5px #9BA4B5;" src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/bg-librabry.jpg" height="450px" width="90%" alt="#"/>
                     
                    </div>
                    <br> <br>
                    <span style="color:orange;font">Books are carriers of civilization. Without books, history is silent,literature is stupid,
                    <br>science is crippled,thought and speculation ceased. Books are engines of change,<br> windows to the world, beacons set in the sea of time
                    </span>
                    <!-- <div class="input-group input-group-sm" style="width: 1090px; margin-top:8px">
                        <input type="text" name="cari" placeholder="cari berdasarkan judul .." class="form-control" value="<?= (isset($_GET['cari']))?$_GET['cari']:'' ?>">
                        <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" id="button-addon2">Cari Buku</button>
                </span>
            </div> -->
                </div>
                <!-- book dilan dilan-->
        <div class="row " style="margin-top:-20px">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
            <div class="blog_box">
            <div class="blog_img_box">
                <figure><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/dilan1990.jpg" style="height:300px; margin:10px"  alt="#"/>
                </figure>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
            <div class="blog_box">
            <div class="blog_img_box">
                <figure><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/dunia bersejarah.jpg" style="height:300px; margin:10px"  alt="#"/>
                </figure>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="blog_box">
            <div class="blog_img_box">
                <figure><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/komputer.jpg" style="height:300px; margin:10px" alt="#"/>
                </figure>
            </div>
            </div>
        </div>
    <!-- end book -->
            </div>
        </div>
    <!-- about -->
        <div class="about">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>About Our gallery library</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable content of a
                          <br> page when looking at its layout. The point of using Lorem
                        </span>
                    </div>
                  </div>
              </div>
             <!-- Main content -->
<section class="content">
    <!-- <?= $this->session->flashdata('message'); ?> -->
    <div class="row">
        <?php foreach ($buku as $bk) : ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box box-widget widget-user">
                    <div class="widget-user-header bg-black" style="background-image: url(<?= base_url('assets/img/buku/'.$bk['sampul']) ?>); background-size:cover; height:300px;">
                    </div>
                    <div class="box-footer" style="padding-top: 10px;">
                        <button data-id="<?= $bk['id'] ?>" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#modal-default" style="margin-top: 10px; width:100%">lihat detail</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if (count($buku) <= 0) : ?>
            <div class="col-sm-12 text-center">
                <img src="<?= base_url('assets/dist/img/post.svg'); ?>" class="img-fluid" height="250px">
                <h3><b>Belum ada buku!</b></h3>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- /.content --> 
            </div>
        </div>
      <!-- end about -->
</section>




<!-- BACKUP PAN YANG BARU KALI INI -->

<section class="content">
    <div class="about ">
        <div style=";display:flex;flex-direction:row;margin:0 -15px;">
            <div style="margin:0 auto;">
                <div>
                <img width="800px" height="400px" src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/purpose.png"   alt="#"/>
                </div>
            </div>
        <div>
            <p style="text-align:center; width:50%;font-size:20px; border-radius:40px;color:white; padding:5px; background-color:coral;">Porpuse</p>
            <h1><strong>This activity aims to</strong></h1>
            <p style="font-size:px;color:black;font-family:arial;">Lorem ipsum dolor sit amet consectetur adipisicing elit.Deleniti, obcaecati blanditiis br dolor non maiores laboriosam sunt itaque quis eveniet laborum fugit cum necessitatibus dignissimos animi in Deleniti eligendi doloribus impedit!</p>
            <a href="">
            <p style="text-align:center;  width:50%;font-size:20px; border-radius:5px; color:gray; border:1px solid coral;">Learn More</p>
            </a>
           
        </div>

    </div>
    <!-- end book -->
            </div>
        </div>
    <!-- about -->
        <div class="about">
            <div class="container">
              <div class="row" style="margin:0 50px;">
                <div class="col-md-12">
                    <h1 style="text-align:center; width:50%;font-size:25px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong>Yang populer di antara koleksi kami</strong></h1>
                        <span>Koleksi-koleksi kami yang dibaca oleh banyak pengunjung perpustakaan. Cari. Pinjam. Kami harap Anda menyukainya
                        </span>
                  </div>
              </div>
              <br>
             <!-- Main content -->
<section class="content" style="border-radius:5px;margin-top:-50px;opacity: 0.7;">
    <!-- <?= $this->session->flashdata('message'); ?> -->
    <div class="row" style="padding:50px; margin-top:-20px;">
        <?php foreach ($buku as $bk) : ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box box-widget widget-user">
                    <div class="widget-user-header bg-black" style="background-image: url(<?= base_url('assets/img/buku/'.$bk['sampul']) ?>); background-size:cover; height:300px;">
                    </div>
                    <div class="box-footer" style="padding-top: 10px;">
                        <button data-id="<?= $bk['id'] ?>" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#modal-default" style="margin-top:background:tomato; 10px; width:100%">lihat detail</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if (count($buku) <= 0) : ?>
            <div class="col-sm-12 text-center">
                <img src="<?= base_url('assets/dist/img/post.svg'); ?>" class="img-fluid" height="250px">
                <h3><b>Belum ada buku!</b></h3>
            </div>
        <?php endif; ?>
    </div>
</section>
<br>
<!-- /.content --> 
            </div>
        </div>
      <!-- end about -->
</section>



