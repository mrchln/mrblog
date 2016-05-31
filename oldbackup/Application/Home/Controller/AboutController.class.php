<?php
namespace Home\Controller;
use Think\Controller;

class AboutController extends Controller {

    public function index(){
        //$Mb=A('Data');
        //$Mb->isMobile();//检测终端
        $user=M(CONTROLLER_NAME);
        $about=$user->select();
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();
        $arr_index=array(
            'about'=>$about,
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
        $this->display();
    }


}
?>