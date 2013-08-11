<?php

class m130811_111943_create_request_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_request',array(
            'id'=>'pk',
            'requester_id'=>'int NOT NULL',
            'tutor_id'=>'int NOT NULL',
            'skill_id'=>'int NOT NULL',
            'hour_per_week'=>'int NULL DEFAULT NULL',
            'hourly_rate'=>'int NULL DEFAULT NULL',
            'time_request'=>'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'time_confirm'=>'timestamp NULL DEFAULT NULL',
            'time_cancel'=>'timestamp NULL DEFAULT NULL',
            'time_reject'=>'timestamp NULL DEFAULT NULL',
            'time_expire'=>'timestamp NULL DEFAULT NULL',
            'remark'=>'string NULL DEFAULT NULL',
            'status'=>'string NOT NULL DEFAULT "request"',
        ),'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('fk1_request',
            'art_request',
            'requester_id',
            'art_user','id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey('fk2_request',
            'art_request',
            'tutor_id',
            'art_user','id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey('fk3_request',
            'art_request',
            'skill_id',
            'art_skill','id',
            'CASCADE', 'CASCADE'
        );
	}

	public function down()
	{
		$this->dropTable('art_request');
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