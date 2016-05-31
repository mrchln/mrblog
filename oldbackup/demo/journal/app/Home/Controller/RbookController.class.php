<?php
namespace Home\Controller;
use Think\Controller;
class RbookController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试阅读文章";
       $this->assign("title",$title);
       $this->display(); 

    }


}