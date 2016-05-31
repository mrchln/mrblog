<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller {

	public function index(){

		
	}
	public function head(){
		$user=M('navigation');
		$select=$user->select();
		$this->assign('navigation',$select);
		//$this->display();
	}
	public function footer(){
		$this->assign('webinfo',webinfo());
	}

}