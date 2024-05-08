<!-- background-image: url('assets/startbootstrap-shop-homepage/images/cocok.jpg'); -->
<section class="content" style="background-image: url('assets/startbootstrap-shop-homepage/images/cocok.jpg'); background-size:cover; background-color:gray;background-blend-mode:multiply;opacity:1; margin:0    -200px; height:700px;">
    <div style="padding:200px;display:flex;flex-direction:row;">
        <div>
            <h1><strong><span style="color:tomato;font-size:50px;">Selamat Datang Di Portal Perpustakaan Digital</span></strong><br><h2 style="color:white;"><strong>SMA NEGERI 1 SIMPANG KANAN</strong></h2></h1>
            <a href="#kami">
            <h1 data-aos="zoom-out-down"  style="text-align:center; width:30%;font-size:25px; padding:10px; border-radius:5px;color:white; border:2px solid coral;box-shadow:3px 3px 5px 5px">Let`s Go!</h1>
            </a>
            <!-- <p style="font-size:px;color:white;font-family:arial;">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Deleniti, obcaecati blanditiis br dolor non maiores laboriosam <br> sunt itaque quis eveniet laborum fugit cum necessitatibus dignissimos animi in. <br> Deleniti eligendi doloribus impedit!</p> -->
        </div>

        <div style="margin:0 auto;">
            <div style="background-color:white; padding:20px;border-radius:15px;box-shadow:5px 5px">
                <img data-aos="fade-up"
                data-aos-duration="3000"  src="https://disdikbud.banyuasinkab.go.id/wp-content/uploads/sites/269/2022/11/Logo-Tut-Wuri-Handayani-PNG-Warna.png" width="300" height="300" alt="">
            </div>
        </div>
    </div>
</section>
<section class="content" id="kami">
    <div class="about ">
        <div style=";display:flex;flex-direction:row;margin:0 -15px;">
            <div style="margin:0 auto;" data-aos="zoom-in-up">
                <div >
                
                <!-- GANTI GAMBAR BAGIAN HOME -->
                <img  style="border-radius:5px;" width="600px" height="400px" src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/pojok.png"   alt="#"/>
                </div>
            </div>
        <div style="margin:0 50px;">
            <p data-aos="fade-down"
            data-aos-anchor-placement="top-center" style="text-align:center; width:50%;font-size:17px; border-radius:40px;color:white; padding:2px; background-color:coral;">Kami adalah</p>
            <h1><strong>Perpustakaan SMA NEGERI 1 SIMPANG KANAN</strong></h1>
            <p style="font-size:px;color:black;font-family:arial;">Berada dilingkungan SMA Negeri 1 Simpang Kanan yang beralamat di JL. Pelajar Rawa Mulia, Kec. Simpang Kanan, Kab. Rokan Hilir. Gedung Perpustakaan terletak diantara kelas dan UKS. Gedung ini bersebelahan dengan Lab. Komputer dan juga Lab. Fisika dan biologi. Perpustakaan SMA Negeri 1 Simpang Kanan memiliki luas gedung 16m x 8m. Juga dilengkapi dengan sarana dan prasarana yang memadai, sebagai pendukung kegiatan pembelajaran disekolah. Sarana prasarana diperpustakaan SMA Negeri 1 Simpang Kanan diantaranya sebagai berikut, LCD Proyektor, Televisi, Meja baca, Komputer dan Wifi. Ruangan perpustakaan ini juga dilengkapi AC agar sejuk sehingga pengunjung akan merasa nyaman jika berada didalam ruangan.</p>
            <a href="">
            <p style="text-align:center;font-family:poppins;  width:100%;font-size:15px; border-radius:5px; color:tomato; border:1px solid coral;">Senang Melayani Anda 🙏</p>
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
                    <h1 data-aos="fade-up"
                        data-aos-duration="3000"  style="text-align:center; width:50%;font-size:25px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >Yang populer diantara koleksi kami</strong></h1>
                        <span>Koleksi-koleksi kami yang dibaca oleh banyak pengunjung perpustakaan. Cari dan Pinjam. Kami harap anda menyukainya.
                        </span>
                  </div>
              </div>
              <br>
             <!-- Main content -->
            <section class="content" style="border-radius:5px;margin-top:-50px;opacity: 0.7;">
                <!-- <?= $this->session->flashdata('message'); ?> -->
                <div class="row" style="padding:50px; margin-top:-20px;">
                    <?php foreach ($buku as $bk) : ?>
                        <div class="col-md-3 col-sm-4 col-xs-6" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
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

            <!-- tentang organisasi -->
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <span style="color:coral; border-radius:40px; padding:10px; font-size:25px;" >ORGANISASI</span>
                        <h1 style="margin-top:-3px;"><strong>Struktur Organisasi Perpustakaan <br> SMA NEGERI 1 SIMPANG  KANAN</strong></h1>
                        
                        <!-- GANTI GAMBAR BAGIAN ORGANISASI -->
                        <img  data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine" width="800px"  height="600px" src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/Struktur_Organisasi.png"   alt="#"/>
                        </div>
                  </div>
              </div>
            </div>
        </div>
      <!-- end about -->

      <!-- pustakawan -->
      <div class="about ">
        <div style=";display:flex;flex-direction:row;margin:0 -15px;padding:100px;">
            <div style="margin:0 auto;" data-aos="zoom-in-up">
                <div >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.682596445693!2d100.32016197431777!3d1.8747915981081023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302d21dc56496969%3A0x6323909c5b869964!2sSMAN%201%20SIMPANG%20KANAN!5e0!3m2!1sid!2sid!4v1688052781933!5m2!1sid!2sid" width="800px" height="450px" style="border-radius:15px;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="800px" height="450px" style="border-radius:15px;" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                </div>
            </div>
            <div style="margin:0 50px;">
            <p data-aos="fade-down"
            data-aos-anchor-placement="top-center" style="text-align:center; width:50%;font-size:17px; border-radius:40px;color:white; padding:2px; background-color:coral;">KONTAK</p>
            <h1><strong>Perpustakaan SMA NEGERI 1 SIMPANG KANAN</strong></h1>
            <p style="font-size:px;color:black;font-family:arial;">Jl. Pelajar Rawa Mulia, Kec. Simpang Kanan, Kab. Rokan Hilir, RIAU 28992
            <br>(061)6612198</p>
            <div style="display: grid;
            grid-template-columns:50px 48px 1px;">
                
                <a href="" data-aos="flip-right">
                <img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/fb.png" width="40" height="40"  alt="">
                </a>
            
                <a href="#" data-aos="flip-left">
                <img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/yt.png" width="40" height="40"  alt="">
                </a>

                <a href="" data-aos="flip-up">
                <img src="<?php echo base_url()?>assets/startbootstrap-shop-homepage/images/ig.png" width="40" height="40"  alt="">
                </a>
            
            </div>
           
        </div>

    </div>
      <!-- end pustakawan -->

</section>







