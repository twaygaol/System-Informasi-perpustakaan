             
<div class="row" style="margin-top:5%;">
    <div class="col" style="margin-top:10%;display:flex;flex-direction:row;">
        <div class="">
        <h1 data-aos="fade-up"
     data-aos-duration="3000"  style="text-align:center; width:100%;font-size:40px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >REGISTRASI AKUN</strong></h1>
                        <span><em>Silahkan Registrasi Akun Dahulu Agar Mendapatkan Nomor Registrasi</em>
                        </span><br><br>
        </div><br>      
        <?= $this->session->flashdata('message'); ?>
        <div class="box" style="margin-top:100vh;margin:0 150px; width:30%; border-radius:10px;box-shadow:5px 5px; margin-top:-80px;">
            <div class="box-body">
                <form action="" method="POST" style="">
                    <div class="form-group" style="border-radius:5px;" >
                        <label for="nama_siswa">Nama Lengkap</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required>
                    </div>
                    <div class="" style="border-radius:5px;">
                        <label for="jenis_kelamin">Jenis Kelamin</label><br>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="" style="width:100% ; border-radius:5px; padding:7px; border:2px solid #6B728E" required>
                            <option value="#"><i>Jenis Kelamin</i></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div><br>
                    <div class="" style="border-radius:5px;">
                        <label for="kelas">kelas</label><br>
                        <select name="kelas" id="kelas" class="" style="width:100% ; border-radius:5px; padding:7px; border:2px solid #6B728E" required>
                            <option value="#"><i>kelas</i></option>
                            <option value="X IPA 1">X IPA 1</option>
                            <option value="X IPA 2">X IPA 2</option>
                            <option value="X IPS 1">X IPS 1</option>
                            <option value="X IPS 2">X IPS 2</option>
                            <option value="XI IPA 1">XI IPA 1</option>
                            <option value="XI IPA 2">XI IPA 2</option>
                            <option value="XI IPS 1">XI IPS 1</option>
                            <option value="XI IPS 2">XI IPS 2</option>
                            <option value="XII IPA 1">XII IPA 1</option>
                            <option value="XII IPA 2">XII IPA 2</option>
                            <option value="XII IPS 1">XII IPS 1</option>
                            <option value="XII IPS 2">XII IPS 2</option>
                        </select>
                    </div><br>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button style="border-radius:5px;" type="submit" name="submit" class="btn btn-primary pull-right btn-flat">Register</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>
</div>
<br><br><br>

<!-- 
<div class="row" style="margin-top:50px">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <h1 data-aos="fade-up"
     data-aos-duration="3000"  style="text-align:center; width:50%;font-size:20px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >REGISTRASI AKUN</strong></h1>
                        <span><em>Silahkan Registrasi Akun Dulu ya Biar Nanti Dapat Nomor Registrasi</em>
                        </span><br><br>
        <?= $this->session->flashdata('message'); ?>
        <div class="box" style="border-radius:10px;box-shadow:5px 5px">
            <div class="box-body">
                <form action="" method="POST" style="">
                    <div class="form-group" style="border-radius:5px;" >
                        <label for="nama_siswa">Nama Lengkap</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required>
                    </div>
                    <div class="" style="border-radius:5px;">
                        <label for="jenis_kelamin">Jenis Kelamin</label><br>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="" style="width:100% ; border-radius:5px; padding:7px; border:2px solid #6B728E" required>
                            <option value="#"><i>Jenis Kelamin</i></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div><br>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" required>
                    </div>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group" style="border-radius:5px;">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button style="border-radius:5px;" type="submit" name="submit" class="btn btn-primary pull-right btn-flat">Register</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div> -->