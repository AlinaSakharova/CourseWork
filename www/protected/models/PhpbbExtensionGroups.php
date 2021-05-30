<?php

/**
 * This is the model class for table "phpbb_extension_groups".
 *
 * The followings are the available columns in table 'phpbb_extension_groups':
 * @property integer $group_id
 * @property string $group_name
 * @property integer $cat_id
 * @property integer $allow_group
 * @property integer $download_mode
 * @property string $upload_icon
 * @property string $max_filesize
 * @property string $allowed_forums
 * @property integer $allow_in_pm
 */
class PhpbbExtensionGroups extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_extension_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('allowed_forums', 'required'),
			array('cat_id, allow_group, download_mode, allow_in_pm', 'numerical', 'integerOnly'=>true),
			array('group_name, upload_icon', 'length', 'max'=>255),
			array('max_filesize', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('group_id, group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums, allow_in_pm', 'safe', 'on'=>'search'),
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
			'group_id' => 'Group',
			'group_name' => 'Group Name',
			'cat_id' => 'Cat',
			'allow_group' => 'Allow Group',
			'download_mode' => 'Download Mode',
			'upload_icon' => 'Upload Icon',
			'max_filesize' => 'Max Filesize',
			'allowed_forums' => 'Allowed Forums',
			'allow_in_pm' => 'Allow In Pm',
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

		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('allow_group',$this->allow_group);
		$criteria->compare('download_mode',$this->download_mode);
		$criteria->compare('upload_icon',$this->upload_icon,true);
		$criteria->compare('max_filesize',$this->max_filesize,true);
		$criteria->compare('allowed_forums',$this->allowed_forums,true);
		$criteria->compare('allow_in_pm',$this->allow_in_pm);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbExtensionGroups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
