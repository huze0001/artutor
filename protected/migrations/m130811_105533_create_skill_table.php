<?php

class m130811_105533_create_skill_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_skill',array(
            'id'=>'pk',
            'name'=>'string NULL DEFAULT NULL',
            'category'=>'string NOT NULL DEFAULT "instrument"',
            'status'=>'string NOT NULL DEFAULT "active"',
            'remark'=>'string NULL DEFAULT NULL'
        ),'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		$this->dropTable('art_skill');
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