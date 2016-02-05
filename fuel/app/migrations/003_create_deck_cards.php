<?php

namespace Fuel\Migrations;

class Create_deck_cards
{
	public function up()
	{
		\DBUtil::create_table('deck_cards', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'deck_id' => array('constraint' => 11, 'type' => 'int'),
			'card_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 99, 'type' => 'varchar'),
			'strength' => array('constraint' => 11, 'type' => 'int'),
			'defence' => array('constraint' => 11, 'type' => 'int'),
			'skill' => array('type' => 'text'),
			'order' => array('type' => 'int')
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('deck_cards');
	}
}