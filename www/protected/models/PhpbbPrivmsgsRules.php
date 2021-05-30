<?php

/**
 * This is the model class for table "phpbb_privmsgs_rules".
 *
 * The followings are the available columns in table 'phpbb_privmsgs_rules':
 * @property integer $rule_id
 * @property integer $user_id
 * @property integer $rule_check
 * @property integer $rule_connection
 * @property string $rule_string
 * @property integer $rule_user_id
 * @property integer $rule_group_id
 * @property integer $rule_action
 * @property integer $rule_folder_id
 */
class PhpbbPrivmsgsRules extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_privmsgs_rules';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, rule_check, rule_connection, rule_user_id, rule_group_id, rule_action, rule_folder_id', 'numerical', 'integerOnly'=>true),
			array('rule_string', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rule_id, user_id, rule_check, rule_connection, rule_string, rule_user_id, rule_group_id, rule_action, rule_folder_id', 'safe', 'on'=>'search'),
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
			'rule_id' => 'Rule',
			'user_id' => 'User',
			'rule_check' => 'Rule Check',
			'rule_connection' => 'Rule Connection',
			'rule_string' => 'Rule String',
			'rule_user_id' => 'Rule User',
			'rule_group_id' => 'Rule Group',
			'rule_action' => 'Rule Action',
			'rule_folder_id' => 'Rule Folder',
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

		$criteria->compare('rule_id',$this->rule_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('rule_check',$this->rule_check);
		$criteria->compare('rule_connection',$this->rule_connection);
		$criteria->compare('rule_string',$this->rule_string,true);
		$criteria->compare('rule_user_id',$this->rule_user_id);
		$criteria->compare('rule_group_id',$this->rule_group_id);
		$criteria->compare('rule_action',$this->rule_action);
		$criteria->compare('rule_folder_id',$this->rule_folder_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPrivmsgsRules the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
