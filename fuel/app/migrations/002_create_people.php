<?php

namespace Fuel\Migrations;

class Create_people
{
	public function up()
	{
		\DBUtil::create_table('people', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'surname' => array('constraint' => 255, 'type' => 'varchar'),
			'tel' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'address' => array('type' => 'text'),
			'additionals' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('people');
	}
}