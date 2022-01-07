<?php
class TestController extends CI_Controller{
	/*
	public function __construct()
  {
	  
    parent::__construct();
    if( ! $this->session->userdata('id') )
    return redirect('login');
    
  }
  */
  
	public function index(){
		echo "default index method call";
	}
	
}


?>