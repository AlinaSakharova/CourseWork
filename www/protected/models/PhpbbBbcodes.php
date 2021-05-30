<?php

/**
 * This is the model class for table "phpbb_bbcodes".
 *
 * The followings are the available columns in table 'phpbb_bbcodes':
 * @property integer $bbcode_id
 * @property string $bbcode_tag
 * @property string $bbcode_helpline
 * @property integer $display_on_posting
 * @property string $bbcode_match
 * @property string $bbcode_tpl
 * @property string $first_pass_match
 * @property string $first_pass_replace
 * @property string $second_pass_match
 * @property string $second_pass_replace
 */
class PhpbbBbcodes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_bbcodes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace', 'required'),
			array('bbcode_id, display_on_posting', 'numerical', 'integerOnly'=>true),
			array('bbcode_tag', 'length', 'max'=>16),
			array('bbcode_helpline', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bbcode_id, bbcode_tag, bbcode_helpline, display_on_posting, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace', 'safe', 'on'=>'search'),
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
			'bbcode_id' => 'Bbcode',
			'bbcode_tag' => 'Bbcode Tag',
			'bbcode_helpline' => 'Bbcode Helpline',
			'display_on_posting' => 'Display On Posting',
			'bbcode_match' => 'Bbcode Match',
			'bbcode_tpl' => 'Bbcode Tpl',
			'first_pass_match' => 'First Pass Match',
			'first_pass_replace' => 'First Pass Replace',
			'second_pass_match' => 'Second Pass Match',
			'second_pass_replace' => 'Second Pass Replace',
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

		$criteria->compare('bbcode_id',$this->bbcode_id);
		$criteria->compare('bbcode_tag',$this->bbcode_tag,true);
		$criteria->compare('bbcode_helpline',$this->bbcode_helpline,true);
		$criteria->compare('display_on_posting',$this->display_on_posting);
		$criteria->compare('bbcode_match',$this->bbcode_match,true);
		$criteria->compare('bbcode_tpl',$this->bbcode_tpl,true);
		$criteria->compare('first_pass_match',$this->first_pass_match,true);
		$criteria->compare('first_pass_replace',$this->first_pass_replace,true);
		$criteria->compare('second_pass_match',$this->second_pass_match,true);
		$criteria->compare('second_pass_replace',$this->second_pass_replace,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbBbcodes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
