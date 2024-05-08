<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaksi Peminjaman
    </h1><br>
	<!-- <a href="<?php base_url('/laporanpeminjaman')?>" target="_Blank">
	<button class="btn btn-primary" style="color:">Laporan</button>
	</a> -->

	<a href="<?= base_url('laporan/laporanpinjam/') ?>" target="_blank" class="btn btn-primary">laporan</a>
    
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <?= $this->session->flashdata('message'); ?>
            <div class="box" style="margin-top: 10px;">
                <div class="box-body">
                    <table id="dataTable" class="table display responsive nowrap" style="width:100%">
                        <thead class="bg-primary">
                            <tr>
                                <th>No</th>
								<th>No Reg</th>
                                <th>Nama Peminjam</th>
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
                                    <td><?= $trx['no_reg'] ?></td>
                                    <td><?= $trx['nama_siswa'] ?></td>
                                    <td><?= $trx['judul_buku'] ?></td>
                                    <td><?= date('d-M-Y', strtotime($trx['tgl_pinjam'])) ?></td>
                                    <td><?= ($trx['tgl_kembali']=='')?'':date('d-M-Y', strtotime($trx['tgl_kembali'])) ?></td>
                                    <td><?= ($trx['denda']=='')?'':'Rp.'.number_format($trx['denda']) ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning kembali" data-id="<?= $trx['id'] ?>" data-toggle="modal" data-target="#modal-kembali">kembali</button></td>
                                    </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<div class="modal fade" id="modal-kembali">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Pengembalian Buku</h4>
		</div>
		<form id="form-kembali" action="" method="POST" role="form">
			<div class="modal-body">
				<div class="form-group">
					<label for="no_reg2">No Registrasi</label>
					<input type="text" class="form-control" id="no_reg2" name="no_reg2" readonly required>
				</div>
				<div class="form-group">
					<label for="nama_user2">Nama Peminjam</label>
					<input type="text" class="form-control" id="nama_user2" name="nama_user2" readonly required>
				</div>
				<div class="form-group">
					<label for="kd_buku2">Kode Buku</label>
					<input type="text" class="form-control" id="kd_buku2" name="kd_buku2" readonly required>
				</div>
				<div class="form-group">
					<label for="judul_buku2">Judul Buku</label>
					<input type="text" class="form-control" id="judul_buku2" name="judul_buku2" readonly required>
				</div>
				<div class="form-group">
					<label for="tgl_pinjam2">Tanggal Pinjam</label>
					<input type="date" class="form-control" id="tgl_pinjam2" name="tgl_pinjam2" readonly required>
				</div>
				<div class="form-group">
					<label for="tgl_kembali">Tanggal kembali</label>
					<input type="date" class="form-control" id="tgl_kembali" value="<?= date('Y-m-d') ?>" name="tgl_kembali" readonly required>
					<small class="text-warning">
						*durasi peminjaman maksimal 7 hari, lebih dari itu akan dikenakan denda
					</small>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Rp.</span>
					<input type="text" class="form-control" id="denda" name="denda" readonly>
              	</div>
				<small  class="text-danger">*Telat <span id="jml-hari">0</span> hari</small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
	$(document).ready(function(){

		function jmlhari(a, b){
			let hari = 86400000; // format perhitungan dalam 1 hari
			let tgl_1 = new Date(a);
			let tgl_2 = new Date(b);
			return Math.round(Math.round((tgl_2.getTime() - tgl_1.getTime())/hari));
      	}

		$( "#nama_user" ).autocomplete({
			source: "<?php echo site_url('admin/get_siswa/?');?>",
			select: function (event, ui) {
				$('#no_reg').val(ui.item.no_reg);
			}
		});

		$( "#judul_buku" ).autocomplete({
			source: "<?php echo site_url('admin/get_buku/?');?>",
			select: function (event, ui) {
				$('#kd_buku').val(ui.item.kd_buku);
			}
		});

		$(document).on('click', '.kembali', function(){
			let id = $(this).data('id');
			$('#form-kembali').attr('action', "<?php echo site_url('transaksi/pengembalian/');?>"+id);
			$.ajax({
				url: "<?php echo site_url('transaksi/getdata/');?>"+id,
				method:'GET',
				dataType:'JSON',
				data: {id: id},
				success: function(res){
					$("#no_reg2").val(res.no_reg);
					$("#nama_user2").val(res.nama_siswa);
					$("#kd_buku2").val(res.kd_buku);
					$("#judul_buku2").val(res.judul_buku);
					$("#tgl_pinjam2").val(res.tgl_pinjam);
					let tgl_kembali = $('#tgl_kembali').val();
					let jml_hari = jmlhari(res.tgl_pinjam, tgl_kembali);
					if(jml_hari > 7){
						let denda = (jml_hari-7)*1000;
						$('#jml-hari').html(jml_hari-7);
						$('#denda').val(denda);
					}
				}
			})
		});
	});
</script>