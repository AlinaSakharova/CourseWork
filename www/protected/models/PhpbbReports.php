<?php

/**
 * This is the model class for table "phpbb_reports".
 *
 * The followings are the available columns in table 'phpbb_reports':
 * @property integer $report_id
 * @property integer $reason_id
 * @property integer $post_id
 * @property integer $user_id
 * @property integer $user_notify
 * @property integer $report_closed
 * @property string $report_time
 * @property string $report_text
 * @property integer $pm_id
 * @property integer $reported_post_enable_bbcode
 * @property integer $reported_post_enable_smilies
 * @property integer $reported_post_enable_magic_url
 * @property string $reported_post_text
 * @property string $reported_post_uid
 * @property string $reported_post_bitfield
 */
class PhpbbReports extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_reports';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_text, reported_post_text', 'required'),
			array('reason_id, post_id, user_id, user_notify, report_closed, pm_id, reported_post_enable_bbcode, reported_post_enable_smilies, reported_post_enable_magic_url', 'numerical', 'integerOnly'=>true),
			array('report_time', 'length', 'max'=>11),
			array('reported_post_uid', 'length', 'max'=>8),
			array('reported_post_bitfield', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('report_id, reason_id, post_id, user_id, user_notify, report_closed, report_time, report_text, pm_id, reported_post_enable_bbcode, reported_post_enable_smilies, reported_post_enable_magic_url, reported_post_text, reported_post_uid, reported_post_bitfield', 'safe', 'on'=>'search'),
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
			'report_id' => 'Report',
			'reason_id' => 'Reason',
			'post_id' => 'Post',
			'user_id' => 'User',
			'user_notify' => 'User Notify',
			'report_closed' => 'Report Closed',
			'report_time' => 'Report Time',
			'report_text' => 'Report Text',
			'pm_id' => 'Pm',
			'reported_post_enable_bbcode' => 'Reported Post Enable Bbcode',
			'reported_post_enable_smilies' => 'Reported Post Enable Smilies',
			'reported_post_enable_magic_url' => 'Reported Post Enable Magic Url',
			'reported_post_text' => 'Reported Post Text',
			'reported_post_uid' => 'Reported Post Uid',
			'reported_post_bitfield' => 'Reported Post Bitfield',
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

		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('reason_id',$this->reason_id);
		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_notify',$this->user_notify);
		$criteria->compare('report_closed',$this->report_closed);
		$criteria->compare('report_time',$this->report_time,true);
		$criteria->compare('report_text',$this->report_text,true);
		$criteria->compare('pm_id',$this->pm_id);
		$criteria->compare('reported_post_enable_bbcode',$this->reported_post_enable_bbcode);
		$criteria->compare('reported_post_enable_smilies',$this->reported_post_enable_smilies);
		$criteria->compare('reported_post_enable_magic_url',$this->reported_post_enable_magic_url);
		$criteria->compare('reported_post_text',$this->reported_post_text,true);
		$criteria->compare('reported_post_uid',$this->reported_post_uid,true);
		$criteria->compare('reported_post_bitfield',$this->reported_post_bitfield,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbReports the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
