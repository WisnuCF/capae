<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Contact';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/contact');
        $this->load->view('templates/front_footer');
    }
}
