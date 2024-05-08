<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{
    public function index()
    {
        $data = [
            'title'    => 'Visi & Misi Perpustakaan',
            'buku'     => $this->db->get('buku')->result_array()
        ];
        $this->template->load('user/template', 'user/visi', $data,);
    }

    
}
