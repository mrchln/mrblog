<?php
namespace Home\Controller;
use Think\Controller;

class NeighborsController extends Controller {

    public function index(){
        //$Mb=A('Data');
        //$Mb->isMobile();//检测终端
     	$user=M(CONTROLLER_NAME);
     	$friends=$user->select();
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();
        $arr_index=array(
            'friends'=>$friends,
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
     	$this->display();
    }


}
?>