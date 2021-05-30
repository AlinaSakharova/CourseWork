<?php

/**
 * This is the model class for table "phpbb_moderator_cache".
 *
 * The followings are the available columns in table 'phpbb_moderator_cache':
 * @property integer $forum_id
 * @property integer $user_id
 * @property string $username
 * @property integer $group_id
 * @property string $group_name
 * @property integer $display_on_index
 */
class PhpbbModeratorCache extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_moderator_cache';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forum_id, user_id, group_id, display_on_index', 'numerical', 'integerOnly'=>true),
			array('username, group_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('forum_id, user_id, username, group_id, group_name, display_on_index', 'safe', 'on'=>'search'),
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
			'forum_id' => 'Forum',
			'user_id' => 'User',
			'username' => 'Username',
			'group_id' => 'Group',
			'group_name' => 'Group Name',
			'display_on_index' => 'Display On Index',
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

		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('display_on_index',$this->display_on_index);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbModeratorCache the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
