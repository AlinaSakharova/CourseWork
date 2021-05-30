<?php

/**
 * This is the model class for table "phpbb_acl_users".
 *
 * The followings are the available columns in table 'phpbb_acl_users':
 * @property integer $user_id
 * @property integer $forum_id
 * @property integer $auth_option_id
 * @property integer $auth_role_id
 * @property integer $auth_setting
 */
class PhpbbAclUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_acl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, forum_id, auth_option_id, auth_role_id, auth_setting', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, forum_id, auth_option_id, auth_role_id, auth_setting', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'forum_id' => 'Forum',
			'auth_option_id' => 'Auth Option',
			'auth_role_id' => 'Auth Role',
			'auth_setting' => 'Auth Setting',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('forum_id',$this->forum_id);
		$criteria->compare('auth_option_id',$this->auth_option_id);
		$criteria->compare('auth_role_id',$this->auth_role_id);
		$criteria->compare('auth_setting',$this->auth_setting);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbAclUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
