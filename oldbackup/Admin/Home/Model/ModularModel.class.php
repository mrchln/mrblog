<?php
namespace Home\Model;
use Think\Model\RelationModel;
class ModularModel extends RelationModel{
	protected $_link =array(
		'article'=>array(
			'mapping_type'=>self::HAS_ONE,
			'class_name'        => 'article',
			'foreign_key'=>'classifyid',
			), 
		 


	);

}