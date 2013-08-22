<?php

class m130811_110133_create_user_skill_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('art_user_skill',array(
            'id'=>'pk',
            'user_id'=>'int NOT NULL',
            'skill_id'=>'int NOT NULL',
            'year_experience'=>'int NULL DEFAULT NULL',
            'description'=>'text NULL DEFAULT NULL',
            'certificate'=>'string NULL DEFAULT NULL',
            'remark'=>'string NULL DEFAULT NULL'
        ),'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('fk1_user_skill',
            'art_user_skill',
            'user_id',
            'art_user','id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey('fk2_user_skill',
            'art_user_skill',
            'skill_id',
            'art_skill','id',
            'CASCADE', 'CASCADE'
        );
	}

	public function down()
	{
		$this->dropTable('art_user_skill');
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