<?php

/**
 * This is the model class for table "phpbb_acl_options".
 *
 * The followings are the available columns in table 'phpbb_acl_options':
 * @property integer $auth_option_id
 * @property string $auth_option
 * @property integer $is_global
 * @property integer $is_local
 * @property integer $founder_only
 */
class PhpbbAclOptions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_acl_options';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_global, is_local, founder_only', 'numerical', 'integerOnly'=>true),
			array('auth_option', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auth_option_id, auth_option, is_global, is_local, founder_only', 'safe', 'on'=>'search'),
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
			'auth_option_id' => 'Auth Option',
			'auth_option' => 'Auth Option',
			'is_global' => 'Is Global',
			'is_local' => 'Is Local',
			'founder_only' => 'Founder Only',
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

		$criteria->compare('auth_option_id',$this->auth_option_id);
		$criteria->compare('auth_option',$this->auth_option,true);
		$criteria->compare('is_global',$this->is_global);
		$criteria->compare('is_local',$this->is_local);
		$criteria->compare('founder_only',$this->founder_only);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbAclOptions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
