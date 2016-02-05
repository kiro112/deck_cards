<?php

namespace Fuel\Migrations;

class Create_cards
{
	public function up()
	{
		\DBUtil::create_table('cards', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 99, 'type' => 'varchar'),
			'strength' => array('constraint' => 11, 'type' => 'int'),
			'defence' => array('constraint' => 11, 'type' => 'int'),
			'skill' => array('type' => 'text'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('cards');
	}
}