<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'order'
        );

        $this->load->view('order_list',$logindata);
    }

	public function add()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'order'
        );

        $this->load->view('order_add',$logindata);
	}
	
	public function detail()
	{
        $logindata = array(
            'username'  => 'libin',
            'userrole'  => '9',
            'logged_in' => TRUE,
            'resource'  => 'order'
        );

        $this->load->view('order_detail',$logindata);
	}	
}
