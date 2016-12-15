<?php
namespace stormwind\hw3\controllers;

require_once('controller.php');
class ReadController extends Controller
{
	public function handlerRequest($data){
		$model = new \stormwind\hw3\models\ReadModel();



		$model->initConnection();
		$fieldName = array();
		if (isset($data['name'])){
			$name = $data['name'];
			$method = $data['method'];
			
			if ($method == "all") {

				$model->readColumnfromTable($name);
			}
			else if ($method == "query") {
				$model->queryFromTable($name);
			}
			
			
		}
		
		//$view->render($arr);


		
	}
}
?>