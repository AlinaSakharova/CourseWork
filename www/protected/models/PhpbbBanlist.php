<?php

/**
 * This is the model class for table "phpbb_banlist".
 *
 * The followings are the available columns in table 'phpbb_banlist':
 * @property integer $ban_id
 * @property integer $ban_userid
 * @property string $ban_ip
 * @property string $ban_email
 * @property string $ban_start
 * @property string $ban_end
 * @property integer $ban_exclude
 * @property string $ban_reason
 * @property string $ban_give_reason
 */
class PhpbbBanlist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_banlist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ban_userid, ban_exclude', 'numerical', 'integerOnly'=>true),
			array('ban_ip', 'length', 'max'=>40),
			array('ban_email', 'length', 'max'=>100),
			array('ban_start, ban_end', 'length', 'max'=>11),
			array('ban_reason, ban_give_reason', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ban_id, ban_userid, ban_ip, ban_email, ban_start, ban_end, ban_exclude, ban_reason, ban_give_reason', 'safe', 'on'=>'search'),
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
			'ban_id' => 'Ban',
			'ban_userid' => 'Ban Userid',
			'ban_ip' => 'Ban Ip',
			'ban_email' => 'Ban Email',
			'ban_start' => 'Ban Start',
			'ban_end' => 'Ban End',
			'ban_exclude' => 'Ban Exclude',
			'ban_reason' => 'Ban Reason',
			'ban_give_reason' => 'Ban Give Reason',
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

		$criteria->compare('ban_id',$this->ban_id);
		$criteria->compare('ban_userid',$this->ban_userid);
		$criteria->compare('ban_ip',$this->ban_ip,true);
		$criteria->compare('ban_email',$this->ban_email,true);
		$criteria->compare('ban_start',$this->ban_start,true);
		$criteria->compare('ban_end',$this->ban_end,true);
		$criteria->compare('ban_exclude',$this->ban_exclude);
		$criteria->compare('ban_reason',$this->ban_reason,true);
		$criteria->compare('ban_give_reason',$this->ban_give_reason,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbBanlist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
