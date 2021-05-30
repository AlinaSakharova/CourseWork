<?php

/**
 * This is the model class for table "phpbb_warnings".
 *
 * The followings are the available columns in table 'phpbb_warnings':
 * @property integer $warning_id
 * @property integer $user_id
 * @property integer $post_id
 * @property integer $log_id
 * @property string $warning_time
 */
class PhpbbWarnings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_warnings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, post_id, log_id', 'numerical', 'integerOnly'=>true),
			array('warning_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('warning_id, user_id, post_id, log_id, warning_time', 'safe', 'on'=>'search'),
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
			'warning_id' => 'Warning',
			'user_id' => 'User',
			'post_id' => 'Post',
			'log_id' => 'Log',
			'warning_time' => 'Warning Time',
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

		$criteria->compare('warning_id',$this->warning_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('log_id',$this->log_id);
		$criteria->compare('warning_time',$this->warning_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbWarnings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
