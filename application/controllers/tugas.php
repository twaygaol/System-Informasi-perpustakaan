<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function index()
    {
        $data = [
            'title'    => 'Tugas dan fungsi perpustakaan',
            'buku'     => $this->db->get('buku')->result_array()
        ];
        $this->template->load('user/template', 'user/tugas', $data,);
    }

    
}
