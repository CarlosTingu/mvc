<?php
class HomeController extends Controller {

	public function index() {

		$user = new User();

		$dados['users'] = $user->get();

		$this->loadTemplate('home', $dados);
	}
}
?>