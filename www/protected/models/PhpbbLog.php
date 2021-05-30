<?php

/**
 * This is the model class for table "phpbb_log".
 *
 * The followings are the available columns in table 'phpbb_log':
 * @property integer $log_id
 * @property integer $log_type
 * @property integer $user_id
 * @property integer $forum_id
 * @property integer $topic_id
 * @property integer $reportee_id
 * @property string $log_ip
 * @property string $log_time
 * @property string $log_operation
 * @property string $log_data
 */
class PhpbbLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('log_operation, log_data', 'required'),
			array('log_type, user_id, forum_id, topic_id, reportee_id', 'numerical', 'integerOnly'=>true),
			array('log_ip', 'length', 'max'=>40),
			array('log_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('log_id, log_type, user_id, forum_id, topic_id, reportee_id, log_ip, log_time, log_operation, log_data', 'safe', 'on'=>'search'),
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
			'log_id' => 'Log',
			'log_type' => 'Log Type',
			'user_id' => 'User',
			'forum_id' => 'Forum',
			'topic_id' => 'Topic',
			'reportee_id' => 'Reportee',
			'log_ip' => 'Log Ip',
			'log_time' => 'Log Time',
			'log_operation' => 'Log Operation',
			'log_data' => 'Log Data',
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

		$criteria->compare('log_id',$this->log_id);
		$criteria->compare('log_type',$this->log_type);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('reportee_id',$this->reportee_id);
		$criteria->compare('log_ip',$this->log_ip,true);
		$criteria->compare('log_time',$this->log_time,true);
		$criteria->compare('log_operation',$this->log_operation,true);
		$criteria->compare('log_data',$this->log_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
