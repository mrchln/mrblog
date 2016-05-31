<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends Controller {

    public function index(){
        $fun=A('Fun');
        //$Mb=A('Data');
        //$Mb->isMobile();//检测终端
        $mood=M('mood');
        $skill=M('skill');
        $class=M('modular');
        $nav=M('navigation');
        $tag=M("tag");
        $selecttag=$tag->select();
        


        $selectmood=$mood->select();
        $selectskill=$skill->select();
        $updatemood=$mood->order("updatetime desc")->limit(2)->select();
        $updateskill=$skill->order("updatetime desc")->limit(2)->select();
        $moodreaded=$fun->count($mood);
        $skillreaded=$fun->count($skill);
        $count=$moodreaded+$skillreaded;
        //dump($count);
        $select=$nav->select();        
        $modular=$class->select();
		
		$Easycode = new \Mrcln\code\Easycode;
		$count1 = count($updatemood);
		for ($i=0; $i < $count1; $i++) { 
			$updatemood[$i]['id'] = $Easycode->encode($updatemood[$i]['id']);
		}
		$count2 = count($updateskill);
		for ($i=0; $i < $count2; $i++) { 
			$updateskill[$i]['id'] = $Easycode->encode($updateskill[$i]['id']);
		}
        $arr_index=array(
            'navigation'=>$select,
            'modular'=>$modular,
            'selecttag'=>$selecttag,
            'fun'=>$fun,
            'mood'=>$mood,
            'skill'=>$skill,
            'tag'=>$tag,
            'count'=>$count,
            'selectmood'=>$selectmood,
            'selectskill'=>$selectskill,
            'moodcount'=>count($selectmood),
            'skillcount'=>count($selectskill),
            'updatemood'=>$updatemood,
            'updateskill'=>$updateskill,
            'webinfo'=>webinfo(),
            );
        $this->assign($arr_index);
        $this->display();
    }

    
    

}
?>