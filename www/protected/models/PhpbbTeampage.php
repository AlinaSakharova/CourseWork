<?php

/**
 * This is the model class for table "phpbb_teampage".
 *
 * The followings are the available columns in table 'phpbb_teampage':
 * @property integer $teampage_id
 * @property integer $group_id
 * @property string $teampage_name
 * @property integer $teampage_position
 * @property integer $teampage_parent
 */
class PhpbbTeampage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_teampage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, teampage_position, teampage_parent', 'numerical', 'integerOnly'=>true),
			array('teampage_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('teampage_id, group_id, teampage_name, teampage_position, teampage_parent', 'safe', 'on'=>'search'),
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
			'teampage_id' => 'Teampage',
			'group_id' => 'Group',
			'teampage_name' => 'Teampage Name',
			'teampage_position' => 'Teampage Position',
			'teampage_parent' => 'Teampage Parent',
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

		$criteria->compare('teampage_id',$this->teampage_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('teampage_name',$this->teampage_name,true);
		$criteria->compare('teampage_position',$this->teampage_position);
		$criteria->compare('teampage_parent',$this->teampage_parent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbTeampage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
