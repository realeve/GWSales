<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function index()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'product'
        );
        $this->load->view('product_list', $logindata);
	}

	public function add()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'product'
        );

        $this->load->view('product_add', $logindata);
	}

}
