<?php

/**
 * This is the model class for table "art_user".
 *
 * The followings are the available columns in table 'art_user':
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $mobile
 * @property string $type
 * @property string $gender
 * @property string $time_create
 * @property string $time_last_login
 * @property integer $rating
 * @property string $payment_ref
 * @property string $auth_type
 * @property string $photo
 * @property string $introduction
 * @property string $remark
 * @property string $last_login_time
 *
 * The followings are the available model relations:
 * @property ArtPayment[] $artPayments
 * @property ArtRequest[] $artRequests
 * @property ArtRequest[] $artRequests1
 * @property ArtUserSkill[] $artUserSkills
 */
class User extends CActiveRecord
{

	public $password_repeat;

	 /**
      * Generates the password hash.
      * @param string password
      * @return string hash
      */
    public function hashPassword($password)
    { 	
    	return md5($password);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'art_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, password_repeat, name', 'required'),
			array('password', 'compare'),
			array('password_repeat', 'safe'),
			array('email', 'email'),
			array('rating', 'numerical', 'integerOnly'=>true),
			array('email, password, name, mobile, type, gender, payment_ref, auth_type, photo, introduction, remark', 'length', 'max'=>255),
			array('time_last_login, last_login_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, password, name, mobile, type, gender, time_create, time_last_login, rating, payment_ref, auth_type, photo, introduction, remark, last_login_time', 'safe', 'on'=>'search'),
		);
	}

	/**
      * apply a hash on the password before we store it in the database
      */
     protected function afterValidate()
     {
	    parent::afterValidate();
	    if(!$this->hasErrors())
	        $this->password = $this->hashPassword($this->password);
     }

     /**
      * Checks if the given password is correct.
      * @param string the password to be validated
      * @return boolean whether the password is valid
      */
     public function validatePassword($password)
     {
       return $this->hashPassword($password)===$this->password;
     }


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'artPayments' => array(self::HAS_MANY, 'ArtPayment', 'tutor_id'),
			'artRequests' => array(self::HAS_MANY, 'ArtRequest', 'requester_id'),
			'artRequests1' => array(self::HAS_MANY, 'ArtRequest', 'tutor_id'),
			'artUserSkills' => array(self::HAS_MANY, 'ArtUserSkill', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'password' => 'Password',
			'name' => 'Name',
			'mobile' => 'Mobile',
			'type' => 'Type',
			'gender' => 'Gender',
			'time_create' => 'Time Create',
			'time_last_login' => 'Time Last Login',
			'rating' => 'Rating',
			'payment_ref' => 'Payment Ref',
			'auth_type' => 'Auth Type',
			'photo' => 'Photo',
			'introduction' => 'Introduction',
			'remark' => 'Remark',
			'last_login_time' => 'Last Login Time',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('time_last_login',$this->time_last_login,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('payment_ref',$this->payment_ref,true);
		$criteria->compare('auth_type',$this->auth_type,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('introduction',$this->introduction,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}