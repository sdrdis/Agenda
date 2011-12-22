<?php

namespace Fuel\Migrations;

class Rename_field_titre_to_title_in_notes
{
	public function up()
	{
        \DB::query('ALTER TABLE `notes` CHANGE `titre` `title` VARCHAR( 255 )')->execute();
	}

	public function down()
	{
        \DB::query('ALTER TABLE `notes` CHANGE `title` `titre` VARCHAR( 255 )')->execute();
	}
}