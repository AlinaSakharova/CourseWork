<?php

/**
 * This is the model class for table "phpbb_search_results".
 *
 * The followings are the available columns in table 'phpbb_search_results':
 * @property string $search_key
 * @property string $search_time
 * @property string $search_keywords
 * @property string $search_authors
 */
class PhpbbSearchResults extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_search_results';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('search_keywords, search_authors', 'required'),
			array('search_key', 'length', 'max'=>32),
			array('search_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('search_key, search_time, search_keywords, search_authors', 'safe', 'on'=>'search'),
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
			'search_key' => 'Search Key',
			'search_time' => 'Search Time',
			'search_keywords' => 'Search Keywords',
			'search_authors' => 'Search Authors',
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

		$criteria->compare('search_key',$this->search_key,true);
		$criteria->compare('search_time',$this->search_time,true);
		$criteria->compare('search_keywords',$this->search_keywords,true);
		$criteria->compare('search_authors',$this->search_authors,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbSearchResults the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
