<?php

namespace Fuel\Migrations;

class Create_articles
{
	public function up()
	{
		\DBUtil::create_table('articles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'nombre' => array('constraint' => 255, 'type' => 'varchar'),
			'periodista_id' => array('constraint' => 11, 'type' => 'int'),
			'seccion_id' => array('constraint' => 11, 'type' => 'int'),
			'dimension_id' => array('constraint' => 11, 'type' => 'int'),
			'fecha' => array('type' => 'date'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('articles');
	}
}