<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
	public function __construct()
	{
	  	parent::__construct();
		$this->load->helper ( array (
			'form',
			'url' 
		) );
		$this->load->library('session');
	}
	public function index()
	{
		if ($this->session->userdata('userrole')>0)
		{
			//$this->output->set_output($logindata);//调试
			//$this->session->sess_destroy();//注销
			if($this->session->userdata('logged_in')==true)
			{
				$logindata['logged_in'] = true;		
				$logindata['username'] = $this->session->userdata('username');
				$logindata['userrole'] = $this->session->userdata('userrole');	
				$logindata['FullName'] = $this->session->userdata('FuleName');	
				$logindata['GroupID'] = $this->session->userdata('GroupID');	
				
				$logindata['resource'] = 'product';
				$this->load->view('./templates/header',$logindata);
				$this->load->view('./templates/sidebar');
				$this->load->view('./templates/themepanel');
				$this->load->view('product');
				$this->load->view('./templates/quicksidebar');
				$this->load->view('./templates/footer',$logindata);			
			}	
		}
		elseif($this->session->userdata('userrole')==-1 && $this->session->userdata('logged_in') == true && $this->session->userdata('username')!='')
		{
			$this->load->view('framework/lockscreen');
		}
		else{
			$this->load->view('login');
		}		
	}

	public function add()
	{			
		if ($this->session->userdata('userrole')>0)
		{
			//$this->output->set_output($logindata);//调试
			//$this->session->sess_destroy();//注销
			if($this->session->userdata('logged_in')==true)
			{
				$logindata['logged_in'] = true;		
				$logindata['username'] = $this->session->userdata('username');
				$logindata['userrole'] = $this->session->userdata('userrole');	
				$logindata['FullName'] = $this->session->userdata('FuleName');	
				$logindata['GroupID'] = $this->session->userdata('GroupID');	
				
				$logindata['resource'] = 'product';
				$this->load->view('./templates/header',$logindata);
				$this->load->view('./templates/sidebar');
				$this->load->view('./templates/themepanel');
				$this->load->view('product_add');
				$this->load->view('./templates/quicksidebar');
				$this->load->view('./templates/footer',$logindata);			
			}	
		}
		elseif($this->session->userdata('userrole')==-1 && $this->session->userdata('logged_in') == true && $this->session->userdata('username')!='')
		{
			$this->load->view('framework/lockscreen');
		}
		else{
			$this->load->view('login');
		}	
	}

}
