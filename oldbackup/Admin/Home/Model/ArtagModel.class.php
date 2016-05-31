<?php
namespace Home\Model;
use Think\Model\RelationModel;
class ArtagModel extends RelationModel{
	protected $_link =array(
		'article'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'foreign_key'=>'articleid',
			'mapping_fields'=>'title,content',
			'as_fields'=>'title,content',
			
			),

	);

}