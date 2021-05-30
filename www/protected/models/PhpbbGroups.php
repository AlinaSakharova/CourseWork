<?php

/**
 * This is the model class for table "phpbb_groups".
 *
 * The followings are the available columns in table 'phpbb_groups':
 * @property integer $group_id
 * @property integer $group_type
 * @property integer $group_founder_manage
 * @property integer $group_skip_auth
 * @property string $group_name
 * @property string $group_desc
 * @property string $group_desc_bitfield
 * @property string $group_desc_options
 * @property string $group_desc_uid
 * @property integer $group_display
 * @property string $group_avatar
 * @property string $group_avatar_type
 * @property integer $group_avatar_width
 * @property integer $group_avatar_height
 * @property integer $group_rank
 * @property string $group_colour
 * @property integer $group_sig_chars
 * @property integer $group_receive_pm
 * @property integer $group_message_limit
 * @property integer $group_legend
 * @property integer $group_max_recipients
 */
class PhpbbGroups extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_desc', 'required'),
			array('group_type, group_founder_manage, group_skip_auth, group_display, group_avatar_width, group_avatar_height, group_rank, group_sig_chars, group_receive_pm, group_message_limit, group_legend, group_max_recipients', 'numerical', 'integerOnly'=>true),
			array('group_name, group_desc_bitfield, group_avatar, group_avatar_type', 'length', 'max'=>255),
			array('group_desc_options', 'length', 'max'=>11),
			array('group_desc_uid', 'length', 'max'=>8),
			array('group_colour', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('group_id, group_type, group_founder_manage, group_skip_auth, group_name, group_desc, group_desc_bitfield, group_desc_options, group_desc_uid, group_display, group_avatar, group_avatar_type, group_avatar_width, group_avatar_height, group_rank, group_colour, group_sig_chars, group_receive_pm, group_message_limit, group_legend, group_max_recipients', 'safe', 'on'=>'search'),
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
			'group_id' => 'Group',
			'group_type' => 'Group Type',
			'group_founder_manage' => 'Group Founder Manage',
			'group_skip_auth' => 'Group Skip Auth',
			'group_name' => 'Group Name',
			'group_desc' => 'Group Desc',
			'group_desc_bitfield' => 'Group Desc Bitfield',
			'group_desc_options' => 'Group Desc Options',
			'group_desc_uid' => 'Group Desc Uid',
			'group_display' => 'Group Display',
			'group_avatar' => 'Group Avatar',
			'group_avatar_type' => 'Group Avatar Type',
			'group_avatar_width' => 'Group Avatar Width',
			'group_avatar_height' => 'Group Avatar Height',
			'group_rank' => 'Group Rank',
			'group_colour' => 'Group Colour',
			'group_sig_chars' => 'Group Sig Chars',
			'group_receive_pm' => 'Group Receive Pm',
			'group_message_limit' => 'Group Message Limit',
			'group_legend' => 'Group Legend',
			'group_max_recipients' => 'Group Max Recipients',
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

		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('group_type',$this->group_type);
		$criteria->compare('group_founder_manage',$this->group_founder_manage);
		$criteria->compare('group_skip_auth',$this->group_skip_auth);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('group_desc',$this->group_desc,true);
		$criteria->compare('group_desc_bitfield',$this->group_desc_bitfield,true);
		$criteria->compare('group_desc_options',$this->group_desc_options,true);
		$criteria->compare('group_desc_uid',$this->group_desc_uid,true);
		$criteria->compare('group_display',$this->group_display);
		$criteria->compare('group_avatar',$this->group_avatar,true);
		$criteria->compare('group_avatar_type',$this->group_avatar_type,true);
		$criteria->compare('group_avatar_width',$this->group_avatar_width);
		$criteria->compare('group_avatar_height',$this->group_avatar_height);
		$criteria->compare('group_rank',$this->group_rank);
		$criteria->compare('group_colour',$this->group_colour,true);
		$criteria->compare('group_sig_chars',$this->group_sig_chars);
		$criteria->compare('group_receive_pm',$this->group_receive_pm);
		$criteria->compare('group_message_limit',$this->group_message_limit);
		$criteria->compare('group_legend',$this->group_legend);
		$criteria->compare('group_max_recipients',$this->group_max_recipients);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbGroups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
