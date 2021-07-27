<?php

namespace App\Controllers;

use App\Models\UrlModel;
use App\Libraries\Ciqrcode;

use function bin2hex;
use function file_exists;
use function mkdir;

class Backend extends BaseController
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
		echo view('f_template', $data);
	}

	public function index()
	{
		$data['page'] = 'list';
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
				if (empty(strpos($data['url'], 'http'))) {
					$setqrcode = 'http://' . $data['url'];
				}
				$rsfile   = $this->generate_qrcode($setqrcode);
				$data['file'] = $rsfile;
				$this->urlmodel->saveUrl($data);
			}
			echo json_encode($datareturn);
		}
	}

	function generate_qrcode($data)
	{
		/* Load QR Code Library */
		$this->ciqrcode = new Ciqrcode();

		/* Data */
		$hex_data   = bin2hex($data);
		$save_name  = $hex_data . '.png';

		/* QR Code File Directory Initialize */
		$dir = 'qrcode/';
		// $dir = '/public/qrcode';

		if (!file_exists($dir)) {
			mkdir($dir, 0775, true);
		}

		/* QR Configuration  */
		$config['cacheable']    = true;
		$config['imagedir']     = $dir;
		$config['quality']      = true;
		$config['size']         = '1024';
		$config['black']        = [255, 255, 255];
		$config['white']        = [255, 255, 255];
		$this->ciqrcode->initialize($config);

		/* QR Data  */
		$params['data']     = $data;
		$params['level']    = 'L';
		$params['size']     = 10;
		$params['savename'] = FCPATH . $config['imagedir'] . $save_name;

		$this->ciqrcode->generate($params);

		/* Return Data */
		return ['file'    => $dir . $save_name];
	}
}
