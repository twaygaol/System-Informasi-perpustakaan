<section class="content-header">
    <h1>
        Laporan Peminjam Buku
    </h1>
    
</section>


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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($laporanpinjam as $trx) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $trx['no_reg'] ?></td>
                                    <td><?= $trx['nama_siswa'] ?></td>
                                    <td><?= $trx['judul_buku'] ?></td>
                                    <td><?= date('d-M-Y', strtotime($trx['tgl_pinjam'])) ?></td>
                                    <td><?= ($trx['tgl_kembali']=='')?'':date('d-M-Y', strtotime($trx['tgl_kembali'])) ?></td>
                                    <td><?= ($trx['denda']=='')?'':'Rp.'.number_format($trx['denda']) ?></td>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

    <script>
		window.print();
	</script>
<!-- 
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
</script> -->