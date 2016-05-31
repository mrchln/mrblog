<?php
namespace Home\Model;
use Think\Model;
class TimeaxisModel extends Model{
	protected $_map=array(
		'til'=>'title',
		'cont'=>'content',
		'tim'=>'time',

	);
	protected $_validate=array(
		array('title','require',"<script>alert('标题不能为空哦~');history.go(-1)</script>"),
		array('content','require',"<script>alert('内容不能为空哦~');history.go(-1)</script>"),

		);
	/*protected $_auto=array(
		array('time','date',3,'callback'),
		);
	protected function date($now){
		return $now=date('Y-m-d H:i:s');
		

	}*/
}