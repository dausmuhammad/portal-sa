<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requirement extends CI_Controller
{
    public function index()
    {
        $this->load->view('requirement/index');
    }
}