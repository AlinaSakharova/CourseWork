<?php

/**
 * This is the model class for table "phpbb_profile_lang".
 *
 * The followings are the available columns in table 'phpbb_profile_lang':
 * @property integer $field_id
 * @property integer $lang_id
 * @property string $lang_name
 * @property string $lang_explain
 * @property string $lang_default_value
 */
class PhpbbProfileLang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_profile_lang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang_explain', 'required'),
			array('field_id, lang_id', 'numerical', 'integerOnly'=>true),
			array('lang_name, lang_default_value', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('field_id, lang_id, lang_name, lang_explain, lang_default_value', 'safe', 'on'=>'search'),
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
			'field_id' => 'Field',
			'lang_id' => 'Lang',
			'lang_name' => 'Lang Name',
			'lang_explain' => 'Lang Explain',
			'lang_default_value' => 'Lang Default Value',
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

		$criteria->compare('field_id',$this->field_id);
		$criteria->compare('lang_id',$this->lang_id);
		$criteria->compare('lang_name',$this->lang_name,true);
		$criteria->compare('lang_explain',$this->lang_explain,true);
		$criteria->compare('lang_default_value',$this->lang_default_value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbProfileLang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
