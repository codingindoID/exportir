<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->_hmvc_fixes();
		$this->menu();
	}

	function _hmvc_fixes()
	{
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI = &$this;
	}

	function menu()
	{
		$list = [];
		$menu = $this->db->get('kategori')->result();
		if ($menu) {
			foreach ($menu as $m) {
				$data = [
					'id_kategori'		=> $m->id_kategori,
					'kategori'			=> $m->nama_kategori,
					'sub_menu'			=> $this->_sub_menu($m->id_kategori)
				];
				array_push($list, $data);
			}
		}
		return $list;
	}

	function _sub_menu($id_kategori)
	{
		return $this->db->get_where('menu', ['id_kategori'	=> $id_kategori])->result();
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
