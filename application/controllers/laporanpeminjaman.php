<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporanpeminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi', 'm_transaksi');
    }
    public function index()
    {
        $data['title']   = 'Laporan peminjam buku';
        $data['laporanpinjam'] = $this->m_transaksi->getPinjam();
        $this->template->load('user/laporan', $data,);
    }

    
}
