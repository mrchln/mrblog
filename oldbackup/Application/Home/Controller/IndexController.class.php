<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $Mb=A('Data');
        $Mb->isMobile();//检测终端
        $mood=M('mood');
        $skill=M('skill');
        $mapshow=M('mapshow');      
        $fun=A('Fun');
        $arr_mood=$fun->seach($mood,4,false,"now desc");
        $arr_skill=$fun->seach($skill,4,false,"now desc");
        $arr_map=$fun->seach($mapshow,4,false,"time desc");
        $article_mood=$arr_mood['selectArticle'];
        $article_skill=$arr_skill['selectArticle'];
        $article_map=$arr_map['selectArticle'];
        $user=M('navigation');
        $class=M('modular');
        $select=$user->select();
        $modular=$class->select();
		$Easycode = new \Mrcln\code\Easycode;
		$count1 = count($article_mood);
		for ($i=0; $i < $count1; $i++) { 
			$article_mood[$i]['id'] = $Easycode->encode($article_mood[$i]['id']);
		}
		$count2 = count($article_skill);
		for ($i=0; $i < $count2; $i++) { 
			$article_skill[$i]['id'] = $Easycode->encode($article_skill[$i]['id']);
		}
       //dump($modular);
    	$arr_index=array(
            "article_mood"=>$article_mood,
            "article_skill"=>$article_skill,
            "article_map"=>$article_map,
            "page"=>$show,
            'navigation'=>$select,
            'modular'=>$modular,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
    	$this->display();
    }
    public function index2(){
        $this->display();
    }


    
    
     public function about(){
       
     }

     public function message(){
        $Mb=A('Data');
        $Mb->isMobile();//检测终端
     	$this->display();
     }

     public function friends(){
        
     }

     public function icons(){
        $this->display();
     }

     

}
