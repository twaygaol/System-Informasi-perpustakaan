
<section class="content">
    <div class="about">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <i><img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/undraw5.png" style="margin-top:-50px; height: 350px;" alt="#"/></i>
                    <h2>Welcome to <strong> DIGITAL LIBRARY</h2>
                    <!-- <span style="color:orange;">Books are carriers of civilization. Without books, history is silent,literature is stupid,
                    <br>science is crippled,thought and speculation ceased. Books are engines of change,<br> windows to the world, beacons set in the sea of time
                    </span> -->
                    <div class="input-group input-group-sm" style="width: 1090px; margin-top:8px">
                        <input type="text" name="cari" placeholder="cari berdasarkan judul .." class="form-control" value="<?= (isset($_GET['cari']))?$_GET['cari']:'' ?>">
                        <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" id="button-addon2">Cari Buku</button>
                </span>
            </div>
                </div>
                <!-- book -->
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

