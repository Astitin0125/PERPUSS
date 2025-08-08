<?php

class Dashboard extends CI_Controller {
	public function index()
	{
		
		$isi['judul']    = 'Dashboard';
		$this->load->view('v_dashboard',$isi);
	}
}
?>
