<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikeldetail2 extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Artikel';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/artikel_detail2');
        $this->load->view('templates/front_footer');
    }
}
