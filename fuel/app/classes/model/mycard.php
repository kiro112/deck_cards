<?php

class Model_Mycard extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'deck_id',
		'card_id',
		'name',
		'strength',
		'defence',
		'skill',
		'order'
	);

	protected static $_table_name = 'deck_cards';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('deck_id', 'Deck id', 'required|numeric_between[1,10]');
		$val->add_field('card_id', 'Card id', 'required|numeric_between[0,10]');
		$val->add_field('name', 'Name', 'max_length[99]');
		$val->add_field('defence', 'Defence', 'min[0]');
		$val->add_field('strength', 'Strength', 'min[0]');
		$val->add_field('skill', 'Skill', 'max_length[99]');
		$val->add_field('order', 'Order', 'min[1]|max[3]');

		return $val;
	}


	public static function list_card($deck_id){

	    return Model_Mycard::find(array(
	    		'where' => array(
	    			'deck_id' => $deck_id
	    		),
	    		'order_by' => array('order' => 'asc')
	    ));

	}
}
