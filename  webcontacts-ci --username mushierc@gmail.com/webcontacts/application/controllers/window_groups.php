<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Window_groups extends CI_Controller{
	public function index(){
		$this->load->view('groups');
	}
}
?>