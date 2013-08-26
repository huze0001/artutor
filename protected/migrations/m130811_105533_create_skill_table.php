<?php

class m130811_105533_create_skill_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_skill',array(
            'id'=>'pk',
            'user_id'=>'int NOT NULL',
            'skill'=>'string NOT NULL',
            'year_experience'=>'int NULL DEFAULT NULL',
            'description'=>'text NULL DEFAULT NULL',
            'certificate'=>'string NULL DEFAULT NULL',
            'remark'=>'string NULL DEFAULT NULL'
        ),'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('fk1_user_skill',
            'art_skill',
            'user_id',
            'art_user','id',
            'CASCADE', 'CASCADE'
        );
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