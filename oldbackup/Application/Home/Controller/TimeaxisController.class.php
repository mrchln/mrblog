<?php
namespace Home\Controller;
use Think\Controller;

class TimeaxisController extends Controller {

    public function index(){
        $fun=A('Fun');
        $user=M(CONTROLLER_NAME);
        $select=$user->order('time desc')->select();
        $this->assign('data',$select);
		$this->assign('webinfo',$webinfo);
        $this->display();
    }

    
    
    

}
?>