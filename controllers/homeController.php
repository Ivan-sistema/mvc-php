<?php

class homeController extends controller{

public function __construct(){
	parent::__construct();
}

public function index(){
	
	$data = array();
	// $banners = new Banners();
	
	// $data['lista'] = $banners->getAllLimit();
	$this->loadTemplate('home', $data);
}


}