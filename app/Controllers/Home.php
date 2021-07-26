<?php

namespace App\Controllers;

use App\Models\UrlModel;

class Home extends BaseController
{

	protected $urlmodel;
	public function __construct()
	{
		$this->urlmodel = model('UrlModel');
	}

	public function settemplate($req)
	{
		$data['page'] = $req['page'];
		$data['datasend'] = $req['datasend'];
		echo view('f_template', $data);
	}

	public function index()
	{
		$data['page'] = 'home';
		$data['datasend']['list'] = $this->urlmodel->getallUrl();
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
			$url = "https://";
		} else {
			$url = "http://";
		}
		$data['datasend']['protocol'] = $url;
		$this->settemplate($data);
	}

	public function savedataurl()
	{
		if (!empty($this->request->getPost())) {
			$datareturn['status'] = 'Y';
			$data = $this->request->getPost();
			$rs = $this->urlmodel->checkurl($data['url']);
			if (!empty($rs)) {
				$datareturn['status'] = 'N';
			} else {
				$this->urlmodel->saveUrl($data['url']);
			}
			echo json_encode($datareturn);
		}
	}
}
