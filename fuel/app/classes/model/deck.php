<?php
class Model_Deck extends \Model_Crud
{
	protected static $_table_name = 'decks';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[99]');

		return $val;
	}

}
