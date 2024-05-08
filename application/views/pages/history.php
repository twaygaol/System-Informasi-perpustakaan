             
<div class="row" >
    <div class="col" style="margin-top:10%;display:flex;flex-direction:row;">
        <div class="">
        <h1 data-aos="fade-up"
     data-aos-duration="3000"  style="text-align:center; width:100%;font-size:20px; padding:10px; border-radius:40px;color:white; background-color:coral;"><strong >History Peminjaman Buku </strong></h1>
                        <span>Koleksi-koleksi buku yang anda baca dapat anda lihat disini <br>dan harap mengembalikan sesuai waktu peminjaman ya 👍
                        </span>
        </div><br>      
        <div class="box" style="margin:0 50px;">
            <div class="box-body">
                <table id="dataTable" class="table display responsive nowrap" style="width:100%">
                    <thead class="" style="background:gray;color:white;border-radius:20px;">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Denda</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($transaksi as $trx) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $trx['judul_buku'] ?></td>
                                <td><?= date('d-M-Y', strtotime($trx['tgl_pinjam'])) ?></td>
                                <td><?= ($trx['tgl_kembali']!==null)?date('d-M-Y', strtotime($trx['tgl_kembali'])):'-' ?></td>
                                <td><?= 'Rp.'.number_format($trx['denda']) ?></td>
                                <td class="text-center">
                                    <?php if($trx['tgl_kembali'] !== null): ?>
                                        <a href="<?= base_url('laporan/laporanuser/'.$trx['id']) ?>" target="_blank" class="btn btn-sm btn-success">Cetak</a>
                                    <?php else: ?>
                                        <a href="<?= base_url('laporan/kembali/'.$trx['id']) ?>" class="btn btn-sm btn-success disabled">Cetak</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>