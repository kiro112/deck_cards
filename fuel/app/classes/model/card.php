<?php

class Model_Card extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'name',
		'strength',
		'defence',
		'skill',
	);

	protected static $_table_name = 'cards';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[99]');

		return $val;
	}



}
