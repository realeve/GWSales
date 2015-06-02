<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	public function index()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'customer'
        );

        $this->load->view('customer_list', $logindata);
	}

	public function edit()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'customer'
        );

        $this->load->view('customer_edit', $logindata);
	}

}
