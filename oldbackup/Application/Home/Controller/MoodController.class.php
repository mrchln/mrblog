<?php
namespace Home\Controller;
use Think\Controller;

class MoodController extends Controller {

    public function index(){
        $fun=A('Fun');
        //$_SESSION['red']=1; //用于记录文章浏览量

        $user=M(CONTROLLER_NAME);
        $arr_seach=$fun->seach($user,6,false,"now desc");//参数格式seach($db,$num,$page_header,$order,$where)       
        if(!empty($_GET['tag'])){
            $tag=$_GET['tag'];
            //dump($tag);
            $map['tag'] = array('like','%'.$tag.',%');
            $arr_seach=$fun->seach($user,6,false,"now desc",$map);
        }
        $article=$arr_seach['selectArticle'];
		$Easycode = new \Mrcln\code\Easycode;
		$count = count($article);
		for ($i=0; $i < $count; $i++) { 
			$article[$i]['id'] = $Easycode->encode($article[$i]['id']);
		}
        $show=$arr_seach['show'];
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();

        $arr_index=array(
            "list"=>$article,
            "page"=>$show,
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
        $this->display();
    }
        public function city(){
        //读取城市名
         $cityName = $_GET['name'];
        echo '当前城市' . $cityName;
    }
    public function detailed(){
        //$Mb=A('Data');
        //$Mb->isMobile();//检测终端
        $dao=M('navigation');
        $class=M('modular');
        $select=$dao->select();
        $modular=$class->select();
        $arr_index=array(
            "list"=>$article,
            "page"=>$show,
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
        $user=M(CONTROLLER_NAME);
        //print_r($_GET['id']);
        $Easycode = new \Mrcln\code\Easycode;
		$id = $Easycode->decode($_GET['id']);
        if(!empty($id)){
            $tag=M('tag');
            $detailed=$user->where("id=%d",$id)->select();
            if($detailed == null)die("博主：您访问的文章不存在！");
            //print_r($list);
            $before=$user->limit(1)->where("id>{$id}")->select();
            //print_r($before);
            $after=$user->limit(1)->order('id desc')->where("id<{$id}")->select();
            /*
             * 停用较精确计算浏览文章量，改用每次读取文章都计算
             *
             * if($_SESSION['red']==1){
             $user->where("id={$_GET['id']}")->setInc('readed',1);
              $_SESSION['red']="";
             }
            */
            $user->where("id={$id}")->setInc('readed',1);
             //dump($_SESSION['red']);
           //dump($detailed[0]['tag']);
           $source=$detailed[0]['tag'];
           $taglist = explode(',',$source); 
           $arr=array(
                'tags'=>$taglist,
                'tagdata'=>$tag,

                );
            $this->assign($arr);

            //dump($detailed);
			$before[0]['id'] = $Easycode->encode($before[0]['id']);
			$after[0]['id'] = $Easycode->encode($after[0]['id']);
			$detailed[0]['id'] = $Easycode->encode($detailed[0]['id']);
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