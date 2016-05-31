<?php
namespace Home\Model;
use Think\Model;
class MapshowModel extends Model{
	protected $_map=array(
		'lin'=>'link',
		'til'=>'title',
		'cont'=>'content',
		'time'=>'time',

	);
	protected $_validate=array(
		//array('name','require',"<script>alert('邻居名不能为空哦~');history.go(-1)</script>"),
		array('link','require',"<script>alert('外链不能为空哦~');history.go(-1)</script>"),

		);
	protected $_auto=array(
		array('time','date',3,'callback'),
		);
	protected function date($now){
		return $now=date('Y-m-d H:i:s');
		

	}
}