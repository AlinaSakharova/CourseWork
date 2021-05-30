<?php

/**
 * This is the model class for table "phpbb_reports_reasons".
 *
 * The followings are the available columns in table 'phpbb_reports_reasons':
 * @property integer $reason_id
 * @property string $reason_title
 * @property string $reason_description
 * @property integer $reason_order
 */
class PhpbbReportsReasons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_reports_reasons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reason_description', 'required'),
			array('reason_order', 'numerical', 'integerOnly'=>true),
			array('reason_title', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reason_id, reason_title, reason_description, reason_order', 'safe', 'on'=>'search'),
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
			'reason_id' => 'Reason',
			'reason_title' => 'Reason Title',
			'reason_description' => 'Reason Description',
			'reason_order' => 'Reason Order',
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

		$criteria->compare('reason_id',$this->reason_id);
		$criteria->compare('reason_title',$this->reason_title,true);
		$criteria->compare('reason_description',$this->reason_description,true);
		$criteria->compare('reason_order',$this->reason_order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbReportsReasons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
