<?php
namespace Home\Model;
use Think\Model\RelationModel;
class TagModel extends RelationModel{
	protected $_link =array(
		'artag'=>array(
			'mapping_type'=>self::HAS_ONE,
			'class_name'        => 'artag',
			'foreign_key'=>'tagid',
			'mapping_fields'=>'articleid,tagid',
			'as_fields'=>'articleid,tagid',
			), 
		 


	);

}