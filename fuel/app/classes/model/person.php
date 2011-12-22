<?php
class Model_Person extends Model_Crud
{
	protected static $_table_name = 'people';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('surname', 'Surname', 'required|max_length[255]');
		$val->add_field('tel', 'Tel', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('address', 'Address', 'required');
		$val->add_field('additionals', 'Additionals', 'required');

		return $val;
	}

}
