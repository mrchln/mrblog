<?php
namespace Home\Controller;
use Think\Controller;
class JreadController extends Controller {
    public function index(){
       //echo "商业期刊";
       $title="测试期刊阅读";
       $this->assign("title",$title);
       $this->display(); 

    }


}