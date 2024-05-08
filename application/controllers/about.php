<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data = [
            'title'    => 'Profile perpustakaan',
            'buku'     => $this->db->get('buku')->result_array()
        ];
        $this->template->load('user/template', 'user/about', $data,);
    }

    
}
