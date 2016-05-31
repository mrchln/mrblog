<?php
namespace Home\Controller;
use Think\Controller;

class MessageController extends Controller {

    public function index(){
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();
        $arr_index=array(
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
    	$this->display();
    }

}