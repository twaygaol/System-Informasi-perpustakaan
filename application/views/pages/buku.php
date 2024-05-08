<div class="row" style="margin-bottom:10px">
    <div class="col-md-6 " style="margin-top:50px;">
    <h1 data-aos="fade-up"
     data-aos-duration="3000"  style="text-align:center; width:100%;font-size:20px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >Galeri Buku  </strong></h1>
     <span>
     Merupakan daftar koleksi-koleksi terbaru kami. Tidak semuanya baru, adapula koleksi yang data-datanya sudah diperbaiki. Selamat menikmati
     </span>
     <div class="col-md-20" style="width:700px;">
        <form action="" style="margin-top:20px">
            <div class="input-group input-group-sm">
                <input type="text" name="cari" placeholder="cari berdasarkan judul .." class="form-control" value="<?= (isset($_GET['cari']))?$_GET['cari']:'' ?>">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" id="button-addon2">Cari</button>
                </span>
            </div>
        </form>
    </div>
    </div>
    
</div>
<br><br>
<div class="row">
    <?php foreach ($buku as $bk) : ?>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black" style="background-image: url(<?= base_url('assets/img/buku/'.$bk['sampul']) ?>); background-size:cover; height:350px;">
                </div>
                <div class="box-footer" style="padding-top: 10px;">
                    <h3 style="margin-top:0"><?= $bk['judul_buku'] ?></h3>
                    <p>Tahun Terbit: <?= $bk['tahun_terbit'] ?> -  <?= $bk['jumlah'] ?> Buku</p>
                    <button data-id="<?= $bk['id'] ?>" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#modal-default" style="margin-top: 10px;">lihat detail</button>
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