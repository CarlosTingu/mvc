<?php
class Controller {

	public function loadView($viewName, $viewData = []) {

		extract($viewData);
		include './view/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = []) {

		include './view/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = []) {
		
		extract($viewData);
		include './view/'.$viewName.'.php';
	}
}
?>