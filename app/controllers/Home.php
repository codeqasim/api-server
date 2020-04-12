<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    /*$this->output->cache(60*12);*/

        $this->data['title'] = 'Home';
        $this->data['body'] = 'home';
		$this->load->view('temp', $this->data);

	}

    public function signup()
	{
		$this->load->view('welcome_message');
	}
}
