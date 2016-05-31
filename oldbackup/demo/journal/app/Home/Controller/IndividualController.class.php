<?php
namespace Home\Controller;
use Think\Controller;
class IndividualController extends Controller {
    public function like(){
       //echo "商业期刊";
       $title="测试个人中心";
       $this->assign("title",$title);
       $title_indivi="兴趣爱好";
       $this->assign("title_indivi",$title_indivi);
       $this->display(); 

    }
    public function head(){
    	$title="我的头像";
        $this->assign("title_indivi",$title);
    	$this->display(); 
    }
    public function collection(){
    	
    	$title="我的收藏";
        $this->assign("title_indivi",$title);
    	$this->display(); 
    }
    public function basic(){
    	
    	$title="基本资料";
        $this->assign("title_indivi",$title);
    	$this->display(); 
    }
    public function details(){
    	
    	$title="详细资料";
        $this->assign("title_indivi",$title);
    	$this->display(); 
    }


}