<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
	}
	
	 public function index()
	{
		$data['pageTitle'] = 'Dashboard';
		$data['pageContent'] = $this->load->view('dashboard/index', $data, TRUE);
		$data['pesanKetiga'] = 'Data ini dari Controller Welcome';

		

		// Memanggil model film
		$this->load->model('model_film');

		// Mengambil data film dari fungsi getFilm pada model_film
		$data['film'] = $this->model_film->getFilm();
		
		// Memanggil view layout.php
		$this->load->view("template/layout", $data);
	}
}
