<section class="content" style="background-image: url('assets/startbootstrap-shop-homepage/images/cocok.jpg'); opacity:0.8; margin:0 -200px; height:700px;margin-top:70px;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <h1 data-aos="fade-up"
     data-aos-duration="3000"  style="text-align:center; width:50%;font-size:20px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >LOGIN AKUN</strong></h1>
                        <span><em>Silahkan Login Dahulu Agar Bisa Meminjam Buku</em>
                        </span><br><br>
        <?= $this->session->flashdata('message'); ?>
        <div class="box"style="border-radius:10px;box-shadow:5px 5px">
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-group" style="border-radius:5px;">
                        <label for="no_reg">No Registrasi</label>
                        <input type="text" name="no_reg" id="no_reg" min="0" class="form-control" required>
                    </div>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" min="0" class="form-control" required>
                    </div>
                    Belum punya akun?
                    <a href="<?= base_url('page/Register') ?>" style="color:coral;text-decoration: underline;"> Registrasi</a>
                    <button style="border-radius:5px;" type="submit" name="submit" class="btn btn-primary pull-right btn-flat">Masuk</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</section>