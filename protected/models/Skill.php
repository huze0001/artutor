<?php

/**
 * This is the model class for table "art_skill".
 *
 * The followings are the available columns in table 'art_skill':
 * @property integer $id
 * @property integer $user_id
 * @property string $skill
 * @property integer $year_experience
 * @property string $description
 * @property string $certificate
 * @property string $remark
 *
 * The followings are the available model relations:
 * @property ArtRequest[] $artRequests
 * @property ArtUser $user
 */
class Skill extends CActiveRecord
{



	const TYPE_INSTRUMENT= "Instrument";
	const TYPE_VOCAL= "Vocal";
	const TYPE_DANCING= "Dancing";
	const TYPE_DESIGN= "Design";

	 /**
     * Retrieves a list of issue types
     * @return array an array of available issue types.
     */
	 public function getTypeOptions()
	 {
	 	return array(
	 		self::TYPE_INSTRUMENT=>'Instrument',
	 		self::TYPE_VOCAL=>'Vocal',
	 		self::TYPE_DANCING=>'Dancing',
	 		self::TYPE_DESIGN=>'Design',
	 		); 
	 }

	// /**
	// * @return string the type text display for the current issue
	// */
	// public function getTypeText()
	// {
	// 	$typeOptions=$this->typeOptions;

	// 	return isset($typeOptions[$this->skill])? $typeOptions[$this->skill]:"unknown type ({$this->skill})";
	// }

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Skill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'art_skill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, skill', 'required'),
			array('user_id, year_experience', 'numerical', 'integerOnly'=>true),
			array('skill, certificate, remark', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, skill, year_experience, description, certificate, remark', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'requests' => array(self::HAS_MANY, 'Request', 'skill_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'skill' => 'Skill',
			'year_experience' => 'Year Experience',
			'description' => 'Description',
			'certificate' => 'Certificate',
			'remark' => 'Remark',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('skill',$this->skill,true);
		$criteria->compare('year_experience',$this->year_experience);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('certificate',$this->certificate,true);
		$criteria->compare('remark',$this->remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}