<?php

/**
 * This is the model class for table "phpbb_drafts".
 *
 * The followings are the available columns in table 'phpbb_drafts':
 * @property integer $draft_id
 * @property integer $user_id
 * @property integer $topic_id
 * @property integer $forum_id
 * @property string $save_time
 * @property string $draft_subject
 * @property string $draft_message
 */
class PhpbbDrafts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_drafts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('draft_message', 'required'),
			array('user_id, topic_id, forum_id', 'numerical', 'integerOnly'=>true),
			array('save_time', 'length', 'max'=>11),
			array('draft_subject', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('draft_id, user_id, topic_id, forum_id, save_time, draft_subject, draft_message', 'safe', 'on'=>'search'),
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
			'draft_id' => 'Draft',
			'user_id' => 'User',
			'topic_id' => 'Topic',
			'forum_id' => 'Forum',
			'save_time' => 'Save Time',
			'draft_subject' => 'Draft Subject',
			'draft_message' => 'Draft Message',
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

		$criteria->compare('draft_id',$this->draft_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('save_time',$this->save_time,true);
		$criteria->compare('draft_subject',$this->draft_subject,true);
		$criteria->compare('draft_message',$this->draft_message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbDrafts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
