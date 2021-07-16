<?php

class m210715_082238_movement extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_movement', array(
            'id' => 'pk',
            'product_id' => 'integer',
			'movement' => 'text',
			'quantity' => 'integer'
        ));
	}

	public function down()
	{
		echo "m210715_082238_movement does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}