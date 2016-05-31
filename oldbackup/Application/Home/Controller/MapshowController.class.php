<?php
namespace Home\Controller;
use Think\Controller;

class MapshowController extends Controller {

    public function index(){
        $fun=A('Fun');
        //$Mb=A('Data');
        //$Mb->isMobile();//检测终端
        $dao=M('navigation');
        $class=M('modular');
        $user=M(CONTROLLER_NAME);
        $select=$dao->select();
        $selectsome=$user->order('time desc')->select();
        $modular=$class->select();
        $arr_index=array(
            'navigation'=>$select,
            'modular'=>$modular,
            'map'=>$selectsome,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
        $this->display();
    }
    

}
?>