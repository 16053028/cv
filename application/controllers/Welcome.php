<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = [
			'page_title'    => 'Portfolio',
			'content'       => 'cv/index',
		];

		$data['css_custom'] = [
			'creative-cv/css/aos.css?ver=1.1.0',
			'creative-cv/css/bootstrap.min.css?ver=1.1.0',
			'creative-cv/css/main.css',
		];

		$data['js_custom'] = [
			'creative-cv/js/core/jquery.3.2.1.min.js?ver=1.1.0',
			'creative-cv/js/core/popper.min.js?ver=1.1.0',
			'creative-cv/js/core/bootstrap.min.js?ver=1.1.0',
			'creative-cv/js/now-ui-kit.js?ver=1.1.0',
			'creative-cv/js/aos.js?ver=1.1.0',
			'creative-cv/scripts/main.js?ver=1.1.0',
		];
		$this->load->view('_layout/cv.php', $data);
	}
}
