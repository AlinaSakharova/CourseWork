<?php

/**
 * This is the model class for table "phpbb_sessions".
 *
 * The followings are the available columns in table 'phpbb_sessions':
 * @property string $session_id
 * @property integer $session_user_id
 * @property string $session_last_visit
 * @property string $session_start
 * @property string $session_time
 * @property string $session_ip
 * @property string $session_browser
 * @property string $session_forwarded_for
 * @property string $session_page
 * @property integer $session_viewonline
 * @property integer $session_autologin
 * @property integer $session_admin
 * @property integer $session_forum_id
 */
class PhpbbSessions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_sessions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('session_user_id, session_viewonline, session_autologin, session_admin, session_forum_id', 'numerical', 'integerOnly'=>true),
			array('session_id', 'length', 'max'=>32),
			array('session_last_visit, session_start, session_time', 'length', 'max'=>11),
			array('session_ip', 'length', 'max'=>40),
			array('session_browser', 'length', 'max'=>150),
			array('session_forwarded_for, session_page', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('session_id, session_user_id, session_last_visit, session_start, session_time, session_ip, session_browser, session_forwarded_for, session_page, session_viewonline, session_autologin, session_admin, session_forum_id', 'safe', 'on'=>'search'),
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
			'session_id' => 'Session',
			'session_user_id' => 'Session User',
			'session_last_visit' => 'Session Last Visit',
			'session_start' => 'Session Start',
			'session_time' => 'Session Time',
			'session_ip' => 'Session Ip',
			'session_browser' => 'Session Browser',
			'session_forwarded_for' => 'Session Forwarded For',
			'session_page' => 'Session Page',
			'session_viewonline' => 'Session Viewonline',
			'session_autologin' => 'Session Autologin',
			'session_admin' => 'Session Admin',
			'session_forum_id' => 'Session Forum',
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

		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('session_user_id',$this->session_user_id);
		$criteria->compare('session_last_visit',$this->session_last_visit,true);
		$criteria->compare('session_start',$this->session_start,true);
		$criteria->compare('session_time',$this->session_time,true);
		$criteria->compare('session_ip',$this->session_ip,true);
		$criteria->compare('session_browser',$this->session_browser,true);
		$criteria->compare('session_forwarded_for',$this->session_forwarded_for,true);
		$criteria->compare('session_page',$this->session_page,true);
		$criteria->compare('session_viewonline',$this->session_viewonline);
		$criteria->compare('session_autologin',$this->session_autologin);
		$criteria->compare('session_admin',$this->session_admin);
		$criteria->compare('session_forum_id',$this->session_forum_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbSessions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
