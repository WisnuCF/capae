<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'AMM Margasari';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/home');
        $this->load->view('templates/front_footer');
    }
}
