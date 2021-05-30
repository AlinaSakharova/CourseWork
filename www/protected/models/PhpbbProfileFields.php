<?php

/**
 * This is the model class for table "phpbb_profile_fields".
 *
 * The followings are the available columns in table 'phpbb_profile_fields':
 * @property integer $field_id
 * @property string $field_name
 * @property string $field_type
 * @property string $field_ident
 * @property string $field_length
 * @property string $field_minlen
 * @property string $field_maxlen
 * @property string $field_novalue
 * @property string $field_default_value
 * @property string $field_validation
 * @property integer $field_required
 * @property integer $field_show_on_reg
 * @property integer $field_hide
 * @property integer $field_no_view
 * @property integer $field_active
 * @property integer $field_order
 * @property integer $field_show_profile
 * @property integer $field_show_on_vt
 * @property integer $field_show_novalue
 * @property integer $field_show_on_pm
 * @property integer $field_show_on_ml
 * @property integer $field_is_contact
 * @property string $field_contact_desc
 * @property string $field_contact_url
 */
class PhpbbProfileFields extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_profile_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('field_required, field_show_on_reg, field_hide, field_no_view, field_active, field_order, field_show_profile, field_show_on_vt, field_show_novalue, field_show_on_pm, field_show_on_ml, field_is_contact', 'numerical', 'integerOnly'=>true),
			array('field_name, field_minlen, field_maxlen, field_novalue, field_default_value, field_contact_desc, field_contact_url', 'length', 'max'=>255),
			array('field_type', 'length', 'max'=>100),
			array('field_ident, field_length', 'length', 'max'=>20),
			array('field_validation', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('field_id, field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_on_reg, field_hide, field_no_view, field_active, field_order, field_show_profile, field_show_on_vt, field_show_novalue, field_show_on_pm, field_show_on_ml, field_is_contact, field_contact_desc, field_contact_url', 'safe', 'on'=>'search'),
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
			'field_name' => 'Field Name',
			'field_type' => 'Field Type',
			'field_ident' => 'Field Ident',
			'field_length' => 'Field Length',
			'field_minlen' => 'Field Minlen',
			'field_maxlen' => 'Field Maxlen',
			'field_novalue' => 'Field Novalue',
			'field_default_value' => 'Field Default Value',
			'field_validation' => 'Field Validation',
			'field_required' => 'Field Required',
			'field_show_on_reg' => 'Field Show On Reg',
			'field_hide' => 'Field Hide',
			'field_no_view' => 'Field No View',
			'field_active' => 'Field Active',
			'field_order' => 'Field Order',
			'field_show_profile' => 'Field Show Profile',
			'field_show_on_vt' => 'Field Show On Vt',
			'field_show_novalue' => 'Field Show Novalue',
			'field_show_on_pm' => 'Field Show On Pm',
			'field_show_on_ml' => 'Field Show On Ml',
			'field_is_contact' => 'Field Is Contact',
			'field_contact_desc' => 'Field Contact Desc',
			'field_contact_url' => 'Field Contact Url',
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
		$criteria->compare('field_name',$this->field_name,true);
		$criteria->compare('field_type',$this->field_type,true);
		$criteria->compare('field_ident',$this->field_ident,true);
		$criteria->compare('field_length',$this->field_length,true);
		$criteria->compare('field_minlen',$this->field_minlen,true);
		$criteria->compare('field_maxlen',$this->field_maxlen,true);
		$criteria->compare('field_novalue',$this->field_novalue,true);
		$criteria->compare('field_default_value',$this->field_default_value,true);
		$criteria->compare('field_validation',$this->field_validation,true);
		$criteria->compare('field_required',$this->field_required);
		$criteria->compare('field_show_on_reg',$this->field_show_on_reg);
		$criteria->compare('field_hide',$this->field_hide);
		$criteria->compare('field_no_view',$this->field_no_view);
		$criteria->compare('field_active',$this->field_active);
		$criteria->compare('field_order',$this->field_order);
		$criteria->compare('field_show_profile',$this->field_show_profile);
		$criteria->compare('field_show_on_vt',$this->field_show_on_vt);
		$criteria->compare('field_show_novalue',$this->field_show_novalue);
		$criteria->compare('field_show_on_pm',$this->field_show_on_pm);
		$criteria->compare('field_show_on_ml',$this->field_show_on_ml);
		$criteria->compare('field_is_contact',$this->field_is_contact);
		$criteria->compare('field_contact_desc',$this->field_contact_desc,true);
		$criteria->compare('field_contact_url',$this->field_contact_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbProfileFields the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
