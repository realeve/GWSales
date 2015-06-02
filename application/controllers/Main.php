<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'index'
        );

        $this->load->view('main', $logindata);
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */