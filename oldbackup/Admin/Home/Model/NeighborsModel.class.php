<?php
namespace Home\Model;
use Think\Model;
class NeighborsModel extends Model{
	protected $_map=array(
		'name'=>'nearly',
		'msg'=>'message',
		'lin'=>'link',
		'log'=>'logo',
		'time'=>'time',

	);
	protected $_validate=array(
		array('name','require',"<script>alert('邻居名不能为空哦~');history.go(-1)</script>"),
		array('link','require',"<script>alert('链接不能为空哦~');history.go(-1)</script>"),

		);
	protected $_auto=array(
		array('time','date',3,'callback'),
		);
	protected function date($now){
		return $now=date('Y-m-d H:i:s');
		

	}
}