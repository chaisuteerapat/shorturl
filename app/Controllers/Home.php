<?php

namespace App\Controllers;

use App\Models\UrlModel;

class Home extends BaseController
{

	protected $urlmodel;
	protected $ciqrcode;
	public function __construct()
	{
		$this->urlmodel = model('UrlModel');
	}

	public function settemplate($req)
	{
		$data['page'] = $req['page'];
		$data['datasend'] = $req['datasend'];
		echo view('f_other', $data);
	}

	public function index()
	{
		$data['page'] = 'homepage';
		$data['datasend']['list'] = $this->urlmodel->getallUrl();
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
			$url = "https://";
		} else {
			$url = "http://";
		}
		$data['datasend']['protocol'] = $url;
		$this->settemplate($data);
	}

}
