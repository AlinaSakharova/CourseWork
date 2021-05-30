<?php

/**
 * This is the model class for table "phpbb_bots".
 *
 * The followings are the available columns in table 'phpbb_bots':
 * @property integer $bot_id
 * @property integer $bot_active
 * @property string $bot_name
 * @property integer $user_id
 * @property string $bot_agent
 * @property string $bot_ip
 */
class PhpbbBots extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_bots';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bot_active, user_id', 'numerical', 'integerOnly'=>true),
			array('bot_name, bot_agent, bot_ip', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bot_id, bot_active, bot_name, user_id, bot_agent, bot_ip', 'safe', 'on'=>'search'),
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
			'bot_id' => 'Bot',
			'bot_active' => 'Bot Active',
			'bot_name' => 'Bot Name',
			'user_id' => 'User',
			'bot_agent' => 'Bot Agent',
			'bot_ip' => 'Bot Ip',
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

		$criteria->compare('bot_id',$this->bot_id);
		$criteria->compare('bot_active',$this->bot_active);
		$criteria->compare('bot_name',$this->bot_name,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('bot_agent',$this->bot_agent,true);
		$criteria->compare('bot_ip',$this->bot_ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbBots the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
