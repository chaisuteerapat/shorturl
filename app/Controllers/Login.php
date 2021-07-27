<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
	protected $loginmodel;

	public function __construct()
	{
		$this->loginmodel = model('LoginModel');
	}

	public function index()
	{
		echo view('login');
	}

	public function checklogin()
	{
		if (!empty($this->request->getPost())) {
			$datareturn['status'] = 'N';
			$data = $this->request->getPost();
			$rs = $this->loginmodel->checklogin($data);
			if (!empty($rs)) {
				$session = session();
				$newdata = [
					'member_id' => $rs->member_id,
					'member_name' => $rs->member_name,
					'member_lname' => $rs->member_lname,
					'member_role' => $rs->member_role
				];
				$session->set($newdata);
				$datareturn['status'] = 'Y';
			}
			echo json_encode($datareturn);
		}
	}
}
