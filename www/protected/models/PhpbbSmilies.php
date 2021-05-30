<?php

/**
 * This is the model class for table "phpbb_smilies".
 *
 * The followings are the available columns in table 'phpbb_smilies':
 * @property integer $smiley_id
 * @property string $code
 * @property string $emotion
 * @property string $smiley_url
 * @property integer $smiley_width
 * @property integer $smiley_height
 * @property integer $smiley_order
 * @property integer $display_on_posting
 */
class PhpbbSmilies extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_smilies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('smiley_width, smiley_height, smiley_order, display_on_posting', 'numerical', 'integerOnly'=>true),
			array('code, smiley_url', 'length', 'max'=>50),
			array('emotion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('smiley_id, code, emotion, smiley_url, smiley_width, smiley_height, smiley_order, display_on_posting', 'safe', 'on'=>'search'),
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
			'smiley_id' => 'Smiley',
			'code' => 'Code',
			'emotion' => 'Emotion',
			'smiley_url' => 'Smiley Url',
			'smiley_width' => 'Smiley Width',
			'smiley_height' => 'Smiley Height',
			'smiley_order' => 'Smiley Order',
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

		$criteria->compare('smiley_id',$this->smiley_id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('emotion',$this->emotion,true);
		$criteria->compare('smiley_url',$this->smiley_url,true);
		$criteria->compare('smiley_width',$this->smiley_width);
		$criteria->compare('smiley_height',$this->smiley_height);
		$criteria->compare('smiley_order',$this->smiley_order);
		$criteria->compare('display_on_posting',$this->display_on_posting);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbSmilies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
