<?php
Class Controller{

	// Exemplo for load Template
	public function loadTemplate($viewName){
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName){
		require 'views/'.$viewName.'.php';
	}
}
?>