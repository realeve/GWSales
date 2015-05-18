<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DataInterface extends CI_Controller {

	public function __construct()
	{
	  	parent::__construct();
		$this->load->helper ( array (
			'form',
			'url' 
		) );
		$this->load->library('session');
		$this->load->model('DataInterfaceModel');
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
				$logindata['CreateID'] = $this->GetNewApiID();
				$logindata['resource'] = 'datainterface';
				$this->load->view('./templates/header',$logindata);
				$this->load->view('./templates/sidebar');
				$this->load->view('./templates/themepanel');
				$this->load->view('datainterface',$logindata);
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

	//新建接口的ID编号
	public function GetNewApiID()
	{
		return $this->DataInterfaceModel->GetNewApiID($this->session->userdata('username'));
	}

	//保存接口
	public function SaveAPI()
	{
		/*$APIData = array(
			'ApiID' 	=> 	$this->input->post('ApiID'),
			'ApiName' 	=>	$this->input->post('ApiName'),
			'Author' 	=> 	md5($this->input->post('Author')),
			'ApiDesc' 	=>	$this->input->post('ApiDesc'),
			'strSQL' 	=> 	$this->input->post('strSQL'),
			'DBID' 		=> 	$this->input->post('DBID'),
			'URL' 		=>	$this->input->post('URL')
		);*/
		$APIData = $this->input->post(NULL);
		//转换Params
		$string1 = "";
		foreach ($APIData['params'] as $str) $string1 .= $str . ",";
		$APIData['params'] = rtrim($string1, ",");

		$ReturnData = $this->DataInterfaceModel->SaveAPI($APIData);
		$this->output->set_output(json_encode($ReturnData));
	}

	/*Api信息读取
		Author:所有者
		ApiID:接口编号
		M:
			0.默认所有数据;
			1.输出列名;
			2.预览模式;
			3.DataTables数据格式；			
			'edit'.API编辑模式；
	*/
	public function Api()//读取接口数据
	{
		$APIData = $this->input->get(NULL);
		$Data = $this->DataInterfaceModel->Api($APIData);
	 	$this->output->set_output($Data);
	}

}

