<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tentang Kami';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/about');
        $this->load->view('templates/front_footer');
    }
}
