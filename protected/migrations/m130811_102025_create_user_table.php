<?php

class m130811_102025_create_user_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_user',array(
            'id'=>'pk',
            'email'=>'string NOT NULL',
            'password'=>'string NOT NULL',
            'name'=>'string NOT NULL',
            'mobile'=>'string NULL DEFAULT NULL',
            'type'=>'string NOT NULL DEFAULT "user"',
            'gender'=>'string NOT NULL DEFAULT "m"',
            'time_create'=>'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'last_login_time' => 'datetime DEFAULT NULL',
            'rating'=>'int NOT NULL DEFAULT 0',
            'payment_ref'=>'string NULL DEFAULT NULL',
            'auth_type'=>'string NOT NULL DEFAULT "local"',
            'photo'=>'string NULL DEFAULT NULL',
            'introduction'=>'string NULL DEFAULT NULL',
            'remark'=>'string NULL DEFAULT NULL',
        ),'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		$this->dropTable('art_user');
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