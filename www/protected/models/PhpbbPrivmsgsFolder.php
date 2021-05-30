<?php

/**
 * This is the model class for table "phpbb_privmsgs_folder".
 *
 * The followings are the available columns in table 'phpbb_privmsgs_folder':
 * @property integer $folder_id
 * @property integer $user_id
 * @property string $folder_name
 * @property integer $pm_count
 */
class PhpbbPrivmsgsFolder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_privmsgs_folder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, pm_count', 'numerical', 'integerOnly'=>true),
			array('folder_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('folder_id, user_id, folder_name, pm_count', 'safe', 'on'=>'search'),
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
			'folder_id' => 'Folder',
			'user_id' => 'User',
			'folder_name' => 'Folder Name',
			'pm_count' => 'Pm Count',
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

		$criteria->compare('folder_id',$this->folder_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('folder_name',$this->folder_name,true);
		$criteria->compare('pm_count',$this->pm_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPrivmsgsFolder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
