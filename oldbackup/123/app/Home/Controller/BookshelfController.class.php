<?php
namespace Home\Controller;
use Think\Controller;
class BookshelfController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试书架";
       $this->assign("title",$title);
       $this->display(); 

    }

    public function bookshelf(){
    	$this->display(); 
    }
}