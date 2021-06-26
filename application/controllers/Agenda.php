<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Agenda';
        $this->load->view('templates/front_header', $data);
        $this->load->view('templates/front_topbar');
        $this->load->view('front/agenda');
        $this->load->view('templates/front_footer');
    }
}
