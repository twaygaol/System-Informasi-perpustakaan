<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi', 'm_transaksi');
    }

    public function index()
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'keperpus') {
            redirect(base_url());
        }
        $data['title']   = 'Laporan';
        $data['laporan'] = $this->db->order_by('id', 'desc')->get('laporan')->result_array();
        $this->template->load('admin/template', 'admin/laporan/index', $data);
    }

    public function buat()
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'keperpus') {
            redirect(base_url());
        }
        if(isset($_POST['submit'])){
            $judul_laporan =  $this->input->post('judul_laporan');
            $data = [
                'tgl_buat'      => $this->input->post('tgl_buat'),
                'judul_laporan' =>$judul_laporan,
                'jenis'         => $this->input->post('jenis'),
            ];
            $tgl_awal  = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');
            if($tgl_awal){
                $data['tgl_awal'] = $tgl_awal;
            }
            if($tgl_akhir){
                $data['tgl$tgl_akhir'] = $tgl_akhir;
            }
            $data2['transaksi']     = $this->m_transaksi->getlaporan();
            $data2['judul_laporan'] = $judul_laporan;

            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename =$judul_laporan.".pdf";
            $this->pdf->save_pdf('admin/laporan/view', $data2);
            if($this->db->insert('laporan', $data)){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Buat Laporan!</div>');
                redirect('/laporan');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Buat Laporan!</div>');
                redirect('/laporan');
            }  
        }
    }

    public function kembali($id='')
    {
        if (!$this->session->userdata('isLogin')) {
            redirect(base_url());
        }
        if($id !== ''){
            $data['transaksi']     = $this->m_transaksi->getById($id);
            $data['judul_laporan'] = "Laporan Transaksi - ".$data['transaksi']['nama_siswa'];
           
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename =$data['judul_laporan'].".pdf";
            $this->pdf->load_view('admin/laporan/view-singgle', $data);
        }else{
            redirect('/');
        }
    }

    // ============ Cetak laporan pinjam buku ==========================
    public function laporanpinjam()
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'admin') {
            redirect(base_url());
        }

        $data['title']  = 'Laporan Transaksi Pinjaman buku';
        $data['transaksi'] = $this->m_transaksi->getPinjam();
        $this->template->load('admin/template', 'admin/cetak/viewpinjam', $data);
    }

    public function laporankembali()
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') !== 'admin') {
            redirect(base_url());
        }

        $data = [
            'title'     => 'Laporan transaksi pengembalian Buku',
            'transaksi' => $this->m_transaksi->getData(),
            'jml_buku'  => $this->db->get('buku')->num_rows(),
            'denda'     => $this->db->select_sum('denda')->get('transaksi')->row_array()['denda'],
            'pinjam'    => $this->db->get_where('transaksi', ['tgl_kembali'=>null])->num_rows(),
            'kembali'   => $this->db->get_where('transaksi', ['tgl_kembali !='=>null])->num_rows(),
        ];

        $this->template->load('admin/template', 'admin/cetak/viewkembali', $data);
    }
    

    // ============ Cetak laporan pinjam buku ==========================

    public function laporanuser($id='')
    {
        if (!$this->session->userdata('isLogin')) {
            redirect(base_url());
        }
        if($id !== ''){
            $no_reg = $this->session->userdata('no_reg');
            $user   = $this->db->get_where('siswa', ['no_reg'=>$no_reg])->row_array();
            $data['transaksi']     = $this->m_transaksi->getById($id);
            $data['judul_laporan'] = "Laporan Transaksi - ".$user['nama_siswa'];
            
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->filename =$data['judul_laporan'].".pdf";
            $this->pdf->load_view('admin/laporan/view-singgle', $data);
        }else{
            redirect('/');
        }
    }

    public function delete($id)
    {
        if (!$this->session->userdata('isLogin') || $this->session->userdata('hak_akses') != 'keperpus') {
            redirect(base_url());
        }
        $dokumen = $this->db->get_where('laporan', ['id'=>$id])->row_array();
        $path    = 'assets/file/laporan/'.$dokumen['judul_laporan'].'.pdf';
        if($this->db->delete('laporan', ['id'=>$id]) && unlink($path)){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Hapus Laporan!</div>');
            redirect('/laporan');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Hapus Laporan!</div>');
            redirect('/laporan');
        }
    }
}
