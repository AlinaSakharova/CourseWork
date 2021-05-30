<?php

/**
 * This is the model class for table "phpbb_acl_roles".
 *
 * The followings are the available columns in table 'phpbb_acl_roles':
 * @property integer $role_id
 * @property string $role_name
 * @property string $role_description
 * @property string $role_type
 * @property integer $role_order
 */
class PhpbbAclRoles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_acl_roles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_description', 'required'),
			array('role_order', 'numerical', 'integerOnly'=>true),
			array('role_name', 'length', 'max'=>255),
			array('role_type', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('role_id, role_name, role_description, role_type, role_order', 'safe', 'on'=>'search'),
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
			'role_id' => 'Role',
			'role_name' => 'Role Name',
			'role_description' => 'Role Description',
			'role_type' => 'Role Type',
			'role_order' => 'Role Order',
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

		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('role_name',$this->role_name,true);
		$criteria->compare('role_description',$this->role_description,true);
		$criteria->compare('role_type',$this->role_type,true);
		$criteria->compare('role_order',$this->role_order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbAclRoles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
