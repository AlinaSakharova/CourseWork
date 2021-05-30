<?php

/**
 * This is the model class for table "phpbb_icons".
 *
 * The followings are the available columns in table 'phpbb_icons':
 * @property integer $icons_id
 * @property string $icons_url
 * @property integer $icons_width
 * @property integer $icons_height
 * @property integer $icons_order
 * @property integer $display_on_posting
 */
class PhpbbIcons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_icons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('icons_width, icons_height, icons_order, display_on_posting', 'numerical', 'integerOnly'=>true),
			array('icons_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('icons_id, icons_url, icons_width, icons_height, icons_order, display_on_posting', 'safe', 'on'=>'search'),
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
			'icons_id' => 'Icons',
			'icons_url' => 'Icons Url',
			'icons_width' => 'Icons Width',
			'icons_height' => 'Icons Height',
			'icons_order' => 'Icons Order',
			'display_on_posting' => 'Display On Posting',
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

		$criteria->compare('icons_id',$this->icons_id);
		$criteria->compare('icons_url',$this->icons_url,true);
		$criteria->compare('icons_width',$this->icons_width);
		$criteria->compare('icons_height',$this->icons_height);
		$criteria->compare('icons_order',$this->icons_order);
		$criteria->compare('display_on_posting',$this->display_on_posting);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbIcons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
