<?php

class m210715_075409_product extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_product', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
			'detail' => 'text',
			'price' => 'integer',
			'quantity' => 'integer',
            'content' => 'text',
        ));
	}

	public function down()
	{
		echo "m210715_075409_product does not support migration down.\n";
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