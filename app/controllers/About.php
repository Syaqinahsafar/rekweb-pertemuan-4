<?php

class About extends Controller {
	public function index($name = 'Syaqinah', $status = 'Student', $age = 22)
	{
		$data['name'] = $name;
		$data['status'] = $status;
		$data['age'] = $age;
		$data['title'] = 'About Me';

		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$data['title'] = 'Pages';

		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}