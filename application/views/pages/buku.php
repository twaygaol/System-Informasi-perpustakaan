<div class="row" style="margin-bottom:10px">
    
    <!-- <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header> -->

    <div class="col-md-6">
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
<div class="row">
    <?php foreach ($buku as $bk) : ?>
        <div class="col-xs-0">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black" style="background-image: url(<?= base_url('assets/img/buku/'.$bk['sampul']) ?>); background-size:cover; height:150px; width: 200px;">
                </div>
                <div class="box-footer" style="padding-top: 5px;">
                    <h3 style="margin-top:0"><?= $bk['judul_buku'] ?></h3>
                    <p>Tahun Terbit: <?= $bk['tahun_terbit'] ?> </p> <p> <?= $bk['jumlah'] ?> Lembar</p>
                    <button data-id="<?= $bk['id'] ?>" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#modal-default" style="margin-top: 10px;">detail buku</button>
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