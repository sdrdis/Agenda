<?php
class Model_Note extends Model_Crud
{
	protected static $_table_name = 'notes';

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');

		return $val;
	}

}
