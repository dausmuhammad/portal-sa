<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tim extends CI_Controller
{
    public function index()
    {
        $this->load->view('tim/index');
    }
}
