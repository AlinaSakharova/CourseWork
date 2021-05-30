<?php

/**
 * This is the model class for table "phpbb_poll_votes".
 *
 * The followings are the available columns in table 'phpbb_poll_votes':
 * @property integer $topic_id
 * @property integer $poll_option_id
 * @property integer $vote_user_id
 * @property string $vote_user_ip
 */
class PhpbbPollVotes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_poll_votes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('topic_id, poll_option_id, vote_user_id', 'numerical', 'integerOnly'=>true),
			array('vote_user_ip', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('topic_id, poll_option_id, vote_user_id, vote_user_ip', 'safe', 'on'=>'search'),
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
			'topic_id' => 'Topic',
			'poll_option_id' => 'Poll Option',
			'vote_user_id' => 'Vote User',
			'vote_user_ip' => 'Vote User Ip',
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

		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('poll_option_id',$this->poll_option_id);
		$criteria->compare('vote_user_id',$this->vote_user_id);
		$criteria->compare('vote_user_ip',$this->vote_user_ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPollVotes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
