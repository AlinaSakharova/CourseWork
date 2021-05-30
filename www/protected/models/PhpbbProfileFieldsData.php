<?php

/**
 * This is the model class for table "phpbb_profile_fields_data".
 *
 * The followings are the available columns in table 'phpbb_profile_fields_data':
 * @property integer $user_id
 * @property string $pf_phpbb_interests
 * @property string $pf_phpbb_occupation
 * @property string $pf_phpbb_facebook
 * @property string $pf_phpbb_googleplus
 * @property string $pf_phpbb_icq
 * @property string $pf_phpbb_location
 * @property string $pf_phpbb_skype
 * @property string $pf_phpbb_twitter
 * @property string $pf_phpbb_website
 * @property string $pf_phpbb_wlm
 * @property string $pf_phpbb_yahoo
 * @property string $pf_phpbb_youtube
 * @property string $pf_phpbb_aol
 */
class PhpbbProfileFieldsData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_profile_fields_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pf_phpbb_interests, pf_phpbb_occupation', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('pf_phpbb_facebook, pf_phpbb_googleplus, pf_phpbb_icq, pf_phpbb_location, pf_phpbb_skype, pf_phpbb_twitter, pf_phpbb_website, pf_phpbb_wlm, pf_phpbb_yahoo, pf_phpbb_youtube, pf_phpbb_aol', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, pf_phpbb_interests, pf_phpbb_occupation, pf_phpbb_facebook, pf_phpbb_googleplus, pf_phpbb_icq, pf_phpbb_location, pf_phpbb_skype, pf_phpbb_twitter, pf_phpbb_website, pf_phpbb_wlm, pf_phpbb_yahoo, pf_phpbb_youtube, pf_phpbb_aol', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'pf_phpbb_interests' => 'Pf Phpbb Interests',
			'pf_phpbb_occupation' => 'Pf Phpbb Occupation',
			'pf_phpbb_facebook' => 'Pf Phpbb Facebook',
			'pf_phpbb_googleplus' => 'Pf Phpbb Googleplus',
			'pf_phpbb_icq' => 'Pf Phpbb Icq',
			'pf_phpbb_location' => 'Pf Phpbb Location',
			'pf_phpbb_skype' => 'Pf Phpbb Skype',
			'pf_phpbb_twitter' => 'Pf Phpbb Twitter',
			'pf_phpbb_website' => 'Pf Phpbb Website',
			'pf_phpbb_wlm' => 'Pf Phpbb Wlm',
			'pf_phpbb_yahoo' => 'Pf Phpbb Yahoo',
			'pf_phpbb_youtube' => 'Pf Phpbb Youtube',
			'pf_phpbb_aol' => 'Pf Phpbb Aol',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('pf_phpbb_interests',$this->pf_phpbb_interests,true);
		$criteria->compare('pf_phpbb_occupation',$this->pf_phpbb_occupation,true);
		$criteria->compare('pf_phpbb_facebook',$this->pf_phpbb_facebook,true);
		$criteria->compare('pf_phpbb_googleplus',$this->pf_phpbb_googleplus,true);
		$criteria->compare('pf_phpbb_icq',$this->pf_phpbb_icq,true);
		$criteria->compare('pf_phpbb_location',$this->pf_phpbb_location,true);
		$criteria->compare('pf_phpbb_skype',$this->pf_phpbb_skype,true);
		$criteria->compare('pf_phpbb_twitter',$this->pf_phpbb_twitter,true);
		$criteria->compare('pf_phpbb_website',$this->pf_phpbb_website,true);
		$criteria->compare('pf_phpbb_wlm',$this->pf_phpbb_wlm,true);
		$criteria->compare('pf_phpbb_yahoo',$this->pf_phpbb_yahoo,true);
		$criteria->compare('pf_phpbb_youtube',$this->pf_phpbb_youtube,true);
		$criteria->compare('pf_phpbb_aol',$this->pf_phpbb_aol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbProfileFieldsData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
