<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaksi Pengembalian
    </h1><br>
    <a href="<?= base_url('laporan/laporankembali/') ?>" target="_blank" class="btn btn-primary">laporan</a>
    
    
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box" style="margin-top: 10px;">
                <div class="box-body">
                    <table id="dataTable" class="table display responsive nowrap" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
                                <th>No Reg</th>
                                <th>Nama Peminjaman</th>
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
                                <?php if ($trx['tgl_kembali'] !== null) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $trx['no_reg'] ?></td>
                                        <td><?= $trx['nama_siswa'] ?></td>
                                        <td><?= $trx['judul_buku'] ?></td>
                                        <td><?= $trx['tgl_pinjam'] ?></td>
                                        <td><?= $trx['tgl_kembali'] ?></td>
                                        <td><?= $trx['denda'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('transaksi/hapus/'.$trx['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content -->


