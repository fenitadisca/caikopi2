<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
public function landing ()
{
    $this->load->view('auth/landing');
}
}