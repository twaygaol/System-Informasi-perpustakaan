<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kata extends CI_Controller
{
    public function index()
    {
        $data = [
            'title'    => 'kata sambutan',
            'buku'     => $this->db->get('buku')->result_array()
        ];
        $this->template->load('user/template', 'user/kata', $data,);
    }

    
}
