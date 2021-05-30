<?php

/**
 * This is the model class for table "phpbb_modules".
 *
 * The followings are the available columns in table 'phpbb_modules':
 * @property integer $module_id
 * @property integer $module_enabled
 * @property integer $module_display
 * @property string $module_basename
 * @property string $module_class
 * @property integer $parent_id
 * @property integer $left_id
 * @property integer $right_id
 * @property string $module_langname
 * @property string $module_mode
 * @property string $module_auth
 */
class PhpbbModules extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_modules';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_enabled, module_display, parent_id, left_id, right_id', 'numerical', 'integerOnly'=>true),
			array('module_basename, module_langname, module_mode, module_auth', 'length', 'max'=>255),
			array('module_class', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('module_id, module_enabled, module_display, module_basename, module_class, parent_id, left_id, right_id, module_langname, module_mode, module_auth', 'safe', 'on'=>'search'),
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
			'module_id' => 'Module',
			'module_enabled' => 'Module Enabled',
			'module_display' => 'Module Display',
			'module_basename' => 'Module Basename',
			'module_class' => 'Module Class',
			'parent_id' => 'Parent',
			'left_id' => 'Left',
			'right_id' => 'Right',
			'module_langname' => 'Module Langname',
			'module_mode' => 'Module Mode',
			'module_auth' => 'Module Auth',
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

		$criteria->compare('module_id',$this->module_id);
		$criteria->compare('module_enabled',$this->module_enabled);
		$criteria->compare('module_display',$this->module_display);
		$criteria->compare('module_basename',$this->module_basename,true);
		$criteria->compare('module_class',$this->module_class,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('left_id',$this->left_id);
		$criteria->compare('right_id',$this->right_id);
		$criteria->compare('module_langname',$this->module_langname,true);
		$criteria->compare('module_mode',$this->module_mode,true);
		$criteria->compare('module_auth',$this->module_auth,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbModules the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
