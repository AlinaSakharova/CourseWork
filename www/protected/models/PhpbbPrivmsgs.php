<?php

/**
 * This is the model class for table "phpbb_privmsgs".
 *
 * The followings are the available columns in table 'phpbb_privmsgs':
 * @property integer $msg_id
 * @property integer $root_level
 * @property integer $author_id
 * @property integer $icon_id
 * @property string $author_ip
 * @property string $message_time
 * @property integer $enable_bbcode
 * @property integer $enable_smilies
 * @property integer $enable_magic_url
 * @property integer $enable_sig
 * @property string $message_subject
 * @property string $message_text
 * @property string $message_edit_reason
 * @property integer $message_edit_user
 * @property integer $message_attachment
 * @property string $bbcode_bitfield
 * @property string $bbcode_uid
 * @property string $message_edit_time
 * @property integer $message_edit_count
 * @property string $to_address
 * @property string $bcc_address
 * @property integer $message_reported
 */
class PhpbbPrivmsgs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phpbb_privmsgs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('message_text, to_address, bcc_address', 'required'),
			array('root_level, author_id, icon_id, enable_bbcode, enable_smilies, enable_magic_url, enable_sig, message_edit_user, message_attachment, message_edit_count, message_reported', 'numerical', 'integerOnly'=>true),
			array('author_ip', 'length', 'max'=>40),
			array('message_time, message_edit_time', 'length', 'max'=>11),
			array('message_subject, message_edit_reason, bbcode_bitfield', 'length', 'max'=>255),
			array('bbcode_uid', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('msg_id, root_level, author_id, icon_id, author_ip, message_time, enable_bbcode, enable_smilies, enable_magic_url, enable_sig, message_subject, message_text, message_edit_reason, message_edit_user, message_attachment, bbcode_bitfield, bbcode_uid, message_edit_time, message_edit_count, to_address, bcc_address, message_reported', 'safe', 'on'=>'search'),
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
			'msg_id' => 'Msg',
			'root_level' => 'Root Level',
			'author_id' => 'Author',
			'icon_id' => 'Icon',
			'author_ip' => 'Author Ip',
			'message_time' => 'Message Time',
			'enable_bbcode' => 'Enable Bbcode',
			'enable_smilies' => 'Enable Smilies',
			'enable_magic_url' => 'Enable Magic Url',
			'enable_sig' => 'Enable Sig',
			'message_subject' => 'Message Subject',
			'message_text' => 'Message Text',
			'message_edit_reason' => 'Message Edit Reason',
			'message_edit_user' => 'Message Edit User',
			'message_attachment' => 'Message Attachment',
			'bbcode_bitfield' => 'Bbcode Bitfield',
			'bbcode_uid' => 'Bbcode Uid',
			'message_edit_time' => 'Message Edit Time',
			'message_edit_count' => 'Message Edit Count',
			'to_address' => 'To Address',
			'bcc_address' => 'Bcc Address',
			'message_reported' => 'Message Reported',
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

		$criteria->compare('msg_id',$this->msg_id);
		$criteria->compare('root_level',$this->root_level);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('icon_id',$this->icon_id);
		$criteria->compare('author_ip',$this->author_ip,true);
		$criteria->compare('message_time',$this->message_time,true);
		$criteria->compare('enable_bbcode',$this->enable_bbcode);
		$criteria->compare('enable_smilies',$this->enable_smilies);
		$criteria->compare('enable_magic_url',$this->enable_magic_url);
		$criteria->compare('enable_sig',$this->enable_sig);
		$criteria->compare('message_subject',$this->message_subject,true);
		$criteria->compare('message_text',$this->message_text,true);
		$criteria->compare('message_edit_reason',$this->message_edit_reason,true);
		$criteria->compare('message_edit_user',$this->message_edit_user);
		$criteria->compare('message_attachment',$this->message_attachment);
		$criteria->compare('bbcode_bitfield',$this->bbcode_bitfield,true);
		$criteria->compare('bbcode_uid',$this->bbcode_uid,true);
		$criteria->compare('message_edit_time',$this->message_edit_time,true);
		$criteria->compare('message_edit_count',$this->message_edit_count);
		$criteria->compare('to_address',$this->to_address,true);
		$criteria->compare('bcc_address',$this->bcc_address,true);
		$criteria->compare('message_reported',$this->message_reported);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhpbbPrivmsgs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
