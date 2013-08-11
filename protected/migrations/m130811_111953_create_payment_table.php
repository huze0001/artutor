<?php

class m130811_111953_create_payment_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_payment',array(
            'id'=>'pk',
            'request_id'=>'int NOT NULL',
            'tutor_id'=>'int NOT NULL',
            'payment_ref'=>'string NOT NULL',
            'amount_due'=>'int NOT NULL',
            'amount_received'=>'int NULL DEFAULT 0',
            'time_due'=>'timestamp NOT NULL',
            'time_received'=>'timestamp NULL DEFAULT NULL',
            'remark'=>'string NULL DEFAULT NULL',
            'status'=>'string NOT NULL DEFAULT "pending"',
        ),'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('fk1_payment',
            'art_payment',
            'request_id',
            'art_request','id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey('fk2_payment',
            'art_payment',
            'tutor_id',
            'art_user','id',
            'CASCADE', 'CASCADE'
        );
	}

	public function down()
	{
        $this->dropTable('art_payment');
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