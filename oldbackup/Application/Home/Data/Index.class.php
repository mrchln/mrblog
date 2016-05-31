<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $t=new DataController();
        $t->isMobile();//检测终端
        $user=M('article');
        
/*****************分页显示start*************************/
        $arr_page=$this->page($user,5);
        $show=$arr_page['show'];
        $Page=$arr_page['Page'];
        $article = $user->order('now')->limit($Page->firstRow.','.$Page->listRows)->select();
        if(!empty($_POST['seach_classify'])){
            $seach_classify=$_POST['seach_classify'];
            $arr_page=$this->page($user,5,"classify='$seach_classify'");
            $show=$arr_page['show'];
            $Page=$arr_page['Page'];

            //dump($Page->first);   
            $article=$user->order("now")->limit($Page->firstRow.','.$Page->listRows)->where("classify='$seach_classify'")->select();
        }
        //dump('http://__APP__/home/Mt');
/*****************分页显示end************************/
        $arr_index=array(
            "list"=>$article,
            "page"=>$show,
            );
     // dump($arr_index);
        $this->assign($arr_index);
        $this->display();
    }
    public function page($db,$num,$where){
        $count = $db->where($where)->count();// 
        $Page       = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        return $arr_page = array(
            "show"=>$show,
            "Page"=>$Page,
            "count"=>$count,
            );
        
    }

}
?>