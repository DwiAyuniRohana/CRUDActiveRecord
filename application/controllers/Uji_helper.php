<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uji_helper extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('saya');
    }

    public function index()
    {
        $data['nama_saya'] = "Catur Maldini";
        $data['nilai1'] = 4;
        $data['nilai2'] = 8;
        $data['category_id'] = 1;

        $this->load->view('form_uji', $data);
    }
}
