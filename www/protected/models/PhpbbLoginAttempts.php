<?php

/**
 * This is the model class for table "phpbb_login_attempts".
 *
 * The followings are the available columns in table 'phpbb_login_attempts':
 * @property string $attempt_ip
 * @property string $attempt_browser
 * @property string $attempt_forwarded_for
 * @property string $attempt_time
 * @property integer $user_id
 * @property string $username
 * @property string $username_clean
 */
class PhpbbLoginAttempts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_login_attempts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('attempt_ip', 'length', 'max'=>40),
			array('attempt_browser', 'length', 'max'=>150),
			array('attempt_forwarded_for, username, username_clean', 'length', 'max'=>255),
			array('attempt_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('attempt_ip, attempt_browser, attempt_forwarded_for, attempt_time, user_id, username, username_clean', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'attempt_ip' => 'Attempt Ip',
			'attempt_browser' => 'Attempt Browser',
			'attempt_forwarded_for' => 'Attempt Forwarded For',
			'attempt_time' => 'Attempt Time',
			'user_id' => 'User',
			'username' => 'Username',
			'username_clean' => 'Username Clean',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('attempt_ip',$this->attempt_ip,true);
		$criteria->compare('attempt_browser',$this->attempt_browser,true);
		$criteria->compare('attempt_forwarded_for',$this->attempt_forwarded_for,true);
		$criteria->compare('attempt_time',$this->attempt_time,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('username_clean',$this->username_clean,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbLoginAttempts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
