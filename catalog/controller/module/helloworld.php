<?php
	/**
	 * Created by PhpStorm.
	 * User: Acer splaa
	 * Name: Andrey
	 * Date: 08.04.2018
	 * Time: 16:18
	 *
	 * Now go to your browser and type the URL: http://localhost/Opencart/index.php?route=module/helloworld
	 */

	class ControllerModuleHelloworld extends Controller
	{
		public function index()
		{


			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') .
				'/template/module/helloworld.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/helloworld.tpl';

			} else {
				$this->template = 'default/template/module/helloworld.tpl';
			}
/*
			$this->load->model('catalog/helloworld');
			$temp=$this->model_catalog_helloworld->function_mytest();
			$temp_info=$this->model_catalog_helloworld->getInformations();
			$temp_hello_world=$this->model_catalog_helloworld->getHelloWorldsAll();

			$this->data['temp'] = $this->model_catalog_helloworld->function_helloworld();
			$this->data['temp_info'] = $this->model_catalog_helloworld->getInformations();
			$this->data['hello_world'] = $this->model_catalog_helloworld->getHelloWorldsAll();*/


			$this->data['test_out'] = 'Тестовый вывод с контролера';

			$this->response->setOutput($this->render());
		}

	}