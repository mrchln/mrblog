<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model{
	//protected $tableName = 'article'; 
	protected $_validate =array(
		array('regname','require','标题未必填哦~'),
		);
	

}