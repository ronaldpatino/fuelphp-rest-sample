<?php

namespace Fuel\Migrations;

class Create_pictures
{
	public function up()
	{
		\DBUtil::create_table('pictures', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'imagen' => array('constraint' => 255, 'type' => 'varchar'),
			'width' => array('constraint' => 5, 'type' => 'varchar'),
			'height' => array('constraint' => 5, 'type' => 'varchar'),
			'dimension_id' => array('constraint' => 11, 'type' => 'int'),
			'seccion_id' => array('constraint' => 11, 'type' => 'int'),
			'article_id' => array('constraint' => 11, 'type' => 'int'),
			'estado' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('pictures');
	}
}