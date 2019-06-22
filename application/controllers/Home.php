<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SI_Controller {

    public function index(){

		$this->load->view('index');
	}
}
