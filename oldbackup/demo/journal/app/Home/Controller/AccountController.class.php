<?php
namespace Home\Controller;
use Think\Controller;
class AccountController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="账号设置";
       $this->assign("title",$title);
       $this->display(); 

    }

    public function bookshelf(){
    	$this->display(); 
    }
}