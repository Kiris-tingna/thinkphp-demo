<?php

Class UserRelationModel extends RelationModel{
	protected $tableName='user';
	protected $_link=array(
			'AuthGroup'=>array(
					'mapping_type'=>MANY_TO_MANY,
					'class_name'=>'AuthGroup',
					'mapping_name'=>'gro',
					'foreign_key'=>'uid',
					'relation_foreign_key'=>'group_id',
					'relation_table'=>'think_auth_group_access',
					'mapping_fields'=>'id,title',
				),
		);
}

?>