<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserInfo extends CI_Controller {

    public function index()
    {
        $this->load->view('user_information');
    }
}
