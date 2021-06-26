<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ecomerce extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'E Comerce';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/ecomerce');
        $this->load->view('templates/front_footer');
    }
}
