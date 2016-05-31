<?php
namespace Home\Controller;
use Think\Controller;
class MtController extends Controller {
    public function index(){

    	$friend=M("neighbors");
    	$user=M('mood');
     	$friends=$friend->select();
        $locationArr=array(
            __APP__=>'当前位置：首页>心情文章',
            );
        //dump($user);
        $this->assign('locationArr',$locationArr);
/*****************分页显示start*************************/
        $arr_page=$this->page($user,10);
        $show=$arr_page['show'];
        $Page=$arr_page['Page'];
        $article = $user->order('now desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        if(!empty($_POST['seach_classify'])){
            $seach_classify=$_POST['seach_classify'];
            $arr_page=$this->page($user,10,"classify='$seach_classify'");
            $show=$arr_page['show'];
            $Page=$arr_page['Page'];

            dump($Page->first);     
            $article=$user->order("now desc")->limit($Page->firstRow.','.$Page->listRows)->where("classify='$seach_classify'")->select();
        }
		$Easycode = new \Mrcln\code\Easycode;
		$count = count($article);
		for ($i=0; $i < $count; $i++) { 
			$article[$i]['id'] = $Easycode->encode($article[$i]['id']);
		}
		//dump($article);
        //dump($list);
/*****************分页显示end************************/
        $arr_index=array(
            "friends"=>$friends,
            "friends_logo"=>$friends,
            "list"=>$article,
            "page"=>$show,
            'webinfo'=>webinfo(),
            'Easycode'=>$Easycode,
            );
       // dump($article);
        $this->assign($arr_index);
        $this->assign('time',$arr_index);
    	$this->display();
    }
     public function center(){
        $user=M('mood');
/*****************分页显示start*************************/
        $arr_page=$this->page($user,10);
        $show=$arr_page['show'];
        $Page=$arr_page['Page'];
        $article = $user->order('now desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        if(!empty($_POST['seach_classify'])){
            $seach_classify=$_POST['seach_classify'];
            $arr_page=$this->page($user,10,"classify='$seach_classify'");
            $show=$arr_page['show'];
            $Page=$arr_page['Page'];

            dump($Page->first);     
            $article=$user->order("now desc")->limit($Page->firstRow.','.$Page->listRows)->where("classify='$seach_classify'")->select();
        }
		$weizhi = "心情文章";
		$locationArr=array(
            __CONTROLLER__=>'当前位置：<a style="color: #fff;" href="'.__CONTROLLER__.'">首页</a>>'.$weizhi,
            'htmltitle' => $article[0]['title'].'  |  汉服青史'
        );
		$Easycode = new \Mrcln\code\Easycode;
		$count = count($article);
		for ($i=0; $i < $count; $i++) { 
			$article[$i]['id'] = $Easycode->encode($article[$i]['id']);
		}
        //dump($list);
/*****************分页显示end************************/
        $arr_index=array(
            "friends"=>$friends,
            "friends_logo"=>$friends,
            "list"=>$article,
            "time"=>date('m,d',strtotime($article[0]['now'])),
            "page"=>$show,
            'webinfo'=>webinfo(),
            'locationArr'=>$locationArr,
            );
        //dump($article);
        $this->assign($arr_index);
        $this->assign('time',$arr_index);
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
    public function detailed(){
        
        //dump(__CONTROLLER__);
        
    	$user=M('mood');
    	//print_r($_GET['id']);
    	if(!empty($_GET['id'])){
    		$tag=M('tag');
			$Easycode = new \Mrcln\code\Easycode;
			$_GET['id'] = $Easycode->decode($_GET['id']);
	    	$detailed=$user->where("id={$_GET['id']}")->select();
	    	//print_r($list);
	    	$before=$user->limit(1)->where("id>{$_GET['id']}")->select();
	    	//print_r($before);
	    	$after=$user->limit(1)->order('id desc')->where("id<{$_GET['id']}")->select();
	    	$user->where("id={$_GET['id']}")->setInc('readed',1);
			$before[0]['id'] = $Easycode->encode($before[0]['id']);
			$after[0]['id'] = $Easycode->encode($after[0]['id']);
	    	$arr_detailed=array(
	    		"list"=>$detailed,
	    		"before"=>$before,
	    		"after"=>$after,
	    		'webinfo'=>webinfo(),
	    		);
			 $this->assign('HTTP_HOST',$_SERVER['SERVER_NAME']);
			$locationArr=array(
            __CONTROLLER__=>'当前位置：<a style="color: #fff;" href="'.__CONTROLLER__.'">首页</a>>'.$detailed[0]['title'],
            'htmltitle' => $detailed[0]['title'].'  |  汉服青史'
            );
			
			
			$source=$detailed[0]['tag'];
           $taglist = explode(',',$source); 
           $arr=array(
                'tags'=>$taglist,
                'tagdata'=>$tag,
				'locationArr'=>$locationArr,
                );
            $this->assign($arr);
	    	$this->assign($arr_detailed);
  		}
    	$this->display();

    }
    
     public function about(){
        $locationArr=array(
            __CONTROLLER__=>'当前位置：首页>关于',
            );
       // dump($locationArr);
        $this->assign('locationArr',$locationArr);
     	$user=M("forme");
     	$about=$user->select();
     	//dump($about);
     	$this->assign("about",$about);
		$this->assign("webinfo",webinfo());
     	$this->display();
     }
     public function message(){
         $locationArr=array(
            __CONTROLLER__=>'当前位置：首页>留言',
            );
       // dump($locationArr);
       $weizhi = "留言";
        
		$this->assign("webinfo",webinfo());
		$locationArr=array(
            __CONTROLLER__=>'当前位置：<a style="color: #fff;" href="'.__CONTROLLER__.'">首页</a>>'.$weizhi,
            'htmltitle' => $article[0]['title'].'  |  汉服青史',
            $this->assign("webinfo",webinfo()),
        );
		$this->assign('locationArr',$locationArr);
     	$this->display();
     }
     public function friends(){
     	$user=M("linju");
     	$friends=$user->select();
     	$this->assign("friends",$friends);
		$this->assign("webinfo",webinfo());
     	$this->display();
     }
	 public function tagseach(){
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
        $arr_index=array(
            'navigation'=>$select,
            'modular'=>$modular,
            'mood'=>$mood,
            'skill'=>$skill,
            'fun'=>$fun,
            'tagid'=>$_GET['tagid'],
            'selecttag'=>$selecttag,
            'webinfo'=>webinfo(),
            'Easycode'=>$Easycode,
            );
		//dump($arr_index);
        $this->assign($arr_index);
		$weizhi = "标签检索";
		$locationArr=array(
            __CONTROLLER__=>'当前位置：<a style="color: #fff;" href="'.__CONTROLLER__.'">首页</a>>'.$weizhi,
            'htmltitle' => $article[0]['title'].'  |  汉服青史'
        );
		$this->assign('locationArr',$locationArr);
        }
        $this->display();
	 }


}
