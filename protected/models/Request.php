<?php

/**
 * This is the model class for table "art_request".
 *
 * The followings are the available columns in table 'art_request':
 * @property integer $id
 * @property integer $requester_id
 * @property integer $tutor_id
 * @property integer $skill_id
 * @property integer $hour_per_week
 * @property integer $hourly_rate
 * @property string $time_request
 * @property string $time_confirm
 * @property string $time_cancel
 * @property string $time_reject
 * @property string $time_expire
 * @property string $remark
 * @property string $status
 *
 * The followings are the available model relations:
 * @property ArtPayment[] $artPayments
 * @property ArtUser $requester
 * @property ArtUser $tutor
 * @property ArtSkill $skill
 */
class Request extends CActiveRecord
{

	const STATUS_REJECT= "Reject";
	const STATUS_AGREE= "Agree";

	 /**
     * Retrieves a list of issue types
     * @return array an array of available issue types.
     */
	 public function getStatusOptions()
	 {
	 	return array(
	 		self::STATUS_REJECT=>'Reject',
	 		self::STATUS_AGREE=>'Agree',
	 		); 
	 }


	// This is for selects only not for CRUD
    public function defaultScope()
    {    
    	// Dont do the scope check for logging in and for admin pages 
    	// **ATTENTION: This will need to be changed in the future

    	// admin page can only show tutor
    	if ('index' == Yii::app()->controller->getAction()->getId())
	        return array(  
	                'condition'=>'(tutor_id='.Yii::app()->user->id.')',   
	        );  


    }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Request the static model class
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
		return 'art_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('requester_id, tutor_id, skill_id', 'required'),
			array('requester_id, tutor_id, skill_id, hour_per_week, hourly_rate', 'numerical', 'integerOnly'=>true),
			array('remark, status', 'length', 'max'=>255),
			array('time_confirm, time_cancel, time_reject, time_expire', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, requester_id, tutor_id, skill_id, hour_per_week, hourly_rate, time_request, time_confirm, time_cancel, time_reject, time_expire, remark, status', 'safe', 'on'=>'search'),
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
			'payments' => array(self::HAS_MANY, 'Payment', 'request_id'),
			'requester' => array(self::BELONGS_TO, 'User', 'requester_id'),
			'tutor' => array(self::BELONGS_TO, 'User', 'tutor_id'),
			'skill' => array(self::BELONGS_TO, 'Skill', 'skill_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'requester_id' => 'Requester',
			'tutor_id' => 'Tutor',
			'skill_id' => 'Skill',
			'hour_per_week' => 'Hour Per Week',
			'hourly_rate' => 'Hourly Rate',
			'time_request' => 'Time Request',
			'time_confirm' => 'Time Confirm',
			'time_cancel' => 'Time Cancel',
			'time_reject' => 'Time Reject',
			'time_expire' => 'Time Expire',
			'remark' => 'Remark',
			'status' => 'Status',
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
		$criteria->compare('requester_id',$this->requester_id);
		$criteria->compare('tutor_id',$this->tutor_id);
		$criteria->compare('skill_id',$this->skill_id);
		$criteria->compare('hour_per_week',$this->hour_per_week);
		$criteria->compare('hourly_rate',$this->hourly_rate);
		$criteria->compare('time_request',$this->time_request,true);
		$criteria->compare('time_confirm',$this->time_confirm,true);
		$criteria->compare('time_cancel',$this->time_cancel,true);
		$criteria->compare('time_reject',$this->time_reject,true);
		$criteria->compare('time_expire',$this->time_expire,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}