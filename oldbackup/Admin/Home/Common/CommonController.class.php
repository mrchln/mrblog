<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {

    public function index(){
        $fun=A('Fun');
        $Mb=A('Data');
        $Mb->isMobile();//检测终端
        $user=M(CONTROLLER_NAME);
        $arr_seach=$fun->seach($user,6,false,"now desc","classifyid=16");
        $article=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "list"=>$article,
            "page"=>$show,
            );
        $user=M('navigation');
        $select=$user->select();
        $this->assign('navigation',$select);
        $this->assign($arr_index);
        $this->display();
    }

    public function detailed(){
        $Mb=A('Data');
        $Mb->isMobile();//检测终端
        $user=M(CONTROLLER_NAME);
        //print_r($_GET['id']);
        if(!empty($_GET['id'])){
            $detailed=$user->where("id={$_GET['id']}")->select();
            //print_r($list);
            $before=$user->limit(1)->where("id>{$_GET['id']}")->select();
            //print_r($before);
            $after=$user->limit(1)->order('id desc')->where("id<{$_GET['id']}")->select();
            $user->where("id={$_GET['id']}")->setInc('readed',1);
            $arr_detailed=array(
                "list"=>$detailed,
                "before"=>$before,
                "after"=>$after,
                );
            $this->assign($arr_detailed);
        }
        $this->display();

    }
    

}
?>