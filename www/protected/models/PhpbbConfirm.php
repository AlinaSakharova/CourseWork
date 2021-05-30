<?php

/**
 * This is the model class for table "phpbb_confirm".
 *
 * The followings are the available columns in table 'phpbb_confirm':
 * @property string $confirm_id
 * @property string $session_id
 * @property integer $confirm_type
 * @property string $code
 * @property string $seed
 * @property integer $attempts
 */
class PhpbbConfirm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_confirm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('confirm_type, attempts', 'numerical', 'integerOnly'=>true),
			array('confirm_id, session_id', 'length', 'max'=>32),
			array('code', 'length', 'max'=>8),
			array('seed', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('confirm_id, session_id, confirm_type, code, seed, attempts', 'safe', 'on'=>'search'),
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
			'confirm_id' => 'Confirm',
			'session_id' => 'Session',
			'confirm_type' => 'Confirm Type',
			'code' => 'Code',
			'seed' => 'Seed',
			'attempts' => 'Attempts',
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

		$criteria->compare('confirm_id',$this->confirm_id,true);
		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('confirm_type',$this->confirm_type);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('seed',$this->seed,true);
		$criteria->compare('attempts',$this->attempts);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbConfirm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
