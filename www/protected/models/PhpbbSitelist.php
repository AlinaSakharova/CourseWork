<?php

/**
 * This is the model class for table "phpbb_sitelist".
 *
 * The followings are the available columns in table 'phpbb_sitelist':
 * @property integer $site_id
 * @property string $site_ip
 * @property string $site_hostname
 * @property integer $ip_exclude
 */
class PhpbbSitelist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_sitelist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ip_exclude', 'numerical', 'integerOnly'=>true),
			array('site_ip', 'length', 'max'=>40),
			array('site_hostname', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('site_id, site_ip, site_hostname, ip_exclude', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'site_ip' => 'Site Ip',
			'site_hostname' => 'Site Hostname',
			'ip_exclude' => 'Ip Exclude',
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

		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('site_ip',$this->site_ip,true);
		$criteria->compare('site_hostname',$this->site_hostname,true);
		$criteria->compare('ip_exclude',$this->ip_exclude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbSitelist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
