<?php

/**
 * This is the model class for table "phpbb_notifications".
 *
 * The followings are the available columns in table 'phpbb_notifications':
 * @property string $notification_id
 * @property integer $notification_type_id
 * @property integer $item_id
 * @property integer $item_parent_id
 * @property integer $user_id
 * @property integer $notification_read
 * @property string $notification_time
 * @property string $notification_data
 */
class PhpbbNotifications extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_notifications';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('notification_data', 'required'),
			array('notification_type_id, item_id, item_parent_id, user_id, notification_read', 'numerical', 'integerOnly'=>true),
			array('notification_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('notification_id, notification_type_id, item_id, item_parent_id, user_id, notification_read, notification_time, notification_data', 'safe', 'on'=>'search'),
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
			'notification_id' => 'Notification',
			'notification_type_id' => 'Notification Type',
			'item_id' => 'Item',
			'item_parent_id' => 'Item Parent',
			'user_id' => 'User',
			'notification_read' => 'Notification Read',
			'notification_time' => 'Notification Time',
			'notification_data' => 'Notification Data',
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

		$criteria->compare('notification_id',$this->notification_id,true);
		$criteria->compare('notification_type_id',$this->notification_type_id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('item_parent_id',$this->item_parent_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('notification_read',$this->notification_read);
		$criteria->compare('notification_time',$this->notification_time,true);
		$criteria->compare('notification_data',$this->notification_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbNotifications the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
