<?php

namespace App\Controllers;

use App\Models\UrlModel;

class Q extends BaseController
{

	protected $urlmodel;
	public function __construct()
	{
		$this->urlmodel = model('UrlModel');
	}

	public function index()
	{
		$uri = service('uri');
		$url = $uri->getSegments();
		if (!empty($url) && !empty($url[1])) {
			$url = htmlentities($url[1]);
			$data['rs'] = $this->urlmodel->checkisshorturl($url);
			if (empty(strpos($data['rs']->short_url_full, 'http'))) {
				$data['rs']->short_url_full = 'http://' . $data['rs']->short_url_full;
			}
			echo view('redirectpage', $data);
		} else {
			return redirect()->to('/');
		}
	}
}
