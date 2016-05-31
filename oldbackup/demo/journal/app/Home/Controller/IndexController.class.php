<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试首页";
       $this->assign("title",$title);
       //dump(__ACTION__);
       $this->display(); 

    }

    public function bookshelf(){
    	$this->display(); 
    }
}