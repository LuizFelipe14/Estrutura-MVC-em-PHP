<?php
Class homeController extends Controller{

	public function index(){
		$anuncios = new Anuncios();
		
		$this->loadTemplate('home');
	}
}
?>