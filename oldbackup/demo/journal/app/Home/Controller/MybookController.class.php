<?php
namespace Home\Controller;
use Think\Controller;
class MybookController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="我的书籍";
       $this->assign("title",$title);
       $this->display(); 

    }

    public function bookshelf(){
    	$this->display(); 
    }
}