<?php
namespace Home\Model;
use Think\Model\RelationModel;
class MoodModel extends RelationModel{

	//protected $tableName = 'article'; 
	protected $_map=array(
		'til'=>'title',
		'content1'=>'content',
		'tagid'=>'tag',
		);

	protected $_validate =array(
		array('title',"title","<script>alert('标题的长度为1-13个字哦');history.go(-1)</script>",0,'callback'),
		array('content',"require","<script>alert('内容不能为空哦~');history.go(-1)</script>"),
		);
	protected function title($title){
		if(strlen($title)>50||strlen($title)<4){
			return false;

		}
	}
	protected function title_show(){
		return $this->error('标题的长度为1-13个字哦~');
	}

	protected $_auto=array(
		array('now','date',3,'callback'),
		array('author','SESSION',3,'callback'),
		//array('content','htmlzy',3,'callback'),
		);
	protected function htmlzy($html){
		return htmlspecialchars($html);
	}
	protected function date($now){
		return $now=date('Y-m-d H:i:s');
		

	}
	protected function SESSION($SESSION){
		return $SESSION=$_SESSION['author'];
		

	}

}