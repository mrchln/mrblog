<?php
namespace Home\Controller;
use Think\Controller;
class TagseachController extends Controller {

    public function index(){

        if(!empty($_GET['tagid'])){
        $mood=M('mood');
        $skill=M('skill');
        $tag=M("tag");
        $fun=A("Fun");
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();
        $selecttag=$tag->where("id=%d",$_GET['tagid'])->select();
		$Easycode = new \Mrcln\code\Easycode;
		//dump($Easycode->encode());
        $arr_index=array(
            'navigation'=>$select,
            'modular'=>$modular,
            'mood'=>$mood,
            'skill'=>$skill,
            'fun'=>$fun,
            'tagid'=>$_GET['tagid'],
            'selecttag'=>$selecttag,
            'Easycode'=>$Easycode,
            'webinfo'=>webinfo(),
            );

        $this->assign($arr_index);
        }
        $this->display();
            
    }
}

