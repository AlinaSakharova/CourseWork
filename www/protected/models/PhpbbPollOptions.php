<?php

/**
 * This is the model class for table "phpbb_poll_options".
 *
 * The followings are the available columns in table 'phpbb_poll_options':
 * @property integer $poll_option_id
 * @property integer $topic_id
 * @property string $poll_option_text
 * @property integer $poll_option_total
 */
class PhpbbPollOptions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_poll_options';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('poll_option_text', 'required'),
			array('poll_option_id, topic_id, poll_option_total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('poll_option_id, topic_id, poll_option_text, poll_option_total', 'safe', 'on'=>'search'),
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
			'poll_option_id' => 'Poll Option',
			'topic_id' => 'Topic',
			'poll_option_text' => 'Poll Option Text',
			'poll_option_total' => 'Poll Option Total',
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

		$criteria->compare('poll_option_id',$this->poll_option_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('poll_option_text',$this->poll_option_text,true);
		$criteria->compare('poll_option_total',$this->poll_option_total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPollOptions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
